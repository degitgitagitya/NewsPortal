<?php
/**
 * Created by PhpStorm.
 * User: De Gitgit Agitya
 * Date: 5/10/2018
 * Time: 11:53 AM
 */
?>




<div class="row p-1">

	<?php
		foreach ($news as $key)
		{

	?>

	<div class="col-8">
		<div class="row">
			<div class="col-12 text-center">
				<hr>
				<h1>
					<?php
						echo $key->judul;
					?>
				</h1>
				<hr>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<img src="<?php echo base_url() ?>assets/<?php echo $key->namaImage;?>" class="img-fluid" alt="">
				<hr>
			</div>
		</div>
		<div class="row">
			<div class="col-12" style="text-align: justify;text-justify: inter-word;">
				<?php
					echo $key->isi;
				?>
				<hr>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<a href="<?php echo base_url() ?>index.php/search/<?php
				$words = str_word_count($key->namaKategori, 2);
				$pos = array_keys($words);
				$text = substr($key->namaKategori, 0, 4);
				$text = strtolower($text);
				echo $text;
				?>">
					<?php
						echo $key->namaKategori;
					?>
				</a>
				 |
				<?php
					echo $key->tanggal;
				?>
				<hr>
			</div>
		</div>
	</div>

	<?php
		}
	?>

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
