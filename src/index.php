<?php
// Index: Core structure (Hero, Features, Footer)
// NOTE: Later epics (Styling, Contact Form, Analytics) will extend this.
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>FasterSolutions – Launch Faster. Impress More.</title>
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <meta name="description" content="Marketing landing page for FasterSolutions product.">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <!-- Fonts added in Epic 2 (Styling). For now rely on system-ui. -->
  <link rel="stylesheet" href="assets/css/reset.css" />
  <link rel="stylesheet" href="assets/css/base.css" />
</head>
<body>
  <a class="skip-link" href="#main">Skip to main content</a>

  <!-- Navigation -->
  <nav class="site-nav" aria-label="Main">
    <div class="nav-inner">
      <div class="brand">
        <span class="brand__logo" aria-hidden="true">⚡</span>
        <span class="brand__name">FasterSolutions</span>
      </div>
      <button class="nav-toggle" aria-expanded="false" aria-controls="navMenu">
        <span class="nav-toggle__bar"></span>
        <span class="nav-toggle__bar"></span>
        <span class="nav-toggle__bar"></span>
        <span class="visually-hidden">Toggle navigation</span>
      </button>
      <ul id="navMenu" class="nav-links" data-state="closed">
        <li><a href="#features">Features</a></li>
        <!-- Contact link will scroll to form (added in Epic 3) -->
        <li><a href="#footer">Contact</a></li>
      </ul>
    </div>
  </nav>

  <main id="main">
    <!-- Hero Section -->
    <header class="hero" role="banner">
      <div class="hero__content">
        <h1 class="hero__title">Launch Faster. Impress More.</h1>
        <p class="hero__subtitle">A focused landing experience built for clarity and conversion.</p>
        <a href="#features" class="hero__cta" role="button">Explore Features</a>
      </div>
      <div class="hero__bg" aria-hidden="true">
        <!-- Background handled in CSS; image placeholder loaded progressively later -->
      </div>
    </header>

    <!-- Features Section -->
    <section id="features" class="features" aria-labelledby="features-heading">
      <div class="section-inner">
        <h2 id="features-heading">Why Choose Us</h2>
        <p class="section-lead">Three pillars driving better launches and user satisfaction.</p>
        <div class="feature-grid">
          <article class="feature-card">
            <div class="feature-card__icon">
              <img src="assets/img/icon-performance.svg" alt="" role="presentation">
            </div>
            <h3 class="feature-card__title">Performance</h3>
            <p class="feature-card__body">Lean markup and optimized assets deliver fast initial render.</p>
          </article>
          <article class="feature-card">
            <div class="feature-card__icon">
              <img src="assets/img/icon-responsive.svg" alt="" role="presentation">
            </div>
            <h3 class="feature-card__title">Responsive Design</h3>
            <p class="feature-card__body">Adaptive layout ensures clarity across mobile, tablet, desktop.</p>
          </article>
          <article class="feature-card">
            <div class="feature-card__icon">
              <img src="assets/img/icon-analytics.svg" alt="" role="presentation">
            </div>
            <h3 class="feature-card__title">Analytics Ready</h3>
            <p class="feature-card__body">Structured head section ready for analytics integration.</p>
          </article>
        </div>
      </div>
    </section>
    <!-- Contact section placeholder (Epic 3) -->
  </main>

  <footer id="footer" class="site-footer" role="contentinfo">
    <div class="footer-inner">
      <p>&copy; <?php echo date('Y'); ?> FasterSolutions. All rights reserved.</p>
      <nav aria-label="Footer">
        <ul class="footer-links">
          <li><a href="#features">Features</a></li>
          <li><a href="#" aria-disabled="true">Privacy (coming)</a></li>
        </ul>
      </nav>
    </div>
  </footer>

  <script src="assets/js/main.js"></script>
</body>
</html>