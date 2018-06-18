<?php
session_start();
include("config.php");
$date = $_SESSION['date'];
 $sql = "SELECT number_bus,time_travel,seat FROM bus WHERE date_travel = '$date'";
      $result = mysqli_query($link,$sql);
      $count = mysqli_num_rows($result);?>
  <html>
    <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />    
  <title>W4W</title>
  <link rel="stylesheet" type="text/css" href="/css/style.css" />
</head>
<body>
 <div id="wrapper">
     <section id="content1">
        
        <div id="news-list">
           <?php
       
        
  echo '<table border="1" align=center id="table">';
  echo '<thead>';
  echo '<tr>';
  echo '<th bgcolor="#f0d1d1">Number_bus</th>';
  echo '<th bgcolor="#f0d1d1">Time_travel</th>';
  echo '<th bgcolor="#f0d1d1">Seat</th>';
  echo '<th bgcolor="#f0d1d1">Order</th>';
  echo '</tr>';
  echo '</thead>';
  echo '<tbody>';   
  while($data = mysqli_fetch_array($result)){ 
    echo '<tr>';
    echo '<td bgcolor="#f0d1d1">' . $data['number_bus'] . '</td>';
    echo '<td bgcolor="#f0d1d1">' . $data['time_travel'] . '</td>';
    echo '<td bgcolor="#f0d1d1">' . $data['seat'] . '</td>';
    echo '<td bgcolor="#f0d1d1"> <a href="order_form.php" >Заказать</a></td>';
    echo '</tr>';
  }
  $_SESSION['ref'] = 1;

    echo '</tbody>';
  echo '</table>'; ?>
 </div>
 </section><!-- /content -->
 </div>
 <section id="footer" align="right">
        <ul>
            <li class="copyright">
                <em>ТЕЛЕГА "ХАИ":</em> Сервис организации работы социального такси <br>для людей с ограниченными возможностями здоровья.<br>
                2018 &copy;        
                evgesha.strelnik@gmail.com
            </li>
        </ul>
    </section><!-- /footer -->
   
    </html>