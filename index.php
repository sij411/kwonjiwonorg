<?php
function detectLocale(?string $forcedLocale = null): string
{
    if (in_array($forcedLocale, ["en", "ko"], true)) {
        return $forcedLocale;
    }

    $requestedLocale = $_GET["lang"] ?? null;
    if (in_array($requestedLocale, ["en", "ko"], true)) {
        return $requestedLocale;
    }

    $acceptedLanguages = explode(",", $_SERVER["HTTP_ACCEPT_LANGUAGE"] ?? "");
    $bestLocale = "en";
    $bestQuality = 0.0;

    foreach ($acceptedLanguages as $language) {
        $parts = explode(";q=", trim($language), 2);
        $locale = strtolower(substr($parts[0], 0, 2));
        $quality = isset($parts[1]) ? (float) $parts[1] : 1.0;

        if (in_array($locale, ["en", "ko"], true) && $quality > $bestQuality) {
            $bestLocale = $locale;
            $bestQuality = $quality;
        }
    }

    return $bestLocale;
}

$locale = detectLocale($forcedLocale ?? null);
$data = include $locale === "ko" ? "data_ko.php" : "data.php";
$nameArray = explode("|", $data["names"]);
$workArray = explode("|", $data["work"]);
$contactsArray = explode("|", $data["contacts"]);
$contactItems = array_map(
    fn($contact) => explode(":", $contact, 3),
    $contactsArray,
);
$pageTitleName = $nameArray[random_int(0, count($nameArray) - 1)];
$footerName = $nameArray[random_int(0, count($nameArray) - 1)];
$workProjectsTitle = $data["workProjectsTitle"] ?? "Works & Projects";
$photoTitle = $data["photoTitle"] ?? "Hardware Works";
$photoDescription =
    $data["photoDescription"] ??
    "Built hardware and software inside devices, working across engineering and media art.";
$emailType = $locale === "ko" ? "이메일" : "Email";
$toggleLocale = $locale === "ko" ? "en" : "ko";
$toggleLabel = strtoupper($toggleLocale);
$photos = [];

foreach (["jpg", "jpeg", "png", "webp", "gif"] as $extension) {
    $photos = array_merge(
        $photos,
        glob(__DIR__ . "/assets/hardware/*.$extension") ?: [],
    );
}

sort($photos);

function renderCards(array $items): void
{
    foreach ($items as $item):

        [$title, $description, $tags] = explode("::", $item);
        $tagArray = array_filter(array_map("trim", explode(",", $tags)));
        ?>
        <div class="card">
            <p><?php echo $title; ?></p>
            <p><?php echo $description; ?></p>
            <?php if ($tagArray !== []): ?>
                <div class="tags">
                    <?php foreach ($tagArray as $tag): ?>
                        <span class="tag"><?php echo $tag; ?></span>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    <?php
    endforeach;
}

function photoAltText(string $photo): string
{
    $filename = pathinfo($photo, PATHINFO_FILENAME);
    return ucwords(str_replace(["-", "_"], " ", $filename));
}
?>
<!DOCTYPE html>
<html lang="<?php echo $locale; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitleName; ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <nav>
            <div class="profile-container">
                <div class="profile"></div>
                <div>
                    <?php foreach ($nameArray as $name): ?>
                        <span class="name-variant"><?php echo $name; ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
            <ul>
                <li><a href="index.php?lang=<?php echo $toggleLocale; ?>"><?php echo $toggleLabel; ?></a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="about">
            <p><?php echo $data["aboutContent"]; ?></p>
        </section>

        <section id="work-projects">
            <h4><b><?php echo $workProjectsTitle; ?></b></h4>
            <div class="section-grid section-grid-single">
                <div class="section-column">
                    <?php renderCards($workArray); ?>
                    <?php if ($photos !== []): ?>
                        <div class="photo-block">
                            <div class="photo-copy">
                                <p><?php echo $photoDescription; ?></p>
                            </div>
                            <div class="photo-grid">
                                <?php foreach ($photos as $photo):
                                    $photoPath =
                                        "assets/hardware/" .
                                        basename($photo); ?>
                                    <figure class="photo-item">
                                        <img src="<?php echo htmlspecialchars(
                                            $photoPath,
                                        ); ?>" alt="<?php echo htmlspecialchars(
    photoAltText($photo),
); ?>">
                                    </figure>
                                <?php
                                endforeach; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="footer-grid">
            <div class="footer-left">
                <ul>
                    <?php
                    foreach ($contactItems as [$type, $value, $url]) {
                        if ($type === $emailType) {
                            echo "<li>$value</li>";
                        }
                    }
                    echo "<li>$footerName</li>";
                    ?>
                    <li>
                        <?php foreach ($contactItems as [$type, $value, $url]) {
                            if ($type !== $emailType) {
                                echo '<span class="black-square">';
                                echo "<a href=\"$url\">$type</a>";
                                echo "</span>";
                            }
                        } ?>
                    </li>
                </ul>
                <div class="footer-quote"></div>
            </div>
            <div class="footer-right"></div>
        </div>
    </footer>
</body>
</html>
