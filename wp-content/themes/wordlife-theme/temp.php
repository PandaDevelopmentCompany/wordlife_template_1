<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wordlife-theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'wordlife-theme' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$wordlife_theme_description = get_bloginfo( 'description', 'display' );
			if ( $wordlife_theme_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $wordlife_theme_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'wordlife-theme' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->










<!-- footer -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'wordlife-theme' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'wordlife-theme' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'wordlife-theme' ), 'wordlife-theme', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->












<!-- index.php -->

	<main id="primary" class="site-main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->














<div class="row_item_blog img_width">

            <article class="article_blog">
                <ul id="ajax-posts2" class="list_article_blog">

	        <?php if ( have_posts() ) : $count = 0; while ( have_posts() )  : the_post(); $count++; ?>
                    <li <?php if ($count % 2 == 0 ) { ?> >
                        <a href="<?php the_permalink(); ?>" class="link_article_blog">
			                <?php echo get_the_post_thumbnail(get_the_ID()); ?>
                            <div class="item_text_list_article_blog">
				                <?php $cats = get_the_category($id); ?>
                                <p class="division_ar_bl"><?php echo $cats[0]->name; ?></p>
                                <div class="text_list_article_blog">
                                    <h3 class="title_list_article_blog"><?php the_title(); ?></h3>
                                    <p class="sub_title_list_article_blog"><?php echo carbon_get_post_meta( get_the_ID(),'post_subtitle' ); ?></p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <?php } ?>
	        <?php endwhile; ?>
	        <?php endif; ?>
                </ul>
            </article>


            <div class="item_news_blog">
                <ul class="list_news_blog img_width">

                <?php if ( have_posts() ) : $count = 0; while ( have_posts() )  : the_post(); $count++; ?>

                            <li <?php if ($count % 2 ) { ?> >
                                <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail(get_the_ID()); ?></a>
								<?php $cats = get_the_category($id); ?>
                                <a class="rublic_news_blog" href="<?php get_category_link( $cats ); ?>"><?php echo $cats[0]->name; ?></a>
                                <h3 class="title_news_blog"><a href="<?php the_permalink(); ?>"><?php the_title(); ?> <span><?php echo carbon_get_post_meta( get_the_ID(),'post_subtitle' ); ?></span></a></h3>
                            </li>

	                <?php } ?>
                <?php endwhile; ?>
                <?php endif; ?>

                </ul>
            </div>
        </div>










<!-- норм архив в одну колонку -->

<?php if ( have_posts() ) : ?>

			<?php

			while ( have_posts() ) :
				the_post(); 
				?>

				 <div class="custom-block custom-block-topics-listing bg-white shadow-lg mb-5 block_for_post">
                                <div class="d-flex">
                                    <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/topics/undraw_Remote_design_team_re_urdx.png" class="custom-block-image img-fluid" alt=""> -->

                                    <!-- <?php echo get_the_post_thumbnail(get_the_ID(), 'custom_id_size', array('class' => 'custom-block-image img-fluid')); ?> -->

                                    <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail(get_the_ID(), 'custom_id_size'); ?></a>


                                    <div class="custom-block-topics-listing-info d-flex">
                                        <div>
                                            <h5 class="mb-2"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>

                                            <p class="mb-0 excerpt_content_post"><?php echo get_the_excerpt(); ?></p>

                                            <a href="<?php the_permalink(); ?>" class="btn custom-btn mt-3 mt-lg-4">Читать еще</a>
                                        </div>

                                        <span class="badge bg-design rounded-pill ms-auto"><?php echo get_the_date(); ?></span>
                                    </div>
                                </div>
                            </div>


			<?php
			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>













