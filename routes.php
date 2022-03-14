<?php 

if(isset($_GET['p'])){
    $pagina = $_GET['p'];

    if($pagina == "home")
        include('content/pages/home.php');
    else if($pagina == "empresa")
        include('content/pages/empresa.php');
    else if($pagina == "galeria")
        include('content/pages/galeria.php');
    else if($pagina == "blog")
        include('content/pages/blog.php');
    else if($pagina == "noticias")
        include('content/pages/noticias.php');
    else if($pagina == "contacto")
        include('content/pages/contacto.php');
    else if($pagina == "dadosProduto")
        include('content/pages/dadosProduto.php');
    else if($pagina == "editarProduto")
        include('db/update.php');
    else if($pagina == "eliminarProduto")
        include('db/delete.php');

    else if($pagina == "login")
        include('content/pages/login.php');
    else if($pagina == "registo")
        include('content/pages/registo.php');
    else if($pagina == "logout")
        include('content/pages/logout.php');

    else
        include('content/pages/404.php');
}else{
    include('content/pages/home.php');
}