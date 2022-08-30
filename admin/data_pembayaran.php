<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data pembayaran</title>
</head>
<body>
    <a href="index.php">Back To Home</a>
    <h1>silahkan isi bidang di bawah ini</h1>
    <form action="input_data_pembayaran.php" method="post">

    <label for="">id pembayaran</label><br>
    <input type="text" name ="id_pembayaran" id="">
    <br><br>
    <label for="">id pendaftar</label><br>
    <input type="text" name ="id_pendaftar" id="">
    <br><br>
    <label for="">jenis lapangan</label><br>
    <select name="jenis_lapangan" id="">
        <option value="a">lapangan a (matras)</option>
        <option value="b">lapangan b (sistetis)</option>
        <option value="c">lapangan c (vinyl)</option>
    </select>
    <br><br>
    <label for="">jenis pembayaran</label>
    <select name="jenis_pembayaran" id="">
        <option value="cash">cash</option>
        <option value="transfer">transfer</option>
    </select>
    <br><br>
    <label for="">nominal pembayaran</label><br>
    <input type="text" name="nominal_pembayaran" id="">
    <br><br>
    <select name="status_pembayaran" id="">
        <option value="...">...</option>
        <option value="lunas">lunas</option>
    </select>

        <button type="submit">kirim</button>
    </form>
    
</body>
</html>