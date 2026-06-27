<?php
$pageTitle = 'Contact Us – aNepaliSewa';
$pageDesc  = 'Get in touch with aNepaliSewa. Send us your questions, suggestions, or feedback about our free Nepali tools.';
include 'includes/header.php';
?>

<div class="page-hero">
  <div class="container">
    <h1 class="page-hero-title">Contact Us</h1>
    <p class="page-hero-subtitle">We'd love to hear from you!</p>
  </div>
</div>

<section class="content-section">
  <div class="container">
    <!-- Info Cards -->
    <div class="row g-4 mb-5">
      <div class="col-md-4 reveal anim-delay-1">
        <div class="contact-card">
          <div class="contact-icon mx-auto mb-2" style="background:rgba(108,60,226,.1);color:var(--primary);">
            <i class="bi bi-envelope-fill"></i>
          </div>
          <h6 class="fw-bold">Email Us</h6>
          <p class="text-muted" style="font-size:.83rem;">reachme@dipeshbham.com.np</p>
          <a href="mailto:reachme@dipeshbham.com.np" class="tool-card-btn btn-purple mx-auto" style="align-self:center;">
            Send Email
          </a>
        </div>
      </div>
      <div class="col-md-4 reveal anim-delay-2">
        <div class="contact-card">
          <div class="contact-icon mx-auto mb-2" style="background:rgba(37,211,102,.1);color:#25D366;">
            <i class="bi bi-whatsapp"></i>
          </div>
          <h6 class="fw-bold">WhatsApp</h6>
          <p class="text-muted" style="font-size:.83rem;">+977 9766459738</p>
          <a href="https://wa.me/9779766459738" target="_blank" class="tool-card-btn btn-green mx-auto" style="align-self:center;">
            Chat Now
          </a>
        </div>
      </div>
      <div class="col-md-4 reveal anim-delay-3">
        <div class="contact-card">
          <div class="contact-icon mx-auto mb-2" style="background:rgba(6,182,212,.1);color:var(--info);">
            <i class="bi bi-geo-alt-fill"></i>
          </div>
          <h6 class="fw-bold">Location</h6>
          <p class="text-muted" style="font-size:.83rem;">Kathmandu, Nepal 🇳🇵</p>
          <a href="https://maps.google.com/?q=Kathmandu,Nepal" target="_blank" class="tool-card-btn btn-blue mx-auto" style="align-self:center;">
            View Map
          </a>
        </div>
      </div>
    </div>

    <!-- Contact Form -->
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="card-content reveal">
          <h3 class="fw-bold mb-1"><i class="bi bi-chat-dots text-primary me-2"></i>Send Us a Message</h3>
          <p class="text-muted mb-4" style="font-size:.88rem;">Fill in the form below and we'll get back to you within 24 hours.</p>

          <!-- EmailJS Form -->
          <form id="contactForm" onsubmit="sendEmail(event)" action="https://api.web3forms.com/submit" method="POST">
          <input type="hidden" name="access_key" value="95e29dd0-7ac6-4148-a204-6d9229f0d467">
            <div class="row g-3">
              <div class="col-md-6">
                <label class="form-label">Full Name <span class="text-danger">*</span></label>
                <input type="text" id="cf_name" class="form-control" placeholder="Your Full Name" required />
              </div>
              <div class="col-md-6">
                <label class="form-label">Email Address <span class="text-danger">*</span></label>
                <input type="email" id="cf_email" class="form-control" placeholder="your@email.com" required />
              </div>
              <div class="col-md-6">
                <label class="form-label">Phone Number</label>
                <input type="tel" id="cf_phone" class="form-control" placeholder="+977 98XXXXXXXX" />
              </div>
              <div class="col-md-6">
                <label class="form-label">Subject <span class="text-danger">*</span></label>
                <select id="cf_subject" class="form-select" required>
                  <option value="">Select Subject</option>
                  <option value="Tool Suggestion">Tool Suggestion</option>
                  <option value="Bug Report">Bug Report</option>
                  <option value="General Inquiry">General Inquiry</option>
                  <option value="Partnership">Partnership</option>
                  <option value="Feedback">Feedback</option>
                  <option value="Other">Other</option>
                </select>
              </div>
              <div class="col-12">
                <label class="form-label">Message <span class="text-danger">*</span></label>
                <textarea id="cf_message" class="form-control" rows="5" placeholder="Write your message here..." required minlength="20"></textarea>
                <div class="form-text">Minimum 20 characters. Be as detailed as possible.</div>
              </div>
              <!-- Honeypot -->
              <input type="text" name="_gotcha" style="display:none" tabindex="-1" autocomplete="off" />

              <div class="col-12">
                <div id="formStatus" class="mb-3"></div>
                <button type="submit" class="btn-primary-custom" id="submitBtn">
                  <i class="bi bi-send-fill"></i> Send Message
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- FAQ -->
    <div class="row justify-content-center mt-5">
      <div class="col-lg-8 reveal">
        <h3 class="fw-bold mb-4 text-center"><i class="bi bi-question-circle text-primary me-2"></i>Frequently Asked Questions</h3>
        <div class="accordion" id="faqAccordion">
          <?php
          $faqs = [
            ['Are all tools on aNepaliSewa free?', 'Yes! All tools on aNepaliSewa are completely free to use. No registration, no payment, no limits.'],
            ['Do you store my data?', 'No. We do not store any personal data. All tools work locally in your browser. Your data stays private.'],
            ['Can I suggest a new tool?', 'Absolutely! We love suggestions. Use the contact form above and select "Tool Suggestion" as the subject.'],
            ['Why is the date converter limited to certain years?', 'The Nepali Calendar data we have covers BS years 2000–2090. We\'ll add more years in future updates.'],
            ['Can I download results as PDF?', 'Yes! Most tools have a PDF download button. Make sure to allow pop-ups if your browser blocks them.'],
          ];
          foreach($faqs as $i => [$q, $a]):
          ?>
          <div class="accordion-item" style="border:1px solid var(--border);border-radius:var(--radius-sm)!important;margin-bottom:.5rem;background:var(--bg-card);">
            <h2 class="accordion-header">
              <button class="accordion-button <?php echo $i>0?'collapsed':''; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#faq<?php echo $i; ?>" style="background:var(--bg-card);color:var(--text-main);font-size:.9rem;font-weight:600;border-radius:var(--radius-sm)!important;">
                <?php echo $q; ?>
              </button>
            </h2>
            <div id="faq<?php echo $i; ?>" class="accordion-collapse collapse <?php echo $i===0?'show':''; ?>" data-bs-parent="#faqAccordion">
              <div class="accordion-body" style="font-size:.88rem;color:var(--text-muted);"><?php echo $a; ?></div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>

<!-- EmailJS SDK -->
<script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
<script>
// Initialize EmailJS — Replace with your actual keys
(function() {
  emailjs.init('95e29dd0-7ac6-4148-a204-6d9229f0d467'); // <-- Replace with your EmailJS public key
})();

function sendEmail(e) {
  e.preventDefault();
  const btn = document.getElementById('submitBtn');
  const status = document.getElementById('formStatus');
  const honeypot = document.querySelector('input[name="_gotcha"]');
  if (honeypot && honeypot.value) return; // Bot trap

  // Basic validation
  const name    = document.getElementById('cf_name').value.trim();
  const email   = document.getElementById('cf_email').value.trim();
  const subject = document.getElementById('cf_subject').value;
  const message = document.getElementById('cf_message').value.trim();

  if (!name || !email || !subject || message.length < 20) {
    status.innerHTML = '<div class="alert alert-custom" style="background:rgba(239,68,68,.08);color:#EF4444;border:1px solid #EF4444;"><i class="bi bi-exclamation-triangle me-1"></i>Please fill all required fields correctly.</div>';
    return;
  }

  btn.disabled = true;
  btn.innerHTML = '<i class="bi bi-hourglass-split"></i> Sending...';

  const params = {
    from_name:    name,
    from_email:   email,
    from_phone:   document.getElementById('cf_phone').value,
    subject:      subject,
    message:      message,
    to_name:      'aNepaliSewa Team',
  };

  // Replace 'YOUR_SERVICE_ID' and 'YOUR_TEMPLATE_ID' with your EmailJS values
  emailjs.send('95e29dd0-7ac6-4148-a204-6d9229f0d467', 'YOUR_TEMPLATE_ID', params)
    .then(() => {
      status.innerHTML = '<div class="alert alert-custom" style="background:rgba(16,185,129,.08);color:#10B981;border:1px solid #10B981;"><i class="bi bi-check-circle me-1"></i>Message sent successfully! We\'ll reply within 24 hours.</div>';
      document.getElementById('contactForm').reset();
      btn.disabled = false;
      btn.innerHTML = '<i class="bi bi-send-fill"></i> Send Message';
    }, (error) => {
      status.innerHTML = '<div class="alert alert-custom" style="background:rgba(239,68,68,.08);color:#EF4444;border:1px solid #EF4444;"><i class="bi bi-x-circle me-1"></i>Failed to send. Please try again or email us directly.</div>';
      btn.disabled = false;
      btn.innerHTML = '<i class="bi bi-send-fill"></i> Send Message';
      console.error('EmailJS Error:', error);
    });
}
</script>
