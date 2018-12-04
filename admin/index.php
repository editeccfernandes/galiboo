<?php 

/* COMEÇAR SESSÃO */
session_start();

/* SE NÃO HOUVER SESSÃO COM COMB, ENCAMINHA PARA LOGIN.PHP*/
if (!isset($_SESSION['userdata']['username'])){
    header("location:login.php");
    exit;
}

/* PHP DA CONEXÃO É OBRIGATÓRIO */
require('parts/connection.php');

/* SE LINK CONTER DELETE, APAGA */
if(isset($_GET['delete'])){
    $delete = $_GET['delete'];
	mysqli_query($connection,"DELETE FROM artigos WHERE id = $delete");
	
	header("Location: index.php");
}

/* QUERY À BASE DE DADOS */
$query = mysqli_query($connection , "SELECT * FROM artigos ORDER BY id DESC");
$articles = array();
while($article = mysqli_fetch_assoc($query)){
    $articles[] = $article;
};

?>
<!DOCTYPE html>
<html>
	<head>
		<title>
			Catpress » Kitty Dashboard
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
			<audio class="cat-sound" src="audio/cat.mp3"> 
			</audio>
			<nav>
				<div class="nav-container">
					<div class="nav-item">
						<div class="valigner">
							<div class="admin-logo">
								<img class="logo-admin-image" src="img/cat.gif" title="GIF by Chris Fernandez. User 'c_illustrates' on Dribble">
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
			<div class="filler" style="height: 100px"></div>
			<section class="content">
				<div class="quote">
					<h3>
						Hello Kitty Cat
					</h3>
					<h4>
						QUOTE OF THE DAY: “ALL IN ALL YOU’RE JUST A...NOTHER CAT IN THE WALL!” by CAT FLOYD
					</h4>
				</div><a href="new.php">
				<div class="addnew shadow-grey">
					<img src="img/more.svg">
				</div></a>
				<div class="articles-list">
					<?php for($i=0;$i<count($articles);$i++){ ?>
					<div class="article-list-item shadow-grey">
						<div class="article-item-content valigner">
							<div class="article-title">
								<h5>
									<?php echo $articles[$i]['title'] ?>
								</h5>
							</div>
							<div class="delete-edit">
								<a href="index.php?delete=<?php echo $articles[$i]['id'] ?>"><img class="delete" src="img/delete.svg"></a> <a href="post.php?id=<?php echo $articles[$i]['id']?>"><img class="edit" src="img/edit.svg"></a>
							</div>
						</div>
					</div><?php } ?>
				</div>
			</section>
		</div>
		<script src="js/jquery-3.3.1.min.js">
		</script> 
		<script src="js/main.js">
		</script>
	</body>
</html>