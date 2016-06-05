<?php
// Template Name: Formation
?>

<?php get_header(); ?>
<main>
    <div id="formation1">
        <?php
        // Start the loop.
        while ( have_posts() ) : the_post();?>
            <h1><?php the_title(); ?></h1>
            <?php
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
            ?>
            <?php

            // End the loop.
        endwhile;
        ?>
        <div class="col-md-12">
            <div class="col-md-6 firstriangle">
                <div class="formationtriangle1"></div>
            </div>
            <div class="col-md-6 firstriangle">
                <div class="formationtriangle2"></div>
            </div>
        </div>
    </div>
    <div id="formation2">
        <iframe class="formationvideo" src="https://www.youtube.com/embed/eb55fW9V35c" frameborder="0" allowfullscreen></iframe>
    </div>
    <div id="formation3">
        <div class="col-md-6">
            <h2>NOS CONSEILS</h2>
             <p>
                 Validation et exploitation de données sous excel : vous avez un fichier excel très utile pour l'entreprise, avec nombreux utilisateurs, et vous souhaitez le sécuriser, l'améliorer; je suis force de proposition et de mise en oeuvre. L'idée est aussi d'intégrer ces fichiers pour harmoniser les moyens informatiques et de faire d'Excel un maquettage pour utiliser les outils informatiques adéquats.

                 Assistance à maitrise d'ouvrage : Le lien entre les équipes informatiques et les équipes opérationnelles. Forte d'une formation polytechnique, je pourrais converser avec les équipes techniques de l'informatique et les équipes techniques du terrain. Faciliter les échanges et optimiser la production des outils informatiques pour une meilleure qualité de service

             </p>
        </div>
        <div class="col-md-6">
            <h2>NOS COURS</h2>
            <p>
                Sensibilisation à la qualité : il s'agit par un jeu de rôle de se retrouver dans une situation de producteur d'avions en papiers, de comprendre les difficultés de répondre à un cahier des charges au meilleur coût et d'arriver à la notion de qualité : qualité perçue, coût d'obtention de la qualité, coût de la non-qualité
                5S : (extrait de wikipedia)
                La méthode des 5 « S » (en anglais the 5 S's) est une technique de management japonaise visant à l'amélioration continue des tâches effectuées dans les entreprises. Élaborée dans le cadre du système de production de Toyota (en anglais Toyota Production System ou TPS), elle tire son appellation de la première lettre de chacune de cinq opérations constituant autant de mots d'ordre ou principes simples.

            </p>
        </div>

    </div>
    <div id="formation4">
        <div class="col-md-6 firstriangle"><div class="formationtriangle3"></div></div>
        <div class="col-md-6 firstriangle"><div class="formationtriangle4"></div></div>
        <div class="col-md-12">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="col-md-6">
                            <?php $image = get_field('photo1');
                            if( !empty($image) ): ?>
                                <img class="img-label" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                            <?php endif; ?>
                        </div>
                        <div class="col-md-6">
                            <p><?php the_field('description1'); ?></p>
                            <p><?php the_field('nom1'); ?></p>
                        </div>
                        <div class="col-xs-6">
                            <?php $image = get_field('photo1');
                            if( !empty($image) ): ?>
                                <img class="img-label" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                            <?php endif; ?>
                        </div>
                        <div class="col-xs-6">
                            <p><?php the_field('description1'); ?></p>
                            <p><?php the_field('nom1'); ?></p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-md-6">
                            <?php $image = get_field('photo2');
                            if( !empty($image) ): ?>
                                <img class="img-label" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                            <?php endif; ?>
                        </div>
                        <div class="col-md-6">
                            <p><?php the_field('description2'); ?></p>
                            <p><?php the_field('nom2'); ?></p>
                        </div>
                        <div class="col-xs-6">
                            <?php $image = get_field('photo2');
                            if( !empty($image) ): ?>
                                <img class="img-label" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                            <?php endif; ?>
                        </div>
                        <div class="col-xs-6">
                            <p><?php the_field('description2'); ?></p>
                            <p><?php the_field('nom2'); ?></p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-md-6">
                            <?php $image = get_field('photo3');
                            if( !empty($image) ): ?>
                                <img class="img-label" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                            <?php endif; ?>
                        </div>
                        <div class="col-md-6">
                            <p><?php the_field('description3'); ?></p>
                            <p><?php the_field('nom3'); ?></p>
                        </div>
                        <div class="col-xs-6">
                            <?php $image = get_field('photo3');
                            if( !empty($image) ): ?>
                                <img class="img-label" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                            <?php endif; ?>
                        </div>
                        <div class="col-xs-6">
                            <p><?php the_field('description3'); ?></p>
                            <p><?php the_field('nom3'); ?></p>
                        </div>
                    </div>
                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="fa fa-chevron-left"></span></a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="fa fa-chevron-right"></span></a>
            </div>
        </div>
    </div>

</main>
<?php get_footer(); ?>

