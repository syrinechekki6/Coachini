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
    <title><?php echo $lang === 'en' ? 'Product' : 'المنتج'; ?> - Coachini</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Cairo:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <section class="hero" style="padding: 120px 0 60px; min-height: auto;">
        <div class="container">
            <h1 class="section-title" style="margin-bottom: 1rem;">
                <?php echo $lang === 'en' ? 'Complete Coaching & Wellbeing Platform' : 'منصة التدريب والرفاهية الكاملة'; ?>
            </h1>
            <p class="section-subtitle">
                <?php echo $lang === 'en' ? 'Everything you need to track, analyze, and optimize health and performance' : 'كل ما تحتاجه لتتبع وتحليل وتحسين الصحة والأداء'; ?>
            </p>
        </div>
    </section>

    <section class="features" id="bracelet">
        <div class="container">
            <div class="feature-card" style="max-width: 900px; margin: 0 auto; background: var(--bg-card); border: 1px solid var(--border);">
                <div class="feature-icon">⌚</div>
                <h2><?php echo $lang === 'en' ? 'Bracelet Telemetry' : 'قياسات السوار'; ?></h2>
                <p><?php echo $lang === 'en' ? 'Comprehensive health monitoring through advanced wearable technology' : 'مراقبة صحية شاملة من خلال تقنية الأجهزة القابلة للارتداء المتقدمة'; ?></p>
                <ul style="margin: 1.5rem 0; padding-left: 2rem;">
                    <li><?php echo $lang === 'en' ? 'Step counting and activity tracking' : 'عد الخطوات وتتبع النشاط'; ?></li>
                    <li><?php echo $lang === 'en' ? 'Real-time heart rate monitoring' : 'مراقبة معدل ضربات القلب في الوقت الفعلي'; ?></li>
                    <li><?php echo $lang === 'en' ? 'Sleep quality and duration analysis' : 'تحليل جودة النوم والمدة'; ?></li>
                    <li><?php echo $lang === 'en' ? 'Body temperature tracking' : 'تتبع درجة حرارة الجسم'; ?></li>
                    <li><?php echo $lang === 'en' ? 'Automatic calorie estimation' : 'تقدير السعرات الحرارية التلقائي'; ?></li>
                </ul>
            </div>
        </div>
    </section>

    <section class="features" id="nutrition" style="background: var(--bg-light);">
        <div class="container">
            <div class="feature-card" style="max-width: 900px; margin: 0 auto; background: var(--bg-card); border: 1px solid var(--border);">
                <div class="feature-icon">🍎</div>
                <h2><?php echo $lang === 'en' ? 'Calorie & Nutrition Engine' : 'محرك السعرات الحرارية والتغذية'; ?></h2>
                <p><?php echo $lang === 'en' ? 'Intelligent meal logging and personalized nutrition planning' : 'تسجيل الوجبات الذكي وتخطيط التغذية الشخصي'; ?></p>
                <ul style="margin: 1.5rem 0; padding-left: 2rem;">
                    <li><?php echo $lang === 'en' ? 'Barcode scanning for instant food recognition' : 'مسح الباركود للتعرف الفوري على الطعام'; ?></li>
                    <li><?php echo $lang === 'en' ? 'AI-powered photo recognition for meals' : 'التعرف على الصور بالذكاء الاصطناعي للوجبات'; ?></li>
                    <li><?php echo $lang === 'en' ? 'Manual meal logging with detailed macros' : 'تسجيل الوجبات اليدوي مع تفاصيل المغذيات الكبيرة'; ?></li>
                    <li><?php echo $lang === 'en' ? 'AI-generated personalized meal plans' : 'خطط وجبات شخصية مولدة بالذكاء الاصطناعي'; ?></li>
                    <li><?php echo $lang === 'en' ? 'Automated grocery list generation' : 'إنشاء قائمة تسوق تلقائية'; ?></li>
                </ul>
            </div>
        </div>
    </section>

    <section class="features" id="coaching">
        <div class="container">
            <div class="feature-card" style="max-width: 900px; margin: 0 auto;">
                <div class="feature-icon">🎯</div>
                <h2><?php echo $lang === 'en' ? 'Personalized Coaching & Engagement' : 'التدريب الشخصي والمشاركة'; ?></h2>
                <p><?php echo $lang === 'en' ? 'Connect with coaches and build lasting habits through gamification' : 'تواصل مع المدربين وابني عادات دائمة من خلال الألعاب'; ?></p>
                <ul style="margin: 1.5rem 0; padding-left: 2rem;">
                    <li><?php echo $lang === 'en' ? 'Real-time coach-client chat' : 'دردشة فورية بين المدرب والعميل'; ?></li>
                    <li><?php echo $lang === 'en' ? 'Video call sessions with screen sharing' : 'جلسات مكالمات فيديو مع مشاركة الشاشة'; ?></li>
                    <li><?php echo $lang === 'en' ? 'Voice note messaging' : 'رسائل الملاحظات الصوتية'; ?></li>
                    <li><?php echo $lang === 'en' ? 'Progress dashboard with interactive charts' : 'لوحة تقدم مع مخططات تفاعلية'; ?></li>
                    <li><?php echo $lang === 'en' ? 'Badge system and streak tracking' : 'نظام الشارات وتتبع السلاسل'; ?></li>
                    <li><?php echo $lang === 'en' ? 'Group challenges and leaderboards' : 'التحديات الجماعية ولوحات المتصدرين'; ?></li>
                </ul>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>
    <script src="assets/js/main.js"></script>
</body>
</html>

