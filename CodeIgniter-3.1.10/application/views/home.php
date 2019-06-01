<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>DreamPass</title>

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
 <link rel="stylesheet" href="https://twitter.github.io/typeahead.js/css/examples.css" /> 
    <!-- Bootstrap core CSS -->
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+SC:400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Custom styles for this template -->
		<link href="../../carousel.css" rel="stylesheet">
		<link href="../../editfiddle.css" rel="stylesheet">
		<link href="../../load.css" rel="stylesheet">

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
						<div class="container">
								<div id="prefetch" class="donc">
								<input type="text" name="search_box" id="search_box" class="form-control input-lg typeahead" placeholder="Search Here" />
								</div>
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

      <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4">
            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2>Heading</h2>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2>Heading</h2>
            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2>Heading</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">John D.Rockefeller. <span class="text-muted">"First Billionaire"</span></h2>
            <p class="lead">« Les conditions essentielles pour réussir sont la patience et la certitude du succès. »</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="../../img/JohnD.Rockefeller.jpg" alt="John D.Rockefeller">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading"><span class="text-muted">Bill Cosby.</span></h2>
            <p class="lead"> « Pour réussir, votre désir de réussite doit être plus grand que votre peur de l’échec. »</p>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" src="../../img/BillCosby5.jpg" alt="Oscar Wilde">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Sénèque (philosophe).</h2>
            <p class="lead">« Ce n’est pas parce que les choses sont difficiles que nous n’osons pas, c’est parce que nous n’osons pas qu’elles sont difficiles. »</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="../../img/Sénèque.JPG" alt="Sénèque">
          </div>
        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

      </div><!-- /.container -->


      <!-- FOOTER -->
      <footer class="container">
        <p>&copy; 2018 Dreampass, Tous droits réservés </a></p>
      </footer>
    </main>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->    
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>
		<script src="https://twitter.github.io/typeahead.js/js/handlebars.js"></script>
		<script src="https://twitter.github.io/typeahead.js/releases/latest/typeahead.bundle.js"></script>
		<script>
$(document).ready(function(){
  var sample_data = new Bloodhound({
   datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
   queryTokenizer: Bloodhound.tokenizers.whitespace,
   prefetch:'http://localhost/CodeIgniter-3.1.10/index.php/Forum/fetch',
   remote:{
    url:'http://localhost/CodeIgniter-3.1.10/index.php/Forum/fetch/%QUERY',
    wildcard:'%QUERY'
   }
  });

	 $('#prefetch .typeahead').typeahead(null, {
   name: 'sample_data',
   display: 'name',
   source:sample_data,
   limit:10,
   templates:{
    suggestion:Handlebars.compile('<div class="row"><div class="col-md-2" style="padding-right:5px; padding-left:5px;"><img src="{{photo}}" class="img-thumbnail" width="48" /></div><div class="col-md-10" style="padding-right:5px; padding-left:5px;">{{name}}</div></div>')
   }
  });
});
</script>
  </body>
</html>

