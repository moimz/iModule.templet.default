<?php
/**
 * 이 파일은 iModule 사이트템플릿(default)의 일부입니다. (https://www.imodule.kr)
 *
 * iModule 기본 사이트템플릿 - 인덱스페이지 레이아웃
 * 사이트관리자에서 [인덱스페이지 (상단에 사이트이미지 및 소개가 포함되어 있습니다.)] 레이아웃을 선택한 메뉴에 사용된다.
 * 
 * @file /templets/default/layouts/index.php
 * @author Arzz (arzz@arzz.com)
 * @license MIT License
 * @version 3.0.0
 * @modified 2018. 4. 20.
 */
if (defined('__IM__') == false) exit;
?>
<main>
	<div class="container">
	<?php
	/**
	 * 이 레이아웃에서 컨텍스트가 들어갈 위치에 컨텍스트 HTML 을 출력한다.
	 * @see /classes/iModule.class.php -> getContextLayout()
	 */
	echo $context;
	?>
	</div>
</main>