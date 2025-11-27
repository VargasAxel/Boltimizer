<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/kentusa.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="assets\img\Kentusa\Kentusa_icon.png">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <title>Kentusa</title>
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
            src="https://www.youtube.com/embed/V4p5JczkQvY?autoplay=1&mute=1&loop=1&playlist=V4p5JczkQvY&controls=0&showinfo=0&rel=0&modestbranding=1&iv_load_policy=3&disablekb=1&fs=0&cc_load_policy=0&playsinline=1"
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
            src="https://www.youtube.com/embed/V4p5JczkQvY?autoplay=1&mute=1&loop=1&playlist=V4p5JczkQvY&controls=0&showinfo=0&rel=0&modestbranding=1&iv_load_policy=3&disablekb=1&fs=0&cc_load_policy=0&playsinline=1"
            frameborder="0"
            allow="autoplay; encrypted-media; picture-in-picture"
            allowfullscreen
            loading="lazy">
        </iframe>
    </div> -->

    <div class="row ms-3">
        <div class="col-md-12 text-center mt-5 me-3 pt-5" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
            <h1 style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"><span><b>Services</b></span></h1>
            <div style="width: 80px; height: 4px; background: #9d0c0cff; margin: 10px auto; border-radius: 2px;"></div>
            <p>
                <strong>Kent USA</strong> stands at the forefront of precision engineering, providing world-class <strong>CNC machines</strong> and
                <strong>Manual tools</strong> built for performance and longevity. From <strong>Milling</strong> and
                <strong>Turning</strong> to <strong>Grinding</strong> and <strong>Fabrication</strong>,
                our solutions are trusted by manufacturers across industries to deliver consistent <strong>accuracy</strong> and
                <strong>efficiency</strong>.

            </p>
        </div>

        <div class="row">
            <div class="col-md-12 text-center ms-2 mt-5 pt-5 ">
                <h1 style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"><b> Products</b></h1>
                <div style="width: 80px; height: 4px; background: #9d0c0cff; margin: 10px auto; border-radius: 2px;"></div>
                <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 2rem; line-height: 1.6; max-width: 80vw; margin: 0 auto;" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">

                    <strong>Kent USA</strong> offers a comprehensive range of <strong>precision machine tools</strong> designed for
                    <strong>performance</strong>, <strong>reliability</strong>, and <strong>long-term durability</strong>. From advanced
                    <strong>CNC lathes</strong> and <strong>milling centers</strong> to <strong>grinding machines</strong> and
                    <strong>manual tools</strong>, our products deliver consistent <strong>accuracy</strong> and <strong>efficiency</strong>.
                    Trusted by industries worldwide—such as <strong>aerospace</strong>, <strong>automotive</strong>, and <strong>
                        general manufacturing</strong>—<strong>Kent USA machines</strong> empower businesses to achieve superior <strong>productivity</strong> and
                    <strong>quality</strong> with every operation.

                </p>
            </div>


            <div class="container-fluid px-5 ps-5">
                <div class="row">
                    <div class="col-md-12 text-center mt-5 pt-5" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                        <h1>Grinders</h1>
                        <div style="width: 80px; height: 4px; background: #9d0c0cff; margin: 10px auto; border-radius: 2px;"></div>
                    </div>
                </div>
                <div class="row align-items-center" style="margin-left: 0; margin-right: 0;">
                    <div class="col-md-6 d-flex mt-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                        <div class="custom-img">
                            <img src="assets\img\Kentusa\Grinder\191.png"
                                alt="AVANTI Hydraulic Torque Wrench"
                                class="img-fluid rounded">
                        </div>
                    </div>
                    <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9C1D12; padding-left: 10px;"><span style="font-size: 2rem;"><b>MANUAL HAND FEED GRINDERS</b></span><br> Grinders</h3>
                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            Kent USA stocks manual hand feed surface grinders with a working capacity of 6” x 18” to 10” x 20”. Table ways use hardened steel linear rails with precision balls for smooth and effortless hand feed.
                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://www.kentusa.com.ph/product/manual-hand-feed-grinders/" target="_blank">MORE INFO</a></li>
                                        <li><a class="dropdown-item" href="https://www.canva.com/design/DAGvPyDPQQo/q9Eq-0iOKmFBIsz5PscE9A/view?utm_content=DAGvPyDPQQo&utm_campaign=designshare&utm_medium=link2&utm_source=uniquelinks&utlId=ha0b7ee9605" target="_blank">BROCHURE</a></li>
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
                        <h3 class="h3-black" style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9C1D12; padding-left: 10px;"><span style="font-size: 2rem;">AUTOMATIC FEED GRINDERS</span><br>Grinders</h3>
                        <p class="p-black" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            Designed for high-volume production and intricate finishing operations, these grinders feature intuitive operator controls, automated 2- or 3-axis movements, and robust hydraulic table drives that ensure smooth, consistent performance across a diverse range of workpiece sizes—from compact 8” x 18” tables ideal for small parts to expansive 34” x 128” models suited for large-scale components in aerospace, automotive, and tool & die industries.</p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://www.kentusa.com.ph/product/automatic-feed-grinders/" target="_blank">MORE INFO</a></li>
                                        <li><a class="dropdown-item" href="https://www.canva.com/design/DAGvPyDPQQo/q9Eq-0iOKmFBIsz5PscE9A/view?utm_content=DAGvPyDPQQo&utm_campaign=designshare&utm_medium=link2&utm_source=uniquelinks&utlId=ha0b7ee9605" target="_blank">BROCHURE</a></li>
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
                            <img src="assets\img\Kentusa\Grinder\192.png"
                                alt="MXT Hydraulic Torque Wrench"
                                class="img-fluid rounded">
                        </div>
                    </div>
                </div>

                <div class="row align-items-center no-gutters" style=" margin-left: 0; margin-right: 0;">
                    <div class="col-md-6 d-flex mt-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                        <div class="custom-img">
                            <img src="assets\img\Kentusa\Grinder\193.png"
                                alt="VERSA Hydraulic Torque Wrench"
                                class="img-fluid rounded">
                        </div>
                    </div>
                    <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9C1D12; padding-left: 10px;"><span style="font-size: 2rem;">AUTOMATIC FEED GRINDERS (SD & PNC)</span><br>Grinders</h3>
                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            Kent USA offers high-performance surface grinders equipped with SD (Simple Digital) and PNC (Programmable Numerical Control) controls, delivering precision, efficiency, and ease of use for various grinding applications. </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://www.kentusa.com.ph/product/automatic-feed-grinders/" target="_blank">MORE INFO</a></li>
                                        <li><a class="dropdown-item" href="https://www.canva.com/design/DAGvPyDPQQo/q9Eq-0iOKmFBIsz5PscE9A/view?utm_content=DAGvPyDPQQo&utm_campaign=designshare&utm_medium=link2&utm_source=uniquelinks&utlId=ha0b7ee9605" target="_blank">BROCHURE</a></li>

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
                        <h3 class="h3-black" style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9C1D12; padding-left: 10px;"><span style="font-size: 2rem;">DOUBLE COLUMN GRINDERS</span><br>Grinders</h3>
                        <p class="p-black" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            Kent USA Double Column Surface Grinders is a large, heavy-duty fixed-beam surface grinders, well-suited for large die-mold applications and high precision grinding of machine bases and ways.
                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://www.kentusa.com.ph/product-categories/grinders/">MORE INFO</a></li>
                                        <li><a class="dropdown-item" href="https://www.canva.com/design/DAGvPyDPQQo/q9Eq-0iOKmFBIsz5PscE9A/view?utm_content=DAGvPyDPQQo&utm_campaign=designshare&utm_medium=link2&utm_source=uniquelinks&utlId=ha0b7ee9605" target="_blank">BROCHURE</a></li>

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
                            <img src="assets\img\Kentusa\Grinder\194.png"
                                alt="STEALTH Hydraulic Torque Wrench"
                                class="img-fluid rounded">
                        </div>
                    </div>
                </div>

                <div class="row align-items-center" style="margin-left: 0; margin-right: 0;">
                    <div class="col-md-6 d-flex mt-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                        <div class="custom-img">
                            <img src="assets\img\Kentusa\Grinder\195.png"
                                alt="XLCT Hydraulic Torque Wrench"
                                class="img-fluid rounded">
                        </div>
                    </div>
                    <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9C1D12; padding-left: 10px;"><span style="font-size: 2rem;">CENTERLESS GRINDERS</span><br>Grinder</h3>
                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            For high-volume production runs and generating rapid rounding and accuracy, Kent USA features a line of Centerless Grinders. The machines in this collection allow for very tight dimensions and roundness tolerance controls. </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">

                                        <li><a class="dropdown-item" href="https://www.kentusa.com.ph/product-categories/grinders/">MORE INFO</a></li>
                                        <li><a class="dropdown-item" href="https://www.canva.com/design/DAGvPyDPQQo/q9Eq-0iOKmFBIsz5PscE9A/view?utm_content=DAGvPyDPQQo&utm_campaign=designshare&utm_medium=link2&utm_source=uniquelinks&utlId=ha0b7ee9605" target="_blank">BROCHURE</a></li>
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
                        <h3 class="h3-black" style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9C1D12; padding-left: 10px;"><span style="font-size: 2rem;">CYLINDRICAL GRINDERS</span><br>Grinders</h3>

                        <p class="p-black" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            The machines in this collection allow for very tight dimensions and roundness tolerance controls. Kent USA Cylindrical Grinders are capable of grinding pieces of up to 13″ in diameter.
                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://www.kentusa.com.ph/product/cylindrical-grinders/">MORE INFO</a></li>
                                        <li><a class="dropdown-item" href="https://www.canva.com/design/DAGvPyDPQQo/q9Eq-0iOKmFBIsz5PscE9A/view?utm_content=DAGvPyDPQQo&utm_campaign=designshare&utm_medium=link2&utm_source=uniquelinks&utlId=ha0b7ee9605" target="_blank">BROCHURE</a></li>

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
                            <img src="assets\img\Kentusa\Grinder\196.png"
                                alt="EDGE S Hydraulic Torque Wrench"
                                class="img-fluid rounded">
                        </div>
                    </div>
                </div>

                <div class="row align-items-center" style="margin-left: 0; margin-right: 0;">
                    <div class="col-md-6 d-flex mt-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                        <div class="custom-img">
                            <img src="assets\img\Kentusa\Grinder\197.png"
                                alt="jGun SINGLE SPEED Pneumatic Torque Tool"
                                class="img-fluid rounded">
                        </div>
                    </div>
                    <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9C1D12; padding-left: 10px;"><span style="font-size: 2rem;">KNIFE GRINDERS</span><br>Grinders</h3>

                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            These grinders feature fine grinding by variable speed motor to optimize grinding of high-speed steel knives or carbide knives. Dual coarse and fine grinding wheels allow for grinding efficiency and fine finish.
                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://www.kentusa.com.ph/product-categories/grinders/">MORE INFO</a></li>
                                        <li><a class="dropdown-item" href="https://www.canva.com/design/DAGvPyDPQQo/q9Eq-0iOKmFBIsz5PscE9A/view?utm_content=DAGvPyDPQQo&utm_campaign=designshare&utm_medium=link2&utm_source=uniquelinks&utlId=ha0b7ee9605" target="_blank">BROCHURE</a></li>


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
                        <h3 class="h3-black" style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9C1D12; padding-left: 10px;"><span style="font-size: 2rem;">TOOL AND CUTTER GRINDERS</span><br>Grinders</h3>
                        <p class="p-black" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            Tool & Cutter Grinders line offer precision and reliability and are perfect for sharpening milling cutters and tool bits as well as other cutting tools. These machines are engineered for maximum accuracy and minimal downtime. </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://www.kentusa.com.ph/product/tool-and-cutter-grinders/">MORE INFO</a></li>
                                        <li><a class="dropdown-item" href="https://www.canva.com/design/DAGvPyDPQQo/q9Eq-0iOKmFBIsz5PscE9A/view?utm_content=DAGvPyDPQQo&utm_campaign=designshare&utm_medium=link2&utm_source=uniquelinks&utlId=ha0b7ee9605" target="_blank">BROCHURE</a></li>

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
                            <img src="assets\img\Kentusa\Grinder\198.png"
                                alt="MXT Hydraulic Torque Wrench"
                                class="img-fluid rounded">
                        </div>
                    </div>
                </div>
                <div class="row align-items-center no-gutters" style=" margin-left: 0; margin-right: 0;">
                    <div class="col-md-6 d-flex mt-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                        <div class="custom-img">
                            <img src="assets\img\Kentusa\Grinder\199.png"
                                alt="VERSA Hydraulic Torque Wrench"
                                class="img-fluid rounded">
                        </div>
                    </div>

                    <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9C1D12; padding-left: 10px;"><span style="font-size: 2rem;">ROTARY GRINDERS</span><br>Grinders</h3>
                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            Rotary Grinders are capable of working on hard, brittle metal, and mold materials. Our rotary grinders are built with Meehanite Class FC 30 casting for high rigidity and wear resistance, maintaining operation accuracy.
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://www.kentusa.com.ph/product-categories/grinders/">MORE INFO</a></li>
                                        <li><a class="dropdown-item" href="https://www.canva.com/design/DAGvPyDPQQo/q9Eq-0iOKmFBIsz5PscE9A/view?utm_content=DAGvPyDPQQo&utm_campaign=designshare&utm_medium=link2&utm_source=uniquelinks&utlId=ha0b7ee9605" target="_blank">BROCHURE</a></li>

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
                    <div class="col-md-12 text-center mt-5 pt-5" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                        <h1>Lathes</h1>
                        <div style="width: 80px; height: 4px; background: #9d0c0cff; margin: 10px auto; border-radius: 2px;"></div>
                    </div>
                </div>
                <div class="row align-items-center" style="background-color:lightgrey;margin-left: 0; margin-right: 0;">
                    <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                        <h3 class="h3-black" style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9C1D12; padding-left: 10px;"><span style="font-size: 2rem;">MANUAL ECONOMY LATHES</span><br>Lathes</h3>
                        <p class="p-black" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            Manual Economy Lathes put the same Kent USA reliability and precision within reach. Our economy lathes offer the same quality engineering and reliability for your regular day-to-day turning.
                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://www.kentusa.com.ph/product-categories/lathes/">MORE INFO</a></li>
                                        <li><a class="dropdown-item" href="https://www.canva.com/design/DAGvPyDPQQo/q9Eq-0iOKmFBIsz5PscE9A/view?utm_content=DAGvPyDPQQo&utm_campaign=designshare&utm_medium=link2&utm_source=uniquelinks&utlId=ha0b7ee9605" target="_blank">BROCHURE</a></li>
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
                            <img src="assets\img\Kentusa\Lathes\200.png"
                                alt="STEALTH Hydraulic Torque Wrench"
                                class="img-fluid rounded">
                        </div>
                    </div>
                </div>
                <div class="row align-items-center" style="margin-left: 0; margin-right: 0;">
                    <div class="col-md-6 d-flex mt-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                        <div class="custom-img">
                            <img src="assets\img\Kentusa\Lathes\201.png"
                                alt="AVANTI Hydraulic Torque Wrench"
                                class="img-fluid rounded">
                        </div>
                    </div>
                    <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9C1D12; padding-left: 10px;"><span style="font-size: 2rem;">CNC PRECISION TEACH</span><br>Lathes</h3>
                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            The Kent USA CNC Precision Teach Lathes offer you dependable, accurate, high-precision machining with efficient CNC technology. These machines provide maximum accuracy and minimal downtime.
                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://www.kentusa.com.ph/product-categories/lathes/">MORE INFO</a></li>
                                        <li><a class="dropdown-item" href="https://www.canva.com/design/DAGvPyDPQQo/q9Eq-0iOKmFBIsz5PscE9A/view?utm_content=DAGvPyDPQQo&utm_campaign=designshare&utm_medium=link2&utm_source=uniquelinks&utlId=ha0b7ee9605" target="_blank">BROCHURE</a></li>

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
                        <h3 class="h3-black" style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9C1D12; padding-left: 10px;"><span style="font-size: 2rem;">MANUAL BIG BORE</span><br>Lathes</h3>
                        <p class="p-black" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            Ideal for turning large workpieces in the oil field industry, these powerful machines can easily accommodate large diameter turning and threading applications.
                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://www.kentusa.com.ph/product-categories/lathes/">MORE INFO</a></li>
                                        <li><a class="dropdown-item" href="https://www.canva.com/design/DAGvPyDPQQo/q9Eq-0iOKmFBIsz5PscE9A/view?utm_content=DAGvPyDPQQo&utm_campaign=designshare&utm_medium=link2&utm_source=uniquelinks&utlId=ha0b7ee9605" target="_blank">BROCHURE</a></li>

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
                            <img src="assets\img\Kentusa\Lathes\202.png"
                                alt="jGun DIGITAL SINGLE SPEED Pneumatic Torque Tool"
                                class="img-fluid rounded">
                        </div>
                    </div>
                </div>
                <div class="row align-items-center" style="margin-left: 0; margin-right: 0;">
                    <div class="col-md-6 d-flex mt-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                        <div class="custom-img">
                            <img src="assets\img\Kentusa\Lathes\203.png"
                                alt="Pneumatic Impact Wrench"
                                class="img-fluid rounded">
                        </div>
                    </div>
                    <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9C1D12; padding-left: 10px;"><span style="font-size: 2rem;">CNC ECONOMY TEACH</span><br>Lathes</h3>
                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            Hilman Traksporter is a remote controlled self-propelled crawler system designed to move heavy machinery or other heavy objects safely, easily and efficiently.

                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://www.kentusa.com.ph/product-categories/lathes/">MORE INFO</a></li>
                                        <li><a class="dropdown-item" href="https://www.canva.com/design/DAGvPyDPQQo/q9Eq-0iOKmFBIsz5PscE9A/view?utm_content=DAGvPyDPQQo&utm_campaign=designshare&utm_medium=link2&utm_source=uniquelinks&utlId=ha0b7ee9605" target="_blank">BROCHURE</a></li>

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
                <
                    <div class="row align-items-center" style="background-color:lightgrey;margin-left: 0; margin-right: 0;">
                    <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                        <h3 class="h3-black" style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9C1D12; padding-left: 10px;"><span style="font-size: 2rem;">CNC PRECISION TEACH</span><br>Lathes</h3>
                        <p class="p-black" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            The Kent USA CNC Precision Teach Lathes offer you dependable, accurate, high-precision machining with efficient CNC technology. These machines provide maximum accuracy and minimal downtime. </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://www.kentusa.com.ph/product-categories/lathes/">MORE INFO</a></li>
                                        <li><a class="dropdown-item" href="https://www.canva.com/design/DAGvPyDPQQo/q9Eq-0iOKmFBIsz5PscE9A/view?utm_content=DAGvPyDPQQo&utm_campaign=designshare&utm_medium=link2&utm_source=uniquelinks&utlId=ha0b7ee9605" target="_blank">BROCHURE</a></li>

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
                            <img src="assets\img\Kentusa\Lathes\204.png"
                                alt=""
                                class="img-fluid rounded">
                        </div>
                    </div>
            </div>

            <div class="row align-items-center" style="margin-left: 0; margin-right: 0;">
                <div class="col-md-6 d-flex mt-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                    <div class="custom-img">
                        <img src="assets\img\Kentusa\Lathes\205.png"
                            alt="LITHIUM SERIES II Electric Torque Tool"
                            class="img-fluid rounded">
                    </div>
                </div>
                <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                    <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9C1D12; padding-left: 10px;"><span style="font-size: 2rem;">CNC LARGE BORE TURNING CENTERS</span><br>Lathes</h3>
                    <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                        The Kent CNC Heavy Duty Boring Turning Center Series provides 2 excellent configurations for heavy duty turning for large parts. </p>
                    <div class="row col-md-12">
                        <div class="col-md-6">
                            <div class="dropdown">
                                <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                    DOCUMENTATION & RESOURCES
                                </button>
                                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                    <li><a class="dropdown-item" href="https://www.kentusa.com.ph/product-categories/lathes/">MORE INFO</a></li>
                                    <li><a class="dropdown-item" href="https://www.canva.com/design/DAGvPyDPQQo/q9Eq-0iOKmFBIsz5PscE9A/view?utm_content=DAGvPyDPQQo&utm_campaign=designshare&utm_medium=link2&utm_source=uniquelinks&utlId=ha0b7ee9605" target="_blank">BROCHURE</a></li>

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
                <div class="col-md-12 text-center mt-5 pt-5" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                    <h1>Milling Machines</h1>
                    <div style="width: 80px; height: 4px; background: #9d0c0cff; margin: 10px auto; border-radius: 2px;"></div>
                </div>
            </div>
            <div class="row align-items-center" style="background-color:lightgrey;margin-left: 0; margin-right: 0;">
                <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                    <h3 class="h3-black" style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9C1D12; padding-left: 10px;"><span style="font-size: 2rem;">MANUAL KNEE MILLS</span><br>Milling Machines</h3>
                    <p class="p-black" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                        Our manual knee mills are ideal for prototype, tool room and R&D work, as well as part of training programs and everyday machining. You will be able to perform practically any milling operation on a knee mill.
                    </p>
                    <div class="row col-md-12">
                        <div class="col-md-6">
                            <div class="dropdown">
                                <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                    DOCUMENTATION & RESOURCES
                                </button>
                                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                    <li><a class="dropdown-item" href="https://www.kentusa.com.ph/product-categories/milling-machines/">MORE INFO</a></li>
                                    <li><a class="dropdown-item" href="https://www.canva.com/design/DAGvPyDPQQo/q9Eq-0iOKmFBIsz5PscE9A/view?utm_content=DAGvPyDPQQo&utm_campaign=designshare&utm_medium=link2&utm_source=uniquelinks&utlId=ha0b7ee9605" target="_blank">BROCHURE</a></li>

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
                        <img src="assets\img\Kentusa\Milling Machine\206.png"
                            alt="LION GUN Electric Torque Tool"
                            class="img-fluid rounded">
                    </div>
                </div>
            </div>
            <div class="row align-items-center" style="margin-left: 0; margin-right: 0;">
                <div class="col-md-6 d-flex mt-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                    <div class="custom-img">
                        <img src="assets\img\Kentusa\Milling Machine\207.png"
                            alt="LION GUN Dual Speed Electric Torque Tool"
                            class="img-fluid rounded">
                    </div>
                </div>
                <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                    <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9C1D12; padding-left: 10px;"><span style="font-size: 2rem;">CNC KNEE MILLS</span><br>Milling Machine</h3>
                    <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                        Our industry-leading CNC knee mill with the Acu-Rite MillPWRG2control brings powerful CNC capabilities to the tool room with easy-to-learn conversational programming and advanced canned cycles to empower everyone on the shop floor for greater productivity. </p>
                    <div class="row col-md-12">
                        <div class="col-md-6">
                            <div class="dropdown">
                                <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                    DOCUMENTATION & RESOURCES
                                </button>
                                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                    <li><a class="dropdown-item" href="https://www.kentusa.com.ph/product-categories/milling-machines/">MORE INFO</a></li>
                                    <li><a class="dropdown-item" href="https://www.canva.com/design/DAGvPyDPQQo/q9Eq-0iOKmFBIsz5PscE9A/view?utm_content=DAGvPyDPQQo&utm_campaign=designshare&utm_medium=link2&utm_source=uniquelinks&utlId=ha0b7ee9605" target="_blank">BROCHURE</a></li>

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
                    <h3 class="h3-black" style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9C1D12; padding-left: 10px;"><span style="font-size: 2rem;">CNC BED MILLS & VERTICAL<br>MACHINING CENTERS</span><br> Milling Machine</h3>
                    <p class="p-black" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                        CNC Bed Mills & Vertical Machining Centers offer more rigidity and travel. These are geared towards facilities that require high-production capacity with high speed and accuracy
                    </p>
                    <div class="row col-md-12">
                        <div class="col-md-6">
                            <div class="dropdown">
                                <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                    DOCUMENTATION & RESOURCES
                                </button>
                                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                    <li><a class="dropdown-item" href="https://www.kentusa.com.ph/product-categories/milling-machines/">MORE INFO</a></li>
                                    <li><a class="dropdown-item" href="https://www.canva.com/design/DAGvPyDPQQo/q9Eq-0iOKmFBIsz5PscE9A/view?utm_content=DAGvPyDPQQo&utm_campaign=designshare&utm_medium=link2&utm_source=uniquelinks&utlId=ha0b7ee9605" target="_blank">BROCHURE</a></li>

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
                        <img src="assets\img\Kentusa\Milling Machine\208.png"
                            alt="LION GUN X Electric Torque Tool"
                            class="img-fluid rounded">
                    </div>
                </div>
            </div>

            <div class="row align-items-center" style="margin-left: 0; margin-right: 0;">
                <div class="col-md-6 d-flex mt-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                    <div class="custom-img">
                        <img src="assets\img\Kentusa\Milling Machine\209.png"
                            class="img-fluid rounded">
                    </div>
                </div>
                <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                    <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9C1D12; padding-left: 10px;"><span style="font-size: 2rem;">COMBINATION HORIZONTAL AND<br>VERTICAL MILLS</span><br>Milling Machine</h3>
                    <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                        Kent USA Combo Horizontal/Vertical Mills offer both the capabilities of a Vertical Mill and a Horizontal Mill in one design.
                    </p>
                    <div class="row col-md-12">
                        <div class="col-md-6">
                            <div class="dropdown">
                                <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                    DOCUMENTATION & RESOURCES
                                </button>
                                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                    <li><a class="dropdown-item" href="https://www.kentusa.com.ph/product-categories/milling-machines/">MORE INFO</a></li>
                                    <li><a class="dropdown-item" href="https://www.canva.com/design/DAGvPyDPQQo/q9Eq-0iOKmFBIsz5PscE9A/view?utm_content=DAGvPyDPQQo&utm_campaign=designshare&utm_medium=link2&utm_source=uniquelinks&utlId=ha0b7ee9605" target="_blank">BROCHURE</a></li>

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
                    <h3 class="h3-black" style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9C1D12; padding-left: 10px;"><span style="font-size: 2rem;">UNIVERSAL MILLS</span><br>Milling Machine</h3>
                    <p class="p-black" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                        Kent USA’s line of Universal Mills provides a wider range of possible tool paths and a balance of high production capacity and precision accuracy.
                    </p>
                    <div class="row col-md-12">
                        <div class="col-md-6">
                            <div class="dropdown">
                                <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                    DOCUMENTATION & RESOURCES
                                </button>
                                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                    <li><a class="dropdown-item" href="https://www.kentusa.com.ph/product-categories/milling-machines/">MORE INFO</a></li>
                                    <li><a class="dropdown-item" href="https://www.canva.com/design/DAGvPyDPQQo/q9Eq-0iOKmFBIsz5PscE9A/view?utm_content=DAGvPyDPQQo&utm_campaign=designshare&utm_medium=link2&utm_source=uniquelinks&utlId=ha0b7ee9605" target="_blank">BROCHURE</a></li>

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
                        <img src="assets\img\Kentusa\Milling Machine\210.png"
                            alt="MXT Hydraulic Torque Wrench"
                            class="img-fluid rounded">
                    </div>
                </div>
            </div>
            <div class="row align-items-center" style="margin-left: 0; margin-right: 0;">
                <div class="col-md-6 d-flex mt-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                    <div class="custom-img">
                        <img src="assets\img\Kentusa\Milling Machine\211.png"
                            alt="AVANTI Hydraulic Torque Wrench"
                            class="img-fluid rounded">
                    </div>
                </div>
                <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                    <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9C1D12; padding-left: 10px;"><span style="font-size: 2rem;">HORIZONTAL BORING MILLING MACHINE</span><br>Milling Machine</h3>
                    <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                        Kent USA’s collection of Horizontal Boring Mills incorporate many features from various machine tools and offer high precision and great stability in heavy-duty cutting.</p>
                    <div class="row col-md-12">
                        <div class="col-md-6">
                            <div class="dropdown">
                                <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                    DOCUMENTATION & RESOURCES
                                </button>
                                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                    <li><a class="dropdown-item" href="https://www.kentusa.com.ph/product-categories/milling-machines/">MORE INFO</a></li>
                                    <li><a class="dropdown-item" href="https://www.canva.com/design/DAGvPyDPQQo/q9Eq-0iOKmFBIsz5PscE9A/view?utm_content=DAGvPyDPQQo&utm_campaign=designshare&utm_medium=link2&utm_source=uniquelinks&utlId=ha0b7ee9605" target="_blank">BROCHURE</a></li>

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
                <div class="col-md-12 text-center mt-5 pt-5" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                    <h1>Electric Discharge Machines</h1>
                    <div style="width: 80px; height: 4px; background: #9d0c0cff; margin: 10px auto; border-radius: 2px;"></div>
                </div>
            </div>

            <div class="row align-items-center" style="background-color:lightgrey;margin-left: 0; margin-right: 0;">

                <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                    <h3 class="h3-black" style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9C1D12; padding-left: 10px;"><span style="font-size: 2rem;">SINKER TYPE</span><br>Electric Discharge Machines</h3>
                    <p class="p-black" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                        If (stud)bolts are to be reused, cleaning is absolutely necessary. Also the VCI guideline for flange assembly also requires that bolts be to new condition before reassembly. In order to clean bolts in the shortest possible time, we have developed the BoltClean Machine.
                    <div class="row col-md-12">
                        <div class="col-md-6">
                            <div class="dropdown">
                                <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                    DOCUMENTATION & RESOURCES
                                </button>
                                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">

                                    <li><a class="dropdown-item" href="https://www.kentusa.com.ph/product-categories/edm/">MORE INFO</a></li>
                                    <li><a class="dropdown-item" href="https://www.canva.com/design/DAGvPyDPQQo/q9Eq-0iOKmFBIsz5PscE9A/view?utm_content=DAGvPyDPQQo&utm_campaign=designshare&utm_medium=link2&utm_source=uniquelinks&utlId=ha0b7ee9605" target="_blank">BROCHURE</a></li>
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
                <div class="col-md-6 d-flex mt-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                    <div class="custom-img">
                        <img src="assets\img\Kentusa\Electric Discharge Machine\212.png"
                            alt="XLCT Hydraulic Torque Wrench"
                            class="img-fluid rounded">
                    </div>
                </div>
            </div>

            <div class="row align-items-center" style="margin-left: 0; margin-right: 0;">
                <div class="col-md-6 d-flex mt-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                    <div class="custom-img">
                        <img src="assets\img\Kentusa\Electric Discharge Machine\213.png"
                            alt="AVANTI Hydraulic Torque Wrench"
                            class="img-fluid rounded">
                    </div>
                </div>

                <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                    <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9C1D12; padding-left: 10px;"><span style="font-size: 2rem;">WIRE CUT FLUSHING TYPE </span><br>Electric Discharge Machines</h3>
                    <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                        Kent USA Flushing Type Wire EDMs can cut plates as thick as 300 mm and are ideal for creating punches, tools and dies from exotic hard metals that are difficult to machine with conventional methods.</p>
                    <div class="row col-md-12">
                        <div class="col-md-6">
                            <div class="dropdown">
                                <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                    DOCUMENTATION & RESOURCES
                                </button>
                                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                    <li><a class="dropdown-item" href="https://www.kentusa.com.ph/product-categories/edm/">MORE INFO</a></li>
                                    <li><a class="dropdown-item" href="https://www.canva.com/design/DAGvPyDPQQo/q9Eq-0iOKmFBIsz5PscE9A/view?utm_content=DAGvPyDPQQo&utm_campaign=designshare&utm_medium=link2&utm_source=uniquelinks&utlId=ha0b7ee9605" target="_blank">BROCHURE</a></li>

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

                <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                    <h3 class="h3-black" style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9C1D12; padding-left: 10px;"><span style="font-size: 2rem;">WIRE CUT SUBMERGE</span><br>Electric Discharge Machines</h3>
                    <p class="p-black" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                        Kent USA Wire EDM Submerge Type are excellent at maintaining stable part and lower arm, fixture and worktable temperatures and thus resulting in straighter, more accurate cuts.</p>
                    <div class="row col-md-12">
                        <div class="col-md-6">
                            <div class="dropdown">
                                <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                    DOCUMENTATION & RESOURCES
                                </button>
                                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">

                                    <li><a class="dropdown-item" href="https://www.kentusa.com.ph/product-categories/edm/">MORE INFO</a></li>
                                    <li><a class="dropdown-item" href="https://www.canva.com/design/DAGvPyDPQQo/q9Eq-0iOKmFBIsz5PscE9A/view?utm_content=DAGvPyDPQQo&utm_campaign=designshare&utm_medium=link2&utm_source=uniquelinks&utlId=ha0b7ee9605" target="_blank">BROCHURE</a></li>
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
                <div class="col-md-6 d-flex mt-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                    <div class="custom-img">
                        <img src="assets\img\Kentusa\Electric Discharge Machine\212.png"
                            alt="XLCT Hydraulic Torque Wrench"
                            class="img-fluid rounded">
                    </div>
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