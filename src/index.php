<?php
//
//namespace index;
//
//use function auth\authReq;
//use function getContacts\getContact;
//use function request\answerReq;
//
//include_once 'auth.php';
//include_once 'request.php';
//include_once 'addContact.php';
//include_once 'getContacts.php';
//
//authReq();
//$res = answerReq();
//$statusSuccess = 142;
//$statusEnd = 143;
//$currentTime = time();
//?>
<!---->
<!--<br>-->
<!--<br>-->
<!---->
<?php
////
////for($i = 0; $i < count($res); $i++){
////    echo $res[$i]['status_id'].PHP_EOL;
////}
////?>
<!---->
<!--<!--<table style="width: auto;" border="1">-->-->
<!--<!--    <tbody>-->-->
<!--<!--    <tr>-->-->
<!--<!--        <td>id</td>-->-->
<!--<!--        <td>Имя сделки</td>-->-->
<!--<!--        <td>Бюджет сделки</td>-->-->
<!--<!--    </tr>-->-->
<!--<!--    -->--><?php ////for($i = 0; $i < count($res); $i++){ ?>
<!--<!--    <tr>-->-->
<!--<!--        -->--><?php ////if(($res[$i]['status_id'] != $statusSuccess) && ($res[$i]['status_id'] != $statusEnd) && ($res[$i]['created_at'] > ($currentTime - 2592000))){?>
<!--<!--        <td>-->--><?////= $res[$i]['id']; ?><!--<!--</td>-->-->
<!--<!--        <td>-->--><?////= $res[$i]['name']; ?><!--<!--</td>-->-->
<!--<!--        <td>-->--><?////= $res[$i]['sale']; }}?><!--<!--</td>-->-->
<!--<!--    </tr>-->-->
<!--<!--    </tbody>-->-->
<!--<!--</table>-->-->
<!--<br>-->
<!--<br>-->
<!--<br>-->
<!--<br>-->
<!---->
<!-- <form name="Форма обратной связи" action="addSale.php" method="post">-->
<!--     <h3>Форма обратной связи</h3><br>-->
<!--            <div>-->
<!--                <input type="text" name="contactName" autofocus="true" placeholder="имя"><br><br>-->
<!--                <input type="text" name="phone" placeholder="телефон"><br><br>-->
<!--                <input type="text" name="email" placeholder="email"><br><br>-->
<!--                <input type="text" name="description" placeholder="примечание"><br><br>-->
<!--                <input type="submit" value="отправить">-->
<!--            </div>-->
<!--    </form>-->
<!--<br>-->
<!--<br>-->
<!--<br>-->
<!--<!--<form name="создание новой сделки" action="addContact.php" method="post">-->-->
<!--<!--    <h3>Новый контакт</h3><br>-->-->
<!--<!--    <div>-->-->
<!--<!--        <input type="text" name="contactName" autofocus="true" placeholder="имя"><br><br>-->-->
<!--<!--        <input type="text" name="phone" placeholder="телефон"><br><br>-->-->
<!--<!--        <input type="text" name="email" placeholder="email"><br><br>-->-->
<!--<!--        <input type="submit" value="Создать новый контакт">-->-->
<!--<!--    </div>-->-->
<!--<!--</form>-->-->
<!---->

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>test amocrm form</title>
</head>
<body>

<form name="test" method="post" action="testSendSale.php">
    <p><b>Ваше имя:</b><br>
        <input name="userName" type="text" size="40" required >
    </p>
    <p><b>Телефон:</b><br>
        <input name="userPhone" type="text" size="40" required >
    </p>
    <p><b>Email:</b><br>
        <input name="userEmail" type="email" size="40" required >
    </p>
    <p><input type="submit" value="Отправить"></p>

</form>

</body>
</html>