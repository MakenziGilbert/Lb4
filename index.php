<?php

	$access = array();
	$access = file("access.txt");
	$login = trim($access[0]);
	$password = trim($access[1]);

	//Если форма отправлена и пароля из формы совпадает с паролем в файле...
	if ( !empty( $_REQUEST['password'] ) and !empty($_REQUEST['login']) and ($_REQUEST['login']) == $login and ($_REQUEST['password']) == $password ) {
		echo 'Доступ открыт!'; //здесь напишем код, доступ к которому закрыт паролем
	} else {
		//Если форма была отправлена, НО пароль неправильный...
		if ( !empty($_REQUEST['password']) and ($_REQUEST['password']) != $password ) {
			echo 'Неправильный пароль!<br>'; //выведем сообщение об ошибке
		}
?>
		<form action='index.php' method='POST'>
			<label for="fname">Login:</label><br/>
			<input type="text" name="login"><br/>
			<label for="fname">Password:</label><br/>
			<input type='password' name='password' ><br/>
			<input type='submit' value='Отправить'>
		</form>
<?php
	}
?>