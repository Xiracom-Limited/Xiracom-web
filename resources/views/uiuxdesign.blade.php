@include("nav-bar2")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UI/UX Designs - Xiracom Limited</title>
    <link rel="stylesheet" href="style/uiuxdesign.css">
    @vite(['resources/sass/app.scss','resources/js/app.js'])
</head>
<body>
  <!-- Hero section -->
  <div class="hero-section mt-5">
            <img src="images\representations-user-experience-interface-design.jpg" alt="Hardware and software maintenance services hero image" class="hero-image" />
        </div>
    
    <div class="container">
        <div class="section sample-designs">
            <h2>Our Sample Designs</h2>
            <div class="content">
                <div class="text">
                    <h3>Landing Page UI Kit</h3>
                    <p><strong>5+</strong> Web Templates | <strong>50+</strong> Blocks</p>
                    <div class="icons">
                        <img src="images\figma.png" alt="Figma">
                        <img src="images\XD.png" alt="Adobe XD">
                        <img src="images\sketch.png" alt="Sketch">
                    </div>
                </div>
                <div class="images">
                    <img src="images\design1.jpg" alt="Design 1">
                    <img src="images\design2.jpg" alt="Design 2">
                    <img src="images\design3.jpg" alt="Design 3">
                    <img src="images\Darasalink5.png" alt="Design 4">
                    <img src="images\design4.jpg" alt="Design 5">
                    <img src="images\design6.png" alt="Design 6">
                </div>
            </div>
        </div>
        
        <div class="grid">
            <div class="card">
            <img src="images\mohammad-rahmani-nBXwqxjDa5c-unsplash 1.png" alt="User" class="gridimage">
                <h2>Crafting Digital Experiences That Works?</h2>
                <p>At Xiracom Limited, we design intuitive, user-friendly interfaces that look great and work even better. By blending creativity with technology,
                     we turn complex ideas into simple, engaging experiences that people love to use.</p>
                     <p>
                     Whether it’s a website, app, or software, we focus on usability, accessibility, and aesthetics 
                     to keep your users happy and coming back for more. 
                     Let’s create something amazing together.
                     </p>
            </div>
            <div class="card">
            <img src="images\design5.jpg" alt="User">
                <h4>Design that works. Experiences that inspire.</h4>
                <p>Crafting seamless solutions with innovation, transforming ideas into impactful experiences.</p>
            </div>
        </div>
        
        <div class="cta">
            <h2>Get in Touch</h2>
            <p>Ready to start with our Designs?</p>
            <button>Get Started</button>
        </div>
    </div>
</body>
</html>
@include("footer")