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

              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h5 class="card-title">Table Pengguna Lulusan</h5>
                  </div>
                  <div class="card-body">
                    <p class="card-description"></p>
                    <div class="example-container">
                      <div class="example-content">
                        <table class="table">
                          <thead class="table-dark">
                            <tr>
                              <th scope="col">No.</th>
                              <th scope="col">Nama</th>
                              <th scope="col">Tempat</th>
                              <th scope="col">Phone</th>
                              <th scope="col">Email</th>
                              <th scope="col">Total Penguasaan</th>
                              <th scope="col">Masa Lulus</th>
                              <th scope="col" style="width: 100px;">Masa Bulan Dapat Pekerjaan</th>
                              <th scope="col">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($alumni as $peng) : ?>
                              <tr>
                                <th scope="row"><?php echo $no; ?></th>
                                <td><?php echo $peng['name'] ?></td>
                                <td><?php echo $peng['tempat'] ?></td>
                                <td><?php echo $peng['phone'] ?></td>
                                <td><?php echo $peng['email'] ?></td>
                                <td><?php echo $peng['totalpenguasaan'] ?></td>
                                <td><?php echo $peng['wt'] ?> Bulan</td>
                                <td>
                                  <?php echo date('Y') - (int)$peng['tl'] ?> Tahun
                                </td>
                                <td><a href="<?= base_url('cetakalumni/cetak_kuisioneralumni/') . $peng['id'] ?>" class="btn btn-primary btn-burger"><i class="material-icons">print</i></a> </td>
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

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <div class="row">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" id="nama" required>
          </div>
          <div class="row mt-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" name="username" id="username" required>
          </div>
          <div class="row mt-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" required>
          </div>
          <div class="row mt-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" class="form-control" name="phone" id="phone" oninput="validateInput(this)" required>
          </div>
          <div class="row mt-3">
            <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
            <input type="text" class="form-control flatpickr1" name="tgl_lahir" id="tgl_lahir" required>
          </div>
          <div class="row mt-3">
            <label for="gender" class="form-label">Gender</label>
            <select class="form-select" name="gender" id="gender" aria-label="Default select example">
              <option value="1">Laki-Laki</option>
              <option value="2">Perempuan</option>
            </select>
          </div>
          <div class="row mt-3">
            <label for="role" class="form-label">Role</label>
            <select class="form-select" name="role" id="role" aria-label="Default select example">
              <option value="2">Merchant</option>
              <option value="3">Customer</option>
            </select>
          </div>
          <div class="row mt-3">
            <label for="is_active" class="form-label">User Aktif</label>
            <select class="form-select" name="is_active" id="is_active" aria-label="Default select example">
              <option value="1">Aktif</option>
              <option value="2">Tidak Aktif</option>
            </select>
          </div>
          <div class="row mt-3">
            <label for="password" class="form-label">Password</label>
            <input type="text" class="form-control" name="password" id="password" required>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" name="btnSubmit" class="btn btn-primary">Simpan</button>
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