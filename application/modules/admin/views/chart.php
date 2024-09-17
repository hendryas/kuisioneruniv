<body>
  <div class="app align-content-stretch d-flex flex-wrap">

    <?= $this->load->view('templates/leftbar/leftbar'); ?>

    <div class="app-container">
      <div class="search">
        <form>
          <input class="form-control" type="text" placeholder="Type here..." aria-label="Search">
        </form>
        <a href="#" class="toggle-search"><i class="material-icons">close</i></a>
      </div>

      <?= $this->load->view('templates/topbar/topbar'); ?>

      <div class="app-content">
        <div class="content-wrapper">
          <div class="container-fluid">
            <div class="row">
              <div class="col">
                <div class="page-description">
                  <h1>Data Pengguna Lulusan</h1>
                  <span>Data Pengguna Lulusan</span>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-6">
                <div class="card mb-4">
                  <div class="card-header">
                    <i class="fas fa-chart-bar me-1"></i>
                    Pengguna (Aspek)
                  </div>
                  <div class="card-body">
                    <p>Note :</p>
                    <ul>
                      <ol>Aspek 1 : Kesesuaian dengan Bidang Studi / Keahklian</ol>
                      <ol>Aspek 2 : Prestasi Akademik (Transkrip Nilai / IPK)</ol>
                      <ol>Aspek 3 : Keterampilan Praktis yang diperoleh selama kuliah</ol>
                      <ol>Aspek 4 : Asal Perguruan Tinggi / Reputasi Almamater</ol>
                      <ol>Aspek 5 : Pengalaman Kerja</ol>
                      <ol>Aspek 6 : Kemampuan Berbahasa Asing</ol>
                      <ol>Aspek 7 : Keterampilan Menggunakan Komputer</ol>
                      <ol>Aspek 8 : Rekomendasi / Pengantar dari Pihak Ketiga</ol>
                      <ol>Aspek 9 : Hasil Tes Penerimaan</ol>
                      <ol>Aspek 10 : Penampilan pada saat Wawancara</ol>
                      <ol>Aspek 11 : Daerah Asal</ol>
                    </ul>
                  </div>
                  <canvas id="myPenggunaAspek"></canvas>
                  <!-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> -->
                </div>
              </div>
              <div class="col-lg-6">
                <div class="card mb-4">
                  <div class="card-header">
                    <i class="fas fa-chart-pie me-1"></i>
                    Pengguna (Kepuasan)
                  </div>
                  <div class="card-body">
                    <p>Note :</p>
                    <ul>
                      <ol>Kepuasan 1 : Kerjasama Tim</ol>
                      <ol>Kepuasan 2 : Keahlian di bidang IT</ol>
                      <ol>Kepuasan 3 : Kemampuan berbahasa asing (Inggris)</ol>
                      <ol>Kepuasan 4 : Kemampuan Berkomunikasi</ol>
                      <ol>Kepuasan 5 : Pengembangan Diri</ol>
                      <ol>Kepuasan 6 : Kepemimpinan</ol>
                      <ol>Kepuasan 7 : Etos Kerja</ol>
                    </ul>
                  </div>
                  <canvas id="myPenggunaKepuasan"></canvas>
                  <!-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> -->
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-6">
                <div class="card mb-4">
                  <div class="card-header">
                    <i class="fas fa-chart-pie me-1"></i>
                    Alumni
                  </div>
                  <div class="card-body">
                    <p>Note :</p>
                    <ul>
                      <ol>Penguasaan 1 : Pengetahuan Umum</ol>
                      <ol>Penguasaan 2 : Bahasa Asing ( Inggris )</ol>
                      <ol>Penguasaan 3 : IPTEK</ol>
                      <ol>Penguasaan 4 : Metodelogi Penelitian</ol>
                      <ol>Penguasaan 5 : Kerjasama Tim</ol>
                      <ol>Penguasaan 6 : Keterampilan Komunikasi Lisan</ol>
                      <ol>Penguasaan 7 : Keterampilan Komunikasi Tertulis</ol>
                      <ol>Penguasaan 8 : Proses Pemberdayaan Masyarakat</ol>
                      <ol>Penguasaan 9 : Pengetahuan Teoritis Spesifik</ol>
                      <ol>Penguasaan 10 : Manajemen Organisasi</ol>
                      <ol>Penguasaan 11 : Kepemimpinan / Leadership</ol>
                    </ul>
                  </div>
                  <canvas id="myChart"></canvas>
                  <!-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


    </div>
  </div>


  <script>
    function validateInput(input) {
      // Menghapus karakter selain angka
      input.value = input.value.replace(/[^0-9]/g, '');
    }

    $(".flatpickr1").flatpickr();
  </script>

  <script>
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ["Penguasan 1", "Penguasan 2", "Penguasan 3", "Penguasan 4", "Penguasan 5", "Penguasan 6", "Penguasan 7", "Penguasan 8", "Penguasan 9", "Penguasan 10", "Penguasan 11"],
        datasets: [{
          label: '# of Votes',
          data: [<?php echo $alumni_penguasaan[0]['penguasaan']; ?>, <?php echo $alumni_penguasaan2[0]['penguasaan2']; ?>, <?php echo $alumni_penguasaan3[0]['penguasaan3']; ?>, <?php echo $alumni_penguasaan4[0]['penguasaan4']; ?>, <?php echo $alumni_penguasaan5[0]['penguasaan5']; ?>, <?php echo $alumni_penguasaan6[0]['penguasaan6']; ?>, <?php echo $alumni_penguasaan7[0]['penguasaan7']; ?>, <?php echo $alumni_penguasaan8[0]['penguasaan8']; ?>, <?php echo $alumni_penguasaan9[0]['penguasaan9']; ?>, <?php echo $alumni_penguasaan10[0]['penguasaan10']; ?>, <?php echo $alumni_penguasaan11[0]['penguasaan11']; ?>],
          backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 206, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(255, 159, 64, 0.2)'
          ],
          borderColor: [
            'rgba(255,99,132,1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)'
          ],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            }
          }]
        }
      }
    });
  </script>

  <script>
    var ctx = document.getElementById("myPenggunaAspek").getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ["Aspek 1", "Aspek 2", "Aspek 3", "Aspek 4", "Aspek 5", "Aspek 6", "Aspek 7", "Aspek 8", "Aspek 9", "Aspek 10", "Aspek 11"],
        datasets: [{
          label: '# of Votes',
          data: [<?php echo $pengguna_aspek[0]['aspek']; ?>, <?php echo $pengguna_aspek2[0]['aspek2']; ?>, <?php echo $pengguna_aspek3[0]['aspek3']; ?>, <?php echo $pengguna_aspek4[0]['aspek4']; ?>, <?php echo $pengguna_aspek5[0]['aspek5']; ?>, <?php echo $pengguna_aspek6[0]['aspek6']; ?>, <?php echo $pengguna_aspek7[0]['aspek7']; ?>, <?php echo $pengguna_aspek8[0]['aspek8']; ?>, <?php echo $pengguna_aspek9[0]['aspek9']; ?>, <?php echo $pengguna_aspek10[0]['aspek10']; ?>, <?php echo $pengguna_aspek11[0]['aspek11']; ?>],
          backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 206, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(255, 159, 64, 0.2)'
          ],
          borderColor: [
            'rgba(255,99,132,1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)'
          ],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            }
          }]
        }
      }
    });
  </script>

  <script>
    var ctx = document.getElementById("myPenggunaKepuasan").getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ["Kepuasan 1", "Kepuasan 2", "Kepuasan 3", "Kepuasan 4", "Kepuasan 5", "Kepuasan 6", "Kepuasan 7"],
        datasets: [{
          label: '# of Votes',
          data: [<?php echo $pengguna_kepuasan[0]['kepuasan']; ?>, <?php echo $pengguna_kepuasan2[0]['kepuasan2']; ?>, <?php echo $pengguna_kepuasan3[0]['kepuasan3']; ?>, <?php echo $pengguna_kepuasan4[0]['kepuasan4']; ?>, <?php echo $pengguna_kepuasan5[0]['kepuasan5']; ?>, <?php echo $pengguna_kepuasan6[0]['kepuasan6']; ?>, <?php echo $pengguna_kepuasan7[0]['kepuasan7']; ?>],
          backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 206, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(255, 159, 64, 0.2)'
          ],
          borderColor: [
            'rgba(255,99,132,1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)'
          ],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            }
          }]
        }
      }
    });
  </script>