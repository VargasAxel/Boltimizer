    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/css/JF.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <title>Jupeng Power</title>
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
            <!-- Background Video -->
            <iframe
                src="https://www.youtube.com/embed/56fcfTfkudY?autoplay=1&mute=1&loop=1&playlist=56fcfTfkudY&controls=0&showinfo=0&rel=0&modestbranding=1&iv_load_policy=3&disablekb=1&fs=0&cc_load_policy=0&playsinline=1"
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
                src="https://www.youtube.com/embed/56fcfTfkudY?autoplay=1&mute=1&loop=1&playlist=56fcfTfkudY&controls=0&showinfo=0&rel=0&modestbranding=1&iv_load_policy=3&disablekb=1&fs=0&cc_load_policy=0&playsinline=1"
                frameborder="0"
                allow="autoplay; encrypted-media; picture-in-picture"
                allowfullscreen
                loading="lazy">
            </iframe>
        </div> -->
        <div class="container-fluid p-5">
            <div class="row">
                <div class="col-12 text-center mt-5 pt-5" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                    <h1 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Services</h1>
                    <div style="width: 80px; height: 4px; background: #1a3c5eff; margin: 10px auto; border-radius: 2px;"></div>
                    <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200" style="padding-left: 5vw; padding-right: 5vw; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                        At Jupeng Power, we deliver <strong>innovative power tool solutions</strong>
                        powered by cutting-edge technology and proven durability.
                        From <strong>customized tool designs</strong> to expert consultation, training,
                        and comprehensive after-sales support — we ensure <strong>safety, precision, and efficiency</strong>
                        in every project.
                    </p>
                </div>
            </div>
            <div class="row text-justify mt-5 pt-5">
                <div class="col-12 text-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                    <h1 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Products</h1>
                    <div style="width: 80px; height: 4px; background: #1a3c5eff; margin: 10px auto; border-radius: 2px;"></div>
                    <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200" style="padding-left: 5vw; padding-right: 5vw; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                        Jupeng Power offers advanced <strong>cordless and electric power tools</strong> designed for
                        <strong>safety, precision, and efficiency</strong>.
                        From drills and grinders to saws and custom solutions, our products deliver
                        <strong>exceptional performance across industries worldwide</strong>.
                    </p>
                </div>
                <div class="col-12 text-center mt-5 pt-5" data-aos="fade-up" data-aos-duration="1000">
                    <h1 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">JF Rotary Screw Air Compressor</h1>
                    <div style="width: 80px; height: 4px; background: #1a3c5eff; margin: 10px auto; border-radius: 2px;"></div>
                </div>
                <div class="row align-items-center" style="margin-left: 0; margin-right: 0;">
                    <div class="col-md-6 d-flex mt-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                        <div class="custom-img">
                            <img src="assets/img/JF/jf/247.png"
                                alt="AVANTI Hydraulic Torque Wrench"
                                class="img-fluid rounded">
                        </div>
                    </div>
                    <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #1a3c5eff; padding-left: 10px;"><span style="font-size: 2rem;">2-Stage Rotary Screw Air Compressor (15KW~315KW)</span><br>JF Rotary Screw Air Compressor</h3>
                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            8.5KW 2-stage rotary screw air compressor is widely used in all kinds of industries around the world, including machinery, medicine, textile, electronics, automotive, construction, and military.

                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://www.jufengcompressor.com/sale-53257259-50-hp-rotary-screw-air-compressor-local-service-provider-in-thailand-for-motor-power-10-500-hp.html" target="_blank">CUT SHEET</a></li>
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
                        <h3 class="h3-black" style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #1a3c5eff; padding-left: 10px;"><span style="font-size: 2rem;">Variable Speed Drive Screw Air Compressor (7.5KW~400KW)</span><br>Variable Speed Drive Screw Air Compressor</h3>
                        <p class="p-black" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            Jufeng is a reliable rotary screw air compressor manufacturer and 7.5KW variable speed drive rotary screw air compressor supplier. Our VSD controlled air compressors are available with power from 7.5KW to 400KW.

                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://www.jufengcompressor.com/sale-53257259-50-hp-rotary-screw-air-compressor-local-service-provider-in-thailand-for-motor-power-10-500-hp.html" target="_blank">CUT SHEET</a></li>
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
                            <img src="assets/img/JF/jf/248.png"
                                alt="MXT Hydraulic Torque Wrench"
                                class="img-fluid rounded">
                        </div>
                    </div>
                </div>
                <div class="row align-items-center no-gutters" style=" margin-left: 0; margin-right: 0;">
                    <div class="col-md-6 d-flex mt-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                        <div class="custom-img">
                            <img src="assets/img/JF/jf/249.png"
                                alt="VERSA Hydraulic Torque Wrench"
                                class="img-fluid rounded">
                        </div>
                    </div>
                    <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #1a3c5eff; padding-left: 10px;"><span style="font-size: 2rem;">Tank Mounted Rotary Screw Air Compressor (7.5~15kw)</span><br>JF Rotary Screw Air Compressor</h3>
                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            Jufeng is a reliable rotary screw air compressor manufacturer and 7.5KW tank mounted rotary screw air compressor supplier. Our tank mounted rotary screw air compressors are available with power from 11KW to 220KW.
                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://www.jufengcompressor.com/products.html" target="_blank">CUT SHEET</a></li>
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
                        <h3 class="h3-black" style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #1a3c5eff; padding-left: 10px;"><span style="font-size: 2rem;">Permanent Magnet Screw Air Compressor (15KW~132KW)</span><br>JF Rotary Screw Air Compressor</h3>
                        <p class="p-black" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            The JM Series Permanent Magnet Screw Air Compressor delivers maximum free air output with minimal energy use, maintaining high efficiency even at low loads.

                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://www.jufengcompressor.com/products.html" target="_blank">CUT SHEET</a></li>
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
                            <img src="assets/img/JF/jf/250.png"
                                alt="STEALTH Hydraulic Torque Wrench"
                                class="img-fluid rounded">
                        </div>
                    </div>
                </div>
                <div class="row align-items-center" style="margin-left: 0; margin-right: 0;">
                    <div class="col-md-6 d-flex mt-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                        <div class="custom-img">
                            <img src="assets/img/JF/jf/251.png"
                                alt="XLCT Hydraulic Torque Wrench"
                                class="img-fluid rounded">
                        </div>
                    </div>
                    <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #1a3c5eff; padding-left: 10px;"><span style="font-size: 2rem;">Belt Drive Rotary Screw Air Compressor (5.5KW~55KW)</span><br>JF Rotary Screw Air Compressor</h3>
                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            Our belt drive air compressors are available with power from 5.5KW to 55KW. Equipped with complete manufacturing and assembly lines, we offer quality belt drive rotary screw compressor and compressed air treatment equipment for customers.
                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://www.jufengcompressor.com/products.html" target="_blank">CUT SHEET</a></li>
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
                        <h3 class="h3-black" style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #1a3c5eff; padding-left: 10px;"><span style="font-size: 2rem;">Direct Drive Rotary Screw Air Compressor</span><br>JF Rotary Screw Air Compressor</h3>

                        <p class="p-black" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            Besides the JF direct drive rotary screw air compressor, we also provide ADF and ODF air compressors. We offer wide range of compressors like two stage air compressor, belt drive air compressor, variable speed drive rotary screw compressor for customers.

                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://www.jufengcompressor.com/products.html" target="_blank">CUT SHEET</a></li>
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
                            <img src="assets/img/JF/jf/252.png"
                                alt="EDGE S Hydraulic Torque Wrench"
                                class="img-fluid rounded">
                        </div>
                    </div>
                </div>

                <div class="row align-items-center" style="margin-left: 0; margin-right: 0;">
                    <div class="col-md-6 d-flex mt-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                        <div class="custom-img">
                            <img src="assets/img/JF/jf/253.png"
                                alt="jGun SINGLE SPEED Pneumatic Torque Tool"
                                class="img-fluid rounded">
                        </div>
                    </div>
                    <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #1a3c5eff; padding-left: 10px;"><span style="font-size: 2rem;">Low Pressure Screw Air Compressor</span><br>JF Rotary Screw Air Compressor</h3>

                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            Jufeng is a reliable rotary screw air compressor manufacturer and 0.4MPa / 0.5MPa low pressure rotary screw compressor supplier. Equipped with complete manufacturing and assembly lines, we offer quality low pressure screw air compressor and compressed air treatment equipment for customers.

                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://www.jufengcompressor.com/products.html" target="_blank">CUT SHEET</a></li>
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
                        <h3 class="h3-black" style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #1a3c5eff; padding-left: 10px;"><span style="font-size: 2rem;">ADF60A Rotary Screw Air Compressor</span><br>ADF Rotary Screw Air Compressor</h3>
                        <p class="p-black" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            Jufeng also provide JF and ODF air compressors. We offer wide range of compressors like belt drive air compressor, direct drive rotary screw compressor, variable speed drive rotary air compressor for customers.

                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://www.jufengcompressor.com/products.html" target="_blank">CUT SHEET</a></li>
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
                            <img src="assets/img/JF/jf/254.png"
                                alt="jGun DIGITAL SINGLE SPEED Pneumatic Torque Tool"
                                class="img-fluid rounded">
                        </div>
                    </div>
                </div>
                <div class="row align-items-center" style="margin-left: 0; margin-right: 0;">
                    <div class="col-md-6 d-flex mt-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                        <div class="custom-img">
                            <img src="assets/img/JF/jf/255.png"
                                alt="Pneumatic Impact Wrench"
                                class="img-fluid rounded">
                        </div>
                    </div>
                    <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #1a3c5eff; padding-left: 10px;"><span style="font-size: 2rem;">Air Compressor Temperature Sensor</span></h3>
                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            Resistance of our air compressor temperature sensor varies with the change of temperature, and it transmits the varied value to controller. After the processing of micro-computer, current temperature will be precisely displayed in the display screen.

                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://www.jufengcompressor.com/products.html" target="_blank">CUT SHEET</a></li>
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
                        <h3 class="h3-black" style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #1a3c5eff; padding-left: 10px;"><span style="font-size: 2rem;">Inlet Valve</span><br>Air Compressor Parts</h3>
                        <p class="p-black" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            Air compressor inlet valve introduces an intelligent design, allowing automatic adjustment towards air inlet amount from 0% to 100%. Its adoption helps to reduce the energy consumption and operation cost.
                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://www.jufengcompressor.com/products.html" target="_blank">CUT SHEET</a></li>
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
                            <img src="assets/img/JF/jf/256.png"
                                alt="jGun DUAL SPEED Pneumatic Torque Tool"
                                class="img-fluid rounded">
                        </div>
                    </div>
                </div>
                <!-- <div class="col-12 text-center mt-5" data-aos="fade-up" data-aos-duration="1000">
                    <h1 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Electric Tools</h1>
                    <div style="width: 80px; height: 4px; background: #1a3c5eff; margin: 10px auto; border-radius: 2px;"></div>
                </div> -->
                <div class="row align-items-center" style="margin-left: 0; margin-right: 0;">
                    <div class="col-md-6 d-flex mt-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                        <div class="custom-img">
                            <img src="assets/img/JF/jf/257.png"
                                alt="LITHIUM SERIES II Electric Torque Tool"
                                class="img-fluid rounded">
                        </div>
                    </div>
                    <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #1a3c5eff; padding-left: 10px;"><span style="font-size: 2rem;">Piping System</span><br>Air Compressor Parts</h3>
                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            Main piping system in our air compressor is connected with locknut and oil-proof O ring, so air leakage and oil leakage could be perfectly prevented.
                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://www.jufengcompressor.com/products.html" target="_blank">CUT SHEET</a></li>
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
                        <h3 class="h3-black" style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #1a3c5eff; padding-left: 10px;"><span style="font-size: 2rem;">Air Dryer</span><br>Compressed Air Treatment Equipment</h3>
                        <p class="p-black" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            Compressed air is an indispensable processing power in all industrial fields and production processes. In order to prevent production downtime, compressed air must be clean, dry and without oil. Compressed air is obtained through a large amount of ambient air pressure.
                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://www.jufengcompressor.com/products.html" target="_blank">CUT SHEET</a></li>
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
                            <img src="assets/img/JF/jf/258.png"
                                alt="LION GUN Electric Torque Tool"
                                class="img-fluid rounded">
                        </div>
                    </div>
                </div>
                <div class="row align-items-center" style="margin-left: 0; margin-right: 0;">
                    <div class="col-md-6 d-flex mt-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                        <div class="custom-img">
                            <img src="assets/img/JF/jf/259.png"
                                alt="LION GUN Dual Speed Electric Torque Tool"
                                class="img-fluid rounded">
                        </div>
                    </div>
                    <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #1a3c5eff; padding-left: 10px;"><span style="font-size: 2rem;">ODF Rotary Screw Air Compressor</span><br>Air Compressor</h3>
                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            ODF rotary screw air compressor's screw rotor (all-end) is imported from German, which is the third generation rotor, featuring asymmetric shape with a gear ratio of 5:6 and a reasonable ratio between length and diameter.
                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://www.jufengcompressor.com/products.html" target="_blank">CUT SHEET</a></li>
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
                        <h3 class="h3-black" style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #1a3c5eff; padding-left: 10px;"><span style="font-size: 2rem;">Shaft Coupling</span><br>Air Compressor Parts</h3>
                        <p class="p-black" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            Shaft coupling is used to connect the electric motor and all-end, allowing an easy disassembly, flexible operation, as well as an improved transmission efficiency.
                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://www.jufengcompressor.com/products.html" target="_blank">CUT SHEET</a></li>
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
                            <img src="assets/img/JF/jf/260.png"
                                alt="LION GUN X Electric Torque Tool"
                                class="img-fluid rounded">
                        </div>
                    </div>
                </div>
                <!-- <div class="col-12 text-center mt-5 pt-5" data-aos="fade-up" data-aos-duration="1000">
                    <h1 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Fasteners</h1>
                    <div style="width: 80px; height: 4px; background: #1a3c5eff; margin: 10px auto; border-radius: 2px;"></div>
                </div> -->
                <div class="row align-items-center" style="margin-left: 0; margin-right: 0;">
                    <div class="col-md-6 d-flex mt-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                        <div class="custom-img">
                            <img src="assets/img/JF/jf/261.png"
                                alt="AVANTI Hydraulic Torque Wrench"
                                class="img-fluid rounded">
                        </div>
                    </div>
                    <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #1a3c5eff; padding-left: 10px;"><span style="font-size: 2rem;">Aftercooler</span></h3>
                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            Jufeng's air compressor aftercooler enjoys fast thermal dissipation. Low density, light weight and long service life.

                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://www.jufengcompressor.com/products.html" target="_blank">CUT SHEET</a></li>
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