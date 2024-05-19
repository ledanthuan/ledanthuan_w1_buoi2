document.addEventListener('DOMContentLoaded', function() {
    // Sự kiện click cho nút di chuyển đến footer
    document.querySelector('.scroll-to-footer').addEventListener('click', function(event) {
        event.preventDefault();
        document.querySelector('#footer').scrollIntoView({ behavior: 'smooth' });
    });

    // Sự kiện click cho nút trở về đầu trang
    document.querySelector('.scroll-to-header').addEventListener('click', function(event) {
        event.preventDefault();
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
});
