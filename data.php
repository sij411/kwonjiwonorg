<?php

$names = "Jiwon Kwon";
$namesKr = "권지원";
$namesHanja = "權祉源";

$tagline = "Software Engineer & Media Artist";

// Projects array: each entry has title, year, medium, role, collaborators, description, images (placeholder paths)
$projects = [
    [
        "title" => "Fedify",
        "year" => "2024–Present",
        "medium" => "TypeScript, Open Source",
        "role" => "Core Contributor",
        "collaborators" => "Hong Minhee & community",
        "description" => "ActivityPub server framework. Worked on CLI tooling, new FEP implementations, and relay infrastructure for the Fediverse.",
        "images" => ["images/projects/fedify-01.jpg"],
    ],
    [
        "title" => "BeringLab — In-house Platform",
        "year" => "2023–2024",
        "medium" => "Python, Rust, Web",
        "role" => "Software Engineer",
        "collaborators" => "BeringLab Inc.",
        "description" => "Built internal web applications, REST APIs, and model training data pipelines. Automated data management workflows and model evaluation systems.",
        "images" => ["images/projects/beringlab-01.jpg"],
    ],
    [
        "title" => "Personal Website",
        "year" => "2025",
        "medium" => "PHP, HTML, CSS",
        "role" => "Design & Development",
        "collaborators" => "",
        "description" => "Portfolio site exploring minimal web design with dynamic data-driven layouts.",
        "images" => ["images/projects/website-01.jpg"],
    ],
];

// Process / Studio: WIP shots, workshop photos, sketches
$process = [
    [
        "caption" => "Workshop setup",
        "image" => "images/process/process-01.jpg",
    ],
    [
        "caption" => "Sketches & prototyping",
        "image" => "images/process/process-02.jpg",
    ],
    [
        "caption" => "Media art experiments",
        "image" => "images/process/process-03.jpg",
    ],
    [
        "caption" => "Studio snapshot",
        "image" => "images/process/process-04.jpg",
    ],
    [
        "caption" => "Code & circuits",
        "image" => "images/process/process-05.jpg",
    ],
    [
        "caption" => "Work in progress",
        "image" => "images/process/process-06.jpg",
    ],
];

// About / CV data
$bio = "Software engineer and media artist based in Seoul. I build tools for developer experience and enjoy working at the intersection of code and creative practice. Active in open-source and Fediverse projects. Open to collaboration — let's talk.";

$email = "work@kwonjiwon.org";

$social = [
    ["label" => "Github", "url" => "https://github.com/sij411"],
    ["label" => "Hackers' Pub", "url" => "https://hackers.pub/@z9mb1"],
];

$education = [
    "B.S. Computer Science",
];

$skills = [
    "Python", "TypeScript", "Rust", "PHP",
    "Web Applications", "REST APIs", "Data Pipelines",
    "Open Source", "Media Art", "Fediverse/ActivityPub",
];

$experience = [
    ["title" => "Software Engineer", "org" => "BeringLab Inc.", "period" => "2023–2024"],
    ["title" => "Core Contributor", "org" => "Fedify (OSS)", "period" => "2024–Present"],
];

$exhibitions = [];

return [
    "names" => $names,
    "namesKr" => $namesKr,
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
];
