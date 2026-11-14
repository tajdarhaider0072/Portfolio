<?php include 'header.php'; ?>

<style>
/* ===== INTRO PAGE STYLES ===== */
.intro-page {
  padding: 60px 20px;
  background: #0f172a;
  min-height: calc(100vh - 70px);
  display: flex;
  justify-content: center;
  align-items: center;
}

.intro-container {
  max-width: 1000px;
  width: 100%;
  background: rgba(30, 41, 59, 0.7);
  backdrop-filter: blur(10px);
  border: 1px solid #334155;
  border-radius: 20px;
  padding: 50px;
  box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
}

.page-title {
  text-align: center;
  font-size: 36px;
  color: #f1f5f9;
  margin-bottom: 40px;
  font-weight: 700;
  letter-spacing: -1px;
}

.page-title span {
  color: #38bdf8;
}

.intro-grid {
  display: grid;
  grid-template-columns: 1fr 2fr;
  gap: 40px;
  align-items: center;
}

/* Profile Image Section */
.intro-image-section {
  text-align: center;
}

.intro-img {
  width: 220px;
  height: 220px;
  border-radius: 50%;
  border: 4px solid #38bdf8;
  object-fit: cover;
  box-shadow: 0 0 30px rgba(56, 189, 248, 0.2);
  margin-bottom: 20px;
  transition: all 0.3s ease;
}

.intro-img:hover {
  transform: scale(1.05);
  box-shadow: 0 0 50px rgba(56, 189, 248, 0.4);
}

.intro-badge {
  display: inline-block;
  background: rgba(56, 189, 248, 0.15);
  color: #38bdf8;
  padding: 8px 16px;
  border-radius: 50px;
  font-size: 13px;
  font-weight: 600;
  border: 1px solid rgba(56, 189, 248, 0.3);
}

/* Text Details Section */
.intro-text-section h2 {
  font-size: 28px;
  color: #f1f5f9;
  margin-bottom: 5px;
}

.intro-text-section .role {
  font-size: 16px;
  color: #38bdf8;
  font-weight: 500;
  margin-bottom: 25px;
}

.detail-list {
  list-style: none;
  margin-bottom: 30px;
}

.detail-list li {
  display: flex;
  align-items: flex-start;
  gap: 15px;
  margin-bottom: 15px;
  color: #cbd5e1;
  font-size: 15px;
  line-height: 1.6;
}

.detail-list li i {
  color: #38bdf8;
  font-size: 18px;
  margin-top: 3px;
  min-width: 20px;
}

.detail-list li strong {
  color: #f1f5f9;
  font-weight: 600;
  display: inline-block;
  min-width: 120px;
}

.intro-bio {
  background: #0f172a;
  padding: 20px;
  border-radius: 12px;
  border-left: 4px solid #38bdf8;
  color: #94a3b8;
  font-size: 15px;
  line-height: 1.8;
  margin-bottom: 30px;
}

/* Buttons */
.intro-buttons {
  display: flex;
  gap: 15px;
  flex-wrap: wrap;
}

.btn {
  padding: 12px 24px;
  background: #38bdf8;
  color: #0f172a;
  text-decoration: none;
  border-radius: 10px;
  font-weight: 600;
  font-size: 15px;
  transition: all 0.3s ease;
  display: inline-flex;
  align-items: center;
  gap: 8px;
  border: 2px solid #38bdf8;
}

.btn:hover {
  background: transparent;
  color: #38bdf8;
  transform: translateY(-3px);
  box-shadow: 0 10px 30px rgba(56, 189, 248, 0.3);
}

.btn-outline {
  background: transparent;
  color: #38bdf8;
}

.btn-outline:hover {
  background: #38bdf8;
  color: #0f172a;
}

/* ===== RESPONSIVE ===== */
@media (max-width: 768px) {
  .intro-grid {
    grid-template-columns: 1fr;
    text-align: center;
  }
  
  .detail-list li {
    flex-direction: column;
    gap: 5px;
    text-align: left;
  }
  
  .intro-buttons {
    justify-content: center;
  }
  
  .intro-container {
    padding: 30px 20px;
  }
}
</style>

<!-- ===== INTRO SECTION ===== -->
<section class="intro-page">
  <div class="intro-container">
    
    <h1 class="page-title">Who <span>I Am</span></h1>

    <div class="intro-grid">
      
      <!-- Left Side: Image & Badge -->
      <div class="intro-image-section">
        <!-- Image path updated -->
        <img src="assets/images/myprofile.jpg" alt="Engr. Tajdar Shah" class="intro-img">
        <br>
        <div class="intro-badge">
          <i class="fas fa-check-circle"></i> PEC Registered Engineer
        </div>
      </div>

      <!-- Right Side: Details -->
      <div class="intro-text-section">
        <h2>Engr. Tajdar Haider Syed</h2>
        <p class="role">Computer Systems Engineer</p>

        <ul class="detail-list">
          <li>
            <i class="fas fa-user"></i>
            <div><strong>Name:</strong> Tajdar Haider Syed</div>
          </li>
          <li>
            <i class="fas fa-male"></i>
            <div><strong>Father's Name:</strong> Syed Najam Kazmi</div>
          </li>
          <li>
            <i class="fas fa-graduation-cap"></i>
            <div><strong>Education:</strong> BSc Computer Systems Engineering at MUST University</div>
          </li>
          <li>
            <i class="fas fa-school"></i>
            <div><strong>Previous:</strong> ICS from Chanar College Mandhole Hajira, Matric from Islamia School Mandhole</div>
          </li>
          <li>
            <i class="fas fa-map-marker-alt"></i>
            <div><strong>Location:</strong> Mirpur, AJK, Pakistan</div>
          </li>
        </ul>

        <div class="intro-bio">
          <i class="fas fa-quote-left" style="color: #38bdf8; margin-right: 8px;"></i>
          I am a Computer Systems Engineering student passionate about AI, Networking, and Web Development. I am always eager to learn new technologies and build practical solutions to real-world problems.
        </div>

        <div class="intro-buttons">
          <a href="education.php" class="btn">
            <i class="fas fa-graduation-cap"></i> My Education
          </a>
          <a href="skills.php" class="btn btn-outline">
            <i class="fas fa-code"></i> My Skills
          </a>
        </div>
      </div>

    </div>
  </div>
</section>

<?php include 'footer.php'; ?>