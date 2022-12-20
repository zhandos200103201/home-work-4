<?php
/*
вывести здесь то что пришло из формы (как угодно)
не забудьте проверить isset
*/
if(isset($_POST['students'])){
    $_i = 1;
    foreach ($_POST['students'] as $_student){
        echo "$_i student is $_student <br>";
        $_i++;
    }
}
?>

<!-- Задайте правильное название в атрибуте name, чтобы данные из этой формы отправились как массив -->
<form method="post">
    <div>
        Первый ученик:<br> ФИО: <input type="text" name="students[]">
    </div>
    <hr>
    <div>
        Второй ученик:<br> ФИО: <input type="text" name="students[]">
    </div>
    <hr>
    <div>
        Третий ученик:<br> ФИО: <input type="text" name="students[]">
    </div>
    <hr>
    <div>
        Четвертый ученик:<br> ФИО: <input type="text" name="students[]">
    </div>
    <hr>
    <button type="submit">отправить</button>
</form>