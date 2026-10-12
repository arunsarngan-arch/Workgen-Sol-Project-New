<?php
session_start();
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
$csrfToken = $_SESSION['csrf_token'];

$mailConfig       = is_file(__DIR__ . '/contact-mail-config.php') ? (require __DIR__ . '/contact-mail-config.php') : [];
$turnstileEnabled = !empty($mailConfig['turnstile']['enabled']);
$turnstileSiteKey = $mailConfig['turnstile']['site_key'] ?? '';
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contact Workgen Solutions | Request a Free BPO &amp; Data Annotation Quote</title>
  <meta name="description" content="Contact Workgen Solutions for a free consultation and tailored quote on AI data annotation, retail image auditing, QA/QC monitoring, and back-office BPO services."/>
  <meta name="keywords" content="contact Workgen Solutions, BPO quote, data annotation consultation, Noida BPO office, outsource data labeling"/>
  <meta name="robots" content="index, follow"/>
  <meta property="og:type" content="website"/>
  <meta property="og:site_name" content="Workgen Solutions"/>
  <meta property="og:title" content="Contact Workgen Solutions | Request a Free BPO &amp; Data Annotation Quote"/>
  <meta property="og:description" content="Contact Workgen Solutions for a free consultation and tailored quote on AI data annotation, retail image auditing, QA/QC monitoring, and back-office BPO services."/>
  <meta property="og:image" content="workgenLogo.jpg"/>
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:title" content="Contact Workgen Solutions | Request a Free BPO &amp; Data Annotation Quote"/>
  <meta name="twitter:description" content="Contact Workgen Solutions for a free consultation and tailored quote on AI data annotation, retail image auditing, QA/QC monitoring, and back-office BPO services."/>
  <meta name="twitter:image" content="workgenLogo.jpg"/>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
  <?php if ($turnstileEnabled): ?>

  <script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>
  <?php endif; ?>

  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            'dark-blue': '#1e40af',
            'light-blue': '#60a5fa',
            'very-light-blue': '#eff6ff',
          },
          fontFamily: { sans: ['Josefin Sans', 'sans-serif'] }
        }
      }
    }
  </script>

  <style>
    html, body { overflow-x: hidden; }
    /* Navbar */
    #mobile-menu { max-height:0; overflow:hidden; transition:max-height 0.4s cubic-bezier(0.4,0,0.2,1),opacity 0.3s ease; opacity:0; }
    #mobile-menu.open { max-height:calc(100vh - 78px); overflow-y:auto; -webkit-overflow-scrolling:touch; opacity:1; }
    .ham-line { display:block; width:24px; height:2px; background:#1e40af; border-radius:2px; transition:all 0.3s ease; transform-origin:center; }
    #hamburger.active .ham-line:nth-child(1) { transform:translateY(8px) rotate(45deg); }
    #hamburger.active .ham-line:nth-child(2) { opacity:0; transform:scaleX(0); }
    #hamburger.active .ham-line:nth-child(3) { transform:translateY(-8px) rotate(-45deg); }

    /* Hero */
    .contact-hero {
      background: linear-gradient(135deg, #020818 0%, #071232 30%, #0a1a4a 60%, #060e28 100%);
      position: relative;
      overflow: hidden;
    }
    .hero-grid {
      position: absolute; inset: 0;
      background-image:
        linear-gradient(rgba(255,255,255,0.03) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255,255,255,0.03) 1px, transparent 1px);
      background-size: 55px 55px;
      pointer-events: none;
    }

    .hero-cta { position:relative; transition:all 0.3s ease; z-index:0; }
    .hero-cta::before {
      content:''; position:absolute; inset:-3px; border-radius:999px;
      background:linear-gradient(90deg,#60a5fa,#a5b4fc,#60a5fa); background-size:200% auto;
      opacity:0; transition:opacity 0.35s; animation:glowSpin 3s linear infinite; z-index:-1;
    }
    @keyframes glowSpin { 0%{background-position:0% center} 100%{background-position:200% center} }
    .hero-cta:hover::before { opacity:1; }
    .hero-cta:hover { transform:translateY(-3px); box-shadow:0 14px 40px rgba(96,165,250,0.35); }

    .section-tag {
      display:inline-block; background:#eff6ff; color:#1e40af;
      font-size:0.75rem; font-weight:700; letter-spacing:0.1em; text-transform:uppercase;
      padding:5px 16px; border-radius:999px; border:1px solid #bfdbfe; margin-bottom:14px;
    }

    .form-input {
      width: 100%;
      padding: 13px 16px;
      border: 1.5px solid #e2e8f0;
      border-radius: 12px;
      font-family: 'Josefin Sans', sans-serif;
      font-size: 0.95rem;
      color: #1e293b;
      background: #f8fafc;
      transition: border-color 0.25s, box-shadow 0.25s, background 0.25s;
      outline: none;
    }
    .form-input:focus {
      border-color: #1e40af;
      background: #ffffff;
      box-shadow: 0 0 0 3px rgba(30,64,175,0.1);
    }
    .form-label {
      display: block;
      font-size: 0.85rem;
      font-weight: 700;
      color: #374151;
      margin-bottom: 6px;
      letter-spacing: 0.03em;
    }

    .info-card {
      display: flex;
      align-items: flex-start;
      gap: 16px;
      padding: 22px 24px;
      background: white;
      border: 1px solid #e8eef6;
      border-radius: 18px;
      transition: all 0.3s;
    }
    .info-card:hover {
      border-color: #bfdbfe;
      box-shadow: 0 8px 28px rgba(30,64,175,0.08);
      transform: translateY(-3px);
    }
    .info-icon {
      width: 46px; height: 46px;
      border-radius: 13px;
      background: #eff6ff;
      display: flex; align-items: center; justify-content: center;
      flex-shrink: 0;
      transition: background 0.3s;
    }
    .info-card:hover .info-icon { background: #1e40af; }
    .info-card:hover .info-icon i { color: white !important; }

    .submit-btn {
      width: 100%;
      padding: 15px;
      background: #1e40af;
      color: white;
      font-family: 'Josefin Sans', sans-serif;
      font-size: 1rem;
      font-weight: 700;
      border: none;
      border-radius: 999px;
      cursor: pointer;
      transition: all 0.3s;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
    }
    .submit-btn:hover {
      background: #1d3fa6;
      transform: translateY(-2px);
      box-shadow: 0 10px 30px rgba(30,64,175,0.3);
    }
    .submit-btn:active { transform: translateY(0); }
    .submit-btn:disabled { opacity: 0.7; cursor: not-allowed; transform: none; }

    .char-counter { font-size: 0.78rem; color: #94a3b8; text-align: right; margin-top: 4px; transition: color 0.2s; }
    .char-counter.warn  { color: #f59e0b; }
    .char-counter.limit { color: #ef4444; font-weight: 700; }

    .alert-success {
      background: #f0fdf4; border: 1.5px solid #86efac; border-radius: 14px;
      padding: 16px 20px; color: #166534; display: flex; align-items: center; gap: 12px;
      margin-bottom: 24px;
    }
    .alert-error {
      background: #fef2f2; border: 1.5px solid #fca5a5; border-radius: 14px;
      padding: 16px 20px; color: #991b1b; display: flex; align-items: center; gap: 12px;
      margin-bottom: 24px;
    }
  </style>
</head>
<body class="bg-white font-sans antialiased">

  <nav class="fixed top-0 left-0 right-0 z-50 bg-white shadow-md">
    <div class="container mx-auto px-4 lg:px-8 py-3 flex items-center justify-between max-w-7xl">
      <a href="index.php">
        <img src="workgenLogo.jpg" alt="Workgen Solutions" style="height:54px;width:auto;object-fit:contain;">
      </a>
      <div class="hidden md:flex items-center space-x-10 text-gray-700 font-semibold text-lg">
        <a href="index.php" class="hover:text-dark-blue transition">Home</a>
        <a href="aboutUs.php" class="hover:text-dark-blue transition">About Us</a>
        <div class="relative group">
          <a href="services.php" class="hover:text-dark-blue transition flex items-center">
            Services
            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
          </a>
          <div class="absolute left-0 top-full hidden group-hover:block hover:block bg-white shadow-lg rounded-md mt-0 py-2 w-52">
            <a href="services.php#back-office" class="block px-4 py-2 text-base hover:bg-very-light-blue">Back Office</a>
            <a href="services.php#data-annotation" class="block px-4 py-2 text-base hover:bg-very-light-blue">Data Annotation</a>
            <a href="services.php#qa-qc" class="block px-4 py-2 text-base hover:bg-very-light-blue">QA/QC Monitoring</a>
            <a href="services.php#customer-support" class="block px-4 py-2 text-base hover:bg-very-light-blue">Customer Support</a>
            <a href="services.php#ml-annotation" class="block px-4 py-2 text-base hover:bg-very-light-blue">ML Annotation</a>
          </div>
        </div>
        <div class="relative group">
          <a href="resources.php" class="hover:text-dark-blue transition flex items-center">
            Resources
            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
          </a>
          <div class="absolute left-0 top-full hidden group-hover:block hover:block bg-white shadow-lg rounded-md mt-0 py-2 w-52">
            <a href="resources.php#case-studies" class="block px-4 py-2 text-base hover:bg-very-light-blue">Case Studies</a>
            <a href="blogs.php" class="block px-4 py-2 text-base hover:bg-very-light-blue">Blogs</a>
          </div>
        </div>
        <a href="contact.php" class="text-dark-blue border-b-2 border-dark-blue pb-0.5 transition">Contact Us</a>
      </div>
      <a href="contact.php" class="hero-cta hidden md:inline-block bg-dark-blue text-white font-semibold px-6 py-3 rounded-full text-base shadow-md transition">
        Get Started
      </a>
      <button id="hamburger" class="md:hidden flex flex-col gap-1.5 p-2 rounded-lg focus:outline-none" onclick="toggleMenu()" aria-label="Toggle menu">
        <span class="ham-line"></span>
        <span class="ham-line"></span>
        <span class="ham-line"></span>
      </button>
    </div>

    <div id="mobile-menu">
      <div style="background:white;border-top:1px solid #e2e8f0;padding:8px 16px 16px;">
        <a href="index.php" class="block py-3 px-2 text-gray-700 font-semibold text-base border-b border-gray-100 hover:text-dark-blue transition">Home</a>
        <a href="aboutUs.php" class="block py-3 px-2 text-gray-700 font-semibold text-base border-b border-gray-100 hover:text-dark-blue transition">About Us</a>
        <div>
          <button onclick="toggleServices()" class="w-full flex items-center justify-between py-3 px-2 text-gray-700 font-semibold text-base border-b border-gray-100 hover:text-dark-blue transition focus:outline-none">
            Services
            <svg id="services-arrow" class="w-4 h-4 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
          </button>
          <div id="services-sub" style="max-height:0;overflow:hidden;transition:max-height 0.3s ease;background:#f8fafc;border-radius:8px;margin:0 4px;">
            <a href="services.php#back-office" class="block py-2 px-6 text-sm text-gray-600 hover:text-dark-blue transition">Back Office</a>
            <a href="services.php#data-annotation" class="block py-2 px-6 text-sm text-gray-600 hover:text-dark-blue transition">Data Annotation</a>
            <a href="services.php#qa-qc" class="block py-2 px-6 text-sm text-gray-600 hover:text-dark-blue transition">QA/QC Monitoring</a>
            <a href="services.php#customer-support" class="block py-2 px-6 text-sm text-gray-600 hover:text-dark-blue transition">Customer Support</a>
            <a href="services.php#ml-annotation" class="block py-2 px-6 text-sm text-gray-600 hover:text-dark-blue transition">ML Annotation</a>
          </div>
        </div>
        <div>
          <button onclick="toggleResearch()" class="w-full flex items-center justify-between py-3 px-2 text-gray-700 font-semibold text-base border-b border-gray-100 hover:text-dark-blue transition focus:outline-none">
            Resources
            <svg id="research-arrow" class="w-4 h-4 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
          </button>
          <div id="research-sub" style="max-height:0;overflow:hidden;transition:max-height 0.3s ease;background:#f8fafc;border-radius:8px;margin:0 4px;">
            <a href="resources.php#case-studies" class="block py-2 px-6 text-sm text-gray-600 hover:text-dark-blue transition">Case Studies</a>
            <a href="blogs.php" class="block py-2 px-6 text-sm text-gray-600 hover:text-dark-blue transition">Blogs</a>
          </div>
        </div>
        <a href="contact.php" class="block py-3 px-2 text-dark-blue font-semibold text-base border-b border-gray-100 hover:text-dark-blue transition">Contact Us</a>
        <div class="pt-4 px-2">
          <a href="contact.php" class="block text-center bg-dark-blue text-white font-semibold py-3 rounded-full text-base shadow-md hover:bg-blue-800 transition">Get Started</a>
        </div>
      </div>
    </div>
  </nav>

  <script>
    function toggleMenu() {
      const menu = document.getElementById('mobile-menu');
      const btn  = document.getElementById('hamburger');
      menu.classList.toggle('open');
      btn.classList.toggle('active');
    }
    function toggleServices() {
      const sub   = document.getElementById('services-sub');
      const arrow = document.getElementById('services-arrow');
      const isOpen = sub.style.maxHeight && sub.style.maxHeight !== '0px';
      sub.style.maxHeight = isOpen ? '0px' : '200px';
      arrow.style.transform = isOpen ? 'rotate(0deg)' : 'rotate(180deg)';
    }
    function toggleResearch() {
      const sub   = document.getElementById('research-sub');
      const arrow = document.getElementById('research-arrow');
      const isOpen = sub.style.maxHeight && sub.style.maxHeight !== '0px';
      sub.style.maxHeight = isOpen ? '0px' : '120px';
      arrow.style.transform = isOpen ? 'rotate(0deg)' : 'rotate(180deg)';
    }
    document.querySelectorAll('#mobile-menu a').forEach(link => {
      link.addEventListener('click', () => {
        document.getElementById('mobile-menu').classList.remove('open');
        document.getElementById('hamburger').classList.remove('active');
      });
    });
  </script>

  <div class="h-20"></div>

  <section class="contact-hero py-24 md:py-32">
    <div class="hero-grid"></div>
    <div style="position:absolute;width:600px;height:600px;background:radial-gradient(circle,rgba(29,78,216,0.45),transparent 70%);top:-200px;right:-150px;filter:blur(90px);border-radius:50%;pointer-events:none;"></div>
    <div style="position:absolute;width:400px;height:400px;background:radial-gradient(circle,rgba(67,56,202,0.35),transparent 70%);bottom:-120px;left:-80px;filter:blur(80px);border-radius:50%;pointer-events:none;"></div>

    <div class="container mx-auto px-6 max-w-4xl text-center relative z-10">
      <div class="animate__animated animate__fadeInDown" style="display:flex;justify-content:center;margin-bottom:20px;">
        <span style="display:inline-flex;align-items:center;gap:8px;background:rgba(255,255,255,0.08);border:1px solid rgba(255,255,255,0.2);border-radius:999px;padding:6px 18px;font-size:0.78rem;font-weight:600;letter-spacing:0.08em;text-transform:uppercase;color:#bfdbfe;">
          <span style="width:8px;height:8px;background:#4ade80;border-radius:50%;display:inline-block;animation:livePulse 1.6s ease-in-out infinite;"></span>
          We Reply Within 24 Hours
        </span>
      </div>
      <h1 class="animate__animated animate__fadeInDown text-4xl md:text-6xl font-extrabold text-white mb-6 leading-tight" style="animation-delay:0.2s;">
        Let's Start a<br/>
        <span style="color:#93c5fd;">Conversation</span>
      </h1>
      <p class="animate__animated animate__fadeInUp text-lg md:text-xl text-slate-300 max-w-2xl mx-auto leading-relaxed mb-10" style="animation-delay:0.4s;">
        Tell us about your project and we'll get back to you with a tailored solution and a free quote within one business day.
      </p>
    </div>



    <style>
      @keyframes livePulse {
        0%,100% { box-shadow: 0 0 0 0 rgba(74,222,128,0.45); }
        50%      { box-shadow: 0 0 0 8px rgba(74,222,128,0); }
      }
    </style>
  </section>

  <section class="py-24" style="background:#f8fafc;">
    <div class="container mx-auto px-6 max-w-6xl">
      <div class="grid lg:grid-cols-5 gap-12 items-start">

        <div class="lg:col-span-2" data-aos="fade-right">
          <span class="section-tag">Get In Touch</span>
          <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mt-2 mb-4 leading-tight">We'd Love to Hear From You</h2>
          <p class="text-gray-500 text-base leading-relaxed mb-10">Whether you're looking for a quote, have a question, or just want to explore possibilities — our team is ready.</p>

          <div class="space-y-5">
            <div class="info-card">
              <div class="info-icon">
                <i class="fa-solid fa-location-dot" style="color:#1e40af;font-size:1.1rem;"></i>
              </div>
              <div>
                <div class="font-bold text-gray-900 text-sm mb-1">Our Office</div>
                <p class="text-gray-500 text-sm leading-relaxed">918, 9th Floor Tower 2, Assotech Business Cresterra,<br>Sec 135, Noida — 201305</p>
              </div>
            </div>

            <div class="info-card">
              <div class="info-icon">
                <i class="fa-solid fa-envelope" style="color:#1e40af;font-size:1.1rem;"></i>
              </div>
              <div>
                <div class="font-bold text-gray-900 text-sm mb-1">Email Us</div>
                <a href="mailto:info@workgen.in" class="text-dark-blue text-sm font-semibold hover:underline">info@workgen.in</a>
              </div>
            </div>

            <div class="info-card">
              <div class="info-icon">
                <i class="fa-solid fa-globe" style="color:#1e40af;font-size:1.1rem;"></i>
              </div>
              <div>
                <div class="font-bold text-gray-900 text-sm mb-1">Global Reach</div>
                <p class="text-gray-500 text-sm">Serving clients across 30+ countries</p>
              </div>
            </div>
          </div>
        </div>

        <div class="lg:col-span-3" data-aos="fade-left">
          <div style="background:white;border:1px solid #e8eef6;border-radius:28px;padding:40px 36px;">
            <h3 class="text-2xl font-extrabold text-gray-900 mb-2">Send Us a Message</h3>
            <p class="text-gray-500 text-sm mb-8">Fields marked <span style="color:#ef4444;">*</span> are required.</p>

            <div id="alert-success" class="alert-success" style="display:none;">
              <i class="fa-solid fa-circle-check text-xl" style="color:#16a34a;flex-shrink:0;"></i>
              <div>
                <div class="font-bold">Message sent successfully!</div>
                <div class="text-sm">Thank you for reaching out. We'll get back to you within one business day.</div>
              </div>
            </div>

            <div id="alert-error" class="alert-error" style="display:none;">
              <i class="fa-solid fa-circle-exclamation text-xl" style="color:#dc2626;flex-shrink:0;"></i>
              <div>
                <div class="font-bold">Submission failed</div>
                <div class="text-sm" id="error-message"></div>
              </div>
            </div>

            <form id="contact-form" action="contact-submit.php" method="POST" novalidate>
              <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($csrfToken, ENT_QUOTES, 'UTF-8'); ?>">
              <input type="text" name="website" tabindex="-1" autocomplete="off" style="position:absolute;left:-9999px;opacity:0;pointer-events:none;">
              <div class="grid sm:grid-cols-2 gap-5 mb-5">
                <div>
                  <label class="form-label" for="name">Full Name <span style="color:#ef4444;">*</span></label>
                  <input class="form-input" type="text" id="name" name="name" placeholder="John Smith" required value="">
                </div>
                <div>
                  <label class="form-label" for="email">Email Address <span style="color:#ef4444;">*</span></label>
                  <input class="form-input" type="email" id="email" name="email" placeholder="john@company.com" required value="">
                </div>
              </div>

              <div class="grid sm:grid-cols-2 gap-5 mb-5">
                <div>
                  <label class="form-label" for="company">Company Name</label>
                  <input class="form-input" type="text" id="company" name="company" placeholder="Acme Corp" value="">
                </div>
                <div>
                  <label class="form-label" for="service">Service Interested In</label>
                  <select class="form-input" id="service" name="service">
                    <option value="" disabled selected>Select a service…</option>
                    <option value="Back Office Operations">Back Office Operations</option>
                    <option value="Data Annotation">Data Annotation</option>
                    <option value="QA/QC Monitoring">QA/QC Monitoring</option>
                    <option value="Customer Support">Customer Support</option>
                    <option value="ML Annotation Services">ML Annotation Services</option>
                    <option value="Other">Other</option>
                  </select>
                </div>
              </div>

              <div class="mb-7">
                <label class="form-label" for="message">Your Message <span style="color:#ef4444;">*</span></label>
                <textarea class="form-input" id="message" name="message" rows="5" placeholder="Tell us about your project, volume, timeline, or any questions you have…" required style="resize:vertical;" maxlength="5000"></textarea>
                <div class="char-counter" id="char-counter">0 / 5000</div>
              </div>

              <?php if ($turnstileEnabled): ?>
              <div class="cf-turnstile mb-6" data-sitekey="<?php echo htmlspecialchars($turnstileSiteKey, ENT_QUOTES, 'UTF-8'); ?>" data-theme="light"></div>
              <?php endif; ?>

              <button type="submit" class="submit-btn">
                <i class="fa-solid fa-paper-plane"></i>
                Send Message
              </button>
            </form>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section class="text-center py-20" style="background:#60a5fa;">
    <div class="container mx-auto px-6 lg:px-8 max-w-4xl" data-aos="fade-up">
      <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-5">Prefer a Quick Chat?</h2>
      <p class="text-2xl mb-10 max-w-3xl mx-auto" style="color:rgba(255,255,255,0.9);">Drop us an email and we'll schedule a free 30-minute discovery call.</p>
      <a href="mailto:info@workgen.in"
         class="hero-cta inline-block bg-white font-bold px-14 py-5 rounded-full text-xl shadow-xl"
         style="color:#1e40af;">
        Email Us Now
      </a>
    </div>
  </section>

  <footer style="background:#163498;">
    <div class="container mx-auto px-6 lg:px-12 py-14 max-w-7xl">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">

        <div class="lg:col-span-1">
          <img src="workgenLogo.jpg" alt="Workgen Solutions" style="height:52px;width:auto;object-fit:contain;margin-bottom:16px;background:white;padding:4px 8px;border-radius:8px;">
          <p style="color:rgba(255,255,255,0.8);font-size:1rem;line-height:1.75;">
            Workgen, founded in 2017, came into existence with a vision of providing high-quality business process outsourcing and back-office support services across the globe.
          </p>
          <div style="display:flex;align-items:center;gap:22px;margin-top:26px;flex-wrap:wrap;">
            <a href="https://x.com/" target="_blank" rel="noopener noreferrer" aria-label="X" style="color:white;font-size:1.15rem;text-decoration:none;transition:opacity 0.2s;" onmouseover="this.style.opacity='0.75'" onmouseout="this.style.opacity='1'"><i class="fa-brands fa-x-twitter"></i></a>
            <a href="https://www.linkedin.com/company/workgen-solutions/" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn" style="color:white;font-size:1.15rem;text-decoration:none;transition:opacity 0.2s;" onmouseover="this.style.opacity='0.75'" onmouseout="this.style.opacity='1'"><i class="fa-brands fa-linkedin-in"></i></a>
            <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer" aria-label="Facebook" style="color:white;font-size:1.15rem;text-decoration:none;transition:opacity 0.2s;" onmouseover="this.style.opacity='0.75'" onmouseout="this.style.opacity='1'"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="https://www.skype.com/" target="_blank" rel="noopener noreferrer" aria-label="Skype" style="color:white;font-size:1.15rem;text-decoration:none;transition:opacity 0.2s;" onmouseover="this.style.opacity='0.75'" onmouseout="this.style.opacity='1'"><i class="fa-brands fa-skype"></i></a>
          </div>
        </div>

        <div>
          <h4 class="font-bold text-white text-lg mb-5">Links</h4>
          <ul class="space-y-3">
            <li><a href="index.php" style="color:rgba(255,255,255,0.8);font-size:1rem;text-decoration:none;" onmouseover="this.style.color='white'" onmouseout="this.style.color='rgba(255,255,255,0.8)'">Home</a></li>
            <li><a href="aboutUs.php" style="color:rgba(255,255,255,0.8);font-size:1rem;text-decoration:none;" onmouseover="this.style.color='white'" onmouseout="this.style.color='rgba(255,255,255,0.8)'">About Us</a></li>
            <li><a href="services.php" style="color:rgba(255,255,255,0.8);font-size:1rem;text-decoration:none;" onmouseover="this.style.color='white'" onmouseout="this.style.color='rgba(255,255,255,0.8)'">Services</a></li>
            <li><a href="resources.php#case-studies" style="color:rgba(255,255,255,0.8);font-size:1rem;text-decoration:none;" onmouseover="this.style.color='white'" onmouseout="this.style.color='rgba(255,255,255,0.8)'">Case Studies</a></li>
            <li><a href="blogs.php" style="color:rgba(255,255,255,0.8);font-size:1rem;text-decoration:none;" onmouseover="this.style.color='white'" onmouseout="this.style.color='rgba(255,255,255,0.8)'">Blogs</a></li>
            <li><a href="contact.php" style="color:rgba(255,255,255,0.8);font-size:1rem;text-decoration:none;" onmouseover="this.style.color='white'" onmouseout="this.style.color='rgba(255,255,255,0.8)'">Contact Us</a></li>
          </ul>
        </div>

        <div>
          <h4 class="font-bold text-white text-lg mb-5">Our Services</h4>
          <ul class="space-y-3">
            <li><a href="services.php#back-office" style="color:rgba(255,255,255,0.8);font-size:1rem;text-decoration:none;" onmouseover="this.style.color='white'" onmouseout="this.style.color='rgba(255,255,255,0.8)'">Back Office Operation</a></li>
            <li><a href="services.php#data-annotation" style="color:rgba(255,255,255,0.8);font-size:1rem;text-decoration:none;" onmouseover="this.style.color='white'" onmouseout="this.style.color='rgba(255,255,255,0.8)'">Data Annotation</a></li>
            <li><a href="services.php#qa-qc" style="color:rgba(255,255,255,0.8);font-size:1rem;text-decoration:none;" onmouseover="this.style.color='white'" onmouseout="this.style.color='rgba(255,255,255,0.8)'">QA/QC Monitoring</a></li>
            <li><a href="services.php#customer-support" style="color:rgba(255,255,255,0.8);font-size:1rem;text-decoration:none;" onmouseover="this.style.color='white'" onmouseout="this.style.color='rgba(255,255,255,0.8)'">Customer Support</a></li>
            <li><a href="services.php#ml-annotation" style="color:rgba(255,255,255,0.8);font-size:1rem;text-decoration:none;" onmouseover="this.style.color='white'" onmouseout="this.style.color='rgba(255,255,255,0.8)'">ML Annotation Services</a></li>
          </ul>
        </div>

        <div>
          <h4 class="font-bold text-white text-lg mb-5">Contact Info</h4>
          <div class="flex items-start gap-3 mb-4">
            <span style="color:white;margin-top:2px;">📍</span>
            <p style="color:rgba(255,255,255,0.8);font-size:1rem;line-height:1.65;margin:0;">918, 9th Floor Tower 2, Assotech Business Cresterra, Sec 135, Noida, 201305</p>
          </div>
          <div class="flex items-center gap-3">
            <span style="color:white;">✉️</span>
            <a href="mailto:info@workgen.in" style="color:rgba(255,255,255,0.8);font-size:1rem;text-decoration:none;" onmouseover="this.style.color='white'" onmouseout="this.style.color='rgba(255,255,255,0.8)'">info@workgen.in</a>
          </div>
        </div>

      </div>
    </div>

    <div style="border-top:1px solid rgba(255,255,255,0.15);padding:16px 0;text-align:center;">
      <p style="color:rgba(255,255,255,0.7);font-size:0.85rem;margin:0;">© 2017 Workgen Solutions. All Copyright Reserved.</p>
    </div>
  </footer>

  <script>
    AOS.init({ once: true, duration: 800 });

    (function () {
      const textarea = document.getElementById('message');
      const counter  = document.getElementById('char-counter');
      const MAX      = 5000;

      textarea.addEventListener('input', function () {
        const len = textarea.value.length;
        counter.textContent = len + ' / ' + MAX;
        counter.classList.toggle('warn',  len >= 4000 && len < MAX);
        counter.classList.toggle('limit', len >= MAX);
      });
    })();

    document.getElementById('contact-form').addEventListener('submit', function (e) {
      e.preventDefault();

      const name    = document.getElementById('name').value.trim();
      const email   = document.getElementById('email').value.trim();
      const message = document.getElementById('message').value.trim();

      const alertSuccess = document.getElementById('alert-success');
      const alertError   = document.getElementById('alert-error');
      const errorMsg     = document.getElementById('error-message');

      alertSuccess.style.display = 'none';
      alertError.style.display   = 'none';

      if (!name || !email || !message) {
        errorMsg.textContent = 'Please fill in all required fields.';
        alertError.style.display = 'flex';
        alertError.scrollIntoView({ behavior: 'smooth', block: 'center' });
        return;
      }

      if (message.length > 5000) {
        errorMsg.textContent = 'Your message is too long. Please keep it under 5 000 characters.';
        alertError.style.display = 'flex';
        alertError.scrollIntoView({ behavior: 'smooth', block: 'center' });
        return;
      }

      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailRegex.test(email)) {
        errorMsg.textContent = 'Please enter a valid email address.';
        alertError.style.display = 'flex';
        alertError.scrollIntoView({ behavior: 'smooth', block: 'center' });
        return;
      }

      const submitBtn = this.querySelector('.submit-btn');
      submitBtn.disabled = true;
      submitBtn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Sending…';

      const formData = new FormData(this);

      fetch(this.getAttribute('action') || 'contact-submit.php', {
        method: 'POST',
        body: formData,
        headers: { 'Accept': 'application/json' }
      })
      .then(function (response) {
        return response.json().catch(function () {
          return { ok: false, message: 'Unexpected server response.' };
        }).then(function (payload) {
          return { httpOk: response.ok, payload: payload };
        });
      })
      .then(function (result) {
        if (result.httpOk && result.payload.ok) {
          alertSuccess.style.display = 'flex';
          alertSuccess.scrollIntoView({ behavior: 'smooth', block: 'center' });
          document.getElementById('contact-form').reset();
          document.getElementById('char-counter').textContent = '0 / 5000';
          document.getElementById('char-counter').className = 'char-counter';
        } else {
          errorMsg.textContent = result.payload.message || 'Sorry, something went wrong. Please email us directly at info@workgen.in';
          alertError.style.display = 'flex';
          alertError.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }
      })
      .catch(function () {
        errorMsg.textContent = 'Sorry, something went wrong. Please email us directly at info@workgen.in';
        alertError.style.display = 'flex';
        alertError.scrollIntoView({ behavior: 'smooth', block: 'center' });
      })
      .finally(function () {
        submitBtn.disabled = false;
        submitBtn.innerHTML = '<i class="fa-solid fa-paper-plane"></i> Send Message';
      });
    });
  </script>

</body>
</html>