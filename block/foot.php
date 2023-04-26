<!-- js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/inputmask/4.0.9/jquery.inputmask.bundle.min.js"></script>

<?php if ($site_set['swiper'] != 'false'): ?>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.5/swiper-bundle.min.js"></script>
<?php endif ?>

<!-- main js -->
<script src="/assets/js/func.js?v=<?=$ver?>"></script>
<script src="/assets/js/norm.js?v=<?=$ver?>"></script>
<script src="/assets/js/main.js?v=<?=$ver?>"></script>
<?=($site_set['js']=='true'?'<script src="/assets/js/'.$menu_name.'.js?v='.$ver.'"></script>':'')?>