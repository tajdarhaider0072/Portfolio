<?php include 'header.php'; ?>
<style>
.contact-page { padding: 60px 20px; background: #0f172a; min-height: calc(100vh - 70px); display: flex; justify-content: center; align-items: center; }
.contact-container { max-width: 1000px; width: 100%; display: grid; grid-template-columns: 1fr 1fr; gap: 40px; }
.contact-card { background: rgba(30, 41, 59, 0.7); backdrop-filter: blur(10px); border: 1px solid #334155; border-radius: 20px; padding: 40px; box-shadow: 0 20px 60px rgba(0,0,0,0.2); }
.contact-card h2 { font-size: 28px; color: #38bdf8; margin-bottom: 20px; }
.contact-card p { color: #94a3b8; font-size: 15px; margin-bottom: 30px; line-height: 1.6; }
.contact-info { display: flex; align-items: center; gap: 15px; margin-bottom: 20px; color: #cbd5e1; font-size: 15px; }
.contact-info i { width: 40px; height: 40px; background: rgba(56, 189, 248, 0.1); color: #38bdf8; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 18px; border: 1px solid rgba(56, 189, 248, 0.2); }
.social-links { display: flex; gap: 15px; margin-top: 30px; }
.social-links a { width: 45px; height: 45px; background: #0f172a; border: 1px solid #334155; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #94a3b8; font-size: 18px; text-decoration: none; transition: all 0.3s ease; }
.social-links a:hover { background: #38bdf8; color: #0f172a; border-color: #38bdf8; transform: translateY(-3px); }

/* Form */
.contact-form input, .contact-form textarea { width: 100%; padding: 15px; background: #0f172a; border: 1px solid #334155; border-radius: 10px; color: #f1f5f9; font-family: 'Poppins', sans-serif; margin-bottom: 15px; transition: all 0.3s ease; }
.contact-form input:focus, .contact-form textarea:focus { outline: none; border-color: #38bdf8; box-shadow: 0 0 0 3px rgba(56, 189, 248, 0.1); }
.contact-form textarea { height: 120px; resize: vertical; }
.contact-form button { width: 100%; padding: 15px; font-size: 16px; }

@media (max-width: 768px) { .contact-container { grid-template-columns: 1fr; } .contact-card { padding: 30px 20px; } }
</style>

<section class="contact-page">
  <div class="contact-container">
    <!-- Left Side: Info -->
    <div class="contact-card">
      <h2>Let's Connect</h2>
      <p>I am currently looking for opportunities in Networking and Web Development. Feel free to reach out!</p>
      
      <div class="contact-info">
        <i class="fas fa-envelope"></i>
        <span>sthaks.1272@gmail.com</span>
      </div>
      <div class="contact-info">
        <i class="fas fa-phone"></i>
        <span>+92 355 6651014</span>
      </div>
      <div class="contact-info">
        <i class="fas fa-map-marker-alt"></i>
        <span>Mirpur, AJK, Pakistan</span>
      </div>

      <div class="social-links">
        <a href="#" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
        <a href="#" title="GitHub"><i class="fab fa-github"></i></a>
        <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
        <a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
      </div>
    </div>

    <!-- Right Side: Form -->
    <div class="contact-card">
      <h2>Send a Message</h2>
      <form class="contact-form" action="#" method="POST">
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
        <input type="text" name="subject" placeholder="Subject" required>
        <textarea name="message" placeholder="Your Message..." required></textarea>
        <button type="submit" class="btn"><i class="fas fa-paper-plane"></i> Send Message</button>
      </form>
    </div>
  </div>
</section>
<?php include 'footer.php'; ?>