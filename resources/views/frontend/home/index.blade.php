@extends('layouts.frontend.master')

@section('title')
    Selamat Datang di Website TokoToku ID
@endsection

@section('content')
    <!-- header caraousel -->
    <header>
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://www.goitmart.com/wp-content/uploads/2022/11/Logitech-banner.png"
                            class="d-block w-100 shadow-nih" height="300" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://esncard.org/sites/default/files/erasmus_banner_1.png"
                            class="d-block w-100 shadow-nih" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://www.computerlounge.co.nz/data/media/images/blog//g502_banner.jpg"
                            class="d-block w-100 shadow-nih" height="300" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- start main -->
    <main>
        <div class="container">
            <!-- start section list product -->
            <section class="product">
                <div class="d-flex justify-content-between">
                    <div class="title">
                        <p class="text-success">Rekomendasi Produk</p>
                        <h2>Our Popular Product</h2>
                    </div>
                    <button class="btn btn-primary lihat d-none d-md-block">
                        <i class="fas fa-list me-1"></i> Show More
                    </button>
                </div>
                <div class="row justify-content-center" id="list-product">
                    @foreach ($data as $item)
                        <div class="col-md-3 col-10">
                            <div class="card p-3 shadow-nih rounded-20">
                                <img class="mb-4 rounded-20" height="200" src="{{ asset('img/' . $item->image) }}" alt="">
                                <div class="topic">
                                    <h3>
                                        {{ $item->title }}
                                    </h3>
                                    <div class="d-flex justify-content-between">
                                        <div class="harga">
                                            <small>Price</small>
                                            <p>Rp. {{ number_format($item->harga) }}</p>
                                        </div>

                                        <a href="detail.html" class="btn btn-primary beli">
                                            <i class="fas fa-shopping-cart me-1"></i> Buy
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="text-center mt-4 d-md-none d-lg-none d-xl-none">
                    <button class="btn btn-primary lihat">
                        <i class="fas fa-list me-1"></i> Show More
                    </button>
                </div>
            </section>
            <!-- end section list product -->
        </div>
    </main>
    <!-- end main -->
@endsection
