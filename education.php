<?php include 'header.php'; ?>

<style>
/* ===== EDUCATION PAGE STYLES ===== */
.education-page { padding: 60px 20px; background: #0f172a; min-height: calc(100vh - 70px); }
.edu-container { max-width: 1100px; margin: 0 auto; }
.page-title { text-align: center; font-size: 36px; color: #f1f5f9; margin-bottom: 10px; font-weight: 700; }
.page-title span { color: #38bdf8; }
.page-subtitle { text-align: center; color: #94a3b8; font-size: 15px; margin-bottom: 50px; }

.edu-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 25px; }
.edu-card { background: rgba(30, 41, 59, 0.7); backdrop-filter: blur(10px); border: 1px solid #334155; border-radius: 16px; padding: 30px; transition: all 0.3s ease; position: relative; overflow: hidden; display: flex; flex-direction: column; }
.edu-card:hover { transform: translateY(-5px); border-color: #38bdf8; box-shadow: 0 15px 40px rgba(56, 189, 248, 0.15); }
.edu-card::before { content: ''; position: absolute; top: 0; left: 0; width: 4px; height: 100%; background: #38bdf8; }

/* Image Style */
.edu-img { width: 100%; height: 160px; object-fit: cover; border-radius: 12px; margin-bottom: 20px; border: 1px solid #334155; }

.edu-card h3 { font-size: 20px; color: #f1f5f9; margin-bottom: 5px; font-weight: 600; }
.edu-card h4 { font-size: 15px; color: #38bdf8; margin-bottom: 15px; font-weight: 500; }
.edu-card p { color: #94a3b8; font-size: 14px; line-height: 1.7; margin-bottom: 8px; }

.edu-badge { display: inline-block; padding: 4px 12px; border-radius: 20px; font-size: 12px; font-weight: 600; margin-top: auto; align-self: flex-start; }
.badge-primary { background: rgba(56, 189, 248, 0.15); color: #38bdf8; border: 1px solid rgba(56, 189, 248, 0.3); }
.badge-success { background: rgba(34, 197, 94, 0.15); color: #22c55e; border: 1px solid rgba(34, 197, 94, 0.3); }

/* FYP Card */
.fyp-card { grid-column: span 2; background: linear-gradient(135deg, rgba(30, 41, 59, 0.9), rgba(15, 23, 42, 0.9)); border: 2px solid #38bdf8; display: flex; flex-direction: row; gap: 30px; align-items: center; }
.fyp-card .fyp-content { flex: 1; }
.fyp-card img { width: 40%; height: 200px; object-fit: cover; border-radius: 12px; border: 2px solid #334155; }

@media (max-width: 900px) { 
  .edu-grid { grid-template-columns: 1fr; } 
  .fyp-card { grid-column: span 1; flex-direction: column; }
  .fyp-card img { width: 100%; }
}
</style>

<section class="education-page">
  <div class="edu-container">
    <h1 class="page-title">My <span>Education</span> & Experience</h1>
    <p class="page-subtitle">Academic background, internships, and certifications</p>
    
    <div class="edu-grid">
      <!-- University -->
      <div class="edu-card">
        <img src="assets/images/must.jpg" alt="MUST" class="edu-img">
        <h3>Mirpur University of Science & Technology</h3>
        <h4>Mirpur, AJK</h4>
        <p><strong>Degree:</strong> BSc Computer Systems Engineering</p>
        <p><strong>Batch:</strong> 2022 - 2026</p>
        <p><strong>Specialization:</strong> AI & Networking</p>
        <span class="edu-badge badge-primary">BS Completed</span>
      </div>

      <!-- Tech Studio -->
      <div class="edu-card">
        <img src="assets/images/tecostudio.jpg" alt="Tech Studio" class="edu-img">
        <h3>Tech Studio</h3>
        <h4>2-Month Internship</h4>
        <p>Worked on Machine Learning and Web Development projects.</p>
        <p>Learned Flask, Python, and E-commerce development.</p>
        <span class="edu-badge badge-success">Certificate Obtained</span>
      </div>

      <!-- ReSecurity -->
      <div class="edu-card">
        <img src="assets/images/resecurity.jpg" alt="ReSecurity" class="edu-img">
        <h3>ReSecurity</h3>
        <h4>Cybersecurity Internship</h4>
        <p>Hands-on experience in Routing, Switching, and Network Security.</p>
        <p>Learned vulnerability assessment and penetration testing.</p>
        <span class="edu-badge badge-success">Experience</span>
      </div>

      <!-- Networking Cisco -->
      <div class="edu-card">
        <img src="assets/images/network1.jpg" alt="Cisco" class="edu-img">
        <h3>Networking (Cisco)</h3>
        <h4>Routing & Switching</h4>
        <p>Completed comprehensive course on Routing, Switching, and Network Security.</p>
        <p>Learned about Routing Protocols, Configuration, and Security.</p>
        <span class="edu-badge badge-primary">Certified</span>
      </div>

      <!-- FYP (Full Width) -->
      <div class="edu-card fyp-card">
        <img src="assets/images/icams.jpg" alt="ICAMS FYP">
        <div class="fyp-content">
          <h3>Final Year Project (FYP) - ICAMS</h3>
          <h4>Intelligent Classroom Attendance Management System</h4>
          <p>Developed a smart attendance system using Face Recognition technology. The system uses Flask, MySQL, and OpenCV to automate attendance and eliminate proxy. It achieves 90% accuracy and reduces attendance time by 90%.</p>
          <span class="edu-badge badge-success">Completed</span>
        </div>
      </div>
    </div>
  </div>
</section>
<?php include 'footer.php'; ?>