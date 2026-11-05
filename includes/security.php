<?php
/**
 * ==========================================================================
 * SECURITY BOOTSTRAP & HEADERS
 * Addresses OWASP ZAP Alerts:
 * - Content Security Policy (CSP) Header Not Set (Medium)
 * - Missing Anti-clickjacking Header (Medium)
 * - Strict-Transport-Security Header Not Set (Low)
 * - X-Content-Type-Options Header Missing (Low)
 * - Cache-control Directives & Session Security
 * ==========================================================================
 */

declare(strict_types=1);

// 1. Prevent clickjacking (Anti-Clickjacking Header - ZAP Medium)
header('X-Frame-Options: SAMEORIGIN');

// 2. Prevent MIME type sniffing (ZAP Low)
header('X-Content-Type-Options: nosniff');

// 3. HTTP Strict Transport Security - HSTS (ZAP Low)
header('Strict-Transport-Security: max-age=31536000; includeSubDomains; preload');

// 4. Content Security Policy - CSP (ZAP Medium)
// Allows Bootstrap, SweetAlert, Google Fonts, and Font Awesome while blocking unauthorized scripts/frames
$cspDirectives = [
    "default-src 'self'",
    "script-src 'self' https://cdn.jsdelivr.net",
    "style-src 'self' 'unsafe-inline' https://cdn.jsdelivr.net https://fonts.googleapis.com https://cdnjs.cloudflare.com",
    "img-src 'self' data: https:",
    "font-src 'self' https://fonts.gstatic.com https://cdnjs.cloudflare.com",
    "connect-src 'self'",
    "frame-ancestors 'self'",
    "form-action 'self'",
    "base-uri 'self'",
    "object-src 'none'",
];
header('Content-Security-Policy: ' . implode('; ', $cspDirectives));

// 5. Referrer Policy
header('Referrer-Policy: strict-origin-when-cross-origin');

// 6. Permissions Policy (Disables unused sensitive hardware APIs)
header('Permissions-Policy: camera=(), microphone=(), geolocation=(), payment=(), usb=()');

// 7. Cross-Origin Protection
header('Cross-Origin-Opener-Policy: same-origin');

// 8. Prevent caching on dynamic/sensitive processing
if (basename($_SERVER['PHP_SELF'] ?? '') === 'send-email.php') {
    header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
    header('Pragma: no-cache');
}

// 9. Secure Session Initiation (for CSRF Token)
if (session_status() === PHP_SESSION_NONE && !headers_sent()) {
    $isHttps = (
        (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ||
        (!empty($_SERVER['SERVER_PORT']) && (int)$_SERVER['SERVER_PORT'] === 443) ||
        (!empty($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https')
    );

    session_set_cookie_params([
        'lifetime' => 0,
        'path'     => '/',
        'domain'   => '',
        'secure'   => $isHttps,
        'httponly' => true,
        'samesite' => 'Strict',
    ]);

    @session_start();
}

// 10. Generate CSRF Token if session is active
if (session_status() === PHP_SESSION_ACTIVE && empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
