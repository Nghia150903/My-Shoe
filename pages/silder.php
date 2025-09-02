<div class="silder w-screen relative left-1/2 right-1/2 -translate-x-1/2">
    <div class="overflow w-screen relative">
        <div class="silder-img-animation w-screen h-[1000px] relative">
            <img src="https://d53bpfpeyyyn7.cloudfront.net/Pictures/2000xAny/9/6/0/3108960_nikeshop_86825.jpg" alt="Banner Nike" class="slider-img absolute top-0 left-0 w-full h-full object-contain bg-black transition-all duration-700">
            <img src="image/slider2.jpg" alt="" class="slider-img absolute top-0 left-0 w-full h-full object-contain bg-black transition-all duration-700">
            <img src="https://media.licdn.com/dms/image/v2/D4E12AQGIZNe6WhnFyw/article-cover_image-shrink_720_1280/article-cover_image-shrink_720_1280/0/1738663133150?e=2147483647&v=beta&t=vDPrixqQD6Gz5H_jCd0QUdjlyc6yQEsk2wy5lzsoNfU" alt="" class="slider-img absolute top-0 left-0 w-full h-full object-contain bg-black transition-all duration-700">
            <img src="https://sourcingjournal.com/wp-content/uploads/2023/09/nikemostvaluablebrand2023.jpg" alt="" class="slider-img absolute top-0 left-0 w-full h-full object-contain bg-black transition-all duration-700">
            <img src="https://cdn.prod.website-files.com/6630e01961a932246ebda785/66d84bbb06b0151d3d06a536_How%20Nike%20Engages%20Customers%20Through%20Digital%20Innovation%20in%20Customer%20Experience%20(CX).webp" alt="" class="slider-img absolute top-0 left-0 w-full h-full object-contain bg-black transition-all duration-700">
            <img src="image/slider6.jpg" alt="" class="slider-img absolute top-0 left-0 w-full h-full object-contain bg-black transition-all duration-700">
        </div>
        <!-- Nút chuyển slide -->
        <button class="slider-btn prev-btn">&#10094;</button>
        <button class="slider-btn next-btn">&#10095;</button>
        <!-- Dot chuyển slide -->
        <div class="slider-dots"></div>
    </div>
</div>

<script>
const imgSlider = document.querySelectorAll('.slider-img');
const slider = document.querySelector('.silder-img-animation');
const prevBtn = document.querySelector('.prev-btn');
const nextBtn = document.querySelector('.next-btn');
const dotsContainer = document.querySelector('.slider-dots');
let isNumber = imgSlider.length;
let index = 0;

// Set vị trí ảnh
imgSlider.forEach(function(img, idx) {
    img.style.left = idx * 100 + "%";
});

// Tạo dots
for(let i=0; i<isNumber; i++) {
    let dot = document.createElement('span');
    dot.className = 'slider-dot' + (i===0 ? ' active' : '');
    dot.dataset.index = i;
    dotsContainer.appendChild(dot);
}

// Chuyển slide
function showSlide(i) {
    index = i;
    slider.style.left = "-" + index * 100 + "%";
    document.querySelectorAll('.slider-dot').forEach((dot, idx) => {
        dot.classList.toggle('active', idx === index);
    });
}
function run() {
    index++;
    if(index >= isNumber) index = 0;
    showSlide(index);
}
let autoRun = setInterval(run, 3000);

// Nút qua lại
prevBtn.onclick = function() {
    index = (index - 1 + isNumber) % isNumber;
    showSlide(index);
    resetAuto();
}
nextBtn.onclick = function() {
    index = (index + 1) % isNumber;
    showSlide(index);
    resetAuto();
}

// Dot click
document.querySelectorAll('.slider-dot').forEach(dot => {
    dot.onclick = function() {
        showSlide(Number(dot.dataset.index));
        resetAuto();
    }
});

// Reset auto khi click
function resetAuto() {
    clearInterval(autoRun);
    autoRun = setInterval(run, 3000);
}
document.addEventListener('DOMContentLoaded', function() {
    var modalClick = document.getElementById('modal-click');
    var nextBtn = document.querySelector('.slider-btn.next-btn');
    var prevBtn = document.querySelector('.slider-btn.prev-btn');

    function updateSliderBtnVisibility() {
        var isOpen = modalClick && modalClick.checked;
        if (nextBtn) {
            nextBtn.style.visibility = isOpen ? 'hidden' : 'visible';
            nextBtn.style.opacity = isOpen ? '0' : '1';
            nextBtn.style.pointerEvents = isOpen ? 'none' : 'auto';
        }
        if (prevBtn) {
            prevBtn.style.visibility = isOpen ? 'hidden' : 'visible';
            prevBtn.style.opacity = isOpen ? '0' : '1';
            prevBtn.style.pointerEvents = isOpen ? 'none' : 'auto';
        }
    }

    if (modalClick) {
        modalClick.addEventListener('change', updateSliderBtnVisibility);
        updateSliderBtnVisibility();
    }
});
</script>



    