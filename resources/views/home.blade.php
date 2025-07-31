<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akvision - Security Solutions</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
        }

        /* Header Styles */
        .header {
            background: #fff;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            height: 70px;
        }

        .header-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 70px;
        }

        .logo {
            font-size: 32px;
            font-weight: bold;
            color: #e31e24;
            text-decoration: none;
            letter-spacing: -1px;
        }

        .nav-menu {
            display: flex;
            list-style: none;
            gap: 40px;
            align-items: center;
        }

        .nav-menu li a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            font-size: 16px;
            transition: color 0.3s ease;
            position: relative;
        }

        .nav-menu li a:hover {
            color: #e31e24;
        }

        .commercial-display {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #333;
            text-decoration: none;
            font-weight: 500;
            font-size: 16px;
        }

        .commercial-display:hover {
            color: #e31e24;
        }

        .commercial-display::after {
            content: '↗';
            font-size: 14px;
            color: #e31e24;
        }

        .header-right {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .language-selector {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #666;
            font-size: 14px;
        }

        .globe-icon {
            width: 20px;
            height: 20px;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9v-9m0-9v9m0 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/></svg>') center/contain no-repeat;
        }

        .header-icons {
            display: flex;
            gap: 15px;
            align-items: center;
        }

        .icon {
            width: 24px;
            height: 24px;
            cursor: pointer;
            transition: opacity 0.3s;
        }

        .icon:hover {
            opacity: 0.7;
        }

        .user-icon {
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>') center/contain no-repeat;
        }

        .search-icon {
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>') center/contain no-repeat;
        }

        /* Hero Section */
        .hero {
            margin-top: 70px;
            height: 100vh;
            position: relative;
            overflow: hidden;
        }

        .hero-slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 1s ease-in-out;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .hero-slide.active {
            opacity: 1;
        }

        .hero-slide::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.4);
            z-index: 1;
        }

        .hero-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: white;
            z-index: 2;
            max-width: 800px;
            padding: 0 20px;
        }

        .hero-title {
            font-size: 64px;
            font-weight: 700;
            margin-bottom: 30px;
            line-height: 1.1;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .hero-subtitle {
            font-size: 24px;
            margin-bottom: 40px;
            line-height: 1.4;
            font-weight: 400;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.5);
        }

        .hero-btn {
            background: rgba(255, 255, 255, 0.2);
            color: white;
            border: 2px solid rgba(255, 255, 255, 0.8);
            padding: 18px 40px;
            border-radius: 50px;
            font-size: 18px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
            backdrop-filter: blur(10px);
        }

        .hero-btn:hover {
            background: rgba(255, 255, 255, 0.3);
            border-color: white;
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.3);
        }

        /* Slide Navigation Dots */
        .slide-dots {
            position: absolute;
            right: 40px;
            top: 50%;
            transform: translateY(-50%);
            display: flex;
            flex-direction: column;
            gap: 15px;
            z-index: 3;
        }

        .dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.5);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .dot.active {
            background: white;
            transform: scale(1.2);
        }

        .dot:hover {
            background: rgba(255, 255, 255, 0.8);
        }

        /* Chat Support Button */
        .chat-support {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 60px;
            height: 60px;
            background: #e31e24;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            z-index: 1000;
            box-shadow: 0 4px 20px rgba(227, 30, 36, 0.4);
            transition: all 0.3s ease;
        }

        .chat-support:hover {
            transform: scale(1.1);
            box-shadow: 0 6px 25px rgba(227, 30, 36, 0.6);
        }

        .chat-icon {
            width: 28px;
            height: 28px;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24"><path d="M20 2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h4l4 4 4-4h4c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2z"/></svg>') center/contain no-repeat;
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .nav-menu {
                gap: 25px;
            }
            
            .hero-title {
                font-size: 48px;
            }
            
            .hero-subtitle {
                font-size: 20px;
            }
        }

        @media (max-width: 768px) {
            .header-container {
                padding: 0 15px;
            }
            
            .nav-menu {
                display: none;
            }
            
            .hero-title {
                font-size: 36px;
            }
            
            .hero-subtitle {
                font-size: 18px;
            }
            
            .slide-dots {
                right: 20px;
            }
            
            .chat-support {
                bottom: 20px;
                right: 20px;
                width: 50px;
                height: 50px;
            }
        }

        @media (max-width: 480px) {
            .hero-title {
                font-size: 28px;
            }
            
            .hero-subtitle {
                font-size: 16px;
            }
            
            .hero-btn {
                padding: 15px 30px;
                font-size: 16px;
            }
        }
    </style>

    <style>
    /* Products Slider Section */
    .products-slider-section {
        padding: 80px 0;
        background: #f0f2f5; /* Light background to differentiate from hero */
        overflow: hidden; /* Hide scrollbar */
        position: relative;
    }

    .products-slider-section h2 {
        font-size: 36px;
        font-weight: 700;
        color: #1a1a1a;
        text-align: center;
        margin-bottom: 50px;
    }

    .slider-wrapper {
        display: flex;
        width: max-content; /* Allow content to exceed viewport */
        animation: slideProducts 30s linear infinite; /* Adjust duration for speed */
    }

    .product-card-slider {
        flex-shrink: 0; /* Prevent cards from shrinking */
        width: 300px; /* Fixed width for each card */
        height: 380px; /* Adjusted height for better content display */
        margin: 0 15px; /* Spacing between cards */
        border-radius: 15px;
        overflow: hidden;
        cursor: pointer;
        position: relative;
        box-shadow: 0 8px 25px rgba(0,0,0,0.1);
        transition: transform 0.3s ease;
        background-color: #fff; /* Default background for text-only cards */
    }

    .product-card-slider:hover {
        transform: translateY(-10px);
    }

    .product-card-slider img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: filter 0.4s ease, transform 0.4s ease;
    }

    .product-card-slider:hover img {
        filter: blur(5px) brightness(0.7);
        transform: scale(1.05);
    }

    .card-overlay-slider {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, rgba(227, 30, 36, 0.9), rgba(0,0,0,0.8));
        color: white;
        padding: 30px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.4s ease, transform 0.4s ease;
        transform: translateY(20px);
    }

    .product-card-slider:hover .card-overlay-slider {
        opacity: 1;
        transform: translateY(0);
    }

    .card-title-slider {
        font-size: 22px;
        font-weight: 700;
        margin-bottom: 15px;
        line-height: 1.3;
    }

    .card-description-slider {
        font-size: 14px;
        line-height: 1.6;
        margin-bottom: 25px;
        opacity: 0.9;
    }

    .card-arrow-slider {
        align-self: flex-end;
        font-size: 32px;
        color: #fff;
        font-weight: bold;
        transition: transform 0.3s;
    }

    .product-card-slider:hover .card-arrow-slider {
        transform: translateX(8px);
    }

    /* Specific style for the AcuSeek NVRs card (text-only) */
    .product-card-slider.text-card {
        background-color: #1a1a1a; /* Dark background */
        color: white;
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: 30px;
    }

    .product-card-slider.text-card img {
        display: none; /* Hide image for text card */
    }

    .product-card-slider.text-card .card-overlay-slider {
        position: static; /* Remove absolute positioning */
        opacity: 1; /* Always visible */
        background: none; /* No overlay background */
        transform: none; /* No transform */
        padding: 0;
    }

    .product-card-slider.text-card .card-title-slider {
        font-size: 24px;
        margin-bottom: 10px;
    }

    .product-card-slider.text-card .card-description-slider {
        font-size: 15px;
        margin-bottom: 30px;
    }

    .product-card-slider.text-card .card-arrow-slider {
        color: #e31e24; /* Red arrow for text card */
    }
    /* Core Technologies Section */
    .core-technologies-section {
        background: #000; /* Solid black background as per image */
        color: white;
        padding: 100px 0;
        position: relative;
        overflow: hidden; /* Ensure no overflow from slider */
    }

    .core-technologies-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 60px;
        padding: 0 20px; /* Add padding for container alignment */
    }

    .core-technologies-header h2 {
        font-size: 48px;
        font-weight: 700;
        color: white;
    }

    .view-more-link {
        display: flex;
        align-items: center;
        gap: 8px;
        color: #ccc;
        text-decoration: none;
        font-size: 18px;
        font-weight: 500;
        transition: color 0.3s ease;
    }

    .view-more-link:hover {
        color: #e31e24;
    }

    .view-more-link::after {
        content: '→';
        font-size: 20px;
        font-weight: bold;
        margin-left: 5px;
    }

    /* Slider Container */
    .core-tech-slider-container {
        position: relative;
        max-width: 1400px; /* Match overall page width */
        margin: 0 auto;
        padding: 0 20px; /* Match overall page padding */
    }

    .core-tech-slider-wrapper {
        display: flex;
        transition: transform 0.8s ease-in-out;
    }

    .core-tech-slide {
        flex: 0 0 100%; /* Each slide takes full width */
        display: flex;
        align-items: center;
        gap: 80px;
        padding: 0 20px; /* Inner padding for content */
    }

    .core-tech-video-card {
        flex: 1;
        max-width: 600px; /* Adjust based on image proportion */
        height: 400px; /* Fixed height for video card */
        border-radius: 20px;
        overflow: hidden;
        position: relative;
        background: #333; /* Fallback background */
        box-shadow: 0 10px 40px rgba(0,0,0,0.5);
    }

    .core-tech-video-card video {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    .video-overlay-text {
        position: absolute;
        bottom: 30px;
        left: 30px;
        font-size: 36px;
        font-weight: bold;
        color: white;
        text-shadow: 2px 2px 5px rgba(0,0,0,0.7);
        z-index: 1;
    }

    .core-tech-info {
        flex: 1;
        max-width: 600px; /* Adjust based on image proportion */
    }

    .core-tech-info h3 {
        font-size: 42px;
        font-weight: 700;
        margin-bottom: 25px;
        line-height: 1.2;
    }

    .core-tech-info p {
        font-size: 16px;
        line-height: 1.7;
        margin-bottom: 35px;
        opacity: 0.9;
    }

    .core-tech-learn-btn {
        background: transparent;
        color: white;
        border: 2px solid white;
        padding: 15px 35px;
        border-radius: 50px;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-block;
    }

    .core-tech-learn-btn:hover {
        background: #e31e24;
        border-color: #e31e24;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(227, 30, 36, 0.3);
    }

    /* Slider Navigation */
    .slider-nav-bottom {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 20px;
        margin-top: 60px;
    }

    .slider-arrow {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.1);
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: background 0.3s ease;
        border: 1px solid rgba(255, 255, 255, 0.2);
    }

    .slider-arrow:hover {
        background: rgba(255, 255, 255, 0.2);
    }

    .slider-arrow svg {
        width: 24px;
        height: 24px;
        fill: white;
    }

    .slider-dots-bottom {
        display: flex;
        gap: 10px;
    }

    .dot-bottom {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.3);
        cursor: pointer;
        transition: background 0.3s ease, transform 0.3s ease;
    }

    .dot-bottom.active {
        background: white;
        transform: scale(1.2);
    }

    /* Side Icons */
    .side-icons {
        position: absolute;
        right: 30px;
        top: 50%;
        transform: translateY(-50%);
        display: flex;
        flex-direction: column;
        gap: 15px;
        z-index: 10;
    }

    .side-icon-item {
        width: 45px;
        height: 45px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.3);
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .side-icon-item:hover {
        background: #e31e24;
        border-color: #e31e24;
        transform: scale(1.1);
    }

    .side-icon-item svg {
        width: 24px;
        height: 24px;
        fill: white;
    }

    /* Responsive Design */
    @media (max-width: 1200px) {
        .core-technologies-header h2 {
            font-size: 40px;
        }
        .core-tech-slide {
            gap: 40px;
        }
        .core-tech-video-card {
            max-width: 500px;
            height: 350px;
        }
        .core-tech-info h3 {
            font-size: 36px;
        }
    }

    @media (max-width: 992px) {
        .core-technologies-header {
            flex-direction: column;
            align-items: flex-start;
            margin-bottom: 40px;
        }
        .core-technologies-header h2 {
            margin-bottom: 20px;
        }
        .core-tech-slide {
            flex-direction: column;
            text-align: center;
            gap: 30px;
        }
        .core-tech-video-card, .core-tech-info {
            max-width: 100%;
            width: 100%;
        }
        .core-tech-video-card {
            height: 300px;
        }
        .video-overlay-text {
            font-size: 28px;
            bottom: 20px;
            left: 20px;
        }
        .side-icons {
            position: static;
            flex-direction: row;
            justify-content: center;
            margin-top: 40px;
            transform: none;
        }
    }

    @media (max-width: 768px) {
        .core-technologies-section {
            padding: 60px 0;
        }
        .core-technologies-header h2 {
            font-size: 32px;
        }
        .view-more-link {
            font-size: 16px;
        }
        .core-tech-info h3 {
            font-size: 28px;
        }
        .core-tech-info p {
            font-size: 14px;
        }
        .core-tech-learn-btn {
            padding: 12px 25px;
            font-size: 14px;
        }
        .slider-arrow {
            width: 40px;
            height: 40px;
        }
        .slider-arrow svg {
            width: 20px;
            height: 20px;
        }
    }

    /* Keyframe for infinite sliding */
    @keyframes slideProducts {
        0% { transform: translateX(0); }
        100% { transform: translateX(-50%); } /* Slide half the width to loop */
    }

    /* Responsive adjustments */
    @media (max-width: 1200px) {
        .product-card-slider {
            width: 280px;
            height: 360px;
        }
        .card-title-slider {
            font-size: 20px;
        }
        .card-description-slider {
            font-size: 13px;
        }
    }

    @media (max-width: 768px) {
        .products-slider-section h2 {
            font-size: 28px;
        }
        .product-card-slider {
            width: 250px;
            height: 340px;
            margin: 0 10px;
        }
        .card-title-slider {
            font-size: 18px;
        }
        .card-description-slider {
            font-size: 12px;
        }
        .card-arrow-slider {
            font-size: 28px;
        }
        @keyframes slideProducts {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); } /* Adjust for smaller screens */
        }
    }

    @media (max-width: 480px) {
        .products-slider-section {
            padding: 50px 0;
        }
        .product-card-slider {
            width: 220px;
            height: 300px;
            margin: 0 8px;
        }
        .card-title-slider {
            font-size: 16px;
        }
        .card-description-slider {
            font-size: 11px;
        }
        .card-overlay-slider {
            padding: 20px;
        }
    }
</style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="header-container">
            <a href="/" class="logo">AKVISION</a>
            
            <nav>
                <ul class="nav-menu">
                    <li><a href="/products">Products</a></li>
                    <li><a href="/solutions">Solutions</a></li>
                    <li><a href="/support">Support</a></li>
                    <li><a href="/technologies">Technologies</a></li>
                </ul>
            </nav>
            
            <div class="header-right">
                <a href="/commercial-display" class="commercial-display">Commercial Display</a>
                
                <div class="language-selector">
                    <div class="globe-icon"></div>
                    <span>Global<br>EN</span>
                </div>
                
                <div class="header-icons">
                    <div class="icon user-icon" title="User Account"></div>
                    <div class="icon search-icon" title="Search"></div>
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <!-- Slide 1 -->
        <div class="hero-slide active" style="background-image: url('https://images.unsplash.com/photo-1560472354-b33ff0c44a43?w=1920&h=1080&fit=crop&crop=center');">
            <div class="hero-content">
                <h1 class="hero-title">Go to Akvision Password Reset Page</h1>
                <p class="hero-subtitle">Find a treasure trove of user-friendly ways<br>to reset those pesky passwords</p>
                <a href="/password-reset" class="hero-btn">Learn Now</a>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="hero-slide" style="background-image: url('https://images.unsplash.com/photo-1521737711867-e3b97375f902?w=1920&h=1080&fit=crop&crop=center');">
            <div class="hero-content">
                <h1 class="hero-title">Advanced Security Solutions for Modern Business</h1>
                <p class="hero-subtitle">Discover cutting-edge surveillance technology<br>that adapts to your security needs</p>
                <a href="/solutions" class="hero-btn">Explore Solutions</a>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="hero-slide" style="background-image: url('https://images.unsplash.com/photo-1518709268805-4e9042af2176?w=1920&h=1080&fit=crop&crop=center');">
            <div class="hero-content">
                <h1 class="hero-title">AI-Powered Surveillance Technology</h1>
                <p class="hero-subtitle">Experience the future of intelligent monitoring<br>with our revolutionary AI platform</p>
                <a href="/ai-technology" class="hero-btn">Discover AI</a>
            </div>
        </div>

        <!-- Slide 4 -->
        <div class="hero-slide" style="background-image: url('https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=1920&h=1080&fit=crop&crop=center');">
            <div class="hero-content">
                <h1 class="hero-title">Cloud-Based Security Management</h1>
                <p class="hero-subtitle">Manage your entire security infrastructure<br>from anywhere with our cloud platform</p>
                <a href="/cloud-platform" class="hero-btn">Get Started</a>
            </div>
        </div>

        <!-- Slide Navigation Dots -->
        <div class="slide-dots">
            <div class="dot active" data-slide="0"></div>
            <div class="dot" data-slide="1"></div>
            <div class="dot" data-slide="2"></div>
            <div class="dot" data-slide="3"></div>
        </div>
    </section>

    <!-- Chat Support Button -->
    <div class="chat-support" title="Chat Support">
        <div class="chat-icon"></div>
    </div>

    <section class="products-slider-section">
    <div class="container">
        <h2>Our Latest Products</h2>
        <div class="slider-container">
            <div class="slider-wrapper" id="productSlider">
                <!-- Duplicate cards for infinite scroll effect -->
                @for ($i = 0; $i < 2; $i++)
                    <a href="/products/deepinviewx-bullet" class="product-card-slider">
                        <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=400&h=380&fit=crop&crop=center" alt="DeepinViewX Bullet Network Camera">
                        <div class="card-overlay-slider">
                            <h3 class="card-title-slider">DeepinViewX Bullet Network Camera</h3>
                            <p class="card-description-slider">Next-generation bullet cameras with advanced AI capabilities for precise object detection and intelligent analytics.</p>
                            <div class="card-arrow-slider">→</div>
                        </div>
                    </a>

                    <a href="/products/wonderhub-interactive" class="product-card-slider">
                        <img src="https://images.unsplash.com/photo-1607499698313-6a792792050f?w=400&h=380&fit=crop&crop=center" alt="WonderHub Interactive Display">
                        <div class="card-overlay-slider">
                            <h3 class="card-title-slider">WonderHub Interactive Display</h3>
                            <p class="card-description-slider">Revolutionize collaboration with our interactive displays, perfect for presentations, brainstorming, and dynamic learning environments.</p>
                            <div class="card-arrow-slider">→</div>
                        </div>
                    </a>

                    

                    <a href="/products/pro-series-colorvu" class="product-card-slider">
                        <img src="https://images.unsplash.com/photo-1558618047-3c8c76ca7d13?w=400&h=380&fit=crop&crop=center" alt="Pro Series with ColorVu 3.0">
                        <div class="card-overlay-slider">
                            <h3 class="card-title-slider">Pro Series with ColorVu 3.0</h3>
                            <p class="card-description-slider">Experience unparalleled clarity with 24/7 full-color imaging, even in ultra-low light conditions, capturing vivid details where traditional cameras fail.</p>
                            <div class="card-arrow-slider">→</div>
                        </div>
                    </a>

                    <a href="/products/cable-free-series" class="product-card-slider">
                        <img src="https://images.unsplash.com/photo-1586953208448-b95a79798f07?w=400&h=380&fit=crop&crop=center" alt="Cable-Free Series">
                        <div class="card-overlay-slider">
                            <h3 class="card-title-slider">Cable-Free Series</h3>
                            <p class="card-description-slider">Enjoy flexible deployment with our solar-powered, wire-free cameras, offering easy installation and reliable performance in remote locations.</p>
                            <div class="card-arrow-slider">→</div>
                        </div>
                    </a>
                @endfor
            </div>
        </div>
    </div>
</section>

{{-- core-technologies-section --}}
<section class="core-technologies-section">
    <div class="container">
        <div class="core-technologies-header">
            <h2>Core Technologies</h2>
            <a href="/technologies" class="view-more-link">View more</a>
        </div>

        <div class="core-tech-slider-container">
            <div class="core-tech-slider-wrapper" id="coreTechSlider">
                <!-- Slide 1: Guanlan Large-Scale AI Models -->
                <div class="core-tech-slide">
                    <div class="core-tech-video-card">
                        <video autoplay loop muted playsinline>
                            <source src="https://assets.mixkit.co/videos/preview/mixkit-abstract-glowing-cube-with-particles-1004-large.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <div class="video-overlay-text">Guanlan</div>
                    </div>
                    <div class="core-tech-info">
                        <h3>Guanlan Large-Scale AI Models</h3>
                        <p>Akvision's suite of large AI models to revolutionize the AIoT technology ecosystem. These pre-trained machine learning engines leverage deep industry knowledge to excel in computer vision, multidimensional perception, and multimodal fusion.</p>
                        <a href="/technologies/guanlan-ai" class="core-tech-learn-btn">Learn More</a>
                    </div>
                </div>

                <!-- Slide 2: Cloud Computing & Big Data -->
                <div class="core-tech-slide">
                    <div class="core-tech-video-card">
                        <video autoplay loop muted playsinline>
                            <source src="https://assets.mixkit.co/videos/preview/mixkit-abstract-data-flow-in-a-network-1005-large.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <div class="video-overlay-text">Cloud & Data</div>
                    </div>
                    <div class="core-tech-info">
                        <h3>Cloud Computing & Big Data</h3>
                        <p>Our robust cloud infrastructure and big data analytics capabilities provide scalable, secure, and efficient solutions for managing vast amounts of security data, enabling smarter decision-making and operational efficiency.</p>
                        <a href="/technologies/cloud-data" class="core-tech-learn-btn">Learn More</a>
                    </div>
                </div>

                <!-- Slide 3: IoT & Edge Computing -->
                <div class="core-tech-slide">
                    <div class="core-tech-video-card">
                        <video autoplay loop muted playsinline>
                            <source src="https://assets.mixkit.co/videos/preview/mixkit-abstract-digital-network-1006-large.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <div class="video-overlay-text">IoT & Edge</div>
                    </div>
                    <div class="core-tech-info">
                        <h3>IoT & Edge Computing</h3>
                        <p>Leveraging the power of IoT and edge computing, Akvision delivers real-time processing and intelligent insights directly at the source, enhancing responsiveness and reducing latency for critical security applications.</p>
                        <a href="/technologies/iot-edge" class="core-tech-learn-btn">Learn More</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-nav-bottom">
            <div class="slider-arrow prev-slide" id="prevCoreTech">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"/></svg>
            </div>
            <div class="slider-dots-bottom" id="coreTechDots">
                <div class="dot-bottom active" data-slide="0"></div>
                <div class="dot-bottom" data-slide="1"></div>
                <div class="dot-bottom" data-slide="2"></div>
            </div>
            <div class="slider-arrow next-slide" id="nextCoreTech">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6z"/></svg>
            </div>
        </div>
    </div>

    <!-- Side Icons -->
    <div class="side-icons">
        <a href="/support/contact" class="side-icon-item" title="Contact Support">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm-1-13h2v6h-2zm0 8h2v2h-2z"/></svg>
        </a>
        <a href="/products/pro-series" class="side-icon-item" title="Pro Series">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm-1-13h2v6h-2zm0 8h2v2h-2z"/></svg>
        </a>
    </div>
</section>


    <script>
        // Hero Slider - Changes every 7 seconds
        let currentSlide = 0;
        const slides = document.querySelectorAll('.hero-slide');
        const dots = document.querySelectorAll('.dot');
        const totalSlides = slides.length;

        function showSlide(index) {
            // Remove active class from all slides and dots
            slides.forEach(slide => slide.classList.remove('active'));
            dots.forEach(dot => dot.classList.remove('active'));
            
            // Add active class to current slide and dot
            slides[index].classList.add('active');
            dots[index].classList.add('active');
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % totalSlides;
            showSlide(currentSlide);
        }

        // Auto-advance slides every 7 seconds
        setInterval(nextSlide, 7000);

        // Manual navigation with dots
        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                currentSlide = index;
                showSlide(currentSlide);
            });
        });

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Chat support functionality
        document.querySelector('.chat-support').addEventListener('click', function() {
            // Add your chat support logic here
            alert('Chat support coming soon!');
        });

        // Header scroll effect
        let lastScrollTop = 0;
        window.addEventListener('scroll', function() {
            let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            const header = document.querySelector('.header');
            
            if (scrollTop > lastScrollTop && scrollTop > 100) {
                // Scrolling down
                header.style.transform = 'translateY(-100%)';
            } else {
                // Scrolling up
                header.style.transform = 'translateY(0)';
            }
            lastScrollTop = scrollTop;
        });

        // Preload images for better performance
        const imageUrls = [
            'https://images.unsplash.com/photo-1560472354-b33ff0c44a43?w=1920&h=1080&fit=crop&crop=center',
            'https://images.unsplash.com/photo-1521737711867-e3b97375f902?w=1920&h=1080&fit=crop&crop=center',
            'https://images.unsplash.com/photo-1518709268805-4e9042af2176?w=1920&h=1080&fit=crop&crop=center',
            'https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=1920&h=1080&fit=crop&crop=center'
        ];

        imageUrls.forEach(url => {
            const img = new Image();
            img.src = url;
        });

        // Add loading animation
        window.addEventListener('load', () => {
            document.body.style.opacity = '1';
            document.body.style.transition = 'opacity 0.5s ease';
        });
    </script>
    <script>
    // Products Slider Animation
    const slider = document.getElementById('productSlider');
    const sliderSpeed = 0.5; // pixels per frame

    function animateSlider() {
        const currentTransform = parseFloat(getComputedStyle(slider).transform.split(',')[4] || 0);
        const newTransform = currentTransform - sliderSpeed;
        const totalWidth = slider.scrollWidth / 2; // Half because we duplicated content

        if (Math.abs(newTransform) >= totalWidth) {
            slider.style.transform = `translateX(0px)`;
        } else {
            slider.style.transform = `translateX(${newTransform}px)`;
        }
        requestAnimationFrame(animateSlider);
    }

    window.addEventListener('load', () => {
        // Duplicate content for seamless loop (already done in Blade loop)
        // const originalContent = slider.innerHTML;
        // slider.innerHTML += originalContent;
        // animateSlider();
    });

    // Pause animation on hover (if using CSS animation)
    const sliderWrapper = document.querySelector('.slider-wrapper');
    if (sliderWrapper) {
        sliderWrapper.addEventListener('mouseenter', () => {
            sliderWrapper.style.animationPlayState = 'paused';
        });
        sliderWrapper.addEventListener('mouseleave', () => {
            sliderWrapper.style.animationPlayState = 'running';
        });
    }
    // Core Technologies Slider
    let currentCoreTechSlide = 0;
    const coreTechSlider = document.getElementById('coreTechSlider');
    const coreTechSlides = document.querySelectorAll('.core-tech-slide');
    const coreTechDots = document.querySelectorAll('.dot-bottom');
    const totalCoreTechSlides = coreTechSlides.length;

    function showCoreTechSlide(index) {
        coreTechSlider.style.transform = `translateX(-${index * 100}%)`;
        coreTechDots.forEach(dot => dot.classList.remove('active'));
        coreTechDots[index].classList.add('active');
    }

    document.getElementById('nextCoreTech').addEventListener('click', () => {
        currentCoreTechSlide = (currentCoreTechSlide + 1) % totalCoreTechSlides;
        showCoreTechSlide(currentCoreTechSlide);
    });

    document.getElementById('prevCoreTech').addEventListener('click', () => {
        currentCoreTechSlide = (currentCoreTechSlide - 1 + totalCoreTechSlides) % totalCoreTechSlides;
        showCoreTechSlide(currentCoreTechSlide);
    });

    coreTechDots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            currentCoreTechSlide = index;
            showCoreTechSlide(currentCoreTechSlide);
        });
    });

    // Auto-advance Core Technologies slides every 7 seconds (optional, if desired)
    // setInterval(() => {
    //     currentCoreTechSlide = (currentCoreTechSlide + 1) % totalCoreTechSlides;
    //     showCoreTechSlide(currentCoreTechSlide);
    // }, 7000);
</script>
</body>
</html>