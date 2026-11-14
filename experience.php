<?php include 'header.php'; ?>

<style>
.experience-page { padding: 60px 20px; background: #0f172a; min-height: calc(100vh - 70px); }
.exp-container { max-width: 1000px; margin: 0 auto; }
.page-title { text-align: center; font-size: 36px; color: #f1f5f9; margin-bottom: 10px; font-weight: 700; }
.page-title span { color: #38bdf8; }
.page-subtitle { text-align: center; color: #94a3b8; font-size: 15px; margin-bottom: 50px; }

.exp-grid { display: grid; gap: 25px; }
.exp-card { background: rgba(30, 41, 59, 0.7); backdrop-filter: blur(10px); border: 1px solid #334155; border-radius: 16px; padding: 30px; transition: all 0.3s ease; position: relative; border-left: 4px solid #38bdf8; }
.exp-card:hover { transform: translateX(5px); border-color: #38bdf8; box-shadow: 0 10px 30px rgba(56, 189, 248, 0.1); }

.exp-header { display: flex; justify-content: space-between; align-items: flex-start; flex-wrap: wrap; gap: 15px; margin-bottom: 20px; }
.exp-header-left { display: flex; gap: 20px; align-items: center; }

/* Image Style */
.exp-img { width: 80px; height: 80px; border-radius: 12px; object-fit: cover; border: 2px solid #334155; background: #fff; }

.exp-title { font-size: 20px; color: #f1f5f9; font-weight: 600; margin-bottom: 4px; }
.exp-company { font-size: 16px; color: #38bdf8; font-weight: 500; }
.exp-date { font-size: 13px; color: #64748b; background: #0f172a; padding: 4px 12px; border-radius: 20px; border: 1px solid #334155; margin-top: 5px; }

.exp-desc { color: #94a3b8; font-size: 14px; line-height: 1.7; }
.exp-desc ul { padding-left: 20px; margin-top: 10px; }
.exp-desc ul li { margin-bottom: 5px; }

@media (max-width: 600px) {
  .exp-header { flex-direction: column; }
  .exp-header-left { flex-direction: column; align-items: flex-start; text-align: left; }
}
</style>

<section class="experience-page">
  <div class="exp-container">
    <h1 class="page-title">My <span>Experience</span></h1>
    <p class="page-subtitle">Professional internships and practical experience</p>
    
    <div class="exp-grid">
      
      <!-- Tech Studio -->
      <div class="exp-card">
        <div class="exp-header">
          <div class="exp-header-left">
            <img src="assets/images/tecostudio.jpg" alt="Tech Studio" class="exp-img">
            <div>
              <h3 class="exp-title">Web Development & AI Intern</h3>
              <p class="exp-company">Tech Studio</p>
            </div>
          </div>
          <span class="exp-date">2 Months</span>
        </div>
        <div class="exp-desc">
          Worked on web development projects and learned about e-commerce websites.
          <ul>
            <li>Used HTML, CSS, JavaScript, and PHP for development.</li>
            <li>Built machine learning models and handled datasets.</li>
            <li>Worked on Face Recognition project using Python and OpenCV.</li>
            <li>Implemented user authentication and database management using MySQL.</li>
          </ul>
        </div>
      </div>

      <!-- ReSecurity -->
      <div class="exp-card">
        <div class="exp-header">
          <div class="exp-header-left">
            <img src="assets/images/resecurity.jpg" alt="ReSecurity" class="exp-img">
            <div>
              <h3 class="exp-title">Networking & Cybersecurity Intern</h3>
              <p class="exp-company">ReSecurity</p>
            </div>
          </div>
          <span class="exp-date">Internship</span>
        </div>
        <div class="exp-desc">
          Gained hands-on experience in Routing, Switching, and Network Security.
          <ul>
            <li>Configured routers and switches using Cisco Packet Tracer.</li>
            <li>Learned about routing protocols, subnetting, and network security.</li>
            <li>Learned network security, vulnerability assessment, and penetration testing.</li>
            <li>Used tools like Nmap, Metasploit, and Burp Suite.</li>
          </ul>
        </div>
      </div>

      <!-- Cisco -->
      <div class="exp-card">
        <div class="exp-header">
          <div class="exp-header-left">
            <img src="assets/images/network1.jpg" alt="Cisco" class="exp-img">
            <div>
              <h3 class="exp-title">Networking Projects</h3>
              <p class="exp-company">Cisco Packet Tracer</p>
            </div>
          </div>
          <span class="exp-date">Academic</span>
        </div>
        <div class="exp-desc">
          Designed and simulated complex network topologies.
          <ul>
            <li>Implemented different routing protocols (OSPF, EIGRP, RIP).</li>
            <li>Configured VLANs, Trunking, and Inter-VLAN routing.</li>
            <li>Set up secure server configurations and ACLs.</li>
          </ul>
        </div>
      </div>

      <!-- FYP -->
      <div class="exp-card" style="border-left-color: #22c55e;">
        <div class="exp-header">
          <div class="exp-header-left">
            <img src="assets/images/icams.jpg" alt="ICAMS" class="exp-img">
            <div>
              <h3 class="exp-title">Final Year Project (FYP)</h3>
              <p class="exp-company">MUST University</p>
            </div>
          </div>
          <span class="exp-date" style="background: rgba(34, 197, 94, 0.1); color: #22c55e; border-color: rgba(34, 197, 94, 0.3);">2025 - 2026</span>
        </div>
        <div class="exp-desc">
          Developed ICAMS (Intelligent Classroom Attendance Management System).
          <ul>
            <li>Built a complete web app using Flask, MySQL, and OpenCV.</li>
            <li>Integrated real-time Face Recognition for automated attendance.</li>
            <li>Achieved 90% accuracy and reduced attendance time by 90%.</li>
            <li>Completely eliminated proxy attendance.</li>
          </ul>
        </div>
      </div>

    </div>
  </div>
</section>
<?php include 'footer.php'; ?>