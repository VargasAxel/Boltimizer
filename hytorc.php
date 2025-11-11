    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/css/hytorc.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <title>HYTORC</title>
        <style>
            /* Custom CSS for responsiveness */
            body {
                overflow-x: hidden;

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
            <iframe
                src="https://www.youtube.com/embed/FPJXMHOpLTw?autoplay=1&mute=1&loop=1&playlist=FPJXMHOpLTw"
                frameborder="0"
                allow="autoplay; encrypted-media"
                allowfullscreen
                loading="lazy">
            </iframe>
        </div>
        <div class="container-fluid p-5">
            <div class="row">
                <div class="col-12 text-center mt-5 pt-5" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                    <h1 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Services</h1>
                    <div style="width: 80px; height: 4px; background: #9d0c0cff; margin: 10px auto; border-radius: 2px;"></div>
                    <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200" style="padding-left: 5vw; padding-right:5vw;font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">
                        At HYTORC, we provide world-class <strong>industrial bolting solutions</strong>
                        built on advanced technology and proven reliability.
                        From <strong>customized systems</strong> to expert consultation, training,
                        and after-sales support — we ensure <strong>safety, precision, and efficiency</strong>
                        in every project.
                    </p>
                </div>
            </div>
            <div class="row text-justify mt-5 pt-5">
                <div class="col-12 text-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                    <h1 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Products</h1>
                    <div style="width: 80px; height: 4px; background: #9d0c0cff; margin: 10px auto; border-radius: 2px;"></div>
                    <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200" style="padding-left: 5vw; padding-right:5vw; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                        HYTORC offers advanced <strong>industrial bolting systems</strong> designed for
                        <strong>safety, precision, and efficiency</strong>.
                        From torque wrenches to tensioners and custom solutions, our products deliver
                        <strong>reliable performance across industries worldwide</strong>.
                    </p>
                </div>
                <div class="col-12 text-center mt-5 pt-5" data-aos="fade-up" data-aos-duration="1000">
                    <h1 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Hydraulic Tools</h1>
                    <div style="width: 80px; height: 4px; background: #9d0c0cff; margin: 10px auto; border-radius: 2px;"></div>
                </div>
                <div class="row align-items-center" style="margin-left: 0; margin-right: 0;">
                    <div class="col-md-6 d-flex mt-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                        <div class="custom-img">
                            <img src="assets/img/Hytorc/hydraulic/HYDRAULIC TOOLS.png"
                                alt="AVANTI Hydraulic Torque Wrench"
                                class="img-fluid rounded">
                        </div>
                    </div>
                    <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9d0c0cff; padding-left: 10px;"><span style="font-size: 2rem;">AVANTI </span><br> Hydraulic Torque Wrench</h3>
                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            The AVANTI Hydraulic Torque Wrench is built for the toughest bolting jobs, delivering unmatched safety, precision, and efficiency. With HYTORC’s patented reaction drive, it operates without a reaction arm, eliminating damage from twisting forces. The Torque and Angle Dial ensures accurate results every time.

                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/GbE3nlq63Eu0NAhkpX3suA/3FVkKZ5zl0CPewU8bRdyjw/Original/AVANTI%20cut%20sheet.pdf" target="_blank">CUT SHEET</a></li>
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/V4TZgnC1Yk66rvKGYIV87g/S5fPT6Ye20mr8CVZmKs3yg/Original/avanti_operations_manual.pdf" target="_blank">MANUAL</a></li>
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/2c63Oq2uo0OMdalXck18pA/hdqBkb-eRU2CY5tUT_zsoA/Original/SDS_%20Safety%20Data%20Sheet%20for%20AW%20EX%2032%20Hydraulic%20Oil.pdf" target="_blank">HYDRAULIC OIL SDS</a></li>
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
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9d0c0cff; padding-left: 10px;"><span style="font-size: 2rem;">MXT</span><br> Hydraulic Torque Wrench</h3>
                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            The MXT Hydraulic Torque Wrench, known as the HYTORC Blue Tool, is built for tight spaces with its 360° rotatable and 120° foldable Uniswivel connection. Trusted for over 30 years, it delivers proven durability and reliable performance in every torque application.

                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/E24RGzYT0U-MyQI6S_rVjw/sY2NQWSwNUidzUHFGSTbkw/Original/MXT_cut_sheet.pdf" target="_blank">CUT SHEET</a></li>
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/PCasQKd8IUWn5P7a4IDyrg/9n9Q-EXHd0GwxAntlrM0Eg/Original/xlt_mxt_mxt_sa_operations_manual.pdf" target="_blank">MANUAL</a></li>
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/2c63Oq2uo0OMdalXck18pA/hdqBkb-eRU2CY5tUT_zsoA/Original/SDS_%20Safety%20Data%20Sheet%20for%20AW%20EX%2032%20Hydraulic%20Oil.pdf" target="_blank">HYDRAULIC OIL SDS</a></li>
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
                            <img src="assets/img/Hytorc/hydraulic/HYDRAULIC TOOLS (2).png"
                                alt="MXT Hydraulic Torque Wrench"
                                class="img-fluid rounded">
                        </div>
                    </div>
                </div>
                <div class="row align-items-center no-gutters" style=" margin-left: 0; margin-right: 0;">
                    <div class="col-md-6 d-flex mt-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                        <div class="custom-img">
                            <img src="assets/img/Hytorc/hydraulic/HYDRAULIC TOOLS (3).png"
                                alt="VERSA Hydraulic Torque Wrench"
                                class="img-fluid rounded">
                        </div>
                    </div>
                    <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9d0c0cff; padding-left: 10px;"><span style="font-size: 2rem;">VERSA</span><br>Hydraulic Torque Wrench</h3>
                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            The VERSA Hydraulic Torque Wrench fits tight spaces with precise, repeatable torque. Its 3-part design reduces repairs, while the 360° Uniswivel allows safe, easy hose positioning. Trusted worldwide for 30+ years, VERSA delivers reliable power and versatility.
                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/eqsdld4pKkGimSEeG30xPQ/a1-ooFJrjECD7cEBR7v1VA/Original/VERSA%20cut%20sheet.pdf" target="_blank">CUT SHEET</a></li>
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/2c63Oq2uo0OMdalXck18pA/hdqBkb-eRU2CY5tUT_zsoA/Original/SDS_%20Safety%20Data%20Sheet%20for%20AW%20EX%2032%20Hydraulic%20Oil.pdf" target="_blank">HYDRAULIC OIL SDS</a></li>
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
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9d0c0cff; padding-left: 10px;"><span style="font-size: 2rem;">STEALTH</span><br>Hydraulic Torque Wrench</h3>
                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            The STEALTH Hydraulic Torque Wrench is built for low-clearance bolting, fitting where others can’t. Its 360°/180° Uniswivel ensures safe hose positioning, while the optional tool retainer allows hands-free operation. Reliable and precise, STEALTH handles tough, hard-to-reach jobs with ease.

                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/twluw87taE-7pr7jfxQKLw/JCHY-AELyUm4u24ye3ZvDg/Original/STEALTH%20extended%20cut%20sheet%20%28PDF%29.pdf" target="_blank">CUT SHEET</a></li>
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/eYpRBniY6UuUVbuLW6fPYA/UB_3M9LRl0CG_L03HsvBeA/Original/STEALTH%20basic%20operations%20manual.pdf" target="_blank">MANUAL</a></li>
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/2c63Oq2uo0OMdalXck18pA/hdqBkb-eRU2CY5tUT_zsoA/Original/SDS_%20Safety%20Data%20Sheet%20for%20AW%20EX%2032%20Hydraulic%20Oil.pdf" target="_blank">HYDRAULIC OIL SDS</a></li>
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
                            <img src="assets/img/Hytorc/hydraulic/HYDRAULIC TOOLS (4).png"
                                alt="STEALTH Hydraulic Torque Wrench"
                                class="img-fluid rounded">
                        </div>
                    </div>
                </div>
                <div class="row align-items-center" style="margin-left: 0; margin-right: 0;">
                    <div class="col-md-6 d-flex mt-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                        <div class="custom-img">
                            <img src="assets/img/Hytorc/hydraulic/HYDRAULIC TOOLS (5).png"
                                alt="XLCT Hydraulic Torque Wrench"
                                class="img-fluid rounded">
                        </div>
                    </div>
                    <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9d0c0cff; padding-left: 10px;"><span style="font-size: 2rem;">XLCT </span><br>Hydraulic Torque Wrench</h3>
                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            The XLCT Hydraulic Torque Wrench (Red HYTORC Tool) is built for low-clearance and high-torque jobs. With the widest range of specialty links and interchangeable cartridges, it adapts to multiple applications. Its Zero-Slip Ratchet boosts performance, while the optional tool retainer ensures safe, easy operation and removal.
                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/uUIIMxLOhECbnREwFGsHjA/e6HcnX3ZC0Ku5XQBdlL-nQ/Original/XLCT%20cut%20sheet.pdf" target="_blank">CUT SHEET</a></li>
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/ggXkMS0qokWGqTB_iHqXDg/w34KRdc8uES4frmG2AiCjA/Original/xlct_operations_manual.pdf" target="_blank">MANUAL</a></li>
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/2c63Oq2uo0OMdalXck18pA/hdqBkb-eRU2CY5tUT_zsoA/Original/SDS_%20Safety%20Data%20Sheet%20for%20AW%20EX%2032%20Hydraulic%20Oil.pdf" target="_blank">HYDRAULIC OIL SDS</a></li>
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
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9d0c0cff; padding-left: 10px;"><span style="font-size: 2rem;">EDGE S </span><br>Hydraulic Torque Wrench</h3>

                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            The EDGE S Hydraulic Torque Wrench is built for ease and reliability. Its removable square drive allows quick switching between modes, while the adjustable safety handle ensures comfort. With only three moving parts, it minimizes maintenance, and the 360°x180° Uniswivel keeps hoses clear for safer, simpler bolting.

                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/S1rjFEw1F02cxvrsyyIBgA/gNkoGrJsTUqVDiCM9-FbzA/Original/EDGE%20S%20cut%20sheet.pdf" target="_blank">CUT SHEET</a></li>
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/nPsFnPhlLECJUJ5d-COtpg/A8cXUdc9IEy-zT2wbqKFag/Original/edge_operations_manual.pdf" target="_blank">MANUAL</a></li>
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/2c63Oq2uo0OMdalXck18pA/hdqBkb-eRU2CY5tUT_zsoA/Original/SDS_%20Safety%20Data%20Sheet%20for%20AW%20EX%2032%20Hydraulic%20Oil.pdf" target="_blank">HYDRAULIC OIL SDS</a></li>
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
                            <img src="assets/img/Hytorc/hydraulic/HYDRAULIC TOOLS (6).png"
                                alt="EDGE S Hydraulic Torque Wrench"
                                class="img-fluid rounded">
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center mt-5" data-aos="fade-up" data-aos-duration="1000">
                    <h1 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Pneumatic Tools</h1>
                    <div style="width: 80px; height: 4px; background: #9d0c0cff; margin: 10px auto; border-radius: 2px;"></div>
                </div>
                <div class="row align-items-center" style="margin-left: 0; margin-right: 0;">
                    <div class="col-md-6 d-flex mt-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                        <div class="custom-img">
                            <img src="assets/img/Hytorc/pneumatic/PNEUMATIC TOOLS.png"
                                alt="jGun SINGLE SPEED Pneumatic Torque Tool"
                                class="img-fluid rounded">
                        </div>
                    </div>
                    <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9d0c0cff; padding-left: 10px;"><span style="font-size: 2rem;">jGun SINGLE SPEED</span><br>Pneumatic Torque Tool</h3>

                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            The jGun® SINGLE SPEED Pneumatic Torque Tool makes bolting simple and safe. Lightweight and portable, it delivers accurate, repeatable torque with an industry-leading power-to-weight ratio. With no kickback and easy setup through an FRL system, it ensures comfort, precision, and powerful performance in any environment.

                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/3bGTNR-trEKpoWucwVxJ7Q/zXXrw_rxqE62uXipGwTMDw/Original/jgun_single_speed_cut_sheet.pdf" target="_blank">CUT SHEET</a></li>
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/jyPUVFLtMU2olcA0yLW0Vg/jsGO_eqASEaAUP1gy0-4FA/Original/jgun_single_dual_speed_operations_manual.pdf" target="_blank">MANUAL</a></li>

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
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9d0c0cff; padding-left: 10px;"><span style="font-size: 2rem;">jGun DIGITAL SINGLE SPEED</span><br>Pneumatic Torque Tool</h3>
                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            The jGun® DIGITAL Pneumatic Torque Tool delivers precision and ease with its twist adjustment and digital torque display. A built-in silencer reduces noise, while its ergonomic, low-vibration design ensures comfort and safety. Built with a corrosion-resistant motor, it’s reliable even in the toughest environments.

                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/acd8sFqcrE6K_IgJ147iXQ/TDbzZLC8VkGFmbyn6HAJfg/Original/jgun_digital_ss_cut_sheet.pdf" target="_blank">CUT SHEET</a></li>
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/-UNfE-Scqk-ppZUTRopYqQ/WC17YL-EbEyljE7trBnlYQ/Original/jgun_digital_ss_operations_manual.pdf" target="_blank">MANUAL</a></li>
                                        <li><a class="dropdown-item" href="https://www.youtube.com/watch?v=nVkKFg1yMD8&list=PLcL7JPmmOZyD7P-9cwR3kdccxKA9uXDRL" target="_blank">VIDEO</a></li>
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
                            <img src="assets/img/Hytorc/pneumatic/PNEUMATIC TOOLS (2).png"
                                alt="jGun DIGITAL SINGLE SPEED Pneumatic Torque Tool"
                                class="img-fluid rounded">
                        </div>
                    </div>
                </div>
                <div class="row align-items-center" style="margin-left: 0; margin-right: 0;">
                    <div class="col-md-6 d-flex mt-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                        <div class="custom-img">
                            <img src="assets/img/Hytorc/pneumatic/PNEUMATIC TOOLS (3).png"
                                alt="Pneumatic Impact Wrench"
                                class="img-fluid rounded">
                        </div>
                    </div>
                    <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9d0c0cff; padding-left: 10px;"><span style="font-size: 2rem;">Pneumatic Impact Wrench</span></h3>
                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            The Pneumatic Impact Wrench delivers fast, consistent power to speed up bolting and minimize downtime. Designed to reduce kickback, its ergonomic build enhances comfort and safety while reducing fatigue. Rugged and reliable, it’s a durable solution for demanding industrial jobs.

                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/xHh_5OjnZUO0kjdhRiOY_g/zIdOg9vsqUiFNeKB3dHmmg/Original/jgun_dual_speed_cut_sheet_102323_EMAIL.pdf" target="_blank">CUT SHEET</a></li>
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/jyPUVFLtMU2olcA0yLW0Vg/jsGO_eqASEaAUP1gy0-4FA/Original/jgun_single_dual_speed_operations_manual.pdf" target="_blank">MANUAL</a></li>
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
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9d0c0cff; padding-left: 10px;"><span style="font-size: 2rem;">jGun DUAL SPEED</span><br>Pneumatic Torque Tool</h3>
                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            The jGun® DUAL SPEED Pneumatic Torque Tool handles rundown, final torque, and breakout with ease using its quick-shift collar. Offering a wide torque range and repeatable accuracy, it reduces vibration for safer, more comfortable use. Paired with an FRL, it delivers consistent performance for demanding bolting jobs.
                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/Ol3Cm7S62E-1PzUPgFaS4Q/kl5zB7OdZUGhw286TgU3LQ/Original/Impact_Wrench_cut_sheet__EMAIL_072623.pdf" target="_blank">CUT SHEET</a></li>

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
                            <img src="assets/img/Hytorc/pneumatic/PNEUMATIC TOOLS (4).png"
                                alt="jGun DUAL SPEED Pneumatic Torque Tool"
                                class="img-fluid rounded">
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center mt-5" data-aos="fade-up" data-aos-duration="1000">
                    <h1 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Electric Tools</h1>
                    <div style="width: 80px; height: 4px; background: #9d0c0cff; margin: 10px auto; border-radius: 2px;"></div>
                </div>
                <div class="row align-items-center" style="margin-left: 0; margin-right: 0;">
                    <div class="col-md-6 d-flex mt-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                        <div class="custom-img">
                            <img src="assets/img/Hytorc/electric/ELECTRIC TOOLS.png"
                                alt="LITHIUM SERIES II Electric Torque Tool"
                                class="img-fluid rounded">
                        </div>
                    </div>
                    <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9d0c0cff; padding-left: 10px;"><span style="font-size: 2rem;">LITHIUM SERIES II</span><br> Electric Torque Tool</h3>
                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            The LITHIUM SERIES II (LST) is HYTORC’s most advanced electric torque tool, combining power, durability, and ease of use. With real-time documentation via the HYTORC Connect App or USB*, it delivers precision and innovation for the toughest bolting jobs. Lightweight and versatile, the LST makes bolting easier anywhere.
                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/GhQ1Cv-MzUSfaBfmMNuE0w/Ykvn3QOA1ku_NJvNi9V-hg/Original/lithium_series_ii_extended_cut_sheet.pdf" target="_blank">CUT SHEET</a></li>
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/6Z1My792BEOhOitDT3FBHA/VhHOoUW9oE6PCTrRDRfeSw/Original/lithium%20series%20ii%208000%20basic%20operations%20manual.pdf" target="_blank">MANUAL</a></li>
                                        <li><a class="dropdown-item" href="https://www.youtube.com/watch?v=4cYrxIfNaag&list=PLcL7JPmmOZyABQviP5FyYdnQwsYjiDiWO" target="_blank">VIDEO</a></li>
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
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9d0c0cff; padding-left: 10px;"><span style="font-size: 2rem;">LION GUN </span><br> Electric Torque Tool</h3>
                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            The LION GUN Electric Torque Tool offers portable, durable performance with accurate, repeatable torque. Powered by an 18V lithium-ion battery, it ensures long-lasting reliability while reducing vibration injuries. Easy to use, it enhances safety, quality control, and efficiency for every job.
                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/NJdFS5GQcUmsbCQ-E_c4iA/na598XKPeEOXbCDNxWmMZw/Original/LION%20GUN%20cut%20sheet.pdf" target="_blank">CUT SHEET</a></li>
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/uikb-uWo_EyiFFEwZFh-4Q/UiZhzll_MUixx1VNE4aI0w/Original/lion_gun_operations_manual.pdf" target="_blank">MANUAL</a></li>
                                        <li><a class="dropdown-item" href="https://www.youtube.com/watch?v=kU38ComKAPk&list=PLcL7JPmmOZyAY7fJ9z3jwacGGdPapD2Tu" target="_blank">VIDEO</a></li>
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
                            <img src="assets/img/Hytorc/electric/ELECTRIC TOOLS (2).png"
                                alt="LION GUN Electric Torque Tool"
                                class="img-fluid rounded">
                        </div>
                    </div>
                </div>
                <div class="row align-items-center" style="margin-left: 0; margin-right: 0;">
                    <div class="col-md-6 d-flex mt-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                        <div class="custom-img">
                            <img src="assets/img/Hytorc/electric/ELECTRIC TOOLS (3).png"
                                alt="LION GUN Dual Speed Electric Torque Tool"
                                class="img-fluid rounded">
                        </div>
                    </div>
                    <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9d0c0cff; padding-left: 10px;"><span style="font-size: 2rem;">LION GUN DUAL SPEED</span><br> Electric Torque Tool</h3>
                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            The LION GUN Dual Speed is a lightweight, cordless torque tool with quick-shift Rundown and Torque modes. Powered by an 18V lithium-ion battery, it delivers speed, accuracy (±5%), and fatigue-free operation. With a digital display, data recording, and app compatibility, it’s the fastest and most convenient electric wrench in our lineup.
                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/h54Gp8r_eUiYcUno6LACkA/nOrfMHBuhUW14EqKnSGfBA/Original/lion_gun_dual_speed_cut_sheet.pdf" target="_blank">CUT SHEET</a></li>
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/uikb-uWo_EyiFFEwZFh-4Q/UiZhzll_MUixx1VNE4aI0w/Original/lion_gun_operations_manual.pdf" target="_blank">MANUAL</a></li>
                                        <li><a class="dropdown-item" href="https://www.youtube.com/watch?v=kU38ComKAPk&list=PLcL7JPmmOZyAY7fJ9z3jwacGGdPapD2Tu" target="_blank">VIDEO</a></li>
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
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9d0c0cff; padding-left: 10px;"><span style="font-size: 2rem;">LION GUN X</span><br> Electric Torque Tool</h3>
                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            The LION GUN X delivers repeatable torque with ±5% accuracy in a portable, cord-free design. Powered by a long-lasting 36V rechargeable battery, it combines strength with convenience. Featuring a digital interface, data capture for quality control, and low vibration, it ensures safe, efficient bolting every time.
                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/GijBLCs4u02ne29Twla-PQ/U6Oo2E4GlkWes-d0DqtK3A/Original/lion_gun_x_cut_sheet.pdf" target="_blank">CUT SHEET</a></li>
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/7MTo7kj-ZEy08VigCo-NGw/1GTvc_kxm02AfVegia5OeA/Original/lion_gun_x_operations_manual.pdf" target="_blank">MANUAL</a></li>
                                        <li><a class="dropdown-item" href="https://www.youtube.com/watch?v=kU38ComKAPk&list=PLcL7JPmmOZyAY7fJ9z3jwacGGdPapD2Tu" target="_blank">VIDEO</a></li>
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
                            <img src="assets/img/Hytorc/electric/ELECTRIC TOOLS (4).png"
                                alt="LION GUN X Electric Torque Tool"
                                class="img-fluid rounded">
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center mt-5 pt-5" data-aos="fade-up" data-aos-duration="1000">
                    <h1 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Fasteners</h1>
                    <div style="width: 80px; height: 4px; background: #9d0c0cff; margin: 10px auto; border-radius: 2px;"></div>
                </div>
                <div class="row align-items-center" style="margin-left: 0; margin-right: 0;">
                    <div class="col-md-6 d-flex mt-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                        <div class="custom-img">
                            <img src="assets/img/Hytorc/fasteners/HYTORC WASHER.png"
                                alt="AVANTI Hydraulic Torque Wrench"
                                class="img-fluid rounded">
                        </div>
                    </div>
                    <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9d0c0cff; padding-left: 10px;"><span style="font-size: 2rem;">HYTORC WASHERS </span></h3>
                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            Simplify bolting with the HYTORC Reaction Washer. Streamline your process with improved axial alignment, reduced bolt load scatter, and enhanced accuracy. Customizable for temperature and corrosion resistance, the washer's knurled design prevents rotation while unique outer lobes ensure efficiency. Boost safety and precision in every job with the HYTORC Reaction Washer, delivering consistent, accurate results. It complies with the ASTM F3394/F3394M Standard.

                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/GbE3nlq63Eu0NAhkpX3suA/3FVkKZ5zl0CPewU8bRdyjw/Original/AVANTI%20cut%20sheet.pdf" target="_blank">CUT SHEET</a></li>
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/V4TZgnC1Yk66rvKGYIV87g/S5fPT6Ye20mr8CVZmKs3yg/Original/avanti_operations_manual.pdf" target="_blank">MANUAL</a></li>
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/2c63Oq2uo0OMdalXck18pA/hdqBkb-eRU2CY5tUT_zsoA/Original/SDS_%20Safety%20Data%20Sheet%20for%20AW%20EX%2032%20Hydraulic%20Oil.pdf" target="_blank">HYDRAULIC OIL SDS</a></li>
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
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9d0c0cff; padding-left: 10px;"><span style="font-size: 2rem;">TRUE-LOCK WASHER</span></h3>
                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            The HYTORC TRUE-LOCK Washer is designed to keep your bolts tight, even under dynamic loads. Its built-in locking feature minimizes loosening, giving you confidence that your connections will stay secure. With a strategically placed ridge band, the TRUE-LOCK Washer locks fasteners in place without requiring special equipment, making installation simple and reliable.
                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/E24RGzYT0U-MyQI6S_rVjw/sY2NQWSwNUidzUHFGSTbkw/Original/MXT_cut_sheet.pdf" target="_blank">CUT SHEET</a></li>
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/PCasQKd8IUWn5P7a4IDyrg/9n9Q-EXHd0GwxAntlrM0Eg/Original/xlt_mxt_mxt_sa_operations_manual.pdf" target="_blank">MANUAL</a></li>
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/2c63Oq2uo0OMdalXck18pA/hdqBkb-eRU2CY5tUT_zsoA/Original/SDS_%20Safety%20Data%20Sheet%20for%20AW%20EX%2032%20Hydraulic%20Oil.pdf" target="_blank">HYDRAULIC OIL SDS</a></li>
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
                            <img src="assets/img/Hytorc/fasteners/TRUE-LOCK WASHER.png"
                                alt="MXT Hydraulic Torque Wrench"
                                class="img-fluid rounded">
                        </div>
                    </div>
                </div>
                <div class="row align-items-center no-gutters" style=" margin-left: 0; margin-right: 0;">
                    <div class="col-md-6 d-flex mt-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                        <div class="custom-img">
                            <img src="assets/img/Hytorc/fasteners/BACKUP WASHER.png"
                                alt="VERSA Hydraulic Torque Wrench"
                                class="img-fluid rounded">
                        </div>
                    </div>
                    <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9d0c0cff; padding-left: 10px;"><span style="font-size: 2rem;">BACKUP WASHER</span></h3>
                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            The HYTORC Backup Washer makes your bolting jobs safer and more efficient. Its reaction-free design eliminates the need for a reaction arm and backup wrench, reducing injury risks with no pinch points. The double-sided knurls ensure bolt integrity under vibration for secure results. Customizable to your specific needs, it easily handles temperature concerns, corrosion resistance, and specialized coatings, ensuring optimal performance in any situation. The Backup Washer complies with the ASTM F3394/F3394M Standard. </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/eqsdld4pKkGimSEeG30xPQ/a1-ooFJrjECD7cEBR7v1VA/Original/VERSA%20cut%20sheet.pdf" target="_blank">CUT SHEET</a></li>
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/2c63Oq2uo0OMdalXck18pA/hdqBkb-eRU2CY5tUT_zsoA/Original/SDS_%20Safety%20Data%20Sheet%20for%20AW%20EX%2032%20Hydraulic%20Oil.pdf" target="_blank">HYDRAULIC OIL SDS</a></li>
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
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9d0c0cff; padding-left: 10px;"><span style="font-size: 2rem;">GALL-FREE NUT</span></h3>
                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            This innovative nut eliminates galling (metal transfer) in unlubricated fasteners, ensuring smoother applications. The Gall-Free Nut has a ring on the non-loading surface to indicate the correct side, making installation easier, and it's compatible with standard bolt threads and available in common hex sizes. The Gall-Free Nut meets ASTM standards, offering versatility and reliability in various industries and environments, even under challenging conditions.
                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/twluw87taE-7pr7jfxQKLw/JCHY-AELyUm4u24ye3ZvDg/Original/STEALTH%20extended%20cut%20sheet%20%28PDF%29.pdf" target="_blank">CUT SHEET</a></li>
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/eYpRBniY6UuUVbuLW6fPYA/UB_3M9LRl0CG_L03HsvBeA/Original/STEALTH%20basic%20operations%20manual.pdf" target="_blank">MANUAL</a></li>
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/2c63Oq2uo0OMdalXck18pA/hdqBkb-eRU2CY5tUT_zsoA/Original/SDS_%20Safety%20Data%20Sheet%20for%20AW%20EX%2032%20Hydraulic%20Oil.pdf" target="_blank">HYDRAULIC OIL SDS</a></li>
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
                            <img src="assets/img/Hytorc/fasteners/GALL-FREE NUT.png"
                                alt="STEALTH Hydraulic Torque Wrench"
                                class="img-fluid rounded">
                        </div>
                    </div>
                </div>
                <div class="row align-items-center" style="margin-left: 0; margin-right: 0;">
                    <div class="col-md-6 d-flex mt-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                        <div class="custom-img">
                            <img src="assets/img/Hytorc/fasteners/J-WASHER.png"
                                alt="AVANTI Hydraulic Torque Wrench"
                                class="img-fluid rounded">
                        </div>
                    </div>
                    <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9d0c0cff; padding-left: 10px;"><span style="font-size: 2rem;">J-WASHER</span></h3>
                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            The HYTORC J-Washer makes bolting easier by eliminating the need for a reaction arm, increasing safety and reducing injury risks. Its innovative locking mechanism keeps bolts tight under dynamic loads, thanks to ridged bands that prevent rotation and protect the flange surface. Verified by the industry standard Junker Test, it ensures accurate bolt load and extends tool life. Available in various materials and coatings, the J-Washer is versatile and ideal for any industry or environment.

                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/Sx4bxkaCXE-rcrDnlbaxdQ/zyjlNm1s3USKSLCnDdO3BQ/Original/washer_types_extended_cut_sheet.pdf" target="_blank">CUT SHEET</a></li>
                                        <li><a class="dropdown-item" href="https://www.youtube.com/watch?v=V8xdvuc0SBA&list=PLcL7JPmmOZyDFvsrc1pp1UIsw5LEA1QWl" target="_blank">VIDEO</a></li>
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
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9d0c0cff; padding-left: 10px;"><span style="font-size: 2rem;">HYTORC NUT</span></h3>
                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            The HYTORC Nut transforms your bolting tasks with its user-friendly, reaction-free design that eliminates the need for extra tools like a backup wrench. It delivers top-tier bolt tension accuracy and reliability, ensuring superior joint integrity and preventing thread damage. The advanced 3-piece fastener applies pure tensile load to your bolts, avoiding thread damage and maintaining accuracy without any load loss.
                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/E24RGzYT0U-MyQI6S_rVjw/sY2NQWSwNUidzUHFGSTbkw/Original/MXT_cut_sheet.pdf" target="_blank">CUT SHEET</a></li>
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/PCasQKd8IUWn5P7a4IDyrg/9n9Q-EXHd0GwxAntlrM0Eg/Original/xlt_mxt_mxt_sa_operations_manual.pdf" target="_blank">MANUAL</a></li>
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/2c63Oq2uo0OMdalXck18pA/hdqBkb-eRU2CY5tUT_zsoA/Original/SDS_%20Safety%20Data%20Sheet%20for%20AW%20EX%2032%20Hydraulic%20Oil.pdf" target="_blank">HYDRAULIC OIL SDS</a></li>
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
                            <img src="assets/img/Hytorc/fasteners/HYTORC NUT.png"
                                alt="MXT Hydraulic Torque Wrench"
                                class="img-fluid rounded">
                        </div>
                    </div>
                </div>
                <div class="row align-items-center" style="margin-left: 0; margin-right: 0;">
                    <div class="col-md-6 d-flex mt-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                        <div class="custom-img">
                            <img src="assets/img/Hytorc/fasteners/GRIP-TIGHT™ Nut.png"
                                alt="AVANTI Hydraulic Torque Wrench"
                                class="img-fluid rounded">
                        </div>
                    </div>
                    <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9d0c0cff; padding-left: 10px;"><span style="font-size: 2rem;">GRIP-TIGHT™ Nut</span></h3>
                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            The HYTORC GRIP-TIGHT™ Nut revolutionizes bolting with its built-in reaction point, eliminating pinch points and sideloads for enhanced safety and tool life. Perfect for commercial fleets, it fits M22X1.5 studs and meets SAE J1965 standards. Its unique design ensures precise torque-to-clamp translation, improving wheel nut installation quality and safety. Compatible with standard impact guns and wrenches, the GRIP-TIGHT™ Nut streamlines operations, making it a versatile and reliable choice for transportation applications.
                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/EPA9VIyQgEOy2ZdYcsU6Rw/t8Fjx9cn0Uuq-7lfLZ2rbQ/Original/grip_tight_nut_cut_sheet.pdf" target="_blank">CUT SHEET</a></li>
                                        <li><a class="dropdown-item" href="https://www.youtube.com/watch?v=AcLS2eQnXb0&list=PLcL7JPmmOZyA8tDWTlTtvL_c0fckMsXvP" target="_blank">VIDEO</a></li>
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
                <div class="col-12 text-center mt-5 pt-5" data-aos="fade-up" data-aos-duration="1000">
                    <h1 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Pumps</h1>
                    <div style="width: 80px; height: 4px; background: #9d0c0cff; margin: 10px auto; border-radius: 2px;"></div>
                </div>
                <div class="row align-items-center" style="background-color:lightgrey;margin-left: 0; margin-right: 0;">
                    <div class="col-md-6 d-flex mt-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                        <div class="custom-img">
                            <img src="assets/img/Hytorc/tensioning pumps/AXEL ASSETS FOR WEBSITE/Pneumatic Tensioning Pump.png"
                                alt="XLCT Hydraulic Torque Wrench"
                                class="img-fluid rounded">
                        </div>
                    </div>
                    <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9d0c0cff; padding-left: 10px;"><span style="font-size: 2rem;">PNEUMATIC </span><br>Tensioning Pump</h3>
                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            Designed to make your job easier with options for standard and high flow rates to match each project's needs. Each pump comes with an in-line filter, regulator, and lubricator assembly (FRL), ensuring reliable performance every time. </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/uUIIMxLOhECbnREwFGsHjA/e6HcnX3ZC0Ku5XQBdlL-nQ/Original/XLCT%20cut%20sheet.pdf" target="_blank">CUT SHEET</a></li>
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/ggXkMS0qokWGqTB_iHqXDg/w34KRdc8uES4frmG2AiCjA/Original/xlct_operations_manual.pdf" target="_blank">MANUAL</a></li>
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/2c63Oq2uo0OMdalXck18pA/hdqBkb-eRU2CY5tUT_zsoA/Original/SDS_%20Safety%20Data%20Sheet%20for%20AW%20EX%2032%20Hydraulic%20Oil.pdf" target="_blank">HYDRAULIC OIL SDS</a></li>
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
                <div class="row align-items-center" style="margin-left: 0; margin-right: 0;">
                    <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9d0c0cff; padding-left: 10px;"><span style="font-size: 2rem;">HY-T </span><br>Electric Tensioning Pump</h3>

                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            Delivers high-speed operation and simple setup to keep your projects moving. With a highly visible pressure gauge for more accurate readings, it's built for precision and performance in wind, power generation, oil and gas.
                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/S1rjFEw1F02cxvrsyyIBgA/gNkoGrJsTUqVDiCM9-FbzA/Original/EDGE%20S%20cut%20sheet.pdf" target="_blank">CUT SHEET</a></li>
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/nPsFnPhlLECJUJ5d-COtpg/A8cXUdc9IEy-zT2wbqKFag/Original/edge_operations_manual.pdf" target="_blank">MANUAL</a></li>
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/2c63Oq2uo0OMdalXck18pA/hdqBkb-eRU2CY5tUT_zsoA/Original/SDS_%20Safety%20Data%20Sheet%20for%20AW%20EX%2032%20Hydraulic%20Oil.pdf" target="_blank">HYDRAULIC OIL SDS</a></li>
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
                            <img src="assets/img/Hytorc/tensioning pumps/AXEL ASSETS FOR WEBSITE/HY-T Electric Tensioning Pump.png"
                                alt="EDGE S Hydraulic Torque Wrench"
                                class="img-fluid rounded">
                        </div>
                    </div>
                </div>
                <div class="row align-items-center" style="background-color:lightgrey;margin-left: 0; margin-right: 0;">
                    <div class="col-md-6 d-flex mt-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                        <div class="custom-img">
                            <img src="assets/img/Hytorc/tensioning pumps/AXEL ASSETS FOR WEBSITE/Subsea Pneumatic Tensioning Pump.png"
                                alt="XLCT Hydraulic Torque Wrench"
                                class="img-fluid rounded">
                        </div>
                    </div>
                    <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9d0c0cff; padding-left: 10px;"><span style="font-size: 2rem;">SUBSEA </span><br>Pneumatic Tensioning Pump</h3>
                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            Designed to simplify your underwater operations. Built for the harsh subsea environment, it delivers the high pressure you need for secure, leak-free tensioning, ensuring your work is done right the first time. Its remote control capabilities boost safety and efficiency.
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/uUIIMxLOhECbnREwFGsHjA/e6HcnX3ZC0Ku5XQBdlL-nQ/Original/XLCT%20cut%20sheet.pdf" target="_blank">CUT SHEET</a></li>
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/ggXkMS0qokWGqTB_iHqXDg/w34KRdc8uES4frmG2AiCjA/Original/xlct_operations_manual.pdf" target="_blank">MANUAL</a></li>
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/2c63Oq2uo0OMdalXck18pA/hdqBkb-eRU2CY5tUT_zsoA/Original/SDS_%20Safety%20Data%20Sheet%20for%20AW%20EX%2032%20Hydraulic%20Oil.pdf" target="_blank">HYDRAULIC OIL SDS</a></li>
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
                <div class="row align-items-center" style="margin-left: 0; margin-right: 0;">
                    <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9d0c0cff; padding-left: 10px;"><span style="font-size: 2rem;">HAND</span><br>Tensioning Pump</h3>

                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            Our hand pumps for tensioning tools are designed for mobility and ease of use. With various pressure options and capacities, you'll find the perfect fit for your needs. Each pump features built-in gauges and a unique steel handle that protects against impact, ensuring durability and reliable performance. </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/S1rjFEw1F02cxvrsyyIBgA/gNkoGrJsTUqVDiCM9-FbzA/Original/EDGE%20S%20cut%20sheet.pdf" target="_blank">CUT SHEET</a></li>
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/nPsFnPhlLECJUJ5d-COtpg/A8cXUdc9IEy-zT2wbqKFag/Original/edge_operations_manual.pdf" target="_blank">MANUAL</a></li>
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/2c63Oq2uo0OMdalXck18pA/hdqBkb-eRU2CY5tUT_zsoA/Original/SDS_%20Safety%20Data%20Sheet%20for%20AW%20EX%2032%20Hydraulic%20Oil.pdf" target="_blank">HYDRAULIC OIL SDS</a></li>
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
                            <img src="assets/img/Hytorc/tensioning pumps/AXEL ASSETS FOR WEBSITE/Hand Tensioning Pump.png"
                                alt="EDGE S Hydraulic Torque Wrench"
                                class="img-fluid rounded">
                        </div>
                    </div>
                </div>
                <div class="row align-items-center" style="background-color:lightgrey;margin-left: 0; margin-right: 0;">
                    <div class="col-md-6 d-flex mt-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                        <div class="custom-img">
                            <img src="assets/img/Hytorc/tensioning pumps/last/HY-TWIN 230.png"
                                alt="XLCT Hydraulic Torque Wrench"
                                class="img-fluid rounded">
                        </div>
                    </div>
                    <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9d0c0cff; padding-left: 10px;"><span style="font-size: 2rem;">HY-TWIN 230 </span><br>Electric Hydraulic Pump</h3>
                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            The powerful HY-TWIN 230 Electric Hydraulic Pump is designed to make your toughest bolting jobs easier and faster. Boasting a high flow rate, its dual motors ensure consistent power for your torque tools, even under heavy load. Featuring built-in casters, the HY-TWIN 230 is easy to transport. Built to last in the harshest conditions, it has long-term reliability, giving you peace of mind on every project. Plus, its user-friendly design helps you stay productive and focused on getting the job done. </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://www.youtube.com/watch?v=TpkzQe2E-a0&list=PLcL7JPmmOZyCDj0MjbHYkj1OdqG4D_tWm" target="_blank">VIDEO</a></li>
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/yG2OBnk2CUenXWZsv9SM1A/fEeb9nHcNkyWvIlaX-kTFA/Original/BA-0090-EN00%20Operational%20Manual%20Hydraulic%20PowerPack%20v1.0.2.pdf" target="_blank">MANUAL</a></li>
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/2c63Oq2uo0OMdalXck18pA/hdqBkb-eRU2CY5tUT_zsoA/Original/SDS_%20Safety%20Data%20Sheet%20for%20AW%20EX%2032%20Hydraulic%20Oil.pdf" target="_blank">HYDRAULIC OIL SDS</a></li>
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
                <div class="row align-items-center" style="margin-left: 0; margin-right: 0;">
                    <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9d0c0cff; padding-left: 10px;"><span style="font-size: 2rem;">HY-EX 3-Stage</span><br>Electric Hydraulic Pump</h3>

                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            The HY-EX 3-Stage Electric Hydraulic Pump is engineered to deliver exceptional performance and reliability for your bolting needs. With its advanced 3-stage operation, it provides optimized pressure and flow, ensuring fast and efficient power delivery to your torque tools. The HY-EX 3 Stage lets you get the job done quickly and effectively, making it a smart investment for anyone seeking top-notch performance and ease of use in their hydraulic equipment.
                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://www.youtube.com/watch?v=TpkzQe2E-a0&list=PLcL7JPmmOZyCDj0MjbHYkj1OdqG4D_tWm" target="_blank">VIDEO</a></li>
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/yG2OBnk2CUenXWZsv9SM1A/fEeb9nHcNkyWvIlaX-kTFA/Original/BA-0090-EN00%20Operational%20Manual%20Hydraulic%20PowerPack%20v1.0.2.pdf" target="_blank">MANUAL</a></li>
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/2c63Oq2uo0OMdalXck18pA/hdqBkb-eRU2CY5tUT_zsoA/Original/SDS_%20Safety%20Data%20Sheet%20for%20AW%20EX%2032%20Hydraulic%20Oil.pdf" target="_blank">HYDRAULIC OIL SDS</a></li>
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
                            <img src="assets/img/Hytorc/tensioning pumps/last/HY-EX 3-Stage.png"
                                alt="EDGE S Hydraulic Torque Wrench"
                                class="img-fluid rounded">
                        </div>
                    </div>
                </div>
                <div class="row align-items-center" style="background-color:lightgrey;margin-left: 0; margin-right: 0;">
                    <div class="col-md-6 d-flex mt-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                        <div class="custom-img">
                            <img src="assets/img/Hytorc/tensioning pumps/last/JETPRO S.png"
                                alt="XLCT Hydraulic Torque Wrench"
                                class="img-fluid rounded">
                        </div>
                    </div>
                    <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9d0c0cff; padding-left: 10px;"><span style="font-size: 2rem;">JETPRO S</span><br>Electric Hydraulic Pump</h3>
                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            The JETPRO S Electric Hydraulic Pump offers a perfect blend of portability, ease of use, quick set up, and powerful performance. Its compact 2-stage design ensures that it fits where you need it to, while the straightforward controls allow you to get up and running with minimal effort. Plus, its durable construction means you can rely on it for the long haul, knowing that safety features are in place to protect both you and your equipment.
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/7A3KccmiHUmnES5bpaS7Hg/pT7hrtl3bUGdfhG3w3ZMpw/Original/BA-0011-EN03%20-%20HY-115-CSA_JetPro-S-115-CSA%20-%202023-03-08%20%28WEB%29.pdf">MANUAL</a></li>
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/2c63Oq2uo0OMdalXck18pA/hdqBkb-eRU2CY5tUT_zsoA/Original/SDS_%20Safety%20Data%20Sheet%20for%20AW%20EX%2032%20Hydraulic%20Oil.pdf" target="_blank">HYDRAULIC OIL SDS</a></li>
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
                <div class="row align-items-center" style="margin-left: 0; margin-right: 0;">
                    <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9d0c0cff; padding-left: 10px;"><span style="font-size: 2rem;">HY-TWIN AIR</span><br>Pneumatic Hydraulic Pump</h3>

                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            The HY-TWIN AIR Pneumatic Hydraulic Pump is made for your toughest bolting challenges, delivering rapid pressure buildup and high flow rates to get the job done faster. Its portable design ensures easy movement on job sites, while straightforward controls let you start working immediately, with no complicated setup. Reliable and durable, the HY-TWIN AIR keeps your hydraulic torque tools bolting and your operations running.
                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/5rreSnC9O0q4wmcyOCNdBA/TF2_k6_v8Uysan0iP1ky1A/Original/hy_twin_air_cut_sheet.pdf" target="_blank">CUT SHEET</a></li>
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/mhciIicVVk6IRTnjZMKpxw/eHa_q0pGBEuaTdtWW7b7zg/Original/jetpro_s_air_hy_air_hy_twin_air_operations_manual.pdf" target="_blank">MANUAL</a></li>
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/2c63Oq2uo0OMdalXck18pA/hdqBkb-eRU2CY5tUT_zsoA/Original/SDS_%20Safety%20Data%20Sheet%20for%20AW%20EX%2032%20Hydraulic%20Oil.pdf" target="_blank">HYDRAULIC OIL SDS</a></li>
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
                            <img src="assets/img/Hytorc/tensioning pumps/last/HY-TWIN AIR.png"
                                alt="EDGE S Hydraulic Torque Wrench"
                                class="img-fluid rounded">
                        </div>
                    </div>
                </div>
                <div class="row align-items-center" style="background-color:lightgrey;margin-left: 0; margin-right: 0;">
                    <div class="col-md-6 d-flex mt-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                        <div class="custom-img">
                            <img src="assets/img/Hytorc/tensioning pumps/last/HY-Air.png"
                                alt="XLCT Hydraulic Torque Wrench"
                                class="img-fluid rounded">
                        </div>
                    </div>
                    <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9d0c0cff; padding-left: 10px;"><span style="font-size: 2rem;">HY-AIR</span><br>Pneumatic Hydraulic Pump</h3>
                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            The HY-AIR Pneumatic Hydraulic Pump is your ultimate solution for safe and efficient bolting in hazardous environments. Its intrinsically safe design means no sparks, ensuring maximum safety. The built-in FRL (Filter, Regulator, Lubricator) guarantees optimal air quality and pressure, extending the pump's life and performance. With user-friendly controls, adjusting pump pressure is effortless, minimizing errors and boosting efficiency.
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/mhciIicVVk6IRTnjZMKpxw/eHa_q0pGBEuaTdtWW7b7zg/Original/jetpro_s_air_hy_air_hy_twin_air_operations_manual.pdf">MANUAL</a></li>
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/2c63Oq2uo0OMdalXck18pA/hdqBkb-eRU2CY5tUT_zsoA/Original/SDS_%20Safety%20Data%20Sheet%20for%20AW%20EX%2032%20Hydraulic%20Oil.pdf" target="_blank">HYDRAULIC OIL SDS</a></li>
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
                <div class="row align-items-center" style="margin-left: 0; margin-right: 0;">
                    <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9d0c0cff; padding-left: 10px;"><span style="font-size: 2rem;">JETPRO S-Air</span><br>Pneumatic Hydraulic Pump</h3>

                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            The JETPRO S-Air Pneumatic Hydraulic Pump is a versatile, high-performance air pump engineered to meet the rigorous demands of heavy-duty bolting. With its high flow rate, it ensures reliable operation and efficiency, crucial for safety and performance for any task. The compact, lightweight design means easy transport and setup. Adjustable pressure settings allow precise control and prevent over-torquing.
                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/5rreSnC9O0q4wmcyOCNdBA/TF2_k6_v8Uysan0iP1ky1A/Original/hy_twin_air_cut_sheet.pdf" target="_blank">CUT SHEET</a></li>
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/mhciIicVVk6IRTnjZMKpxw/eHa_q0pGBEuaTdtWW7b7zg/Original/jetpro_s_air_hy_air_hy_twin_air_operations_manual.pdf" target="_blank">MANUAL</a></li>
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/2c63Oq2uo0OMdalXck18pA/hdqBkb-eRU2CY5tUT_zsoA/Original/SDS_%20Safety%20Data%20Sheet%20for%20AW%20EX%2032%20Hydraulic%20Oil.pdf" target="_blank">HYDRAULIC OIL SDS</a></li>
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
                            <img src="assets/img/Hytorc/tensioning pumps/last/JETPRO S-Air.png"
                                alt="EDGE S Hydraulic Torque Wrench"
                                class="img-fluid rounded">
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center mt-5" data-aos="fade-up" data-aos-duration="1000">
                    <h1 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Tensioners</h1>
                    <div style="width: 80px; height: 4px; background: #9d0c0cff; margin: 10px auto; border-radius: 2px;"></div>
                </div>
                <div class="row align-items-center" style="background-color:lightgrey;margin-left: 0; margin-right: 0;">
                    <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9d0c0cff; padding-left: 10px;"><span style="font-size: 2rem;">DIRECT FIT</span><br>Tensioners</h3>
                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            Our Direct Fit Tensioners simplify bolting with a direct-fit design that eliminates adapters for faster setup. Compact and versatile, they fit tight spaces and are available in 1-piece or multi-part designs. Built for precision, ease of use, and reduced maintenance, they deliver reliable performance across demanding applications.
                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/6Z20fQgRAkOouomNDoYRSA/j7EnNIo9-ki_AdmvGUSZPA/Original/tensioning_accessories_cut_sheet%20%28PDF%29.pdf" target="_blank">CUT SHEET</a></li>
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
                            <img src="assets/img/Hytorc/tensioners/TENSIONERS (2).png"
                                alt="Direct Fit Tensioners"
                                class="img-fluid rounded">
                        </div>
                    </div>
                </div>
                <div class="row align-items-center" style="margin-left: 0; margin-right: 0;">
                    <div class="col-md-6 d-flex mt-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                        <div class="custom-img">
                            <img src="assets/img/Hytorc/tensioners/TENSIONERS (3).png"
                                alt="Wind Foundation Tensioners"
                                class="img-fluid rounded">
                        </div>
                    </div>
                    <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9d0c0cff; padding-left: 10px;"><span style="font-size: 2rem;">WIND FOUNDATION</span><br>Tensioners</h3>
                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            Our Wind Foundation Tensioners are built for wind turbine foundation studs from 1” to 3”. Lightweight yet strong, their elliptical design balances size, weight, and strength for easy handling. Compatible with popular foundation systems like Williams and Dyson, they deliver reliable, durable performance for the toughest jobs.
                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/6Z20fQgRAkOouomNDoYRSA/j7EnNIo9-ki_AdmvGUSZPA/Original/tensioning_accessories_cut_sheet%20%28PDF%29.pdf" target="_blank">CUT SHEET</a></li>
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
                <div class="row align-items-center " style="background-color:lightgrey;margin-left: 0; margin-right: 0; ">
                    <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9d0c0cff; padding-left: 10px;"><span style="font-size: 2rem;">WIND MULTI-STAGE</span><br>Tensioners</h3>
                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            Our slim Wind Multi-Stage Tensioners are designed for wind turbines with limited radial clearance. Compact yet powerful, they handle higher loads with ease, delivering reliable performance in tough conditions. Ideal for confined spaces, they ensure efficient bolting solutions, with manufacturer-specific designs available for Acciona, Clipper, Gamesa, Mitsubishi, Siemens, Vestas, and more.
                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/wRSwp1Y2kES1a7K4Zwf_fw/9Zjs7DhJj0-Hlhvuxo-z4g/Original/HYTORC-Single_Multi_Stage_Tensioners-data_sheet-approved.pdf" target="_blank">CUT SHEET</a></li>
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
                            <img src="assets/img/Hytorc/tensioners/TENSIONERS (4).png"
                                alt="Wind Multi-Stage Tensioners"
                                class="img-fluid rounded">
                        </div>
                    </div>
                </div>
                <div class="row align-items-center" style="margin-left: 0; margin-right: 0;">
                    <div class="col-md-6 d-flex mt-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                        <div class="custom-img">
                            <img src="assets/img/Hytorc/tensioners/TENSIONERS (5).png"
                                alt="Wind Multi-Stage Tensioners"
                                class="img-fluid rounded">
                        </div>
                    </div>
                    <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9d0c0cff; padding-left: 10px;"><span style="font-size: 2rem;">TOP SIDE STANDARD</span><br>Tensioners</h3>
                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            Our Topside Standard tensioners paired with our interchangeable adapter kit are designed to streamline your operations. They fit most hydraulic cylinders and handle various bolt sizes. Crafted from durable hardened steel alloy, they offer a reliable, cost-effective solution for your bolting needs. Save time and simplify your work with our high-quality equipment. </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/6Z20fQgRAkOouomNDoYRSA/j7EnNIo9-ki_AdmvGUSZPA/Original/tensioning_accessories_cut_sheet%20%28PDF%29.pdf" target="_blank">CUT SHEET</a></li>
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
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9d0c0cff; padding-left: 10px;"><span style="font-size: 2rem;">SUBSEA</span><br>Tensioners</h3>
                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            Our Subsea Hydraulic Tensioners are engineered for reliability in the toughest underwater environments. With a durable 1-piece body, 30mm piston stroke, and visible stroke indicator, they ensure safety and efficiency. Available with solid or split nuts, they’re designed for quick setup, smooth operation, and dependable performance in challenging subsea conditions.
                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/dfMmYJcA5EWBBgc_1oBEYg/gorSHkxxxE-42zHXsqZyLA/Original/Subsea_Hydraulic_Bolt_Tensioning-cut_sheet.pdf" target="_blank">CUT SHEET</a></li>
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
                            <img src="assets/img/Hytorc/tensioners/TENSIONERS (6).png"
                                alt="Subsea Tensioners"
                                class="img-fluid rounded">
                        </div>
                    </div>
                </div>
                <div class="row align-items-center" style="margin-left: 0; margin-right: 0;">
                    <div class="col-md-6 d-flex mt-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                        <div class="custom-img">
                            <img src="assets/img/Hytorc/tensioners/TENSIONERS (7).png"
                                alt="Topside Spring Return Tensioners"
                                class="img-fluid rounded">
                        </div>
                    </div>
                    <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9d0c0cff; padding-left: 10px;"><span style="font-size: 2rem;">TOPSIDE SPRING RETURN</span><br>Tensioners</h3>
                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            Our Topside Spring Return Tensioners deliver fast, efficient, and durable performance with an auto-return mechanism that eliminates manual piston resetting. Built from high-strength steel to withstand harsh environments, they fit standard ANSI/ASME flanges and feature interchangeable adapter kits for versatility. A built-in relief valve prevents overstroking, while customization options ensure the perfect fit for your application.

                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/6Z20fQgRAkOouomNDoYRSA/j7EnNIo9-ki_AdmvGUSZPA/Original/tensioning_accessories_cut_sheet%20%28PDF%29.pdf" target="_blank">CUT SHEET</a></li>
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
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9d0c0cff; padding-left: 10px;"><span style="font-size: 2rem;">WIND SINGLE STAGE</span><br>Tensioners</h3>
                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            Our Wind Single-Stage hydraulic tensioners are designed for bolting applications with limited overhead clearance, making them perfect for wind turbine maintenance. These compact, powerful tools offer uncompromising performance in challenging environments. Built to handle higher loads, they provide reliable performance for demanding wind projects. Manufacturer-specific designs are available.
                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/wRSwp1Y2kES1a7K4Zwf_fw/9Zjs7DhJj0-Hlhvuxo-z4g/Original/HYTORC-Single_Multi_Stage_Tensioners-data_sheet-approved.pdf" target="_blank">CUT SHEET</a></li>
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
                            <img src="assets/img/Hytorc/tensioners/TENSIONERS (8).png"
                                alt="Wind Multi-Stage Tensioners"
                                class="img-fluid rounded">
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center mt-5" data-aos="fade-up" data-aos-duration="1000">
                    <h1 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Accessories</h1>
                    <div style="width: 80px; height: 4px; background: #9d0c0cff; margin: 10px auto; border-radius: 2px;"></div>
                </div>
                <div class="row align-items-center" style="margin-left: 0; margin-right: 0;">
                    <div class="col-md-6 d-flex mt-4" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                        <div class="custom-img">
                            <img src="assets/img/Hytorc/Accessories/AXEL ASSETS FOR WEBSITE (1)/DUAL SPLINE FIXTURE.png"
                                alt="Direct Fit Tensioners"
                                class="img-fluid rounded">
                        </div>
                    </div>
                    <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9d0c0cff; padding-left: 10px;"><span style="font-size: 2rem;">DUAL SPLINE FIXTURE</span><br>Accessories</h3>
                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            The Dual Spline Fixture transforms precision machining with its dual-location system, ensuring pinpoint alignment of tooth profile and spline pitch circles to eliminate runout and secure workpieces firmly. Ideal for aerospace and automotive manufacturers, it accommodates spline shafts up to 60mm diameter and aligns with ANSI B92.1 standards.</p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/6Z20fQgRAkOouomNDoYRSA/j7EnNIo9-ki_AdmvGUSZPA/Original/tensioning_accessories_cut_sheet%20%28PDF%29.pdf" target="_blank">CUT SHEET</a></li>
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
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9d0c0cff; padding-left: 10px;"><span style="font-size: 2rem;">CRAB NUT FIXTURE</span><br>Accessories</h3>
                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            The Crab Nut Reaction Fixture revolutionizes high-torque bolting with its U-shaped adjustable arm, absorbing reaction forces between adjacent bolts to eliminate side loads and pinch points for unmatched safety and precision. Perfect for rail, marine, and industrial maintenance teams, it fits standard hex nuts on M20-M36 bolts and complies with ISO 6789 torque standards. </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/6Z20fQgRAkOouomNDoYRSA/j7EnNIo9-ki_AdmvGUSZPA/Original/tensioning_accessories_cut_sheet%20%28PDF%29.pdf" target="_blank">CUT SHEET</a></li>
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
                            <img src="assets/img/Hytorc/Accessories/AXEL ASSETS FOR WEBSITE (1)/CRAB NUT FIXTURE.png"
                                alt="Wind Foundation Tensioners"
                                class="img-fluid rounded">
                        </div>
                    </div>
                </div>
                <div class="row align-items-center " style="margin-left: 0; margin-right: 0; ">
                    <div class="col-md-6 d-flex mt-4" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                        <div class="custom-img">
                            <img src="assets/img/Hytorc/Accessories/AXEL ASSETS FOR WEBSITE (1)/REACTION PAD.png"
                                alt="Wind Multi-Stage Tensioners"
                                class="img-fluid rounded">
                        </div>
                    </div>
                    <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9d0c0cff; padding-left: 10px;"><span style="font-size: 2rem;">REACTION PAD</span><br>Accessories</h3>
                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            Reaction Pad revolutionizes safe bolting with its adjustable, track-compatible design, absorbing high-torque counterforces on linear bolt patterns to eliminate pinch points and side loads for superior operator protection and tool accuracy. Perfect for wind turbine maintenance, pipeline, and structural steel teams, it fits 3"-12" track spacings on M20-M64 bolts and aligns with ASME PCC-1 standards. </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/wRSwp1Y2kES1a7K4Zwf_fw/9Zjs7DhJj0-Hlhvuxo-z4g/Original/HYTORC-Single_Multi_Stage_Tensioners-data_sheet-approved.pdf" target="_blank">CUT SHEET</a></li>
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
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9d0c0cff; padding-left: 10px;"><span style="font-size: 2rem;">TRACK PAD FIXTURE</span><br>Accessories</h3>
                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            Track Pad Fixture revolutionizes multi-bolt torquing with its adjustable sliding base, absorbing reaction forces on linear bolt tracks to eliminate side loads and pinch points for superior safety and precision. Perfect for wind turbine, pipeline, and structural steel teams, it fits 3"-12" track spacings on M20-M64 bolts and complies with ASME PCC-1 standards.
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/6Z20fQgRAkOouomNDoYRSA/j7EnNIo9-ki_AdmvGUSZPA/Original/tensioning_accessories_cut_sheet%20%28PDF%29.pdf" target="_blank">CUT SHEET</a></li>
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
                            <img src="assets/img/Hytorc/Accessories/AXEL ASSETS FOR WEBSITE (1)/TRACK PAD FIXTURE.png"
                                alt="Wind Multi-Stage Tensioners"
                                class="img-fluid rounded">
                        </div>
                    </div>
                </div>
                <div class="row align-items-center" style="margin-left: 0; margin-right: 0;">
                    <div class="col-md-6 d-flex mt-4" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                        <div class="custom-img">
                            <img src="assets/img/Hytorc/Accessories/AXEL ASSETS FOR WEBSITE (1)/WHEEL GUN EXTENTION.png"
                                alt="Subsea Tensioners"
                                class="img-fluid rounded">
                        </div>
                    </div>
                    <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9d0c0cff; padding-left: 10px;"><span style="font-size: 2rem;">WHEEL GUN EXTENSION</span><br>Accessories</h3>
                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            Wheel Gun Extension enhances wheel bolting efficiency with its sleek, adjustable reaction arm, designed to absorb counterforces on adjacent lug nuts, eliminating pinch points and side loads for superior safety and precision. Ideal for commercial fleets, rail maintenance, and heavy-duty truck operations, it fits M22-M36 lug nuts and meets SAE J1965 standards. </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/dfMmYJcA5EWBBgc_1oBEYg/gorSHkxxxE-42zHXsqZyLA/Original/Subsea_Hydraulic_Bolt_Tensioning-cut_sheet.pdf" target="_blank">CUT SHEET</a></li>
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
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9d0c0cff; padding-left: 10px;"><span style="font-size: 2rem;">HYTORC WASHER DRIVER</span><br>Accessories</h3>
                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            The HYTORC Washer Driver transforms bolting efficiency with its patented dual-socket system, where the outer socket grips the knurled washer edge for reaction-free torquing, and the inner socket drives the nut, eliminating pinch points and side loads for superior safety and accuracy. Ideal for pipeline, wind turbine, and structural steel applications, it fits M12-M100 bolts and meets ASME PCC-1 standards.
                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/6Z20fQgRAkOouomNDoYRSA/j7EnNIo9-ki_AdmvGUSZPA/Original/tensioning_accessories_cut_sheet%20%28PDF%29.pdf" target="_blank">CUT SHEET</a></li>
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
                            <img src="assets/img/Hytorc/Accessories/AXEL ASSETS FOR WEBSITE (1)/HYTORC DISHWAHER DRIVER.png"
                                alt="Topside Spring Return Tensioners"
                                class="img-fluid rounded">
                        </div>
                    </div>
                </div>
                <div class="row align-items-center" style="margin-left: 0; margin-right: 0;">
                    <div class="col-md-6 d-flex mt-4" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                        <div class="custom-img">
                            <img src="assets/img/Hytorc/Accessories/AXEL ASSETS FOR WEBSITE (1)/HYTORC NUT DRIVER.png"
                                alt="Wind Multi-Stage Tensioners"
                                class="img-fluid rounded">
                        </div>
                    </div>
                    <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9d0c0cff; padding-left: 10px;"><span style="font-size: 2rem;">HYTORC NUT DRIVER</span><br>Accessories</h3>
                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            HYTORC Nut Driver redefines high-precision bolting with its innovative three-part fastener system, delivering pure tensile force to prevent thread damage and ensure consistent bolt tension without the need for backup wrenches or side loads. Ideal for wind turbine, pipeline, and heavy machinery applications, it supports M12-M100 bolts and adheres to ASME PCC-1 standards. </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/wRSwp1Y2kES1a7K4Zwf_fw/9Zjs7DhJj0-Hlhvuxo-z4g/Original/HYTORC-Single_Multi_Stage_Tensioners-data_sheet-approved.pdf" target="_blank">CUT SHEET</a></li>
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
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9d0c0cff; padding-left: 10px;"><span style="font-size: 2rem;">ECO LINE SOCKETS</span><br>Accessories</h3>
                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            Eco Line Sockets redefine sustainable bolting with their eco-friendly silver-hued coating, crafted via an environmentally conscious process that surpasses traditional black oxide in durability and visibility, while meeting ISO 9001 and 14001 standards for quality and environmental management. Ideal for pipeline, wind turbine, and industrial maintenance crews, they fit 1/2" drive tools for M10-M36 bolts and ensure chamfered lead-ins for seamless attachment without slippage or corrosion.
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/6Z20fQgRAkOouomNDoYRSA/j7EnNIo9-ki_AdmvGUSZPA/Original/tensioning_accessories_cut_sheet%20%28PDF%29.pdf" target="_blank">CUT SHEET</a></li>
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
                            <img src="assets/img/Hytorc/Accessories/AXEL ASSETS FOR WEBSITE (1)/ECO LINE SOCKETS.png"
                                alt="Wind Foundation Tensioners"
                                class="img-fluid rounded">
                        </div>
                    </div>
                </div>
                <div class="row align-items-center " style="margin-left: 0; margin-right: 0; ">
                    <div class="col-md-6 d-flex mt-4" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                        <div class="custom-img">
                            <img src="assets/img/Hytorc/Accessories/AXEL ASSETS FOR WEBSITE (1)/OFFSET LINKS.png"
                                alt="Wind Multi-Stage Tensioners"
                                class="img-fluid rounded">
                        </div>
                    </div>
                    <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9d0c0cff; padding-left: 10px;"><span style="font-size: 2rem;">OFFSET LINKS</span><br>Accessories</h3>
                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            Offset Link redefines flexible bolting with its innovative interchangeable cartridge system, enabling quick field swaps for hex sizes from 30-80mm to deliver precise torque in low-clearance or obstructed spaces where standard sockets fail. Ideal for pipeline, wind turbine, and structural maintenance crews, it fits 3/4" and 1" square drive tools on M16-M64 bolts and aligns with ASME PCC-1 standards.
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/wRSwp1Y2kES1a7K4Zwf_fw/9Zjs7DhJj0-Hlhvuxo-z4g/Original/HYTORC-Single_Multi_Stage_Tensioners-data_sheet-approved.pdf" target="_blank">CUT SHEET</a></li>
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
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9d0c0cff; padding-left: 10px;"><span style="font-size: 2rem;">BACKUP WRENCHES</span><br>Accessories</h3>
                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            Backup Wrench revolutionizes bolting stability with its innovative self-contained reaction system, securely locking onto adjacent fasteners to prevent counter-rotation without additional tools, eliminating side loads and enhancing operator safety. Perfect for wind turbine, pipeline, and heavy machinery maintenance teams, it fits M16-M64 bolts and complies with ASME PCC-1 standards.
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/6Z20fQgRAkOouomNDoYRSA/j7EnNIo9-ki_AdmvGUSZPA/Original/tensioning_accessories_cut_sheet%20%28PDF%29.pdf" target="_blank">CUT SHEET</a></li>
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
                            <img src="assets/img/Hytorc/Accessories/AXEL ASSETS FOR WEBSITE (1)/BACKUP WRENCHES.png"
                                alt="Wind Multi-Stage Tensioners"
                                class="img-fluid rounded">
                        </div>
                    </div>
                </div>
                <div class="row align-items-center" style="margin-left: 0; margin-right: 0;">
                    <div class="col-md-6 d-flex mt-4" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                        <div class="custom-img">
                            <img src="assets/img/Hytorc/Accessories/AXEL ASSETS FOR WEBSITE (1)/ELECTRIC POWER SUPPLY.png"
                                alt="Subsea Tensioners"
                                class="img-fluid rounded">
                        </div>
                    </div>
                    <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9d0c0cff; padding-left: 10px;"><span style="font-size: 2rem;">ELECTRIC POWER SUPPLY</span><br>Accessories</h3>
                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            Electric Power Supply transforms bolting operations with its cutting-edge portable console, delivering consistent high-voltage power to ensure precise torque control without the bulk of traditional hydraulic systems. Ideal for wind turbine, aerospace, and industrial maintenance teams, it supports HYTORC LION cordless multipliers and electric torque tools up to 12,000 ft-lbs, meeting ISO 6789 standards.
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/dfMmYJcA5EWBBgc_1oBEYg/gorSHkxxxE-42zHXsqZyLA/Original/Subsea_Hydraulic_Bolt_Tensioning-cut_sheet.pdf" target="_blank">CUT SHEET</a></li>
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
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9d0c0cff; padding-left: 10px;"><span style="font-size: 2rem;">FILTER, REGULATOR, AND LUBRICATOR</span><br>Accessories</h3>
                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            Filter, Regulator, and Lubricator (FRL) unit redefines pneumatic performance with its integrated three-stage system, purifying compressed air by removing contaminants, stabilizing pressure, and injecting precise oil mist to extend tool life and ensure consistent torque output. Ideal for pipeline, wind turbine, and industrial bolting crews, it features 1/4" NPT ports with 90 CFM capacity and aligns with ISO 9001 standards for reliable air preparation. </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/6Z20fQgRAkOouomNDoYRSA/j7EnNIo9-ki_AdmvGUSZPA/Original/tensioning_accessories_cut_sheet%20%28PDF%29.pdf" target="_blank">CUT SHEET</a></li>
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
                            <img src="assets/img/Hytorc/Accessories/AXEL ASSETS FOR WEBSITE (1)/FILTER, REGULATOR AND LUBRICATOR.png"
                                alt="Topside Spring Return Tensioners"
                                class="img-fluid rounded">
                        </div>
                    </div>
                </div>
                <div class="row align-items-center" style="margin-left: 0; margin-right: 0;">
                    <div class="col-md-6 d-flex mt-4" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                        <div class="custom-img">
                            <img src="assets/img/Hytorc/Accessories/AXEL ASSETS FOR WEBSITE (1)/HYDRAULIC HOSES.png"
                                alt="Wind Multi-Stage Tensioners"
                                class="img-fluid rounded">
                        </div>
                    </div>
                    <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9d0c0cff; padding-left: 10px;"><span style="font-size: 2rem;">HYDRAULIC HOSES</span><br>Accessories</h3>
                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            Hydraulic Hoses redefine bolting reliability with their high-pressure twin-line design, engineered from Kevlar-reinforced multi-layer construction to withstand 700 bar operating pressures and burst up to 2800 bar for a superior 4:1 safety factor. Ideal for oil & gas, wind energy, and heavy construction crews, they feature 15 ft. standard lengths with Pioneer screw-in couplers for seamless compatibility across all HYTORC tools.
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://cdn.mediavalet.com/usva/hytorc/wRSwp1Y2kES1a7K4Zwf_fw/9Zjs7DhJj0-Hlhvuxo-z4g/Original/HYTORC-Single_Multi_Stage_Tensioners-data_sheet-approved.pdf" target="_blank">CUT SHEET</a></li>
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
                <!--
                <section id="faqs" class="py-4" style="background: linear-gradient(135deg, transparent, transparent);" data-aos="fade-up" data-aos-duration="1000">
                    <div class="container">
                        <h1 style="margin-bottom: 40px;" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="100">
                            <i class="fa-solid fa-circle-question" style="margin-right:10px;"></i>
                            Frequently Asked Questions
                        </h1>
                        <div class="accordion shadow-sm rounded" id="faqAccordion">
                            <div class="accordion-item mb-3 border-0 shadow-sm rounded" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                                <h2 class="accordion-header" id="faq1-heading">
                                    <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq1" aria-expanded="false" aria-controls="faq1"
                                        style="background:#fff; border-radius:8px;">
                                        What industries does HYTORC serve?
                                    </button>
                                </h2>
                                <div id="faq1" class="accordion-collapse collapse" aria-labelledby="faq1-heading"
                                    data-bs-parent="#faqAccordion">
                                    <div class="accordion-body" style="background:#fafafa; border-left:4px solid #b71c1c;">
                                        HYTORC solutions are trusted across <strong>oil & gas, power generation, manufacturing, mining, construction, and aerospace</strong>, wherever precision bolting is critical.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-3 border-0 shadow-sm rounded" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                                <h2 class="accordion-header" id="faq2-heading">
                                    <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2"
                                        style="background:#fff; border-radius:8px;">
                                        Do you provide training for your tools?
                                    </button>
                                </h2>
                                <div id="faq2" class="accordion-collapse collapse" aria-labelledby="faq2-heading"
                                    data-bs-parent="#faqAccordion">
                                    <div class="accordion-body" style="background:#fafafa; border-left:4px solid #b71c1c;">
                                        Yes. We offer <strong>on-site and virtual training</strong> programs to ensure your team operates HYTORC tools safely and efficiently.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-3 border-0 shadow-sm rounded" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                                <h2 class="accordion-header" id="faq3-heading">
                                    <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3"
                                        style="background:#fff; border-radius:8px;">
                                        Can HYTORC tools be customized for specific applications?
                                    </button>
                                </h2>
                                <div id="faq3" class="accordion-collapse collapse" aria-labelledby="faq3-heading"
                                    data-bs-parent="#faqAccordion">
                                    <div class="accordion-body" style="background:#fafafa; border-left:4px solid #b71c1c;">
                                        Absolutely. We specialize in <strong>custom bolting solutions</strong> tailored to unique industrial requirements.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-3 border-0 shadow-sm rounded" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                                <h2 class="accordion-header" id="faq4-heading">
                                    <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4"
                                        style="background:#fff; border-radius:8px;">
                                        Do you provide after-sales support?
                                    </button>
                                </h2>
                                <div id="faq4" class="accordion-collapse collapse" aria-labelledby="faq4-heading"
                                    data-bs-parent="#faqAccordion">
                                    <div class="accordion-body" style="background:#fafafa; border-left:4px solid #b71c1c;">
                                        Yes, our dedicated support team offers <strong>maintenance, calibration, repairs, and technical consultation</strong> to maximize tool performance.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
        -->

            </div>
        </div>
        <div class="container text-center py-4">
            <div class="social-links mb-2 " data-aos="fade-up" data-aos-delay="300">
                <a href="https://www.facebook.com/boltimizercorp" target="_blank"><i class="bi bi-facebook"></i></a>
                <a href="https://www.tiktok.com/@innoverse24?is_from_webapp=1&sender_device=pc" target="_blank"><i class="bi bi-tiktok"></i></a>
                <a href="https://www.linkedin.com/company/boltimizer-corp/posts/?feedView=all" target="_blank"><i class="bi bi-linkedin"></i></a>
            </div>
            <p class="text-muted" data-aos="fade-up" data-aos-delay="300">&copy; <?php echo date('Y'); ?> Boltimizer Corporation. All rights reserved.</p>
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