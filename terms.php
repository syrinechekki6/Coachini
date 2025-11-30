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
    <title><?php echo $lang === 'en' ? 'Terms of Service' : 'شروط الخدمة'; ?> - Coachini</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Cairo:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <section class="hero" style="padding: 120px 0 60px; min-height: auto;">
        <div class="container" style="max-width: 800px;">
            <h1 class="section-title" style="text-align: left; margin-bottom: 1rem;">
                <?php echo $lang === 'en' ? 'Terms of Service' : 'شروط الخدمة'; ?>
            </h1>
            <p style="color: var(--text-light); margin-bottom: 3rem;">
                <?php echo $lang === 'en' ? 'Last Updated: January 2024' : 'آخر تحديث: يناير 2024'; ?>
            </p>

            <div style="text-align: left; line-height: 1.8;">
                <h2 style="margin: 2rem 0 1rem;">1. <?php echo $lang === 'en' ? 'Acceptance of Terms' : 'قبول الشروط'; ?></h2>
                <p style="margin-bottom: 2rem;">
                    <?php echo $lang === 'en'
                        ? 'By accessing and using Coachini, you accept and agree to be bound by these Terms of Service.'
                        : 'من خلال الوصول إلى Coachini واستخدامه، تقبل وتوافق على الالتزام بشروط الخدمة هذه.'; ?>
                </p>

                <h2 style="margin: 2rem 0 1rem;">2. <?php echo $lang === 'en' ? 'Payment Terms' : 'شروط الدفع'; ?></h2>
                <p style="margin-bottom: 2rem;">
                    <?php echo $lang === 'en'
                        ? 'Subscriptions are billed in advance on a monthly or annual basis. All fees are non-refundable except as required by law or our refund policy.'
                        : 'يتم فوترة الاشتراكات مقدمًا على أساس شهري أو سنوي. جميع الرسوم غير قابلة للاسترداد إلا كما يتطلب القانون أو سياسة الاسترداد الخاصة بنا.'; ?>
                </p>

                <h2 style="margin: 2rem 0 1rem;">3. <?php echo $lang === 'en' ? 'Refund Policy' : 'سياسة الاسترداد'; ?></h2>
                <p style="margin-bottom: 2rem;">
                    <?php echo $lang === 'en'
                        ? 'We offer a 14-day money-back guarantee for all paid plans. Refund requests must be submitted within 14 days of purchase.'
                        : 'نقدم ضمان استرداد الأموال لمدة 14 يومًا لجميع الخطط المدفوعة. يجب تقديم طلبات الاسترداد في غضون 14 يومًا من الشراء.'; ?>
                </p>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>
    <script src="assets/js/main.js"></script>
</body>
</html>

