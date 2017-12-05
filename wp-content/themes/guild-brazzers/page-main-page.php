<?php get_header(); ?>

<!-- bloc-1 -->
<div class="bloc bloc-fill-screen bg-207916-2 bgc-white l-bloc " id="bloc-1">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1 class="text-center hero-bloc-text  mg-md lg-shadow tc-white">
					<strong><?php bloginfo('name'); ?></strong>
				</h1>
				<h2 class="text-center hero-bloc-text-sub  mg-lg pressed-t tc-white">
					<?php bloginfo('description'); ?>
				</h2>
				<div class="text-center">
					<a class="btn   btn-wire btn-xl btn-persian-red wire-btn-white" onclick="scrollToTarget('#bloc-2')">Подробнее</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- bloc-1 END -->

<!-- bloc-2 -->
<div class="bloc tc-persian-red bgc-white" id="bloc-2">
	<div class="container bloc-lg">
		<div class="row">
			<div class="col-sm-6">
				<img src="<?php bloginfo('template_url'); ?>/img/logo2_3.png" class="center-block" title="This is a tooltip" alt="This is a tooltip" width="321" height="335" />
			</div>
			<div class="col-sm-6">
				<h2 class="mg-lg tc-persian-red">
					<strong><?php bloginfo('name'); ?></strong>
				</h2>
					<?php
						the_post();
						the_title( '<h3 class="mg-sm tc-persian-red">', '</h3>' );
					?>
				<p class="mg-lg">
					<?php
						the_content();
					?>
				</p><a href="#" class="btn   btn-lg btn-persian-red">Подать заявку</a>
			</div>
		</div>
	</div>
</div>
<!-- bloc-2 END -->

<!-- ScrollToTop Button -->
<a class="bloc-button btn btn-d scrollToTop" onclick="scrollToTarget('1')"><span class="fa fa-chevron-up"></span></a>
<!-- ScrollToTop Button END-->


<!-- Footer - bloc-3 -->
<div class="bloc bg-20130715021446a0dizup0pm9ftrsg bgc-white tc-white" id="bloc-3">
	<div class="container bloc-lg">
		<div class="row">
			<div class="col-sm-4">
				<img src="<?php bloginfo('template_url'); ?>/img/news3.jpg" alt="Новость 1" class="img-responsive" />
				<h3 class="mg-md tc-white">
					<a href="#" class="tc-white">Новость 1</a>
				</h3>
				<p>
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
				</p>
			</div>
			<div class="col-sm-4">
				<img src="<?php bloginfo('template_url'); ?>/img/news2.jpg" alt="Новость 2" class="img-responsive" />
				<h3 class="mg-md tc-white">
					<a href="#" class="tc-white">Новость 2</a>
				</h3>
				<p>
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
				</p>
			</div>
			<div class="col-sm-4">
				<img src="<?php bloginfo('template_url'); ?>/img/news1.jpg" alt="Новость 3" class="img-responsive" />
				<h3 class="mg-md tc-white">
					<a href="#" class="tc-white">Новость 3</a>
				</h3>
				<p>
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
				</p>
			</div>
		</div>
	</div>
</div>
<!-- Footer - bloc-3 END -->

<!-- Footer - bloc-4 -->
<div class="bloc tc-persian-red bgc-white l-bloc" id="bloc-4">
	<div class="container bloc-lg">
		<div class="row">
			<div class="col-sm-12">
				<h2 class="text-center mg-md tc-persian-red">
					Фотогалерея
				</h2>
				<p class="text-center sub-heading">
					Наши фото с полей
				</p>
			</div>
		</div>
		<div class="row voffset">
			<div class="col-sm-3">
				<a href="#" data-lightbox="<?php bloginfo('template_url'); ?>/img/news3.jpg" data-caption="Image description" data-gallery-id="gallery-1"><img src="<?php bloginfo('template_url'); ?>/img/news3.jpg" alt="Фото 1" class="img-responsive" /></a>
			</div>
			<div class="col-sm-3">
				<a href="#" data-lightbox="<?php bloginfo('template_url'); ?>/img/news2.jpg" data-caption="Image description" data-gallery-id="gallery-1"><img src="<?php bloginfo('template_url'); ?>/img/news2.jpg" alt="Фото 2" class="img-responsive" /></a>
			</div>
			<div class="col-sm-3">
				<a href="#" data-lightbox="<?php bloginfo('template_url'); ?>/img/news1.jpg" data-caption="Image description" data-gallery-id="gallery-1"><img src="<?php bloginfo('template_url'); ?>/img/news1.jpg" alt="Фото 3" class="img-responsive" /></a>
			</div>
			<div class="col-sm-3">
				<a href="#" data-lightbox="<?php bloginfo('template_url'); ?>/img/news3.jpg" data-caption="Image description" data-gallery-id="gallery-1"><img src="<?php bloginfo('template_url'); ?>/img/news3.jpg" alt="Фото 4" class="img-responsive" /></a><a href="index.html" class="a-btn a-block bloc-mob-center-text">Android</a>
			</div>
		</div>
		<div class="row voffset">
			<div class="col-sm-3">
				<a href="#" data-lightbox="<?php bloginfo('template_url'); ?>/img/news2.jpg" data-caption="Image description" data-gallery-id="gallery-1"><img src="<?php bloginfo('template_url'); ?>/img/news2.jpg" alt="Фото 5" class="img-responsive" /></a>
			</div>
			<div class="col-sm-3">
				<a href="#" data-lightbox="<?php bloginfo('template_url'); ?>/img/news3.jpg" data-caption="Image description" data-gallery-id="gallery-1"><img src="<?php bloginfo('template_url'); ?>/img/news3.jpg"  alt="Фото 6" class="img-responsive" /></a>
			</div>
			<div class="col-sm-3">
				<a href="#" data-lightbox="<?php bloginfo('template_url'); ?>/img/news1.jpg" data-caption="Image description" data-gallery-id="gallery-1"><img src="<?php bloginfo('template_url'); ?>/img/news1.jpg"  alt="Фото 7" class="img-responsive" /></a>
			</div>
			<div class="col-sm-3">
				<a href="#" data-lightbox="<?php bloginfo('template_url'); ?>/img/news2.jpg" data-caption="Image description" data-gallery-id="gallery-1"><img src="<?php bloginfo('template_url'); ?>/img/news2.jpg"  alt="Фото 8" class="img-responsive" /></a>
			</div>
		</div>
	</div>
</div>
<!-- Footer - bloc-4 END -->

<?php get_footer(); ?>
