<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>About Us – NebulaLaunch</title>
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Plus+Jakarta+Sans:wght@600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../assets/css/reset.css" />
  <link rel="stylesheet" href="../assets/css/branding.css" />
  <link rel="stylesheet" href="../assets/css/base.css" />
</head>
<body>

  <nav class="site-nav">
    <div class="nav-inner">
      <a href="index.php" class="brand"><span class="brand__logo">🪐</span> NebulaLaunch</a>
      <ul class="nav-links">
        <li><a href="about.php" style="color:var(--clr-text-main)">About</a></li>
        <li><a href="resources.php">Resources</a></li>
        <li><a href="index.php#contact" >Contact</a></li>
      </ul>
    </div>
  </nav>

  <main>
    <header class="hero reveal-on-scroll">
      <h1 class="hero__title text-gradient">Built for Builders.</h1>
      <p class="hero__subtitle">We are a distributed team of engineers obsessed with shaving milliseconds off your load times.</p>
    </header>

    <section class="section-inner reveal-on-scroll">
        <div class="stats-grid">
            <div class="stat-card stagger-1">
                <span class="stat-number">99.9%</span>
                <p>Uptime SLA</p>
            </div>
            <div class="stat-card stagger-2">
                <span class="stat-number">140+</span>
                <p>Edge Locations</p>
            </div>
            <div class="stat-card stagger-3">
                <span class="stat-number">0.4s</span>
                <p>Avg Latency</p>
            </div>
        </div>
    </section>

    <section class="section-inner reveal-on-scroll" style="padding: var(--space-12) 0;">
        <h2 class="section-title">Our Philosophy</h2>
        <div class="feature-grid">
             <article class="feature-card" style="border-left: 4px solid var(--clr-pastel-mint);">
                <h3 class="feature-card__title">Simplicity</h3>
                <p>Complexity is the enemy of execution. We hide the math so you can focus on the product.</p>
             </article>
             <article class="feature-card" style="border-left: 4px solid var(--clr-pastel-blue);">
                <h3 class="feature-card__title">Transparency</h3>
                <p>No hidden fees, no dark patterns. Our code is open where it counts.</p>
             </article>
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