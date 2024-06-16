<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/img/image/33.png">
    <title>Kelola Data</title>
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
            margin-left: 22%; /* Adjusted margin to create space between menu and content */
            padding: 20px;
        }

        #footer {
            background: #343a40;
            color: #fff;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
            text-align: center;
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
        <a href="?mod=pengguna">Akun Pengguna</a>
        <a href="?mod=lihat">Lihat Data</a>
        <a href="?mod=kelola">Kelola Data</a>
        <a href="?mod=logout">Logout</a>
    </div>
    <div id="konten">
        <h3>Kelola Data</h3>
        <form method="post" action="aksi.php?mod=tambahdata" enctype="multipart/form-data">
            <label for="judul">Nama:</label>
            <input type="text" id="judul" name="judul" placeholder="Masukkan judul berita" required>
            
            <label for="berita">Deskripsi</label>
            <textarea id="berita" name="berita" placeholder="Masukkan isi berita" required></textarea>
            
            <label for="harga">Harga:</label>
            <input type="text" id="harga" name="harga" placeholder="Masukkan harga" required>
            
            <label for="kategori">Kategori:</label>
            <select id="kategori" name="kategori" required>
                <option value="">-- Pilih Kategori --</option>
                <option value="home">Home</option>
                <option value="smartphone">Smartphone</option>
                <option value="accessories">Accessories</option>
                <option value="contact">Contact</option>
            </select>
            
            <label for="gambar">Gambar:</label>
            <input type="file" id="gambar" name="gambar" accept="image/*" required>
            
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
    <div id="footer">&copy; 2024. <b style="color: #1679AB">Muria Cellular Technology</b> All Rights Reserved.</div>
</body>

</html>
