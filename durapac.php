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
            margin-bottom: clamp(-5rem, -10vw, -3rem);
            margin-top: clamp(-3rem, -8vw, -2rem);
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
            object-fit: fill;
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

            /* Further adjust .text-muted and footer for very small screens */
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
    <div class="container-fluid px-5">
        <div class="row align-items-center">
            <div class="col-md-6 text-left">
                <img src="assets/img/durapac/DURAPAC WHITE LOGO.png"
                    alt="Logo"
                    class="img-fluid">
                <h1 class="fancy-heading">
                    A LEADING FORCE IN HIGH PRESSURE HYDRAULIC TOOLS
                </h1>
            </div>
            <div class="col-md-6 text-left">
                <img src="assets/img/durapac/landing pic.png"
                    alt="img"
                    class="hover-img img-fluid rounded">
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 text-center">
                <h1>Services</h1>
                <div class="underline-bar" style="animation: slideIn 1s ease-in-out;"></div>
                <p>
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
                        frameborder="0"
                        allow="autoplay; encrypted-media"
                        allowfullscreen
                        loading="lazy">
                    </iframe>
                </div>
            </div> -->
        </div>

        <div class="row">
            <div class="col-md-12 text-center mt-5 pt-5" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                <h1>Durapac Products</h1>
                <div class="underline-bar"></div>
                <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    At <strong>Durapac</strong>, we deliver high-performance
                    <strong>hydraulic tools and lifting solutions</strong>
                    built for <strong>power, reliability, and precision</strong>.
                    From cylinders to pumps and customized systems, our products are trusted
                    worldwide to handle the toughest industrial challenges with confidence.
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 mt-5 pt-5 text-center">
                <h1>Special Lifting Systems</h1>
                <div class="underline-bar"></div>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-md-6 d-flex mt-5" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                <div class="mb-4 mb-md-0 custom-img">
                    <img src="assets/img/durapac/Specialty Lifting Systems.png"
                        alt="img"
                        class="img-fluid rounded product-img">
                </div>
            </div>
            <div class="col-md-6 d-flex flex-column mt-5 pt-5 text-left"
                data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                <h3>DJS-Series Jack Stands</h3>
                <p>
                    Designed to complement Durapac's Safe D Lock® (SDL locking) jacks.
                    A pneumatic assist raises the central piston against the vehicle
                    while the lock nut is wound down by the operator.
                    <a href="https://durapac.com/wp-content/uploads/2025/08/DJS-Series.pdf" target="_blank" class="see-more">See more</a>
                </p>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-md-6 d-flex flex-column mt-5 pt-5 text-left"
                data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                <h3>Tall SDL Lifting Jack & Stand</h3>
                <p>
                    The SDN-Series jack is designed to lift heavy mining vehicles. It can be used on any hard surface (maintenance bays & workshops) and is easily transported by use to site.
                    <a href="https://durapac.com/wp-content/uploads/2025/08/Tallest-SDL-Series.pdf" target="_blank" class="see-more">See more</a>
                </p>
            </div>
            <div class="col-md-6 d-flex mt-5" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                <div class="mb-4 mb-md-0 custom-img">
                    <img src="assets/img/durapac/AXEL ASSETS FOR WEBSITE/Specialty Lifting Systems.png"
                        alt="img"
                        class="img-fluid rounded product-img">
                </div>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-md-6 d-flex mt-5" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                <div class="mb-4 mb-md-0 custom-img">
                    <img src="assets/img/durapac/AXEL ASSETS FOR WEBSITE/Specialty Lifting Systems (2).png"
                        alt="img"
                        class="img-fluid rounded product-img">
                </div>
            </div>
            <div class="col-md-6 d-flex flex-column mt-5 pt-5 text-left"
                data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                <h3>SDN Jack + POWERDRIVE</h3>
                <p>
                    The SDN-Series jack is designed to lift heavy mining vehicles. It can be used on any hard surface (maintenance bays & workshops) and is easily transported by use to site.
                    <a href="https://durapac.com/wp-content/uploads/2025/08/SDN-Series.pdf" target="_blank" class="see-more">See more</a>
                </p>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-md-6 d-flex flex-column mt-5 pt-5 text-left"
                data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                <h3>SYNC MASTER® Synchronous Lift System</h3>
                <p>
                    Advanced hydraulic system designed for precision lifting and synchronization. It offers a reliable, efficient solution for heavy lifting applications that require precise control over multiple lifting points.
                    <a href="https://durapac.com/wp-content/uploads/2025/07/DSM-Series.pdf" target="_blank" class="see-more">See more</a>
                </p>
            </div>
            <div class="col-md-6 d-flex mt-5" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                <div class="mb-4 mb-md-0 custom-img">
                    <img src="assets/img/durapac/AXEL ASSETS FOR WEBSITE/Specialty Lifting Systems (3).png"
                        alt="img"
                        class="img-fluid rounded product-img">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 mt-5 pt-5 text-center">
                <h1>Hydraulic Cylinders</h1>
                <div class="underline-bar"></div>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-md-6 d-flex mt-5" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                <div class="mb-4 mb-md-0 custom-img">
                    <img src="assets/img/durapac/hydraulic/Hydraulic Cylinders.png"
                        alt="img"
                        class="img-fluid rounded product-img">
                </div>
            </div>
            <div class="col-md-6 d-flex flex-column mt-5 pt-5 text-left"
                data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                <h3>RG-Series S/A, Collar Thread</h3>
                <p>
                    The RG-Series is a Single Acting, General Purpose, Collar Thread, Spring Return Cylinder designed for use in production, maintenance, jacking and fabrication applications.
                    <a href="https://durapac.com/wp-content/uploads/2025/07/RG-Series.pdf" target="_blank" class="see-more">See more</a>
                </p>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-md-6 d-flex flex-column mt-5 pt-5 text-left"
                data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                <h3>AC-Series S/A, Aluminium</h3>
                <p>
                    The AC-Series is a Single Acting, Lightweight, High Strength, Aluminium, Spring Return Cylinder. Ideal for use in applications where weight and portability are paramount. They can be used in applications such as axle correction, bridge jacking, machinery maintenance and other non-production applications.
                    <a href="https://durapac.com/wp-content/uploads/2025/08/AC-Series.pdf" target="_blank" class="see-more">See more</a>
                </p>
            </div>
            <div class="col-md-6 d-flex mt-5" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                <div class="mb-4 mb-md-0 custom-img">
                    <img src="assets/img/durapac/hydraulic/Hydraulic Cylinders (2).png"
                        alt="img"
                        class="img-fluid rounded product-img">
                </div>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-md-6 d-flex mt-5" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                <div class="mb-4 mb-md-0 custom-img">
                    <img src="assets/img/durapac/hydraulic/Hydraulic Cylinders (3).png"
                        alt="img"
                        class="img-fluid rounded product-img">
                </div>
            </div>
            <div class="col-md-6 d-flex flex-column mt-5 pt-5 text-left"
                data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                <h3>PD-Series Diesel Driven Single Speed Radial Piston Power Units</h3>
                <p>
                    The PD-Series Diesel Driven Power Units are built for heavy-duty field applications, delivering 2.5 Lpm at 700 bar with a 50 L oil capacity and a reliable 3.4 kW KOHLER® diesel motor. Compact and easy to transport, they feature an engine control dashboard, while PDS models include a 4 m remote pendant for solenoid valve control.
                    <a href="https://durapac.com/wp-content/uploads/2025/07/RFJ-Series.pdf" target="_blank" class="see-more">See more</a>
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 mt-5 pt-5 text-center">
                <h1>Hydraulic Pumps / Power Units</h1>
                <div class="underline-bar"></div>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-md-6 d-flex flex-column mt-5 pt-5 text-left"
                data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                <h3>PD-Series Diesel Driven Single Speed Radial Piston Power Units</h3>
                <p>
                    The PD-Series Diesel Power Units are designed for heavy-duty field use, delivering 2.5 Lpm at 700 bar with a 50 L oil capacity and a dependable 3.4 kW KOHLER® diesel motor. Easy to transport with an engine control dashboard, PDS models also feature a 4 m remote pendant for solenoid valve control.
                    <a href="https://durapac.com/wp-content/uploads/2025/08/PD-Series.pdf" target="_blank" class="see-more">See more</a>
                </p>
            </div>
            <div class="col-md-6 d-flex mt-5" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                <div class="mb-4 mb-md-0 custom-img">
                    <img src="assets/img/durapac/hydraulic pumps/Hydraulic Pumps _ Power Units.png"
                        alt="img"
                        class="img-fluid rounded product-img">
                </div>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-md-6 d-flex mt-5" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                <div class="mb-4 mb-md-0 custom-img">
                    <img src="assets/img/durapac/hydraulic pumps/Hydraulic Pumps _ Power Units (2).png"
                        alt="img"
                        class="img-fluid rounded product-img">
                </div>
            </div>
            <div class="col-md-6 d-flex flex-column mt-5 pt-5 text-left"
                data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                <h3>BP114A Battery Hydraulic Power</h3>
                <p>
                    The BP114A Battery, Hydraulic Power Unit features a powerful 50.4 VDC high capacity lithium-ion internal battery. Each unit features a wireless remote control and will operate a wide range and single acting 700 bar hydraulic tools and cylinders.
                    <a href="https://durapac.com/wp-content/uploads/2025/08/BP-Series.pdf" target="_blank" class="see-more">See more</a>
                </p>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-md-6 d-flex flex-column mt-5 pt-5 text-left"
                data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                <h3>P-290 Steel Bodied Hand Pumps</h3>
                <p>
                    Single-acting, two speed, two-way valve design that features a drop forged pump head for superior durability. They are a robustly built, industry proven performer and the perfect choice where manual, portable hydraulic power is required.
                    <a href="https://durapac.com/wp-content/uploads/2025/07/P-Series.pdf" target="_blank" class="see-more">See more</a>
                </p>
            </div>
            <div class="col-md-6 d-flex mt-5" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                <div class="mb-4 mb-md-0 custom-img">
                    <img src="assets/img/durapac/hydraulic pumps/Hydraulic Pumps _ Power Units (3).png"
                        alt="img"
                        class="img-fluid rounded product-img">
                </div>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-md-6 d-flex mt-5" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                <div class="mb-4 mb-md-0 custom-img">
                    <img src="assets/img/durapac/hydraulic pumps/Hydraulic Pumps _ Power Units (4).png"
                        alt="img"
                        class="img-fluid rounded product-img">
                </div>
            </div>
            <div class="col-md-6 d-flex flex-column mt-5 pt-5 text-left"
                data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                <h3>DAT-Series Air Torque Wrench Power Units</h3>
                <p>
                    Torque Wrench Power Units are perfectly designed for operating the TW and LPC–Series Hydraulic Torque Wrenches. They have a three stage pump for faster operation under load and incorporate a hydraulic oil cooler providing cool operation under continuous use.
                    <a href="https://durapac.com/wp-content/uploads/2025/08/DET-DAT.pdf" target="_blank" class="see-more">See more</a>
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 mt-5 pt-5 text-center">
                <h1>Hydraulic Jacks</h1>
                <div class="underline-bar"></div>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-md-6 d-flex flex-column mt-5 pt-5 text-left"
                data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                <h3>TJ-Series Toe</h3>
                <p>
                    The TJ-Series Toe Jacks are a premium range ideally suited to lifting heavy machinery or equipment when access height is restricted. Toe lift capacities range from 2 - 25 ton and all models (except the TJ-2) feature a spring return piston.
                    <a href="https://durapac.com/wp-content/uploads/2025/08/TJ-Series.pdf" target="_blank" class="see-more">See more</a>
                </p>
            </div>
            <div class="col-md-6 d-flex mt-5" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                <div class="mb-4 mb-md-0 custom-img">
                    <img src="assets/img/durapac/AXEL ASSETS FOR WEBSITE (1)/Hydraulic Jacks.png"
                        alt="img"
                        class="img-fluid rounded product-img">
                </div>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-md-6 d-flex mt-5" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                <div class="mb-4 mb-md-0 custom-img">
                    <img src="assets/img/durapac/AXEL ASSETS FOR WEBSITE (1)/Hydraulic Jacks (2).png"
                        alt="img"
                        class="img-fluid rounded product-img">
                </div>
            </div>
            <div class="col-md-6 d-flex flex-column mt-5 pt-5 text-left"
                data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                <h3>DBJ-Series Bottle</h3>
                <p>
                    The DBJ-Series Bottle Jacks are a premium range ideally suited to most industrial lifting and pushing applications. Models from 10-20 ton feature an additional screw extension and most can be used in both the vertical and horizontal positions.
                    <a href="https://durapac.com/wp-content/uploads/2025/08/DBJ-Series.pdf" target="_blank" class="see-more">See more</a>
                </p>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-md-6 d-flex flex-column mt-5 pt-5 text-left"
                data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                <h3>DRJ-10 Rail Jack</h3>
                <p>
                    The DRJ-10 Rail Jack is ideally suited to aligning, gauging and lifting of rail or sleepers. Utilising a forged aluminium base plus housing, this 10 ton capacity jack is robust, lightweight and designed to reduce the risk of operator injury.
                    <a href="https://durapac.com/wp-content/uploads/2025/08/DRJ-Series.pdf" target="_blank" class="see-more">See more</a>
                </p>
            </div>
            <div class="col-md-6 d-flex mt-5" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                <div class="mb-4 mb-md-0 custom-img">
                    <img src="assets/img/durapac/AXEL ASSETS FOR WEBSITE (1)/Hydraulic Jacks (3).png"
                        alt="img"
                        class="img-fluid rounded product-img">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 mt-5 pt-5 text-center">
                <h1>Hydraulic Bolting Solutions</h1>
                <div class="underline-bar"></div>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-md-6 d-flex mt-5" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                <div class="mb-4 mb-md-0 custom-img">
                    <img src="assets/img/durapac/AXEL ASSETS FOR WEBSITE (1)/Hydraulic Bolting Solutions.png"
                        alt="img"
                        class="img-fluid rounded product-img">
                </div>
            </div>
            <div class="col-md-6 d-flex flex-column mt-5 pt-5 text-left"
                data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                <h3>DBW-Series Back-up</h3>
                <p>
                    The DBW-Series Back-up Wrenches allow for a hands-free operation that stops the opposite side of a nut or bolt rotating during high torque installation or removal of the fastener.
                    <a href="https://durapac.com/wp-content/uploads/2025/08/DBW-Series.pdf" target="_blank" class="see-more">See more</a>
                </p>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-md-6 d-flex flex-column mt-5 pt-5 text-left"
                data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                <h3>LPC-Series Low Profile Hexagon</h3>
                <p>
                    The LPC-Series Low Profile Hydraulic Hexagon Wrenches are an essential tool for limited clearance applications. These versatile torque wrenches support an extensive range of interchangeable hexagon ratchet cassettes that deliver a torque range of 232 to 44,593 Newton Metres (172 to 32,999 ft/lbs).
                    <a href="https://durapac.com/wp-content/uploads/2018/10/LPC-Series.pdf" target="_blank" class="see-more">See more</a>
                </p>
            </div>
            <div class="col-md-6 d-flex mt-5" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                <div class="mb-4 mb-md-0 custom-img">
                    <img src="assets/img/durapac/AXEL ASSETS FOR WEBSITE (1)/Hydraulic Bolting Solutions (2).png"
                        alt="img"
                        class="img-fluid rounded product-img">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 mt-5 pt-5 text-center">
                <h1>Hydraulic Tools</h1>
                <div class="underline-bar"></div>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-md-6 d-flex mt-5" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                <div class="mb-4 mb-md-0 custom-img">
                    <img src="assets/img/durapac/AXEL ASSETS FOR WEBSITE (1)/Hydraulic Tools.png"
                        alt="img"
                        class="img-fluid rounded product-img">
                </div>
            </div>
            <div class="col-md-6 d-flex flex-column mt-5 pt-5 text-left"
                data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                <h3>HC-24S Self-contained</h3>
                <p>
                    The HC-24S Self-contained Hydraulic Cutters have a cutting capacity up to 24 mm diameter. They cut with ease through round bar, wire rope, wire strand and more. They are a proven performer in the electrical, railway, mining, manufacturing and construction industries.
                <a href="https://durapac.com/wp-content/uploads/2025/08/HC-Series.pdf" target="_blank" class="see-more">See more</a>
                </p>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-md-6 d-flex flex-column mt-5 pt-5 text-left"
                data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                <h3>DNS-Series</h3>
                <p>
                    The DNS-Series of Hydraulic Nut Splitters consists of seven models for handling difficult to remove nuts ranging from 10 – 75 mm A/F capacity. They are a proven performer in the railway, pipelines, petro-chemical, heavy vehicles, mining, steel and industrial applications.
              <a href="https://durapac.com/wp-content/uploads/2025/01/DNS-Series-IM.pdf" target="_blank" class="see-more">See more</a>
                </p>
            </div>
            <div class="col-md-6 d-flex mt-5" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                <div class="mb-4 mb-md-0 custom-img">
                    <img src="assets/img/durapac/AXEL ASSETS FOR WEBSITE (1)/Hydraulic Tools (2).png"
                        alt="img"
                        class="img-fluid rounded product-img">
                </div>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-md-6 d-flex mt-5" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                <div class="mb-4 mb-md-0 custom-img">
                    <img src="assets/img/durapac/AXEL ASSETS FOR WEBSITE (1)/Hydraulic Tools (3).png"
                        alt="img"
                        class="img-fluid rounded product-img">
                </div>
            </div>
            <div class="col-md-6 d-flex flex-column mt-5 pt-5 text-left"
                data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                <h3>DLW-Series</h3>
                <p>
                    The Durapac Hydraulic Lifting Wedge is the perfect choice for heavy equipment lifting with minimal clearance. The innovative design makes the Lifting Wedges not only practical but also a perfect complement to high-tonnage skates. The DLW-18S model boasts a self-contained hydraulic system, eliminating the need for hoses, couplers, or pumps.
                <a href="https://durapac.com/wp-content/uploads/2025/08/DLW-Series.pdf" target="_blank" class="see-more">See more</a>
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 mt-5 pt-5 text-center">
                <h1>Hydraulic Presses</h1>
                <div class="underline-bar"></div>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-md-6 d-flex flex-column mt-5 pt-5 text-left"
                data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                <h3>HP-10 Bench</h3>
                <p>
                    The HP-10 10 Ton Bench Press is ideal for workshop pressing jobs such as the installation or removal of bearings and gears, repair of electric motors or other press fit parts.
                <a href="https://durapac.com/wp-content/uploads/2025/08/HP-Series.pdf" target="_blank" class="see-more">See more</a>
                </p>
            </div>
            <div class="col-md-6 d-flex mt-5" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                <div class="mb-4 mb-md-0 custom-img">
                    <img src="assets/img/durapac/AXEL ASSETS FOR WEBSITE (1)/Hydraulic Presses.png"
                        alt="img"
                        class="img-fluid rounded product-img">
                </div>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-md-6 d-flex mt-5" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                <div class="mb-4 mb-md-0 custom-img">
                    <img src="assets/img/durapac/AXEL ASSETS FOR WEBSITE (1)/Hydraulic Presses (2).png"
                        alt="img"
                        class="img-fluid rounded product-img">
                </div>
            </div>
            <div class="col-md-6 d-flex flex-column mt-5 pt-5 text-left"
                data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                <h3>HRP-Series Roll Frame</h3>
                <p>
                    The HRP-Series Roll Frame Press is designed to allow the rolling frame to roll across the press bed for easy loading of large bulky items.
                <a href="https://durapac.com/wp-content/uploads/2025/08/HRP-Series.pdf" target="_blank" class="see-more">See more</a>
                </p>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-md-6 d-flex flex-column mt-5 pt-5 text-left"
                data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                <h3>Air Hydraulic Driven H-Frame</h3>
                <p>
                    The HP-Series Air Hydraulic Driven H-Frame Presses are ideal for the workshop pressing jobs such as the installation or removal of bearings and gears or other press fit parts.
               <a href="https://durapac.com/wp-content/uploads/2025/08/HP-Series.pdf" target="_blank" class="see-more">See more</a>
                </p>
            </div>
            <div class="col-md-6 d-flex mt-5" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                <div class="mb-4 mb-md-0 custom-img">
                    <img src="assets/img/durapac/AXEL ASSETS FOR WEBSITE (1)/Hydraulic Presses (3).png"
                        alt="img"
                        class="img-fluid rounded product-img">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 mt-5 pt-5 text-center">
                <h1>Air Bags</h1>
                <div class="underline-bar"></div>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-md-6 d-flex mt-5" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                <div class="mb-4 mb-md-0 custom-img">
                    <img src="assets/img/durapac/AXEL ASSETS FOR WEBSITE (1)/air bags.png"
                        alt="img"
                        class="img-fluid rounded product-img">
                </div>
            </div>
            <div class="col-md-6 d-flex flex-column mt-5 pt-5 text-left"
                data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                <h3>KPL-Series High Pressure</h3>
                <p>
                    The KPL-Series High Pressure Air Bags feature Kevlar® cord reinforcing. The patented construction utilises state-of-the-art design for long life and ease of use. The bags are thin, light and simple to use. Eleven models of air bag are available with lifting capacities ranging from 800 to 70,400 kg.
              <a href="https://durapac.com/wp-content/uploads/2025/08/KPL-Series.pdf" target="_blank" class="see-more">See more</a>
                </p>
            </div>
        </div>

        <div class="container text-center py-4 mt-5">
            <div class="social-links mb-2" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300">
                <a href="https://www.facebook.com/boltimizercorp" target="_blank"><i class="bi bi-facebook"></i></a>
                <a href="https://twitter.com" target="_blank"><i class="bi bi-twitter-x"></i></a>
                <a href="https://instagram.com" target="_blank"><i class="bi bi-instagram"></i></a>
                <a href="https://linkedin.com" target="_blank"><i class="bi bi-linkedin"></i></a>
            </div>
            <p class="text-muted" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">&copy; <?php echo date('Y'); ?> Boltimizer Corporation. All rights reserved.</p>
        </div>
    </div>

    <?php include("footer.php"); ?>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true,
            offset: 100,
            easing: 'ease-out-cubic'
        });
    </script>
</body>

</html>