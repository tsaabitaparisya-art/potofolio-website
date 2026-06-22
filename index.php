<?php

declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0">
    <meta
        name="description"
        content="Portfolio Tsaabita - Software Engineering Student">
    <meta
        name="keywords"
        content="Portfolio, PHP Developer, Web Developer">
    <meta
        name="author"
        content="Tsaabita">
    <title>
        Tsaabita | Portfolio
    </title>
    <!-- Bootstrap -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">
    <!-- Font -->
    <link rel="preconnect"
        href="https://fonts.googleapis.com">
    <link rel="preconnect"
        href="https://fonts.gstatic.com"
        crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Space+Grotesk:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <!-- Font Awesome -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- CURSOR -->
    <div class="cursor-dot"></div>
    <div class="cursor-outline"></div>
    <!-- AURORA -->
    <div class="aurora aurora-1"></div>
    <div class="aurora aurora-2"></div>
    <!-- NAVBAR -->
    <nav
        class="navbar navbar-expand-lg fixed-top custom-navbar">
        <div class="container">
            <div
                class="collapse navbar-collapse"
                id="navbarMenu">
                <ul
                    class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#skills">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#projects">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
                <!-- DARK MODE -->
                <button
                    id="themeToggle"
                    class="theme-btn">
                    <i class="fa-solid fa-moon"></i>
                </button>
            </div>
        </div>
    </nav>
    <!-- HERO -->
    <section
        id="home"
        class="hero">
        <div class="container">
            <div
                class="row align-items-center">
                <div class="col-lg-7">
                    <h1 class="hero-title">Tsaabita
                        <br>Parisya Mauladi Aziz
                    </h1>
                    <h2 class="hero-role">
                        <span
                            class="dynamic-role">
                        </span>
                    </h2>
                    <p class="hero-description">
                        Mahasiswa Rekayasa Perangkat Lunak yang terus belajar dan berkembang dalam pengembangan web, desain antarmuka, dan teknologi digital.
                    </p>
                    <div
                        class="hero-buttons">
                        <a href="#projects" class="btn-primary-custom">View Projects</a>
                        <a
                            href="#"
                            class="btn-secondary-custom">Download CV</a>
                    </div>
                </div>
                <div
                    class="col-lg-5">
                    <div
                        class="profile-container">
                        <img
                            src="assets/img/profile.jpg"
                            alt="Profile"
                            class="profile-image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ABOUT -->
    <section
        id="about"
        class="section">
        <div class="container">
            <div class="section-header">
                <span>ABOUT ME</span>
                <h2>Who Am I?</h2>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="glass-card">
                        <p>
                            Saya adalah mahasiswa D4 Rekayasa Perangkat Lunak yang tertarik pada
                            pengembangan website, desain antarmuka pengguna, dan pengelolaan basis data.
                            Saat ini saya sedang mempelajari serta mengembangkan kemampuan menggunakan
                            PHP Native, Laravel, dan MySQL melalui berbagai proyek akademik maupun pribadi.
                            Saya percaya bahwa proses belajar dan pengalaman praktik merupakan langkah penting
                            untuk terus berkembang di dunia teknologi.
                        </p>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="glass-card">
                        <h4>Personal Info</h4>
                        <hr>
                        <p>
                            Nama:
                            Tsaabita Parisya Mauladi Aziz
                        </p>
                        <p> Tanggal Lahir : 03 Mei 2026</p>
                        <p>Pendidikan: D4 Rekayasa Perangkat Lunak</p>
                        <p>Alamat : Jl. Raya Pulogebang Gg. Penjahit No 23A</p>
                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- SKILLS -->

    <section
        id="skills"
        class="section">

        <div class="container">

            <div
                class="section-header">

                <span>
                    SKILLS
                </span>

                <h2>
                    Tools & Teknologi
                </h2>
                <p class="section-description">
                    Teknologi dan tools yang saya gunakan dalam proses belajar
                    dan pengembangan berbagai proyek.
                </p>
            </div>

            <div class="row g-4">

                <!-- HTML -->
                <div class="col-lg-3 col-md-6">
                    <div class="skill-card">
                        <i class="fa-brands fa-html5"></i>
                        <h4>HTML</h4>
                        <p>
                            Struktur dasar website yang semantik dan responsif.
                        </p>
                    </div>
                </div>

                <!-- CSS -->
                <div class="col-lg-3 col-md-6">
                    <div class="skill-card">
                        <i class="fa-brands fa-css3-alt"></i>
                        <h4>CSS</h4>
                        <p>
                            Styling modern, responsive design, dan animasi.
                        </p>
                    </div>
                </div>

                <!-- JavaScript -->
                <div class="col-lg-3 col-md-6">
                    <div class="skill-card">
                        <i class="fa-brands fa-js"></i>
                        <h4>JavaScript</h4>
                        <p>
                            Membuat website lebih interaktif dan dinamis.
                        </p>
                    </div>
                </div>

                <!-- PHP -->
                <div class="col-lg-3 col-md-6">
                    <div class="skill-card">
                        <i class="fa-brands fa-php"></i>
                        <h4>PHP</h4>
                        <p>
                            Pengembangan website dinamis menggunakan PHP Native.
                        </p>
                    </div>
                </div>

                <!-- Laravel -->
                <div class="col-lg-3 col-md-6">
                    <div class="skill-card">
                        <i class="fa-brands fa-laravel"></i>
                        <h4>Laravel</h4>
                        <p>
                            Framework PHP untuk membangun aplikasi web modern.
                        </p>
                    </div>
                </div>

                <!-- MySQL -->
                <div class="col-lg-3 col-md-6">
                    <div class="skill-card">
                        <i class="fa-solid fa-database"></i>
                        <h4>MySQL</h4>
                        <p>
                            Mengelola dan merancang basis data relasional.
                        </p>
                    </div>
                </div>

                <!-- Figma -->
                <div class="col-lg-3 col-md-6">
                    <div class="skill-card">
                        <i class="fa-brands fa-figma"></i>
                        <h4>Figma</h4>
                        <p>
                            Mendesain UI/UX dan membuat prototype aplikasi.
                        </p>
                    </div>
                </div>

                <!-- Draw.io -->
                <div class="col-lg-3 col-md-6">
                    <div class="skill-card">
                        <i class="fa-solid fa-diagram-project"></i>
                        <h4>Draw.io</h4>
                        <p>
                            Membuat ERD, UML, dan diagram sistem.
                        </p>
                    </div>
                </div>

            </div>

        </div>

    </section>


    <!-- PROJECTS -->

    <section
        id="projects"
        class="section">

        <div class="container">

            <div
                class="section-header">

                <span>
                    PROJECTS
                </span>

                <h2>
                    Featured Projects
                </h2>

            </div>

            <div
                class="row g-4">

                <div class="col-lg-6">

                    <div
                        class="project-card">
                        <a href="https://healventory.gt.tc/public/"
                            target="https://healventory.gt.tc/public/"><img
                                src="assets/img/project1.jpg"
                                alt="Project" "></a>


                        <div
                            class=" project-content">

                            <h3>
                                Healventory
                            </h3>

                            <p>
                                Sistem Manajemen data dan stok obat di apotik
                            </p>
                    </div>

                </div>

            </div>

            <div class="col-lg-6">

                <div
                    class="project-card">
                    <a href="https://kelompok9.my.id" target="_blank"><img
                            src="assets/img/project2.jpg"
                            alt="Project"></a>


                    <div
                        class="project-content">

                        <h3>
                            Kinara Pharma
                        </h3>

                        <p>
                            Website manajemen dan penjualan obat apotik
                        </p>

                    </div>

                </div>

            </div>

                </div>

            </div>

        </div>
        <section class="section">

            <div class="container">

                <div class="row g-4">

                    <div class="col-md-6">

                        <a href="https://github.com/tsaabitaparisya-art"
                            target="_blank"
                            class="quick-link-card">

                            <i class="fa-brands fa-github"></i>

                            <h3>GitHub</h3>

                            <p>
                                Lihat source code project saya
                            </p>

                        </a>

                    </div>

                    <div class="col-md-6">

                        <a href="https://www.figma.com/files/team/1415637872250513289/recents-and-sharing?fuid=1415637870082017477"
                            target="_blank"
                            class="quick-link-card">

                            <i class="fa-brands fa-figma"></i>

                            <h3>UI / UX Design</h3>

                            <p>
                                Jelajahi desain dan prototype yang saya buat menggunakan Figma
                            </p>
                        </a></div>
    </section>
    <!-- CERTIFICATES -->

<section id="certificates" class="section">

    <div class="container">

        <div class="section-header">

            <span>CERTIFICATES</span>

            <h2>My Certificates</h2>

            <p class="section-description">
                Beberapa sertifikat yang saya peroleh selama proses belajar
                dan pengembangan kemampuan di bidang teknologi.
            </p>

        </div>

        <div class="certificate-wrapper">

            <!-- Certificate 1 -->

            <div class="certificate-card">

                <div class="certificate-image">

                    <img
                        src="assets/img/certificate-1.jpg"
                        alt="Certificate 1">

                </div>

                <div class="certificate-content">

                    <h3>Peserta Lomba UI/UX Design</h3>

                    <p>
                        Techomfest, Politeknik Negeri Semarang
                    </p>

                    <a
                        href="assets/certificates/certificate1.pdf"
                        target="_blank"
                        class="certificate-btn">

                        View Certificate

                    </a>

                </div>

            </div>

            <!-- Certificate 2 -->

            <div class="certificate-card">

                <div class="certificate-image">

                    <img
                        src="assets/img/certificate-2.jpg"
                        alt="Certificate 2">

                </div>

                <div class="certificate-content">

                    <h3>Peserta Lomba UI/UX Design</h3>

                    <p>
                        TechsSprint, CodeLab Indonesia
                    </p>

                    <a
                        href="assets/certificates/certificate2.pdf"
                        target="_blank"
                        class="certificate-btn">

                        View Certificate

                    </a>

                </div>

            </div>

            <!-- Certificate 3 -->

            <div class="certificate-card">

                <div class="certificate-image">

                    <img
                        src="assets/img/certificate-3.jpg"
                        alt="Certificate 3">

                </div>

                <div class="certificate-content">

                    <h3>Pelatihan Red Hat System Administration I (RH124-RHA)-ver.10</h3>

                    <p>
                        Red Hat
                    </p>

                    <a
                        href="assets/certificates/certificate3.pdf"
                        target="_blank"
                        class="certificate-btn">

                        View Certificate

                    </a>

                </div>

            </div>

        </div>

    </div>

</section>

    <!-- CONTACT -->

    <section
        id="contact"
        class="section">

        <div class="container">

            <div
                class="section-header">

                <span>
                    CONTACT
                </span>

                <h2>
                    Let's Work Together
                </h2>

            </div>
<div class="glass-card">

    <?php if(isset($_GET['status']) && $_GET['status'] == 'success'): ?>

        <script>
            document.addEventListener('DOMContentLoaded', function () {

                Swal.fire({
                    icon: 'success',
                    title: 'Pesan Berhasil Dikirim',
                    text: 'Terima kasih telah menghubungi saya.',
                    confirmButtonText: 'OK'
                });

            });
        </script>

    <?php endif; ?>

    <?php if(isset($_GET['status']) && $_GET['status'] == 'error'): ?>

        <script>
            document.addEventListener('DOMContentLoaded', function () {

                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Pesan gagal dikirim.',
                    confirmButtonText: 'OK'
                });

            });
        </script>

    <?php endif; ?>

    <form action="send-email.php" method="POST">

        <div class="mb-3">

            <input
                type="text"
                name="name"
                class="form-control"
                placeholder="Nama Lengkap"
                required>

        </div>

        <div class="mb-3">

            <input
                type="email"
                name="email"
                class="form-control"
                placeholder="Alamat Email"
                required>

        </div>

        <div class="mb-3">

            <input
                type="text"
                name="subject"
                class="form-control"
                placeholder="Subjek"
                required>

        </div>

        <div class="mb-3">

            <textarea
                name="message"
                rows="5"
                class="form-control"
                placeholder="Tulis pesan Anda..."
                required></textarea>
        </div>
        <button
            type="submit"
            class="btn-primary-custom">
            Kirim Pesan
        </button>
    </form>
</div>
    <!-- FOOTER -->
    <footer>
            <p>
                © <?php echo date('Y'); ?>
                Tsaabita Portfolio
            </p>
        </div>
    </footer>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    </script>
    <script
        src="assets/js/main.js">
    </script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>