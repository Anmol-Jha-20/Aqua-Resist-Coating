<?php $meta_title = "Nitrogen plant Services  in Ankleshwar - Aqua Water Technology";
  $meta_description = "Aqua Water Technology offers professional nitrogen plant services in Ankleshwar, including installation, maintenance, and reliable after-sales support."; include('header.php') ?>

<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800;900&display=swap" rel="stylesheet">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        :root {
            --primary-gold: #f5c518;
            --dark-blue: #003399;
            --pure-white: #ffffff;
            --text-shadow: 0 4px 20px rgba(0, 0, 0, 0.9);
            --vh: 1vh;
        }
        
        html {
            height: 100%;
        }
        
        html.lenis,
        html.lenis body {
            height: auto;
        }
        
        .lenis.lenis-smooth {
            scroll-behavior: auto !important;
        }
        
        body {
            font-family: Arial, sans-serif;
            overflow-x: hidden;
            height: 100%;
        }
        
        /* Hero Section - Fixed for Mobile */
        .hero-section {
            position: relative;
            width: 100%;
            height: 100vh;
            height: calc(var(--vh, 1vh) * 100);
            min-height: 100vh;
            min-height: calc(var(--vh, 1vh) * 100);
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 80px 0 60px;
        }
        
        /* Video Background */
        .hero-video-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }
        
        .hero-video {
            position: absolute;
            top: 50%;
            left: 50%;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            transform: translate(-50%, -50%) scale(1);
            object-fit: cover;
            z-index: 1;
            filter: brightness(0.4) contrast(1.1);
        }
        
        /* Enhanced Multi-Layer Overlay */
        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 2;
            /* background: 
                radial-gradient(ellipse at center, transparent 0%, rgba(0, 0, 0, 0.3) 70%),
                linear-gradient(135deg, 
                    rgba(0, 51, 153, 0.4) 0%, 
                    rgba(0, 0, 0, 0.5) 50%, 
                    rgba(245, 197, 24, 0.15) 100%
                ); */
        }
        
        /* Animated Grid Pattern */
        .hero-grid {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 3;
            background-image: 
                linear-gradient(rgba(245, 197, 24, 0.05) 1px, transparent 1px),
                linear-gradient(90deg, rgba(245, 197, 24, 0.05) 1px, transparent 1px);
            background-size: 50px 50px;
            opacity: 0.3;
        }
        
        /* Animated Particles */
        .hero-particles {
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: 4;
            overflow: hidden;
        }
        
        .particle {
            position: absolute;
            background: rgba(245, 197, 24, 0.6);
            border-radius: 50%;
            pointer-events: none;
        }
        
        .particle-1 {
            width: 400px;
            height: 400px;
            top: -10%;
            right: -5%;
            background: radial-gradient(circle, rgba(245, 197, 24, 0.15) 0%, transparent 70%);
            filter: blur(40px);
        }
        
        .particle-2 {
            width: 300px;
            height: 300px;
            bottom: -5%;
            left: -5%;
            background: radial-gradient(circle, rgba(0, 51, 153, 0.2) 0%, transparent 70%);
            filter: blur(40px);
        }
        
        .particle-3 {
            width: 200px;
            height: 200px;
            top: 50%;
            left: 30%;
            background: radial-gradient(circle, rgba(245, 197, 24, 0.1) 0%, transparent 70%);
            filter: blur(30px);
        }
        
        /* Content Container - Mobile Fixed */
        .hero-content {
            position: relative;
            z-index: 10;
            text-align: center;
            color: var(--pure-white);
            max-width: 1400px;
            width: 90%;
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: auto;
        }
        
        /* Top Badge */
        .hero-badge {
            display: inline-block;
            padding: 12px 30px;
            background: rgba(0, 0, 0, 0.6);
            backdrop-filter: blur(20px);
            border: 2px solid var(--primary-gold);
            border-radius: 50px;
            font-size: 0.85rem;
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 25px;
            opacity: 0;
            transform: translateY(30px);
            color: var(--primary-gold);
            box-shadow: 
                0 0 30px rgba(245, 197, 24, 0.4),
                inset 0 0 20px rgba(245, 197, 24, 0.1);
        }
        
        /* Main Title */
        .hero-title {
            font-size: 4.5rem;
            font-weight: 900;
            line-height: 1.1;
            margin-bottom: 20px;
            opacity: 0;
            transform: translateY(50px);
            letter-spacing: -2px;
            text-transform: uppercase;
        }
        
        .hero-title .main-text {
            /* display: block; */
            color: var(--pure-white);
            text-shadow: 
                0 0 40px rgba(0, 0, 0, 0.9),
                0 5px 15px rgba(0, 0, 0, 0.8),
                0 10px 30px rgba(0, 0, 0, 0.6),
                0 0 80px rgba(245, 197, 24, 0.3);
            filter: drop-shadow(0 0 20px rgba(0, 0, 0, 1));
        }
        
        .hero-title .highlight-text {
            /* display: block; */
            background: linear-gradient(135deg, var(--primary-gold) 0%, #ffd700 50%, var(--primary-gold) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-shadow: none;
            filter: drop-shadow(0 0 30px rgba(245, 197, 24, 0.8)) 
                     drop-shadow(0 5px 15px rgba(0, 0, 0, 0.8));
            margin-top: 8px;
        }
        
        /* Subtitle */
        .hero-subtitle {
            font-size: 1.4rem;
            line-height: 1.5;
            margin-bottom: 18px;
            opacity: 0;
            transform: translateY(30px);
            font-weight: 600;
            color: var(--pure-white);
            text-shadow: var(--text-shadow);
            letter-spacing: 0.5px;
        }
        
        /* Description */
        .hero-description {
            font-size: 1rem;
            line-height: 1.6;
            margin-bottom: 35px;
            opacity: 0;
            transform: translateY(30px);
            max-width: 850px;
            margin-left: auto;
            margin-right: auto;
            color: rgba(255, 255, 255, 0.95);
            font-weight: 400;
            background: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(15px);
            padding: 20px 30px;
            border-radius: 15px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.8);
        }
        
        /* CTA Buttons */
        .hero-buttons {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
            opacity: 0;
            transform: translateY(30px);
            margin-bottom: 40px;
        }
        
        .btn {
            padding: 16px 40px;
            font-size: 1rem;
            font-weight: 700;
            text-decoration: none;
            border-radius: 50px;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            cursor: pointer;
            position: relative;
            overflow: hidden;
            border: none;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .btn-primary {
            background: linear-gradient(135deg, var(--primary-gold) 0%, #ffd700 100%);
            color: #000;
            font-weight: 800;
            /* box-shadow: 
                0 15px 40px rgba(245, 197, 24, 0.5),
                0 0 40px rgba(245, 197, 24, 0.3); */
        }
        
        .btn-primary::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg, transparent, rgba(255, 255, 255, 0.4), transparent);
            transform: rotate(45deg);
            transition: all 0.6s;
        }
        
        .btn-primary:hover::before {
            left: 100%;
        }
        
        .btn-primary:hover {
            transform: translateY(-5px) scale(1.05);
            box-shadow: 
                 0 5px 15px rgba(245, 197, 24, 0.3),
    0 0 10px rgba(245, 197, 24, 0.2);
        }
        
        .btn-secondary {
            background: rgba(0, 0, 0, 0.7);
            backdrop-filter: blur(10px);
            color: var(--pure-white);
            border: 3px solid var(--pure-white);
            font-weight: 700;
            box-shadow: 
                0 10px 30px rgba(0, 0, 0, 0.5),
                inset 0 0 20px rgba(255, 255, 255, 0.05);
        }
        
        .btn-secondary:hover {
            background: var(--pure-white);
            color: #000;
            transform: translateY(-5px) scale(1.05);
            box-shadow: 
                0 15px 40px rgba(255, 255, 255, 0.4),
                0 0 40px rgba(255, 255, 255, 0.3);
        }
        
        /* Stats/Features Row */
        .hero-stats {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            max-width: 1200px;
            margin: 0 auto;
            opacity: 0;
            transform: translateY(30px);
            width: 100%;
        }
        
        .stat-item {
            background: rgba(0, 0, 0, 0.6);
            backdrop-filter: blur(20px);
            padding: 25px 15px;
            border-radius: 15px;
            border: 2px solid rgba(245, 197, 24, 0.3);
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
        }
        
        .stat-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(245, 197, 24, 0.1), transparent);
            transition: left 0.6s;
        }
        
        .stat-item:hover::before {
            left: 100%;
        }
        
        .stat-item:hover {
            transform: translateY(-10px);
            border-color: var(--primary-gold);
            box-shadow: 
                0 15px 40px rgba(245, 197, 24, 0.4),
                0 0 30px rgba(245, 197, 24, 0.2);
        }
        
        .stat-number {
            font-size: 2.5rem;
            font-weight: 900;
            color: var(--primary-gold);
            margin-bottom: 8px;
            text-shadow: 0 0 20px rgba(245, 197, 24, 0.5);
        }
        
        .stat-label {
            font-size: 0.85rem;
            font-weight: 600;
            color: var(--pure-white);
            text-transform: uppercase;
            letter-spacing: 1px;
            text-shadow: var(--text-shadow);
        }
        
        /* Scroll Indicator */
        .scroll-indicator {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 10;
            opacity: 0;
            text-align: center;
        }
        
        .scroll-text {
            color: var(--pure-white);
            font-size: 0.75rem;
            font-weight: 600;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 12px;
            text-shadow: var(--text-shadow);
        }
        
        .scroll-mouse {
            width: 30px;
            height: 50px;
            border: 3px solid rgba(245, 197, 24, 0.8);
            border-radius: 25px;
            position: relative;
            display: flex;
            justify-content: center;
            background: rgba(0, 0, 0, 0.4);
            backdrop-filter: blur(10px);
            box-shadow: 0 0 20px rgba(245, 197, 24, 0.3);
        }
        
        .scroll-wheel {
            width: 4px;
            height: 10px;
            background: var(--primary-gold);
            border-radius: 2px;
            margin-top: 8px;
            animation: scroll-animation 2s infinite;
            box-shadow: 0 0 10px rgba(245, 197, 24, 0.8);
        }
        
        @keyframes scroll-animation {
            0%, 100% {
                transform: translateY(0);
                opacity: 1;
            }
            50% {
                transform: translateY(18px);
                opacity: 0.3;
            }
        }
        
        /* Tablet Responsive */
        @media (max-width: 1024px) {
            .hero-section {
                padding: 70px 0 50px;
            }
            
            .hero-title {
                font-size: 3.5rem;
            }
            
            .hero-title .highlight-text {
                font-size: 3rem;
            }
            
            .hero-subtitle {
                font-size: 1.3rem;
            }
            
            .hero-description {
                font-size: 0.95rem;
                padding: 18px 25px;
            }
            
            .hero-stats {
                grid-template-columns: repeat(2, 1fr);
                gap: 15px;
            }
            
            .stat-number {
                font-size: 2.2rem;
            }
        }
        
        /* Mobile Responsive - FIXED */
        @media (max-width: 768px) {
            .hero-section {
                padding: 100px 15px 70px;
                min-height: -webkit-fill-available;
            }
            
            .hero-content {
                width: 95%;
                padding: 15px;
                gap: 15px;
            }
            
            .hero-badge {
                font-size: 0.7rem;
                padding: 10px 20px;
                letter-spacing: 1.5px;
                margin-bottom: 20px;
            }
            
            .hero-title {
                font-size: 2.8rem;
                letter-spacing: -1px;
                margin-bottom: 15px;
            }
            
            .hero-title .highlight-text {
                font-size: 2.3rem;
                margin-top: 5px;
            }
            
            .hero-subtitle {
                font-size: 1.1rem;
                margin-bottom: 15px;
                line-height: 1.4;
            }
            
            .hero-description {
                font-size: 0.9rem;
                padding: 15px 20px;
                margin-bottom: 25px;
                line-height: 1.5;
            }
            
            .btn {
                padding: 14px 35px;
                font-size: 0.9rem;
                width: 100%;
                max-width: 280px;
            }
            
            .hero-buttons {
                flex-direction: column;
                gap: 12px;
                width: 100%;
                align-items: center;
                margin-bottom: 30px;
            }
            
            .hero-stats {
                grid-template-columns: repeat(2, 1fr);
                gap: 12px;
            }
            
            .stat-item {
                padding: 20px 12px;
            }
            
            .stat-number {
                font-size: 2rem;
            }
            
            .stat-label {
                font-size: 0.75rem;
            }
            
            .scroll-indicator {
                bottom: 20px;
            }
            
            .particle-1,
            .particle-2,
            .particle-3 {
                display: none;
            }
        }
        
        /* Small Mobile - FIXED */
        @media (max-width: 576px) {
            .hero-section {
                padding: 90px 10px 60px;
            }
            
            .hero-content {
                width: 100%;
                padding: 10px;
            }
            
            .hero-badge {
                font-size: 0.65rem;
                padding: 8px 18px;
                margin-bottom: 15px;
            }
            
            .hero-title {
                font-size: 2.2rem;
            }
            
            .hero-title .highlight-text {
                font-size: 1.8rem;
            }
            
            .hero-subtitle {
                font-size: 1rem;
                margin-bottom: 12px;
            }
            
            .hero-description {
                font-size: 0.85rem;
                padding: 12px 18px;
                margin-bottom: 20px;
            }
            
            .btn {
                padding: 12px 30px;
                font-size: 0.85rem;
            }
            
            .hero-stats {
                grid-template-columns: 1fr;
                gap: 10px;
            }
            
            .stat-item {
                padding: 18px 15px;
            }
            
            .stat-number {
                font-size: 1.8rem;
            }
            
            .stat-label {
                font-size: 0.7rem;
            }
        }
    </style>
</head>
<body>

    <!-- Hero Section -->
    <section class="hero-section">
        <!-- Video Background -->
        <div class="hero-video-container">
            <video class="hero-video" autoplay muted loop playsinline>
                <source src="https://cdn.pixabay.com/video/2017/10/12/12437-238795767_large.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        
        <!-- Multi-Layer Overlay -->
        <div class="hero-overlay"></div>
        <div class="hero-grid"></div>
        
        <!-- Animated Particles -->
        <div class="hero-particles">
            <div class="particle particle-1"></div>
            <div class="particle particle-2"></div>
            <div class="particle particle-3"></div>
        </div>
        
        <!-- Content -->
        <div class="hero-content">
            <div class="">★ Established 2009 ★</div>
            
            <h1 class="">
                <span class="">Aqua Resist Coating</span>
                <span class="">Premium Solutions</span>
            </h1>
            
            <p class="hero-subtitle">
                Leading Wholesale Supplier of Silica Powder & Silica Sand
            </p>
            
            <div class="hero-description">
                Empowering industries with high-performance waterproofing, tiles grouting, 
                and coating solutions. Based in Pune, Maharashtra, we deliver premium quality 
                products at affordable prices with timely service across India.
            </div>
            
            <div class="hero-buttons">
                <a href="#products" class="btn btn-primary">Explore Products</a>
                <a href="#services" class="btn btn-secondary">Our Services</a>
            </div>
            
            
        </div>
        
        <!-- Scroll Indicator -->
        <div class="scroll-indicator">
            <div class="scroll-text">Scroll</div>
            <div class="scroll-mouse">
                <div class="scroll-wheel"></div>
            </div>
        </div>
    </section>

    <!-- GSAP & Plugins -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@studio-freight/lenis@1.0.42/dist/lenis.min.js"></script>
    
    <script>
        // Fix 100vh on mobile with address bar
        function setVH() {
            let vh = window.innerHeight * 0.01;
            document.documentElement.style.setProperty('--vh', `${vh}px`);
        }
        
        setVH();
        window.addEventListener('resize', setVH);
        window.addEventListener('orientationchange', setVH);
        
        // Initialize Lenis Smooth Scroll
        const lenis = new Lenis({
            duration: 1.2,
            easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
            smooth: true,
            mouseMultiplier: 1,
            smoothTouch: false,
            touchMultiplier: 2,
            infinite: false,
        });
        
        lenis.on('scroll', ScrollTrigger.update);
        
        gsap.ticker.add((time) => {
            lenis.raf(time * 1000);
        });
        
        gsap.ticker.lagSmoothing(0);
        
        // Register GSAP Plugins
        gsap.registerPlugin(ScrollTrigger);
        
        // Hero Loading Animation Timeline
        const heroTL = gsap.timeline({
            defaults: {
                ease: "power3.out"
            }
        });
        
        // Entrance Animations
        heroTL
            .to('.hero-video', {
                scale: 1.1,
                duration: 1.8,
                ease: "power2.out"
            })
            .to('.hero-badge', {
                opacity: 1,
                y: 0,
                duration: 1,
                ease: "back.out(1.7)"
            }, 0.4)
            .to('.hero-title .main-text', {
                opacity: 1,
                y: 0,
                duration: 1.2,
                ease: "power4.out"
            }, 0.6)
            .to('.hero-title .highlight-text', {
                opacity: 1,
                y: 0,
                duration: 1.2,
                ease: "power4.out"
            }, 0.9)
            .to('.hero-subtitle', {
                opacity: 1,
                y: 0,
                duration: 1,
            }, 1.1)
            .to('.hero-description', {
                opacity: 1,
                y: 0,
                duration: 1,
            }, 1.3)
            .to('.hero-buttons', {
                opacity: 1,
                y: 0,
                duration: 1,
                ease: "back.out(1.4)"
            }, 1.5)
            .to('.hero-stats', {
                opacity: 1,
                y: 0,
                duration: 1,
            }, 1.7)
            .to('.scroll-indicator', {
                opacity: 1,
                duration: 1,
            }, 1.9);
        
        // Floating Particles Animation
        gsap.to('.particle-1', {
            y: -40,
            x: 30,
            scale: 1.2,
            duration: 25,
            repeat: -1,
            yoyo: true,
            ease: "sine.inOut"
        });
        
        gsap.to('.particle-2', {
            y: 50,
            x: -40,
            scale: 0.8,
            duration: 20,
            repeat: -1,
            yoyo: true,
            ease: "sine.inOut"
        });
        
        gsap.to('.particle-3', {
            y: -30,
            x: 40,
            scale: 1.3,
            rotation: 180,
            duration: 22,
            repeat: -1,
            yoyo: true,
            ease: "sine.inOut"
        });
        
        // Grid Animation
        gsap.to('.hero-grid', {
            backgroundPosition: '100px 100px',
            duration: 20,
            repeat: -1,
            ease: "none"
        });
        
        // Scroll-triggered Animations
        gsap.to('.hero-video', {
            scale: 1.4,
            filter: 'brightness(0.2) contrast(1.2)',
            scrollTrigger: {
                trigger: '.hero-section',
                start: 'top top',
                end: 'bottom top',
                scrub: 1.5,
            }
        });
        
        gsap.to('.hero-content', {
            y: 150,
            opacity: 0,
            scrollTrigger: {
                trigger: '.hero-section',
                start: 'top top',
                end: 'bottom top',
                scrub: 1,
            }
        });
        
        gsap.to('.hero-overlay', {
            opacity: 1,
            scrollTrigger: {
                trigger: '.hero-section',
                start: 'top top',
                end: 'bottom top',
                scrub: 1,
            }
        });
        
        // Stats Counter Animation
        const statNumbers = document.querySelectorAll('.stat-number');
        statNumbers.forEach((stat) => {
            const target = stat.textContent;
            const number = parseInt(target);
            
            if (!isNaN(number)) {
                gsap.from(stat, {
                    scrollTrigger: {
                        trigger: '.hero-stats',
                        start: 'top 80%',
                    },
                    innerText: 0,
                    duration: 2,
                    snap: { innerText: 1 },
                    onUpdate: function() {
                        stat.innerText = Math.ceil(this.targets()[0].innerText) + (target.includes('+') ? '+' : target.includes('%') ? '%' : '');
                    }
                });
            }
        });
        
        // Stats Stagger Animation
        gsap.from('.stat-item', {
            scrollTrigger: {
                trigger: '.hero-stats',
                start: 'top 85%',
            },
            y: 60,
            opacity: 0,
            stagger: 0.15,
            duration: 1,
            ease: "back.out(1.7)"
        });
        
        // Enhanced Button Animations
        document.querySelectorAll('.btn').forEach(btn => {
            btn.addEventListener('mousemove', function(e) {
                const rect = this.getBoundingClientRect();
                const x = e.clientX - rect.left - rect.width / 2;
                const y = e.clientY - rect.top - rect.height / 2;
                
                gsap.to(this, {
                    x: x * 0.3,
                    y: y * 0.3,
                    duration: 0.3,
                    ease: "power2.out"
                });
            });
            
            btn.addEventListener('mouseleave', function() {
                gsap.to(this, {
                    x: 0,
                    y: 0,
                    duration: 0.6,
                    ease: "elastic.out(1, 0.5)"
                });
            });
        });
        
        // Parallax Particles on Scroll
        gsap.to('.particle-1', {
            y: 250,
            scrollTrigger: {
                trigger: '.hero-section',
                start: 'top top',
                end: 'bottom top',
                scrub: 2,
            }
        });
        
        gsap.to('.particle-2', {
            y: -200,
            scrollTrigger: {
                trigger: '.hero-section',
                start: 'top top',
                end: 'bottom top',
                scrub: 2,
            }
        });
        
        gsap.to('.particle-3', {
            y: 180,
            x: -100,
            scrollTrigger: {
                trigger: '.hero-section',
                start: 'top top',
                end: 'bottom top',
                scrub: 2,
            }
        });
        
        // Hide Scroll Indicator
        ScrollTrigger.create({
            trigger: '.hero-section',
            start: 'top top',
            end: 'bottom top',
            onUpdate: (self) => {
                gsap.to('.scroll-indicator', {
                    opacity: 1 - self.progress * 2,
                    y: self.progress * 50,
                    duration: 0.3
                });
            }
        });
        
        // Badge Pulse Animation
        gsap.to('.hero-badge', {
            scale: 1.05,
            duration: 2,
            repeat: -1,
            yoyo: true,
            ease: "sine.inOut"
        });
        
        // Title Glow Animation
        gsap.to('.hero-title .highlight-text', {
            filter: 'drop-shadow(0 0 40px rgba(245, 197, 24, 0.9)) drop-shadow(0 5px 15px rgba(0, 0, 0, 0.8))',
            duration: 2,
            repeat: -1,
            yoyo: true,
            ease: "sine.inOut"
        });
        
    </script>






	  
      <div class="th-hero-wrapper hero-1" id="hero">
         
		 
		 
         <div class="hero-over-image" style="margin-top:5px">
            <div class="container">
               <div class="row gy-4">
                  <div class="col-xl-5 col-lg-4">
                     <!-- <div class="hero-image global-img"><img src="assets/img/hero/img/02.jpeg" alt="" style="height:350px"></div> -->
                      <!-- Swiper -->
   <div class="swiper mySwiper">
      <div class="swiper-wrapper">
         <div class="swiper-slide">
            <img src="https://cdn.pixabay.com/photo/2022/10/09/07/23/waterproofing-7508374_640.jpg" alt="" style="height: 350px; width: 100%; object-fit: cover;">
         </div>
         
         
      </div>
   </div>
                  </div>
                  <div class="col-xl-3 col-lg-4">
                     <div class="hero1-item">
                        <!-- <div class="box-icon"><img src="assets/img/icon/doller.svg" alt=""></div> -->
                        <div class="box-content">
                           <h3 class="box-title">Performance Enhancement</h3>
                           <p class="box-text">At Aqua Resist Coating, we deliver high-quality silica products and advanced waterproofing solutions that enhance durability, efficiency, and overall project performance across diverse construction applications.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-4 col-lg-4">
                     <!-- <div class="hero-image global-img"><img src="assets/img/hero/img/01.jpeg" alt=""></div> -->
                      <div class="swiper mySwiper">
      <div class="swiper-wrapper">
         <div class="swiper-slide">
            <img src="https://img.freepik.com/free-photo/worker-performs-overhaul-roof-residential-building_181624-61003.jpg?semt=ais_hybrid&w=740&q=80" alt="" style="background-color:white; height: 350px; width: 100%; object-fit: cover;">
         </div>
         
         
         
      </div>
   </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- <div class="position-relative overflow-hidden space-top">
         <div class="container">
            <div class="row gy-4 justify-content-center">
               <div class="col-md-6 col-xl-3">
                  <div class="feature-card th-ani">
                     <div class="box-icon"><img src="assets/img/icon/feature_1_3.svg" alt="Icon"></div>
                     <h3 class="box-title"><a href="#">APPLICATION</a></h3>
                     <p class="box-text">Texttile Machinery</p>
                  </div>
               </div>
               <div class="col-md-6 col-xl-3">
                  <div class="feature-card th-ani">
                     <div class="box-icon"><img src="assets/img/icon/feature_1_3.svg" alt="Icon"></div>
                     <h3 class="box-title"><a href="#">APPLICATION</a></h3>
                     <p class="box-text">Fan and Water Pump</p>
                  </div>
               </div>
               <div class="col-md-6 col-xl-3">
                  <div class="feature-card th-ani">
                     <div class="box-icon"><img src="assets/img/icon/feature_1_3.svg" alt="Icon"></div>
                     <h3 class="box-title"><a href="#">APPLICATION</a></h3>
                     <p class="box-text">Plastic Machinery </p>
                  </div>
               </div>
               <div class="col-md-6 col-xl-3">
                  <div class="feature-card th-ani">
                     <div class="box-icon"><img src="assets/img/icon/feature_1_3.svg" alt="Icon"></div>
                     <h3 class="box-title"><a href="#">APPLICATION</a></h3>
                     <p class="box-text">Hoisting Machinery</p>
                  </div>
               </div>
            </div>
         </div>
      </div> -->
	  
	  <br>
	  
	  <section class="team-sec space-bottom overflow-hidden">
         <div class="container z-index-common">
            <div class="row justify-content-center">
               <div class="col-xl-6 col-xxl-5">
                  <div class="title-area text-center">
                     <span class="sub-title">Aqua Resist Coating</span>
                     <h2 class="sec-title">OUR SERVICES</h2>
                  </div>
               </div>
            </div>
            <div class="slider-area">
               <div class="swiper th-slider has-shadow" id="teamSlider1" data-slider-options='{"loop":true,"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1300":{"slidesPerView":"4"}}}'>
                  <div class="swiper-wrapper">
                     <div class="swiper-slide">
                        <div class="th-team team-box">
                           <div class="team-img-wrap">
                              <div class="box-img"><img src="https://5.imimg.com/data5/JD/BL/NF/SELLER-91813736/water-proofing-service-500x500.jpg" alt="" style="height:300px"></div>
                            
                           </div>
                          <a href="#"> <div class="box-content">
                              <h3 class="box-title"><a href="#">Waterproofing Service</a></h3>
                             <a href="#"> <span class="team-desig">Read more</span> </a>
                           </div> </a>
                        </div>
                     </div>
                      <div class="swiper-slide">
                        <div class="th-team team-box">
                           <div class="team-img-wrap">
                              <div class="box-img"><img src="https://5.imimg.com/data5/RM/CQ/IK/SELLER-91813736/industrial-gangway-epoxy-marking-service-500x500.jpg" alt="" style="height:300px"></div>
                            
                           </div>
                          <a href="#"> <div class="box-content">
                              <h3 class="box-title"><a href="#">Epoxy Marking Service</a></h3>
                             <a href="#"> <span class="team-desig">Read more</span> </a>
                           </div> </a>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="th-team team-box">
                           <div class="team-img-wrap">
                              <div class="box-img"><img src="https://5.imimg.com/data5/IOS/Default/2023/11/362129613/QW/RW/GK/91813736/product-jpeg-500x500.png" alt="" style="height:300px"></div>
                            
                           </div>
                          <a href="#"> <div class="box-content">
                              <h3 class="box-title"><a href="#">Building Painting Service</a></h3>
                             <a href="#"> <span class="team-desig">Read more</span> </a>
                           </div> </a>
                        </div>
                     </div>
                      <div class="swiper-slide">
                        <div class="th-team team-box">
                           <div class="team-img-wrap">
                              <div class="box-img"><img src="https://5.imimg.com/data5/IOS/Default/2023/11/362128430/LS/XX/VL/91813736/product-jpeg-500x500.png" alt="" style="height:300px"></div>
                            
                           </div>
                          <a href="#"> <div class="box-content">
                              <h3 class="box-title"><a href="#">Bathroom Waterproofing Service</a></h3>
                             <a href="#"> <span class="team-desig">Read more</span> </a>
                           </div> </a>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="th-team team-box">
                           <div class="team-img-wrap">
                              <div class="box-img"><img src="https://5.imimg.com/data5/SELLER/Default/2025/3/493930401/PN/FN/LN/91813736/industrial-epoxy-flooring-service-500x500.jpg" alt="" style="height:300px"></div>
                            
                           </div>
                          <a href="#"> <div class="box-content">
                              <h3 class="box-title"><a href="#">Epoxy Flooring Service</a></h3>
                             <a href="#"> <span class="team-desig">Read more</span> </a>
                           </div> </a>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="th-team team-box">
                           <div class="team-img-wrap">
                              <div class="box-img"><img src="https://5.imimg.com/data5/IOS/Default/2023/11/362129181/RL/ZU/NW/91813736/product-jpeg-500x500.png" alt="" style="height:300px"></div>
                            
                           </div>
                          <a href="#"> <div class="box-content">
                              <h3 class="box-title"><a href="#">Epoxy Paints</a></h3>
                             <a href="#"> <span class="team-desig">Read more</span> </a>
                           </div> </a>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="th-team team-box">
                           <div class="team-img-wrap">
                              <div class="box-img"><img src="https://5.imimg.com/data5/DL/VR/RX/SELLER-91813736/8251238b-c237-4f72-8ec1-355ccea9d8b0-500x500.jpg" alt="" style="height:300px"></div>
                            
                           </div>
                          <a href="#"> <div class="box-content">
                              <h3 class="box-title"><a href="#">Wall Waterproofing Services</a></h3>
                             <a href="#"> <span class="team-desig">Read more</span> </a>
                           </div> </a>
                        </div>
                     </div>

                     
                    
                    
                    
                  </div>
               </div>
               <button data-slider-prev="#teamSlider1" class="slider-arrow slider-prev"><i class="far fa-arrow-left"></i></button> <button data-slider-next="#teamSlider1" class="slider-arrow slider-next"><i class="far fa-arrow-right"></i></button>
            </div>
         </div>
      </section>
	  
	  
	  
	  
	  
      <div class="about-area overflow-hidden space-top" id="about-sec">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-xxl-6 col-xl-7">
                  <div class="title-area mb-40 text-center">
                     <span class="sub-title">Aqua Resist Coating</span>
                     <h2 class="sec-title">We Strive to Lead the Way in Surface Protection and Building Solutions</h2>
                  </div>
               </div>
            </div>
            <div class="row gy-4 align-items-center">
               <div class="col-xl-7 mb-30 mb-xl-0">
                  <div class="img-box1">
                     <div class="img1 th-parallax"><img src="https://5.imimg.com/data5/QG/DB/GQ/SELLER-91813736/d1e44883-df05-48e5-a7c7-e2c83f84fdfe-500x500.jpg" alt="About"></div>
                     <div class="about-wrapp">
                        <div class="discount-wrapp">
                           <a href="" class="play-btn popup-video"><i class="fa-solid fa-play"></i></a>
                           <div class="discount-tag"><span class="discount-anime">Aqua Resist Coating</span></div>
                        </div>
                     </div>
                     
                  </div>
               </div>
               <div class="col-xl-5">
                  <div class="ps-xxl-5 ms-xxl-5 me-xl-2">
                     <p class="mb-25">At Aqua Resist Coating, we are dedicated to providing high-quality silica products and advanced waterproofing solutions that ensure durability, strength, and long-lasting protection. Since our establishment in 2009, we have built a strong reputation for premium quality, affordability, and timely delivery. 

</p>
                    
                     <div class="about-profile">
                        
                       
                        <p class="box-text">Our commitment to innovation and customer satisfaction drives us to deliver reliable materials and expert services that enhance performance across every construction and coating project—helping our clients build with confidence and excellence.</p>
                     </div>
                     <div class="btn-group mt-30 justify-content-start"><a href="#" class="th-btn black-btn th-icon"><span class="btn-text" data-back="More About Us" data-front="More About Us"></span><i class="fa-regular fa-arrow-right ms-2"></i></a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>

     

      <!-- <section class="overflow-hidden space" data-bg-src="assets/img/bg/service_bg_1.jpg">
         <div class="container">
            <div class="row justify-content-lg-between justify-content-center align-items-center">
               <div class="col-lg-5">
                  <div class="title-area text-center text-lg-start">
                     <span class="sub-title">Our SOLUTION</span>
                     <h2 class="sec-title">Applications</h2>
                  </div>
               </div>
               <div class="col-auto">
                  <div class="sec-btn">
                     <div class="icon-box"><button data-slider-prev="#serviceSlide" class="slider-arrow default"><i class="far fa-arrow-left"></i></button> <button data-slider-next="#serviceSlide" class="slider-arrow default"><i class="far fa-arrow-right"></i></button></div>
                  </div>
               </div>
            </div>
            <div class="slider-area">
               <div class="swiper th-slider has-shadow" id="serviceSlide" data-slider-options='{"loop":true,"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"},"1400":{"slidesPerView":"4"}}}'>
                  <div class="swiper-wrapper">

                     <div class="swiper-slide">
                        <div class="service-card">
                           <div class="service-overlay" data-bg-src="https://ilrorwxhqqqqln5m-static.micyjz.com/cloud/lnBppKnllnSRokjpjjrnjq/home-applicant3-1920-1920.png"></div>
                           <div class="box-content">
                              <div class="box-icon"><img src="assets/img/icon/service_1_3.svg" alt="Icon"></div>
                              <div class="box-img" data-mask-src="assets/img/shape/ser-shape.png"></div>
                              <h3 class="box-title"><a href="">Plastic machinery</a></h3>
                              <p class="box-text">Our advanced energy-efficient injection molding systems are designed to significantly lower energy usage without compromising performance. These systems feature precision control over temperature and pressure, ensuring optimal process stability and product quality.</p>
                              <a href="application.php" class="th-btn border-btn th-icon fw-medium text-uppercase"><span class="btn-text" data-back="Vew Details" data-front="Vew Details"></span><i class="fa-regular fa-arrow-right ms-2"></i></a>
                           </div>
                        </div>
                     </div>

                     <div class="swiper-slide">
                        <div class="service-card">
                           <div class="service-overlay" data-bg-src="https://ilrorwxhqqqqln5m-static.micyjz.com/cloud/ljBppKnllnSRokjpjjpljp/home-applicant1-1920-1920.png"></div>
                           <div class="box-content">
                              <div class="box-icon"><img src="assets/img/icon/service_1_3.svg" alt="Icon"></div>
                              <div class="box-img" data-mask-src="assets/img/shape/ser-shape.png"></div>
                              <h3 class="box-title"><a href="">Textile machinery</a></h3>
                              <p class="box-text">Enhance fabric quality with precise tension control, adaptable variable speed drives, and automated threading and winding systems. Real-time monitoring ensures consistent performance and process reliability across various textile applications.</p>
                              <a href="application.php" class="th-btn border-btn th-icon fw-medium text-uppercase"><span class="btn-text" data-back="Vew Details" data-front="Vew Details"></span><i class="fa-regular fa-arrow-right ms-2"></i></a>
                           </div>
                        </div>
                     </div>


                     <div class="swiper-slide">
                        <div class="service-card">
                           <div class="service-overlay" data-bg-src="https://ilrorwxhqqqqln5m-static.micyjz.com/cloud/lkBppKnllnSRokjpjjmljp/home-applicant2-1920-1920.png"></div>
                           <div class="box-content">
                              <div class="box-icon"><img src="assets/img/icon/service_1_3.svg" alt="Icon"></div>
                              <div class="box-img" data-mask-src="assets/img/shape/ser-shape.png"></div>
                              <h3 class="box-title"><a href="">Water pump & fan</a></h3>
                              <p class="box-text">Optimize performance and save energy by using VFD technology to adjust flow rates based on demand. This approach ensures efficient energy consumption, reduces wear and maintenance costs, and enables smart monitoring for precise control.</p>
                              <a href="application.php" class="th-btn border-btn th-icon fw-medium text-uppercase"><span class="btn-text" data-back="Vew Details" data-front="Vew Details"></span><i class="fa-regular fa-arrow-right ms-2"></i></a>
                           </div>
                        </div>
                     </div>


                    <div class="swiper-slide">
                        <div class="service-card">
                           <div class="service-overlay" data-bg-src="https://ilrorwxhqqqqln5m-static.micyjz.com/cloud/loBppKnllnSRokjpjjinjq/home-applicant4-1920-1920.png"></div>
                           <div class="box-content">
                              <div class="box-icon"><img src="assets/img/icon/service_1_3.svg" alt="Icon"></div>
                              <div class="box-img" data-mask-src="assets/img/shape/ser-shape.png"></div>
                              <h3 class="box-title"><a href="">Hoisting machinery</a></h3>
                              <p class="box-text">Deliver stable performance with high torque at low frequencies, ideal for heavy load operations. Features include precise load control, smooth acceleration/deceleration, and built-in safety systems for reliable, protected hoisting.</p>
                              <a href="application.php" class="th-btn border-btn th-icon fw-medium text-uppercase"><span class="btn-text" data-back="Vew Details" data-front="Vew Details"></span><i class="fa-regular fa-arrow-right ms-2"></i></a>
                           </div>
                        </div>
                     </div>

                      
                  </div>
               </div>
            </div>
         </div>
      </section> -->
	  
  
	  
      <div class="about-area space" id="about-sec">
         <div class="container">
            <div class="row gy-5 flex-row-reverse">
               <div class="col-xl-5">
                  <div class="about-feature-wrap">
                        <div class="about-feature">
                           <div class="box-icon"><img src="assets/img/icon/sales_support.png" alt="Icon"></div>
                           <div class="media-body">
                              <h3 class="box-title">Sales Support</h3>

                           </div>
                        </div>
                        <div class="about-feature">
                           <div class="box-icon"><img src="assets/img/icon/technical_support.png" alt="Icon"></div>
                           <div class="media-body">
                              <h3 class="box-title">Technical Support</h3>
                              
                           </div>
                        </div>
                        <div class="about-feature">
                           <div class="box-icon"><img style="height: 95px;" src="assets/img/icon/general_queries.png" alt="Icon"></div>
                           <div class="media-body">
                              <h3 class="box-title">General Queries</h3>
                              
                           </div>
                        </div>
                     </div>

               </div>
               <div class="col-xl-7 mb-30 mb-xl-0">
                  <!-- <div class="img-box2 pe-xl-5 me-xl-2">
                     <div class="img1 th-parallax"><img src="assets/img/hero/img/05.jpeg" alt="About"></div>
                     <div class="discount-wrapp style2">
                        <h2 class="box-counter"><span class="counter-number">5</span></h2>
                        <div class="discount-tag"><span class="discount-anime">years of experience</span></div>
                     </div>
                  </div> -->
                  <div class="pe-xxl-4 me-xl-3">
                     <div class="title-area mb-30">
                        <span class="sub-title">Why Choose Us</span>
                       
                     </div>
                     <p class="mt-n2 mb-35">At Aqua Resist Coating, we believe that true value lies not just in our premium-quality silica products and advanced waterproofing solutions, but also in the reliable support we provide to our clients. Since our establishment in 2009, we have been committed to delivering timely, affordable, and high-performing solutions for every construction and coating project.

Our dedicated team is always available to assist with product inquiries, technical guidance, and service requirements, ensuring that your projects run smoothly from start to finish. We focus on quality, durability, and client satisfaction, helping you achieve long-lasting results and enhancing the performance of your surfaces. With Aqua Resist Coating, your success and peace of mind are always our priority.</p>
                     
                  </div>
               </div>
            </div>
         </div>
      </div>

    

     

      <section class="overflow-hidden bg-white space overflow-hidden" id="testi-sec">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-xxl-5 col-xl-6">
                  <div class="title-area text-center">
                     <span class="sub-title">Testimonials</span>
                     <h2 class="sec-title">What our clients say about our services?</h2>
                  </div>
               </div>
            </div>
            <div class="slider-area">
               <div class="swiper th-slider testiSlide1 has-shadow" id="testiSlide1" data-slider-options='{"loop":true,"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"},"1400":{"slidesPerView":"4"}}}'>
                  <div class="swiper-wrapper">
                     <!-- <div class="swiper-slide">
                        <div class="testi-card">
                           <div class="box-review"><i class="fa-sharp fa-solid fa-star"></i> <i class="fa-sharp fa-solid fa-star"></i> <i class="fa-sharp fa-solid fa-star"></i> <i class="fa-sharp fa-solid fa-star"></i> <span class=""><i class="fa-solid fa-star"></i></span></div>
                           <h3 class="box-title2">Lorem Ipsum is simply dummy</h3>
                           <p class="box-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                           <div class="box-wrapp">
                              <div class="box-profile">
                                 <div class="box-author"><img src="assets/img/testimonial/testi_1_1.jpg" alt="Avater"></div>
                                 <div class="box-info">
                                    <h3 class="box-title">Ajay kumar</h3>
                                    <span class="box-desig">Customer</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="testi-card">
                           <div class="box-review"><i class="fa-sharp fa-solid fa-star"></i> <i class="fa-sharp fa-solid fa-star"></i> <i class="fa-sharp fa-solid fa-star"></i> <i class="fa-sharp fa-solid fa-star"></i> <span class=""><i class="fa-solid fa-star"></i></span></div>
                           <h3 class="box-title2">Lorem Ipsum is simply dummy</h3>
                           <p class="box-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                           <div class="box-wrapp">
                              <div class="box-profile">
                                 <div class="box-author"><img src="assets/img/testimonial/testi_1_2.jpg" alt="Avater"></div>
                                 <div class="box-info">
                                    <h3 class="box-title">Sunil Jha</h3>
                                    <span class="box-desig">Customer</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="testi-card">
                           <div class="box-review"><i class="fa-sharp fa-solid fa-star"></i> <i class="fa-sharp fa-solid fa-star"></i> <i class="fa-sharp fa-solid fa-star"></i> <i class="fa-sharp fa-solid fa-star"></i> <span class=""><i class="fa-solid fa-star"></i></span></div>
                           <h3 class="box-title2">Lorem Ipsum is simply dummy</h3>
                           <p class="box-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                           <div class="box-wrapp">
                              <div class="box-profile">
                                 <div class="box-author"><img src="assets/img/testimonial/testi_1_3.jpg" alt="Avater"></div>
                                 <div class="box-info">
                                    <h3 class="box-title">David Brown</h3>
                                    <span class="box-desig">Customer</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="testi-card">
                           <div class="box-review"><i class="fa-sharp fa-solid fa-star"></i> <i class="fa-sharp fa-solid fa-star"></i> <i class="fa-sharp fa-solid fa-star"></i> <i class="fa-sharp fa-solid fa-star"></i> <span class=""><i class="fa-solid fa-star"></i></span></div>
                           <h3 class="box-title2">Lorem Ipsum is simply dummy text</h3>
                           <p class="box-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                           <div class="box-wrapp">
                              <div class="box-profile">
                                 <div class="box-author"><img src="assets/img/testimonial/testi_1_4.jpg" alt="Avater"></div>
                                 <div class="box-info">
                                    <h3 class="box-title">Rakesh </h3>
                                    <span class="box-desig">Customer</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="testi-card">
                           <div class="box-review"><i class="fa-sharp fa-solid fa-star"></i> <i class="fa-sharp fa-solid fa-star"></i> <i class="fa-sharp fa-solid fa-star"></i> <i class="fa-sharp fa-solid fa-star"></i> <span class=""><i class="fa-solid fa-star"></i></span></div>
                           <h3 class="box-title2">Lorem Ipsum is simply dummy text </h3>
                           <p class="box-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                           <div class="box-wrapp">
                              <div class="box-profile">
                                 <div class="box-author"><img src="assets/img/testimonial/testi_1_5.jpg" alt="Avater"></div>
                                 <div class="box-info">
                                    <h3 class="box-title">Priyanka Mehta</h3>
                                    <span class="box-desig">Customer</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="testi-card">
                           <div class="box-review"><i class="fa-sharp fa-solid fa-star"></i> <i class="fa-sharp fa-solid fa-star"></i> <i class="fa-sharp fa-solid fa-star"></i> <i class="fa-sharp fa-solid fa-star"></i> <span class=""><i class="fa-solid fa-star"></i></span></div>
                           <h3 class="box-title2">Lorem Ipsum is simply dummy text </h3>
                           <p class="box-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                           <div class="box-wrapp">
                              <div class="box-profile">
                                 <div class="box-author"><img src="assets/img/testimonial/testi_1_6.jpg" alt="Avater"></div>
                                 <div class="box-info">
                                    <h3 class="box-title">Ritu kumari</h3>
                                    <span class="box-desig">Customer</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="testi-card">
                           <div class="box-review"><i class="fa-sharp fa-solid fa-star"></i> <i class="fa-sharp fa-solid fa-star"></i> <i class="fa-sharp fa-solid fa-star"></i> <i class="fa-sharp fa-solid fa-star"></i> <span class=""><i class="fa-solid fa-star"></i></span></div>
                           <h3 class="box-title2">Lorem Ipsum is simply dummy text</h3>
                           <p class="box-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                           <div class="box-wrapp">
                              <div class="box-profile">
                                 <div class="box-author"><img src="assets/img/testimonial/testi_1_7.jpg" alt="Avater"></div>
                                 <div class="box-info">
                                    <h3 class="box-title">Amit Ojha</h3>
                                    <span class="box-desig">Customer</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div> -->

                     <div class="swiper-slide">
   <div class="testi-card">
      <div class="box-review">
         <i class="fa-sharp fa-solid fa-star"></i>
         <i class="fa-sharp fa-solid fa-star"></i>
         <i class="fa-sharp fa-solid fa-star"></i>
         <i class="fa-sharp fa-solid fa-star"></i>
         <i class="fa-sharp fa-solid fa-star"></i>
         <!-- <span class=""><i class="fa-solid fa-star"></i></span> -->
      </div>
      <h3 class="box-title2">Reliable Partner for Quality Silica Supplies</h3>
      <p class="box-text">We’ve been sourcing Silica Powder and Silica Sand from Aqua Resist Coating Pune for over six years now. Their consistent quality and prompt delivery have made them our preferred supplier.</p>
      <div class="box-wrapp">
         <div class="box-profile">
            <div class="box-author"><img src="assets/img/testimonial/testi_1_1.jpg" alt="Avater"></div>
            <div class="box-info">
               <h3 class="box-title">Rajesh Patil</h3>
               <span class="box-desig">Purchase Manager, Shree Construction Materials</span>
            </div>
         </div>
      </div>
   </div>
</div>

<div class="swiper-slide">
   <div class="testi-card">
      <div class="box-review">
         <i class="fa-sharp fa-solid fa-star"></i>
         <i class="fa-sharp fa-solid fa-star"></i>
         <i class="fa-sharp fa-solid fa-star"></i>
         <i class="fa-sharp fa-solid fa-star"></i>
         <i class="fa-sharp fa-solid fa-star"></i>
         <!-- <span class=""><i class="fa-solid fa-star"></i></span> -->
      </div>
      <h3 class="box-title2">Excellent Waterproofing Solutions</h3>
      <p class="box-text">Aqua Resist Coating provided top-notch waterproofing services for one of our premium projects. The work was efficient, durable, and completed within the promised time frame.</p>
      <div class="box-wrapp">
         <div class="box-profile">
            <div class="box-author"><img src="assets/img/testimonial/testi_1_2.jpg" alt="Avater"></div>
            <div class="box-info">
               <h3 class="box-title">Kavita Nair</h3>
               <span class="box-desig">Project Engineer, AquaBuild Developers</span>
            </div>
         </div>
      </div>
   </div>
</div>

<div class="swiper-slide">
   <div class="testi-card">
      <div class="box-review">
         <i class="fa-sharp fa-solid fa-star"></i>
         <i class="fa-sharp fa-solid fa-star"></i>
         <i class="fa-sharp fa-solid fa-star"></i>
         <i class="fa-sharp fa-solid fa-star"></i>
         <span class=""><i class="fa-solid fa-star"></i></span>
      </div>
      <h3 class="box-title2">Trusted Supplier for Our Business</h3>
      <p class="box-text">We’ve been associated with Aqua Resist Coating since 2015. Their Silica products always meet our expectations, and their team ensures on-time delivery without fail.</p>
      <div class="box-wrapp">
         <div class="box-profile">
            <div class="box-author"><img src="assets/img/testimonial/testi_1_3.jpg" alt="Avater"></div>
            <div class="box-info">
               <h3 class="box-title">Anil Deshmukh</h3>
               <span class="box-desig">Proprietor, Deshmukh Trading Co.</span>
            </div>
         </div>
      </div>
   </div>
</div>

<div class="swiper-slide">
   <div class="testi-card">
      <div class="box-review">
         <i class="fa-sharp fa-solid fa-star"></i>
         <i class="fa-sharp fa-solid fa-star"></i>
         <i class="fa-sharp fa-solid fa-star"></i>
         <i class="fa-sharp fa-solid fa-star"></i>
         <i class="fa-sharp fa-solid fa-star"></i>
         <!-- <span class=""><i class="fa-solid fa-star"></i></span> -->
      </div>
      <h3 class="box-title2">Professional and Knowledgeable Team</h3>
      <p class="box-text">Their team understands every detail of surface protection. The technical guidance we received improved our waterproofing performance significantly.</p>
      <div class="box-wrapp">
         <div class="box-profile">
            <div class="box-author"><img src="assets/img/testimonial/testi_1_4.jpg" alt="Avater"></div>
            <div class="box-info">
               <h3 class="box-title">Sneha Kulkarni</h3>
               <span class="box-desig">Civil Consultant, BuildSmart Solutions</span>
            </div>
         </div>
      </div>
   </div>
</div>

<div class="swiper-slide">
   <div class="testi-card">
      <div class="box-review">
         <i class="fa-sharp fa-solid fa-star"></i>
         <i class="fa-sharp fa-solid fa-star"></i>
         <i class="fa-sharp fa-solid fa-star"></i>
         <i class="fa-sharp fa-solid fa-star"></i>
         <span class=""><i class="fa-solid fa-star"></i></span>
      </div>
      <h3 class="box-title2">Top Quality at Affordable Prices</h3>
      <p class="box-text">Aqua Resist Coating delivers premium Silica materials that perfectly balance quality and cost. Their products have enhanced our project performance and finish.</p>
      <div class="box-wrapp">
         <div class="box-profile">
            <div class="box-author"><img src="assets/img/testimonial/testi_1_5.jpg" alt="Avater"></div>
            <div class="box-info">
               <h3 class="box-title">Vinod Kamat</h3>
               <span class="box-desig">Contractor, VK Interiors & Construction</span>
            </div>
         </div>
      </div>
   </div>
</div>

<div class="swiper-slide">
   <div class="testi-card">
      <div class="box-review">
         <i class="fa-sharp fa-solid fa-star"></i>
         <i class="fa-sharp fa-solid fa-star"></i>
         <i class="fa-sharp fa-solid fa-star"></i>
         <i class="fa-sharp fa-solid fa-star"></i>
         <span class=""><i class="fa-solid fa-star"></i></span>
      </div>
      <h3 class="box-title2">Dependable for Long-Term Projects</h3>
      <p class="box-text">We rely on Aqua Resist Coating for consistent supplies and expert support. Their professionalism and reliability make them a vital part of our vendor network.</p>
      <div class="box-wrapp">
         <div class="box-profile">
            <div class="box-author"><img src="assets/img/testimonial/testi_1_6.jpg" alt="Avater"></div>
            <div class="box-info">
               <h3 class="box-title">Imran Sheikh</h3>
               <span class="box-desig">Operations Head, MetroBuild Constructions</span>
            </div>
         </div>
      </div>
   </div>
</div>

<div class="swiper-slide">
   <div class="testi-card">
      <div class="box-review">
         <i class="fa-sharp fa-solid fa-star"></i>
         <i class="fa-sharp fa-solid fa-star"></i>
         <i class="fa-sharp fa-solid fa-star"></i>
         <i class="fa-sharp fa-solid fa-star"></i>
         <span class=""><i class="fa-solid fa-star"></i></span>
      </div>
      <h3 class="box-title2">Exceptional Grouting & Waterproofing Work</h3>
      <p class="box-text">The Aqua Resist Coating team completed our home waterproofing and tile grouting perfectly. Excellent workmanship, no leakage issues even during monsoon!</p>
      <div class="box-wrapp">
         <div class="box-profile">
            <div class="box-author"><img src="assets/img/testimonial/testi_1_7.jpg" alt="Avater"></div>
            <div class="box-info">
               <h3 class="box-title">Priya More</h3>
               <span class="box-desig">Homeowner, Baner Pune</span>
            </div>
         </div>
      </div>
   </div>
</div>



                     <!-- <div class="swiper-slide">
                        <div class="testi-card">
                           <div class="box-review"><i class="fa-sharp fa-solid fa-star"></i> <i class="fa-sharp fa-solid fa-star"></i> <i class="fa-sharp fa-solid fa-star"></i> <i class="fa-sharp fa-solid fa-star"></i> <span class=""><i class="fa-solid fa-star"></i></span></div>
                           <h3 class="box-title2">Lorem Ipsum is simply dummy text</h3>
                           <p class="box-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                           <div class="box-wrapp">
                              <div class="box-profile">
                                 <div class="box-author"><img src="assets/img/testimonial/testi_1_8.jpg" alt="Avater"></div>
                                 <div class="box-info">
                                    <h3 class="box-title">Nikhil yadav</h3>
                                    <span class="box-desig">Customer</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="testi-card">
                           <div class="box-review"><i class="fa-sharp fa-solid fa-star"></i> <i class="fa-sharp fa-solid fa-star"></i> <i class="fa-sharp fa-solid fa-star"></i> <i class="fa-sharp fa-solid fa-star"></i> <span class=""><i class="fa-solid fa-star"></i></span></div>
                           <h3 class="box-title2">Lorem Ipsum is simply dummy text</h3>
                           <p class="box-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                           <div class="box-wrapp">
                              <div class="box-profile">
                                 <div class="box-author"><img src="assets/img/testimonial/testi_1_9.jpg" alt="Avater"></div>
                                 <div class="box-info">
                                    <h3 class="box-title">James Charles</h3>
                                    <span class="box-desig">Customer</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="testi-card">
                           <div class="box-review"><i class="fa-sharp fa-solid fa-star"></i> <i class="fa-sharp fa-solid fa-star"></i> <i class="fa-sharp fa-solid fa-star"></i> <i class="fa-sharp fa-solid fa-star"></i> <span class=""><i class="fa-solid fa-star"></i></span></div>
                           <h3 class="box-title2">Lorem Ipsum is simply dummy text </h3>
                           <p class="box-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                           <div class="box-wrapp">
                              <div class="box-profile">
                                 <div class="box-author"><img src="assets/img/testimonial/testi_1_10.jpg" alt="Avater"></div>
                                 <div class="box-info">
                                    <h3 class="box-title">Sophia Jennifer</h3>
                                    <span class="box-desig">Customer</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div> -->
                    
                     
                  </div>
                  <div class="slider-pagination"></div>
               </div>
               <button data-slider-prev="#testiSlide1" class="slider-arrow slider-prev"><i class="far fa-arrow-left"></i></button> <button data-slider-next="#testiSlide1" class="slider-arrow slider-next"><i class="far fa-arrow-right"></i></button>
            </div>
         </div>
         <!-- <div class="shape-mockup d-none d-xl-block" data-top="0%" data-right="0%"><img src="assets/img/hero/img/007.png" alt="" style="width:300px"></div> -->
      </section>
	  
	  

      <section class="overflow-hidden">
         <div class="container">
            <div class="appointment-area position-relative">
               <div class="row">
                  <div class="col-lg-6">
                     <div class="title-area mb-0 text-xl-start pe-xxl-5 me-xxl-5 space">
                        <span class="sub-title">Request A Quote</span>
                        <h2 class="sec-title text-white">Protect & Strengthen Your Surfaces</h2>
                        <p class="sec-desc me-xl-5">Premium silica and waterproofing solutions for durable, long-lasting results.</p>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="appointment-area-wrapper">
                        <form action="" method="POST" class="appointment-form input-smoke ajax-contact">
                           <div class="row">
                              <div class="form-group col-12"><input type="text" class="form-control" name="name" id="name" placeholder="Company Name"></div>
                              <div class="form-group col-12"><input type="email" class="form-control" name="email" id="email" placeholder="Email Address"></div>
                              <div class="form-group col-12"><input type="tel" class="form-control" name="number" id="number" placeholder="Phone Number"></div>
                              <div class="form-group col-12"><textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="Write Messages..."></textarea></div>
                              <div class="form-btn col-12"><button class="th-btn fw-btn"><span class="btn-text" data-back="Send Messages" data-front="Send Messages"></span></button></div>
                           </div>
                           <p class="form-messages mb-0 mt-3"></p>
                        </form>
                     </div>
                  </div>
               </div>
               <div class="shape-mockup d-none d-xxl-block" data-bottom="0%" data-right="-10%"><img src="assets/img/shape/shape-2.png" alt=""></div>
            </div>
         </div>
      </section>

    
<script>
  var swiper = new Swiper(".mySwiper", {
    loop: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    speed: 800,
    effect: 'fade',
  });
</script>


   <?php include('footer.php') ?>