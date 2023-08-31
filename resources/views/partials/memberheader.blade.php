<header class="top-header">
    <nav class="navbar navbar-expand gap-3">
      <div class="toggle-icon">
        <ion-icon name="menu-outline"></ion-icon>

      </div>


      <div class="top-navbar-right ms-auto">

        <ul class="navbar-nav align-items-center">


          <li class="nav-item dropdown dropdown-user-setting">
            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
              <div class="user-setting">
                <img src="assets/images/avatars/06.png" class="user-img" alt="">
              </div>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li>
                <a class="dropdown-item" href="javascript:;">
                  <div class="d-flex flex-row align-items-center gap-2">
                    <img src="assets/images/avatars/06.png" alt="" class="rounded-circle" width="54" height="54">
                    <div class="">
                      <h6 class="mb-0 dropdown-user-name">Jhon Deo</h6>
                      <small class="mb-0 dropdown-user-designation text-secondary">UI Developer</small>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li>
                <a class="dropdown-item" href="{{ route('member.profile') }}">
                  <div class="d-flex align-items-center">
                    <div class="">
                      <ion-icon name="person-outline"></ion-icon>
                    </div>
                    <div class="ms-3"><span>Profile</span></div>
                  </div>
                </a>
              </li>
              {{-- <li>
                <a class="dropdown-item" href="javascript:;">
                  <div class="d-flex align-items-center">
                    <div class="">
                      <ion-icon name="settings-outline"></ion-icon>
                    </div>
                    <div class="ms-3"><span>Setting</span></div>
                  </div>
                </a>
              </li> --}}
              {{-- <li>
                <a class="dropdown-item" href="javascript:;">
                  <div class="d-flex align-items-center">
                    <div class="">
                      <ion-icon name="speedometer-outline"></ion-icon>
                    </div>
                    <div class="ms-3"><span>Dashboard</span></div>
                  </div>
                </a>
              </li> --}}
              {{-- <li>
                <a class="dropdown-item" href="javascript:;">
                  <div class="d-flex align-items-center">
                    <div class="">
                      <ion-icon name="wallet-outline"></ion-icon>
                    </div>
                    <div class="ms-3"><span>Earnings</span></div>
                  </div>
                </a>
              </li> --}}
              {{-- <li>
                <a class="dropdown-item" href="javascript:;">
                  <div class="d-flex align-items-center">
                    <div class="">
                      <ion-icon name="cloud-download-outline"></ion-icon>
                    </div>
                    <div class="ms-3"><span>Downloads</span></div>
                  </div>
                </a>
              </li> --}}
              <li>
                <hr class="dropdown-divider">
              </li>
              <li>
                <a class="dropdown-item" href="{{ route('member.logout') }}">
                  <div class="d-flex align-items-center">
                    <div class="">
                      <ion-icon name="log-out-outline"></ion-icon>
                    </div>
                    <div class="ms-3"><span>Logout</span></div>
                  </div>
                </a>
              </li>
            </ul>
          </li>

        </ul>

      </div>
    </nav>
  </header>
