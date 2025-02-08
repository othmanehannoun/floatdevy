<?php   
    $id = $_GET['id']
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
                    <li class="active">Contact-Discover</li>
                </ul>
                <h1 class="title h2">Contact-Discover</h1>
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
                <div class="col-sm-5">
                    <div class="contact-form-box shadow-box mb--30">
                        <h3 class="title">Your Plan</h3>
                        <div class="mt-5 mt-lg-0">
                <div class="card border shadow-none">
                    <div class="card-header bg-transparent border-bottom py-3 px-4">
                        <h5 class="font-size-16 mb-0">Plan<span class="float-end"><?php 
                            switch ($id) {
                                case "A1b2C3d4E5":
                                    echo 'Website';
                                    break;
                                case "X9y8Z7q6W5":
                                    echo 'E-commece website';
                                    break;
                                case "J2k3L4m5N6":
                                    echo 'Web APP'; 
                                    break;
                                default:
                                    echo 'Mobile APP';
                            }
                        ?></span></h5>
                    </div>
                    <div class="card-body p-4 pt-2">
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <tbody>
                                    
                                    <?php 
                                        switch ($id) {
                                            case "A1b2C3d4E5":
                                                echo '
                                                <tr>
                                                    <td colspan="2"><b>Free</b> Free domain</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2"> <b>SSL</b> certification </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2"><b>4</b> pages</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">Responsive design</td>
                                                </tr>';
                                                
                                                break;

                                            case "X9y8Z7q6W5":
                                                echo '
                                                <tr>
                                                    <td colspan="2"><b>Free</b> Free domain</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2"> <b>SSL</b> certification </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2"><b>5</b> pages</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">Responsive design</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2"><b>SEO</b> Optimization</td>
                                                </tr>';
                                                break;

                                            case "J2k3L4m5N6":
                                                echo '
                                                <tr>
                                                    <td colspan="2"><b>Frontend: </b> React, Next.js</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2"> <b>Backend: </b> Node.js, php </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2"><b>Database: </b> MongoDB,MySQL</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2"><b>Deployment: </b>AWS,Digital ocean ...</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2"><b>2</b> Page</td>
                                                </tr>'; 
                                                break;

                                            default:
                                                echo '
                                                <tr>
                                                    <td colspan="5"><b>Platform</b> Android</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2"><b>3</b> Page</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="5"><b>UX/UI</b></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2"> Integration with APIs (Google Maps)</td>
                                                </tr>';

                                        }
                                    ?>

                                    <tr>
                                        <td colspan="2"> <b>Unlimited</b> Support </td>
                                    </tr>
                                    <tr class="bg-light">
                                        <th>Total :</th>
                                        <td class="text-end">
                                            <span class="fw-bold">
                                            <?php 
                                                switch ($id) {
                                                    case "A1b2C3d4E5":
                                                        echo '$ 250';
                                                        break;
                                                    case "X9y8Z7q6W5":
                                                        echo '$ 350';
                                                        break;
                                                    case "J2k3L4m5N6":
                                                        echo '$ 1500'; 
                                                        break;
                                                    default:
                                                        echo '$ 700';
                                                }
                                            ?>
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- end table-responsive -->
                    </div>
                </div>
            </div>
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="contact-form-box shadow-box mb--30">
                        <h3 class="title">How can we help your business?</h3>
                       
                        <form id="dataForm" onsubmit="submitForm(event)">

                        <input type="hidden" class="form-control" name="plan_ID" value="<?php echo $id;?>" require>
                        <input type="hidden" class="form-control" name="plan_name" value="<?php 
                                switch ($id) {
                                    case "A1b2C3d4E5":
                                        echo 'website';
                                        break;
                                    case "X9y8Z7q6W5":
                                        echo 'E-commece website';
                                        break;
                                    case "J2k3L4m5N6":
                                        echo 'Web APP'; 
                                        break;
                                    default:
                                        echo 'Mobile APP';
                                }
                            ?>"
                            require
                        >

                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name" id="name" autofocus>
                            <div class="error-message" id="nameError"></div>  <!-- Error message for name -->
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" id="email" autofocus>
                            <div class="error-message" id="emailError"></div>  <!-- Error message for email -->
                        </div>
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="text" class="form-control" name="phone" id="phone" autofocus>
                            <div class="error-message" id="phoneError"></div>  <!-- Error message for phone -->
                        </div>
                        <div class="form-group mb--40">
                            <label>Message</label>
                            <textarea name="message" id="message" class="form-control textarea" cols="30" rows="4" placeholder="Describe Your Requirements" tabindex="4" autofocus></textarea>
                            <div class="error-message" id="messageError"></div>  <!-- Error message for message -->
                        </div>
                            <!-- <div class="form-group">
                                <label>Subject</label>
                                <input type="text" class="form-control" name="subject" tabindex="3" autofocus require>
                            </div> -->
                            <!-- <div class="form-group mb--40">
                                <label>Message</label>
                                <textarea name="message" id="contact-message" class="form-control textarea" cols="30" rows="4" tabindex="4" autofocus require></textarea>
                            </div> -->
                            <div class="form-group">
                                <button type="submit" class="axil-btn btn-fill-primary btn-fluid btn-primary loading" id="submitButton">Send</button>
                            </div>
                        </form>
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

 


    <?php include './include/information.php'; ?>
    <?php include './include/footer.php'; ?>