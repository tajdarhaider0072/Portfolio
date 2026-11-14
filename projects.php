<?php include 'header.php'; ?>
<style>
.projects-page { padding: 60px 20px; background: #0f172a; min-height: calc(100vh - 70px); }
.projects-container { max-width: 1200px; margin: 0 auto; }
.page-title { text-align: center; font-size: 36px; color: #f1f5f9; margin-bottom: 10px; font-weight: 700; }
.page-title span { color: #38bdf8; }
.page-subtitle { text-align: center; color: #94a3b8; font-size: 15px; margin-bottom: 50px; }
.featured-project { background: linear-gradient(135deg, rgba(30, 41, 59, 0.9), rgba(15, 23, 42, 0.9)); border: 2px solid #38bdf8; border-radius: 20px; padding: 40px; display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: center; margin-bottom: 60px; box-shadow: 0 20px 60px rgba(56, 189, 248, 0.15); position: relative; overflow: hidden; }
.featured-project::before { content: 'FEATURED PROJECT'; position: absolute; top: 20px; right: -35px; background: #38bdf8; color: #0f172a; padding: 5px 40px; font-size: 12px; font-weight: 700; transform: rotate(45deg); letter-spacing: 1px; }
.featured-image { width: 100%; border-radius: 12px; border: 2px solid #334155; transition: all 0.3s ease; object-fit: cover; height: 300px; }
.featured-image:hover { transform: scale(1.02); border-color: #38bdf8; }
.featured-content h2 { font-size: 28px; color: #38bdf8; margin-bottom: 10px; }
.fyp-tag { display: inline-block; background: rgba(34, 197, 94, 0.15); color: #22c55e; padding: 5px 15px; border-radius: 20px; font-size: 12px; font-weight: 600; margin-bottom: 15px; border: 1px solid rgba(34, 197, 94, 0.3); }
.featured-content p { color: #94a3b8; font-size: 15px; line-height: 1.8; margin-bottom: 20px; }
.tech-tags { display: flex; flex-wrap: wrap; gap: 8px; margin-bottom: 20px; }
.tech-tag { background: #0f172a; color: #cbd5e1; padding: 5px 12px; border-radius: 6px; font-size: 12px; border: 1px solid #334155; }
.projects-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(320px, 1fr)); gap: 25px; }
.project-card { background: rgba(30, 41, 59, 0.7); backdrop-filter: blur(10px); border: 1px solid #334155; border-radius: 16px; overflow: hidden; transition: all 0.3s ease; }
.project-card:hover { transform: translateY(-8px); border-color: #38bdf8; box-shadow: 0 15px 40px rgba(56, 189, 248, 0.15); }
.project-img-wrapper { width: 100%; height: 200px; overflow: hidden; background: #0f172a; }
.project-img-wrapper img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease; }
.project-card:hover .project-img-wrapper img { transform: scale(1.1); }
.project-info { padding: 25px; }
.project-info h3 { font-size: 18px; color: #f1f5f9; margin-bottom: 10px; }
.project-info p { font-size: 14px; color: #94a3b8; line-height: 1.6; margin-bottom: 15px; }
.project-link { color: #38bdf8; text-decoration: none; font-size: 14px; font-weight: 600; display: inline-flex; align-items: center; gap: 5px; transition: gap 0.3s ease; }
.project-link:hover { gap: 10px; }
@media (max-width: 900px) { .featured-project { grid-template-columns: 1fr; padding: 30px; } .featured-project::before { display: none; } }
</style>

<section class="projects-page">
  <div class="projects-container">
    <h1 class="page-title">My <span>Projects</span></h1>
    <p class="page-subtitle">Showcasing my academic, personal, and internship projects</p>

    <div class="featured-project">
      <img src="assets/images/icams.jpg" alt="ICAMS Project" class="featured-image">
      <div class="featured-content">
        <h2>ICAMS - Smart Attendance System</h2>
        <span class="fyp-tag">Final Year Project (FYP)</span>
        <p>An intelligent classroom attendance management system using Face Recognition. It automatically marks attendance in real-time, tracks student presence, and eliminates proxy attendance completely.</p>
        <div class="tech-tags">
          <span class="tech-tag">Python</span><span class="tech-tag">Flask</span>
          <span class="tech-tag">OpenCV</span><span class="tech-tag">MySQL</span>
          <span class="tech-tag">face_recognition</span>
        </div>
        <a href="#" class="btn" style="padding: 12px 24px; font-size: 14px;"><i class="fas fa-external-link-alt"></i> View Project Details</a>
      </div>
    </div>

    <div class="projects-grid">
      <div class="project-card">
        <div class="project-img-wrapper"><img src="assets/images/tk_store.jpg" alt="TK Store"></div>
        <div class="project-info">
          <h3>TK Store - E-Commerce Website</h3>
          <p>A fully functional e-commerce platform with cart system, admin dashboard, and payment processing.</p>
          <div class="tech-tags" style="margin-bottom: 15px;"><span class="tech-tag">PHP</span><span class="tech-tag">MySQL</span><span class="tech-tag">HTML/CSS</span></div>
          <a href="#" class="project-link">View Details <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>
      <div class="project-card">
        <div class="project-img-wrapper"><img src="assets/images/intro1.jpg" alt="Intro Web"></div>
        <div class="project-info">
          <h3>My_Intro_Web - Portfolio</h3>
          <p>My personal portfolio website showcasing my skills, projects, and experience with modern UI.</p>
          <div class="tech-tags" style="margin-bottom: 15px;"><span class="tech-tag">HTML5</span><span class="tech-tag">CSS3</span><span class="tech-tag">PHP</span></div>
          <a href="#" class="project-link">View Details <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>
      <div class="project-card">
        <div class="project-img-wrapper"><img src="assets/images/network1.jpg" alt="Cisco Networking"></div>
        <div class="project-info">
          <h3>Cisco Networking Simulation</h3>
          <p>Configured routers and switches using Cisco Packet Tracer. Implemented routing protocols and network security.</p>
          <div class="tech-tags" style="margin-bottom: 15px;"><span class="tech-tag">Cisco IOS</span><span class="tech-tag">Packet Tracer</span><span class="tech-tag">Routing</span></div>
          <a href="#" class="project-link">View Details <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>
      <div class="project-card">
        <div class="project-img-wrapper"><img src="assets/images/ai.jpg" alt="Face Detection"></div>
        <div class="project-info">
          <h3>Face Detection System</h3>
          <p>AI & ML project using Python and OpenCV for face detection with live camera and pictures.</p>
          <div class="tech-tags" style="margin-bottom: 15px;"><span class="tech-tag">Python</span><span class="tech-tag">OpenCV</span><span class="tech-tag">AI</span></div>
          <a href="#" class="project-link">View Details <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>
<?php include 'footer.php'; ?>