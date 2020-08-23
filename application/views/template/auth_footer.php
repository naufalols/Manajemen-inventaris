<!-- Bootstrap core JavaScript-->
<!-- <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script> -->
<!-- <script src="<?= base_url('asset/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->

<!-- Core plugin JavaScript-->
<script src="<?= base_url('asset/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="<?= base_url('vendor/'); ?>DataTables/datatables.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('asset/'); ?>js/sb-admin-2.min.js"></script>
<script src="<?= base_url('vendor/'); ?>Semantic-UI/semantic.js"></script>
<!-- <script src="<?= base_url('vendor/'); ?>Semantic-ui-calendar/dist/calendar.min.js"></script> -->

<!-- Custom scripts for all pages-->
<script src=" <?= base_url('vendor/'); ?>DataTables/datatables.js"> </script>

<!-- moment untuk ganti date string -->
<script src="<?= base_url('asset/'); ?>js/moment-locales.js"></script>

<script>
	$(document).ready(function() {
		$(".preloader").fadeOut();
	})
</script>

<script>
	$(document).ready(function() {
		$("#navbar-mobile").click(function() {
			$('.ui.labeled.icon.sidebar')
				.sidebar('toggle');
		});
	})
</script>

<script>
	function confirm_modal(delete_url, title) {
		var c = title;
		jQuery("#modalhapus .menu").text(title);
		$('.modalhapus').modal('show');
		document.getElementById('delete_link_m_n').setAttribute("href", delete_url);
		document.getElementById('delete_link_m_n').focus();
		console.log(c);

	};
</script>
<script>
	function proses(url, title) {
		var c = title;
		var d = $('#tk_cukur').text();
		$('#tkcukur').text(d);
		jQuery("#selesaikanModal .nota").text(c);
		$('.selesaikanModal').modal('show');
		document.getElementById('proses').setAttribute("href", url);
		console.log(c);

	};
</script>
<script>
	$(".close.icon").click(function() {
		$(this).parent().hide();
	});
</script>
<script>
	function example(delete_url, title) {
		jQuery("#example #delete").text(title);
		$('.ui.modal').modal('show');
		document.getElementById('delete').setAttribute("href", delete_url);

	}
</script>


<script>
	function confirm_modal(delete_url, title) {
		$('#H_alat').modal('show', {
			backdrop: 'static',
			keyboard: false
		});
		$("#H_alat .content .grt").text(title);
		document.getElementById('hapus_alat').setAttribute("href", delete_url);
		document.getElementById('hapus_alat').focus();
	};

	function logout_modal() {
		$('#logout').modal('show', {
			backdrop: 'static',
			keyboard: false
		});
	};

	function edit_b_modal() {
		$('#E_B_alat').modal('show', {
			backdrop: 'static',
			keyboard: false
		});
	};

	function hapus_b_modal() {
		$('#H_B_alat').modal('show', {
			backdrop: 'static',
			keyboard: false
		});
	};

	function hapus_kondisi_modal(delete_url, title) {
		$('#H_Kondisi').modal('show', {
			backdrop: 'static',
			keyboard: false
		});
		$("#H_Kondisi .content .grt").text(title);
		document.getElementById('hapus_kondisi').setAttribute("href", delete_url);
		document.getElementById('hapus_kondisi').focus();
	};

	function hapus_lantai_modal(delete_url, title) {
		$('#H_Lantai').modal('show', {
			backdrop: 'static',
			keyboard: false
		});
		$("#H_Lantai .content .grt").text(title);
		document.getElementById('hapus_lantai').setAttribute("href", delete_url);
		document.getElementById('hapus_lantai').focus();
	};

	function hapus_ruang_modal(delete_url, title) {
		$('#H_Ruang').modal('show', {
			backdrop: 'static',
			keyboard: false
		});
		$("#H_Ruang .content .grt").text(title);
		document.getElementById('hapus_ruang').setAttribute("href", delete_url);
		document.getElementById('hapus_ruang').focus();
	};

	function hapus_pengguna_modal(delete_url, title) {
		$('#H_Pengguna').modal('show', {
			backdrop: 'static',
			keyboard: false
		});
		$("#H_Pengguna .content .grt").text(title);
		document.getElementById('hapus_pengguna').setAttribute("href", delete_url);
		document.getElementById('hapus_pengguna').focus();
	};

	function edit_pengguna_modal(url, nama, username, id) {
		$('#E_Pengguna').modal('show', {
			backdrop: 'static',
			keyboard: false
		});
		// $("#E_Pengguna .content .grt").text(nama, username,);
		document.getElementById('1nama').setAttribute("value", nama, );
		document.getElementById('1id').setAttribute("value", id, );
		document.getElementById('1username').setAttribute("value", username, );
		document.getElementById('1katasandi').focus();
		// document.getElementById('edit_pengguna').setAttribute("href", url, );
	};
</script>
</body>

</html>