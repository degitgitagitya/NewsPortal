<?php
/**
 * Created by PhpStorm.
 * User: De Gitgit Agitya
 * Date: 5/10/2018
 * Time: 11:14 AM
 */
?>

<html lang="en">
	  <head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			<link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.css">
			<title>My Sport</title>
	  </head>
  <body>

	  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		  <div class="container">
			  <a class="navbar-brand" href="<?php echo base_url() ?>index.php">MY SPORT</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="collapse navbar-collapse" id="navbarColor01">
				  <ul class="navbar-nav mr-auto">

					  <li class="nav-item active">
						  <a class="nav-link" href="<?php echo base_url() ?>index.php" style="text-transform: uppercase;">HOME<span class="sr-only">(current)</span></a>
					  </li>

					  <?php

					  	foreach ($kategori as $key) {


							?>

					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url() ?>index.php/search/<?php
						$words = str_word_count($key->namaKategori, 2);
						$pos = array_keys($words);
						$text = substr($key->namaKategori, 0, 4);
						$text = strtolower($text);
						echo $text;
						?>" style="text-transform: uppercase;"><?php echo $key->namaKategori;?></a>
					</li>

							<?php

						}

					  ?>

				  </ul>
				  <form class="form-inline my-2 my-lg-0" action="<?php echo base_url() ?>index.php/search/cari/" method="get">
					  <input class="form-control mr-sm-2" style="border: 0px; border-radius: 18px;" type="text" placeholder="Cari Berita Disini" name="cari">
					  <button class="btn btn-info my-2 my-sm-0" style="border: 0px; border-radius: 18px;" type="submit">CARI</button>

					  <?php

					  if (isset($_SESSION['status']))
					  {
					  	?>
						  <a href="<?php echo base_url() ?>index.php/login/logout" class="btn btn-success my-2 my-sm-0 ml-3" style="color: white; border: 0px; border-radius: 18px;">KELUAR</a>
					  <?php
					  }
					  else
					  {
					  ?>
					  <a href="<?php echo base_url() ?>index.php/login" class="btn btn-success my-2 my-sm-0 ml-3" style="color: white; border: 0px; border-radius: 18px;">MASUK</a>
					  <?php
					  }
					  ?>
				  </form>
			  </div>
		  </div>
	  </nav>

  	<div class="container">

