<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CoutureFolio | Haute Couture Savoir-Faire, Atelier Architecture & Runway Curation</title>
  <meta name="description" content="CoutureFolio documents the pinnacle of haute couture craftsmanship, bespoke corsetry boning architectures, Madeleine Vionnet bias drape physics, and Parisian embroidery heritage.">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@700&family=JetBrains+Mono:wght@400;500;600&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400;1,600&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-0LY0HY7L01"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-0LY0HY7L01');
</script>
</head>
<body>
    <div class="reading-progress-bar" id="readingProgress"></div>
  <header class="site-header">
    <div class="header-container">
      <a href="index.php" class="brand-logo" aria-label="CoutureFolio Homepage">
        <span class="logo-symbol">&#9672;</span>
        <span class="logo-text">CoutureFolio</span>
      </a>

      <nav class="desktop-nav" aria-label="Main Navigation">
        <a href="index.php" class="nav-link active">Home</a>
        <a href="about.html" class="nav-link ">Atelier Heritage</a>
        <a href="blog.html" class="nav-link ">Editorial Journal</a>
        <a href="contact.html" class="nav-link ">Private Fitting</a>
      </nav>

      <div class="header-actions">
        <button class="theme-toggle-btn" id="themeToggle" aria-label="Toggle Night/Day Mode" title="Toggle Theme">
          <span id="themeIcon">&#9789;</span>
        </button>
        <a href="contact.html" class="btn-couture-header">Book Fitting</a>
        <button class="mobile-toggle" id="mobileMenuBtn" aria-label="Open Navigation Drawer">
          <span></span>
          <span></span>
          <span></span>
        </button>
      </div>
    </div>
  </header>

  <!-- Mobile Drawer -->
  <div class="mobile-drawer" id="mobileDrawer">
    <div class="drawer-header">
      <div class="brand-logo">
        <span class="logo-symbol">&#9672;</span>
        <span class="logo-text">CoutureFolio</span>
      </div>
      <button class="close-drawer" id="closeDrawerBtn" aria-label="Close Navigation Drawer">&times;</button>
    </div>
    <nav class="mobile-nav">
      <a href="index.php" class="mobile-nav-link active">Home</a>
      <a href="about.html" class="mobile-nav-link ">Atelier Heritage</a>
      <a href="blog.html" class="mobile-nav-link ">Editorial Journal</a>
      <a href="contact.html" class="mobile-nav-link ">Private Fitting</a>
      <a href="privacy.html" class="mobile-nav-link">Privacy Standards</a>
      <a href="terms.html" class="mobile-nav-link">Terms of Service</a>
      <a href="disclaimer.html" class="mobile-nav-link">Atelier Disclaimer</a>
      <a href="cookies.html" class="mobile-nav-link">Cookie Notice</a>
    </nav>
  </div>

  <main>
    <!-- Editorial Hero Section -->
    <section class="hero-editorial">
      <div class="container">
        <div class="hero-grid">
          <div class="hero-content">
            <span class="badge-tag">Haute Couture Savoir-Faire</span>
            <h1>The Architecture of <span>Pure Form</span> & Textile Poetry</h1>
            <p class="hero-lead">
              CoutureFolio investigates the disciplined craft of haute couture: from the mathematical precision of internal corset boning matrices and 45-degree true bias drape mechanics to the centuries-old Lunéville embroidery of Parisian ateliers.
            </p>
            <div class="hero-cta-group">
              <a href="#atelier" class="btn-couture-primary">Explore Atelier Explorer &#8595;</a>
              <a href="about.html" class="btn-couture-secondary">Atelier Provenance</a>
            </div>
          </div>

          <div class="hero-image-showcase">
            <div class="hero-image-wrapper">
              <img src="images/hero-haute-couture-runway.jpg" alt="Haute Couture Runway Architectural Gown on Catwalk">
            </div>
            <div class="hero-spec-card">
              <span class="hero-spec-stat">450+ Hours</span>
              <span class="hero-spec-label">Average hand-crafting duration per bespoke couture creation</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Interactive Haute Couture Atelier & Silhouette Explorer -->
    <section class="section-padding" id="atelier">
      <div class="container">
        <div class="section-header">
          <span class="badge-tag">Interactive Workshop</span>
          <h2 class="section-title">The Haute Couture Atelier Explorer</h2>
          <p class="section-subtitle">
            Select an iconic couture construction discipline to inspect the underlying pattern geometry, foundation materials, and artisan labor metrics.
          </p>
        </div>

        <div class="atelier-simulator-card">
          <div class="simulator-controls">
            <button class="sim-btn active" data-scenario="corsetry">Corsetry Architecture</button>
            <button class="sim-btn" data-scenario="bias">45° Bias Cut Drapery</button>
            <button class="sim-btn" data-scenario="embroidery">Tambour Beadwork</button>
            <button class="sim-btn" data-scenario="tailoring">Pad-Stitched Suiting</button>
          </div>

          <div class="simulator-results-grid">
            <div class="sim-text-content">
              <h3 class="sim-output-header" id="simTitle">Bespoke Corsetry & Boning Architecture</h3>
              <p class="sim-output-desc" id="simDesc">
                Engineered with 24-channel spiral steel and German spring steel bones cased in triple-layer cotton coutil. Balances vertical torso posture while distributing tension to allow fluid respiration and structural waist suppression.
              </p>

              <div class="spec-metrics-grid">
                <div class="spec-box">
                  <div class="spec-box-label">Silhouette Structure</div>
                  <div class="spec-box-value" id="simSilhouette">Sculpted Hourglass / Internal Torso Chassis</div>
                </div>
                <div class="spec-box">
                  <div class="spec-box-label">Hand Craftsmanship</div>
                  <div class="spec-box-value" id="simHours">180+ Hand Atelier Hours</div>
                </div>
                <div class="spec-box">
                  <div class="spec-box-label">Foundation Textile</div>
                  <div class="spec-box-value" id="simFoundation">French Silk Coutil & Grosgrain Waist Tape</div>
                </div>
                <div class="spec-box">
                  <div class="spec-box-label">Grain Orientation</div>
                  <div class="spec-box-value" id="simGrain">Multi-Panel Diagonal Tensile Bias</div>
                </div>
              </div>
            </div>

            <div class="sim-image-panel">
              <img src="images/couture-corsetry-atelier.jpg" alt="Atelier Corsetry and Pattern Draping Mannequin" id="simImage">
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Runway Craftsmanship Bento Grid (ZERO blog cards) -->
    <section class="section-padding" id="bento" style="border-top: 1px solid var(--bg-card-border); background: rgba(197, 160, 89, 0.02);">
      <div class="container">
        <div class="section-header">
          <span class="badge-tag">Atelier Principles</span>
          <h2 class="section-title">The Four Pillars of Haute Couture Construction</h2>
          <p class="section-subtitle">
            Exploring the structural methodologies that elevate haute couture into wearable fine art.
          </p>
        </div>

        <div class="bento-grid-couture">
          <div class="bento-card bento-col-8">
            <div>
              <span class="chip-tag" style="margin-bottom: 0.75rem;">Discipline I</span>
              <h3 class="bento-card-title">Moulage & Architectural Live-Form Draping</h3>
              <p class="bento-card-desc">
                Unlike mass-market flat pattern drafting, haute couture begins with direct 3-dimensional manipulation of unbleached cotton muslin (toile) on padded dressmaker forms. Master drapers pin, manipulate, and sculpt fabric folds along the natural grainlines to achieve sculptural volumes that defy gravity.
              </p>
            </div>
            <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
              <span class="chip-tag">Muslin Calico Toile</span>
              <span class="chip-tag">True Bias Alignment</span>
              <span class="chip-tag">Live Anatomical Fitting</span>
            </div>
          </div>

          <div class="bento-card bento-col-4">
            <div>
              <span class="chip-tag" style="margin-bottom: 0.75rem;">Discipline II</span>
              <h3 class="bento-card-title">Microscopic Fiber Refraction</h3>
              <p class="bento-card-desc">
                The optical luster of Mulberry silk duchesse satin arises from triangular protein prisms in bombyx mori fibroin filaments, refracting ambient runway light with incandescent depth.
              </p>
            </div>
            <span class="chip-tag">Mulberry Silk Fibroin</span>
          </div>

          <div class="bento-card bento-col-4">
            <div>
              <span class="chip-tag" style="margin-bottom: 0.75rem;">Discipline III</span>
              <h3 class="bento-card-title">Floating Canvas Tailoring</h3>
              <p class="bento-card-desc">
                Structured couture jackets employ floating horsehair and linen canvas interfacings pad-stitched by hand, allowing the garment to adapt to the wearer's body heat without synthetic fusible glues.
              </p>
            </div>
            <span class="chip-tag">Hand Pad-Stitching</span>
          </div>

          <div class="bento-card bento-col-8">
            <div>
              <span class="chip-tag" style="margin-bottom: 0.75rem;">Discipline IV</span>
              <h3 class="bento-card-title">Lunéville Tambour Hook Embroidery & Beading</h3>
              <p class="bento-card-desc">
                Specialist embroiderers stretch sheer silk organza taut across large wooden embroidery frames. Using a miniature tambour needle, thousands of micro-cut glass seed beads and gold bullion coils are chained onto the reverse side by touch alone, producing opulent relief patterns.
              </p>
            </div>
            <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
              <span class="chip-tag">Maison Lesage Tradition</span>
              <span class="chip-tag">Gold Bullion Coil</span>
              <span class="chip-tag">Reverse Tambour Stitch</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Runway Visual Archive Showcase -->
    <section class="section-padding" id="craftsmanship">
      <div class="container">
        <div class="section-header">
          <span class="badge-tag">Visual Portfolio</span>
          <h2 class="section-title">The CoutureFolio Runway & Atelier Gallery</h2>
          <p class="section-subtitle">
            Curated photographic studies capturing the intersection of form, drape, and artisanal finish.
          </p>
        </div>

        <div class="runway-gallery-grid">
          <div class="runway-card">
            <div class="runway-image-wrapper">
              <img src="images/haute-couture-drape-dress.jpg" alt="Sculptural Draped Haute Couture Dress on Runway">
            </div>
            <div class="runway-card-body">
              <span class="chip-tag" style="margin-bottom: 0.5rem;">Runway Collection</span>
              <h4 class="runway-card-title">The Sculptural Column</h4>
              <p class="runway-card-desc">Fluid bias-draped mulberry silk georgette with an integrated internal corset structure.</p>
            </div>
          </div>

          <div class="runway-card">
            <div class="runway-image-wrapper">
              <img src="images/editorial-evening-gown.jpg" alt="Editorial Crimson Evening Gown in Dramatic Studio Light">
            </div>
            <div class="runway-card-body">
              <span class="chip-tag" style="margin-bottom: 0.5rem;">Editorial Series</span>
              <h4 class="runway-card-title">Silk Duchesse Ball Gown</h4>
              <p class="runway-card-desc">Architectural pleating with multi-tiered horsehair hem crinoline supports.</p>
            </div>
          </div>

          <div class="runway-card">
            <div class="runway-image-wrapper">
              <img src="images/bespoke-tailoring-fitting.jpg" alt="Bespoke Tailoring Fitting and Muslin Pattern Pinning">
            </div>
            <div class="runway-card-body">
              <span class="chip-tag" style="margin-bottom: 0.5rem;">Atelier Fitting</span>
              <h4 class="runway-card-title">Calico Muslin Toile</h4>
              <p class="runway-card-desc">First-stage live fitting session establishing balance, ease, and lapel curvature.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- FAQ Accordion -->
    <section class="section-padding" style="border-top: 1px solid var(--bg-card-border);">
      <div class="container">
        <div class="section-header">
          <span class="badge-tag">Frequently Inquired</span>
          <h2 class="section-title">Haute Couture & Atelier Inquiries</h2>
          <p class="section-subtitle">Understanding bespoke fitting cycles, legal haute couture definitions, and artisanal embroidery preservation.</p>
        </div>

        <div class="accordion-wrapper">
          <div class="accordion-item active">
            <button class="accordion-header">
              <span>What defines legal Haute Couture according to the Fédération de la Haute Couture et de la Mode?</span>
              <span class="accordion-icon">+</span>
            </button>
            <div class="accordion-body">
              Under French law, the term 'Haute Couture' is a protected legal appellation established by the Chambre Syndicale de la Haute Couture. To qualify, a fashion house must design made-to-order garments for private clients with one or more fittings, maintain a permanent atelier in Paris employing at least fifteen full-time technical artisans and twenty full-time technical staff, and present a collection of at least fifty original designs to the public twice each year.
            </div>
          </div>

          <div class="accordion-item">
            <button class="accordion-header">
              <span>Why is the 45-degree true bias cut so technically demanding to execute?</span>
              <span class="accordion-icon">+</span>
            </button>
            <div class="accordion-body">
              When woven fabric is cut along the true 45-degree bias line between the warp and weft yarns, the square interlacing grid shifts into dynamic diamond diamonds under gravity. This gives rigid woven silks the elastic stretch of knitwear. However, the fabric stretches continuously under its own weight; garments must hang on dressmaker mannequins for at least 48 hours before hems can be leveled, and every seam must be sewn with specialized stretch stitches to prevent puckering.
            </div>
          </div>

          <div class="accordion-item">
            <button class="accordion-header">
              <span>How does floating horsehair canvas differ from commercial fusible interfacing?</span>
              <span class="accordion-icon">+</span>
            </button>
            <div class="accordion-body">
              Commercial ready-to-wear jackets utilize synthetic glue backings (fusible interfacings) heat-pressed directly onto the outer wool fabric, which results in a stiff, lifeless drape that bubbles over time. In contrast, bespoke haute couture tailoring uses floating horsehair and linen canvas that is meticulously pad-stitched by hand to the wool. The canvas floats freely between the cloth and lining, molding to the wearer's physique over time through body warmth.
            </div>
          </div>

          <div class="accordion-item">
            <button class="accordion-header">
              <span>What is the proper archival storage method for vintage beaded couture gowns?</span>
              <span class="accordion-icon">+</span>
            </button>
            <div class="accordion-body">
              Heavy beaded or embroidered couture gowns should never be hung vertically from hangers, as the weight of the glass beads and metal threads will tear delicate silk tulle and cause irreversible shoulder distortion. Instead, beaded garments must be stored flat inside acid-free, unbuffered museum archival boxes, interleaving each fold with acid-free tissue paper and maintaining climate conditions of 18°C and 45% to 50% relative humidity.
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Consultation CTA -->
    <section class="section-padding" style="background: radial-gradient(circle at 50% 50%, rgba(197, 160, 89, 0.08) 0%, rgba(9, 9, 11, 0.98) 100%); border-top: 1px solid var(--bg-card-border);">
      <div class="container-narrow" style="text-align: center;">
        <span class="badge-tag">Private Appointment</span>
        <h2 class="section-title">Schedule a Private Atelier Consultation</h2>
        <p class="section-subtitle" style="margin-bottom: 2.5rem;">
          Connect with our master pattern cutters and textile archivists in New York for bespoke silhouette consultations, archival garment analysis, or couture commissioning.
        </p>
        <a href="contact.html" class="btn-couture-primary" style="font-size: 1rem; padding: 0.95rem 2.25rem;">Book Private Fitting Consultation</a>
      </div>
    </section>
  </main>

    <footer class="site-footer">
    <div class="container">
      <div class="footer-grid">
        <div class="footer-brand-col">
          <a href="index.php" class="brand-logo" style="margin-bottom: 1.25rem;">
            <span class="logo-symbol">&#9672;</span>
            <span class="logo-text">CoutureFolio</span>
          </a>
          <p class="footer-desc">
            Haute couture savoir-faire, Parisian atelier corsetry architecture, bias cut fluidity, Lunéville embroidery heritage, and archival fashion curation.
          </p>
          <div style="font-family: var(--font-mono); font-size: 0.85rem; color: #a1a1aa; margin-top: 1.25rem; line-height: 1.6;">
            <div>181 Mercer Street, New York, NY 10012, United States</div>
            <div>Direct Line: +1-888-777-5845</div>
            <div>Inquiries: atelier@couturefolio.com</div>
          </div>
        </div>

        <div>
          <h4 class="footer-title">Savoir-Faire</h4>
          <ul class="footer-links">
            <li><a href="index.php#atelier">Atelier Explorer</a></li>
            <li><a href="index.php#craftsmanship">Runway Archive</a></li>
            <li><a href="index.php#bento">Textile Mechanics</a></li>
            <li><a href="about.html">Atelier Provenance</a></li>
          </ul>
        </div>

        <div>
          <h4 class="footer-title">Publications</h4>
          <ul class="footer-links">
            <li><a href="blog.html">Editorial Journal</a></li>
            <li><a href="blog/the-architecture-of-haute-couture-corsetry-boning-patterns-and-waist-suppression-mechanics.html">Corsetry Science</a></li>
            <li><a href="blog/the-physics-of-the-bias-cut-madeleine-vionnet-grainline-fluidity-and-drape-coefficients.html">Bias Cut Physics</a></li>
            <li><a href="blog/savoir-faire-of-parisian-embroidery-lesage-hook-tambour-beading-and-metallic-thread-artistry.html">Lesage Embroidery</a></li>
          </ul>
        </div>

        <div>
          <h4 class="footer-title">Institutional</h4>
          <ul class="footer-links">
            <li><a href="contact.html">Private Fitting</a></li>
            <li><a href="privacy.html">Privacy Standards</a></li>
            <li><a href="terms.html">Terms of Service</a></li>
            <li><a href="disclaimer.html">Atelier Disclaimer</a></li>
            <li><a href="cookies.html">Cookie Notice</a></li>
          </ul>
        </div>
      </div>

      <div class="footer-bottom">
        <div>&copy; <?php echo date('Y'); ?> CoutureFolio Haute Couture Guild. All Rights Reserved.</div>
        <div style="display: flex; gap: 1.5rem;">
          <a href="privacy.html">Privacy</a>
          <a href="terms.html">Terms</a>
          <a href="disclaimer.html">Disclaimer</a>
          <a href="cookies.html">Cookies</a>
        </div>
      </div>
    </div>
  </footer>
  <script src="script.js"></script>
</body>
</html>