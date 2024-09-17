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
                  <h1>Hasil</h1>
                  <!-- <span>Data Pengguna Lulusan</span> -->
                </div>
              </div>
            </div>
            <div class="row">

              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h5 class="card-title">Table Hasil</h5>
                  </div>
                  <div class="card-body">
                    <p class="card-description"></p>
                    <div class="example-container">
                      <div class="example-content">
                        <table class="table">
                          <thead class="table-dark">
                            <tr>
                              <th scope="col">No.</th>
                              <th scope="col">Nama Alumni</th>
                              <th scope="col">Nama Pengguna</th>
                              <th scope="col">Rata-Rata Penguasan</th>
                              <th scope="col">Rata-Rata Aspek dan Kepuasan</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($data_hasil as $hasil) : ?>
                              <tr>
                                <th scope="row"><?php echo $no; ?></th>
                                <td>
                                  <?php if ($hasil['name'] == '') : ?>
                                    <p>-</p>
                                  <?php else : ?>
                                    <?php echo $hasil['name']; ?>
                                  <?php endif; ?>
                                </td>
                                <td>
                                  <?php if ($hasil['nama_pengguna'] == '') : ?>
                                    <p>-</p>
                                  <?php else : ?>
                                    <?php echo $hasil['nama_pengguna'] ?>
                                  <?php endif; ?>
                                </td>
                                <td>
                                  <?php if ($hasil['rata_rata_penguasan'] == '') : ?>
                                    <p>-</p>
                                  <?php else : ?>
                                    <?php echo $hasil['rata_rata_penguasan'] ?>
                                  <?php endif; ?>
                                </td>
                                <td>
                                  <?php if ($hasil['rata_rata_aspek_kepuasan'] == '') : ?>
                                    <p>-</p>
                                  <?php else : ?>
                                    <?php echo $hasil['rata_rata_aspek_kepuasan'] ?>
                                  <?php endif; ?>
                                </td>
                              </tr>
                              <?php $no++; ?>
                            <?php endforeach; ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
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