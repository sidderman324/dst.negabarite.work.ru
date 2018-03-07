<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="/favicon.png" type="image/png">
  <?php wp_head(); ?>
  <?php 
  is_single(); {
    $meta_title = $brand . $rent_info_model .' - продажа и аренда по всей стране. Арендовать спецтехнику, покупка спецтехники'; 
    $meta_description = $brand . $rent_info_model .' - продажа и аренда по всей стране. Арендовать спецтехнику, покупка спецтехники'; 
  } 
  is_page(); {
    $meta_title = get_post_meta( get_the_id(), 'meta_page_title', true);
    $meta_description = get_post_meta( get_the_id(), 'meta_page_description', true);
  } 

  ?>

  <title><?php echo $meta_title; ?></title>
  <meta name="description" content="<?php echo $meta_description; ?>" />
</head>
<style>
html { margin-top: 0 !important; margin-bottom: 0 !important; } 
</style>
<body>

 <header class="page-header">
  <div class="container page-header__inner">

    <!-- Вставка логотипа -->
    <a href="http://dst.negabarite.work.ru/" class="logo">
      <p class="logo__title">Негабарит</p>
      <p class="logo__title">Онлайн</p>
    </a>

    <?php
    $subdomain = explode('.', $_SERVER['HTTP_HOST']);
    $city_domain = $subdomain[0] .'.';
    if($city_domain == "dst") {$city_domain = ""; }
    switch ($subdomain[0]) {
      case 'volgograd': { $city_name = "Волгоград";} break;
      case 'voronezh': { $city_name = "Воронеж";} break;
      case 'ekaterinburg': { $city_name = "Екатеринбург";} break;
      case 'kazan': { $city_name = "Казань";} break;
      case 'krasnodar': { $city_name = "Краснодар";} break;
      case 'krasnojarsk': { $city_name = "Красноярск";} break;
      case 'moscow': { $city_name = "Москва";} break;
      case 'novosibirsk': { $city_name = "Новосибирск";} break;
      case 'novgorod': { $city_name = "Новгород";} break;
      case 'omsk': { $city_name = "Омск";} break;
      case 'perm': { $city_name = "Пермь";} break;
      case 'rostov-na-donu': { $city_name = "Ростов-на-Дону";} break;
      case 'sankt-peterburg': { $city_name = "Санкт-Петербург";} break;
      case 'ufa': { $city_name = "Уфа";} break;
      case 'cheljabinsk': { $city_name = "Челябинск";} break;
      default: { $city_name = "По всей России";} break;
    }
    // echo $subdomain[0];
    ?>


    <div class="location">
      <p class="location__title"><?php echo $_GET['region']; ?> и <?php echo $_GET['city']; ?></p>
      <div class="location__select">
        <p class="location__text">Выбрать город - <?php echo do_shortcode( '[city]' ); ?></p>
        <ul class="location__select-list">
          <li class="location__select-item"><a href="http://volgograd.dst.negabarite.work.ru/">Волгоград</a></li>
          <li class="location__select-item"><a href="http://voronezh.dst.negabarite.work.ru/">Воронеж</a></li>
          <li class="location__select-item"><a href="http://ekaterinburg.dst.negabarite.work.ru/">Екатеринбург</a></li>
          <li class="location__select-item"><a href="http://kazan.dst.negabarite.work.ru/">Казань</a></li>
          <li class="location__select-item"><a href="http://krasnodar.dst.negabarite.work.ru/">Краснодар</a></li>

          <li class="location__select-item"><a href="http://krasnojarsk.dst.negabarite.work.ru/">Красноярск</a></li>
          <li class="location__select-item"><a href="http://moscow.dst.negabarite.work.ru/">Москва</a></li>
          <li class="location__select-item"><a href="http://novosibirsk.dst.negabarite.work.ru/">Новосибирск</a></li>
          <li class="location__select-item"><a href="http://novgorod.dst.negabarite.work.ru/">Новгород</a></li>
          <li class="location__select-item"><a href="http://omsk.dst.negabarite.work.ru/">Омск</a></li>
          <li class="location__select-item"><a href="http://perm.dst.negabarite.work.ru/">Пермь</a></li>
          <li class="location__select-item"><a href="http://rostov-na-donu.dst.negabarite.work.ru/">Ростов-на-Дону</a></li>
          <li class="location__select-item"><a href="http://sankt-peterburg.dst.negabarite.work.ru/">Санкт-Петербург</a></li>
          <li class="location__select-item"><a href="http://ufa.dst.negabarite.work.ru/">Уфа</a></li>
          <li class="location__select-item"><a href="http://cheljabinsk.dst.negabarite.work.ru/">Челябинск</a></li>
        </ul>
      </div>
    </div>

    <div class="feedback">
      <a href="#" class="feedback__btn btn_popup">Заказать звонок</a>
      <div class="feedback__contact">
        <a href="tel:+78001000625" class="feedback__phone">8-800-1000-625</a>
        <a href="mailto:zakaz@negabarite.com" class="feedback__mail">zakaz@negabarite.com</a>
      </div>
    </div>

    <div class="page-header__burger-wrapper">
      <span class="page-header__burger"></span>
    </div>

  </div>





  <nav class="main-menu">
    <div class="container">
      <ul class="main-menu__list">
        <li class="main-menu__item"><a href="/about/" class="main-menu__link">О компании</a></li>
        <li class="main-menu__item"><a href="/#catalog" class="main-menu__link">Каталог спецтехники</a>
          <span class="main-menu__marker"></span>
          <ul class="submenu">
            <li class="submenu__item"><a href="/arenda-buldozerov/" class="submenu__link">Бульдозеры</a></li>
            <li class="submenu__item"><a href="/arenda-excavatorov/" class="submenu__link">Экскаваторы</a></li>
            <li class="submenu__item"><a href="/arenda-pogruzchikov/" class="submenu__link">Погрузчики</a></li>
            <li class="submenu__item"><a href="/arenda-samosvalov/" class="submenu__link">Самосвалы</a></li>
            <li class="submenu__item"><a href="/arenda-avtokranov/" class="submenu__link">Автокраны</a></li>
            <li class="submenu__item"><a href="/arenda-dorozhnyh-katkov/" class="submenu__link">Катки дорожные</a></li>
            <li class="submenu__item"><a href="/arenda-asfaltoukladchikov/" class="submenu__link">Асфальтоукладчики</a></li>
            <li class="submenu__item"><a href="/arenda-burovoj-ustanovki/" class="submenu__link">Буровые установки</a></li>
          </ul>
        </li>
        <li class="main-menu__item"><a href="#" class="main-menu__link">Услуги</a>
          <span class="main-menu__marker"></span>
          <ul class="submenu submenu--wide">
            <li class="submenu__item"><a href="/service/road_repair/" class="submenu__link">Ремонт дорог</a></li>
            <li class="submenu__item"><a href="/service/road_construction/" class="submenu__link">Строительство дорог</a></li>
            <li class="submenu__item"><a href="/service/construction_oil_pipelines/" class="submenu__link">Строительство нефтепроводов</a></li>
            <li class="submenu__item"><a href="/service/construction_gas_pipelines/" class="submenu__link">Строительство газопроводов</a></li>
            <li class="submenu__item"><a href="/service/road_filling/" class="submenu__link">Отсыпка дорог</a></li>
          </ul>
        </li>
        <li class="main-menu__item"><a href="/catalog/sale/" class="main-menu__link">Продажа</a>
          <span class="main-menu__marker"></span>
          <ul class="submenu submenu--wide">
            <li class="submenu__item"><a href="/catalog/sale/" class="submenu__link">Продажа дорожно-строительной техники</a></li>
            <li class="submenu__item"><a href="/catalog/sale/sale_diesel/" class="submenu__link">Продажа дизельного топлива</a></li>
          </ul>
        </li>
        <li class="main-menu__item"><a href="/contacts/" class="main-menu__link">Контакты</a></li>
      </ul>
      <a href="#" class="main-menu__btn btn_popup">Заказать звонок</a>
      <a href="tel:+78001000625" class="main-menu__phone">8-800-1000-625</a>
    </div>
  </nav>
</header>