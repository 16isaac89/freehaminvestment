<aside class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
      <div>
        <img src="{{asset('site/images/logo.png')}}" class="logo-icon" alt="logo icon">
      </div>
      <div>
        <h4 class="logo-text">Freham</h4>
      </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a class="dropdown-item" href="{{ route('member.index') }}">
              <div class="d-flex align-items-center">
                <div class="">
                  <ion-icon name="speedometer-outline"></ion-icon>
                </div>
                <div class="ms-3"><span>Dashboard</span></div>
              </div>
            </a>
          </li>
      {{-- <li class="menu-label">Shares/Savings</li> --}}
      <li>
        <a href="javascript:;" class="has-arrow">
          <div class="parent-icon">
            <ion-icon name="briefcase-outline"></ion-icon>
          </div>
          <div class="menu-title">Shares/Savings</div>
        </a>
        <ul>
          <li> <a href="{{ route('membershares.index') }}">
              <ion-icon name="ellipse-outline"></ion-icon>Shares
            </a>
          </li>
          <li> <a href="{{ route('membersavings.index') }}">
              <ion-icon name="ellipse-outline"></ion-icon>Savings
            </a>
          </li>
        </ul>
      </li>



      <li class="menu-label">Authorisation</li>
      <li>
        <a href="{{ route('member.profile') }}">
          <div class="parent-icon">
            <ion-icon name="person-circle-outline"></ion-icon>
          </div>
          <div class="menu-title">User Profile</div>
        </a>
      </li>





    </ul>
    <!--end navigation-->
  </aside>
