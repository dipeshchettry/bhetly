<?php
$pageTitle    = 'aNepaliSewa – Free Online Tools';
$pageDesc     = 'All essential Nepali tools in one place. Nepali date converter, GPA calculator, Unicode tool, bill generator, resume maker and more – free for Nepali students and businesses.';
$pageKeywords = 'Nepali tools online, BS AD date converter, NEB GPA calculator, Nepali unicode, bill generator Nepal, resume maker Nepal, assignment cover page TU PU';
$extraHead    = '<link rel="canonical" href="https://sewa.dipeshbham.com.np">';
include 'includes/header.php';
?>
<section class="hero-section" id="home">
  <div class="hero-slider">
    <div class="hero-slide active" style="background-image: url('https://images.unsplash.com/photo-1605640840605-14ac1855827b?w=1600&q=80');"></div>
    <div class="hero-slide" style="background-image: url('https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?w=1600&q=80');"></div>
    <div class="hero-slide" style="background-image: url('https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=1600&q=80');"></div>
    <div class="hero-slide" style="background-image: url('https://images.unsplash.com/photo-1488190211105-8b0e65b80b4e?w=1600&q=80');"></div>
  </div>
  <div class="hero-overlay"></div>

  <div class="container hero-content">
    <div class="animate-fadeup">
      <div class="hero-badge">
        <i class="bi bi-flag-fill"></i>
        Made for Nepal 🇳🇵
      </div>
    </div>

    <h1 class="hero-title animate-fadeup anim-delay-1">
      All Essential <span>Tools</span><br>In One Place
    </h1>

    <p class="hero-subtitle animate-fadeup anim-delay-2">
      Free tools for students, businesses, and everyday needs in Nepal.
      Fast, simple, and mobile-friendly.
    </p>

    <div class="animate-fadeup anim-delay-3">
      <a href="#tools" class="hero-cta">
        <i class="bi bi-grid-3x3-gap-fill"></i>
        Explore Tools
      </a>
    </div>

    <div class="hero-stats animate-fadeup anim-delay-4">
      <div class="hero-stat">
        <span class="hero-stat-number">12+</span>
        <span class="hero-stat-label">Free Tools</span>
      </div>
      <div class="hero-stat">
        <span class="hero-stat-number">100%</span>
        <span class="hero-stat-label">Free Forever</span>
      </div>
      <div class="hero-stat">
        <span class="hero-stat-number">NEB</span>
        <span class="hero-stat-label">Grade System</span>
      </div>
      <div class="hero-stat">
        <span class="hero-stat-number">PDF</span>
        <span class="hero-stat-label">Download Ready</span>
      </div>
    </div>
  </div>

  <!-- Slider Dots -->
  <div class="slider-dots">
    <div class="slider-dot active"></div>
    <div class="slider-dot"></div>
    <div class="slider-dot"></div>
    <div class="slider-dot"></div>
  </div>
</section>

<!-- ═══════════════ TOOLS SECTION ═══════════════ -->
<section class="tools-section" id="tools">
  <div class="container">
    <div class="section-header reveal">
      <span class="section-badge"><i class="bi bi-tools me-1"></i>Our Tools</span>
      <h2 class="section-title">Everything You Need,<br><span>All in One Place</span></h2>
      <p class="section-subtitle">Designed specifically for Nepali students, businesses, and everyday users.</p>
      <div class="divider"></div>
    </div>

    <div class="row g-4">

      <!-- Date Converter -->
      <div class="col-xl-3 col-lg-4 col-md-6 reveal anim-delay-1">
        <div class="tool-card">
          <div class="tool-icon-wrap icon-purple">
            <i class="bi bi-calendar3"></i>
          </div>
          <div class="tool-card-title">Nepali Date Converter</div>
          <p class="tool-card-desc">Convert BS ↔ AD dates instantly. Includes age calculator and horoscope date finder in Nepali format.</p>
          <a href="<?php echo $rootPath; ?>tools/date-converter" class="tool-card-btn btn-purple" onclick="trackToolUsage('Date Converter','<?php echo $rootPath; ?>tools/date-converter')">
            Use Tool <i class="bi bi-arrow-right"></i>
          </a>
        </div>
      </div>

      <!-- GPA Calculator -->
      <div class="col-xl-3 col-lg-4 col-md-6 reveal anim-delay-2">
        <div class="tool-card">
          <div class="tool-icon-wrap icon-green">
            <i class="bi bi-calculator"></i>
          </div>
          <div class="tool-card-title">SEE / +2 GPA Calculator</div>
          <p class="tool-card-desc">Calculate SEE and +2 GPA using NEB grading system. Convert grades to percentage and download PDF.</p>
          <a href="<?php echo $rootPath; ?>tools/gpa-calculator" class="tool-card-btn btn-green" onclick="trackToolUsage('GPA Calculator','<?php echo $rootPath; ?>tools/gpa-calculator')">
            Use Tool <i class="bi bi-arrow-right"></i>
          </a>
        </div>
      </div>

      <!-- Unicode Tool -->
      <div class="col-xl-3 col-lg-4 col-md-6 reveal anim-delay-3">
        <div class="tool-card">
          <div class="tool-icon-wrap icon-yellow">
            <i class="bi bi-translate"></i>
          </div>
          <div class="tool-card-title">Nepali Unicode Tool</div>
          <p class="tool-card-desc">Convert Preeti ↔ Unicode, type in Romanized Nepali. Copy instantly with word and character count.</p>
          <a href="<?php echo $rootPath; ?>tools/unicode-tool" class="tool-card-btn btn-yellow" onclick="trackToolUsage('Unicode Tool','<?php echo $rootPath; ?>tools/unicode-tool')">
            Use Tool <i class="bi bi-arrow-right"></i>
          </a>
        </div>
      </div>

      <!-- Bill Generator -->
      <div class="col-xl-3 col-lg-4 col-md-6 reveal anim-delay-4">
        <div class="tool-card">
          <div class="tool-icon-wrap icon-pink">
            <i class="bi bi-receipt"></i>
          </div>
          <div class="tool-card-title">Online Bill Generator</div>
          <p class="tool-card-desc">Create professional VAT invoices with PAN number, auto 13% VAT calculation and PDF download.</p>
          <a href="<?php echo $rootPath; ?>tools/bill-generator" class="tool-card-btn btn-pink" onclick="trackToolUsage('Bill Generator','<?php echo $rootPath; ?>tools/bill-generator')">
            Use Tool <i class="bi bi-arrow-right"></i>
          </a>
        </div>
      </div>

      <!-- Assignment Cover -->
      <div class="col-xl-3 col-lg-4 col-md-6 reveal anim-delay-1">
        <div class="tool-card">
          <div class="tool-icon-wrap icon-red">
            <i class="bi bi-file-earmark-text"></i>
          </div>
          <div class="tool-card-title">Assignment Cover Page</div>
          <p class="tool-card-desc">Generate printable assignment cover pages for TU, PU and other Nepali universities. Download PDF.</p>
          <a href="<?php echo $rootPath; ?>tools/assignment-cover" class="tool-card-btn btn-red" onclick="trackToolUsage('Assignment Cover','<?php echo $rootPath; ?>tools/assignment-cover')">
            Use Tool <i class="bi bi-arrow-right"></i>
          </a>
        </div>
      </div>

      <!-- Lab Report -->
      <div class="col-xl-3 col-lg-4 col-md-6 reveal anim-delay-2">
        <div class="tool-card">
          <div class="tool-icon-wrap icon-blue">
            <i class="bi bi-journal-medical"></i>
          </div>
          <div class="tool-card-title">Lab Report Formatter</div>
          <p class="tool-card-desc">Auto-format your lab reports with structured sections: aim, theory, procedure, result. Download PDF.</p>
          <a href="<?php echo $rootPath; ?>tools/lab-report" class="tool-card-btn btn-blue" onclick="trackToolUsage('Lab Report','<?php echo $rootPath; ?>tools/lab-report')">
            Use Tool <i class="bi bi-arrow-right"></i>
          </a>
        </div>
      </div>

      <!-- Resume Generator -->
      <div class="col-xl-3 col-lg-4 col-md-6 reveal anim-delay-3">
        <div class="tool-card">
          <div class="tool-icon-wrap icon-indigo">
            <i class="bi bi-person-badge"></i>
          </div>
          <div class="tool-card-title">Resume / CV Generator</div>
          <p class="tool-card-desc">Build professional CVs with multiple templates (Student, Fresher, IT). Upload photo, download PDF.</p>
          <a href="<?php echo $rootPath; ?>tools/resume-generator" class="tool-card-btn btn-indigo" onclick="trackToolUsage('Resume Generator','<?php echo $rootPath; ?>tools/resume-generator')">
            Use Tool <i class="bi bi-arrow-right"></i>
          </a>
        </div>
      </div>

      <!-- Image to PDF -->
      <div class="col-xl-3 col-lg-4 col-md-6 reveal anim-delay-4">
        <div class="tool-card">
          <div class="tool-icon-wrap" style="background:rgba(139,92,246,.12);color:#8B5CF6;">
            <i class="bi bi-images"></i>
          </div>
          <div class="tool-card-title">Image to PDF</div>
          <p class="tool-card-desc">Convert JPG, PNG, WEBP images to PDF. Drag & drop, reorder pages, set margins, download instantly.</p>
          <a href="<?php echo $rootPath; ?>tools/image-to-pdf" class="tool-card-btn" style="background:rgba(139,92,246,.1);color:#8B5CF6;" onclick="trackToolUsage('Image to PDF','<?php echo $rootPath; ?>tools/image-to-pdf')">
            Use Tool <i class="bi bi-arrow-right"></i>
          </a>
        </div>
      </div>

      <!-- PDF Converter -->
      <div class="col-xl-3 col-lg-4 col-md-6 reveal anim-delay-1">
        <div class="tool-card">
          <div class="tool-icon-wrap" style="background:rgba(6,182,212,.12);color:#06B6D4;">
            <i class="bi bi-file-earmark-arrow-up"></i>
          </div>
          <div class="tool-card-title">PDF Converter</div>
          <p class="tool-card-desc">Extract text from PDF page by page. Download as .txt or .doc. Links to trusted DOCX/PPTX converters.</p>
          <a href="<?php echo $rootPath; ?>tools/pdf-converter" class="tool-card-btn" style="background:rgba(6,182,212,.1);color:#06B6D4;" onclick="trackToolUsage('PDF Converter','<?php echo $rootPath; ?>tools/pdf-converter')">
            Use Tool <i class="bi bi-arrow-right"></i>
          </a>
        </div>
      </div>

      <!-- File Compressor -->
      <div class="col-xl-3 col-lg-4 col-md-6 reveal anim-delay-2">
        <div class="tool-card">
          <div class="tool-icon-wrap" style="background:rgba(16,185,129,.12);color:#10B981;">
            <i class="bi bi-file-zip"></i>
          </div>
          <div class="tool-card-title">Image Compressor</div>
          <p class="tool-card-desc">Compress JPG, PNG, WEBP images online. Adjust quality, resize dimensions, bulk download – zero upload.</p>
          <a href="<?php echo $rootPath; ?>tools/file-compressor" class="tool-card-btn btn-green" onclick="trackToolUsage('Image Compressor','<?php echo $rootPath; ?>tools/file-compressor')">
            Use Tool <i class="bi bi-arrow-right"></i>
          </a>
        </div>
      </div>

      <!-- QR Code Generator -->
      <div class="col-xl-3 col-lg-4 col-md-6 reveal anim-delay-3">
        <div class="tool-card">
          <div class="tool-icon-wrap icon-yellow">
            <i class="bi bi-qr-code"></i>
          </div>
          <div class="tool-card-title">QR Code Generator</div>
          <p class="tool-card-desc">Generate QR codes for URLs, WiFi, vCard, UPI payments, phone, SMS and more. Download PNG or SVG.</p>
          <a href="<?php echo $rootPath; ?>tools/qr-generator" class="tool-card-btn btn-yellow" onclick="trackToolUsage('QR Generator','<?php echo $rootPath; ?>tools/qr-generator')">
            Use Tool <i class="bi bi-arrow-right"></i>
          </a>
        </div>
      </div>

      <!-- PDF Editor -->
      <div class="col-xl-3 col-lg-4 col-md-6 reveal anim-delay-4">
        <div class="tool-card">
          <div class="tool-icon-wrap icon-red">
            <i class="bi bi-pencil-square"></i>
          </div>
          <div class="tool-card-title">PDF Editor</div>
          <p class="tool-card-desc">View PDFs and add text, highlight, draw, sticky notes, rectangles. Save annotated PDF – no upload needed.</p>
          <a href="<?php echo $rootPath; ?>tools/pdf-editor" class="tool-card-btn btn-red" onclick="trackToolUsage('PDF Editor','<?php echo $rootPath; ?>tools/pdf-editor')">
            Use Tool <i class="bi bi-arrow-right"></i>
          </a>
        </div>
      </div>

      <!-- Suggest -->
      <div class="col-xl-3 col-lg-4 col-md-6 reveal anim-delay-1">
        <div class="tool-card" style="border: 2px dashed var(--border); background: transparent; align-items: center; justify-content: center; text-align: center; min-height: 220px;">
          <div class="tool-icon-wrap icon-purple mx-auto">
            <i class="bi bi-plus-lg"></i>
          </div>
          <div class="tool-card-title">Suggest a Tool</div>
          <p class="tool-card-desc">Have an idea for a useful Nepali tool? Let us know and we'll build it!</p>
          <a href="<?php echo $rootPath; ?>/contact" class="tool-card-btn btn-purple">
            Suggest <i class="bi bi-arrow-right"></i>
          </a>
        </div>
      </div>

    </div><!-- /row -->
  </div>
</section>

<!-- ═══════════════ FEATURES SECTION ═══════════════ -->
<section class="py-5" style="background: var(--bg-2);">
  <div class="container">
    <div class="section-header reveal mb-4">
      <span class="section-badge"><i class="bi bi-star-fill me-1"></i>Why aNepaliSewa?</span>
      <h2 class="section-title">Built for <span>Nepali Users</span></h2>
      <div class="divider"></div>
    </div>
    <div class="row g-4">
      <div class="col-md-3 col-sm-6 reveal anim-delay-1">
        <div class="feature-card">
          <div class="feature-icon"><i class="bi bi-lightning-fill"></i></div>
          <h6 class="fw-700 mb-1">Fast & Free</h6>
          <p class="text-muted" style="font-size:.83rem">All tools are completely free with no registration required.</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 reveal anim-delay-2">
        <div class="feature-card">
          <div class="feature-icon"><i class="bi bi-phone-fill"></i></div>
          <h6 class="fw-700 mb-1">Mobile Friendly</h6>
          <p class="text-muted" style="font-size:.83rem">Works perfectly on any device – phone, tablet or desktop.</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 reveal anim-delay-3">
        <div class="feature-card">
          <div class="feature-icon"><i class="bi bi-file-earmark-pdf-fill"></i></div>
          <h6 class="fw-700 mb-1">PDF Downloads</h6>
          <p class="text-muted" style="font-size:.83rem">Download your results, invoices, and reports as PDF files.</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 reveal anim-delay-4">
        <div class="feature-card">
          <div class="feature-icon"><i class="bi bi-shield-check-fill"></i></div>
          <h6 class="fw-700 mb-1">Privacy First</h6>
          <p class="text-muted" style="font-size:.83rem">We don't store your data. Everything runs in your browser.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════ CTA SECTION ═══════════════ -->
<section class="py-5">
  <div class="container">
    <div class="reveal">
      <div style="background: var(--gradient-hero); border-radius: 24px; padding: 3.5rem 2rem; text-align: center; color: #fff; position: relative; overflow: hidden;">
        <div style="position:absolute;top:-30px;right:-30px;width:200px;height:200px;background:rgba(255,255,255,0.05);border-radius:50%;"></div>
        <div style="position:absolute;bottom:-50px;left:-40px;width:250px;height:250px;background:rgba(255,255,255,0.04);border-radius:50%;"></div>
        <h2 style="font-size:clamp(1.5rem,3vw,2.2rem);font-weight:800;margin-bottom:.75rem;position:relative;">
          Start Using Free Nepali Tools Today!
        </h2>
        <p style="opacity:.88;max-width:480px;margin:0 auto 1.75rem;font-size:.95rem;position:relative;">
          No account needed. No payment required. Just open and use.
        </p>
        <a href="#tools" style="position:relative;" class="hero-cta">
          <i class="bi bi-grid-3x3-gap-fill"></i> Browse All Tools
        </a>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
