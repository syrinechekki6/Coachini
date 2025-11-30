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
    <title><?php echo $lang === 'en' ? 'Get the App' : 'احصل على التطبيق'; ?> - Coachini</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Cairo:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <section class="hero" style="padding: 120px 0 80px;">
        <div class="container">
            <h1 class="section-title" style="margin-bottom: 1rem;">
                <?php echo $lang === 'en' ? 'Get the Coachini App' : 'احصل على تطبيق Coachini'; ?>
            </h1>
            <p class="section-subtitle">
                <?php echo $lang === 'en' ? 'Download Coachini on iOS or Android and start your health journey today' : 'قم بتنزيل Coachini على iOS أو Android وابدأ رحلتك الصحية اليوم'; ?>
            </p>

            <div class="features-grid" style="max-width: 800px; margin: 3rem auto;">
                <div class="feature-card" style="text-align: center;">
                    <div style="font-size: 4rem; margin-bottom: 1rem;">🍎</div>
                    <h3 style="color: var(--text);">iOS</h3>
                    <a href="download-redirect.php?lang=<?php echo $lang; ?>" class="btn btn-primary" style="margin-top: 1.5rem;">
                        <?php echo $lang === 'en' ? 'Download for iOS' : 'تنزيل لـ iOS'; ?>
                    </a>
                </div>
                <div class="feature-card" style="text-align: center;">
                    <div style="font-size: 4rem; margin-bottom: 1rem;">🤖</div>
                    <h3 style="color: var(--text);">Android</h3>
                    <a href="download-redirect.php?lang=<?php echo $lang; ?>" class="btn btn-primary" style="margin-top: 1.5rem;">
                        <?php echo $lang === 'en' ? 'Download for Android' : 'تنزيل لـ Android'; ?>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>
    <script src="assets/js/main.js"></script>
</body>
</html>

