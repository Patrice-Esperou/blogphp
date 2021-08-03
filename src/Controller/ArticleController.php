<?php

namespace App\Controller;

use App\Model\Factory\ModelFactory;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

/**
 * Class ArticleController
 * Manages the Homepage
 * @package App\Controller
 */
class ArticleController extends MainController
{
    /**
     * Renders the View Home
     * @return string
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    public function defaultMethod()
    {
        $allArticles = ModelFactory::getModel("Article")->listData();
       

        return $this->twig->render("articles.twig", ["allArticles" => $allArticles]);
    }

       /**
     * Renders the View Home
     * @return string
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    public function readMethod()
    {
        $article = ModelFactory::getModel("Article")->readData($_GET["id"]);
       

        return $this->twig->render("article.twig", ["article" => $article]);
    }
}