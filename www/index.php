<?php 

$dbc = mysqli_connect('localhost', 'root', '', 'admin1');
if(!isset($_COOKIE['user_id'])) {
	if(isset($_POST['submit'])) {
		$user_username = mysqli_real_escape_string($dbc, trim($_POST['username']));
		$user_password = mysqli_real_escape_string($dbc, trim($_POST['password']));
		if(!empty($user_username) && !empty($user_password)) {
			$query = "SELECT `user_id` , `username` FROM `signup` WHERE username = '$user_username' AND password = SHA('$user_password')";
			$data = mysqli_query($dbc,$query);
			if(mysqli_num_rows($data) == 1) {
				$row = mysqli_fetch_assoc($data);
				setcookie('user_id', $row['user_id'], time() + (60*60*24*30));
				setcookie('username', $row['username'], time() + (60*60*24*30));
				$home_url = 'http://' . $_SERVER['HTTP_HOST'];
				header('Location: '. $home_url );	
			}
			else {
				echo '';
			}
		}
		else {
			echo '';
		}
}
}
?>
<!DOCTYPE HTML><html>
<head>
<?php
include "header.php"; ?>
<?php
include "body.php"; ?>
<?php
include "body1.php"; ?>
<?php
include "section.php"; ?>
<link rel="stylesheet" href="./css/admin.css">
</head>
<body>


<div class="container">
  <div style="text-align: center;">
    <a href="#openGlossary" class="floating-button">Глоссарий</a>
  </div>
  <div id="openGlossary" class="Glossary">
    <div class="Glossary-dialog">
      <div class="Glossary-content">
        <div class="Glossary-header">
          <h3 class="Glossary-title">Понятия</h3>
          <a href="#close" title="Close" class="close">&times;</a>
        </div>
        <div class="Glossary-body">
         <ul>
           <li></li>
           
         </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    var scrollbar = document.body.clientWidth - window.innerWidth + 'px';
    console.log(scrollbar);
    document.querySelector('[href="#opeGlossary"]').addEventListener('click', function () {
      document.body.style.overflow = 'hidden';
      document.querySelector('#openGlossary').style.marginLeft = scrollbar;
    });
    document.querySelector('[href="#close"]').addEventListener('click', function () {
      document.body.style.overflow = 'visible';
      document.querySelector('#openGlossary').style.marginLeft = '0px';
    });
  });
</script>
 </form>  </form> 

<div class="container">
  <div style="text-align: center;">
    <a href="#openadmin" class="floating-button">Учетная запись</a>
  </div>
  <div id="openadmin" class="admin">
    <div class="admin-dialog">
      <div class="admin-content">
        <div class="admin-header">
         
          <a href="#close" title="Close" class="close">&times;</a>
        </div>
        <div class="admin-body">
		<section align="center">
<?php
	if(empty($_COOKIE['username'])) {
?>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<label for="username">Логин:</label>
	<input type="text" name="username">
	<br>
	<label for="password">Пароль:</label>
	<input type="password" name="password">
	<br>
	<button type="submit" name="submit" class="floating-button">Войти</button>
	
	</form>
<?php
}
else {
	?>
	<p><a href="doc.php">Нормативные документы</a></p>
	<p><a href="exit.php">Выйти(<?php echo $_COOKIE['username']; ?>)</a></p>
<?php	
}
?>
</section>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    var scrollbar = document.body.clientWidth - window.innerWidth + 'px';
    console.log(scrollbar);
    document.querySelector('[href="#opeadmin"]').addEventListener('click', function () {
      document.body.style.overflow = 'hidden';
      document.querySelector('#openadmin').style.marginLeft = scrollbar;
    });
    document.querySelector('[href="#close"]').addEventListener('click', function () {
      document.body.style.overflow = 'visible';
      document.querySelector('#openadmin').style.marginLeft = '0px';
    });
  });
</script>

</body>
</html>