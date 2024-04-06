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

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet">
<link href="https://db.onlinewebfonts.com/c/5795a47e252d16c82bb79fa354b224db?family=VK+Sans+Display+Regular" rel="stylesheet">



	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<main>

  <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="index.html">
                        <img class="logo_img" src="<?php echo get_template_directory_uri() ?>/assets/images/logo_white.svg" alt="Церковь г. Великий Новгород">
                    </a>


                    <a class="navbar-brand" href="index.html">
                        <?php if(has_custom_logo()) {
                    	echo get_custom_logo();
                    } ?>
                    </a>





                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                 <!--    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-lg-5 me-lg-auto">
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="index.html#section_1">Главная</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_2">Мероприятия</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_3">О нас</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_4">Вопрос - ответ</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_5">Контакты</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Еще</a>

                                <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                    <li><a id="top_main_link_1" class="dropdown-item" href="#section_2">Расписание служений</a></li>

                                    <li><a id="top_main_link_2" class="dropdown-item" href="#section_2">Социальное служение</a></li>

                                    <li><a id="top_main_link_3" class="dropdown-item" href="#section_2">Конференции</a></li>

                                    <li><a id="top_main_link_4" class="dropdown-item" href="#section_2">Неформальные встречи</a></li>

                                    <li><a id="top_main_link_5" class="dropdown-item" href="#section_2">Пожертвовать</a></li>

                                </ul>
                            </li>
                        </ul>

                    </div> -->

                    <?php
			wp_nav_menu(
				array(
					'theme_location' => 'header_menu',
					'menu_id'        => 'header_menu_id',
					'menu_class'	 => 'navbar-nav ms-lg-5 me-lg-auto',
					'container_class' => 'collapse navbar-collapse',
					'container_id' 	=> 'navbarNav',
					'list_item_class' => 'nav-item',
					'add_a_class' => 'nav-link click-scroll'
				)
			);
			?>



                </div>
            </nav>
