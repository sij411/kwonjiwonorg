<?php
$names = "권지원|權祉源|Jiwon Kwon";
$taglines = "개발자|프로그래머|크리에이터|빌더|해커|엔지니어|기술자";

// Projects with tags (format: title::description::tags|)
$projects =
    "개인 웹사이트::제 작업과 관심사를 보여주는 개인 웹사이트입니다::PHP,HTML,CSS";

// Work experiences (format: title::description::tags|)
$work =
    "소프트웨어 엔지니어::사내 웹 애플리케이션, API, 모델 학습 데이터 파이프라인을 구축했습니다. 데이터 관리 및 모델 평가를 자동화했습니다.::Python, Rust";

// Contact methods (format: type:value:url)
$contacts =
    "이메일:work@kwonjiwon.org:mailto:work@kwonjiwon.org|Github:sij411:https://github.com/sij411|Hackers' Pub:@z9mb1:https://hackers.pub/@z9mb1";

// About section content
$aboutTitle = file_get_contents(__DIR__ . "/emojis.txt");
$aboutContent =
    "저는 서울에 기반을 둔 소프트웨어 엔지니어입니다. 문제를 해결하고 개발자 경험을 향상시키기 위해 여러 소프트웨어를 만들었습니다. Arduino/Raspberry Pi tinkering 기술로 미디어 아트 프로젝트에도 참여했습니다. 페디버스, 커뮤니티, 오픈소스, 게임을 좋아합니다. 협업은 언제나 환영합니다.";
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
