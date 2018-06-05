<?php
/**
 * Created by PhpStorm.
 * User: De Gitgit Agitya
 * Date: 5/12/2018
 * Time: 10:01 PM
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

<br>
<br>
<br>
<br>
<br>

	<div class="container">
		<div class="row justify-content-center mt-5">
			<form action="<?php echo base_url('index.php/login/action'); ?>" method="post"class="col-10 col-md-6 col-lg-4 text-center bg-primary p-5">
				<h3><strong style="color: white;">Login Disini.</strong></h3>
				<input type="text" name="username" placeholder="Username" class="p-2 my-1" style="border-radius: 20px; border: 1px;" autofocus>
				<br>
				<input type="password" name="password" placeholder="Password" class="p-2 my-1" style="border-radius: 20px; border: 1px;">
				<br>
				<?php
				if (isset($pesan))
				{
					?>
				<?php
					echo $pesan;
					?>
					<br>
				<?php
				}
				?>
				<input type="submit" class="btn btn-success px-4 my-1" value="Login" style="border-radius: 20px; border: 1px;">
				<br>
				<a href="<?php echo base_url('index.php/login/daftar'); ?>" style="color: white;">Belum Daftar? Daftar Disini.</a>
				<br>
				<a href="<?php echo base_url('index.php'); ?>" style="color: white;">Baca Sebagai Guest</a>
			</form>
		</div>
	</div>


</body>

