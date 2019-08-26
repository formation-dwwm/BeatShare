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

        $form = $this->createFormBuilder($beat)
                     ->add('title')
                     ->add('src', FileType::class)
                     ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $beatFile = $form['src']->getData();

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

            $manager->persist($beat);

            $manager->flush();

            return $this->redirectToRoute('beatshare');
        }

        

        return $this->render('beatshare/add.html.twig', [
            'BeatForm' => $form->createView()
        ]);
    }
}
