<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center  header-transparent ">
  <div class="container d-flex align-items-center justify-content-between">

    <div class="logo">
      <h1><a href="index.php">Teknik Informatika</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
    </div>


  </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-end align-items-center">
  <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

    <!-- Slide 1 -->
    <div class="carousel-item active">
      <div class="carousel-container">
        <h2 class=>Silahkan Isi<p>Tracer Study <span>khusus Pengguna Alumni</span></h2>
        <p class=>Bapak/Ibu/Saudara pengguna lulusan Teknik Informatika UMBJM yang terhormat, Kuisioner ini bertujuan
          untuk mengetahui kepuasan pengguna lulusan Teknik Informatika UMBJM dan sangat diperlukan untuk meningkatkan
          layanan pendidikan sekaligus untuk meningkatkan kualitas lulusan. Oleh karena itu mohon dengan hormat
          partisipasi Bapak/Ibu Saudara dalam mengisi kuisioner berikut. Atas perhatian dan kerjasamanya disampaikan
          terima kasih. Salam.
        <p>Petunjuk: Klik pada pilihan jawaban yang tersedia.</p>
        </p>
      </div>
      <form id="myForm" action="" class="row g-3">
        <div class="col-md-6">
          <label for="inputNA" class="form-label">Nama Alumni Informatika UMBJM</label>
          <input type="text" class="form-control" name="inputNA" id="inputNA">
        </div>
        <div class="col-md-6">
          <label for="inputNP" class="form-label">Nama Pengguna Lulusan</label>
          <input type="text" class="form-control" name="inputNP" id="inputNP">
        </div>
        <div class="col-md-6">
          <label for="inputNp" class="form-label">Nama Perusahaan</label>
          <input type="text" class="form-control" name="inputNp" id="inputNp">
        </div>
        <div class="col-6">
          <label for="inputAddress" class="form-label">Alamat Perusahaan / Instansi</label>
          <input type="text" class="form-control" name="inputAddress" id="inputAddress">
        </div>
        <div class="col-6">
          <label for="inputPhone" class="form-label">Nomor Telepon</label>
          <input type="number" class="form-control" name="inputPhone" id="inputPhone">
        </div>
        <div class="col-md-6">
          <label for="inputEmail" class="form-label">E-mail</label>
          <input type="email" class="form-control" name="inputEmail" id="inputEmail">
        </div>
        <div class="col-md-6">
          <label for="inputJenis" class="form-label">Jenis Perusahaan / Instansi</label>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="inputJenis" id="flexRadioDefault1" value="Perusahaan Swasta / Industri Swasta">
            <label class="form-check-label" for="flexRadioDefault1">Perusahaan Swasta / Industri Swasta</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="inputJenis" id="flexRadioDefault2" value="BUMN / Perusahaan milik Pemerintah">
            <label class="form-check-label" for="flexRadioDefault2">BUMN / Perusahaan milik Pemerintah</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="inputJenis" id="flexRadioDefault3" value="Pemerintah Daerah / Pusat">
            <label class="form-check-label" for="flexRadioDefault3">Pemerintah Daerah / Pusat</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="inputJenis" id="flexRadioDefault4" value="Lembaga Pendidikan Negeri">
            <label class="form-check-label" for="flexRadioDefault4">Lembaga Pendidikan Negeri</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="inputJenis" id="flexRadioDefault5" value="Lembaga Pendidikan Swasta">
            <label class="form-check-label" for="flexRadioDefault5">Lembaga Pendidikan Swasta</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="inputJenis" id="flexRadioDefault6">
            <label class="form-check-label" for="flexRadioDefault6">Lainnya</label>
          </div>
        </div>
        <div class="col-md-6">
          <label for="inputJumlah" class="form-label">Jumlah Karyawan Lulusan Informatika UMBJM</label>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="inputJumlah" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
              < dari 3 Orang </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="inputJumlah" id="flexRadioDefault2">
            <label class="form-check-label" for="flexRadioDefault2"> 3 - 5 Orang </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="inputJumlah" id="flexRadioDefault3">
            <label class="form-check-label" for="flexRadioDefault3"> 6 - 10 Orang </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="inputJumlah" id="flexRadioDefault4">
            <label class="form-check-label" for="flexRadioDefault4"> > dari 10 Orang </label>
          </div>
        </div>

        <!-- ======= Aspek Dalam Penerimaan Karyawan ======= -->
        <h3 class=>Aspek Dalam Penerimaan Karyawan</h3>
        <div class="col-md-6">
          <label for="aspek" class="form-label">Kesesuaian dengan Bidang Studi / Keahklian</label>
        </div>
        <div class="col-md-6">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="aspek" id="inlineRadio1" value="4">
            <label class="form-check-label" for="inlineRadio1">Sangat Penting</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="aspek" id="inlineRadio2" value="3">
            <label class="form-check-label" for="inlineRadio2">Penting</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="aspek" id="inlineRadio3" value="2">
            <label class="form-check-label" for="inlineRadio3">Cukup Penting</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="aspek" id="inlineRadio3" value="1">
            <label class="form-check-label" for="inlineRadio4">Kurang Penting</label>
          </div>
        </div>

        <div class="col-md-6">
          <label for="aspek2" class="form-label">Prestasi Akademik (Transkrip Nilai / IPK)</label>
        </div>
        <div class="col-md-6">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="aspek2" id="inlineRadio1" value="4">
            <label class="form-check-label" for="inlineRadio1">Sangat Penting</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="aspek2" id="inlineRadio2" value="3">
            <label class="form-check-label" for="inlineRadio2">Penting</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="aspek2" id="inlineRadio3" value="2">
            <label class="form-check-label" for="inlineRadio3">Cukup Penting</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="aspek2" id="inlineRadio3" value="1">
            <label class="form-check-label" for="inlineRadio4">Kurang Penting</label>
          </div>
        </div>

        <div class="col-md-6">
          <label for="aspek3" class="form-label">Keterampilan Praktis yang diperoleh selama kuliah</label>
        </div>
        <div class="col-md-6">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="aspek3" id="inlineRadio1" value="4">
            <label class="form-check-label" for="inlineRadio1">Sangat Penting</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="aspek3" id="inlineRadio2" value="3">
            <label class="form-check-label" for="inlineRadio2">Penting</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="aspek3" id="inlineRadio3" value="2">
            <label class="form-check-label" for="inlineRadio3">Cukup Penting</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="aspek3" id="inlineRadio3" value="1">
            <label class="form-check-label" for="inlineRadio4">Kurang Penting</label>
          </div>
        </div>

        <div class="col-md-6">
          <label for="aspek4" class="form-label">Asal Perguruan Tinggi / Reputasi Almamater</label>
        </div>
        <div class="col-md-6">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="aspek4" id="inlineRadio1" value="4">
            <label class="form-check-label" for="inlineRadio1">Sangat Penting</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="aspek4" id="inlineRadio2" value="3">
            <label class="form-check-label" for="inlineRadio2">Penting</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="aspek4" id="inlineRadio3" value="2">
            <label class="form-check-label" for="inlineRadio3">Cukup Penting</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="aspek4" id="inlineRadio3" value="1">
            <label class="form-check-label" for="inlineRadio4">Kurang Penting</label>
          </div>
        </div>

        <div class="col-md-6">
          <label for="aspek5" class="form-label">Pengalaman Kerja</label>
        </div>
        <div class="col-md-6">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="aspek5" id="inlineRadio1" value="4">
            <label class="form-check-label" for="inlineRadio1">Sangat Penting</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="aspek5" id="inlineRadio2" value="3">
            <label class="form-check-label" for="inlineRadio2">Penting</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="aspek5" id="inlineRadio3" value="2">
            <label class="form-check-label" for="inlineRadio3">Cukup Penting</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="aspek5" id="inlineRadio3" value="1">
            <label class="form-check-label" for="inlineRadio4">Kurang Penting</label>
          </div>
        </div>

        <div class="col-md-6">
          <label for="aspek6" class="form-label">Kemampuan Berbahasa Asing</label>
        </div>
        <div class="col-md-6">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="aspek6" id="inlineRadio1" value="4">
            <label class="form-check-label" for="inlineRadio1">Sangat Penting</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="aspek6" id="inlineRadio2" value="3">
            <label class="form-check-label" for="inlineRadio2">Penting</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="aspek6" id="inlineRadio3" value="2">
            <label class="form-check-label" for="inlineRadio3">Cukup Penting</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="aspek6" id="inlineRadio3" value="1">
            <label class="form-check-label" for="inlineRadio4">Kurang Penting</label>
          </div>
        </div>

        <div class="col-md-6">
          <label for="aspek7" class="form-label">Keterampilan Menggunakan Komputer</label>
        </div>
        <div class="col-md-6">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="aspek7" id="inlineRadio1" value="4">
            <label class="form-check-label" for="inlineRadio1">Sangat Penting</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="aspek7" id="inlineRadio2" value="3">
            <label class="form-check-label" for="inlineRadio2">Penting</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="aspek7" id="inlineRadio3" value="2">
            <label class="form-check-label" for="inlineRadio3">Cukup Penting</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="aspek7" id="inlineRadio3" value="1">
            <label class="form-check-label" for="inlineRadio4">Kurang Penting</label>
          </div>
        </div>

        <div class="col-md-6">
          <label for="aspek8" class="form-label">Rekomendasi / Pengantar dari Pihak Ketiga</label>
        </div>
        <div class="col-md-6">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="aspek8" id="inlineRadio1" value="4">
            <label class="form-check-label" for="inlineRadio1">Sangat Penting</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="aspek8" id="inlineRadio2" value="3">
            <label class="form-check-label" for="inlineRadio2">Penting</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="aspek8" id="inlineRadio3" value="2">
            <label class="form-check-label" for="inlineRadio3">Cukup Penting</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="aspek8" id="inlineRadio3" value="1">
            <label class="form-check-label" for="inlineRadio4">Kurang Penting</label>
          </div>
        </div>

        <div class="col-md-6">
          <label for="aspek9" class="form-label">Hasil Tes Penerimaan</label>
        </div>
        <div class="col-md-6">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="aspek9" id="inlineRadio1" value="4">
            <label class="form-check-label" for="inlineRadio1">Sangat Penting</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="aspek9" id="inlineRadio2" value="3">
            <label class="form-check-label" for="inlineRadio2">Penting</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="aspek9" id="inlineRadio3" value="2">
            <label class="form-check-label" for="inlineRadio3">Cukup Penting</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="aspek9" id="inlineRadio3" value="1">
            <label class="form-check-label" for="inlineRadio4">Kurang Penting</label>
          </div>
        </div>

        <div class="col-md-6">
          <label for="aspek10" class="form-label">Penampilan pada saat Wawancara</label>
        </div>
        <div class="col-md-6">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="aspek10" id="inlineRadio1" value="4">
            <label class="form-check-label" for="inlineRadio1">Sangat Penting</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="aspek10" id="inlineRadio2" value="3">
            <label class="form-check-label" for="inlineRadio2">Penting</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="aspek10" id="inlineRadio3" value="2">
            <label class="form-check-label" for="inlineRadio3">Cukup Penting</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="aspek10" id="inlineRadio3" value="1">
            <label class="form-check-label" for="inlineRadio4">Kurang Penting</label>
          </div>
        </div>

        <div class="col-md-6">
          <label for="aspek11" class="form-label">Daerah Asal</label>
        </div>
        <div class="col-md-6">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="aspek11" id="inlineRadio1" value="4">
            <label class="form-check-label" for="inlineRadio1">Sangat Penting</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="aspek11" id="inlineRadio2" value="3">
            <label class="form-check-label" for="inlineRadio2">Penting</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="aspek11" id="inlineRadio3" value="2">
            <label class="form-check-label" for="inlineRadio3">Cukup Penting</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="aspek11" id="inlineRadio3" value="1">
            <label class="form-check-label" for="inlineRadio4">Kurang Penting</label>
          </div>
        </div>

        <!-- ======= Kepuasan Pengguna Lulusan ======= -->
        <h3 class=>Kepuasan Pengguna Lulusan</h3>
        <div class="col-md-6">
          <label for="kepuasan" class="form-label">Kerjasama Tim</label>
        </div>
        <div class="col-md-6">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="kepuasan" id="inlineRadio1" value="4">
            <label class="form-check-label" for="inlineRadio1">Sangat Baik</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="kepuasan" id="inlineRadio2" value="3">
            <label class="form-check-label" for="inlineRadio2">Baik</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="kepuasan" id="inlineRadio3" value="2">
            <label class="form-check-label" for="inlineRadio3">Cukup Baik</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="kepuasan" id="inlineRadio3" value="1">
            <label class="form-check-label" for="inlineRadio4">Kurang Baik</label>
          </div>
        </div>

        <div class="col-md-6">
          <label for="kepuasan2" class="form-label">Keahlian di bidang IT</label>
        </div>
        <div class="col-md-6">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="kepuasan2" id="inlineRadio1" value="4">
            <label class="form-check-label" for="inlineRadio1">Sangat Baik</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="kepuasan2" id="inlineRadio2" value="3">
            <label class="form-check-label" for="inlineRadio2">Baik</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="kepuasan2" id="inlineRadio3" value="2">
            <label class="form-check-label" for="inlineRadio3">Cukup Baik</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="kepuasan2" id="inlineRadio3" value="1">
            <label class="form-check-label" for="inlineRadio4">Kurang Baik</label>
          </div>
        </div>

        <div class="col-md-6">
          <label for="kepuasan3" class="form-label">Kemampuan berbahasa asing (Inggris)</label>
        </div>
        <div class="col-md-6">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="kepuasan3" id="inlineRadio1" value="4">
            <label class="form-check-label" for="inlineRadio1">Sangat Baik</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="kepuasan3" id="inlineRadio2" value="3">
            <label class="form-check-label" for="inlineRadio2">Baik</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="kepuasan3" id="inlineRadio3" value="2">
            <label class="form-check-label" for="inlineRadio3">Cukup Baik</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="kepuasan3" id="inlineRadio3" value="1">
            <label class="form-check-label" for="inlineRadio4">Kurang Baik</label>
          </div>
        </div>

        <div class="col-md-6">
          <label for="kepuasan4" class="form-label">Kemampuan Berkomunikasi</label>
        </div>
        <div class="col-md-6">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="kepuasan4" id="inlineRadio1" value="4">
            <label class="form-check-label" for="inlineRadio1">Sangat Baik</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="kepuasan4" id="inlineRadio2" value="3">
            <label class="form-check-label" for="inlineRadio2">Baik</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="kepuasan4" id="inlineRadio3" value="2">
            <label class="form-check-label" for="inlineRadio3">Cukup Baik</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="kepuasan4" id="inlineRadio3" value="1">
            <label class="form-check-label" for="inlineRadio4">Kurang Baik</label>
          </div>
        </div>

        <div class="col-md-6">
          <label for="kepuasan5" class="form-label">Pengembangan Diri</label>
        </div>
        <div class="col-md-6">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="kepuasan5" id="inlineRadio1" value="4">
            <label class="form-check-label" for="inlineRadio1">Sangat Baik</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="kepuasan5" id="inlineRadio2" value="3">
            <label class="form-check-label" for="inlineRadio2">Baik</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="kepuasan5" id="inlineRadio3" value="2">
            <label class="form-check-label" for="inlineRadio3">Cukup Baik</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="kepuasan5" id="inlineRadio3" value="1">
            <label class="form-check-label" for="inlineRadio4">Kurang Baik</label>
          </div>
        </div>

        <div class="col-md-6">
          <label for="kepuasan6" class="form-label">Kepemimpinan</label>
        </div>
        <div class="col-md-6">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="kepuasan6" id="inlineRadio1" value="4">
            <label class="form-check-label" for="inlineRadio1">Sangat Baik</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="kepuasan6" id="inlineRadio2" value="3">
            <label class="form-check-label" for="inlineRadio2">Baik</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="kepuasan6" id="inlineRadio3" value="2">
            <label class="form-check-label" for="inlineRadio3">Cukup Baik</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="kepuasan6" id="inlineRadio3" value="1">
            <label class="form-check-label" for="inlineRadio4">Kurang Baik</label>
          </div>
        </div>

        <div class="col-md-6">
          <label for="kepuasan7" class="form-label">Etos Kerja</label>
        </div>
        <div class="col-md-6">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="kepuasan7" id="inlineRadio1" value="4">
            <label class="form-check-label" for="inlineRadio1">Sangat Baik</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="kepuasan7" id="inlineRadio2" value="3">
            <label class="form-check-label" for="inlineRadio2">Baik</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="kepuasan7" id="inlineRadio3" value="2">
            <label class="form-check-label" for="inlineRadio3">Cukup Baik</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="kepuasan7" id="inlineRadio3" value="1">
            <label class="form-check-label" for="inlineRadio4">Kurang Baik</label>
          </div>
        </div>

        <div class="form-floating">
          <input class="form-control" name="kdans" id="floatingTextarea2" style="height: 100px"></input>
          <label for="floatingTextarea2">Kritik / Saran</label>
        </div>
        <button name="btnSubmit" class="btn btn-outline-primary">Submit!</button>
      </form>
    </div>



  </div>

  <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
    <defs>
      <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
    </defs>
    <g class="wave1">
      <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
    </g>
    <g class="wave2">
      <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
    </g>
    <g class="wave3">
      <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
    </g>
  </svg>

</section><!-- End Hero -->

<script>
  $("button[name='btnSubmit']").click(function(e) {
    e.preventDefault();
    // let url = $("input[name=input_url]").val().trim();
    // let title = $("input[name=input_title]").val().trim();
    // let icon = $("input[name=input_icon]").val().trim();
    // console.log(url);
    // console.log(title);
    // console.log(icon);

    // let formData = new FormData();
    // formData.append("url", url);
    // formData.append("title", title);
    // formData.append("icon", icon);

    Swal.fire({
      title: "Apakah Anda Yakin?",
      text: "Ingin Menyimpan Data!",
      icon: "question",
      showCancelButton: true,
      confirmButtonColor: "#19A87E",
      cancelButtonColor: "#ff3d60",
      confirmButtonText: "Ya, Lanjutkan!",
    }).then((result) => {
      if (result.isConfirmed) {
        $.ajax({
          url: "kuisionerpengguna/insert_data/kuisionerpengguna.php",
          method: "POST",
          data: $("#myForm").serialize(),
          beforeSend: () => {
            $.LoadingOverlay("show");
          },
          complete: () => {
            $.LoadingOverlay("hide");
          },
          success: (response) => {
            let obj = JSON.parse(response);
            if (obj.status == "OK") {
              Swal.fire("Sukses!", obj.message, "success").then(() => {
                // window.location.reload();
                window.location.href = "kuisionerpengguna/cetak_kuisionerpengguna/kuisionerpengguna.php";
              });
            } else {
              Swal.fire("Oops!", obj.message, "error");
            }
          },
          error: (error) => {
            Swal.fire("Oops!", "Error!", "error");
          },
        });
      }
    });

  });
</script>