<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tajdar Shah | Portfolio</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<style>
/* ===== RESET ===== */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Poppins', sans-serif;
  background: #0f172a;
  color: #f1f5f9;
  padding-top: 80px;
  min-height: 100vh;
}

/* ===== HEADER ===== */
.header {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 70px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 0 40px;
  background: rgba(15, 23, 42, 0.95);
  backdrop-filter: blur(10px);
  border-bottom: 1px solid #334155;
  z-index: 1000;
}

.logo {
  display: flex;
  align-items: center;
  gap: 12px;
}

.logo img {
  width: 45px;
  height: 45px;
  border-radius: 50%;
  border: 2px solid #38bdf8;
  object-fit: cover;
}

.logo span {
  font-size: 20px;
  font-weight: 600;
  color: #f1f5f9;
}

.header nav {
  display: flex;
  gap: 8px;
  align-items: center;
}

.nav-btn {
  padding: 10px 20px;
  background: transparent;
  color: #94a3b8;
  text-decoration: none;
  border-radius: 8px;
  font-size: 14px;
  font-weight: 500;
  transition: all 0.3s ease;
  display: flex;
  align-items: center;
  gap: 6px;
}

.nav-btn:hover {
  background: rgba(56, 189, 248, 0.1);
  color: #38bdf8;
}

.nav-btn.active {
  background: #38bdf8;
  color: #0f172a;
}

.nav-btn i {
  font-size: 14px;
}

/* Mobile Menu */
.menu-toggle {
  display: none;
  background: none;
  border: none;
  color: #f1f5f9;
  font-size: 24px;
  cursor: pointer;
}

/* ===== RESPONSIVE ===== */
@media (max-width: 992px) {
  .header nav {
    gap: 4px;
  }
  .nav-btn {
    padding: 8px 12px;
    font-size: 13px;
  }
}

@media (max-width: 768px) {
  .header {
    padding: 0 20px;
  }
  
  .menu-toggle {
    display: block;
  }
  
  .header nav {
    position: fixed;
    top: 70px;
    left: 0;
    width: 100%;
    flex-direction: column;
    background: #0f172a;
    padding: 20px;
    border-bottom: 1px solid #334155;
    transform: translateY(-150%);
    transition: transform 0.3s ease;
    gap: 5px;
  }
  
  .header nav.active {
    transform: translateY(0);
  }
  
  .nav-btn {
    width: 100%;
    justify-content: flex-start;
    padding: 12px 20px;
  }
}
</style>
</head>

<body>

<header class="header">
  <div class="logo">
    <img src="assets/images/logo.jpg" alt="logo">
    <span>Tajdar Shah</span>
  </div>

  <button class="menu-toggle" onclick="toggleMenu()">
    <i class="fas fa-bars"></i>
  </button>

  <nav id="navMenu">
    <a href="index.php" class="nav-btn"><i class="fas fa-home"></i> Home</a>
    <a href="intro.php" class="nav-btn"><i class="fas fa-user"></i> About</a>
    <a href="education.php" class="nav-btn"><i class="fas fa-graduation-cap"></i> Education</a>
    <a href="skills.php" class="nav-btn"><i class="fas fa-code"></i> Skills</a>
    <a href="projects.php" class="nav-btn"><i class="fas fa-folder"></i> Projects</a>
    <a href="experience.php" class="nav-btn"><i class="fas fa-briefcase"></i> Experience</a>
    <a href="hobbies.php" class="nav-btn"><i class="fas fa-heart"></i> Hobbies</a>
    <a href="contact.php" class="nav-btn"><i class="fas fa-envelope"></i> Contact</a>
  </nav>
</header>

<script>
function toggleMenu() {
  document.getElementById('navMenu').classList.toggle('active');
}
</script>