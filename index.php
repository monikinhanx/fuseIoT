<?php
    $rotas = key($_GET)?key($_GET):"home";

    switch($rotas){
        case "home":
            include "controllers/HomeController.php";
            $controller = new HomeController();
            $controller->acao($rotas);
        break;
        case "email":
            include "controllers/HomeController.php";
            $controller = new HomeController();
            $controller->acao($rotas);
        break;
        case "pagseguro":
            include "controllers/HomeController.php";
            $controller = new HomeController();
            $controller->acao($rotas);
        break;
        case "pagamento":
            include "controllers/HomeController.php";
            $controller = new HomeController();
            $controller->acao($rotas);
        break;
        case "fuseiotacademy":
            include "controllers/AcademyController.php";
            $controller = new AcademyController();
            $controller->acao($rotas);
        break;
        case "teste":
            include "controllers/AcademyController.php";
            $controller = new AcademyController();
            $controller->acao($rotas);
        break;
        case "curso":
            include "controllers/AcademyController.php";
            $controller = new AcademyController();
            $controller->acao($rotas);
        break;
        case "homecurso":
            include "controllers/AcademyController.php";
            $controller = new AcademyController();
            $controller->acao($rotas);
        break;
        case "conceitosbasicos":
            include "controllers/AcademyController.php";
            $controller = new AcademyController();
            $controller->acao($rotas);
        break;
        case "embreve":
            include "controllers/UsuarioController.php";
            $controller = new UsuarioController();
            $controller->acao($rotas);
        break;
        case "embreveteste":
            include "controllers/UsuarioController.php";
            $controller = new UsuarioController();
            $controller->acao($rotas);
        break;
        case "login":
            include "controllers/UsuarioController.php";
            $controller = new UsuarioController();
            $controller->acao($rotas);
        break;
        case "logar":
            include "controllers/UsuarioController.php";
            $controller = new UsuarioController();
            $controller->acao($rotas);
        break;
        case "logout":
            include "controllers/UsuarioController.php";
            $controller = new UsuarioController();
            $controller->acao($rotas);
        break;
        case "alterasenha":
            include "controllers/UsuarioController.php";
            $controller = new UsuarioController();
            $controller->acao($rotas);
        break;
        case "novasenha":
            include "controllers/UsuarioController.php";
            $controller = new UsuarioController();
            $controller->acao($rotas);
        break;
    }
?>