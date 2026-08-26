#!/usr/bin/env python3
"""Generate the 10 Moon Elderly Care Center service pages from one template.

Run from the project root:  python scripts/gen_services.py
"""
import os

ROOT = os.path.dirname(os.path.dirname(os.path.abspath(__file__)))

IMG = "https://cdn.prod.website-files.com/664dc2c72953cea4ef68aa48/6651cd6e32cdfbefd8a16864_service-01.jpg"

PAGES = [
    {
        "slug": "assisted-living",
        "title": "Assisted Living Care",
        "meta": "Assisted living at Moon Elderly Care Center — residential care that treats every resident as an individual, preserving dignity and independence.",
        "icon": "bi-house-heart-fill",
        "intro": ("At Moon Elderly Care Center, the residential care we provide is what you might expect in an "
                  "ordinary care home for older people — but we go further. Our Assisted Living services are all "
                  "about treating each and every resident as an individual. By understanding our residents’ needs, "
                  "preserving dignity and respecting independence, we help to create a real sense of home."),
    },
    {
        "slug": "day-care",
        "title": "Day Care",
        "meta": "Day care for seniors at Moon Elderly Care Center — a safe, social and caring environment while you are away from home.",
        "icon": "bi-sunrise-fill",
        "intro": ("We offer day care services for your loved one so that you can have peace of mind while away from "
                  "home. It’s a warm, safe and social setting with care on hand whenever it’s needed."),
    },
    {
        "slug": "dementia-care",
        "title": "Dementia Care",
        "meta": "Specialised dementia and Alzheimer's care at Moon Elderly Care Center — dedicated, individualised support in a safe environment.",
        "icon": "bi-puzzle-fill",
        "intro": ("Moon Elderly Care Center features a dedicated, specialised dementia care area devoted entirely to "
                  "residents living with Alzheimer’s, dementia or other forms of memory loss. It’s the quality, "
                  "individualised care you’ll find in our assisted living — but with a specialised focus on caring "
                  "for people living with the effects of Alzheimer’s or other forms of dementia."),
    },
    {
        "slug": "health-care",
        "title": "Health & Support",
        "meta": "Health and support services for the elderly at Moon Elderly Care Center — senior independent living with 24/7 caring oversight.",
        "icon": "bi-heart-pulse-fill",
        "intro": ("Moon Elderly Care Center offers health and support to the elderly people of our country, with "
                  "excellent senior independent living options. Taking care of an elderly family member is not easy — "
                  "they might need caring oversight twenty-four hours a day, seven days a week, particularly when "
                  "their health is failing or they live with age-related conditions such as dementia or Alzheimer’s."),
    },
    {
        "slug": "home-nursing",
        "title": "Home Nursing",
        "meta": "Professional home nursing care from Moon Elderly Care Center — care for your loved ones in a familiar home environment.",
        "icon": "bi-house-heart-fill",
        "intro": ("When you prefer to keep your loved ones at home, we can arrange to send our professional staff to "
                  "care for them in a familiar environment. We also provide medical chaperones to hospitals for your "
                  "loved ones, so no journey is taken alone."),
    },
    {
        "slug": "independent-living",
        "title": "Independent Living Care",
        "meta": "Independent living at Moon Elderly Care Center — your own home, without the worry of maintenance, chores or cooking.",
        "icon": "bi-key-fill",
        "intro": ("At Moon Elderly Care Center we also offer Independent Living to a limited number of residents. As "
                  "the name suggests, it’s a lifestyle independent of any care services — although these are all "
                  "available on-site should you need them. Independent Living here is just like living in your own "
                  "home, but without the worry of maintenance, household chores or even cooking."),
    },
    {
        "slug": "palliative-care",
        "title": "Palliative Care",
        "meta": "Compassionate palliative care at Moon Elderly Care Center — treating physical and emotional symptoms with comfort and dignity.",
        "icon": "bi-flower1",
        "intro": ("At Moon Elderly Care Center, palliative care treats the physical and emotional symptoms that occur "
                  "during the last stages of life. It includes treatments such as medicine, physical therapy, "
                  "nutrition management, counselling and coordination with hospice and mental health providers. We "
                  "make residents as comfortable as possible and support families with resources and emotional support."),
    },
    {
        "slug": "post-stroke",
        "title": "Post-Stroke Rehabilitation",
        "meta": "Post-stroke rehabilitation at Moon Elderly Care Center — a strong physio team and a tailored programme in the golden 90-day window.",
        "icon": "bi-activity",
        "intro": ("Moon Elderly Care Center has a strong physio team well versed in working with post-stroke "
                  "residents. As the first 90 days after a stroke are known as the golden period, our physiotherapy "
                  "team creates a tailor-made programme that maximises the chances of recovery for your loved ones."),
    },
    {
        "slug": "professional-service",
        "title": "Professional Services",
        "meta": "Affordable professional senior care from Moon Elderly Care Center — holistic healing services at reasonable prices.",
        "icon": "bi-person-badge-fill",
        "intro": ("We offer professional services at affordable, reasonable prices — we do not want to burden "
                  "families. We provide stellar senior living and holistic healing services while working for a "
                  "minimum of profit, just enough to sustain our facilities. Fifty percent of our full income goes "
                  "to our poor and sick residents. We have a dream to take care of every elderly person who lives "
                  "alone and might need help."),
    },
    {
        "slug": "respite-care",
        "title": "Respite Care",
        "meta": "Respite care at Moon Elderly Care Center — temporary, comfortable care for seniors while home carers recharge.",
        "icon": "bi-stopwatch-fill",
        "intro": ("Sometimes you just need to relax and take it easy. Maybe you’re getting over an illness or an "
                  "operation, or your home carers simply need a break while they recharge their batteries. Respite "
                  "care is temporary care for older people in a care home setting — available for assisted living, "
                  "residential, memory and nursing care. All our respite carers are trained, qualified and caring."),
    },
]

FEATURES = [
    ("bi-person-hearts", "Personal care assistance", "Helping with daily activities to maintain independence."),
    ("bi-clipboard2-pulse", "Specialised care", "Tailored care for specific medical needs."),
    ("bi-house-heart", "Home nursing services", "Professional nursing care is provided at home."),
    ("bi-chat-heart-fill", "Companionship services", "Enhancing quality of life through social interaction."),
    ("bi-activity", "Rehabilitation support", "Individualised care, safety, familiarity, emotional support."),
    ("bi-flower2", "Palliative care services", "Comfort, relief, support, improved quality of life."),
]

WHY = [
    ("bi-person-check-fill", "Experienced team", "Our caregivers are trained professionals who truly care about your well-being."),
    ("bi-calendar2-check-fill", "Flexible scheduling", "We offer flexible scheduling to fit your lifestyle."),
    ("bi-heart-fill", "Personalised attention", "Every resident is treated as an individual, with dignity and respect."),
]

SERVICES_DROPDOWN = [
    ("assisted-living", "bi-house-heart-fill", "Assisted Living"),
    ("independent-living", "bi-key-fill", "Independent Living"),
    ("palliative-care", "bi-flower1", "Palliative Care"),
    ("respite-care", "bi-stopwatch-fill", "Respite Care"),
    ("dementia-care", "bi-puzzle-fill", "Dementia Care"),
    ("health-care", "bi-heart-pulse-fill", "Health &amp; Support"),
    ("professional-service", "bi-person-badge-fill", "Professional Services"),
    ("home-nursing", "bi-house-heart-fill", "Home Nursing"),
    ("day-care", "bi-sunrise-fill", "Day Care"),
    ("post-stroke", "bi-activity", "Post-Stroke Rehabilitation"),
]


def nav_dropdown(current_slug):
    items = []
    for slug, icon, label in SERVICES_DROPDOWN:
        cls = ' class="dropdown-item active-item"' if slug == current_slug else ' class="dropdown-item"'
        items.append(
            f'              <li><a{cls} href="./{slug}.html"><i class="{icon}"></i>{label}</a></li>'
        )
    return "\n".join(items)


def nav_submenu(current_slug):
    items = []
    for slug, icon, label in SERVICES_DROPDOWN:
        items.append(
            f'            <li><a href="./{slug}.html">{label}</a></li>'
        )
    return "\n".join(items)


def feature_cards():
    cards = []
    for i, (icon, title, desc) in enumerate(FEATURES):
        delay = i * 80
        cards.append(f"""
        <div class="col-md-6 col-lg-4 reveal" data-delay="{delay}">
          <div class="feature-card h-100">
            <div class="f-icon"><i class="{icon}"></i></div>
            <h3>{title}</h3>
            <p>{desc}</p>
          </div>
        </div>""")
    return "".join(cards)


def why_points():
    points = []
    for icon, title, desc in WHY:
        points.append(f"""
          <div class="why-point">
            <i class="{icon}"></i>
            <div><strong>{title}</strong><br><span>{desc}</span></div>
          </div>""")
    return "".join(points)


def render(page):
    features = feature_cards()
    why = why_points()
    return f"""<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{page['title']} | Moon Elderly Care Center</title>
  <meta name="description" content="{page['meta']}">

  <link rel="icon" type="image/x-icon" href="../assets/images/favicon.png">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;500;600;700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="../assets/css/theme.css" rel="stylesheet">
</head>

<body>

  <!-- TOPBAR -->
  <div class="site-topbar">
    <div class="container-moon">
      <div class="topbar-meta">
        <a class="item" href="tel:+60164409013"><i class="bi bi-telephone-fill"></i>+60 16 440 9013</a>
        <a class="item" href="mailto:moonelderlycarecenter@gmail.com"><i class="bi bi-envelope-fill"></i>moonelderlycarecenter@gmail.com</a>
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
      <a href="../index.html" class="navbar-logo" aria-label="Moon Elderly Care Center home">
        <img src="../assets/images/logo.png" alt="Moon Elderly Care Center logo">
      </a>
      <nav aria-label="Primary">
        <ul class="navbar-menu">
          <li><a href="../index.html" class="nav-link">Home</a></li>
          <li class="dropdown">
            <a href="#" class="nav-link dropdown-toggle active" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Services <i class="bi bi-chevron-down" style="font-size:.7rem"></i>
            </a>
            <ul class="dropdown-menu moon-dropdown">
{nav_dropdown(page['slug'])}
            </ul>
          </li>
          <li><a href="../gallery.html" class="nav-link">Gallery</a></li>
          <li><a href="../index.html#contact" class="nav-link">Contact</a></li>
        </ul>
      </nav>
      <div class="navbar-cta">
        <a href="tel:+60164409013" class="navbar-phone d-none d-xl-inline-flex">
          <i class="bi bi-telephone-inbound-fill"></i>
          <span>Call us anytime<small>+60 16 440 9013</small></span>
        </a>
        <a href="../index.html#contact" class="btn btn-gold btn-sm">Make an enquiry</a>
        <button class="navbar-toggle" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu" aria-label="Open menu">
          <i class="bi bi-list"></i>
        </button>
      </div>
    </div>
  </header>

  <!-- Mobile offcanvas -->
  <div class="offcanvas offcanvas-end moon-canvas" tabindex="-1" id="mobileMenu" aria-labelledby="mobileMenuLabel">
    <div class="offcanvas-header">
      <a href="../index.html" class="navbar-logo"><img src="../assets/images/logo.png" alt="Moon logo"></a>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <ul class="moon-canvas-list">
        <li><a href="../index.html">Home <i class="bi bi-chevron-right"></i></a></li>
        <li>
          <a data-bs-toggle="collapse" href="#mobileServices" role="button" aria-expanded="false">Services <i class="bi bi-chevron-down"></i></a>
          <ul class="collapse moon-canvas-sub" id="mobileServices">
{nav_submenu(page['slug'])}
          </ul>
        </li>
        <li><a href="../gallery.html">Gallery <i class="bi bi-chevron-right"></i></a></li>
        <li><a href="../index.html#contact">Contact <i class="bi bi-chevron-right"></i></a></li>
      </ul>
      <a href="../index.html#contact" class="btn btn-gold w-100">Make an enquiry</a>
      <div class="footer-socials mt-4">
        <a href="https://www.facebook.com/" target="_blank" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/" target="_blank" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://twitter.com/" target="_blank" aria-label="X"><i class="bi bi-twitter-x"></i></a>
        <a href="https://www.linkedin.com/" target="_blank" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
      </div>
    </div>
  </div>

  <!-- PAGE HERO -->
  <section class="page-hero" data-stars>
    <div class="moon-mini" aria-hidden="true"></div>
    <div class="container-moon">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb moon-breadcrumb reveal">
          <li><a href="../index.html">Home</a></li>
          <li><a href="../index.html#services">Services</a></li>
          <li class="active" aria-current="page">{page['title']}</li>
        </ol>
      </nav>
      <div class="row align-items-center g-5">
        <div class="col-lg-7 reveal" data-delay="100">
          <div class="hero-badge"><span class="dot"></span>Moon Elderly Care Center</div>
          <h1>{page['title']}</h1>
          <p class="lead">{page['intro']}</p>
          <div class="hero-actions mt-4" style="margin-bottom:0">
            <a href="../index.html#contact" class="btn btn-gold">Schedule a consultation <i class="bi bi-arrow-right"></i></a>
            <a href="../index.html#services" class="btn btn-outline">View all services</a>
          </div>
        </div>
        <div class="col-lg-5 reveal" data-delay="250">
          <div class="why-media">
            <div class="photo-frame">
              <img src="{IMG}" alt="{page['title']} at Moon Elderly Care Center" loading="lazy" style="height:440px">
            </div>
            <div class="why-float a">
              <div class="f-icon"><i class="{page['icon']}"></i></div>
              <div><h5>{page['title']}</h5><span>Compassionate care, always on hand</span></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FEATURES -->
  <section class="section">
    <div class="container-moon">
      <div class="section-head text-center reveal">
        <span class="eyebrow center">What's included</span>
        <h2>Everything your loved one <span class="text-red">needs</span></h2>
        <p class="mx-auto" style="max-width:60ch">A full spectrum of support delivered by skilled, caring professionals.</p>
      </div>
      <div class="row g-4">{features}
      </div>
    </div>
  </section>

  <!-- WHY CHOOSE -->
  <section class="section" style="padding-top:0">
    <div class="container-moon">
      <div class="why-strip reveal" data-dir="zoom">
        <div class="row g-4 align-items-center">
          <div class="col-lg-5">
            <span class="eyebrow">Why choose us</span>
            <h2>Why choose <span class="text-red">Moon Care</span></h2>
          </div>
          <div class="col-lg-7">{why}
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="section" style="padding-top:0">
    <div class="container-moon">
      <div class="cta-band reveal" data-dir="zoom">
        <div class="moon-mini" aria-hidden="true"></div>
        <div class="row align-items-center">
          <div class="col-lg-8">
            <h2>Join our community of care</h2>
            <p>Talk to our team today and find the right care plan for your loved one.</p>
          </div>
          <div class="col-lg-4 text-lg-end">
            <a href="tel:+60164409013" class="btn btn-gold btn-lg"><i class="bi bi-telephone-fill"></i> Call +60 16 440 9013</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer class="footer">
    <div class="container-moon">
      <div class="footer-grid">
        <div>
          <img src="../assets/images/logo.png" alt="Moon Elderly Care Center" class="footer-logo">
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
            <li><a href="../index.html"><i class="bi bi-chevron-right"></i>Home</a></li>
            <li><a href="../index.html#services"><i class="bi bi-chevron-right"></i>Services</a></li>
            <li><a href="./assisted-living.html"><i class="bi bi-chevron-right"></i>Assisted Living</a></li>
            <li><a href="./home-nursing.html"><i class="bi bi-chevron-right"></i>Home Nursing</a></li>
            <li><a href="./dementia-care.html"><i class="bi bi-chevron-right"></i>Dementia Care</a></li>
            <li><a href="../index.html#contact"><i class="bi bi-chevron-right"></i>Contact</a></li>
          </ul>
        </div>
        <div>
          <h6>Contact information</h6>
          <ul class="footer-meta" style="list-style:none;padding:0">
            <li><i class="bi bi-geo-alt-fill"></i><span>Lot 366, Jalan Serdang, Kampung Padang Kulim,<br>09000 Kulim, Kedah</span></li>
            <li><i class="bi bi-telephone-fill"></i><a href="tel:+60164409013">+60 16 440 9013</a></li>
            <li><i class="bi bi-envelope-fill"></i><a href="mailto:moonelderlycarecenter@gmail.com">moonelderlycarecenter@gmail.com</a></li>
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
        <div>Designed and Developed by <a href="https://hbtech.digital" target="_blank">HBTech</a></div>
      </div>
    </div>
  </footer>

  <button class="back-top" id="backTop" aria-label="Back to top"><i class="bi bi-arrow-up"></i></button>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/main.js"></script>
</body>

</html>
"""


def main():
    out_dir = os.path.join(ROOT, "services")
    for page in PAGES:
        html = render(page)
        path = os.path.join(out_dir, page["slug"] + ".html")
        with open(path, "w", encoding="utf-8", newline="\n") as f:
            f.write(html)
        print(f"wrote {path} ({len(html.splitlines())} lines)")


if __name__ == "__main__":
    main()
