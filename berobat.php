<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
    <title>Berobat</title>
	<style>
       table {
            color: black;
			background-color: #F5F5F5;
		}
        table,tr,td {
            border: 1px solid black;
			margin: auto;
			padding: 12px;
		}
        thead {
            background-color: #1f5faa;
			color: white;
			font-weight: bold;
        }
    </style>
</head>
<body>
<div id="container">
        <header>
            <h1>Data Berobat</h1>
        </header>
	<div id="hero">
	<h2 align="center">Tabel Berobat</h2>
	<br>
    <table class="table">
        <thead>
            <tr>
                <td>No</td>
				<td>Id Berobat</td>
				<td>Id Pasien</td>
				<td>Id Dokter</td>
				<td>Tanggal Berobat</td>
                <td>Keluhan Pasien</td>
                <td>Hasil Diagnosa</td>
                <td>Penatalaksanaan</td>                
            </tr>
        </thead>
        <?php
        include "koneksi.php";
        $no = 1;
        $query = mysqli_query($con, 'SELECT * FROM berobat');
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
				<td><?php echo $data['id_berobat'] ?></td>
                <td><?php echo $data['id_pasien'] ?></td>
                <td><?php echo $data['id_dokter'] ?></td>
				<td><?php echo $data['tgl_berobat'] ?></td>
				<td><?php echo $data['keluhan_pasien'] ?></td>
				<td><?php echo $data['hasil_diagnosa'] ?></td>
                <td><?php echo $data['penatalaksanaan'] ?></td>
            </tr>
        <?php } ?>
    </table>
	</div>
</div>
</body>
</html>