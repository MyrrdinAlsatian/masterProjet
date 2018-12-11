<?php
get_header(); // recupération du fichier header.php
?>

<!-- Ici ce retrouvera le contenu de la page d'accueil -->


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

        <!-- wp_query permet de faire des boucles hors de la boucle de rendu -->
         <?php 
                $args = array( 'orderby' => 'date', 'posts_per_page' => '2' );
                $the_query = new WP_Query ( $args );
                     while ( $the_query -> have_posts() ) :
                         $the_query -> the_post(); 
         ?>

         <?php
                        the_post_thumbnail(null,['class'=> 'img-fluid']);
                     // ce truc ca permet de récuperer une image mise en avant et lui attribuer une classe
                     // si tu a un doute look la doc https://developer.wordpress.org/reference/functions/the_post_thumbnail/
         ?>
                </div>
                <div class="detais">
                        <!-- <li><?php // the_category(null,'')?></li> -->
                        
                        <!-- Sa ca sert a récupérer les catégorie  -->


                    <a href="<?php the_permalink() ?> ">     <!-- on récupère le lien vers le contenu -->

                        <h4><?php the_title() ?></h4>
                    </a>
                    <?php the_excerpt()?> <!--  La on va sortir l'extrait du texte -->
                    <p class="date"><?php the_time( get_option( 'date_format' ) ); ?></p>
                </div>
            </div>
            <?php
             endwhile;                
			wp_reset_postdata(); 

				?>
<?php

    get_footer(); //récupération du fichier footer.php
?>