<?php
include "../config/koneksi.php";

session_start(); // Mulai session untuk mengakses $_SESSION

if ($_GET['mod'] == 'tambahdata') {
    $judul      = mysqli_real_escape_string($koneksi, $_POST['judul']);
    $isi_berita = mysqli_real_escape_string($koneksi, $_POST['berita']);
    $harga     = mysqli_real_escape_string($koneksi, $_POST['harga']);
    $kategori   = mysqli_real_escape_string($koneksi, $_POST['kategori']);

    // Mendapatkan ID user yang sedang login
    $id_user    = $_SESSION['iduser'];

    $lokasi = "../assets/img/";
    $nama_gambar = $_FILES['gambar']['name'];
    move_uploaded_file(
        $_FILES['gambar']['tmp_name'],
        $lokasi . $nama_gambar
    );

    // Mendapatkan nama user yang sedang login untuk created_by
    $nama_user = $_SESSION['fullname'];

    mysqli_query(
        $koneksi,
        "INSERT INTO tbl_berita (judul, isi_berita, harga, kategori, gambar, tanggal, created_by, id_user)
         VALUES ('$judul', '$isi_berita', '$harga', '$kategori', '$nama_gambar', NOW(), '$nama_user', '$id_user')"
    );

    header("location:page.php?mod=lihat");
} elseif ($_GET['mod'] == 'hapus') {
    $id = mysqli_real_escape_string($koneksi, $_GET['id']);
    
    // Mengambil nama gambar yang akan dihapus
    $result = mysqli_query($koneksi, "SELECT gambar FROM tbl_berita WHERE id='$id'");
    $data = mysqli_fetch_assoc($result);
    $gambar = $data['gambar'];
    
    // Hapus gambar dari folder
    if (file_exists("../assets/img/" . $gambar)) {
        unlink("../assets/img/" . $gambar);
    }
    
    mysqli_query(
        $koneksi,
        "DELETE FROM tbl_berita WHERE id='$id'"
    );

    header("location:page.php?mod=lihat");
} elseif ($_GET['mod'] == 'editdata') {
    $id         = mysqli_real_escape_string($koneksi, $_POST['id']);
    $judul      = mysqli_real_escape_string($koneksi, $_POST['judul']);
    $isi_berita = mysqli_real_escape_string($koneksi, $_POST['berita']);
    $harga     = mysqli_real_escape_string($koneksi, $_POST['harga']);
    $kategori   = mysqli_real_escape_string($koneksi, $_POST['kategori']);
    
    // Periksa apakah ada gambar baru yang diunggah
    if (!empty($_FILES['gambar']['name'])) {
        // Mengambil nama gambar lama
        $result = mysqli_query($koneksi, "SELECT gambar FROM tbl_berita WHERE id='$id'");
        $data = mysqli_fetch_assoc($result);
        $gambar_lama = $data['gambar'];
        
        // Hapus gambar lama dari folder
        if (file_exists("../assets/img/" . $gambar_lama)) {
            unlink("../assets/img/" . $gambar_lama);
        }
        
        // Pindahkan gambar baru ke folder
        $nama_gambar_baru = $_FILES['gambar']['name'];
        move_uploaded_file($_FILES['gambar']['tmp_name'], "../assets/img/" . $nama_gambar_baru);
        
        // Update data termasuk gambar baru di database
        mysqli_query(
            $koneksi,
            "UPDATE tbl_berita SET
             judul='$judul',
             isi_berita='$isi_berita',
             harga='$harga',
             kategori='$kategori',
             gambar='$nama_gambar_baru'
             WHERE id='$id'"
        );
    } else {
        // Jika tidak ada gambar baru, update data tanpa mengubah gambar
        mysqli_query(
            $koneksi,
            "UPDATE tbl_berita SET
             judul='$judul',
             isi_berita='$isi_berita',
             harga='$harga',
             kategori='$kategori'
             WHERE id='$id'"
        );
    }

    header("location:page.php?mod=lihat");
}
?>