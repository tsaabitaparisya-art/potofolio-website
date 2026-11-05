<?php
declare(strict_types=1);
require_once __DIR__ . '/includes/security.php';

$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'] ?? 'tsaabitaportfolio.rf.gd';
$siteUrl = ($host === 'localhost' || str_starts_with($host, '127.0.0.1'))
    ? 'https://tsaabitaportfolio.rf.gd'
    : $protocol . '://' . $host;
?>
<!DOCTYPE html>
<html lang="id" prefix="og: https://ogp.me/ns#">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tsaabita Parisya Mauladi Aziz | Portfolio</title>
    <meta name="description" content="Portfolio resmi Tsaabita Parisya Mauladi Aziz - Mahasiswa D4 Rekayasa Perangkat Lunak, Fullstack Web Developer, dan UI/UX Designer.">
    <meta name="keywords" content="Portfolio, PHP Developer, Laravel, MySQL, Web Developer, UI/UX Designer, Tsaabita Parisya">
    <meta name="author" content="Tsaabita Parisya Mauladi Aziz">
    <meta name="theme-color" content="#090d16">

    <!-- Favicon & Touch Icons -->
    <link rel="icon" type="image/png" sizes="64x64" href="assets/img/favicon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="apple-touch-icon" href="assets/img/favicon.png">

    <!-- Open Graph (WhatsApp, Telegram, Facebook, LinkedIn, Discord) -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Tsaabita Portfolio">
    <meta property="og:locale" content="id_ID">
    <meta property="og:url" content="<?php echo htmlspecialchars($siteUrl, ENT_QUOTES, 'UTF-8'); ?>/">
    <meta property="og:title" content="Tsaabita Parisya Mauladi Aziz | Portfolio">
    <meta property="og:description" content="Portfolio resmi Tsaabita Parisya Mauladi Aziz - Software Engineering Student, Web Developer, & UI/UX Designer. Jelajahi proyek web dan sertifikasi.">
    <meta property="og:image" content="<?php echo htmlspecialchars($siteUrl, ENT_QUOTES, 'UTF-8'); ?>/assets/img/og-preview.jpg">
    <meta property="og:image:secure_url" content="<?php echo htmlspecialchars($siteUrl, ENT_QUOTES, 'UTF-8'); ?>/assets/img/og-preview.jpg">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="Preview Website Portofolio Tsaabita Parisya Mauladi Aziz">

    <!-- Twitter / X Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="<?php echo htmlspecialchars($siteUrl, ENT_QUOTES, 'UTF-8'); ?>/">
    <meta name="twitter:title" content="Tsaabita Parisya Mauladi Aziz | Portfolio">
    <meta name="twitter:description" content="Portfolio resmi Tsaabita Parisya Mauladi Aziz - Software Engineering Student, Web Developer, & UI/UX Designer. Jelajahi proyek web dan sertifikasi.">
    <meta name="twitter:image" content="<?php echo htmlspecialchars($siteUrl, ENT_QUOTES, 'UTF-8'); ?>/assets/img/og-preview.jpg">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Fonts: Inter, Space Grotesk, JetBrains Mono -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=JetBrains+Mono:wght@400;500&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome 6.7.2 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <!-- SweetAlert2 CSS (allows strict CSP without inline styles) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- Subtle Ambient Lighting Mesh -->
    <div class="ambient-glow" aria-hidden="true"></div>

    <!-- FLOATING ISLAND NAVBAR -->
    <header class="custom-navbar">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-island">
                <a class="brand-text" href="#home">
                    TSAABITA<span class="brand-dot">.</span>
                </a>

                <button class="navbar-toggler-custom d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa-solid fa-bars-staggered"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarMenu">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link nav-link-custom active" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-custom" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-custom" href="#skills">Skills</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-custom" href="#projects">Projects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-custom" href="#certificates">Certificates</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-custom" href="#contact">Contact</a>
                        </li>
                    </ul>

                    <div class="nav-actions">
                        <button id="themeToggle" class="theme-toggle-btn" type="button" aria-label="Toggle dark and light mode">
                            <i class="fa-solid fa-moon"></i>
                        </button>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <!-- HERO SECTION -->
    <section id="home" class="hero-section">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-7 order-2 order-lg-1 hero-animate-1">

                    <h1 class="hero-title">
                        Hi, I'm <br>
                        <span class="name-highlight">Tsaabita Parisya</span><br>
                        Mauladi Aziz
                    </h1>

                    <div class="hero-role-badge-row">
                        <div class="hero-role-badge">
                            <i class="fa-solid fa-terminal me-2"></i>
                            <span class="dynamic-role">Software Engineering Student</span>
                        </div>
                    </div>

                    <p class="hero-description">
                        Mahasiswa Rekayasa Perangkat Lunak yang terus belajar dan berkembang dalam pengembangan web, desain antarmuka, dan teknologi digital.
                    </p>

                    <div class="hero-cta-group">
                        <a href="#projects" class="btn-modern-primary">
                            <span>View Projects</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                        <a href="assets/certificates/CV_tsaabita.pdf" target="_blank" class="btn-modern-secondary">
                            <i class="fa-solid fa-file-arrow-down"></i>
                            <span>Download CV</span>
                        </a>
                    </div>
                </div>

                <div class="col-lg-5 order-1 order-lg-2 hero-animate-profile">
                    <div class="profile-showcase">
                        <div class="profile-frame">
                            <img src="assets/img/profile.jpg" alt="Tsaabita Parisya Mauladi Aziz" class="profile-img-inner">
                            <div class="profile-floating-badge">
                                <div class="floating-icon">
                                    <i class="fa-solid fa-code"></i>
                                </div>
                                <div>
                                    <div class="floating-text-sm">Specialization</div>
                                    <div class="floating-text-lg">Web & UI/UX</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUT SECTION (BENTO GRID) -->
    <section id="about" class="section-padding">
        <div class="container">
            <div class="text-center reveal-fade-up">
                <div class="section-badge">
                    <i class="fa-regular fa-user"></i>
                    <span>About Me</span>
                </div>
                <h2 class="section-title">Who Am I?</h2>
                <p class="section-subtitle text-center">
                    Dedikasi dalam rekayasa perangkat lunak, eksplorasi teknologi web modern, dan pengalaman praktik berkelanjutan.
                </p>
            </div>

            <div class="row g-4">
                <!-- Bento Story Card -->
                <div class="col-lg-7 reveal-fade-up">
                    <div class="bento-card bento-about-story">
                        <div>
                            <h3 class="h4 mb-3 fw-bold">Eksplorasi & Dedikasi Pengembangan Web</h3>
                            <p class="mb-3">
                                Saya adalah mahasiswa D4 Rekayasa Perangkat Lunak yang tertarik pada pengembangan website, desain antarmuka pengguna, dan pengelolaan basis data.
                            </p>
                            <p class="mb-0">
                                Saat ini saya sedang mempelajari serta mengembangkan kemampuan menggunakan PHP Native, Laravel, dan MySQL melalui berbagai proyek akademik maupun pribadi.
                            </p>
                        </div>
                        <div class="about-quote">
                            "Saya percaya bahwa proses belajar dan pengalaman praktik merupakan langkah penting untuk terus berkembang di dunia teknologi."
                        </div>
                    </div>
                </div>

                <!-- Bento Personal Info Card -->
                <div class="col-lg-5 reveal-fade-up">
                    <div class="bento-card">
                        <h4 class="h5 fw-bold mb-4 d-flex align-items-center gap-2">
                            <i class="fa-solid fa-id-card text-primary"></i>
                            <span>Personal Info</span>
                        </h4>

                        <div class="spec-list">
                            <div class="spec-item">
                                <div class="spec-icon">
                                    <i class="fa-solid fa-user"></i>
                                </div>
                                <div>
                                    <div class="spec-label">Nama Lengkap</div>
                                    <div class="spec-value">Tsaabita Parisya Mauladi Aziz</div>
                                </div>
                            </div>

                            <div class="spec-item">
                                <div class="spec-icon">
                                    <i class="fa-solid fa-cake-candles"></i>
                                </div>
                                <div>
                                    <div class="spec-label">Tanggal Lahir</div>
                                    <div class="spec-value">03 Mei 2006</div>
                                </div>
                            </div>

                            <div class="spec-item">
                                <div class="spec-icon">
                                    <i class="fa-solid fa-graduation-cap"></i>
                                </div>
                                <div>
                                    <div class="spec-label">Pendidikan</div>
                                    <div class="spec-value">D4 Rekayasa Perangkat Lunak</div>
                                </div>
                            </div>

                            <div class="spec-item">
                                <div class="spec-icon">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div>
                                    <div class="spec-label">Alamat</div>
                                    <div class="spec-value">Jl. Raya Pulogebang Gg. Penjahit</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SKILLS SECTION (CATEGORIZED TECH BENTO) -->
    <section id="skills" class="section-padding">
        <div class="container">
            <div class="text-center reveal-fade-up">
                <div class="section-badge">
                    <i class="fa-solid fa-layer-group"></i>
                    <span>Skills & Toolkit</span>
                </div>
                <h2 class="section-title">Tools & Teknologi</h2>
                <p class="section-subtitle text-center">
                    Teknologi dan tools yang saya gunakan dalam proses belajar dan pengembangan berbagai proyek.
                </p>
            </div>

            <div class="row g-4">
                <!-- Group 1: Backend & Database -->
                <div class="col-lg-6 reveal-fade-up">
                    <div class="bento-card h-100">
                        <div class="tech-category-title">
                            <i class="fa-solid fa-server"></i>
                            <span>Backend & Database</span>
                        </div>
                        <div class="tech-grid">
                            <!-- PHP -->
                            <div class="tech-item">
                                <div class="tech-item-header">
                                    <div class="tech-icon-wrap tech-icon-php">
                                        <i class="fa-brands fa-php"></i>
                                    </div>
                                    <div>
                                        <div class="tech-item-title">PHP</div>
                                        <div class="tech-badge-sub">Backend Core</div>
                                    </div>
                                </div>
                                <p class="tech-desc">
                                    Pengembangan website dinamis menggunakan PHP Native.
                                </p>
                            </div>

                            <!-- Laravel -->
                            <div class="tech-item">
                                <div class="tech-item-header">
                                    <div class="tech-icon-wrap tech-icon-laravel">
                                        <i class="fa-brands fa-laravel"></i>
                                    </div>
                                    <div>
                                        <div class="tech-item-title">Laravel</div>
                                        <div class="tech-badge-sub">PHP Framework</div>
                                    </div>
                                </div>
                                <p class="tech-desc">
                                    Framework PHP untuk membangun aplikasi web modern.
                                </p>
                            </div>

                            <!-- MySQL -->
                            <div class="tech-item">
                                <div class="tech-item-header">
                                    <div class="tech-icon-wrap tech-icon-mysql">
                                        <i class="fa-solid fa-database"></i>
                                    </div>
                                    <div>
                                        <div class="tech-item-title">MySQL</div>
                                        <div class="tech-badge-sub">RDBMS</div>
                                    </div>
                                </div>
                                <p class="tech-desc">
                                    Mengelola dan merancang basis data relasional.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Group 2: Frontend & UI Tools -->
                <div class="col-lg-6 reveal-fade-up">
                    <div class="bento-card h-100">
                        <div class="tech-category-title">
                            <i class="fa-solid fa-code"></i>
                            <span>Frontend & Architecture</span>
                        </div>
                        <div class="tech-grid">
                            <!-- HTML -->
                            <div class="tech-item">
                                <div class="tech-item-header">
                                    <div class="tech-icon-wrap tech-icon-html">
                                        <i class="fa-brands fa-html5"></i>
                                    </div>
                                    <div>
                                        <div class="tech-item-title">HTML</div>
                                        <div class="tech-badge-sub">Markup Standard</div>
                                    </div>
                                </div>
                                <p class="tech-desc">
                                    Struktur dasar website yang semantik dan responsif.
                                </p>
                            </div>

                            <!-- CSS -->
                            <div class="tech-item">
                                <div class="tech-item-header">
                                    <div class="tech-icon-wrap tech-icon-css">
                                        <i class="fa-brands fa-css3-alt"></i>
                                    </div>
                                    <div>
                                        <div class="tech-item-title">CSS</div>
                                        <div class="tech-badge-sub">Styling & Motion</div>
                                    </div>
                                </div>
                                <p class="tech-desc">
                                    Styling modern, responsive design, dan animasi.
                                </p>
                            </div>

                            <!-- JavaScript -->
                            <div class="tech-item">
                                <div class="tech-item-header">
                                    <div class="tech-icon-wrap tech-icon-js">
                                        <i class="fa-brands fa-js"></i>
                                    </div>
                                    <div>
                                        <div class="tech-item-title">JavaScript</div>
                                        <div class="tech-badge-sub">Interactive Logic</div>
                                    </div>
                                </div>
                                <p class="tech-desc">
                                    Membuat website lebih interaktif dan dinamis.
                                </p>
                            </div>

                            <!-- Figma -->
                            <div class="tech-item">
                                <div class="tech-item-header">
                                    <div class="tech-icon-wrap tech-icon-figma">
                                        <i class="fa-brands fa-figma"></i>
                                    </div>
                                    <div>
                                        <div class="tech-item-title">Figma</div>
                                        <div class="tech-badge-sub">UI/UX Prototype</div>
                                    </div>
                                </div>
                                <p class="tech-desc">
                                    Mendesain UI/UX dan membuat prototype aplikasi.
                                </p>
                            </div>

                            <!-- Draw.io -->
                            <div class="tech-item">
                                <div class="tech-item-header">
                                    <div class="tech-icon-wrap tech-icon-drawio">
                                        <i class="fa-solid fa-diagram-project"></i>
                                    </div>
                                    <div>
                                        <div class="tech-item-title">Draw.io</div>
                                        <div class="tech-badge-sub">System Diagrams</div>
                                    </div>
                                </div>
                                <p class="tech-desc">
                                    Membuat ERD, UML, dan diagram sistem.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PROJECTS SECTION (FEATURED CASE STUDIES) -->
    <section id="projects" class="section-padding">
        <div class="container">
            <div class="text-center reveal-fade-up">
                <div class="section-badge">
                    <i class="fa-solid fa-folder-open"></i>
                    <span>Showcase</span>
                </div>
                <h2 class="section-title">Featured Projects</h2>
                <p class="section-subtitle text-center">
                    Aplikasi web fungsional yang dirancang untuk menjawab kebutuhan nyata operasional dan manajemen data.
                </p>
            </div>

            <div class="row g-4 mb-5">

                <!-- Project 1: Kinara Pharma -->
                <div class="col-lg-6 reveal-fade-up">
                    <div class="project-card-modern">
                        <div class="browser-header-mockup">
                            <div class="browser-dots">
                                <span class="browser-dot dot-red"></span>
                                <span class="browser-dot dot-yellow"></span>
                                <span class="browser-dot dot-green"></span>
                            </div>
                            <div class="browser-url-bar">kelompok9.my.id</div>
                            <i class="fa-solid fa-arrow-up-right-from-square text-muted mockup-ext-icon"></i>
                        </div>

                        <div class="project-preview-wrap">
                            <img src="assets/img/project2.jpg" alt="Kinara Pharma" class="project-preview-img">
                        </div>

                        <div class="project-body-modern">
                            <div>
                                <h3 class="project-heading">Kinara Pharma</h3>
                                <p class="project-summary">
                                    Website manajemen dan penjualan obat apotik
                                </p>
                                <div class="project-tags-wrap">
                                    <span class="project-tag">Web Application</span>
                                    <span class="project-tag">Point of Sale</span>
                                    <span class="project-tag">Pharmacy</span>
                                    <span class="project-tag">Database</span>
                                </div>
                            </div>

                            <a href="https://kelompok9.my.id" target="_blank" rel="noopener noreferrer" class="project-btn-live">
                                <span>Kunjungi Website Proyek</span>
                                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 reveal-fade-up">
                    <div class="project-card-modern">
                        <div class="browser-header-mockup">
                            <div class="browser-dots">
                                <span class="browser-dot dot-red"></span>
                                <span class="browser-dot dot-yellow"></span>
                                <span class="browser-dot dot-green"></span>
                            </div>
                            <div class="browser-url-bar">tsaabitaportfolio.rf.gd</div>
                            <i class="fa-solid fa-arrow-up-right-from-square text-muted mockup-ext-icon"></i>
                        </div>

                        <div class="project-preview-wrap">
                            <img src="assets/img/web-tsaabita.png" alt="Mobile Kinara Pharma" class="project-preview-img">
                        </div>

                        <div class="project-body-modern">
                            <div>
                                <h3 class="project-heading">Personal Portofolio </h3>
                                <p class="project-summary">
                                    Website Portofolio Tsaabita Parisya Mauladi Aziz
                                </p>
                                <div class="project-tags-wrap">
                                    <span class="project-tag">Web Application</span>
                                    <span class="project-tag">Portofolio</span>
                                    <span class="project-tag">Tsaabita Parisya</span>
                                </div>
                            </div>

                            <a href="https://tsaabitaportfolio.rf.gd/" target="_blank" rel="noopener noreferrer" class="project-btn-live">
                                <span>Kunjungi Website </span>
                                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                            </a>
                        </div>
                    </div>
                </div>

                                <!-- Project 1: Healventory -->
                <div class="col-lg-6 reveal-fade-up">
                    <div class="project-card-modern">
                        <div class="browser-header-mockup">
                            <div class="browser-dots">
                                <span class="browser-dot dot-red"></span>
                                <span class="browser-dot dot-yellow"></span>
                                <span class="browser-dot dot-green"></span>
                            </div>
                            <div class="browser-url-bar">healventory.gt.tc/public</div>
                            <i class="fa-solid fa-arrow-up-right-from-square text-muted mockup-ext-icon"></i>
                        </div>

                        <div class="project-preview-wrap">
                            <img src="assets/img/project1.png" alt="Healventory" class="project-preview-img">
                        </div>

                        <div class="project-body-modern">
                            <div>
                                <h3 class="project-heading">Healventory</h3>
                                <p class="project-summary">
                                    Sistem Manajemen data dan stok obat di apotik
                                </p>
                                <div class="project-tags-wrap">
                                    <span class="project-tag">PHP Native</span>
                                    <span class="project-tag">MySQL</span>
                                    <span class="project-tag">Stock Management</span>
                                    <span class="project-tag">Bootstrap</span>
                                </div>
                            </div>

                            <a href="https://healventory.gt.tc/public/" target="_blank" rel="noopener noreferrer" class="project-btn-live">
                                <span>Kunjungi Website Proyek</span>
                                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 reveal-fade-up">
                    <div class="project-card-modern">
                        <div class="browser-header-mockup">
                            <div class="browser-dots">
                                <span class="browser-dot dot-red"></span>
                                <span class="browser-dot dot-yellow"></span>
                                <span class="browser-dot dot-green"></span>
                            </div>
                            <i class="fa-solid fa-arrow-up-right-from-square text-muted mockup-ext-icon"></i>
                        </div>

                        <div class="project-preview-wrap">
                            <img src="assets/img/mobileKinara.png" alt="Mobile Kinara Pharma" class="project-preview-img">
                        </div>

                        <div class="project-body-modern">
                            <div>
                                <h3 class="project-heading">Mobile POS App</h3>
                                <p class="project-summary">
                                    Aplikasi Mobile yang terintegrasi dengan wesite Kinara Pharma
                                </p>
                                <div class="project-tags-wrap">
                                    <span class="project-tag">Mobile Application</span>
                                    <span class="project-tag">Point of Sale</span>
                                    <span class="project-tag">Midtrans</span>
                                    <span class="project-tag">Flutter</span>
                                </div>
                            </div>

                            <a href="https://drive.google.com/file/d/12_qNSaipRhD9E3FkpO_OFRGV-1KT8Jov/view?usp=sharing" target="_blank" rel="noopener noreferrer" class="project-btn-live">
                                <span>Kunjungi Aplikasi</span>
                                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Ecosystem Quick-links (GitHub & Figma) -->
            <div class="row g-4">
                <div class="col-md-6 reveal-fade-up">
                    <a href="https://github.com/tsaabitaparisya-art" target="_blank" rel="noopener noreferrer" class="ecosystem-card">
                        <div class="ecosystem-icon ecosystem-icon-github">
                            <i class="fa-brands fa-github"></i>
                        </div>
                        <div>
                            <div class="ecosystem-title">
                                <span>GitHub Repository</span>
                                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                            </div>
                            <p class="ecosystem-desc">
                                Lihat source code project dan riwayat repositori yang telah saya bangun.
                            </p>
                        </div>
                    </a>
                </div>

                <div class="col-md-6 reveal-fade-up">
                    <a href="https://www.figma.com/files/team/1415637872250513289/recents-and-sharing?fuid=1415637870082017477" target="_blank" rel="noopener noreferrer" class="ecosystem-card">
                        <div class="ecosystem-icon ecosystem-icon-figma">
                            <i class="fa-brands fa-figma"></i>
                        </div>
                        <div>
                            <div class="ecosystem-title">
                                <span>UI / UX Design Workspace</span>
                                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                            </div>
                            <p class="ecosystem-desc">
                                Jelajahi desain antarmuka, wireframe, dan prototype interaktif yang saya rancang di Figma.
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- CERTIFICATES SECTION -->
    <section id="certificates" class="section-padding">
        <div class="container">
            <div class="text-center reveal-fade-up">
                <div class="section-badge">
                    <i class="fa-solid fa-award"></i>
                    <span>Credentials</span>
                </div>
                <h2 class="section-title">My Certificates</h2>
                <p class="section-subtitle text-center">
                    Beberapa sertifikat yang saya peroleh selama proses belajar dan pengembangan kemampuan di bidang teknologi.
                </p>
            </div>

            <div class="row g-4">
                <!-- Certificate 1 -->
                <div class="col-12 reveal-fade-up">
                    <div class="cert-card-modern">
                        <div class="cert-thumbnail-wrap">
                            <img src="assets/img/certificate-1.jpg" alt="Peserta Lomba UI/UX Design" class="cert-thumbnail">
                        </div>
                        <div class="cert-details">
                            <div class="cert-badge-org">
                                <i class="fa-solid fa-trophy"></i>
                                <span>Kompetisi Desain</span>
                            </div>
                            <h3 class="cert-title">Peserta Lomba UI/UX Design</h3>
                            <p class="cert-issuer">Techomfest, Politeknik Negeri Semarang</p>
                            <a href="assets/certificates/certificate1.pdf" target="_blank" class="cert-action-btn">
                                <i class="fa-solid fa-file-pdf"></i>
                                <span>View Certificate</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Certificate 2 -->
                <div class="col-12 reveal-fade-up">
                    <div class="cert-card-modern">
                        <div class="cert-thumbnail-wrap">
                            <img src="assets/img/certificate-2.jpg" alt="Peserta Lomba UI/UX Design" class="cert-thumbnail">
                        </div>
                        <div class="cert-details">
                            <div class="cert-badge-org">
                                <i class="fa-solid fa-trophy"></i>
                                <span>Kompetisi Desain</span>
                            </div>
                            <h3 class="cert-title">Peserta Lomba UI/UX Design</h3>
                            <p class="cert-issuer">TechsSprint, CodeLab Indonesia</p>
                            <a href="assets/certificates/certificate2.pdf" target="_blank" class="cert-action-btn">
                                <i class="fa-solid fa-file-pdf"></i>
                                <span>View Certificate</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Certificate 3 -->
                <div class="col-12 reveal-fade-up">
                    <div class="cert-card-modern">
                        <div class="cert-thumbnail-wrap">
                            <img src="assets/img/certificate-3.jpg" alt="Pelatihan Red Hat System Administration" class="cert-thumbnail">
                        </div>
                        <div class="cert-details">
                            <div class="cert-badge-org">
                                <i class="fa-brands fa-redhat"></i>
                                <span>Professional Training</span>
                            </div>
                            <h3 class="cert-title">Pelatihan Red Hat System Administration I (RH124-RHA)-ver.10</h3>
                            <p class="cert-issuer">Red Hat</p>
                            <a href="assets/certificates/certificate3.pdf" target="_blank" class="cert-action-btn">
                                <i class="fa-solid fa-file-pdf"></i>
                                <span>View Certificate</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT SECTION (SPLIT BENTO) -->
    <section id="contact" class="section-padding">
        <div class="container">
            <div class="text-center reveal-fade-up">
                <div class="section-badge">
                    <i class="fa-regular fa-paper-plane"></i>
                    <span>Get in Touch</span>
                </div>
                <h2 class="section-title">Let's Work Together</h2>
                <p class="section-subtitle text-center">
                    Terbuka untuk diskusi proyek, kolaborasi pengembangan aplikasi, maupun peluang magang.
                </p>
            </div>

            <div class="row g-4 align-items-stretch">
                <!-- Info Column -->
                <div class="col-lg-5 reveal-fade-up">
                    <div class="bento-card contact-info-card">
                        <div>
                            <h3 class="h4 fw-bold mb-3">Kontak & Kolaborasi</h3>
                            <p class="mb-4">
                                Jangan ragu untuk menghubungi saya melalui formulir di samping atau melalui kanal informasi di bawah ini.
                            </p>

                            <div class="contact-channels">
                                <a href="mailto:tsaabitaparisya0306@gmail.com" class="contact-channel-item">
                                    <div class="channel-icon">
                                        <i class="fa-regular fa-envelope"></i>
                                    </div>
                                    <div>
                                        <div class="channel-label">Email Langsung</div>
                                        <div class="channel-value">tsaabitaparisya0306@gmail.com</div>
                                    </div>
                                </a>

                                <div class="contact-channel-item">
                                    <div class="channel-icon">
                                        <i class="fa-solid fa-location-dot"></i>
                                    </div>
                                    <div>
                                        <div class="channel-label">Lokasi Domisili</div>
                                        <div class="channel-value">Pulogebang, Jakarta Timur</div>
                                    </div>
                                </div>

                                <div class="contact-channel-item">
                                    <div class="channel-icon">
                                        <i class="fa-solid fa-clock"></i>
                                    </div>
                                    <div>
                                        <div class="channel-label">Status Respon</div>
                                        <div class="channel-value">Aktif & Siap Berkolaborasi</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4 pt-3 border-top border-secondary border-opacity-10">
                            <span class="text-subtle small">
                                <i class="fa-solid fa-shield-halved me-1 text-primary"></i>
                                Pesan Anda akan dikirimkan secara aman langsung ke email pribadi saya.
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Form Column -->
                <div class="col-lg-7 reveal-fade-up">
                    <div class="bento-card">
                        <form action="send-email.php" method="POST">
                            <!-- CSRF Security Token -->
                            <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($_SESSION['csrf_token'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
                            
                            <!-- Honeypot Anti-Bot Field (Hidden from human visitors) -->
                            <div class="anti-bot-trap" aria-hidden="true">
                                <input type="text" name="website_hp" tabindex="-1" autocomplete="off">
                            </div>

                            <div class="form-group-modern">
                                <label for="name" class="form-label-modern">Nama Lengkap</label>
                                <input type="text" id="name" name="name" class="input-modern" placeholder="Masukkan nama Anda" required>
                            </div>

                            <div class="form-group-modern">
                                <label for="email" class="form-label-modern">Alamat Email</label>
                                <input type="email" id="email" name="email" class="input-modern" placeholder="email@contoh.com" required>
                            </div>

                            <div class="form-group-modern">
                                <label for="subject" class="form-label-modern">Subjek</label>
                                <input type="text" id="subject" name="subject" class="input-modern" placeholder="Tujuan pesan atau topik diskusi" required>
                            </div>

                            <div class="form-group-modern">
                                <label for="message" class="form-label-modern">Pesan</label>
                                <textarea id="message" name="message" rows="4" class="input-modern" placeholder="Tuliskan pesan atau detail kebutuhan Anda..." required></textarea>
                            </div>

                            <button type="submit" class="btn-form-submit">
                                <span>Kirim Pesan</span>
                                <i class="fa-solid fa-paper-plane"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MODERN CLEAN FOOTER -->
    <footer class="modern-footer">
        <div class="container">
            <div class="footer-content">
                <p class="footer-copy">
                    &copy; <?php echo date('Y'); ?> Tsaabita Parisya Mauladi Aziz. All rights reserved.
                </p>

                <div class="footer-social-links">
                    <a href="https://github.com/tsaabitaparisya-art" target="_blank" rel="noopener noreferrer" class="footer-icon-link" aria-label="GitHub">
                        <i class="fa-brands fa-github"></i>
                    </a>
                    <a href="https://www.figma.com/files/team/1415637872250513289/recents-and-sharing?fuid=1415637870082017477" target="_blank" rel="noopener noreferrer" class="footer-icon-link" aria-label="Figma">
                        <i class="fa-brands fa-figma"></i>
                    </a>
                    <a href="mailto:tsaabitaparisya0306@gmail.com" class="footer-icon-link" aria-label="Email">
                        <i class="fa-regular fa-envelope"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <!-- SCROLL TO TOP FLOATING BUTTON -->
    <button id="scrollTopBtn" class="scroll-top-btn" type="button" aria-label="Scroll to top">
        <i class="fa-solid fa-arrow-up"></i>
    </button>

    <!-- SCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
