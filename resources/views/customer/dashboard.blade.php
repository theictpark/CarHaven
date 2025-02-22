
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Car Haven - Customer Dashboard</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('user') }}/assets/img/favicon.svg">

    <!--  CSS Files  -->
    <link rel="stylesheet" href="{{ asset('admin') }}/assets/fonts/bootstrap/bootstrap-icons.css" />
    <link rel="stylesheet" href="{{ asset('admin') }}/assets/css/main.min.css" />
    <!-- Scrollbar CSS -->
    <link rel="stylesheet" href="{{ asset('admin') }}/assets/vendor/overlay-scroll/OverlayScrollbars.min.css" />
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
              <li class="active current-page">
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
              <li>
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

            <!-- Breadcrumb starts -->
            <div class="d-flex align-items-center ms-3">
              <h5 class="m-0">My Dashboard</h5>
            </div>
            <!-- Breadcrumb end -->

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

            <!-- Row starts -->
            <div class="row gx-4">
              <div class="col-xl-3 col-sm-6 col-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="d-flex mb-2">
                      <div class="icon-box md bg-primary rounded-5 me-3">
                        <i class="bi bi-box fs-4 text-white"></i>
                      </div>
                      <div class="d-flex flex-column">
                        <h2 class="m-0 lh-1">3500</h2>
                        <p class="m-0 opacity-50">Orders</p>
                      </div>
                    </div>
                    <div class="m-0">
                      <div class="progress thin mb-2">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 75%" aria-valuenow="75"
                          aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <p class="m-0 small fw-light opacity-75">60 percent completed.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 col-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="d-flex mb-2">
                      <div class="icon-box md bg-primary rounded-5 me-3">
                        <i class="bi bi-box fs-4 text-white"></i>
                      </div>
                      <div class="d-flex flex-column">
                        <h2 class="m-0 lh-1">3500</h2>
                        <p class="m-0 opacity-50">Orders</p>
                      </div>
                    </div>
                    <div class="m-0">
                      <div class="progress thin mb-2">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 75%" aria-valuenow="75"
                          aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <p class="m-0 small fw-light opacity-75">60 percent completed.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 col-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="d-flex mb-2">
                      <div class="icon-box md bg-primary rounded-5 me-3">
                        <i class="bi bi-box fs-4 text-white"></i>
                      </div>
                      <div class="d-flex flex-column">
                        <h2 class="m-0 lh-1">3500</h2>
                        <p class="m-0 opacity-50">Orders</p>
                      </div>
                    </div>
                    <div class="m-0">
                      <div class="progress thin mb-2">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 75%" aria-valuenow="75"
                          aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <p class="m-0 small fw-light opacity-75">60 percent completed.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 col-12">
                <div class="card mb-4 card-bg">
                  <div class="card-body text-white">
                    <div class="d-flex mb-2">
                      <div class="icon-box md bg-white rounded-5 me-3">
                        <i class="bi bi-box fs-4 text-black"></i>
                      </div>
                      <div class="d-flex flex-column">
                        <h2 class="m-0 lh-1">3500</h2>
                        <p class="m-0 opacity-50">Orders</p>
                      </div>
                    </div>
                    <div class="m-0">
                      <div class="progress thin mb-2">
                        <div class="progress-bar bg-white" role="progressbar" style="width: 75%" aria-valuenow="75"
                          aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <p class="m-0 small fw-light opacity-75">60 percent completed.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Row ends -->

            <!-- Row starts -->
            <div class="row gx-4">
              <div class="col-xl-12">
                <div class="card mb-4">
                  <div class="card-header">
                    <h5 class="card-title">Visits & Conversions</h5>
                    <h6 class="small mt-2 opacity-50">Activity Report</h6>
                  </div>
                  <div class="card-body py-0">
                    <div class="graph-body">
                      <div id="visits-conversions"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Row ends -->



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

    <!-- Apex Charts -->
    <script src="{{ asset('admin') }}/assets/vendor/apex/apexcharts.min.js"></script>
    <script src="{{ asset('admin') }}/assets/vendor/apex/custom/home/sparkline.js"></script>
    <script src="{{ asset('admin') }}/assets/vendor/apex/custom/home/revenue.js"></script>
    <script src="{{ asset('admin') }}/assets/vendor/apex/custom/home/sales.js"></script>
    <script src="{{ asset('admin') }}/assets/vendor/apex/custom/home/income.js"></script>
    <script src="{{ asset('admin') }}/assets/vendor/apex/custom/home/visits-conversions.js"></script>

    <!-- Rating -->
    <script src="{{ asset('admin') }}/assets/vendor/rating/raty.js"></script>
    <script src="{{ asset('admin') }}/assets/vendor/rating/raty-custom.js"></script>

    <!-- Custom JS files -->
    <script src="{{ asset('admin') }}/assets/js/custom.js"></script>
  </body>

</html>
