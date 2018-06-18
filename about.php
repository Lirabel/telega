<?php 
session_start();
$phone = $_SESSION['login_user'];
?>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />    
  <title>W4W</title>
  <link rel="stylesheet" type="text/css" href="/css/style.css" />
</head>

<body class="lan-ru">
    <div id="wrapper">
      <section id="header">
        <nav id="navigation">
            <h1 id="logo">
                <a href="" title="LOGOTIP"></a>
            </h1>
            <ul class="desktop">
               <?php 
                if (isset($_SESSION['login_user'])) { ?>
                    <li><a> <?php 
                    echo $phone;
                        ?> </a></li>
                    <li><a href='order_form.php'>Форма заказа</a></li><?php } 
                else {?>
                    <li><a href='index.php'>Главная</a></li>
                    <li><a href='register.php'>Регистрация</a></li>
                     
                <?php  } ?>
                <li><a href='news.php'>Новости</a></li>
<<<<<<< HEAD:about.php
                <li class="current"><a href='about.php'>О проекте</a>
                </li>
                
            <?php 
                if (isset($_SESSION['login_user'])) { ?>
                <li><a href='logout.php'>Выход</a></li>
                <?php } ?>
=======
                <li class="current"><a href='about.php'>О проекте</a></li>

>>>>>>> 6e72afe36482a090dd6ee0e9f59fdcafa8d90d51:about.php
            </ul>
            <ul class="mobile-nav">
                <li class="dropmedown godmenu"><div class="menu-toggle"><i class="icon-reorder"></i></div>
                    <ul>
                        <li><a href='index.php'>Главная</a></li>
                        <li><a href='register.php'>Регистрация</a></li>
                        <li><a href='news.php'>Новости</a></li>
                        <li class="current"><a href='about.php'>О проекте</a></li>               
                    </ul>
                </li>
            </ul>

        </nav>
    </section>
    <!-- /navigation -->

    <div id="content">
        <p align="center"><strong>Сервис организации работы социального такси для людей с ограниченными возможностями здоровья</strong></p>       
        <p><strong>Целевая аудитория проекта</strong>: люди с ограниченными возможностями, которые перемещаются на инвалидных колясках. Инвалиды 1 и 2 группы.</p>
        <p><strong>Цели проекта:</strong></p>
        <p>1. Создать сервис, который позволит людям легко планировать и организовывать свои поездки.</p>
        <p>2. Облегчить работу представителям социальных служб.</p>
        <p>3. Автоматизировать работу социального такси в Киеве.</p>
        <p>4. Уменьшить проблемы с передвижением для жителей Киева  инвалидными колясками.</p>
        <p>5. Дать людям с особыми потребностями возможность самостоятельно оформлять поездки и более грамотно планировать своё личное время.</p>
        <p>Благодаря этому проекту ожидается, что новая услуга в Киеве значительно увеличит мобильность людей с инвалидностью 
            и обеспечит возможность перемещаться без ограничений. Это даст возможность людям в инвалидных колясках 
            чувствовать себя независимыми от членов семьи, чтобы бесплатно и беспреградно посещать всевозможные места и мерприятия.</p>
            <p>Социальное такси будет услугой, которая позволит людям в инвалидных колясках удобно попасть в места назначения, например, в лечебные учреждения, в университет, в гос. учреждения, т. д.</p>
        </div><!-- /wrapper -->
    </div>
    <section id="footer">
        <ul>
            <li class="copyright">
                <em>ТЕЛЕГА "ХАИ":</em> Сервис организации работы социального такси <br>для людей с ограниченными возможностями здоровья.<br>
                2018 &copy;        
                evgesha.strelnik@gmail.com</li>
            </ul>
        </section><!-- /footer -->
    </body>
    </html>
