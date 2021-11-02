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
				<table class="table">

					<tr>
						<td>
							<label for="atas_nama">Atas Nama</label>
						</td>
						<td class=>
							<input type="text" name="atas_nama" id="atas_nama" class="inputstyle" required>
						</td>
					</tr>

					<tr>
						<td>
							<label for="gambarbukti">Upload Bukti Pembayaran</label>
						</td>
						<td class=>
							<input type="file" name="gambarbukti" id="gambarbukti" class="inputstyle" required>
						</td>
					</tr>

					<tr>
						<td style="width: 25%;margin-top: 6px;">
							<label for="kontak_wa">KONTAK WA</label>
						</td>
						<td>
							<input type="text" name="kontak_wa" id="kontak_wa" placeholder="NOMER WA" class="inputstyle" required>
						</td>
					</tr>
					<tr>
						<td><span></span></td>
						<td class=>
							<div id="captcha" class="g-recaptcha" data-type="image" data-sitekey="6LehXE0bAAAAAPXVA3dVCv33rc8Y85JrqoUqihpY"></div>

						</td>
					</tr>

					<tr>
						<td></td>
						<td>
							<input type="submit" name="submit" value="konfirm" class="btn1">
						</td>
					</tr>
				</table>
			</div>
		</form>
		<div class=" box">
			<p>
				Upload Bukti/Screenshoot Pembayaran Formulir di sini, dan ke nomor HP ADMIN: 08113017125 atau<a href="https://wa.me/628113017125">klik link ini</a>
			</p>
		</div>
	</div>

</body>

</html>
