<?php
// 1. Dữ liệu sản phẩm mẫu (có thêm trường 'badge' để hiển thị 'Mới' hoặc '% giảm giá')
$products = [
    [
        'id' => 1,
        'name' => 'Lumos Classic',
        'price' => 1250000,
        'image_url' => 'assets/client/images/products/item1.jpg',
        'rating' => 5.0,
        'badge' => 'Mới', // Thêm badge 'Mới'
    ],
    [
        'id' => 2,
        'name' => 'Lumos Premium',
        'price' => 1850000,
        'image_url' => 'assets/client/images/products/item2.jpg',
        'rating' => 5.0,
        'badge' => null, // Không có badge
    ],
    [
        'id' => 3,
        'name' => 'Lumos Sport',
        'price' => 2150000,
        'image_url' => 'assets/client/images/products/item3.jpg',
        'rating' => 5.0,
        'badge' => '-15%', // Thêm badge giảm giá
    ],
    [
        'id' => 4,
        'name' => 'Lumos Trendy',
        'price' => 1500000,
        'image_url' => 'assets/client/images/products/item4.jpg',
        'rating' => 4.5, // Giả sử sản phẩm này 4.5 sao
        'badge' => null,
    ],
    [
        'id' => 5,
        'name' => 'Lumos Aviator',
        'price' => 2500000,
        'image_url' => 'assets/client/images/products/item5.jpg', // Ảnh ví dụ
        'rating' => 5.0,
        'badge' => null,
    ],
];

// Hàm trợ giúp để hiển thị sao (giữ lại từ ví dụ trước)
function display_stars($rating) {
    $output = '';
    $full_stars = floor($rating);
    for ($i = 0; $i < $full_stars; $i++) {
        $output .= '<iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>';
    }
    // Bạn có thể thêm logic cho sao rưỡi hoặc sao rỗng tại đây nếu cần
    return $output;
}
?>

<!-- 2. Mã HTML với vòng lặp PHP tích hợp -->
<section id="featured-products" class="my-5 overflow-hidden">
    <div class="container pb-5">

        <div class="section-header d-md-flex justify-content-between align-items-center mb-3">
            <h2 class="display-3 fw-normal">Kính Mắt Nổi Bật</h2>
            <div>
                <a href="#" class="btn btn-outline-dark btn-lg text-uppercase fs-6 rounded-1">
                    Xem tất cả
                    <svg width="24" height="24" viewBox="0 0 24 24" class="mb-1">
                        <use xlink:href="#arrow-right"></use>
                    </svg></a>
            </div>
        </div>

        <div class="products-carousel swiper">
            <!-- Vị trí bắt đầu của Swiper Wrapper -->
            <div class="swiper-wrapper">

                <!-- BẮT ĐẦU VÒNG LẶP PHP -->
                <?php foreach ($products as $product): ?>

                <div class="swiper-slide">
                    <!-- Hiển thị Badge (Mới / Sale) nếu có -->
                    <?php if ($product['badge']): ?>
                    <div class="z-1 position-absolute rounded-3 m-3 px-3 border border-dark-subtle bg-white">
                        <?= htmlspecialchars($product['badge']) ?>
                    </div>
                    <?php endif; ?>
                    
                    <div class="card position-relative border-0 shadow-sm">
                        <!-- Hình ảnh -->
                        <a href="single-product.html?id=<?= $product['id'] ?>">
                            <img src="<?= htmlspecialchars($product['image_url']) ?>"
                                class="img-fluid rounded-4" alt="<?= htmlspecialchars($product['name']) ?>">
                        </a>
                        
                        <div class="card-body p-0">
                            <!-- Tên sản phẩm -->
                            <a href="single-product.html?id=<?= $product['id'] ?>">
                                <h3 class="card-title pt-4 m-0"><?= htmlspecialchars($product['name']) ?></h3>
                            </a>

                            <div class="card-text">
                                <!-- Đánh giá -->
                                <span class="rating secondary-font">
                                    <?= display_stars($product['rating']) ?>
                                    <?= htmlspecialchars($product['rating']) ?>
                                </span>

                                <!-- Giá -->
                                <h3 class="secondary-font text-primary">
                                    <?= number_format($product['price'], 0, ',', '.') ?>₫
                                </h3>

                                <div class="d-flex flex-wrap mt-3">
                                    <a href="#" class="btn-cart me-3 px-4 pt-3 pb-3">
                                        <h5 class="text-uppercase m-0">Thêm vào giỏ</h5>
                                    </a>
                                    <a href="#" class="btn-wishlist px-4 pt-3 ">
                                        <iconify-icon icon="fluent:heart-28-filled" class="fs-5"></iconify-icon>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php endforeach; ?>
                <!-- KẾT THÚC VÒNG LẶP PHP -->

            </div> 
            <!-- Vị trí kết thúc của Swiper Wrapper -->

            <!-- Nếu bạn dùng Swiper navigation (mũi tên tiến/lùi) thì thêm div này vào đây -->
            <!-- <div class="swiper-button-next"></div> -->
            <!-- <div class="swiper-button-prev"></div> -->

        </div>
    </div>
</section>
