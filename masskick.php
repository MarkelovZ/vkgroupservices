<head>
<?php
// Скрипт отправки (По идее... Никто не долежен увидеть эту часть сайта. Но я хз. Может и смогут.)
if(isset($_POST['kickusers'])){
    if(empty($_POST['token'])){echo'Ошибка: Эй. Токен обязателен! <br>';}
    if(empty($_POST['chat_id'])){echo'Ошибка: Эй. ID Беседы - ОБЯЗАТЕЛЬНО!! :D <br>';}
	if(empty($_POST['reason'])){echo'Ошибка: Указывать причину кика - обязательно <br>';}
	if(empty($_POST['id'])){echo'Ошибка: Прости, дурак... А кого ты исключать то собрался? Пустоту?  <br>';}
    else{
		$query = file_get_contents("https://api.vk.com/method/messages.send?chat_id=".urlencode($_POST['chat_id'])."&message=".urlencode($_POST['reason'])."&v=5.80&access_token=".urlencode($_POST['token']));
        $query = file_get_contents("https://api.vk.com/method/messages.removeChatUser?chat_id=".urlencode($_POST['chat_id'])."&member_id=".urlencode($_POST['id10'])."&v=5.85&access_token=".urlencode($_POST['token']));
		$query = file_get_contents("https://api.vk.com/method/messages.removeChatUser?chat_id=".urlencode($_POST['chat_id'])."&member_id=".urlencode($_POST['id2'])."&v=5.85&access_token=".urlencode($_POST['token']));
		$query = file_get_contents("https://api.vk.com/method/messages.removeChatUser?chat_id=".urlencode($_POST['chat_id'])."&member_id=".urlencode($_POST['id3'])."&v=5.85&access_token=".urlencode($_POST['token']));
		$query = file_get_contents("https://api.vk.com/method/messages.removeChatUser?chat_id=".urlencode($_POST['chat_id'])."&member_id=".urlencode($_POST['id4'])."&v=5.85&access_token=".urlencode($_POST['token']));
		$query = file_get_contents("https://api.vk.com/method/messages.removeChatUser?chat_id=".urlencode($_POST['chat_id'])."&member_id=".urlencode($_POST['id5'])."&v=5.85&access_token=".urlencode($_POST['token']));
		$query = file_get_contents("https://api.vk.com/method/messages.removeChatUser?chat_id=".urlencode($_POST['chat_id'])."&member_id=".urlencode($_POST['id6'])."&v=5.85&access_token=".urlencode($_POST['token']));
		$query = file_get_contents("https://api.vk.com/method/messages.removeChatUser?chat_id=".urlencode($_POST['chat_id'])."&member_id=".urlencode($_POST['id7'])."&v=5.85&access_token=".urlencode($_POST['token']));
		$query = file_get_contents("https://api.vk.com/method/messages.removeChatUser?chat_id=".urlencode($_POST['chat_id'])."&member_id=".urlencode($_POST['id8'])."&v=5.85&access_token=".urlencode($_POST['token']));
		$query = file_get_contents("https://api.vk.com/method/messages.removeChatUser?chat_id=".urlencode($_POST['chat_id'])."&member_id=".urlencode($_POST['id9'])."&v=5.85&access_token=".urlencode($_POST['token']));
		$query = file_get_contents("https://api.vk.com/method/messages.removeChatUser?chat_id=".urlencode($_POST['chat_id'])."&member_id=".urlencode($_POST['id'])."&v=5.85&access_token=".urlencode($_POST['token']));
        $result = json_decode($query,true);
        print_r($result);
    }
}
// Форма (Пометка: ПЕРЕД ДОБАВЛЕНИЕМ НОВОЙ ФУНКЦИИ, ДОБАВИТЬ ЕЁ И ВЫШЕ ТОЖЕ!!!!!!!!!!!!!!!!!!!!!!!!)
?>
</script>
<center><h1>Массовое исключение пользователей из беседы</h1><br>
<form method="post" action="#">
    <input type="text" name="token" placeholder="Токен группы">
    <br><br>
    <input type="text" name="chat_id" placeholder="ID беседы">
    <br><br><br><br>
	<textarea type="text" style="margin: 0px; width: 372px; height: 71px;" name="reason" placeholder="Причина кика">Пользователи исключёны из беседы администратором по причине: Причина не указана</textarea>
	<br><br>
    <input type="text" name="id" placeholder="ID юзера или сообщества"><br>
	<input type="text" name="id2" placeholder="ID юзера или сообщества"><br>
	<input type="text" name="id3" placeholder="ID юзера или сообщества"><br>
	<input type="text" name="id4" placeholder="ID юзера или сообщества"><br>
	<input type="text" name="id5" placeholder="ID юзера или сообщества"><br>
	<input type="text" name="id6" placeholder="ID юзера или сообщества"><br>
	<input type="text" name="id7" placeholder="ID юзера или сообщества"><br>
	<input type="text" name="id8" placeholder="ID юзера или сообщества"><br>
	<input type="text" name="id9" placeholder="ID юзера или сообщества"><br>
	<input type="text" name="id10" placeholder="ID юзера или сообщества"><br>
    Внимание! Пригласить пользователей обратно от имени сообщества - НЕ получится! Выполняйте данное действие на свой страх и риск!
    <br><br>
    <input type="submit" name="kickusers" value="Исключить"> <br> 
    <p>Статус работы: <font face="Arial, Helvetica, sans-serif"><font color="#008000">Узнавать у создателя. </font></font>(vk.com/z.markelov)</p>
</form>  <br><br><br>  <p>Сайт написал <a href="https://vk.com/z.markelov" target="_blank">Захар Маркелов</a>. Изначально для паблика <a href="https://vk.com/dinocode" target="_blank">DINOCODE</a></p> </center>
<p align="center"><a href="https://vk.com/@z.markelov-publicchats" target="_blank"><i><b>ИНСТРУКЦИЯ</b></i></a></p>
<script type="text/javascript" src="https://vk.com/js/api/openapi.js?154"></script>

<center><!-- НЕ ТРОГАТЬ -->
<div id="vk_subscribe"></div>
<script type="text/javascript">
VK.Widgets.Subscribe("vk_subscribe", {}, 216186484);
</script> </center>
