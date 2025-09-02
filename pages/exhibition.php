<div class="exhibition-container">
        <div class="exhibition-banner">
            <img src="https://mir-s3-cdn-cf.behance.net/project_modules/1400/0683e897312983.5ec27c3da581b.jpg" alt="Shoe Exhibition">
            <div class="exhibition-banner-text">
                <h1>Triển Lãm Giày</h1>
                <p>Khám phá các sự kiện sneaker nổi bật cùng MY SHOE</p>
            </div>
        </div>
        <div class="events-section">
            <h2>Các Sự Kiện Sắp Tới</h2>
            <div class="event-filter">
                <button class="filter-btn active" data-filter="all">Tất Cả</button>
                <button class="filter-btn" data-filter="nike">Nike</button>
                <button class="filter-btn" data-filter="sneaker">Sneaker Chung</button>
            </div>
            <div class="event-grid" id="eventGrid">
                <div class="event-card" data-category="nike">
                    <img src="https://i.ytimg.com/vi/icMQWg8j1MQ/maxresdefault.jpg" alt="Nike Air Max Day">
                    <div class="event-card-content">
                        <h3>Nike Air Max Day 2025</h3>
                        <p class="event-date">20/03/2025 - TP.HCM</p>
                        <p>Tham gia lễ kỷ niệm Air Max với các mẫu giày mới nhất và trải nghiệm công nghệ đệm khí độc đáo.</p>
                    </div>
                </div>
                <div class="event-card" data-category="sneaker">
                    <img src="https://channel.mediacdn.vn/prupload/879/2018/06/img20180628195335119.jpg" alt="Sneaker Fest">
                    <div class="event-card-content">
                        <h3>Sneaker Fest Vietnam</h3>
                        <p class="event-date">15/05/2025 - Hà Nội</p>
                        <p>Hội tụ các thương hiệu sneaker hàng đầu, bao gồm Nike, với các hoạt động giao lưu và triển lãm.</p>
                    </div>
                </div>
                <div class="event-card" data-category="nike">
                    <img src="https://file.hstatic.net/1000061481/file/3_9a6b53627f4b4f6eb8f9d461df305412.jpg" alt="Nike Flyknit Showcase">
                    <div class="event-card-content">
                        <h3>Nike Flyknit Showcase</h3>
                        <p class="event-date">10/08/2025 - Đà Nẵng</p>
                        <p>Khám phá công nghệ Flyknit với các mẫu giày nhẹ, thoáng khí và phong cách.</p>
                    </div>
                </div>
                <div class="event-card" data-category="sneaker">
                    <img src="https://internetretailing.net/wp-content/uploads/2023/03/eBay-Swap-Em-Out-Sneakers-trainers-Screenshot-2023-03-02-at-10.25.12.png" alt="Sneaker Swap">
                    <div class="event-card-content">
                        <h3>Sneaker Swap 2025</h3>
                        <p class="event-date">25/10/2025 - TP.HCM</p>
                        <p>Sự kiện trao đổi giày sneaker lớn nhất Việt Nam, nơi bạn có thể tìm thấy những đôi Nike độc đáo.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="registration-section">
            <h2>Đăng Ký Tham Gia</h2>
            <p>
                Đừng bỏ lỡ cơ hội tham gia các sự kiện sneaker độc quyền cùng My Shoe! Đăng ký ngay để nhận vé và cập nhật thông tin mới nhất.
            </p>
            <form class="registration-form">
                <input type="text" placeholder="Họ và Tên" required>
                <input type="email" placeholder="Email" required>
                <select required>
                    <option value="" disabled selected>Chọn Sự Kiện</option>
                    <option value="airmax">Nike Air Max Day 2025</option>
                    <option value="sneakerfest">Sneaker Fest Vietnam</option>
                    <option value="flyknit">Nike Flyknit Showcase</option>
                    <option value="sneakerswap">Sneaker Swap 2025</option>
                </select>
                <button type="submit">Đăng Ký Ngay</button>
            </form>
        </div>
        <div class="gallery-section">
            <h2>Hình Ảnh Từ Các Sự Kiện Trước</h2>
            <div class="gallery-grid">
                <div class="gallery-item">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRl16u7VxCdvSOwQ-SHgGDdZehdyZd9atNIiA&s" alt="Past Event 1">
                </div>
                <div class="gallery-item">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR1dtHbKNhIwEbSIyykkQBQT80ihEe3p9tFVg&s" alt="Past Event 2">
                </div>
                <div class="gallery-item">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSg3OQ4Uq3hCX1h2E8HedVW06b8RseUAVJTvA&s" alt="Past Event 3">
                </div>
                <div class="gallery-item">
                    <img src="https://cdn.brvn.vn/topics/1280px/2023/331876_331876-Nike-Air-Max-Day-2023-c_1683532698.jpg" alt="Past Event 4">
                </div>
            </div>
        </div>
        <div class="cta-section">
            <h2>Tham Gia Cộng Đồng Sneaker</h2>
            <p>
                Hãy cùng My Shoe khám phá thế giới sneaker sôi động! Theo dõi chúng tôi để cập nhật các sự kiện mới nhất và sở hữu những đôi Nike độc quyền.
            </p>
            <a href="indexSeenAll.php?page=1" class="cta-button">Khám Phá Bộ Sưu Tập</a>
        </div>
    </div>
    <script>
        const filterButtons = document.querySelectorAll('.filter-btn');
        const eventCards = document.querySelectorAll('.event-card');

        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                filterButtons.forEach(btn => btn.classList.remove('active'));
                button.classList.add('active');

                const filter = button.getAttribute('data-filter');
                eventCards.forEach(card => {
                    if (filter === 'all' || card.getAttribute('data-category') === filter) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });
    </script>