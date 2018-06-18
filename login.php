<?php
   
   session_start();
	include("config.php");

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($link,$_POST['username']);
      $mypassword = mysqli_real_escape_string($link,$_POST['password']); 
      $sql = "SELECT id FROM user WHERE phone = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($link,$sql);
  
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
   
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         
         $_SESSION['login_user'] = $myusername;
     
         header("Location: order_form.php");
         
      }else {
         echo '<script> alert("Неправильный логин или пароль")</script>';
      }
   }
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
        <li class="current"><a href='index.php'>Главная</a></li>
        <li><a href='register.php'>Регистрация</a></li>
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
               
               <section id="login">
                <div class="login-form">
                    <form action="" id="" method="post" accept-charset="utf-8">
                        <label>Номер телефона</label>
                        <div>
                            <input class="input" placeholder="+380123456789" maxlength="13" type='text' name="username" /> 
                        </div>
                        <label>Пароль</label>
                        <div>
                            <input class="input"  type="password" maxlength="50" name="password" />
                        </div>     
                        <button type="submit" class="button cta">Войти</button>
                        <div class="info">
                            <a href="register.php" title="Регистрация">Регистрация</a>
                        </div>
                    </div>
                </div><!-- /login-form -->
            </section><!-- /login -->

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