<?php
/**
 * 이 파일은 iModule 사이트 기본템플릿의 일부입니다. (https://www.imodules.io)
 * 기본 템플릿은 신규 템플릿 디자인에 도움이 될 수 있도록 각 부분별 상세 주석이 PHP 코드로 작성되어 있습니다.
 * 
 * 사이트헤더
 * 
 * @file /templets/default/header.php
 * @author Arzz (arzz@arzz.com)
 * @license MIT License
 * @version 3.0.0
 * @modified 2018. 10. 4.
 */
if (defined('__IM__') == false) exit;

/**
 * 언어셋에 따라 웹폰트를 불러온다.
 */
if ($IM->getLanguage() == 'ko') {
	$IM->loadWebFont('NanumSquare',true);
	$IM->loadWebFont('OpenSans');
} else {
	$IM->loadWebFont('OpenSans',true);
}
$IM->loadWebFont('XEIcon');
$IM->loadWebFont('FontAwesome');

/**
 * 컨테이너 또는 팝업으로 사이트내 페이지에 접근할 경우 컨터이너용 스타일시트를 불러온다.
 */
if (defined('__IM_CONTAINER__') == true) $IM->addHeadResource('style',$Templet->getDir().'/styles/container.css');
?>
<header data-site="<?php echo $IM->domain; ?>" class="<?php echo $IM->getPage()->layout; ?>">
	<?php
	/**
	 * 사이트설정에서 여러개의 사이트를 운영중인 경우 각 사이트로 이동할 수 있는 네비게이션을 출력한다.
	 * 가급적 현재 언어와 같은 언어를 사용하는 사이트를 찾고 없을 경우 기본 언어셋 홈페이지로 이동한다.
	 */
	if (count($IM->getSiteLinks()) > 1) {
	?>
	<nav data-role="site">
		<?php foreach ($IM->getSiteLinks() as $siteLink) { ?>
		<a href="<?php echo $siteLink->url; ?>"<?php echo $siteLink->domain == $IM->domain ? ' class="selected"' : ''; ?>><?php echo $siteLink->title; ?></a>
		<?php } ?>
	</nav>
	<?php } ?>
	
	<?php
	/**
	 * 상단 로고 및 회원 로그인 위젯을 불러온다.
	 */
	?>
	<div class="top">
		<div class="container">
			<h1><a href="<?php echo $IM->getIndexUrl(); ?>" style="background-image:url(<?php echo $IM->getSiteLogo('default'); ?>);"><?php echo $IM->getSite()->title; ?></a></h1>
			
			<?php $IM->getWidget('member.login')->setTemplet('@topmenu')->doLayout(); ?>
			
			<button type="button" data-action="slide"><i class="mi mi-bars"></i></button>
		</div>
	</div>
	
	<nav data-role="navigation">
		<div class="container">
			<ul>
				<?php
				/**
				 * 전체 사이트메뉴를 가져와 메뉴링크를 만든다.
				 * @see /classes/iModule.class.php -> getSitemap()
				 * @see /classes/iModule.class.php -> getUrl()
				 */
				foreach ($IM->getSitemap() as $menu) {
				?>
				<li>
					<a href="<?php echo $IM->getUrl($menu->menu,false); ?>"><?php echo $IM->parseIconString($menu->icon); ?><?php echo $menu->title; ?></a>
					
					<div class="submenu">
						<div class="container">
							<div class="title">
								<h2><?php echo $IM->parseIconString($menu->icon); ?><?php echo $menu->title; ?></h2>
								<p><?php echo $menu->description; ?></p>
							</div>
							
							<div class="menus">
								<ul>
									<?php $loop = 0; foreach ($menu->pages as $page) { if ($page->is_hide == true) continue; if ($loop > 0 && $loop % 4 == 0) echo '</ul><ul>'; ?>
									<li><a href="<?php echo $IM->getUrl($page->menu,$page->page,false); ?>"><?php echo $IM->parseIconString($page->icon); ?><?php echo $page->title; ?></a></li>
									<?php $loop++; } ?>
								</ul>
							</div>
						</div>
					</div>
				</li>
				<?php } ?>
			</ul>
			<button type="button" data-action="dropdown">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			</button>
		</div>
		
		<div class="menus">
			<div class="container">
				<ul>
					<?php
					/**
					 * 전체 사이트구조를 표시하는 사이트맵을 구성한다.
					 * 가로로 4개의 영역으로 구분하여 출력한다.
					 */
					$loop = 0;
					foreach ($IM->getSitemap() as $menu) {
						if ($loop > 0 && $loop % 4 == 0) echo '</ul><ul>'; ?>
					<li>
						<h4><a href="<?php echo $IM->getUrl($menu->menu,false); ?>"><?php echo $menu->title; ?></a></h4>
						
						<ul>
							<?php foreach ($menu->pages as $page) { if ($page->is_hide == true) continue; ?>
							<li><a href="<?php echo $IM->getUrl($page->menu,$page->page,false); ?>"><i class="fa fa-angle-right" aria-hidden="true"></i><?php echo $page->title; ?></a></li>
							<?php } ?>
						</ul>
					</li>
					<?php
						$loop++;
					}
					
					/**
					 * 4개의 영역이 다 채워지지 않았을 경우, 나머지 빈 영역을 추가한다.
					 */
					if ($loop % 4 !== 0) {
						for ($i=$loop%4; $i<4;$i++) {
							echo '<li></li>';
						}
					}
					?>
				</ul>
			</div>
		</div>
	</nav>
</header>