
 <!-- sidebar  -->
 <nav class="sidebar vertical-scroll  ps-container ps-theme-default ps-active-y">
    <div class="logo d-flex justify-content-between">
        <a href="{{ route('admin.dashboard')}}"><img src="{{asset('administrator/assets/img/icon.png') }}" alt=""></a>
        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>
    </div>
    <ul id="sidebar_menu">
        <li class="">
            <a href="{{ route('admin.dashboard')}}" aria-expanded="false">
                <div class="icon_menu">
                    <i class="fas fa-home"></i>
                </div>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="">
            <a href="{{ route('admin.genres')}}" aria-expanded="false">
              <div class="icon_menu">
                <i class="fas fa-list"></i>
              </div>
              <span>Genre</span>
            </a>
        </li>
        <li class="">
            <a href="{{ route('admin.book')}}" aria-expanded="false">
              <div class="icon_menu">
                <i class="fas fa-book"></i>
              </div>
              <span>Book</span>
            </a>
        </li>
        <li class="">
            <a href="{{ route('admin.users')}}" aria-expanded="false">
              <div class="icon_menu">
                <i class="fas fa-user"></i>
              </div>
              <span>Daftar Akun</span>
            </a>
        </li>
        <li class="">
            <a href="{{ route('auth.logout')}}" aria-expanded="false">
              <div class="icon_menu">
                <i class="fas fa-sign-out-alt"></i>
              </div>
              <span>Log out</span>
            </a>
        </li>

      </ul>
</nav>
 <!--/ sidebar  -->
