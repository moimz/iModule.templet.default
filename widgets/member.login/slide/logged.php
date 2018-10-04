<?php
/**
 * 이 파일은 iModule 사이트 기본템플릿의 일부입니다. (https://www.imodules.io)
 * 기본 템플릿은 신규 템플릿 디자인에 도움이 될 수 있도록 각 부분별 상세 주석이 PHP 코드로 작성되어 있습니다.
 *
 * 회원로그인 위젯 모바일 슬라이드메뉴 템플릿 - 로그인 상태인 경우
 *
 * @file /templets/default/widgets/member.login/slide/logged.php
 * @author Arzz (arzz@arzz.com)
 * @license MIT License
 * @version 3.0.0
 * @modified 2018. 10. 4.
 */
if (defined('__IM__') == false) exit;
?>
<div data-action="menu">
	<i class="photo" style="background-image:url(<?php echo $member->photo; ?>);"></i>
	<span><i class="fa fa-caret-down"></i><?php echo $member->name; ?>님</span>
	
	<ul>
		<li><button type="button" data-action="modify" onclick="Member.modifyPopup();"><i class="xi xi-user"></i>정보수정</button></li>
		<li><button type="button" data-action="logout" onclick="Member.logout();"><i class="xi xi-esc"></i>로그아웃</button></li>
	</ul>
</div>