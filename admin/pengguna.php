<?php
include "../config/koneksi.php";

// Periksa apakah user sudah login
if (empty($_SESSION["email"])) {
    header("location:../page.php?mod=login");
    exit;
}

// Ambil peran pengguna dari database berdasarkan email yang ada di sesi
$email = $_SESSION["email"];
$queryRole = "SELECT role FROM user_account WHERE email = ?";
$stmt = $koneksi->prepare($queryRole);
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->bind_result($role);
$stmt->fetch();
$stmt->close();

// Periksa apakah pengguna adalah admin
if ($role !== 'admin') {
    echo "Akses ditolak. Halaman ini hanya untuk admin.";
    exit;
}

// Query untuk mengambil data dari tabel user_account
$query = "SELECT * FROM user_account";
$result = mysqli_query($koneksi, $query);
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/img/image/33.png">
    <title>Akun Pengguna</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f8f9fa;
            margin: 0;
            padding: 0;
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
            position: fixed;
            bottom: 0;
            width: 100%;
            text-align: center;
        }

        table {
            border-collapse: collapse;
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

        td a {
            color: #007bff;
            text-decoration: none;
        }

        td a:hover {
            text-decoration: underline;
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
        <div class="judul">Selamat Datang <?php echo $_SESSION['fullname']; ?></div>
    </div>
    <div id="menu">
        <a href="?mod=pengguna">Akun Pengguna</a>
        <a href="?mod=lihat">Lihat Data</a>
        <a href="?mod=kelola">Kelola Data</a>
        <a href="?mod=logout">Logout</a>
    </div>
    <div id="konten">
        <h3>Data Pengguna</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $no++ . "</td>";
                    echo "<td>" . $row['fullname'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['role'] . "</td>";
                    echo "<td width='100'>";
                    echo "<a href='?mod=hapusakun'>Hapus</a>";
                    echo "</td>";
                    echo "</tr>";
                }
                ?>
                <!-- <a href='?mod=ubahakun'>Ubah</a> |  -->
            </tbody>
        </table>
    </div>
    <div id="footer">&copy; 2024. <b style="color: #1679AB">Muria Cellular Technology</b> All Rights Reserved.</div>
</body>

</html>
