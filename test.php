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
function osn(){ 
   $m[1] = array(0 => 'Какое понятие/ия входят в тему ОС?', 1 => 'Прерывание.', 
   2 => 'Нити.', 3 => 'Файлы.',4 => 'Все.');
  $m[2] = array(0 => 'Что такое Kernel mode?', 
   1 =>'Режим ядра', 2 =>'Привилегированный режим', 3 =>'Это одно и тоже');
  $m[3] = array(0 => 'Главная задача файловой системы- это ...?', 1 => 'Скрыть особенности ввода-вывода и дать программисту простую абстрактную модель файлов.', 2 => 'Показать структуру файловой системы и дать доступ к информации.', 3 => 'Создать Skynet и захватить мир. ', 4 => 'Дать доступ пользователю только к данным внешних носителей.');
  $m[4] = array(0 => 'Концепция "черный ящик" похожа на:', 1 => 'Концепцию ОС как виртуальная машина.', 2 => 'Концепцию ОС как менеджер ресурсов.', 3 => 'Концепцию ОС как защитник системы.', 4 => 'Концепция ОС как системы реального времени.');
  $m[5] = array(0 => 'Какой год относится к третему периоду эволюции вычислительных систем?', 1 => '1949.', 2 => '1907.', 3 => '1967.', 4 => '1896.');
  $m[6] = array(0 => 'Какая ОС не относится к многозадачной?', 1 => 'Unix.', 2 => 'OS/2.', 3 => 'MS-DOS.', 4 => 'Windows.');
  $m[7] = array(0 => 'Рекурсия вызова процедур может быть реализована в архитектуре типа:', 1 => 'Монолитное ядро.', 2 => 'Слоеные системы.', 3 => 'В обоих системах.', 4 => 'Ни в одной.');
  $m[8] = array(0 => 'Назовите самый старый способ организации ОС.', 1 => 'Монолитное ядро.', 2 => 'Слоенные системы.', 3 => 'Микроядерная архитектура.', 4 => 'Смешанные системы.');
  $m[9] = array(0 => 'Слоеные системы, по сравнению с монолитным ядром, менее ...', 1 => 'Реализуемы.', 2 => 'Эффективны.', 3 => 'Тестируются.', 4 => 'Модифицируются.');
  $m[10] = array(0 => 'Микроядро, в смешанных системах, не работает с ...', 1 => 'Прикладными программами.', 2 => 'Виртуальной памятью.', 3 => 'Низкоуровневыми драйверами.');

for($s=1;$s<=10;$s++){
echo '<h2>Вопрос №'.$s.'</h2><br>';
echo '<h4>'.$m[$s][0].'</h4><br>';
echo '<form method="post" action="rezult.php">';
for($n=1;$n<=(count($m[$s]))-1;$n++){
  echo '<label><p><input type="radio" name='.$s.' value='.$n.'>'.$m[$s][$n].'</p></label><br>';
}
}
echo '<input type="submit" value="Отправить ответы">';
echo '</form>';
echo '<br><hr>';
}

//запускаем
osn();
  ?>
  </div>
 <div id="footer">
  &copy; Валах Денис 2018
  </div>

 </body>
</html>