<?php include 'header.php'; ?>

<style>
/* ===== SKILLS PAGE STYLES ===== */
.skills-page {
  padding: 60px 20px;
  background: #0f172a;
  min-height: calc(100vh - 70px);
}

.skills-container {
  max-width: 1100px;
  margin: 0 auto;
}

.page-title {
  text-align: center;
  font-size: 36px;
  color: #f1f5f9;
  margin-bottom: 10px;
  font-weight: 700;
}

.page-title span {
  color: #38bdf8;
}

.page-subtitle {
  text-align: center;
  color: #94a3b8;
  font-size: 15px;
  margin-bottom: 50px;
}

/* Category Section */
.skill-category {
  margin-bottom: 50px;
}

.category-title {
  font-size: 22px;
  color: #f1f5f9;
  margin-bottom: 25px;
  display: flex;
  align-items: center;
  gap: 10px;
  border-bottom: 1px solid #334155;
  padding-bottom: 10px;
}

.category-title i {
  color: #38bdf8;
  font-size: 24px;
}

/* Skills Grid */
.skills-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 25px;
}

/* Skill Card */
.skill-card {
  background: rgba(30, 41, 59, 0.7);
  backdrop-filter: blur(10px);
  border: 1px solid #334155;
  border-radius: 16px;
  padding: 25px;
  transition: all 0.3s ease;
}

.skill-card:hover {
  border-color: #38bdf8;
  transform: translateY(-3px);
  box-shadow: 0 10px 30px rgba(56, 189, 248, 0.1);
}

.skill-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 10px;
}

.skill-name {
  font-size: 16px;
  color: #f1f5f9;
  font-weight: 600;
}

.skill-percent {
  font-size: 14px;
  color: #38bdf8;
  font-weight: 600;
}

.skill-desc {
  font-size: 13px;
  color: #94a3b8;
  margin-bottom: 15px;
  line-height: 1.6;
}

/* Progress Bar */
.skill-bar {
  width: 100%;
  height: 8px;
  background: #0f172a;
  border-radius: 10px;
  overflow: hidden;
}

.skill-fill {
  height: 100%;
  background: linear-gradient(90deg, #38bdf8, #0ea5e9);
  border-radius: 10px;
  transition: width 1s ease-in-out;
}

/* Different colors for different categories */
.networking .skill-fill {
  background: linear-gradient(90deg, #22c55e, #16a34a); /* Green */
}

.web .skill-fill {
  background: linear-gradient(90deg, #38bdf8, #0ea5e9); /* Blue */
}

.soft .skill-fill {
  background: linear-gradient(90deg, #fbbf24, #f59e0b); /* Yellow */
}

/* ===== RESPONSIVE ===== */
@media (max-width: 768px) {
  .skills-grid {
    grid-template-columns: 1fr;
  }
}
</style>

<!-- ===== SKILLS SECTION ===== -->
<section class="skills-page">
  <div class="skills-container">
    
    <h1 class="page-title">My <span>Skills</span></h1>
    <p class="page-subtitle">Technical expertise and professional capabilities</p>

    <!-- 🟢 1. NETWORKING SKILLS -->
    <div class="skill-category networking">
      <h2 class="category-title"><i class="fas fa-network-wired"></i> Networking & IT</h2>
      
      <div class="skills-grid">
        <div class="skill-card">
          <div class="skill-header">
            <span class="skill-name">Routing & Switching</span>
            <span class="skill-percent">90%</span>
          </div>
          <div class="skill-desc">Cisco Packet Tracer, Subnetting, Routing Protocols (OSPF, EIGRP), VLANs.</div>
          <div class="skill-bar"><div class="skill-fill" style="width: 90%;"></div></div>
        </div>

        <div class="skill-card">
          <div class="skill-header">
            <span class="skill-name">Network Security</span>
            <span class="skill-percent">80%</span>
          </div>
          <div class="skill-desc">Firewall configuration, ACLs, Vulnerability Assessment, Penetration Testing basics.</div>
          <div class="skill-bar"><div class="skill-fill" style="width: 80%;"></div></div>
        </div>
      </div>
    </div>

    <!-- 🔵 2. WEB & PROGRAMMING SKILLS -->
    <div class="skill-category web">
      <h2 class="category-title"><i class="fas fa-code"></i> Web Development & Programming</h2>
      
      <div class="skills-grid">
        <div class="skill-card">
          <div class="skill-header">
            <span class="skill-name">Frontend (HTML, CSS, JS)</span>
            <span class="skill-percent">85%</span>
          </div>
          <div class="skill-desc">Responsive design, Bootstrap, modern UI/UX, DOM manipulation.</div>
          <div class="skill-bar"><div class="skill-fill" style="width: 85%;"></div></div>
        </div>

        <div class="skill-card">
          <div class="skill-header">
            <span class="skill-name">Backend (Python, Flask, PHP)</span>
            <span class="skill-percent">80%</span>
          </div>
          <div class="skill-desc">Routing, Authentication, REST APIs, Database integration (MySQL).</div>
          <div class="skill-bar"><div class="skill-fill" style="width: 80%;"></div></div>
        </div>

        <div class="skill-card">
          <div class="skill-header">
            <span class="skill-name">AI & Computer Vision</span>
            <span class="skill-percent">75%</span>
          </div>
          <div class="skill-desc">Face Recognition, OpenCV, basic Machine Learning (Python).</div>
          <div class="skill-bar"><div class="skill-fill" style="width: 75%;"></div></div>
        </div>

        <div class="skill-card">
          <div class="skill-header">
            <span class="skill-name">C, C++ & OOP</span>
            <span class="skill-percent">75%</span>
          </div>
          <div class="skill-desc">Data structures, algorithms, object-oriented programming.</div>
          <div class="skill-bar"><div class="skill-fill" style="width: 75%;"></div></div>
        </div>
      </div>
    </div>

    <!-- 🟡 3. SOFT SKILLS -->
    <div class="skill-category soft">
      <h2 class="category-title"><i class="fas fa-users"></i> Soft Skills & Leadership</h2>
      
      <div class="skills-grid">
        <div class="skill-card">
          <div class="skill-header">
            <span class="skill-name">Communication & Public Speaking</span>
            <span class="skill-percent">90%</span>
          </div>
          <div class="skill-desc">Nazim-e-Mimber experience, stage speaking, effective communication.</div>
          <div class="skill-bar"><div class="skill-fill" style="width: 90%;"></div></div>
        </div>

        <div class="skill-card">
          <div class="skill-header">
            <span class="skill-name">Team Management & Leadership</span>
            <span class="skill-percent">85%</span>
          </div>
          <div class="skill-desc">Event coordination, society management, team leading.</div>
          <div class="skill-bar"><div class="skill-fill" style="width: 85%;"></div></div>
        </div>
      </div>
    </div>

  </div>
</section>

<?php include 'footer.php'; ?>