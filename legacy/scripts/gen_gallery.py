#!/usr/bin/env python3
"""Generate gallery.html — every photo in assets/images/gallery/ in a lightbox grid.

Run from the project root:  python scripts/gen_gallery.py
"""
import os
import re

ROOT = os.path.dirname(os.path.dirname(os.path.abspath(__file__)))
GALLERY_DIR = os.path.join(ROOT, "assets", "images", "gallery")

CAPTION = "Moon Elderly Care Center"


def numeric_key(name):
    m = re.search(r"(\d+)", name)
    return int(m.group(1)) if m else 0


def gallery_items():
    files = sorted((f for f in os.listdir(GALLERY_DIR) if f.lower().endswith((".jpg", ".jpeg", ".png", ".webp"))), key=numeric_key)
    items = []
    for i, f in enumerate(files, 1):
        path = "assets/images/gallery/" + f
        items.append(
            f'          <a class="gallery-item reveal" data-delay="{((i - 1) % 6) * 70}" '
            f'href="{path}" data-full="{path}" data-caption="{CAPTION}">\n'
            f'            <img src="{path}" alt="{CAPTION}" loading="lazy">\n'
            f'            <span class="gi-zoom"><i class="bi bi-zoom-in"></i></span>\n'
            f'            <span class="gi-cap">{CAPTION}</span>\n'
            f'          </a>'
        )
    return files, "\n".join(items)


HEAD = """<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Our Gallery | Moon Elderly Care Center</title>
  <meta name="description" content="Browse photographs from Moon Elderly Care Center — real moments and everyday warmth from our care centre in Kulim.">

  <link rel="icon" type="image/x-icon" href="./assets/images/favicon.png">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;500;600;700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="./assets/css/theme.css" rel="stylesheet">
</head>

<body>

  <!-- TOPBAR -->
  <div class="site-topbar">
    <div class="container-moon">
      <div class="topbar-meta">
        <a class="item" href="tel:+60164409013"><i class="bi bi-telephone-fill"></i>+60 16 440 9013</a>
        <a class="item" href="mailto:moonelderlycarecenter@example.com"><i class="bi bi-envelope-fill"></i>moonelderlycarecenter@example.com</a>
        <span class="item d-none d-md-inline-flex"><i class="bi bi-clock-fill"></i>Open 24 / 7</span>
      </div>
      <div class="topbar-socials">
        <a href="https://www.facebook.com/" target="_blank" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/" target="_blank" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://twitter.com/" target="_blank" aria-label="X"><i class="bi bi-twitter-x"></i></a>
        <a href="https://www.linkedin.com/" target="_blank" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
      </div>
    </div>
  </div>

  <!-- NAVBAR -->
  <header class="site-navbar">
    <div class="container-moon">
      <a href="index.html" class="navbar-logo" aria-label="Moon Elderly Care Center home">
        <img src="./assets/images/logo.png" alt="Moon Elderly Care Center logo">
      </a>
      <nav aria-label="Primary">
        <ul class="navbar-menu">
          <li><a href="index.html" class="nav-link">Home</a></li>
          <li class="dropdown">
            <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Services <i class="bi bi-chevron-down" style="font-size:.7rem"></i>
            </a>
            <ul class="dropdown-menu moon-dropdown">
              <li><a class="dropdown-item" href="./services/assisted-living.html"><i class="bi bi-house-heart-fill"></i>Assisted Living</a></li>
              <li><a class="dropdown-item" href="./services/independent-living.html"><i class="bi bi-key-fill"></i>Independent Living</a></li>
              <li><a class="dropdown-item" href="./services/palliative-care.html"><i class="bi bi-flower1"></i>Palliative Care</a></li>
              <li><a class="dropdown-item" href="./services/respite-care.html"><i class="bi bi-stopwatch-fill"></i>Respite Care</a></li>
              <li><a class="dropdown-item" href="./services/dementia-care.html"><i class="bi bi-puzzle-fill"></i>Dementia Care</a></li>
              <li><a class="dropdown-item" href="./services/health-care.html"><i class="bi bi-heart-pulse-fill"></i>Health &amp; Support</a></li>
              <li><a class="dropdown-item" href="./services/professional-service.html"><i class="bi bi-person-badge-fill"></i>Professional Services</a></li>
              <li><a class="dropdown-item" href="./services/home-nursing.html"><i class="bi bi-house-heart-fill"></i>Home Nursing</a></li>
              <li><a class="dropdown-item" href="./services/day-care.html"><i class="bi bi-sunrise-fill"></i>Day Care</a></li>
              <li><a class="dropdown-item" href="./services/post-stroke.html"><i class="bi bi-activity"></i>Post-Stroke Rehabilitation</a></li>
            </ul>
          </li>
          <li><a href="gallery.html" class="nav-link active">Gallery</a></li>
          <li><a href="index.html#contact" class="nav-link">Contact</a></li>
        </ul>
      </nav>
      <div class="navbar-cta">
        <a href="tel:+60164409013" class="navbar-phone d-none d-xl-inline-flex">
          <i class="bi bi-telephone-inbound-fill"></i>
          <span>Call us anytime<small>+60 16 440 9013</small></span>
        </a>
        <a href="index.html#contact" class="btn btn-gold btn-sm">Make an enquiry</a>
        <button class="navbar-toggle" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu" aria-label="Open menu">
          <i class="bi bi-list"></i>
        </button>
      </div>
    </div>
  </header>

  <!-- Mobile offcanvas -->
  <div class="offcanvas offcanvas-end moon-canvas" tabindex="-1" id="mobileMenu" aria-labelledby="mobileMenuLabel">
    <div class="offcanvas-header">
      <a href="index.html" class="navbar-logo"><img src="./assets/images/logo.png" alt="Moon logo"></a>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <ul class="moon-canvas-list">
        <li><a href="index.html">Home <i class="bi bi-chevron-right"></i></a></li>
        <li>
          <a data-bs-toggle="collapse" href="#mobileServices" role="button" aria-expanded="false">Services <i class="bi bi-chevron-down"></i></a>
          <ul class="collapse moon-canvas-sub" id="mobileServices">
            <li><a href="./services/assisted-living.html">Assisted Living</a></li>
            <li><a href="./services/independent-living.html">Independent Living</a></li>
            <li><a href="./services/palliative-care.html">Palliative Care</a></li>
            <li><a href="./services/respite-care.html">Respite Care</a></li>
            <li><a href="./services/dementia-care.html">Dementia Care</a></li>
            <li><a href="./services/health-care.html">Health &amp; Support</a></li>
            <li><a href="./services/professional-service.html">Professional Services</a></li>
            <li><a href="./services/home-nursing.html">Home Nursing</a></li>
            <li><a href="./services/day-care.html">Day Care</a></li>
            <li><a href="./services/post-stroke.html">Post-Stroke Rehabilitation</a></li>
          </ul>
        </li>
        <li><a href="gallery.html">Gallery <i class="bi bi-chevron-right"></i></a></li>
        <li><a href="index.html#contact">Contact <i class="bi bi-chevron-right"></i></a></li>
      </ul>
      <a href="index.html#contact" class="btn btn-gold w-100">Make an enquiry</a>
      <div class="footer-socials mt-4">
        <a href="https://www.facebook.com/" target="_blank" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/" target="_blank" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://twitter.com/" target="_blank" aria-label="X"><i class="bi bi-twitter-x"></i></a>
        <a href="https://www.linkedin.com/" target="_blank" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
      </div>
    </div>
  </div>
"""

PAGE_HERO = """  <!-- PAGE HERO -->
  <section class="page-hero" data-stars>
    <div class="moon-mini" aria-hidden="true"></div>
    <div class="container-moon">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb moon-breadcrumb reveal">
          <li><a href="index.html">Home</a></li>
          <li class="active" aria-current="page">Gallery</li>
        </ol>
      </nav>
      <div class="row g-5">
        <div class="col-lg-8 reveal" data-delay="100">
          <div class="hero-badge"><span class="dot"></span>Moon Elderly Care Center</div>
          <h1>Our Gallery</h1>
          <p class="lead">A glimpse into the warmth, care and daily life at Moon Elderly Care Center — real moments, real smiles. Click any photograph to view it in full screen.</p>
        </div>
      </div>
    </div>
  </section>
"""

LIGHTBOX = """  <!-- LIGHTBOX -->
  <div class="modal fade gallery-lightbox" id="galleryLightbox" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
      <div class="modal-content">
        <button type="button" class="lb-close" data-bs-dismiss="modal" aria-label="Close"><i class="bi bi-x-lg"></i></button>
        <div class="lb-stage">
          <button type="button" class="lb-nav lb-prev" aria-label="Previous image"><i class="bi bi-chevron-left"></i></button>
          <figure class="lb-figure">
            <img id="lbImage" src="" alt="">
            <figcaption id="lbCaption"></figcaption>
          </figure>
          <button type="button" class="lb-nav lb-next" aria-label="Next image"><i class="bi bi-chevron-right"></i></button>
        </div>
        <div class="lb-counter" id="lbCounter"></div>
      </div>
    </div>
  </div>
"""

FOOTER = """  <!-- FOOTER -->
  <footer class="footer">
    <div class="container-moon">
      <div class="footer-grid">
        <div>
          <img src="./assets/images/logo.png" alt="Moon Elderly Care Center" class="footer-logo">
          <p>Compassionate, professional elderly care delivered with warmth and dignity — at our care centre in Kulim or in the comfort of your own home.</p>
          <div class="footer-socials">
            <a href="https://www.facebook.com/" target="_blank" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/" target="_blank" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
            <a href="https://twitter.com/" target="_blank" aria-label="X"><i class="bi bi-twitter-x"></i></a>
            <a href="https://www.linkedin.com/" target="_blank" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
        <div>
          <h6>Pages</h6>
          <ul class="footer-links">
            <li><a href="index.html"><i class="bi bi-chevron-right"></i>Home</a></li>
            <li><a href="index.html#services"><i class="bi bi-chevron-right"></i>Services</a></li>
            <li><a href="gallery.html"><i class="bi bi-chevron-right"></i>Gallery</a></li>
            <li><a href="index.html#contact"><i class="bi bi-chevron-right"></i>Contact</a></li>
          </ul>
        </div>
        <div>
          <h6>Contact information</h6>
          <ul class="footer-meta" style="list-style:none;padding:0">
            <li><i class="bi bi-geo-alt-fill"></i><span>Lot 366, Jalan Serdang, Kampung Padang Kulim,<br>09000 Kulim, Kedah</span></li>
            <li><i class="bi bi-telephone-fill"></i><a href="tel:+60164409013">+60 16 440 9013</a></li>
            <li><i class="bi bi-envelope-fill"></i><a href="mailto:moonelderlycarecenter@example.com">moonelderlycarecenter@example.com</a></li>
          </ul>
          <h6 style="margin-top:1.8rem">Stay updated</h6>
          <form id="newsletterForm" class="footer-newsletter" novalidate>
            <input type="email" placeholder="Enter your email address" aria-label="Email address" required>
            <button type="submit" aria-label="Subscribe"><i class="bi bi-send-fill"></i></button>
          </form>
        </div>
      </div>
      <div class="footer-bottom">
        <div>© <span id="year">2026</span> Moon Elderly Care Center. All rights reserved.</div>
        <div>Designed and Developed by <a href="https://faasteel.com/portfolio" target="_blank">Husnain Baber</a></div>
      </div>
    </div>
  </footer>

  <button class="back-top" id="backTop" aria-label="Back to top"><i class="bi bi-arrow-up"></i></button>
"""

SCRIPTS = """  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/js/main.js"></script>
</body>

</html>
"""


def build():
    files, items = gallery_items()
    count = len(files)
    section = (
        "  <!-- GALLERY -->\n"
        '  <section class="section">\n'
        '    <div class="container-moon">\n'
        '      <div class="section-head text-center reveal">\n'
        '        <span class="eyebrow center">Life at Moon Care</span>\n'
        '        <h2>Every moment <span class="text-red">counts</span></h2>\n'
        f'        <p class="mx-auto" style="max-width:60ch">Browse {count} photographs from our care centre — click any image to view it in full screen.</p>\n'
        "      </div>\n"
        '      <div class="gallery-grid">\n'
        + items
        + "\n"
        "      </div>\n"
        "    </div>\n"
        "  </section>\n"
    )
    html = HEAD + PAGE_HERO + section + LIGHTBOX + FOOTER + SCRIPTS
    out = os.path.join(ROOT, "gallery.html")
    with open(out, "w", encoding="utf-8") as f:
        f.write(html)
    print(f"wrote {out} — {count} images")


if __name__ == "__main__":
    build()
