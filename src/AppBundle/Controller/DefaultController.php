<?php

namespace AppBundle\Controller;

//use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('base.html.twig', [
            //'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
            'name' => 'Главная',
            'request' => $request,
            'response' => new Response,
        ]);
    }
	
	/**
     * @Route("/article/{id}/{_format}",
     *         name="article",
	 *		   defaults={"id": 1, "_format"="html"},
	 *		   requirements={"id"="\d+",  "_format" = "html|xml|json" }
	 * )
     */
    public function articleAction($id, $_format)
    {
        
        //return $this->json( array("id" => $id, "val" => 'test') );
        return $this->render('article.'.$_format.'.twig', [
            //'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
            'name' => 'Статьи',
            'article' => ['title' => 'Название статьи', 'content' => 'Содержание статьи',]
        ]);
        
    }
}
