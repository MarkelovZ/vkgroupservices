<head>
<meta charset="UTF-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
// Скрипт отправки (По идее... Никто не долежен увидеть эту часть сайта. Но я не ебу. Может и смогут.)
if(isset($_POST['send_message'])){
    if(empty($_POST['token'])){echo'Ошибка: Эй. Токен обязателен! <br>';}
    if(empty($_POST['chat_id'])){echo'Ошибка: Эй. ID Беседы - ОБЯЗАТЕЛЬНО!! :D <br>';}
    else{
        $query = file_get_contents("https://api.vk.com/method/messages.send?chat_id=".urlencode($_POST['chat_id'])."&message=".urlencode($_POST['message'])."&sticker_id=".urlencode($_POST['stck'])."&attachment=".urlencode($_POST['attachment'])."&keyboard=".urlencode($_POST['keyboard'])."&v=5.80&access_token=".urlencode($_POST['token']));
        $result = json_decode($query,true);
        print_r($result);
    }
}
// Форма (Пометка: ПЕРЕД ДОБАВЛЕНИЕМ НОВОЙ ФУНКЦИИ, ДОБАВИТЬ ЕЁ И ВЫШЕ ТОЖЕ!!!!!!!!!!!!!!!!!!!!!!!!)
?>
<meta charset="UTF-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<center><h1>Отправка сообщений в беседы от имени сообщества</h1><br>
<form method="post" action="#">
    <input type="text" name="token" placeholder="Токен группы">
    <br><br>
    <input type="text" name="chat_id" placeholder="ID беседы">
    <br><br>
    <textarea type="text" name="message" placeholder="Текст сообщения"></textarea>
    <br><br>
    <!--<input type="text" name="attachment" placeholder="Вложение (необязательно)">
    <br><br>
    <input type="text" name="stck" placeholder="Sticker id (необязательно)"><br>-->
	<br><br>
	<textarea type="text" name="keyboard" placeholder="Клавиатура"></textarea>
	<br>
    Если хотите отправить стикер, оставьте поле "Текст сообщения" пустым
    <br><br>
    <input type="submit" name="send_message" value="Отправить сообщение"> <br> 
    <p>Статус работы: <font face="Arial, Helvetica, sans-serif"><font color="#008000">ОК </font></font>(17.10.2018 15:52 Saratov)</p>
</form>  <br><br><br>  <p>Сайт написал <a href="https://vk.com/z.markelov" target="_blank">Захар Маркелов</a>. Изначально для паблика <a href="https://vk.com/dinocode" target="_blank">DINOCODE</a></p> </center>
<p align="center"><a href="https://vk.com/@z.markelov-publicchats" target="_blank"><i><b>ИНСТРУКЦИЯ</b></i></a></p>
<script type="text/javascript" src="https://vk.com/js/api/openapi.js?154"></script>

<center><!-- НЕ ТРОГАТЬ -->
<div id="vk_subscribe"></div>
<script type="text/javascript">
VK.Widgets.Subscribe("vk_subscribe", {}, 216186484);
</script> </center>