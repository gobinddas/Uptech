<!DOCTYPE html>
<html lang="en">

<?php

$phone = "(123)123-1234";
$email = "yourbusiness@business.com";
$address = "LaPorte, IN 46350";
$company = "Your Business Name LLc";
$business_hour = "Mon-Fri: 9 am-5 pm";
?>

<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $company; ?></title>

    <!-- LInks -->
    <!-- Boostrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">

    <!-- FontAwesome version 6.4.2 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">



    <!-- Simple Line Icons -->
    <link rel="stylesheet" href="css/simple-line-icons.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!-- Slick Slider -->
    <link rel="stylesheet" href="css/slick.min.css">


    <!-- Custom Style -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.png">
    <!-- google fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,400;0,600;0,700;0,800;0,900;1,400;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

</head>

<body>


    <header class="header">
        <div class="header-top">
            <div class="header-wrapper d-flex">
                <div class="block align-self-center d-flex ">
                    <h6 class=" align-self-center"><?= $business_hour ?></h6>
                    <a href="mailto:<?php echo $email; ?>"><?= $email ?></a>
                </div>
                <div class="d-flex icons">
                    <a href="instagram.com"><i class="fa-brands fa-instagram"></i></a>
                    <a href="linkedin.com"><i class="fa-brands fa-linkedin"></i></a>
                    <a href="whatsapp.com"><i class="fa-brands fa-whatsapp"></i></a>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <nav class="navbar navbar-expand-lg ">
                <a class="navbar-brand" href="./">
                    <p> Business Logo</p>


                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="fas fa-grip-lines"></i></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item <?php if ($page == 'home') {
                                                echo 'active';
                                            } ?>">
                            <a class="nav-link" href="./">Home</a>
                        </li>
                        <li class="nav-item <?php if ($page == 'about') {
                                                echo 'active';
                                            } ?> ">
                            <a class="nav-link" href="about">About</a>
                        </li>

                        <li class="nav-item <?php if ($page == 'project') {
                                                echo 'active';
                                            } ?> ">
                            <a class="nav-link" href="about">Project</a>
                        </li>

                        <li class="nav-item <?php if ($page == 'services') {
                                                echo 'active';
                                            } ?> ">
                            <a class="nav-link" href="services">Services </a>
                        </li>

                        <li class="nav-item <?php if ($page == 'contact') {
                                                echo 'active';
                                            } ?>">
                            <a class="nav-link" href="contact">Contact</a>
                        </li>

                    </ul>

                </div>
            </nav>
        </div>

    </header>