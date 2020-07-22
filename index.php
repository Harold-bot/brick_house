<?php
   ini_set('log_errors','Off');
   $utm_medium = $_GET["utm_medium"];
   $utm_source = $_GET["utm_source"];
   $utm_campaign = $_GET["utm_campaign"];
   $utm_term = $_GET["utm_term"];
   $utm_content = $_GET["utm_content"];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="./assets/img/wherefore/stars.png" type="image/png">
    <title>Дом камня</title>
    <link rel="stylesheet" href="./assets/fonts/stylesheet.css">        
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="vendor/slick/slick-theme.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <script
      src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous">
    </script>

  </head>
  <body>




    <nav class="map_wrapper row">
      <div class="map row col-xl-4 col-lg-5 col-sm-6">
        <div class="col-xl-2 col-1"></div>
        <div class="col-xl-8 col-11 flex-column d-flex align-items-start">
          <div class="row align-items-center">
            <div class="map_close"></div>
          </div>	
          <h2 class="map_title">Меню</h2>
          <div class="map_container flex-column d-flex align-items-start justify-content-start">
            <a href="#wherefore" class="map_item">Конструктор камня</a>
            <a href="#show_room" class="map_item">Шоу-рум</a>
            <a href="#brick_types" class="map_item">О камне</a>
            <a href="#work_stages" class="map_item">Доставка</a>
            <a href="#about" class="map_item">О компании</a>
            <a href="#reviews" class="map_item">Отзывы</a>
            <a href="#cases" class="map_item">Объекты</a>
            <a href="#for_designers" class="map_item">Дизайнерам и архитекторам</a>
          </div>	
        </div>
      </div>
      <div class="substrate col-xl-8 col-lg-7 col-sm-6"></div>
    </nav>

    <div class="sticky_nav fixed">
      <div class="container">
        <header class="row">
          <div class="col-lg-1 col-2 order-3 order-lg-1 py-4 py-lg-0 d-flex justify-content-end justify-content-lg-start align-items-center">
            <div class="menu_btn menu_btn-mobile">
              <div class="burger-wrapper">
                  <div class="burger-1"></div>
                  <div class="burger-2"></div>
                  <div class="burger-3"></div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 order-3 order-lg-2 col-6 place-container d-none d-lg-flex align-items-center">
            <a class="place_container-link" data-container="body" data-placement="bottom" data-toggle="popover" >
              <div class="place_img-container mr-2">
                <img class="place_img" src="assets/img/nav_images/place_img.png" alt="">
              </div>
              <p>Шоурум на Восточной</p>
            </a>
          </div>
          <div class="col-lg-2 col-5 py-4 py-lg-0 offset-lg-1 order-1 order-lg-3 main_s01-logo-bg d-flex align-items-center justify-content-start justify-content-lg-end">
            <a href="" class="main_s01-logo-container d-flex justify-content-center align-items-center">
              <img class="mr-2" src="assets/img/nav_images/logo_img.png" alt="">
              <img src="assets/img/nav_images/logo_text-img.png" alt="">
            </a>
          </div>
          <!--<div class="col-lg-2 d-flex align-items-center justify-content-end">
            <a class="coop_link" href="">Сотрудничество</a>
          </div>-->
          <div class="col-lg-3 col-5 py-4 py-lg-0 order-2 order-lg-3 offset-lg-2 d-flex align-items-center">
            <div class="number_container justify-content-end">
              <div class="number_container-tel">
                <a class="number_container-call" href="">+375 44 530-10-10</a>
                <a class="number_container-call-order d-none d-lg-inline" data-toggle="modal" data-target="#consult1">Заказать обратный звонок</a>
                <a class="number_container-call-order d-inline d-lg-none" data-toggle="modal" data-target="#consult1">Заказать звонок</a>
              </div>
              <div class="d-lg-flex d-none justify-content-start number_container-socials">
                <a href="">
                  <img src="assets/img/nav_images/whatsapp_icon.svg" alt="">
                </a>
                <a class="ml-2" href="">
                  <img src="assets/img/nav_images/tg_icon.svg" alt="">
                </a>
              </div>
            </div>
          </div>
        </header>
      </div>
    </div>

    <section class="main_s01">
      <div class="container">
        <header class="row">
          <div class="col-lg-1 col-2 order-3 order-lg-1 py-4 py-lg-0 d-flex justify-content-end justify-content-lg-start align-items-center">
            <div class="menu_btn menu_btn-mobile">
              <div class="burger-wrapper">
                  <div class="burger-1"></div>
                  <div class="burger-2"></div>
                  <div class="burger-3"></div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 order-3 order-lg-2 col-6 place-container d-none d-lg-flex align-items-center">
            <a class="place_container-link"  data-container="body" data-placement="bottom" data-toggle="popover">
              <div class="place_img-container mr-2">
                <img class="place_img" src="assets/img/nav_images/place_img.png" alt="">
              </div>
              <p>Шоурум на Восточной</p>
            </a>
          </div>
          <div class="col-lg-2 col-5 py-4 py-lg-0 offset-lg-1 order-1 order-lg-3 main_s01-logo-bg d-flex align-items-center justify-content-start justify-content-lg-end">
            <a href="" class="main_s01-logo-container d-lg-block d-flex justify-content-start align-items-center pt-xl-4">
              <img class="mr-2 mr-lg-auto" src="assets/img/nav_images/logo_img.png" alt="">
              <img src="assets/img/nav_images/logo_text-img.png" alt="">
              <p>Прозводим декоративный камень любой сложности</p>
            </a>
          </div>
          <!--<div class="col-lg-2 d-flex align-items-center justify-content-end">
            <a class="coop_link" href="">Сотрудничество</a>
          </div>-->
          <div class="col-lg-3 col-5 py-4 py-lg-0 order-2 order-lg-3 offset-lg-2 d-flex align-items-center">
            <div class="number_container justify-content-end">
              <div class="number_container-tel">
                <a class="number_container-call" href="">+375 44 530-10-10</a>
                <a class="number_container-call-order d-none d-lg-inline" data-toggle="modal" data-target="#consult1">Заказать обратный звонок</a>
                <a class="number_container-call-order d-inline d-lg-none" data-toggle="modal" data-target="#consult1">Заказать звонок</a>
              </div>
              <div class="d-lg-flex d-none justify-content-start number_container-socials">
                <a href="">
                  <img src="assets/img/nav_images/whatsapp_icon.svg" alt="">
                </a>
                <a class="ml-2" href="">
                  <img src="assets/img/nav_images/tg_icon.svg" alt="">
                </a>
              </div>
            </div>
          </div>
        </header>
        <div class="row">
          <div class="col-lg-7 main_s01-info">
            <h1 class="section_title">Декоративный камень для интерьера и фасада</h1>
            <h4>из бетона, гипса и ручной формовки <br> <span>от производителя</span></h4>
            <div class="container">
              <div class="row">
                <div class="main_s01-pluces-container col-lg-9">
                  <div class="row">
                    <div class="main_s01-pluce col-6">
                      <img src="assets/img/nav_images/pluces_icons/1.svg" alt="">
                      <p>Без трещин, сколов и загрязнений.</p>
                    </div>
                    <div class="main_s01-pluce col-6">
                      <img src="assets/img/nav_images/pluces_icons/2.svg" alt="">
                      <p>Сохраняет цвет и <br> фактуру более 25 лет</p>
                    </div>
                    <div class="main_s01-pluce col-6">
                      <img src="assets/img/nav_images/pluces_icons/3.svg" alt="">
                      <p>Гарантия сроков <br> по договору.</p>
                    </div>
                    <div class="main_s01-pluce col-6">
                      <img src="assets/img/nav_images/pluces_icons/4.svg" alt="">
                      <p>Бесплатная доставка <br> по Минску.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="btn_container">
              <a class="btn btn-primary" data-toggle="modal" data-target="#catalog1">Получить каталог с ценами</a>
              <img class="ml-2 ml-sm-5" src="assets/img/nav_images/garanty.png" alt="">
            </div>
          </div>
        </div>
        <div class="row main_s01-partners">
          <div class="col-lg-3 col-3 d-flex justify-content-center align-items-center">
            <img class="img-fluid" src="assets/img/banner_images/logo/1.png" alt="">
          </div>
          <div class="col-lg-3 col-3 d-flex justify-content-center align-items-center">
            <img class="img-fluid" src="assets/img/banner_images/logo/2.png" alt="">
          </div>
          <div class="col-lg-3 col-3 mt-3 mt-lg-0 d-flex justify-content-center align-items-center">
            <img class="img-fluid" src="assets/img/banner_images/logo/3.png" alt="">
          </div>
          <div class="col-lg-3 col-3 mt-3 mt-lg-0 d-flex justify-content-center align-items-center">
            <img class="img-fluid" src="assets/img/banner_images/logo/4.png" alt="">
          </div>
        </div>
      </div>
    </section>

    <section id="brick_types" class="brick_types">
      <div class="container">
        <h1 class="section_title text-center"><span>Декоративный камень</span> нашего <br> производства</h1>
        <p class="text-center brick_types-help">Кликайте на иконку <span>+</span> возле, каждого свойства, чтобы узнать почему</p>
        <div class="row">
          <div class="col-lg-4 text-center">
            <a class="brick_types-btn" href="#brick_type1">
              <img src="assets/img/brick_types/icons/1.png" alt="">
              <img class="brick_types-img-hover" src="assets/img/brick_types/icons/1-green.png" alt="">
              <p>Прочный и долговечный камень</p> 
            </a>
          </div>
          <div class="col-lg-4 text-center mt-3 mt-lg-0">
            <a class="brick_types-btn" href="#brick_type2">
              <img src="assets/img/brick_types/icons/2.png" alt="">
              <img class="brick_types-img-hover" src="assets/img/brick_types/icons/2-green.png" alt="">
              <p>Прочный и долговечный камень</p> 
            </a>
          </div>
          <div class="col-lg-4 text-center mt-3 mt-lg-0">
            <a class="brick_types-btn" href="#brick_type3">
              <img src="assets/img/brick_types/icons/3.png" alt="">
              <img class="brick_types-img-hover" src="assets/img/brick_types/icons/3-green.png" alt="">
              <p>Прочный и долговечный камень</p> 
            </a>
          </div>
        </div>
        <div id="brick_type1" class="row brick_types-item">
          <div class="col-lg-5 order-2 order-lg-1">
            <div class="brick_types-info-container">
              <img src="assets/img/brick_types/icons/1.png" alt="">
              <h2>Прочный и долговечный, гарантия 10 лет</h2>
              <p>Изготавливаем камень на собственном производстве площадью 760 м2 на современном европейском оборудовании из дорогих зарубежных игредиентов</p>
            </div>
          </div>
          <div class="col-lg-7 order-1 order-lg-2 d-flex justify-content-center align-items-center">
            <div class="brick_types-img-container">
              <img class="img-fluid" src="assets/img/brick_types/brick_types/1.png" alt="">
              <a style="left: 18%; top: 50%;" id="btn_popover1" class="popover_pluce-container" data-container="body" data-placement="bottom" data-toggle="popover" >
                <p>+</p>
              </a>
              
              <div id="popover_content1" class="popover_content hide">
                <div class="popover_content-text">
                  <h4>Отбраковываем дефектные камни на 2 этапах</h4>
                  <p>разбора форм и непосредственно перед упаковкой в коробки перед доставкой</p>
                </div>
                <img src="assets/img/brick_types/popover_content/1.png" alt="">
              </div>

              <a style="left: 62%; top: 24%;"  id="btn_popover2" class="popover_pluce-container" data-container="body" data-placement="bottom" data-toggle="popover" >
                <p>+</p>
              </a>

              <div id="popover_content2" class="popover_content hide">
                <div class="popover_content-text">
                  <h4>Вы получите камень без трещин, сколов и загрязнений. </h4>
                  <p>Если будет хоть одна трещинка - заменим на новую в тот же день</p>
                </div>
                <img src="assets/img/brick_types/popover_content/2.png" alt="">
              </div>

            </div>
          </div>
        </div>
        <div id="brick_type2" class="row brick_types-item">
          <div class="col-lg-5 order-2 order-lg-1">
            <div class="brick_types-info-container">
              <img src="assets/img/brick_types/icons/2.png" alt="">
              <h2>Сохраняет цвет и привлекательный внешний вид более 25 лет</h2>
              <p>Используем немецкие колеры, стойкие к выцветанию и выгоранию.
                <br>
                <br>
                На сегодняшний день самому старому камню, покрашенному этим колером - 25 лет.
                <br>
                Его ни разу не перекрашивали и выглядит он прекрасно.</p>
            </div>
          </div>
          <div class="col-lg-7 order-1 order-lg-2 d-flex justify-content-center align-items-center">
            <div class="brick_types-img-container">
              <img class="img-fluid" src="assets/img/brick_types/brick_types/2.png" alt="">
              <a onclick="" style="left: 18%; top: 24%;" id="btn_popover3" class="popover_pluce-container" data-container="body" data-placement="bottom" data-toggle="popover" >
                <p>+</p>
              </a>

              <div id="popover_content3" class="popover_content hide">
                <div class="popover_content-text">
                  <h4>Отбраковываем дефектные камни на 2 этапах</h4>
                  <p>разбора форм и непосредственно перед упаковкой в коробки перед доставкой</p>
                </div>
                <img src="assets/img/brick_types/popover_content/3.png" alt="">
              </div>

              <a style="left: 62%; top: 50%;" id="btn_popover4" class="popover_pluce-container" data-container="body" data-placement="bottom" data-toggle="popover" >
                <p>+</p>
              </a>

              <div id="popover_content4" class="popover_content hide">
                <div class="popover_content-text">
                  <h4>Камень сохраняет рельеф и текстуру</h4>
                  <p>Благодаря качественным слепкам и дорогим зарубежным рецептурам</p>
                </div>
                <img src="assets/img/brick_types/popover_content/4.png" alt="">
              </div>

            </div>
          </div>
        </div>
        <div id="brick_type3" class="row brick_types-item">
          <div class="col-lg-5 order-2 order-lg-1">
            <div class="brick_types-info-container">
              <img src="assets/img/brick_types/icons/3.png" alt="">
              <h2>Детально воссозданы, фактура на 100% передает атмосферу своего времени</h2>
              <p>Каждый кирпич в вашем доме будет максимально похож на реальный кирпич своей эпохи:
                <br>
                по рельефу, цвету, текстуре и эффектам</p>
            </div>
          </div>
          <div class="col-lg-7 order-1 order-lg-2 d-flex justify-content-center align-items-center">
            <div class="brick_types-img-container">
              <img class="img-fluid" src="assets/img/brick_types/brick_types/3.png" alt="">

              <a onclick="" style="left: 18%; top: 80%;" id="btn_popover5" class="popover_pluce-container" data-container="body" data-placement="bottom" data-toggle="popover" >
                <p>+</p>
              </a>

              <div id="popover_content5" class="popover_content hide">
                <div class="popover_content-text">
                  <h4>Работаем совместно с реставраторами и другими специалистами</h4>
                  <p>С ними мы воссоздали уникальную фактуру каждого декоративного кирпича</p>
                </div>
                <img src="assets/img/brick_types/popover_content/5.png" alt="">
              </div>

              <a style="left: 45%; top: 18%;" id="btn_popover6" class="popover_pluce-container" data-container="body" data-placement="bottom" data-toggle="popover" >
                <p>+</p>
              </a>

              <div id="popover_content6" class="popover_content hide">
                <div class="popover_content-text">
                  <h4>Выполним индивидуальный подбор бесплатно</h4>
                  <p>Бесплатно разработаем индивидуальный цвет и размер кирпича под конкретный проект</p>
                </div>
                <img src="assets/img/brick_types/popover_content/6.png" alt="">
              </div>

              <a style="left: 75%; top: 44%;" id="btn_popover7" class="popover_pluce-container" data-container="body" data-placement="bottom" data-toggle="popover" >
                <p>+</p>
              </a>

              <div id="popover_content7" class="popover_content hide">
                <div class="popover_content-text">
                  <h4>Реалистичность</h4>
                  <p>Используем реалистичные цвета, которые есть в природе</p>
                </div>
                <img src="assets/img/brick_types/popover_content/7.png" alt="">
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section class="work_price">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 offset-lg-7">
            <h1 class="section_title">Рассчитайте точную стоимость камня
              на ваш дом</h1>
              <form action="mailer/send.php" method="POST">
                <fieldset>
                  <h2 class="form_title">Куда прислать цену?</h2>
                  <hr>
                  <div id="form1" class="form_socials-container">
                    <div class="form_social form_social-viber">
                      <input type="radio" name="messenger" id="size_1" checked value="Viber">
                      <label for="size_1">
                        <img src="assets/img/form_icons/viber_reverse.svg" alt="">
                        <img class="form_social-hover-icon" src="assets/img/form_icons/viber.svg" alt="">
                        в Viber
                      </label>
                    </div>
                    <div class="form_social form_social-telegram">
                      <input type="radio" name="messenger" id="size_2" value="Telegram">
                      <label for="size_2">
                        <img src="assets/img/form_icons/telegram.svg" alt="">
                        <img class="form_social-hover-icon" src="assets/img/form_icons/telegram_reverse.svg" alt="">
                        в Telegram
                      </label>
                    </div>
                    <div class="form_social form_social-whatsapp">
                      <input type="radio" name="messenger" id="size_3" value="WhatsApp">
                      <label for="size_3">
                        <img src="assets/img/form_icons/whatsapp.svg" alt="">
                        <img class="form_social-hover-icon" src="assets/img/form_icons/whatsapp_reverse.svg" alt="">
                        в Whatsapp
                      </label>
                    </div>
                    <div class="form_social form_social-phone">
                      <input type="radio" name="messenger" id="size_4" value="звонок на телефон">
                      <label for="size_4">
                        <img src="assets/img/form_icons/tel_btn.svg" alt="">
                        <img class="form_social-hover-icon" src="assets/img/form_icons/tel_btn-reverse.svg" alt="">
                        Позвоните мне
                      </label>
                    </div>
                    <div class="form_socials-choised">
                      <p>Выбран <span>Viber</span></p>
                    </div>
                  </div>
                  <div class="form_tel-input-container">
                    <input id="tel_input" class="w-100 tel_input" required type="tel" name="user_phone" placeholder="+375 (__) ___-__-__">
                  </div>
                  <button class="btn btn-primary btn_small w-100" type="submit" >узнать цену</button>
                  <div class=""> 
                    <label class="form_accept-container">
                      <input type="checkbox" checked="checked" name="checkbox">
                      <span class="checkmark"></span>
                      <p>Согласен с <span>Политикой конфиденциальности</span></p>
                    </label>
                  </div>
                </fieldset>
              </form>  
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="catalog_brick">
      <div class="container">
        <h1 class="section_title text-center">Каталог декаративного <br> камня нашего производста</h1>
        <div class="catalog_brick-slide-container row">
          <article class="catalog_brick-slide">
            <div class="catalog_brick-slide-img-container">
              <img class="img-fluid w-100" src="assets/img/catalog_icons/1.png" alt="">
            </div>
            <div class="catalog_brick-slide-info-container">
              <h2>Название камня</h2>
              <p>Краткое описание, рассказ о камне или набор характертистик</p>
              <h3>25 руб./м2</h3>
              <div class="text-center">
                <a class="btn btn_small" data-toggle="modal" data-target="#sale">Рассчитать стоимость</a>
              </div>
            </div>
          </article>
          <article class="catalog_brick-slide">
            <div class="catalog_brick-slide-img-container">
              <img class="img-fluid w-100" src="assets/img/catalog_icons/1.png" alt="">
            </div>
            <div class="catalog_brick-slide-info-container">
              <h2>Название камня</h2>
              <p>Краткое описание, рассказ о камне или набор характертистик</p>
              <h3>25 руб./м2</h3>
              <div class="text-center">
                <a class="btn btn_small" data-toggle="modal" data-target="#sale">Рассчитать стоимость</a>
              </div>
            </div>
          </article>
          <article class="catalog_brick-slide">
            <div class="catalog_brick-slide-img-container">
              <img class="img-fluid w-100" src="assets/img/catalog_icons/1.png" alt="">
            </div>
            <div class="catalog_brick-slide-info-container">
              <h2>Название камня</h2>
              <p>Краткое описание, рассказ о камне или набор характертистик</p>
              <h3>25 руб./м2</h3>
              <div class="text-center">
                <a class="btn btn_small" data-toggle="modal" data-target="#sale">Рассчитать стоимость</a>
              </div>
            </div>
          </article>
          <article class="catalog_brick-slide">
            <div class="catalog_brick-slide-img-container">
              <img class="img-fluid w-100" src="assets/img/catalog_icons/1.png" alt="">
            </div>
            <div class="catalog_brick-slide-info-container">
              <h2>Название камня</h2>
              <p>Краткое описание, рассказ о камне или набор характертистик</p>
              <h3>25 руб./м2</h3>
              <div class="text-center">
                <a class="btn btn_small" data-toggle="modal" data-target="#sale">Рассчитать стоимость</a>
              </div>
            </div>
          </article>
        </div>
      </div>
      <div class="container catalog_brick-full">
        <div class="row">
          <div class="col-lg-6">
            <h1 class="section_title">Получите доступ к полному каталогу декоративного камня</h1>
            <div class="container">
              <div class="row">
                <div class="col-lg-5 d-flex justify-content-start justify-content-lg-between align-items-center">
                  <img class="mr-lg-2 mr-3"  src="assets/img/catalog_icons/pluce_1.png" alt="">
                  <p class="catalog_brick-full-pluce-text">34 коллекции камня </p>
                </div>
                <div class="col-lg-7 d-flex justify-content-start justify-content-lg-between align-items-center">
                  <img class="mr-lg-2 mt-3 mt-lg-0 mr-3" src="assets/img/catalog_icons/pluce_2.png" alt="">
                  <p class="catalog_brick-full-pluce-text">Каталог реализованных работ</p>
                </div>
              </div>
            </div>
            <form class="w-lg-100" action="mailer/send.php" method="POST">
              <fieldset>
                <h2 class="form_title">Куда отправить каталог?</h2>
                <hr>
                <div id="form2" class="form_socials-container">
                  <div class="form_social form_social-viber">
                    <input type="radio" name="messenger" id="size_5" checked value="Viber">
                    <label for="size_5">
                      <img src="assets/img/form_icons/viber_reverse.svg" alt="">
                      <img class="form_social-hover-icon" src="assets/img/form_icons/viber.svg" alt="">
                      в Viber
                    </label>
                  </div>
                  <div class="form_social form_social-telegram">
                    <input type="radio" name="messenger" id="size_6" value="Telegram">
                    <label for="size_6">
                      <img src="assets/img/form_icons/telegram.svg" alt="">
                      <img class="form_social-hover-icon" src="assets/img/form_icons/telegram_reverse.svg" alt="">
                      в Telegram
                    </label>
                  </div>
                  <div class="form_social form_social-whatsapp">
                    <input type="radio" name="messenger" id="size_7" value="WhatApp">
                    <label for="size_7">
                      <img src="assets/img/form_icons/whatsapp.svg" alt="">
                      <img class="form_social-hover-icon" src="assets/img/form_icons/whatsapp_reverse.svg" alt="">
                      в Whatsapp
                    </label>
                  </div>
                  <div class="form_social form_social-phone">
                    <input type="radio" name="messenger" id="size_8" value="звонок на телефон">
                    <label for="size_8">
                      <img src="assets/img/form_icons/tel_btn.svg" alt="">
                      <img class="form_social-hover-icon" src="assets/img/form_icons/tel_btn-reverse.svg" alt="">
                      Позвоните мне
                    </label>
                  </div>
                  <div class="form_socials-choised">
                    <p>Выбран <span>Viber</span></p>
                  </div>
                </div>
                <div class="row mt-lg-4">
                  <div class="col-lg-6">
                    <div class="form_tel-input-container">
                      <input id="tel_input1" class="w-100 tel_input" required type="tel" name="user_phone" placeholder="+375 (__) ___-__-__">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <button class="btn btn_small w-100" type="submit" data-toggle="modal" data-target="#submit">ПОЛУЧИТЬ КАТАЛОГ<p>Персональную скидку 10%</p></button>
                  </div>
                </div>
                <div class=""> 
                  <label class="form_accept-container d-flex justify-content-center align-items-center">
                    <input type="checkbox" checked="checked" name="checkbox">
                    <span class="checkmark"></span>
                    <p class="ml-2">Согласен с <span>Политикой конфиденциальности</span></p>
                  </label>
                </div>
              </fieldset>
            </form>  
          </div>
        </div>
      </div>
    </section>

    <section id="show_room" class="show_room">
      <div class="container">
        <h1 class="section_title text-center"><span>А если, хотите подрогать и увидить в живую</span> 
          <br> 
          В нашем шоу-руме Вы найдете подходящее <br class="d-none d-lg-block"> решение с вероятностью 95%
        </h1>
        <div class="row justify-content-center">
          <div class="col-lg-4 col-sm-6">
            <div class="show_room-pluce-container">
              <img src="assets/img/show_room/pluce1.png" alt="">
              <div class="show_room-pluce-text-container">
                <h6>Расскажем как правильно</h6>
                <p>уложить камень, какие материалы использовать и т. д. </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="show_room-pluce-container">
              <img src="assets/img/show_room/pluce2.png" alt="">
              <div class="show_room-pluce-text-container">
                <h6>Покажем наши работы</h6>
                <p>Покажем объекты, на которых используется наш камень. </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="show_room-pluce-container">
              <img src="assets/img/show_room/pluce3.png" alt="">
              <div class="show_room-pluce-text-container">
                <h6>Дадим образцы фактур</h6>
                <p>Дадим образцы понравившихся фактур домой на примеру.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="show_room-slider-container">
        <div class="show_room-main-slide">
          <img src="assets/img/show_room/slider_img/bg.png" alt="">
          <img src="assets/img/show_room/slider_img/1.png" alt="">
          <img src="assets/img/show_room/slider_img/2.png" alt="">
          <img src="assets/img/show_room/slider_img/3.png" alt="">
          <img src="assets/img/show_room/slider_img/4.png" alt="">
        </div>
        <div class="container">
          <div class="row d">
            <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 show_room-all-slides">
              <div class="show-room-slide">
                <img src="assets/img/show_room/slider_img/bg.png" alt="">
              </div>
              <div class="show-room-slide">
                <img src="assets/img/show_room/slider_img/1.png" alt="">
              </div>
              <div class="show-room-slide">
                <img src="assets/img/show_room/slider_img/2.png" alt="">
              </div>
              <div class="show-room-slide">
                <img src="assets/img/show_room/slider_img/3.png" alt="">
              </div>
              <div class="show-room-slide">
                <img src="assets/img/show_room/slider_img/4.png" alt="">
              </div>
              
            </div>
            <div class="col-xl-4 offset-xl-4 col-lg-6 offset-lg-3">
              <div class="btn_border">
                <a class="btn"  data-toggle="modal" data-target="#consult2">Укажите время вашего 
                  визита в шоурум</a>
                  <p class="ml-4">что бы мы приготовились к вашему приходу</p>
              </div>
              
            </div>
          </div>
        </div>
        
      </div>
    </section>

    <section id="about" class="pluces">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 d-none d-lg-block">
            <a data-toggle="modal" data-target="#video">
              <img class="img-fluid mt-5" src="assets/img/pluces/director.png" alt="">
            </a>
          </div>
          <div class="col-lg-6">
            <h1 class="section_title">Декоративный камень <br> от одного <span>из лучших производителей в Беларуси</span></h1>
            <div class="pluce_container">
              <img src="assets/img/pluces/1.png" alt="">
              <div class="pluce_container-text">
                <h6>ТОП-3 производителей в Беларуси</h6>
                <p>по количеству коллекций  и видов декоративного камня</p>
              </div>
            </div>
            <div class="pluce_container">
              <img src="assets/img/pluces/2.png" alt="">
              <div class="pluce_container-text">
                <h6>Мы молодые и более гибкие</h6>
                <p>Гибкие по срокам и индивидуальным цветовым решениям в отличие от других</p>
              </div>
            </div>
            <div class="pluce_container">
              <img src="assets/img/pluces/3.png" alt="">
              <div class="pluce_container-text">
                <h6>Уникальные коллекции</h6>
                <p>У нас Вы найдете уникальные коллекции, которых нет в других компаниях во всей стране</p>
              </div>
            </div>
            <div class="pluce_container">
              <img src="assets/img/pluces/4.png" alt="">
              <div class="pluce_container-text">
                <h6>Наше представительство есть в 34 городах Беларуси</h6>
              </div>
            </div>
            <div class="pluce_container">
              <img src="assets/img/pluces/5.png" alt="">
              <div class="pluce_container-text">
                <h6>Качественный декоративный кирпич</h6>
                <p>"Дом камня" - единственный в Беларуси  производитель качественного декоративного кирпича ручной формовки</p>
              </div>
            </div>
          </div>
        </div>
        <h1 class="section_title not_pluces-section-title text-center">Последние объекты с использованием <br class="d-none d-lg-block"> нашего декоративного камня</h1>
      </div>
    </section>

    <section id="cases" class="events d-flex flex-wrap justify-content-between">
      <div class="event__img">
        <img src="./assets/img/aaaaa/back-4.png" alt="" class="w-100 w-sm-100">
        <div class="overlay"></div>
        <div class="row events-text-block">
          <div class="col-9">
            <h4 class="event__card_title">Фасад здания БелРеконструкции на Кальварийской</h4>
          </div>
          <div class="col-3 events_pluce-container text-right">
            <a class="btn_plus my-auto" data-toggle="modal" data-target="#case1">+</a>
          </div>
        </div>
      </div>
      <div class="event__img">
        <img src="./assets/img/aaaaa/back-2.png" alt="" class="w-100 w-sm-100">
        <div class="overlay"></div>
        <div class="row events-text-block">
          <div class="col-9">
            <h4 class="event__card_title">Фасад здания БелРеконструкции на Кальварийской</h4>
          </div>
          <div class="col-3 events_pluce-container text-right">
            <a href="" class="btn_plus">+</a>
          </div>
        </div>
      </div>
      <div class="event__img">
        <img src="./assets/img/aaaaa/back-3.png" alt="" class="w-100 w-sm-100">
        <div class="overlay"></div>
        <div class="row events-text-block">
          <div class="col-9">
            <h4 class="event__card_title">Фасад здания БелРеконструкции на Кальварийской</h4>
          </div>
          <div class="col-3 events_pluce-container text-right">
            <a href="" class="btn_plus">+</a>
          </div>
        </div>
      </div>
      <div class="event__img">
        <img src="./assets/img/aaaaa/back-4.png" alt="" class="w-100 w-sm-100">
        <div class="overlay"></div>
        <div class="row events-text-block">
          <div class="col-9">
            <h4 class="event__card_title">Фасад здания БелРеконструкции на Кальварийской</h4>
          </div>
          <div class="col-3 events_pluce-container text-right">
            <a href="" class="btn_plus">+</a>
          </div>
        </div>
      </div>
    </section>

    <section id="reviews" class="reviews">
      <div class="container">
        <h1 class="section_title text-center">Отзывы от наших клиентов</h1>
        <!--<ul class="nav nav-tabs row d-flex justify-content-between align-items-center">
          <li class="nav-item col-xl-3 col-lg-4">
            <a class="nav-link active reviews_name-container" data-toggle="tab" href="#description">
              <img src="assets/img/reviews/1/man.png" alt="">
              <div class="reviews_name">
                <h6>Максим и Кристина</h6>
                <p>дом на Дроздах</p>
              </div>
            </a>
          </li>
          <li class="nav-item col-xl-3 col-lg-4">
            <a class="nav-link reviews_name-container" data-toggle="tab" href="#characteristics">
              <img src="assets/img/reviews/1/man.png" alt="">
              <div class="reviews_name">
                <h6>Максим и Кристина</h6>
                <p>дом на Дроздах</p>
              </div>
            </a>
          </li>
          <li class="nav-item col-xl-3 col-lg-4">
            <a class="nav-link reviews_name-container" data-toggle="tab" href="#opinion">
              <img src="assets/img/reviews/1/man.png" alt="">
              <div class="reviews_name">
                <h6>Максим и Кристина</h6>
                <p>дом на Дроздах</p>
              </div>
            </a>
          </li>
        </ul>-->
        <div class="tab-content">
          <div class="tab-pane fade show active" id="description">
            <div class="reviews_slider">
              <div class="reviews_slide">
                <img class="img-fluid" src="assets/img/footer/slider/1.png" alt="">
              </div>
              <div class="reviews_slide">
                <img class="img-fluid" src="assets/img/footer/slider/1.png" alt="">
              </div>
              <div class="reviews_slide">
                <img class="img-fluid" src="assets/img/footer/slider/1.png" alt="">
              </div>
              <div class="reviews_slide">
                <img class="img-fluid" src="assets/img/footer/slider/1.png" alt="">
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="characteristics">
            Характеристики товара...
          </div>
          <div class="tab-pane fade" id="opinion">
            Отзывы...
          </div>
        </div>
      </div>
    </section>

    <section class="additional">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-9 mx-auto">
            <div class="additional_container additional_sign-up-container">
              <h3>Запишитесь на экскурсию по нашим объектам</h3>
              <a class="btn btn_primary btn_small" data-toggle="modal" data-target="#consult3">Записаться</a>
            </div>
          </div>
          <div class="col-lg-6 col-9 mx-auto mt-4 mt-lg-0">
            <div class="additional_container additional_instagram-container">
              <h3>Больше наших работ, отзывов в инстаграме</h3>
              <a target="_blank" href="https://www.instagram.com/domkamnya.by/">@domkamnya.by</a>
              <span></span>
              <p>1177 подписчика</p>
            </div>
          </div>
        </div>
      </div> 
    </section>

    <section id="work_stages" class="work_stages">
      <div class="container">
        <h1 class="section_title text-center">Мы создали лучший сервис и схему <br> работы, для наших клиентов</h1>
        <div class="row">
          <div class="col-lg-12">
            <div class="work_stages-container">
              <div class="work_stages-navs">
                <ul class="nav nav-tabs d-flex justify-content-between align-items-center">
                  <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#deadlines">Сроки</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#delivery">Доставка</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#guarantee">Гарантия</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#service">Обслуживание</a>
                  </li>
                </ul>
              </div>
              <div class="work_stages-slider">
                <div class="work_stages-content tab-content">
                  <div class="tab-pane col-lg-8 fade show active" id="deadlines">
                    <h3>Гарантия сроков</h3>
                    <div class="work-stages-content-plus">
                      <img src="assets/img/work_stages/slide1/money.png" alt="">
                      <p class="ml-3">По договору за каждый день <br> просрочки выплачиваем пеню</p>
                    </div>
                    <div class="work-stages-content-plus">
                      <img src="assets/img/work_stages/slide1/time.png" alt="">
                      <p class="ml-3">Работаем в самые сжатые сроки, <br> когда другие не готовы</p>
                    </div>
                    <div class="row">
                      <div class="col-lg-5 work-stages-content-fact">
                        <h4>Факт 1</h4>
                        <p>Производственные мощности, 160 м2 в сутки, работаем с любым объемом</p>
                      </div>
                      <div class="col-lg-5 offset-lg-1 work-stages-content-fact">
                        <h4>Факт 2</h4>
                        <p>Произвели 80м2 для клиента за 12 дней, когда другие заявляли от 30 дней</p>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane col-lg-8 fade" id="delivery">
                    <h1>По договору за каждый день просрочки выплачиваем пеню</h1>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="services">
      <div class="container">
        <h1 class="section_title text-center">Как вы получите свой фасад <br> под ключ.</h1>
        <div class="row">
          <ul class="services_tabs-container nav nav-tabs">
            <li class="nav-item">
              <a class="nav-link active" id="1" data-toggle="tab" href="#production_tab"><span>1</span> Производство</a>
            </li>
            <span class="betweener"></span>
            <li class="nav-item">
              <a class="nav-link" id="2" data-toggle="tab" href="#showroom_tab"><span>2</span>Шоурум</a>
            </li>
            <span class="betweener"></span>
            <li class="nav-item">
              <a class="nav-link" id="3" data-toggle="tab" href="#delivery_tab"><span>3</span>Доставка</a>
            </li>
            <span class="betweener"></span>
            <li class="nav-item">
              <a class="nav-link" id="4" data-toggle="tab" href="#service_tab"><span>4</span>Обслуживание</a>
            </li>
          </ul>
          <div class="tab-content services_content col-lg-7">
            <div class="tab-pane fade show active" id="production_tab">
              <h2>Производство</h2>
              <p>5-20 дней в зависимости от объема и сложности заказа</p>
              <h6>Описание этапа, возможен вывод других регалий и фактов, возможен вывод иконками, производственного
                этапа, ждём контента</h6>
                <img style="right: -65%; top: 30%;" src="assets/img/services/1.png" alt="">
            </div>
            <div class="tab-pane fade" id="showroom_tab">
              <h2>Камень попадает в шоурум</h2>
              <p>5-20 дней в зависимости от объема и сложности заказа</p>
              <h6>В шоуруме вы его выбираете вам помогает менеджер, и тд.</h6>
              <img style="right: -65%; top: 20%;" src="assets/img/services/1.png" alt="">
            </div>
            <div class="tab-pane fade" id="delivery_tab">
              <h2>Доставляем по всей РБ</h2>
              <p>5-20 дней в зависимости от объема и сложности заказа</p>
              <h6>Вы можете забрать со склада и тд. перед отправкой проверяем камень на повреждение помогаем с загрузкой</h6>
              <img style="right: -50%; top: 60%;" src="assets/img/services/1.png" alt="">
            </div>
            <div class="tab-pane fade" id="service_tab">
              <h2>Помогаем с монтажом, и уходом за камнем
                </h2>
              <p>Делаем то-то</p>
              <h6>В шоуруме вы его выбираете вам помогает менеджер, и тд.</h6>
              <img style="right: -50%; top: 45%;" src="assets/img/services/2.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="team">
      <h1 class="section_title text-center">Для Вас работает команда из <br>9 специалистов, которую мы собирали <br>5 лет</h1>
      <div class="team_img-container">
        <img class="img-fluid mx-auto d-block" src="assets/img/team/1.png" alt="">
        <a data-toggle="modal" data-target="#teammate">
          <img class="team_plus" style="top: 55%; left: 5%;" src="assets/img/team/plus.png" alt="">
        </a>
        <a data-toggle="modal" data-target="#teammate">
          <img class="team_plus" style="top: 62%; left: 18%;" src="assets/img/team/plus.png" alt="">
        </a>
        <a data-toggle="modal" data-target="#teammate">
          <img class="team_plus" style="top: 41%; left: 27%;" src="assets/img/team/plus.png" alt="">
        </a>
        <a  data-toggle="modal" data-target="teammate">
          <img class="team_plus" style="top: 60%; left: 38%;" src="assets/img/team/plus.png" alt="">
        </a>
        <a data-toggle="modal" data-target="#teammate">
          <img class="team_plus" style="top: 38%; left: 48%;" src="assets/img/team/plus.png" alt="">
        </a>
        <a data-toggle="modal" data-target="#teammate">
          <img class="team_plus" style="top: 47%; left: 58%;" src="assets/img/team/plus.png" alt="">
        </a>
        <a data-toggle="modal" data-target="#teammate">
          <img class="team_plus" style="top: 40%; right: 27%;" src="assets/img/team/plus.png" alt="">
        </a>
        <a data-toggle="modal" data-target="#teammate">
          <img class="team_plus" style="top: 52%; right: 18%;" src="assets/img/team/plus.png" alt="">
        </a>
        <a data-toggle="modal" data-target="#teammate">
          <img class="team_plus" style="top: 38%; right: 8%;" src="assets/img/team/plus.png" alt="">
        </a>
      </div>
    </section>

    <section class="free_consult">
      <div class="container">
        <div class="row">
          <div class="col-lg-5"></div>
          <div class="col-lg-7">
            <h1 class="section_title">Получите бесплатную консультацию от специалиста "Дом камня"</h1>
            <h6>Поможет выбрать тот самый камень, сделает 3D визуализацию и ответит на каждый вопрос</h6>
            <div class="d-flex justify-content-start align-items-center">
              <img src="assets/img/consultation/1.png" alt="">
              <p class="ml-3">Вышлем вам полный каталог с ценами. <br> перед консультацией</p>
            </div>
            <div class="btn_border">
              <a class="btn"  data-toggle="modal" data-target="#consult2">ПОЛУЧИТЬ КОНСУЛЬТАЦИЮ</a>
                <p class="ml-4">Возможна выездная консультация</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="not_stone">
      <div class="container">
        <h1 class="section_title text-center">Дом Камня, это не только велеколепный декоративный камень</h1>
        <div class="row">
          <div class="col-lg-4 col-sm-6">
            <a class="not_stone-container" data-toggle="modal" data-target="#item">
              <img class="img-fluid" src="assets/img/not_stone/1.png" alt="">
              <p>Изделия из Гипса</p>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="not_stone-container" data-toggle="modal" data-target="#item">
              <img class="img-fluid" src="assets/img/not_stone/1.png" alt="">
              <p>Изделия из Гипса</p>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="not_stone-container" data-toggle="modal" data-target="#item">
              <img class="img-fluid" src="assets/img/not_stone/1.png" alt="">
              <p>Изделия из Гипса</p>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="not_stone-container" data-toggle="modal" data-target="#item">
              <img class="img-fluid" src="assets/img/not_stone/1.png" alt="">
              <p>Изделия из Гипса</p>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="not_stone-container" data-toggle="modal" data-target="#item">
              <img class="img-fluid" src="assets/img/not_stone/1.png" alt="">
              <p>Изделия из Гипса</p>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="not_stone-container" data-toggle="modal" data-target="#item">
              <img class="img-fluid" src="assets/img/not_stone/1.png" alt="">
              <p>Изделия из Гипса</p>
            </a>
          </div>
        </div>
        <div class="not_stone-slider">
          <a class="not_stone-container" data-toggle="modal" data-target="#item">
            <img class="img-fluid" src="assets/img/not_stone/1.png" alt="">
            <p>Изделия из Гипса</p>
          </a>
          <a class="not_stone-container" data-toggle="modal" data-target="#item">
            <img class="img-fluid" src="assets/img/not_stone/1.png" alt="">
            <p>Изделия из Гипса</p>
          </a>
          <a class="not_stone-container" data-toggle="modal" data-target="#item">
            <img class="img-fluid" src="assets/img/not_stone/1.png" alt="">
            <p>Изделия из Гипса</p>
          </a>
        </div>
      </div>
    </section>

    <section class="catalog_brick-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-lg-6">
            <h1 class="section_title">Получите доступ к каталогу декоративных изделий и камня с ценами - XX уникальных модели</h1>
            <form class="w-lg-100">
              <fieldset>
                <h2 class="form_title">Куда отправить каталог?</h2>
                <hr>
                <div id="form1" class="form_socials-container">
                  <div class="form_social form_social-viber">
                    <input type="radio" name="messenger" id="size_9" checked value="Viber">
                    <label for="size_9">
                      <img src="assets/img/form_icons/viber_reverse.svg" alt="">
                      <img class="form_social-hover-icon" src="assets/img/form_icons/viber.svg" alt="">
                      в Viber
                    </label>
                  </div>
                  <div class="form_social form_social-telegram">
                    <input type="radio" name="messenger" id="size_10" value="Telegram">
                    <label for="size_10">
                      <img src="assets/img/form_icons/telegram.svg" alt="">
                      <img class="form_social-hover-icon" src="assets/img/form_icons/telegram_reverse.svg" alt="">
                      в Telegram
                    </label>
                  </div>
                  <div class="form_social form_social-whatsapp">
                    <input type="radio" name="messenger" id="size_11" value="WhatsApp">
                    <label for="size_11">
                      <img src="assets/img/form_icons/whatsapp.svg" alt="">
                      <img class="form_social-hover-icon" src="assets/img/form_icons/whatsapp_reverse.svg" alt="">
                      в Whatsapp
                    </label>
                  </div>
                  <div class="form_social form_social-phone">
                    <input type="radio" name="messenger" id="size_12" value="звонок на телефон">
                    <label for="size_12">
                      <img src="assets/img/form_icons/tel_btn.svg" alt="">
                      <img class="form_social-hover-icon" src="assets/img/form_icons/tel_btn-reverse.svg" alt="">
                      Позвоните мне
                    </label>
                  </div>
                  <div class="form_socials-choised">
                    <p>Выбран <span>Viber</span></p>
                  </div>
                </div>
                <div class="row mt-lg-4">
                  <div class="col-xl-6">
                    <div class="form_tel-input-container">
                      <input id="tel_input6" class="tel_input w-100"  required type="tel" name="user_phone" placeholder="+375 (__) ___-__-__">
                    </div>
                  </div>
                  <div class="col-xl-6">
                    <button class="btn btn_small w-100"  type="submit" data-toggle="modal" data-target="#submit">ПОЛУЧИТЬ КАТАЛОГ<p>Персональную скидку 10%</p></button>
                  </div>
                </div>
                <div class=""> 
                  <label class="form_accept-container d-flex justify-content-center align-items-center">
                    <input type="checkbox" checked="checked" name="checkbox">
                    <span class="checkmark"></span>
                    <p class="ml-2">Согласен с <span>Политикой конфиденциальности</span></p>
                  </label>
                </div>
              </fieldset>
            </form>  
          </div>
        </div>
      </div>
    </section>
    
    <section id="for_designers" class="take_kp">
      <div class="container text-center">
        <h1 class="section_title text-center">Вы занимаетесь дизайном интерьера, <br>
          строите дома под ключ или делаете ремонт.</h1>
        <h5>Получите индивидуальное коммерческое предложение</h5>
        <div class="row">
          <div class="col-lg-3 col-6 mt-4 mt-lg-0 d-flex flex-column justify-content-center align-items-center">
            <img src="assets/img/take_kp/1.png" alt="">
            <p>Вознаграждение <br> до 10% за заказ</p>
          </div>
          <div class="col-lg-3 col-6 mt-4 mt-lg-0 d-flex flex-column justify-content-center align-items-center">
            <img src="assets/img/take_kp/2.png" alt="">
            <p>Предоставим каталоги <br> и образцы</p>
          </div>
          <div class="col-lg-3 col-6 mt-4 mt-lg-0 d-flex flex-column justify-content-center align-items-center">
            <img src="assets/img/take_kp/3.png" alt="">
            <p>Выполним любой <br> каприз вашего клиента</p>
          </div>
          <div class="col-lg-3 col-6 mt-4 mt-lg-0 d-flex flex-column justify-content-center align-items-center">
            <img src="assets/img/take_kp/4.png" alt="">
            <p>Финансовая гарантия <br> сроков</p>
          </div>
        </div>
        <a href="" class="btn btn-primary mx-auto" data-toggle="modal" data-target="#catalog1">получить индивидуальное КП</a>
      </div>
    </section>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-6">
            <h1 class="section_title">Контакты</h1>
          </div>
          <div class="col-lg-3 col-6 text-right offset-lg-6">
            <img class="img-fluid" src="assets/img/footer/footer_logo.png" alt="">
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-sm-6 footer_contact">
            <div class="footer_contact-container">
              <div class="footer_contact-title-container">
                <img src="assets/img/footer/footer_icons/place.svg" alt="">
                <h4>Адрес шоу-рума</h4>
              </div>
              <div class="footer_contact-text-container">
                <p>Минск, Восточная улица, дом 125</p>
                <p>пн-пт С 8:00 до 17:00</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 footer_contact">
            <div class="footer_contact-container">
              <div class="footer_contact-title-container">
                <img src="assets/img/footer/footer_icons/place.svg" alt="">
                <h4>Адрес склада</h4>
              </div>
              <div class="footer_contact-text-container">
                <p>Минский район, д.Юхновка, ул.Луговая, д.8</p>
                <p>пн-пт С 8:00 до 17:00</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 footer_contact">
            <div class="footer_contact-container">
              <div class="footer_contact-title-container">
                <img src="assets/img/footer/footer_icons/call.svg" alt="">
                <h4>Телефон</h4>
              </div>
              <div class="footer_contact-text-container">
                <div class="footer_tel">
                  <a href="">8 (964) 622-32-59</a>
                  <div>
                    <a href="">
                      <img class="img-fluid" src="assets/img/form_icons/whatsapp_footer.svg" alt="">
                    </a>
                    <a href="">
                      <img class="img-fluid" src="assets/img/form_icons/telegram_footer.svg" alt="">
                    </a>
                  </div>
                </div>
                <a class="footer_modal-link" href="">Перезвонить</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 footer_contact">
            <div class="footer_contact-container">
              <div class="footer_contact-title-container">
                <img src="assets/img/footer/footer_icons/mail.svg" alt="">
                <h4>Почта</h4>
              </div>
              <div class="footer_contact-text-container">
                <a href="">nfo@domkamnya.by</a>
                <a class="footer_modal-link" href="">Написать</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-7 footer_map">
            <iframe src="https://snazzymaps.com/embed/248990" width="100%" height="100%" style="border:none;"></iframe>
          </div>
          <div class="col-lg-5">
            <div class="footer_slider">
              <article class="footer_slide">
                <div class="footer_slide-img-container">
                  <img class="img-fluid" src="assets/img/footer/slider/1.png" alt="">
                </div>
                <h6>Как к нам добраться</h6>
                <hr>
                <p>Проходите в арку возле подъезда номер 1, затем сразу налево - там вы увидите вывеску синего цвета над входом</p>
              </article>
              <article class="footer_slide">
                <div class="footer_slide-img-container">
                  <img class="img-fluid" src="assets/img/footer/slider/1.png" alt="">
                </div>
                <h6>Как к нам добраться</h6>
                <hr>
                <p>Проходите в арку возле подъезда номер 1, затем сразу налево - там вы увидите вывеску синего цвета над входом</p>
              </article>
            </div>
          </div>
        </div>
        <div class="row footer_bot">
          <div class="col-lg-6 d-flex justify-content-center justify-content-lg-start align-items-center">
            <p>Общество с ограниченной ответственностью «Дом Камня» <span>УНП 692122164</span></p> 
          </div>
          <div class="col-lg-3 d-flex justify-content-center align-items-center">
            <a class="mr-3" href="">
              <img src="assets/img/footer/footer_icons/facebook.svg" alt="">
            </a>
            <a href="">
              <img src="assets/img/footer/footer_icons/instagram.svg" alt="">
            </a>
            <a class="mx-3" href="">
              <img src="assets/img/footer/footer_icons/vk.svg" alt="">
            </a>
            <a href="">
              <img src="assets/img/footer/footer_icons/youtube.svg" alt="">
            </a>
          </div>
          <div class="col-lg-3">
            <a href="" class="d-flex justify-content-center justify-content-lg-end align-items-center">
              <p>Разработка сайта:</p>
              <img src="assets/img/footer/lead_me-logo.png" alt="">
            </a>
          </div>
        </div>
      </div>
    </footer>

    <!-- MODALS -->

    <!-- MODALS FOR CATALOG -->
    <div class="modal fade bd-example-modal-lg" id="catalog1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-centered" role="document">
        <div class="modal-content modal_book-container">
          <a class="modal_book" href="">
            <img src="assets/img/modals/books/1.png" alt="">
          </a>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <div class="modal-body">
            <div class="container">
              <div class="row">
                <div class="col-lg-7">
                  <h2 class="modal_title">Получите доступ <br> к каталогу декоративного камня</h2>
                  <div class="modal_pluce-container">
                    <img class="mr-3" src="assets/img/pluces/3.png" alt="">
                    <p>34 коллекции камня со всеми вариантами фактур и цветов,<span> подробными характеристиками и ценой за м2</span></p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xl-6 col-lg-8">
                  <form>
                    <fieldset>
                      <h2 class="form_title">Куда прислать цену?</h2>
                      <hr>
                      <div id="form4" class="form_socials-container">
                        <div class="form_social form_social-viber">
                          <input type="radio" name="messenger" id="size_13" checked value="Viber">
                          <label for="size_13">
                            <img src="assets/img/form_icons/viber_reverse.svg" alt="">
                            <img class="form_social-hover-icon" src="assets/img/form_icons/viber.svg" alt="">
                            в Viber
                          </label>
                        </div>
                        <div class="form_social form_social-telegram">
                          <input type="radio" name="messenger" id="size_14" value="Telegram">
                          <label for="size_14">
                            <img src="assets/img/form_icons/telegram.svg" alt="">
                            <img class="form_social-hover-icon" src="assets/img/form_icons/telegram_reverse.svg" alt="">
                            в Telegram
                          </label>
                        </div>
                        <div class="form_social form_social-whatsapp">
                          <input type="radio" name="messenger" id="size_15" value="WhatsApp">
                          <label for="size_15">
                            <img src="assets/img/form_icons/whatsapp.svg" alt="">
                            <img class="form_social-hover-icon" src="assets/img/form_icons/whatsapp_reverse.svg" alt="">
                            в Whatsapp
                          </label>
                        </div>
                        <div class="form_social form_social-phone">
                          <input type="radio" name="messenger" id="size_16" value="звонок на телефон">
                          <label for="size_16">
                            <img src="assets/img/form_icons/tel_btn.svg" alt="">
                            <img class="form_social-hover-icon" src="assets/img/form_icons/tel_btn-reverse.svg" alt="">
                            Позвоните мне
                          </label>
                        </div>
                        <div class="form_socials-choised">
                          <p>Выбран <span>Viber</span></p>
                        </div>
                      </div>
                      <div class="form_tel-input-container">
                        <input id="tel_input2" class="w-100 tel_input" required type="tel" name="user_phone" placeholder="+375 (__) ___-__-__">
                      </div>
                      <button class="btn btn-primary btn_small w-100" type="submit" data-toggle="modal" data-target="#submit">узнать цену</button>
                      <div class=""> 
                        <label class="form_accept-container">
                          <input type="checkbox" checked="checked" name="checkbox">
                          <span class="checkmark"></span>
                          <p>Согласен с <span>Политикой конфиденциальности</span></p>
                        </label>
                      </div>
                    </fieldset>
                  </form>  
                </div>
                <div class="col-xl-6 col-lg-4 d-flex align-items-center">
                  <div class="modal_pluces-border">
                    <h4>Дополнительно Вы получите:</h4>
                    <div class="row">
                      <div class="col-xl-6">
                        <img src="assets/img/modals/icons/percent.svg" alt="">
                        <p>Персональная скидка 10% на все позиции в каталоге</p>
                      </div>
                      <div class="col-xl-6">
                        <img src="assets/img/modals/icons/book.svg" alt="">
                        <p>Каталог реализованных объектов с подробным описанием</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- MODALS FOR CONSULT -->
    <div class="modal fade bd-example-modal-lg" id="consult1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-centered" role="document">
        <div class="modal-content modal_consultant-container">
          <div class="modal_consultant">
            <img src="assets/img/consultation/elena.png" alt="">
          </div>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <div class="modal-body">
            <div class="container">
              <div class="row">
                <div class="col-lg-6 offset-lg-6">
                  <h2 class="modal_title">Получите консультацию специалиста</h2>
                  <div class="modal_pluce-container">
                    <p>Он ответит на все ваши вопросы и подскажет, какой камень выбрать в рамках вашего бюджета</p>
                  </div>
                  <form>
                    <fieldset>
                      <h2 class="form_title">Куда прислать цену?</h2>
                      <hr>
                      <div id="form5" class="form_socials-container">
                        <div class="form_social form_social-viber">
                          <input type="radio" name="messenger" id="size_17" checked value="Viber">
                          <label for="size_17">
                            <img src="assets/img/form_icons/viber_reverse.svg" alt="">
                            <img class="form_social-hover-icon" src="assets/img/form_icons/viber.svg" alt="">
                            в Viber
                          </label>
                        </div>
                        <div class="form_social form_social-telegram">
                          <input type="radio" name="messenger" id="size_18" value="Telegram">
                          <label for="size_18">
                            <img src="assets/img/form_icons/telegram.svg" alt="">
                            <img class="form_social-hover-icon" src="assets/img/form_icons/telegram_reverse.svg" alt="">
                            в Telegram
                          </label>
                        </div>
                        <div class="form_social form_social-whatsapp">
                          <input type="radio" name="messenger" id="size_19" value="WhatsApp">
                          <label for="size_19">
                            <img src="assets/img/form_icons/whatsapp.svg" alt="">
                            <img class="form_social-hover-icon" src="assets/img/form_icons/whatsapp_reverse.svg" alt="">
                            в Whatsapp
                          </label>
                        </div>
                        <div class="form_social form_social-phone">
                          <input type="radio" name="messenger" id="size_20" value="звонок на телефон">
                          <label for="size_20">
                            <img src="assets/img/form_icons/tel_btn.svg" alt="">
                            <img class="form_social-hover-icon" src="assets/img/form_icons/tel_btn-reverse.svg" alt="">
                            Позвоните мне
                          </label>
                        </div>
                        <div class="form_socials-choised">
                          <p>Выбран <span>Viber</span></p>
                        </div>
                      </div>
                      <div class="form_tel-input-container">
                        <input id="tel_input3" class="w-100 tel_input" required type="tel" name="user_phone" placeholder="+375 (__) ___-__-__">
                      </div>
                      <button class="btn btn-primary btn_small w-100" type="submit" data-toggle="modal" data-target="#submit">узнать цену</button>
                      <div class=""> 
                        <label class="form_accept-container">
                          <input type="checkbox" checked="checked" name="checkbox">
                          <span class="checkmark"></span>
                          <p>Согласен с <span>Политикой конфиденциальности</span></p>
                        </label>
                      </div>
                    </fieldset>
                  </form>  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- CONSULT MODAL WITH TIME CHOISE -->
    <div class="modal fade bd-example-modal-lg" id="consult2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-centered" role="document">
        <div class="modal-content modal_consultant-container">
          <div class="modal_consultant">
            <img src="assets/img/consultation/elena.png" alt="">
          </div>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <div class="modal-body">
            <div class="container">
              <div class="row">
                <div class="col-lg-6 offset-lg-6">
                  <h2 class="modal_title">Оставьте ваш телефон</h2>
                  <div class="modal_pluce-container">
                    <p>Наш консультант перезвонит в удобное для Вас время и ответит на все интересующие вопросы</p>
                  </div>
                  <form>
                    <fieldset>
                      <h2 class="form_title">Оставьте телефон для связи</h2>
                      <hr>
                      <div id="form6" class="form_socials-container">
                        <div class="form_social form_social-viber">
                          <input type="radio" name="messenger" id="size_21" checked value="Viber">
                          <label for="size_21">
                            <img src="assets/img/form_icons/viber_reverse.svg" alt="">
                            <img class="form_social-hover-icon" src="assets/img/form_icons/viber.svg" alt="">
                            в Viber
                          </label>
                        </div>
                        <div class="form_social form_social-telegram">
                          <input type="radio" name="messenger" id="size_22" value="Telegram">
                          <label for="size_22">
                            <img src="assets/img/form_icons/telegram.svg" alt="">
                            <img class="form_social-hover-icon" src="assets/img/form_icons/telegram_reverse.svg" alt="">
                            в Telegram
                          </label>
                        </div>
                        <div class="form_social form_social-whatsapp">
                          <input type="radio" name="messenger" id="size_23" value="WhatsApp">
                          <label for="size_23">
                            <img src="assets/img/form_icons/whatsapp.svg" alt="">
                            <img class="form_social-hover-icon" src="assets/img/form_icons/whatsapp_reverse.svg" alt="">
                            в Whatsapp
                          </label>
                        </div>
                        <div class="form_social form_social-phone">
                          <input type="radio" name="messenger" id="size_24" value="звонок на телефон">
                          <label for="size_24">
                            <img src="assets/img/form_icons/tel_btn.svg" alt="">
                            <img class="form_social-hover-icon" src="assets/img/form_icons/tel_btn-reverse.svg" alt="">
                            Позвоните мне
                          </label>
                        </div>
                        <div class="form_socials-choised">
                          <p>Выбран <span>Viber</span></p>
                        </div>
                      </div>
                      <div class="form_tel-input-container">
                        <input id="tel_input4" class="w-100 tel_input" required type="tel" name="user_phone" placeholder="+375 (__) ___-__-__">
                      </div>
                      <div class="time_choise"> 
                        <label class="form_accept-container">
                          <input onchange="document.getElementById('time_choise-input').style.display = 'none'" type="radio" checked="checked" name="time">
                          <span class="checkmark"></span>
                          <p>Перезвоните мне сейчас</span></p>
                        </label>
                        <label class="form_accept-container">
                          <input onchange="document.getElementById('time_choise-input').style.display = 'block'" type="radio" id="time_choised" name="time">
                          <span class="checkmark"></span>
                          <p>Ко времени</span></p>
                        </label>
                      </div>
                      <div id="time_choise-input" class="time_choise-input">
                        <input  class="w-100 tel_input" type="text" required type="text" name="user_time" placeholder="Когда Вам удобнее позвонить?">
                      </div>
                      <button class="btn btn-primary btn_small w-100" type="submit" data-toggle="modal" data-target="#submit">узнать цену</button>
                      <div class=""> 
                        <label class="form_accept-container">
                          <input type="checkbox" checked="checked" name="checkbox">
                          <span class="checkmark"></span>
                          <p>Согласен с <span>Политикой конфиденциальности</span></p>
                        </label>
                      </div>
                    </fieldset>
                  </form>  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade bd-example-modal-lg" id="consult3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-centered" role="document">
        <div class="modal-content modal_consultant-container">
          <div class="modal_consultant">
            <img src="assets/img/consultation/elena.png" alt="">
          </div>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <div class="modal-body">
            <div class="container">
              <div class="row">
                <div class="col-lg-6 offset-lg-6">
                  <h2 class="modal_title">Запишитесь на объекты</h2>
                  <div class="modal_pluce-container">
                    <p>Наш консультант перезвонит в удобное для Вас время и ответит на все интересующие вопросы</p>
                  </div>
                  <form>
                    <fieldset>
                      <h2 class="form_title">Оставьте телефон для связи</h2>
                      <hr>
                      <div id="form6" class="form_socials-container">
                        <div class="form_social form_social-viber">
                          <input type="radio" name="messenger" id="size_21" checked value="Viber">
                          <label for="size_21">
                            <img src="assets/img/form_icons/viber_reverse.svg" alt="">
                            <img class="form_social-hover-icon" src="assets/img/form_icons/viber.svg" alt="">
                            в Viber
                          </label>
                        </div>
                        <div class="form_social form_social-telegram">
                          <input type="radio" name="messenger" id="size_22" value="Telegram">
                          <label for="size_22">
                            <img src="assets/img/form_icons/telegram.svg" alt="">
                            <img class="form_social-hover-icon" src="assets/img/form_icons/telegram_reverse.svg" alt="">
                            в Telegram
                          </label>
                        </div>
                        <div class="form_social form_social-whatsapp">
                          <input type="radio" name="messenger" id="size_23" value="WhatsApp">
                          <label for="size_23">
                            <img src="assets/img/form_icons/whatsapp.svg" alt="">
                            <img class="form_social-hover-icon" src="assets/img/form_icons/whatsapp_reverse.svg" alt="">
                            в Whatsapp
                          </label>
                        </div>
                        <div class="form_social form_social-phone">
                          <input type="radio" name="messenger" id="size_24" value="звонок на телефон">
                          <label for="size_24">
                            <img src="assets/img/form_icons/tel_btn.svg" alt="">
                            <img class="form_social-hover-icon" src="assets/img/form_icons/tel_btn-reverse.svg" alt="">
                            Позвоните мне
                          </label>
                        </div>
                        <div class="form_socials-choised">
                          <p>Выбран <span>Viber</span></p>
                        </div>
                      </div>
                      <div class="form_tel-input-container">
                        <input id="tel_input5" class="w-100 tel_input" required type="tel" name="user_phone" placeholder="+375 (__) ___-__-__">
                      </div>
                      <div class="time_choise"> 
                        <label class="form_accept-container">
                          <input onchange="document.getElementById('time_choise-input2').style.display = 'none'" type="radio" checked="checked" name="time">
                          <span class="checkmark"></span>
                          <p>Перезвоните мне сейчас</span></p>
                        </label>
                        <label class="form_accept-container">
                          <input onchange="document.getElementById('time_choise-input2').style.display = 'block'" type="radio" id="time_choised" name="time">
                          <span class="checkmark"></span>
                          <p>Ко времени</span></p>
                        </label>
                      </div>
                      <div id="time_choise-input2" class="time_choise-input">
                        <input class="w-100 tel_input" type="text" required type="text" name="user_time" placeholder="Когда Вам удобнее позвонить?">
                      </div>
                      <button class="btn btn-primary btn_small w-100" type="submit" data-toggle="modal" data-target="#submit">узнать цену</button>
                      <div class=""> 
                        <label class="form_accept-container">
                          <input type="checkbox" checked="checked" name="checkbox">
                          <span class="checkmark"></span>
                          <p>Согласен с <span>Политикой конфиденциальности</span></p>
                        </label>
                      </div>
                    </fieldset>
                  </form>  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade bd-example-modal-lg" id="sale" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-centered" role="document">
        <div class="modal-content modal_consultant-container">
          <div class="modal_consultant">
            <img src="assets/img/consultation/elena.png" alt="">
          </div>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <div class="modal-body">
            <div class="container">
              <div class="row">
                <div class="col-lg-6 offset-lg-6">
                  <h2 class="modal_title">Получите предварительную смету для вашего объекта со скидкой</h2>
                  <div class="modal_pluce-container">
                    <p>После 10-минутного общения со специалистом "Дом камня"</p>
                  </div>
                  <form>
                    <fieldset>
                      <h2 class="form_title">Оставьте номер телефона</h2>
                      <hr>
                      <div class="form_tel-input-container">
                        <input id="tel_input5" class="w-100 tel_input" required type="tel" name="user_phone" placeholder="+375 (__) ___-__-__">
                      </div>
                      <div class="messenger_link">
                        <p class="text-right">или напишите нам в мессенджер</p>
                        <div class="messenger_link-container">
                          <a href="">
                            <img src="assets/img/form_icons/whatsapp_footer.svg" alt="">
                          </a>
                          <span></span>
                          <a href="">
                            <img src="assets/img/form_icons/telegram_footer.svg" alt="">
                          </a>
                        </div>
                      </div>
                      <button class="btn btn-primary btn_small w-100" type="submit" data-toggle="modal" data-target="#submit">Рассчитать со скидкой<p>+ персональную скидку 10% на все модели</p></button>
                      <div class=""> 
                        <label class="form_accept-container">
                          <input type="checkbox" checked="checked" name="checkbox">
                          <span class="checkmark"></span>
                          <p>Согласен с <span>Политикой конфиденциальности</span></p>
                        </label>
                      </div>
                    </fieldset>
                  </form>  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- MODAL FOR ITEMS-->
    <div class="modal fade bd-example-modal-lg" id="item" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-centered" role="document">
        <div class="modal-content modal_item-container">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <div class="modal-body">
            <div class="container">
              <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center">
                  <img src="assets/img/not_stone/1_modal.png" alt="">
                  <h4>Мойки Aqua Stone</h4>
                </div>
                <div class="col-lg-6">
                  <h2 class="modal_title">Узнайте стоимость мойки из бетона Aqua Stone</h2>
                  <form>
                    <fieldset>
                      <h2 class="form_title">Куда прислать цену?</h2>
                      <hr>
                      <div id="form5" class="form_socials-container">
                        <div class="form_social form_social-viber">
                          <input type="radio" name="messenger" id="size_17" checked value="Viber">
                          <label for="size_17">
                            <img src="assets/img/form_icons/viber_reverse.svg" alt="">
                            <img class="form_social-hover-icon" src="assets/img/form_icons/viber.svg" alt="">
                            в Viber
                          </label>
                        </div>
                        <div class="form_social form_social-telegram">
                          <input type="radio" name="messenger" id="size_18" value="Telegram">
                          <label for="size_18">
                            <img src="assets/img/form_icons/telegram.svg" alt="">
                            <img class="form_social-hover-icon" src="assets/img/form_icons/telegram_reverse.svg" alt="">
                            в Telegram
                          </label>
                        </div>
                        <div class="form_social form_social-whatsapp">
                          <input type="radio" name="messenger" id="size_19" value="WhatsApp">
                          <label for="size_19">
                            <img src="assets/img/form_icons/whatsapp.svg" alt="">
                            <img class="form_social-hover-icon" src="assets/img/form_icons/whatsapp_reverse.svg" alt="">
                            в Whatsapp
                          </label>
                        </div>
                        <div class="form_social form_social-phone">
                          <input type="radio" name="messenger" id="size_20" value="звонок на телефон">
                          <label for="size_20">
                            <img src="assets/img/form_icons/tel_btn.svg" alt="">
                            <img class="form_social-hover-icon" src="assets/img/form_icons/tel_btn-reverse.svg" alt="">
                            Позвоните мне
                          </label>
                        </div>
                        <div class="form_socials-choised">
                          <p>Выбран <span>Viber</span></p>
                        </div>
                      </div>
                      <div class="form_tel-input-container">
                        <input id="tel_input3" class="w-100 tel_input" required type="tel" name="user_phone" placeholder="+375 (__) ___-__-__">
                      </div>
                      <button class="btn btn-primary btn_small w-100" type="submit" data-toggle="modal" data-target="#submit">узнать цену</button>
                      <div class=""> 
                        <label class="form_accept-container">
                          <input type="checkbox" checked="checked" name="checkbox">
                          <span class="checkmark"></span>
                          <p>Согласен с <span>Политикой конфиденциальности</span></p>
                        </label>
                      </div>
                    </fieldset>
                  </form>  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- VIDEO MODAL -->
    <div class="modal fade bd-example-modal-lg" id="video" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-centered" role="document">
        <div class="modal-content">
        
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <div class="modal-body">
            <div class="container">
              <div class="row">
                <iframe width="100%" height="500" src="https://www.youtube.com/embed/Gh6y3wUzKGQ" frameborder="0" allow="accelerometer; encrypted-media; autoplay; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- TEAMMATE MODAL -->
    <div class="modal fade bd-example-modal-lg" id="teammate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-centered" role="document">
        <div class="modal-content modal_teammate-container">
          <div class="modal_teammate">
            <img src="assets/img/modals/teammate/victor.png" alt="">
          </div>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <div class="modal-body">
            <div class="container">
              <div class="row">
                <div class="col-lg-6 offset-lg-6">
                  <h2 class="modal_title">Виктор Иванов</h2>
                  <h6>Специалист компании</h6>
                  <p>Изготавливаем камень на собственном производстве площадью 760 м2 на современном европейском оборудовании из дорогих зарубежных игредиентов. Изготавливаем камень на собственном производстве площадью 760 м2.</p>
                  <p>Изготавливаем камень на собственном производстве площадью 760 м2 на современном европейском оборудовании из дорогих зарубежных игредиентов.</p>
                  <div class="socials_container">
                    <a href="">
                      <img src="assets/img/modals/teammate/icons/1.svg" alt="">
                    </a>
                    <a href="">
                      <img src="assets/img/modals/teammate/icons/2.svg" alt="">
                    </a>
                    <a href="">
                      <img src="assets/img/modals/teammate/icons/3.svg" alt="">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- CASE MODAL -->
    <div class="modal modal_case fade bd-example-modal-lg" id="case1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl modal-centered" role="document">
        <div class="modal-content">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <div class="modal-body">
            <div class="modal_slider d-lg-none">
              <div class="modal_main-slide">
                <img src="assets/img/show_room/slider_img/bg.png" alt="">
                <img src="assets/img/show_room/slider_img/1.png" alt="">
                <img src="assets/img/show_room/slider_img/2.png" alt="">
                <img src="assets/img/show_room/slider_img/3.png" alt="">
                <img src="assets/img/show_room/slider_img/4.png" alt="">
              </div>
              <div class="modal_cases-slides">
                <div class="modal_cases-slide">
                  <img src="assets/img/show_room/slider_img/bg.png" alt="">
                </div>
                <div class="modal_cases-slide">
                  <img src="assets/img/show_room/slider_img/1.png" alt="">
                </div>
                <div class="modal_cases-slide">
                  <img src="assets/img/show_room/slider_img/2.png" alt="">
                </div>
                <div class="modal_cases-slide">
                  <img src="assets/img/show_room/slider_img/3.png" alt="">
                </div>
                <div class="modal_cases-slide">
                  <img src="assets/img/show_room/slider_img/4.png" alt="">
                </div>
              </div>
            </div>
            <div class="container">
              <div class="row">
                <div class="col-lg-5 order-lg-1 order-2">
                  <h4 class="modal_case-title">Наши работы</h4>
                  <h2 class="modal_title">Фасад здания БелРеконструкции на Кальварийской</h2>
                  <div class="questions_card">
                    <div class="questions_card-container">
                      <h6>Задача</h6>
                      <img class="questions_card-img" src="assets/img/modals/icons/arrow.svg">
                    </div>
                    <div class="questions_card-text">
                      <p>Директору крупной строительной компании в переговорку и в личный кабинет нужен был необычный камень для вау-эффекта на клиентов и цельнолитой стол из бетона сложной геометрии. Предложили свой камень и сделали стол, который никто не взялся делать.</p>
                    </div>
                  </div>
                  <div class="questions_card">
                    <div class="questions_card-container">
                      <h6>Материалы</h6>
                      <img class="questions_card-img" src="assets/img/modals/icons/arrow.svg">
                    </div>
                    <div class="questions_card-text">
                      <div class="material_container">
                        <img src="assets/img/materials/1.png  " alt="">
                        <div class="material_info">
                          <h5>Камень Антик Брик</h5>
                          <div class="material_info-container">
                            <h6>25 руб./м2</h6>
                            <p>Цвет — 552</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="questions_card">
                    <div class="questions_card-container">
                      <h6>Стоимость и срок</h6>
                      <img class="questions_card-img" src="assets/img/modals/icons/arrow.svg">
                    </div>
                    <div class="questions_card-text">
                      <div class="question_price">
                        <div class="question_price-container">
                          <p>Стоимость:</p>
                          <h4>150 000 руб.</h4>
                        </div>
                        <span></span>
                        <div class="question_price-container">
                          <p>Стори:</p>
                          <h4>2 недели</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-7 d-none order-lg-2 d-lg-flex">
                  <div class="modal_slider">
                    <div class="modal_main-slide">
                      <img src="assets/img/show_room/slider_img/bg.png" alt="">
                      <img src="assets/img/show_room/slider_img/1.png" alt="">
                      <img src="assets/img/show_room/slider_img/2.png" alt="">
                      <img src="assets/img/show_room/slider_img/3.png" alt="">
                      <img src="assets/img/show_room/slider_img/4.png" alt="">
                    </div>
                    <div class="modal_cases-slides">
                      <div class="modal_cases-slide">
                        <img src="assets/img/show_room/slider_img/bg.png" alt="">
                      </div>
                      <div class="modal_cases-slide">
                        <img src="assets/img/show_room/slider_img/1.png" alt="">
                      </div>
                      <div class="modal_cases-slide">
                        <img src="assets/img/show_room/slider_img/2.png" alt="">
                      </div>
                      <div class="modal_cases-slide">
                        <img src="assets/img/show_room/slider_img/3.png" alt="">
                      </div>
                      <div class="modal_cases-slide">
                        <img src="assets/img/show_room/slider_img/4.png" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- THS MODAL -->

    <a data-toggle="modal" data-target="#submit">asfasfasf</a>
    <div class="modal fade bd-example-modal-md" id="submit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-md modal-centered" role="document">
        <div class="modal-content modal_submit-container">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <div class="modal-body text-center">
            <img src="assets/img/modals/submit/1.png" alt="">
            <h2>Спасибо!</h2>
            <h2>Ваша заявка принята</h2>
            <p>В рабочее время менеджер перезвонит  вам в течение 5 минут.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- POPOVERS -->
    <div id="popover_header" class="popover_content popover_header hide">
      <div class="footer_contact-container">
        <div class="footer_contact-title-container">
          <img src="assets/img/footer/footer_icons/place.svg" alt="">
          <h4>Адрес шоу-рума</h4>
        </div>
        <div class="footer_contact-text-container">
          <p>Минск, Восточная улица, дом 125</p>
          <p>пн-пт С 8:00 до 17:00</p>
        </div>
      </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src='vendor/slick/slick.js'></script>
    <script src="./vendor/mask/jquery.maskedinput.min.js"></script>
    <script src="./assets/js/main.js"></script>

    <script>
      $('.catalog_brick-slide-container').slick({
      centerMode: true,
      centerPadding: '0',
      slidesToShow: 3,
      responsive: [
        {
          breakpoint: 1200,
          settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '0',
            slidesToShow: 3,
            dots: true
          }
        },
        {
          breakpoint: 480,
          settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '10px',
            slidesToShow: 1,
            dots: true
          }
        },
        {
          breakpoint: 767,
          settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '50px',
            slidesToShow: 2
          }
        },
        {
          breakpoint: 576,
          settings: {
            arrows: false,
            slidesToShow: 1,
            centerPadding: '50px',
            dots: true
          }
        }
      ]
    });
    </script>

    <script>
      $('.footer_slider').slick({
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1
      });
    </script>

    <script>
      $('.reviews_slider').slick({
        infinite: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
        {
          breakpoint: 767,
          settings: {
            arrows: false,
            slidesToShow: 1,
            dots: true
          }
        }
      ]
      });
    </script>

    <script>
      $('.not_stone-slider').slick({
        centerMode: true,
        centerPadding: '20px',
        infinite: false
      });
    </script>

    <!--<script>
      $('.work_stages-slider').slick({
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1
      });
    </script>-->

    <script>
       $('.show_room-main-slide').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        adaptiveHeight: true,
        asNavFor: '.show_room-all-slides'
      });
      $('.show_room-all-slides').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        asNavFor: '.show_room-main-slide',
        dots: false,
        centerMode: false,
        infinite: true,
        focusOnSelect: true,
        responsive: [
        {
          breakpoint: 1500,
          settings: {
            slidesToShow: 3
          }
        },
        {
          breakpoint: 992,
          settings: {
            arrows: false,
            slidesToShow: 3,
            dots: true
          }
        },
        {
          breakpoint: 767,
          settings: {
            arrows: false,
            slidesToShow: 2,
            dots: true
          }
        }
      ]
      });

      
      $(".place_container-link").popover({
        html: true, 
        content: function() {
          return $('#popover_header').html();
        }
      });

      $("#btn_popover1").popover({
        html: true, 
        content: function() {
          return $('#popover_content1').html();
        }
      });

      $("#btn_popover2").popover({
        html: true, 
        content: function() {
          return $('#popover_content2').html();
        }
      });

      $("#btn_popover3").popover({
        html: true, 
        content: function() {
          return $('#popover_content3').html();
        }
      });

      $("#btn_popover4").popover({
        html: true, 
        content: function() {
          return $('#popover_content4').html();
        }
      });

      $("#btn_popover5").popover({
        html: true, 
        content: function() {
          return $('#popover_content5').html();
        }
      });

      $("#btn_popover6").popover({
        html: true, 
        content: function() {
          return $('#popover_content6').html();
        }
      });

      $("#btn_popover7").popover({
        html: true, 
        content: function() {
          return $('#popover_content7').html();
        }
      });

      
    </script>

    <script>
       $('.modal_main-slide').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        adaptiveHeight: true,
        fade: true,
        asNavFor: '.modal_cases-slides'
      });
      $('.modal_cases-slides').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        centerPadding: '10px',
        asNavFor: '.modal_main-slide',
        dots: false,
        arrows: false,
        centerMode: false,
        focusOnSelect: true
      });

      $('#case1').on('shown.bs.modal', function () {
                    $('.modal_main-slide').slick('refresh');
                    $('.modal_cases-slides').slick('refresh');
                    $('.slider-forpc').slick('refresh');
                    $('.slider-navpc').slick('refresh');
                });

      $("input[type='tel']").mask("+375 (99) 999-99-99");
    </script>

  </body>
</html>