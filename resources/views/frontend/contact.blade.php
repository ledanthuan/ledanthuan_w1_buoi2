@extends('layouts.site')
@section('title','Liên hệ')
<link rel="stylesheet" href="{{asset('css/contact.css?v=1.0')}}">
<link rel="stylesheet" href="{{asset('css/home.css?v=1.0')}}">
@section('content')
@include('frontend.header')
    <div class="contact-container">
        <h1>Liên Hệ</h1>
        <p>Chúng tôi rất vui lòng được nghe từ bạn! Vui lòng điền vào biểu mẫu dưới đây để liên hệ với chúng tôi.</p>
        
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        
        <form method="POST">
            <div class="form-group">
                <label for="name">Tên:</label>
                <input type="text" id="name" name="name" placeholder="Nhập tên của bạn..." required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Nhập email của bạn..." required>
            </div>
            <div class="form-group">
                <label for="message" >Tin nhắn:</label>
                <textarea id="message" name="message" rows="4" placeholder="Nhập nội dung phản hồi mà bạn muốn gửi đến chúng tôi..." required></textarea>
            </div>
            <button type="submit">Gửi</button>
        </form>
        
        <div class="social-media">
            <h3>Liên hệ hoặc theo dõi chúng tôi qua</h3>
            <a href="https://facebook.com/profile.php?mibextid=AEUHqQ" target="_blank"><i class="fab fa-facebook"></i> Facebook</a>
            <a href="https://instagram.com/daqthuanf?igsh=MWxzdTNiaGlpcmRmcg%3D%3D&utm_source=qr" target="_blank"><i class="fab fa-instagram"></i> Instagram</a>
        </div>
    </div>
    @include('frontend.footer')