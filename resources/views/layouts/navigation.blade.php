<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link p-0 pr-3 " data-toggle="dropdown" href="#">
            <img src="{{asset('assets/img/professor.png')}}" alt="user Logo" class="brand-image img-circle elevation-2" style="opacity: .8">
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-3">
          <h4 class="h4 mb-0"><strong>{{Auth::user()->name}}</strong></h4>
          <div class="mb-3">{{Auth::user()->email}}</div>
          <div class="dropdown-divider"></div>
          <div class="dropdown-divider"></div>
          <a href="{{route('profile.edit')}}" class="dropdown-item">
            <i class="fas fa-lock mr-2"></i>Profile
          </a>
          <div class="dropdown-divider"></div>
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a href="" class="dropdown-item" onclick="event.preventDefault(); this.closest('form').submit();">
                <i class="fas fa-sign-out-alt mr-2"></i>Deconnexion
              </a>
          </form>
        </div>
      </li>
    </ul>
  </nav>
