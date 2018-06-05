<?php
/**
 * Created by PhpStorm.
 * User: De Gitgit Agitya
 * Date: 5/10/2018
 * Time: 11:53 AM
 */
?>


	<div class="row p-1">
		<div class="col-8">

			<hr>

			<div id="demo" class="carousel slide" data-ride="carousel">

				<!-- The slideshow -->
				<div class="carousel-inner">

					<?php

					$index = 0;

					foreach ($news as $key)
					{



						if ($key->trending == "yes")
						{


					?>

							<?php

								if ($index == 0)
								{
									?>

									<div class="carousel-item active">

									<?php


								}
								else
								{

									?>

										<div class="carousel-item">
									<?php

								}

							?>

							<img src="<?php echo base_url() ?>assets/<?php echo $key->namaImage; ?>" class="img-fluid" style="filter: blur(2px);">
							<div class="carousel-caption">
								<a href="<?php echo base_url() ?>index.php/berita/getByID/<?php echo $key->id;?>" style="color: white;"><h3><strong><?php echo $key->judul; ?></strong></h3></a>
								<p><?php

									$string = strip_tags($key->isi);
									$stringCut = substr($string, 0, 120);
									$endPoint = strrpos($stringCut, ' ');
									$string = $endPoint? substr($stringCut, 0, $endPoint):substr($stringCut, 0);
									$string .= '... ';
									echo $string;

								?>
									<a href="<?php echo base_url() ?>index.php/berita/getByID/<?php echo $key->id;?>">Lanjutkan Membaca</a>
								</p>
							</div>
						</div>


					<?php


							$index++;
						}
					}

					?>


				</div>

				<!-- Left and right controls -->
				<a class="carousel-control-prev" href="#demo" data-slide="prev">
					<span class="carousel-control-prev-icon"></span>
				</a>
				<a class="carousel-control-next" href="#demo" data-slide="next">
					<span class="carousel-control-next-icon"></span>
				</a>

			</div>

			<hr>

			<h1>Berita Terbaru</h1>

			<?php

				foreach ($news as $key)
				{


			?>

			<hr>

			<div class="row">
				<div class="col-4">
					<img src="<?php echo base_url() ?>assets/<?php echo $key->namaImage;?>" class="img-fluid" alt="">
				</div>
				<div class="col-8">
					<div class="row" style="font-size: 10px;">
						<a href="<?php echo base_url() ?>index.php/search/<?php
						$words = str_word_count($key->namaKategori, 2);
						$pos = array_keys($words);
						$text = substr($key->namaKategori, 0, 4);
						$text = strtolower($text);
						echo $text;
						?>"><?php echo $key->namaKategori;?></a> | <?php echo $key->tanggal ?>
					</div>
					<div class="row">
						<h3><a href="<?php echo base_url() ?>index.php/berita/getByID/<?php echo $key->id;?>" style="color: black;"><?php echo $key->judul;?></a></h3>
					</div>
					<div class="row">
						<?php
							$string = strip_tags($key->isi);
							$stringCut = substr($string, 0, 120);
							$endPoint = strrpos($stringCut, ' ');
							$string = $endPoint? substr($stringCut, 0, $endPoint):substr($stringCut, 0);
							$string .= '... ';
							echo $string;
						?>
						<a href="<?php echo base_url() ?>index.php/berita/getByID/<?php echo $key->id;?>">Lanjutkan Membaca</a>
					</div>
				</div>
			</div>

			<?php


				}


			?>

			<hr>




		</div>
		<div class="col-4">

			<?php

				if (!isset($_SESSION['status']))
				{
					?>
					<div class="row">
						<div class="col-12 text-center">
							<hr>
								<h5>
									Masuk / Daftar Untuk Mendapatkan Feed Yang Sesuai Untuk Kamu
								</h5>
							<br>
								<h4>
									<a href="<?php echo base_url() ?>index.php/login">Disini</a>
								</h4>
							<hr>
						</div>
					</div>
					<?php
				}
				else
				{

					?>
					<hr>
					<h1>Berita Untuk Kamu</h1>
					<hr>
					<h2><?php	echo $_SESSION['fav'];	?></h2>
					<hr>


					<?php

						foreach ($second as $key)
						{


					?>


					<div class="row">
						<div class="col-4">
							<img src="<?php echo base_url() ?>assets/<?php echo $key->namaImage;?>" class="img-fluid" alt="">
						</div>
						<div class="col-8">
							<div class="row">
								<h5><a href="<?php echo base_url() ?>index.php/berita/getByID/<?php echo $key->id;?>" style="color: black;"><?php echo $key->judul;?></a></h5>
							</div>
						</div>
					</div>
					<hr>
					<?php

						}
				}
			?>

		</div>
	</div>

