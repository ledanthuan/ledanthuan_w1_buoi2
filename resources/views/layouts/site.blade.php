<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compalible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>@yield('title')</title>

    <style>
        /* Chọn phần tử có id="slide-title" và áp dụng font chữ */
        #slide-title {
            font-family: "Brush Script MT", cursive;
            font-size: 130px;
            color: #e0eee0;
            /* Thay đổi font chữ ở đây */
        }
        #slide-description {
            font-family: "Monospace", cursive;
            font-style: italic;
            font-size: 19px; /* Điều chỉnh kích thước phông chữ theo nhu cầu */
            line-height: 1.5; /* Điều chỉnh độ cao dòng cho phù hợp với kích thước phông chữ */
            background: linear-gradient(120deg, rgba(0, 0, 0, 0.8), rgba(255, 255, 255, 0.3));
            filter: blur(0px);
            padding: 10px;
            border-radius: 5px;
            color: white;
        }


        #cap {
            font-family: "Brush Script MT", cursive;
            font-size: 60px;
            /* Thay đổi font chữ ở đây */
        }
    </style>


    <header>@yield('header')</header>

</head>
<body>
    <main>
        @yield('content')
    </main>
    <footer>    @yield('footer')
</footer>

</body>
</html>