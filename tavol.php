    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/css/tavol.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <title>TAVOL</title>
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
                src="https://www.youtube.com/embed/nGYDllxdWFI?autoplay=1&mute=1&loop=1&playlist=nGYDllxdWFI&controls=0&showinfo=0&rel=0&modestbranding=1&iv_load_policy=3&disablekb=1&fs=0&cc_load_policy=0&playsinline=1"
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
        <div class="container-fluid p-5">
            <div class="row">
                <div class="col-12 text-center mt-5 pt-5" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                    <h1 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Services</h1>
                    <div style="width: 80px; height: 4px; background: #9d0c0cff; margin: 10px auto; border-radius: 2px;"></div>
                    <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200" style="padding-left: 5vw; padding-right:5vw;font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">
                        At TAVOL, we deliver premium <strong>crane and lifting solutions</strong>
                        engineered for maximum performance and safety.
                        From <strong>custom overhead cranes</strong> to gantry systems, hoist units,
                        expert installation, training, and comprehensive after-sales service —
                        we guarantee <strong>reliability, precision, and efficiency</strong>
                        on every job site.
                    </p>
                </div>
            </div>
            <div class="row text-justify mt-5 pt-5">
                <div class="col-12 text-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                    <h1 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Products</h1>
                    <div style="width: 80px; height: 4px; background: #9d0c0cff; margin: 10px auto; border-radius: 2px;"></div>
                    <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200" style="padding-left: 5vw; padding-right:5vw; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                        TAVOL offers premium <strong>crane and lifting equipment</strong> designed for
                        <strong>maximum safety, precision, and efficiency</strong>.
                        From overhead cranes, gantry cranes, and jib cranes to electric hoists,
                        end carriages, and complete custom lifting solutions, our products deliver
                        <strong>reliable, heavy-duty performance across industries worldwide</strong>.
                    </p>
                </div>
                <div class="col-12 text-center mt-5 pt-5" data-aos="fade-up" data-aos-duration="1000">
                    <h1 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Cranes Machinery</h1>
                    <div style="width: 80px; height: 4px; background: #9d0c0cff; margin: 10px auto; border-radius: 2px;"></div>
                </div>
                <div class="row align-items-center" style="margin-left: 0; margin-right: 0;">
                    <div class="col-md-6 d-flex mt-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                        <div class="custom-img">
                            <img src="assets/img/tavol/AXEL ASSETS FOR WEBSITE (1)/387.png"
                                alt="AVANTI Hydraulic Torque Wrench"
                                class="img-fluid rounded">
                        </div>
                    </div>
                    <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9d0c0cff; padding-left: 10px;"><span style="font-size: 2rem;">Tavol Euro-Design Wire Rope Hoist</span></h3>
                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            This is a European-style electric wire rope hoist made by Tavol in China. It’s designed with a modern, efficient structure (heritage FEM design), uses inverters for variable speed control, and comes standard with quality components like Schneider electric parts, SZW motors, and an aviation plug. It offers quiet operation (as low as 65 dB), good protection (IP54 rating), high efficiency, and a compact built-in planetary reducer drive.

                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://www.tavolgroup.com/materials-handling-cranes.html" target="_blank">MORE INFO</a></li>
                                        
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
                        <h3 class="h3-black" style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9d0c0cff; padding-left: 10px; "><span style="font-size: 2rem;">Gantry Crane 20 Ton</span></h3>
                        <p class="p-black" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            A 20-ton gantry crane is a heavy-duty lifting machine that can safely lift loads up to 20 metric tons (about 20,000 kg). It typically consists of a large horizontal beam (girder) supported by two vertical legs, forming a frame that can move (on wheels or rails) across a workspace.

                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://www.tavolgroup.com/materials-handling-cranes.html" target="_blank">MORE INFO</a></li>
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
                            <img src="assets/img/tavol/AXEL ASSETS FOR WEBSITE (1)/388.png"
                                alt="MXT Hydraulic Torque Wrench"
                                class="img-fluid rounded">
                        </div>
                    </div>
                </div>
                <div class="row align-items-center no-gutters" style=" margin-left: 0; margin-right: 0;">
                    <div class="col-md-6 d-flex mt-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                        <div class="custom-img">
                            <img src="assets/img/tavol/AXEL ASSETS FOR WEBSITE (1)/389.png"
                                alt="VERSA Hydraulic Torque Wrench"
                                class="img-fluid rounded">
                        </div>
                    </div>
                    <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9d0c0cff; padding-left: 10px;"><span style="font-size: 2rem;">10 Ton Hammerhead Topkits Tower Cranes </span></h3>
                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            QTZ125(TC6015) 10ton Tower Crane features stable operation and reliable management due to the adoption of various advanced technologies. This 10ton tower crane is configured with diverse devices like the hydraulic self-propelling device, frequency converting slewing device and a series of reliable safety devices like hoisting height limiter, slewing range limiter and multifunctional limiter.
                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://www.tavolgroup.com/materials-handling-cranes.html" target="_blank">MORE INFO</a></li>
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
                        <h3 class="h3-black" style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9d0c0cff; padding-left: 10px;"><span style="font-size: 2rem;">Topless Flat Top Type Tower Crane for Building Construction </span></h3>
                        <p class="p-black" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            Topless Flat Top Type Tower Crane for Building Construction

                            The PT5610 topless tower crane 6ton features stable operation and reliable management due to the adoption of various advanced technologies.

                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://www.tavolgroup.com/materials-handling-cranes.html" target="_blank">MORE INFO</a></li>
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
                            <img src="assets/img/tavol/AXEL ASSETS FOR WEBSITE (1)/390.png"
                                alt="STEALTH Hydraulic Torque Wrench"
                                class="img-fluid rounded">
                        </div>
                    </div>
                </div>
                <div class="row align-items-center" style="margin-left: 0; margin-right: 0;">
                    <div class="col-md-6 d-flex mt-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                        <div class="custom-img">
                            <img src="assets/img/tavol/AXEL ASSETS FOR WEBSITE (1)/391.png"
                                alt="XLCT Hydraulic Torque Wrench"
                                class="img-fluid rounded">
                        </div>
                    </div>
                    <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9d0c0cff; padding-left: 10px;"><span style="font-size: 2rem;">Tavol 15‑ton Double‑Girder Overhead Crane</span></h3>
                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            A heavy-duty bridge crane from Tavol, designed to lift up to 15 tonnes. It uses a double-girder configuration, which provides greater strength and stability for large spans. The crane features quality components like CHINT or Schneider electrical parts, forged safety hooks, and can be controlled by either a pendant or remote system. According to Tavol specs: span ranges from 6–31.5 m, lifting height from 3–60 m, and working duty class up to A5/M5.
                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://www.tavolgroup.com/materials-handling-cranes.html" target="_blank">MORE INFO</a></li>
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
                        <h3 class="h3-black" style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9d0c0cff; padding-left: 10px;"><span style="font-size: 2rem;">Tavol Brand Heavy Duty Double Girder </span></h3>

                        <p class="p-black" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            MG model double girder gantry crane is ideal for outdoor applications where lifting facilities are provided without the cost of a buliding or any supporting steel work.

                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://www.tavolgroup.com/materials-handling-cranes.html" target="_blank">MORE INFO</a></li>
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
                            <img src="assets/img/tavol/AXEL ASSETS FOR WEBSITE (1)/392.png"
                                alt="EDGE S Hydraulic Torque Wrench"
                                class="img-fluid rounded">
                        </div>
                    </div>
                </div>
                <!-- <div class="col-12 text-center mt-5" data-aos="fade-up" data-aos-duration="1000">
                    <h1 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Pneumatic Tools</h1>
                    <div style="width: 80px; height: 4px; background: #9d0c0cff; margin: 10px auto; border-radius: 2px;"></div>
                </div> -->
                <div class="row align-items-center" style="margin-left: 0; margin-right: 0;">
                    <div class="col-md-6 d-flex mt-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                        <div class="custom-img">
                            <img src="assets/img/tavol/AXEL ASSETS FOR WEBSITE (1)/393.png"
                                alt="jGun SINGLE SPEED Pneumatic Torque Tool"
                                class="img-fluid rounded">
                        </div>
                    </div>
                    <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9d0c0cff; padding-left: 10px;"><span style="font-size: 2rem;">Tavol Jib Crane</span></h3>

                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            A Tavol jib crane is a compact, pivoting lifting device that mounts on a pillar (column) or wall. It has a horizontal “jib” arm that can swing (180° or 360°) and supports a hoist for lifting and moving materials in a circular area.

                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://www.tavolgroup.com/materials-handling-cranes.html" target="_blank">MORE INFO</a></li>

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
                        <h3 class="h3-black" style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #9d0c0cff; padding-left: 10px;"><span style="font-size: 2rem;">QD Overhead Cranes Double Girder with Heavy Duty Working Environment</span></h3>
                        <p class="p-black" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            The QD Heavy‑Duty Double‑Girder Overhead Crane is a robust bridge crane built with two parallel girders for increased strength and capacity. It’s engineered for continuous, heavy-duty industrial use—ideal for steel mills, maintenance workshops, stockyards, or large production facilities. Designed for long service life (30–50 years according to some specs), it often uses frequency-inverter controls for smooth, variable-speed operation.

                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://www.tavolgroup.com/materials-handling-cranes.html" target="_blank">MORE INFO</a></li>
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
                            <img src="assets/img/tavol/AXEL ASSETS FOR WEBSITE (1)/394.png"
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