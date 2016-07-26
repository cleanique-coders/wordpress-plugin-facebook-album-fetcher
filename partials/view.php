 <style>
.swiper-container {
    width: 100%;
}
.swiper-slide {
    background-position: center;
    background-size: contain;
    background-repeat: no-repeat; 
    min-height: 300px;
    width: <?php echo $a['width']; ?>;
    <?php echo !empty($a['height']) ? $a['height']:''; ?>;
}
</style>

<div class="swiper-container">
    <div class="swiper-wrapper">
    	<?php foreach ($images as $key => $value): ?>
    		<div class="swiper-slide" style="background-image:url(<?php echo $value; ?>)"></div>
    	<?php endforeach ?>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
</div>

<script>
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        autoplay: 3000,
        coverflow: {
            rotate: -50,
            stretch: 0,
            depth: 150,
            modifier: 1,
            slideShadows : false
        }
    });
</script>