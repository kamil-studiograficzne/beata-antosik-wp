<?php
/*
Template Name: Strona główna /w slider
Template Post Type: page
*/
 get_header(); ?>


<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <?php
        $args = array( 'post_type' => 'main_slider', 'posts_per_page' => 10 );
        $carousel = new WP_Query( $args );
        $activeClass = 0;
        while ( $carousel->have_posts() ) : $carousel->the_post(); $activeClass ++
        ?>
        <?php if($activeClass == 1) : ?>
            <div class="carousel-item single-slide-div active" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')">
        <?php else : ?>
            <div class="carousel-item single-slide-div" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')">
            <?php endif; ?>
                <div class="container slide-container">
                    <div class="col-md-6 slide-text-column">
                        <div class="text-div">
                            <?php the_content(); ?>
                            <a href="<?php the_field('slider_see_more'); ?>" class="btn btn-outline-primary custom-btn"> Zobacz więcej</a>
                        </div>
                    </div>
                </div>
            </div>


        <?php
        endwhile;
    ?>

  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="container-fluid">
    <div class="row full-width-padding">
    <?php
        if (have_posts()) :
            while ( have_posts() ) : the_post();
                ?>
                    <div class="col-xs-12 col-lg-5 main-left-column">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Beata Antosik Clinic" class="img-fluid">
                    </div>
                    <div class="col-xs-12 col-lg-7 main-right-column">
                        <?php the_content(); ?>
                    </div>
                <?php
            endwhile;
            else :
            ?>
            <p>Sorry no posts matched your criteria.</p>
            <?php
        endif;
    ?>

    </div>
</div>


<?php get_footer(); ?>