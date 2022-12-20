<?php
/*
вывести здесь то что пришло из формы (как угодно)
не забудьте проверить isset
*/
if(isset($_POST['name'],$_POST['age'])){
    $_name = $_POST['name'];
    $_age = $_POST['age'];
    echo "$_name is $_age years old";
}
?>

<!-- дописать не хватающих атрибутов -->
<form method="post">
    Имя: <input type="text" name="name">
    Возраст: <input type="text" name="age">
    <button type="submit">отправить</button>
</form>