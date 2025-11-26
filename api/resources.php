<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Resources – NebulaLaunch</title>
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Plus+Jakarta+Sans:wght@600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../assets/css/reset.css" />
  <link rel="stylesheet" href="../assets/css/branding.css" />
  <link rel="stylesheet" href="../assets/css/base.css" />
</head>
<body>

  <nav class="site-nav">
    <div class="nav-inner">
      <a href="index.php" class="brand"><span class="brand__logo" aria-hidden="true">🪐</span> NebulaLaunch</a>
      <ul class="nav-links">
        <li><a href="about.php">About</a></li>
        <li><a href="resources.php" style="color:var(--clr-text-main)">Resources</a></li>
        <li><a href="index.php#contact" >Contact</a></li>
      </ul>
    </div>
  </nav>

  <main>
    <header class="hero reveal-on-scroll">
      <h1 class="hero__title text-gradient">Knowledge Base</h1>
      <p class="hero__subtitle">Guides, changelogs, and deep dives into edge computing.</p>
    </header>

    <section class="section-inner" style="padding-bottom: var(--space-16);">
        <div class="resource-grid">
            
            <a href="#" class="resource-card reveal-on-scroll stagger-1">
                <div class="resource-img"><?php include __DIR__ . '/../assets/img/icon-performance.svg'; ?></div>
                <div class="resource-content">
                    <span class="tag" style="color: #D4EADD;">Tutorial</span>
                    <h3>Optimizing Images for Edge Delivery</h3>
                    <p style="margin-top:0.5rem; font-size:0.9rem;">Learn how to cut payload size by 60% without quality loss.</p>
                </div>
            </a>

            <a href="#" class="resource-card reveal-on-scroll stagger-2">
                <div class="resource-img"><?php include __DIR__ . '/../assets/img/icon-privacy.svg'; ?></div>
                <div class="resource-content">
                    <span class="tag" style="color: #FADADD;">Security</span>
                    <h3>Understanding WAF Rules</h3>
                    <p style="margin-top:0.5rem; font-size:0.9rem;">Protecting your landing page from common bot attacks.</p>
                </div>
            </a>

            <a href="#" class="resource-card reveal-on-scroll stagger-3">
                <div class="resource-img"><?php include __DIR__ . '/../assets/img/icon-analytics.svg'; ?></div>
                <div class="resource-content">
                    <span class="tag" style="color: #D0E6F8;">Analytics</span>
                    <h3>The Privacy-First Metrics Guide</h3>
                    <p style="margin-top:0.5rem; font-size:0.9rem;">How to measure conversion without cookies.</p>
                </div>
            </a>

        </div>
    </section>
  </main>

  <footer class="site-footer">
      <div class="footer-inner">
          <p>&copy; <?php echo date('Y'); ?> NebulaLaunch. All rights reserved.</p>
          <div class="footer-links">
            <a href="about.php">About</a>
            <a href="projects.php">Projects</a>
            <a href="index.php#contact">Contact</a>
          </div>
      </div>
  </footer>
  <script src="../assets/js/main.js"></script>
</body>
</html>