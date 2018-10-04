<?php
/**
 * 이 파일은 iModule 사이트 기본템플릿의 일부입니다. (https://www.imodules.io)
 * 기본 템플릿은 신규 템플릿 디자인에 도움이 될 수 있도록 각 부분별 상세 주석이 PHP 코드로 작성되어 있습니다.
 *
 * iModule 기본 사이트템플릿 - 인덱스페이지 레이아웃
 * 사이트관리자에서 [인덱스페이지 (상단에 사이트이미지 및 소개가 포함되어 있습니다.)] 레이아웃을 선택한 메뉴에 사용된다.
 * 
 * @file /templets/default/layouts/index.php
 * @author Arzz (arzz@arzz.com)
 * @license MIT License
 * @version 3.0.0
 * @modified 2018. 10. 4.
 */
if (defined('__IM__') == false) exit;
?>
<main class="index">
	<?php
	/**
	 * 이 레이아웃에서 컨텍스트가 들어갈 위치에 컨텍스트 HTML 을 출력한다.
	 * @see /classes/iModule.class.php -> getContextLayout()
	 */
	echo $context;
	?>
</main>