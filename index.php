<?php 
require('admin/parts/connection.php');  
  
$query = mysqli_query($connection , "SELECT * FROM artigos ORDER BY id DESC");
$articles = array();
while($article = mysqli_fetch_assoc($query)){
    $articles[] = $article;
}?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<title>
		Galiboo - Case Study
	</title>
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<link href="https://fonts.googleapis.com/css?family=Titillium+Web:200,200i,300,300i,400,400i,600,600i,700,700i,900"
	 rel="stylesheet">
	<link href="css/main.css" media="screen" rel="stylesheet" type="text/css">
	<link href="img/favicon-32x32.png" rel="icon" sizes="32x32" type="image/png">
	<link href="img/favicon-96x96.png" rel="icon" sizes="96x96" type="image/png">
	<link href="img/favicon-16x16.png" rel="icon" sizes="16x16" type="image/png">
</head>

<body>
	<div class="container">
		<div id="progress-bar"></div>
		<!--section class="nav">-->
		<div class="page-navigation-wrapper">
			<div class="page-navigation-items">
				<div class="page-navigation-item">
					<a href="#cover">
						<div class="page-navigation-item-number" data-pageinfo="Home">
							1
						</div>
					</a>
				</div>
				<div class="page-navigation-item">
					<a href="#about">
						<div class="page-navigation-item-number" data-pageinfo="About">
							2
						</div>
					</a>
				</div>
				<div class="page-navigation-item">
					<a href="#range">
						<div class="page-navigation-item-number" data-pageinfo="Range Search">
							3
						</div>
					</a>
				</div>
				<div class="page-navigation-item">
					<a href="#voice">
						<div class="page-navigation-item-number" data-pageinfo="Voice Search">
							4
						</div>
					</a>
				</div>
				<div class="page-navigation-item">
					<a href="#music">
						<div class="page-navigation-item-number" data-pageinfo="Music Analysis">
							5
						</div>
					</a>
				</div>
				<div class="page-navigation-item">
					<a href="#news">
						<div class="page-navigation-item-number" data-pageinfo="Latest News">
							6
						</div>
					</a>
				</div>
			</div>
			<div class="page-navigation page-hover">
				About
			</div>
		</div>
		<!--section class="nav">-->
		<section class="slide cover" data-pagename="Home" id="cover">
			<img class="orb2 _large" src="img/orb1.png" style="left: 80vw; top: 10vh;"> <img class="orb3 _large" src="img/orb2.png"
			 style="top: 5vh; left: 5vh;"> <img class="dash2 _small" src="img/dash4.png" style="top: 20vh; left: 80vw;"> <img
			 class="dash1 _large" src="img/dash1.png" style="top: 50vh; left: 80vw;"> <img class="line" src="img/line.png" style="top: 50vh; left: 80vw;">
			<img class="line" src="img/line.png" style="top: 10vh; left: 50vw;"> <img class="line" src="img/line.png" style="top: 30vh; left: 10vw;">
			<div class="slide-content valigner">
				<div class="_2col">
					<div class="cover_header">
						<h1 class="txt-align-right">
							CASE STUDY:<br>
							GALIBOO MUSIC AI
						</h1>
						<p class="txt-align-right">Aplicação otimizada para Google Chrome. <br> Web Speech pode não corrrer em outros browsers.</p>
					</div>
					<div class="cover_text">
						<div class="cover_text_item txt-align-left">
							<a href="#about">
								<div class="cover_text_item_number">
									<p class="cover_text_item_number_txt">
										1
									</p>
								</div>
								<div class="cover_text_item_text">
									About
								</div>
							</a>
						</div>
						<div class="cover_text_item txt-align-left">
							<a href="#range">
								<div class="cover_text_item_number">
									<p class="cover_text_item_number_txt">
										2
									</p>
								</div>
								<div class="cover_text_item_text">
									Range search
								</div>
							</a>
						</div>
						<div class="cover_text_item txt-align-left">
							<a href="#voice">
								<div class="cover_text_item_number">
									<p class="cover_text_item_number_txt">
										3
									</p>
								</div>
								<div class="cover_text_item_text">
									Voice search
								</div>
							</a>
						</div>
						<div class="cover_text_item txt-align-left">
							<a href="#music">
								<div class="cover_text_item_number">
									<p class="cover_text_item_number_txt">
										4
									</p>
								</div>
								<div class="cover_text_item_text">
									Music Analysis
								</div>
							</a>
						</div>
						<div class="cover_text_item txt-align-left">
							<a href="#news">
								<div class="cover_text_item_number">
									<p class="cover_text_item_number_txt">
										5
									</p>
								</div>
								<div class="cover_text_item_text">
									Latest News
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section><!-- about -->
		<section class="slide about" data-pagename="About" id="about">
			<div class="slide-content valigner">
				<div class="_2col">
					<div>
						<div class="col-item slide-header">
							<h2>
								About
							</h2>
						</div>
						<div class="col-item">
							<ul class="collapsible-wrapper" id="collapsible">
								<li>
									<label class="collapsible-item-title" for="first">A.I. that understands music. Like humans.</label> <input id="first"
									 name="collapsible" type="radio">
									<div class="collapsible-item-content">
										<p>
											By scanning just a few seconds of any song, our AI can accurately detect about 600 different musical
											attributes, along with more than 60 different emotions (and how they change over time). As you combine this
											intelligence with your music offerings, you'll be able to craft amazing &amp; personalized user experiences
											that were simply impossible before. maiores est eos corrupti possimus. Fuga dolor rem, impedit quia possimus
											expedita fugiat recusandae eum doloribus, maxime sapiente.
										</p>
									</div>
								</li>
								<li>
									<label class="collapsible-item-title" for="second">Adapts to your users, like magic.</label> <input id="second"
									 name="collapsible" type="radio">
									<div class="collapsible-item-content">
										<p>
											Thanks to its ability to understand music, our AI's live playlist engine will also be able to intelligently
											learn the personalized music tastes of your users. Plus, the more the user interacts with it, the smarter it
											gets.
										</p>
									</div>
								</li>
								<li>
									<label class="collapsible-item-title" for="third">Easily integrates with your existing music catalog.</label>
									<input id="third" name="collapsible" type="radio">
									<div class="collapsible-item-content">
										<p>
											We understand that not every company &amp; organization operates on the same music catalog. That's why we've
											designed our AI technology to work easily with any music catalog out there. Whether you're working with
											millions of tracks from record labels or using only the songs belonging to your users, we've got you
											covered.
										</p>
									</div>
								</li>
								<li>
									<label class="collapsible-item-title" for="fourth">Scales to infinity, and beyond.</label> <input id="fourth"
									 name="collapsible" type="radio">
									<div class="collapsible-item-content">
										<p>
											Since our technology doesn't depend on humans, our platform is able to infinitely scale with your consumer
											demand.
										</p>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="ai-orb-wrapper">
						<img class="ai-orb" src="img/ai-orb.gif">
					</div>
				</div>
			</div><img class="orb2 _xlarge" src="img/orb2.png" style="left: -10vw; top: 20vh;"> <img class="dash2 _medium" src="img/dash2.png"
			 style="top: 70vh; left: 0vw;"> <img class="line" src="img/line.png" style="top: -50vh; left: 80vw;"> <img class="line"
			 src="img/line.png" style="top: -60vh; left: 50vw;"> <img class="line" src="img/line.png" style="top: -80vh; left: 95vw;">
		</section>
		<section class="slide range" data-pagename="Range Selector" id="range">
			<img class="orb1 _large" src="img/orb1.png" style="left: 83vw; top: 50vh;"> <img class="dash3 _medium" src="img/dash3.png"
			 style="top: 61vh; left: 79vw;"> <img class="line" src="img/line.png" style="top: -170vh; left: 80vw;"> <img class="line"
			 src="img/line.png" style="top: -190vh; left: 50vw;"> <img class="line" src="img/line.png" style="top: -180vh; left: 10vw;">
			<div class="slide-content valigner range-subslider-1">
				<div class="_2col">
					<div>
						<div class="col-item slide-header">
							<h2>
								Range Selection
							</h2>
						</div>
						<div class="col-item hsl-ai-orb">
							<img class="hsl-ai-orb" src="img/ai-orb.gif">
						</div>
					</div>
					<div class="range-wrapper">
						<div class="col-item">
							<p class="range-header">
								Select the amount of the following emotions:
							</p>
						</div>
						<div class="col-item">
							<div class="range-selection-wrapper">
								<form name="range_form">
									<div class="slide-wrapper">
										<p class="slide-text range-align-right">
											Sad
										</p><input name="a" class="slider" data-type="hue-rotate" id="ranges" max="1000" min="0" type="range" value="500">
										<p class="slide-text range-align-left">
											Happy
										</p>
									</div>
									<div class="slide-wrapper">
										<p class="slide-text range-align-right">
											Rough
										</p><input name="b" class="slider" data-type="saturate" id="ranges" max="1000" min="0" type="range" value="500">
										<p class="slide-text range-align-left">
											Smooth
										</p>
									</div>
									<div class="slide-wrapper">
										<p class="slide-text range-align-right">
											Negative
										</p><input name="c" class="slider" data-type="grayscale" id="ranges" max="1000" min="0" type="range" value="500">
										<p class="slide-text range-align-left">
											Positive
										</p>
									</div>
									
									<div class="buttons">
										<input name="" class="range-submit" type="button" value="Submit"> <input type="reset" value="Reset">
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="slide-content valigner range-subslider-2">
				<div class="_1col">
					<div class="">
						<div class="slide-header">
							<h2>Range Selection</h2>
						</div>
					</div>
					<div class="audio-wrapper">
						<audio class="audio-range" controls src=""></audio>
						<div class="track">
							<div class="artist">Artist</div>
							<div class="song">song</div>
						</div>
						<button class="range-return">Another one?</button>
					</div>
				</div>
			</div>
		</section>
		<section class="slide voice" data-pagename="Voice Search" id="voice">
			<img class="orb2 _xlarge" src="img/orb2.png" style="left: -9vw; top: 10vh;"> <img class="orb3 _large" src="img/orb3.png"
			 style="left: 80vw; top: 50vh;"> <img class="dash2 _medium" src="img/dash2.png" style="top: 60vh; left: 5vw;"> <img
			 class="line" src="img/line.png" style="top: -310vh; left: 80vw;"> <img class="line" src="img/line.png" style="top: -300vh; left: 30vw;">
			<img class="line" src="img/line.png" style="top: -290vh; left: 10vw;">
			<div class="slide-content valigner">
				<div class="_1col">
					<div class="col-item slide-header">
						<h2 class="">
							Voice Search
						</h2>
					</div>
					<div>
						<h3 class="dynamic-title">
							Talk to me
						</h3>
						<p class="slide-subheader">
							Try "Sad Song"
						</p><button id="fireaudio">Press me to start speech caption</button>
					</div>
					<div class="chat-wrapper">
						<div class="chat-user-wrapper">
							<p>
								You
							</p>
							<div class="chat-user-baloon">
								<div class="chat-user-baloon-txt">
									Say Something!
								</div>
							</div>
						</div>
						<div class="chat-ai-wrapper">
							<p>
								Artificial Intelligence
							</p>
							<div class="chat-ai-baloon">
								<div class="chat-ai-baloon-txt">
									I'll reply to you!
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="slide music" data-pagename="Music Analysis" id="music">
			<img class="orb2 _xlarge" src="img/orb2.png" style="left: -10vw; top: 15vh; transform: rotate(-40deg)"> <img class="dash2 _large"
			 src="img/dash3.png" style="top: 48vh; left: 69vw;"> <img class="line" src="img/line.png" style="top: -480vh; left: 85vw;">
			<img class="line" src="img/line.png" style="top: -490vh; left: 62vw;"> <img class="line" src="img/line.png" style="top: -450vh; left: 10vw;">
			<div class="slide-content valigner subslide-1">
				<div class="_1col">
					<div class="slide-header">
						<h2>
							Music Analysis
						</h2>
					</div>
					<div>
						<h3 class="small-title">
							Give me a youtube video link
						</h3>
						<div class="loader">
								<div class="rect1"></div>
								<div class="rect2"></div>
								<div class="rect3"></div>
								<div class="rect4"></div>
								<div class="rect5"></div>
							  </div>
						<p class="slide-subheader">
							Or try this one. <br> This is an experimental feature, you might run into some errors. <br> Avoid official
							videos.
						</p>
	
					</div>
					<form class="youtube" id="youtube" name="youtube">
						<input id="link" name="url" type="text" value="https://www.youtube.com/watch?v=HCjNJDNzw8Y">
						<div class="buttons">
							<input id="analyze" type="button" value="Analyze">
						</div>
					</form>
				</div>
			</div>
			<div class="slide-content valigner subslide-2">
				<div class="_2col">
					<div class="col-item">
						<div class="slide-header">
							<h2>
								Music Analysis
							</h2>
						</div>
					</div>
				</div>
				<div class="_1col">
					<div class="">
						<div class="_2col">
							<iframe allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="video"
							 frameborder="0" height="315" src="" width="560"></iframe>
							<div class="">
								<div class="col-item"></div>
								<div class="col-item">
									<div class="results">
										<div class="results-header">
											Your results
										</div>
										<div class="result" id="energy">
										<div class="result-txt">
												Energy
											</div>
											<div class="result-bar-wrapper">
												<div class="result-bar">
													100%
												</div>
											</div>
										
										</div>
										<div class="result" id="danceability">
										<div class="result-txt">
												Danceability
											</div>
											<div class="result-bar-wrapper">
												<div class="result-bar">
													100%
												</div>
											</div>
											
										</div>
										<div class="result" id="acousticness">
										<div class="result-txt">
												Acousticness
											</div>
											<div class="result-bar-wrapper">
												<div class="result-bar">
													100%
												</div>
											</div>
											
										</div>
										<div class="result">
										<div class="result-txt">
												Instrumentalness
											</div>
											<div class="result-bar-wrapper" id="instrumentalness">
												<div class="result-bar">
													100%
												</div>
											</div>
											
										</div><button class="result-return">Another one?</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="slide-nojs links visible-overflow" data-pagename="Links" id="news">
			<img class="orb4 _medium" src="img/orb4.png" style="left: 60vw;top: 60vh;opacity: 1;"> <img class="dash2 _small" src="img/dash2.png"
			 style="top: 30vh;left: 4vw;opacity: 1;"> <img class="line" src="img/line.png" style="top: -580vh;left: 80vw;opacity: 1;">
			<img class="line" src="img/line.png" style="top: -590vh; left: 50vw; opacity: 1;"> <img class="line" src="img/line.png"
			 style="top: -560vh;left: 10vw;opacity: 1;">
			 <div class="slide-content valigner link-subslider-2">
				
				<div class="_1col">
						<div class="modal" id="modal">
								<div class="modal-header">
									Lorem Ipsum
								</div>
								<div class="modal-text">
									Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis quod sequi obcaecati sint, in voluptatibus dolores esse iure ab, temporibus quo saepe quisquam incidunt, totam molestias rem odit iusto atque!
								</div>
							</div>
							<button class="modal-button">return</button>
				</div>
			</div>
			<div class="slide-content link-subslider-1 scrollable">
				<div class="_3col">
					<div class="slide-header">
						<h2>
							Latest news
						</h2>
					</div>
				</div>
				<div class="articles-container scrollable">
					<div class="_4col">
						<?php for($i=0;$i<count($articles);$i++){ ?>
							
							
							<div class="article">
								<div class="fade-out"></div>
									<a class="no-link" href="#modal">
							<div class="article-header">
								<?php echo $articles[$i]['title']?>
							</div>
							<div class="article-text">
								<?php echo $articles[$i]['text'] ?>
							</div></a>
						</div>
						<?php } ?>
					</div>
				</div>
				<div class="_1col">
					<div class="links-container">
						<div class="button-wrapper">
						<a href="./admin/index.php" target="_blank"><button class="auto-margin">admin login</button></a>
						</div>
						<div class="link-wrapper small-text">
							<div class="link-header">
							trabalho feito por edite fernandes
							</div>
						</div>
						<div class="link-wrapper small-text">
							<div class="link-header">
								cadeira de laboratório de aplicações interativas
							</div>
						</div>
						</div>
					</div>
			</div>
			
		</section>
	</div>
</body>
<script src="js/jquery-3.3.1.min.js">
</script>
<script src="js/main.js">
</script>

</html>