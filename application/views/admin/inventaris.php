<br><br><br><br>

<div id="maincontent" class="ui main container">
	<h1 class="ui header">Inventaris Alat</h1>
	<?= $this->session->flashdata('notice'); ?>
	<div class="ui category search">
		<div class="ui icon input">
			<input class="prompt" type="text" placeholder="Cari data" id="searchbox">
			<i class="search icon"></i>
		</div>
		<button id="Bexcel" class="tiny ui orange basic button">EXCEL</button>
		<button id="Bprint" class="tiny ui orange basic button">PRINT</button>
		<a href="<?= base_url('admin/main_tambah_barang') ?>" class="tiny ui green button">TAMBAHKAN BARANG +</a>
		<button data-toggle="modal" onclick="edit_b_modal()" class="tiny ui yellow button">EDIT BARANG +</button>
		<button data-toggle="modal" onclick="hapus_b_modal()" class=" tiny ui red button">HAPUS BARANG +</button>
		<div id="tableActions"></div>
	</div>

	<br>
	<div class="ui stackable grid">
		<div class="column">
			<div id="regInnkommende" class="ui stacked segment">
				<a class="ui ribbon orange label">Inventaris Alat</a><br><br>
				<div class="ui">
					<table class="ui celled table" id="tableInventaris" style="width: 100%">
						<thead>
							<tr>
								<th class="single line">Id Barang</th>
								<th>Nama Model</th>
								<th>Tahun Perolehan</th>
								<th>Lantai</th>
								<th>Ruang</th>
								<th>Kondisi</th>
								<th>terakhir sunting</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($ruang as $row) : ?>
								<tr>
									<td class="center aligned">
										<?= $row['id_barang'] ?>
									</td>
									<td class="single line">
										<?= $row['nama_model'] ?>
									</td>
									<td>
										<?= $row['tahun_perolehan'] ?>
									</td>
									<td>
										Lantai <?= $row['lantai'] ?>
									</td>
									<td>
										Ruang <?= $row['nomor_ruang'] ?>
									</td>
									<td class="<?= $row['warna_kondisi'] ?>"><i class="<?= $row['icon_kondisi'] ?> icon"></i> <?= $row['nama_kondisi'] ?></td>
									<td>
										<?= $row['terakhir_update'] ?>
									</td>
									<td>
										<div class="ui mini buttons">
											<a href="<?= base_url('admin/edit_inventaris/') . $row['id_barang'] ?>" class="ui button">Edit</a>
											<div class="or"></div>
											<button data-toggle="modal" onclick="confirm_modal('<?= base_url('admin/hapus_alat_inventaris/' . $row['id_barang']); ?>','<?= $row['nama_model'] . ' dengan ID ' . $row['id_barang'] ?>');" class="ui negative button">Hapus</button>
										</div>
									</td>

								</tr>
							<?php endforeach ?>
						</tbody>

					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	window.onload = function(e) {

		var table = $('#tableInventaris').DataTable({
			dom: "<'ui stackable grid'" +
				"<'row'" +
				"<'eight wide column'l>" +
				"<'right aligned eight wide column'f>" +
				">" +
				"<'row dt-table'" +
				"<'sixteen wide column'tr>" +
				">" +
				"<'row'" +
				"<'seven wide column'i>" +
				"<'right aligned nine wide column'p>" +
				">" +
				">",
			autoWidth: true,
			select: true,
			responsive: true,
			processing: true,
			buttons: [{
					extend: 'excel',
					exportOptions: {
						columns: [0, 1, 2, 3, 4, 5, 6]
					}
				},
				{
					extend: 'print',
					pageSize: 'LEGAL',
					title: '',
					messageTop: "<h1><center><font size='5'>UIN SUNAN KALIJAGA</font></center></h1><center><b><font size = '4'>SIM Lab Inventaris</font></b></center><br><center><br>",
					messageBottom: "<br><br><br><br><table align='center' border='0' cellpadding='1' style='width: 700px;'>><tbody><tr><td colspan='3'><div align='center'><span>Mengetahui,</span></div><br><br></td></tr><tr></tr><td><div align='center'><span>PJ Laboratorium,</span></div><div align='center'><br><br><br></div><div align='center'><span>_____________________</span></div></td><td></td><td valign='top'><div align='center'><span>Kepala Laboratorium, </span></div><div align='center'><br><br><br></div><div align='center'><span>_____________________</span></div></td></tr></tbody></table>",
					customize: function(win) {
						$(win.document.body)
							.css('font-size', '10pt')
							.prepend(
								'<img src="<?= base_url('asset/img/logo/logo_UIN.png') ?>" style="position:absolute; display: block; margin-left: auto; margin-right: auto; opacity: 0.5; max-width: 50px;" />'
							);

						$(win.document.body).find('table')
							.addClass('compact')
							.css('font-size', 'inherit');

					},
					exportOptions: {
						columns: [0, 1, 2, 3, 4, 5, 6]
					}
				},
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
		$(".pagination").removeClass('stackable').addClass('unstackable');
		// $("#excel").click(function() {
		// 	table.on( 'buttons-action', function ( e, buttonApi, dataTable, node, config ) {
		// 		console.log( 'Button '+buttonApi.text()+' was activated' );
		// 	} );



	};
</script>