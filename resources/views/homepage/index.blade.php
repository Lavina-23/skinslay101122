<!DOCTYPE html>
<hmtl lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE-edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="{{ url('style/index.css') }}"/>
        <title>SkinSlay</title>
    </head>
    <body>
      @extends('layouts.template')
      @section('content')
      <div class="container">
        <!-- carousel -->
        <div class="row">
                  <div class="col">
                  <div id="carousel" class="carousel slide" data-ride="carousel">
                      <div class="carousel-inner">
                          <div class="carousel-item active">
                              <img src="{{ asset('images/banner2.jpeg') }}" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                              <img src="{{ asset('images/banner3.jpeg') }}" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                              <img src="{{ asset('images/banner4.jpeg') }}" class="d-block w-100" alt="...">
                          </div>
                          </div>
                          <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                          </a>
                          <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                          </a>
                    </div>
              </div>
          </div>
        <!-- end carousel -->
        <!-- kategori produk -->
        <div class="row mt-4">
          <div class="col col-md-12 col-sm-12 mb-4">
            <h2 class="text-center">Kategori Produk</h2>
          </div>
          @foreach($itemkategori as $kategori)
          <!-- kategori pertama -->
          <div class="col-md-5">
            <div class="card mb-5 shadow-sm">
              <a href="{{ URL::to('kategori/'.$kategori->slug_kategori) }}">
                @if($kategori->foto != null)
                <img src="{{ \Storage::url($kategori->foto) }}" alt="{{ $kategori->nama_kategori }}" class="card-img-top">
                @else
                <img src="{{ asset('images/bag.jpg') }}" alt="{{ $kategori->nama_kategori }}" class="card-img-top">
                @endif
              </a>
              <div class="card-body">
                <a href="{{ URL::to('kategori/'.$kategori->slug_kategori) }}" class="text-decoration-none">
                  <p class="card-text">{{ $kategori->nama_kategori }}</p>
                </a>
              </div>
            </div>
          </div>
          @endforeach
        <!-- end kategori produk -->
        <!-- produk Promo-->
        <!-- end produk promo -->
        <!-- produk Terbaru-->
        <div class="row mt-4">
          <div class="col col-md-12 col-sm-12 mb-4">
            <h2 class="text-center">Terbaru</h2>
          </div>
          @foreach($itemproduk as $produk)
          <!-- produk pertama -->
          <div class="col-md-2">
            <div class="card mb-6 shadow-sm">
              <a href="{{ URL::to('produk') }}">
                @if($produk->foto != null)
                <img src="{{ \Storage::url($produk->foto) }}" alt="{{ $produk->nama_produk }}" class="card-img-top">
                @else
                <img src="{{ asset('images/bag.jpg') }}" alt="{{ $produk->nama_produk }}" class="card-img-top">
                @endif
              </a>
              <div class="card-body">
                <a href="{{ URL::to('produk/'.$produk->slug_produk ) }}" class="text-decoration-none">
                  <p class="card-text">
                    {{ $produk->nama_produk }}
                  </p>
                </a>
                <div class="row mt-4">
                  <div class="col-oto">
                    <p>
                      Rp. {{ $produk->harga }}<sup>Ribu</sup>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        <!-- end produk terbaru -->
        <!-- tentang toko -->
        <hr>
        <div class="row mt-4">
          <div class="card mb-5 bg-beige">
            <h5 class="text-center">Toko Online Menggunakan Laravel</h5>
            <p>
              Toko adalah demo membangun toko online menggunakan laravel framework. Di dalam demo ini terdapat user bisa menginput data kategori, produk dan transaksi.
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic laborum aliquam dolorum sequi nulla maiores quos incidunt veritatis numquam suscipit. Cumque dolore rem obcaecati. Eos quod ad non veritatis assumenda.
            </p>
          </div>
        </div>
        <!-- end tentang toko -->
      </div>
      @endsection
    </body>
</html>