<?php
session_start();
include("config.php");
    $phone = $_SESSION['login_user'];
    if($_SESSION['ref']==1) {
        echo '<script> alert("Ваш заказ успешно зарегистрирован")</script>';
        $_SESSION['ref']=0;
    }
    else {
        $_SESSION['ref']=0;
    }


   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $pointA = mysqli_real_escape_string($link,$_POST['point_A']);
      $pointB = mysqli_real_escape_string($link,$_POST['point_B']); 
      $date = mysqli_real_escape_string($link,$_POST['date_travel']);
      $_SESSION['point_a'] = $pointA;
      $_SESSION['point_b'] = $pointB;
      $_SESSION['date'] = $date;
      header("Location: show_order.php");

      // If result matched $myusername and $mypassword, table row must be 1 row
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
                        <li><a> <?php echo $phone;
                        ?> </a></li>
                        <li class="current"><a href='order_form.php'>Форма заказа</a></li>
                        <li><a href='news.php'>Новости</a></li>
                        <li><a href='about.php'>О проекте</a></li>
                        <li><a href='logout.php'>Выход</a></li>

                    </ul>

                    <ul class="mobile-nav">
                        <li class="dropmedown godmenu"><div class="menu-toggle"><i class="icon-reorder"></i></div>
                            <ul>
                                <li><a> <?php echo $phone;
                        ?> </a></li>
                                <li class="current"><a href='order_form.php'>Форма заказа</a></li>
                                <li><a href='news.php'>Новости</a></li>
                                <li><a href='about.php'>О проекте</a></li>
                                <li><a href='logout.php'>Выход</a></li>               
                            </ul>
                        </li>
                    </ul>

                </nav>
            </section>
            <!-- /navigation -->

            <section id="login">
                <div class="login-form">
                    <form action="" id="" method="post" accept-charset="utf-8">
                        <label align="center">Форма заказа</label>
                        <label>Адрес: точка отправления</label>
                        <div>
                            <input class="input" maxlength="255" type="text" name="point_A" /> 
                        </div>
                        <label>Адрес: конечная точка</label>
                        <div>
                            <input class="input" maxlength="255" type="text" name="point_B"/> 
                        </div>
                        <label>Дата поездки</label>
                        <div>
                        <input class="input" type="date" name="date_travel"/> 
                        </div>   
                        
                        <button  class="button cta">Поиск</button>
                    </div>
                </div><!-- /login-form -->
            </section><!-- /login -->

        </div><!-- /wrapper -->

        <section id="footer">
            <ul>
                <li class="copyright">
                </br>
                    <em>ТЕЛЕГА "ХАИ":</em> Сервис организации работы социального такси <br>для людей с ограниченными возможностями здоровья.<br>
                    2018 &copy;        
                    evgesha.strelnik@gmail.com
                </li>
                </ul>
            </section><!-- /footer -->
        </body>
        </html>