<?php
/**
 * 이 파일은 iModule 사이트 기본템플릿의 일부입니다. (https://www.imodules.io)
 * 기본 템플릿은 신규 템플릿 디자인에 도움이 될 수 있도록 각 부분별 상세 주석이 PHP 코드로 작성되어 있습니다.
 * 
 * iModule 기본 사이트템플릿 - 템플릿 푸터
 * 
 * @file /templets/default/footer.php
 * @author Arzz (arzz@arzz.com)
 * @license MIT License
 * @version 3.0.0
 * @modified 2018. 10. 4.
 */
if (defined('__IM__') == false) exit;
?>
<?php
/**
 * 모바일 디바이스의 우측 슬라이드 메뉴
 */
?>
<aside class="menu">
	<div class="header">
		<?php
		/**
		 * 슬라이드 메뉴용 회원로그인 위젯을 불러온다.
		 */
		$IM->getWidget('member.login')->setTemplet('@slide')->doLayout();
		?>
		<button type="button" data-action="close"><i class="mi mi-close"></i></button>
	</div>
	
	<?php
	/**
	 * 전체메뉴를 불러온다.
	 */
	?>
	<ul class="menu <?php echo $IM->getModule('member')->isLogged() == true ? 'logged' : 'login'; ?>">
		<?php foreach ($IM->getSitemap() as $menu) { ?>
		<li<?php echo $IM->menu == $menu->menu ? ' class="opened"' : ''; ?>>
			<a href="<?php echo $IM->getUrl($menu->menu,false); ?>">
				<?php if (count($menu->pages) > 0) { ?><i data-role="toggle" class="fa fa-angle-down"></i><?php } ?>
				<?php echo $IM->parseIconString($menu->icon); ?><?php echo $menu->title; ?>
			</a>
			
			<?php if (count($menu->pages) > 0) { ?>
			<div class="submenu">
				<?php foreach ($menu->pages as $page) { ?>
				<a href="<?php echo $IM->getUrl($page->menu,$page->page,false); ?>"<?php echo $IM->menu == $page->menu && $IM->page == $page->page ? ' class="selected"' : ''; ?>><?php echo $page->title; ?></a>
				<?php } ?>
			</div>
			<?php } ?>
		</li>
		<?php } ?>
	</ul>
</aside>

<footer>
	<div class="container">
		<ul class="menus">
			<?php
			/**
			 * 사이트 하단에 고정된 메뉴를 출력한다.
			 */
			foreach ($IM->getFooterPages() as $footer) {
			?>
			<li class="<?php echo $footer->menu; ?> <?php echo $footer->page; ?>"><a href="<?php echo $IM->getUrl($footer->menu,$footer->page,false); ?>"><?php echo $footer->title; ?></a></li>
			<?php } ?>
			<li class="sns">
				<?php
				/**
				 * 템플릿설정에 페이스북 페이지 URL 이 있을 경우, 페이스북 아이콘을 표시한다.
				 */
				if ($Templet->getConfig('facebook')) { ?>
				<a href="<?php echo $Templet->getConfig('facebook'); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
				<?php } ?>
				
				<?php
				/**
				 * 템플릿설정에 트위터 페이지 URL 이 있을 경우, 트위터 아이콘을 표시한다.
				 */
				if ($Templet->getConfig('twitter')) { ?>
				<a href="<?php echo $Templet->getConfig('twitter'); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
				<?php } ?>
			</li>
		</ul>
		
		<div class="contact">
			<?php
			/**
			 * 템플릿설정에 입력된 사이트주소 및 연락처와 사이트 엠블럼을 표시한다.
			 */
			?>
			<i class="emblem" style="background-image:url(<?php echo $IM->getSiteEmblem(); ?>);"></i>
			<div class="address">
				<div><?php echo $Templet->getConfig('address'); ?></div>
				<div><?php echo $Templet->getConfig('contact'); ?></div>
			</div>
		</div>
		
		<div class="copyright">
			<div class="copyright">
				<?php
				/**
				 * 템플릿설정에 입력된 카피라이트 문구를 치환자를 치환하여 표시한다.
				 */
				echo str_replace(array('{YEAR}','{DOMAIN}'),array(date('Y'),$IM->domain),$Templet->getConfig('copyright'));
				?>
			</div>
		</div>
	</div>
</footer>

<?php echo $Templet->getConfig('analytics'); ?>