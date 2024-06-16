<?php 
include 'component/header.php'; 
$koneksi = mysqli_connect("localhost", "root", "", "db_dpw1");

if (mysqli_connect_errno()) {
    echo "Koneksi database gagal: " . mysqli_connect_error();
}

// Tangkap parameter 'order' dari URL
$order = isset($_GET['order']) && $_GET['order'] === 'DESC' ? 'DESC' : 'ASC';

// Tentukan order selanjutnya
$next_order = $order === 'ASC' ? 'DESC' : 'ASC';

?>
<body>
    <div class="container">
        <br>
        <div class="header-text">
            <h1>Smartphone</h1>
        </div>
        <p class="lead" style="text-align: center;">Temukan Kesempurnaan di Genggaman Anda!</p>
        <div style="text-align: center; margin-bottom: 20px;">
            <a href="?mod=smartphone&order=<?= $next_order ?>" class="btn btn-primary">
                <?php if ($order === 'ASC'): ?>
                    Urutkan dari Harga Tertinggi &#8593;
                <?php else: ?>
                    Urutkan dari Harga Terendah &#8595;
                <?php endif; ?>
            </a>
        </div>
        <hr>
        <div class="row align-items-start">
        <?php
        // Modifikasi query SQL untuk mengurutkan berdasarkan harga
        $data = mysqli_query($koneksi, "SELECT * FROM tbl_berita WHERE kategori = 'smartphone' ORDER BY harga $order");

        while ($r = mysqli_fetch_array($data)) {
            ?>
            <div class="col-md-4">
                <a href="https://www.samsung.com/id/smartphones/galaxy-a/galaxy-a35-5g-awesome-lilac-256gb-sm-a356elvgxid/buy/">
                    <img src="assets/img/<?php echo $r['gambar']; ?>" style="width: 100%;" alt="" class="img-zoom">
                </a>
                <h4><b><?php echo $r['judul']; ?></b></h4>
                <p style="text-align: justify;"><?php echo $r['isi_berita']; ?></p>
                <p class="transparent-text"><?php echo $r['harga']; ?></p>
                <a href="#" class="btn btn-primary" onclick="showNotification()">Beli Sekarang</a>
                <br>
                <br>
                <br>
            </div>
        <?php   
        }
        ?>
        </div>
        <!-- Modal for Notification -->
        <div class="modal fade" id="notificationModal" tabindex="-1" aria-labelledby="notificationModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="notificationModalLabel">Pemberitahuan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Pembelian Anda telah berhasil diproses. Terima kasih telah berbelanja bersama kami!
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    // Function to show notification modal when buying accessories
    function showNotification() {
        $('#notificationModal').modal('show');
    }
</script>
<?php include 'component/footer.php'; ?>