<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wordlife-theme
 */

?>

	
<footer style="padding-bottom: 0px;" class="site-footer section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-2 col-12 mb-4 pb-2">
                        <a class="navbar-brand mb-2" href="index.html">

                            <img class="logo_img_footer" src="<?php echo get_template_directory_uri() ?>/assets/images/logo_color.svg" alt="">
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4 col-12">
                        <h6 class="site-footer-title mb-3">Меню</h6>

                        <ul class="site-footer-links">
                            <li class="site-footer-link-item">
                                <a href="index.html#section_1" class="site-footer-link">Главная</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="index.html#section_3" class="site-footer-link">Об организации</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="#section_2" id="main_link_0" class="site-footer-link">Мероприятия церкви</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="index.html#section_4" class="site-footer-link">Вопрос - ответ</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="index.html#section_5" class="site-footer-link">Контакты</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-4 col-12 mb-4 mb-lg-0">
                        <h6 class="site-footer-title mb-3">Контакты</h6>

                        <p class="text-white d-flex mb-1">
                            <a href="tel:+79021926827" class="site-footer-link">
                                +7 (902) 192-68-27 <br> (секретарь церкви)
                            </a>
                        </p>

                        <p class="text-white d-flex">
                            <a href="mailto:novlife@mail.ru" class="site-footer-link">
                                novlife@mail.ru
                            </a>
                        </p>

                          <ul class="social-icon col-6">
                              <li class="social-icon-item">
                                  <a href="https://vk.com/slovozhizninov" target="_blank" class="social-icon-link bi font_vk">ВК</a>
                              </li>

                              <li class="social-icon-item">
                                  <a href="https://www.youtube.com/@slovo-vn/streams" target="_blank" class="social-icon-link bi-youtube"></a>
                              </li>

                          </ul>
                    </div>



                    <div class="col-lg-3 col-md-4 col-12 mt-4 mt-lg-0">
                          <h6 class="site-footer-title mb-3">Деятельность церкви</h6>

                          <ul class="site-footer-links">
                              <li class="site-footer-link-item">
                                  <a href="#section_2" id="main_link_1" class="site-footer-link">Расписание богослужений</a>
                              </li>

                              <li class="site-footer-link-item">
                                  <a href="#section_2" id="main_link_2" class="site-footer-link">Социальное служение</a>
                              </li>

                              <li class="site-footer-link-item">
                                  <a href="#section_2" id="main_link_3" class="site-footer-link">Конференции</a>
                              </li>

                              <li class="site-footer-link-item">
                                  <a href="#section_2" id="main_link_4" class="site-footer-link">Неформальные встречи</a>
                              </li>

                              <li class="site-footer-link-item">
                                  <a href="#section_2" id="main_link_5" class="site-footer-link">Пожертвовать</a>
                              </li>
                          </ul>

                    </div>

                </div>
            </div>

          <div style="margin-top: 20px;" class="container">
              <div class="row">
              <div class="col-8 m-auto text-center">
                <p class="under_footer">
                  Местная религиозная организация Российская Церковь Христиан Веры Евангельской «Слово Жизни» Великого Новгорода.
            ИНН 5321027846 | КПП 532101001 | ОГРН 1025300005334 от 25 ноября 2002 г. | 173015, Новгородская область, город Великий Новгород, ул. Белова, д.3 <br>
            © 2023 Церковь "Слово Жизни" г. Великий Новгород | Все права защищены
            <br>Site by: <a rel="nofollow" href="https://panda-development.ru" target="_blank">Panda Development Studio</a>
                </p>
              </div>
            </div>
          </div>
        </footer>


<?php wp_footer(); ?>

</body>
</html>
