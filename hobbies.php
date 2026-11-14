<?php include 'header.php'; ?>

<style>
/* ===== HOBBIES PAGE STYLES ===== */
.hobbies-page { padding: 60px 20px; background: #0f172a; min-height: calc(100vh - 70px); }
.hobbies-container { max-width: 1100px; margin: 0 auto; }

.page-title { text-align: center; font-size: 36px; color: #f1f5f9; margin-bottom: 10px; font-weight: 700; }
.page-title span { color: #38bdf8; }
.page-subtitle { text-align: center; color: #94a3b8; font-size: 15px; margin-bottom: 50px; }

/* Grid Layout */
.hobbies-grid { 
  display: grid; 
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); 
  gap: 25px; 
}

/* Hobby Card */
.hobby-card { 
  background: rgba(30, 41, 59, 0.7); 
  backdrop-filter: blur(10px); 
  border: 1px solid #334155; 
  border-radius: 16px; 
  overflow: hidden; 
  transition: all 0.3s ease; 
  display: flex;
  flex-direction: column;
}

.hobby-card:hover { 
  transform: translateY(-8px); 
  border-color: #38bdf8; 
  box-shadow: 0 15px 40px rgba(56, 189, 248, 0.15); 
}

/* Image Style */
.hobby-img-wrapper {
  width: 100%;
  height: 180px;
  overflow: hidden;
}

.hobby-img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.3s ease;
}

.hobby-card:hover .hobby-img {
  transform: scale(1.1);
}

/* Content Style */
.hobby-content {
  padding: 20px;
  text-align: center;
  flex-grow: 1;
}

.hobby-content h3 { 
  font-size: 18px; 
  color: #f1f5f9; 
  margin-bottom: 8px; 
}

.hobby-content p { 
  font-size: 13px; 
  color: #94a3b8; 
  line-height: 1.6; 
}

/* ===== RESPONSIVE ===== */
@media (max-width: 768px) {
  .hobbies-grid { 
    grid-template-columns: 1fr; 
  }
}
</style>

<!-- ===== HOBBIES SECTION ===== -->
<section class="hobbies-page">
  <div class="hobbies-container">
    
    <h1 class="page-title">My <span>Hobbies</span></h1>
    <p class="page-subtitle">Things I enjoy doing in my free time</p>

    <div class="hobbies-grid">
      
      <!-- Cricket -->
      <div class="hobby-card">
        <div class="hobby-img-wrapper">
          <img src="assets/images/cric.jpg" alt="Cricket" class="hobby-img">
        </div>
        <div class="hobby-content">
          <h3>Cricket</h3>
          <p>Love playing cricket, team games, and outdoor sports.</p>
        </div>
      </div>

      <!-- Gym -->
      <div class="hobby-card">
        <div class="hobby-img-wrapper">
          <img src="assets/images/gym.jpg" alt="Gym" class="hobby-img">
        </div>
        <div class="hobby-content">
          <h3>Gym & Fitness</h3>
          <p>Fitness enthusiast, regular workouts to stay active and healthy.</p>
        </div>
      </div>

      <!-- Driving -->
      <div class="hobby-card">
        <div class="hobby-img-wrapper">
          <img src="assets/images/pic2.jpg" alt="Driving" class="hobby-img">
        </div>
        <div class="hobby-content">
          <h3>Driving</h3>
          <p>Licensed driver, enjoys long drives and road trips.</p>
        </div>
      </div>

      <!-- Coding -->
      <div class="hobby-card">
        <div class="hobby-img-wrapper">
          <img src="assets/images/coding.jpg" alt="Coding" class="hobby-img">
        </div>
        <div class="hobby-content">
          <h3>Coding</h3>
          <p>Experimenting with new technologies, building projects, and solving problems.</p>
        </div>
      </div>

      <!-- Public Speaking -->
      <div class="hobby-card">
        <div class="hobby-img-wrapper">
          <img src="assets/images/speech.jpg" alt="Public Speaking" class="hobby-img">
        </div>
        <div class="hobby-content">
          <h3>Public Speaking</h3>
          <p>Stage experience, Nazim-e-Mimber, community events, and debates.</p>
        </div>
      </div>

      <!-- 🟢 POETRY / SHAYARI (New Card) -->
      <div class="hobby-card">
        <div class="hobby-img-wrapper">
          <!-- Yahan aap shayari ki picture lagayein -->
          <img src="assets/images/poetry.jpg" alt="Poetry" class="hobby-img">
        </div>
        <div class="hobby-content">
          <h3>Poetry / Shayari</h3>
          <p>Writing and reciting Urdu poetry, expressing thoughts through words.</p>
        </div>
      </div>

    </div>
  </div>
</section>

<?php include 'footer.php'; ?>