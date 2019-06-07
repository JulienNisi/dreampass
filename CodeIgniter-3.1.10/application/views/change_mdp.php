<!doctype html>
<html lang="en">
  <head>
    <?php  $this->load->view('head'); ?>
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
        <li><a href="change_mdp" >Changer de mot de passe</a></li>
        <li><a>Gérer les contacts</a></li>
        <li><a>Confidentialité du compte</a></li>
        <li><a>Email ou texto</a></li>
      </ul>
    </div>
    <!--Page seting-->
    <article class="home">
      <div class="D1">
        <div> <img src="../../img/1.jpg" class="DBI"> </div> 
        <div class="d1">Nisi Julien</div>
      </div>
    <form class="Fseting" method="post" action=''>

      <div class="FD1">
        <aside class="FDA"><label>Ancien mot de passe</label> </aside>
        <div class="FDD">
          <input class="FDDI" type="password" placeholder="Ancien mot de passe" name="nom" value="">
        </div>
      </div>
      <div class="FD1">
        <aside class="FDA"><label>Nouveau mot de passe</label> </aside>
        <div class="FDD">
          <input class="FDDI" type="password" placeholder="Nouveau mot de passe" name="nom" value="">
        </div>
      </div>
      <div class="FD1">
        <aside class="FDA"><label>Confirmer le mot de passe</label> </aside>
        <div class="FDD">
          <input class="FDDI" type="password" placeholder="Confirmer" name="nom" value="">
        </div>
      </div>
      <hr>
      <input type="submit" value="Envoyer"  class="inputmdp"/>
    </form>                           
    </article>

    <hr>
    <!--footer-->
    <?php  $this->load->view('footer'); ?>

    </main>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  </body>
</html>
