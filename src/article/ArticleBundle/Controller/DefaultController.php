<?php

namespace article\ArticleBundle\Controller;

// cette dependance permet d'attrapper(ecouter) toutes les requetes (http)
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

//dependance du projet
use article\ArticleBundle\Entity\Articles;
use article\ArticleBundle\Form\Type\ArticleType;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ArticleBundle:Default:index.html.twig');
    }


    public function createAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager(); //connexion bdd
        $article = new Articles();

        // creation formulaire
        $form = $this->createForm(ArticleType::class);

        //creation de la vue du formulaire
        $form = $form->createView();

        return $this->render('ArticleBundle:Default:index.html.twig',array(
          "form" => $form
        ));
    }
}
