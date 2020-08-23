<br><br><br><br>
<div id="maincontent" class="ui main container">
	<a class="ui labeled green icon button" href="<?= base_url() ?>">
		<i class="left chevron icon"></i>
		Kembali
	</a>
	<h1 class="ui header">Lantai <?= $nomor_lantai; ?></h1>
	<div class="ui stackable grid">
		<div class="wide column">
			<div id="regInnkommende" class="ui stacked segment">
				<a class="ui ribbon orange label">Ruangan</a>
				<div class="ui cards">
					<?php
					$count = count($lantai);
					if ($count > 0) {



						foreach ($lantai as $row) : ?>
							<div class="card">
								<div class="content">
									<!-- <img class="right floated mini ui image" src="/images/avatar/large/elliot.jpg"> -->
									<div class="header">
										Ruang <?= $row['nomor_ruang']; ?>
										<small><?= $row['nama_ruang']; ?></small>
									</div>
									<div class="meta">
										<?= $row['pj_ruang']; ?>
									</div>

								</div>
								<div class="extra content">
									<div class="ui two buttons">
										<a href="<?= base_url('pengguna/ruang/') ?><?= $row['id_ruang'] ?>/<?= $row['nomor_ruang'] ?>/<?= $row['nama_ruang'] ?>" class="ui basic green button">Buka</a>
									</div>
								</div>
							</div>
						<?php
						endforeach;
					} else { ?>
						<div class="card center">
							<h1 class="center aligned">TIDAK ADA DATA</h1>
						</div>
					<?php }	?>
				</div>

			</div>


		</div>

	</div>
</div>