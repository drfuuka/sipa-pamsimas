<!-- START: Navbar -->
<div class="container">
  <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
    <div class="container-fluid">
      <a class="navbar-brand" href="#" data-aos="fade-down">
        <h3 class="fw-700"><img src="{{asset('assets/images/design/logo-1.png')}}" width="50" alt=""> MTI Pariangan</h3>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item" data-aos="zoom-in-down" data-aos-delay="50">
            <a class="nav-link {{ (request()->is('/')) ? 'active' : '' }}" aria-current="page" href="{{ route('index')}}" aria-current="page" href="{{ route('index')}}">Beranda</a>
          </li>
          <li class="nav-item" data-aos="zoom-in-down" data-aos-delay="50">
            <a class="nav-link {{ (request()->is('daftar-calon-murid')) ? 'active' : '' }}" aria-current="page" href="{{ route('student-list')}}">Data Pendaftar</a>
          </li>
          <li class="nav-item" data-aos="zoom-in-down" data-aos-delay="300">
            <div class="d-flex gap-3">
              @guest
                <a href="{{route('login.index')}}" class="btn btn-light">Masuk</a>
                <a href="{{route('register.index')}}" class="btn btn-primary text-white">Daftar Sekarang</a>
              @endguest

              @if (Auth::user())
                @auth
                  <a href="{{route('logout')}}" class="btn btn-light">Hi, {{Auth::user()->name}} | Logout</a>
                @endauth
              @endif
              </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- END: Navbar -->
