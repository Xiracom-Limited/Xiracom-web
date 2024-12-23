<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Quote</title>
    
    <!-- Bootstrap CSS -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style/requestquote.css">
</head>
<body>
    <!-- Navbar starts here -->
    <div class="header-wrapper">
        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/a5016053130a5fc70271270a2305caafee1ce05308b14e2bf7842f252a184fec?placeholderIfAbsent=true&apiKey=b253cd62eabd450abd701eab9cc667e8" alt="Company Logo" class="logo" />
        <nav class="nav-container">
            <div class="menu-wrapper">
                <a href="#" class="home-link">
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/d756e8c8126240957051134d6a08d14dc7246ef6a0fe66a1990f300025f683bd?placeholderIfAbsent=true&apiKey=b253cd62eabd450abd701eab9cc667e8" alt="Home Icon" class="home-icon" />
                </a>
                <a href="#" class="nav-link">About us</a>
                <a href="#" class="nav-link">Projects</a>
                <a href="#" class="nav-link">Our Services</a>
                <a href="#" class="nav-link">Sections</a>
                <a href="#" class="nav-link">Contact us</a>
            </div>
            <div class="auth-container">
                <div class="signup-wrapper">
                    <button class="get-started-btn">Get Started</button>
                </div>
            </div>
        </nav>
    </div>

    <!-- Hero section starts here -->
    <div class="hero-section">
        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/7d8aa47f859d67b9b2052c131c17d4be9a25254981be9df872173794e0c551e1?placeholderIfAbsent=true&apiKey=b253cd62eabd450abd701eab9cc667e8" alt="Hero Background" class="hero-bg" />
        <h1 class="hero-title">Request Quote</h1>
        <p class="hero-subtitle">Get a Personalized Quote for a Service</p>
    </div>

    <!-- Form title -->
    <h2 class="form-title">Request Quote</h2>

    <!-- Quote request form -->
    <form class="quote-form">
        <label for="name" class="form-label">Your Name</label>
        <div class="input-wrapper">
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/75dfa1ba39bf7a0f3adbe1bd4a95eaf0ceb33df61c1b087d998ad9733d375ef9?placeholderIfAbsent=true&apiKey=b253cd62eabd450abd701eab9cc667e8" alt="Name Icon" class="input-icon" />
            <input type="text" id="name" class="form-input" placeholder="Enter Your Name" required />
        </div>

        <label for="email" class="form-label">Mail</label>
        <div class="input-wrapper">
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/1d850fa04c3e189ee0f7d390bb7682efaa2f5c3fe61af2860ec4d18a72764681?placeholderIfAbsent=true&apiKey=b253cd62eabd450abd701eab9cc667e8" alt="Email Icon" class="input-icon" />
            <input type="email" id="email" class="form-input" placeholder="Email" required />
        </div>

        <label for="service" class="form-label">Service</label>
        <div class="select-wrapper">
            <select id="service" class="form-input" required>
                <option value="">Select</option>
                <!-- Add service options here -->
            </select>
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/564483bed361ace8ee24794bb3e98ed651d3b67dacd192f1b0bc31c594b038f7?placeholderIfAbsent=true&apiKey=b253cd62eabd450abd701eab9cc667e8" alt="Dropdown Icon" class="input-icon" />
        </div>

        <label for="message" class="form-label">Message</label>
        <textarea id="message" class="message-input" placeholder="Message" required></textarea>

        <button type="submit" class="submit-btn">Send Message</button>
    </form>
</body>
</html>
