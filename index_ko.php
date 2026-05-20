<?php $data = include "data_ko.php"; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data["names"]; ?> — <?php echo $data["tagline"]; ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Fixed Header -->
    <header>
        <nav>
            <a href="index_ko.php" class="site-name"><?php echo $data["names"]; ?></a>
            <ul class="nav-links">
                <li><a href="index.php">EN</a></li>
            </ul>
        </nav>
    </header>

    <div class="content">
        <div class="main-grid">
            <!-- Left Column: Projects -->
            <div class="col-left">
                <div class="col-name"><?php echo $data["names"]; ?></div>
                <?php
                // Group projects by year
                $grouped = [];
                foreach ($data["projects"] as $project) {
                    $year = $project["year"];
                    $grouped[$year][] = $project;
                }
                ?>
                <?php foreach ($grouped as $year => $projects): ?>
                    <div class="year-group">
                        <div class="year-label"><?php echo $year; ?></div>
                        <?php foreach ($projects as $project): ?>
                            <div class="project-item">
                                <div class="project-title" onclick="this.parentElement.classList.toggle('open')">
                                    <?php echo htmlspecialchars($project["title"]); ?>
                                </div>
                                <div class="project-detail">
                                    <div class="project-detail-inner">
                                        <div class="project-meta"><?php echo htmlspecialchars($project["medium"]); ?></div>
                                        <div class="project-meta"><?php echo htmlspecialchars($project["role"]); ?></div>
                                        <?php if (!empty($project["collaborators"])): ?>
                                            <div class="project-meta">w/ <?php echo htmlspecialchars($project["collaborators"]); ?></div>
                                        <?php endif; ?>
                                        <div class="project-desc"><?php echo htmlspecialchars($project["description"]); ?></div>
                                        <?php if (file_exists($project["images"][0])): ?>
                                            <div class="project-image">
                                                <img src="<?php echo $project["images"][0]; ?>" alt="<?php echo htmlspecialchars($project["title"]); ?>">
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Right Column: Intro -->
            <div class="col-right">
                <div class="intro-tagline"><?php echo $data["tagline"]; ?></div>
                <p class="intro-bio"><?php echo htmlspecialchars($data["bio"]); ?></p>
                <div class="intro-links">
                    <a href="mailto:<?php echo $data["email"]; ?>"><?php echo $data["email"]; ?></a>
                    <?php foreach ($data["social"] as $link): ?>
                        <a href="<?php echo $link["url"]; ?>"><?php echo htmlspecialchars($link["label"]); ?></a>
                    <?php endforeach; ?>
                </div>
                <div class="intro-copyright">&copy; <?php echo date("Y"); ?> <?php echo $data["names"]; ?></div>
            </div>
        </div>
    </div>

    <!-- Fixed Footer -->
    <footer>
        <div class="footer-inner">
            <div class="footer-email"><a href="mailto:<?php echo $data["email"]; ?>"><?php echo $data["email"]; ?></a></div>
            <div class="footer-social">
                <?php foreach ($data["social"] as $link): ?>
                    <a href="<?php echo $link["url"]; ?>"><?php echo htmlspecialchars($link["label"]); ?></a>
                <?php endforeach; ?>
            </div>
        </div>
    </footer>
</body>
</html>
