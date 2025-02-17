<?php   
    $id = $_GET['id']
?>

<?php include './include/header.php'; ?>

    <!--=====================================-->
    <!--=       Zone de Fil d'Ariane       =-->
    <!--=====================================-->
    <div class="breadcrum-area">
        <div class="container">
            <div class="breadcrumb">
                <ul class="list-unstyled">
                    <li><a href="index">Accueil</a></li>
                    <li class="active">Contact-Découverte</li>
                </ul>
                <h1 class="title h2">Contact-Découverte</h1>
            </div>
        </div>
        <ul class="shape-group-8 list-unstyled">
            <li class="shape shape-1" data-sal="slide-right" data-sal-duration="500" data-sal-delay="100">
                <img src="../assets/media/others/bubble-9.png" alt="Bulle">
            </li>
            <li class="shape shape-2" data-sal="slide-left" data-sal-duration="500" data-sal-delay="200">
                <img src="../assets/media/others/bubble-21.png" alt="Bulle">
            </li>
            <li class="shape shape-3" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300">
                <img src="../assets/media/others/line-4.png" alt="Ligne">
            </li>
        </ul>
    </div>
    
    <!--=====================================-->
    <!--=       Zone de Contact           =-->
    <!--=====================================-->
    <section class="section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <div class="contact-form-box shadow-box mb--30">
                        <h3 class="title">Votre Plan</h3>
                        <div class="mt-5 mt-lg-0">
                <div class="card border shadow-none">
                    <div class="card-header bg-transparent border-bottom py-3 px-4">
                        <h5 class="font-size-16 mb-0">Plan<span class="float-end"><?php 
                            switch ($id) {
                                case "A1b2C3d4E5":
                                    echo 'Site Web Vitrine';
                                    break;
                                case "X9y8Z7q6W5":
                                    echo 'Site web e-commerce';
                                    break;
                                case "J2k3L4m5N6":
                                    echo 'Application Web'; 
                                    break;
                                default:
                                    echo 'Application Mobile';
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
                                                    <td colspan="2"><b>Nom de domaine</b> gratuit</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2"> <b>Hébergement</b> gratuit </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2"> Adresse de messagerie professionnelle </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2"> Création du logo de votre société </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2"><b>+ 4</b> pages</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">Design réactif</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">Optimisation SEO</td>
                                                </tr>
                                                 <tr>
                                                    <td colspan="2">Indexation sur google search console</td>
                                                </tr>';
                                                
                                                break;

                                            case "X9y8Z7q6W5":
                                                echo '
                                                <tr>
                                                    <td colspan="2"><b>Nom de domaine</b> gratuit</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2"> <b>Hébergement</b> gratuit </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2"> Adresse de messagerie professionnelle </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2"> Création du logo de votre société </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2"><b>5</b> pages + 20 Produits</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">Design réactif</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">Optimisation SEO</td>
                                                </tr>
                                                 <tr>
                                                    <td colspan="2">Indexation sur google search console</td>
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
                                                    <td colspan="2"><b>Base de données: </b> MongoDB, MySQL</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2"><b>Déploiement: </b>AWS, Digital Ocean ...</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2"><b>2</b> Pages</td>
                                                </tr>'; 
                                                break;

                                            default:
                                                echo '
                                                <tr>
                                                    <td colspan="5"><b>Plateforme</b> Android</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2"><b>3</b> Pages</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="5"><b>UX/UI</b></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2"> Intégration avec les API (Google Maps)</td>
                                                </tr>';
                                        }
                                    ?>
                                    <tr>
                                        <td colspan="2"><b>Support</b> Illimité</td>
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
                        <!-- Fin table-responsive -->
                    </div>
                </div>
            </div>
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="contact-form-box shadow-box mb--30">
                        <h3 class="title">Comment pouvons-nous aider votre entreprise ?</h3>
                        <form id="dataForm" onsubmit="submitForm(event)">

                            <input type="hidden" class="form-control" name="plan_ID" value="<?php echo $id;?>" require>
                            <input type="hidden" class="form-control" name="plan_name" value="<?php 
                                switch ($id) {
                                    case "A1b2C3d4E5":
                                        echo 'Site Web Vitrine';
                                        break;
                                    case "X9y8Z7q6W5":
                                        echo 'site web E-commerce';
                                        break;
                                    case "J2k3L4m5N6":
                                        echo 'application web'; 
                                        break;
                                    default:
                                        echo 'application mobile';
                                }
                            ?>"
                            require
                            >

                            <div class="form-group">
                                <label>Nom</label>
                                <input type="text" class="form-control" name="name" id="name" autofocus>
                                <div class="error-message" id="nameError"></div>  <!-- Message d'erreur pour le nom -->
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" id="email" autofocus>
                                <div class="error-message" id="emailError"></div>  <!-- Message d'erreur pour l'email -->
                            </div>
                            <div class="form-group">
                                <label>Numéro de téléphone</label>
                                <input type="text" class="form-control" name="phone" id="phone" autofocus>
                                <div class="error-message" id="phoneError"></div>  <!-- Message d'erreur pour le téléphone -->
                            </div>
                            <div class="form-group mb--40">
                                <label>Message</label>
                                <textarea name="message" id="message" class="form-control textarea" cols="30" rows="4" placeholder="Décrivez vos besoins" tabindex="4" autofocus></textarea>
                                <div class="error-message" id="messageError"></div>  <!-- Message d'erreur pour le message -->
                            </div>
                            <!-- <div class="form-group">
                                <label>Sujet</label>
                                <input type="text" class="form-control" name="subject" tabindex="3" autofocus require>
                            </div> -->
                            <!-- <div class="form-group mb--40">
                                <label>Message</label>
                                <textarea name="message" id="contact-message" class="form-control textarea" cols="30" rows="4" tabindex="4" autofocus require></textarea>
                            </div> -->
                            <div class="form-group">
                                <button type="submit" class="axil-btn btn-fill-primary btn-fluid btn-primary loading" id="submitButton">Envoyer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include './include/information.php'; ?>
    <?php include './include/footer.php'; ?>
