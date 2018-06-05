<?php
/**
 * Created by PhpStorm.
 * User: De Gitgit Agitya
 * Date: 5/13/2018
 * Time: 1:25 AM
 */
?>

		<table class="table table-hover">
			<thead>
			<tr>
				<th scope="col">No</th>
				<th scope="col">Judul</th>
				<th scope="col">Isi</th>
				<th scope="col">Tanggal</th>
				<th scope="col">Pembuat</th>
				<th scope="col">Kategori</th>
				<th scope="col">Image</th>
				<th scope="col">Trending</th>
				<th scope="col">Option</th>
			</tr>
			</thead>
			<tbody>

			<?php
				$no = 1;

			 	foreach ($news as $key)
				{
			?>

			<tr class="table-active">
				<th scope="row"><?php echo $no++;?></th>
				<td><?php echo $key->judul?></td>
				<td><?php $string = strip_tags($key->isi);
					$stringCut = substr($string, 0, 50);
					$endPoint = strrpos($stringCut, ' ');
					$string = $endPoint? substr($stringCut, 0, $endPoint):substr($stringCut, 0);
					$string .= '... ';
					echo $string;?></td>
				<td><?php echo $key->tanggal?></td>
				<td><?php echo $key->username?></td>
				<td><?php echo $key->namaKategori?></td>
				<td><?php echo $key->namaImage?></td>
				<td><?php echo $key->trending?></td>
				<td>
					<a href="<?php echo base_url() ?>index.php/admin/deleteNews/<?php echo $key->id?>?>" class="btn btn-danger">Hapus</a>
					<a href="<?php echo base_url() ?>index.php/admin/editNews/<?php echo $key->id?>" class="btn btn-info">Edit</a>
				</td>
			</tr>

			<?php
				}
			?>
			</tbody>
		</table>

		<div class="row">
			<div class="col-12">
				<hr>
				<div class="row justify-content-center">
					<div class="col-6 text-center">
						<a href="<?php echo base_url() ?>index.php/admin/addNews" class="btn btn-success" style="color: white;">Tulis Berita</a>
						<a href="<?php echo base_url() ?>index.php/login/logout" class="btn btn-warning" style="color: white;">Keluar</a>
					</div>
				</div>
				<hr>
			</div>
		</div>

</body>
