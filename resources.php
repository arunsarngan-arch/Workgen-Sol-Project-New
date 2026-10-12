<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Resources: Client Case Studies &amp; AI Operations Blogs - Workgen Solutions</title>
  <meta name="description" content="Explore Workgen Solutions resources, including real-world client case studies and expert blogs on AI data annotation, retail image audits, QA/QC, and BPO operations."/>
  <meta name="keywords" content="Workgen case studies, BPO case studies, data annotation case studies, retail image audit, QA QC case studies, AI data operations resources"/>
  <meta name="robots" content="index, follow"/>
  <meta property="og:type" content="website"/>
  <meta property="og:site_name" content="Workgen Solutions"/>
  <meta property="og:title" content="Resources: Client Case Studies &amp; AI Operations Blogs - Workgen Solutions"/>
  <meta property="og:description" content="Explore Workgen Solutions resources, including real-world client case studies and expert blogs on AI data annotation, retail image audits, QA/QC, and BPO operations."/>
  <meta property="og:image" content="blogCover1.jpg"/>
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:title" content="Resources: Client Case Studies &amp; AI Operations Blogs - Workgen Solutions"/>
  <meta name="twitter:description" content="Explore Workgen Solutions resources, including real-world client case studies and expert blogs on AI data annotation, retail image audits, QA/QC, and BPO operations."/>
  <meta name="twitter:image" content="blogCover1.jpg"/>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>

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
    .svc-hero {
      background: linear-gradient(135deg,#020818 0%,#071232 30%,#0a1a4a 60%,#060e28 100%);
      position:relative; overflow:hidden;
    }
    .hero-grid {
      position:absolute; inset:0;
      background-image: linear-gradient(rgba(255,255,255,0.03) 1px,transparent 1px), linear-gradient(90deg,rgba(255,255,255,0.03) 1px,transparent 1px);
      background-size:55px 55px; pointer-events:none;
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

    /* Section tag */
    .section-tag {
      display:inline-block; background:#eff6ff; color:#1e40af;
      font-size:0.75rem; font-weight:700; letter-spacing:0.1em; text-transform:uppercase;
      padding:5px 16px; border-radius:999px; border:1px solid #bfdbfe; margin-bottom:14px;
    }

    /* Card styles */
    .svc-detail-card {
      background:white; border:1px solid #e8eef6; border-radius:24px;
      overflow:hidden; transition:all 0.35s cubic-bezier(0.175,0.885,0.32,1.275);
      display:flex; flex-direction:column; justify-content:space-between;
    }
    .svc-detail-card:hover {
      transform:translateY(-6px);
      box-shadow:0 24px 60px rgba(30,64,175,0.12);
      border-color:#bfdbfe;
    }
    .svc-detail-header {
      padding:36px 32px 28px;
      border-bottom:1px solid #f1f5f9;
    }
    .svc-icon-lg {
      width:72px; height:72px; border-radius:20px; background:#eff6ff;
      display:flex; align-items:center; justify-content:center; margin-bottom:20px;
      transition:all 0.3s;
    }
    .svc-detail-card:hover .svc-icon-lg { background:#1e40af; }
    .svc-detail-card:hover .svc-icon-lg i { color:white !important; }
    .svc-detail-body { padding:24px 32px 32px; }

    /* Tab navigation */
    .tab-btn {
      padding:10px 22px; border-radius:999px; font-weight:600; font-size:0.9rem;
      border:1.5px solid rgba(255,255,255,0.2); color:white; cursor:pointer;
      transition:all 0.25s; background:rgba(255,255,255,0.08);
      display:inline-flex; align-items:center; gap:8px;
    }
    .tab-btn.active, .tab-btn:hover {
      background:#1e40af; color:white; border-color:#60a5fa;
      box-shadow:0 8px 24px rgba(30,64,175,0.4);
    }

    /* Blog preview card */
    .blog-card {
      background:white; border:1px solid #e8eef6; border-radius:24px;
      overflow:hidden; transition:all 0.35s ease;
      display:flex; flex-direction:column;
    }
    .blog-card:hover {
      transform:translateY(-6px);
      box-shadow:0 24px 60px rgba(30,64,175,0.12);
      border-color:#bfdbfe;
    }
    .blog-card-img {
      width:100%; height:210px; object-fit:cover;
      border-bottom:1px solid #f1f5f9;
      transition:transform 0.5s ease;
    }
    .blog-card:hover .blog-card-img {
      transform:scale(1.04);
    }
  </style>
</head>
<body class="bg-white font-sans antialiased">

  <!-- NAVBAR -->
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
          <a href="resources.php" class="text-dark-blue border-b-2 border-dark-blue pb-0.5 flex items-center">
            Resources
            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
          </a>
          <div class="absolute left-0 top-full hidden group-hover:block hover:block bg-white shadow-lg rounded-md mt-0 py-2 w-48">
            <a href="resources.php#case-studies" class="block px-4 py-2 text-base hover:bg-very-light-blue">Case Studies</a>
            <a href="blogs.php" class="block px-4 py-2 text-base hover:bg-very-light-blue">Blogs</a>
          </div>
        </div>
        <a href="contact.php" class="hover:text-dark-blue transition">Contact Us</a>
      </div>
      <a href="contact.php" class="hero-cta hidden md:inline-block bg-dark-blue text-white font-semibold px-6 py-3 rounded-full text-base shadow-md transition">Get Started</a>
      <button id="hamburger" class="md:hidden flex flex-col gap-1.5 p-2 rounded-lg focus:outline-none" onclick="toggleMenu()" aria-label="Toggle menu">
        <span class="ham-line"></span><span class="ham-line"></span><span class="ham-line"></span>
      </button>
    </div>
    <div id="mobile-menu">
      <div style="background:white;border-top:1px solid #e2e8f0;padding:8px 16px 16px;">
        <a href="index.php" class="block py-3 px-2 text-gray-700 font-semibold text-base border-b border-gray-100 hover:text-dark-blue transition">Home</a>
        <a href="aboutUs.php" class="block py-3 px-2 text-gray-700 font-semibold text-base border-b border-gray-100 hover:text-dark-blue transition">About Us</a>
        <div>
          <button onclick="toggleServices()" class="w-full flex items-center justify-between py-3 px-2 text-gray-700 font-semibold text-base border-b border-gray-100 focus:outline-none">
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
          <button onclick="toggleResearch()" class="w-full flex items-center justify-between py-3 px-2 text-dark-blue font-semibold text-base border-b border-gray-100 focus:outline-none">
            Resources
            <svg id="research-arrow" class="w-4 h-4 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
          </button>
          <div id="research-sub" style="max-height:0;overflow:hidden;transition:max-height 0.3s ease;background:#f8fafc;border-radius:8px;margin:0 4px;">
            <a href="resources.php#case-studies" class="block py-2 px-6 text-sm text-gray-600 hover:text-dark-blue transition">Case Studies</a>
            <a href="blogs.php" class="block py-2 px-6 text-sm text-gray-600 hover:text-dark-blue transition">Blogs</a>
          </div>
        </div>
        <a href="contact.php" class="block py-3 px-2 text-gray-700 font-semibold text-base border-b border-gray-100 hover:text-dark-blue transition">Contact Us</a>
        <div class="pt-4 px-2">
          <a href="contact.php" class="block text-center bg-dark-blue text-white font-semibold py-3 rounded-full text-base shadow-md hover:bg-blue-800 transition">Get Started</a>
        </div>
      </div>
    </div>
  </nav>
  <div class="h-20"></div>

  <!-- HERO -->
  <section class="svc-hero py-24 md:py-32">
    <div class="hero-grid"></div>
    <div style="position:absolute;width:500px;height:500px;background:radial-gradient(circle,rgba(29,78,216,0.4),transparent 70%);top:-150px;right:-100px;filter:blur(80px);border-radius:50%;pointer-events:none;"></div>
    <div style="position:absolute;width:350px;height:350px;background:radial-gradient(circle,rgba(67,56,202,0.3),transparent 70%);bottom:-100px;left:-80px;filter:blur(70px);border-radius:50%;pointer-events:none;"></div>
    <div class="container mx-auto px-6 max-w-5xl text-center relative z-10">
      <div class="animate__animated animate__fadeInDown" style="display:flex;justify-content:center;margin-bottom:20px;">
        <span style="display:inline-flex;align-items:center;gap:8px;background:rgba(255,255,255,0.08);border:1px solid rgba(255,255,255,0.2);border-radius:999px;padding:6px 18px;font-size:0.78rem;font-weight:600;letter-spacing:0.08em;text-transform:uppercase;color:#bfdbfe;">
          Research &amp; Insights · Real-World Impact
        </span>
      </div>
      <h1 class="animate__animated animate__fadeInDown text-4xl md:text-6xl font-extrabold text-white mb-6 leading-tight" style="animation-delay:0.2s;">
        Proven Case Studies &amp;<br/>
        <span style="color:#93c5fd;">Industry Research</span>
      </h1>
      <p class="animate__animated animate__fadeInUp text-lg md:text-xl text-slate-300 max-w-3xl mx-auto leading-relaxed mb-10" style="animation-delay:0.4s;">
        Explore how Workgen Solutions delivers measurable operational outcomes across back-office management, QA/QC auditing, and enterprise AI data annotation.
      </p>
      <div class="animate__animated animate__fadeInUp flex flex-wrap justify-center gap-4" style="animation-delay:0.6s;">
        <a href="#case-studies" class="tab-btn active"><i class="fa-solid fa-folder-open text-xs"></i> Case Studies</a>
        <a href="blogs.php" class="tab-btn"><i class="fa-solid fa-newspaper text-xs"></i> Explore Blogs</a>
      </div>
    </div>
  </section>

  <!-- CASE STUDIES SECTION -->
  <section id="case-studies" class="py-20 bg-white">
    <div class="container mx-auto px-6 max-w-6xl">
      <div class="text-center mb-14" data-aos="fade-up">
        <span class="section-tag">Our Work</span>
        <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 mt-2 mb-4">Case Studies</h2>
        <p class="text-gray-500 text-lg max-w-2xl mx-auto">Real results for real clients. Detailed project outcomes you can learn from.</p>
      </div>

      <!-- Back Office -->
      <div class="mb-14" data-aos="fade-up">
        <div class="flex items-center gap-3 mb-7">
          <div style="width:36px;height:36px;border-radius:10px;background:#eff6ff;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
            <i class="fa-solid fa-briefcase" style="color:#1e40af;font-size:0.9rem;"></i>
          </div>
          <span class="text-sm font-bold text-dark-blue uppercase" style="letter-spacing:0.07em;">Back Office Transformation</span>
          <div style="flex:1;height:1px;background:#dbeafe;"></div>
        </div>
        <div class="grid md:grid-cols-2 gap-8">
          <div class="svc-detail-card" data-aos="fade-up" data-aos-delay="0">
            <div class="svc-detail-header">
              <div class="svc-icon-lg"><i class="fa-solid fa-calendar-days text-2xl" style="color:#1e40af;"></i></div>
              <h3 class="text-lg font-bold text-gray-900 mb-2">Luxury Resale Marketplace &#8211; Shift Management &amp; Partner Scheduling</h3>
              <p class="text-gray-500 text-sm leading-relaxed">Precision-driven workforce scheduling for the client's luxury resale operations &#8212; near-zero scheduling errors across multi-time-zone partner categories.</p>
            </div>
            <div class="svc-detail-body">
              <div class="flex gap-4 mb-5">
                <div class="text-center"><div class="text-xl font-bold" style="color:#1e40af;">~35</div><div class="text-gray-400 text-xs">Shifts/Partner</div></div>
                <div class="text-center"><div class="text-xl font-bold" style="color:#1e40af;">&#8595;</div><div class="text-gray-400 text-xs">Sched. Errors</div></div>
              </div>
              <a href="trrShiftManagement.php" class="inline-flex items-center gap-2 text-dark-blue font-semibold text-sm hover:gap-3 transition-all">Read Case Study <i class="fa-solid fa-arrow-right text-xs"></i></a>
            </div>
          </div>
          <div class="svc-detail-card" data-aos="fade-up" data-aos-delay="100">
            <div class="svc-detail-header">
              <div class="svc-icon-lg"><i class="fa-solid fa-display text-2xl" style="color:#1e40af;"></i></div>
              <h3 class="text-lg font-bold text-gray-900 mb-2">Live Shift Monitoring &amp; Workforce Operations Control</h3>
              <p class="text-gray-500 text-sm leading-relaxed">Real-time centralized oversight of distributed workforces &#8212; eliminating staffing gaps, reducing no-shows, and keeping multi-location operations running without disruption.</p>
            </div>
            <div class="svc-detail-body">
              <div class="flex gap-4 mb-5">
                <div class="text-center"><div class="text-xl font-bold" style="color:#1e40af;">Real-Time</div><div class="text-gray-400 text-xs">Visibility</div></div>
                <div class="text-center"><div class="text-xl font-bold" style="color:#1e40af;">&#8593; Fulfillment</div><div class="text-gray-400 text-xs">Shift Coverage</div></div>
              </div>
              <a href="liveShiftMonitoring.php" class="inline-flex items-center gap-2 text-dark-blue font-semibold text-sm hover:gap-3 transition-all">Read Case Study <i class="fa-solid fa-arrow-right text-xs"></i></a>
            </div>
          </div>
          <div class="svc-detail-card" data-aos="fade-up" data-aos-delay="200">
            <div class="svc-detail-header">
              <div class="svc-icon-lg"><i class="fa-solid fa-list-check text-2xl" style="color:#1e40af;"></i></div>
              <h3 class="text-lg font-bold text-gray-900 mb-2">Global Convenience Store Chain &#8211; Shift Assignment &amp; Workforce Operations Management</h3>
              <p class="text-gray-500 text-sm leading-relaxed">End-to-end backend shift assignment for one of the world's largest convenience store chains &#8212; accurate scheduling, conflict resolution, and compliance validation at high volume.</p>
            </div>
            <div class="svc-detail-body">
              <div class="flex gap-4 mb-5">
                <div class="text-center"><div class="text-xl font-bold" style="color:#1e40af;">Multi</div><div class="text-gray-400 text-xs">Location</div></div>
                <div class="text-center"><div class="text-xl font-bold" style="color:#1e40af;">&#8593; Accuracy</div><div class="text-gray-400 text-xs">Assignments</div></div>
              </div>
              <a href="shiftAssignment.php" class="inline-flex items-center gap-2 text-dark-blue font-semibold text-sm hover:gap-3 transition-all">Read Case Study <i class="fa-solid fa-arrow-right text-xs"></i></a>
            </div>
          </div>
          <div class="svc-detail-card" data-aos="fade-up" data-aos-delay="300">
            <div class="svc-detail-header">
              <div class="svc-icon-lg"><i class="fa-solid fa-satellite-dish text-2xl" style="color:#1e40af;"></i></div>
              <h3 class="text-lg font-bold text-gray-900 mb-2">Global Convenience Store Chain &#8211; Real-Time Shift Monitoring &amp; Escalation Support</h3>
              <p class="text-gray-500 text-sm leading-relaxed">Live surveillance of active shifts across the client&#8217;s network &#8212; instant no-show detection, structured three-tier escalation, and complete shift-level audit reporting.</p>
            </div>
            <div class="svc-detail-body">
              <div class="flex gap-4 mb-5">
                <div class="text-center"><div class="text-xl font-bold" style="color:#1e40af;">Live</div><div class="text-gray-400 text-xs">Monitoring</div></div>
                <div class="text-center"><div class="text-xl font-bold" style="color:#1e40af;">SLA</div><div class="text-gray-400 text-xs">Escalation</div></div>
              </div>
              <a href="shiftMonitoring.php" class="inline-flex items-center gap-2 text-dark-blue font-semibold text-sm hover:gap-3 transition-all">Read Case Study <i class="fa-solid fa-arrow-right text-xs"></i></a>
            </div>
          </div>
          <div class="svc-detail-card" data-aos="fade-up" data-aos-delay="400">
            <div class="svc-detail-header">
              <div class="svc-icon-lg"><i class="fa-solid fa-concierge-bell text-2xl" style="color:#1e40af;"></i></div>
              <h3 class="text-lg font-bold text-gray-900 mb-2">Golf Entertainment Brand &#8211; Hospitality Backend Support &amp; Reservation Operations</h3>
              <p class="text-gray-500 text-sm leading-relaxed">End-to-end backend support for the client&#8217;s high-volume hospitality operations &#8212; reservations, event management, billing, guest support and escalation handling via SevenRooms.</p>
            </div>
            <div class="svc-detail-body">
              <div class="flex gap-4 mb-5">
                <div class="text-center"><div class="text-xl font-bold" style="color:#1e40af;">5</div><div class="text-gray-400 text-xs">Core Functions</div></div>
                <div class="text-center"><div class="text-xl font-bold" style="color:#1e40af;">&#8593; Guest</div><div class="text-gray-400 text-xs">Satisfaction</div></div>
              </div>
              <a href="hospitalityBackend.php" class="inline-flex items-center gap-2 text-dark-blue font-semibold text-sm hover:gap-3 transition-all">Read Case Study <i class="fa-solid fa-arrow-right text-xs"></i></a>
            </div>
          </div>
        </div>
      </div>

      <!-- QA/QC -->
      <div class="mb-14" data-aos="fade-up">
        <div class="flex items-center gap-3 mb-7">
          <div style="width:36px;height:36px;border-radius:10px;background:#eff6ff;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
            <i class="fa-solid fa-circle-check" style="color:#1e40af;font-size:0.9rem;"></i>
          </div>
          <span class="text-sm font-bold text-dark-blue uppercase" style="letter-spacing:0.07em;">QA/QC Monitoring &#8212; Precision-Driven Excellence</span>
          <div style="flex:1;height:1px;background:#dbeafe;"></div>
        </div>
        <div class="grid md:grid-cols-2 gap-8">
          <div class="svc-detail-card" data-aos="fade-up" data-aos-delay="0">
            <div class="svc-detail-header">
              <div class="svc-icon-lg"><i class="fa-solid fa-phone-volume text-2xl" style="color:#1e40af;"></i></div>
              <h3 class="text-lg font-bold text-gray-900 mb-2">Golf Entertainment Brand &#8211; Call Auditing &amp; Quality Assurance</h3>
              <p class="text-gray-500 text-sm leading-relaxed">How Workgen delivered 300&#8211;400 weekly call audits, improving agent accuracy, reducing misinformation and elevating guest satisfaction.</p>
            </div>
            <div class="svc-detail-body">
              <div class="flex gap-4 mb-5">
                <div class="text-center"><div class="text-xl font-bold" style="color:#1e40af;">400+</div><div class="text-gray-400 text-xs">Audits/Week</div></div>
                <div class="text-center"><div class="text-xl font-bold" style="color:#1e40af;">&#8593; CSAT</div><div class="text-gray-400 text-xs">Guest Satisfaction</div></div>
              </div>
              <a href="callAuditingQA.php" class="inline-flex items-center gap-2 text-dark-blue font-semibold text-sm hover:gap-3 transition-all">Read Case Study <i class="fa-solid fa-arrow-right text-xs"></i></a>
            </div>
          </div>
          <div class="svc-detail-card" data-aos="fade-up" data-aos-delay="100">
            <div class="svc-detail-header">
              <div class="svc-icon-lg"><i class="fa-solid fa-magnifying-glass-chart text-2xl" style="color:#1e40af;"></i></div>
              <h3 class="text-lg font-bold text-gray-900 mb-2">Market Research &amp; Mystery Shopping Operations</h3>
              <p class="text-gray-500 text-sm leading-relaxed">Comprehensive end-to-end mystery shopping programs spanning in-store, online, chatbot and telephonic channels for global consumer brands.</p>
            </div>
            <div class="svc-detail-body">
              <div class="flex gap-4 mb-5">
                <div class="text-center"><div class="text-xl font-bold" style="color:#1e40af;">Omni</div><div class="text-gray-400 text-xs">Channel Coverage</div></div>
                <div class="text-center"><div class="text-xl font-bold" style="color:#1e40af;">&#8593; CSAT</div><div class="text-gray-400 text-xs">&amp; NPS Score</div></div>
              </div>
              <a href="marketResearch.php" class="inline-flex items-center gap-2 text-dark-blue font-semibold text-sm hover:gap-3 transition-all">Read Case Study <i class="fa-solid fa-arrow-right text-xs"></i></a>
            </div>
          </div>
          <div class="svc-detail-card" data-aos="fade-up" data-aos-delay="200">
            <div class="svc-detail-header">
              <div class="svc-icon-lg"><i class="fa-solid fa-store text-2xl" style="color:#1e40af;"></i></div>
              <h3 class="text-lg font-bold text-gray-900 mb-2">Multi-Brand Restaurant Group &#8211; Shift Review &amp; Image Audit</h3>
              <p class="text-gray-500 text-sm leading-relaxed">High-volume image validation across thousands of restaurant locations, ensuring brand compliance and fraud-free audit reporting.</p>
            </div>
            <div class="svc-detail-body">
              <div class="flex gap-4 mb-5">
                <div class="text-center"><div class="text-xl font-bold" style="color:#1e40af;">Multi</div><div class="text-gray-400 text-xs">Brand Coverage</div></div>
                <div class="text-center"><div class="text-xl font-bold" style="color:#1e40af;">&#8593; Compliance</div><div class="text-gray-400 text-xs">Audit Accuracy</div></div>
              </div>
              <a href="shiftReview.php" class="inline-flex items-center gap-2 text-dark-blue font-semibold text-sm hover:gap-3 transition-all">Read Case Study <i class="fa-solid fa-arrow-right text-xs"></i></a>
            </div>
          </div>
          <div class="svc-detail-card" data-aos="fade-up" data-aos-delay="300">
            <div class="svc-detail-header">
              <div class="svc-icon-lg"><i class="fa-solid fa-warehouse text-2xl" style="color:#1e40af;"></i></div>
              <h3 class="text-lg font-bold text-gray-900 mb-2">Membership Warehouse Retailer &#8211; QA Process for Inspection Reviews</h3>
              <p class="text-gray-500 text-sm leading-relaxed">Structured, multi-layered QA framework validating warehouse inspection data — rack steel, lighting, assets, and HVAC — ensuring safety compliance and audit-ready accuracy.</p>
            </div>
            <div class="svc-detail-body">
              <div class="flex gap-4 mb-5">
                <div class="text-center"><div class="text-xl font-bold" style="color:#1e40af;">4+</div><div class="text-gray-400 text-xs">Inspection Types</div></div>
                <div class="text-center"><div class="text-xl font-bold" style="color:#1e40af;">&#8593; Compliance</div><div class="text-gray-400 text-xs">Audit Accuracy</div></div>
              </div>
              <a href="inspectionQA.php" class="inline-flex items-center gap-2 text-dark-blue font-semibold text-sm hover:gap-3 transition-all">Read Case Study <i class="fa-solid fa-arrow-right text-xs"></i></a>
            </div>
          </div>
        </div>
      </div>

      <!-- Data Annotation -->
      <div class="mb-14" data-aos="fade-up">
        <div class="flex items-center gap-3 mb-7">
          <div style="width:36px;height:36px;border-radius:10px;background:#eff6ff;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
            <i class="fa-solid fa-tags" style="color:#1e40af;font-size:0.9rem;"></i>
          </div>
          <span class="text-sm font-bold text-dark-blue uppercase" style="letter-spacing:0.07em;">Data Annotation &mdash; Precision Labeling at Scale</span>
          <div style="flex:1;height:1px;background:#dbeafe;"></div>
        </div>
        <div class="grid md:grid-cols-2 gap-8">
          <div class="svc-detail-card" data-aos="fade-up" data-aos-delay="0">
            <div class="svc-detail-header">
              <div class="svc-icon-lg"><i class="fa-solid fa-store text-2xl" style="color:#1e40af;"></i></div>
              <h3 class="text-lg font-bold text-gray-900 mb-2">Global F&amp;B Corporation &#8211; Workforce Quality &amp; Merchandising Audit</h3>
              <p class="text-gray-500 text-sm leading-relaxed">Structured image-based annotation and compliance validation for the client&#8217;s Food &amp; Beverage merchandising operations &#8212; evaluating partner execution across backstock, aisles, coolers, and putaway.</p>
            </div>
            <div class="svc-detail-body">
              <div class="flex gap-4 mb-5">
                <div class="text-center"><div class="text-xl font-bold" style="color:#1e40af;">4</div><div class="text-gray-400 text-xs">Task Sections</div></div>
                <div class="text-center"><div class="text-xl font-bold" style="color:#1e40af;">&#8593; Fraud</div><div class="text-gray-400 text-xs">Detection Rate</div></div>
              </div>
              <a href="merchandisingAudit.php" class="inline-flex items-center gap-2 text-dark-blue font-semibold text-sm hover:gap-3 transition-all">Read Case Study <i class="fa-solid fa-arrow-right text-xs"></i></a>
            </div>
          </div>
          <div class="svc-detail-card" data-aos="fade-up" data-aos-delay="100">
            <div class="svc-detail-header">
              <div class="svc-icon-lg"><i class="fa-solid fa-vector-square text-2xl" style="color:#1e40af;"></i></div>
              <h3 class="text-lg font-bold text-gray-900 mb-2">LabelBox &#8211; Cooler Refill Detection &amp; Dataset Validation</h3>
              <p class="text-gray-500 text-sm leading-relaxed">Bounding box annotation and dataset validation on cooler refill images &#8212; classifying stock levels into Full, Partial, and Empty to power automated retail stock detection models.</p>
            </div>
            <div class="svc-detail-body">
              <div class="flex gap-4 mb-5">
                <div class="text-center"><div class="text-xl font-bold" style="color:#1e40af;">3</div><div class="text-gray-400 text-xs">Classifications</div></div>
                <div class="text-center"><div class="text-xl font-bold" style="color:#1e40af;">&#8593; Model</div><div class="text-gray-400 text-xs">Accuracy</div></div>
              </div>
              <a href="labelboxDataAnnotation.php" class="inline-flex items-center gap-2 text-dark-blue font-semibold text-sm hover:gap-3 transition-all">Read Case Study <i class="fa-solid fa-arrow-right text-xs"></i></a>
            </div>
          </div>
        </div>
      </div>

      <!-- Customer Support -->
      <div class="mb-4" data-aos="fade-up">
        <div class="flex items-center gap-3 mb-7">
          <div style="width:36px;height:36px;border-radius:10px;background:#eff6ff;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
            <i class="fa-solid fa-headset" style="color:#1e40af;font-size:0.9rem;"></i>
          </div>
          <span class="text-sm font-bold text-dark-blue uppercase" style="letter-spacing:0.07em;">Customer Support Scale-Up</span>
          <div style="flex:1;height:1px;background:#dbeafe;"></div>
        </div>
        <div class="grid md:grid-cols-3 gap-8">
          <div class="svc-detail-card" data-aos="fade-up" data-aos-delay="0">
            <div class="svc-detail-header">
              <div class="svc-icon-lg"><i class="fa-solid fa-ticket text-2xl" style="color:#1e40af;"></i></div>
              <h3 class="text-lg font-bold text-gray-900 mb-2">Zendesk Operations</h3>
              <p class="text-gray-500 text-sm leading-relaxed">Centralized support and escalation management powered by Zendesk — streamlining fragmented processes into a unified ticketing system with strict SLA adherence.</p>
            </div>
            <div class="svc-detail-body">
              <div class="flex gap-4">
                <div class="text-center"><div class="text-xl font-bold" style="color:#1e40af;">SLA</div><div class="text-gray-400 text-xs">Driven Ops</div></div>
                <div class="text-center"><div class="text-xl font-bold" style="color:#1e40af;">&#8595;</div><div class="text-gray-400 text-xs">Escalations</div></div>
              </div>
              <a href="zendeskOperations.php" class="inline-flex items-center gap-2 mt-5 text-dark-blue font-semibold text-sm hover:gap-3 transition-all">Read Case Study <i class="fa-solid fa-arrow-right text-xs"></i></a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- LATEST BLOGS PREVIEW SECTION -->
  <section class="py-20" style="background:#f8fafc;">
    <div class="container mx-auto px-6 max-w-6xl">
      <div class="flex flex-col md:flex-row md:items-end justify-between mb-14" data-aos="fade-up">
        <div>
          <span class="section-tag">Latest Perspectives</span>
          <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 mt-2">Latest Blogs &amp; Insights</h2>
        </div>
        <a href="blogs.php" class="inline-flex items-center gap-2 text-dark-blue font-bold text-base mt-4 md:mt-0 hover:gap-3 transition-all">
          View All Blogs <i class="fa-solid fa-arrow-right text-sm"></i>
        </a>
      </div>

      <?php
        if (!defined('WORKGEN_BLOGS_DATA_ONLY')) {
            define('WORKGEN_BLOGS_DATA_ONLY', true);
        }
        require __DIR__ . '/blogs.php';
        // Rule: Always display only the 3 latest blogs (already sorted newest-to-oldest in blogs.php)
        $latestThreeBlogs = array_slice($blogs, 0, 3, true);
      ?>
      <div class="grid md:grid-cols-3 gap-8">
        <?php $delay = 0; foreach ($latestThreeBlogs as $slug => $b): ?>
        <a href="blogs.php?post=<?php echo urlencode($slug); ?>" class="blog-card" data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>">
          <div style="overflow:hidden;">
            <img src="<?php echo htmlspecialchars($b['cover_image'], ENT_QUOTES, 'UTF-8'); ?>"
                 alt="<?php echo htmlspecialchars($b['title'], ENT_QUOTES, 'UTF-8'); ?>"
                 class="blog-card-img">
          </div>
          <div class="p-7 flex flex-col flex-1 justify-between">
            <div>
              <div class="flex items-center justify-between text-xs text-gray-400 mb-3">
                <span class="font-bold text-dark-blue bg-very-light-blue px-3 py-1 rounded-full border border-blue-200">
                  <?php echo htmlspecialchars($b['category'], ENT_QUOTES, 'UTF-8'); ?>
                </span>
              </div>
              <h3 class="text-xl font-bold text-gray-900 mb-3 leading-snug">
                <?php echo htmlspecialchars($b['title'], ENT_QUOTES, 'UTF-8'); ?>
              </h3>
              <p class="text-gray-500 text-sm leading-relaxed mb-5">
                <?php echo htmlspecialchars($b['excerpt'], ENT_QUOTES, 'UTF-8'); ?>
              </p>
            </div>
            <span class="inline-flex items-center gap-2 text-dark-blue font-bold text-sm">Read Full Article <i class="fa-solid fa-arrow-right text-xs"></i></span>
          </div>
        </a>
        <?php $delay += 100; endforeach; ?>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="text-center py-20" style="background:#60a5fa;">
    <div class="container mx-auto px-6 max-w-4xl" data-aos="fade-up">
      <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-5">Ready to Scale Your Operations?</h2>
      <p class="text-xl mb-10 max-w-3xl mx-auto" style="color:rgba(255,255,255,0.92);">Tell us about your project and we'll put together a tailored solution within 24 hours.</p>
      <a href="contact.php" class="hero-cta inline-block bg-white font-bold px-14 py-5 rounded-full text-xl shadow-xl" style="color:#1e40af;">Request a Free Quote</a>
    </div>
  </section>

  <!-- FOOTER -->
  <footer style="background:#163498;">
    <div class="container mx-auto px-6 lg:px-12 py-14 max-w-7xl">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">
        <div class="lg:col-span-1">
          <img src="workgenLogo.jpg" alt="Workgen Solutions" style="height:52px;width:auto;object-fit:contain;margin-bottom:16px;background:white;padding:4px 8px;border-radius:8px;">
          <p style="color:rgba(255,255,255,0.8);font-size:1rem;line-height:1.75;">Workgen, founded in 2017, came into existence with a vision of providing high-quality business process outsourcing and back-office support services across the globe.</p>
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
            <li><a href="resources.php" style="color:rgba(255,255,255,0.8);font-size:1rem;text-decoration:none;" onmouseover="this.style.color='white'" onmouseout="this.style.color='rgba(255,255,255,0.8)'">Case Studies</a></li>
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
    AOS.init({ once:true, duration:800 });

    const hamburger=document.getElementById('hamburger'),mobileMenu=document.getElementById('mobile-menu');
    let menuOpen=false,servicesOpen=false,researchOpen=false;
    function toggleMenu(){menuOpen=!menuOpen;hamburger.classList.toggle('active',menuOpen);mobileMenu.classList.toggle('open',menuOpen);}
    function toggleServices(){servicesOpen=!servicesOpen;document.getElementById('services-sub').style.maxHeight=servicesOpen?'240px':'0px';document.getElementById('services-arrow').style.transform=servicesOpen?'rotate(180deg)':'rotate(0deg)';}
    function toggleResearch(){researchOpen=!researchOpen;document.getElementById('research-sub').style.maxHeight=researchOpen?'120px':'0px';document.getElementById('research-arrow').style.transform=researchOpen?'rotate(180deg)':'rotate(0deg)';}
    document.addEventListener('click',function(e){if(menuOpen&&!mobileMenu.contains(e.target)&&!hamburger.contains(e.target)){menuOpen=false;hamburger.classList.remove('active');mobileMenu.classList.remove('open');}});
    window.addEventListener('resize',function(){if(window.innerWidth>=768&&menuOpen){menuOpen=false;hamburger.classList.remove('active');mobileMenu.classList.remove('open');}});
  </script>
</body>
</html>
