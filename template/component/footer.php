    <style>
        .navbar-brand {
            font-size: 30px;
            font-weight: bold;
            margin-left: 20px;
            color: rgb(100, 0, 0)
        }

        .fixed-top {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
        }

        #selengkapnya {
            font-size: 20px; 
            cursor: pointer;
        }

        /* Efek border bottom pada link navbar saat kursor diarahkan */
        .navbar-nav .nav-link {
            position: relative;
        }

        .navbar-nav .nav-link::before {
            content: "";
            position: absolute;
            width: 100%;
            height: 2px;
            bottom: -2px;
            left: 0;
            background-color: transparent; /* Ubah warna sesuai kebutuhan */
            transition: background-color 0.3s ease;
        }

        .navbar-nav .nav-link:hover::before {
            background-color: #1679AB; /* Ubah warna sesuai kebutuhan */
        }

        .navbar {
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Tambahkan shadow di bawah navbar */
        }

        /* Gaya untuk tombol search */
        .btn-outline-success {
            color: #1679AB;
            border-color: #1679AB;
        }

        .btn-outline-success:hover {
            color: #fff;
            background-color: lightblue;
            border-color: lightblue;
        }

        .btn-outline-success:focus {
            color: #fff;
            background-color: #1679AB;
            border-color: #1679AB;
            box-shadow: 0 0 0 0.25rem #1679AB;
        }

        .btn-outline-success:active {
            color: #fff;
            background-color: #1679AB;
            border-color: #1679AB;
        }

        .text-center {
            text-align: center;
            font-size: 24px; /* Sesuaikan ukuran font */
            margin-top: 30px;
            margin-bottom: 30px; /* Beri margin bawah untuk jarak */
        }

        .konten-atas {
            font-size: 20px;
        }

        .kontenn {
            font-size: 20px;
            margin-bottom:40px;
        }

        .konten-bawah {
            font-size: 20px;
            margin-bottom: 40px;
            transition: transform 0.3s ease;
        }

        .detail {
          display: none;
        }

        .konten-bawah:hover {
            transform: scale(1.1);
        }

        /* Efek zoom pada gambar saat kursor diarahkan */
        .img-zoom {
            transition: transform 0.3s ease;
            margin-bottom: 10px;
        }

        .img-zoom:hover {
            transform: scale(1.1);
        }

        .transparent-text {
            opacity: 0.5; /* Atur nilai opacity sesuai keinginan (0-1) */
        }
        
        .footer {
          border-top: 1px solid;
        }

        .carousel-control-prev, .carousel-control-next {
            width: 3%; /* Atur lebar sesuai kebutuhan */
        }

        .carousel-control-prev-icon, .carousel-control-next-icon {
            display: inline-block;
            width: 100%;
            height: 100%;
            background-size: 100%, 100%;
            background-repeat: no-repeat;
            background-position: center;
        }

        .carousel-control-prev {
            left: 25px;
        }

        .carousel-control-next {
            right: 25px;
        }

        #image-slider {
            max-width: 1280px; /* Atur lebar maksimum sesuai kebutuhan */
            margin: 0 auto;  /* Agar slider berada di tengah halaman */
            padding: 10px; /* Tambahkan padding untuk ruang di dalam bingkai */
            border-radius: 10px; /* Opsional: Tambahkan sudut membulat pada bingkai */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Opsional: Tambahkan bayangan */
        }

        body {
            font-family: 'Roboto', sans-serif;
            padding-top: 60px; /* Tambahkan padding untuk menghindari navbar fixed */
        }

        .header-text {
            text-align: center;
        }

        .header-text h1 {
            font-family: 'Lora', serif; /* Font Lora untuk judul */
            font-size: 3rem; /* Ukuran font yang lebih besar untuk judul */
            color: #1679AB; /* Warna teks */
            font-weight: bold; /* Berat font */
        }
    </style>
</head>
<!-- footer start -->
    <div class="footer">
      <div class="text-center">
        &copy; 2024. <b style="color: #1679AB">Muria Cellular Technology</b> All Rights Reserved.
      </div>
    </div>
<!-- footer end -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>