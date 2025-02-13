@include("nav-bar2")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimonials & Feedbacks</title>
    <link rel="stylesheet" href="style/our-clients-testimonials.css">
    @vite(['resources/sass/app.scss','resources/js/app.js'])
</head>
<body>

<div class="hero mt-5">
        <h1>Testimonials and feedback</h1>
    </div>

    <div class="testimonials">
        <div class="testimonial-card">
            <img src="images\ascada.png" alt="User">
            <div class="testimonial-text">
                <h3>"Ascada school - Eldoret Kenya"</h3>
                <p>"Xiracom LTD has revolutionized our school’s operations with their Darasalink system, making administration seamless and efficient."</p>
                <p class="author">- Mary Njoroge, Principal, Greenfield Academy</p>
            </div>
        </div>

        <div class="testimonial-card">
            <img src="images\eavi.png" alt="User">
            <div class="testimonial-text">
                <h3>"East Africa Vision Institute - Eldoret Kenya"</h3>
                <p>"Xirocom LIMITED transformed our school with a seamless system. Their support was exceptional, and their team was very responsive. Highly recommended!"</p>
                <p class="author">- Mr.Bonface, Principal</p>
            </div>
        </div>

        <div class="testimonial-card">
            <img src="images\eyrie.png" alt="User">
            <div class="testimonial-text">
                <h3>"Eyrie Academy - Eldoret Kenya"</h3>
                <p>"Xirocom LIMITED transformed our school with a seamless system. Their support was exceptional, and their team was very responsive. Highly recommended!"</p>
                <p class="author">- Pst.Tonny Lukalo, Principal</p>
            </div>
        </div>

        <div class="testimonial-card">
            <img src="images\CUEA.jpeg" alt="User">
            <div class="testimonial-text">
                <h3>"AMACEA Pastoral Institute"</h3>
                <p>"Xirocom LIMITED transformed our school with a seamless system. Their support was exceptional, and their team was very responsive. Highly recommended!"</p>
                <p class="author">- Prof. Segeja, Principal, CUEA Gaba</p>
            </div>
        </div>
    </div>
</body>
</html>
@include("footer")