<!DOCTYPE html>
<html>
 <head>
<link type="image/gif" rel="shortcut icon" href="favicon.gif">
  <meta charset="utf-8">
  <title> Операционные системы </title>
  <link rel="stylesheet" href="style.css">
 </head>
 <body>
  <div id="header"><h1>Операционные системы</h1></div>
   <div id="sidebar"> 
   <table>
    <tr>
      <td> <div id="test2">
        <a href="/index.html">На главную</a></div>
	   </td>
      </tr>
    </table>
</div>
<div id="content">

  <?php

$t[1]=$_POST['1'];
$t[2]=$_POST['2'];
$t[3]=$_POST['3'];
$t[4]=$_POST['4'];
$t[5]=$_POST['5'];
$t[6]=$_POST['6'];
$t[7]=$_POST['7'];
$t[8]=$_POST['8'];
$t[9]=$_POST['9'];
$t[10]=$_POST['10'];


function answer($m){
switch ($m) {
  case '1':
    return 4;
    break;
  case '2':
    return 3;
    break;
  case '3':
    return 1;
    break;
  case '4':
    return 1;
    break;
  case '5':
    return 3;
    break;
  case '6':
    return 3;
    break;
  case '7':
    return 1;
    break;
  case '8':
    return 1;
    break;
  case '9':
    return 2;
    break;
  case '10':
    return 1;
    break;
}
}

function rezult($rez){
  switch ($rez) {
    case 0:
    case 1:
    case 2:
    case 3:
    case 4:
      $oc=2;
      break;
    case 5:
    case 6:
       $oc=3;
      break;
    case 7:
    case 8:
      $oc=4;
      break;
    case 9:
    case 10:
      $oc=5;
      break;
  }
  echo '<h2>Ваша оценка: '.$oc.' - '.($rez*10).'%</h2><br>';
  switch ($oc) {
    case 2:
    echo "<h2>Плохой результат</h2>";
      break;
    case 3:
    echo "<h2>Вы можете лучше</h2>";
      break;  
    case 4:
    echo "<h2>Хороший результат</h2>";
      break;
    case 5:
    echo "<h2>Отличный результат</h2>";
      break; 
      }
}
$rez=0;
for ($i=1; $i <= 10 ; $i++) { 
  if ($t[$i]==answer($i)) {
    $rez++;
  }
}
rezult($rez);

for ($i=1; $i <= 10 ; $i++) { 
  if ($t[$i]==answer($i)) {
    echo "<p>".$i." + <br>";
  }
  else echo "<p>".$i." - <br>";
}
  ?>
  </div>
 <div id="footer">
  &copy; Валах Денис 2018
  </div>

 </body>
</html>