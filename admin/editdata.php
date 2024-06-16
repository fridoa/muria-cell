<?php include "../config/koneksi.php"; ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/img/image/33.png">
    <title>Edit Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }

        #header {
            background: linear-gradient(#007bff, #0056b3);
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        .logo {
            height: 80px;
            margin-bottom: 10px;
        }

        .judul {
            font-size: 24px;
            margin: 0;
        }

        #menu {
            background: #343a40;
            color: #fff;
            min-height: 100vh;
            padding: 10px;
            position: fixed;
            width: 20%;
        }

        #menu a {
            color: #fff;
            display: block;
            font-size: 18px;
            margin: 10px 0;
            padding: 10px;
            text-decoration: none;
            transition: background 0.3s;
        }

        #menu a:hover {
            background: #007bff;
        }

        #konten {
            margin-left: 22%;
            padding: 20px;
        }

        #footer {
            background: #343a40;
            color: #fff;
            padding: 10px;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type=text],
        textarea,
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=file] {
            margin-top: 5px;
        }

        input[type=submit] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            cursor: pointer;
            border-radius: 4px;
        }

        input[type=submit]:hover {
            background-color: #0056b3;
        }

        @media (max-width: 768px) {
            #menu {
                width: 100%;
                position: relative;
                min-height: auto;
            }

            #konten {
                margin-left: 0;
            }
        }
    </style>
</head>

<body>
    <div id="header">
        <img src="../assets/img/image/33.png" class="logo" alt="Logo">
        <div class="judul">Halaman Administrator</div>
    </div>
    <div id="menu">
        <a href="?mod=pengguna" class="amenu">Akun Pengguna</a>
        <a href="?mod=lihat" class="amenu">Lihat Data</a>
        <a href="?mod=kelola" class="amenu">Kelola Data</a>
        <a href="?mod=logout" class="amenu">Logout</a>
    </div>
    <div id="konten">
        <h3>Edit Berita</h3>
        <?php
        $data = mysqli_query($koneksi, "SELECT * FROM tbl_berita WHERE id = '" . $_GET['id'] . "'");
        while ($r = mysqli_fetch_array($data)) {
        ?>
        <form method="post" action="aksi.php?mod=editdata" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $r['id']; ?>">
            
            <label for="judul">Nama:</label>
            <input type="text" id="judul" name="judul" value="<?php echo $r['judul']; ?>" placeholder="Judul Berita" required>
            
            <label for="berita">Deskripsi:</label>
            <textarea id="berita" name="berita" placeholder="Isi Berita" required><?php echo $r['isi_berita']; ?></textarea>

            <label for="harga">Harga:</label>
            <input type="text" id="harga" name="harga" value="<?php echo $r['harga']; ?>" placeholder="Harga" required>
            
            <label for="kategori">Kategori:</label>
            <select id="kategori" name="kategori" required>
                <option value="">-- Pilih Kategori --</option>
                <option value="home" <?php if($r['kategori'] == 'home') echo 'selected'; ?>>Home</option>
                <option value="smartphone" <?php if($r['kategori'] == 'smartphone') echo 'selected'; ?>>Smartphone</option>
                <option value="accessories" <?php if($r['kategori'] == 'accessories') echo 'selected'; ?>>Accessories</option>
                <option value="contact" <?php if($r['kategori'] == 'contact') echo 'selected'; ?>>Contact</option>
            </select>
            
            <label for="gambar">Gambar:</label>
            <input type="file" id="gambar" name="gambar" accept="image/*">
            
            <input type="submit" name="submit" value="Submit">
            <?php } ?>
        </form>
    </div>
    <div id="footer">&copy; 2024. <b style="color: #1679AB">Muria Cellular Technology</b> All Rights Reserved.</div>
</body>

</html>
