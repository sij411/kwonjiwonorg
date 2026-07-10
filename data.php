<?php
$names = "권지원|權祉源|Jiwon Kwon";
// Work experiences (format: title::description::tags|)
$work =
    "<a href=\"https://fedify.dev/\">Fedify</a> - Co-maintainer::Co-maintainer of Fedify, a TypeScript ActivityPub framework. Contributed to CLI tooling, FEP implementations, relay infrastructure, interoperability, and ongoing project maintenance.::|<a href=\"https://github.com/fedify-org/feder\">Feder</a> - Maintainer::Maintainer of Feder, a Rust ActivityPub framework exploring a portable core with multiple runtimes. Design protocol models, sans-I/O architecture, runtime abstractions, and Linux-to-embedded Fediverse experiments.::|<a href=\"https://github.com/sij411/drfed\">DrFed</a> - Co-maintainer::Co-maintainer of DrFed, a developer tool for experimenting with and inspecting Fediverse/ActivityPub systems. Work includes project design, Fedify-based tooling, protocol debugging workflows, and developer experience.::|Software Engineer Intern @BeringLab::Built in-house web applications, APIs, and model training data pipelines. Automated data management and model evaluation.::";

// Contact methods (format: type:value:url)
$contacts =
    "Email:work@kwonjiwon.org:mailto:work@kwonjiwon.org|Github:sij411:https://github.com/sij411|Hackers' Pub:@z9mb1:https://hackers.pub/@z9mb1|Codeberg:z9mb1:https://codeberg.org/z9mb1";

// About section content

$aboutContent = "Hi, I’m Jiwon. I do software engineering, tinker with hardware, and teach media art hardware workshops in Seoul.
I’ve been working on Fedify, an ActivityPub server framework; DrFed, a debugging platform based on ActivityPub; and Feder, a portable ActivityPub server framework.
I like systems software and embedded programming, and I also love making small machines.  ";
// Theme colors (format: name:background:text:accent)
$themes =
    "dark:black:white:gray|light:white:black:lightgray|ocean:navy:cyan:teal";

$selectedTagline = null;
$selectedQuote = null;
$selectedTheme = 0;
$workProjectsTitle = "Works & Projects";
$photoDescription =
    "Built hardware and software inside devices, working across engineering and media art.";
$photoCredit =
    "Art works made in collaboration with @<a href=\"https://www.instagram.com/thingworkshop/\">thingworkshop</a>.";

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
    "photoDescription" => $photoDescription,
    "photoCredit" => $photoCredit,
];
