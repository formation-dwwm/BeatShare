<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use App\Entity\Article;
use App\Form\RegistrationType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use App\Repository\ArticleRepository;
use App\Repository\UserRepository;

class SecurityController extends AbstractController
{
    /**
     * @Route("/inscription", name="security_registration")
     */
    public function registration(Request $request, ObjectManager $manager, UserPasswordEncoderInterface $encoder) {

        $user = new User();

        $form = $this->createForm(RegistrationType::class, $user);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $hash = $encoder->encodePassword($user, $user->getPassword());
            $user->setPassword($hash);

            $manager->persist($user);
            $manager->flush();

            return $this->redirectToRoute('security_login');
        }

        return $this->render('security/registration.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
    * @Route("/connexion", name="security_login")
    */

    public function login(AuthenticationUtils $authenticationUtils): Response {

        $error = $authenticationUtils->getLastAuthenticationError();

        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error
        ]);
    }

    /**
    * @Route("/deconnexion", name="security_logout")
    */
    public function logout() {}

    /**
    * @Route("/Edition", name="security_modify")
    */
    public function account_modify(Request $request, ObjectManager $manager, UserPasswordEncoderInterface $encoder, ArticleRepository $repo) {

        $user = $this->getUser();
        
        $lastUsername = $user->getUsername();

        $artistes =  $repo->findBy(['artiste' => $lastUsername]);
    
        $form = $this->createFormBuilder($user)
                        ->add('email')
                        ->add('username')
                        ->add('password', PasswordType::class)
                        ->add('confirm_password', PasswordType::class)
                        ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            
            $user->getUsername();
            $user->getEmail();

            foreach($artistes as $artiste){
                $artiste->setArtiste($user->getUsername());
            }
           
            $hash = $encoder->encodePassword($user, $user->getPassword());
            $user->setPassword($hash);

            $manager->persist($user, $artiste);
            $manager->flush();

            return $this->redirectToRoute('profile');
            
        }

        return $this->render('security/modify.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
    * @Route("/delete-account", name="delete-account")
    */
    public function deleteAccount(UserRepository $repo, ObjectManager $manager) {
        
        $user = $this->getUser();
        
        $userId = $user->getId();

        $deleteUser = $repo->find($userId);

        $manager->remove($deleteUser);
        
        $manager->flush();

        return $this->redirectToRoute('beatshare');
    }
}
