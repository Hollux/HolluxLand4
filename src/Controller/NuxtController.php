<?php

namespace App\Controller;

use App\Repository\SeriesTestRepository;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\View\View as View;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\Response as Response;

/**
 * NuxtController controller.
 * @package App\Controller
 */
class NuxtController extends FOSRestController
{

    public function __construct(SeriesTestRepository $seriesTestRepository){

        $this->SeriesTestRepository = $seriesTestRepository;
    }

    /**
     * @Rest\Get("/vuetest")
     * @return View
     */
    public function vuetest() :View {

        $array = $this->SeriesTestRepository->findAll();

        /*$array = ['truc1', "truc2", "truc3"];*/

        return View::create($array, Response::HTTP_OK);

    }

    /**
     * Creates an Article resource
     * @Rest\Post("/articles")
     * @param Request $request
     * @return View
     */
    public function postArticle(Request $request): View
    {
        $article = "tata";

        return View::create($article, Response::HTTP_CREATED);
    }

    /**
     * Retrieves an Article resource
     * @Rest\Get("/articles/{articleId}")
     */
    public function getArticle(int $articleId): View
    {
        $article = $articleId;

        return View::create($article, Response::HTTP_OK);
    }

    /**
     * Creates an AnabelAnalyse resource
     * @Rest\Post("/post_anabel_analyse/")
     * @param Request $request
     * @return View
     */
    public function postAnabelAnalyse (Request $request) :View
    {
        $analyse = "truc";

        return View::create($analyse,Response::HTTP_CREATED);
    }

}