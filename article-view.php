<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File:      template.php
* @Package:   GetSimple
* @Action:    lawyers-kiev.com.ua theme for GetSimple CMS
*
*****************************************************/
?>
<!DOCTYPE html>
<html lang="ru">

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?php get_page_clean_title(); ?> &lt; <?php get_site_name(); ?></title>
    <?php get_i18n_header(); ?>

    <link rel="shortcut icon" href="<?php get_theme_url(); ?>/images/favicons/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="<?php get_theme_url(); ?>/images/favicons/touch-icon-iphone-60x60.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php get_theme_url(); ?>/images/favicons/touch-icon-ipad-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php get_theme_url(); ?>/images/favicons/touch-icon-iphone-retina-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php get_theme_url(); ?>/images/favicons/touch-icon-ipad-retina-152x152.png">

    <link href="<?php get_theme_url(); ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php get_theme_url(); ?>/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
    <link href="<?php get_theme_url(); ?>/fontawesome/css/font-awesome.css" rel="stylesheet" />
    <!--[if lt IE 8]>
      <link href="<?php get_theme_url(); ?>/fontawesome/css/font-awesome-ie7.css" rel="stylesheet" />
    <![endif]-->
    <link href="<?php get_theme_url(); ?>/styles/style.css" rel="stylesheet" />
    <link href="<?php get_theme_url(); ?>/styles/skin-custom.css" rel="stylesheet" />

    <script src="http://use.edgefonts.net/squada-one:n4.js"></script>
  </head>

  <body id="<?php get_page_slug(); ?>" class="article-view" >

    <div class="container">

      <div class="row page-wrap">

        <div class="row">
          <div class="span3">
            <ul id="langs">
              <li class="<?php if($language=='ru') echo "selected" ?>">
                <a href="<?php echo htmlspecialchars(return_i18n_setlang_url('ru')); ?>">Русский</a>
              </li>
              <li class="<?php if($language=='uk') echo "selected" ?>">
                <a href="<?php echo htmlspecialchars(return_i18n_setlang_url('uk')); ?>">Українська</a>
              </li>
<!--               <li class="<?php if($language=='en') echo "selected" ?>">
                <a href="<?php echo htmlspecialchars(return_i18n_setlang_url('en')); ?>">English</a>
              </li> -->
            </ul>
          </div>
          <div class="span9">
            <ul id="nav">
              <?php get_i18n_navigation(return_page_slug()); ?>
            </ul>
          </div>
        </div>

        <div class="span12">
          <h4 class="intro-slogan css3-gradient">
            <a href="<?php get_site_url(); ?>">
              <?php
                if ($language=='uk') {
                  echo 'Адвокатська контора <span>"Дашко і Чорнобай"</span>';
                } elseif ($language=='ru') {
                  echo 'Адвокатская контора <span>"Дашко и Чернобай"</span>';
                } else {
                  echo 'Title in English';
                }
              ?>
            </a>
          </h4>
        </div>

        <div class="span4 vcard">

          <?php if ($language=='uk') { ?>

          <div class="vcard-wrap">
            <div class="vcard-bio">
              <h4>Наші контакти:</h4>
              <span class="vcard-info"><i class="icon-home"></i><a href="/#map">Київ, просп. Тичини Павла, 1в</a></span><br />
              <span class="vcard-info"><i class="icon-signal"></i>(097) 987-29-28</span><br />
              <span class="vcard-info"><i class="icon-signal"></i>(067) 710-16-96</span><br />
              <span class="vcard-info"><i class="icon-envelope"></i><a href="mailto:chornobay@ukr.net">chornobay@ukr.net</a></span><br />
              <span class="vcard-info"><i class="icon-globe"></i><a href="#">http://lawyers-kiev.com.ua/</a></span>
            </div>
          </div>

          <div class="vcard-wrap">
            <div class="vcard-photo">
              <img src="<?php get_theme_url(); ?>/content-images/chernobay.jpg" alt="Чорнобай Олександр Євгенович" />
            </div>
            <div class="vcard-bio">
              <h4 class="vcard-name">Адвокат Чорнобай Олександр Євгенович</h4>
              <hr />
              <p>Керуючий партнер. Освіта: вища аграрна і вища юридична. Свідоцтво про право на заняття адвокатською діяльністю №729 від 20.11.2002 р. Досвід роботи в юриспруденції – з 1993р.</p>
              <hr />
              <span class="vcard-info"><i class="icon-envelope"></i><a href="mailto:chornobay@ukr.net">chornobay@ukr.net</a></span><br />
              <span class="vcard-info"><i class="icon-signal"></i>(097) 987-29-28</span>
            </div>
          </div>
<!--
          <div class="vcard-wrap">
            <div class="vcard-photo">
              <img src="<?php get_theme_url(); ?>/content-images/mamas.jpg" alt="Мамась Максим Олександрович" />
            </div>
            <div class="vcard-bio">
              <h4 class="vcard-name">Адвокат Мамась Максим Олександрович</h4>
              <hr />
              <p>Керуючий партнер. Освіта вища юридична. Свідоцтво про право на заняття адвокатською діяльністю №1956 від 22.04.2004р. Досвід роботи в юриспруденції – з 2000р.</p>
              <hr />
              <span class="vcard-info"><i class="icon-envelope"></i><a href="mailto:mamas.maxim@gmail.com">mamas.maxim@gmail.com</a></span><br />
              <span class="vcard-info"><i class="icon-signal"></i>(067) 710-16-96</span>
            </div>
          </div>
-->
          <div class="vcard-wrap">
            <div class="vcard-photo">
              <img src="/data/uploads/dashko2.jpg" alt="Дашко Юрій Іванович" />
            </div>
            <div class="vcard-bio">
              <h4 class="vcard-name">Адвокат Дашко Юрій Іванович</h4>
              <hr />
              <p>Керуючий партнер. Освіта вища юридична. Свідоцтво про право на заняття адвокатською діяльністю №883 від 17.01.2008р. Досвід в юриспруденції – з 1991р.</p>
              <hr />
              <span class="vcard-info"><i class="icon-envelope"></i><a href="mailto:ur_dashko@ukr.net">ur_dashko@ukr.net</a></span><br />
              <span class="vcard-info"><i class="icon-signal"></i>(066) 073-97-61</span><br />
              <span class="vcard-info"><i class="icon-signal"></i>(097) 071-55-78</span>
            </div>
          </div>


          <?php } elseif ($language=='ru') { ?>

          <div class="vcard-wrap">
            <div class="vcard-bio">
              <h4>Наши контакты:</h4>
              <span class="vcard-info"><i class="icon-home"></i><a href="/#map">Киев, просп. Тычины Павла, 1в</a></span><br />
              <span class="vcard-info"><i class="icon-signal"></i>(097) 987-29-28</span><br />
              <span class="vcard-info"><i class="icon-signal"></i>(067) 710-16-96</span><br />
              <span class="vcard-info"><i class="icon-envelope"></i><a href="mailto:chornobay@ukr.net">chornobay@ukr.net</a></span><br />
              <span class="vcard-info"><i class="icon-globe"></i><a href="#">http://lawyers-kiev.com.ua/</a></span>
            </div>
          </div>

          <div class="vcard-wrap">
            <div class="vcard-photo">
              <img src="<?php get_theme_url(); ?>/content-images/chernobay.jpg" alt="Чорнобай Олександр Євгенович" />
            </div>
            <div class="vcard-bio">
              <h4 class="vcard-name">Адвокат Чорнобай Александр Евгеньевич</h4>
              <hr />
              <p>Управляющий партнёр. Образование: высшее аграрное и высшее юридическое. Свидетельство о праве на занятие адвокатской деятельностью №729 от 20.11.2002г. Опыт работы в юриспруденции – с 1993г.</p>
              <hr />
              <span class="vcard-info"><i class="icon-envelope"></i><a href="mailto:chornobay@ukr.net">chornobay@ukr.net</a></span><br />
              <span class="vcard-info"><i class="icon-signal"></i>(097) 987-29-28</span>
            </div>
          </div>
<!--
          <div class="vcard-wrap">
            <div class="vcard-photo">
              <img src="<?php get_theme_url(); ?>/content-images/mamas.jpg" alt="Мамась Максим Олександрович" />
            </div>
            <div class="vcard-bio">
              <h4 class="vcard-name">Адвокат Мамась Максим Александрович</h4>
              <hr />
              <p>Управляющий партнёр. Образование высшее юридическое. Свидетельство о праве на занятие адвокатской деятельностью №1956 от 22.04.2004г. Опыт работы в юриспруденции – с 2000г.</p>
              <hr />
              <span class="vcard-info"><i class="icon-envelope"></i><a href="mailto:mamas.maxim@gmail.com">mamas.maxim@gmail.com</a></span><br />
              <span class="vcard-info"><i class="icon-signal"></i>(067) 710-16-96</span>
            </div>
          </div>
-->
          <div class="vcard-wrap">
            <div class="vcard-photo">
              <img src="/data/uploads/dashko2.jpg" alt="Дашко Юрій Іванович" />
            </div>
            <div class="vcard-bio">
              <h4 class="vcard-name">Адвокат Дашко Юрий Иванович</h4>
              <hr />
              <p>Управляющий партнёр. Образование высшее юридическое. Свидетельство о праве на занятие адвокатской деятельностью №883 от 17.01.2008г. Опыт работы в юриспруденции – с 1991г.</p>
              <hr />
              <span class="vcard-info"><i class="icon-envelope"></i><a href="mailto:ur_dashko@ukr.net">ur_dashko@ukr.net</a></span><br />
              <span class="vcard-info"><i class="icon-signal"></i>(066) 073-97-61</span><br />
              <span class="vcard-info"><i class="icon-signal"></i>(097) 071-55-78</span>
            </div>
          </div>

          <?php } ?>

        </div>

        <div class="span8 main-wrap">
          <h1><?php get_page_clean_title(); ?></h1>
          <?php get_page_content(); ?>
        </div>

        <div class="span12 footer">
          <div class="row">
            <p>&copy; <?php echo date('Y'); ?> <?php get_site_name(); ?><br>
               Сайт разработан студией <a href="http://www.heddex.biz/">HedDex</a></p>
          </div>
        </div>

      </div>
    </div>

  </body>

</html>