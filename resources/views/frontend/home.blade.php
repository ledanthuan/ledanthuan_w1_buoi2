@extends('layouts.site')
@section('title','Trang chủ')
@section('content')
<link rel="stylesheet" href="{{asset('css/home.css?v=1.0')}}">
<script src="{{ asset('js/slide.js') }}"></script>
<script src="{{ asset('js/button.js') }}"></script>


<h1 class="name-web">MonKey.store</h1>
<body>
@include('frontend.header')
    <div class="slide">
        <button class="prev" onclick="changeSlide(-1)">&#10094;</button>
        <div class="slide-container">
            <img src="images/slide1.jpg" alt="Slide 1">
            <div class="slide-content">
                <h2 id="slide-title">Nike</h2>
                <p id="slide-description">Nike chính hãng, mới nhất và hot nhất trên thị trường. 
                Dù bạn là một vận động viên chuyên nghiệp, một người yêu thích thể thao hay đơn giản 
                là một tín đồ của thời trang sneaker, bộ sưu tập của chúng tôi chắc chắn sẽ khiến bạn hài lòng.</p>
                <img src="images/nike.png" alt="Slide 1">
            </div>
        </div>
        <div class="slide-container" style="display: none;">
            <img src="images/slide1.jpg" alt="Slide 2">
            <div class="slide-content">
                <h2 id="slide-title">Converse</h2>
                <p id="slide-description">Các dòng sản phẩm của converse Một số dòng sản phẩm của Converse 
                rất được yêu thích tại Supersports như: Chuck 70 Classic, Chuck Taylor All Star Classic, 
                Converse Twisted Classics,...</p>
                <img src="images/converse.jpg" alt="Slide 1">
            </div>
        </div>
        <div class="slide-container" style="display: none;">
            <img src="images/slide1.jpg" alt="Slide 3">
            <div class="slide-content">
                <h2 id="slide-title">Vans</h2>
                <p id="slide-description">Vans mang đến sự cân bằng hoàn hảo để phối hợp với nhiều 
                phong cách thời trang khác nhau, thích ứng dễ dàng trong nhiều môi trường khác nhau. </p>
                <img src="images/vans.jpg" alt="Slide 1">
            </div>
        </div>
    </div>
    <button class="next" onclick="changeSlide(1)">&#10095;</button>

    <section class="how_section layout_padding">
        <div class="heading_container">
            <h1 class="home-title">
                Mục Sản Phẩm
            </h1>
        </div>
        <div class="how_container">
            <div class="box">
                <div class="img-box">
                    <img src="images/icon-quanao.png" alt="quanao">
                </div>
                <div class="detail-box">
                    <h4>
                        Quần áo
                    </h4>
                    <p>
                        Quần áo chất lượng vơi những mẫu mã hợp thời trang hiện nay
                    </p>
                </div>
            </div>
            <div class="box">
                <div class="img-box">
                    <img src="images/icon-giay.png" alt="giay">
                </div>
                <div class="detail-box">
                    <h4>
                        Giày

                    </h4>
                    <p>
                        Những mẫu giày mang thương hiệu nổi tiếng với nhiều mẫu mã đa dạng năng động hợp xu hướng
                    </p>
                </div>
            </div>
            <div class="box">
                <div class="img-box">
                    <img src="images/icon-balo.webp" alt="quanao">
                </div>
                <div class="detail-box">
                    <h4>
                        Quần Áo
                    </h4>
                    <p>
                        Balo và túi xách thời trang phong cách phù hợp trong nhiều hoạt động
                    </p>
                </div>
            </div>
    </section>

    <h1 class="home-title-2" id="cap">Sản phẩm của chúng tôi</h1>
    <div class="product-list">
        <div class="product">
            <img src="images/product1.jpg" alt="Product 1">
            <h2>Áo Polo</h2>
            <p>Mô tả: Đây là một chiếc áo polo rất phong cách và thoải mái.</p>
            <div class="price">Giá: $20</div>
            <button class="buy-button">Mua ngay</button>
        </div>
        <div class="product">
            <img src="images/product2.jpg" alt="Product 2">
            <h2>Quần jeans</h2>
            <p>Mô tả: Chiếc quần jeans dáng ôm với chất liệu vải co giãn tốt, phù hợp cho mọi hoạt động.</p>
            <div class="price">Giá: $30</div>
            <button class="buy-button">Mua ngay</button>
        </div>
        <div class="product">
            <img src="images/product3.jpg" alt="Product 3">
            <h2>Giày da</h2>
            <p>Mô tả: Đôi giày da chất liệu nhẹ nhàng và thoáng khí, rất phù hợp cho các hoạt động thể dục.</p>
            <div class="price">Giá: $40</div>
            <button class="buy-button">Mua ngay</button>
        </div>
        <div class="product">
            <img src="images/product1.jpg" alt="Product 1">
            <h2>Áo Polo</h2>
            <p>Mô tả: Đây là một chiếc áo polo rất phong cách và thoải mái.</p>
            <div class="price">Giá: $20</div>
            <button class="buy-button">Mua ngay</button>
        </div>

    </div>


    {{-- FOOTER --}}
    @include('frontend.footer')
    
</body>

@endsection
{{-- Cuộn mượt xuống footer --}}
{{-- <script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();

                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    });
</script> --}}
{{-- @section('header') --}}
{{-- <link rel="stylesheet" href="home.css"> --}}
{{-- @endsection --}}
