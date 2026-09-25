<?php
if (!isset($page_title)) $page_title = SITE_NAME;
$current = basename($_SERVER['PHP_SELF']);
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="description" content="SurfUX — software development, web development and social media marketing.">

<title><?= htmlspecialchars($page_title) ?></title>

<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">

<!-- Favicon -->
<link rel="icon" type="image/png" href="<?= BASE_URL ?>/assets/img/portfolio/favicon.png">

<!-- Apple Touch Icon -->
<link rel="apple-touch-icon" href="<?= BASE_URL ?>/assets/img/portfolio/apple-touch-icon.png">

<!-- Main Stylesheet -->
<link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/style.css">

</head>

<body>

<div class="cursor-dot"></div>

<header class="site-header">
  <div class="container nav-wrap">

    
    <a href="<?= BASE_URL ?>/index" class="logo d-flex align-items-center">
          <!-- Uncomment the line below if you also wish to use an image logo -->
         <img src="<?= BASE_URL ?>/assets/img/portfolio/logo.webp" > 
          <!-- <h1 class="sitename">SurfUX</h1> -->
        </a>

    <button class="menu-toggle" aria-label="Toggle navigation">
      <i></i>
      <i></i>
    </button>

    <nav class="main-nav">

      <a class="<?= $current==='index.php'?'active':'' ?>"
         href="<?= BASE_URL ?>/index">
        Home
      </a>

      <a class="<?= $current==='about.php'?'active':'' ?>"
         href="<?= BASE_URL ?>/pages/about">
        About
      </a>

      <a class="<?= $current==='services.php'?'active':'' ?>"
         href="<?= BASE_URL ?>/pages/services">
        Services
      </a>

      <a class="<?= in_array($current,['portfolio.php','portfolio-details.php'])?'active':'' ?>"
         href="<?= BASE_URL ?>/pages/portfolio">
        Portfolio
      </a>

      <a class="<?= in_array($current,['news.php','news-details.php'])?'active':'' ?>"
         href="<?= BASE_URL ?>/pages/news">
        News
      </a>

      

      <a class="nav-cta"
         href="<?= BASE_URL ?>/pages/contact">
        Let's talk <span>→</span>
      </a>
      <a class="nav-pcta"
         href="<?= BASE_URL ?>/pages/caresphere">
        CareSphere <span>→</span>
      </a>

    </nav>

  </div>
</header>