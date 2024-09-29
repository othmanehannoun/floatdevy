<?php   
    $id = $_GET['id']
?>
<html lang="en">
<head>
     <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>checkout</title>
    <meta name="description" content="">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="google-site-verification" content="ZknH80DfJjQOcZm-mwam8WzsPqvY7ZjIzFKY8SRp_7k" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../assets/media/favicon.png?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/vendor/font-awesome.css">
    <link rel="stylesheet" href="../assets/css/vendor/slick.css">
    <link rel="stylesheet" href="../assets/css/vendor/slick-theme.css">
    <link rel="stylesheet" href="../assets/css/vendor/sal.css">
    <link rel="stylesheet" href="../assets/css/vendor/magnific-popup.css">
    <link rel="stylesheet" href="../assets/css/vendor/green-audio-player.min.css">
    <link rel="stylesheet" href="../assets/css/vendor/odometer-theme-default.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Round|Material+Icons+Sharp|Material+Icons+Two+Tone"
      rel="stylesheet"
    />

    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="../assets/css/app.css?v=<?php echo time(); ?>">
</head>

<style>
    /* #desc-label {
        color: red !important
    } */

    .card {
        margin-bottom: 24px;
        -webkit-box-shadow: 0 2px 3px #e4e8f0;
        box-shadow: 0 2px 3px #e4e8f0;
    }

    .card {
        position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 1px solid #eff0f2;
        border-radius: 1rem;
    }
    .font-size-16 {
        font-size: 20px
    }
</style>
<body>
<div class="container py-5">
    <div class="row">
        <div class="col-xl-8">
            <div class="card border shadow-none">
                <div class="card-body">

                <?php 
                    switch ($id) {
                        case "A1b2C3d4E5":
                            echo '<div id="paypal-container-M3Y67ZCSSC9N6" class="text-black"></div>';
                            break;
                        case "X9y8Z7q6W5":
                            echo '<div id="paypal-container-3E3NLGD8UL75W" class="text-black"></div>';
                            break;
                        case "J2k3L4m5N6":
                            echo '<div id="paypal-container-MZNTKYBBV7BWN" class="text-black"></div>'; 
                            break;
                        default:
                            echo '<div id="paypal-container-M5GEYE6PQ5VZQ" class="text-black"></div>';
                    }
                ?>

                </div>
            </div>
        </div>

        <div class="col-xl-4">
            <div class="mt-5 mt-lg-0">
                <div class="card border shadow-none">
                    <div class="card-header bg-transparent border-bottom py-3 px-4">
                        <h5 class="font-size-16 mb-0">Your ads pack <span class="float-end"><?php echo $id; ?></span></h5>
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
                                                    <td colspan="2"><b>10K</b> Followers</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2"><b>1K</b> Likes For Your Post</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2"> Design <b>1</b> post to celebrate your arrival at 10K  </td>
                                                </tr>';
                                                break;

                                            case "X9y8Z7q6W5":
                                                echo '
                                                <tr>
                                                    <td colspan="2"><b>30K</b> Followers</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2"><b>2K</b> Likes For Your Post</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2"> Design <b>1</b> post to celebrate your arrival at 30K  </td>
                                                </tr>';
                                                break;

                                            case "J2k3L4m5N6":
                                                echo '
                                                <tr>
                                                    <td colspan="2"><b>50K</b> Followers</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2"><b>1K</b> Likes For Your Post</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2"> Design <b>1</b> post to celebrate your arrival at 50K  </td>
                                                </tr>'; 
                                                break;

                                            default:
                                                echo '
                                                <tr>
                                                    <td colspan="2"><b>100K</b> Followers</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="5"><b>1K</b> Likes For Your Post</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2"> Design <b>1</b> post to celebrate your arrival at 100K  </td>
                                                </tr>';

                                        }
                                    ?>

                                    <tr>
                                        <td colspan="2">Unlimited Support</td>
                                    </tr>
                                    <tr class="bg-light">
                                        <th>Total :</th>
                                        <td class="text-end">
                                            <span class="fw-bold">
                                            <?php 
                                                switch ($id) {
                                                    case "A1b2C3d4E5":
                                                        echo '$ 50';
                                                        break;
                                                    case "X9y8Z7q6W5":
                                                        echo '$ 100';
                                                        break;
                                                    case "J2k3L4m5N6":
                                                        echo '$ 170'; 
                                                        break;
                                                    default:
                                                        echo '$ 250';
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
    <!-- end row -->
    
</div>
</body>

<script src="https://www.paypal.com/sdk/js?client-id=BAA9r_THG-0dmMk-t6gFa8OaB5ei89hS6Q3YebgUH3BdRyo8sV2VzKyur8iMZ8y7QARNSFfq-2Ja0H9EpU&components=hosted-buttons&disable-funding=venmo&currency=USD"></script>
<script>
    paypal.HostedButtons({
        hostedButtonId: "M3Y67ZCSSC9N6",
    }).render("#paypal-container-M3Y67ZCSSC9N6")
</script>

<script>
    paypal.HostedButtons({
        hostedButtonId: "3E3NLGD8UL75W",
    }).render("#paypal-container-3E3NLGD8UL75W")
</script>
<script>
  paypal.HostedButtons({
    hostedButtonId: "MZNTKYBBV7BWN",
  }).render("#paypal-container-MZNTKYBBV7BWN")
</script>
<script>
  paypal.HostedButtons({
    hostedButtonId: "M5GEYE6PQ5VZQ",
  }).render("#paypal-container-M5GEYE6PQ5VZQ")
</script>

</html>