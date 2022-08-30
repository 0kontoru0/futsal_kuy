<?php
    include "../conection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data lapangan</title>
</head>
<body>
     <a href="../logout.php">Back To Home</a>
     <h1>silahkan isi data lapangan</h1>
     <form action="input_data_lapangan.php" method="post">
        <label for="">Id lapangan</label><br>
        <input type="text" name="id_lapangan" id="">
        <br><br>
        <label for="">jenis lapangan</label><br>
        <select name="jenis_lapangan" id="">
            <option value="a">Langan A (matras)</option>
            <option value="b">Lapangan B (sintetis)</option>
            <option value="c">Lapangan c (vinnyl</option>
        </select>
        <br><br>
        <label for="">type lapangan</label><br>
            <select name="type_lapangan" id="">matras
            <option value="sintetis">sintetis</option>
            <option value="vinyl">vinyl</option>
        </select>
        <br><br>

        <button type="submit">kirim data</button>
     </form>
</body>
</html>