<?php
/**
 * ==========================================================================
 * SECURITY BOOTSTRAP & HEADERS
 * Fully compliant with OWASP ZAP & CSP Level 3 Standards
 * Eliminates:
 * - CSP: style-src unsafe-inline (Medium)
 * - CSP: Wildcard Directive (Medium)
 * - Content Security Policy Header Not Set (Medium)
 * - Missing Anti-clickjacking Header (Medium)
 * - Strict-Transport-Security Header Not Set (Low)
 * - X-Content-Type-Options Header Missing (Low)
 * ==========================================================================
 */

declare(strict_types=1);

// 1. Prevent Clickjacking
header('X-Frame-Options: SAMEORIGIN');

// 2. Prevent MIME Sniffing
header('X-Content-Type-Options: nosniff');

// 3. HTTP Strict Transport Security (HSTS)
header('Strict-Transport-Security: max-age=31536000; includeSubDomains; preload');

// 4. Strict Content Security Policy (No unsafe-inline styles, no wildcard schemes)
$cspDirectives = [
    "default-src 'self'",
    "script-src 'self' https://cdn.jsdelivr.net",
    "style-src 'self' https://cdn.jsdelivr.net https://fonts.googleapis.com https://cdnjs.cloudflare.com",
    "img-src 'self' data:",
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

// 6. Permissions Policy
header('Permissions-Policy: camera=(), microphone=(), geolocation=(), payment=(), usb=()');

// 7. Cross-Origin Opener Policy
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
