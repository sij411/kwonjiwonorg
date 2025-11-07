<?php
$names = "권지원|權祉源|Jiwon Kwon";
$taglines = "Developer|Programmer|Creator|Builder|Hacker|Engineer|Technician";
// Projects with tags (format: title::description::tags|)
$projects =
    "Personal Webpage::A personal website showcasing my work and interests::PHP,HTML,CSS";

// Work experiences (format: title::description::tags|)
$work =
    "Software Engineer @BeringLab::Built in-house web applications, APIs, and Model training data pipelines. Automated data management and model evaluation.::Python, Rust";

// Contact methods (format: type:value:url)
$contacts =
    "Email:work@kwonjiwon.org:mailto:work@kwonjiwon.org|Github:sij411:https://github.com/sij411|Hackers' Pub:@z9mb1:https://hackers.pub/@z9mb1";

// About section content
$aboutTitle = file_get_contents(__DIR__ . "/assets/emojis.txt");
$aboutContent = "Hi, I'm a software engineer Jiwon, enjoying building tools for solutions and DX enhancements. @Seoul.
    I've been working on open-source projects and media art projects with computing devices, too. I also have worked on Fediverse projects lately. I'd love to collaborate with, so let's talk :)";
// Theme colors (format: name:background:text:accent)
$themes =
    "dark:black:white:gray|light:white:black:lightgray|ocean:navy:cyan:teal";

$selectedTagline = null;
$selectedQuote = null;
$selectedTheme = 0;

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
];
