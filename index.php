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
$message = $_POST['message']; // Message input field

// Prepare SQL query to insert data into the table
$sql = "INSERT INTO popup_form (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";

// Execute the query and check if it was successful
if ($conn->query($sql) === TRUE) {
    $msg= "<span style='font-size:18px; color:var(--bs-primary);
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
        <title>BIS Certification | ISI Mark Certification | WPC Approval Consultant | ISO Certification | TEC Approval | EPR Authorization | BEE Registration.
        </title>
        <!-- meta start -->
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta name="keywords" content="BIS Certification Consultant in India, LMPC Certification, EPR Authorization, battery waste, E-waste, plastic waste,  WPC Approval, ISI Mark certification, BIS Registration, TEC Approval, Fssai Certificate, CDSCO Certificate,  BEE Registration, ISO certificate and Testing Services in India.">

        <meta name="description" content="Thinktrek Technology Services  (BIS) has implemented the Compulsory Registration Scheme (CRS) to ensure that electronic and IT products meet Indian safety standards. Manufacturers must obtain BIS registration before selling or distributing these products in India.">


        <meta property="og:locale" content="en_US">
        <meta property="og:type" content="article">
        <meta property="og:title" content="BIS Certification India | ISI Mark Certification India | WPC Approval Consultant India | ISO Certification India | TEC Approval India | EPR Authorization India | BEE Registration India.">
        <meta property="og:description" content="Thinktrek Technology Services has implemented the Compulsory Registration Scheme (CRS) to ensure that electronic and IT products meet Indian safety standards. Manufacturers must obtain BIS registration before selling or distributing these products in India.">
        <meta property="og:url" content="https://Thinktrek.in">
        <meta property="og:site_name" content="ThinkTrek Technology Services" />
        <meta property="og:image" content="">
        <meta property="og:image:secure_url" content="">
        <meta property="og:image:type" content="image/jpeg">
        <meta property="og:image:width" content="1200" />
        <meta property="og:image:height" content="628" />

        <!-- favicon icon -->
        <link rel="icon" type="image/x-icon" href="img\6.jpg">
   
        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
          <!--  -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0&family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,1,0" />

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link rel="stylesheet" href="lib/animate/animate.min.css"/>
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">

        <!-- chat box .css -->
        <link rel="stylesheet" href="./css/chatbox.css" />

        <!--  -->
        <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">

        <!--  -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/css/intlTelInput.css">
        
        <!-- fontaw -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>

    <body>
         <!-- timer popup strat -->
           <div class="popup">
           <div class="contact-box" style="max-width:900px; max-height:600px;">
            <div class="left" style="background: url(img/goalspopup.png) no-repeat center;background-size:cover; height:100%;margin: 40px;">
                <!-- <img src="img/logo-2.png" alt="Logo">  -->
            </div>
            <div class="right">
                <button id="close">&times;</button>
                <h2 class="pop-contact-us">Contact Us</h2>
                <form action="" method="POST" name="sentMessage" id="contactForm1">
                  <div><?php echo $msg;?></div>
                  <input type="text" id="name" class="field" placeholder="Your Name" name="name" required>

                  <input type="email" id="email" class="field" placeholder="Your Email" name="email" required>

                   <!-- <input type="phone" id="phone" name="phone" class="field" placeholder="Phone" required> -->
                    <input id="phone" type="phone" name="phone"  required class="field"><br>
                  <span id="valid-msg" class="hide">✓ Valid</span>
                  <span id="error-msg" class="hide"></span>  

                  <textarea id="message" placeholder="Required" class="field field-textarea" name="message" required></textarea>
                  <button type="submit" class="btn-send-pop">Send</button>
                </form>
            </div>
        </div>
    </div>
        <!-- timer popup end -->

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Topbar Start -->
            <?php include('header.php');?>

            <!-- Carousel Start -->
            <div class="header-carousel owl-carousel">
                <div class="header-carousel-item">
                    <img src="img/close-up-hand-holding-clipboard.jpg" class="img-fluid w-100" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row g-5">
                                <div class="col-12 animated fadeInUp">
                                    <div class="text-center">
                                        <h4 class="text-primary text-uppercase fw-bold mb-4">Welcome To thinkTrek | Technology</h4>
                                        <h1 class="display-4 text-uppercase text-white mb-4">ThinkTrek Technology Services.</h1>
                                        <p class="mb-5 fs-5">Get certified today and ensure peace of mind for you and your customers. 
                                        </p>
                                        <div class="d-flex justify-content-center flex-shrink-0 mb-4">
                                            <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2" href="#">SERVICES</a>
                                            <a class="btn btn-primary rounded-pill py-3 px-4 px-md-5 ms-2" href="#">GET STARTED NOW</a>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-center">
                                            <h2 class="text-white me-2">Follow Us:</h2>
                                            <div class="d-flex justify-content-end ms-2">
                                                <a class="btn btn-md-square btn-light rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                                                <a class="btn btn-md-square btn-light rounded-circle mx-2" href=""><i class="fa-brands fa-x-twitter"></i></a>
                                                <a class="btn btn-md-square btn-light rounded-circle mx-2" href=""><i class="fab fa-instagram"></i></a>
                                                <a class="btn btn-md-square btn-light rounded-circle ms-2" href=""><i class="fab fa-linkedin-in"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-carousel-item">
                    <img src="img/close-up-hand-typing-calculator.jpg" class="img-fluid w-100" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row g-5">
                                <div class="col-12 animated fadeInUp">
                                    <div class="text-center">
                                        <h4 class="text-primary text-uppercase fw-bold mb-4">Welcome To thinkTrek | Technology</h4>
                                        <h1 class="display-4 text-uppercase text-white mb-4">ThinkTrek Technology Services.</h1>
                                        <p class="mb-5 fs-5">Get certified today and ensure peace of mind for you and your customers. 
                                        </p>
                                        <div class="d-flex justify-content-center flex-shrink-0 mb-4">
                                            <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2" href="#">ABOUT US</a>
                                            <a class="btn btn-primary rounded-pill py-3 px-4 px-md-5 ms-2" href="#">GET STARTED NOW</a>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-center">
                                            <h2 class="text-white me-2">Follow Us:</h2>
                                            <div class="d-flex justify-content-end ms-2">
                                                <a class="btn btn-md-square btn-light rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                                                <a class="btn btn-md-square btn-light rounded-circle mx-2" href=""><i class="fa-brands fa-x-twitter"></i></a>
                                                <a class="btn btn-md-square btn-light rounded-circle mx-2" href=""><i class="fab fa-instagram"></i></a>
                                                <a class="btn btn-md-square btn-light rounded-circle ms-2" href=""><i class="fab fa-linkedin-in"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Carousel End -->
        <!-- Navbar & Hero End -->


        <!-- Abvout Start -->
        <div class="container-fluid about py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-xl-7 wow fadeInLeft" data-wow-delay="0.2s">
                        <div>
                            <!-- <h4 class="text-primary">About ThinkTrek</h4> -->
                            <h1 class="display-5 mb-4">Meet our company unless miss the opportunity</h1>
                            <p class="mb-4">ThinkTrek Technology Services is Delhi based consultancy company founded in 2017 by Mr. Sudhanshu Kaushik provide quality services focus with customer satisfaction and our associate company is Fairmount as well. We are in the field of consultancy since 2011 in the name of Fair Quality Services, previously we are serving clients in System Certification, NABL Accreditation, CE Marking and ISI marking. In 2017 shutdown Fair Quality Services and started new Company in the name of Thinktrek Technology Services and Fairmount accelerated consultancy serving clients Product Certification as per products requirements, system certification, Inspection and validattion
                            </p>
                            <div class="row g-4">
                                <div class="col-md-6 col-lg-6 col-xl-6">
                                    <div class="d-flex">
                                        <div><i class="fas fa-lightbulb fa-3x text-primary"></i></div>
                                        <div class="ms-4">
                                            <h4>Business Consuluting</h4>
                                            <p>"Providing tailored strategies and innovative solutions to help businesses achieve growth, optimize operations, and unlock their full potential."
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-6">
                                    <div class="d-flex">
                                        <div><i class="bi bi-bookmark-heart-fill fa-3x text-primary"></i></div>
                                        <div class="ms-4">
                                            <h4>Year Of Expertise</h4>
                                            <p>"Backed by [X] years of expertise, delivering proven strategies and impactful solutions to drive sustainable business growth."</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <a href="#" class="btn btn-primary rounded-pill py-3 px-5 flex-shrink-0">Discover Now</a>
                                </div>
                                <div class="col-sm-6">
                                    <div class="d-flex">
                                        <i class="fas fa-phone-alt fa-2x text-primary me-4"></i>
                                        <div>
                                            <h4>Call Us</h4>
                                            <p class="mb-0 fs-5" style="letter-spacing: 1px;">+91-9811089029</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 wow fadeInRight" data-wow-delay="0.2s">
                        <div class="bg-primary rounded position-relative overflow-hidden">
                            <img src="img/about.png" class="img-fluid rounded rotate-image w-100" alt="Loading">
                            <img src="img/whatlogo.png" class="img-fluid rounded fixed-logo-img" alt="Loading" >
                            
                            
                            <!-- <div class="" style="position: absolute; top: -15px; right: -15px;">
                                <img src="img/about-3.png" class="img-fluid" style="width: 150px; height: 150px; opacity: 0.7;" alt="">
                            </div>
                            <div class="" style="position: absolute; top: -20px; left: 10px; transform: rotate(90deg);">
                                <img src="img/about-4.png" class="img-fluid" style="width: 100px; height: 150px; opacity: 0.9;" alt="">
                            </div>
                            <div class="rounded-bottom">
                                <img src="img/about-5.jpg" class="img-fluid rounded-bottom w-100" alt="">
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- counter start -->
        <div class="container-fluid faq-section pb-5">
            <div class="pb-5 overflow-hidden">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <!-- <h4 class="text-primary">FAQs</h4> -->
                    <h1 class="display-5 mb-4">Doing the right thing, at the right time.</h1>
                    <p class="mb-0">It seems like you're looking for assistance in writing the content for an FAQ (Frequently Asked Questions) section for something called "ThinkTrek." Could you provide more context about what ThinkTrek is about? Is it a brand, a product, a service, or a project? Once I have that info, I can help create relevant FAQ content!
                    </p>
                </div>
                 <div class="counter-wrapper wow fadeInUp" style="background-image: url(img/success.jpg);">
                    <div class="counter">
                        <h1 class="count" data-target="600"><i class="fa fa-plus"></i>0</h1>
                        <p><i class="fa fa-briefcase icon-complet"></i>
                         Projects Completed</p>
                    </div>
                    <div class="counter">
                        <h1 class="count" data-target="300"><i class="fa fa-plus"></i>0</h1>
                        <p><i class="fa fa-users icon-complet"></i> Happy Clients</p>
                    </div>
                    <div class="counter">
                        <h1 class="count" data-target="5500">0<i class="fa-solid fa-plus"></i></h1>
                        <p><i class="fa fa-user icon-complet"></i> Visiting  Members</p>
                    </div>
                    <div class="counter">
                        <h1 class="count" data-target="732">0</h1>
                        <p><i class="fa fa-clock icon-complet"></i> Hours Of Expertise</p>
                    </div>
               </div>
                    
            </div>
        </div>

        <!-- counter end -->


        <!-- Services Start -->
        <div class="container-fluid service pb-5">
            <div class="container pb-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <!-- <h4 class="text-primary">Our Services</h4> -->
                    <h1 class="display-5 mb-4">Our Services</h1>
                    <p class="mb-0">
                     "We provide expert guidance on product certification, ensuring your products meet industry standards and regulatory requirements. From compliance assessment to certification process support, we help streamline approvals and build customer trust."
                    </p>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="img/new (1).png" class="img-fluid rounded-top w-100" alt="Image">
                            </div>
                            <div class="rounded-bottom p-4">
                                <a href="#" class="h4 d-inline-block mb-4"> BIS Consultants</a>
                                <p class="mb-4">BIS Certification consultants (Bureau of Indian Standards) is India's National Standard Body responsible for the smooth development of standardisation, marking, and quality registration activities in consumer products.s,
                                </p>
                                <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="img/new (7).png" class="img-fluid rounded-top w-100" alt="Image">
                            </div>
                            <div class="rounded-bottom p-4">
                                <a href="#" class="h4 d-inline-block mb-4">LMPC Approval</a>
                                <p class="mb-4">Legal Metrology is the system of measuring and weighing in India under the Legal Metrology Act, 2009. Its objective is to ensure uniform standards of weights and measures provided to the consumers in India.
                                </p>
                                <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="img/new (4).png" class="img-fluid rounded-top w-100" alt="Image">
                            </div>
                            <div class="rounded-bottom p-4">
                                <a href="#" class="h4 d-inline-block mb-4">EPR Authorization</a>
                                <p class="mb-4">The EPR (Extended Producer Responsibility) rules govern E-Waste (Management and Handling) in 2011. According to this rule, the manufacturers of electrical or electronic equipment are responsible equipment.                                </p>
                                <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="img/new (9).png" class="img-fluid rounded-top w-100" alt="Image">
                            </div>
                            <div class="rounded-bottom p-4">
                                <a href="#" class="h4 d-inline-block mb-4">WPC Approval</a>
                                <p class="mb-4">WPC is a Ministry of Communication Wing and a National Radio Regulatory Authority involved in Frequency Spectrum Management. While meeting the needs of wireless WPC technology consumers.
                                </p>
                                <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="img/new (6).png" class="img-fluid rounded-top w-100" alt="Image">
                            </div>
                            <div class="rounded-bottom p-4">
                                <a href="#" class="h4 d-inline-block mb-4">ISI Certification</a>
                                <p class="mb-4">Registration of the ISI mark is required for all certifying products sold in India. The mark is intended to improve product quality and safety. ISI-certified products indicate that they meet Indian quality standards.
                                </p>
                                <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="img/new (8).png" class="img-fluid rounded-top w-100" alt="Image">
                            </div>
                            <div class="rounded-bottom p-4">
                                <a href="#" class="h4 d-inline-block mb-4">TEC Approval</a>
                                <p class="mb-4">WPC is a Ministry of Communication Wing and a National Radio Regulatory Authority involved in Frequency Spectrum Management. While meeting the needs of wireless WPC technology consumers.
                                </p>
                                <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="img/new (5).png" class="img-fluid rounded-top w-100" alt="Image">
                            </div>
                            <div class="rounded-bottom p-4">
                                <a href="#" class="h4 d-inline-block mb-4">FSSAI Certificate</a>
                                <p class="mb-4">WPC is a Ministry of Communication Wing and a National Radio Regulatory Authority involved in Frequency Spectrum Management. While meeting the needs of wireless WPC technology consumers.
                                </p>
                                <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="img/new (2).png" class="img-fluid rounded-top w-100" alt="Image" style="padding:60px 110px;">
                            </div>
                            <div class="rounded-bottom p-4">
                                <a href="#" class="h4 d-inline-block mb-4">CDSCO</a>
                                <p class="mb-4">WPC is a Ministry of Communication Wing and a National Radio Regulatory Authority involved in Frequency Spectrum Management. While meeting the needs of wireless WPC technology consumers.
                                </p>
                                <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="img/new (10).png" class="img-fluid rounded-top w-100" alt="Image" style="padding:60px 110px;">
                            </div>
                            <div class="rounded-bottom p-4">
                                <a href="#" class="h4 d-inline-block mb-4">BEE Registration</a>
                                <p class="mb-4">The Bureau of Energy Efficiency of India provides BEE certification to manufacturers of electronic and electrical appliances. It does so by rating the energy are they efficiency of appliances.
                                </p>
                                <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="img/iso.jpg" class="img-fluid rounded-top w-100" alt="Image">
                            </div>
                            <div class="rounded-bottom p-4">
                                <a href="#" class="h4 d-inline-block mb-4">ISO</a>
                                <p class="mb-4">ISO certification is a globally recognized standard that ensures quality, safety, and efficiency in business processes. international standards like ISO 9001 (Quality Management) and ISO 27001 (Information Security).
                                </p>
                                <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="img/testing.jpg" class="img-fluid rounded-top w-100" alt="Image">
                            </div>
                            <div class="rounded-bottom p-4">
                                <a href="#" class="h4 d-inline-block mb-4">Testing</a>
                                <p class="mb-4">Product testing is a crucial process that evaluates a product’s quality,  and reliability before it reaches the market. It involves various testing methods to the identify  customer trust.
                                </p>
                                <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services End -->

        <!-- Features Start -->
        <div class="container-fluid feature pb-5">
            <div class="container pb-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <!-- <h4 class="text-primary">Our Features</h4> -->
                    <h1 class="display-5 mb-4">Our Features</h1>
                    <p class="mb-0">
                     ThinkTrek Technology offers innovative and scalable solutions designed to empower businesses in the digital age. With seamless integration capabilities, our technology enhances operational efficiency and enables real-time insights for informed decision-making. Our solutions are built with security at the forefront, ensuring the protection of your valuable data. Whether you're looking to drive business transformation, streamline processes, or scale your operations, ThinkTrek Technology is the reliable partner you need to stay ahead in a competitive marketplace."
                    </p>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="feature-item p-4">
                            <div class="feature-icon p-4 mb-4">
                                <i class="fas fa-chart-line fa-4x text-primary"></i>
                            </div>
                            <h4>Global Management</h4>
                            <p class="mb-4">"Driving excellence through seamless global management solutions for businesses worldwide."
                            </p>
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="feature-item p-4">
                            <div class="feature-icon p-4 mb-4">
                                <i class="fas fa-university fa-4x text-primary"></i>
                            </div>
                            <h4>business support</h4>
                            <p class="mb-4">"Providing reliable business support to enhance operations, drive growth, and ensure success."
                            </p>
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="feature-item p-4">
                            <div class="feature-icon p-4 mb-4">
                                <i class="fas fa-file-alt fa-4x text-primary"></i>
                            </div>
                            <h4>Asset Management</h4>
                            <p class="mb-4">
                             "Optimizing asset performance to maximize value and ensure long-term financial success."
                            </p>
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="feature-item p-4">
                            <div class="feature-icon p-4 mb-4">
                                <i class="fas fa-hand-holding-usd fa-4x text-primary"></i>
                            </div>
                            <h4>Investment Bank</h4>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea hic laborum odit pariatur...
                            </p>
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Features End -->


        <!-- Offer Start -->
        <!-- <div class="container-fluid offer-section pb-5">
            <div class="container pb-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">Our Offer</h4>
                    <h1 class="display-5 mb-4">Benefits We offer</h1>
                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.
                    </p>
                </div>
                <div class="row g-5 align-items-center">
                    <div class="col-xl-5 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="nav nav-pills bg-light rounded p-5">
                            <a class="accordion-link p-4 active mb-4" data-bs-toggle="pill" href="#collapseOne">
                                <h5 class="mb-0">Lending money for investment of your new projects</h5>
                            </a>
                            <a class="accordion-link p-4 mb-4" data-bs-toggle="pill" href="#collapseTwo">
                                <h5 class="mb-0">Lending money for investment of your new projects</h5>
                            </a>
                            <a class="accordion-link p-4 mb-4" data-bs-toggle="pill" href="#collapseThree">
                                <h5 class="mb-0">Mobile payment is more flexible and easy for all investors</h5>
                            </a>
                            <a class="accordion-link p-4 mb-0" data-bs-toggle="pill" href="#collapseFour">
                                <h5 class="mb-0">all transaction is kept free for the member of pro traders</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-7 wow fadeInRight" data-wow-delay="0.4s">
                        <div class="tab-content">
                            <div id="collapseOne" class="tab-pane fade show p-0 active">
                                <div class="row g-4">
                                    <div class="col-md-7">
                                        <img src="img/offer-1.jpg" class="img-fluid w-100 rounded" alt="">
                                    </div>
                                    <div class="col-md-5">
                                        <h1 class="display-5 mb-4">The stock market provides a venue...</h1>
                                        <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis amet sequi molestiae tenetur eum mollitia, blanditiis, magnam illo magni error dolore unde perspiciatis tempore et totam corrupti dignissimos aut praesentium?
                                        </p>
                                        <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                                    </div>
                                </div>
                            </div>
                            <div id="collapseTwo" class="tab-pane fade show p-0">
                                <div class="row g-4">
                                    <div class="col-md-7">
                                        <img src="img/offer-2.jpg" class="img-fluid w-100 rounded" alt="">
                                    </div>
                                    <div class="col-md-5">
                                        <h1 class="display-5 mb-4">The stock market provides a venue...</h1>
                                        <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis amet sequi molestiae tenetur eum mollitia, blanditiis, magnam illo magni error dolore unde perspiciatis tempore et totam corrupti dignissimos aut praesentium?
                                        </p>
                                        <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                                    </div>
                                </div>
                            </div>
                            <div id="collapseThree" class="tab-pane fade show p-0">
                                <div class="row g-4">
                                    <div class="col-md-7">
                                        <img src="img/offer-3.jpg" class="img-fluid w-100 rounded" alt="">
                                    </div>
                                    <div class="col-md-5">
                                        <h1 class="display-5 mb-4">The stock market provides a venue...</h1>
                                        <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis amet sequi molestiae tenetur eum mollitia, blanditiis, magnam illo magni error dolore unde perspiciatis tempore et totam corrupti dignissimos aut praesentium?
                                        </p>
                                        <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                                    </div>
                                </div>
                            </div>
                            <div id="collapseFour" class="tab-pane fade show p-0">
                                <div class="row g-4">
                                    <div class="col-md-7">
                                        <img src="img/offer-4.jpg" class="img-fluid w-100 rounded" alt="">
                                    </div>
                                    <div class="col-md-5">
                                        <h1 class="display-5 mb-4">The stock market provides a venue...</h1>
                                        <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis amet sequi molestiae tenetur eum mollitia, blanditiis, magnam illo magni error dolore unde perspiciatis tempore et totam corrupti dignissimos aut praesentium?
                                        </p>
                                        <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 -->        <!-- Offer End -->

        <!-- Blog Start -->
        <!-- <div class="container-fluid blog pb-5">
            <div class="container pb-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">Our Blog & News</h4>
                    <h1 class="display-5 mb-4">Articles For Pro Traders</h1>
                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.
                    </p>
                </div>
                <div class="owl-carousel blog-carousel wow fadeInUp" data-wow-delay="0.2s">
                    <div class="blog-item p-4">
                        <div class="blog-img mb-4">
                            <img src="img/service-1.jpg" class="img-fluid w-100 rounded" alt="">
                            <div class="blog-title">
                                <a href="#" class="btn">Dividend Stocks</a>
                            </div>
                        </div>
                         <a href="#" class="h4 d-inline-block mb-3">Options Trading Business?</a>
                        <p class="mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore aut aliquam suscipit error corporis accusamus labore....
                        </p>
                        <div class="d-flex align-items-center">
                            <img src="img/testimonial-1.jpg" class="img-fluid rounded-circle" style="width: 60px; height: 60px;" alt="">
                            <div class="ms-3">
                                <h5>Admin</h5>
                                <p class="mb-0">October 9, 2025</p>
                            </div>
                        </div> 
                    </div>
                    <div class="blog-item p-4">
                        <div class="blog-img mb-4">
                            <img src="img/service-2.jpg" class="img-fluid w-100 rounded" alt="">
                            <div class="blog-title">
                                <a href="#" class="btn">Non-Dividend Stocks</a>
                            </div>
                        </div>
                        <a href="#" class="h4 d-inline-block mb-3">Options Trading Business?</a>
                        <p class="mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore aut aliquam suscipit error corporis accusamus labore....
                        </p>
                        <div class="d-flex align-items-center">
                            <img src="img/testimonial-2.jpg" class="img-fluid rounded-circle" style="width: 60px; height: 60px;" alt="">
                            <div class="ms-3">
                                <h5>Admin</h5>
                                <p class="mb-0">October 9, 2025</p>
                            </div>
                        </div>
                    </div>
                    <div class="blog-item p-4">
                        <div class="blog-img mb-4">
                            <img src="img/service-3.jpg" class="img-fluid w-100 rounded" alt="">
                            <div class="blog-title">
                                <a href="#" class="btn">Dividend Stocks</a>
                            </div>
                        </div>
                        <a href="#" class="h4 d-inline-block mb-3">Options Trading Business?</a>
                        <p class="mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore aut aliquam suscipit error corporis accusamus labore....
                        </p>
                        <div class="d-flex align-items-center">
                            <img src="img/testimonial-3.jpg" class="img-fluid rounded-circle" style="width: 60px; height: 60px;" alt="">
                            <div class="ms-3">
                                <h5>Admin</h5>
                                <p class="mb-0">October 9, 2025</p>
                            </div>
                        </div>
                    </div>
                    <div class="blog-item p-4">
                        <div class="blog-img mb-4">
                            <img src="img/service-4.jpg" class="img-fluid w-100 rounded" alt="">
                            <div class="blog-title">
                                <a href="#" class="btn">Non-Dividend Stocks</a>
                            </div>
                        </div>
                        <a href="#" class="h4 d-inline-block mb-3">Options Trading Business?</a>
                        <p class="mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore aut aliquam suscipit error corporis accusamus labore....
                        </p>
                        <div class="d-flex align-items-center">
                            <img src="img/testimonial-1.jpg" class="img-fluid rounded-circle" style="width: 60px; height: 60px;" alt="">
                            <div class="ms-3">
                                <h5>Admin</h5>
                                <p class="mb-0">October 9, 2025</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Blog End -->


        <!-- FAQs Start -->
        <div class="container-fluid faq-section pb-5">
            <div class="container pb-5 overflow-hidden">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <!-- <h4 class="text-primary">FAQs</h4> -->
                    <h1 class="display-5 mb-4">Frequently Asked Questions</h1>
                    <p class="mb-0">It seems like you're looking for assistance in writing the content for an FAQ (Frequently Asked Questions) section for something called "ThinkTrek." Could you provide more context about what ThinkTrek is about? Is it a brand, a product, a service, or a project? Once I have that info, I can help create relevant FAQ content!
                    </p>
                </div>
                    <div class="faq-container">
                        <!-- <h1>Frequently Asked Questions</h1> -->
                        <div class="faq-item">
                          <button class="faq-question"><b>+  E-Waste (Management) Rules, 2016.</b> </button>
                          <div class="faq-answer">
                            <p><b>Q. What is Electrical and Electronic Equipment (EEE)?</b></p>                      
                            <p>A. Under the E-Waste (M) Rules, 2016, 'Electrical and Electronic Equipment' (EEE) means equipment which are dependent on electric current or electro-magnetic field to become functional.</p><br>

                           <p><b>Q. What Is E- Waste?</b></p>
                           <p>A. Electronic Waste (E-Waste) means electrical and electronic equipment, whole or in part discarded as waste by the consumer or bulk consumer as well as rejects from manufacturing, refurbishment, and repair processes.</p><br>

                           <p><b>Q. What are the salient features of the E-Waste (Management) Rules, 2016?</b></p>
                           <p>A. The salient features of the E-Waste (Management) Rules, 2016 are as follows:<br>
                           • Extended Responsibility to producers to manage a system of E-waste collection and channelisation through EPR Authorisation.<br>
                           • To promote and encourage establishment of an efficient e-waste collection mechanism<br>
                           • Promote Environmentally Safe & Sound Recycling by channelizing E-waste to authorized dismantlers and recyclers of e-waste<br>
                           • To minimize illegal recycling / recovery operations<br> 
                           • Reduce Hazardous substances in Electrical and Electronic components.</p><br>

                           <p><b>Q. The E-Waste (M) Rules, 2016 shall apply to whom?</b></p>
                           <p> A. The E-Waste(M) Rules shall apply to every manufacturer, producer, consumer, bulk consumer, collection centres, dealers, e-retailer, refurbisher, dismantler and recycler involved in manufacture, sale, transfer, purchase, collection, storage and processing of e-waste or electrical and electronic equipment listed in Schedule I, including their components, consumables, parts and spares which make the product operational.</p><br>

                           <p><b>Q. What is Extended Producer Responsibility (EPR)?</b></p> 
                           <p>A. ‘Extended Producer Responsibility’ means responsibility of any producer of electrical or electronic equipment, for channelization of e-waste to ensure environmentally sound management of such waste. Extended Producer Responsibility may comprise of implementing take back system and/or setting up of collection centres and having agreed arrangements with authorised dismantler/recycler either individually or collectively through a Producer Responsibility Organization recognised by producer or producers in their Extended Producer Responsibility – Authorisation.</p><br>

                           <p><b>Q. What is ‘Extended Producer Responsibility - Authorisation’ (EPRA)?</b></p>
                           <p>A. Extended Producer Responsibility - Authorisation’ means a permission given by Central Pollution Control Board to a producer, for managing Extended Producer Responsibility with implementation plans and targets outlined in such authorisation including detail of Producer Responsibility Organization and e-waste exchange, if applicable</p><br>

                           <p><b>Q. Whether all the Producers of EEE are required to take EPR Authorization?</b></p> 
                           <p>A. EPR authorisation is mandatory and must be obtained by all the producers of EEE including their components, consumables, parts and spares covered under the rules covered in schedule –I of E-Waste (Management) Rules, 2016.</p><br>

                           <p><b>Q. What is Extended Producer Responsibility Plan?</b></p>
                           <p>A. ‘Extended Producer Responsibility Plan’ means a plan submitted by a producer to Central Pollution Control Board, at the time of applying for Extended Producer Responsibility - Authorisation in which a producer shall provide details of e-waste channelization system for targeted collection including detail of Producer Responsibility Organisation and e-waste exchange, if applicable. 
                           EPR Plan is an implementation plan of the producer where the producer gives its overall scheme to fulfil its Extended Producer Responsibility for achieving targets and details out the mechanism for collection and channelisation of e-waste generated by him. 
                           The EPR plan requires estimating the quantity of E-waste generated from their end-of-life products, outlining a scheme for collection and channelization of their end-of-life products or products with same EEE code to authorised dismantlers/recyclers, estimated budget for implementing EPR, outline the scheme of creating awareness, declaration on ROHS compliance and submission of documents. To make EPR Plan complete the producer is required to ensure that all the e- waste collected should be finally sent to authorised recycler
                           </p><br>

                           <p><b>Q. What is PRO under the E-Waste Rules ?</b></p>
                           <p> A. A PRO means Producer Responsibility Organization means a professional organisation authorised or financed collectively or individually by producers, which can take the responsibility for collection and channelization of e-waste generated from the ‘end-of-life’ of their products to ensure environmentally sound management of such e-waste.</p><br>

                           <p><b>Q. What is role of PRO? </b></p>
                           <p>
                           A. The Role of PRO: <br>
                           • A PRO can assist a producer or producers in meeting their legal obligations (achieving collection targets, setting up of collection centres/points/implementing take back, carrying awareness programmes etc.), only if producer (s) engage that PRO. 
                           • PRO shall have an agreement with producer(s) or a consortium of producers. Such agreement shall outline the role and responsibility of PRO for managing EPR.
                           </p>
                          </div>
                        </div>
                        <div class="faq-item">
                          <button class="faq-question"><b>+ Plastic Waste Management (PWM).</b> </button>
                          <div class="faq-answer">
                            <p><b>Q. What is plastic waste management rule?</b></p>
                            <p>A. The Ministry of Environment, Forest and Climate Change (MoEFCC) notified the Plastic Waste Management Rules, 2016 on 18th March, 2016. The Ministry also notified the Solid Waste Management Rules, 2016 on 8th April, 2016. As plastic waste is part of solid waste. Under the Plastic Waste Management Rules, 2016, mandate the generators of plastic waste to take steps to minimize generation of plastic waste.</p><br>

                            <p><b>Q. Which types of plastic cover under Plastic Waste Management Extended Producer Responsibility?</b></p>

                            <p>A.The following plastic packaging categories are covers under Extended Producer Responsibility:<br>
                            (i) Category I Rigid plastic packaging.<br>
                             (ii) Category II Flexible plastic packaging of single layer or multilayer (more than one layer with different types of plastic), plastic sheets or like and covers made of plastic sheet, carry bags, plastic sachet, or pouches.<br>
                             (iii) Category III Multi-layered plastic packaging (at least one layer of plastic and at least one layer of material other than plastic);<br>
                            (iv) Category IV Plastic sheet or like used for packaging as well as carry bags made of compostable plastics.</p><br>

                            <p><b>Q.Whether all the Producer of plastic are required to take EPR Authorization (PWM)</b></p>

                            <p>A.The following entities shall register on the centralized portal developed by Central Pollution Control Board namely: - <br>
                            (i) Producer (P). <br>
                            (ii) Importer (I). <br>
                            (iii) Brand owner (BO).<br> 
                            (iv) Plastic Waste Processor engaged in (a) recycling, (b) waste to energy, (c) waste to oil, and (v) industrial composting.</p><br>
                          </div>
                        </div>
                        <div class="faq-item">
                          <button class="faq-question"><b>+ CRO</b> </button>
                          <div class="faq-answer">
                            <p><b>Q. Who is eligible to get Unique Registration Number – the manufacturer or importer? </b></p>

                            <p>A. The manufacturer is eligible to apply and get unique registration number which is linked to manufacturer, location of factory, product, and brand.</p><br>

                            <p><b>Q. IS standard Mark for product fall under CRS will beon the product or packaging?</b></p>

                            <p>A. The Standard Mark shall be placed on the product & the packaging both however, if it is not feasible to place the same on the product for size constraints, it can be put on the packaging only. For the products with display screen, provisions of e-labelling of products also exist.</p><br>

                            <p><b>Q. What are safety critical components?</b></p>

                            <p>A.  Typical safety critical components* are - •Power cords • Switches • Safety Isolating Transformers • Fuses • Rechargeable Batteries • Picture tubes • PCBs • Thermostats • X and Y capacitors • Fusible resistors / varistors • Plug / sockets / connectors • Lamp holders • Cells (For batteries )• External and internal wire for LED Luminaires • Insulation tape • Electrolytic Bulk Capacitor</p><br>

                            <p><b>Q. What is “Highly Specialized Equipment” (HSE) and is it covered under BIS?</b></p>

                            <p>A. Highly Specialized Equipment (HSE), as per the criteria given below, shall stand exempted from the application of this Order provided they are manufactured / imported in less than 100 units per model per year – 
                            a. Equipment Powered by Three phase power supply<br>
                            b. Equipment Powered by Single phase power supply with current rating exceeding 16 Ampere<br>
                            c. Equipment with dimensions exceeding 1.5 m x 0.8 m <br>
                            d. Equipment with weight exceeding 80 Kg.</p><br>

                            <p><b>Q. What kind of batteries are covered under the CRS?</b></p>

                            <p>A. The scope of coverage is as defined in the clause 1 of the standard IS 16406. This is deemed to cover rechargeable batteries / single cells like Lithium ion batteries, Nickel-Cadmium and Nickel-Metal Hydride cells.</p>
                          </div>
                        </div>
                        <center><a href="FAQ.html" class="btn btn-primary rounded-pill py-2 px-4 my-3 my-lg-0 flex-shrink-0">Learn More</a></center>
                      </div>
                </div>
            </div>
        </div>
        <!-- FAQs End -->

        <!-- Team Start -->
        <!-- <div class="container-fluid team pb-5">
            <div class="container pb-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">Our Team</h4>
                    <h1 class="display-5 mb-4">Meet Our Advisers</h1>
                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.
                    </p>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-1.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="team-title">
                                <h4 class="mb-0">David James</h4>
                                <p class="mb-0">Profession</p>
                            </div>
                            <div class="team-icon">
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-circle me-0" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-2.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="team-title">
                                <h4 class="mb-0">David James</h4>
                                <p class="mb-0">Profession</p>
                            </div>
                            <div class="team-icon">
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-circle me-0" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-3.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="team-title">
                                <h4 class="mb-0">David James</h4>
                                <p class="mb-0">Profession</p>
                            </div>
                            <div class="team-icon">
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-circle me-0" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-4.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="team-title">
                                <h4 class="mb-0">David James</h4>
                                <p class="mb-0">Profession</p>
                            </div>
                            <div class="team-icon">
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-circle me-0" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Team End -->

        <!-- Testimonial Start -->
        <div class="container-fluid testimonial pb-5">
            <div class="container pb-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">Testimonial</h4>
                    <h1 class="display-5 mb-4">Our Clients Riviews</h1>
                    <!-- <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.
                    </p> -->
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.2s">
                    <div class="testimonial-item">
                        <div class="testimonial-quote-left">
                            <i class="fas fa-quote-left fa-2x"></i>
                        </div>
                        <div class="testimonial-img">
                            <img src="img/client.png" class="img-fluid" alt="Image">
                        </div>
                        <div class="testimonial-text">
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis blanditiis excepturi quisquam temporibus voluptatum reprehenderit culpa, quasi corrupti laborum accusamus.
                            </p>
                        </div>
                        <div class="testimonial-title">
                            <div>
                                <h4 class="mb-0">Person Name</h4>
                                <p class="mb-0">Profession</p>
                            </div>
                            <div class="d-flex text-primary">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="testimonial-quote-right">
                            <i class="fas fa-quote-right fa-2x"></i>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-quote-left">
                            <i class="fas fa-quote-left fa-2x"></i>
                        </div>
                        <div class="testimonial-img">
                            <img src="img/client.png" class="img-fluid" alt="Image">
                        </div>
                        <div class="testimonial-text">
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis blanditiis excepturi quisquam temporibus voluptatum reprehenderit culpa, quasi corrupti laborum accusamus.
                            </p>
                        </div>
                        <div class="testimonial-title">
                            <div>
                                <h4 class="mb-0">Person Name</h4>
                                <p class="mb-0">Profession</p>
                            </div>
                            <div class="d-flex text-primary">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="testimonial-quote-right">
                            <i class="fas fa-quote-right fa-2x"></i>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-quote-left">
                            <i class="fas fa-quote-left fa-2x"></i>
                        </div>
                        <div class="testimonial-img">
                            <img src="img/client.png" class="img-fluid" alt="Image">
                        </div>
                        <div class="testimonial-text">
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis blanditiis excepturi quisquam temporibus voluptatum reprehenderit culpa, quasi corrupti laborum accusamus.
                            </p>
                        </div>
                        <div class="testimonial-title">
                            <div>
                                <h4 class="mb-0">Person Name</h4>
                                <p class="mb-0">Profession</p>
                            </div>
                            <div class="d-flex text-primary">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="testimonial-quote-right">
                            <i class="fas fa-quote-right fa-2x"></i>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-quote-left">
                            <i class="fas fa-quote-left fa-2x"></i>
                        </div>
                        <div class="testimonial-img">
                            <img src="img/client.png" class="img-fluid" alt="Image">
                        </div>
                        <div class="testimonial-text">
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis blanditiis excepturi quisquam temporibus voluptatum reprehenderit culpa, quasi corrupti laborum accusamus.
                            </p>
                        </div>
                        <div class="testimonial-title">
                            <div>
                                <h4 class="mb-0">Person Name</h4>
                                <p class="mb-0">Profession</p>
                            </div>
                            <div class="d-flex text-primary">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="testimonial-quote-right">
                            <i class="fas fa-quote-right fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->

        <!-- Chatbot Toggler -->
    <button id="chatbot-toggler">
      <span class="material-symbols-rounded">mode_comment</span>
      <span class="material-symbols-rounded">close</span>
    </button>
    <div class="chatbot-popup">
      <!-- Chatbot Header -->
      <div class="chat-header">
        <div class="header-info">
          <svg class="chatbot-logo" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 1024 1024">
            <path
              d="M738.3 287.6H285.7c-59 0-106.8 47.8-106.8 106.8v303.1c0 59 47.8 106.8 106.8 106.8h81.5v111.1c0 .7.8 1.1 1.4.7l166.9-110.6 41.8-.8h117.4l43.6-.4c59 0 106.8-47.8 106.8-106.8V394.5c0-59-47.8-106.9-106.8-106.9zM351.7 448.2c0-29.5 23.9-53.5 53.5-53.5s53.5 23.9 53.5 53.5-23.9 53.5-53.5 53.5-53.5-23.9-53.5-53.5zm157.9 267.1c-67.8 0-123.8-47.5-132.3-109h264.6c-8.6 61.5-64.5 109-132.3 109zm110-213.7c-29.5 0-53.5-23.9-53.5-53.5s23.9-53.5 53.5-53.5 53.5 23.9 53.5 53.5-23.9 53.5-53.5 53.5zM867.2 644.5V453.1h26.5c19.4 0 35.1 15.7 35.1 35.1v121.1c0 19.4-15.7 35.1-35.1 35.1h-26.5zM95.2 609.4V488.2c0-19.4 15.7-35.1 35.1-35.1h26.5v191.3h-26.5c-19.4 0-35.1-15.7-35.1-35.1zM561.5 149.6c0 23.4-15.6 43.3-36.9 49.7v44.9h-30v-44.9c-21.4-6.5-36.9-26.3-36.9-49.7 0-28.6 23.3-51.9 51.9-51.9s51.9 23.3 51.9 51.9z"
            />
          </svg>
          <h2 class="logo-text">Thinktrek</h2>
        </div>
        <button id="close-chatbot" class="material-symbols-rounded">keyboard_arrow_down</button>
      </div>
      <!-- Chatbot Body -->
      <div class="chat-body">
        <div class="message bot-message">
          <svg class="bot-avatar" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 1024 1024">
            <path
              d="M738.3 287.6H285.7c-59 0-106.8 47.8-106.8 106.8v303.1c0 59 47.8 106.8 106.8 106.8h81.5v111.1c0 .7.8 1.1 1.4.7l166.9-110.6 41.8-.8h117.4l43.6-.4c59 0 106.8-47.8 106.8-106.8V394.5c0-59-47.8-106.9-106.8-106.9zM351.7 448.2c0-29.5 23.9-53.5 53.5-53.5s53.5 23.9 53.5 53.5-23.9 53.5-53.5 53.5-53.5-23.9-53.5-53.5zm157.9 267.1c-67.8 0-123.8-47.5-132.3-109h264.6c-8.6 61.5-64.5 109-132.3 109zm110-213.7c-29.5 0-53.5-23.9-53.5-53.5s23.9-53.5 53.5-53.5 53.5 23.9 53.5 53.5-23.9 53.5-53.5 53.5zM867.2 644.5V453.1h26.5c19.4 0 35.1 15.7 35.1 35.1v121.1c0 19.4-15.7 35.1-35.1 35.1h-26.5zM95.2 609.4V488.2c0-19.4 15.7-35.1 35.1-35.1h26.5v191.3h-26.5c-19.4 0-35.1-15.7-35.1-35.1zM561.5 149.6c0 23.4-15.6 43.3-36.9 49.7v44.9h-30v-44.9c-21.4-6.5-36.9-26.3-36.9-49.7 0-28.6 23.3-51.9 51.9-51.9s51.9 23.3 51.9 51.9z"
            />
          </svg>
          <!-- prettier-ignore -->
          <div class="message-text"> Hey there  <br /> How can I help you today? </div>
        </div>
      </div>
      <!-- Chatbot Footer -->
      <div class="chat-footer">
        <form action="#" class="chat-form">
          <textarea placeholder="Message..." class="message-input" required></textarea>
          <div class="chat-controls">
            <button type="button" id="emoji-picker" class="material-symbols-outlined">sentiment_satisfied</button>
            <div class="file-upload-wrapper">
              <input type="file" accept="image/*" id="file-input" hidden />
              <img src="#" />
              <button type="button" id="file-upload" class="material-symbols-rounded">attach_file</button>
              <button type="button" id="file-cancel" class="material-symbols-rounded">close</button>
            </div>
            <button type="submit" id="send-message" class="material-symbols-rounded">arrow_upward</button>
          </div>
        </form>
      </div>
    </div>
    <!-- end chat box -->

    <!-- accpet all cookis -->
    <div class="wrapper">
      <header>
        <i class="fa fa-cookie-bite"></i>
        <h2>Cookies Consent</h2>
      </header>
      <div class="data">
        <p>This website use cookies to help you have a superior and more relevant browsing experience on the website. <a href="#"> Read more...</a></p>
      </div>
      <div class="buttons">
        <button class="button" id="acceptBtn">Accept</button>
        <button class="button" id="declineBtn">Decline</button>
      </div>
    </div>
    <!-- End accpet all cookis -->


        <?php include('footer.php');?>
        
        <!-- JavaScript Libraries -->
        <!-- popup -->
         <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/js/intlTelInput.min.js"></script>
        <!--  -->
        <script src="https://cdn.jsdelivr.net/npm/emoji-mart@latest/dist/browser.js"></script>
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