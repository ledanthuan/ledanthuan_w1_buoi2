
@extends('layouts.site')
@section('title','Đăng kí tài khoản')
<link rel="stylesheet" href="{{asset('css/register.css?v=1.0')}}">
<link rel="stylesheet" href="{{asset('css/home.css?v=1.0')}}">
@section('content')
@include('frontend.header')
    <div class="register-container">
        <h2>Đăng Kí Tài Khoản</h2>
        <form method="POST">

            <div class="form-group">
                <label for="name">Tên:</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Nhập tên..." required autofocus>
            </div>
            <div class="form-group">
                <label for="phone">Số Điện Thoại:</label>
                <input type="text" id="phone" name="phone" value="{{ old('phone') }}" placeholder="Nhập số điện thoại..." required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required>
            </div>

            <div class="form-group">
                <label for="password">Mật Khẩu:</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div class="form-group">
                <label for="password_confirmation">Xác Nhận Mật Khẩu:</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required>
            </div>

            <button type="submit">Đăng Kí</button>
        </form>
    </div>
@include('frontend.footer')
