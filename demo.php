<?php
$lang = isset($_GET['lang']) ? $_GET['lang'] : 'en';
$isRTL = $lang === 'ar';
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Handle form submission
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $company = $_POST['company'] ?? '';
    $message = $_POST['message'] ?? '';
    
    // Here you would typically send an email or save to database
    $success = true; // Placeholder
}
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>" dir="<?php echo $isRTL ? 'rtl' : 'ltr'; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $lang === 'en' ? 'Book a Demo' : 'احجز عرضًا'; ?> - Coachini</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Cairo:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        .form-container {
            max-width: 600px;
            margin: 0 auto;
            background: var(--bg-card);
            padding: 3rem;
            border-radius: 1rem;
            box-shadow: 0 4px 6px var(--shadow);
            border: 1px solid var(--border);
        }
        .form-group {
            margin-bottom: 1.5rem;
        }
        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: var(--text);
        }
        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 0.75rem;
            border: 2px solid var(--border);
            border-radius: 0.5rem;
            font-family: inherit;
            font-size: 1rem;
            background: var(--bg);
            color: var(--text);
        }
        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: var(--primary);
        }
    </style>
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <section class="hero" style="padding: 120px 0 80px;">
        <div class="container">
            <h1 class="section-title" style="margin-bottom: 1rem;">
                <?php echo $lang === 'en' ? 'Book a Demo' : 'احجز عرضًا'; ?>
            </h1>
            <p class="section-subtitle">
                <?php echo $lang === 'en' ? 'See Coachini in action. Schedule a personalized demo with our team.' : 'شاهد Coachini في العمل. حدد موعدًا لعرض شخصي مع فريقنا.'; ?>
            </p>

            <div class="form-container" style="margin-top: 3rem;">
                <?php if (isset($success) && $success): ?>
                <div style="background: rgba(14, 165, 233, 0.2); color: var(--primary-light); padding: 1rem; border-radius: 0.5rem; margin-bottom: 2rem; border: 1px solid var(--primary);">
                    <?php echo $lang === 'en' ? 'Thank you! We\'ll contact you soon.' : 'شكرًا لك! سنتواصل معك قريبًا.'; ?>
                </div>
                <?php endif; ?>

                <form method="POST">
                    <div class="form-group">
                        <label><?php echo $lang === 'en' ? 'Full Name' : 'الاسم الكامل'; ?></label>
                        <input type="text" name="name" required>
                    </div>
                    <div class="form-group">
                        <label><?php echo $lang === 'en' ? 'Email Address' : 'عنوان البريد الإلكتروني'; ?></label>
                        <input type="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label><?php echo $lang === 'en' ? 'Phone Number' : 'رقم الهاتف'; ?></label>
                        <input type="tel" name="phone">
                    </div>
                    <div class="form-group">
                        <label><?php echo $lang === 'en' ? 'Company/Organization' : 'الشركة/المنظمة'; ?></label>
                        <input type="text" name="company">
                    </div>
                    <div class="form-group">
                        <label><?php echo $lang === 'en' ? 'Tell us about your needs' : 'أخبرنا عن احتياجاتك'; ?></label>
                        <textarea name="message" rows="4"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" style="width: 100%;">
                        <?php echo $lang === 'en' ? 'Schedule Demo' : 'جدولة العرض'; ?>
                    </button>
                </form>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>
    <script src="assets/js/main.js"></script>
</body>
</html>

