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
    <title><?php echo $lang === 'en' ? 'How it Works' : 'كيف يعمل'; ?> - Coachini</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Cairo:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <section class="hero" style="padding: 120px 0 60px; min-height: auto;">
        <div class="container">
            <h1 class="section-title" style="margin-bottom: 1rem;">
                <?php echo $lang === 'en' ? 'How Coachini Works' : 'كيف يعمل Coachini'; ?>
            </h1>
            <p class="section-subtitle">
                <?php echo $lang === 'en' ? 'Three simple paths to transform your health journey' : 'ثلاثة مسارات بسيطة لتحويل رحلتك الصحية'; ?>
            </p>
        </div>
    </section>

    <section class="features">
        <div class="container">
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">👤</div>
                    <h3><?php echo $lang === 'en' ? 'Client Journey' : 'رحلة العميل'; ?></h3>
                    <ol style="text-align: left; margin: 1.5rem 0; padding-left: 1.5rem;">
                        <li><?php echo $lang === 'en' ? 'Onboard & set goals' : 'الإعداد وتحديد الأهداف'; ?></li>
                        <li><?php echo $lang === 'en' ? 'Connect your bracelet' : 'ربط سوارك'; ?></li>
                        <li><?php echo $lang === 'en' ? 'Follow personalized plan' : 'اتبع الخطة الشخصية'; ?></li>
                        <li><?php echo $lang === 'en' ? 'Attend coach sessions' : 'حضر جلسات المدرب'; ?></li>
                        <li><?php echo $lang === 'en' ? 'Track progress & celebrate wins' : 'تتبع التقدم واحتفل بالإنجازات'; ?></li>
                    </ol>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">👥</div>
                    <h3><?php echo $lang === 'en' ? 'Coach Journey' : 'رحلة المدرب'; ?></h3>
                    <ol style="text-align: left; margin: 1.5rem 0; padding-left: 1.5rem;">
                        <li><?php echo $lang === 'en' ? 'Register as certified coach' : 'التسجيل كمدرب معتمد'; ?></li>
                        <li><?php echo $lang === 'en' ? 'Create custom programs' : 'إنشاء برامج مخصصة'; ?></li>
                        <li><?php echo $lang === 'en' ? 'Assign clients to programs' : 'تعيين العملاء للبرامج'; ?></li>
                        <li><?php echo $lang === 'en' ? 'Review progress & provide feedback' : 'مراجعة التقدم وتقديم الملاحظات'; ?></li>
                        <li><?php echo $lang === 'en' ? 'Schedule sessions & track payments' : 'جدولة الجلسات وتتبع المدفوعات'; ?></li>
                    </ol>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">🏢</div>
                    <h3><?php echo $lang === 'en' ? 'Partner Journey' : 'رحلة الشريك'; ?></h3>
                    <ol style="text-align: left; margin: 1.5rem 0; padding-left: 1.5rem;">
                        <li><?php echo $lang === 'en' ? 'API integration setup' : 'إعداد تكامل API'; ?></li>
                        <li><?php echo $lang === 'en' ? 'Device certification' : 'شهادة الجهاز'; ?></li>
                        <li><?php echo $lang === 'en' ? 'Enterprise deployment' : 'النشر المؤسسي'; ?></li>
                        <li><?php echo $lang === 'en' ? 'Bulk provisioning' : 'التوفير بالجملة'; ?></li>
                        <li><?php echo $lang === 'en' ? 'Ongoing support & updates' : 'الدعم المستمر والتحديثات'; ?></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>
    <script src="assets/js/main.js"></script>
</body>
</html>

