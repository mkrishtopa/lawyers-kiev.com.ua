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
	  <meta name='yandex-verification' content='664766bbe2db8191' />

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

  <body id="<?php get_page_slug(); ?>" >

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
              <span class="vcard-info"><i class="icon-home"></i><a href="/#map">Київ, вул.Княжий Затон 10-а,</a></span><br />
              <span class="vcard-info vcard-info-noicon"><a href="/#map">3-й поверх, офіс №7</a></span><br />
              <span class="vcard-info"><i class="icon-signal"></i>(097) 987-29-28</span><br />
              <!--<span class="vcard-info"><i class="icon-signal"></i>(067) 710-16-96</span><br />-->
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
              <span class="vcard-info"><i class="icon-home"></i><a href="/#map">Киев, ул.Княжий Затон 10-а,</a></span><br />
              <span class="vcard-info vcard-info-noicon"><a href="/#map">3-й этаж, офис №7</a></span><br />
              <span class="vcard-info"><i class="icon-signal"></i>(097) 987-29-28</span><br />
              <!--<span class="vcard-info"><i class="icon-signal"></i>(067) 710-16-96</span><br />-->
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
        <?php get_page_content(); ?>
        </div>

        <div class="span12 footer">
          <div class="row">
            <p>&copy; <?php echo date('Y'); ?> <?php get_site_name(); ?><br>
               Сайт разработан студией <a href="http://www.heddex.biz/">HedDex</a></p>
          </div>
			
<!-- Yandex.Metrika informer -->
<a href="https://metrika.yandex.ru/stat/?id=27359501&amp;from=informer"
target="_blank" rel="nofollow"><img src="//bs.yandex.ru/informer/27359501/1_0_FFFFFFFF_FFFFFFFF_0_uniques"
style="width:80px; height:15px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (уникальные посетители)" onclick="try{Ya.Metrika.informer({i:this,id:27359501,lang:'ru'});return false}catch(e){}"/></a>
<!-- /Yandex.Metrika informer -->

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter27359501 = new Ya.Metrika({id:27359501,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/27359501" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
			
        </div>

      </div>
    </div>

  </body>

</html>