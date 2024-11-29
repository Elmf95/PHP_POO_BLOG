<?php
 
use Models\Autoloader;
ini_set("date.timezone","europe/paris");
require_once "./utils/Defines.php";
require_once "./models/Autoloader.php";
 
 
Autoloader::register();
use Models\BDD;
use Models\Article;
use Models\Router;
use Controllers\ArticlesController;
use Controllers\ErrorsController;
use Controllers\BlogController;
 
 
$article = new Article(BDD::connect());
$article_test=[
    "title"=>"test",
    "content"=>"contenu de test",
    "author"=>"ebdevoo"
 
];
/*
$article->add(
    $article_test["title"],
    $article_test["content"],
    $article_test["author"],
);
*/
 
/*var_dump($article::getList());
echo"<hr/>";
var_dump($article::getById(1));
 
 
$article_updated=[
    "id"=>1,
    "title"=>"test modifié",
    "content"=>"contenu modifié",
    "author"=>"webdevooUpdates",
    "created_date"=>new Datetime("now")
];
 
$article::update(
    $article_updated["id"],
    $article_updated["title"],
    $article_updated["content"],
    $article_updated["author"],
    $article_updated["created_date"]->sub(\DateInterval::createFromDateString("1 hour"))->format("Y/m/d H:i:s"),
   
);
 
*/
 
$router = new Router();
 
$uri = $_SERVER["REQUEST_URI"];
$idParam =(int) preg_replace("/[\D]+/","" ,$uri);
 
switch (true) {
    case ($uri === "/"):
      $router->get("/", BlogController::index());
      break;
    case (str_contains($uri,"/articles")):
        if($idParam && !str_contains($uri,"/update")){
            $router->get("/articles/$idParam", ArticlesController::getById($idParam));
            exit;
        }

        else if($idParam && str_contains($uri,"/update")){
            $router->get("/articles/update/$idParam", ArticlesController::update($idParam));
            exit;
        }

        else if(!$idParam && str_contains($uri,"/update")){
            $router->get("/articles/update/", ArticlesController::updateArticle());
            exit;
        }
        
        else if(!$idParam && str_contains($uri,"/delete")){
            $router->get("/articles/delete/", ArticlesController::deleteArticle());
            exit;
        }
 
 
      $router->get("/articles", ArticlesController::getList());
      break;
      default:
        ErrorsController::launchError(404);
        break;
  }
 
$router->run();
 