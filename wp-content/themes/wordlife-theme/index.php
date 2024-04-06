<?php
/**
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wordlife-theme
 */
get_header();
?>

 <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 col-12 mx-auto">
                            <h1 class="main_h1_style text-white text-center">Церковь <br class="br_heading_main"> «Слово Жизни»</h1>
                            <h3 class="main_h3_style text-white text-center">г. Великий Новгород</h3>

                            <h6 class="main_h6_style text-center">Слово Жизни для всех народов</h6>

                        </div>

                    </div>
                </div>
            </section>


            <section class="featured-section" id="section_1_1">
                <div class="container">
                    <div class="row justify-content-center">

                        <div class="col-lg-4 col-12 mb-4 mb-lg-0">
                            <div class="custom-block bg-white shadow-lg">
                                    <div class="d-flex">
                                        <div>
                                            <h5 class="mb-2">Расписание</h5>
                                            <p class="mb-0">
                                                <ul>
                                                    <li>Воскресенье в 11:00 – общее богослужение</li>
                                                    <li>Среда в 19:00 – разбор Библии</li>
                                                </ul>
                                             Адрес: ул. Белова 3, <br>г. Великий Новгород.
                                             <br><br><a id="main_link_0_0" href="#section_2"><span class="read_more">Здесь</span></a> вы можете ознакомиться с мероприятиями церкви более подробно.</p>
                                        </div>
                                        <!-- <span class="badge bg-design rounded-pill ms-auto">14</span> -->
                                    </div>

                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/topics/undraw_Redesign_feedback_re_jvm0.png" class="custom-block-image img-fluid" alt="Мероприятия в церкви">
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="custom-block custom-block-overlay">
                                <div class="d-flex flex-column h-100">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/businesswoman-using-tablet-analysiscopy.jpg" class="custom-block-image img-fluid" alt="Церковь YouTube канал">
                                    <!-- <video autoplay loop muted playsinline src="video/AcrobaticOrneryGalago-size_restricted.gif"></video> -->

                                    <div class="custom-block-overlay-text d-flex">
                                        <div>
                                            <h5 class="text-white mb-2">YouTube</h5>

                                            <p class="text-white text_block_youtube">Приглашаем вас в церковь, но если у вас нет возможности придти – вы можете посетить наш <br>YouTube - канал.</p>

                                            <a href="https://www.youtube.com/@slovo-vn/streams" target="_blank" class="btn custom-btn mt-2 mt-lg-3">Смотреть на YouTube</a>
                                        </div>

                                    </div>

                                    <div class="social-share d-flex">
                                        <p class="share_link text-white me-4">Поделиться с друзьями:</p>

                                        <ul class="social-icon col-md-6 col-12">
                                            <li class="social-icon-item">
                                                <a href="https://t.me/share/url?url=https://www.youtube.com/@slovo-vn/streams&text=Местная%20религиозная%20организация%20Российская%20Церковь%20Христиан%20Веры%20Евангельской%20Слово%20Жизни%20Великого%20Новгорода" target="_blank" class="social-icon-link bi-telegram"></a>
                                            </li>

                                            <li class="social-icon-item">
                                                <a href="https://api.whatsapp.com/send/?text=https://www.youtube.com/@slovo-vn/streams%20Местная%20религиозная%20организация%20Российская%20Церковь%20Христиан%20Веры%20Евангельской%20Слово%20Жизни%20Великого%20Новгорода" target="_blank" class="social-icon-link bi-whatsapp"></a>
                                            </li>

                                            <li class="social-icon-item">
                                                <a href="https://vkontakte.ru/share.php?url=https://www.youtube.com/@slovo-vn/streams%20Местная%20религиозная%20организация%20Российская%20Церковь%20Христиан%20Веры%20Евангельской%20Слово%20Жизни%20Великого%20Новгорода" target="_blank" class="social-icon-link bi font_vk">ВК</a>
                                            </li>
                                        </ul>

                                        <a href="https://wordlife.online" rel="sidebar" onclick="addSite()" class="header_bookmark js-bookmark custom-icon bi-bookmark ms-auto"></a>
                                    </div>

                                    <div class="section-overlay"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <section class="explore-section section-padding" id="section_2">
                <div class="container">
                    <div class="row">

                        <div class="col-12 text-center" style="margin-bottom: 20px;">
                            <h2 class="mb-4">Мероприятия</h1>
                              <span class="small_heading">Выберите интересующий вас раздел</span>
                        </div>

                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="design-tab" data-bs-toggle="tab" data-bs-target="#design-tab-pane" type="button" role="tab" aria-controls="design-tab-pane" aria-selected="true">Расписание богослужений</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="marketing-tab" data-bs-toggle="tab" data-bs-target="#marketing-tab-pane" type="button" role="tab" aria-controls="marketing-tab-pane" aria-selected="false">Социальное служение</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="finance-tab" data-bs-toggle="tab" data-bs-target="#finance-tab-pane" type="button" role="tab" aria-controls="finance-tab-pane" aria-selected="false">Конференции</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="music-tab" data-bs-toggle="tab" data-bs-target="#music-tab-pane" type="button" role="tab" aria-controls="music-tab-pane" aria-selected="false">Неформальные встречи</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="education-tab" data-bs-toggle="tab" data-bs-target="#education-tab-pane" type="button" role="tab" aria-controls="education-tab-pane" aria-selected="false">Пожертвовать</button>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="container">
                    <div class="row">


<!-- Расписание служений -->
                        <div class="col-12">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="design-tab-pane" role="tabpanel" aria-labelledby="design-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-4">
                                            <div class="custom-block bg-white shadow-lg">
                                                <a class="no_active_a" href="topics-detail.html">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Основное богослужение</h5>

                                                            <p class="mb-0">Воскресенье в 11:00, <br>ул. Белова, д. 3. <br>Мы будем рады видеть вас!</p>
                                                        </div>


                                                    </div>

                                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/topics/undraw_Remote_design_team_re_urdx.svg" class="custom-block-image img-fluid" alt="Богослужение основное">
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-4">
                                            <div class="custom-block bg-white shadow-lg">
                                                <a class="no_active_a" href="topics-detail.html">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Разбор Библии</h5>

                                                                <p class="mb-0">Среда в 19:00, <br> ул. Белова, д. 3. <br>Разбор Библии и молитва.</p>
                                                        </div>


                                                    </div>

                                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/topics/undraw_Redesign_feedback_re_jvm0.svg" class="custom-block-image img-fluid" alt="Разбор Библии">
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 col-12 mb-lg-4">
                                            <div class="custom-block bg-white shadow-lg">
                                                <a class="no_active_a" href="topics-detail.html">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Молодежное богослужение</h5>

                                                                <p class="mb-0">Последнее воскресенье месяца в 17:30, <br>ул. Белова, д. 3. <br>Кофе, чай, настольные игры, общение, молитва.</p>
                                                        </div>


                                                    </div>

                                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/topics/colleagues-working-cozy-office-medium-shot.svg" class="custom-block-image img-fluid" alt="Молодежка">
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>


<!-- Социальное служение -->
                                <div class="tab-pane fade" id="marketing-tab-pane" role="tabpanel" aria-labelledby="marketing-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                                                <div class="custom-block bg-white shadow-lg">
                                                    <a class="no_active_a" href="topics-detail.html">
                                                        <div class="d-flex">
                                                            <div>
                                                                <h5 class="mb-2">Кормление нуждающихся</h5>

                                                                <p class="mb-0">Каждую субботу в 13:00, <br>ул. Белова, д. 3.</p>
                                                            </div>


                                                        </div>

                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/topics/undraw_online_ad_re_ol62.svg" class="custom-block-image img-fluid" alt="Социальная помощь">
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                                                <div class="custom-block bg-white shadow-lg">

                                                        <div class="d-flex">
                                                            <div>
                                                                <h5 class="mb-2">Помощь алко- и наркозависимым</h5>

                                                               <p class="mb-0">По всем вопросам обращаться по телефону<br></p>
                                                                 <p><a href="tel:+79218446936">+7 (921) 844-69-36</a> (Тимофей)</p>
                                                            </div>

                                                        </div>

                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/topics/undraw_Group_video_re_btu7.svg" class="custom-block-image img-fluid" alt="Социальная помощь">

                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-md-6 col-12">
                                                <div class="custom-block bg-white shadow-lg">
                                                        <div class="d-flex">
                                                            <div>
                                                                <h5 class="mb-2">Помощь детям с ограниченными возможностями</h5>

                                                                <p class="mb-0">По всем вопросам обращаться по телефону<br></p>
                                                                 <p><a href="tel:+79116061340">+7 (911) 606-13-40</a> (Елена)</p>
                                                            </div>

                                                        </div>

                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/topics/undraw_viral_tweet_gndb.svg" class="custom-block-image img-fluid" alt="Помощь детям">
                                                </div>
                                            </div>
                                        </div>
                                  </div>


<!-- Предстоящие Конференции -->
                                <div class="tab-pane fade" id="finance-tab-pane" role="tabpanel" aria-labelledby="finance-tab" tabindex="0">   <div class="row">


                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="custom-block bg-white shadow-lg">
                                                <a class="no_active_a" href="topics-detail.html">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Информация о конференциях</h5>

                                                            <p class="mb-0">В церкви регулярно проводятся конференции на разные темы. Здесь будет располагаться актуальная информация.</p>
                                                        </div>

                                                    </div>

                                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/topics/undraw_Educator_re_ju47.svg" class="custom-block-image img-fluid" alt="Конференции Великий Новгород">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>


<!-- Неформальные встречи-->
                                <div class="tab-pane fade" id="music-tab-pane" role="tabpanel" aria-labelledby="music-tab" tabindex="0">
                                    <div class="row">

                                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                                            <div class="custom-block bg-white shadow-lg">
                                                <a class="no_active_a" href="topics-detail.html">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Встреча старшего поколения</h5>

                                                            <p class="mb-0">Последний четверг месяца в 14:00, <br>ул. Белова, д. 3. <br>Возраст: 50+</p>
                                                        </div>

                                                    </div>

                                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/topics/undraw_Compose_music_re_wpiw.svg" class="custom-block-image img-fluid" alt="Старшее поколение">
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                                            <div class="custom-block bg-white shadow-lg">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Молодежные встречи</h5>

                                                            <p class="mb-0">Кофе, чай, общение, настольные игры, кино и тд. <br>
                                                                Определенного времени нет. <br><a href="#"><span class="read_more">Подпишись</span></a> на уведомления и тебе будет приходить информация о мероприятиях.
                                                             </p>
                                                        </div>

                                                    </div>

                                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/topics/undraw_happy_music_g6wc.svg" class="custom-block-image img-fluid" alt="Молодежные встречи">
                                            </div>
                                        </div>

                                    </div>
                                </div>


<!-- Пожертвовать -->
                                <div class="tab-pane fade" id="education-tab-pane" role="tabpanel" aria-labelledby="education-tab" tabindex="0">
                                    <div class="row">


                                      <div class="col-lg-6 col-md-6 col-12 support_for_desktop">
                                          <div class="custom-block custom-block-overlay">
                                              <div class="d-flex flex-column h-100">


                                                  <div class="custom-block-overlay-text d-flex">
                                                      <div>
                                                          <h5 class="text-white mb-2">Добровольные пожертвования</h5>

                                                          <p class="text-white">Даяние — это важный принцип, которому учит Библия. Принося добровольные пожертвования и десятины, мы поклоняемся Богу и славим Его, участвуем в жизни церкви и помогаем распространять Благую весть.</p>
                                                          <img class="img_support" src="<?php echo get_template_directory_uri() ?>/assets/images/qrcod_support.svg" alt="">
                                                      </div>

                                                  </div>

                                                  <div class="social-share d-flex">
                                                      <p class="share_link text-white me-4">Поделиться ссылкой:</p>

                                                      <ul class="social-icon col-6">
                                                          <li class="social-icon-item">
                                                              <a href="https://t.me/share/url?url=https://platiqr.ru/?uuid=1000056752" target="_blank" class="social-icon-link bi-telegram"></a>
                                                          </li>

                                                          <li class="social-icon-item">
                                                              <a href="https://api.whatsapp.com/send/?text=https://platiqr.ru/?uuid=1000056752" target="_blank" class="social-icon-link bi-whatsapp"></a>
                                                          </li>

                                                          <li class="social-icon-item">
                                                              <a href="https://vkontakte.ru/share.php?url=https://platiqr.ru/?uuid=1000056752" target="_blank" class="social-icon-link bi font_vk">ВК</a>
                                                          </li>
                                                      </ul>
                                                  </div>

                                                  <div class="section-overlay"></div>
                                              </div>
                                          </div>
                                      </div>

                                      <div class="col-lg-6 col-md-6 col-12 support_for_mobile">
                                          <div class="custom-block custom-block-overlay">
                                              <div class="d-flex flex-column h-100">
                                                  <img src="<?php echo get_template_directory_uri() ?>/assets/images/businesswoman-using-tablet-analysis.jpg" class="custom-block-image img-fluid" alt="">

                                                  <div class="custom-block-overlay-text d-flex">
                                                      <div>
                                                          <h5 class="text-white mb-2">Добровольные пожертвования</h5>

                                                          <p class="text-white">Даяние — это важный принцип, которому учит Библия. Принося добровольные пожертвования и десятины, мы поклоняемся Богу и славим Его, участвуем в жизни церкви и помогаем распространять Благую весть.</p>

                                                          <a href="https://platiqr.ru/?uuid=1000056752" target="_blank" class="btn custom-btn mt-2 mt-lg-3">Пожертвовать</a>
                                                      </div>


                                                  </div>

                                                  <div class="social-share d-flex">
                                                      <p class="share_link text-white me-4">Поделиться ссылкой:</p>

                                                      <ul class="social-icon col-12 col-md-6">
                                                          <li class="social-icon-item">
                                                              <a href="https://t.me/share/url?url=https://platiqr.ru/?uuid=1000056752" target="_blank" class="social-icon-link bi-telegram"></a>
                                                          </li>

                                                          <li class="social-icon-item">
                                                              <a href="https://api.whatsapp.com/send/?text=https://platiqr.ru/?uuid=1000056752" target="_blank" class="social-icon-link bi-whatsapp"></a>
                                                          </li>

                                                          <li class="social-icon-item">
                                                              <a href="https://vkontakte.ru/share.php?url=https://platiqr.ru/?uuid=1000056752" target="_blank" class="social-icon-link bi font_vk">ВК</a>
                                                          </li>
                                                      </ul>
                                                  </div>

                                                  <div class="section-overlay"></div>
                                              </div>
                                          </div>
                                      </div>

                                    </div>
                                </div>
                            </div>

                    </div>
                </div>
            </section>


            <section class="timeline-section section-padding" id="section_3">
                <div class="section-overlay"></div>

                <div class="container">
                    <div class="row">

                        <div class="col-12 text-center">
                            <h2 class="text-white mb-4">Кто мы и во что мы верим</h1>
                        </div>

                        <div class="col-lg-10 col-12 mx-auto">
                            <div class="timeline-container">
                                <ul class="vertical-scrollable-timeline" id="vertical-scrollable-timeline">
                                    <div class="list-progress">
                                        <div class="inner"></div>
                                    </div>

                                    <li>
                                        <h4 class="text-white mb-3">О нас</h4>

                                        <p class="text-white">Мы - Российская Церковь Христиан Веры Евангельской «Слово Жизни» в городе Великий Новгород.</p>

                                        <div class="icon-holder remove_on_mobile">
                                          <i class="bi-search"></i>
                                        </div>
                                    </li>

                                    <li>
                                        <h4 class="text-white mb-3">Во что мы верим</h4>

                                        <p class="text-white">Есть Бог, вечно существующий в трёх Лицах – Отец, Сын и Святой Дух; <br>
Бог – Дух, Единый по Своей сущности и Его атрибуты открыты нам в Священном Писании;  <br>
Бог – Создатель видимого и невидимого миров, сотворивший все сущее; <br>
Иисус Христос – предвечный Сын Божий, Слово, родился от девы Марии, воплотившись ради спасения людей, прожил безгрешную жизнь, был распят на кресте, сделавшись заместительной жертвой перед Отцом для искупления людей, умер и погребён, воскрес из мертвых в физическом теле для нашего оправдания, вознесся на небеса и воссел одесную Отца; <br>
Церковь – это Тело Христово, главой которого является Иисус Христос и которое состоит из рождённых свыше людей;</p>

                                        <div class="icon-holder remove_on_mobile">
                                          <i class="bi-bookmark"></i>
                                        </div>
                                    </li>

                                    <li>
                                        <h4 class="text-white mb-3">Наша миссия:</h4>

                                        <p class="text-white">
                                            – быть народом, демонстрирующим Божью любовь, быть светом этому миру.  <br>
                                            – быть действенным средством для распространения Царствия Божьего в нашей стране; <br>
                                            – быть Телом Христовым, в котором человек поклоняется и служит Богу;
                                        </p>

                                        <div class="icon-holder remove_on_mobile">
                                          <i class="bi-book"></i>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>


                    </div>
                </div>
            </section>








                <section class="section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12 text-center">
                            <h3 class="mb-4">Popular Topics</h3>
                        </div>

                        <div class="col-lg-6 col-12 mt-3 mx-auto">


<?php if ( have_posts() )  : $count = 0; while ( have_posts() )  : the_post(); $count++; ?>

			<?php

			if ($count % 2 == 0) { 
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
		}
			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		 ?>

                        </div>





                        <div class="col-lg-6 col-12 mt-3 mx-auto">






<?php if ( have_posts() )  : $count = 0; while ( have_posts() )  : the_post(); $count++; ?>

			<?php

			if ($count % 2 ) { 
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
		}
			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		 ?>


                            <!-- <div class="custom-block custom-block-topics-listing bg-white shadow-lg mb-5">
                                <div class="d-flex">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/topics/undraw_Remote_design_team_re_urdx.png" class="custom-block-image img-fluid" alt="">

                                    <div class="custom-block-topics-listing-info d-flex">
                                        <div>
                                            <h5 class="mb-2">Web Design</h5>

                                            <p class="mb-0">Topic Listing includes home, listing, detail and contact pages. Feel free to modify this template for your custom websites.</p>

                                            <a href="topics-detail.html" class="btn custom-btn mt-3 mt-lg-4">Learn More</a>
                                        </div>

                                        <span class="badge bg-design rounded-pill ms-auto">14</span>
                                    </div>
                                </div>
                            </div>

                            <div class="custom-block custom-block-topics-listing bg-white shadow-lg mb-5">
                                <div class="d-flex">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/topics/undraw_online_ad_re_ol62.png" class="custom-block-image img-fluid" alt="">

                                    <div class="custom-block-topics-listing-info d-flex">
                                        <div>
                                            <h5 class="mb-2">Advertising</h5>

                                            <p class="mb-0">Visit TemplateMo website to download free CSS templates. Lorem ipsum dolor, sit amet consectetur adipisicing elit animi necessitatibus</p>

                                            <a href="topics-detail.html" class="btn custom-btn mt-3 mt-lg-4">Learn More</a>
                                        </div>

                                        <span class="badge bg-advertising rounded-pill ms-auto">30</span>
                                    </div>
                                </div>
                            </div>

                            <div class="custom-block custom-block-topics-listing bg-white shadow-lg mb-5">
                                <div class="d-flex">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/topics/undraw_Podcast_audience_re_4i5q.png" class="custom-block-image img-fluid" alt="">

                                    <div class="custom-block-topics-listing-info d-flex">
                                        <div>
                                            <h5 class="mb-2">Podcast</h5>

                                            <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit animi necessitatibus</p>

                                            <a href="topics-detail.html" class="btn custom-btn mt-3 mt-lg-4">Learn More</a>
                                        </div>

                                        <span class="badge bg-music rounded-pill ms-auto">20</span>
                                    </div>
                                </div>
                            </div> -->
                        </div>







                       <!--  <div class="col-lg-12 col-12">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center mb-0">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">Prev</span>
                                        </a>
                                    </li>

                                    <li class="page-item active" aria-current="page">
                                        <a class="page-link" href="#">1</a>
                                    </li>
                                    
                                    <li class="page-item">
                                        <a class="page-link" href="#">2</a>
                                    </li>
                                    
                                    <li class="page-item">
                                        <a class="page-link" href="#">3</a>
                                    </li>

                                    <li class="page-item">
                                        <a class="page-link" href="#">4</a>
                                    </li>

                                    <li class="page-item">
                                        <a class="page-link" href="#">5</a>
                                    </li>
                                    
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div> -->

                    </div>
                </div>
            </section>













            <section class="faq-section section-padding" id="section_4">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12">
                            <h2 class="mb-4">Вопрос - ответ</h2>
                        </div>

                        <div class="clearfix"></div>

                        <div class="col-lg-5 col-12">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/faq_graphic.jpg" class="img-fluid" alt="FAQs">
                        </div>

                        <div class="col-lg-6 col-12 m-auto">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Какой дресс-код в церкви?
                                        </button>
                                    </h2>

                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Дресс-код в современной церкви является во многом лояльным. Главное, чтобы ваш стиль не был вызывающим или вульгарным.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Пожертвования - это обязательно или добровольно?
                                    </button>
                                    </h2>

                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Все пожертвования являются добровольными. Мы собираем добровольные пожертвования на миссионерскую работу и на другие служения церкви. 
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                          Какие песни поют в  церкви?
                                    </button>
                                    </h2>

                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Сборник современных христинских песен насчитывает тысячи песен. Они находятся в свободном доступе в сети интернет. <br>Вот, например, <a href="https://holychords.pro/3396" rel="nofollow" target="_blank">одна из таких песен</a>.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


             <section class="contact-section section-padding section-bg" id="section_5">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12 text-center">
                            <h2 class="mb-5">Как нас найти?</h2>
                        </div>

                          <div class="col-lg-7 col-12 mb-4 mb-lg-0">
                            <iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2221.7032250856805!2d31.251729277003648!3d58.52221147536337!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46beea3310ac9b63%3A0x7bb0fabc62c56a56!2z0KHQu9C-0LLQviDQltC40LfQvdC4!5e1!3m2!1sru!2sru!4v1699384599165!5m2!1sru!2sru" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>


                        <div class="col-lg-5 col-md-6 col-12 mb-3 mb-lg- mb-md-5 ">
                            <h6 class="mb-3">Главное здание</h6>

                            <p>г. Великий Новгород, ул. Белова, д. 3</p>

                            <hr>

                            <p class="d-flex align-items-center mb-1">
                                <span class="me-2">Телефон</span>

                                <a href="tel:+79021926827" class="site-footer-link">
                                    +7 (902) 192-68-27 (Секретарь церкви)
                                </a>
                            </p>

                            <p class="d-flex align-items-center">
                                <span class="me-2">Email</span>

                                <a href="mailto:novlife@mail.ru" class="site-footer-link">
                                    novlife@mail.ru
                                </a>
                            </p>

                            <ul class="social-icon col-6">
                                <li class="social-icon-item">
                                    <a href="https://vk.com/slovozhizninov" target="_blank" class="social-icon-link font_vk">ВК</a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="https://www.youtube.com/@slovo-vn/streams" target="_blank" class="social-icon-link bi-youtube"></a>
                                </li>

                            </ul>
                        </div>

                        

                    </div>
                </div>
            </section>
</main>


<?php
// get_sidebar();
get_footer();
