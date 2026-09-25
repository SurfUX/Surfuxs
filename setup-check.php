<?php
require_once __DIR__ . '/includes/config.php';
?><!doctype html>
<html><head><meta charset="utf-8"><title>SurfUX Setup Check</title>
<link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/style.css"></head>
<body style="padding:40px;font-family:Arial">
<h1>SurfUX Setup Check</h1>
<p><strong>BASE_URL:</strong> <?= htmlspecialchars(BASE_URL) ?></p>
<p><strong>CSS file:</strong> <?= file_exists(__DIR__.'/assets/css/style.css') ? 'Found ✓' : 'Missing ✗' ?></p>
<p><strong>PHP:</strong> <?= PHP_VERSION ?></p>
<p><a href="<?= BASE_URL ?>/index">Open SurfUX website →</a></p>
</body></html>