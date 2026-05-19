<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Puncak Jawa — Agen Pendakian Gunung</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,700;0,900;1,700&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        :root {
            --forest: #1a2e1a;
            --moss: #2d4a2d;
            --leaf: #4a7c4a;
            --sage: #7aab6a;
            --mist: #c8d8c0;
            --cream: #f4f0e8;
            --gold: #c8a84b;
            --fog: #e8ede4;
            --stone: #8a9080;
            --peak: #ffffff;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }
        html { scroll-behavior: smooth; }

        body {
            font-family: 'DM Sans', sans-serif;
            background: var(--cream);
            color: var(--forest);
            overflow-x: hidden;
        }

        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: var(--forest); }
        ::-webkit-scrollbar-thumb { background: var(--gold); border-radius: 3px; }

        /* ─── NAVBAR ─── */
        nav {
            position: fixed;
            top: 0; left: 0; right: 0;
            z-index: 100;
            padding: 1.2rem 2.5rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: all 0.4s ease;
        }
        nav.scrolled {
            background: rgba(26, 46, 26, 0.95);
            backdrop-filter: blur(12px);
            padding: 0.8rem 2.5rem;
            box-shadow: 0 4px 30px rgba(0,0,0,0.3);
        }
        .nav-brand {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            font-weight: 900;
            color: var(--peak);
            text-decoration: none;
            letter-spacing: -0.5px;
        }
        .nav-brand span { color: var(--gold); }
        .nav-links { display: flex; gap: 2.5rem; list-style: none; }
        .nav-links a {
            text-decoration: none;
            color: rgba(255,255,255,0.85);
            font-size: 0.9rem;
            font-weight: 500;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            position: relative;
            transition: color 0.3s;
        }
        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -4px; left: 0;
            width: 0; height: 1px;
            background: var(--gold);
            transition: width 0.3s;
        }
        .nav-links a:hover { color: var(--gold); }
        .nav-links a:hover::after { width: 100%; }

        /* ─── HERO ─── */
        #home {
            min-height: 100vh;
            position: relative;
            display: flex;
            align-items: center;
            overflow: hidden;
            background: var(--forest);
        }
        .hero-bg {
            position: absolute;
            inset: 0;
            background:
                radial-gradient(ellipse 80% 60% at 70% 40%, rgba(74,124,74,0.25) 0%, transparent 70%),
                radial-gradient(ellipse 50% 80% at 20% 80%, rgba(45,74,45,0.4) 0%, transparent 60%),
                linear-gradient(160deg, #0d1f0d 0%, #1a2e1a 40%, #2d4a2d 100%);
        }
        .hero-mountains {
            position: absolute;
            bottom: 0; left: 0; right: 0;
            height: 55%;
            opacity: 0.35;
        }
        .hero-stars {
            position: absolute;
            inset: 0;
            background-image:
                radial-gradient(1px 1px at 15% 20%, rgba(255,255,255,0.8) 0%, transparent 100%),
                radial-gradient(1px 1px at 35% 10%, rgba(255,255,255,0.6) 0%, transparent 100%),
                radial-gradient(1px 1px at 55% 25%, rgba(255,255,255,0.9) 0%, transparent 100%),
                radial-gradient(1px 1px at 75% 8%, rgba(255,255,255,0.7) 0%, transparent 100%),
                radial-gradient(1px 1px at 90% 18%, rgba(255,255,255,0.5) 0%, transparent 100%),
                radial-gradient(1px 1px at 8% 35%, rgba(255,255,255,0.6) 0%, transparent 100%),
                radial-gradient(1px 1px at 48% 15%, rgba(255,255,255,0.8) 0%, transparent 100%),
                radial-gradient(1.5px 1.5px at 25% 30%, rgba(200,168,75,0.9) 0%, transparent 100%),
                radial-gradient(1px 1px at 65% 5%, rgba(255,255,255,0.7) 0%, transparent 100%),
                radial-gradient(1px 1px at 82% 30%, rgba(255,255,255,0.5) 0%, transparent 100%);
        }
        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 1100px;
            margin: 0 auto;
            padding: 0 2.5rem;
            padding-top: 5rem;
        }
        .hero-tag {
            display: inline-block;
            font-size: 0.75rem;
            font-weight: 500;
            letter-spacing: 3px;
            text-transform: uppercase;
            color: var(--gold);
            border: 1px solid rgba(200,168,75,0.4);
            padding: 0.4rem 1rem;
            border-radius: 100px;
            margin-bottom: 2rem;
            animation: fadeUp 0.8s 0.2s both;
        }
        .hero-title {
            font-family: 'Playfair Display', serif;
            font-size: clamp(3rem, 8vw, 6.5rem);
            font-weight: 900;
            line-height: 0.95;
            color: var(--peak);
            margin-bottom: 1.5rem;
            animation: fadeUp 0.8s 0.4s both;
        }
        .hero-title em { font-style: italic; color: var(--sage); }
        .hero-subtitle {
            font-size: 1.15rem;
            font-weight: 300;
            color: rgba(255,255,255,0.65);
            max-width: 480px;
            line-height: 1.7;
            margin-bottom: 3rem;
            animation: fadeUp 0.8s 0.6s both;
        }
        .hero-cta {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
            animation: fadeUp 0.8s 0.8s both;
        }
        .btn-primary {
            background: var(--gold);
            color: var(--forest);
            padding: 0.9rem 2.2rem;
            border: none;
            border-radius: 4px;
            font-family: 'DM Sans', sans-serif;
            font-size: 0.9rem;
            font-weight: 700;
            letter-spacing: 0.5px;
            text-decoration: none;
            text-transform: uppercase;
            cursor: pointer;
            transition: all 0.3s;
        }
        .btn-primary:hover {
            background: var(--peak);
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(200,168,75,0.3);
        }
        .btn-outline {
            background: transparent;
            color: var(--peak);
            padding: 0.9rem 2.2rem;
            border: 1px solid rgba(255,255,255,0.3);
            border-radius: 4px;
            font-family: 'DM Sans', sans-serif;
            font-size: 0.9rem;
            font-weight: 500;
            text-decoration: none;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            transition: all 0.3s;
        }
        .btn-outline:hover {
            border-color: var(--gold);
            color: var(--gold);
            transform: translateY(-2px);
        }
        .hero-stats {
            position: absolute;
            bottom: 3rem;
            right: 2.5rem;
            display: flex;
            gap: 3rem;
            animation: fadeUp 0.8s 1s both;
        }
        .stat { text-align: right; }
        .stat-num {
            font-family: 'Playfair Display', serif;
            font-size: 2.2rem;
            font-weight: 700;
            color: var(--peak);
            line-height: 1;
        }
        .stat-num span { color: var(--gold); }
        .stat-label {
            font-size: 0.75rem;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            color: var(--stone);
            margin-top: 0.2rem;
        }

        /* ─── SECTION COMMONS ─── */
        section { padding: 6rem 0; }
        .container { max-width: 1100px; margin: 0 auto; padding: 0 2.5rem; }
        .section-tag {
            font-size: 0.72rem;
            letter-spacing: 3px;
            text-transform: uppercase;
            color: var(--gold);
            font-weight: 600;
            margin-bottom: 0.8rem;
        }
        .section-title {
            font-family: 'Playfair Display', serif;
            font-size: clamp(2rem, 4vw, 3.2rem);
            font-weight: 900;
            line-height: 1.1;
            margin-bottom: 1.2rem;
        }

        /* ─── GUNUNG SECTION ─── */
        #gunung { background: var(--fog); }
        .gunung-header {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: end;
            margin-bottom: 4rem;
        }
        .gunung-intro p { color: var(--stone); line-height: 1.8; font-size: 1rem; }
        .gunung-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.5rem;
        }
        .gunung-card {
            background: var(--peak);
            border-radius: 8px;
            overflow: hidden;
            border: 1px solid rgba(74,124,74,0.1);
            transition: all 0.4s ease;
            cursor: pointer;
            position: relative;
        }
        .gunung-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 50px rgba(26,46,26,0.15);
        }
        .gunung-card-img {
            height: 180px;
            position: relative;
            overflow: hidden;
        }
        .gunung-card-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform 0.5s ease;
        }
        .gunung-card:hover .gunung-card-img img { transform: scale(1.07); }
        .gunung-card-badge {
            position: absolute;
            top: 1rem; right: 1rem;
            background: rgba(200,168,75,0.9);
            color: var(--forest);
            font-size: 0.7rem;
            font-weight: 700;
            letter-spacing: 1px;
            text-transform: uppercase;
            padding: 0.25rem 0.6rem;
            border-radius: 3px;
            z-index: 2;
        }
        .gunung-card-body { padding: 1.5rem; }
        .gunung-name {
            font-family: 'Playfair Display', serif;
            font-size: 1.35rem;
            font-weight: 700;
            color: var(--forest);
            margin-bottom: 0.3rem;
        }
        .gunung-elev {
            font-size: 0.8rem;
            color: var(--sage);
            font-weight: 600;
            letter-spacing: 1px;
            text-transform: uppercase;
            margin-bottom: 0.8rem;
        }
        .gunung-desc {
            font-size: 0.88rem;
            color: var(--stone);
            line-height: 1.6;
            margin-bottom: 1.2rem;
        }
        .gunung-meta { display: flex; gap: 1rem; font-size: 0.78rem; color: var(--stone); }
        .gunung-meta span { display: flex; align-items: center; gap: 0.3rem; }

        /* ─── SERVICES ─── */
        #services {
            background: var(--forest);
            position: relative;
            overflow: hidden;
        }
        #services::before {
            content: '';
            position: absolute;
            top: -100px; right: -100px;
            width: 500px; height: 500px;
            background: radial-gradient(circle, rgba(74,124,74,0.2) 0%, transparent 70%);
            pointer-events: none;
        }
        #services .section-title { color: var(--peak); }
        #services .section-tag { color: var(--gold); }
        .services-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.5rem;
            margin-top: 3.5rem;
        }
        .service-card {
            padding: 2.5rem 2rem;
            border: 1px solid rgba(122,171,106,0.15);
            border-radius: 8px;
            background: rgba(45,74,45,0.3);
            transition: all 0.4s;
            position: relative;
            overflow: hidden;
        }
        .service-card::before {
            content: '';
            position: absolute;
            top: 0; left: 0;
            width: 3px; height: 0;
            background: var(--gold);
            transition: height 0.4s;
        }
        .service-card:hover { background: rgba(45,74,45,0.55); border-color: rgba(200,168,75,0.3); }
        .service-card:hover::before { height: 100%; }
        .service-icon {
            width: 52px; height: 52px;
            background: rgba(200,168,75,0.12);
            border-radius: 8px;
            display: flex; align-items: center; justify-content: center;
            margin-bottom: 1.5rem;
            font-size: 1.5rem;
        }
        .service-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.2rem;
            font-weight: 700;
            color: var(--peak);
            margin-bottom: 0.8rem;
        }
        .service-desc { font-size: 0.88rem; color: rgba(255,255,255,0.55); line-height: 1.7; }

        /* ─── ABOUT ─── */
        #about { background: var(--cream); }
        .about-grid {
            display: grid;
            grid-template-columns: 1fr 1.2fr;
            gap: 6rem;
            align-items: center;
        }
        .about-visual { position: relative; }
        .about-visual-main {
            width: 100%;
            border-radius: 8px;
            overflow: hidden;
            position: relative;
        }
        .about-visual-main svg { width: 100%; height: 340px; display: block; }
        .about-badge {
            position: absolute;
            bottom: -1.5rem; right: -1.5rem;
            background: var(--gold);
            color: var(--forest);
            padding: 1.5rem;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 15px 40px rgba(200,168,75,0.3);
        }
        .about-badge-num {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            font-weight: 900;
            line-height: 1;
        }
        .about-badge-label { font-size: 0.72rem; font-weight: 600; letter-spacing: 1.5px; text-transform: uppercase; margin-top: 0.3rem; }
        .about-content .section-title { color: var(--forest); }
        .about-text { color: var(--stone); line-height: 1.8; margin-bottom: 1rem; font-size: 0.95rem; }
        .about-features { display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin-top: 2rem; }
        .feature-item { display: flex; align-items: flex-start; gap: 0.8rem; }
        .feature-dot { width: 8px; height: 8px; background: var(--gold); border-radius: 50%; margin-top: 0.35rem; flex-shrink: 0; }
        .feature-text { font-size: 0.88rem; color: var(--forest); font-weight: 500; }

        /* ─── CONTACT ─── */
        #contact { background: var(--fog); }
        .contact-wrapper {
            display: grid;
            grid-template-columns: 1fr 1.4fr;
            gap: 5rem;
            align-items: start;
        }
        .contact-info .section-title { color: var(--forest); }
        .contact-details { margin-top: 2.5rem; display: flex; flex-direction: column; gap: 1.5rem; }
        .contact-item { display: flex; align-items: flex-start; gap: 1rem; }
        .contact-icon {
            width: 44px; height: 44px;
            background: var(--forest);
            border-radius: 8px;
            display: flex; align-items: center; justify-content: center;
            font-size: 1.1rem;
            flex-shrink: 0;
        }
        .contact-item-label { font-size: 0.72rem; letter-spacing: 1.5px; text-transform: uppercase; color: var(--stone); font-weight: 600; }
        .contact-item-value { font-size: 0.95rem; color: var(--forest); font-weight: 500; margin-top: 0.2rem; }
        .contact-form {
            background: var(--peak);
            padding: 2.5rem;
            border-radius: 12px;
            box-shadow: 0 20px 60px rgba(26,46,26,0.08);
        }
        .form-group { margin-bottom: 1.5rem; }
        .form-label { display: block; font-size: 0.8rem; font-weight: 600; letter-spacing: 1px; text-transform: uppercase; color: var(--forest); margin-bottom: 0.5rem; }
        .form-control {
            width: 100%;
            padding: 0.85rem 1.1rem;
            border: 1.5px solid rgba(74,124,74,0.2);
            border-radius: 6px;
            font-family: 'DM Sans', sans-serif;
            font-size: 0.9rem;
            color: var(--forest);
            background: var(--fog);
            transition: all 0.3s;
            outline: none;
        }
        .form-control:focus {
            border-color: var(--sage);
            background: var(--peak);
            box-shadow: 0 0 0 3px rgba(122,171,106,0.12);
        }
        textarea.form-control { resize: vertical; min-height: 120px; }
        .form-submit {
            width: 100%;
            padding: 1rem;
            background: var(--forest);
            color: var(--peak);
            border: none;
            border-radius: 6px;
            font-family: 'DM Sans', sans-serif;
            font-size: 0.9rem;
            font-weight: 700;
            letter-spacing: 1px;
            text-transform: uppercase;
            cursor: pointer;
            transition: all 0.3s;
        }
        .form-submit:hover {
            background: var(--moss);
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(26,46,26,0.2);
        }

        /* ─── FOOTER ─── */
        footer { background: var(--forest); padding: 2rem 2.5rem; text-align: center; }
        .footer-logo { font-family: 'Playfair Display', serif; font-size: 1.4rem; font-weight: 900; color: var(--peak); margin-bottom: 0.5rem; }
        .footer-logo span { color: var(--gold); }
        .footer-text { font-size: 0.83rem; color: rgba(255,255,255,0.45); letter-spacing: 0.5px; }

        /* ─── MODAL ─── */
        #thankYouModal {
            display: none;
            position: fixed;
            inset: 0;
            z-index: 999;
            background: rgba(26,46,26,0.6);
            align-items: center;
            justify-content: center;
        }
        #thankYouModal.active { display: flex; }
        .modal-box {
            background: #fff;
            border-radius: 12px;
            padding: 2.5rem 2rem;
            text-align: center;
            max-width: 360px;
            width: 90%;
            margin: 1rem;
        }
        .modal-icon { font-size: 3rem; margin-bottom: 1rem; }
        .modal-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.4rem;
            color: var(--forest);
            margin-bottom: 0.6rem;
        }
        .modal-text {
            color: var(--stone);
            font-size: 0.9rem;
            line-height: 1.7;
            margin-bottom: 1.5rem;
        }
        .modal-close {
            background: var(--forest);
            color: #fff;
            border: none;
            padding: 0.75rem 2rem;
            border-radius: 6px;
            font-family: 'DM Sans', sans-serif;
            font-size: 0.9rem;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s;
        }
        .modal-close:hover { background: var(--moss); }

        /* ─── ANIMATIONS ─── */
        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(24px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .reveal { opacity: 0; transform: translateY(32px); transition: opacity 0.7s ease, transform 0.7s ease; }
        .reveal.visible { opacity: 1; transform: translateY(0); }

        /* ─── HAMBURGER ─── */
        .hamburger { display: none; flex-direction: column; gap: 5px; cursor: pointer; padding: 4px; }
        .hamburger span { display: block; width: 24px; height: 2px; background: var(--peak); border-radius: 2px; transition: all 0.3s; }

        /* ─── RESPONSIVE ─── */
        @media (max-width: 900px) {
            .gunung-grid { grid-template-columns: 1fr 1fr; }
            .services-grid { grid-template-columns: 1fr 1fr; }
            .about-grid { grid-template-columns: 1fr; gap: 3rem; }
            .gunung-header { grid-template-columns: 1fr; gap: 1.5rem; }
            .contact-wrapper { grid-template-columns: 1fr; gap: 3rem; }
            .hero-stats { position: static; margin-top: 3rem; justify-content: flex-start; }
        }
        @media (max-width: 600px) {
            .gunung-grid { grid-template-columns: 1fr; }
            .services-grid { grid-template-columns: 1fr; }
            .hamburger { display: flex; }
            .nav-links {
                display: none;
                position: absolute;
                top: 100%; left: 0; right: 0;
                background: rgba(26,46,26,0.97);
                flex-direction: column;
                padding: 1.5rem 2.5rem;
                gap: 1.5rem;
                backdrop-filter: blur(12px);
            }
            .nav-links.open { display: flex; }
            .about-features { grid-template-columns: 1fr; }
            .about-badge { right: 0; bottom: -3rem; }
        }
    </style>
</head>
<body>

    <!-- ═══════════════════════════════════════
         NAVBAR
    ════════════════════════════════════════ -->
    <nav id="navbar">
        <a class="nav-brand" href="#home">Puncak<span>Jawa</span></a>
        <div class="hamburger" id="hamburger" onclick="toggleMenu()">
            <span></span><span></span><span></span>
        </div>
        <ul class="nav-links" id="navLinks">
            <li><a href="#home">Beranda</a></li>
            <li><a href="#gunung">Gunung</a></li>
            <li><a href="#services">Layanan</a></li>
            <li><a href="#about">Tentang</a></li>
            <li><a href="#contact">Kontak</a></li>
        </ul>
    </nav>

    <!-- ═══════════════════════════════════════
         HERO
    ════════════════════════════════════════ -->
    <section id="home">
        <div class="hero-bg"></div>
        <div class="hero-stars"></div>
        <svg class="hero-mountains" viewBox="0 0 1440 400" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0,400 L0,280 L120,200 L200,250 L320,120 L420,180 L500,80 L580,150 L680,60 L760,130 L840,40 L920,110 L1000,55 L1080,100 L1160,30 L1240,90 L1320,50 L1380,80 L1440,70 L1440,400 Z" fill="rgba(74,124,74,0.6)"/>
            <path d="M0,400 L0,320 L80,280 L160,310 L260,240 L360,270 L440,200 L520,240 L620,160 L700,210 L800,170 L880,220 L960,150 L1040,200 L1120,130 L1200,180 L1280,160 L1360,190 L1440,170 L1440,400 Z" fill="rgba(45,74,45,0.7)"/>
            <path d="M0,400 L0,350 L100,330 L200,340 L300,300 L400,320 L500,280 L580,310 L680,270 L760,300 L860,260 L940,290 L1040,250 L1140,280 L1240,240 L1340,270 L1440,250 L1440,400 Z" fill="rgba(26,46,26,0.85)"/>
        </svg>
        <div class="hero-content">
            <div class="hero-tag">✦ Agen Pendakian Gunung Jawa</div>
            <h1 class="hero-title">
                Raih<br>
                <em>Puncak</em><br>
                Impianmu
            </h1>
            <p class="hero-subtitle">
                Kami memandu pendakian ke gunung-gunung tertinggi dan terindah di Pulau Jawa. Aman, berkesan, dan tak terlupakan.
            </p>
            <div class="hero-cta">
                <a href="#gunung" class="btn-primary">Lihat Gunung</a>
                <a href="#contact" class="btn-outline">Daftar Sekarang</a>
            </div>
            <div class="hero-stats">
                <div class="stat">
                    <div class="stat-num">500<span>+</span></div>
                    <div class="stat-label">Pendaki Sukses</div>
                </div>
                <div class="stat">
                    <div class="stat-num">12<span>+</span></div>
                    <div class="stat-label">Jalur Pendakian</div>
                </div>
                <div class="stat">
                    <div class="stat-num">12</div>
                    <div class="stat-label">Gunung di Jawa</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════════════════════════════
         GUNUNG
    ════════════════════════════════════════ -->
    <section id="gunung">
        <div class="container">
            <div class="gunung-header reveal">
                <div>
                    <div class="section-tag">▲ Destinasi Pendakian</div>
                    <h2 class="section-title" style="color:var(--forest)">Gunung Pilihan<br>di Pulau Jawa</h2>
                </div>
                <div class="gunung-intro">
                    <p>Dari kawah aktif Semeru hingga misteri Gunung Lawu, kami menawarkan pengalaman pendakian dengan panduan berpengalaman, perlengkapan lengkap, dan keselamatan yang terjamin.</p>
                </div>
            </div>

            <div class="gunung-grid">

                <!-- ══ 1. SEMERU ══ -->
                <div class="gunung-card reveal">
                    <div class="gunung-card-img">
                        <img src="asset/img/semeru.jfif" alt="Gunung Semeru">
                        <div class="gunung-card-badge">⚡ Aktif</div>
                    </div>
                    <div class="gunung-card-body">
                        <div class="gunung-name">Gunung Semeru</div>
                        <div class="gunung-elev">▲ 3.676 mdpl — Jawa Timur</div>
                        <p class="gunung-desc">Atap Pulau Jawa. Mahameru — destinasi impian setiap pendaki. Jalur legendaris Ranu Pani dengan kawah Jonggring Saloko yang memukau.</p>
                        <div class="gunung-meta">
                            <span>⏱ 4–5 Hari</span>
                            <span>⛰ Sulit</span>
                            <span>🌡 -5°C</span>
                        </div>
                    </div>
                </div>

                <!-- ══ 2. MERAPI ══ -->
                <div class="gunung-card reveal">
                    <div class="gunung-card-img">
                        <img src="asset/img/merapi.jpg" alt="Gunung Merapi">
                        <div class="gunung-card-badge">🔥 Aktif</div>
                    </div>
                    <div class="gunung-card-body">
                        <div class="gunung-name">Gunung Merapi</div>
                        <div class="gunung-elev">▲ 2.930 mdpl — DIY / Jateng</div>
                        <p class="gunung-desc">Gunung berapi teraktif di Indonesia. Panorama matahari terbit dari puncak menjadi pengalaman spiritual yang tak terlupakan.</p>
                        <div class="gunung-meta">
                            <span>⏱ 2–3 Hari</span>
                            <span>⛰ Menengah</span>
                            <span>🌡 5°C</span>
                        </div>
                    </div>
                </div>

                <!-- ══ 3. BROMO ══ -->
                <div class="gunung-card reveal">
                    <div class="gunung-card-img">
                        <img src="asset/img/bromo.jpg" alt="Gunung Bromo">
                        <div class="gunung-card-badge">🌄 Populer</div>
                    </div>
                    <div class="gunung-card-body">
                        <div class="gunung-name">Gunung Bromo</div>
                        <div class="gunung-elev">▲ 2.329 mdpl — Jawa Timur</div>
                        <p class="gunung-desc">Ikon wisata Jawa Timur. Lautan pasir, kawah belerang, dan panorama matahari terbit yang melegenda. Cocok untuk pemula.</p>
                        <div class="gunung-meta">
                            <span>⏱ 1 Hari</span>
                            <span>⛰ Mudah</span>
                            <span>🌡 8°C</span>
                        </div>
                    </div>
                </div>

                <!-- ══ 4. PRAU ══ -->
                <div class="gunung-card reveal">
                    <div class="gunung-card-img">
                        <img src="asset/img/prau.jpg" alt="Gunung Prau">
                        <div class="gunung-card-badge">⭐ Favorit</div>
                    </div>
                    <div class="gunung-card-body">
                        <div class="gunung-name">Gunung Prau</div>
                        <div class="gunung-elev">▲ 2.565 mdpl — Jawa Tengah</div>
                        <p class="gunung-desc">Gunung dengan panorama bintang dan sunrise terbaik di Jawa Tengah. Trek pendek namun pemandangan negeri di atas awan yang memukau.</p>
                        <div class="gunung-meta">
                            <span>⏱ 2 Hari</span>
                            <span>⛰ Mudah</span>
                            <span>🌡 7°C</span>
                        </div>
                    </div>
                </div>

                <!-- ══ 5. MERBABU ══ -->
                <div class="gunung-card reveal">
                    <div class="gunung-card-img">
                        <img src="asset/img/merbabu.jpg" alt="Gunung Merbabu">
                        <div class="gunung-card-badge">🌿 Hijau</div>
                    </div>
                    <div class="gunung-card-body">
                        <div class="gunung-name">Gunung Merbabu</div>
                        <div class="gunung-elev">▲ 3.142 mdpl — Jawa Tengah</div>
                        <p class="gunung-desc">Padang savana luas dan bunga edelweis. Trekking melewati jalur hijau yang menyegarkan dengan pemandangan Merapi di selatan.</p>
                        <div class="gunung-meta">
                            <span>⏱ 1–2 Hari</span>
                            <span>⛰ Menengah</span>
                            <span>🌡 3°C</span>
                        </div>
                    </div>
                </div>

                <!-- ══ 6. LAWU ══ -->
                <div class="gunung-card reveal">
                    <div class="gunung-card-img">
                        <img src="asset/img/lawu.jpg" alt="Gunung Lawu">
                        <div class="gunung-card-badge">🌙 Mistis</div>
                    </div>
                    <div class="gunung-card-body">
                        <div class="gunung-name">Gunung Lawu</div>
                        <div class="gunung-elev">▲ 3.265 mdpl — Jateng / Jatim</div>
                        <p class="gunung-desc">Gunung penuh nilai sejarah dan spiritual. Warung Mbok Yem di puncak menjadi spot ikonik. Trek dengan nuansa mistis yang menawan.</p>
                        <div class="gunung-meta">
                            <span>⏱ 2–3 Hari</span>
                            <span>⛰ Menengah</span>
                            <span>🌡 0°C</span>
                        </div>
                    </div>
                </div>

                <!-- ══ 7. SINDORO ══ -->
                <div class="gunung-card reveal">
                    <div class="gunung-card-img">
                        <img src="asset/img/sindoro.jpg" alt="Gunung Sindoro">
                        <div class="gunung-card-badge">☁️ Kembar</div>
                    </div>
                    <div class="gunung-card-body">
                        <div class="gunung-name">Gunung Sindoro</div>
                        <div class="gunung-elev">▲ 3.136 mdpl — Jawa Tengah</div>
                        <p class="gunung-desc">Si kembar Sumbing yang gagah. Puncak datar berupa kawah lebar dengan pemandangan 360° mencakup Sumbing, Merapi, dan lautan awan Wonosobo.</p>
                        <div class="gunung-meta">
                            <span>⏱ 2–3 Hari</span>
                            <span>⛰ Menengah</span>
                            <span>🌡 4°C</span>
                        </div>
                    </div>
                </div>

                <!-- ══ 8. SUMBING ══ -->
                <div class="gunung-card reveal">
                    <div class="gunung-card-img">
                        <img src="asset/img/sumbing.jpg" alt="Gunung Sumbing">
                        <div class="gunung-card-badge">💜 Megah</div>
                    </div>
                    <div class="gunung-card-body">
                        <div class="gunung-name">Gunung Sumbing</div>
                        <div class="gunung-elev">▲ 3.371 mdpl — Jawa Tengah</div>
                        <p class="gunung-desc">Gunung tertinggi ketiga di Jawa. Trek yang terjal dan menantang, jalur Bowongso melewati sabana luas dengan pemandangan bintang yang spektakuler.</p>
                        <div class="gunung-meta">
                            <span>⏱ 2–3 Hari</span>
                            <span>⛰ Sulit</span>
                            <span>🌡 2°C</span>
                        </div>
                    </div>
                </div>

                <!-- ══ 9. ARGOPURO ══ -->
                <div class="gunung-card reveal">
                    <div class="gunung-card-img">
                        <img src="asset/img/argopuro.jpg" alt="Gunung Argopuro">
                        <div class="gunung-card-badge">🦚 Eksotis</div>
                    </div>
                    <div class="gunung-card-body">
                        <div class="gunung-name">Gunung Argopuro</div>
                        <div class="gunung-elev">▲ 3.088 mdpl — Jawa Timur</div>
                        <p class="gunung-desc">Trek terpanjang di Jawa — 6 hingga 8 hari. Hutan hujan tropis, padang edelweis luas, situs pura kuno, dan habitat Merak Hijau Jawa yang langka.</p>
                        <div class="gunung-meta">
                            <span>⏱ 4–5 Hari</span>
                            <span>⛰ Sulit</span>
                            <span>🌡 3°C</span>
                        </div>
                    </div>
                </div>

                <!-- ══ 10. RAUNG ══ -->
                <div class="gunung-card reveal">
                    <div class="gunung-card-img">
                        <img src="asset/img/raung.jfif" alt="Gunung Raung">
                        <div class="gunung-card-badge">🌋 Kaldera</div>
                    </div>
                    <div class="gunung-card-body">
                        <div class="gunung-name">Gunung Raung</div>
                        <div class="gunung-elev">▲ 3.344 mdpl — Jawa Timur</div>
                        <p class="gunung-desc">Puncak paling ekstrem di Jawa dengan kaldera aktif berdiameter 2 km. Pendakian teknis meniti punggungan sempit menuju bibir kawah yang membara.</p>
                        <div class="gunung-meta">
                            <span>⏱ 3–4 Hari</span>
                            <span>⛰ Ekstrem</span>
                            <span>🌡 0°C</span>
                        </div>
                    </div>
                </div>

                <!-- ══ 11. ARJUNO ══ -->
                <div class="gunung-card reveal">
                    <div class="gunung-card-img">
                        <img src="asset/img/arjuno.jpg" alt="Gunung Arjuno">
                        <div class="gunung-card-badge">👑 Megah</div>
                    </div>
                    <div class="gunung-card-body">
                        <div class="gunung-name">Gunung Arjuno</div>
                        <div class="gunung-elev">▲ 3.339 mdpl — Jawa Timur</div>
                        <p class="gunung-desc">Gunung suci penuh legenda Majapahit. Kompleks Arjuno-Welirang menawarkan dua puncak menakjubkan, savana luas, dan padang edelweis di ketinggian. Jalur via Purwosari terdapat situs peninggalan Kerajaan Majapahit dalam jalurnya.</p>
                        <div class="gunung-meta">
                            <span>⏱ 3–4 Hari</span>
                            <span>⛰ Menengah</span>
                            <span>🌡 1°C</span>
                        </div>
                    </div>
                </div>

                <!-- ══ 12. SLAMET ══ -->
                <div class="gunung-card reveal">
                    <div class="gunung-card-img">
                        <img src="asset/img/slamet.jpg" alt="Gunung Slamet">
                        <div class="gunung-card-badge">🔥 Aktif</div>
                    </div>
                    <div class="gunung-card-body">
                        <div class="gunung-name">Gunung Slamet</div>
                        <div class="gunung-elev">▲ 3.428 mdpl — Jawa Tengah</div>
                        <p class="gunung-desc">Gunung tertinggi di Jawa Tengah dan tertinggi kedua di Jawa. Stratovolkano aktif dengan kawah raksasa. Jalur via Guci menembus hutan yang selalu menjadi ikonik.</p>
                        <div class="gunung-meta">
                            <span>⏱ 2–3 Hari</span>
                            <span>⛰ Sulit</span>
                            <span>🌡 0°C</span>
                        </div>
                    </div>
                </div>

            </div><!-- /gunung-grid -->
        </div>
    </section>

    <!-- ═══════════════════════════════════════
         SERVICES
    ════════════════════════════════════════ -->
    <section id="services">
        <div class="container">
            <div class="reveal" style="max-width:540px">
                <div class="section-tag">✦ Yang Kami Tawarkan</div>
                <h2 class="section-title">Layanan Kami</h2>
            </div>
            <div class="services-grid">
                <div class="service-card reveal">
                    <div class="service-icon">🧭</div>
                    <div class="service-title">Pemandu Berpengalaman</div>
                    <p class="service-desc">Semua trip dipandu oleh pemandu bersertifikat BNSP dengan pengalaman lebih dari 5 tahun mendaki gunung-gunung di Jawa. Keselamatan adalah prioritas utama kami.</p>
                </div>
                <div class="service-card reveal">
                    <div class="service-icon">🎒</div>
                    <div class="service-title">Perlengkapan Lengkap</div>
                    <p class="service-desc">Sewa dan paket perlengkapan tersedia: tenda dome, sleeping bag, carrier, matras, dan perlengkapan masak. Anda hanya perlu datang dan semangat!</p>
                </div>
                <div class="service-card reveal">
                    <div class="service-icon">🚐</div>
                    <div class="service-title">Transportasi & Logistik</div>
                    <p class="service-desc">Jemputan dari titik kumpul, antar ke basecamp, konsumsi selama pendakian, dan porter tersedia. Kami urus semua, Anda nikmati perjalanan.</p>
                </div>
                <div class="service-card reveal">
                    <div class="service-icon">🏥</div>
                    <div class="service-title">Keselamatan & P3K</div>
                    <p class="service-desc">Tim kami dilengkapi perlengkapan P3K, oksigen portable, dan jalur komunikasi darurat. Setiap pendaki diasuransikan selama trip berlangsung.</p>
                </div>
                <div class="service-card reveal">
                    <div class="service-icon">📸</div>
                    <div class="service-title">Dokumentasi Trip</div>
                    <p class="service-desc">Abadikan momen berharga di puncak dengan fotografer profesional kami. File foto dan video resolusi tinggi dikirim setelah perjalanan selesai.</p>
                </div>
                <div class="service-card reveal">
                    <div class="service-icon">🌱</div>
                    <div class="service-title">Eco-Responsible</div>
                    <p class="service-desc">Kami menerapkan prinsip Leave No Trace. Setiap pendaki wajib membawa turun sampahnya. Bersama menjaga kelestarian alam pegunungan Jawa.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════════════════════════════
         ABOUT
    ════════════════════════════════════════ -->
    <section id="about">
        <div class="container">
            <div class="about-grid">
                <div class="about-visual reveal">
                    <div class="about-visual-main">
                        <svg viewBox="0 0 400 340" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <linearGradient id="abg" x1="0" y1="0" x2="0" y2="1">
                                    <stop offset="0%" stop-color="#0d1f0d"/>
                                    <stop offset="100%" stop-color="#1a3020"/>
                                </linearGradient>
                                <linearGradient id="sunrise" x1="0" y1="1" x2="0" y2="0">
                                    <stop offset="0%" stop-color="#c87a20"/>
                                    <stop offset="100%" stop-color="#4a2a08" stop-opacity="0"/>
                                </linearGradient>
                            </defs>
                            <rect width="400" height="340" fill="url(#abg)"/>
                            <ellipse cx="200" cy="200" rx="180" ry="80" fill="url(#sunrise)" opacity="0.7"/>
                            <path d="M0,340 L0,200 L80,150 L140,180 L200,120 L260,160 L320,130 L400,150 L400,340Z" fill="#1a3020" opacity="0.8"/>
                            <path d="M50,340 L200,80 L350,340Z" fill="#2d5030"/>
                            <path d="M175,105 L200,80 L225,105 L215,98 L200,87 L185,98Z" fill="rgba(255,255,255,0.8)"/>
                            <path d="M0,300 L20,260 L40,300Z" fill="#1a4020"/>
                            <path d="M30,310 L52,268 L74,310Z" fill="#1a3a20"/>
                            <path d="M330,305 L350,268 L370,305Z" fill="#1a4020"/>
                            <path d="M360,315 L380,272 L400,315Z" fill="#1a3a20"/>
                            <g transform="translate(175, 200)">
                                <circle cx="25" cy="0" r="6" fill="#c8a84b"/>
                                <line x1="25" y1="6" x2="25" y2="26" stroke="#c8a84b" stroke-width="2.5"/>
                                <line x1="25" y1="12" x2="15" y2="22" stroke="#c8a84b" stroke-width="2"/>
                                <line x1="25" y1="12" x2="35" y2="20" stroke="#c8a84b" stroke-width="2"/>
                                <line x1="25" y1="26" x2="15" y2="38" stroke="#c8a84b" stroke-width="2.5"/>
                                <line x1="25" y1="26" x2="32" y2="38" stroke="#c8a84b" stroke-width="2.5"/>
                                <line x1="15" y1="22" x2="8" y2="42" stroke="rgba(200,168,75,0.7)" stroke-width="1.5"/>
                                <rect x="27" y="8" width="10" height="14" rx="2" fill="rgba(200,168,75,0.5)"/>
                            </g>
                            <circle cx="50" cy="30" r="1.5" fill="white" opacity="0.8"/>
                            <circle cx="100" cy="18" r="1" fill="white" opacity="0.7"/>
                            <circle cx="300" cy="25" r="1.2" fill="white" opacity="0.8"/>
                            <circle cx="360" cy="12" r="1" fill="rgba(255,220,100,0.9)"/>
                        </svg>
                    </div>
                    <div class="about-badge">
                        <div class="about-badge-num">8+</div>
                        <div class="about-badge-label">Tahun<br>Pengalaman</div>
                    </div>
                </div>
                <div class="about-content reveal">
                    <div class="section-tag">▲ Tentang Kami</div>
                    <h2 class="section-title">Menemani Setiap<br>Langkah Pendakianmu</h2>
                    <p class="about-text">
                        PuncakJawa adalah agen pendakian gunung yang berdiri sejak 2016, berpusat di Yogyakarta. Kami hadir untuk memfasilitasi para pecinta alam menaklukkan puncak-puncak terbaik Pulau Jawa dengan aman dan berkesan.
                    </p>
                    <p class="about-text">
                        Dipandu oleh tim profesional bersertifikat, kami telah mengantarkan lebih dari 500 pendaki ke puncak impian mereka. Dari pemula hingga pendaki berpengalaman, semua trip kami rancang dengan seksama.
                    </p>
                    <div class="about-features">
                        <div class="feature-item">
                            <div class="feature-dot"></div>
                            <div class="feature-text">Pemandu BNSP Bersertifikat</div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-dot"></div>
                            <div class="feature-text">Asuransi Pendakian Inklusif</div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-dot"></div>
                            <div class="feature-text">Grup Kecil Maks. 12 Orang</div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-dot"></div>
                            <div class="feature-text">Eco-Friendly & Responsible</div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-dot"></div>
                            <div class="feature-text">Briefing & Training Pra-Trip</div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-dot"></div>
                            <div class="feature-text">Support 24 Jam Saat Trip</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════════════════════════════
         CONTACT
    ════════════════════════════════════════ -->
    <section id="contact">
        <div class="container">
            <div class="contact-wrapper">
                <div class="contact-info reveal">
                    <div class="section-tag">📍 Hubungi Kami</div>
                    <h2 class="section-title">Siap Mendaki<br>Bersama Kami?</h2>
                    <p style="color:var(--stone); line-height:1.7; margin-top:1rem; font-size:0.95rem;">
                        Konsultasikan rencana pendakianmu. Tim kami siap membantu memilih gunung yang tepat sesuai kemampuan dan waktu kamu.
                    </p>
                    <div class="contact-details">
                        <div class="contact-item">
                            <div class="contact-icon">📍</div>
                            <div>
                                <div class="contact-item-label">Lokasi</div>
                                <div class="contact-item-value">Jl. Kaliurang Km. 8, Yogyakarta</div>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">📱</div>
                            <div>
                                <div class="contact-item-label">WhatsApp</div>
                                <div class="contact-item-value">+62 822-2943-6365</div>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">✉️</div>
                            <div>
                                <div class="contact-item-label">Email</div>
                                <div class="contact-item-value">hello@puncakjawa.id</div>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">⏰</div>
                            <div>
                                <div class="contact-item-label">Jam Operasional</div>
                                <div class="contact-item-value">Senin–Sabtu, 08.00–20.00 WIB</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="contact-form reveal">
                    <h3 style="font-family:'Playfair Display',serif; font-size:1.4rem; margin-bottom:1.8rem; color:var(--forest);">Kirim Pesan</h3>
                    <form method="POST" action="simpan_pesan.php">
                        <div class="form-group">
                            <label class="form-label" for="name">Nama Lengkap</label>
                            <input type="text" class="form-control" id="name" name="nama" placeholder="Masukkan nama kamu" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="email@kamu.com" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="gunung-pilihan">Gunung yang Diminati</label>
                            <select class="form-control" id="gunung-pilihan" name="gunung">
                                <option value="">— Pilih gunung —</option>
                                <option>Gunung Semeru (3.676 mdpl)</option>
                                <option>Gunung Slamet (3.428 mdpl)</option>
                                <option>Gunung Sumbing (3.371 mdpl)</option>
                                <option>Gunung Raung (3.344 mdpl)</option>
                                <option>Gunung Arjuno (3.339 mdpl)</option>
                                <option>Gunung Lawu (3.265 mdpl)</option>
                                <option>Gunung Merbabu (3.142 mdpl)</option>
                                <option>Gunung Sindoro (3.136 mdpl)</option>
                                <option>Gunung Argopuro (3.088 mdpl)</option>
                                <option>Gunung Merapi (2.930 mdpl)</option>
                                <option>Gunung Prau (2.565 mdpl)</option>
                                <option>Gunung Bromo (2.329 mdpl)</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="message">Pesan</label>
                            <textarea class="form-control" id="message" name="pesan" rows="4" placeholder="Ceritakan rencana atau pertanyaan kamu..."></textarea>
                        </div>
                        <button type="submit" class="form-submit">⛰ Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════════════════════════════
         MODAL TERIMA KASIH (satu, di luar footer)
    ════════════════════════════════════════ -->
    <div id="thankYouModal">
        <div class="modal-box">
            <div class="modal-icon">⛰️</div>
            <h2 class="modal-title">Terima kasih telah menggunakan jasa kami!</h2>
            <p class="modal-text">Pesan kamu sudah kami terima. Tim PuncakJawa akan segera menghubungi kamu.</p>
            <button class="modal-close" onclick="closeModal()">Tutup</button>
        </div>
    </div>

    <!-- ═══════════════════════════════════════
         FOOTER
    ════════════════════════════════════════ -->
    <footer>
        <div class="footer-logo">Puncak<span>Jawa</span></div>
        <p class="footer-text">© 2016 PuncakJawa — Agen Pendakian Gunung Jawa · hello@puncakjawa.id · +62 822-2943-6365</p>
    </footer>

    <!-- ═══════════════════════════════════════
         SCRIPTS
    ════════════════════════════════════════ -->
    <script>
        // ── Navbar scroll effect
        window.addEventListener('scroll', () => {
            document.getElementById('navbar').classList.toggle('scrolled', window.scrollY > 60);
        });

        // ── Hamburger menu
        function toggleMenu() {
            document.getElementById('navLinks').classList.toggle('open');
        }

        // ── Close nav on link click (mobile)
        document.querySelectorAll('.nav-links a').forEach(a => {
            a.addEventListener('click', () => {
                document.getElementById('navLinks').classList.remove('open');
            });
        });

        // ── Reveal on scroll
        const revealEls = document.querySelectorAll('.reveal');
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry, i) => {
                if (entry.isIntersecting) {
                    setTimeout(() => entry.target.classList.add('visible'), i * 80);
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.12 });
        revealEls.forEach(el => observer.observe(el));

        // ── Modal helpers
        function openModal() {
            document.getElementById('thankYouModal').classList.add('active');
        }
        function closeModal() {
            document.getElementById('thankYouModal').classList.remove('active');
        }

        // ── Tampilkan modal setelah redirect dari simpan_pesan.php (opsional)
        // Contoh: jika URL mengandung ?success=1
        const params = new URLSearchParams(window.location.search);
        if (params.get('success') === '1') {
            openModal();
            // Hapus query string dari URL tanpa reload
            history.replaceState({}, '', window.location.pathname);
        }
    </script>

</body>
</html>