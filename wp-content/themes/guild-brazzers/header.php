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
				<?php /* wp_nav_menu(array('theme_lacation' => 'nav-menu', 'menu_class' => 'site-navigation nav navbar-nav')); */
				// Получим элементы меню на основе параметра $menu_name (тоже что и 'theme_location' или 'menu' в аргументах wp_nav_menu)
				// Этот код - основа функции wp_nav_menu, где получается ID меню из слага

				$menu_name = 'nav-menu';
				$submenu = false;
				$locations = get_nav_menu_locations();

				if( $locations && isset($locations[ $menu_name ]) )
				{
					$menu = wp_get_nav_menu_object( $locations[ $menu_name ] ); // получаем объект меню

					$menu_items = wp_get_nav_menu_items( $menu ); // получаем элементы меню

					// создаем список
					$menu_list = '<ul id="menu-' . $menu_name . '" class="site-navigation nav navbar-nav">';

					foreach ( (array) $menu_items as $key => $menu_item )
					{	
						if ($submenu == false)
						{
							if ($menu_item->url != '#' && $menu_item->menu_item_parent == 0)
							{
								//TODO Написать добавление простого пункта меню. ГОТОВО.
								$menu_list .= '<li><a href="' . $menu_item->url . '" class="ltc-persian-red">' . $menu_item->title . '</a></li>';
							} elseif ($menu_item->url == '#' && $menu_item->menu_item_parent == 0)
							{
								//TODO Написать начало саб меню. ГОТОВО
								$submenu = true;
								$menu_list .= '<li><div class="dropdown"><a href="'.$menu_item->url.'" class="dropdown-toggle ltc-persian-red" data-toggle="dropdown" aria-expanded="false">'.$menu_item->title.'<span class="caret"></span></a><ul class="dropdown-menu" role="menu">';
							}
						} else {
							if ($menu_item->menu_item_parent != 0)
							{
								//TODO Написать добавление саб-пункта меню
								$menu_list .= '<li><a href="' . $menu_item->url . '" class="ltc-persian-red">' . $menu_item->title . '</a></li>';
							} else {
								//TODO Написать окончание сабменю
								$submenu = false;
								$menu_list .= '</ul></div><li><a href="' . $menu_item->url . '" class="ltc-persian-red">' . $menu_item->title . '</a></li>';
							}
								
						}
						/*if ($menu_item->url == '#' && $menu_item->menu_item_parent == 0 && $submenu == false )
						{
							//TODO Добавить шапку сабменю
							$submenu = true;
						} elseif ($menu_item->menu_item_parent != 0 && $submenu == true)
						{
							//TODO Написать добавление эл меню
							$menu_list .= '<li><a href="' . $menu_item->url . '" class="ltc-persian-red">' . $menu_item->title . ' - '.$menu_item->url.'</a></li>';
						}*/
					}
					
					$menu_list .= '</ul>';
				}
				else 
					$menu_list = '<ul class="site-navigation nav navbar-nav"><li>Меню "' . $menu_name . '" не определено.</li></ul>';
				echo $menu_list;
				?>
				<!--<ul class="site-navigation nav navbar-nav">
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
				</ul>-->
			</div>
		</nav>
	</div>
</div>
<!-- bloc-0 END -->
