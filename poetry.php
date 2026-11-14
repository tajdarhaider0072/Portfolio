<?php include 'header.php'; ?>
<link rel="stylesheet" href="assets/styles.css">
<section class="poetry-page" style="background-image: url('assets/images/poetry-bg.jpg')">
  <h1>Poetry</h1>
 <div class="poetry-grid">

  <!-- Card 1 -->
  <div class="poetry-card">
    <img src="assets/images/logo.jpg" alt="tajdar-logo">
    <p>
      ہم نے دیکھا ہے انہیں بہت غور سے، شاہ جی<br>
      ان کی صورت پر اُن کی آنکھیں کمال جچتی ہیں
    </p>
    <p>— Tajdar Shah</p>
  </div>

  <!-- Card 2 (Combined 3 stanzas) -->
  

  <!-- Card 3 -->
  <div class="poetry-card">
    <img src="assets/images/logo.jpg" alt="tajdar-logo">
    <p>
      مجھ کو لگتا ہے کہ اب نباہ کر لیا جائے<br>
      شاہ جی! المختصر کا اب نکاح کر لیا جائے
    </p>
    <p>— Tajdar Shah</p>
  </div>
<div class="poetry-card">
    <img src="assets/images/logo.jpg" alt="tajdar-logo">
    <p>
      شاہ جی! یہ محبت، یہ دل لگی، یہ چاہتیں<br>
      سرخ پھول ہوں جیسے دیوارِ قبر پر<br><br>

      میں سیاہ بخت، کوئی مجھ پر غور کرو<br>
      اُلجھا ہوا بیٹھا ہوں ایک راہ گزر پر<br><br>

      نہ چل سکے، نہ مل سکے، ہوئی نہ بات مکمل<br>
      شاہ! المختصر، ہار گیا وحشت کے کنارے پر
    </p>
    <p>— Tajdar Shah</p>
  </div>
</div>


</section>

<?php include 'footer.php'; ?>
<style>
.poetry-page {
  padding: 5em;
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  margin: 2em;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0,0,0,0.1);
  border: 1px solid #FFD700;
  text-align: center;
}

.poetry-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 20px;
}

.poetry-card {
  background-color: #333333;
  padding: 20px;
  border-radius: 10px;
  border: 1px solid #FFD700;
}

.poetry-card img {
  width: 100px;
  height: 100px;
  border-radius: 50%;
  margin-bottom: 10px;
}

.poetry-card p {
  margin-bottom: 10px;
  font-size: 18px;
  color: #fff;
}
.poetry-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 0 15px #00ffcc;
}
</style>
