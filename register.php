<!DOCTYPE html>
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
        <li><a href='index.php'>Главная</a></li>
        <li class="current"><a href='register.php'>Регистрация</a></li>
        <li><a href='news.php'>Новости</a></li>
        <li><a href='about.php'>О проекте</a></li>

      </ul>

      <ul class="mobile-nav">
        <li class="dropmedown godmenu"><div class="menu-toggle"><i class="icon-reorder"></i></div>
          <ul>
            <li><a href='index.php'>Главная</a></li>
            <li class="current"><a href='register.php'>Регистрация</a></li>
            <li><a href='news.php'>Новости</a></li>
            <li><a href='about.php'>О проекте</a></li>               
          </ul>
        </li>
      </ul>

    </nav>
  </section>
  <!-- /navigation -->


  <section id="content">

    <h2>Регистрация</h2>

    <article class="page">
      Желающие пользоваться услугами Социального такси должны ....  <br>
      Напоминаем, что этой услугой могут пользоваться только люди с ограничением движения, которым сложно пользоваться городской инфраструктурой и городским транспортом.<br>
      <br><br>
      <h2>Форма регистрации</h2>
      <figure class="form">
        <form action="" id="UserRegisterForm" method="post" accept-charset="utf-8">
          <div style="display:none;">
            <input type="hidden" name="_method" value="POST"/>
            <input type="hidden" name="" value="" id=""/>
          </div>            
          <hr><label>Имя</label>
          <input class="input" maxlength="32" type="text"/>
          <hr><label>Фамилия</label>
          <input class="input" maxlength="64" type="text"/>
          <hr><label>Отчество</label>
          <input class="input" maxlength="64" type="text"/>
          <hr><label>Дата рождения</label>
          <input class="input" type="date"/>
          <hr><label>Номер телефона</label>
          <input class="input" placeholder="+380123456789" maxlength="13"/>
          <hr><label>Адрес</label>
          <input class="input" maxlength="255" type="text"/>
          <hr><label>Пароль</label>
            <input class="input"  type="password" maxlength="50"/>      
          <hr><label>Дополнительная информация</label>
          <textarea class="input" cols="30" rows="6"></textarea>
          <button type="submit" class="button cta">Отправить</button>

         </article><!-- /page -->

      </section><!-- /content -->
      <div class="push"></div>
    </div><!-- /wrapper -->
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
