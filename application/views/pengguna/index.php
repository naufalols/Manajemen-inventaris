<br><br><br><br>
<div id="maincontent" class="ui main container">
	<h1 class="ui header">Beranda</h1>
	<div class="ui stackable grid">
		<div class="nine wide column">
			<div id="regInnkommende" class="ui stacked segment">
				<a class="ui ribbon orange label">Laboratorium</a>
				<div class="ui centered">
					<canvas id="myChart" width="400" height="200"></canvas>

				</div>


			</div>


		</div>
		<div class="seven wide column">
			<?php foreach ($lantai as $row) : ?>
				<div class="ui secondary segment">
					<div class="">
						<a style="width: 100%" type="button" class="ui fluid labeled button" tabindex="0" href="<?= base_url('pengguna/lantai/') ?><?= $row['id_lantai'] ?>">
							<div class="ui fluid green button">
								<i class="building icon"></i> <?= $row['nama_lantai'] ?>
							</div>
							<!-- <a class="ui basic green left pointing label">
								1,048
							</a> -->
						</a>

					</div>
				</div>
			<?php endforeach ?>

		</div>
	</div>
</div>

<script>
	var ctx = $('#myChart');
	var myChart = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: [
				<?php
				foreach ($kondisi as $row) {
					echo "'" . $row['nama_kondisi'] . "'" . ",";
				}
				?>
			],
			datasets: [{
				label: 'Kondisi Alat pada Laboratorium',
				data: <?php
						$count = count($alat);
						$arr = json_encode($alat);
						// for ($i = 0; $i < $count; $i++) {
						// 	echo $arr[$i] . ",";
						// }
						echo $arr;
						// var_dump($alat);
						?>,
				backgroundColor: [
					'rgba(54, 162, 235, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(54, 162, 235, 0.2)'
				],
				borderColor: [
					'rgba(54, 162, 235, 1)',
					'rgba(54, 162, 235, 1)',
					'rgba(54, 162, 235, 1)'
				],
				borderWidth: 1
			}]
		},
		options: {
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero: true
					}
				}]
			},
			// events: ['click']
		}
	});
</script>