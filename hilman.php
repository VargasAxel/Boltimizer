    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/css/hilman.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <title>Hillman</title>
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
                src="https://www.youtube.com/embed/vkEU18kDcUc?autoplay=1&mute=1&loop=1&playlist=vkEU18kDcUc&controls=0&showinfo=0&rel=0&modestbranding=1&iv_load_policy=3&disablekb=1&fs=0"
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
                    <div style="width: 80px; height: 4px; background: #04733dff; margin: 10px auto; border-radius: 2px;"></div>
                    <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200" style="padding-left: 5vw; padding-right: 5vw; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                        At Hilman Corporation, we provide world-class <strong>heavy load moving solutions</strong>
                        built on advanced engineering and proven reliability.
                        From <strong>customized skidding systems</strong> to expert consultation, training,
                        and after-sales support — we ensure <strong>safety, precision, and efficiency</strong>
                        in every project.
                    </p>
                </div>
            </div>
            <div class="row text-justify mt-5 pt-5">
                <div class="col-12 text-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                    <h1 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Products</h1>
                    <div style="width: 80px; height: 4px; background: #04733dff; margin: 10px auto; border-radius: 2px;"></div>
                    <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200" style="padding-left: 5vw; padding-right: 5vw; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                        Hilman Corporation offers advanced <strong>heavy load moving systems</strong> designed for
                        <strong>safety, precision, and efficiency</strong>.
                        From rollers and skates to skidding systems and custom solutions, our products deliver
                        <strong>reliable performance across industries worldwide</strong>.
                    </p>
                </div>
                <div class="col-12 text-center mt-5 pt-5" data-aos="fade-up" data-aos-duration="1000">
                    <h1 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Rollers</h1>
                    <div style="width: 80px; height: 4px; background: #04733dff; margin: 10px auto; border-radius: 2px;"></div>
                </div>
                <div class="row align-items-center" style="background-color:lightgrey;margin-left: 0; margin-right: 0;">
                    <div class="col-md-6 d-flex mt-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                        <div class="custom-img">
                            <img src="assets/img/hilman/AXEL ASSETS FOR WEBSITE/371.png"
                                alt="AVANTI Hydraulic Torque Wrench"
                                class="img-fluid rounded">
                        </div>
                    </div>
                    <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #04733dff; padding-left: 10px;"><span style="font-size: 2rem;">Versatile</span><br>ROLLERS</h3>
                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            The FT Series offers the widest array of top configurations that are built right into the body of the roller. With six individual roller capacities, these steel chain action rollers are a perfect choice to move heavy equipment over ordinary concrete floors.

                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://www.canva.com/design/DAGvPyDPQQo/q9Eq-0iOKmFBIsz5PscE9A/view?utlId=ha0b7ee9605#3" target="_blank">CUT SHEET</a></li>

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
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #04733dff; padding-left: 10px;"><span style="font-size: 2rem;">Non-Marking</span><br> ROLLERS</h3>
                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            The Nyton series is designed for heavy moving capabilities on delicate floor surfaces such as new concrete, epoxy coated surfaces, painted or sealed floors, and some properly supported tile and terrazzo floors.

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
                            <img src="assets/img/hilman/AXEL ASSETS FOR WEBSITE/372.png"
                                alt="MXT Hydraulic Torque Wrench"
                                class="img-fluid rounded">
                        </div>
                    </div>
                </div>
                <div class="row align-items-center no-gutters" style="background-color:lightgrey; margin-left: 0; margin-right: 0;">
                    <div class="col-md-6 d-flex mt-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                        <div class="custom-img">
                            <img src="assets/img/hilman/AXEL ASSETS FOR WEBSITE/373.png"
                                alt="VERSA Hydraulic Torque Wrench"
                                class="img-fluid rounded">
                        </div>
                    </div>
                    <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #04733dff; padding-left: 10px;"><span style="font-size: 2rem;">Low Profile</span><br>ROLLERS</h3>
                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            The ERS Series features a two-piece design with a base roller and a detachable swivel attachment. It is especially valuable for tasks requiring a roller with low clearance.
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
                <div class="row align-items-center" style="margin-left: 0; margin-right: 0;">

                    <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #04733dff; padding-left: 10px;"><span style="font-size: 2rem;">MOUNTABLE</span><br>ROLLERS</h3>
                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            Hilman’s mountable rollers are made from high-strength steel and built to move heavy loads and withstand long periods of static loading.
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
                    <div class="col-md-6 d-flex mt-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                        <div class="custom-img">
                            <img src="assets/img/hilman/AXEL ASSETS FOR WEBSITE/381.png"
                                alt="LITHIUM SERIES II Electric Torque Tool"
                                class="img-fluid rounded">
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center mt-5 pt-5" data-aos="fade-up" data-aos-duration="1000">
                    <h1 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Dollies</h1>
                    <div style="width: 80px; height: 4px; background: #04733dff; margin: 10px auto; border-radius: 2px;"></div>
                </div>
                <div class="row align-items-center" style="background-color:lightgrey;margin-left: 0; margin-right: 0;">
                    <div class="col-md-6 d-flex mt-4" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                        <div class="custom-img">
                            <img src="assets/img/hilman/AXEL ASSETS FOR WEBSITE/374.png"
                                alt="STEALTH Hydraulic Torque Wrench"
                                class="img-fluid rounded">
                        </div>
                    </div>
                    <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #04733dff; padding-left: 10px;"><span style="font-size: 2rem;">Omni-Skates</span><br>DOLLIES</h3>
                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            Move heavy loads in tight spaces and around sharp corners. 360-degree maneuverability is achieved with this extremely versatile, reliable and rugged design.

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

                </div>
                <div class="row align-items-center" style="margin-left: 0; margin-right: 0;">

                    <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #04733dff; padding-left: 10px;"><span style="font-size: 2rem;">Roller Dollies</span><br>DOLLIES</h3>
                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            Our Bull Dolly Series a is lightweight, cost effective solution for moving heavy equipment. Different wheel options are offered to protect floors and a variety of top styles for straight moving or turning.
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
                    <div class="col-md-6 d-flex mt-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                        <div class="custom-img">
                            <img src="assets/img/hilman/AXEL ASSETS FOR WEBSITE/375.png"
                                alt="XLCT Hydraulic Torque Wrench"
                                class="img-fluid rounded">
                        </div>
                    </div>
                </div>
                <div class="row align-items-center" style="background-color:lightgrey;margin-left: 0; margin-right: 0;">
                    <div class="col-md-6 d-flex mt-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                        <div class="custom-img">
                            <img src="assets/img/hilman/AXEL ASSETS FOR WEBSITE/383.png"
                                alt="LION GUN Dual Speed Electric Torque Tool"
                                class="img-fluid rounded">
                        </div>
                    </div>
                    <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #04733dff; padding-left: 10px;"><span style="font-size: 2rem;">3 Point Machine Skates</span><br>DOLLIES</h3>
                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            The Tri-Glide machinery moving dollies provide a stable, efficient solution for moving heavy loads over finished floors. It is designed with a large footprint to spread the weight of the load over a greater area.
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

                <div class="col-12 text-center mt-5" data-aos="fade-up" data-aos-duration="1000">
                    <h1 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Powered</h1>
                    <div style="width: 80px; height: 4px; background: #04733dff; margin: 10px auto; border-radius: 2px;"></div>
                </div>
                <div class="row align-items-center" style="margin-left: 0; margin-right: 0;">

                    <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #04733dff; padding-left: 10px;"><span style="font-size: 2rem;">Power Attack</span><br>Powered</h3>

                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            The Power Attack is an innovative way to move loads on skates or trolleys instead of forklifts.

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
                    <div class="col-md-6 d-flex mt-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                        <div class="custom-img">
                            <img src="assets/img/hilman/AXEL ASSETS FOR WEBSITE/377.png"
                                alt="jGun SINGLE SPEED Pneumatic Torque Tool"
                                class="img-fluid rounded">
                        </div>
                    </div>
                </div>
                <div class="row align-items-center" style="background-color:lightgrey;margin-left: 0; margin-right: 0;">
                    <div class="col-md-6 d-flex mt-4" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                        <div class="custom-img">
                            <img src="assets/img/hilman/AXEL ASSETS FOR WEBSITE/378.png"
                                alt="jGun DIGITAL SINGLE SPEED Pneumatic Torque Tool"
                                class="img-fluid rounded">
                        </div>
                    </div>
                    <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #04733dff; padding-left: 10px;"><span style="font-size: 2rem;">TK-EVO</span><br>Powered</h3>
                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            The Hilman TK-EVO is a battery-powered machinery-moving skate that revolutionizes heavy load transport with unparalleled precision, safety, and efficiency, all guided via remote control.

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

                </div>
                <div class="row align-items-center" style="margin-left: 0; margin-right: 0;">

                    <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #04733dff; padding-left: 10px;"><span style="font-size: 2rem;">Traksporter</span> <br>Powered</h3>
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
                    <div class="col-md-6 d-flex mt-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                        <div class="custom-img">
                            <img src="assets/img/hilman/AXEL ASSETS FOR WEBSITE/379.png"
                                alt="Pneumatic Impact Wrench"
                                class="img-fluid rounded">
                        </div>
                    </div>
                </div>
                <div class="row align-items-center" style="background-color:lightgrey;margin-left: 0; margin-right: 0;">
                    <div class="col-md-6 d-flex mt-4" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                        <div class="custom-img">
                            <img src="assets/img/hilman/AXEL ASSETS FOR WEBSITE/380.png"
                                alt="jGun DUAL SPEED Pneumatic Torque Tool"
                                class="img-fluid rounded">
                        </div>
                    </div>
                    <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #04733dff; padding-left: 10px;"><span style="font-size: 2rem;">Motorized Roller</span><br>Powered</h3>
                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            Repetitive movement – ideal for permanent movement of heavy objects.
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

                </div>


                <div class="row align-items-center" style="margin-left: 0; margin-right: 0;">
                    <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #04733dff; padding-left: 10px;"><span style="font-size: 2rem;">Workhorse</span><br>Toe Jacks</h3>
                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            Workhorse toe jacks require just over an inch of ground clearance and can operate both vertically and horizontally.
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
                            <img src="assets/img/hilman/AXEL ASSETS FOR WEBSITE/382.png"
                                alt="LION GUN Electric Torque Tool"
                                class="img-fluid rounded">
                        </div>
                    </div>
                </div>

                <div class="row align-items-center" style="background-color:lightgrey;margin-left: 0; margin-right: 0;">
                    <div class="col-md-6 d-flex mt-4" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                        <div class="custom-img">
                            <img src="assets/img/hilman/AXEL ASSETS FOR WEBSITE/384.png"
                                alt="LION GUN X Electric Torque Tool"
                                class="img-fluid rounded">
                        </div>
                    </div>
                    <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #04733dff; padding-left: 10px;"><span style="font-size: 2rem;">Deluxe</span><br>Toe Jacks</h3>
                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            Hilman Deluxe Hydraulic Toe Jacks feature a high quality lifting toe that can be adjusted to several different heights, to accommodate different lift points.
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

                </div>
                <div class="row align-items-center" style="margin-left: 0; margin-right: 0;">
                    <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #04733dff; padding-left: 10px;"><span style="font-size: 2rem;">Pro</span><br>Toe Jacks</h3>

                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            The Hydraulic Toe Jack Pro is lighter weight and has a faster lift! It allows you to get under and lift equipment with just over 1″ of ground clearance and since there are lifting points on both the toe and the top of the jack these are the perfect complement to Hilman Rollers.

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
                            <img src="assets/img/hilman/AXEL ASSETS FOR WEBSITE/376.png"
                                alt="EDGE S Hydraulic Torque Wrench"
                                class="img-fluid rounded">
                        </div>
                    </div>
                </div>



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