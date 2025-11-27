    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/css/ega.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <title>EGA MASTER</title>
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
                src="https://www.youtube.com/embed/XvK1frb6MXE?autoplay=1&mute=1&loop=1&playlist=XvK1frb6MXE&controls=0&showinfo=0&rel=0&modestbranding=1&iv_load_policy=3&disablekb=1&fs=0&cc_load_policy=0&playsinline=1"
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
                src="https://www.youtube.com/embed/XvK1frb6MXE?autoplay=1&mute=1&loop=1&playlist=XvK1frb6MXE&controls=0&showinfo=0&rel=0&modestbranding=1&iv_load_policy=3&disablekb=1&fs=0&cc_load_policy=0&playsinline=1"
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
                    <div style="width: 80px; height: 4px; background: #796113ff; margin: 10px auto; border-radius: 2px;"></div>
                    <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200" style="padding-left: 5vw; padding-right:5vw;font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">
                        At EGA Master, we deliver <strong>premium industrial tools</strong>
                        engineered for durability and precision.
                        From <strong>specialized tool solutions</strong> to comprehensive support and training,
                        we empower professionals with <strong>safety, quality, and efficiency</strong>
                        across every industry.
                    </p>
                </div>
            </div>
            <div class="row text-justify mt-5 pt-5">
                <div class="col-12 text-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                    <h1 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Products</h1>
                    <div style="width: 80px; height: 4px; background: #796113ff; margin: 10px auto; border-radius: 2px;"></div>
                    <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200" style="padding-left: 5vw; padding-right: 5vw; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                        EGA Master provides <strong>premium industrial tools</strong> engineered for
                        <strong>safety, durability, and precision</strong>.
                        From hand tools to pneumatic systems and specialized solutions, our products ensure
                        <strong>exceptional performance across global industries</strong>.
                    </p>
                </div>
                <div class="col-12 text-center mt-5 pt-5" data-aos="fade-up" data-aos-duration="1000">
                    <h1 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Pliers</h1>
                    <div style="width: 80px; height: 4px; background: #796113ff; margin: 10px auto; border-radius: 2px;"></div>
                </div>
                <div class="row align-items-center" style="margin-left: 0; margin-right: 0;">
                    <div class="col-md-6 d-flex mt-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                        <div class="custom-img">
                            <img src="assets/img/ega/AXEL ASSETS FOR WEBSITE/394.png"
                                alt="AVANTI Hydraulic Torque Wrench"
                                class="img-fluid rounded">
                        </div>
                    </div>
                    <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #796113ff; padding-left: 10px;"><span style="font-size: 2rem;">TOOL Control System</h3>
                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            Keep all your tools in one place with this system built for clean, efficient storage. No more wasting time looking for missing parts — every tool is organized, protected, and ready for action whenever you are.

                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://www.egamaster.com/en/download-catalogs" target="_blank">CUT SHEET</a></li>
                                        <li><a class="dropdown-item" href="https://www.egamaster.com/en/products/category/tool-control-system/tcs-roller-cabinets" target="_blank">MORE INFO</a></li>
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
                        <h3 class="h3-black" style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #796113ff; padding-left: 10px;"><span style="font-size: 2rem;">Tool Kits</span></h3>
                        <p class="p-black" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            A full set of tools ready to handle almost any task, big or small. Whether you're working on-site, at home, or in the shop, EGA Master tool kits are built tough to last through years of use and demanding conditions.

                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://www.egamaster.com/en/download-catalogs" target="_blank">CUT SHEET</a></li>
                                        <li><a class="dropdown-item" href="https://www.egamaster.com/en/products/category/tool-control-system/tcs-roller-cabinets" target="_blank">MORE INFO</a></li>
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
                            <img src="assets/img/ega/AXEL ASSETS FOR WEBSITE/395.png"
                                alt="MXT Hydraulic Torque Wrench"
                                class="img-fluid rounded">
                        </div>
                    </div>
                </div>
                <div class="row align-items-center no-gutters" style=" margin-left: 0; margin-right: 0;">
                    <div class="col-md-6 d-flex mt-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                        <div class="custom-img">
                            <img src="assets/img/ega/AXEL ASSETS FOR WEBSITE/396.png"
                                alt="VERSA Hydraulic Torque Wrench"
                                class="img-fluid rounded">
                        </div>
                    </div>
                    <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #796113ff; padding-left: 10px;"><span style="font-size: 2rem;">PLIERS AND PINCERS</span></h3>
                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            Built for gripping, cutting, and holding tight with precision and control. Ideal for electrical work, household repairs, or industrial jobs — these tools deliver durability and sharp performance every time.
                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://www.egamaster.com/en/download-catalogs" target="_blank">CUT SHEET</a></li>
                                        <li><a class="dropdown-item" href="https://www.egamaster.com/en/products/category/tool-control-system/tcs-roller-cabinets" target="_blank">MORE INFO</a></li>
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
                        <h3 class="h3-black" style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #796113ff; padding-left: 10px;"><span style="font-size: 2rem;">GEAR PULLERS</span></h3>
                        <p class="p-black" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">

                            Need to remove stuck or rusted parts like bearings or pulleys? Gear pullers do the hard work for you — giving you strong pulling force without damage or struggle, whether in maintenance or mechanical work.

                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://www.egamaster.com/en/download-catalogs" target="_blank">CUT SHEET</a></li>
                                        <li><a class="dropdown-item" href="https://www.egamaster.com/en/products/category/tool-control-system/tcs-roller-cabinets" target="_blank">MORE INFO</a></li>
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
                            <img src="assets/img/ega/AXEL ASSETS FOR WEBSITE/397.png"
                                alt="STEALTH Hydraulic Torque Wrench"
                                class="img-fluid rounded">
                        </div>
                    </div>
                </div>
                <div class="row align-items-center" style="margin-left: 0; margin-right: 0;">
                    <div class="col-md-6 d-flex mt-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                        <div class="custom-img">
                            <img src="assets/img/ega/AXEL ASSETS FOR WEBSITE/398.png"
                                alt="XLCT Hydraulic Torque Wrench"
                                class="img-fluid rounded">
                        </div>
                    </div>
                    <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #796113ff; padding-left: 10px;"><span style="font-size: 2rem;">SCREWDRIVERS</span></h3>
                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            Perfect for everything from furniture assembly to electrical work. EGA Master screwdrivers offer tough tips, comfy grips, and reliable torque — built for smooth turns and long-lasting strength.
                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://www.egamaster.com/en/download-catalogs" target="_blank">CUT SHEET</a></li>
                                        <li><a class="dropdown-item" href="https://www.egamaster.com/en/products/category/tool-control-system/tcs-roller-cabinets" target="_blank">MORE INFO</a></li>
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
                        <h3 class="h3-black" style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #796113ff; padding-left: 10px;"><span style="font-size: 2rem;">BITS</span></h3>

                        <p class="p-black" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            From wood to metal to plastic, these bits get the job done. Built for power drills and screwdrivers, they provide tight fits, reduce wear, and stand up to repeated use in any kind of project.

                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://www.egamaster.com/en/download-catalogs" target="_blank">CUT SHEET</a></li>
                                        <li><a class="dropdown-item" href="https://www.egamaster.com/en/products/category/tool-control-system/tcs-roller-cabinets" target="_blank">MORE INFO</a></li>
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
                            <img src="assets/img/ega/AXEL ASSETS FOR WEBSITE/399.png"
                                alt="EDGE S Hydraulic Torque Wrench"
                                class="img-fluid rounded">
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center mt-5" data-aos="fade-up" data-aos-duration="1000">
                    <h1 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Pneumatic Tools</h1>
                    <div style="width: 80px; height: 4px; background: #796113ff; margin: 10px auto; border-radius: 2px;"></div>
                </div>
                <div class="row align-items-center" style="margin-left: 0; margin-right: 0;">
                    <div class="col-md-6 d-flex mt-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                        <div class="custom-img">
                            <img src="assets/img/ega/AXEL ASSETS FOR WEBSITE/400.png"
                                alt="jGun SINGLE SPEED Pneumatic Torque Tool"
                                class="img-fluid rounded">
                        </div>
                    </div>
                    <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #796113ff; padding-left: 10px;"><span style="font-size: 2rem;">ADJUSTABLE WRENCHES</span></h3>

                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            Switch sizes fast with one tool. These adjustable wrenches offer a firm grip and smooth movement, ideal for plumbing, automotive, and general mechanical tasks where flexibility is key.

                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://www.egamaster.com/en/download-catalogs" target="_blank">CUT SHEET</a></li>
                                        <li><a class="dropdown-item" href="https://www.egamaster.com/en/products/category/tool-control-system/tcs-roller-cabinets" target="_blank">MORE INFO</a></li>
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
                        <h3 class="h3-black" style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #796113ff; padding-left: 10px;"><span style="font-size: 2rem;">WRENCHES</span></h3>
                        <p class="p-black" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            These wrenches are made for power and precision. Whether you’re loosening stubborn bolts or tightening components in machinery, their solid build and balanced design make tough jobs easier.

                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://www.egamaster.com/en/download-catalogs" target="_blank">CUT SHEET</a></li>
                                        <li><a class="dropdown-item" href="https://www.egamaster.com/en/products/category/tool-control-system/tcs-roller-cabinets" target="_blank">MORE INFO</a></li>
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
                            <img src="assets/img/ega/AXEL ASSETS FOR WEBSITE/401.png"
                                alt="jGun DIGITAL SINGLE SPEED Pneumatic Torque Tool"
                                class="img-fluid rounded">
                        </div>
                    </div>
                </div>
                <div class="row align-items-center" style="margin-left: 0; margin-right: 0;">
                    <div class="col-md-6 d-flex mt-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                        <div class="custom-img">
                            <img src="assets/img/ega/AXEL ASSETS FOR WEBSITE/402.png"
                                alt="Pneumatic Impact Wrench"
                                class="img-fluid rounded">
                        </div>
                    </div>
                    <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #796113ff; padding-left: 10px;"><span style="font-size: 2rem;">Socket Wrenches</span></h3>
                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                           Socket wrenches give you the power to work in tight spaces with speed and comfort. Designed for car repairs, machinery, and assembly jobs, they help you work faster with less effort.

                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                       <li><a class="dropdown-item" href="https://www.egamaster.com/en/download-catalogs" target="_blank">CUT SHEET</a></li>
                                        <li><a class="dropdown-item" href="https://www.egamaster.com/en/products/category/tool-control-system/tcs-roller-cabinets" target="_blank">MORE INFO</a></li>
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
                        <h3 class="h3-black" style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #796113ff; padding-left: 10px;"><span style="font-size: 2rem;">CONTROLLED TIGHTENING</span></h3>
                        <p class="p-black" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            Precision matters. These tools are designed for jobs where exact torque is critical — like engines, pipelines, or structural work. They help prevent under-tightening or over-torquing, keeping your work safe and secure.
                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://www.egamaster.com/en/download-catalogs" target="_blank">CUT SHEET</a></li>
                                        <li><a class="dropdown-item" href="https://www.egamaster.com/en/products/category/tool-control-system/tcs-roller-cabinets" target="_blank">MORE INFO</a></li>
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
                            <img src="assets/img/ega/AXEL ASSETS FOR WEBSITE/403.png"
                                alt="jGun DUAL SPEED Pneumatic Torque Tool"
                                class="img-fluid rounded">
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center mt-5" data-aos="fade-up" data-aos-duration="1000">
                    <h1 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Electric Tools</h1>
                    <div style="width: 80px; height: 4px; background: #796113ff; margin: 10px auto; border-radius: 2px;"></div>
                </div>
                <div class="row align-items-center" style="margin-left: 0; margin-right: 0;">
                    <div class="col-md-6 d-flex mt-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                        <div class="custom-img">
                            <img src="assets/img/ega/AXEL ASSETS FOR WEBSITE/404.png"
                                alt="LITHIUM SERIES II Electric Torque Tool"
                                class="img-fluid rounded">
                        </div>
                    </div>
                    <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #796113ff; padding-left: 10px;"><span style="font-size: 2rem;">HYDRAULIC TOOLS</span></h3>
                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            Built for heavy-duty jobs that need serious power. These hydraulic tools give you strong force with less manual effort, making them perfect for pressing, lifting, or tightening in industrial work.
                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://www.egamaster.com/en/download-catalogs" target="_blank">CUT SHEET</a></li>
                                        <li><a class="dropdown-item" href="https://www.egamaster.com/en/products/category/tool-control-system/tcs-roller-cabinets" target="_blank">MORE INFO</a></li>
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
                        <h3 class="h3-black" style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #796113ff; padding-left: 10px;"><span style="font-size: 2rem;">PNEUMATIC TOOLS</span></h3>
                        <p class="p-black" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                           Fast, powerful, and efficient — these tools use compressed air to get the job done with less strain. Ideal for repetitive tasks in automotive, assembly lines, and construction
                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://www.egamaster.com/en/download-catalogs" target="_blank">CUT SHEET</a></li>
                                        <li><a class="dropdown-item" href="https://www.egamaster.com/en/products/category/tool-control-system/tcs-roller-cabinets" target="_blank">MORE INFO</a></li>
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
                            <img src="assets/img/ega/AXEL ASSETS FOR WEBSITE/405.png"
                                alt="jGun DUAL SPEED Pneumatic Torque Tool"
                                class="img-fluid rounded">
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center mt-5" data-aos="fade-up" data-aos-duration="1000">
                    <h1 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Electric Tools</h1>
                    <div style="width: 80px; height: 4px; background: #796113ff; margin: 10px auto; border-radius: 2px;"></div>
                </div>
                <div class="row align-items-center" style="margin-left: 0; margin-right: 0;">
                    <div class="col-md-6 d-flex mt-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                        <div class="custom-img">
                            <img src="assets/img/ega/AXEL ASSETS FOR WEBSITE/406.png"
                                alt="LITHIUM SERIES II Electric Torque Tool"
                                class="img-fluid rounded">
                        </div>
                    </div>
                    <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #796113ff; padding-left: 10px;"><span style="font-size: 2rem;">BATTERY TOOLS</span></h3>
                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                           Take your work anywhere without wires holding you back. Battery tools give you full mobility with strong, rechargeable performance for drilling, cutting, or fastening tasks.
                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://www.egamaster.com/en/download-catalogs" target="_blank">CUT SHEET</a></li>
                                        <li><a class="dropdown-item" href="https://www.egamaster.com/en/products/category/tool-control-system/tcs-roller-cabinets" target="_blank">MORE INFO</a></li>
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
                        <h3 class="h3-black" style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #796113ff; padding-left: 10px;"><span style="font-size: 2rem;">FILES, RASPS & PUNCHES</span></h3>
                        <p class="p-black" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            For shaping, sharpening, and detailing. Whether you're working with metal, plastic, or wood, these tools help you refine and finish your work with precision.
                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://www.egamaster.com/en/download-catalogs" target="_blank">CUT SHEET</a></li>
                                        <li><a class="dropdown-item" href="https://www.egamaster.com/en/products/category/tool-control-system/tcs-roller-cabinets" target="_blank">MORE INFO</a></li>
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
                            <img src="assets/img/ega/AXEL ASSETS FOR WEBSITE/407.png"
                                alt="jGun DUAL SPEED Pneumatic Torque Tool"
                                class="img-fluid rounded">
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center mt-5" data-aos="fade-up" data-aos-duration="1000">
                    <h1 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Electric Tools</h1>
                    <div style="width: 80px; height: 4px; background: #796113ff; margin: 10px auto; border-radius: 2px;"></div>
                </div>
                <div class="row align-items-center" style="margin-left: 0; margin-right: 0;">
                    <div class="col-md-6 d-flex mt-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                        <div class="custom-img">
                            <img src="assets/img/ega/AXEL ASSETS FOR WEBSITE/408.png"
                                alt="LITHIUM SERIES II Electric Torque Tool"
                                class="img-fluid rounded">
                        </div>
                    </div>
                    <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #796113ff; padding-left: 10px;"><span style="font-size: 2rem;">AUTOMOTIVE TOOLS</span></h3>
                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            Made for mechanics and car enthusiasts. These tools are perfect for repairs, maintenance, and everything under the hood — strong, accurate, and built to last.
                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://www.egamaster.com/en/download-catalogs" target="_blank">CUT SHEET</a></li>
                                        <li><a class="dropdown-item" href="https://www.egamaster.com/en/products/category/tool-control-system/tcs-roller-cabinets" target="_blank">MORE INFO</a></li>
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
                        <h3 class="h3-black" style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #796113ff; padding-left: 10px;"><span style="font-size: 2rem;">TAPS AND DIES</span></h3>
                        <p class="p-black" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            Cut clean, precise threads with ease. Whether you're repairing or creating new threads, these tools give you sharp results on bolts, pipes, and fasteners.
                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://www.egamaster.com/en/download-catalogs" target="_blank">CUT SHEET</a></li>
                                        <li><a class="dropdown-item" href="https://www.egamaster.com/en/products/category/tool-control-system/tcs-roller-cabinets" target="_blank">MORE INFO</a></li>
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
                            <img src="assets/img/ega/AXEL ASSETS FOR WEBSITE/409.png"
                                alt="jGun DUAL SPEED Pneumatic Torque Tool"
                                class="img-fluid rounded">
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center mt-5" data-aos="fade-up" data-aos-duration="1000">
                    <h1 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Electric Tools</h1>
                    <div style="width: 80px; height: 4px; background: #796113ff; margin: 10px auto; border-radius: 2px;"></div>
                </div>
                <div class="row align-items-center" style="margin-left: 0; margin-right: 0;">
                    <div class="col-md-6 d-flex mt-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                        <div class="custom-img">
                            <img src="assets/img/ega/AXEL ASSETS FOR WEBSITE/410.png"
                                alt="LITHIUM SERIES II Electric Torque Tool"
                                class="img-fluid rounded">
                        </div>
                    </div>
                    <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #796113ff; padding-left: 10px;"><span style="font-size: 2rem;">PIPE TOOLS</span></h3>
                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            Cut, grip, and tighten any kind of pipe with confidence. These tools are made for plumbing and industrial work, built to handle tough materials and tight spaces.
                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://www.egamaster.com/en/download-catalogs" target="_blank">CUT SHEET</a></li>
                                        <li><a class="dropdown-item" href="https://www.egamaster.com/en/products/category/tool-control-system/tcs-roller-cabinets" target="_blank">MORE INFO</a></li>
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
                        <h3 class="h3-black" style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #796113ff; padding-left: 10px;"><span style="font-size: 2rem;">STAINLESS STEEL TOOLS</span></h3>
                        <p class="p-black" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            Made from stainless steel for corrosion resistance. Ideal for clean rooms, food industries, or harsh environments where rust is not an option.
                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://www.egamaster.com/en/download-catalogs" target="_blank">CUT SHEET</a></li>
                                        <li><a class="dropdown-item" href="https://www.egamaster.com/en/products/category/tool-control-system/tcs-roller-cabinets" target="_blank">MORE INFO</a></li>
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
                            <img src="assets/img/ega/AXEL ASSETS FOR WEBSITE/411.png"
                                alt="jGun DUAL SPEED Pneumatic Torque Tool"
                                class="img-fluid rounded">
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center mt-5" data-aos="fade-up" data-aos-duration="1000">
                    <h1 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Electric Tools</h1>
                    <div style="width: 80px; height: 4px; background: #796113ff; margin: 10px auto; border-radius: 2px;"></div>
                </div>
                <div class="row align-items-center" style="margin-left: 0; margin-right: 0;">
                    <div class="col-md-6 d-flex mt-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                        <div class="custom-img">
                            <img src="assets/img/ega/AXEL ASSETS FOR WEBSITE/412.png"
                                alt="LITHIUM SERIES II Electric Torque Tool"
                                class="img-fluid rounded">
                        </div>
                    </div>
                    <div class="col-md-6 d-flex flex-column mt-4 text-left" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #796113ff; padding-left: 10px;"><span style="font-size: 2rem;">PIPING MACHINES</span></h3>
                        <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                           Built for pipework professionals. These machines handle large-scale pipe cutting, threading, and grooving with speed and precision — perfect for serious plumbing and mechanical jobs.
                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://www.egamaster.com/en/download-catalogs" target="_blank">CUT SHEET</a></li>
                                        <li><a class="dropdown-item" href="https://www.egamaster.com/en/products/category/tool-control-system/tcs-roller-cabinets" target="_blank">MORE INFO</a></li>
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
                        <h3 class="h3-black" style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; border-left: 4px solid #796113ff; padding-left: 10px;"><span style="font-size: 2rem;">DRAIN CLEANING AND INSPECTION</span></h3>
                        <p class="p-black" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            Remove clogs fast and inspect tight pipe spaces with ease. These tools are designed to make maintenance jobs cleaner, quicker, and safer.
                        </p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="torqueChartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        DOCUMENTATION & RESOURCES
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="torqueChartDropdown">
                                        <li><a class="dropdown-item" href="https://www.egamaster.com/en/download-catalogs" target="_blank">CUT SHEET</a></li>
                                        <li><a class="dropdown-item" href="https://www.egamaster.com/en/products/category/tool-control-system/tcs-roller-cabinets" target="_blank">MORE INFO</a></li>
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
                            <img src="assets/img/ega/AXEL ASSETS FOR WEBSITE/413.png"
                                alt="jGun DUAL SPEED Pneumatic Torque Tool"
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