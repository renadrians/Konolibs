<?php
	include 'header.php';
	include 'koneksi.php';
?>

 <title>Data Penulis</title>
 
<style>
	tbody > tr:nth-child(2n+1) > td, tbody > tr:nth-child(2n+1) > th {
        background-color: #ededed;
    }
    table{
        width: 100%;
        margin: auto;
        border-collapse: collapse;
        box-shadow: darkgrey 3px;
    }
    thead tr {
        background-color: #0582ca;
    }
</style>
<center><font face="Britannic Bold" color="#457B9D"><h1 align="center">Tabel Data Penulis</h1></font></center>
<div class="container">
	<div class="row">
		<div class="col-lg-12 mt-2 mb-2" style="min-height: 530px;">
			<div class="card">
			  <div class="card-header">
				Data Penulis
			  </div>
			  <div class="card-body">
				<div class="row">
					<div class="col mb-3">
						<form class="form-inline float-right" method="GET">
							<input type="text" class="form-control" name="keyword">
							<input type="submit" class="btn btn-primary" name="cari" value="Cari">
						</form>
					</div>
				</div>
				
				<table border="0">
					<thead>
						<tr>
							<th>No</th>
							<th>Kode Penulis</th>
							<th>Nama Penulis</th>
						</tr>
					</thead>
							    <tbody>
									<?php
									$sql = "SELECT * FROM penulis ORDER BY id_penulis";
									if (isset($_GET['cari'])) {
										$keyword=$_GET['keyword'];
										$sql = "SELECT * FROM penulis WHERE nama_penulis LIKE '%$keyword%'";
									}
									$no  = 1;
									foreach ($koneksi->query($sql) as $data) ://satu-satu, no++ untuk otomatis habis 1 langsung 2//
									?>
										<tr>
											<td><?php echo $no++; ?></td>
											<td><?php echo $data['id_penulis'] ?></td>
											<td><?php echo $data['nama_penulis'] ?></td>
										</tr>
									<?php
									endforeach;
									?>
								</tbody>
						</table>
					</div>
				</div>
			  </div>
			</div>
		</div>
	</div>
</div>


<?php
	include 'footer.html'
?>;