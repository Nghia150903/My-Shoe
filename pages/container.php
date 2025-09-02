<section class="section1">
    <div class="grid wide">
        <div class="section1-block">
            <div class="section1-block1">
                <i class="fa-solid fa-ranking-star"></i>
                <p>Hàng chính hảng 100%</p>
            </div>
            <div class="section1-block2">
                <i class="fa-solid fa-truck-fast"></i>
                <p>Miễn phí giao hàng với đơn >500k</p>
            </div>
            <div class="section1-block3">
                <i class="fa-solid fa-right-left"></i>
                <p>Đổi hàng 30 ngày, Bảo hành lên đến 6 tháng</p>
            </div>
            <div class="section1-block4">
                <i class="fa-solid fa-credit-card"></i>
                <p>Thanh toán linh hoạt, bảo mật tuyệt đối</p>
            </div>
        </div>
    </div>
</section>
<div class="promo-row">
    <div class="promo-card">
        <img src="https://bizweb.dktcdn.net/100/340/361/themes/913887/assets/lookbook_1_image.jpg?1753158264387" alt="Khuyến mãi 800k">
    </div>
    <div class="promo-card">
        <img src="https://bizweb.dktcdn.net/100/340/361/themes/913887/assets/lookbook_2_image.jpg?1753158264387" alt="Hè tới outfit mới">
    </div>
    <div class="promo-card">
        <img src="https://bizweb.dktcdn.net/100/340/361/themes/913887/assets/lookbook_3_image.jpg?1753158264387" alt="T-shirt phong cách">
    </div>
</div>
<div id="container" class="container">
    <div class="grid wide">
        <div class="container-text">
            <h1 id="footer">NEW ARRIVAL</h1>
        </div>

        <div class="container-name-product">
            <ul class="container-name-list">
                <?php
                $sql_lietke = "SELECT * FROM tbl_danhmucsanpham ORDER BY id_danhmuc";
                $sql_query = mysqli_query($mysqli,$sql_lietke);
                $i = 0;
                while ($row = mysqli_fetch_array($sql_query)) {
                    $i++;
                ?>
                <li class="container-name-item">
                    <a href="" class="container-name-item-link" id="<?php echo $row['id_danhmuc'] ?>" ><?php echo $row['tendanhmucsanpham'] ?></a>
                </li>
                <?php
                }
                ?>
            </ul>
        </div>

        <div id="container-product" class="container-product">                   
    
        </div>
    </div>
</div>
<section class="promo-banner-section">
    <img class="promo-banner-img" src="image/BOTW_15-22.07_1545_500_V_1024x1024.jpg" alt="Banner khuyến mãi">
</section>
<div class="frame-container">
    <div class="title-text">BỘ SƯU TẬP MỚI</div>
    <button class="button" id="new-collection-prev"><</button>
    <div class="frames" id="frames">
        <div class="frame"><img src="https://supersports.com.vn/cdn/shop/files/T07_NL_DAS_ADIZERO_VN_322c218c-5bf9-497b-8ca3-76fe939ae1ad.jpg?v=1751508975&width=832" alt="Adidas Adizero"></div>
        <div class="frame"><img src="https://supersports.com.vn/cdn/shop/files/T06_NL_ASICS_GEL-KAYANO_32_VN.jpg?v=1750995676&width=832" alt="Adidas ZNE"></div>
        <div class="frame"><img src="https://supersports.com.vn/cdn/shop/files/T07_NL_TEVA_AVENTRAIL_VN.jpg?v=1751336445&width=832" alt="Asics Gel-Kayano 32"></div>
        <div class="frame"><img src="https://supersports.com.vn/cdn/shop/files/T07_NL_hoka_Rocket_X_3_VN_e06e49a5-710b-4751-9b65-a494e88d0ce1.jpg?v=1751508875&width=832" alt="Teva Aventrail"></div>
        <div class="frame"><img src="https://supersports.com.vn/cdn/shop/files/T06_NL_hoka_Arahi_8_VN_f1775719-50d8-4d66-883a-3a59932bdee0.jpg?v=1751509982&width=832" alt="Speedo Vanquisher"></div>
        <div class="frame"><img src="https://supersports.com.vn/cdn/shop/files/T07_NL_TEVA_TERRA_FI_5_VN.jpg?v=1751508981&width=832" alt="Under Armour Sum Meri"></div>
        <div class="frame"><img src="https://supersports.com.vn/cdn/shop/files/T07_NL_DAS_ZNE_VN.jpg?v=1751508969&width=832" alt="Extra Image 1"></div>
    </div>
    <button class="button" id="new-collection-next">></button>
</div>
<div class="container-seller">
    <div class="grid wide">
        <div class="container-text">
            <h1 id="footer">BEST SELLER</h1>
        </div>

        <div class="container-name-product">
            <ul class="container-name-list">
                <?php
                $sql_lietke = "SELECT * FROM tbl_danhmucsanpham ORDER BY id_danhmuc";
                $sql_query = mysqli_query($mysqli,$sql_lietke);
                while ($row = mysqli_fetch_array($sql_query)) {
                ?>
                <li class="containerSell">
                    <a href="" class="container-name-item-link-seller" id="<?php echo $row['id_danhmuc'] ?>" ><?php echo $row['tendanhmucsanpham'] ?></a>
                </li>
                <?php
                }
                ?>
            </ul>
        </div>
        <div id="container-product-seller" class="container-product">                     
        </div>
        <div class="brand-section">
    <h2 class="brand-title">THƯƠNG HIỆU NỔI BẬT</h2>
    <div class="brand-grid">
        <div class="brand-card"><img src="https://upload.wikimedia.org/wikipedia/commons/2/20/Adidas_Logo.svg" alt="Adidas"></div>
        <div class="brand-card"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/44/Under_armour_logo.svg/2560px-Under_armour_logo.svg.png" alt="Under Armour"></div>
        <div class="brand-card"><img src="https://jhoutdoors.com/cdn/shop/collections/brand-image-4_6da466d0-aac1-4eb5-acd4-97462e3abd33_1200x1200.png?v=1666367141" alt="Hoka"></div>
        <div class="brand-card"><img src="https://logos-world.net/wp-content/uploads/2020/09/Fila-Logo.png" alt="Fila"></div>
        <div class="brand-card"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/92/On-cloud-logo-white-background.svg/612px-On-cloud-logo-white-background.svg.png" alt="On"></div>
        <div class="brand-card"><img src="https://cdn.worldvectorlogo.com/logos/speedo.svg" alt="Speedo"></div>
        <div class="brand-card"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a6/Logo_NIKE.svg/1200px-Logo_NIKE.svg.png" alt="Nike"></div>
        <div class="brand-card"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c2/Columbia_Sportswear_Co_logo.svg/2560px-Columbia_Sportswear_Co_logo.svg.png" alt="Columbia"></div>
        <div class="brand-card"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/TevaPharm.svg/1200px-TevaPharm.svg.png" alt="Teva"></div>
        <div class="brand-card"><img src="https://raoviec.net/wp-content/uploads/wp-jobhunt-users/Skechers-Logo.png" alt="Skechers"></div>
        <div class="brand-card"><img src="https://www.cdnlogo.com/logos/c/79/crocs-wordmark.svg" alt="Crocs"></div>
        <div class="brand-card"><img src="https://upload.wikimedia.org/wikipedia/en/d/da/Puma_complete_logo.svg" alt="Puma"></div>

    </div>
</div>
          <div class="carousel">
          <div class="title-text">MÔN THỂ THAO YÊU THÍCH</div>
        <button class="carousel-btn prev1-btn" disabled><</button>
        <div class="carousel-container">
            <div class="carousel-slide">
                <img src="https://supersports.com.vn/cdn/shop/files/HP_SPORT_OUTDOOR_VN.png?v=1747644464&width=352" alt="Thể Thao Ngôi Trời">
            </div>
            <div class="carousel-slide">
                <img src="https://supersports.com.vn/cdn/shop/files/HP_SPORT_Football_VN.png?v=1747644326&width=352" alt="Bóng Đá">
            </div>
            <div class="carousel-slide">
                <img src="https://supersports.com.vn/cdn/shop/files/HP_SPORT_Swimming_VN.png?v=1747644456&width=352" alt="Bơi Lội">
            </div>
            <div class="carousel-slide">
                <img src="https://supersports.com.vn/cdn/shop/files/HP_SPORT_Basketball_VN.png?v=1747644485&width=352" alt="Bóng Rổ">
            </div>
            <div class="carousel-slide">
                <img src="https://supersports.com.vn/cdn/shop/files/HP_SPORT_GOLF_EN.png?v=1747644364&width=352" alt="Golf">
            </div>
            <div class="carousel-slide">
                <img src="https://supersports.com.vn/cdn/shop/files/HP_SPORT_TENNIS_EN.png?v=1747644343&width=352" alt="Tennis">
            </div>
            <div class="carousel-slide">
                <img src="https://supersports.com.vn/cdn/shop/files/SP_YOGA_FITNESS_VN.png?v=1747644681&width=352" alt="Yoga">
            </div>
        </div>
        <button class="carousel-btn next1-btn">></button>
    </div>
    <div class="news-header">
      <h2>TIN TỨC MỚI</h2>
      <a class="view-more" href="#">
        XEM THÊM <span class="arrow">&#8594;</span>
      </a>
    </div>
    <div class="news-list">
      <div class="news-card">
        <img src="https://saigonsneaker.com/wp-content/uploads/2019/12/Triple-S-Trainer-Black-Red-2018-430x430.jpg" alt="">
        <div class="news-card-body">
          <div class="news-card-title">
            Giày Thể Thao Sneaker Mới Về Hàng (07/2025)
            <span class="badge">Ưu đãi</span>
          </div>
          <div class="news-card-desc">Giày Thể Thao Sneaker Mới Về Hàng (07/2025) ưu đãi, các thương hiệu Nike, Adidas, Jordan, Yeezy, Asics, New Balance,...</div>
          <a href="#" class="news-card-meta">XEM THÊM <span class="arrow">&#8594;</span></a>
        </div>
      </div>
      <div class="news-card">
        <img src="https://media.vneconomy.vn/640x360/images/upload/2025/03/12/1632614962-sneaker-reselling-feat2.jpg" alt="">
        <div class="news-card-body">
          <div class="news-card-title">
            Giày Sneaker Mới Về Hàng (07/2025)
            <span class="badge">Đa mẫu mã</span>
          </div>
          <div class="news-card-desc">Giày Sneaker Mới Về Hàng (07/2025) đa dạng mẫu mã ưu đãi, các thương hiệu Nike, Adidas, Jordan, Yeezy, Asics, New Balance,...</div>
          <a href="#" class="news-card-meta">XEM THÊM <span class="arrow">&#8594;</span></a>
        </div>
      </div>
      <div class="news-card">
        <img src="https://cdn.shopify.com/s/files/1/0456/5070/6581/files/cach-phan-biet-giay-sneaker-chinh-hang_600x600.jpg?v=1663556399" alt="">
        <div class="news-card-body">
          <div class="news-card-title">Sneakers | #1 Chính Hãng, Uy tín 2026
            <span class="badge">✔ Xu hướng</span>
          </div>
          <div class="news-card-desc">Giày sneakers chính hãng, các thương hiệu Nike, Adidas, Jordan, Yeezy, Asics, New Balance, Puma,... Mẫu mã mới nhất 2025,...</div>
          <a href="#" class="news-card-meta">XEM THÊM <span class="arrow">&#8594;</span></a>
        </div>
      </div>
      <div class="news-card">
        <img src="https://kingshoes.vn/data/upload/media/images/11-2024/huyen-binh-chanh-mua-giay-sneaker-hang-hieu-chinh-hang-uy-tin-o-dau.jpg" alt="">
        <div class="news-card-body">
          <div class="news-card-title">Sneaker | #1 Chính Hãng, Uy tín 2025
            <span class="badge">✔ Hot</span>
          </div>
          <div class="news-card-desc">Giày sneaker chính hãng, các thương hiệu Nike, Adidas, Jordan, Yeezy, Asics, New Balance, Puma,... Mẫu mã mới nhất 2025,...</div>
          <a href="#" class="news-card-meta">XEM THÊM <span class="arrow">&#8594;</span></a>
        </div>
      </div>
    </div>
    
    </div>
</div>


<script>
    // Load trang bằng ajax
    var aTags = $('.container-name-item-link');
    var idanhmuc = aTags[0].id
    aTags.click(function(e){
        e.preventDefault();
        idanhmuc = e.currentTarget.id;
        $("#container-product").load(`pages/content/trangchu.php?id=${idanhmuc}`);
        console.log(idanhmuc)
    })
    $("#container-product").load(`pages/content/trangchu.php?id=${idanhmuc}`);

    var aTags = $('.container-name-item-link-seller');
    aTags.click(function(e){
        e.preventDefault();
        var idanhmuc = e.currentTarget.id;
        $("#container-product-seller").load(`pages/content/conProductSell.php?id=${idanhmuc}`);
    })
    $("#container-product-seller").load(`pages/content/conProductSell.php?id=${idanhmuc}`);
    

    //add class container-active
    var containerAcctive = document.querySelectorAll('.container-name-item')
    var container = document.querySelector('.container-name-item')
    container.classList.add('container-active');

    containerSellAcctive = document.querySelectorAll('.containerSell');
    containerSell = document.querySelector('.containerSell');
    containerSell.classList.add('container-active');

    


    
    //click vào cái nào add class vào cái đó và xóa cái còn lại
    containerAcctive.forEach(function(tab,index){
        tab.onclick = function(){
            document.querySelector('.container-name-item.container-active').classList.remove('container-active')          
            this.classList.add('container-active')
        }
    })

    containerSellAcctive.forEach(function(tab,index){
        tab.onclick = function(){
            document.querySelector('.containerSell.container-active').classList.remove('container-active')          
            this.classList.add('container-active')
        }
    })
    let slidePosition = 0;
        const slideWrapper = document.querySelector('.carousel-container');
        const backButton = document.querySelector('.prev1-btn');
        const forwardButton = document.querySelector('.next1-btn');
        const slideCount = document.querySelectorAll('.carousel-slide').length;

        function updateSlides() {
            const offset = -slidePosition * (100 / 6);
            slideWrapper.style.transform = `translateX(${offset}%)`;
            backButton.disabled = slidePosition === 0;
            forwardButton.disabled = slidePosition === slideCount - 1;
        }

        forwardButton.addEventListener('click', () => {
            if (slidePosition < slideCount - 1) {
                slidePosition++;
                updateSlides();
            }
        });

        backButton.addEventListener('click', () => {
            if (slidePosition > 0) {
                slidePosition--;
                updateSlides();
            }
        });

        updateSlides();
// Slider logic for BỘ SƯU TẬP MỚI (luôn hiển thị 4 ảnh chính)
let currentIndex = 0;
const frames = document.getElementById('frames');
const frameEls = document.querySelectorAll('.frame');
const totalFrames = frameEls.length;
const frameWidth = 220;
const framesPerView = 5; // Luôn hiển thị 4 ảnh

// Đặt lại width cho .frames để không bị cắt ảnh
frames.style.width = `${totalFrames * frameWidth}px`;

// Nút next/prev
const newCollectionNextBtn = document.getElementById('new-collection-next');
const newCollectionPrevBtn = document.getElementById('new-collection-prev');

function updateSlider() {
    frames.style.transform = `translateX(-${currentIndex * frameWidth}px)`;
    newCollectionPrevBtn.disabled = currentIndex === 0;
    newCollectionNextBtn.disabled = currentIndex >= totalFrames - framesPerView;
}

newCollectionNextBtn.addEventListener('click', () => {
    if (currentIndex < totalFrames - framesPerView) {
        currentIndex++;
        updateSlider();
    }
});

newCollectionPrevBtn.addEventListener('click', () => {
    if (currentIndex > 0) {
        currentIndex--;
        updateSlider();
    }
});

    // Drag/swipe support
    let isDragging = false;
    let startX = 0;

    frames.addEventListener('mousedown', (e) => {
        isDragging = true;
        startX = e.pageX;
        frames.style.transition = 'none';
    });

    document.addEventListener('mousemove', (e) => {
        if (!isDragging) return;
        const dx = e.pageX - startX;
        frames.style.transform = `translateX(${-currentIndex * frameWidth + dx}px)`;
    });

    document.addEventListener('mouseup', (e) => {
        if (!isDragging) return;
        isDragging = false;
        const dx = e.pageX - startX;
        if (dx < -50 && currentIndex < totalFrames - framesPerView) {
            currentIndex++;
        } else if (dx > 50 && currentIndex > 0) {
            currentIndex--;
        }
        frames.style.transition = 'transform 0.5s';
        updateSlider();
    });

    // Touch support (mobile)
    frames.addEventListener('touchstart', (e) => {
        isDragging = true;
        startX = e.touches[0].clientX;
        frames.style.transition = 'none';
    });
    frames.addEventListener('touchmove', (e) => {
        if (!isDragging) return;
        const dx = e.touches[0].clientX - startX;
        frames.style.transform = `translateX(${-currentIndex * frameWidth + dx}px)`;
    });
    frames.addEventListener('touchend', (e) => {
        if (!isDragging) return;
        isDragging = false;
        const dx = e.changedTouches[0].clientX - startX;
        if (dx < -50 && currentIndex < totalFrames - framesPerView) {
            currentIndex++;
        } else if (dx > 50 && currentIndex > 0) {
            currentIndex--;
        }
        frames.style.transition = 'transform 0.5s';
        updateSlider();
    });

    // Khởi tạo trạng thái ban đầu
    updateSlider();
</script>