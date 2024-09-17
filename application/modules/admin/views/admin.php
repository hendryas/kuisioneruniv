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
          <div class="container">
            <div class="row">
              <div class="col">
                <div class="page-description">
                  <h1>Dashboard</h1>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-4">
                <div class="card widget widget-stats">
                  <div class="card-body">
                    <div class="widget-stats-container d-flex">
                      <div class="widget-stats-icon widget-stats-icon-warning">
                        <i class="material-icons-outlined">person</i>
                      </div>
                      <div class="widget-stats-content flex-fill">
                        <span class="widget-stats-title">Total Alumni</span>
                        <span class="widget-stats-amount"><?php echo count($total_alumi) ?></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4">
                <div class="card widget widget-stats">
                  <div class="card-body">
                    <div class="widget-stats-container d-flex">
                      <div class="widget-stats-icon widget-stats-icon-warning">
                        <i class="material-icons-outlined">person</i>
                      </div>
                      <div class="widget-stats-content flex-fill">
                        <span class="widget-stats-title">Total Pengguna</span>
                        <span class="widget-stats-amount"><?php echo count($total_pengguna) ?></span>
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