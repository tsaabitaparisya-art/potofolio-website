<?php
declare(strict_types=1);
require_once __DIR__ . '/security.php';

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

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- Subtle Ambient Lighting Mesh -->
    <div class="ambient-glow" aria-hidden="true"></div>
