<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Our Projects – NebulaLaunch</title>
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
      <button class="nav-toggle" aria-label="Menu">
        <span class="nav-toggle__bar"></span>
        <span class="nav-toggle__bar"></span>
        <span class="nav-toggle__bar"></span>
      </button>
      <ul id="navMenu" class="nav-links" data-state="closed">
        <li><a href="about.php">About</a></li>
        <li><a href="projects.php" style="color:var(--clr-text-main)">Projects</a></li>
        <li><a href="resources.php">Resources</a></li>
        <li><a href="index.php#contact" >Contact</a></li>
      </ul>
    </div>
  </nav>

  <main>
    <header class="hero reveal-on-scroll">
      <h1 class="hero__title text-gradient">Built for Scale.</h1>
      <p class="hero__subtitle">Explore how we've helped high-growth companies optimize their digital footprint.</p>
    </header>

    <section class="section-inner" style="padding-bottom: var(--space-16);">
        
        <div class="filter-bar reveal-on-scroll stagger-1">
            <button class="filter-btn active">All Work</button>
            <button class="filter-btn">Fintech</button>
            <button class="filter-btn">E-Commerce</button>
            <button class="filter-btn">Healthcare</button>
        </div>

        <div class="project-grid">
            
            <article class="project-card reveal-on-scroll stagger-1">
                <div class="project-thumb thumb-1">
                    <?php include __DIR__ . '/../assets/img/icon-creditcard.svg'; ?>
                    <div class="project-status"><span class="status-dot live"></span> Live</div>
                </div>
                <div class="project-content">
                    <h3 class="project-title">FinGuard Security</h3>
                    <p class="project-desc">Real-time fraud detection dashboard processing 50k transactions per second with < 100ms latency.</p>
                    <div class="tech-stack">
                        <span class="tech-tag">React</span>
                        <span class="tech-tag">Edge Functions</span>
                        <span class="tech-tag">WebSocket</span>
                    </div>
                </div>
            </article>

            <article class="project-card reveal-on-scroll stagger-2">
                <div class="project-thumb thumb-2">
                    <?php include __DIR__ . '/../assets/img/icon-shopping.svg'; ?>
                    <div class="project-status"><span class="status-dot live"></span> Live</div>
                </div>
                <div class="project-content">
                    <h3 class="project-title">OrbitCommerce</h3>
                    <p class="project-desc">Global headless commerce platform. Reduced cart abandonment by 15% through predictive loading.</p>
                    <div class="tech-stack">
                        <span class="tech-tag">Next.js</span>
                        <span class="tech-tag">Redis</span>
                        <span class="tech-tag">Stripe</span>
                    </div>
                </div>
            </article>

            <article class="project-card reveal-on-scroll stagger-3">
                <div class="project-thumb thumb-3">
                    <?php include __DIR__ . '/../assets/img/icon-hospital.svg'; ?>
                    <div class="project-status"><span class="status-dot beta"></span> Beta</div>
                </div>
                <div class="project-content">
                    <h3 class="project-title">VitalCheck</h3>
                    <p class="project-desc">Secure patient portal with end-to-end encryption and localized data residency compliance.</p>
                    <div class="tech-stack">
                        <span class="tech-tag">TypeScript</span>
                        <span class="tech-tag">HIPAA</span>
                        <span class="tech-tag">Postgres</span>
                    </div>
                </div>
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