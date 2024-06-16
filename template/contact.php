<?php 
include 'component/header.php'; 
$koneksi = mysqli_connect("localhost", "root", "", "db_dpw1");

if (mysqli_connect_errno()) {
    echo "Koneksi database gagal: " . mysqli_connect_error();
}
?>
<body>
    <div class="container">
        <div class="text-center">
        <div class="header-text">
            <h1>Contact</h1>
        </div>
            <p class="lead">Kami ingin mendengar pendapat Anda! Hubungi kami menggunakan formulir di bawah ini.</p>
            <hr>
        </div>
        <div class="row mt-5">
            <div class="col-md-6">
                <h2 style="font-family: Arial, sans-serif; font-weight: bold;">Hubungi kami</h2>
                <p style="text-align: justify;">Jika Anda memiliki pertanyaan, umpan balik, atau pertanyaan, silakan isi formulir dan kami akan menghubungi Anda sesegera mungkin.</p>
                <form id="myForm" method="post" action="template/aksi.php?mod=tambah">
                    <div class="mb-3">
                        <label for="nama">Nama:</label>
                        <input type="text" class="form-control" id="nama" name="nama" style="background-color:rgba(212, 212, 212, 0.77)" required>
                    </div>
                    <div class="mb-3">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" style="background-color:rgba(212, 212, 212, 0.77)" required>
                    </div>
                    <div class="mb-3">
                        <label for="subjek">Subjek:</label>
                        <input type="text" class="form-control" id="subjek" name="subjek" style="background-color:rgba(212, 212, 212, 0.77)" required>
                    </div>
                    <div class="mb-3">
                        <label for="pesan">Pesan:</label>
                        <textarea class="form-control" id="pesan" name="pesan" rows="5" style="background-color:rgba(212, 212, 212, 0.77)" required></textarea>
                    </div>
                    <input type="submit" class="btn btn-primary mt-3" name="submit" value="Kirim Pesan">
                </form>
            </div>
            <!-- Modal for Notification Start -->
            <div class="modal fade" id="notificationModal" tabindex="-1" aria-labelledby="notificationModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="notificationModalLabel">Pemberitahuan</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Terima kasih! Formulir Anda telah berhasil dikirim. Kami akan menghubungi Anda sesegera mungkin. Harap periksa email Anda untuk konfirmasi lebih lanjut.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal for Notification End -->
            <div class="col-md-6">
                <h2 style="font-family: Arial, sans-serif; font-weight: bold;">Kunjungi Kami</h2>
                <p style="text-align: justify;">Anda juga dapat mengunjungi kami di kantor kami. Kami berlokasi di:</p>
                <p style="text-align: justify;">
                    <strong>Alamat:</strong> Perumahan Cemara Regency Jl. Urip Sumoharjo No. 1A, Gumilir, Kec. Cilacap Utara, Kab. Cilacap, Jawa Tengah (53231)<br>
                    <strong>Nomor Telepon:</strong> (+62) 8562962607<br>
                    <strong>Email:</strong> muriacellulartechnology@gmail.com
                </p>
                <div style="border-radius: 10px; overflow: hidden; box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.12554086539168!2d109.0485510622514!3d-7.682216985482359!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e656cd9b5f92515%3A0xeca2de93a7071067!2sMuria%20Cell%20Cilacap!5e0!3m2!1sid!2sid!4v1718267935349!5m2!1sid!2sid" 
                    width="650" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
    <br>
</body>
<script>
    // Function to show notification modal when exploring technology innovations
    function showNotification() {
        $('#notificationModal').modal('show');
    }
</script>
<?php include 'component/footer.php'; ?>
