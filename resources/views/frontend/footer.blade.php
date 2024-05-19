    <script src="{{ asset('js/roll.js') }}"></script>
    <link rel="stylesheet" href="{{asset('css/home.css?v=1.0')}}">

    <div>
        <a href="#footer" class="scroll-to-footer"><i class="fas fa-arrow-down"></i>Đi đến phần Footer</a> <!-- Nút di chuyển đến footer -->
        <h1 class="home-title-2" id="cap">Thông tin của MonKey.store</h1>
    </div>

    <footer>
        <section id="footer" class="how_section layout_padding">
            {{-- <div class="btn-box">
                <a href="">
                    Read More
                </a>
            </div> --}}
            <div class="footer-container">
                <div class="footer-box">
                    <h5>About Us</h5>
                    <p>MonKey.store is your one-stop shop for all your monkey merchandise needs. </p>
                    <p>Founded in 2010, MonKey.store has grown from a small online shop into a beloved brand with a loyal customer 
                    base. We believe in the power of fun and joy that our products can bring to everyday life, and we're committed to 
                    delivering excellent customer service to each and every one of our shoppers.</p>

                </div>
                <div class="footer-box">
                    <h5>Store Address</h5>
                    <p>20 Tăng Nhơn Phú,<br>phường Phước Long B,<br>Thủ Đức, TPHCM</p>
                    <p>Our store is located in the heart of Safari City, easily accessible by public transport and with ample parking 
                    available. Come visit us and explore our wide range of monkey merchandise in person! </p>
                </div>
                <div class="footer-box">
                    <h5>Contact Information</h5>
                    <p>Email: support@monkey.store<br>Phone: (123) 456-7890</p>
                    <p>We’re here to help! If you have any questions, concerns, or feedback, feel free to reach out to us via email 
                    or phone. Our customer service team is available Monday to Friday from 9 AM to 6 PM. We strive to respond to all 
                    inquiries within 24 hours.</p>

                </div>
                <div class="footer-box">
                    <h5>Follow Us </h5>   
                <div class="social-links">
                    <a href="https://facebook.com/profile.php?mibextid=AEUHqQ" target="_blank"><i class="fab fa-facebook"></i> Facebook</a>
                    <a href="https://instagram.com/daqthuanf?igsh=MWxzdTNiaGlpcmRmcg%3D%3D&utm_source=qr" target="_blank"><i class="fab fa-instagram"></i> Instagram</a>
                    <a href="https://" target="_blank"><i class="fab fa-telegram-plane"></i> Telegram</a>
                    <a href="https://" target="_blank"><i class="fab fa-twitter"></i> Twiter</a>
                </div>
                </div>
                <div class="footer-box">
                    <h5>Customer Service</h5>
                    <p>Your satisfaction is our priority. Check out our <a href="/faq" target="_blank">FAQ page</a> 
                    for answers to common questions. For returns and exchanges, please visit our <a href="/returns" 
                    target="_blank">Returns Policy page</a>.</p>
                    <p>We understand that sometimes things don’t go as planned, which is why we have a hassle-free return and 
                    exchange policy. If you’re not completely satisfied with your purchase, simply return it within 30 days for a 
                    full refund or exchange. Our customer service team is here to assist you every step of the way.</p>
                    <p>Additionally, we offer free shipping on orders over $50 and provide tracking information for all shipments. 
                    For more details on shipping rates and delivery times, please visit our <a href="/shipping" 
                    target="_blank">Shipping Information page</a>.</p>
                </div>
                <div class="footer-box">
                    <h5>Newsletter</h5>
                    <p>Sign up for our newsletter to receive exclusive offers, news, and updates about new arrivals. Our newsletter 
                    is packed with the latest trends, special discounts, and exciting news from the world of MonKey.store.</p>
                    <p>As a subscriber, you'll be the first to know about our flash sales, new product launches, and special events. 
                    Plus, you'll get access to subscriber-only discounts and promotions. Don’t miss out on the fun – join our 
                    community today!</p>                    
                    <form action="/subscribe" method="post">
                        <input type="email" name="email" placeholder="Enter your email" required>
                        <button type="submit">Subscribe</button>
                    </form>
                </div>
            </div>
                <div>
                    <a href="#header" class="scroll-to-header"><i class="fas fa-arrow-up"></i>Trở về đầu trang</a> 
                </div>
                <div class="footer-horizontal">
                    <img src="{{ asset('images/logo.jpg') }}" alt="Footer Image" class="footer-image">
                    <h1 class="footer-title">MonKey.store</h1>
                </div>  
      
        </section>
            {{-- <script>
    document.addEventListener('DOMContentLoaded', function() {
        const header = document.querySelector('header');

        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();

                header.scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    });
</script> --}}


    </footer>
