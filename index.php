<!DOCTYPE html>
<html>

<head>
    <title>Submit Form</title>
    <script type="text/javascript" src="jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="wrap">
        <form method="post">
            <div>
                <label>nama</label>
                <input name="nama" class="nama"></input>
            </div>
            <div>
                <label>alamat</label>
                <input name="alamat" class="alamat"></input>
            </div>
            <div>
                <label>telepon</label>
                <input type="number" name="tlp" class="tlp"></input>
            </div>
            <div>
                <label>jenis kelamin</label>
                <select name="jk" id="jk" class="jk">
                    <option value="laki-laki">Laki Laki</option>
                    <option value="perempuan">Perempuan</option>
                </select>
            </div>
            <button class="btn" type="submit">Submit</button>
        </form>
        <!-- Data Status Akan Ditampilkan disini -->
    </div>
</body>

</html>