<?php
    include "../conection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form pendaftar</title>
<style>
 .form{
        background-color:brown;
        padding:20px;
        border-radius:5px;
    } 
    input,textarea,select{
        width:100%;
        padding:12px 20px;
        margin:8px 0;
        display: inline-block;
        border: solid#ccc;
        border-radius:4px;
        box-sizing: border-box;
    }
    button{
        width:100%;
        background-color: grey;
        padding:14px 20px;
        margin:8px 0px;
        border:none;
        border-radius:5px;
        cursor:pointer;
        font-size:16px;
        color:white;

    }
    </style>
   


</head>
<body>
    <h1>silahkan isi bidang di bawah ini</h1>
    <a href="../logout.php">Back To Home</a>

    <form class="form"action="input_data_pendaftar.php" method="post">

        <label for="">Id pendaftar</label><br>
        <input type="text" name="id_pendaftar" id="" value="<?= rand(0000,9999)?>" readonly>
        <br><br>
        <label for="">nama pendaftar</label> <br>
        <input type="text" name="nama_pendaftar" id="">
        <br><br>
        <label for="">nomor hp</label><br>
        <input type="text" name="nomor_hp" id="">
        <br><br>
        <label for="">alamat</label><br>
        <textarea name="alamat" id="" cols="50" rows="10"></textarea>
        <br><br>
        <label for="">jenis lapangan</label><br>
        <select name="jenis_lapangan" id="">
            <option value="a">Langan A (matras)</option>
            <option value="b">Lapangan B (sintetis)</option>
            <option value="c">Lapangan c (vinnyl</option>
        </select>
        <br><br>
        <label for="">jam mulai</label><br>
        <input type="time" name="jam_mulai" id="">
        <br><br>
        <label for="">jam selesai</label><br>
        <input type="time" name="jam_selesai" id="">
        <br><br>
        <label for="">jenis pembayaran</label>-
        <select name="jenis_pembayaran" id="">-
            <option value="cash">cash</option>
            <option value="Transfer">Transfer</option>
        </select>
        <br><br>

        <button type="submit">kirim</button>
        
    </form>
</body>
</html>