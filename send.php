<?php
if (isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['email'])) {
    $subject = "Оставили заявку";
    $message = "Имя заказчика: ".$_POST['name']."<br/>Телефон заказчика: ".$_POST['phone']."<br/> Email: ".$_POST['email'];
}
else if (isset($_POST['name']) && isset($_POST['phone'])) {
    $subject = "Заказали звонок";
    $message = "Имя заказчика: ".$_POST['name']."<br/>Телефон заказчика: ".$_POST['phone'];
}
else {
    $subject = "Заказали подробный план";
    $message = "Почта заказчика: ".$_POST['email'];
}

$to  = "кому@отправить.адрес";
$headers  = "Content-type: text/html; charset=utf-8 \r\n";
mail($to, $subject, $message, $headers);

?>
