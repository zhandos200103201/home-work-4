<?php
/*
вывести здесь то что пришло из формы (как угодно)
не забудьте проверить isset
*/
if(isset($_GET['name'])){
    $name= $_GET['name'];
    echo ('Your Name is:     '. $name. '<br/>');
}
?>

<!-- дописать не хватающих атрибутов -->
<form method="get" action="index.php">
    Имя: <input type="text" name="name">
    <button type="submit">отправить</button>
</form>