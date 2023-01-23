@extends('home.layouts.index')

@section('content')
    <!-- START: Header -->
    <section id="header">
        <!-- START: Header Content -->
        <div class="container">
            <div class="header">
            <div class="row h-100 overflow-hidden mt-0 mt-md-5 mt-lg-0">
                <div class="col-lg-5 align-self-center" data-aos="fade-right">
                <div class="d-flex flex-column gap-3">
                    <div class="d-flex m-auto m-lg-0">
                    <div class="sub-header text-center text-lg-start">
                        <span>Jelajahi Sekolah!</span>
                    </div>
                    </div>
                    <h1 class="text-center text-lg-start">Gabung bersama kami!</h1>
                    <span class="text-center text-lg-start">Menerima siswa baru dengan sistem pendaftaran online yang mudah digunakan dan lengkap.</span>
                    <div class="d-lg-flex d-block">
                    <div class="d-flex">
                        <button class="btn btn-primary text-white text-sm px-4 py-2 me-lg-3 align-self-center me-auto ms-auto">
                            @if (Auth::user())
                                @if (Auth::user()->student->asal_sekolah)
                                    <a href="{{ route('check-status') }}" class="text-white align-self-center me-3">Cek Status Kelulusan</a>
                                @else
                                    <a href="{{ route('student-form') }}" class="text-white align-self-center me-3">Lengkapi Formulir Pendaftaran</a>
                                @endif
                            @else
                                <a href="{{ route('register.index') }}" class="text-white align-self-center me-3">Daftar Sekarang</a>
                            @endif
                            
                        <span class="material-icons material-icons-outlined align-self-center">
                        east</span>
                        </button>
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-lg-7 align-self-center d-none d-lg-block mt-5 mt-lg-0" data-aos="zoom-in">
                <div class="d-flex">
                    <img src="{{asset('assets/images/design/featured.png')}}" alt="" width="600" class="img-fluid me-auto ms-auto me-0">
                </div>
                </div>  

                <!-- START: Statistic -->
                <div class="row justify-content-center m-auto" data-aos="fade-right">
                <div class="col-12 col-lg-8">
                    <div class="header-statistic w m-auto">
                        <div class="d-flex flex-column">
                            <h5>10+</h5>
                            <span>Fasilitas</span>
                        </div>
                        <div class="d-flex flex-column">
                            <h5>3</h5>
                            <span>Program Wajib</span>
                        </div>
                        <div class="d-flex flex-column">
                            <h5>6+</h5>
                            <span>Program Ekstra</span>
                        </div>
                        <div class="d-flex flex-column">
                            <h5>50+</h5>
                            <span>Prestasi</span>
                        </div>
                    </div>
                </div>
                </div>
                <!-- END: Statistic -->

            </div>
            </div>
        </div>
        <!-- END: Header Content -->

    </section>
    <!-- END: Header -->

    <div class="bg-white p-5">
        <div class="container">
            <div class="d-flex mb-5">
                <h2 class="fw-700 m-auto">Tentang MTI Pariangan</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-5">
                    {{-- Pendahuluan --}}
                    <section id="pendahuluan">
                        <div class="card shadow-sm">
                            <div class="card-body p-4">
                                <h3 class="header-section text-primary mb-5">Pendahuluan</h3>
                                
                                <p>Madrasah Tarbiayah Islamiyah (MTI Pariangan) didirikan oleh buya Hj. Umar Bakri dan kawan-kawan pada tahun 1933 yang mengajarkan pendidikan agama dengan merujuk kepada kitab standar (kitab kuning) yang masih terjaga keasliannya. Selain itu juga mengajarkan ilmu keagamaan dan ilmu umum lainnya.</p>
                    
                                <p>MTI Pariangan memiliki dua jenjang pendidikan yaitu MTS dan MA yang sudah TERAKREDITAS B.Alhamdulillah, siswa/santri yang lulus dari MTI Pariangan (Alumni) sudah banyak yang diterima di perguruan tinggi umum dan agama terkemuka di indonesia.</p>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-md-7">
                    {{-- Visi misi --}}
                    <section id="visi-misi">
                        <div class="card shadow-sm">
                            <div class="card-body p-4">
                                <h3 class="header-section text-primary mb-5">Visi Misi</h3>
        
                                <h5 class="fw-600">Visi</h5>
                                <p>Cerdas, Kompetitif dan Berakhlak Mulia</p>
        
                                <h5 class="fw-600">Misi</h5>
                                <ol>
                                    <li>Meningkatkan kualitas pembelajaran melalui pengembanga  kurikulum profesionalisme sekolah</li>
                                    <li>Mengintegrasikan Al-Qur’an dan Sunnah ke dalam materi pembelajaran</li>
                                    <li>Menciptakan suasana disiplin, kondusif, islami di lingkungan madrasah</li>
                                    <li>Mensosialisasikan madrasah di tengah masyarakat</li>
                                    <li>Mempersiapkan peseta didik mampu bersaing di tingkat nasional</li>
                                    <li>Menjalin kerja sama dengan pihak luar untuk kemajuan pendidikan</li>
                                    <li>Mempersiapkan kader ulama yang menjadi panutan masyarakat, bangsa dan negara</li>
                                </ol>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-md-4 mt-4">
                    {{-- Visi misi --}}
                    <section id="visi-misi">
                        <div class="card shadow-sm">
                            <div class="card-body p-4">
                                <h3 class="header-section text-primary mb-5">Kurikulum</h3>

                                <ol>
                                    <li>Kurikulum ketarbiyahan, merujuk pada Kitab-Kitab Standar (Kitab Kuning)</li>
                                    <li>Kurikulum Kementerian Agama berbasis K-13 yang merujuk pada buku buku Agama terbitan Kementerian Agama</li>
                                    <li>Kurikulum 2013 Kemdikbud yang merujuk pada buku buku umum</li>
                                </ol>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-md-4 mt-4">
                    {{-- Tenaga Pengajar --}}
                    <section id="tenaga-pengajar">
                        <div class="card shadow-sm">
                            <div class="card-body p-4">
                                <h3 class="header-section text-primary mb-5">Tenaga Pengajar</h3>

                                <p>MTI Pariangan memiliki tenaga pengajar yang
                                    profesional dan memiliki etos kerja yang sangat tinggi. Tenaga pengajar di MTI Pariangan sudah memiliki gelar akademik S1 dan S2. Di antranya yaitu 27 Orang Guru/Pengajar Sarjana S1, 5 Orang Guru Pengajar S2 dan 3 Orang Tenaga Pendidikan
                                    </p>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-md-4 mt-4">
                    {{-- Beasiswa --}}
                    <section id="beasiswa">
                        <div class="card shadow-sm">
                            <div class="card-body p-4">
                                <h3 class="header-section text-primary mb-5">Beasiswa</h3>

                                <p>Bagi siswa yang berprestasi dan kurang mampu akan diberikan beasiswa</p>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>

    <!-- START: Partner -->
    <section id="partner">
    <div class="container my-5">
        <div class="card shadow px-5">
        <div class="card-body">
            <div class="d-flex mt-4">
            <h3 class="header-section"><span class="text-primary">Galeri</span> Kami</h3>
            </div>
            <div class="row mt-5 justify-content-center text-center pb-4">
            <div class="col-lg-2 col-sm-4 col-6 align-self-center">
                <img src="{{asset('assets/images/design/image 4.png')}}" alt="">
            </div>
            <div class="col-lg-2 col-sm-4 col-6 align-self-center">
                <img src="{{asset('assets/images/design/image 5.png')}}" alt="">
            </div>
            <div class="col-lg-2 col-sm-4 col-6 align-self-center">
                <img src="{{asset('assets/images/design/image 6.png')}}" alt="">
            </div>
            <div class="col-lg-2 col-sm-4 col-6 align-self-center">
                <img src="{{asset('assets/images/design/image 7.png')}}" alt="">
            </div>
            <div class="col-lg-2 col-sm-4 col-6 align-self-center">
                <img src="{{asset('assets/images/design/image 8.png')}}" alt="">
            </div>
            <div class="col-lg-2 col-sm-4 col-6 align-self-center">
                <img src="{{asset('assets/images/design/image 9.png')}}" alt="">
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>
    <!-- END: Partner -->
@endsection

@section('scripts')
<script>
    $(document).ready(function (){
      $(".owl-stage").addClass("d-flex");
    });
    $('.owl-carousel').owlCarousel({
      stagePadding: 15,
      margin:30,
      loop: true,
      responsive:{
        0:{
          items:1
        },
        600:{
          items:3
        }
      }
    });
    $('.owl-carousel').on('mousewheel', '.owl-stage', function (e) {
      if (e.deltaY>0) {
        $('.owl-carousel').trigger('next.owl');
      } else {
        $('.owl-carousel').trigger('prev.owl');
      }
      e.preventDefault();
    });
    
    $('#nextCarousel').on('click', function () {
      $('.owl-carousel').trigger('next.owl');
    });
    $('#prevCarousel').on('click', function () {
      $('.owl-carousel').trigger('prev.owl');
    });

</script>
@endsection