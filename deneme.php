<!DOCTYPE html>
<html>
<head>
<title>Bina Rehberi</title>
    <meta charset="utf-8" />
    <meta name="description" content="Anadolu Üniversitesi Açıköğretim Sınavlarında görevlilerin sınav yeri seçiminde görevli olacağı okulun binanın konumunu harita üzerinden anlık sorgulama amacı içerir.">
    <meta name="keywords" content="anadolu üniversitesi, açıköğretim, aöf, aof, gözetmen, sınav yeri">
    <meta name="author" content="İlknur Yıldırım">
	<link rel="stylesheet" type="text/css" href="../css/stil.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="script.js"></script>
</head>

<body>
	<form>
		<select id="iller">
		<option value="0">İl Seçiniz</option>
		<?php
		include("connection.php");
		
		$query = mysql_query('select * from iller');
		while($il=mysql_fetch_array($query)){
			echo '<option value="'.$il['ID'].'">'.$il['ADI'].'</option>';
		}
		?>
		</select>
		
		<select id="ilceler">
		<option value="0">Önce İl Seçiniz</option>		
		</select>
		<select id="okullar">
		<option value="0">Önce İlçe Seçiniz</option>		
		</select>
	</form>
</body>

</html>