/**
 * 이 파일은 iModule 사이트 기본템플릿의 일부입니다. (https://www.imodules.io)
 *
 * 회원로그인 위젯 상단메뉴 템플릿 - 로그인 이벤트 처리
 *
 * @file /templets/default/widgets/member.login/topmenu/scripts/script.js
 * @author Arzz (arzz@arzz.com)
 * @license MIT License
 * @version 3.0.0
 * @modified 2018. 10. 4.
 */
$(document).ready(function() {
	var $widget = $("div[data-widget=member-login][data-templet=topmenu]");
	
	$("button[data-action=login]",$widget).on("click",function(e) {
		Member.loginModal();
	});
	
	$("button[data-action=menu]",$widget).on("click",function(e) {
		var $menu = $("div[data-role=menu]",$widget);
		$menu.toggleClass("opened");
		e.stopPropagation();
	});
	
	$("div[data-role=menu]",$widget).on("click",function(e) {
		e.stopPropagation();
	});
	
	$(document).on("click",function() {
		var $widget = $("div[data-widget=member-login][data-templet=topmenu]");
		$("div[data-role=menu]",$widget).removeClass("opened");
	});
});