<?php 
/* PHP DA CONEXÃO É OBRIGATÓRIO */
require('parts/connection.php');    

$id = $_GET['id'];

    //print_r($_POST['text']);

    if( count($_POST) > 0 ){
        $newtitle = mysqli_real_escape_string($connection,$_POST['title']);
        $newtext =  mysqli_real_escape_string($connection, $_POST['text']   );

        $sql = mysqli_query($connection, "UPDATE artigos SET title='$newtitle', text='$newtext'  WHERE id = $id ");
        //\echo("UPDATE artigos SET title='$newtitle', text='$newtext'  WHERE id = $id ");
        //var_dump($sql);

		header("Location: index.php");

    }

    //Fazer consulta à base de dados
    $query = mysqli_query($connection , "SELECT * FROM artigos WHERE id = $id");
    //Guardar numa variável o registo encontrado pela consulta
    $articles = mysqli_fetch_assoc($query);

?>
<!DOCTYPE html>
<html>
	<head>
		<title>
			Catpress » Manage Post
		</title>
		<meta charset="utf-8">
		<meta content="IE=edge" http-equiv="X-UA-Compatible">
		<link href="img/favicon-32x32.png" rel="icon" sizes="32x32" type="image/png">
		<link href="img/favicon-96x96.png" rel="icon" sizes="96x96" type="image/png">
		<link href="img/favicon-16x16.png" rel="icon" sizes="16x16" type="image/png">
		<meta content="width=device-width, initial-scale=1" name="viewport">
		<link href="css/main.css" media="screen" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Bitter:400,400i,700" rel="stylesheet">
		<style>
		</style>
	</head>
	<body>
		<div class="container">
			<nav>
				<div class="nav-container">
					<div class="nav-item">
						<div class="valigner">
							<div class="admin-logo">
							<a href="index.php"><img class="logo-admin-image" src="img/cat.gif" title="GIF by Chris Fernandez. User 'c_illustrates' on Dribble"></a>
								<div class="logo-text">
									<h1>
										catpress
									</h1>
									<h2>
										meow matters
									</h2>
								</div>
							</div>
						</div>
					</div>
					<div class="nav-item">
						<div class="valigner text-right">
							<div class="input-wrapper">
								<form action="logout.php" id="logout" method="post" name="logout">
									<input class="logout-button shadow-grey" name="login" type="submit" value="MEOW ME OUT!">
								</form>
							</div>
						</div>
					</div>
				</div>
			</nav>
			<div class="modal-container">
				<div class="modal-wrapper">
					<div class="modal post">
						<div class="modal-content">
							<form action="" method="post">
								<div class="form-input">
									<label for="title">title</label> <input class="form-text-input grey shadow-grey" id="title" name="title" type="text" value="<?php echo $articles['title']; ?>">
								</div>
								<div class="form-input">
									<label for="text">text</label> 
									<textarea class="form-text-input grey shadow-grey" id="text" name="text" rows="5" type="text"><?php echo $articles['text']; ?></textarea>
								</div><input class="submit-button shadow-grey" id="submit" type="submit" value="Add Catnip"> <a href="index.php">
								<div class="button">
									<div class="reject-button shadow-grey">
										Nah, let's leave
									</div>
								</div></a>
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
	</body>
</html>