<!-- ======= Header ======= -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/css/bootstrap-datepicker.min.css">
<header id="header" class="fixed-top d-flex align-items-center  header-transparent ">
  <div class="container d-flex align-items-center justify-content-between">

    <div class="logo">
      <h1><a href="index.php">Teknik Informatika</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
    </div>


  </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-end align-items-center">
  <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

    <!-- Slide 1 -->
    <div class="carousel-item active">
      <div class="carousel-container">
        <h2 class=>Silahkan Isi <p>Tracer Study <span>khusus Alumni</span></h2>
        <p class=>Kepada saudara yang merupakan lulusan Teknik Informatika UMBJM yang terhormat, Kuisioner ini
          bertujuan untuk mengetahui kepuasan pengguna lulusan Teknik Informatika UMBJM dan sangat diperlukan untuk
          meningkatkan layanan pendidikan sekaligus untuk meningkatkan kualitas lulusan. Oleh karena itu mohon dengan
          hormat partisipasi Bapak/Ibu Saudara dalam mengisi kuisioner berikut. Atas perhatian dan kerjasamanya
          disampaikan terima kasih. Salam.
        <p>Petunjuk: Klik pada pilihan jawaban yang tersedia.</p>
        </p>
      </div>
      <form id="myForm" action="" class="row g-3">
        <div class="col-md-6">
          <label for="name" class="form-label">Nama</label>
          <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="col-md-6">
          <label for="ttl" class="form-label">Tempat, Tanggal Lahir</label>
          <input type="text" class="form-control" id="ttl" name="tempat">
          <input type="date" class="form-control" id="ttl" name="tanggal">
        </div>
        <div class="col-6">
          <label for="alamat" class="form-label">Alamat</label>
          <input type="text" class="form-control" id="alamat" name="alamat">
        </div>
        <div class="col-6">
          <label for="phone" class="form-label">Nomor Telepon</label>
          <input type="number" class="form-control" id="phone" name="phone">
        </div>
        <div class="col-md-6">
          <label for="jk" class="form-label">Jenis Kelamin</label>
          <div class="form-check">
            <input class="form-check-input" type="radio" value="L" id="flexRadioDefault1" name="jk">
            <label class="form-check-label" for="flexRadioDefault1">Laki-laki</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" value="P" id="flexRadioDefault2" name="jk">
            <label class="form-check-label" for="flexRadioDefault2">Perempuan</label>
          </div>
        </div>
        <div class="col-md-6">
          <label for="sosmed" class="form-label">Sosial Media</label>
          <input type="url" class="form-control" placeholder="http://www." required name="sosmed">
        </div>
        <div class="col-md-6">
          <label for="email" class="form-label">E-mail</label>
          <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="col-md-6">
          <label for="tm" class="form-label">Tahun Masuk</label>
          <input type="number" placeholder="YYYY" min="2016" max="2050" class="form-control" id="tm" name="tm">
        </div>
        <div class="col-md-6">
          <label for="tl" class="form-label">Tahun Lulus</label>
          <input type="number" placeholder="YYYY" min="2016" max="2050" class="form-control" id="tl" name="tl">
        </div>
        <div class="col-md-6">
          <label for="lms" class="form-label">Lama Studi (Tahun, Bulan)</label>
          <!-- <input type="text" class="form-control" id="lms" name="lms"> -->
          <!-- <input type="text" id="month" name="month" class="monthPicker" /> -->
          <input type="month" id="lms" name="lms" class="form-control">
        </div>
        <div class="col-md-6">
          <label for="wt" class="form-label">Waktu tunggu memperoleh pekerjaan pertama (Bulan)</label>
          <input type="text" class="form-control" id="wt" name="wt">
        </div>

        <!-- ======= Penguasaan Kompetensi Individu ======= -->
        <h3 class=>Penguasaan Kompetensi Individu</h3>
        <div class="col-md-6">
          <label for="penguasaan" class="form-label">Pengetahuan Umum</label>
        </div>
        <div class="col-md-6">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="penguasaan" id="inlineRadio1" value="4">
            <label class="form-check-label" for="inlineRadio1">Sangat Menguasai</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="penguasaan" id="inlineRadio2" value="3">
            <label class="form-check-label" for="inlineRadio2">Menguasai</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="penguasaan" id="inlineRadio3" value="2">
            <label class="form-check-label" for="inlineRadio3">Kurang</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="penguasaan" id="inlineRadio3" value="1">
            <label class="form-check-label" for="inlineRadio4">Tidak Menguasai</label>
          </div>
        </div>

        <div class="col-md-6">
          <label for="penguasaan2" class="form-label">Bahasa Asing ( Inggris )</label>
        </div>
        <div class="col-md-6">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="penguasaan2" id="inlineRadio1" value="4">
            <label class="form-check-label" for="inlineRadio1">Sangat Menguasai</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="penguasaan2" id="inlineRadio2" value="3">
            <label class="form-check-label" for="inlineRadio2">Menguasai</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="penguasaan2" id="inlineRadio3" value="2">
            <label class="form-check-label" for="inlineRadio3">Kurang</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="penguasaan2" id="inlineRadio3" value="1">
            <label class="form-check-label" for="inlineRadio4">Tidak Menguasai</label>
          </div>
        </div>

        <div class="col-md-6">
          <label for="penguasaan3" class="form-label">IPTEK</label>
        </div>
        <div class="col-md-6">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="penguasaan3" id="inlineRadio1" value="4">
            <label class="form-check-label" for="inlineRadio1">Sangat Menguasai</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="penguasaan3" id="inlineRadio2" value="3">
            <label class="form-check-label" for="inlineRadio2">Menguasai</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="penguasaan3" id="inlineRadio3" value="2">
            <label class="form-check-label" for="inlineRadio3">Kurang</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="penguasaan3" id="inlineRadio3" value="1">
            <label class="form-check-label" for="inlineRadio4">Tidak Menguasai</label>
          </div>
        </div>

        <div class="col-md-6">
          <label for="penguasaan4" class="form-label">Metodelogi Penelitian</label>
        </div>
        <div class="col-md-6">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="penguasaan4" id="inlineRadio1" value="4">
            <label class="form-check-label" for="inlineRadio1">Sangat Menguasai</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="penguasaan4" id="inlineRadio2" value="3">
            <label class="form-check-label" for="inlineRadio2">Menguasai</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="penguasaan4" id="inlineRadio3" value="2">
            <label class="form-check-label" for="inlineRadio3">Kurang</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="penguasaan4" id="inlineRadio3" value="1">
            <label class="form-check-label" for="inlineRadio4">Tidak Menguasai</label>
          </div>
        </div>

        <div class="col-md-6">
          <label for="penguasaan5" class="form-label">Kerjasama Tim</label>
        </div>
        <div class="col-md-6">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="penguasaan5" id="inlineRadio1" value="4">
            <label class="form-check-label" for="inlineRadio1">Sangat Menguasai</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="penguasaan5" id="inlineRadio2" value="3">
            <label class="form-check-label" for="inlineRadio2">Menguasai</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="penguasaan5" id="inlineRadio3" value="2">
            <label class="form-check-label" for="inlineRadio3">Kurang</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="penguasaan5" id="inlineRadio3" value="1">
            <label class="form-check-label" for="inlineRadio4">Tidak Menguasai</label>
          </div>
        </div>

        <div class="col-md-6">
          <label for="penguasaan6" class="form-label">Keterampilan Komunikasi Lisan</label>
        </div>
        <div class="col-md-6">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="penguasaan6" id="inlineRadio1" value="4">
            <label class="form-check-label" for="inlineRadio1">Sangat Menguasai</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="penguasaan6" id="inlineRadio2" value="3">
            <label class="form-check-label" for="inlineRadio2">Menguasai</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="penguasaan6" id="inlineRadio3" value="2">
            <label class="form-check-label" for="inlineRadio3">Kurang</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="penguasaan6" id="inlineRadio3" value="1">
            <label class="form-check-label" for="inlineRadio4">Tidak Menguasai</label>
          </div>
        </div>

        <div class="col-md-6">
          <label for="penguasaan7" class="form-label">Keterampilan Komunikasi Tertulis</label>
        </div>
        <div class="col-md-6">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="penguasaan7" id="inlineRadio1" value="4">
            <label class="form-check-label" for="inlineRadio1">Sangat Menguasai</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="penguasaan7" id="inlineRadio2" value="3">
            <label class="form-check-label" for="inlineRadio2">Menguasai</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="penguasaan7" id="inlineRadio3" value="2">
            <label class="form-check-label" for="inlineRadio3">Kurang</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="penguasaan7" id="inlineRadio3" value="1">
            <label class="form-check-label" for="inlineRadio4">Tidak Menguasai</label>
          </div>
        </div>

        <div class="col-md-6">
          <label for="penguasaan8" class="form-label">Proses Pemberdayaan Masyarakat</label>
        </div>
        <div class="col-md-6">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="penguasaan8" id="inlineRadio1" value="4">
            <label class="form-check-label" for="inlineRadio1">Sangat Menguasai</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="penguasaan8" id="inlineRadio2" value="3">
            <label class="form-check-label" for="inlineRadio2">Menguasai</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="penguasaan8" id="inlineRadio3" value="2">
            <label class="form-check-label" for="inlineRadio3">Kurang</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="penguasaan8" id="inlineRadio3" value="1">
            <label class="form-check-label" for="inlineRadio4">Tidak Menguasai</label>
          </div>
        </div>

        <div class="col-md-6">
          <label for="penguasaan9" class="form-label">Pengetahuan Teoritis Spesifik</label>
        </div>
        <div class="col-md-6">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="penguasaan9" id="inlineRadio1" value="4">
            <label class="form-check-label" for="inlineRadio1">Sangat Menguasai</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="penguasaan9" id="inlineRadio2" value="3">
            <label class="form-check-label" for="inlineRadio2">Menguasai</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="penguasaan9" id="inlineRadio3" value="2">
            <label class="form-check-label" for="inlineRadio3">Kurang</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="penguasaan9" id="inlineRadio3" value="1">
            <label class="form-check-label" for="inlineRadio4">Tidak Menguasai</label>
          </div>
        </div>

        <div class="col-md-6">
          <label for="penguasaan10" class="form-label">Manajemen Organisasi</label>
        </div>
        <div class="col-md-6">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="penguasaan10" id="inlineRadio1" value="4">
            <label class="form-check-label" for="inlineRadio1">Sangat Menguasai</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="penguasaan10" id="inlineRadio2" value="3">
            <label class="form-check-label" for="inlineRadio2">Menguasai</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="penguasaan10" id="inlineRadio3" value="2">
            <label class="form-check-label" for="inlineRadio3">Kurang</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="penguasaan10" id="inlineRadio3" value="1">
            <label class="form-check-label" for="inlineRadio4">Tidak Menguasai</label>
          </div>
        </div>

        <div class="col-md-6">
          <label for="penguasaan11" class="form-label">Kepemimpinan / Leadership</label>
        </div>
        <div class="col-md-6">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="penguasaan11" id="inlineRadio1" value="4">
            <label class="form-check-label" for="inlineRadio1">Sangat Menguasai</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="penguasaan11" id="inlineRadio2" value="3">
            <label class="form-check-label" for="inlineRadio2">Menguasai</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="penguasaan11" id="inlineRadio3" value="2">
            <label class="form-check-label" for="inlineRadio3">Kurang</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="penguasaan11" id="inlineRadio3" value="1">
            <label class="form-check-label" for="inlineRadio4">Tidak Menguasai</label>
          </div>
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
          url: "kuisioneralumni/insert_data/kuisioneralumni.php",
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
                window.location.href = "kuisioneralumni/cetak_kuisioneralumni/kuisioneralumni.php";
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

<script type="text/javascript">
  $(document).ready(function() {
    $(".monthPicker").datepicker({
      dateFormat: 'yyyy-mm-dd',
      changeMonth: true,
      changeYear: true,
      showButtonPanel: true,

      onClose: function(dateText, inst) {
        var month = $("#ui-datepicker-div .ui-datepicker-month :selected").val();
        var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
        $(this).val($.datepicker.formatDate('MM yy', new Date(year, month, 1)));
      }
    });

    $(".monthPicker").focus(function() {
      $(".ui-datepicker-calendar").hide();
      $("#ui-datepicker-div").position({
        my: "center top",
        at: "center bottom",
        of: $(this)
      });
    });
  });
</script>