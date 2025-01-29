@include("navigation-bar")

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UI/UX Design Landing Page</title>
    <link rel="stylesheet" href="style/uiuxdesign.css">
</head>
<body>
  <!-- Hero section -->
  <div class="hero-section">
            <img src="images\uiuxdesign.png" alt="Hardware and software maintenance services hero image" class="hero-image" />
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
                    <img src="images\imageui1.png" alt="Design 1">
                    <img src="images\imageui2.png" alt="Design 2">
                    <img src="images\imageui3.png" alt="Design 3">
                    <img src="images\imageui4.png" alt="Design 4">
                    <img src="images\imageui5.png" alt="Design 5">
                    <img src="images\imageui6.png" alt="Design 6">
                </div>
            </div>
        </div>
        
        <div class="grid">
            <div class="card">
                <h2>Why Choose Us?</h2>
                <p>We are committed to delivering cutting-edge solutions that meet your needs and exceed expectations.</p>
            </div>
            <div class="card">
                <h2>What is UI/UX Design?</h2>
                <p>UI/UX design enhances digital experiences to be more intuitive, engaging, and effective.</p>
            </div>
        </div>
        
        <div class="cta">
            <h2>Get in Touch</h2>
            <p>Ready to have the best UI/UX design? Here is a quick way to begin.</p>
            <button>Get Started</button>
        </div>
    </div>
    @include("footer")
</body>
</html>
