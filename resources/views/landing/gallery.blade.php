@extends('layouts-landing.template')

@section('content')
<section class="pt-3 pb-9 position-relative">
    <div class="container px-md-5">
        <div class="position-md-absolute start-0 ms-2 mt-3 mb-4">
            <ul class="nav gallery-tab d-flex gap-3" data-filter-nav="data-filter-nav">
                <li class="nav-item"><a class="nav-link p-0 py-md-2 isotope-nav active" href="#!" data-filter="*">All</a></li>
                <li class="nav-item"><a class="nav-link p-0 py-md-2 isotope-nav" href="#!" data-filter=".shortfilms">Short films</a></li>
                <li class="nav-item"><a class="nav-link p-0 py-md-2 isotope-nav" href="#!" data-filter=".professional">Professional</a></li>
                <li class="nav-item"><a class="nav-link p-0 py-md-2 isotope-nav" href="#!" data-filter=".commercial">Commercial</a></li>
            </ul>
        </div>
        <div class="row g-3  animate__animated animate__fadeIn animate__delay-3s animate__slow" data-isotope='{"layoutMode":"packery"}'>
            <div class="col-lg-3 col-sm-6 col-12 shortfilms gallery-item isotope-item"><img class="img-fluid img-full-height w-100" src="{{ asset('fotogency/public/assets/img/gallery/1.jpg') }}" alt="" data-glightbox="title: To infinity and beyond; description: Iching biching chiching" /></div>
            <div class="col-lg-3 col-sm-6 col-12 shortfilms gallery-item isotope-item"><img class="img-fluid img-full-height w-100" src="{{ asset('fotogency/public/assets/img/gallery/2.jpg') }}" alt="" data-glightbox="title: To infinity and beyond; description: Iching biching chiching" /></div>
            <div class="col-lg-6 col-12 shortfilms gallery-item isotope-item"><img class="img-fluid img-full-height w-100" src="{{ asset('fotogency/public/assets/img/gallery/3.jpg') }}" alt="" data-glightbox="title: To infinity and beyond; description: Iching biching chiching" /></div>
            
            <div class="col-lg-6 col-12 professional gallery-item isotope-item"><img class="img-fluid img-full-height w-100" src="{{ asset('fotogency/public/assets/img/gallery/4.jpg') }}" alt="" data-glightbox="title: To infinity and beyond; description: Iching biching chiching" /></div>
            <div class="col-lg-3 col-sm-6 col-12 professional gallery-item isotope-item"><img class="img-fluid img-full-height w-100" src="{{ asset('fotogency/public/assets/img/gallery/5.jpg') }}" alt="" data-glightbox="title: To infinity and beyond; description: Iching biching chiching" /></div>
            <div class="col-lg-3 col-sm-6 col-12 professional gallery-item isotope-item"><img class="img-fluid img-full-height w-100" src="{{ asset('fotogency/public/assets/img/gallery/6.jpg') }}" alt="" data-glightbox="title: To infinity and beyond; description: Iching biching chiching" /></div>
            
            <div class="col-lg-3 col-sm-6 col-12 commercial gallery-item isotope-item"><img class="img-fluid img-full-height w-100" src="{{ asset('fotogency/public/assets/img/gallery/7.jpg') }}" alt="" data-glightbox="title: To infinity and beyond; description: Iching biching chiching" /></div>
            <div class="col-lg-3 col-sm-6 col-12 commercial gallery-item isotope-item"><img class="img-fluid img-full-height w-100" src="{{ asset('fotogency/public/assets/img/gallery/8.jpg') }}" alt="" data-glightbox="title: To infinity and beyond; description: Iching biching chiching" /></div>
            <div class="col-lg-6 col-12 commercial gallery-item isotope-item"><img class="img-fluid img-full-height w-100" src="{{ asset('fotogency/public/assets/img/gallery/9.jpg') }}" alt="" data-glightbox="title: To infinity and beyond; description: Iching biching chiching" /></div>
        </div>
    </div>
  </section>
  <style>
    .img-full-height {
        height: 25rem;
        object-fit: cover;
    }
  </style>
@endsection