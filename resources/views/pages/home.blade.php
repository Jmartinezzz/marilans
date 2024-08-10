@extends('layouts.app')

@section('content')
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">Welcome To Marilans!</div>
            <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
            <form action="{{ route('amazon.price') }}" method="post">
                @csrf
                <input class="form-control form-control-lg" name="url" type="text" placeholder="http://amazon.com/product/1">
                <button type="submit" class="mt-3 btn btn-primary btn-xl text-uppercase text-dark" href="#services">Buscar desde Amazon</button>
            </form>
        </div>
    </header>
    {{-- Product quote --}}
    @if(true)
    <section class="page-section bg-light" id="quote">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Portfolio</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-5 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                            <img class="img-fluid" src="assets/img/portfolio/1.jpg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Threads</div>
                            <div class="portfolio-caption-subheading text-muted">Illustration</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-7 mb-4 border">
                    <div class="">
                        <h3 class="section-heading text-uppercase">Portfolio</h3>
                        <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
    {{-- Product quote --}}
@endsection
