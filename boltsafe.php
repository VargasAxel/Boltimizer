<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/boltsafe.css" rel="stylesheet">
    <link href="assets/css/product-hover.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="assets\img\boltsafe\BOLTSAFE-logo.png">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <title>Boltsafe</title>
    <style>
        /* Custom CSS for responsiveness */
        body {
            overflow-x: hidden;
            display: flex;
            align-items: center;
            justify-content: center;

        }

        .fullscreen-video {
            position: relative;
            width: 100%;
            padding-top: 56.25%;
            /* 16:9 Aspect Ratio */
            overflow: hidden;
        }

        .fullscreen-video iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .custom-img {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: auto;
            overflow: hidden;
        }

        .custom-img img {
            width: 100%;
            height: auto;
            object-fit: contain;
            max-height: 500px;
            /* Limit max height for larger screens */
        }

        h1,
        h3 {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: calc(1.5rem + 2vw);
            /* Responsive font sizing */
        }

        p {
            font-size: calc(.6rem + 1vw);
            line-height: 1.6;
        }

        .see-more {
            color: #b71c1c;
            text-decoration: none;
            font-weight: 600;
        }

        .see-more:hover {
            text-decoration: underline;
        }

        .social-links a {
            font-size: calc(1.2rem + 1vw);
            margin: 0 10px;
            color: #333;
        }

        .social-links a:hover {
            color: #b71c1c;
        }

        /* Responsive adjustments */
        @media (max-width: 767.98px) {
            .container-fluid {
                padding-left: 15px;
                padding-right: 15px;
            }

            h1 {
                font-size: calc(1.2rem + 2vw);
            }

            h3 {
                font-size: calc(1.1rem + 1.5vw);
            }

            p {
                font-size: calc(0.9rem + 1vw);
                margin: 0 5vw;
            }

            .custom-img img {
                max-height: 300px;
                /* Smaller images on mobile */
            }

            .row>div {
                margin-bottom: 20px;
            }
        }

        @media (max-width: 575.98px) {
            h1 {
                font-size: calc(1rem + 2vw);
            }

            h3 {
                font-size: calc(1rem + 1.2vw);
            }

            p {
                font-size: calc(0.8rem + 1vw);
            }

            .custom-img img {
                max-height: 250px;
            }

            .social-links a {
                font-size: calc(1rem + 1vw);
                margin: 0 8px;
            }
        }
    </style>
</head>

<body>
    <?php include("header.php"); ?>
    <div class="fullscreen-video" data-aos="fade-in" data-aos-duration="1200" data-aos-easing="ease-in-out">
        <!-- Background Video -->
        <iframe
            src="https://www.youtube.com/embed/-g5GNub1YvA?autoplay=1&mute=1&loop=1&playlist=-g5GNub1YvA&controls=0&showinfo=0&rel=0&modestbranding=1&iv_load_policy=3&disablekb=1&fs=0&cc_load_policy=0&playsinline=1"
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
    <!-- <div class="fullscreen-video" data-aos="fade-in" data-aos-duration="1200" data-aos-easing="ease-in-out">
        <iframe
            src="https://www.youtube.com/embed/-g5GNub1YvA?autoplay=1&mute=1&loop=1&playlist=-g5GNub1YvA&controls=0&modestbranding=1"
            frameborder="0"
            allow="autoplay; encrypted-media"
            allowfullscreen
            loading="lazy">
        </iframe>
    </div> -->
    <div class="container-fluid px-5">

        <div class="row ">
            <div class="col-md-12 text-center mt-5 pt-5" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                <h1 style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"><span><b>Services</b></span></h1>
                <div style="width: 80px; height: 4px; background: #5800fcff; margin: 10px auto; border-radius: 2px;"></div>
                <p>
                    At <strong>BoltSafe</strong>, we provide advanced <strong>bolt load monitoring solutions</strong>
                    that ensure accuracy, safety, and efficiency.
                    Our services include <strong>real-time monitoring, customized integration, expert support, and training</strong>
                    to help industries achieve reliable and optimized bolting operations.
                </p>
            </div>

            <div class="row ">
                <div class="col-md-12 text-center ps-4 mt-5 pt-5" style="margin-left: 0.5vw;">
                    <h1 style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"><b> Products</b></h1>
                    <div style="width: 80px; height: 4px; background: #5800fcff; margin: 10px auto; border-radius: 2px;"></div>
                    <p>
                    <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 1.6rem; line-height: 1.6; max-width: 80vw; margin: 0 auto;" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <strong>BoltSafe</strong> delivers advanced <strong>bolt load monitoring solutions</strong>
                        designed for <strong>accuracy, safety, and efficiency</strong>.
                        From <strong>load sensors</strong> to <strong>digital monitoring systems</strong>
                        and <strong>custom integrations</strong>, our products provide
                        <strong>real-time insights and reliable performance across industries worldwide</strong>.
                    </p>
                    </p>
                </div>

                <div class="row">
                    <div class="col-md-12 text-center mt-5 pt-5 ps-5 ms-2" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                        <h1 style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"><span><b>Continuous Monitoring System</b></span></h1>
                        <div style="width: 80px; height: 4px; background: #5800fcff; margin: 10px auto; border-radius: 2px;"></div>
                    </div>
                </div>
                <div class="col-md-12 ms-4">
                    <div class="row align-items-center" style="margin-left: 0; margin-right: 0;">
                        <div class="col-md-6 d-flex mt-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                            <div class="custom-img">
                                <img src="assets/img/boltsafe/AXEL ASSETS FOR WEBSITE/ANALOG CONVERTERS.png"
                                    alt="AVANTI Hydraulic Torque Wrench"
                                    class="img-fluid rounded">
                            </div>
                        </div>
                        <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                            <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #0a07c5ff; padding-left: 10px;"><span style="font-size: 2rem;"> RS-232 AND ANALOG CONVERTER</span><br>Continuous Monitoring System</h3>
                            <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                                Our RS-232 and Analog Converter can connect a BoltSafe CMS load cell directly to any data acquisition system (DAQ), computer or PLC. The Analog Converter automatically scales the analog output from the attached sensor. The maximum bolt load from the sensor equals 100% of the analog output (5Vdc, 10Vdc or 20mA).
                            </p>
                            <div class="row col-md-12">
                                <div class="col-md-6">
                                    <div class="dropdown">
                                        <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                            DOCUMENTATION & RESOURCES
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                            <li><a class="dropdown-item" href="https://boltsafe.com/bolt-load-cells/cms-load-cell/" target="_blank">MORE INFO</a></li>
                                            <li><a class="dropdown-item" href="https://www.canva.com/design/DAGust8rT3Y/GkOy_0C_0KnzgamBO6XD4Q/view?utm_content=DAGust8rT3Y&utm_campaign=designshare&utm_medium=link2&utm_source=uniquelinks&utlId=h50d80e5b6a" target="_blank">BROCHURE</a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <button class="btn btn-dark" type="button" id="torqueChartDropdown" onclick="window.location.href='index.php#contact'">
                                            REQUEST A QUOTE
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center" style="background-color:lightgrey;margin-left: 0; margin-right: 0;">
                        <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                            <h3 class="h3-black" style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #3501f0ff; padding-left: 10px;"><span style="font-size: 2rem;">BLE-NODE</span><br>Continuous Monitoring System</h3>
                            <p class="p-black" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                                The BLE-node offers a very long battery life of approximately five years. This makes the BLE-node extremely useful for rotating or moving applications. With our free accompanying “BoltSafe Connect” software, you can change the log interval or download the stored data from all BLE-nodes within a range of 100 meters (free sight) in one action.

                            </p>
                            <div class="row col-md-12">
                                <div class="col-md-6">
                                    <div class="dropdown">
                                        <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                            DOCUMENTATION & RESOURCES
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                            <li><a class="dropdown-item" href="https://boltsafe.com/bolt-load-cells/cms-load-cell/" target="_blank">MORE INFO</a></li>
                                            <li><a class="dropdown-item" href="https://www.canva.com/design/DAGust8rT3Y/GkOy_0C_0KnzgamBO6XD4Q/view?utm_content=DAGust8rT3Y&utm_campaign=designshare&utm_medium=link2&utm_source=uniquelinks&utlId=h50d80e5b6a" target="_blank">BROCHURE</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <button class="btn btn-dark" type="button" id="torqueChartDropdown" onclick="window.location.href='index.php#contact'">
                                            REQUEST A QUOTE
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex mt-4" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                            <div class="custom-img">
                                <img src="assets\img\boltsafe\AXEL ASSETS FOR WEBSITE\BLE-NODE.png"
                                    alt="MXT Hydraulic Torque Wrench"
                                    class="img-fluid rounded">
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center no-gutters" style=" margin-left: 0; margin-right: 0;">
                        <div class="col-md-6 d-flex mt-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                            <div class="custom-img">
                                <img src="assets\img\boltsafe\AXEL ASSETS FOR WEBSITE\BOLTSAFE (2).png"
                                    alt="VERSA Hydraulic Torque Wrench"
                                    class="img-fluid rounded">
                            </div>
                        </div>
                        <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                            <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #3501f0ff; padding-left: 10px;"><span style="font-size: 2rem;">CMS BOLT LOAD CELL</span><br>Continuous Monitoring System</h3>
                            <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                                The BoltSafe bolt load cell is a specially designed load cell (load sensor) that monitors the actual bolt load in bolted joints. CMS stands for Continuous Monitoring System, which allows for continuous monitoring of the bolt load from one connection point. Several load sensors can be interconnected within a network.
                            <div class="row col-md-12">
                                <div class="col-md-6">
                                    <div class="dropdown">
                                        <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                            DOCUMENTATION & RESOURCES
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                            <li><a class="dropdown-item" href="https://boltsafe.com/bolt-load-cells/cms-load-cell/" target="_blank">MORE INFO</a></li>
                                            <li><a class="dropdown-item" href="https://www.canva.com/design/DAGust8rT3Y/GkOy_0C_0KnzgamBO6XD4Q/view?utm_content=DAGust8rT3Y&utm_campaign=designshare&utm_medium=link2&utm_source=uniquelinks&utlId=h50d80e5b6a" target="_blank">BROCHURE</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <button class="btn btn-dark" type="button" id="torqueChartDropdown" onclick="window.location.href='index.php#contact'">
                                            REQUEST A QUOTE
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center" style="background-color:lightgrey;margin-left: 0; margin-right: 0;">
                        <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                            <h3 class="h3-black" style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #3501f0ff; padding-left: 10px;"><span style="font-size: 2rem;">CMS-NC BOLT LOAD SENSOR</span><br>Continuous Monitoring System</h3>
                            <p class="p-black" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                                The CMS-NC is the next step in the evolution of BoltSafe’s well-known CMS bolt load sensor. This sensor offers the possibility of disconnecting the cable from the CMS load cell. This is very useful in case of continuous monitoring where a permanent cable is not an option, when there’s a risk of damaging the permanent cable.

                            </p>
                            <div class="row col-md-12">
                                <div class="col-md-6">
                                    <div class="dropdown">
                                        <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                            DOCUMENTATION & RESOURCES
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                            <li><a class="dropdown-item" href="https://boltsafe.com/bolt-load-cells/cms-load-cell/" target="_blank">MORE INFO</a></li>
                                            <li><a class="dropdown-item" href="https://www.canva.com/design/DAGust8rT3Y/GkOy_0C_0KnzgamBO6XD4Q/view?utm_content=DAGust8rT3Y&utm_campaign=designshare&utm_medium=link2&utm_source=uniquelinks&utlId=h50d80e5b6a" target="_blank">BROCHURE</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <button class="btn btn-dark" type="button" id="torqueChartDropdown" onclick="window.location.href='index.php#contact'">
                                            REQUEST A QUOTE
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex mt-4" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                            <div class="custom-img">
                                <img src="assets\img\boltsafe\AXEL ASSETS FOR WEBSITE\BOLTSAFE.png"
                                    alt="STEALTH Hydraulic Torque Wrench"
                                    class="img-fluid rounded">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-5 pt-5 text-center">
                            <h1 style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"><span><b>Hydraulic Cylinders</b></span></h1>
                            <div style="width: 80px; height: 4px; background: #5800fcff; margin: 10px auto; border-radius: 2px;"></div>
                        </div>
                    </div>
                    <div class="row align-items-center" style="margin-left: 0; margin-right: 0;">
                        <div class="col-md-6 d-flex mt-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                            <div class="custom-img">
                                <img src="assets\img\boltsafe\AXEL ASSETS FOR WEBSITE\HANDHELD READER.png"
                                    alt="XLCT Hydraulic Torque Wrench"
                                    class="img-fluid rounded">
                            </div>
                        </div>

                        <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                            <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #3501f0ff; padding-left: 10px;"><span style="font-size: 2rem;">HANDHELD READER</span><br>

                            </h3>
                            <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                                The BoltSafe handheld reader is a handheld instrument that reads and stores data from both the CMS (Continuous Monitoring System) and PMS (Periodic Monitoring System) BoltSafe load cells.
                            </p>
                            <div class="row col-md-12">
                                <div class="col-md-6">
                                    <div class="dropdown">
                                        <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                            DOCUMENTATION & RESOURCES
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                            <li><a class="dropdown-item" href="https://boltsafe.com/wp-content/uploads/2023/04/BoltSafe-Product-sheet-CMS-sensor.pdf?_gl=1*181mcwi*_up*MQ..*_ga*MjEzMDYxMjk2LjE2ODcyNDM0MTM.*_ga_21M5W5PR7Q*MTY4NzI0MzQxMS4xLjEuMTY4NzI0MzQ1MC4wLjAuMA.." target="_blank">CUT SHEET</a></li>
                                            <li><a class="dropdown-item" href="https://boltsafe.com/bolt-load-cells/cms-load-cell/" target="_blank">MORE INFO</a></li>
                                            <li><a class="dropdown-item" href="https://www.canva.com/design/DAGust8rT3Y/GkOy_0C_0KnzgamBO6XD4Q/view?utm_content=DAGust8rT3Y&utm_campaign=designshare&utm_medium=link2&utm_source=uniquelinks&utlId=h50d80e5b6a" target="_blank">BROCHURE</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <button class="btn btn-dark" type="button" id="torqueChartDropdown" onclick="window.location.href='index.php#contact'">
                                            REQUEST A QUOTE
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center" style="background-color:lightgrey;margin-left: 0; margin-right: 0;">
                        <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                            <h3 class="h3-black" style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #3501f0ff; padding-left: 10px;"><span style="font-size: 2rem;">IOT-NODE</span><br>Hydraulic Cylinders</h3>
                            <p class="p-black" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                                The IoT-node is our latest technology. It is able to connect one BoltSafe CMS sensor to The Things Stack, KPN LoRa network or any other (private) LoRaWAN network. IoT stands for Internet of Things. We use the LoRaWAN technology, which stands for Long Range Wide Area Network.
                            </p>
                            <div class="row col-md-12">
                                <div class="col-md-6">
                                    <div class="dropdown">
                                        <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                            DOCUMENTATION & RESOURCES
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                            <li><a class="dropdown-item" href="https://boltsafe.com/wp-content/uploads/2022/03/BoltSafe-Manual-IoT-node.pdf" target="_blank">CUT SHEET</a></li>
                                            <li><a class="dropdown-item" href="https://boltsafe.com/bolt-load-cells/cms-load-cell/" target="_blank">MORE INFO</a></li>
                                            <li><a class="dropdown-item" href="https://www.canva.com/design/DAGust8rT3Y/GkOy_0C_0KnzgamBO6XD4Q/view?utm_content=DAGust8rT3Y&utm_campaign=designshare&utm_medium=link2&utm_source=uniquelinks&utlId=h50d80e5b6a" target="_blank">BROCHURE</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <button class="btn btn-dark" type="button" id="torqueChartDropdown" onclick="window.location.href='index.php#contact'">
                                            REQUEST A QUOTE
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex mt-4" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                            <div class="custom-img">
                                <img src="assets\img\boltsafe\AXEL ASSETS FOR WEBSITE\IoT-node.png"
                                    alt="EDGE S Hydraulic Torque Wrench"
                                    class="img-fluid rounded">
                            </div>
                        </div>
                    </div>

                    <div class="row align-items-center" style="margin-left: 0; margin-right: 0;">
                        <div class="col-md-6 d-flex mt-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                            <div class="custom-img">
                                <img src="assets\img\boltsafe\AXEL ASSETS FOR WEBSITE\NETWORK WITH PDI (2).png"
                                    alt="jGun SINGLE SPEED Pneumatic Torque Tool"
                                    class="img-fluid rounded">
                            </div>
                        </div>
                        <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                            <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #3501f0ff; padding-left: 10px;"><span style="font-size: 2rem;">NETWORK WITH PDI-NT</span><br></h3>

                            <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                                Our network with PDI-NT readout method consists of a PDI-NT (Power Data Interface New Technology) box and a CM-1000 box or a network of these boxes. Using these boxes, the bolt load from CMS sensors can be continuously visualized. The PDI-NT is a connection box that connects the BoltSafe sensor network.

                            </p>
                            <div class="row col-md-12">
                                <div class="col-md-6">
                                    <div class="dropdown">
                                        <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                            DOCUMENTATION & RESOURCES
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                            <li><a class="dropdown-item" href="https://boltsafe.com/wp-content/uploads/2021/06/Manual-Network-with-PDI-v2.pdf" target="_blank">CUT SHEET</a></li>
                                            <li><a class="dropdown-item" href="https://boltsafe.com/bolt-load-cells/cms-load-cell/" target="_blank">MORE INFO</a></li>
                                            <li><a class="dropdown-item" href="https://www.canva.com/design/DAGust8rT3Y/GkOy_0C_0KnzgamBO6XD4Q/view?utm_content=DAGust8rT3Y&utm_campaign=designshare&utm_medium=link2&utm_source=uniquelinks&utlId=h50d80e5b6a" target="_blank">BROCHURE</a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <button class="btn btn-dark" type="button" id="torqueChartDropdown" onclick="window.location.href='index.php#contact'">
                                            REQUEST A QUOTE
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-5 pt-5 text-center">
                            <h1 style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"><span><b>Hydraulic Pumps / Power Units</b></span></h1>
                            <div style="width: 80px; height: 4px; background: #5800fcff; margin: 10px auto; border-radius: 2px;"></div>
                        </div>
                    </div>
                    <div class="row align-items-center" style="background-color:lightgrey;margin-left: 0; margin-right: 0;">
                        <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                            <h3 class="h3-black" style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #5800fcff; padding-left: 10px;"><span style="font-size: 2rem;">NETWORK WITH PDI-NT</span><br>Hydraulic Pumps / Power Units</h3>
                            <p class="p-black" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                                The PDI-NT makes it possible to have a standalone BoltSafe system. When the system is configured, the software automatically assigns node numbers to each unit connected to the system. There is no need for any extra settings or coding during installation. The data is directly logged to the PDI-NT.</p>

                            <div class="row col-md-12">
                                <div class="col-md-6">
                                    <div class="dropdown">
                                        <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                            DOCUMENTATION & RESOURCES
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                             <li><a class="dropdown-item" href="https://boltsafe.com/wp-content/uploads/2021/06/Manual-Network-with-PDI-NT-v2.pdf" target="_blank">CUT SHEET</a></li>
                                            <li><a class="dropdown-item" href="https://boltsafe.com/bolt-load-cells/cms-load-cell/" target="_blank">MORE INFO</a></li>
                                            <li><a class="dropdown-item" href="https://www.canva.com/design/DAGust8rT3Y/GkOy_0C_0KnzgamBO6XD4Q/view?utm_content=DAGust8rT3Y&utm_campaign=designshare&utm_medium=link2&utm_source=uniquelinks&utlId=h50d80e5b6a" target="_blank">BROCHURE</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <button class="btn btn-dark" type="button" id="torqueChartDropdown" onclick="window.location.href='index.php#contact'">
                                            REQUEST A QUOTE
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 d-flex mt-4" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                            <div class="custom-img">
                                <img src="assets\img\boltsafe\AXEL ASSETS FOR WEBSITE\NETWORK WITH PDI-NT.png"
                                    alt="jGun DIGITAL SINGLE SPEED Pneumatic Torque Tool"
                                    class="img-fluid rounded">
                            </div>
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