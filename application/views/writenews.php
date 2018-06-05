<?php
/**
 * Created by PhpStorm.
 * User: De Gitgit Agitya
 * Date: 5/13/2018
 * Time: 1:48 AM
 */
?>

	<div class="container">
		<?php echo form_open_multipart('upload/do_upload');?>
			<div class="row my-2">
				<div class="col-2">
					Judul Berita
				</div>
				<div class="col-10">
					<input type="text" name="judul">
				</div>
			</div>
			<div class="row my-2">
				<div class="col-2">
					Isi Berita
				</div>
				<div class="col-10">
					<textarea name="isi" id="isi" cols="110" rows="50"></textarea>
				</div>
			</div>
			<div class="row my-2">
				<div class="col-2">
					Kategori Berita
				</div>
				<div class="col-10">
					<select name="kategori" id="kategori">
						<option value="1">Sepak Bola</option>
						<option value="2">Basket</option>
						<option value="3">Golf</option>
						<option value="4">Tenis</option>
						<option value="5">Moto GP</option>
					</select>
				</div>
			</div>
			<div class="row my-2">
				<div class="col-2">
					Trending
				</div>
				<div class="col-10">
					<select name="trending" id="trending">
						<option value="yes">Yes</option>
						<option value="no">No</option>
					</select>
				</div>
			</div>
			<div class="row my-2">
				<div class="col-2">
					Gambar
				</div>
				<div class="col-10">
					<input type="file" name="userfile" size="20" />
				</div>
			</div>


			<div class="row">
				<div class="col-12">
					<hr>
					<div class="row justify-content-center">
						<div class="col-6 text-center">
							<input type="submit" style="color: white;" class="btn btn-success" value="Terbitkan"></input>
						</div>
					</div>
					<hr>
				</div>
			</div>
		</form>
	</div>
</body>
