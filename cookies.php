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
    <title><?php echo $lang === 'en' ? 'Cookie Policy' : 'سياسة ملفات تعريف الارتباط'; ?> - Coachini</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Cairo:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <section class="hero" style="padding: 120px 0 60px; min-height: auto;">
        <div class="container" style="max-width: 800px;">
            <h1 class="section-title" style="text-align: left; margin-bottom: 1rem;">
                <?php echo $lang === 'en' ? 'Cookie Policy' : 'سياسة ملفات تعريف الارتباط'; ?>
            </h1>
            <p style="color: var(--text-light); margin-bottom: 3rem;">
                <?php echo $lang === 'en' ? 'Last Updated: January 2024' : 'آخر تحديث: يناير 2024'; ?>
            </p>

            <div style="text-align: left; line-height: 1.8;">
                <h2 style="margin: 2rem 0 1rem;">1. <?php echo $lang === 'en' ? 'What Are Cookies' : 'ما هي ملفات تعريف الارتباط'; ?></h2>
                <p style="margin-bottom: 2rem;">
                    <?php echo $lang === 'en'
                        ? 'Cookies are small text files placed on your device when you visit our website. They help us provide a better experience and analyze site usage.'
                        : 'ملفات تعريف الارتباط هي ملفات نصية صغيرة توضع على جهازك عند زيارة موقعنا. تساعدنا في توفير تجربة أفضل وتحليل استخدام الموقع.'; ?>
                </p>

                <h2 style="margin: 2rem 0 1rem;">2. <?php echo $lang === 'en' ? 'Types of Cookies We Use' : 'أنواع ملفات تعريف الارتباط التي نستخدمها'; ?></h2>
                <p style="margin-bottom: 2rem;">
                    <?php echo $lang === 'en'
                        ? 'We use essential cookies for site functionality, analytics cookies to understand usage patterns, and marketing cookies (with consent) to personalize content.'
                        : 'نستخدم ملفات تعريف الارتباط الأساسية لوظائف الموقع وملفات تعريف الارتباط التحليلية لفهم أنماط الاستخدام وملفات تعريف الارتباط التسويقية (بموافقة) لتخصيص المحتوى.'; ?>
                </p>

                <h2 style="margin: 2rem 0 1rem;">3. <?php echo $lang === 'en' ? 'Managing Cookies' : 'إدارة ملفات تعريف الارتباط'; ?></h2>
                <p style="margin-bottom: 2rem;">
                    <?php echo $lang === 'en'
                        ? 'You can control cookies through your browser settings. Note that disabling certain cookies may affect site functionality.'
                        : 'يمكنك التحكم في ملفات تعريف الارتباط من خلال إعدادات المتصفح. لاحظ أن تعطيل ملفات تعريف الارتباط معينة قد يؤثر على وظائف الموقع.'; ?>
                </p>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>
    <script src="assets/js/main.js"></script>
</body>
</html>

