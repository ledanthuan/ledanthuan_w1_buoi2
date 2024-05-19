    <header>
        <div class="logo">
            <img src="{{ asset('images/logo.jpg') }}" alt="Logo">
            <h1>MonKey</h1>
        </div>
        <nav>
            <ul>
                <li><a href="index.php"><i class="fas fa-home"></i> Trang chủ</a></li>
                <li><a href="#"></i>Mục sản phẩm <i class="fas fa-caret-down"></i></a></li>
                <li><a href="lien-he"><i class="fas fa-envelope"></i> Liên hệ</a></li>
                <li><a href="login">Đăng nhập</a></li>
                <li><a href="register">Đăng kí</a></li>
                <li><a href="#"><i class="fas fa-shopping-cart"></i> Giỏ hàng</a></li>
            </ul>
        </nav>
        <div class="search-container">
            <form method="GET" action="search.php">
                <input type="text" name="keyword" placeholder="Search..." class="search-box">
                <button type="submit" class="search-button">Search <i class="fas fa-search"></i></button>
            </form>
        </div>
    </header>
