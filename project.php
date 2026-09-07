<!DOCTYPE html>
<html lang="en">
<head>

    <?php include 'search.php';
    ?>
     <?php include 'subcription.php';
    ?>
     
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Portfolio</title>
    <link rel="stylesheet" href="style.css">
   
</head>
<body>
    
        <div class="header">
        <a href="project.php"><h1>.SparkF</h1></a>

            <form action="#" method="POST">
            <div class="search">
                <input type="text" name="search" placeholder="Search...">
                <button name="submit" class="search-btn">Search</button>
               
                </div> 
             </form>
              
            <button id="toggleButton" class="menubutton">
                <div class="menubar">
                    <div class="m1">___</div>
                    <div class="m2">___</div>
                    <div class="m3">___</div>
                </div>
            </button>
            <div class="login"><a href="signin.php">Login/Signup</a>
            <button onclick="window.location.href='selleracountsignin.php'" class="seller-btn">Seller account</button>
        </div>
        </div>

        <aside id="sidebar" class="sidebar">
            <ul>
                <li><a href="#Home">Home</a></li>
                <li><a href="aboutus.html">About us</a></li>
                <li><a href="#" id="hire-freelancer" target="_top">Hire Freelancer</a></li>
                <ul id="subList" style="display: none;">
                    <li><a href="webdeveloper.php" target="content-frame">Web Developer</a></li>
                    <li><a href="graphicdesigner.php">Graphic Designer</a></li>
                    <li><a href="contentwritter.php">Content Writer</a></li>
                </ul>
            </ul>
        </aside>

        <main>
        <div class="container">
            
            <section class="slider-container">
    <div class="slider">
        <div class="slides">
            <!-- Slide 1 -->
            <div class="slide">
                <img src="pictures/w2.jpg" alt="Slide 1">
                <div class="text-overlay">
                    <h2>SparkF Where talent meets success</h2>
                    <p>Discover Opportunities, Achieve More. Connect with clients who inspire you and take your skills or business to the next level with SparkF.</p>
                    <button onclick="window.location.href='signin.php'" class="join-btn">Join Us</button>
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="slide">
                <img src="pictures/org.jpeg" alt="Slide 2">
                <div class="text-overlay">
                    <h2>Connecting talent with vision"</h2>
                    <p>Find the best freelancers for your project</p>
                    <button onclick="window.location.href='signin.php'" class="join-btn">Join Us</button>
                </div>
            </div>
            <!-- Slide 3 -->
            <div class="slide">
                <img src="pictures/img.jpeg" alt="Slide 3">
                <div class="text-overlay">
                    <h2>Empower your skills, unlock  opportunities."</h2>
                    <p>Find the best, work with the best. Build your dreams with SparkF today."</p>
                    <button onclick="window.location.href='signin.php'"  class="join-btn">Register</button>
                </div>
            </div>
        </div>
        <!-- Navigation Arrows (Optional) -->
        <button class="prev">❮</button>
        <button class="next">❯</button>
    </div>
</section>


            <div class="services">
                <div class="service">
                    <img src="pictures/talent2.jpeg" alt="Web Development" width="100%">
                    <div class="text">
                    <h2>Are You Looking for a Job?</h2>
  <ul>
    <li></span>Are you a fresh graduate </span>eager to start your career?</li>
    <li>Looking for exciting opportunities to<span>grow and learn?</span> </li>
   <button  onclick="window.location.href='sellersignup.php'"  class="joinus-btn">Start Career</button>
  </ul>
                    </div>
                </div>
                <div class="service">
                  <div class="card"> 
                <h3>No Transaction Cost</h3>
                <p><span>There are no transaction costs to join.</span>  Simply register, browse talent profiles.</p>
            
                <h3>Browse Talent Profiles & Post Jobs</h3>
                <p><span>Find top talent</span> by browsing profiles. </p>
                 <h3>Affordable & Quality Work</h3>
                <p>Access skilled professionals without breaking the bank, no-payment cost</p>
                <button  onclick="window.location.href='#Home'"  class="hiretalent-btn">Hire talent</button>
            </div>

                    <img src="pictures/job.jpeg" alt="Graphic Design" width="100%">
                </div>
            </div>
            <section id="Home">
            <h1 class="category">Explore Top Talent Categories</h1>
            <div class="menu">
                
    <a href="webdeveloper.php" class="link1-btn">
        <img src="pictures/web.jpeg" alt="Web Developer">
        Web Developer
    </a>
    <a href="graphicdesigner.php" class="link-btn">
        <img src="pictures/w3.jpg" alt="Graphic Designer">
        Graphic Designer
    </a>
    <a href="contentwritter.php" class="link-btn">
        <img src="pictures/cont.png" alt="Content Writer">
        Content Writer
    </a>
</div>


                <!-- Profiles and subscription form -->
                 <h1 class="top-sellers">Our Top Seller's</h1>
                <div class="profile-container">
                  
                  <a href="webdeveloper.php"  class="profile">
                      <img src="pictures/d2.jpg" alt="Developer 2">
                      <h3>M. Ali </h3>
                      <p>Specializes in back-end development, designing robust server-side logic and APIs...</p>
                      
</a>
                           <a href="graphicdesigner.php" class="profile">
                    <img src="pictures/w2.jpg" alt="Developer 1">
                    <h3>Emily Davis </h3>
                    <p>A versatile graphic designer proficient in Adobe Illustrator and Photoshop. Expert in crafting impactful marketing materials and digital artwork....</p>
                  
</a>
                <a href="graphicdesigner.php" class="profile">
                    <img src="pictures/w3.jpg" alt="Developer 2">
                    <h3>Imran Ahemed</h3>
                    <p>Specializes in back-end development, designing robust server-side logic and APIs...</p>
                    
</a>
                <a href="webdevloper.php" class="profile">
                    <img src="pictures/d3.jpg" alt="content2">
                    <h3>Sarah Brown</h3>
                    <p>Full-stack developer with expertise in both front-end and back-end technologies...</p>
                   
</a>
               
                <div class="centered-section">
                  <form class="subcribe" action="#" method="post">
                  <h2>Subscribe to Our Newsletter</h2>
                
                      <label for="sub_email">Email:</label>
                      <input type="email" id="sub_email" name="email" required>
          
                      <button type="submit" class="btn" name="submit" >Subcribe</button>
                   </form> </div>
                </div>
                </section>
                </main>
                </div>
                
               
        </main>
    

        <footer class="footer">
    <div class="footer-column">
        <h3>FAQ</h3>
        <p>Got questions? Here are some answers to the most frequently asked questions:</p>
        <ul>
            <li>How do I use the service?</li>
            <li>How do I get started?</li>
            <li>What are the payment options?</li>
        </ul>
    </div>
    <div class="footer-column">
        <h3>Contact Us</h3>
        <p>If you have any questions or need assistance, you can reach us at:</p>
        <ul>
            <li>Email: support@sparkfreelance.com</li>
            <li>Phone: +1 (800) 123-4567</li>
            <li>Address: 123 Spark St., Freelance City, FC 98765</li>
        </ul>
    </div>
    <div class="footer-column">
        <h3>Terms of Use</h3>
        <p>Before using our services, please review the following terms:</p>
        <ul>
            <li>Terms of payment</li>
            <li>Usage rights and obligations</li>
            <li>Limitation of liability</li>
        </ul>
    </div>
    <div class="footer-column">
        <h3>Privacy Policy</h3>
        <p>Your privacy is important to us. Here's how we handle your data:</p>
        <ul>
            <li>We collect only necessary information.</li>
            <li>We protect your personal data with encryption.</li>
            <li>We do not share your data without your consent.</li>
        </ul>
    </div>
    <div class="footer-column">
        <h3>Refund Policy</h3>
        <p>We offer a 30-day refund policy under certain conditions:</p>
        <ul>
            <li>If you're not satisfied with our services.</li>
            <li>Requests must be made within 30 days of purchase.</li>
            <li>Refunds will be processed to the original payment method.</li>
        </ul>
    </div>
    <div class="center">
        <p>&copy; 2020 | Spark Freelance</p>
        <p>All rights reserved.</p>
    </div>
</footer>


    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const toggleButton = document.getElementById('toggleButton');
            const sidebar = document.getElementById('sidebar');
           
            
            toggleButton.addEventListener('click', () => {
                if (sidebar.style.left === '0px') {
                    sidebar.style.left = '-250px'; // Hide the sidebar
                } else {
                    sidebar.style.left = '0px'; // Show the sidebar
                }
            });

            

            const hireFreelancer = document.getElementById("hire-freelancer");
            const subList = document.getElementById("subList");

            hireFreelancer.addEventListener("click", (e) => {
                e.preventDefault(); // Prevent navigation to "hirefreelance.html"
                subList.style.display = subList.style.display === "block" ? "none" : "block";
            });
        });

        let index = 0; // Track which slide is currently visible

// Function to show slides
function showSlides() {
    const slides = document.querySelectorAll('.slide'); // Get all slides
    const totalSlides = slides.length;

    // If index exceeds total slides, reset to the first slide
    if (index >= totalSlides) {
        index = 0;
    }

    // If index is negative, reset to the last slide
    if (index < 0) {
        index = totalSlides - 1;
    }

    // Apply the transform property to move the slides
    document.querySelector('.slides').style.transform = `translateX(${-index * 100}%)`;
}

// Function to show the next slide
function nextSlide() {
    index++;
    showSlides();
}

// Function to show the previous slide
function prevSlide() {
    index--;
    showSlides();
}

// Initialize the slide display
showSlides();

// Automatically transition to the next slide every 3 seconds
setInterval(nextSlide, 3000); // Adjust the interval if needed

// Event listeners for manual navigation buttons
document.querySelector('.next').addEventListener('click', nextSlide);
document.querySelector('.prev').addEventListener('click', prevSlide);

    </script>
</body>
</html>

