<div class="card">
	<div class="card-body">
		<!-- Vertical Form -->
		<form class="row g-3 p-3 mt-5" method="POST">
		<input type="hidden" name="idartikel" value="<?= $artikel['idartikel']; ?>">
		<input type="hidden" name="idartikel" value="<?= $artikel['iduser']; ?>">
			<div class="col-12">
				<label for="inputNama" class="form-label">judul artikel</label>
				<input type="text" name="judul" id="judul" class="form-control" placeholder="judul artikel" value="<?= $artikel['judul']; ?>">
				<small class="form-text text-danger"><?= form_error('judul'); ?></small>
			</div>
			<div class="col-12">
				<label for="inputKategori" class="form-label">isi artikel</label>
				<input type="text" name="isiartikel" id="isiartikel" class="form-control" placeholder="isi artikel" value="<?= $artikel['isiartikel']; ?>">
				<small class="form-text text-danger"><?= form_error('isiartikel'); ?></small>
			</div>
			<div class="col-12">
				<label for="inputKategori" class="form-label">kategori</label>
				<input type="text" name="kategori" id="kategori" class="form-control" placeholder="kategori artikel" value="<?= $artikel['kategori']; ?>">
				<small class="form-text text-danger"><?= form_error('kategori'); ?></small>
			</div>
			<div class="text-center">
				<button type="submit" name="update" class="btn btn-primary">Submit</button>
				<button type="reset" class="btn btn-secondary">Reset</button>
			</div>
		</form>
		<!-- Vertical Form -->

	</div>
</div>
