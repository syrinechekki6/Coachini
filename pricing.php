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
    <title><?php echo $lang === 'en' ? 'Pricing' : 'الأسعار'; ?> - Coachini</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Cairo:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <section class="hero" style="padding: 120px 0 60px; min-height: auto;">
        <div class="container">
            <h1 class="section-title" style="margin-bottom: 1rem;">
                <?php echo $lang === 'en' ? 'Simple, Transparent Pricing' : 'أسعار بسيطة وشفافة'; ?>
            </h1>
            <p class="section-subtitle">
                <?php echo $lang === 'en' ? 'Choose the plan that fits your needs. All plans include a free trial.' : 'اختر الخطة التي تناسب احتياجاتك. تتضمن جميع الخطط تجربة مجانية.'; ?>
            </p>
        </div>
    </section>

    <section class="features">
        <div class="container">
            <div class="features-grid">
                <div class="feature-card">
                    <h3><?php echo $lang === 'en' ? 'Free Trial' : 'تجربة مجانية'; ?></h3>
                    <div style="font-size: 2.5rem; font-weight: 700; background: linear-gradient(135deg, var(--blue), var(--blue-light)); -webkit-background-clip: text; -webkit-text-fill-color: transparent; margin: 1rem 0;">$0</div>
                    <ul style="text-align: left; margin: 1.5rem 0; color: var(--text-light);">
                        <li style="margin-bottom: 0.5rem;">✓ <?php echo $lang === 'en' ? 'Basic activity tracking' : 'تتبع النشاط الأساسي'; ?></li>
                        <li style="margin-bottom: 0.5rem;">✓ <?php echo $lang === 'en' ? 'Limited meal logging' : 'تسجيل وجبات محدود'; ?></li>
                        <li style="margin-bottom: 0.5rem;">✓ <?php echo $lang === 'en' ? 'Community challenges' : 'تحديات المجتمع'; ?></li>
                    </ul>
                    <a href="#" class="btn btn-primary" style="width: 100%; text-align: center; display: block;">
                        <?php echo $lang === 'en' ? 'Start Free Trial' : 'ابدأ التجربة المجانية'; ?>
                    </a>
                </div>

                <div class="feature-card" style="border: 2px solid var(--blue); transform: scale(1.05); position: relative;">
                    <div style="background: linear-gradient(135deg, var(--blue), var(--blue-light)); color: white; padding: 0.5rem; border-radius: 0.5rem; margin-bottom: 1rem; font-size: 0.9rem; text-align: center; position: absolute; top: -15px; left: 50%; transform: translateX(-50%);">
                        <?php echo $lang === 'en' ? 'Most Popular' : 'الأكثر شعبية'; ?>
                    </div>
                    <h3><?php echo $lang === 'en' ? 'Individual' : 'فردي'; ?></h3>
                    <div style="font-size: 2.5rem; font-weight: 700; background: linear-gradient(135deg, var(--blue), var(--blue-light)); -webkit-background-clip: text; -webkit-text-fill-color: transparent; margin: 1rem 0;">
                        $29<span style="font-size: 1rem; color: var(--text-light);">/mo</span>
                    </div>
                    <ul style="text-align: left; margin: 1.5rem 0; color: var(--text-light);">
                        <li style="margin-bottom: 0.5rem;">✓ <?php echo $lang === 'en' ? 'Unlimited tracking' : 'تتبع غير محدود'; ?></li>
                        <li style="margin-bottom: 0.5rem;">✓ <?php echo $lang === 'en' ? 'AI meal plans' : 'خطط وجبات بالذكاء الاصطناعي'; ?></li>
                        <li style="margin-bottom: 0.5rem;">✓ <?php echo $lang === 'en' ? 'Progress dashboard' : 'لوحة تقدم'; ?></li>
                        <li style="margin-bottom: 0.5rem;">✓ <?php echo $lang === 'en' ? 'Streak tracking' : 'تتبع السلاسل'; ?></li>
                    </ul>
                    <a href="#" class="btn btn-primary" style="width: 100%; text-align: center; display: block;">
                        <?php echo $lang === 'en' ? 'Get Started' : 'ابدأ'; ?>
                    </a>
                </div>

                <div class="feature-card">
                    <h3><?php echo $lang === 'en' ? 'Coach Pro' : 'مدرب محترف'; ?></h3>
                    <div style="font-size: 2.5rem; font-weight: 700; background: linear-gradient(135deg, var(--blue), var(--blue-light)); -webkit-background-clip: text; -webkit-text-fill-color: transparent; margin: 1rem 0;">
                        $99<span style="font-size: 1rem; color: var(--text-light);">/mo</span>
                    </div>
                    <ul style="text-align: left; margin: 1.5rem 0; color: var(--text-light);">
                        <li style="margin-bottom: 0.5rem;">✓ <?php echo $lang === 'en' ? 'Everything in Individual' : 'كل شيء في الفردي'; ?></li>
                        <li style="margin-bottom: 0.5rem;">✓ <?php echo $lang === 'en' ? 'Unlimited clients' : 'عملاء غير محدودين'; ?></li>
                        <li style="margin-bottom: 0.5rem;">✓ <?php echo $lang === 'en' ? 'Video calls' : 'مكالمات فيديو'; ?></li>
                        <li style="margin-bottom: 0.5rem;">✓ <?php echo $lang === 'en' ? 'Advanced analytics' : 'تحليلات متقدمة'; ?></li>
                    </ul>
                    <a href="#" class="btn btn-primary" style="width: 100%; text-align: center; display: block;">
                        <?php echo $lang === 'en' ? 'Start Coaching' : 'ابدأ التدريب'; ?>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>
    <script src="assets/js/main.js"></script>
</body>
</html>

