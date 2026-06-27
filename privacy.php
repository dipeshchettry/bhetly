<?php
$pageTitle = 'Privacy Policy – aNepaliSewa';
$pageDesc  = 'Read the privacy policy of aNepaliSewa. We are committed to protecting your privacy and not collecting personal data.';
include 'includes/header.php';
?>
<div class="page-hero"><div class="container"><h1 class="page-hero-title">Privacy Policy</h1><p class="page-hero-subtitle">Last Updated: <?php echo date('F Y'); ?></p></div></div>
<section class="content-section"><div class="container"><div class="row justify-content-center"><div class="col-lg-9"><div class="card-content">
  <p class="text-muted mb-4">At <strong>aNepaliSewa</strong>, we are committed to protecting your privacy. This Privacy Policy explains how we handle information when you use our website and tools.</p>
  <h4 class="fw-bold mt-4"><i class="bi bi-database-check text-primary me-2"></i>1. Information We Collect</h4>
  <p class="text-muted">We <strong>do not collect</strong> any personally identifiable information (PII). All tools on aNepaliSewa run entirely in your browser. Data you enter (such as names, dates, or financial figures) is <strong>never sent to our servers</strong>.</p>
  <p class="text-muted">We may collect anonymous, aggregated usage statistics (such as page views and tool usage counts) through analytics to improve our services. This data does not identify you personally.</p>
  <h4 class="fw-bold mt-4"><i class="bi bi-cookie text-primary me-2"></i>2. Cookies</h4>
  <p class="text-muted">We use minimal, functional cookies to:</p>
  <ul class="text-muted"><li>Remember your dark/light mode preference</li><li>Track recently used tools (stored in your browser's localStorage, not on our servers)</li></ul>
  <p class="text-muted">These cookies are essential for the functionality of our site. You can disable cookies in your browser settings, though some features may not work correctly.</p>
  <h4 class="fw-bold mt-4"><i class="bi bi-shield-lock text-primary me-2"></i>3. Data Security</h4>
  <p class="text-muted">Since we do not collect personal data, there is minimal risk of data breaches. All computations happen client-side in your browser. We do not transmit your tool inputs to any external servers.</p>
  <h4 class="fw-bold mt-4"><i class="bi bi-link-45deg text-primary me-2"></i>4. Third-Party Services</h4>
  <p class="text-muted">We use the following third-party libraries and CDNs:</p>
  <ul class="text-muted"><li><strong>Bootstrap 5</strong> – UI framework (CDN)</li><li><strong>Google Fonts</strong> – Font loading (Poppins)</li><li><strong>jsPDF / html2canvas</strong> – PDF generation (client-side only)</li><li><strong>EmailJS</strong> – Contact form email delivery (your message details are sent when you submit the contact form)</li></ul>
  <p class="text-muted">These services have their own privacy policies. Please review them separately.</p>
  <h4 class="fw-bold mt-4"><i class="bi bi-person-check text-primary me-2"></i>5. Your Rights</h4>
  <p class="text-muted">Since we do not collect personal data, there is no data of yours stored by us. If you have any concerns, please contact us at <a href="mailto:reachme@dipeshbham.com.np">reachme@dipeshbham.com.np</a>.</p>
  <h4 class="fw-bold mt-4"><i class="bi bi-arrow-repeat text-primary me-2"></i>6. Changes to This Policy</h4>
  <p class="text-muted">We may update this Privacy Policy periodically. We will notify users of significant changes by updating the "Last Updated" date at the top of this page.</p>
  <h4 class="fw-bold mt-4"><i class="bi bi-envelope text-primary me-2"></i>7. Contact</h4>
  <p class="text-muted">If you have any questions about this Privacy Policy, please <a href="<?php echo $rootPath; ?>contact">contact us</a> or email us at <a href="mailto:reachme@dipeshbham.com.np">reachme@dipeshbham.com.np</a>.</p>
</div></div></div></div></section>
<?php include 'includes/footer.php'; ?>
