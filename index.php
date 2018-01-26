<?php 
session_start();
require_once("vendor/autoload.php");

use \Slim\Slim;
use \Totclean\Page;
use \Totclean\PageAdmin;
use \Totclean\Model\User;

$app = new Slim();

$app->config('debug', true);

// get para chamar a pagina de vendedor
$app->get('/', function()
{    
    $page = new Page();
    $page->setTpl("index");
});

// get para chamar a pagina de administradores
$app->get('/admin', function()
{    
    User::verifylogin();
    $page = new PageAdmin();
    $page->setTpl("index");
});

// get para chamar a pagina de login
$app->get('/admin/login', function()
{    
    $page = new PageAdmin([

        "header"=>false,
        "footer"=>false

    ]);

    $page->setTpl("login");
});


// post para pegar as informações de login
$app->post('/admin/login', function(){

     User::login($_POST["login"],$_POST["password"]);

    header("location: /Totclean/admin");

    exit;
});

// get para fazer o logout(encerrar uma sessão)
$app->get('/admin/logout', function()
{    
    User::logout();
    
    header("location: /Totclean/admin/login");

    exit;
});

// iten de execução do módulos acima
$app->run();

 ?>