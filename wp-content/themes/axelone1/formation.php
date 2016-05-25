<?php
// Template Name: Formation
?>

<?php get_header(); ?>
<main>
    <div id="formation1">
        <h1>FORMATION</h1>
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
        <iframe class="formationvideo" src="https://www.youtube.com/embed/dsDTJ__jioo" frameborder="0" allowfullscreen></iframe>
    </div>
    <div id="formation3">
       <h2>NOS COURS</h2>

        <?php
        // Start the loop.
        while ( have_posts() ) : the_post();?>
                <p><?php the_content(__('(more...)')); ?></p>
                    <?php
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;
                    ?>
            <?php

            // End the loop.
        endwhile;
        ?>
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

