<div class="ui fixed menu navbar">
	<div class="ui container">
		<a href="<?= base_url('admin') ?>" class="header item">
			<i class="bar chart icon"></i>
			SIMI Lab UIN SUKA
		</a>
		<a class="item" href="<?= base_url('admin') ?>" <?= ($title == 'Admin Barber Bois') ? ' class="active item"' : ''; ?>>Beranda</a>
		<a class="item" href=" <?= base_url('admin/inventaris') ?>" <?= ($title == 'Admin Penjualan') ? ' class="active item"' : ''; ?>>Inventaris</a>
		<a class="item" href="<?= base_url('admin/ruangan') ?>" <?= ($title == 'Admin Setting') ? ' class="active item"' : ''; ?>>Ruang</a>
		<a class="item" href="<?= base_url('admin/pengaturan') ?>" <?= ($title == 'Admin Setting') ? ' class="active item"' : ''; ?>>Setting</a>
		<div class="right menu">
			<div class="borderless item">
				<div id="userbutton" class="ui right labeled icon teal button simple dropdown"><i class="caret down icon"></i>
					<?= $nama ?>
					<div class="menu">
						<a class="item" data-toggle="modal" onclick="logout_modal()">Keluar</a>
					</div>
				</div>


			</div>
		</div>

	</div>

</div>
<div class="ui fixed menu navbar-mobile">
	<div class="ui container">
		<a id="navbar-mobile" class="header item">
			<i class="th icon"></i>
		</a>
		<a href="<?= base_url('admin') ?>" class="item">
			<i class="bar chart icon"></i>
			SIMI Lab UIN SUKA
		</a>
	</div>
	<div class="right menu">
		<div class="borderless item">
			<div id="userbutton" class="ui right labeled icon teal button simple dropdown"><i class="caret down icon"></i>
				<?= $nama ?>
				<div class="menu">
					<a class="item" data-toggle="modal" onclick="logout_modal()">Keluar</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="ui left demo vertical inverted sidebar labeled icon menu">
	<a href="<?= base_url('admin') ?>" class=" item">
		<i class="home icon"></i>
		Beranda
	</a>
	<a href="<?= base_url('admin/inventaris') ?>" class=" item">
		<i class="briefcase layout icon"></i>
		Inventaris
	</a>
	<a href="<?= base_url('admin/ruangan') ?>" class=" item">
		<i class="bed icon"></i>
		Ruang
	</a>
	<a href="<?= base_url('admin/pengaturan') ?>" class=" item">
		<i class="wrench icon"></i>
		Setting
	</a>
	<a class=" item" data-toggle="modal" onclick="logout_modal()">
		<i class="logout icon"></i>
		Logout
	</a>
</div>