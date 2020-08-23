<!-- modal logout -->
<div class="ui tiny modal" id="logout">
	<i class="close icon"></i>
	<div class="header">
		Log out
	</div>
	<div class="content">
		<p>anda yakin ingin keluar?</p>
	</div>
	<div class="actions">
		<div class="ui button cancel">Batal</div>
		<a href="<?= base_url('auth/logout') ?>" class="ui blue button">Keluar</a>
	</div>
</div>

<!-- modal edit banyak barang -->
<div class="ui tiny modal" id="E_B_alat">
	<i class="close icon"></i>
	<div class="header">
		Tentutakan ID Barang
	</div>
	<div class="content">
		<label>Masukkan ID barang dengan ketentuan yang berlaku</label>
		<form id="edit_B" action="<?= base_url('admin/edit_banyak_barang') ?>" method="post">
			<div class="ui left icon input" style="width:400px;">
				<input name="id_barang" required type="text" placeholder="contoh 1000-1020">
				<i class=" cube icon"></i>
			</div>
		</form>
	</div>
	<div class="actions">
		<button class="ui default button cancel" type="button">Batal</button>
		<button form="edit_B" type="submit" class="ui blue button">Proses</button>
	</div>
</div>

<!-- modal hapus banyak barang -->
<div class="ui tiny modal" id="H_B_alat">
	<i class="close icon"></i>
	<div class="header">
		Tentutakan ID Barang
	</div>
	<div class="content">
		<label>Masukkan ID barang dengan ketentuan yang berlaku</label>
		<form id="hapus_B" action="<?= base_url('admin/hapus_banyak_barang') ?>" method="post">
			<div class="ui left icon input error" style="width:400px;">
				<input name="id_barang" required type="text" placeholder="contoh 1000-1020">
				<i class=" cube icon"></i>
			</div>
		</form>
	</div>
	<div class="actions">
		<button class="ui default button cancel" type="button">Batal</button>
		<button form="hapus_B" type="submit" class="ui blue button">Proses</button>
	</div>
</div>

<!-- modal hapus data inventaris -->
<div class="ui tiny modal" id="H_alat">
	<i class="close icon"></i>
	<div class="header">
		Hapus Alat Inventaris
	</div>
	<div class="content">
		<p>anda yakin menghapus alat <span class="grt"></span>?</p>
	</div>
	<div class="actions">
		<a id="hapus_alat" class="ui red button">Hapus</a>
		<div class="ui button cancel">Batal</div>
	</div>
</div>

<!-- modal hapus data kondisi -->
<div class="ui tiny modal" id="H_Kondisi">
	<i class="close icon"></i>
	<div class="header">
		Hapus Kondisi
	</div>
	<div class="content">
		<p>anda yakin menghapus kondisi "<span class="grt"></span>"?</p>
	</div>
	<div class="actions">
		<a id="hapus_kondisi" class="ui red button">Hapus</a>
		<div class="ui button cancel">Batal</div>
	</div>
</div>

<!-- modal hapus data lantai -->
<div class="ui tiny modal" id="H_Lantai">
	<i class="close icon"></i>
	<div class="header">
		Hapus Lantai
	</div>
	<div class="content">
		<p>anda yakin menghapus "<span class="grt"></span>"?</p>
	</div>
	<div class="actions">
		<a id="hapus_lantai" class="ui red button">Hapus</a>
		<div class="ui button cancel">Batal</div>
	</div>
</div>

<!-- modal hapus data ruang -->
<div class="ui tiny modal" id="H_Ruang">
	<i class="close icon"></i>
	<div class="header">
		Hapus Ruang
	</div>
	<div class="content">
		<p>anda yakin menghapus "<span class="grt"></span>"?</p>
	</div>
	<div class="actions">
		<a id="hapus_ruang" class="ui red button">Hapus</a>
		<div class="ui button cancel">Batal</div>
	</div>
</div>

<!-- modal hapus data pengguna -->
<div class="ui tiny modal" id="H_Pengguna">
	<i class="close icon"></i>
	<div class="header">
		Hapus Pengguna
	</div>
	<div class="content">
		<p>anda yakin menghapus pengguna atas nama "<span class="grt"></span>"?</p>
	</div>
	<div class="actions">
		<a id="hapus_pengguna" class="ui red button">Hapus</a>
		<div class="ui button cancel">Batal</div>
	</div>
</div>

<!-- modal hapus edit pengguna -->
<div class="ui tiny modal" id="E_Pengguna">
	<i class="close icon"></i>
	<div class="header">
		Edit Pengguna
	</div>
	<div class="content">
		<div id="regInnkommende" class="ui stacked segment">
			<a class="ui green ribbon label">Edit Pengguna</a>
			<div class="ui form">
				<form id="edit_pengguna" class="ui fluid form" action="<?= base_url('admin/edit_pengguna') ?>" method="POST">
					<div class="three fields">
						<div class="field">
							<label>Nama Lengkap</label>
							<div class="ui input">
								<input class="grt" type="text" id="1nama" name="nama" placeholder="Nama Lengkap" value="<?= set_value('nama') ?>">
								<input type="hidden" id="1id" name="id" value="<?= set_value('id') ?>">
							</div>
							<?= form_error('nama', '<div class="ui pointing red basic label">', '</div>'); ?>
						</div>
						<div class="field">
							<label>Nama Pengguna</label>
							<div class="ui disabled input">
								<input type="text" id="1username" name="username" placeholder="username" value="<?= set_value('username') ?>">
							</div>
							<?= form_error('username', '<div class="ui pointing red basic label">', '</div>'); ?>
						</div>
						<div class="field">
							<label>Tipe Pengguna</label>
							<div class="ui input">
								<select id="1tipe" name="tipe" class="ui dropdown" required>
									<option value="">Tipe</option>
									<option value="1">Admin</option>
									<option value="2">Operator</option>
								</select>
							</div>
							<?= form_error('tipe', '<div class="ui pointing red basic label">', '</div>'); ?>
						</div>
					</div>
					<div class="two fields">
						<div class="field">
							<label>Kata Sandi</label>
							<div class="ui input">
								<input type="password" id="1katasandi" name="katasandi1" placeholder="Kata Sandi">
							</div>
							<?= form_error('katasandi1', '<div class="ui pointing red basic label">', '</div>'); ?>
						</div>
						<div class="field">
							<label>Ulang Kata Sandi</label>
							<div class="ui input">
								<input type="password" class="form-control form-control-user" id="1ulangsandi" name="katasandi2" placeholder="Ulang Sandi">
							</div>
						</div>
					</div>
					<!-- <button class="ui green small button" type="submit">Tambah</button> -->
				</form>
			</div>
		</div>
	</div>
	<div class="actions">
		<div class="ui button cancel">Batal</div>
		<button form="edit_pengguna" class="ui blue button">Proses</button>
	</div>
</div>