<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Brazzers, Гильдия, ArchAge, mmorpg, игра">
    <meta name="description" content="Сайт Гильдии Brazzers">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    
    <?php wp_head(); ?>

    <title><?php bloginfo('name'); ?></title> 
</head>
<body>
<!-- Main container -->
<div class="page-container">
    
<!-- bloc-0 -->
<div class="bloc bgc-white l-bloc" id="bloc-0">
	<div class="container bloc-sm">
		<nav class="navbar row">
			<div class="navbar-header">
				<a class="navbar-brand" href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/img/logo2_2.png" alt="logo" width="120" height="25" /></a>
				<button id="nav-toggle" type="button" class="ui-navbar-toggle navbar-toggle" data-toggle="collapse" data-target=".navbar-1">
					<span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse navbar-1">
				<ul class="site-navigation nav navbar-nav">
					<li>
						<a href="index.html" class="ltc-persian-red">Главная</a>
					</li>
					<li>
						<a href="index.html" class="ltc-persian-red">Новости</a>
					</li>
					<li>
						<div class="dropdown">
							<a href="#" class="dropdown-toggle ltc-persian-red" data-toggle="dropdown" aria-expanded="false">Гильдия<span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li>
									<a href="index.html" class="ltc-persian-red">Устав</a>
								</li>
								<li>
									<a href="index.html" class="ltc-persian-red">Состав</a>
								</li>
								<li>
									<a href="index.html" class="ltc-persian-red">Эвенты</a>
								</li>
								<li>
									<a href="index.html" class="ltc-persian-red">Фотогалерея</a>
								</li>
							</ul>
						</div>
					</li>
					<li>
						<div class="dropdown">
							<a href="#" class="dropdown-toggle ltc-persian-red" data-toggle="dropdown" aria-expanded="false">Рекрутинг<span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li>
									<a href="index.html" class="ltc-persian-red">Вакансии</a>
								</li>
								<li>
									<a href="index.html" class="ltc-persian-red">Подать заявку</a>
								</li>
							</ul>
						</div>
					</li>
					<li>
						<a href="index.html" class="ltc-persian-red">Контакты</a>
					</li>
				</ul>
			</div>
		</nav>
	</div>
</div>
<!-- bloc-0 END -->

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
					<strong>Гильдия BRAZZERS</strong>
				</h2>
				<h3 class="mg-sm tc-persian-red">
					Молодая стремительно растущая гильдия
				</h3>
				<p class="mg-lg">
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
				</p><a href="index.html" class="btn   btn-lg btn-persian-red">Подать заявку</a>
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

<!-- Footer - bloc-5 -->
<div class="bloc bgc-persian-red d-bloc" id="bloc-5">
	<div class="container bloc-md">
		<div class="row">
			<div class="col-sm-3">
				<h3 class="mg-md bloc-mob-center-text">
					Новости
				</h3><a href="index.html" class="a-btn a-block bloc-mob-center-text">Портал</a><a href="index.html" class="a-btn a-block bloc-mob-center-text">Гильдия<span class="special-tag-for-editing-text-with-html"></span></a><a href="index.html" class="a-btn a-block bloc-mob-center-text">Эвенты<span class="special-tag-for-editing-text-with-html"></span></a>
			</div>
			<div class="col-sm-3">
				<h3 class="mg-md bloc-mob-center-text">
					Гильдия
				</h3><a href="index.html" class="a-btn a-block bloc-mob-center-text">Устав</a><a href="index.html" class="a-btn a-block bloc-mob-center-text">Члены Гильдии</a><a href="index.html" class="a-btn a-block bloc-mob-center-text">Эвенты</a><a href="index.html" class="a-btn a-block bloc-mob-center-text">Фотогалерея</a>
			</div>
			<div class="col-sm-3">
				<h3 class="mg-md bloc-mob-center-text">
					Рекрутинг<br>
				</h3><a href="index.html" class="a-btn a-block bloc-mob-center-text">Вакансии</a><a href="index.html" class="a-btn a-block bloc-mob-center-text">Подать заявку</a>
			</div>
			<div class="col-sm-3">
				<h3 class="mg-md bloc-mob-center-text">
					TeamSpeak<br>
				</h3>ip-сервера: 128.128.128.128
			</div>
		</div>
	</div>
</div>
<!-- Footer - bloc-5 END -->

<!-- Footer - bloc-6 -->
<div class="bloc bgc-persian-red d-bloc" id="bloc-6">
	<div class="container bloc-sm">
		<div class="row">
			<div class="col-xs-12 col-md-8 col-md-offset-2">
				<h3 class="statement-bloc-text ">
					<span>&copy; 2017 Гильдия Brazzers.</span>
				</h3>
			</div>
		</div>
	</div>
</div>
<!-- Footer - bloc-6 END -->
</div>
<!-- Main container END -->
    

</body>
</html>
