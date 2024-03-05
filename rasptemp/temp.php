<!DOCTYPE html>
<html>
<head>
        <title>Temperatura do termômetro</title>
        <meta charset="utf-8">
        <style>
                body {
                        text-align: center;
                        font-size: 48px;
                }
        </style>
  <meta http-equiv="refresh" content="2">

</head>
<body>
	<?php
  $temp = exec('python read_temp.py');
        ?>
	<div id="temp">
        <h1>Temperatura atual: <?php echo $temp; ?>&deg;C</h1>
	</div>
</body>
</html>
