<?php
function nrVizitave() {
    $numroHits = isset($_COOKIE['numro']) ? $_COOKIE['numro'] : 0;
    $numroHits++;

    setcookie('numro', $numroHits, time() + 86400 * 30);

    echo "Ju keni vizituar faqën tonë: " . $numroHits . " herë.";
}

$servername = "127.0.0.1";  
$username = "root";  
$password = "";
$dbname = "aboutdatabase";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_errno . " - " . $conn->connect_error);
}

function sanitizeData($data) {
    return htmlspecialchars(trim($data));
}

function processContactForm() {
    global $conn;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $message = sanitizeData($_POST['contact_message']);
        $message = $conn->real_escape_string($message);

        $sql = "INSERT INTO contact_requests (message) VALUES ('$message')";

        if ($conn->query($sql) === TRUE) {
            echo "Contact request submitted successfully!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

processContactForm();

$conn->close();
?>





<!DOCTYPE html>
<html>
    <head>
        <title>ED-Learn About-Us</title>
        <link rel="stylesheet" href="aboutstyle.css">
        <script src="about.js"></script>
    </head>
    <body>
        <header>
 <!--Navigation bar dhe search-->


             <div class="nav">
                 <a class="active" href="Home.php">Home</a>
                <a href="about.php">About</a>
                <a href="Courses.php">All Courses</a>
                <a href="Contact.php">Contact</a>
                <a href="news.php">News</a>
                <a href="DashboardPage.php">Dashboard</a>
                <div class="search">
               
                    <input type="text" placeholder="Search.." name="search">
              
                </div>
             </div>
    <!--fillimi faqes-->    
      <div class="bgfoto">
          <input type="text" placeholder="About us" style="height: 20px;">
          <button class="butoni_bg">
      </div>  
      <p1><?php nrVizitave(); ?></p1>
      <!--SlideShow--> 
      
     
      <h1>Advantages of Online Learning</h1>
      <div class="slideshow-container">

        
        <div class="mySlides fade">
          <div class="numbertext">1 / 6</div>
          <img src="1.jpg" style="width:100%">
          <div class="text">Foto1</div>
        </div>
      
        <div class="mySlides fade">
          <div class="numbertext">2 / 6</div>
          <img src="2.jpg" style="width:100%">
          <div class="text">Foto2</div>
        </div>
      
        <div class="mySlides fade">
          <div class="numbertext">3 / 6</div>
          <img src="3.jpg" style="width:100%">
          <div class="text">Foto3</div>
        </div>
        <div class="mySlides fade">
          <div class="numbertext">4 / 6</div>
          <img src="4.jpg" style="width:100%">
          <div class="text">Foto4</div>
        </div>
        <div class="mySlides fade">
          <div class="numbertext">5 / 6</div>
          <img src="5.jpg" style="width:100%">
          <div class="text">Foto5</div>
        </div>
        <div class="mySlides fade">
          <div class="numbertext">6 / 6</div>
          <img src="6.jpg" style="width:100%">
          <div class="text">Foto6</div>
        </div>
      
        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div>
      <br>
      
      <!-- The dots/circles -->
      <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
      </div>
    <!-- about us -->
    
    <section class="about-us">
      <div class="row" >
        <div class="about-col" >
          <h1>We are the best E-Learning platform!</h1>
          <p>E-learning is a learning environment which uses information and communication technologies (ICT's) as a platform for teaching and learning activities. It has been defined as "pedagogy empowered by technology", though 'digital technology' is more accurate. Note that, due to the difference in terms of institutional goals, higher education and the industry have very different ideas about what e-learning is and how e-learning can be/should be used.</p>
          <div class="Contact Us">
            <button class="Contact Us "> <a href="Contact.php" style="color: rgb(233, 8, 8);"><span>Contact for more</span></a> </button>
        </div>
        </div>
    </section>
      
      <!-- campus-->
    <section class="campus">
      <h1>Our offers</h1>
      <p>Choose your way of learning</p>
      <div class="row">
        <div class="campus-col">
          <a href="https://www.youtube.com/watch?v=iu4Q_DZZcZY" target="_blank">
              <img src="image1.jpg" alt="">
              <div class="layer">
                  <h3>Learn in a group</h3>
              </div>
          </a>
      </div>
        <div class="campus-col">
          <a href="https://www.youtube.com/results?search_query=review+courses" target="_blank">
          <img src="image2.jpg" alt="">
          <div class="layer">
            <h3>Review courses</h3>
          </div>
        </div>
        <div class="campus-col">
          <a href="https://www.youtube.com/results?search_query=learn+online" target="_blank">
          <img src="image3.jpg" alt="">
          <div class="layer">
            <h3>Learn online</h3>
          </div>
        </div>
      </div>
    </section>
    

 



    <!--foter-->
    <footer>
        <div class="content">
        <div class="social-media">
            <h4>Social</h4>
            <p>
              <a><i class="fab fa-twitter"></i>  Twitter</a> 
            </p>
            <p>
            <a><i class="fab fa-youtube"></i>  YouTube</a>
            </p>
            <p>
           <a><i class="fab fa-facebook-f"></i>  Facebook</a> 
            </p>
            <p>
          <a>  <i class="fab fa-instagram"></i>   Instagram</a>
            </p>
          </div>

          <div class="links">
            <h4>Quick links</h4>

            <p><a>Home</a></p>
            <p><a>About</a></p>
            <p><a>Blogs</a></p>
            <p><a>Contact</a></p>

          </div>

          <div class="info">
            <h4 class="address">Address</h4>
            <p><a><!--<i class="fab fa-location"></i>-->
                Kosove, Prishtine, 10000</a>
            </p>
            <h4 class="mobile">Mobile</h4>
            <p><a><!--<i class="fab fa-phone"></i>-->+383 45200300</a></p>
            <h4 class="mail">Email</h4>
            <p><a><!--<i class="fab fa-envelope"></i>-->EDlearn@gmail.com</a></p>
          </div>
        </div>
        </footer>
        
    </body>

    <!--prove-->