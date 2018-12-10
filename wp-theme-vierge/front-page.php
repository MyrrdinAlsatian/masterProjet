<?php
get_header(); // recupération du fichier header.php
?>


<img src="<?= get_stylesheet_directory_uri();

//permet de completer les liens 
?>/images/image1.jpeg" alt="">

 <?php
// boucle de rendu simple très simple

    while (have_posts()) :
                     the_post();

                    //  La tu initie la recherche des articles


                    // PS: ca marche mieux  si tu créer du contenue ;P
        ?>
                <h4>
                    <?php the_title() ?> 
                    <!-- Ici tu récupère le titre des articles -->
                </h4>
            <?php
                    the_content();
                     //Ici tu récupère le contenu des articles -->
                
   endwhile;
                ?>

    <!-- Ici ce retrouvera le contenu de la page d'accueil -->

<?php

    get_footer(); //récupération du fichier footer.php
?>