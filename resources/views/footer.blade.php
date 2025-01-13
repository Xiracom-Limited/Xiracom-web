<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
   <style>
    body {
    margin: 0;
    font-family: Arial, sans-serif;
}

.footer {
    background-color: #0b213d; /* Dark blue background */
    color: #ffffff; /* White text */
    padding: 20px 40px;
}

.footer-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    gap: 20px;
}

.footer-section {
    flex: 1;
    min-width: 200px;
}

.flogo {
    max-width: 150px;
}

.social-links {
    list-style: none;
    padding: 0;
    margin: 10px 0;
}

.social-links li {
    margin: 5px 0;
}

.social-links a {
    color: #ffffff;
    text-decoration: none;
    transition: color 0.3s ease;
}

.social-links a:hover {
    color: #00ff00; /* Green color on hover */
}

.footer-section h3 {
    color: #00ff00; /* Green headings */
    font-size: 1.2em;
    margin-bottom: 10px;
}

.footer-section ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.footer-section ul li {
    margin: 5px 0;
}

.footer-section ul li a {
    color: #ffffff;
    text-decoration: none;
    transition: color 0.3s ease;
}

.footer-section ul li a:hover {
    color: #00ff00;
}

.footer-bottom {
    margin-top: 20px;
    border-top: 1px solid #ffffff;
    padding-top: 10px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 10px;
    font-size: 0.9em;
}

.footer-bottom ul {
    list-style: none;
    display: flex;
    padding: 0;
    margin: 0;
    gap: 10px;
}

.footer-bottom ul li a {
    color: #ffffff;
    text-decoration: none;
    transition: color 0.3s ease;
}

.footer-bottom ul li a:hover {
    color: #00ff00;
}

   </style>
</head>
<body>
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-section logo-social">
                <img src="logo.png" alt="Xiracom Logo" class="flogo">
                <ul class="social-links">
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Tiktok</a></li>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">Facebook</a></li>
                </ul>
            </div>
            <div class="footer-section services">
                <h3>Our services</h3>
                <ul>
                    <li>UI design</li>
                    <li>UX design</li>
                    <li>Bulk SMS</li>
                    <li>Graphic designing</li>
                    <li>Web development</li>
                    <li>App development</li>
                    <li>Jobs and internship</li>
                </ul>
            </div>
            <div class="footer-section explore">
                <h3>Explore</h3>
                <ul>
                    <li>Design</li>
                    <li>Prototyping</li>
                    <li>Development features</li>
                    <li>Design systems</li>
                    <li>Collaboration features</li>
                    <li>Design process</li>
                    <li>Cybersecurity</li>
                </ul>
            </div>
            <div class="footer-section address">
                <h3>Address</h3>
                <p>Eldoret, Kenya</p>
                <p>+254704907565</p>
                <p><a href="mailto:info@xiracom.co.ke">info@xiracom.co.ke</a></p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>Copyright ©2025 Xiracom. All Rights Reserved</p>
            <ul>
                <li><a href="#">Terms and conditions</a></li>
                <li><a href="#">Policy</a></li>
            </ul>
        </div>
    </footer>
</body>
</html>
