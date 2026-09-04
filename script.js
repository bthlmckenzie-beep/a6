// CoutureFolio - Interactive Haute Couture Logic & Explorer
document.addEventListener('DOMContentLoaded', () => {
  // 1. Reading Progress Bar
  const progressBar = document.getElementById('readingProgress');
  if (progressBar) {
    window.addEventListener('scroll', () => {
      const winScroll = document.documentElement.scrollTop || document.body.scrollTop;
      const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
      const scrolled = (winScroll / height) * 100;
      progressBar.style.width = scrolled + '%';
    });
  }

  // 2. Theme Toggler (Atelier Noir / Silk Studio)
  const themeToggle = document.getElementById('themeToggle');
  const themeIcon = document.getElementById('themeIcon');
  const htmlEl = document.documentElement;

  const savedTheme = localStorage.getItem('couture_theme') || 'dark';
  htmlEl.setAttribute('data-theme', savedTheme);
  if (themeIcon) {
    themeIcon.innerHTML = savedTheme === 'dark' ? '&#9789;' : '&#9788;';
  }

  if (themeToggle) {
    themeToggle.addEventListener('click', () => {
      const currentTheme = htmlEl.getAttribute('data-theme');
      const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
      htmlEl.setAttribute('data-theme', newTheme);
      localStorage.setItem('couture_theme', newTheme);
      if (themeIcon) {
        themeIcon.innerHTML = newTheme === 'dark' ? '&#9789;' : '&#9788;';
      }
    });
  }

  // 3. Mobile Navigation Drawer
  const mobileMenuBtn = document.getElementById('mobileMenuBtn');
  const closeDrawerBtn = document.getElementById('closeDrawerBtn');
  const mobileDrawer = document.getElementById('mobileDrawer');

  if (mobileMenuBtn && mobileDrawer) {
    mobileMenuBtn.addEventListener('click', () => {
      mobileDrawer.classList.add('open');
    });
  }

  if (closeDrawerBtn && mobileDrawer) {
    closeDrawerBtn.addEventListener('click', () => {
      mobileDrawer.classList.remove('open');
    });
  }

  // 4. Haute Couture Atelier & Silhouette Explorer
  const simData = {
    corsetry: {
      title: "Bespoke Corsetry & Boning Architecture",
      desc: "Engineered with 24-channel spiral steel and German spring steel bones cased in triple-layer cotton coutil. Balances vertical torso posture while distributing tension to allow fluid respiration and structural waist suppression.",
      silhouette: "Sculpted Hourglass / Internal Torso Chassis",
      stitchHours: "180+ Hand Atelier Hours",
      foundation: "French Silk Coutil & Grosgrain Waist Tape",
      grainline: "Multi-Panel Diagonal Tensile Bias",
      image: "images/couture-corsetry-atelier.jpg"
    },
    bias: {
      title: "Madeleine Vionnet 45° Bias Cut Drapery",
      desc: "Cut precisely at a 45-degree diagonal across the warp and weft of 4-ply heavy silk crepe. Exploits woven elasticity to produce a liquid, zero-resistance gravity drape that sculpts seamlessly without darts or stiff seams.",
      silhouette: "Liquid Columnar / Dynamic Kinetic Drape",
      stitchHours: "120+ Hand Atelier Hours",
      foundation: "Heavy Mulberry Silk Georgette & Crepe de Chine",
      grainline: "True 45° Isometric Diagonal Weave",
      image: "images/silk-bias-cut-gown.jpg"
    },
    embroidery: {
      title: "Maison Lesage Tambour Hook Beadwork",
      desc: "Utilizing the 19th-century Lunéville tambour needle technique, artisans apply micro-cut glass seed beads, sequins, and metallic bullion threads from the reverse of silk organza stretched across wooden slate frames.",
      silhouette: "Embellished Relief / Luminescent Filigree",
      stitchHours: "450+ Master Embroidery Hours",
      foundation: "Triple Silk Organza & Metallic Gold Thread",
      grainline: "Tensioned Square Slate-Frame Weft",
      image: "images/parisian-embroidery-tambour.jpg"
    },
    tailoring: {
      title: "Architectural Pad-Stitched Peplum Jacket",
      desc: "Inspired by the 1947 Bar Suit lineage, featuring a floating horsehair canvas chest piece pad-stitched by hand with over 1,400 stitches per lapel, complemented by hip padding and sculpted sleeve head pitch.",
      silhouette: "Structured Peplum / Cinched Waistline",
      stitchHours: "160+ Master Tailoring Hours",
      foundation: "English Wool Crepe & Woven Horsehair Canvas",
      grainline: "True Straight Grain with Hand-Molded Canvas",
      image: "images/tailored-couture-jacket.jpg"
    }
  };

  const simBtns = document.querySelectorAll('.sim-btn');
  const simTitle = document.getElementById('simTitle');
  const simDesc = document.getElementById('simDesc');
  const simSilhouette = document.getElementById('simSilhouette');
  const simHours = document.getElementById('simHours');
  const simFoundation = document.getElementById('simFoundation');
  const simGrain = document.getElementById('simGrain');
  const simImage = document.getElementById('simImage');

  simBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      simBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      const scenario = btn.getAttribute('data-scenario');
      const data = simData[scenario];

      if (data && simTitle) {
        simTitle.textContent = data.title;
        simDesc.textContent = data.desc;
        simSilhouette.textContent = data.silhouette;
        simHours.textContent = data.stitchHours;
        simFoundation.textContent = data.foundation;
        simGrain.textContent = data.grainline;
        if (simImage) {
          simImage.src = data.image;
        }
      }
    });
  });

  // 5. Accordion Triggers
  const accordionHeaders = document.querySelectorAll('.accordion-header');
  accordionHeaders.forEach(header => {
    header.addEventListener('click', () => {
      const item = header.parentElement;
      const isActive = item.classList.contains('active');
      document.querySelectorAll('.accordion-item').forEach(i => i.classList.remove('active'));
      if (!isActive) {
        item.classList.add('active');
      }
    });
  });
});