<meta http-equiv='refresh' content='3; url=http://kamin.byethost15.com/'>
<meta charset="UTF-8" />
<?php
if (isset($_POST['submit'])) {
    $to = "lightshanti@mail.ru";
    $subject = "Поступил заказ";
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $message_to = "Добрый день! На Вашем сайте новый заказ от ".$name.", телефон ".$phone.", электронная почта ".$email." 
    , текст сообщения: ".$message.".";
    $email = 'email@domen.ru';
    if (filter_var($email, FILTER_VALIDATE_EMAIL) !== false) {
     alert('ОК, формат email правильный');
    }else{
        alert('проверка email на правильность НЕ пройдена');
    }

    $headers = array (
        'From: <kamin.byethost15.com>' ,
        'Reply-To: <kamin.byethost15.com>' ,
        'Content-Type: text/html');
        


    mail($to, $subject, $message_to, $headers);

    header("Location: thank-you.html");
    exit();

}
?>