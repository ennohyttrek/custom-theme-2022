<?php 
/* 
Template Name: Blank w/ Footer 
*/ 
?>

<?php get_header(); ?>



    <div class="wrapper">
        <main>

            <!-- Loop starts -->

            <?php

            if ( have_posts() ) :
            while ( have_posts() ) : the_post(); 
            ?>

            <article>

                <h1><a href="<?php echo esc_url( get_permalink() ); ?>" class="link"><?php the_title(); ?></a></h1>

                <figure class="my-post-thumbnail">
                    <?php echo the_post_thumbnail()?>
                </figure>

                <section>
                    <?php the_content(); ?>
                </section>

            </article>

            <?php
                endwhile;
            endif; 
            ?>

            <!-- Loop ends -->

        </main>

        <aside class="main-sidebar">
            <?php dynamic_sidebar( 'sidebar-widget' ); ?>
        </aside>
    </div>
    
<?php get_footer(); ?>