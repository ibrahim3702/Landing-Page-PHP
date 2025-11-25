<?php
// Rebranded index for NebulaLaunch: Adds new feature set + pricing section (Basic, Pro, Enterprise).
session_start();
$old = $_SESSION['form_values'] ?? [];
$errs = $_SESSION['form_errors'] ?? [];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>NebulaLaunch – Accelerate, Optimize, Scale</title>
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <meta name="description" content="NebulaLaunch: AI-driven optimization, lightning edge delivery, privacy-first analytics.">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <!-- Fonts: Inter + Plus Jakarta Sans for headings -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../assets/css/reset.css" />
  <link rel="stylesheet" href="../assets/css/branding.css" />
  <link rel="stylesheet" href="../assets/css/base.css" />
  <link rel="stylesheet" href="../assets/css/form.css" />
</head>
<body>
  <a class="skip-link" href="#main">Skip to main content</a>

  <nav class="site-nav" aria-label="Main">
    <div class="nav-inner">
      <div class="brand">
        <span class="brand__logo" aria-hidden="true">🪐</span>
        <span class="brand__name">NebulaLaunch</span>
      </div>
      <button class="nav-toggle" aria-expanded="false" aria-controls="navMenu">
        <span class="nav-toggle__bar"></span>
        <span class="nav-toggle__bar"></span>
        <span class="nav-toggle__bar"></span>
        <span class="visually-hidden">Toggle navigation</span>
      </button>
      <ul id="navMenu" class="nav-links" data-state="closed">
        <li><a href="#features">Features</a></li>
        <li><a href="#pricing">Pricing</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </div>
  </nav>

  <main id="main">
    <!-- Hero -->
    <header class="hero hero--nebula" role="banner">
      <div class="hero__content">
        <h1 class="hero__title">Accelerate. Optimize. Scale.</h1>
        <p class="hero__subtitle">NebulaLaunch unifies AI-driven performance, edge-speed delivery, and privacy-first insights so you launch boldly.</p>
        <div class="hero__actions">
          <a href="#pricing" class="btn btn-accent hero__cta" role="button">View Pricing</a>
          <a href="#features" class="btn btn-outline btn-pill">Explore Features</a>
        </div>
      </div>
      <div class="hero__bg" aria-hidden="true"></div>
    </header>

    <!-- Features -->
    <section id="features" class="features" aria-labelledby="features-heading">
      <div class="section-inner">
        <h2 id="features-heading" class="section-title">Core Advantages</h2>
        <p class="section-lead">Cut deployment friction and unlock smart optimization from day one.</p>
        <div class="feature-grid">
          <article class="feature-card" aria-labelledby="feat-ai-title">
            <div class="feature-card__icon" aria-hidden="true">
              <?php include __DIR__ . '/../assets/img/icon-ai.svg'; ?>
            </div>
            <h3 id="feat-ai-title" class="feature-card__title">Adaptive AI Optimization</h3>
            <p class="feature-card__body">Dynamic tuning reduces load times and improves engagement patterns automatically.</p>
          </article>
          <article class="feature-card" aria-labelledby="feat-edge-title">
            <div class="feature-card__icon" aria-hidden="true">
              <?php include __DIR__ . '/../assets/img/icon-edge.svg'; ?>
            </div>
            <h3 id="feat-edge-title" class="feature-card__title">Edge-Speed Delivery</h3>
            <p class="feature-card__body">Globally distributed push ensures consistent sub-second responses across continents.</p>
          </article>
          <article class="feature-card" aria-labelledby="feat-privacy-title">
            <div class="feature-card__icon" aria-hidden="true">
              <?php include __DIR__ . '/../assets/img/icon-privacy.svg'; ?>
            </div>
            <h3 id="feat-privacy-title" class="feature-card__title">Privacy-First Analytics</h3>
            <p class="feature-card__body">Actionable metrics without invasive tracking—respect users while learning fast.</p>
          </article>
        </div>
      </div>
    </section>

    <!-- Pricing -->
    <section id="pricing" class="pricing-section" aria-labelledby="pricing-heading">
      <div class="section-inner">
        <h2 id="pricing-heading" class="section-title">Simple Pricing</h2>
        <p class="section-lead">Choose a plan that matches your growth stage. Upgrade seamlessly.</p>

        <div class="pricing-grid">
          <!-- Basic -->
          <div class="pricing-card" aria-labelledby="plan-basic-title">
            <div class="pricing-card__header">
              <h3 id="plan-basic-title" class="pricing-card__title">Basic</h3>
              <p class="pricing-card__subtitle">Starter essentials</p>
            </div>
            <p class="pricing-card__price"><span class="pricing-card__amount">$9</span>/mo</p>
            <ul class="pricing-features">
              <li>Single landing page</li>
              <li>Essential analytics</li>
              <li>Email support</li>
              <li>Community access</li>
            </ul>
            <a href="#contact" class="btn btn-outline btn-pill pricing-cta" aria-label="Select Basic plan">Get Started</a>
          </div>

          <!-- Pro (Highlighted) -->
          <div class="pricing-card pricing-card--featured" aria-labelledby="plan-pro-title">
            <div class="pricing-card__badge" aria-hidden="true">Most Popular</div>
            <div class="pricing-card__header">
              <h3 id="plan-pro-title" class="pricing-card__title">Pro</h3>
              <p class="pricing-card__subtitle">Growth optimization</p>
            </div>
            <p class="pricing-card__price"><span class="pricing-card__amount">$29</span>/mo</p>
            <ul class="pricing-features">
              <li>Multiple pages & variants</li>
              <li>Adaptive AI performance</li>
              <li>Priority support</li>
              <li>A/B testing toolkit</li>
            </ul>
            <a href="#contact" class="btn btn-accent btn-pill pricing-cta" aria-label="Select Pro plan">Start Pro</a>
          </div>

          <!-- Enterprise -->
            <div class="pricing-card" aria-labelledby="plan-enterprise-title">
              <div class="pricing-card__header">
                <h3 id="plan-enterprise-title" class="pricing-card__title">Enterprise</h3>
                <p class="pricing-card__subtitle">Custom scale</p>
              </div>
              <p class="pricing-card__price"><span class="pricing-card__amount">Custom</span></p>
              <ul class="pricing-features">
                <li>Unlimited experiences</li>
                <li>Dedicated success engineer</li>
                <li>Edge delivery SLA</li>
                <li>Privacy compliance suite</li>
              </ul>
              <a href="#contact" class="btn btn-outline btn-pill pricing-cta" aria-label="Contact for Enterprise plan">Contact Sales</a>
            </div>
        </div>
        <p class="pricing-note">All plans include secure data handling and accessibility-first templates.</p>
      </div>
    </section>

    <!-- Contact (from Epic 3 previous addition) -->
    <section id="contact" class="contact-section" aria-labelledby="contact-heading">
      <div class="section-inner">
        <h2 id="contact-heading">Get in Touch</h2>
        <p class="section-lead">We respond within 24 hours. All fields are required.</p>

        <?php
          if (isset($_GET['success'])) {
            echo '<div class="alert alert-success" role="status">Message sent successfully!</div>';
          } elseif (isset($_GET['error'])) {
            echo '<div class="alert alert-error" role="alert">Please correct the highlighted fields.</div>';
          } elseif (isset($_GET['server'])) {
            echo '<div class="alert alert-error" role="alert">Server error. Try again later.</div>';
          }
        ?>

        <form id="contactForm" class="form-card" method="POST" action="contact.php" novalidate>
          <input type="hidden" name="csrf_token" value="<?php echo hash('sha256', session_id() . 'SECRET_SALT'); ?>">
          <div class="hp-field">
            <label>Leave this field empty</label>
            <input type="text" name="website" tabindex="-1" autocomplete="off">
          </div>

          <div class="form-group">
            <label for="name">Name *</label>
            <input id="name" name="name" type="text" required minlength="2" maxlength="70" autocomplete="name"
                   value="<?php echo $old['name'] ?? ''; ?>">
            <p class="field-error" data-error-for="name"><?php echo $errs['name'] ?? ''; ?></p>
          </div>

          <div class="form-group">
            <label for="email">Email *</label>
            <input id="email" name="email" type="email" required maxlength="120" autocomplete="email"
                   value="<?php echo $old['email'] ?? ''; ?>">
            <p class="field-error" data-error-for="email"><?php echo $errs['email'] ?? ''; ?></p>
          </div>

          <div class="form-group">
            <label for="message">Message *</label>
            <textarea id="message" name="message" rows="5" required minlength="10" maxlength="1500"><?php echo $old['message'] ?? ''; ?></textarea>
            <p class="field-error" data-error-for="message"><?php echo $errs['message'] ?? ''; ?></p>
          </div>

          <div class="form-footer">
            <button class="btn btn-accent" type="submit">Send Message</button>
            <small class="form-note">We never share your information.</small>
          </div>
        </form>
        <?php
          unset($_SESSION['form_errors'], $_SESSION['form_values']);
        ?>
      </div>
    </section>
  </main>

  <footer id="footer" class="site-footer" role="contentinfo">
    <div class="footer-inner">
      <p>&copy; <?php echo date('Y'); ?> NebulaLaunch. All rights reserved.</p>
      <nav aria-label="Footer">
        <ul class="footer-links">
          <li><a href="#features">Features</a></li>
          <li><a href="#pricing">Pricing</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a aria-disabled="true" href="#">Privacy (coming)</a></li>
        </ul>
      </nav>
    </div>
  </footer>

  <script src="../assets/js/main.js"></script>
  <script src="../assets/js/validation.js"></script>
</body>
</html>