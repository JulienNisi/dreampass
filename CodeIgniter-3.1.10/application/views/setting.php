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
    <link href="../../seting.css" rel="stylesheet">
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
								if ($_SESSION['online'])
									echo '<a class="nav-link" href="profile">Porfil</a>';
							?>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
					<?php
						if ($_SESSION['online'])
							echo ' <li> <a href="edit"> <i class=""></i> <img src="../../img/test3.png" height="23" width="23">  Paramètre</a></li>';
					?>
							<?php
								if ($_SESSION['online']) {
									echo '<li><a href="profile" ><i  class="fas fa-user"></i>' . $_SESSION['name'] . '</a></li>';
								}
								else
									echo '<li> <a href="register"> <i class="fas fa-user"></i> Register</i></a></li>';
							?>
							<?php
								if (!($_SESSION['online']))
									echo '<li><a href="login"><i class="fas fa-sign-in-alt"></i>Login</a></li>';
								else
									echo '<li><a href="logout"><i class="fas fa-sign-in-alt"></i>Logout</a></li>';
							?>
          </ul>

        </div>
      </nav>
    </header>
    <main role="main">
    <!-- side bar setting -->
    <div>
      <ul class="seting">
        <li><a>Modifier le Profil</a></li>
        <li><a>Changer de mot de passe</a></li>
        <li><a>Gérer les contacts</a></li>
        <li><a>Confidentialité du compte</a></li>
        <li><a>Email ou texto</a></li>
      </ul>
    </div>
    <!--Page seting-->
    <article class="home">
      <div class="D1">
        <div class="d1">Nisi Julien</div>
      </div>
    <form class="Fseting" method="post" action=''>

      <div class="FD1">
        <aside class="FDA"><label>Nom</label> </aside>
        <div class="FDD">
          <input class="FDDI" type="text" placeholder="Enter votre nom" name="nom" <?php echo 'value="' . $nom . '"' ;?>>
        </div>
      </div>
      <div class="FD1">
        <aside class="FDA"><label>Prénom</label> </aside>
        <div class="FDD">
          <input class="FDDI" name="prenom" type="text" placeholder="Enter votre prénom"  <?php echo 'value="' . $prenom . '"' ;?>>
        </div>
      </div>
      <div class="FD1">
        <aside class="FDA"><label>Cheveux</label> </aside>
        <div class="FDD">
          <input class="FDDI" name="cheveux" type="text" placeholder="La couleur cheveux"  <?php echo 'value="' . $cheveux . '"' ;?>>
        </div>
      </div>
      <div class="FD1">
        <aside class="FDA"><label>Taille</label> </aside>
        <div class="FDD">
          <input class="FDDI" name="taille" type="text" placeholder="Enter votre taille"  <?php echo 'value="' . $taille . '"' ;?>>
        </div>
      </div>
      <div class="FD1">
        <aside class="FDA"><label>Poids</label> </aside>
        <div class="FDD">
          <input class="FDDI" name="poids" type="text" placeholder="Enter votre poids"  <?php echo 'value="' . $poids . '"' ;?>>
      </div>
      <div class="FD1">
        <aside class="FDA"><label>Yeux</label> </aside>
        <div class="FDD">
          <input class="FDDI" name="yeux" type="text" placeholder="La couleur vos yeux"  <?php echo 'value="' . $yeux . '"' ;?>>
      </div>
    	<div class="FD1">
        <aside class="FDA"><label>Bio</label> </aside>
        <div class="FDD">
        <textarea name="test" class="FDDI" aria-required="false"><?php echo $bio ?></textarea>
      </div>
				<input class="FI" type="submit"  value="Envoyer" />
      </div>
			<hr>
    </form>
		<?php echo form_open_multipart('index.php/Forum/edit');?>
			<input type="file" name="userfile"/>
			<input class="test" type="submit" name="submit" value="upload image"/>
		</form>
		</form>
		<?php echo form_open_multipart('index.php/Forum/edit');?>
			<input type="file" name="photofile"/>
			<input class="test" type="submit" name="submit" value="upload image"/>
		</form>

    </article>

    <hr>
    <!--footer-->
    <footer class="container">
        <p>&copy; 2018 Dreampass, Tous droits réservés </a></p>
    </footer>

    </main>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  </body>
</html>
