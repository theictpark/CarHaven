
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Car Haven - Admin Dashboard</title>

    <!-- CSS Files  -->
    <link rel="stylesheet" href="{{ asset('admin') }}/assets/fonts/bootstrap/bootstrap-icons.css" />
    <link rel="stylesheet" href="{{ asset('admin') }}/assets/css/main.min.css" />

    <!-- Scrollbar CSS -->
    <link rel="stylesheet" href="{{ asset('admin') }}/assets/vendor/overlay-scroll/OverlayScrollbars.min.css" />

    <!-- Data Tables -->
    <link rel="stylesheet" href="{{ asset('admin') }}/assets/vendor/datatables/dataTables.bs5.css" />
    <link rel="stylesheet" href="{{ asset('admin') }}/assets/vendor/datatables/dataTables.bs5-custom.css" />
    <link rel="stylesheet" href="{{ asset('admin') }}/assets/vendor/datatables/buttons/dataTables.bs5-custom.css" />
  </head>

  <body>

    <!-- Page wrapper starts -->
    <div class="page-wrapper">

      <!-- Main container starts -->
      <div class="main-container">

        <!-- Sidebar wrapper starts -->
        <nav id="sidebar" class="sidebar-wrapper">

          <!-- App brand starts -->
          <div class="app-brand p-3 mb-3">
            <a href="index.html">
              <img src="assets/images/logo.svg" class="logo" alt="AdminLite Bootstrap Template" />
            </a>
          </div>
          <!-- App brand ends -->

          <!-- Sidebar menu starts -->
          <div class="sidebarMenuScroll">
            <ul class="sidebar-menu">
              <li>
                <a href="index.html">
                  <i class="bi bi-pie-chart"></i>
                  <span class="menu-text">Dashboard</span>
                </a>
              </li>
              <li>
                <a href="crm.html">
                  <i class="bi bi-bar-chart-line"></i>
                  <span class="menu-text">CRM</span>
                </a>
              </li>
              <li>
                <a href="customers.html">
                  <i class="bi bi-globe"></i>
                  <span class="menu-text">Customers</span>
                </a>
              </li>
              <li class="active current-page">
                <a href="contracts.html">
                  <i class="bi bi-shop-window"></i>
                  <span class="menu-text">Contracts</span>
                </a>
              </li>
              <li>
                <a href="projects.html">
                  <i class="bi bi-terminal-split"></i>
                  <span class="menu-text">Projects</span>
                </a>
              </li>
              <li>
                <a href="leads.html">
                  <i class="bi bi-patch-check"></i>
                  <span class="menu-text">Leads</span>
                </a>
              </li>
              <li>
                <a href="expenses.html">
                  <i class="bi bi-send"></i>
                  <span class="menu-text">Expenses</span>
                </a>
              </li>
              <li>
                <a href="subscriptions.html">
                  <i class="bi bi-mouse3"></i>
                  <span class="menu-text">Subscriptions</span>
                </a>
              </li>
              <li>
                <a href="tasks.html">
                  <i class="bi bi-clipboard-check"></i>
                  <span class="menu-text">Tasks</span>
                </a>
              </li>
              <li>
                <a href="support.html">
                  <i class="bi bi-headphones"></i>
                  <span class="menu-text">Support</span>
                </a>
              </li>

            </ul>
          </div>
          <!-- Sidebar menu ends -->

          <!-- Sidebar settings starts -->
          <div class="sidebar-settings gap-1 d-lg-flex d-none">
            <a href="#" class="settings-icon" data-bs-toggle="tooltip" data-bs-placement="top"
              data-bs-custom-class="custom-tooltip-danger" title="Profile">
              <i class="bi bi-person"></i>
            </a>
            <a href="#" class="settings-icon" data-bs-toggle="tooltip" data-bs-placement="top"
              data-bs-custom-class="custom-tooltip-warning" title=" Tasks">
              <i class="bi bi-clipboard-check"></i>
            </a>
            <a href="#" class="settings-icon" data-bs-toggle="tooltip" data-bs-placement="top"
              data-bs-custom-class="custom-tooltip-success" title=" Widgets">
              <i class="bi bi-box"></i>
            </a>
            <a href="#" class="settings-icon" data-bs-toggle="tooltip" data-bs-placement="top"
              data-bs-custom-class="custom-tooltip-info" title=" Settings">
              <i class="bi bi-gear"></i>
            </a>
            <a href="#" class="settings-icon" data-bs-toggle="tooltip" data-bs-placement="top"
              data-bs-custom-class="custom-tooltip-secondary" title="Logout">
              <i class="bi bi-power"></i>
            </a>
          </div>
          <!-- Sidebar settings ends -->

        </nav>
        <!-- Sidebar wrapper ends -->

        <!-- App container starts -->
        <div class="app-container">

          <!-- App header starts -->
          <div class="app-header d-flex align-items-center">

            <!-- Toggle buttons starts -->
            <div class="d-flex">
              <button class="pin-sidebar">
                <i class="bi bi-list lh-1"></i>
              </button>
            </div>
            <!-- Toggle buttons ends -->


            <!-- App brand sm ends -->

            <!-- App header actions starts -->
            <div class="header-actions">

              <!-- Search container starts -->
              <div class="search-container d-lg-block d-none mx-3">
                <input type="text" class="form-control" id="searchData" placeholder="Search" />
                <i class="bi bi-search"></i>
              </div>
              <!-- Search container ends -->
              <div class="dropdown ms-4">
                <a id="userSettings" class="dropdown-toggle d-flex py-2 align-items-center" href="#!" role="button"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="assets/images/user3.png" class="rounded-4 img-3x" alt="Bootstrap Gallery" />
                  <div class="ms-2 text-truncate d-lg-flex flex-column d-none">
                    <p class="text-truncate m-0">{{ Auth::user()->name }}</p>
                    <span class="small opacity-50 lh-1">{{ Auth::user()->role }}</span>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end shadow-lg">
                    <a class="dropdown-item d-flex align-items-center" href="{{ route('profile.edit') }}"><i
                        class="bi bi-person fs-5 me-2"></i>My Profile</a>
                  <div class="mx-3 mt-2 d-grid">
                      <form method="POST" action="{{ route('logout') }}">
                      @csrf
                          <button type="submit" class="btn btn-primary">Logout</button>
                      </form>
                  </div>
                </div>
              </div>
              <div class="d-flex">
                <button class="toggle-sidebar">
                  <i class="bi bi-list lh-1"></i>
                </button>
              </div>
            </div>
            <!-- App header actions ends -->

          </div>
          <!-- App header ends -->

          <!-- App body starts -->
          <div class="app-body">

            <!-- Row start -->
            <div class="row gx-4">
              <div class="col-sm-12">
                <!-- Card start -->
                <div class="card">
                  <div class="card-header">
                    <h5 class="card-title">Contracts Summary</h5>
                  </div>
                  <div class="card-body">

                    <!-- Row start -->
                    <div class="row gx-4">
                      <div class="col-xl col-sm-6 col-12">
                        <div class="card mb-4 card-bg">
                          <div class="card-body text-white">
                            <h6 class="mb-3">Total</h6>
                            <h2 class="mb-2 d-flex align-items-center justify-content-between">
                              <i class="bi bi-box fs-3 lh-1 bg-white p-3 rounded-circle text-black"></i>
                              <span>5900</span>
                            </h2>
                            <p class="m-0 small">
                              Higher than last month<span class="float-end badge bg-primary-subtle text-primary">24% <i
                                  class="bi bi-arrow-up-right"></i></span>
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl col-sm-6 col-12">
                        <div class="card mb-4 card-bg">
                          <div class="card-body text-white">
                            <h6 class="mb-3">Active</h6>
                            <h2 class="mb-2 d-flex align-items-center justify-content-between">
                              <i class="bi bi-bar-chart fs-3 lh-1 bg-white p-3 rounded-circle text-black"></i>
                              <span>$9200</span>
                            </h2>
                            <p class="m-0 small">
                              Higher than last month<span class="float-end badge bg-primary-subtle text-primary">45% <i
                                  class="bi bi-arrow-up-right"></i></span>
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl col-sm-6 col-12">
                        <div class="card mb-4 card-bg">
                          <div class="card-body text-white">
                            <h6 class="mb-3">Inactive</h6>
                            <h2 class="mb-2 d-flex align-items-center justify-content-between">
                              <i class="bi bi-sticky fs-3 lh-1 bg-white p-3 rounded-circle text-black"></i>
                              <span>$6900</span>
                            </h2>
                            <p class="m-0 small">
                              Higher than last month<span class="float-end badge bg-primary-subtle text-primary">32% <i
                                  class="bi bi-arrow-up-right"></i></span>
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl col-sm-6 col-12">
                        <div class="card mb-4 card-bg">
                          <div class="card-body text-white">
                            <h6 class="mb-3">New</h6>
                            <h2 class="mb-2 d-flex align-items-center justify-content-between">
                              <i class="bi bi-wallet2 fs-3 lh-1 bg-white p-3 rounded-circle text-black"></i>
                              <span>$4400</span>
                            </h2>
                            <p class="m-0 small">
                              Higher than last month<span class="float-end badge bg-primary-subtle text-primary">28% <i
                                  class="bi bi-arrow-down-right"></i></span>
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Row end -->

                    <!-- Row start -->
                    <div class="row gx-4">
                      <div class="col-sm-6">

                        <!-- Card start -->
                        <div class="card border mb-4">
                          <div class="card-header">
                            <h5 class="card-title">Contracts by Type</h5>
                          </div>
                          <div class="card-body">
                            <div class="graph-body auto-align-graph">
                              <div id="type"></div>
                            </div>
                          </div>
                        </div>
                        <!-- Card end -->

                      </div>
                      <div class="col-sm-6">

                        <!-- Card start -->
                        <div class="card border mb-4">
                          <div class="card-header">
                            <h5 class="card-title">Contracts by Value</h5>
                          </div>
                          <div class="card-body">
                            <div class="graph-body auto-align-graph">
                              <div id="value"></div>
                            </div>
                          </div>
                        </div>
                        <!-- Card end -->

                      </div>
                    </div>
                    <!-- Row end -->

                  </div>
                </div>
                <!-- Card end -->

              </div>
            </div>
            <!-- Row end -->

          </div>
          <!-- App body ends -->

          <!-- App footer starts -->
          <div class="app-footer">
            <span class="small">© Bootstrap Gallery 2024</span>
          </div>
          <!-- App footer ends -->

        </div>
        <!-- App container ends -->

      </div>
      <!-- Main container ends -->

    </div>
    <!-- Page wrapper ends -->

    <!-- Required jQuery first, then Bootstrap Bundle JS -->
    <script src="{{ asset('admin') }}/assets/js/jquery.min.js"></script>
    <script src="{{ asset('admin') }}/assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('admin') }}/assets/js/moment.min.js"></script>

    <!-- Overlay Scroll JS -->
    <script src="{{ asset('admin') }}/assets/vendor/overlay-scroll/jquery.overlayScrollbars.min.js"></script>
    <script src="{{ asset('admin') }}/assets/vendor/overlay-scroll/custom-scrollbar.js"></script>

    <!-- Data Tables -->
    <script src="{{ asset('admin') }}/assets/vendor/datatables/dataTables.min.js"></script>
    <script src="{{ asset('admin') }}/assets/vendor/datatables/dataTables.bootstrap.min.js"></script>
    <script src="{{ asset('admin') }}/assets/vendor/datatables/custom/custom-datatables.js"></script>

    <!-- DataTable Buttons -->
    <script src="{{ asset('admin') }}/assets/vendor/datatables/buttons/dataTables.buttons.min.js"></script>
    <script src="{{ asset('admin') }}/assets/vendor/datatables/buttons/jszip.min.js"></script>
    <script src="{{ asset('admin') }}/assets/vendor/datatables/buttons/dataTables.buttons.min.js"></script>
    <script src="{{ asset('admin') }}/assets/vendor/datatables/buttons/pdfmake.min.js"></script>
    <script src="{{ asset('admin') }}/assets/vendor/datatables/buttons/vfs_fonts.js"></script>
    <script src="{{ asset('admin') }}/assets/vendor/datatables/buttons/buttons.html5.min.js"></script>
    <script src="{{ asset('admin') }}/assets/vendor/datatables/buttons/buttons.print.min.js"></script>
    <script src="{{ asset('admin') }}/assets/vendor/datatables/buttons/buttons.colVis.min.js"></script>

    <!-- Apex Charts -->
    <script src="{{ asset('admin') }}/assets/vendor/apex/apexcharts.min.js"></script>
    <script src="{{ asset('admin') }}/assets/vendor/apex/custom/contracts/type.js"></script>
    <script src="{{ asset('admin') }}/assets/vendor/apex/custom/contracts/value.js"></script>

    <!-- Custom JS files -->
    <script src="{{ asset('admin') }}/assets/js/custom.js"></script>
  </body>

</html>
