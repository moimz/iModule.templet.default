<?php
/**
 * 이 파일은 iModule 사이트템플릿(default)의 일부입니다. (https://www.imodule.kr)
 *
 * iModule 사이트 템플릿의 외부PHP 파일로 직접 PHP파일을 작성해 사이트에 추가할때 사용한다.
 * 사이트관리자에서 외부페이지를 선택하고, /templets/default/externals/index.php 파일을 선택한 메뉴에 사용된다.
 * 
 * @file /templets/default/externals/index.php
 * @author Arzz (arzz@arzz.com)
 * @license MIT License
 * @version 3.0.0
 * @modified 2018. 4. 20.
 */
if (defined('__IM__') == false) exit;
?>
<div>이곳에 INDEX 페이지에 나타날 내용을 정의할 수 있습니다.</div>

<?php
/**
 * 로그인위젯을 불러온다.
 */
$IM->getWidget('member.login')->setTemplet('default')->doLayout();
?>