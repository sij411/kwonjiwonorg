<?php
$names = "권지원|權祉源|Jiwon Kwon";

// Work experiences (format: title::description::tags|)
$work =
    "소프트웨어 엔지니어 @베링랩(주)::사내 웹 애플리케이션, API, 모델 학습 데이터 파이프라인을 구축했습니다. 데이터 관리 및 모델 평가를 자동화했습니다.::Python, Rust|Fedify:: CLI, fep 구현, Relay 구현을 작업했습니다.::Typescript, OSS";

// Contact methods (format: type:value:url)
$contacts =
    "이메일:work@kwonjiwon.org:mailto:work@kwonjiwon.org|Github:sij411:https://github.com/sij411|Hackers' Pub:@z9mb1:https://hackers.pub/@z9mb1";

// About section content
$aboutContent =
    "안녕하세요, 서울에서 프리랜서 개발자 & 미디어아트 워크샵(HW) 가르치면서 이것저것 만들고 있는 권지원입니다. AP 서버 프레임워크인 Fedify와 AP 기반 디버깅 플랫폼 DrFed를 주로 개발하고 있고 개인적으로는 포터블 AP 서버 프레임워크를 지향하는 Feder를 개발하고 있습니다. 시스템 소프트웨어나 임베디드 쪽도 관심이 많습니다. 귀여운 휴대용 전자기기 만들고 뜯어보는 것도 좋아합니다.";
$themes =
    "dark:black:white:gray|light:white:black:lightgray|ocean:navy:cyan:teal";

$selectedTagline = null;
$selectedQuote = null;
$selectedTheme = 0;

// Work & Projects title
$workProjectsTitle = "경력 및 프로젝트";
$photoTitle = "하드웨어 작업";
$photoDescription =
    "기기 안의 하드웨어와 소프트웨어를 만들며 엔지니어링과 미디어아트 사이에서 작업하고 있습니다.";

return [
    "names" => $names,
    "work" => $work,
    "contacts" => $contacts,
    "aboutContent" => $aboutContent,
    "themes" => $themes,
    "selectedTagline" => $selectedTagline,
    "selectedQuote" => $selectedQuote,
    "selectedTheme" => $selectedTheme,
    "workProjectsTitle" => $workProjectsTitle,
    "photoTitle" => $photoTitle,
    "photoDescription" => $photoDescription,
];
