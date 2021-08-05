<?php

namespace App\Controller;

use App\Model\Factory\ModelFactory;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

/**
 * Class BlogsController
 * Manages the Homepage
 * @package App\Controller
 */
class BlogsController extends MainController
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
        $allBlogs = ModelFactory::getModel("Blogs")->listData();
       

        return $this->twig->render("blogs.twig", ["allBlogs" => $allBlogs]);
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
        $blogs = ModelFactory::getModel("Blogs")->readData($_GET["id"]);
       

        return $this->twig->render("BlogArticleUnique.twig", ["blogs" => $blogs]);
    }
}