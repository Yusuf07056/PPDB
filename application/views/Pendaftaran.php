<div id="main">
	<div class="kotakup">
		<div align="center" class="kotakup kotakupp">

			<img src="<?= base_url('asset/images/LOGO.png') ?>" width="5%">

			<div align="center" class="garisup">
				<h1>LAMAN ADMIN
					<a href="<?= base_url('index.php/Adm_ctrl/PPDB') ?>">
						<button class="btn" id="tombol"><i class="fa fa-home"></i></button>
					</a>
					<button class="btn" id="tombolpopup" onclick="openNav()"><i class="fa fa-bars"></i></button>

				</h1>
			</div>
			<div>
				<!-- Tab links -->
				<div class="tab">
					<button class="tablinks" onclick="openCity(event, 'London')" id=<?= $id; ?>>PENDAFTAR</button>
					<button class="tablinks" onclick="openCity(event, 'Paris')">VALIDASI</button>
					<button class="tablinks" onclick="openCity(event, 'Tokyo')">FORMULIR</button>
				</div>
			</div>
		</div>
		<div id="mySidenav" class="sidenav">
			<button class="closebtn" onclick="closeNav()">&times;</button>
			<?php
			$view_bukti = $registrasi->result_array();
			foreach ($view_bukti as $view_table) {
			?>
				<a href="<?= base_url('index.php/Adm_ctrl/profil/') . $view_table['nama'] ?>">
					<i class='fas fa-user-tie' style='font-size:36px; color: white;'></i>

					<?= $view_table['nama'] ?>
				</a>
			<?php
			}
			?>
			<a href="<?= base_url('index.php/Adm_ctrl/PPDB') ?>">PENDAFTAR</a>
			<a href="<?= base_url('index.php/Adm_ctrl/register') ?>">TAMBAH ADMIN</a>
			<a href="<?= base_url('index.php/Adm_ctrl/logout') ?>">
				<i class="fas fa-sign-out-alt"></i>LOGOUT
			</a>
		</div>

		<div class="">
			<!-- Tab links awal -->

			<!-- Tab content -->
			<div id="London" class="tabcontent">
				<div>

					<table>
						<tr>
							<td>
								<input type="text" placeholder="CARI...." name="SEARCH" id="myInput" onkeyup="cari_data_bukti()">
							</td>
							<td>
								<a href="<?= base_url('index.php/Adm_ctrl/PPDB') ?>"> REFRESH DATA
									<i class="fa fa-refresh fa-spin" style="font-size:18px; color:black;"></i>
								</a>
							</td>
						</tr>
					</table>

					<table align="CENTER">
						<thead>
							<tr align="CENTER">
								<th>ID BUKTI</th>
								<th>ATAS NAMA</th>
								<th>GAMBAR</th>
								<th>NOMER WA</th>
								<th>PILIHAN</th>
							</tr>
						</thead>
						<tbody id="myTableBukti">
							<?php
							$view_bukti = $bukti_pembayaran->result_array();
							foreach ($view_bukti as $view_table) {
							?>
								<tr align="CENTER">
									<td><?= $view_table['id_bukti'] ?></td>
									<td><?= $view_table['atas_nama'] ?></td>
									<td>
										<img src="<?= base_url() . 'asset/images/' . $view_table['bukti_transfer'] ?>" width="100" height="100">

									</td>
									<td><?= $view_table['no_wa'] ?></td>
									<td>
										<dl>
											<dt>
												<button class="desain_tombol">
													<a href="<?php echo base_url('index.php/Adm_ctrl/validasi_bukti/') . $view_table['id_bukti'] ?>"> <i class="fas fa-check-square" style="font-size:18px; color: white;"></i> PROSES</a>
												</button>
											</dt>
											<dt>
												<button class="desain_tombol">
													<a href="<?php echo base_url('index.php/Adm_ctrl/lihat/') . $view_table['id_bukti'] ?>"> <i class='far fa-eye' style='font-size:18px; color: white;'></i>LIHAT</a>
												</button>
											</dt>
										</dl>

									</td>
								</tr>
							<?php
							}
							?>
						</tbody>
					</table>
				</div>
			</div>

			<div id="Paris" class="tabcontent">
				<table>
					<tr>
						<td>
							<select name="status" id="myFilter" placeholder="FILTER" onclick="cari_data_filter()">
								<option value=" TERIMA">TERIMA</option>
								<option value="TOLAK">TOLAK</option>
							</select>
						</td>
						<td>
							<a href="<?= base_url('index.php/Adm_ctrl/PPDB') ?>"> REFRESH DATA
								<i class="fa fa-refresh fa-spin" style="font-size:18px; color:black;"></i>
							</a>
						</td>

					</tr>
				</table>
				<table align="CENTER">
					<thead>
						<tr align="CENTER">
							<th>ID validasi</th>
							<th>BUKTI</th>
							<th>STATUS</th>
							<th>NOMER HP</th>
						</tr>
					</thead>
					<tbody id="myTableStatus">
						<?php
						$view_bukti = $validasi_bukti->result_array();
						foreach ($view_bukti as $view_table) {
						?>
							<tr align="CENTER">
								<td><?= $view_table['id_valbuk'] ?></td>
								<td>
									<a style="color: black;" href="<?php echo base_url('index.php/Adm_ctrl/edit_validasi_bukti/') . $view_table['id_bukti'] ?>"><?= $view_table['id_bukti'] ?></a>
								</td>
								<td><?= $view_table['stts'] ?></td>
								<td><?= $view_table['no_hp_val'] ?></td>
							</tr>
						<?php
						}
						?>
					</tbody>
				</table>
			</div>

			<div id="Tokyo" class="tabcontent">
				<table align="CENTER">
					<tr>
						<td>
							<input type="text" placeholder="CARI...." name="SEARCH" id="mySearch" onkeyup="cari_data_formulir()">
						</td>
						<td>
							<a href="<?= base_url('index.php/Adm_ctrl/PPDB') ?>"> REFRESH DATA
								<i class="fa fa-refresh fa-spin" style="font-size:18px; color:black;"></i>
							</a>
						</td>
					</tr>
				</table>
				<table align="CENTER">
					<thead>
						<tr align="CENTER">
							<th>ID FORMULIR</th>
							<th>NAMA LENGKAP</th>
							<th>ALAMAT</th>
							<th>NISN</th>
							<th>ASAL SEKOLAH</th>
							<th>FOTO</th>
							<th>NAMA WALI</th>
							<th>PILIHAN</th>
						</tr>
					</thead>
					<tbody id="myTableFormulir">
						<?php
						$view_bukti = $formulir->result_array();
						foreach ($view_bukti as $view_table) {
						?>
							<tr align="CENTER">
								<td><?= $view_table['no_daftar'] ?></td>
								<td><?= $view_table['nama_lengkap'] ?></td>
								<td><?= $view_table['alamat'] ?></td>
								<td><?= $view_table['nisn'] ?></td>
								<td><?= $view_table['asal_sekolah'] ?></td>
								<td><img src="<?= base_url() . 'asset/images/' . $view_table['foto'] ?>" width="100" height="100"></td>
								<td><?= $view_table['nama_orangtua'] ?></td>
								<td>
									<dl>
										<dt>
											<a href="<?= base_url('index.php/Adm_ctrl/pdf_generate/') . $view_table['no_daftar'] ?>" class="fas fa-file-pdf" style='font-size:18px;color:#00aec9'>GENERATE PDF</a>
										</dt>
										<dt>
											<a href="<?= base_url('index.php/Adm_ctrl/lihat_detail/') . $view_table['no_daftar'] ?>" class="fas fa-eye" style="font-size:18px;color:#00aec9">LIHAT DETAIL</a>
										</dt>
									</dl>

								</td>
							</tr>

						<?php
						}
						?>
					</tbody>
				</table>

			</div>
		</div>
	</div>
</div>