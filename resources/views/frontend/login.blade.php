@extends('layouts.site')
@section('title','Đăng nhập tài khoản')
<link rel="stylesheet" href="{{asset('css/login.css?v=1.0')}}">
<link rel="stylesheet" href="{{asset('css/home.css?v=1.0')}}">
@section('content')
    @include('frontend.header')
    <div class="login-container">
        <h2>Đăng Nhập</h2>
        <form method="post">
            <div class="input-group">
                <label for="username">Tên Đăng Nhập</label>
                <input type="text" id="username" name="username" value="{{ old('username') }}" required>
                @error('username')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <div class="input-group">
                <label for="password">Mật Khẩu</label>
                <input type="password" id="password" name="password" required>
                @error('password')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit">Đăng Nhập</button>
        </form>
    </div>
@include('frontend.footer')