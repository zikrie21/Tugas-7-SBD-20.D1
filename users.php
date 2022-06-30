<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
    <title>Users</title>
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
            <h1>Data Users</h1>
        </header>
	<div id="hero">
	<h2 align="center">Tabel User</h2>
	<br>
    <table class="table">
        <thead>
            <tr>
                <td>No</td>
				<td>Id</td>
				<td>Username</td>
				<td>Password</td>   
				<td>Nama Lengkap</td>
            </tr>
        </thead>
		<?php
        include "koneksi.php";
        $no = 1;
        $query = mysqli_query($con, 'SELECT * FROM users');
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
				<td><?php echo $data['id'] ?></td>
                <td><?php echo $data['username'] ?></td>
				<td><?php echo $data['password'] ?></td>
				<td><?php echo $data['nama_lengkap'] ?></td>
            </tr>
        <?php } ?>
    </table>
	</div>
</div>
</body>
</html>