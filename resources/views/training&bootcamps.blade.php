@include("nav-bar2")

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Xiracom Trainings & Bootcamps</title>
  <link rel="stylesheet" href="style/training&bootcamps.css">
</head>
<body>
  <header class="header">
    <div class="container">
      <h1>Xiracom Trainings & Bootcamps</h1>
      <p>Empowering Your Future with Industry-Relevant Skills</p>
    </div>
  </header>

  <section id="about" class="container">
    <h2>Learn With Us</h2>
    <p>Xiracom is a leading provider of professional trainings and bootcamps designed to equip individuals and organizations with the skills needed to thrive in today's fast-paced tech industry.</p>
  </section>

  <section id="trainings" class="container">
    <h2>Our Trainings</h2>
    <div class="training-list">
      <div class="training-item">
        <h3>Web Development</h3>
        <p>Learn the latest technologies in web development, including HTML, CSS, JavaScript, and frameworks like React and Angular.</p>
      </div>
      <div class="training-item">
        <h3>Data Science</h3>
        <p>Master data analysis, machine learning, and data visualization with Python, R, and TensorFlow.</p>
      </div>
      <div class="training-item">
        <h3>Cloud Computing</h3>
        <p>Get hands-on experience with AWS, Azure, and Google Cloud Platform to build scalable cloud solutions.</p>
      </div>
    </div>
  </section>

  <section id="bootcamps" class="container">
    <h2>Our Bootcamps</h2>
    <div class="bootcamp-list">
      <div class="bootcamp-item">
        <h3>Full-Stack Developer Bootcamp</h3>
        <p>An intensive program covering front-end and back-end development to make you job-ready in 12 weeks.</p>
      </div>
      <div class="bootcamp-item">
        <h3>AI & Machine Learning Bootcamp</h3>
        <p>Dive deep into AI and ML concepts, algorithms, and real-world applications in this 16-week program.</p>
      </div>
      <div class="bootcamp-item">
        <h3>DevOps Bootcamp</h3>
        <p>Learn CI/CD, containerization, and orchestration tools like Docker and Kubernetes in this 10-week bootcamp.</p>
      </div>
    </div>
  </section>

  <!-- New Packages Section -->
  <section id="packages" class="container">
    <h2>Our Packages</h2>
    <div class="package-list">
      <div class="package-item">
        <h3>Basic Package</h3>
        <p class="price">KSH 2000</p>
        <ul>
          <li>Access to 1 Training Course</li>
          <li>Downloadable Resources</li>
          <li>Email Support</li>
        </ul>
        <button>Enroll</button>
      </div>
      <div class="package-item">
        <h3>Standard Package</h3>
        <p class="price">KSH 3000</p>
        <ul>
          <li>Access to 3 Training Courses</li>
          <li>Live Q&A Sessions</li>
          <li>Certificate of Completion</li>
        </ul>
        <button>Enroll</button>
      </div>
      <div class="package-item">
        <h3>Premium Package</h3>
        <p class="price">KSH 4000</p>
        <ul>
          <li>Access to All Courses & Bootcamps</li>
          <li>1-on-1 Mentorship</li>
          <li>Job Placement Assistance</li>
        </ul>
        <button>Enroll</button>
      </div>
    </div>
  </section>
</body>
</html>

@include("footer")