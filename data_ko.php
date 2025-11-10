<?php
$names = "권지원|權祉源|Jiwon Kwon";
$taglines = "개발자|프로그래머|크리에이터|빌더|해커|엔지니어|기술자";

// Projects with tags (format: title::description::tags|)
$projects =
    "개인 웹사이트::제 작업과 관심사를 보여주는 개인 웹사이트입니다::PHP,HTML,CSS";

// Work experiences (format: title::description::tags|)
$work =
    "소프트웨어 엔지니어 @베링랩(주)::사내 웹 애플리케이션, API, 모델 학습 데이터 파이프라인을 구축했습니다. 데이터 관리 및 모델 평가를 자동화했습니다.::Python, Rust|Fedify:: CLI, fep 구현, Relay 구현을 작업했습니다.::Typescript, OSS";

// Contact methods (format: type:value:url)
$contacts =
    "이메일:work@kwonjiwon.org:mailto:work@kwonjiwon.org|Github:sij411:https://github.com/sij411|Hackers' Pub:@z9mb1:https://hackers.pub/@z9mb1";

// About section content
$aboutTitle = file_get_contents(__DIR__ . "/emojis.txt");
$aboutContent = "안녕하세요, 문제 해결과 DX 향상을 위한 도구 만들기를 즐기는 소프트웨어 엔지니어 권지원입니다. 주로 서울에서 활동하고 있습니다.
    오픈소스 소프트웨어 프로젝트와 컴퓨팅 장치를 활용한 미디어 아트 프로젝트에도 활발히 참여하고 있습니다. 최근에는 연합우주 관련 개발을 주로 하고 있습니다. 협업은 언제나 환영하니 연락 주세요.";
$themes =
    "dark:black:white:gray|light:white:black:lightgray|ocean:navy:cyan:teal";

$selectedTagline = null;
$selectedQuote = null;
$selectedTheme = 0;

// Work & Projects title
$workProjectsTitle = "경력 및 프로젝트";

return [
    "names" => $names,
    "taglines" => $taglines,
    "projects" => $projects,
    "work" => $work,
    "contacts" => $contacts,
    "aboutTitle" => $aboutTitle,
    "aboutContent" => $aboutContent,
    "themes" => $themes,
    "selectedTagline" => $selectedTagline,
    "selectedQuote" => $selectedQuote,
    "selectedTheme" => $selectedTheme,
    "workProjectsTitle" => $workProjectsTitle,
];
