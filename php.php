<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CSGO</title>
<?php
$dbc = mysqli_connect('localhost', '' , '', 'lesson');
if (isset($POST['submit'])){
  $username = mysqli_real_escape_string($dbc, trim($_POST['username']));
  $password = mysqli_real_escape_string($dbc, trim($_POST['password']));
  $email = mysqli_real_escape_string($dbc, trim($_POST['email']));
if(!empty($username) && !empty($password) && !empty(email)) {
  $query = "SELECT * FROM 'Signup' WHERE username = '$username'"
  $data = mysqli_query($dbc, $query);
  if(mysqli_num_rows($data) == 0) {
    $query = "insert info `Signup` (username, password) VALUES ('$username', $password");
  mysqli_query($dbc,$query)
  echo "Всё готово";
  mysqli_close($dbc);
  exit()
}
else {
  echo "Логин уже существует";
}

!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/css.css">
</head>
<body>

   <div id="page_wraper">
   	
       <!-- /header -->
       <header id="header">
           <div id="primary-menu">
             <img src="img/logo.png" alt="CSGO" class="logo">
           <ul>
           	  <li>
           		<li><a href="../index.html">Новости</a></li>
           		<li><a href="#">Коментарии</a></li>
           		<li><a href="team/index.html">Команды</a></li>
           		<li><a href="#">Игроки</a></li>
           		<li><a href="#">Площадки</a></li>
           		<li><a href="#">Матчи</a></li>
           		<li><a href="#">События Матчей</a></li>	
           	  </li>           
           </ul>
           <content>
       	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>"></form>
       	<label for="username">Введите ваш логин</label>
       	<input type="text" name="username">
       	<label for="password">Введите ваш пароль</label>
       	<input type="text" name="password">
       	<label for="email">Введите ваш email</label>
       	<input type="text" name="email">
       	<button name="submit">Вход</button>
       </content>
       </div>
      <div id="news">
      <h3 id="h3">Сегодняшние новости</h3>
      <table class="table">
      	<tr>
      		<th>
      			Navi vs envys| Navy 16-0 win game
      			<hr>
      			Navi vs envys| Navy 16-0 win game
      			<hr>
      			Navi vs envys| Navy 16-0 win game
      			<hr>
      			Navi vs envys| Navy 16-0 win game
      			<hr>
      			Navi vs envys| Navy 16-0 win game
      			<hr>
      			Navi vs envys| Navy 16-0 win game
      			<hr>
      			Navi vs envys| Navy 16-0 win game
      			<hr>
      			Navi vs envys| Navy 16-0 win game
      			<hr>
      			Navi vs envys| Navy 16-0 win game
      			<hr>
      			Navi vs envys| Navy 16-0 win game
      			<hr>
      			Navi vs envys| Navy 16-0 win game
      			<hr>
      		</th>
      	</tr>
      </table>
      </div>
      </div> 
       </header>
   
       <footer>
         <div class="container">
           
        </div>
       </footer>

</body>
</html>