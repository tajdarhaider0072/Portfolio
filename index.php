<?php include 'header.php'; ?>

<style>
/* ===== HERO SECTION (CENTER ALIGNED) ===== */
.hero {
  min-height: calc(100vh - 70px);
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 60px 20px;
  background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
  position: relative;
  overflow: hidden;
}

.hero::before {
  content: '';
  position: absolute;
  top: -50%;
  right: -50%;
  width: 100%;
  height: 100%;
  background: radial-gradient(circle, rgba(56, 189, 248, 0.15) 0%, transparent 70%);
  animation: float 6s ease-in-out infinite;
}

@keyframes float {
  0%, 100% { transform: translate(0, 0); }
  50% { transform: translate(-30px, 30px); }
}

.hero-content {
  text-align: center;
  max-width: 800px;
  position: relative;
  z-index: 1;
  display: flex;
  flex-direction: column;
  align-items: center;
}

/* Gol DP Style */
.hero-img {
  width: 200px;
  height: 200px;
  border-radius: 50%; /* Gol kar diya */
  border: 4px solid #38bdf8;
  object-fit: cover;
  margin-bottom: 25px;
  box-shadow: 0 0 40px rgba(56, 189, 248, 0.3);
  transition: all 0.3s ease;
  background-color: #1e293b; /* Agar image load na ho toh dark background */
}

.hero-img:hover {
  transform: scale(1.05);
  box-shadow: 0 0 60px rgba(56, 189, 248, 0.5);
}

.hero .engr-badge {
  display: inline-block;
  background: linear-gradient(135deg, #38bdf8, #0ea5e9);
  color: #0f172a;
  padding: 6px 18px;
  border-radius: 50px;
  font-size: 13px;
  font-weight: 700;
  margin-bottom: 15px;
  letter-spacing: 0.5px;
}

.hero h1 {
  font-size: 42px;
  font-weight: 700;
  color: #f1f5f9;
  margin-bottom: 10px;
  letter-spacing: -1px;
}

.hero .subtitle {
  font-size: 20px;
  color: #38bdf8;
  font-weight: 500;
  margin-bottom: 8px;
}

.hero .tagline {
  font-size: 16px;
  color: #94a3b8;
  margin-bottom: 5px;
}

.hero .roles {
  font-size: 14px;
  color: #64748b;
  margin-bottom: 30px;
}

.hero-buttons {
  display: flex;
  gap: 15px;
  justify-content: center;
  flex-wrap: wrap;
}

.btn {
  padding: 12px 28px;
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

/* ===== FYP HIGHLIGHT SECTION ===== */
.fyp-highlight {
  padding: 60px 40px;
  background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
  border-top: 1px solid #334155;
  border-bottom: 1px solid #334155;
}

.fyp-container {
  max-width: 1200px;
  margin: 0 auto;
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 40px;
  align-items: center;
}

.fyp-image {
  width: 100%;
  border-radius: 20px;
  box-shadow: 0 20px 60px rgba(56, 189, 248, 0.2);
  border: 2px solid #334155;
  transition: all 0.3s ease;
}

.fyp-image:hover {
  transform: scale(1.02);
  box-shadow: 0 30px 80px rgba(56, 189, 248, 0.3);
}

.fyp-content h2 {
  font-size: 28px;
  color: #38bdf8;
  margin-bottom: 10px;
}

.fyp-content .fyp-tag {
  display: inline-block;
  background: rgba(56, 189, 248, 0.15);
  color: #38bdf8;
  padding: 5px 15px;
  border-radius: 20px;
  font-size: 12px;
  font-weight: 600;
  margin-bottom: 20px;
  border: 1px solid rgba(56, 189, 248, 0.3);
}

.fyp-content p {
  color: #94a3b8;
  font-size: 15px;
  line-height: 1.8;
  margin-bottom: 20px;
}

.fyp-features {
  list-style: none;
  margin-bottom: 25px;
}

.fyp-features li {
  color: #cbd5e1;
  font-size: 14px;
  margin-bottom: 10px;
  display: flex;
  align-items: center;
  gap: 10px;
}

.fyp-features li i {
  color: #22c55e;
  font-size: 14px;
}

/* ===== EXPLORE SECTION ===== */
.explore {
  padding: 60px 40px;
  background: #0f172a;
}

.explore h2 {
  text-align: center;
  font-size: 32px;
  color: #f1f5f9;
  margin-bottom: 15px;
}

.explore .section-subtitle {
  text-align: center;
  color: #94a3b8;
  margin-bottom: 40px;
  font-size: 15px;
}

.explore-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 20px;
  max-width: 1200px;
  margin: 0 auto;
}

.explore-card {
  background: rgba(30, 41, 59, 0.7);
  backdrop-filter: blur(10px);
  border: 1px solid #334155;
  border-radius: 16px;
  padding: 30px 25px;
  text-align: center;
  transition: all 0.3s ease;
  text-decoration: none;
  display: block;
}

.explore-card:hover {
  transform: translateY(-8px);
  border-color: #38bdf8;
  box-shadow: 0 12px 40px rgba(56, 189, 248, 0.2);
}

.explore-card i {
  font-size: 40px;
  color: #38bdf8;
  margin-bottom: 15px;
}

.explore-card h3 {
  font-size: 18px;
  color: #f1f5f9;
  margin-bottom: 8px;
}

.explore-card p {
  font-size: 13px;
  color: #94a3b8;
  line-height: 1.6;
}

/* ===== STATS SECTION ===== */
.stats {
  padding: 50px 40px;
  background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
  border-top: 1px solid #334155;
}

.stats-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
  gap: 20px;
  max-width: 1000px;
  margin: 0 auto;
  text-align: center;
}

.stat-item h3 {
  font-size: 36px;
  color: #38bdf8;
  font-weight: 700;
  margin-bottom: 5px;
}

.stat-item p {
  font-size: 14px;
  color: #94a3b8;
}

/* ===== RESPONSIVE ===== */
@media (max-width: 768px) {
  .hero h1 {
    font-size: 28px;
  }
  .hero .subtitle {
    font-size: 16px;
  }
  .hero-img {
    width: 150px;
    height: 150px;
  }
  .fyp-container {
    grid-template-columns: 1fr;
  }
  .explore {
    padding: 40px 20px;
  }
  .explore-grid {
    grid-template-columns: 1fr;
  }
}
</style>

<!-- ===== HERO SECTION ===== -->
<section class="hero">
  <div class="hero-content">
    <div class="engr-badge">⚡ PEC REGISTERED ENGINEER</div>
    
    <!-- 🔥 YAHAN IMAGE KA NAAM CHANGE KIA HAI: myprofile.jpeg -->
    <img src="assets/images/myprofile.jpg" alt="Engr. Tajdar Shah" class="hero-img">
    
    <h1>Engr. Tajdar Haider Syed</h1>
    <p class="subtitle">Computer Systems Engineer</p>
    <p class="tagline">AI & Networking Enthusiast</p>
    <p class="roles">Network Engineer | Web Developer | PEC Registered</p>
    
    <div class="hero-buttons">
      <a href="intro.php" class="btn">
        <i class="fas fa-user"></i> About Me
      </a>
      <a href="projects.php" class="btn btn-outline">
        <i class="fas fa-folder"></i> View Projects
      </a>
    </div>
  </div>
</section>

<!-- ===== FYP HIGHLIGHT SECTION ===== -->
<section class="fyp-highlight">
  <div class="fyp-container">
    <img src="assets/images/icams.jpg" alt="ICAMS Project" class="fyp-image">
    
    <div class="fyp-content">
      <span class="fyp-tag">🎓 FINAL YEAR PROJECT</span>
      <h2>ICAMS - Intelligent Classroom Attendance Management System</h2>
      <p>
        A smart attendance system using Face Recognition technology. 
        It marks attendance automatically in real-time and completely 
        eliminates proxy attendance.
      </p>
      
      <ul class="fyp-features">
        <li><i class="fas fa-check-circle"></i> 90% Face Recognition Accuracy</li>
        <li><i class="fas fa-check-circle"></i> 90% Time Reduction</li>
        <li><i class="fas fa-check-circle"></i> 100% Proxy Elimination</li>
        <li><i class="fas fa-check-circle"></i> Flask + MySQL + OpenCV</li>
      </ul>
      
      <a href="projects.php" class="btn">
        <i class="fas fa-arrow-right"></i> View All Projects
      </a>
    </div>
  </div>
</section>

<!-- ===== EXPLORE SECTION ===== -->
<section class="explore">
  <h2>Explore My Portfolio</h2>
  <p class="section-subtitle">Learn more about my skills, projects, and experience</p>
  
  <div class="explore-grid">
    <a href="intro.php" class="explore-card">
      <i class="fas fa-user-circle"></i>
      <h3>About Me</h3>
      <p>Who I am, my background, and my journey</p>
    </a>
    
    <a href="education.php" class="explore-card">
      <i class="fas fa-graduation-cap"></i>
      <h3>Education</h3>
      <p>My academic background and certifications</p>
    </a>
    
    <a href="skills.php" class="explore-card">
      <i class="fas fa-network-wired"></i>
      <h3>Skills</h3>
      <p>Networking, Web Dev, AI & more</p>
    </a>
    
    <a href="projects.php" class="explore-card">
      <i class="fas fa-folder-open"></i>
      <h3>Projects</h3>
      <p>ICAMS, TK Store, and more</p>
    </a>
    
    <a href="experience.php" class="explore-card">
      <i class="fas fa-briefcase"></i>
      <h3>Experience</h3>
      <p>Internships and professional experience</p>
    </a>
    
    <a href="contact.php" class="explore-card">
      <i class="fas fa-envelope"></i>
      <h3>Contact</h3>
      <p>Get in touch with me</p>
    </a>
  </div>
</section>

<!-- ===== STATS SECTION ===== -->
<section class="stats">
  <div class="stats-grid">
    <div class="stat-item">
      <h3>PEC</h3>
      <p>Registered Engineer</p>
    </div>
    <div class="stat-item">
      <h3>5+</h3>
      <p>Projects Completed</p>
    </div>
    <div class="stat-item">
      <h3>2</h3>
      <p>Internships</p>
    </div>
    <div class="stat-item">
      <h3>2026</h3>
      <p>Graduating</p>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>