<?php

$names = "권지원";
$namesEn = "Jiwon Kwon";
$namesHanja = "權祉源";

$tagline = "소프트웨어 엔지니어 & 미디어 아티스트";

$projects = [
    [
        "title" => "Fedify",
        "year" => "2024–현재",
        "medium" => "TypeScript, 오픈소스",
        "role" => "코어 컨트리뷰터",
        "collaborators" => "홍민희 & 커뮤니티",
        "description" => "ActivityPub 서버 프레임워크. CLI 도구, FEP 구현, 연합우주 릴레이 인프라를 개발했습니다.",
        "images" => ["images/projects/fedify-01.jpg"],
    ],
    [
        "title" => "베링랩 — 사내 플랫폼",
        "year" => "2023–2024",
        "medium" => "Python, Rust, Web",
        "role" => "소프트웨어 엔지니어",
        "collaborators" => "베링랩(주)",
        "description" => "사내 웹 애플리케이션, REST API, 모델 학습 데이터 파이프라인을 구축했습니다. 데이터 관리 워크플로우와 모델 평가 시스템을 자동화했습니다.",
        "images" => ["images/projects/beringlab-01.jpg"],
    ],
    [
        "title" => "개인 웹사이트",
        "year" => "2025",
        "medium" => "PHP, HTML, CSS",
        "role" => "디자인 & 개발",
        "collaborators" => "",
        "description" => "데이터 기반의 미니멀 웹 디자인을 탐구하는 포트폴리오 사이트입니다.",
        "images" => ["images/projects/website-01.jpg"],
    ],
];

$process = [
    [
        "caption" => "작업 공간",
        "image" => "images/process/process-01.jpg",
    ],
    [
        "caption" => "스케치 & 프로토타이핑",
        "image" => "images/process/process-02.jpg",
    ],
    [
        "caption" => "미디어 아트 실험",
        "image" => "images/process/process-03.jpg",
    ],
    [
        "caption" => "스튜디오 스냅샷",
        "image" => "images/process/process-04.jpg",
    ],
    [
        "caption" => "코드 & 회로",
        "image" => "images/process/process-05.jpg",
    ],
    [
        "caption" => "진행 중인 작업",
        "image" => "images/process/process-06.jpg",
    ],
];

$bio = "서울을 기반으로 활동하는 소프트웨어 엔지니어이자 미디어 아티스트입니다. 개발자 경험을 위한 도구를 만들고, 코드와 창작의 교차점에서 작업하는 것을 좋아합니다. 오픈소스와 연합우주 프로젝트에 적극적으로 참여하고 있습니다. 협업은 언제나 환영합니다.";

$email = "work@kwonjiwon.org";

$social = [
    ["label" => "Github", "url" => "https://github.com/sij411"],
    ["label" => "Hackers' Pub", "url" => "https://hackers.pub/@z9mb1"],
];

$education = [
    "컴퓨터공학 학사",
];

$skills = [
    "Python", "TypeScript", "Rust", "PHP",
    "웹 애플리케이션", "REST API", "데이터 파이프라인",
    "오픈소스", "미디어 아트", "연합우주/ActivityPub",
];

$experience = [
    ["title" => "소프트웨어 엔지니어", "org" => "베링랩(주)", "period" => "2023–2024"],
    ["title" => "코어 컨트리뷰터", "org" => "Fedify (OSS)", "period" => "2024–현재"],
];

$exhibitions = [];

// Section titles
$sectionTitles = [
    "projects" => "프로젝트",
    "process" => "프로세스",
    "about" => "소개",
];

return [
    "names" => $names,
    "namesEn" => $namesEn,
    "namesHanja" => $namesHanja,
    "tagline" => $tagline,
    "projects" => $projects,
    "process" => $process,
    "bio" => $bio,
    "email" => $email,
    "social" => $social,
    "education" => $education,
    "skills" => $skills,
    "experience" => $experience,
    "exhibitions" => $exhibitions,
    "sectionTitles" => $sectionTitles,
];
