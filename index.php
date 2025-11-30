<?php
$lang = isset($_GET['lang']) ? $_GET['lang'] : 'en';
$isRTL = $lang === 'ar';
include 'config.php';
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>" dir="<?php echo $isRTL ? 'rtl' : 'ltr'; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $t['home']['title']; ?> - Coachini</title>
    <meta name="description" content="<?php echo $t['home']['description']; ?>">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Cairo:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Animated Background -->
    <div class="animated-bg">
        <div class="gradient-orb orb-1"></div>
        <div class="gradient-orb orb-2"></div>
        <div class="gradient-orb orb-3"></div>
        <div class="particles-container"></div>
        <div class="grid-pattern"></div>
    </div>

    <?php include 'includes/header.php'; ?>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <div class="hero-badge">
                        <span class="badge-glow"></span>
                        <?php echo $lang === 'en' ? 'By the legit six' : ($lang === 'fr' ? 'Par les six légitimes' : 'من قبل الستة الشرعيين'); ?>
                    </div>
                    <h1 class="hero-title">
                        <span class="title-line"><?php echo $t['home']['hero']['title']; ?></span>
                    </h1>
                    <p class="hero-subtitle"><?php echo $t['home']['hero']['subtitle']; ?></p>
                    <div class="hero-buttons">
                        <a href="download-redirect.php?lang=<?php echo $lang; ?>" class="btn btn-primary">
                            <span><?php echo $t['home']['hero']['cta_app']; ?></span>
                            <div class="btn-shine"></div>
                        </a>
                        <a href="demo.php?lang=<?php echo $lang; ?>" class="btn btn-secondary">
                            <?php echo $t['home']['hero']['cta_demo']; ?>
                        </a>
                    </div>
                </div>
                <div class="hero-image">
                    <div class="phone-container">
                        <div class="phone-glow"></div>
                        <img src="tel.png" alt="Coachini App" class="phone-image" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features">
        <div class="container">
            <div class="section-header">
                <span class="section-label"><?php echo $lang === 'en' ? 'Features' : ($lang === 'fr' ? 'Fonctionnalités' : 'المميزات'); ?></span>
                <h2 class="section-title"><?php echo $t['home']['features']['title']; ?></h2>
                <p class="section-subtitle"><?php echo $t['home']['features']['subtitle']; ?></p>
            </div>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon-wrapper">
                        <div class="feature-icon">⌚</div>
                        <div class="icon-glow"></div>
                    </div>
                    <h3><?php echo $t['home']['features']['bracelet']['title']; ?></h3>
                    <p><?php echo $t['home']['features']['bracelet']['description']; ?></p>
                    <div class="feature-link">
                        <a href="product.php?lang=<?php echo $lang; ?>#bracelet">
                            <?php echo $t['home']['features']['learn_more']; ?>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M5 12h14M12 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="feature-card">
                    <div class="feature-icon-wrapper">
                        <div class="feature-icon">🍎</div>
                        <div class="icon-glow"></div>
                    </div>
                    <h3><?php echo $t['home']['features']['nutrition']['title']; ?></h3>
                    <p><?php echo $t['home']['features']['nutrition']['description']; ?></p>
                    <div class="feature-link">
                        <a href="product.php?lang=<?php echo $lang; ?>#nutrition">
                            <?php echo $t['home']['features']['learn_more']; ?>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M5 12h14M12 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="feature-card">
                    <div class="feature-icon-wrapper">
                        <div class="feature-icon">🎯</div>
                        <div class="icon-glow"></div>
                    </div>
                    <h3><?php echo $t['home']['features']['coaching']['title']; ?></h3>
                    <p><?php echo $t['home']['features']['coaching']['description']; ?></p>
                    <div class="feature-link">
                        <a href="product.php?lang=<?php echo $lang; ?>#coaching">
                            <?php echo $t['home']['features']['learn_more']; ?>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M5 12h14M12 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials">
        <div class="container">
            <div class="section-header">
                <span class="section-label"><?php echo $lang === 'en' ? 'Testimonials' : ($lang === 'fr' ? 'Témoignages' : 'الشهادات'); ?></span>
                <h2 class="section-title"><?php echo $t['home']['testimonials']['title']; ?></h2>
            </div>
            <div class="testimonials-grid">
                <?php foreach ($t['home']['testimonials']['items'] as $testimonial): ?>
                <div class="testimonial-card">
                    <div class="testimonial-quote">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none">
                            <path d="M3 21c3 0 7-1 7-8V5c0-1.25-.756-2.017-2-2H4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2 1 0 1 0 1 1v1c0 1-1 2-2 2s-1 .008-1 1.031V20c0 1 0 1 1 1z" fill="currentColor" opacity="0.2"/>
                        </svg>
                    </div>
                    <p class="testimonial-text">"<?php echo $testimonial['text']; ?>"</p>
                    <div class="testimonial-author">
                        <div class="author-avatar"></div>
                        <div class="author-info">
                            <strong><?php echo $testimonial['name']; ?></strong>
                            <span><?php echo $testimonial['role']; ?></span>
                        </div>
                    </div>
                    <div class="testimonial-rating">★★★★★</div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <div class="container">
            <div class="cta-content">
                <h2><?php echo $t['home']['cta']['title']; ?></h2>
                <p><?php echo $t['home']['cta']['subtitle']; ?></p>
                <a href="download-redirect.php?lang=<?php echo $lang; ?>" class="btn btn-cta">
                    <span><?php echo $t['home']['cta']['button']; ?></span>
                    <div class="btn-shine"></div>
                </a>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>
    <script src="assets/js/main.js"></script>
</body>
</html>
