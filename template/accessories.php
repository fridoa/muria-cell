<?php 
include 'component/header.php'; 
$koneksi = mysqli_connect("localhost","root","","db_dpw1");

if(mysqli_connect_errno()){
    echo "Koneksi database gagal: " . mysqli_connect_error();
}
?>
<body>
    <div class="container">
        <div class="text-center">
            <div class="header-text">
            <h1>Accessories</h1>
            </div>
            <p class="lead">Temukan aksesoris terbaik untuk perangkat Anda!</p>
            <hr>
        </div>
        <div class="row mt-5">
            <div class="col-md-6">
                <h2 style="font-family: Arial, sans-serif; font-weight: bold;">Aksesoris Berkualitas Tinggi</h2>
                <p style="text-align: justify; font-size: 17.2px;">Setiap Aksesoris dirancang dengan perhatian terhadap detail dan kualitas, memastikan Anda mendapatkan produk yang tidak hanya fungsional tetapi juga stylish. 
                    Casing kami memberikan perlindungan maksimal dengan desain yang menarik, sementara pengisi daya cepat kami memastikan perangkat Anda selalu siap digunakan kapan saja. 
                    Jangan lewatkan juga headphone terbaru kami yang menawarkan kualitas suara superior untuk pengalaman audio yang mengesankan.</p>
                <p style="text-align: justify; font-size: 17.2px;">Temukan Aksesoris yang Sesuai dengan Kebutuhan Anda. Baik Anda mencari casing pelindung yang elegan atau headphone dengan teknologi suara terkini, 
                    kami memiliki sesuatu untuk semua orang. Eksplorasi berbagai pilihan aksesori kami dan tingkatkan pengalaman menggunakan smartphone Anda ke level berikutnya.</p>
            </div>
            <div class="col-md-6">
                <img src="assets/img/image/54.png" style="border-radius: 10px; width: 100%;" alt="Accessories Image" class="img-fluid">
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-12">
                <hr>
                <h1 style="text-align: center; color: #1679AB; font-family: Arial, sans-serif; font-weight: bold;">Featured Accessories</h1>
            </div>
            <div class="row align-items-start">
        <?php
        $no = 1;
        $data = mysqli_query($koneksi, "SELECT * FROM tbl_berita WHERE kategori = 'accessories'");

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
            </div>
        <?php   
        }
        ?>
        </div>
        </div>
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
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style=>Tutup</button>
                </div>
            </div>
        </div>
    </div>
    <br>
</body>
<script>
    // Function to show notification modal when buying accessories
    function showNotification() {
        $('#notificationModal').modal('show');
    }
</script>

<?php include 'component/footer.php'; ?>
