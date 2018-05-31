<?php
/**
 * 이 파일은 iModule 사이트템플릿(default)의 일부입니다. (https://www.imodule.kr)
 * 기본 템플릿은 신규 템플릿 디자인에 도움이 될 수 있도록 각 부분별 상세 주석이 PHP 코드로 작성되어 있습니다.
 *
 * iModule 기본 사이트템플릿 - 서브페이지 레이아웃
 * 사이트관리자에서 [서브페이지 (상단에 네비게이션바 및 우측에 페이지목록이 포함되어 있습니다.)] 레이아웃을 선택한 메뉴에 사용된다.
 * 
 * @file /templets/default/layouts/subpage.php
 * @author Arzz (arzz@arzz.com)
 * @license MIT License
 * @version 3.0.0
 * @modified 2018. 5. 31.
 */
if (defined('__IM__') == false) exit;
?>
<main class="subpage">
	<div class="breadcrumb">
		<div class="container">
			<a href="<?php echo $IM->getUrl(false); ?>"><i class="mi mi-home"></i></a>
			<i class="fa fa-angle-right" aria-hidden="true"></i>
			<a href="<?php echo $IM->getUrl($IM->menu,false); ?>"><?php echo $IM->getMenus($IM->menu)->title; ?></a>
			<?php if ($IM->page) { ?>
			<i class="fa fa-angle-right" aria-hidden="true"></i>
			<a href="<?php echo $IM->getUrl($IM->menu,$IM->page,false); ?>"><?php echo $IM->getPage()->title; ?></a>
			<?php } ?>
		</div>
	</div>
	
	<div class="container">
		<div class="context">
			<nav>
				<h2><?php echo $IM->getMenus($IM->menu)->title; ?></h2>
				
				<ul>
					<?php foreach ($IM->getPages($IM->menu) as $item) { ?>
					<li<?php echo $IM->page == $item->page ? ' class="selected"' : ''; ?>>
						<a href="<?php echo $IM->getUrl($item->menu,$item->page,false); ?>">
							<?php echo $item->title; ?>
						</a>
					</li>
					<?php } ?>
				</ul>
			</nav>
			
			<section>
				<h3><?php echo $IM->getPage()->title; ?></h3>
				
				<?php echo $context; ?>
			</section>
		</div>
	</div>
</main>