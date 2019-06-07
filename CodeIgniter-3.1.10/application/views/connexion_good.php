<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>DreamPass</title>

    <!-- Bootstrap core CSS -->
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+SC:400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Custom styles for this template -->
		<link href="../../carousel.css" rel="stylesheet">
		<link href="../../editfiddle.css" rel="stylesheet">
		<link href="../../css/entreprise.css" rel="stylesheet">

  </head>
  <body>

    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">DREAMPASS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
					<li class="nav-item active">
              <a class="nav-link" href="home">Accueil</a>
            </li>
						<li class="nav-item">
							<?php
								if (isset($_SESSION['online']))
									echo '<a class="nav-link" href="profile">Porfil</a>';
							?>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
						</li>
						<li class="nav-item">
							<div id="searchbar">
								<form action="">
										<input class="champ" type="text" placeholder="Search..."/>
										<button class="bouton" type="button" value="search"> <img src="../../img/search.png"> </button>
								</form>
							</div>
						</li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
					<?php
						if (isset($_SESSION['online']))
							echo ' <li> <a href="edit"> <i class=""></i> <img src="../../img/test3.png" height="23" width="23">  Paramètre</a></li>';
					?>
							<?php
								if (isset($_SESSION['online'])) {
									echo '<li><a href="profile" ><i  class="fas fa-user"></i>' . $_SESSION['name'] . '</a></li>';
								}
								else
									echo '<li> <a href="register"> <i class="fas fa-user"></i> Register</i></a></li>';
							?>
							<?php
								if (!isset($_SESSION['online']))
									echo '<li><a href="login"><i class="fas fa-sign-in-alt"></i>Login</a></li>';
								else
									echo '<li><a href="logout"><i class="fas fa-sign-in-alt"></i>Logout</a></li>';
							?>
          </ul>

        </div> 
      </nav>
    </header>

    <main role="main">

      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="../../img/test.jpg" alt="First slide">
            <div class="container">
              <div class="carousel-caption text-left">
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" src="../../img/ban.jpg" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
              </div>
            </div>
          </div>
          <!--div class="carousel-item">
            <img class="third-slide" src="img/m.jpg" alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-right">
              </div>
            </div>
        </div>-->
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>


      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->
			<h1> <center>CAMELEON</center></h1>
        <!-- Three columns of text below the carousel -->
			<nav class="ANAV">
			 <img class="AINAV" src="../../img/5.jpg">
			<form class="test4"  action="">

			</form> 
			</nav>
      <div class="container marketing">
			</div>      <!-- /END THE FEATURETTES -->
      </div><!-- /.container -->
      <!-- FOOTER -->
			<hr />
			<article class="FileA">
			<h1> file d'actualiter</h1>
			</article>
      <?php  $this->load->view('footer'); ?>
			<hr class="featurette-divider">
    </main>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  </body>
</html>
