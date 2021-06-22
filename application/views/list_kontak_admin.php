<!DOCTYPE html>
<html lang="en">

<head>
	<title>PPDB SMA IPIEMS</title>
	<link rel="stylesheet" href="<?= base_url('asset/css/style_daftar.css'); ?>">
	<link rel="shortcut icon" type="image/x-icon" href="<?= base_url('asset/images/LOGO.png') ?>">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script src="https://www.google.com/recaptcha/api.js"></script>

</head>

<body>

	<!-- BAGIAN FORMULIR -->
	<div class="boxform boxform2">
		<div class="judul" align="center">
			<img src="<?= base_url('asset/images/LOGO.png'); ?>" alt="" width="10%">
		</div>
		<div class="judul">
			<h2 class="judulh2">Formulir Pendaftaran Siswa Baru SMA IPIEMS</h2>
			<br>
			<h3 class="subjudul">Bukti Pembayaran</h3>
			<br>
			<p>
				Silahkan transfer ke Rekening BNI 1125085330 atas nama Beny Wahyudi senilai Rp. 100.000 dan upload bukti pembayaran, selanjutnya anda bisa mengisi formulir pendaftaran.
			</p>
		</div>
		<?php
		if ($this->session->flashdata('message')) {
		?>
			<div class="judul">
				<?=
				$this->session->flashdata('message');
				?>
			</div>
		<?php
		}
		if ($this->session->flashdata('success_message')) {
		?>

			<div class="judul centered">
				<?=
				$this->session->flashdata('success_message');
				?>
			</div>

		<?php
		}
		?>
		<form method="post" action="<?= base_url('index.php/Welcome/input_bukti'); ?>" enctype="multipart/form-data">
			<div class=" box">
				<table>

				</table>
				<table class="table">

					<tr>
						<td></td>
						<td>
							<a href="<?= base_url('index.php/Welcome/list_admin') ?>">ADA MASALAH?, HUBUNGI ADMIN</a>
						</td>
						<td>
							<a href="<?= base_url('index.php/Welcome') ?>">BACK</a>
						</td>
					</tr>
				</table>
			</div>
		</form>
	</div>

</body>

</html>