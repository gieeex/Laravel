<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Portfolio — Gerald Salunga</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

  <!-- External CSS -->
  <link rel="stylesheet" href="/css/style.css">
</head>
<body>

<div class="container">
  <!-- HEADER -->
  <header>
    <div class="logo">GERALD SALUNGA</div>
    <nav>
      <a href="#work">Work</a>
      <a href="#about">About</a>
      <a href="#contact">Contact</a>
    </nav>
  </header>

  <!-- HERO -->
  <main class="hero">
    <div class="hero-left">
      <div class="eyebrow">Hi, I am</div>
      <h1>GERALD SALUNGA.</h1>
      <p class="lead">
        A Philippines-based graphic designer passionate about designing meaningful visual solutions specializing in branding, digital graphics, and creative layouts that help businesses express their identity and connect with their audience.
      </p>
      <a class="cta" href="#contact">CONTACT ME </a>
    </div>

    <div class="hero-right">
      <img src="/images/hero.png" alt="Portrait of Gerald Salunga">
    </div>
  </main>
<!-- ABOUT -->
<section id="about" class="about-section">
  <div class="about-grid">

    <!-- LEFT -->
    <div class="about-left">
      <h2 class="about-title">ABOUT ME</h2>

      <p class="about-lead">
        I’m a working student, front-end developer, and aspiring graphic designer
        passionate about creating clean, user-friendly digital experiences.
      </p>

      <p class="about-text">
        I’m a working student, front-end developer, and aspiring graphic designer
        passionate about creating clean, user-friendly digital experiences.
        I enjoy learning new tools, improving my skills, and exploring both design
        and development. Outside of work and studies, I love playing basketball,
        reading, and working out to stay active and balanced.
      </p>

      <a class="about-btn" href="{{ asset('files/CV.pdf') }}" download>
        DOWNLOAD RESUME
      </a>
    </div>

    <!-- RIGHT -->
    <div class="about-right">
      <img src="/images/about.png" alt="About portrait">
    </div>

  </div>
</section>


<!-- CAPABILITIES -->
<section id="capabilities" class="capabilities-section">
  <div class="capabilities-grid">

    <!-- LEFT -->
    <div class="cap-left">
      <h2 class="cap-title">MY CAPABILITIES</h2>
    </div>

    <!-- RIGHT -->
    <div class="cap-right">
      <p class="cap-text">
        I am always looking to add more skills. I stay committed to continuous
        learning and personal growth, always seeking opportunities to improve
        and take on new challenges. My goal is to keep developing myself both
        professionally and personally.
      </p>

      <div class="cap-pills">
        <span class="pill">HTML</span>
        <span class="pill">CSS</span>
        <span class="pill">JAVASCRIPT</span>
        <span class="pill">XAMPP</span>
        <span class="pill">ACCESSIBILITY</span>
        <span class="pill">FIGMA</span>
        <span class="pill">PYTHON</span>
      </div>
    </div>

  </div>
</section>

  <!-- FEATURED PROJECTS -->
<section id="projects" class="projects-section">
  <div class="projects-container">

    <!-- HEADER -->
    <div class="projects-header">
      <h2 class="projects-title">FEATURED PROJECTS</h2>
      <p class="projects-intro">
        Here are some of the selected projects that showcase my passion for
        front-end development.
      </p>
    </div>

    <!-- PROJECT GRID -->
    <div class="projects-grid">

      <!-- PROJECT 1 -->
      <div class="project-card">
        <div class="project-image light">
          <img src="/images/project1.png" alt="GoErrands logo">
        </div>
        <a href="#" class="project-btn">FIGMA</a>
      </div>

      <!-- PROJECT 2 -->
      <div class="project-card">
        <div class="project-image light">
          <img src="/images/project2.png" alt="Redemption Threads website">
        </div>
        <a href="#" class="project-btn">WEBSITE</a>
      </div>

    </div>

  </div>
</section>


<!-- EXPERIENCE -->
<section id="experience" class="experience-section">
  <div class="experience-grid">

    <!-- LEFT -->
    <div class="exp-left">
      <h2 class="exp-title">MY EXPERIENCE</h2>

      <h3 class="exp-role">Service Crew</h3>
      <span class="exp-date">June 2023 — Present</span>

      <p class="exp-text">
        I am a dedicated service crew member at McDonald’s, committed to providing
        fast, friendly, and efficient customer service. I handle orders, maintain
        a clean work environment, and ensure customers have a positive dining
        experience. I take pride in being reliable, hardworking, and always ready
        to learn and improve.
      </p>
    </div>

    <!-- RIGHT -->
    <div class="exp-right">
      <img src="/images/mcd.png" alt="McDonald's logo">
    </div>

  </div>
</section>


 <!-- CONTACT / FOOTER -->
<section id="contact" class="contact-section">
  <div class="contact-container">

    <!-- LEFT -->
    <div class="contact-left">
      <h2 class="contact-title">LET’S CONNECT</h2>

      <p class="contact-email">
        Say hello at
        <a href="mailto:robertgarcia@gmail.com">geraldsalunga22@gmail.com</a>
      </p>

      <p class="contact-resume">
        For more info, here’s my
        <a href="{{ asset('files/CV.pdf') }}" download>resume</a>
      </p>

      <div class="contact-socials">
        <a href="#" aria-label="LinkedIn">in</a>
        <a href="#" aria-label="GitHub">gh</a>
        <a href="#" aria-label="X">x</a>
        <a href="#" aria-label="Instagram">ig</a>
      </div>

      <div class="contact-footer">
        © 2025 Gerald Salunga
      </div>
    </div>

    <!-- RIGHT -->
    <div class="contact-right">
      <form class="contact-form">
        <label>Name</label>
        <input type="text" placeholder="Your name">

        <label>Email</label>
        <input type="email" placeholder="Your email">

        <label>Subject</label>
        <input type="text" placeholder="Subject">

        <label>Message</label>
        <textarea placeholder="Message"></textarea>

        <button type="submit" class="contact-btn">SUBMIT</button>
      </form>
    </div>

  </div>
</section>


</body>
</html>
