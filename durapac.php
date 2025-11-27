<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/durapac.css" rel="stylesheet">
    <link href="assets/css/product-hover.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <title>Durapac</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        .container-fluid {
            padding: 0 clamp(1rem, 5%, 3rem);
            max-width: 100%;
            box-sizing: border-box;
        }

        .fancy-heading {
            font-size: clamp(1.5rem, 5vw, 3.5rem);
            font-weight: 700;
            margin-left: clamp(1rem, 4vw, 3rem);
            background: linear-gradient(90deg, #ff4b2b, #ff416c, #ff9966);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .img-fluid {
            max-width: 100%;
            height: auto;
        }

        .hover-img {
            max-width: 100%;
            height: auto;
            border-radius: 15px;
        }

        .video-frame {
            height: clamp(40vh, 60vw, 80vh);
            overflow: hidden;
            width: 100%;
        }

        .video-frame iframe {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        h1,
        h3 {
            font-size: clamp(1.5rem, 4vw, 3rem);
            font-weight: 700;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }

        p {
            font-size: clamp(1rem, 3vw, 1.8rem);
            line-height: 1.6;
            max-width: clamp(80%, 90vw, 900px);
            margin: 0 auto;
        }

        .custom-img {
            width: 100%;
            height: auto;
            max-height: clamp(30vh, 50vw, 60vh);
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .custom-img img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .underline-bar {
            width: clamp(60px, 10vw, 100px);
            height: 5px;
            background: linear-gradient(90deg, #e74c3c, #f39c12);
            margin: 12px auto;
            border-radius: 3px;
            box-shadow: 0 3px 8px rgba(0, 0, 0, 0.25);
        }

        .social-links a {
            font-size: clamp(1.2rem, 2vw, 1.5rem);
            margin: 0 10px;
        }

        /* Added styles for .text-muted and footer */
        .text-muted {
            font-size: clamp(0.7rem, 1.8vw, 1rem);
        }

        footer {
            font-size: clamp(0.7rem, 1.8vw, 1rem);
        }

        /* Media Queries for Responsiveness */
        @media (max-width: 992px) {
            .row.align-items-center {
                flex-direction: column;
                text-align: center;
            }

            .col-md-6 {
                width: 100%;
                margin-bottom: 2rem;
            }

            .fancy-heading {
                margin-left: 0;
            }

            .custom-img {
                max-height: clamp(25vh, 45vw, 50vh);
            }

            .video-frame {
                height: clamp(30vh, 50vw, 60vh);
            }
        }

        @media (max-width: 768px) {

            h1,
            h3 {
                font-size: clamp(1.2rem, 3.5vw, 2.5rem);
            }

            p {
                font-size: clamp(0.9rem, 2.5vw, 1.5rem);
            }

            .img-fluid {
                margin-bottom: clamp(-3rem, -8vw, -2rem);
                margin-top: clamp(-2rem, -6vw, -1.5rem);
            }

            .custom-img {
                max-height: clamp(20vh, 40vw, 45vh);
            }

            /* Adjust .text-muted and footer for smaller screens */
            .text-muted {
                font-size: clamp(0.6rem, 1.5vw, 0.9rem);
            }

            footer {
                font-size: clamp(0.6rem, 1.5vw, 0.9rem);
            }
        }

        @media (max-width: 576px) {
            .container-fluid {
                padding: 0 clamp(0.5rem, 3%, 1rem);
            }

            h1,
            h3 {
                font-size: clamp(1rem, 3vw, 2rem);
            }

            p {
                font-size: clamp(0.8rem, 2vw, 1.2rem);
            }

            .underline-bar {
                width: clamp(40px, 8vw, 80px);
            }

            .social-links a {
                font-size: clamp(1rem, 2vw, 1.2rem);
                margin: 0 5px;
            }

            /* Further adjust .text-muted and footer for very small screens ni joshua */
            .text-muted {
                font-size: clamp(0.5rem, 1.3vw, 0.8rem);
            }

            footer {
                font-size: clamp(0.5rem, 1.3vw, 0.8rem);
            }
        }
    </style>
</head>

<body>
    <?php include("header.php"); ?>
    <div class="fullscreen-video" data-aos="fade-in" data-aos-duration="1200" data-aos-easing="ease-in-out">
        <!-- Background Video -->
        <iframe
            src="https://www.youtube.com/embed/6PzB-0qexVg?autoplay=1&mute=1&loop=1&playlist=6PzB-0qexVg&controls=0&showinfo=0&rel=0&modestbranding=1&iv_load_policy=3&disablekb=1&fs=0&cc_load_policy=0&playsinline=1"
            frameborder="0"
            allow="autoplay; encrypted-media; picture-in-picture"
            allowfullscreen
            loading="lazy">
        </iframe>

        <!-- Ultra-Premium Floating Scroll Button -->
        <div class="scroll-indicator">
            <button class="scroll-btn" onclick="window.scrollTo({top: window.innerHeight, behavior: 'smooth'})" aria-label="Scroll down">
                <span class="scroll-text">Scroll Down</span>
                <div class="chevron">
                    <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                        <polyline points="7 10 12 15 17 10"></polyline>
                    </svg>
                </div>
            </button>
        </div>
    </div>
    <div class="container-fluid px-5 ps-5 ">
        <!-- <div class="row align-items-center">
            <div class="col-md-6 text-center">
                <img src="assets/img/durapac/DURAPAC WHITE LOGO.png" alt="Logo" class="img-fluid durapac-logo">
                <h1 class="fancy-heading">
                    LEADING FORCE IN <br> HIGH PRESSURE HYDRAULIC TOOLS
                </h1>
            </div>
            <div class="col-md-6 text-center">
                <img src="assets/img/durapac/landing pic.png" alt="img" class="hover-img img-fluid rounded">
            </div>
        </div> -->


        <div class="row">
            <div class="col-md-12 text-center mt-5 pt-5">
                <h1 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;"> Services</h1>
                <div style="width: 80px; height: 4px; background: #e86565ff; margin: 10px auto; border-radius: 2px;"></div>
                <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                    At Durapac, we deliver high-performance <strong>hydraulic tools and systems</strong>
                    designed for durability, safety, and precision.
                    Our services include <strong>customized hydraulic solutions, expert consultation, training,
                        and dependable support</strong> to keep your operations running with efficiency and confidence.
                </p>
            </div>
            <!-- <div class="col-md-12 mt-5 pt-5">
                <div class="video-frame">
                    <iframe
                        src="https://www.youtube.com/embed/ONDBmm1q1L4?autoplay=1&mute=1&loop=1&playlist=ONDBmm1q1L4"
                        frameborder="0" allow="autoplay; encrypted-media" allowfullscreen loading="lazy">
                    </iframe>
                </div>
            </div> -->
        </div>

        <div class="row">
            <div class="col-md-12 text-center mt-5 pt-5" data-aos="fade-up" data-aos-duration="1000"
                data-aos-delay="100">
                <h1 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Durapac Products
                </h1>
                <div style="width: 80px; height: 4px; background: #e86565ff; margin: 10px auto; border-radius: 2px;"></div>
                <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200"
                    style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                    At <strong>Durapac</strong>, we deliver high-performance
                    <strong>hydraulic tools and lifting solutions</strong>
                    built for <strong>power, reliability, and precision</strong>.
                    From cylinders to pumps and customized systems, our products are trusted
                    worldwide to handle the toughest industrial challenges with confidence.
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 text-center mt-5 pt-5" data-aos="fade-up" data-aos-duration="1000"
                data-aos-delay="100">
                <h1 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Special Lifting
                    Systems</h1>
                <div style="width: 80px; height: 4px; background: #e86565ff; margin: 10px auto; border-radius: 2px;"></div>
            </div>
        </div>

        <div class="row align-items-center" style="margin-left: 0; margin-right: 0;">
            <div class="col-md-6 d-flex mt-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                <div class="custom-img">
                    <img src="assets\img\durapac\Specialty Lifting Systems.png" alt="AVANTI Hydraulic Torque Wrench"
                        class="img-fluid rounded">
                </div>
            </div>
            <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-left" data-aos-duration="1000"
                data-aos-delay="400">
                <h3
                    style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #e86565ff; padding-left: 10px;">
                    <span style="font-size: 2rem;">DJS-SERIES JACK STAND</span><br> Specialty Lifting Systems
                </h3>
                <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                    Designed to compliment Durapac's Safe D Lock® (SDL locking) jacks. A pneumatic assist raises the
                    central piston against the vehicle while the lock nut is wound down by the operator.

                </p>
                <div class="row col-md-12">
                    <div class="col-md-6">
                        <div class="dropdown">
                            <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                DOCUMENTATION & RESOURCES
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                <li><a class="dropdown-item"
                                        href="https://durapac.com/products/mobile-lifting-jacks/"
                                        target="_blank">MORE INFO</a></li>
                                <li><a class="dropdown-item"
                                        href="https://www.canva.com/design/DAGvPyDPQQo/q9Eq-0iOKmFBIsz5PscE9A/view?utm_content=DAGvPyDPQQo&utm_campaign=designshare&utm_medium=link2&utm_source=uniquelinks&utlId=ha0b7ee9605"
                                        target="_blank">BROCHURE</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <button class="btn btn-dark" type="button" id="torqueChartDropdown"
                                onclick="window.location.href='index.php#contact'">
                                REQUEST A QUOTE
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-center" style="background-color:lightgrey;margin-left: 0; margin-right: 0;">
            <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-right" data-aos-duration="1000"
                data-aos-delay="300">
                <h3 class="h3-black"
                    style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #e86565ff; padding-left: 10px;">
                    <span style="font-size: 2rem;">TALL SDL LIFTING JACK & STAND</span><br> Specialty Lifting Systems
                </h3>
                <p class="p-black" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                    The Tallest Safe D Lock® (SDL) jack + POWERDRIVE safely achieves extended lifting heights and is a
                    rated vehicle jack stand for heavy mining vehicles.

                </p>
                <div class="row col-md-12">
                    <div class="col-md-6">
                        <div class="dropdown">
                            <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                DOCUMENTATION & RESOURCES
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                <li><a class="dropdown-item"
                                        href="https://durapac.com/products/mobile-lifting-jacks/"
                                        target="_blank">MORE INFO</a></li>
                                <li><a class="dropdown-item"
                                        href="https://www.canva.com/design/DAGvPyDPQQo/q9Eq-0iOKmFBIsz5PscE9A/view?utm_content=DAGvPyDPQQo&utm_campaign=designshare&utm_medium=link2&utm_source=uniquelinks&utlId=ha0b7ee9605"
                                        target="_blank">BROCHURE</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <button class="btn btn-dark" type="button" id="torqueChartDropdown"
                                onclick="window.location.href='index.php#contact'">
                                REQUEST A QUOTE
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-flex mt-4" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                <div class="custom-img">
                    <img src="assets\img\durapac\AXEL ASSETS FOR WEBSITE\Specialty Lifting Systems.png"
                        alt="MXT Hydraulic Torque Wrench" class="img-fluid rounded">
                </div>
            </div>
        </div>
        <div class="row align-items-center no-gutters" style=" margin-left: 0; margin-right: 0;">
            <div class="col-md-6 d-flex mt-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                <div class="custom-img">
                    <img src="assets\img\durapac\AXEL ASSETS FOR WEBSITE\Specialty Lifting Systems (2).png"
                        alt="VERSA Hydraulic Torque Wrench" class="img-fluid rounded">
                </div>
            </div>
            <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-left" data-aos-duration="1000"
                data-aos-delay="400">
                <h3
                    style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #e86565ff; padding-left: 10px;">
                    <span style="font-size: 2rem;">SDN JACK + POWERDRIVES</span><br>Hydraulic Torque Wrench
                </h3>
                <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                    The SDN-Series jack is designed to lift heavy mining vehicles. It can be used on any hard surface
                    (maintenance bays & workshops) and is easily transported by use to site.
                </p>
                <div class="row col-md-12">
                    <div class="col-md-6">
                        <div class="dropdown">
                            <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                DOCUMENTATION & RESOURCES
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                <li><a class="dropdown-item"
                                        href="https://durapac.com/products/mobile-lifting-jacks/"
                                        target="_blank">MORE INFO</a></li>
                                <li><a class="dropdown-item"
                                        href="https://www.canva.com/design/DAGvPyDPQQo/q9Eq-0iOKmFBIsz5PscE9A/view?utm_content=DAGvPyDPQQo&utm_campaign=designshare&utm_medium=link2&utm_source=uniquelinks&utlId=ha0b7ee9605"
                                        target="_blank">BROCHURE</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <button class="btn btn-dark" type="button" id="torqueChartDropdown"
                                onclick="window.location.href='index.php#contact'">
                                REQUEST A QUOTE
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-center" style="background-color:lightgrey;margin-left: 0; margin-right: 0;">
            <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-right" data-aos-duration="1000"
                data-aos-delay="300">
                <h3 class="h3-black"
                    style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #e86565ff; padding-left: 10px;">
                    <span style="font-size: 2rem;">SYNC MASTER® SYNCHRONOUS LIFT SYSTEM</span><br>Specialty Lifting
                    Systemsx
                </h3>
                <p class="p-black" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                    Advanced hydraulic system designed for precision lifting and synchronization. It offers a reliable,
                    efficient solution for heavy lifting applications that require precise control over multiple lifting
                    points.

                </p>
                <div class="row col-md-12">
                    <div class="col-md-6">
                        <div class="dropdown">
                            <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                DOCUMENTATION & RESOURCES
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                <li><a class="dropdown-item"
                                        href="https://durapac.com/products/mobile-lifting-jacks/"
                                        target="_blank">MORE INFO</a></li>
                                <li><a class="dropdown-item"
                                        href="https://www.canva.com/design/DAGvPyDPQQo/q9Eq-0iOKmFBIsz5PscE9A/view?utm_content=DAGvPyDPQQo&utm_campaign=designshare&utm_medium=link2&utm_source=uniquelinks&utlId=ha0b7ee9605"
                                        target="_blank">BROCHURE</a></li>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <button class="btn btn-dark" type="button" id="torqueChartDropdown"
                                onclick="window.location.href='index.php#contact'">
                                REQUEST A QUOTE
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-flex mt-4" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                <div class="custom-img">
                    <img src="assets\img\durapac\AXEL ASSETS FOR WEBSITE\Specialty Lifting Systems (3).png"
                        alt="STEALTH Hydraulic Torque Wrench" class="img-fluid rounded">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mt-5 pt-5 text-center">
                <h1 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Hydraulic Cylinders
                </h1>
                <div style="width: 80px; height: 4px; background: #e86565ff; margin: 10px auto; border-radius: 2px;"></div>
            </div>
        </div>
        <div class="row align-items-center" style="margin-left: 0; margin-right: 0;">
            <div class="col-md-6 d-flex mt-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                <div class="custom-img">
                    <img src="assets\img\durapac\hydraulic\Hydraulic Cylinders.png" alt="XLCT Hydraulic Torque Wrench"
                        class="img-fluid rounded">
                </div>
            </div>

            <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-left" data-aos-duration="1000"
                data-aos-delay="400">
                <h3
                    style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #e86565ff; padding-left: 10px;">
                    <span style="font-size: 2rem;">RG-SERIES S/A, COLLAR THREAD</span><br>Hydraulic Cylinders

                </h3>
                <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                    The RG-Series is a Single Acting, General Purpose, Collar Thread, Spring Return Cylinder designed
                    for use in production, maintenance, jacking and fabrication applications.
                </p>
                <div class="row col-md-12">
                    <div class="col-md-6">
                        <div class="dropdown">
                            <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                DOCUMENTATION & RESOURCES
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                <li><a class="dropdown-item"
                                        href="https://durapac.com/products/cylinders-category/"
                                        target="_blank">MORE INFO</a></li>
                                <li><a class="dropdown-item"
                                        href="https://www.canva.com/design/DAGvPyDPQQo/q9Eq-0iOKmFBIsz5PscE9A/view?utlId=ha0b7ee9605#1"
                                        target="_blank">BROCHURE</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <button class="btn btn-dark" type="button" id="torqueChartDropdown"
                                onclick="window.location.href='index.php#contact'">
                                REQUEST A QUOTE
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-center" style="background-color:lightgrey;margin-left: 0; margin-right: 0;">
            <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-right" data-aos-duration="1000"
                data-aos-delay="300">
                <h3 class="h3-black"
                    style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #e86565ff; padding-left: 10px;">
                    <span style="font-size: 2rem;">AC-SERIES S/A, ALUMINIUM</span><br>Hydraulic Cylinders
                </h3>

                <p class="p-black" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                    The AC-Series is a Single Acting, Lightweight, High Strength, Aluminium, Spring Return Cylinder.
                    Ideal for use in applications where weight and portability are paramount. They can be used in
                    applications such as axle correction, bridge jacking, machinery maintenance and other non-production
                    applications.

                </p>
                <div class="row col-md-12">
                    <div class="col-md-6">
                        <div class="dropdown">
                            <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                DOCUMENTATION & RESOURCES
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                <li><a class="dropdown-item"
                                        href="https://durapac.com/products/cylinders-category/"
                                        target="_blank">MORE INFO</a></li>
                                <li><a class="dropdown-item"
                                        href="https://www.canva.com/design/DAGvPyDPQQo/q9Eq-0iOKmFBIsz5PscE9A/view?utlId=ha0b7ee9605#1"
                                        target="_blank">BROCHURE</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <button class="btn btn-dark" type="button" id="torqueChartDropdown"
                                onclick="window.location.href='index.php#contact'">
                                REQUEST A QUOTE
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-flex mt-4" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                <div class="custom-img">
                    <img src="assets\img\durapac\hydraulic\Hydraulic Cylinders (2).png"
                        alt="EDGE S Hydraulic Torque Wrench" class="img-fluid rounded">
                </div>
            </div>
        </div>

        <div class="row align-items-center" style="margin-left: 0; margin-right: 0;">
            <div class="col-md-6 d-flex mt-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                <div class="custom-img">
                    <img src="assets\img\durapac\hydraulic\Hydraulic Cylinders (3).png"
                        alt="jGun SINGLE SPEED Pneumatic Torque Tool" class="img-fluid rounded">
                </div>
            </div>
            <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-left" data-aos-duration="1000"
                data-aos-delay="400">
                <h3
                    style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #e86565ff; padding-left: 10px;">
                    <span style="font-size: 2rem;">RFJ SERIES S/A, LOW HEIGHT,FLAT</span><br>Hydraulic Cylinders
                </h3>

                <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                    The RFJ-Series is a Single Acting, Spring Return, Compact, Flat Cylinder designed for use in narrow
                    spaces and areas with low over head clearance.

                </p>
                <div class="row col-md-12">
                    <div class="col-md-6">
                        <div class="dropdown">
                            <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                DOCUMENTATION & RESOURCES
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                <li><a class="dropdown-item"
                                        href="https://durapac.com/products/cylinders-category/"
                                        target="_blank">MORE INFO</a></li>
                                <li><a class="dropdown-item"
                                        href="https://www.canva.com/design/DAGvPyDPQQo/q9Eq-0iOKmFBIsz5PscE9A/view?utlId=ha0b7ee9605#1"
                                        target="_blank">BROCHURE</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <button class="btn btn-dark" type="button" id="torqueChartDropdown"
                                onclick="window.location.href='index.php#contact'">
                                REQUEST A QUOTE
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mt-5 pt-5 text-center">
                <h1 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Hydraulic Pumps /
                    Power Units</h1>
                <div style="width: 80px; height: 4px; background: #e86565ff; margin: 10px auto; border-radius: 2px;"></div>
            </div>
        </div>
        <div class="row align-items-center" style="background-color:lightgrey;margin-left: 0; margin-right: 0;">
            <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-right" data-aos-duration="1000"
                data-aos-delay="300">
                <h3 class="h3-black"
                    style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #e86565ff; padding-left: 10px;">
                    <span style="font-size: 2rem;">PD-SERIES DIESEL DRIVEN SINGLE SPEED RADIAL PISTON POWER
                        UNITS</span><br>Hydraulic Pumps / Power Units
                </h3>
                <p class="p-black" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                    The PD-Series Diesel Driven Single Speed Radial Piston Power Units are suitable for heavy duty
                    applications in the field. They can deliver a minimum flow of 2.5 Lpm at 700 bar pressure. It has a
                    50 L usable oil capacity coupled with the reliability of a 3.4 kW KOHLER® diesel motor. The
                    transport system is easy to handle and incorporates an engine control dash board. </p>

                <div class="row col-md-12">
                    <div class="col-md-6">
                        <div class="dropdown">
                            <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                DOCUMENTATION & RESOURCES
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                <li><a class="dropdown-item"
                                        href="https://durapac.com/products/pumps-category/"
                                        target="_blank">MORE INFO</a></li>
                                <li><a class="dropdown-item"
                                        href="https://www.canva.com/design/DAGvPyDPQQo/q9Eq-0iOKmFBIsz5PscE9A/view?utlId=ha0b7ee9605#1"
                                        target="_blank">BROCHURE</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <button class="btn btn-dark" type="button" id="torqueChartDropdown"
                                onclick="window.location.href='index.php#contact'">
                                REQUEST A QUOTE
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 d-flex mt-4" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                <div class="custom-img">
                    <img src="assets\img\durapac\hydraulic pumps\Hydraulic Pumps _ Power Units.png"
                        alt="jGun DIGITAL SINGLE SPEED Pneumatic Torque Tool" class="img-fluid rounded">
                </div>
            </div>
        </div>
        <div class="row align-items-center" style="margin-left: 0; margin-right: 0;">
            <div class="col-md-6 d-flex mt-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                <div class="custom-img">
                    <img src="assets\img\durapac\hydraulic pumps\Hydraulic Pumps _ Power Units (2).png"
                        alt="Pneumatic Impact Wrench" class="img-fluid rounded">
                </div>
            </div>
            <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-left" data-aos-duration="1000"
                data-aos-delay="400">
                <h3
                    style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #e86565ff; padding-left: 10px;">
                    <span style="font-size: 2rem;">BP114A BATTERY HYDRAULIC POWER</span><br>Hydraulic Pumps / Power
                    Units
                </h3>
                <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                    The Pneumatic Impact Wrench delivers fast, consistent power to speed up bolting and minimize
                    downtime. Designed to reduce kickback, its ergonomic build enhances comfort and safety while
                    reducing fatigue. Rugged and reliable, it’s a durable solution for demanding industrial jobs.

                </p>
                <div class="row col-md-12">
                    <div class="col-md-6">
                        <div class="dropdown">
                            <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                DOCUMENTATION & RESOURCES
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                <li><a class="dropdown-item"
                                        href="https://durapac.com/products/pumps-category/"
                                        target="_blank">MORE INFO</a></li>
                                <li><a class="dropdown-item"
                                        href="https://www.canva.com/design/DAGvPyDPQQo/q9Eq-0iOKmFBIsz5PscE9A/view?utlId=ha0b7ee9605#1"
                                        target="_blank">BROCHURE</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <button class="btn btn-dark" type="button" id="torqueChartDropdown"
                                onclick="window.location.href='index.php#contact'">
                                REQUEST A QUOTE
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row align-items-center" style="background-color:lightgrey;margin-left: 0; margin-right: 0;">
            <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-right" data-aos-duration="1000"
                data-aos-delay="300">
                <h3 class="h3-black"
                    style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #e86565ff; padding-left: 10px;">
                    <span style="font-size: 2rem;">P-290 STEEL BODIED HANDS PUMPS</span><br>
                </h3>
                <p class="p-black" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                    Single-acting, two speed, two-way valve design that features a drop forged pump head for superior
                    durability. They are a robustly built, industry proven performer and the perfect choice where
                    manual, portable hydraulic power is required.
                </p>
                <div class="row col-md-12">
                    <div class="col-md-6">
                        <div class="dropdown">
                            <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                DOCUMENTATION & RESOURCES
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                <li><a class="dropdown-item"
                                        href="https://durapac.com/products/pumps-category/"
                                        target="_blank">MORE INFO</a></li>
                                <li><a class="dropdown-item"
                                        href="https://www.canva.com/design/DAGvPyDPQQo/q9Eq-0iOKmFBIsz5PscE9A/view?utlId=ha0b7ee9605#1"
                                        target="_blank">BROCHURE</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <button class="btn btn-dark" type="button" id="torqueChartDropdown"
                                onclick="window.location.href='index.php#contact'">
                                REQUEST A QUOTE
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-flex mt-4" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                <div class="custom-img">
                    <img src="assets\img\durapac\hydraulic pumps\Hydraulic Pumps _ Power Units (3).png"
                        alt="jGun DUAL SPEED Pneumatic Torque Tool" class="img-fluid rounded">
                </div>
            </div>
        </div>


        <div class="row align-items-center" style="margin-left: 0; margin-right: 0;">
            <div class="col-md-6 d-flex mt-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                <div class="custom-img">
                    <img src="assets\img\durapac\hydraulic pumps\Hydraulic Pumps _ Power Units (4).png"
                        alt="LITHIUM SERIES II Electric Torque Tool" class="img-fluid rounded">
                </div>
            </div>
            <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-left" data-aos-duration="1000"
                data-aos-delay="400">
                <h3
                    style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #e86565ff; padding-left: 10px;">
                    <span style="font-size: 2rem;">DAT-SERIES AIR TORQUE WRENCH POWER UNIT</span><br> Electric Torque
                    Tool
                </h3>
                <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                    The LITHIUM SERIES II (LST) is HYTORC’s most advanced electric torque tool, combining power,
                    durability, and ease of use. With real-time documentation via the HYTORC Connect App or USB*, it
                    delivers precision and innovation for the toughest bolting jobs. Lightweight and versatile, the LST
                    makes bolting easier anywhere.
                </p>
                <div class="row col-md-12">
                    <div class="col-md-6">
                        <div class="dropdown">
                            <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                DOCUMENTATION & RESOURCES
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                <li><a class="dropdown-item"
                                        href="https://durapac.com/"
                                        target="_blank">MORE INFO</a></li>
                                <li><a class="dropdown-item"
                                        href="https://www.canva.com/design/DAGvPyDPQQo/q9Eq-0iOKmFBIsz5PscE9A/view?utlId=ha0b7ee9605#1"
                                        target="_blank">BROCHURE</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <button class="btn btn-dark" type="button" id="torqueChartDropdown"
                                onclick="window.location.href='index.php#contact'">
                                REQUEST A QUOTE
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mt-5 pt-5 text-center">
                <h1 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Hydraulic Tools
                </h1>
                <div style="width: 80px; height: 4px; background: #e86565ff; margin: 10px auto; border-radius: 2px;"></div>
            </div>
        </div>
        <div class="row align-items-center" style="background-color:lightgrey;margin-left: 0; margin-right: 0;">
            <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-right" data-aos-duration="1000"
                data-aos-delay="300">
                <h3 class="h3-black"
                    style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #e86565ff; padding-left: 10px;">
                    <span style="font-size: 2rem;">TJ-SERIES TOE</span><br> Hydraulic Jacks
                </h3>
                <p class="p-black" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                    The TJ-Series Toe Jacks are a premium range ideally suited to lifting heavy machinery or equipment
                    when access height is restricted. Toe lift capacities range from 2 - 25 ton and all models (except
                    the TJ-2) feature a spring return piston.
                </p>
                <div class="row col-md-12">
                    <div class="col-md-6">
                        <div class="dropdown">
                            <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                DOCUMENTATION & RESOURCES
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                <li><a class="dropdown-item"
                                        href="https://durapac.com/products/jacks-category/"
                                        target="_blank">MORE INFO</a></li>
                                <li><a class="dropdown-item"
                                        href="https://www.canva.com/design/DAGvPyDPQQo/q9Eq-0iOKmFBIsz5PscE9A/view?utlId=ha0b7ee9605#1"
                                        target="_blank">BROCHURE</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <button class="btn btn-dark" type="button" id="torqueChartDropdown"
                                onclick="window.location.href='index.php#contact'">
                                REQUEST A QUOTE
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-flex mt-4" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                <div class="custom-img">
                    <img src="assets\img\durapac\AXEL ASSETS FOR WEBSITE (1)\Hydraulic Jacks.png"
                        alt="LION GUN Electric Torque Tool" class="img-fluid rounded">
                </div>
            </div>
        </div>
        <div class="row align-items-center" style="margin-left: 0; margin-right: 0;">
            <div class="col-md-6 d-flex mt-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                <div class="custom-img">
                    <img src="assets\img\durapac\AXEL ASSETS FOR WEBSITE (1)\Hydraulic Jacks (2).png"
                        alt="LION GUN Dual Speed Electric Torque Tool" class="img-fluid rounded">
                </div>
            </div>
            <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-left" data-aos-duration="1000"
                data-aos-delay="400">
                <h3
                    style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #e86565ff; padding-left: 10px;">
                    <span style="font-size: 2rem;">DBJ-SERIES BOTTLE</span><br> Hydraulic Jacks
                </h3>
                <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                    The DRJ-10 Rail Jack is ideally suited to aligning, gauging and lifting of rail or sleepers.
                    Utilising a forged aluminium base plus housing, this 10 ton capacity jack is robust, lightweight and
                    designed to reduce the risk of operator injury.
                </p>

                <div class="row col-md-12">
                    <div class="col-md-6">
                        <div class="dropdown">
                            <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                DOCUMENTATION & RESOURCES
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                <li><a class="dropdown-item"
                                        href="https://durapac.com/products/jacks-category/"
                                        target="_blank">MORE INFO</a></li>
                                <li><a class="dropdown-item"
                                        href="https://www.canva.com/design/DAGvPyDPQQo/q9Eq-0iOKmFBIsz5PscE9A/view?utlId=ha0b7ee9605#1"
                                        target="_blank">BROCHURE</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <button class="btn btn-dark" type="button" id="torqueChartDropdown"
                                onclick="window.location.href='index.php#contact'">
                                REQUEST A QUOTE
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-center" style="background-color:lightgrey;margin-left: 0; margin-right: 0;">
            <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-right" data-aos-duration="1000"
                data-aos-delay="300">
                <h3 class="h3-black"
                    style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #e86565ff; padding-left: 10px;">
                    <span style="font-size: 2rem;">DRJ-10 RAIL JACKS</span><br> Hyraulic Jacks
                </h3>
                <p class="p-black" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                    The LION GUN X delivers repeatable torque with ±5% accuracy in a portable, cord-free design. Powered
                    by a long-lasting 36V rechargeable battery, it combines strength with convenience. Featuring a
                    digital interface, data capture for quality control, and low vibration, it ensures safe, efficient
                    bolting every time.
                </p>
                <div class="row col-md-12">
                    <div class="col-md-6">
                        <div class="dropdown">
                            <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                DOCUMENTATION & RESOURCES
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                <li><a class="dropdown-item"
                                        href="https://durapac.com/products/jacks-category/"
                                        target="_blank">MORE INFO</a></li>
                                <li><a class="dropdown-item"
                                        href="https://www.canva.com/design/DAGvPyDPQQo/q9Eq-0iOKmFBIsz5PscE9A/view?utlId=ha0b7ee9605#1"
                                        target="_blank">BROCHURE</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <button class="btn btn-dark" type="button" id="torqueChartDropdown"
                                onclick="window.location.href='index.php#contact'">
                                REQUEST A QUOTE
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-flex mt-4" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                <div class="custom-img">
                    <img src="assets\img\durapac\AXEL ASSETS FOR WEBSITE (1)\Hydraulic Jacks (3).png"
                        alt="LION GUN X Electric Torque Tool" class="img-fluid rounded">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mt-5 pt-5 text-center">
                <h1 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Hydraulic Bolting
                    Solutions</h1>
                <div style="width: 80px; height: 4px; background: #e86565ff; margin: 10px auto; border-radius: 2px;"></div>
            </div>
        </div>
        <div class="row align-items-center" style="margin-left: 0; margin-right: 0;">
            <div class="col-md-6 d-flex mt-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                <div class="custom-img">
                    <img src="assets\img\durapac\AXEL ASSETS FOR WEBSITE (1)\Hydraulic Bolting Solutions.png"
                        alt="AVANTI Hydraulic Torque Wrench" class="img-fluid rounded">
                </div>
            </div>
            <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-left" data-aos-duration="1000"
                data-aos-delay="400">
                <h3
                    style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #e86565ff; padding-left: 10px;">
                    <span style="font-size: 2rem;">DBW-SERIES BACK-UP </span><br>Hydraulic Bolting Solutions
                </h3>
                <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                    The DBW-Series Back-up Wrenches allow for a hands-free operation that stops the opposite side of a
                    nut or bolt rotating during high torque installation or removal of the fastener.
                </p>
                <div class="row col-md-12">
                    <div class="col-md-6">
                        <div class="dropdown">
                            <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                DOCUMENTATION & RESOURCES
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                <li><a class="dropdown-item"
                                        href="https://durapac.com/products/bolting-category/"
                                        target="_blank">MORE INFO</a></li>
                                <li><a class="dropdown-item"
                                        href="https://www.canva.com/design/DAGvPyDPQQo/q9Eq-0iOKmFBIsz5PscE9A/view?utlId=ha0b7ee9605#1"
                                        target="_blank">BROCHURE</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <button class="btn btn-dark" type="button" id="torqueChartDropdown"
                                onclick="window.location.href='index.php#contact'">
                                REQUEST A QUOTE
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-center" style="background-color:lightgrey;margin-left: 0; margin-right: 0;">
            <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-right" data-aos-duration="1000"
                data-aos-delay="300">
                <h3 class="h3-black"
                    style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #e86565ff; padding-left: 10px;">
                    <span style="font-size: 2rem;">LPC-SERIES LOW PROFILE HEXAGON</span><br>Hydraulic Bolting Solutions
                </h3>
                <p class="p-black" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                    The LPC-Series Low Profile Hydraulic Hexagon Wrenches are an essential tool for limited clearance
                    applications. These versatile torque wrenches support an extensive range of interchangeable hexagon
                    ratchet cassettes that deliver a torque range of 232 to 44,593 Newton Metres (172 to 32,999 ft/lbs).
                </p>
                <div class="row col-md-12">
                    <div class="col-md-6">
                        <div class="dropdown">
                            <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                DOCUMENTATION & RESOURCES
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                <li><a class="dropdown-item"
                                        href="https://durapac.com/products/bolting-category/"
                                        target="_blank">MORE INFO</a></li>
                                <li><a class="dropdown-item"
                                        href="https://www.canva.com/design/DAGvPyDPQQo/q9Eq-0iOKmFBIsz5PscE9A/view?utlId=ha0b7ee9605#1"
                                        target="_blank">BROCHURE</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <button class="btn btn-dark" type="button" id="torqueChartDropdown"
                                onclick="window.location.href='index.php#contact'">
                                REQUEST A QUOTE
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-flex mt-4" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                <div class="custom-img">
                    <img src="assets\img\durapac\AXEL ASSETS FOR WEBSITE (1)\Hydraulic Bolting Solutions (2).png"
                        alt="MXT Hydraulic Torque Wrench" class="img-fluid rounded">
                </div>
            </div>
        </div>
        <BR> <BR>
        <div class="row">
            <div class="col-md-12 mt-5 pt-5 text-center">
                <h1 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Hydraulic Tools
                </h1>
                <div style="width: 80px; height: 4px; background: #e86565ff; margin: 10px auto; border-radius: 2px;"></div>
            </div>

            <div class="row align-items-center" style="margin-left: 0; margin-right: 0;">
                <div class="col-md-6 d-flex mt-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                    <div class="custom-img">
                        <img src="assets\img\durapac\AXEL ASSETS FOR WEBSITE (1)\Hydraulic Tools.png"
                            alt="AVANTI Hydraulic Torque Wrench" class="img-fluid rounded">
                    </div>
                </div>
                <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-left" data-aos-duration="1000"
                    data-aos-delay="400">
                    <h3
                        style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #e86565ff; padding-left: 10px;">
                        <span style="font-size: 2rem;">HC-24S SELF-CONTAINED</span><Br>Hydraulic Tools
                    </h3>
                    <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                        The HC-24S Self-contained Hydraulic Cutters have a cutting capacity up to 24 mm diameter. They
                        cut with ease through round bar, wire rope, wire strand and more. They are a proven performer in
                        the electrical, railway, mining, manufacturing and construction industries.
                    </p>
                    <div class="row col-md-12">
                        <div class="col-md-6">
                            <div class="dropdown">
                                <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    DOCUMENTATION & RESOURCES
                                </button>
                                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                    <li><a class="dropdown-item"
                                            href="https://durapac.com/products/hydraulic-tools-category/"
                                            target="_blank">MORE INFO</a></li>
                                    <li><a class="dropdown-item"
                                            href="https://www.canva.com/design/DAGvPyDPQQo/q9Eq-0iOKmFBIsz5PscE9A/view?utlId=ha0b7ee9605#1"
                                            target="_blank">BROCHURE</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div>
                                <button class="btn btn-dark" type="button" id="torqueChartDropdown"
                                    onclick="window.location.href='index.php#contact'">
                                    REQUEST A QUOTE
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <br> <br>

            <div class="row align-items-center" style="background-color:lightgrey;margin-left: 0; margin-right: 0;">
                <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-right" data-aos-duration="1000"
                    data-aos-delay="300">
                    <h3 class="h3-black"
                        style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #e86565ff; padding-left: 10px;">
                        <span style="font-size: 2rem;">DNS-SERIES</span><Br>Hydraulic Tools
                    </h3>
                    <p class="p-black" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                        The DNS-Series of Hydraulic Nut Splitters consists of seven models for handling difficult to
                        remove nuts ranging from 10 – 75 mm A/F capacity. They are a proven performer in the railway,
                        pipelines, petro-chemical, heavy vehicles, mining, steel and industrial applications.</p>
                    <div class="row col-md-12">
                        <div class="col-md-6">
                            <div class="dropdown">
                                <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    DOCUMENTATION & RESOURCES
                                </button>
                                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                    <li><a class="dropdown-item"
                                            href="https://durapac.com/products/hydraulic-tools-category/"
                                            target="_blank">MORE INFO</a></li>
                                    <li><a class="dropdown-item"
                                            href="https://www.canva.com/design/DAGvPyDPQQo/q9Eq-0iOKmFBIsz5PscE9A/view?utlId=ha0b7ee9605#1"
                                            target="_blank">BROCHURE</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div>
                                <button class="btn btn-dark" type="button" id="torqueChartDropdown"
                                    onclick="window.location.href='index.php#contact'">
                                    REQUEST A QUOTE
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex mt-4" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                    <div class="custom-img">
                        <img src="assets\img\durapac\AXEL ASSETS FOR WEBSITE (1)\Hydraulic Tools (2).png"
                            alt="MXT Hydraulic Torque Wrench" class="img-fluid rounded">
                    </div>
                </div>
            </div>
            <div class="row align-items-center" style="margin-left: 0; margin-right: 0;">
                <div class="col-md-6 d-flex mt-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                    <div class="custom-img">
                        <img src="assets\img\durapac\AXEL ASSETS FOR WEBSITE (1)\Hydraulic Tools (3).png"
                            alt="AVANTI Hydraulic Torque Wrench" class="img-fluid rounded">
                    </div>
                </div>
                <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-left" data-aos-duration="1000"
                    data-aos-delay="400">
                    <h3
                        style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #e86565ff; padding-left: 10px;">
                        <span style="font-size: 2rem;">DLW-SERIES</span><Br>Hydraulic Tools
                    </h3>
                    <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                        The Durapac Hydraulic Lifting Wedge is the perfect choice for heavy equipment lifting with
                        minimal clearance. The innovative design makes the Lifting Wedges not only practical but also a
                        perfect complement to high-tonnage skates. The DLW-18S model boasts a self-contained hydraulic
                        system, eliminating the need for hoses, couplers, or pumps. </p>
                    <div class="row col-md-12">
                        <div class="col-md-6">
                            <div class="dropdown">
                                <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    DOCUMENTATION & RESOURCES
                                </button>
                                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                    <li><a class="dropdown-item"
                                            href="https://durapac.com/products/hydraulic-tools-category/"
                                            target="_blank">MORE INFO</a></li>
                                    <li><a class="dropdown-item"
                                            href="https://www.canva.com/design/DAGvPyDPQQo/q9Eq-0iOKmFBIsz5PscE9A/view?utlId=ha0b7ee9605#1"
                                            target="_blank">BROCHURE</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div>
                                <button class="btn btn-dark" type="button" id="torqueChartDropdown"
                                    onclick="window.location.href='index.php#contact'">
                                    REQUEST A QUOTE
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mt-5 pt-5 text-center">
                    <h1 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Hydraulic
                        Presses</h1>
                    <div style="width: 80px; height: 4px; background: #e86565ff; margin: 10px auto; border-radius: 2px;"></div>
                </div>
                <div class="row align-items-center" style="background-color:lightgrey;margin-left: 0; margin-right: 0;">
                    <div class="col-md-6 d-flex mt-4" data-aos="fade-right" data-aos-duration="1000"
                        data-aos-delay="300">
                        <div class="custom-img">
                            <img src="assets\img\durapac\AXEL ASSETS FOR WEBSITE (1)\Hydraulic Presses.png"
                                alt="XLCT Hydraulic Torque Wrench" class="img-fluid rounded">
                        </div>
                    </div>
                    <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-left"
                        data-aos-duration="1000" data-aos-delay="400">
                        <h3 class="h3-black"
                            style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #e86565ff; padding-left: 10px;">
                            <span style="font-size: 2rem;">HP-10 BENCH </span><br>Hydraulic Presses
                        </h3>
                        <p class="p-black" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            The HP-10 10 Ton Bench Press is ideal for workshop pressing jobs such as the installation or
                            removal of bearings and gears, repair of electric motors or other press fit parts. </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button"
                                        id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item"
                                                href="https://durapac.com/product_categories/presses/"
                                                target="_blank">MORE INFO</a></li>
                                        <li><a class="dropdown-item"
                                                href="https://www.canva.com/design/DAGvPyDPQQo/q9Eq-0iOKmFBIsz5PscE9A/view?utlId=ha0b7ee9605#1"
                                                target="_blank">BROCHURE</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <button class="btn btn-dark" type="button" id="torqueChartDropdown"
                                        onclick="window.location.href='index.php#contact'">
                                        REQUEST A QUOTE
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center" style="margin-left: 0; margin-right: 0;">
                    <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-right"
                        data-aos-duration="1000" data-aos-delay="300">
                        <h3
                            style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #e86565ff; padding-left: 10px;">
                            <span style="font-size: 2rem;">HRP-SERIES ROLL FRAME </span><br>Hydraulic Presses
                        </h3>

                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            Delivers high-speed operation and simple setup to keep your projects moving. With a highly
                            visible pressure gauge for more accurate readings, it's built for precision and performance
                            in wind, power generation, oil and gas.
                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button"
                                        id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item"
                                                href="https://durapac.com/product_categories/presses/"
                                                target="_blank">MORE INFO</a></li>
                                        <li><a class="dropdown-item"
                                                href="https://www.canva.com/design/DAGvPyDPQQo/q9Eq-0iOKmFBIsz5PscE9A/view?utlId=ha0b7ee9605#1"
                                                target="_blank">BROCHURE</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <button class="btn btn-dark" type="button" id="torqueChartDropdown"
                                        onclick="window.location.href='index.php#contact'">
                                        REQUEST A QUOTE
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex mt-4" data-aos="fade-left" data-aos-duration="1000"
                        data-aos-delay="400">
                        <div class="custom-img">
                            <img src="assets\img\durapac\AXEL ASSETS FOR WEBSITE (1)\Hydraulic Presses (2).png"
                                alt="EDGE S Hydraulic Torque Wrench" class="img-fluid rounded">
                        </div>
                    </div>
                </div>
                <div class="row align-items-center" style="background-color:lightgrey;margin-left: 0; margin-right: 0;">
                    <div class="col-md-6 d-flex mt-4" data-aos="fade-right" data-aos-duration="1000"
                        data-aos-delay="300">
                        <div class="custom-img">
                            <img src="assets\img\durapac\AXEL ASSETS FOR WEBSITE (1)\Hydraulic Presses (3).png"
                                alt="XLCT Hydraulic Torque Wrench" class="img-fluid rounded">
                        </div>
                    </div>
                    <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-left"
                        data-aos-duration="1000" data-aos-delay="400">
                        <h3 class="h3-black"
                            style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #e86565ff; padding-left: 10px;">
                            <span style="font-size: 2rem;">AIR HYDRAULIC DRIVEN H-FRAME </span><br>Hydraulic Presses
                        </h3>
                        <p class="p-black" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            Designed to simplify your underwater operations. Built for the harsh subsea environment, it
                            delivers the high pressure you need for secure, leak-free tensioning, ensuring your work is
                            done right the first time. Its remote control capabilities boost safety and efficiency.
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button"
                                        id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item"
                                                href="https://durapac.com/product_categories/presses/"
                                                target="_blank">MORE INFO</a></li>
                                        <li><a class="dropdown-item"
                                                href="https://www.canva.com/design/DAGvPyDPQQo/q9Eq-0iOKmFBIsz5PscE9A/view?utlId=ha0b7ee9605#1"
                                                target="_blank">BROCHURE</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <button class="btn btn-dark" type="button" id="torqueChartDropdown"
                                        onclick="window.location.href='index.php#contact'">
                                        REQUEST A QUOTE
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt-5 pt-5 text-center">
                    <h1 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Air Bag</h1>
                    <div style="width: 80px; height: 4px; background: #e86565ff; margin: 10px auto; border-radius: 2px;"></div>
                </div>
            </div>

            <div class="row align-items-center" style="margin-left: 0; margin-right: 0;">
                <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-right" data-aos-duration="1000"
                    data-aos-delay="300">
                    <h3
                        style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #e86565ff; padding-left: 10px;">
                        <span style="font-size: 2rem;">KPL-SERIES HIGH PRESSURE</span><br>Air Bag
                    </h3>

                    <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                        The KPL-Series High Pressure Air Bags feature Kevlar® cord reinforcing. The patented
                        construction utilises state-of-the-art design for long life and ease of use. The bags are thin,
                        light and simple to use. Eleven models of air bag are available with lifting capacities ranging
                        from 800 to 70,400 kg. </p>
                    <div class="row col-md-12">
                        <div class="col-md-6">
                            <div class="dropdown">
                                <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    DOCUMENTATION & RESOURCES
                                </button>
                                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                    <li><a class="dropdown-item"
                                            href="https://durapac.com/product/kpl-series/"
                                            target="_blank">MORE INFO</a></li>
                                    <li><a class="dropdown-item"
                                            href="https://www.canva.com/design/DAGvPyDPQQo/q9Eq-0iOKmFBIsz5PscE9A/view?utlId=ha0b7ee9605#1"
                                            target="_blank">BROCHURE</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div>
                                <button class="btn btn-dark" type="button" id="torqueChartDropdown"
                                    onclick="window.location.href='index.php#contact'">
                                    REQUEST A QUOTE
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex mt-4" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                    <div class="custom-img">
                        <img src="assets\img\durapac\AXEL ASSETS FOR WEBSITE (1)\air bags.png"
                            alt="EDGE S Hydraulic Torque Wrench" class="img-fluid rounded">
                    </div>
                </div>
            </div>
        </div>


        <div class="container text-center py-4">
            <div class="social-links mb-2" data-aos="fade-up" data-aos-delay="300">
                <a href="https://www.facebook.com/boltimizercorp" target="_blank" class="social-link">
                    <i class="bi bi-facebook"></i>
                </a>
                <a href="https://www.tiktok.com/@innoverse24?is_from_webapp=1&sender_device=pc" target="_blank" class="social-link">
                    <i class="bi bi-tiktok"></i>
                </a>
                <a href="https://www.linkedin.com/company/boltimizer-corp/posts/?feedView=all" target="_blank" class="social-link">
                    <i class="bi bi-linkedin"></i>
                </a>
            </div>
            <p class="text-muted" data-aos="fade-up" data-aos-delay="300" style="font-size:large;">
                © <?php echo date('Y'); ?> Boltimizer Corporation. All rights reserved.
            </p>
        </div>
        <?php include("footer.php"); ?>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init({
                duration: 1000,
                once: true,
                offset: 50, // Reduced offset for better mobile experience
                disable: function() {
                    return window.innerWidth < 576; // Disable AOS on very small screens if needed
                }
            });
        </script>
</body>

</html>