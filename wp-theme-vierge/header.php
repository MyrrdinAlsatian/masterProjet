<!-- Dans le fichier header.php on retorouve 
l'ensemble des éléments communs à toute les pages typiquement le header et le menu par exemple -->
<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Accueil - yourProject</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="Description de yourProject">
    <meta name="keywords" content="yourProject, yourProject">

    <?php

 /*déclaration que ceci est le header et 
        que si il doit y avoir des choses
         qui doivent être inclue dans le header typiquement le css */
    wp_head();

?>
</head>

<body>

    <nav role="navigation" >
        <?php
        // https://developer.wordpress.org/reference/functions/wp_nav_menu/ pour voir toute les options de cette fonction
            wp_nav_menu(array('theme_location' => 'main_menu','menu_class' => 'fs_menu_list','container' => 'nav','container_class' => 'fs_menu_nav'));
            ?>

    </nav>