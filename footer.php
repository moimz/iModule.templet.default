<?php
/**
 * 이 파일은 iModule 사이트템플릿(default)의 일부입니다. (https://www.imodule.kr)
 *
 * iModule 기본 사이트템플릿 - 템플릿 푸터
 * 
 * @file /templets/default/footer.php
 * @author Arzz (arzz@arzz.com)
 * @license MIT License
 * @version 3.0.0
 * @modified 2018. 4. 20.
 */
if (defined('__IM__') == false) exit;
?>
</div>

<footer>
	<div class="container">
		<?php
		/**
		 * 사이트템플릿 환경설정에 정의된 copyright 문구를 치환자 치환하여 출력한다.
		 * @see /templets/default/package.json
		 */
		echo str_replace(array('{DOMAIN}','{YEAR}'),array($IM->domain,date('Y')),$Templet->getConfig('copyright'));
		?>
	</div>
</footer>