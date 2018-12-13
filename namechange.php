<head>
<meta charset="UTF-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
// Скрипт отправки (По идее... Никто не долежен увидеть эту часть сайта. Но я не хз. Может и смогут.)
if(isset($_POST['chatnamechange'])){
    if(empty($_POST['token'])){echo'Ошибка: Эй. Токен обязателен! <br>';}
    if(empty($_POST['chat_id'])){echo'Ошибка: Эй. ID Беседы - ОБЯЗАТЕЛЬНО!! :D <br>';}
	if(empty($_POST['NewNameKotPidorILInetAmoShetBitIGNATilinet'])){echo'Ошибка: Я кнш не против пустого названия беседы. Но ВК не позволяет это сделать. Хотя-бы точку поставь туда... <br>';}
    else{
        $query = file_get_contents("https://api.vk.com/method/messages.editChat?chat_id=".urlencode($_POST['chat_id'])."&title=".urlencode($_POST['NewNameKotPidorILInetAmoShetBitIGNATilinet'])."&v=5.80&access_token=".urlencode($_POST['token']));
        $result = json_decode($query,true);
        print_r($result);
    }
}
// Форма (Пометка: ПЕРЕД ДОБАВЛЕНИЕМ НОВОЙ ФУНКЦИИ, ДОБАВИТЬ ЕЁ И ВЫШЕ ТОЖЕ!!!!!!!!!!!!!!!!!!!!!!!!)
?>
<meta charset="UTF-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<center><h1>Смена названия беседы</h1><br>
<form method="post" action="#">
    <input type="text" name="token" placeholder="Токен группы">
    <br><br>
    <input type="text" name="chat_id" placeholder="ID беседы">
    <br><br><br><br>
    <input type="text" name="NewNameKotPidorILInetAmoShetBitIGNATilinet" placeholder="Новое название беседы"><br>
    Не все символы можно ставить в название беседы через апи. В ином случае может случиться что-то плохое. За это ответственность не несём.
    <br><br>
    <input type="submit" name="chatnamechange" value="Сменить название"> <br> 
    <!--<p>Статус работы: <font face="Arial, Helvetica, sans-serif"><font color="#008000">Узнавать у создателя. </font></font>(vk.com/z.markelov)</p>-->
</form>  <br><br><br>  <p>Сайт написал <a href="https://vk.com/z.markelov" target="_blank">Захар Маркелов</a>. Изначально для паблика <a href="https://vk.com/dinocode" target="_blank">DINOCODE</a></p> </center>
<p align="center"><a href="https://vk.com/@z.markelov-publicchats" target="_blank"><i><b>ИНСТРУКЦИЯ</b></i></a></p>
<script type="text/javascript" src="https://vk.com/js/api/openapi.js?154"></script>

<center><!-- НЕ ТРОГАТЬ -->
<div id="vk_subscribe"></div>
<script type="text/javascript">
VK.Widgets.Subscribe("vk_subscribe", {}, 216186484);
</script> </center>
