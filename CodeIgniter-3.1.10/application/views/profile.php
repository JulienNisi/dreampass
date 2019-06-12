<!doctype html>
<html lang="en">
  <head>
    <?php  $this->load->view('head'); ?>
  </head>
  <body>

    <header>
      <?php  $this->load->view('header.php'); ?>
    </header>

    <main role="main">
      <?php  $this->load->view('bann.php'); ?>
      <hr class="featurette-divider">
      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4">
            <form class="Fseting" method="post" action=''>
              <?php 
                
              ?>
              <button type="submit" value="LIKE" name="BFAV"> <img src="https://img.icons8.com/ios-glyphs/30/000000/hearts.png"> </button>
            </form>
            <h2>
                <?php echo $pseudo; ?>
						</h2>
            <img class="featurette-image img-fluid mx-auto"  <?php echo 'src="' . $photo . '"' ;?> alt="Generic placeholder image">
            <p> </p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-6">
            <li class="caract">
                <ul>
										<b><a>Nom : <?php echo $nom;?></a></b>
                </ul>
                <ul>
										<b><a>Prenom : <?php echo $prenom;?></a></b>
                </ul>
                <ul>
  									<b><a>Cheveux : <?php echo $cheveux;?></a></b>
                </ul>
                <ul>
										<b><a>Taille : <?php echo $taille . ' cm';?></a></b>
                </ul>
                <ul>
										<b><a>Poids : <?php echo $poids . ' kg';?></a></b>
                </ul>
                <ul>
                  	<b><a>Eyes :  <?php echo $yeux;?></a></b>
                </ul>
                <ul>
                  	<b><a>Tour de poitrine : </a></b>
                </ul>
                <ul>
                  	<b><a>Tour de taille : </a></b>
                </ul>
                <ul>
                  	<b><a>Tour de hanche : </a></b>
                </ul>
                <ul>
                  	<b><a>Tatouage(s) : </a></b>
                </ul>
                <ul>
                  	<b><a>Piercing : </a></b>
                </ul>
            </li>
						<hr/>
            <font size="+2" ><?php echo $bio;?></font>	
            <p></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div id="galerie-menu">
          <!-- Notre navigation -->
          <nav class>
						<?php
							foreach($test as $_SESSION['name'] => $value) {
								echo '<a href="#" tabindex="0" title="Moi"> <img src="' . $value->url_photo .'" alt="test"/></a>';
							}
							$_SESSION['name'] = $bug;
						?>
          </nav>
        </div>







        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading"> </h2>
          </div>
        </div>



      <!-- FOOTER -->
      <?php  $this->load->view('footer'); ?>
    </main>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
      <?php  $this->load->view('js.php'); ?>
  </body>
</html>
