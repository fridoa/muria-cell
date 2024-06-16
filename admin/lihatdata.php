<?php
include "../config/koneksi.php";

if (!isset($_SESSION['email'])) {
    header('Location: ../page.php?mod=login');
    exit();
}

include "../controlaccess.php"; // Include access control functions

$fullname = $_SESSION['fullname'];  // Ambil nama lengkap pengguna dari sesi

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/img/image/33.png">
    <title>Lihat Data</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f8f9fa;
        }

        #header {
            background: linear-gradient(90deg, #007bff, #0056b3);
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
            margin-left: 20%;
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

        table {
            margin-top: 20px;
            width: 100%;
        }

        th, td {
            border: 1px solid #dee2e6;
            padding: 12px;
            text-align: left;
        }

        th {
            background: #007bff;
            color: #fff;
        }

        td img {
            width: 100px;
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
        <h3>Data Berita</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>Harga</th>
                    <th>Gambar</th>
                    <th>Kategori</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                if ($_SESSION['role'] === 'admin') {
                    $query = "SELECT * FROM tbl_berita";
                } else {
                    // Mengganti ID_user dengan created_by untuk memfilter data berita
                    $query = "SELECT * FROM tbl_berita WHERE created_by = '$fullname'";
                }
                $data = mysqli_query($koneksi, $query);
                while ($r = mysqli_fetch_array($data)) {
                ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $r['judul']; ?></td>
                    <td><?php echo $r['isi_berita']; ?></td>
                    <td><?php echo $r['harga']; ?></td>
                    <td><img src="../assets/img/<?php echo $r['gambar']; ?>" alt="Gambar Berita"></td>
                    <td><?php echo $r['kategori']; ?></td>
                    <td><?php echo $r['tanggal']; ?></td>
                    <td width="100">
                        <a href="?mod=ubah&id=<?php echo $r['id']; ?>">Ubah</a> |
                        <a href="aksi.php?mod=hapus&id=<?php echo $r['id']; ?>">Hapus</a>
                    </td>
                </tr>
                <?php $no++;
                }
                ?>
            </tbody>
        </table>
    </div>
    <div id="footer">&copy; 2024. <b style="color: #1679AB">Muria Cellular Technology</b> All Rights Reserved.</div>
</body>

</html>
