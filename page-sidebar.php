<?php 
/* 
Template Name: Page Sidebar 
*/ 
?>

<?php get_header(); ?>

    <header>
        <h2><a href="<?php echo esc_url( home_url( '/' ) ) ?>" class="link"><?php bloginfo('title'); ?></a></h2>
        <p>Dies ist das page-sidebar.php Template</p>
        <aside class="header-sidebar">
            <?php dynamic_sidebar( 'header-widget' ); ?>
        </aside>
          
    </header>
    
    <nav class="main-nav">
        <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
    </nav>

    <div class="wrapper my-sidebar">
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