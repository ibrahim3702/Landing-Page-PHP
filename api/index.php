<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>NebulaLaunch – Home</title>
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Plus+Jakarta+Sans:wght@600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../assets/css/reset.css" />
  <link rel="stylesheet" href="../assets/css/branding.css" />
  <link rel="stylesheet" href="../assets/css/base.css" />
  <link rel="stylesheet" href="../assets/css/form.css" />
</head>
<body>
  
  <nav class="site-nav">
    <div class="nav-inner">
      <a href="index.php" class="brand">
        <span class="brand__logo">🪐</span>
        <span class="brand__name">NebulaLaunch</span>
      </a>
      <button class="nav-toggle" aria-label="Menu">
        <span class="nav-toggle__bar"></span>
        <span class="nav-toggle__bar"></span>
        <span class="nav-toggle__bar"></span>
      </button>
      <ul id="navMenu" class="nav-links" data-state="closed">
        <li><a href="projects.php">Projects</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="resources.php">Resources</a></li>
        <li><a href="index.php#pricing">Pricing</a></li>
        <li><a href="index.php#contact" style="padding: 0.4rem 1rem;">Contact</a></li>
      </ul>
    </div>
  </nav>

  <main id="main">
    <header class="hero reveal-on-scroll">
      <h1 class="hero__title text-gradient">Accelerate. Optimize. Scale.</h1>
      <p class="hero__subtitle">NebulaLaunch unifies AI-driven performance and edge-speed delivery.</p>
      <div class="hero__actions">
        <a href="#pricing" class="btn btn-accent">View Pricing</a>
        <a href="about.php" class="btn btn-outline">Our Mission</a>
      </div>
    </header>

    <section class="features">
      <div class="section-inner">
        <h2 class="section-title reveal-on-scroll">Core Advantages</h2>
        <div class="feature-grid">
          <article class="feature-card card--mint reveal-on-scroll stagger-1">
            <div class="feature-card__content">
                <h3 class="feature-card__title">Adaptive AI</h3>
                <p>Dynamic tuning reduces load times automatically.</p>
            </div>
          </article>
          <article class="feature-card card--lilac reveal-on-scroll stagger-2">
            <div class="feature-card__content">
                <h3 class="feature-card__title">Edge Speed</h3>
                <p>Globally distributed push ensuring sub-second response.</p>
            </div>
          </article>
          <article class="feature-card card--pink reveal-on-scroll stagger-3">
            <div class="feature-card__content">
                <h3 class="feature-card__title">Privacy First</h3>
                <p>Actionable metrics without invasive tracking.</p>
            </div>
          </article>
        </div>
      </div>
    </section>

    <section id="pricing" class="pricing-section reveal-on-scroll">
      <div class="section-inner">
        <h2 class="section-title">Simple Pricing</h2>
        <div class="pricing-grid">
          <div class="pricing-card">
            <h3 class="pricing-card__title">Basic</h3>
            <p class="pricing-card__price">$9<span>/mo</span></p>
            <ul class="pricing-features"><li>Single Page</li><li>Analytics</li></ul>
            <a href="#contact" class="btn btn-outline">Get Started</a>
          </div>
          <div class="pricing-card pricing-card--featured">
            <h3 class="pricing-card__title">Pro</h3>
            <p class="pricing-card__price">$29<span>/mo</span></p>
            <ul class="pricing-features"><li>AI Performance</li><li>Priority Support</li></ul>
            <a href="#contact" class="btn btn-accent">Start Pro</a>
          </div>
          <div class="pricing-card pricing-card--featured">
            <h3 class="pricing-card__title">Enterprise</h3>
            <p class="pricing-card__price">Custom Pricing</p>
            <ul class="pricing-features"><li>Dedicated Solutions</li><li>24/7 Support</li></ul>
            <a href="#contact" class="btn btn-accent">Contact Sales</a>
          </div>
        </div>
      </div>
    </section>

    <section id="contact" class="contact-section reveal-on-scroll">
        <div class="section-inner">
            <h2 class="section-title">Get in Touch</h2>
            <div id="form-message"></div>
            <form id="contactForm" class="form-card" novalidate>
                <input type="hidden" name="csrf_token" value="<?php echo hash('sha256', 'salt'); ?>">
                <div class="hp-field"><input type="text" name="website"></div>
                
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" required>
                </div>
                <div class="form-group">
                    <label>Message</label>
                    <textarea name="message" rows="4" required></textarea>
                </div>
                <button id="submitBtn" class="btn btn-accent" type="submit">Send Message</button>
            </form>
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
  <script src="../assets/js/validation.js"></script>
  <script>
// AJAX Submission Logic (Same as before, ensures no page flash)
document.getElementById('contactForm').addEventListener('submit', async function(e) {
    e.preventDefault(); 
    const form = this;
    const btn = document.getElementById('submitBtn');
    const msgDiv = document.getElementById('form-message');
    
    // JS Validation Hook (if validation.js returns true/false, we could use it here)
    if (!form.checkValidity()) {
        msgDiv.innerHTML = '<div class="alert alert-error">Please fill in all required fields correctly.</div>';
        return;
    }

    const originalText = btn.innerText;
    btn.innerText = 'Sending...';
    btn.disabled = true;
    msgDiv.innerHTML = '';

    try {
        const formData = new FormData(form);
        const response = await fetch('/contact', {
            method: 'POST',
            body: formData
        });

        const result = await response.json();

        if (result.ok) {
            msgDiv.innerHTML = '<div class="alert alert-success">Message sent successfully!</div>';
            form.reset();
            // Clear validation visuals
            document.querySelectorAll('.valid').forEach(el => el.classList.remove('valid'));
        } else {
            let errorText = 'Something went wrong.';
            if (result.error === 'email') errorText = 'Please provide a valid email address.';
            if (result.error === 'short') errorText = 'Message is too short.';
            if (result.error === 'missing') errorText = 'All fields are required.';
            msgDiv.innerHTML = `<div class="alert alert-error">${errorText}</div>`;
        }
    } catch (error) {
        msgDiv.innerHTML = '<div class="alert alert-error">Network error. Please try again.</div>';
    } finally {
        btn.innerText = originalText;
        btn.disabled = false;
    }
});
</script>
</body>
</html>