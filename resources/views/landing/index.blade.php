@extends('layouts-landing.template')

@section('content')
    <section class="py-4 pt-md-0 pb-8 pb-sm-11 mt-lg-n8">
        <div class="container px-md-5">
            <div class="row">
                <div class="col-md-10 col-lg-8 mt-4">
                    <h1 class="fs-3 fs-md-5 fs-xl-6 mb-5 mb-lg-0 position-relative z-index-2 animate__animated animate__fadeInLeft animate__slow">Nagios.Story <span
                            class="fw-thin text-300">make your imagine be true, </span><span class="text-400">photography &
                            videogrhapy.</span></h1>
                </div>
            </div>
            <div class="row mt-md-n6">
                <div class="col-2 d-none d-lg-block mt-auto"><img class="img-fluid animate__animated animate__fadeInDown animate__delay-2s animate__slow"
                        src="{{ asset('fotogency/public/assets/img/home/NAGIOS-3.jpg') }}" alt="" /></div>
                <div class="col-1 mt-auto d-none d-lg-block animate__animated animate__fadeInDown animate__delay-2s"><a class="scroll-indicator text-1200" href="#footer">
                        <span>SCROLL </span><img src="{{ asset('fotogency/public/assets/img/icons/long-arrow.png') }}"
                            alt="" /></a></div>
                <div class="col-lg-7 position-relative">
                    <div class="position-relative overflow-hidden overflow-md-visible"><img class="img-fluid animate__animated animate__fadeInDown animate__delay-2s"
                            src="{{ asset('fotogency/public/assets/img/home/NAGIOS-1.jpg') }}" alt="" />
                        <div class="img-circle p-5 p-md-7 rounded-circle"></div>
                        <div class="img-circle-2 p-5 p-md-7 rounded-circle"></div>
                    </div>
                    <div class="position-absolute bottom-n100 col-11 mt-6 d-none d-md-block animate__animated animate__fadeInDown animate__slower">
                        <p class="fs-2 lh-1 text-400">There are many variations of passages of Lorem Ipsum available, but
                            the majority </p>
                        <p class="text-300">There are many variations of passages of Lorem Ipsum available, but the majority
                            have suffered alteration in some form, by injected humour,</p>
                    </div>
                    <div class="position-absolute start-0 bottom-0 d-lg-none"><a class="scroll-indicator text-warning"
                            href="#footer"> <span>SCROLL </span><img
                                src="{{ asset('fotogency/public/assets/img/icons/long-arrow.png') }}" alt="" /></a>
                    </div>
                </div>
                <div class="col-2 d-none d-lg-block mb-auto"><img class="img-fluid animate__animated animate__fadeInDown animate__delay-2s animate__slower"
                        src="{{ asset('fotogency/public/assets/img/home/NAGIOS-2.jpg') }}" alt="" /></div>
            </div>
        </div>
    </section>
@endsection
