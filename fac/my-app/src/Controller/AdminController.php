<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Author;
use App\Entity\BlogPost;
use App\Form\AuthorFormType;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Bundle\FixturesBundle\Fixture;


class AdminController extends AbstractController
{
    /** @var EntityManagerInterface */
    private $entityManager;

    /** @var \Doctrine\Common\Persistence\ObjectRepository */
    private $authorRepository;

    /** @var \Doctrine\Common\Persistence\ObjectRepository */
    private $blogPostRepository;

    /**
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
        $this->blogPostRepository = $entityManager->getRepository('App:BlogPost');
        $this->authorRepository = $entityManager->getRepository('App:Author');
    }

    /**
     * @Route("/admin", name="admin")
     */
    public function index()
    {
        return $this->render('blog/index.html.twig'
        );
    }

    /**
     * @Route(
     *     path="/admin/sign",
     *     name="sign",
     * )
     */
    public function sign(Request $request, objectManager $manager)

    {
        return $this->render('blog/signIn.html.twig');

    }

    /**
     *
     *
     * @Route(
     *     path="/admin/login",
     *     name="login",
     * )
     */
    public function login(Request $request, objectManager $manager)

    {

        //        if ($this->authorRepository->findOneByUsername("auth0-username") ){
//            // Redirect to dashboard.
//            $this->addFlash('error', 'Unable to create author, author already exists!');
//
//            return $this->redirectToRoute('homepage');
//        }

        return $this->render('blog/login.html.twig');

    }

    /**
     * @Route(
     *     path="/blog",
     *     name="author_login",
     * )
     */
    public function loginAuthor(Request $request, objectManager $manager)

    {
           $author=$this->authorRepository->findOneByUsername($request->get('username'));

        if(!$author)   {
            return $this->render('error/existepasUsername.html.twig');

        }

        if ($author->getPassword()!==$request->get('password')) {
            // Redirect to dashboard.
            return $this->render('error/badPassword.html.twig');
        }
        else{

            $blog=$this->blogPostRepository->findBy(
                array('author' => $author->getId())
            );

            return $this->render('blog/blog.html.twig', array('quantite'=>count($blog),
                'articles' =>$blog,'author'=>$author->getUsername()));


        }


}

/**
 * @Route(
 *     path="/admin/author/create",
 *     name="author_create",
 * )
 */
public function createAuthorAction(Request $request, objectManager $manager)

{
    $author=$this->authorRepository->findOneByUsername($request->get('username'));

    if($author)   {
        return $this->render('error/repeatInscrit.html.twig');

    }

    $author = new Author();
    $author
        ->setPassword($request->get('password'))
        ->setUsername($request->get('username'));
    $manager->persist($author);
//
//        $blogPost = new BlogPost();
//        $blogPost
//            ->setTitle('Your first blog post example')
//            ->setBody('Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.')
//            ->setAuthor($author);
//        $manager->persist($blogPost);
    $manager->flush();
    return $this->render('blog/index.html.twig');


//
//        if ($this->authorRepository->findOneByUsername("auth0-username") ){
//            // Redirect to dashboard.
//            $this->addFlash('error', 'Unable to create author, author already exists!');
//
//            return $this->redirectToRoute('homepage');
//        }
//
//        $author = new Author();
//        $author->setUsername($this->getUser()->getUserName());
//
//        $form = $this->createForm(AuthorFormType::class, $author);
//        $form->handleRequest($request);
//
//        if ($form->isSubmitted() && $form->isValid()) {
//            $this->entityManager->persist($author);
//            $this->entityManager->flush($author);
//
//            $request->getSession()->set('user_is_author', true);
//            $this->addFlash('success', 'Congratulations! You are now an author.');
//
//            return $this->redirectToRoute('homepage');
//        }

//        return $this->render('admin/create_author.html.twig', [
//            'form' => $form->createView()
//        ]);
}
/**
 * @Route(
 *     path="/admin/author/post",
 *     name="post",
 * )
 */
public function post(Request $request, objectManager $manager)

{

    $author=$this->authorRepository->findOneByUsername($request->get('author'));

    $newPost = new BlogPost();
    $newPost
        ->setTitle($request->get('title'))
        ->setAuthor($author)
        ->setBody($request->get('body'));

    $manager->persist($newPost);
    $manager->flush();
//
//        $blogPost = new BlogPost();
//        $blogPost
//            ->setTitle('Your first blog post example')
//            ->setBody('Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.')
//            ->setAuthor($author);
//        $manager->persist($blogPost);

        $blog=$this->blogPostRepository->findBy(
            array('author' =>$author)
        );

        return $this->render('blog/blog.html.twig', array('quantite'=>count($blog),
            'articles' =>$blog,'author'=>$author->getUsername()));

    }
    /**
     * @Route(
     *     path="/admin/author/modifie",
     *     name="modifie",
     * )
     */
    public function modifie(Request $request, objectManager $manager)

    {
        $author=$this->authorRepository->findOneByUsername($request->get('author'));
        $blog=$this->blogPostRepository->find((int)$request->get('artilceID'));
        $id=(string)$request->get('artilceID');
        $title=$blog->getTitle();
        $body=$blog->getBody();
        if($request->get('title'.$id)!==null){
            $title=($request->get('title'.$id));
        }
        if($request->get('body'.$id)!==null){
            $body=($request->get('body'.$id));
        }
        $blog
            ->setTitle($title)
            ->setBody($body);
//        $newPost = new BlogPost();
//        $newPost
//            ->setTitle($request->get('title'))
//            ->setAuthor($author)
//            ->setBody($request->get('body'));
//
        $manager->persist($blog);
        $manager->flush();
//
////        $blogPost = new BlogPost();
////        $blogPost
////            ->setTitle('Your first blog post example')
////            ->setBody('Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.')
////            ->setAuthor($author);
////        $manager->persist($blogPost);

        $blog=$this->blogPostRepository->findBy(
            array('author' =>$author)
        );

        return $this->render('blog/blog.html.twig', array('quantite'=>count($blog),
            'articles' =>$blog,'author'=>$author->getUsername()));

    }
    /**
     * @Route(
     *     path="/admin/author/delete",
     *     name="delete",
     * )
     */
    public function delete(Request $request, objectManager $manager)

    {
        $author=$this->authorRepository->findOneByUsername($request->get('author'));
        $blog=$this->blogPostRepository->find((int)$request->get('artilceID'));
        $manager->remove($blog);
        $manager->flush();

        $blog=$this->blogPostRepository->findBy(
            array('author' =>$author)
        );

        return $this->render('blog/blog.html.twig', array('quantite'=>count($blog),
            'articles' =>$blog,'author'=>$author->getUsername()));

    }



}
