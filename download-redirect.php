<?php
$lang = isset($_GET['lang']) ? $_GET['lang'] : 'en';
$isRTL = $lang === 'ar';
include 'config.php';

// Get the referrer URL or default to index
$referrer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'index.php?lang=' . $lang;
$download_url = 'https://www.createanything.com/mobile-preview/d609ba9f-bc49-4698-90d0-715b21a1d511';
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>" dir="<?php echo $isRTL ? 'rtl' : 'ltr'; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $lang === 'en' ? 'Download App' : ($lang === 'fr' ? 'Télécharger l\'application' : 'تنزيل التطبيق'); ?> - Coachini</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Cairo:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        .download-redirect-page {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
            position: relative;
            z-index: 10;
        }
        
        .download-redirect-content {
            background: rgba(17, 17, 17, 0.8);
            backdrop-filter: blur(20px);
            padding: 3rem;
            border-radius: 2rem;
            border: 1px solid var(--border);
            text-align: center;
            max-width: 500px;
            width: 100%;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.5);
        }
        
        .qr-code-container {
            margin: 2rem 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .qr-code-container img {
            max-width: 300px;
            width: 100%;
            height: auto;
            border-radius: 1rem;
            border: 2px solid var(--border);
            padding: 1rem;
            background: white;
        }
        
        .download-redirect-content h2 {
            font-size: 2rem;
            margin-bottom: 1rem;
            background: linear-gradient(135deg, var(--text) 0%, var(--blue) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        .download-redirect-content p {
            color: var(--text-light);
            margin-bottom: 2rem;
            font-size: 1.1rem;
        }
        
        .back-button {
            display: inline-block;
            margin-top: 2rem;
            padding: 0.75rem 1.5rem;
            background: transparent;
            color: var(--blue);
            text-decoration: none;
            border: 2px solid var(--blue);
            border-radius: 0.75rem;
            font-weight: 600;
            transition: all 0.3s;
        }
        
        .back-button:hover {
            background: var(--blue);
            color: white;
            transform: translateY(-2px);
        }
    </style>
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

    <div class="download-redirect-page">
        <div class="download-redirect-content">
            <h2><?php echo $lang === 'en' ? 'Scan to Download' : ($lang === 'fr' ? 'Scannez pour télécharger' : 'امسح للتنزيل'); ?></h2>
            <p><?php echo $lang === 'en' ? 'Scan the QR code with your phone to download the Coachini app' : ($lang === 'fr' ? 'Scannez le code QR avec votre téléphone pour télécharger l\'application Coachini' : 'امسح رمز QR بهاتفك لتنزيل تطبيق Coachini'); ?></p>
            
            <div class="qr-code-container">
                <img src="qr.png" alt="QR Code" />
            </div>
            
            <div>
                <a href="<?php echo htmlspecialchars($referrer); ?>" class="back-button">
                    <?php echo $lang === 'en' ? '← Back' : ($lang === 'fr' ? '← Retour' : '← رجوع'); ?>
                </a>
            </div>
        </div>
    </div>

    <script src="assets/js/main.js"></script>
</body>
</html>

