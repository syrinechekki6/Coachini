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
    <title><?php echo $lang === 'en' ? 'Privacy Policy' : 'سياسة الخصوصية'; ?> - Coachini</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Cairo:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <section class="hero" style="padding: 120px 0 60px; min-height: auto;">
        <div class="container" style="max-width: 800px;">
            <h1 class="section-title" style="text-align: left; margin-bottom: 1rem;">
                <?php echo $lang === 'en' ? 'Privacy Policy' : 'سياسة الخصوصية'; ?>
            </h1>
            <p style="color: var(--text-light); margin-bottom: 3rem;">
                <?php echo $lang === 'en' ? 'Last Updated: January 2024' : 'آخر تحديث: يناير 2024'; ?>
            </p>

            <div style="text-align: left; line-height: 1.8;">
                <h2 style="margin: 2rem 0 1rem;">1. <?php echo $lang === 'en' ? 'Introduction' : 'المقدمة'; ?></h2>
                <p style="margin-bottom: 2rem;">
                    <?php echo $lang === 'en' 
                        ? 'Coachini ("we", "our", or "us") is committed to protecting your privacy. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you use our platform.'
                        : 'Coachini ("نحن" أو "خاصتنا") ملتزمون بحماية خصوصيتك. توضح سياسة الخصوصية هذه كيفية جمع معلوماتك واستخدامها والكشف عنها وحمايتها عند استخدام منصتنا.'; ?>
                </p>

                <h2 style="margin: 2rem 0 1rem;">2. <?php echo $lang === 'en' ? 'Information We Collect' : 'المعلومات التي نجمعها'; ?></h2>
                <p style="margin-bottom: 2rem;">
                    <?php echo $lang === 'en'
                        ? 'We collect information that you provide directly to us, including account information, health and fitness data from connected devices, meal logs, and communication with coaches.'
                        : 'نجمع المعلومات التي تقدمها لنا مباشرة، بما في ذلك معلومات الحساب وبيانات الصحة واللياقة البدنية من الأجهزة المتصلة وسجلات الوجبات والتواصل مع المدربين.'; ?>
                </p>

                <h2 style="margin: 2rem 0 1rem;">3. <?php echo $lang === 'en' ? 'How We Use Your Information' : 'كيفية استخدام معلوماتك'; ?></h2>
                <p style="margin-bottom: 2rem;">
                    <?php echo $lang === 'en'
                        ? 'We use your information to provide and improve our services, personalize your experience, communicate with you, process payments, and ensure platform security.'
                        : 'نستخدم معلوماتك لتقديم وتحسين خدماتنا وتخصيص تجربتك والتواصل معك ومعالجة المدفوعات وضمان أمان المنصة.'; ?>
                </p>

                <h2 style="margin: 2rem 0 1rem;">4. <?php echo $lang === 'en' ? 'Data Security' : 'أمان البيانات'; ?></h2>
                <p style="margin-bottom: 2rem;">
                    <?php echo $lang === 'en'
                        ? 'We implement industry-standard security measures including encryption at rest and in transit, secure authentication, and regular security audits.'
                        : 'ننفذ تدابير أمنية معيارية في الصناعة بما في ذلك التشفير في حالة السكون وأثناء النقل والمصادقة الآمنة ومراجعات الأمان المنتظمة.'; ?>
                </p>

                <h2 style="margin: 2rem 0 1rem;">5. <?php echo $lang === 'en' ? 'Your Rights' : 'حقوقك'; ?></h2>
                <p style="margin-bottom: 2rem;">
                    <?php echo $lang === 'en'
                        ? 'You have the right to access, correct, delete, or export your data. Contact us at privacy@coachini.com to exercise these rights.'
                        : 'لديك الحق في الوصول إلى بياناتك وتصحيحها وحذفها أو تصديرها. اتصل بنا على privacy@coachini.com لممارسة هذه الحقوق.'; ?>
                </p>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>
    <script src="assets/js/main.js"></script>
</body>
</html>

