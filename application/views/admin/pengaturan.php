<br><br><br><br>

<div id="maincontent" class="ui main container">
	<h1 class="ui header"><?= $title; ?></h1>
	<?= $this->session->flashdata('notice'); ?>
	<div class="ui stackable grid">
		<div class="nine wide column">
			<div id="regInnkommende" class="ui stacked segment">
				<a class="ui red ribbon label">Log Pengguna</a>
				<button id="Bexcel" class="tiny ui orange basic button">EXCEL</button>
				<button id="Bprint" class="tiny ui orange basic button">PRINT</button>
				<div class="ui form">
					<div class="">
						<div class="field">
							<table class="ui unstackable called table" id="tableLog" style="width: 100%">
								<thead>
									<tr>
										<th>No.</th>
										<th>Nama Pengguna</th>
										<th>Level Pengguna</th>
										<th>Log Terakhir</th>
									</tr>
								</thead>
								<tbody>
									<?php $i = 1;
									foreach ($log_pengguna as $row) : ?>
										<tr>
											<td><?= $i++ ?></td>
											<td><?= $row['nama'] ?></td>
											<td><?= $row['role_id'] ?></td>
											<td><?= $row['log_pengguna'] ?></td>
										</tr>
									<?php endforeach ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="ui stacked segment">
				<a class="ui orange ribbon label">Tambah Kondisi</a>
				<div class="ui form">
					<form action="<?= base_url('admin/tambah_kondisi') ?>" method="POST">
						<div class="two fields">
							<div class="field">
								<label>Nama Kondisi</label>
								<div class="ui input">
									<input name="nama_kondisi" value="" type="text" placeholder="Nama Kondisi" required>
								</div>
							</div>

							<div class="field">
								<label>Warna Kondisi</label>
								<select name="warna_kondisi" class="ui dropdown" required>
									<option value="">Warna</option>
									<option value='{"icon": "checkmark", "warna": "positive"}'>Hijau</option>
									<option value='{"icon": "attention", "warna": "warning"}'>Kuning</option>
									<option value='{"icon": "attention", "warna": "negative"}'>Merah</option>
								</select>
							</div>
						</div>
						<button class="ui orange small button" type="submit">Tambah</button>
					</form>
				</div>
			</div>
			<div class="ui stacked segment">
				<a class="ui yellow ribbon label">Tambah Lantai</a>
				<div class="ui form">
					<form action="<?= base_url('admin/tambah_lantai') ?>" method="POST">
						<div class="fields">
							<div class="field">
								<label>Nama Lantai</label>
								<div class="ui input">
									<input name="nama_lantai" value="" type="text" placeholder="Nama Lantai" required>
								</div>
							</div>
						</div>
						<button class="ui yellow small button" type="submit">Tambah</button>
					</form>
				</div>
			</div>
			<div id="divini" class="ui stacked segment">
				<a class="ui green ribbon label">Tambah Pengguna</a>
				<div class="ui form">
					<form class="ui fluid form" action="<?= base_url('admin/registrasi') ?>" method="POST">
						<div class="three fields">
							<div class="field">
								<label>Nama Lengkap</label>
								<div class="ui input">
									<input type="text" id="nama" name="nama" placeholder="Nama Lengkap" value="<?= set_value('nama') ?>">
								</div>
								<?= form_error('nama', '<div class="ui pointing red basic label">', '</div>'); ?>
							</div>
							<div class="field">
								<label>Nama Pengguna</label>
								<div class="ui input">
									<input type="text" id="username" name="username" placeholder="username" value="<?= set_value('username') ?>">
								</div>
								<?= form_error('username', '<div class="ui pointing red basic label">', '</div>'); ?>
							</div>
							<div class="field">
								<label>Tipe Pengguna</label>
								<div class="ui input">
									<select id="tipe" name="tipe" class="ui dropdown" required>
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
									<input type="password" id="katasandi" name="katasandi1" placeholder="Kata Sandi">
								</div>
								<?= form_error('katasandi1', '<div class="ui pointing red basic label">', '</div>'); ?>
							</div>
							<div class="field">
								<label>Ulang Kata Sandi</label>
								<div class="ui input">
									<input type="password" class="form-control form-control-user" id="ulangsandi" name="katasandi2" placeholder="Ulang Sandi">
								</div>
							</div>
						</div>
						<button class="ui green small button" type="submit">Tambah</button>
					</form>
				</div>
			</div>
		</div>
		<div class="seven wide column">
			<table class="ui small very compact unstackable selectable orange table">
				<thead>
					<tr>
						<th colspan="4">
							Data Admin
						</th>
					</tr>
				</thead>

				<tbody>
					<?php foreach ($pengguna1 as $row) : $count = count($pengguna1) ?>
						<tr>
							<td><?= $row['nama'] ?></td>
							<td><?= $row['username'] ?></td>
							<td class="right aligned">
								<a href="#" type="button" onclick="edit_pengguna_modal('<?= base_url('admin/edit_pengguna/' . $row['id']); ?>','<?= $row['nama'] ?>','<?= $row['username'] ?>','<?= $row['id'] ?>');">edit</a>||
								<?php if ($count > 1) : ?>
									<a href="#" type="button" onclick="hapus_pengguna_modal('<?= base_url('admin/hapus_pengguna/' . $row['id']); ?>','<?= $row['nama'] ?>');">||hapus</a>
								<?php endif ?>
							</td>
							<!-- <td class="right aligned"><a href="">hapus</a></td> -->
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
			<table class="ui small very compact unstackable selectable orange table">
				<thead>
					<tr>
						<th colspan="4">
							Data Pengguna
						</th>
					</tr>
				</thead>

				<tbody>
					<?php foreach ($pengguna2 as $row) :  ?>
						<tr>
							<td><?= $row['nama'] ?></td>
							<td><?= $row['username'] ?></td>
							<td class="right aligned">
								<a href="#" type="button" onclick="edit_pengguna_modal('<?= base_url('admin/edit_pengguna/' . $row['id']); ?>','<?= $row['nama'] ?>','<?= $row['username'] ?>','<?= $row['id'] ?>');">edit</a>||
								<a href="#" type="button" onclick="hapus_pengguna_modal('<?= base_url('admin/hapus_pengguna/' . $row['id']); ?>','<?= $row['nama'] ?>');">hapus</a>
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
			<table class="ui small very compact unstackable selectable orange table">
				<thead>
					<tr>
						<th colspan="2">
							Data Kondisi
						</th>
					</tr>
				</thead>

				<tbody>
					<?php foreach ($kondisi as $row) : ?>
						<tr>
							<td><?= $row['nama_kondisi'] ?></td>
							<td class="right aligned">
								<a href="#" type="button" onclick="hapus_kondisi_modal('<?= base_url('admin/hapus_kondisi/' . $row['id_kondisi']); ?>','<?= $row['nama_kondisi'] ?>');">hapus</a>
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
			<table class="ui small very compact unstackable selectable yellow table">
				<thead>
					<tr>
						<th colspan="2">
							Data Lantai
						</th>
					</tr>
				</thead>

				<tbody>
					<?php foreach ($lantai as $row) : ?>
						<tr>
							<td><?= $row['nama_lantai'] ?></td>
							<td class="right aligned"><a href="#" onclick="hapus_lantai_modal('<?= base_url('admin/hapus_lantai/' . $row['id_lantai']); ?>','<?= $row['nama_lantai'] ?>');">hapus</a></td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
	<div class="ui stackable grid">

	</div>
</div>
<script>
	$("#kediv").click(function() {
		console.log('masukkk');
		$(window).scrollTop($('#divini').offset().top)

	});
	window.onload = function(e) {
		var lokasi = $(".lokasi").val();
		getlokasi(lokasi);
	}



	function pilihlokasi(obj) {
		var lokasi = $(obj).val();
		getlokasi(lokasi);
	}

	function getlokasi(id) {
		// console.log(id);
		// return false;
		$.get("<?php echo base_url('Admin/getlokasi') ?>", {
			id: id
		}, function(e) {
			var json = $.parseJSON(e);
			// console.log(json);
			var txthtml = "";
			for (let index = 0; index < json.length; index++) {
				// const element = json[index];
				// console.log(element);
				txthtml += "<option value='" + json[index].nomor_ruang + "'>" + json[index].nomor_ruang + " " + json[index].nama_ruang + "</option>";
			}
			// console.log(txthtml);
			var inject = $("select.ruang");
			inject.empty();
			inject.html(txthtml);
		});
	};

	window.onload = function names() {
		$('#pilih_kondisi')
			.dropdown();
	};

	window.onload = function(e) {

		var table = $('#tableLog').DataTable({
			dom: 'fBrt p',
			autoWidth: true,
			select: true,
			responsive: true,
			processing: true,
			pageLength: 5,

			buttons: [{
					extend: 'excel',
					title: '',
					messageTop: 'Daftar Log Pengguna SIM Lab UIN SUKA.'
				},
				{
					extend: 'print',
					title: '',
					messageTop: "<center><b><font size = '4'>Daftar Log Pengguna SIM Lab UIN SUKA.</font></b></center><br><br>"
				}
			]
		});

		// table.buttons().container().appendTo('#tableActions');
		$("#Bexcel").on("click", function() {
			table.button('.buttons-excel').trigger();
		});
		$("#Bprint").on("click", function() {
			table.button('.buttons-print').trigger();
		});
		$("#searchbox").keyup(function() {
			table.search(this.value).draw();
		});

		// $("#excel").click(function() {
		// 	table.on( 'buttons-action', function ( e, buttonApi, dataTable, node, config ) {
		// 		console.log( 'Button '+buttonApi.text()+' was activated' );
		// 	} );


	};
</script>