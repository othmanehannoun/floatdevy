
<?php
 
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
 
//required files
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
 
if (isset($_POST["send"])) {
 
    $mail = new PHPMailer(true);
 
    //Server settings
    $mail->isSMTP();                              //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';  //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                     //Enable SMTP authentication
    $mail->Username   = 'floadevy@gmail.com';   //SMTP username (your email)
    $mail->Password   = 'mrxcggevzytpmdau';         //SMTP password
    $mail->SMTPSecure = 'ssl';                    //Enable implicit SSL encryption
    $mail->Port       = 465;                     
    
    //Recipients
    $mail->setFrom($_POST["email"], $_POST["name"]); // Sender Email and name
    $mail->addAddress('floadevy@gmail.com');        // Add a recipient email  
    $mail->addReplyTo($_POST["email"], $_POST["name"]); // Reply to sender email
    
    //Content
    $mail->isHTML(true);                            //Set email format to HTML
    $mail->Subject = $_POST["subject"];             // Email subject
    $mail->Body    = $_POST["message"];             // Email message
      
    try {
        // Attempt to send email
        $mail->send();
        header("Location: ./contact.php?success=Email sent successfully");
        exit;
    } catch (Exception $e) {
        // Handle errors
        header("Location: ./contact.php?success=Email NOT Send successfully");
    }
}

?>

<?php include './include/header.php'; ?>

    <!--=====================================-->
    <!--=       Breadcrumb Area Start       =-->
    <!--=====================================-->
    <div class="breadcrum-area">
        <div class="container">
            <div class="breadcrumb">
                <ul class="list-unstyled">
                    <li><a href="index">Home</a></li>
                    <li class="active">Contact</li>
                </ul>
                <h1 class="title h2">Contact</h1>
            </div>
        </div>
        <ul class="shape-group-8 list-unstyled">
            <li class="shape shape-1" data-sal="slide-right" data-sal-duration="500" data-sal-delay="100">
                <img src="../assets/media/others/bubble-9.png" alt="Bubble">
            </li>
            <li class="shape shape-2" data-sal="slide-left" data-sal-duration="500" data-sal-delay="200">
                <img src="../assets/media/others/bubble-21.png" alt="Bubble">
            </li>
            <li class="shape shape-3" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300">
                <img src="../assets/media/others/line-4.png" alt="Line">
            </li>
        </ul>
    </div>
    <!--=====================================-->
    <!--=       Contact  Area Start        =-->
    <!--=====================================-->
    <section class="section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6">
                    <div class="contact-form-box shadow-box mb--30">
                        <h3 class="title">How can we help your business?</h3>
                        <?php
                            if(isset($_GET["success"])){
                                $success =$_GET["success"];
                                if($success === "Email sent successfully"){
                                    echo "<div class='alert alert-success alert-dismissible fade show messages' role='alert'>
                                        <span>$success</span>  
                                        
                                    </div>";
                                }
                                else{
                                    echo "
                                        <div class='alert alert-danger alert-dismissible fade show messages' role='alert'>
                                            <span>Email NOT Send successfully</span> 
                                        </div>"; 
                                }
                            }
                        
                        ?>
                        <form method="post" id="contact">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name" tabindex="1" autofocus require>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" tabindex="2" autofocus require>
                            </div>
                            <div class="form-group">
                                <label>Subject</label>
                                <input type="text" class="form-control" name="subject" tabindex="3" autofocus require>
                            </div>
                            <div class="form-group mb--40">
                                <label>Message</label>
                                <textarea name="message" id="contact-message" class="form-control textarea" cols="30" rows="4" tabindex="4" autofocus require></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="axil-btn btn-fill-primary btn-fluid btn-primary" name="send" id="contact-submit">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 offset-xl-1">
                    <div class="contact-info mb--100 mb_md--30 mt_md--0 mt--150">
                        <h4 class="title">Phone</h4>
                        <p>Our customer care is open from Mon-Fri, 9:00 am to 6:00 pm</p>
                        <h4 class="phone-number"><a href="tel:0616855202">(+212) 679 106 116</a></h4>
                    </div>
                    <div class="contact-info mb--30">
                        <h4 class="title">Email</h4>
                        <p>Our support team will get back to in 1h during standard business hours.</p>
                        <h4 class="phone-number"><a href="mailto:info@example.com">contact@floadevy.com</a></h4>
                    </div>
                </div>
            </div>
        </div>
        <ul class="list-unstyled shape-group-12">
            <li class="shape shape-1"><img src="../assets/media/others/bubble-2.png" alt="Bubble"></li>
            <li class="shape shape-2"><img src="../assets/media/others/bubble-1.png" alt="Bubble"></li>
            <li class="shape shape-3"><img src="../assets/media/others/circle-2.png" alt="Circle"></li>
        </ul>
    </section>

    <!--=====================================-->
    <!--=       Location  Area Start        =-->
    <!--=====================================-->
    <section class="section section-padding bg-color-dark overflow-hidden">
        <div class="container">
            <div class="section-heading heading-light-left">
                <span class="subtitle">Find Us</span>
                <h2 class="title">Our office</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="office-location">
                        <div class="thumbnail">
                            <img src="../assets/media/others/location-1.png" alt="Office">
                        </div>
                        <div class="content">
                            <h4 class="title">Safi-Morocco</h4>
                            <p>Lotissement Zaitoune N°38</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="office-location">
                        <div class="thumbnail">
                            <img src="../assets/media/others/location-2.png" alt="Office">
                        </div>
                        <div class="content">
                            <h4 class="title">Agadir-Morocco</h4>
                            <p>Immeuble jamal, rue hôtel de ville, Agadir 80000</p>
                             
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="office-location">
                        <div class="thumbnail">
                            <img src="../assets/media/others/location-3.png" alt="Office">
                        </div>
                        <div class="content">
                            <h4 class="title">Bordeaux-France</h4>
                            <p>8 Rue Franklin, 33000 Bordeaux, France</p>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-3 col-sm-6">
                    <div class="office-location">
                        <div class="thumbnail">
                            <img src="../assets/media/others/location-4.png" alt="Office">
                        </div>
                        <div class="content">
                            <h4 class="title">New Mexico</h4>
                            <p>10 Maggie Valleys United States</p>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
        <ul class="shape-group-11 list-unstyled">
            <!-- <li class="shape shape-1"><img src="../assets/media/others/line-2.png" alt="line"></li> -->
            <li class="shape shape-2"><img src="../assets/media/others/circle-2.png" alt="line"></li>
        </ul>
    </section>


    <?php include './include/information.php'; ?>
    <?php include './include/footer.php'; ?>