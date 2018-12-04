<?php 

/* COMEÇAR SESSÃO */
session_start();


/* VERIFICAR SE O LOGIN FOI SUBMETIDO */
if(isset($_POST['login'])){
    $loginUsers = array('missy' => 'yousofine', 'root' => 'localhost', '' => '');
	/*
	* HEY MISSY YOU SO FINE, YOU SO FINE YOU BLOW MY MIND HEY MISSY! HEY MISSY!
	* https://www.youtube.com/watch?v=n8dyaN4yW_0
	*/
/* VERIFICA USER / PASSWORD E GUARDA NUMA VAR*/ 
    $username = isset($_POST['username']) ? $_POST['username']: '';
	$password = isset($_POST['password']) ? $_POST['password']: '';


    /* VERIFICA SE COMB EXISTE NA ARRAY */
    if(isset($loginUsers[$username])&&$loginUsers[$username]==$password) {

        /* SE COMB EXISTIR, PASSA PARA INDEX.PHP */
        $_SESSION['userdata']['username']=$loginUsers[$username];
        header("location:index.php");
        exit;
    }else{
        /* SE A COMB FOR INCORRETA, ENVIA MENSAGEM */
        echo("<script>alert('Ooops! Try again.');</script>");
    }
}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>
			Catpress » Login
		</title>
		<meta charset="utf-8">
		<meta content="IE=edge" http-equiv="X-UA-Compatible">
		<link href="img/favicon-32x32.png" rel="icon" sizes="32x32" type="image/png">
		<link href="img/favicon-96x96.png" rel="icon" sizes="96x96" type="image/png">
		<link href="img/favicon-16x16.png" rel="icon" sizes="16x16" type="image/png">
		<meta content="width=device-width, initial-scale=1" name="viewport">
		<link href="css/main.css" media="screen" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Bitter:400,400i,700" rel="stylesheet">
	</head>
	<body>
		<div class="container">
			<div class="modal-container">
				<div class="modal-wrapper">
					<div class="modal">
						<div class="modal-header">
							<div class="logo-wrapper">
								<img class="logo" src="img/cat.gif" title="GIF by Chris Fernandez. User 'c_illustrates' on Dribble">
								<h1 class="">
									catpress
								</h1>
								<h2 class="">
									meow matters
								</h2>
							</div>
						</div>
						<div class="modal-content">
							<form action="" class="login" id="login" method="post" name="login">
								<div class="form-input">
									<label for="username">Username</label> <input class="form-text-input shadow-grey" id="username" name="username" type="text">
								</div>
								<div class="form-input">
									<label for="password">Password</label> <input class="form-text-input shadow-grey" id="password" name="password" type="password">
								</div><input class="login-button shadow-grey" name="login" type="submit" value="MEOW ME IN!">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script src="js/jquery-3.3.1.min.js">
		</script> 
		<script src="js/main.js">
		</script> 
		<script>
		</script>
	</body>
</html>