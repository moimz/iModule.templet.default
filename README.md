# iModule.templet.default
이 템플릿은 아이모듈의 기본 사이트템플릿으로 신규 템플릿 디자인에 도움이 될 수 있도록 각 부분별 상세 주석이 작성되어 있습니다.

## 사이트템플릿의 필수파일
모든 사이트템플릿은 아래의 필수파일을 가지고 있어야 합니다.
- /package.json - 템플릿의 기본 메타정보 및 템플릿속성을 정의합니다.
- /header.php - 템플릿 중 상단영역 요소를 정의합니다.
- /header.php - 템플릿 중 하단영역 요소를 정의합니다.
- /layouts/index.php - 사이트 메인화면 용 레이아웃 파일
- /layouts/subpage.php - 사이트 서브페이지 용 레이아웃 파일
- /layouts/empty.php - 빈 레이아웃 파일

## 사이트템플릿의 package.json
```
{
	"id":"해당 템플릿의 고유한 코드(예 : com.moimz.imodule.code.templet.default)",
	"title":{
		"ko":"템플릿명(한글)",
    "en":"템플릿명(영문)",
    ...
	},
	"version":"템플릿버전",
	"author":{
		"name":"템플릿개발자",
		"email":"이메일주소(옵션)"
	},
	"homepage":"템플릿지원홈페이지(옵션)",
	"language":"ko", // 템플릿의 기본언어셋
	"layouts":{ // 레이아웃 종류 및 설명 정의 (index, subpage, empty 이 3가지 레이아웃은 모든 사이트템플릿이 반드시 포함해야 한다.)
		"index":{
			"ko":"인덱스페이지 (상단에 사이트이미지 및 소개가 포함되어 있습니다.)"
		},
		"subpage":{
			"ko":"서브페이지 (상단에 네비게이션바 및 우측에 페이지목록이 포함되어 있습니다.)"
		},
		"empty":{
			"ko":"빈페이지 (템플릿 기본헤더 및 푸터이외에 다른요소가 없는 빈 페이지입니다.)"
		}
	},
	"configs":{ // 템플릿설정 (해당 템플릿을 사용하고자 할 때 해당 설정값이 저장된다.)
		"address":{
			"title":{
				"ko":"주소"
			},
			"help":{
				"ko":"사이트 하단 카피라이트부분에 나타날 주소를 입력하여 주십시오."
			},
			"type":"string",
			"default":"사이트주소"
		},
    ...
	},
	"styles":[
		"템플릿 호출시 기본적으로 사용할 템플릿 전용 스타일시트 전체 URL 또는 상대경로",
    "//exmaple.com/style.css",
    "/styles/style.css",
    ...
	],
	"scripts":[
		"템플릿 호출시 기본적으로 사용할 템플릿 전용 자바스크립트 전체 URL 또는 상대경로",
    "//exmaple.com/script.js",
    "/scripts/script.js",
    ...
	]
}
```
