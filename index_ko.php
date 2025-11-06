<?php
$data = include "data_ko.php";
//데이터 폭발
$nameArray = explode("|", $data["names"]);
$taglineArray = explode("|", $data["taglines"]);
$currentTagline = $taglineArray[array_rand($taglineArray)];
$projectsArray = explode("|", $data["projects"]);
$workArray = explode("|", $data["work"]);
$contactsArray = explode("|", $data["contacts"]);
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $nameArray[
        random_int(0, count($nameArray) - 1)
    ]; ?> - <?php echo $currentTagline; ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <nav>
            <div class="profile-container">
                <div class="profile"></div>
                <div>
                    <?php foreach ($nameArray as $index => $name): ?>
                        <span class="name-variant"><?php echo $name; ?></span>
                    <?php endforeach; ?>
                    <div class="tagline"><?php echo $currentTagline; ?></div>
                </div>
            </div>
            <ul>
                <li><a href="index.php">EN</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="about">
            <h3><?php
            $aboutTitleArray = explode("\n", $data["aboutTitle"]);
            echo $aboutTitleArray[array_rand($aboutTitleArray)];
            ?></h3>
            <p><?php echo $data["aboutContent"]; ?></p>
        </section>

        <section id="work-projects">
            <h4><b><?php echo $data["workProjectsTitle"]; ?></b></h4>
            <div class="section-grid">

                <div class="section-column">
                    <?php foreach ($workArray as $workItem):

                        [$title, $description, $tags] = explode(
                            "::",
                            $workItem,
                        );
                        $tagArray = explode(",", $tags);
                        ?>
                        <div class="card">
                            <h3><?php echo $title; ?></h3>
                            <p><?php echo $description; ?></p>
                            <div class="tags">
                                <?php foreach ($tagArray as $tag): ?>
                                    <span class="tag"><?php echo trim(
                                        $tag,
                                    ); ?></span>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php
                    endforeach; ?>
                </div>

                <div class="section-column">
                    <?php foreach ($projectsArray as $project):

                        [$title, $description, $tags] = explode("::", $project);
                        $tagArray = explode(",", $tags);
                        ?>
                        <div class="card">
                            <h3><?php echo $title; ?></h3>
                            <p><?php echo $description; ?></p>
                            <div class="tags">
                                <?php foreach ($tagArray as $tag): ?>
                                    <span class="tag"><?php echo trim(
                                        $tag,
                                    ); ?></span>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php
                    endforeach; ?>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="footer-grid">
            <div class="footer-left">
                <ul>
                    <?php
                    foreach ($contactsArray as $contact) {
                        [$type, $value, $url] = explode(":", $contact, 3);
                        if ($type === "이메일") {
                            echo "<li>$value</li>";
                        }
                    }
                    echo "<li>{$nameArray[random_int(
                            0,
                            count($nameArray) - 1,
                        )]}</li>";
                    ?>
                    <li>
                        <?php foreach ($contactsArray as $contact) {
                            [$type, $value, $url] = explode(":", $contact, 3);
                            if ($type !== "이메일") {
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
