<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Article;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use App\Repository\ArticleRepository;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\JsonResponse;

class BeatshareController extends AbstractController
{
    /**
    * @Route("/", name="beatshare")
    */
    public function index(ArticleRepository $repo)
    {
        $articles = $repo->findAll();
       

        return $this->render('beatshare/index.html.twig', [
            'articles' => $articles,
            'beatAdress' => 'http://127.0.0.1:8000/beat/'
        ]);
    }


    /**
    * @Route("/add", name="add")
    */
    
    public function add(Request $request, ObjectManager $manager)
    {
        $beat = new Article();
        $user = $this->getUser()->getUsername();

        $form = $this->createFormBuilder($beat)
                     ->add('title')
                     ->add('img', FileType::class)
                     ->add('src', FileType::class)
                     ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $beatFile = $form['src']->getData();
            $beatImg = $form['img']->getData();
            $beat->setArtiste($user);

            if($beatFile)
            {
                $originalFilename = pathinfo($beatFile->getClientOriginalName(), PATHINFO_FILENAME);

                $newFilename = $beat->getTitle() . '.mp3';

                try {
                    $beatFile->move(
                        $this->getParameter('audio_directory'),
                        $newFilename
                    );
                } catch(FileException $e) {

                }

                $beat->setSrc($newFilename);
            }

            if($beatImg)
            {
                $originalImgname = pathinfo($beatImg->getClientOriginalName(), PATHINFO_FILENAME);

                $newImgname = $beat->getTitle() . '.jpg';

                try {
                    $beatImg->move(
                        $this->getParameter('images_directory'),
                        $newImgname
                    );
                } catch(FileException $e) {

                }

                $beat->setImg($newImgname);
            }

            $manager->persist($beat);

            $manager->flush();

            return $this->redirectToRoute('beatshare');
        }

        

        return $this->render('beatshare/add.html.twig', [
            'BeatForm' => $form->createView()
        ]);
    }

    /**
    * @Route("/Profil", name="profile")
    */
    
    public function profil(ArticleRepository $repo) {

        $articles = $repo->findAll();

        $user = $this->getUser();
        
        $username = $this->getUser()->getUsername();

        $email = $this->getUser()->getEmail();

        return $this->render('beatshare/profil.html.twig', [
            'username' => $username,
            'email' => $email,
            'articles' => $articles,
        ]);
    }

    /**
    * @Route("/remove-beat", name="remove-beat")
    */

    public function removeBeat(Request $request, ArticleRepository $repo, ObjectManager $manager) {
        
        $removed = false;

        if($content = $request->getContent()) {

            $parametersAsArray = json_decode($content, true);
           
            $id = $parametersAsArray["id"];

            $deleteBeat = $repo->find($id);

            $manager->remove($deleteBeat);
            $manager->flush();  

            $removed = TRUE;

        }

        return new JsonResponse(['result' => $removed]);   
    }


}



// public function edit_profile(User $user, ObjectManager $manager, UserPasswordEncoderInterface $encoder, Request $request, Filesystem $filesystem/, ValidatorInterface $validator/) {
//     $usernameA = $user->getUsername();
//     $userB = $this->getUser();
//     $usernameB = $userB ? $userB->getUsername() : null;
//     $bIsSameUser = $usernameA === $usernameB;
//     if($bIsSameUser) {

//         $currentUsername = $user->getUsername();
//         $dir = 'uploads';

//         $form = $this->createForm(SettingsProfileType::class, $user);

//         $form->handleRequest($request);

//         if($form->isSubmitted()){
//             if(!pregmatch('/^[a-zA-Z0-9]+[.-]?[a-zA-Z0-9]+$/', $user->getUsername())){
//                 $form->get('username')->addError(new FormError('The string '.$user->getUsername().' contains an illegal character: it can only contain letters, numbers or "_ - ." .'));
//             }
//         }

// if($form->isSubmitted() && $form->isValid()) {
//             $newUsername = $user->getUsername();

//             if($currentUsername !== $newUsername) {
//                 try
//                 {
//                     $filesystem->rename($dir.'/'.$currentUsername.'', $dir.'/'.$newUsername.'');
//                 }
//                 catch (\Exception $e)
//                 {
//                     // TODO: handle error
//                     echo 'E';
//                 }
//             }

//             if($user->getNewPassword() !== NULL) {
//                 $hash = $encoder->encodePassword($user, $user->getNewPassword());
//                 $user->setPassword($hash);
//             }

//             $manager->persist($user);
//             $manager->flush();

//             // return $this->redirectToRoute('user_profile', ['username'=>$newUsername]);
//             return $this->redirect($this->generateUrl('user_edit', ['username'=>$newUsername]));
//         }else{
//             $manager->refresh($user);
//         }


//         return $this->render('user/edit.html.twig', [
//             'formEdit' => $form->createView(),
//             'user' => $user,
//             'is_user' => true
//         ]);
//     }