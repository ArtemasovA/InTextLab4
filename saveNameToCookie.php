<?php
if (isset($_POST["name"]))
{
	setcookie("name", $_POST["name"]);
	echo "Спасибо " ;
	echo $_POST["name"];
	echo " ваше имя сохранено в куки.";
}
else
{
	echo "Неправильный запрос";
}


header("Location: http://{$_SERVER[HTTP_HOST]}/lab4/index.php");