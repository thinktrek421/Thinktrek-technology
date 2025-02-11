<?php
$msg ='';
if(isset($_POST['name']))
{
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "thinktrek_technology";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); // Exit if connection fails
}

// Get data from form (make sure form method is POST)
$name = $_POST['name']; // Name input field
$email = $_POST['email']; // Email input field
$phone = $_POST['phone']; // Email input field
$project = $_POST['project']; // Email input field
$subject = $_POST['subject']; // Email input field
$message = $_POST['message']; // Message input field

// Prepare SQL query to insert data into the table
$sql = "INSERT INTO  contact_form (name, email, phone, project, subject, message) VALUES ('$name', '$email', '$phone', '$project', '$subject',  '$message')";

// Execute the query and check if it was successful
if ($conn->query($sql) === TRUE) {
    $msg= "<span style='font-size: 25px; color:var(--bs-primary);
'>Message sent successfully.</span>"; // Success message
} else {
    echo "Error: " . $sql . "<br>" . $conn->error; // Error message
}

// Close the connection
$conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Contact Us | ThinkTrek Technology</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta name="keywords" content="ThinkTrek Technology contact, ThinkTrek Technology contact page, ThinkTrek Technology Company contact-us">
        <meta  name="description" content="Customer Service, Technical Support, Business support and Product Certification Related Questions, Thinktrek Technology Services Contact Us Page">

        <meta property="og:locale" content="en_US">
        <meta property="og:type" content="article">
        <meta property="og:title" content="Contact Us | ThinkTrek Technology">
        <meta property="og:description" content="Customer Service, Technical Support, Business support and Product Certification Related Questions, Thinktrek Technology Services Contact Us Page">
        <meta property="og:url" content="https://ThinkTrek.in/contact-us">
        <meta property="og:site_name" content="ThinkTrek Technology Services">
        <meta property="og:image:type" content="image/jpeg">
        <meta property="og:image:width" content="1200">
        <meta property="og:image:height" content="628">


        <!-- favicon icon -->
        <link rel="icon" type="image/x-icon" href="img\6.jpg">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="./css/style.css" rel="stylesheet">

        <!-- fontaw -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Topbar Start -->
        <?php include('header.php');?>

            <!-- Header Start -->
            <div class="container-fluid contact-bg-breadcrumb">
                <div class="container text-center py-5" style="max-width: 900px;">
                    <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Contact Us</h4>
                    <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item active text-primary">Contact</li>
                    </ol>    
                </div>
            </div>
            <!-- Header End -->
        <!-- Navbar & Hero End -->

        <!-- Contact Start -->
        <div class="container-fluid contact py-5">
            <h1 class="getin-touch">Get In Touch</h1>
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-xl-6">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <div class="bg-light rounded p-5 mb-5 contact-add">
                                <h4 class="text-dark mb-4">Get in Touch</h4>
                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <div class="contact-add-item">
                                            <div class="contact-icon text-primary mb-4">
                                                <i class="fas fa-map-marker-alt fa-2x"></i>
                                            </div>
                                            <div>
                                                <h4>Address</h4>
                                                <p class="mb-0">309, Vaikunth House,<br> 82-83, Nehru Place, New Delhi - 110019, India</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="contact-add-item">
                                            <div class="contact-icon text-primary mb-4">
                                                <i class="fas fa-envelope fa-2x"></i>
                                            </div>
                                            <div>
                                                <h4>Mail Us</h4>
                                                <p class="mb-0">support@think-trek.in</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="contact-add-item">
                                            <div class="contact-icon text-primary mb-4">
                                                <i class="fa fa-phone-alt fa-2x"></i>
                                            </div>
                                            <div>
                                                <h4>Telephone</h4>
                                                <p class="mb-0">+91-9811089029</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="contact-add-item">
                                            <div class="contact-icon text-primary mb-4">
                                                <i class="fab fa-firefox-browser fa-2x"></i>
                                            </div>
                                            <div>
                                                <h4>Think-Trek</h4>
                                                <p class="mb-0">(+012) 3456 7890</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="bg-light p-5 rounded h-100 wow fadeInUp" data-wow-delay="0.2s">
                                <h4 class="text-primary">Send Your Message</h4>
                                 <p class="mb-4">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a class="text-primary fw-bold" href="https://htmlcodex.com/contact-form">Download Now</a>.</p> 
                                <form>
                                    <div class="row g-4">
                                        <div class="col-lg-12 col-xl-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0" id="name" placeholder="Your Name">
                                                <label for="name">Your Name</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-xl-6">
                                            <div class="form-floating">
                                                <input type="email" class="form-control border-0" id="email" placeholder="Your Email">
                                                <label for="email">Your Email</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-xl-6">
                                            <div class="form-floating">
                                                <input type="phone" class="form-control border-0" id="phone" placeholder="Phone">
                                                <label for="phone">Your Phone</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-xl-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0" id="project" placeholder="Project">
                                                <label for="project">Your Project</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0" id="subject" placeholder="Subject">
                                                <label for="subject">Subject</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <textarea class="form-control border-0" placeholder="Leave a message here" id="message" style="height: 160px"></textarea>
                                                <label for="message">Message</label>
                                            </div>

                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100 py-3">Send Message</button>
                                        </div>
                                    </div>
                                </form>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                        <div class="bg-light p-5 rounded  wow fadeInUp" data-wow-delay="0.2s">
                                <h4 class="text-dark">Send Your Message</h4>
                                <!-- <p class="mb-4">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a class="text-primary fw-bold" href="https://htmlcodex.com/contact-form">Download Now</a>.</p> -->
                                <form action="" method="POST" name="sentMessage" id="contactForm">
                                    <?php echo $msg;?>
                                    <div class="row g-4">
                                        <div class="col-lg-12 col-xl-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0" id="name" placeholder="Your Name" name="name" required>
                                                <label for="name">Your Name</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-xl-6">
                                            <div class="form-floating">
                                                <input type="email" class="form-control border-0" id="email" placeholder="Your Email" name="email" required>
                                                <label for="email">Your Email</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-xl-6">
                                            <div class="form-floating">
                                                <input type="phone" class="form-control border-0" id="phone" placeholder="Phone" name="phone" required>
                                                <label for="phone">Your Phone</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-xl-6">
                                            <div class="form-floating">
                                             <!--    <input type="text" class="form-control border-0" id="project" placeholder="Project" name="project">
                                                <label for="project">Your Project</label> -->
                                                <select class="form-control border-0" id="project" placeholder="Project" name="project" required style="background-color:#fff;padding-top:5px;">
                                                    <label for="project">Your Project</label> 
                                                    <option>--Select Service--</option><i class="fas fa-chevron-up"></i>
                                                    <option>BIS Consultants</option>
                                                    <option>LMPC Approval</option>
                                                    <option>EPR Authorization</option>
                                                    <option>WPC Approval</option>
                                                    <option>ISI Certification</option>
                                                    <option>TEC Approval</option>
                                                    <option>FSSAI Certificate</option>
                                                    <option>CDSCO</option>
                                                    <option>BEE Registration</option>
                                                    <option>ISO</option>
                                                    <option>Testing</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0" id="subject" placeholder="Subject" name="subject" required>
                                                <label for="subject">Subject</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <textarea class="form-control border-0" placeholder="Leave a message here" id="message" name="message" style="height: 160px"></textarea>
                                                <label for="message">Message</label>
                                            </div>

                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100 py-3">Send Message</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                    </div>
                        <div class="rounded h-100">
                            <iframe class="rounded h-45 w-100" 
                            style="height: 450px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7009.420343931923!2d77.254125!3d28.54843!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce3c510a2de95%3A0xa3cbaca3dc761795!2sVaikunth%20House!5e0!3m2!1sen!2sin!4v1737967012642!5m2!1sen!2sin" width="600" height="450" 
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->

        <!-- Footer Start -->
          <?php include('footer.php');?>

        
        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>

</html>