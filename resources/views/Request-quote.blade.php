@include("nav-bar2")
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

    <div class="container mt-5 ">
    <div class="card shadow p-4 rounded">
        <h2 class="text-center mb-4">Request Quote</h2>
        
        <form>
            <!-- Name Field -->
            <div class="mb-3">
                <label for="name" class="form-label">Your Name</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                    <input type="text" class="form-control" id="name" placeholder="Enter Your Name" required>
                </div>
            </div>

            <!-- Email Field -->
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
                    <input type="email" class="form-control" id="email" placeholder="Enter Your Email" required>
                </div>
            </div>

            <!-- Service Selection -->
            <div class="mb-3">
                <label for="service" class="form-label">Service</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-list"></i></span>
                    <select class="form-select" id="service" required>
                        <option value="" selected>Select a service</option>
                        <option value="web">Web Development</option>
                        <option value="design">UI/UX Design</option>
                        <option value="seo">SEO Optimization</option>
                    </select>
                </div>
            </div>

            <!-- Message Field -->
            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" rows="4" placeholder="Enter your message..." required></textarea>
            </div>

            <!-- Submit Button -->
            <div class="text-center">
                <button type="submit" class="btn btn-primary c-btm-button">
                    <i class="bi bi-send-fill"></i> Send Message
                </button>
            </div>
        </form>
    </div>
</div>

</body>
</html>
