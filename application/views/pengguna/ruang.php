<br><br><br><br>
<div id="maincontent" class="ui main container">
	<button class="ui labeled green icon button" onclick="window.history.back();">
		<i class="left chevron icon"></i>
		Kembali
	</button>
	<h1 class="ui header">Ruang <?= $nomor_ruang ?></h1>
	<div class="ui category search">
		<div class="ui icon input">
			<input class="prompt" type="text" placeholder="Cari data" id="searchbox">
			<i class="search icon"></i>
		</div>
		<button id="Bexcel" class="tiny ui orange basic button">EXCEL</button>
		<button id="Bprint" class="tiny ui orange basic button">PRINT</button>
		<div id="tableActions"></div>
	</div>
	<br>
	<div class="ui stackable grid">
		<div class="wide column">
			<div id="regInnkommende" class="ui stacked segment">
				<a class="ui ribbon orange label">Ruangan</a>
				<div class="ui">
					<table id="tableRuang" class="ui celled padded table" style="width: 100% !important;">
						<thead>
							<tr>
								<th class="single line">Id Barang</th>
								<th>Nama Model</th>
								<th>Tahun Perolehan</th>
								<th>Lokasi</th>
								<th>Kondisi</th>
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
										Lantai <?= $row['lantai'] ?>, Ruang <?= $row['nomor_ruang'] ?>, <?= $row['nama_ruang'] ?>
									</td>

									<?php
									$kondisi = $row['nama_kondisi'];
									if ($kondisi == 'baik') { ?>
										<td class="positive"><i class="icon checkmark"></i> <?= $row['nama_kondisi'] ?></td>
									<?php } else { ?>
										<td class="negative"><i class="attention icon"></i> <?= $row['nama_kondisi'] ?></td>
									<?php } ?>


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

		var table = $('#tableRuang').DataTable({
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
			select: true,
			responsive: true,
			processing: true,
			buttons: [
				'excel',
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

		// $("#excel").click(function() {
		// 	table.on( 'buttons-action', function ( e, buttonApi, dataTable, node, config ) {
		// 		console.log( 'Button '+buttonApi.text()+' was activated' );
		// 	} );



	};
</script>