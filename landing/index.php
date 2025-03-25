<?php
if(isset($_POST['log'])){
    header('location: ../db/login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Builder Landing Page</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="css\all.min.css">
    <link rel="stylesheet" href="css\fontawesome.min.css">
    <link rel="stylesheet" href="contact.css">
</head>
<body>
<header class="header">
  <div class="logo">
    <img src="images/logo.png" alt="mycv">
    <!-- <p>MY CV</p> -->
  </div>  

  <div class="mobile-menu">
    <span></span>
    <span></span>
    <span></span>
  </div>
  <nav class="nav-links">
    <ul>
        <li class="nav-link"><a href="#">Home</a></li>
        <li class="nav-link"><a href="#templates">Templates</a></li>
        <li class="nav-link"><a href="#features">Features</a></li>
        <li class="nav-link"><a href="#testimonial">Testimonials</a></li>
        <li class="nav-link"><a href="#contact">Contact</a></li>
    </ul>
  </nav>

 <form action="" class="register" method="post">
    <button type="sumbit" name="log">Login</button>
     <!-- <button>Signup</button> -->
  </form> 
</header>


    <header class="hero">
        <div class="container">
            <h1>Build Your Perfect CV in Minutes</h1>
            <p>Customize your CV with powerful tools and templates that showcase your professional journey.</p>
            <div class="cta-buttons">
                <a href="../db/signup.php" class="btn1">Get Started for Free</a>
                <a href="#templates" class="btn2">Explore Templates</a>
            </div>
            <div class="hero-preview">
                
            </div>
        </div>
    </header>

    <section class="features" id="features">
        <div class="container">
            <h2>Features Overview</h2>
            <div class="feature-carousel">
                <div class="feature">
                    <h3>Modern Templates</h3>
                    <p>Access a variety of designs tailored for every profession.</p>
                </div>
                <div class="feature">
                    <h3>One-Click Template Switching</h3>
                    <p>Switch between templates effortlessly without losing your data.</p>
                </div>
                <div class="feature">
                    <h3>No payment</h3>
                    <p>cv builder is free and hence any one can create their cv.</p>
                </div>
                <div class="feature">
                    <h3>User friendly</h3>
                    <p> cv buider provides  users with a friendly interface that facilitate cv building</p>
                </div>
                <div class="feature">
                    <h3>Download & Share</h3>
                    <p>Export your CV in pdf format for easy sharing.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="how-it-works">
        <div class="container">
            <h2>How It Works</h2>
            <div class="steps">
                <div class="step">
                    <h3>1. Sign Up</h3>
                    <p>Quick and easy registration.</p>
                </div>
                <div class="step">
                    <h3>2. Choose a Template</h3>
                    <p>Browse a library of professional designs.</p>
                </div>
                <div class="step">
                    <h3>3. Customize Your CV</h3>
                    <p>Add your information and personalize the design.</p>
                </div>
                <div class="step">
                    <h3>4. Download & Share</h3>
                    <p>Export your CV in pdf formats.</p>
                </div>
            </div>
            <div class="video-tutorial">
                <h3>Watch Our Tutorial</h3>
                <video controls style="width:500px; height:500px;">
                    <source src="media.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </section>

    <section class="template-library" id="templates">
        <div class="container">
            <h2>Template Library</h2>
            <div class="template-grid">
                <div class="template">
                    <img src="images/5.jpg" alt="Template 1">
                    <h4>Modern Template</h4>
                    
                </div>
                <div class="template">
                    <img src="images/11.jpg" alt="Template 2">
                    <h4>Classic Template</h4>
                    
                </div>
                <div class="template">
                    <img src="images/33.jpg" alt="Template 3">
                    <h4>Creative Template</h4>
                   
                </div>
                <div class="template">
                    <img src="images/33.jpg" alt="Template 4">
                    <h4>Professional Template</h4>
                    
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials" id="testimonial">
        <div class="container">
            <h2>User Testimonials</h2>
            <div class="testimonial-carousel">
                <div class="testimonial">
                    <p>"Thanks to this CV builder, I landed my dream job!"</p>
                    <h5>- Sarah Johnson, Marketing Manager</h5>
                </div>
                <div class="testimonial">
                    <p>"The templates are stunning and easy to customize!"</p>
                    <h5>- James Smith, Software Engineer</h5>
                </div>
                <div class="testimonial">
                    <p>"I love the auto-save feature, its a lifesaver!"</p>
                    <h5>- Emily Davis, Graphic Designer</h5>
                </div>
            </div>
        </div>
    </section>



 

    <section class="contact" id="contact">
        <h2>Contact Us</h2>

        <div class="contact-form">
            <form action = "https://formspree.io/f/xwplpnyy" method="post" class="contact-form">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Your Name" required>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Your Email" required>
              </div>
              <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" id="subject" name="subject" placeholder="Subject" required>
              </div>
              <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" placeholder="Your Message" rows="5" required></textarea>
              </div>
              <button type="submit">Send Message</button>
            </form>
          </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 CV Builder. All rights reserved.</p>
            <div class="footer-links">
                <a href="#">Privacy Policy</a>
                <a href="#">Terms of Service</a>
                <a href="#contact">Contact Us</a>
            </div>
            <div class="social-media">
                <a href="#">LinkedIn</a>
                <a href="#">Twitter</a>
                <a href="#">Facebook</a>
            </div>
        </div>
    </footer>



    <script>
        const mobileMenu = document.querySelector(".mobile-menu");
        const navlinks = document.querySelector(".nav-links");

        mobileMenu.addEventListener('click', ()=>{
            navlinks.classList.toggle('active');
            mobileMenu.classList.toggle('active');
        });

      const links = document.querySelectorAll('.nav-link');

      links.forEach(link => {
        link.addEventListener('click', ()=>{
            navlinks.classList.toggle('active');
            mobileMenu.classList.remove('active');
        });
      });

      window.addEventListener('scroll', ()=>{
        if(window.scrollY = 'active'){
            navlinks.classList.remove('active');
            mobileMenu.classList.remove('active');
        }
        });
    </script>
</body>
</html>
