<?php
$pageTitle = 'About Us – aNepaliSewa';
$pageDesc  = 'Learn about aNepaliSewa, a free online tool platform built for Nepali students, businesses, and everyday users in Nepal.';
include 'includes/header.php';
?>

<div class="page-hero">
  <div class="container">
    <h1 class="page-hero-title">About Us</h1>
    <p class="page-hero-subtitle">Built with love for Nepal 🇳🇵</p>
  </div>
</div>

<section class="content-section">
  <div class="container">
    <div class="row g-4 align-items-center mb-5">
      <div class="col-lg-6 reveal">
        <span class="section-badge">Our Story</span>
        <h2 class="section-title mt-2">Why We Built <span>aNepaliSewa</span></h2>
        <div class="divider mb-3" style="margin:0;"></div>
        <p class="text-muted mb-3">aNepaliSewa was born out of a simple observation: Nepali students and small businesses spend too much time searching for basic tools scattered across the internet – many of which don't even understand Nepal's systems (like BS dates, NEB grades, or VAT rules).</p>
        <p class="text-muted mb-3">We decided to build a one-stop platform with all the essential tools that Nepali people actually need – designed from the ground up for Nepal's context, completely free, and accessible on any device.</p>
        <p class="text-muted">From converting Bikram Sambat dates to generating professional VAT invoices, our goal is to make everyday digital tasks easier for every Nepali.</p>
      </div>
      <div class="col-lg-6 reveal anim-delay-2">
        <div class="row g-3">
          <div class="col-6">
            <div class="feature-card text-center">
              <div style="font-size:2.5rem;font-weight:800;color:var(--primary);">7+</div>
              <div class="text-muted" style="font-size:.85rem;">Free Tools</div>
            </div>
          </div>
          <div class="col-6">
            <div class="feature-card text-center">
              <div style="font-size:2.5rem;font-weight:800;color:var(--success);">100%</div>
              <div class="text-muted" style="font-size:.85rem;">Free Forever</div>
            </div>
          </div>
          <div class="col-6">
            <div class="feature-card text-center">
              <div style="font-size:2.5rem;font-weight:800;color:var(--warning);">0</div>
              <div class="text-muted" style="font-size:.85rem;">Data Collected</div>
            </div>
          </div>
          <div class="col-6">
            <div class="feature-card text-center">
              <div style="font-size:2.5rem;font-weight:800;color:var(--accent);">🇳🇵</div>
              <div class="text-muted" style="font-size:.85rem;">Made for Nepal</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Mission -->
    <div class="row g-4 mb-5">
      <div class="col-12">
        <div class="card-content">
          <h3 class="fw-bold mb-4"><i class="bi bi-bullseye text-primary me-2"></i>Our Mission</h3>
          <div class="row g-4">
            <div class="col-md-4 reveal anim-delay-1">
              <div class="feature-card">
                <div class="feature-icon"><i class="bi bi-people-fill"></i></div>
                <h6 class="fw-bold">For Students</h6>
                <p class="text-muted" style="font-size:.84rem;">Provide tools that genuinely help Nepali students with their academic needs – GPA calculators, cover pages, lab reports.</p>
              </div>
            </div>
            <div class="col-md-4 reveal anim-delay-2">
              <div class="feature-card">
                <div class="feature-icon"><i class="bi bi-briefcase-fill"></i></div>
                <h6 class="fw-bold">For Businesses</h6>
                <p class="text-muted" style="font-size:.84rem;">Help small Nepali businesses with professional billing tools, including VAT calculations and PDF invoices.</p>
              </div>
            </div>
            <div class="col-md-4 reveal anim-delay-3">
              <div class="feature-card">
                <div class="feature-icon"><i class="bi bi-house-fill"></i></div>
                <h6 class="fw-bold">For Everyone</h6>
                <p class="text-muted" style="font-size:.84rem;">Date converters, Unicode tools, and more – designed for everyday Nepali users who need practical digital solutions.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Team -->
    <div class="text-center mb-4 reveal">
      <span class="section-badge">Our Team</span>
      <h2 class="section-title mt-2">The People <span>Behind aNepaliSewa</span></h2>
      <div class="divider"></div>
    </div>
    <div class="row g-4 justify-content-center">
      <div class="col-md-4 reveal anim-delay-1">
        <div class="team-card">
          <div class="team-avatar"><i class="bi bi-code-slash"></i></div>
          <h6 class="fw-bold mt-2">Development Team</h6>
          <p class="text-muted" style="font-size:.83rem;">Passionate developers building tools that solve real problems for Nepali users.</p>
        </div>
      </div>
      <div class="col-md-4 reveal anim-delay-2">
        <div class="team-card">
          <div class="team-avatar"><i class="bi bi-palette-fill"></i></div>
          <h6 class="fw-bold mt-2">Design Team</h6>
          <p class="text-muted" style="font-size:.83rem;">Creating beautiful, accessible, and intuitive interfaces for Nepali users.</p>
        </div>
      </div>
      <div class="col-md-4 reveal anim-delay-3">
        <div class="team-card">
          <div class="team-avatar"><i class="bi bi-people-fill"></i></div>
          <h6 class="fw-bold mt-2">Community</h6>
          <p class="text-muted" style="font-size:.83rem;">Guided by feedback from students, teachers, and businesses across Nepal.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
