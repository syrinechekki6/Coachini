<?php
$lang = isset($_GET['lang']) ? $_GET['lang'] : 'en';
$isRTL = $lang === 'ar';
include 'config.php';

$team = 
[
    [
        'name' => 'Syrine Chekki',
        'initials' => 'SC',
        'title' => ['en' => 'Founder & Head Coach', 'fr' => 'Fondatrice & Coach Principal', 'ar' => 'المؤسس والمدرب الرئيسي'],
        'bio' => ['en' => 'Competitive swimmer, project lead and lead coaching methodology designer. Responsible for program design, athlete workflows, and community partnerships', 'fr' => 'Nageuse compétitive, chef de projet et conceptrice principale de méthodologie de coaching. Responsable de la conception de programmes, des flux de travail des athlètes et des partenariats communautaires', 'ar' => 'سباحة تنافسية، قائد المشروع ومصمم منهجية التدريب الرئيسي. مسؤول عن تصميم البرامج وتدفقات العمل للرياضيين وشراكات المجتمع'],
        'quote' => ['en' => 'I believe everyone deserves access to world-class coaching, regardless of their background or location', 'fr' => 'Je crois que tout le monde mérite d\'avoir accès à un coaching de classe mondiale, quel que soit son origine ou son lieu de résidence', 'ar' => 'أؤمن بأن الجميع يستحقون الوصول إلى تدريب على مستوى عالمي، بغض النظر عن خلفيتهم أو موقعهم'],
    ],
    [
        'name' => 'Nour El Houda Gharbi',
        'initials' => 'NEH',
        'title' => ['en' => 'Nutrition Lead & Content Strategist', 'fr' => 'Responsable Nutrition & Stratège de Contenu', 'ar' => 'رئيس التغذية واستراتيجي المحتوى'],
        'bio' => ['en' => 'Responsible for meal plan algorithms, recipe curation, and educational content. Ensures all nutrition guidance is evidence-based and culturally appropriate', 'fr' => 'Responsable des algorithmes de plans de repas, de la curation de recettes et du contenu éducatif. Veille à ce que tous les conseils nutritionnels soient fondés sur des preuves et culturellement appropriés', 'ar' => 'مسؤولة عن خوارزميات خطط الوجبات وتجميع الوصفات والمحتوى التعليمي. تضمن أن جميع إرشادات التغذية قائمة على الأدلة ومناسبة ثقافيًا'],
        'quote' => ['en' => 'Nutrition is the foundation of health. I\'m passionate about making healthy eating accessible and enjoyable for everyone', 'fr' => 'La nutrition est le fondement de la santé. Je suis passionnée par la rendre l\'alimentation saine accessible et agréable pour tous', 'ar' => 'التغذية هي أساس الصحة. أنا متحمسة لجعل الأكل الصحي في متناول الجميع وممتعًا'],
    ],
    [
        'name' => 'Adib Arbi',
        'initials' => 'AA',
        'title' => ['en' => 'CTO & Backend Lead', 'fr' => 'CTO & Responsable Backend', 'ar' => 'الرئيس التنفيذي للتكنولوجيا وقائد الخلفية'],
        'bio' => ['en' => 'Responsible for system architecture, APIs, security, integrations and CI/CD. Ensures the platform is scalable, secure, and reliable', 'fr' => 'Responsable de l\'architecture système, des API, de la sécurité, des intégrations et du CI/CD. Assure que la plateforme est évolutive, sécurisée et fiable', 'ar' => 'مسؤول عن بنية النظام وواجهات برمجة التطبيقات والأمان والتكاملات وCI/CD. يضمن أن المنصة قابلة للتطوير وآمنة وموثوقة'],
        'quote' => ['en' => 'Building technology that genuinely improves people\'s lives is what drives me every day', 'fr' => 'Construire une technologie qui améliore vraiment la vie des gens est ce qui me motive chaque jour', 'ar' => 'بناء التكنولوجيا التي تحسن حياة الناس حقًا هو ما يدفعني كل يوم'],
    ],
    [
        'name' => 'Cyrine Zouari',
        'initials' => 'CZ',
        'title' => ['en' => 'Head of Design & UX', 'fr' => 'Responsable Design', 'ar' => 'رئيس التصميم وتجربة المستخدم'],
        'bio' => ['en' => 'Responsible for product design, accessibility, visual identity. Creates intuitive, beautiful experiences that users love', 'fr' => 'Responsable du design produit, de l\'accessibilité, de l\'identité visuelle et de l\'UX multiplateforme. Crée des expériences intuitives et magnifiques que les utilisateurs adorent', 'ar' => 'مسؤولة عن تصميم المنتج وإمكانية الوصول والهوية البصرية وتجربة المستخدم عبر المنصات. تخلق تجارب بديهية وجميلة يحبها المستخدمون'],
        'quote' => ['en' => 'Great design is invisible—it just works. I strive to create experiences that feel effortless and delightful', 'fr' => 'Un excellent design est invisible - il fonctionne simplement. Je m\'efforce de créer des expériences qui semblent sans effort et délicieuses', 'ar' => 'التصميم العظيم غير مرئي - إنه يعمل فقط. أسعى لإنشاء تجارب تشعر بالسهولة والبهجة'],
    ],
    [
        'name' => 'Ghada Souissi',
        'initials' => 'GS',
        'title' => ['en' => 'Community & Operations Manager', 'fr' => 'Responsable Communauté & Opérations', 'ar' => 'مديرة المجتمع والعمليات'],
        'bio' => ['en' => 'Responsible for customer support, onboarding flows, community programs and events. Ensures every user feels supported and valued', 'fr' => 'Responsable du support client, des flux d\'intégration, des programmes communautaires et des événements. Veille à ce que chaque utilisateur se sente soutenu et valorisé.', 'ar' => 'مسؤولة عن دعم العملاء وتدفقات الإعداد وبرامج المجتمع والفعاليات. تضمن أن كل مستخدم يشعر بالدعم والتقدير.'],
        'quote' => ['en' => 'The best products are built with the community, not just for them. I\'m here to make sure every voice is heard', 'fr' => 'Les meilleurs produits sont construits avec la communauté, pas seulement pour elle. Je suis là pour m\'assurer que chaque voix est entendue', 'ar' => 'أفضل المنتجات تُبنى مع المجتمع، وليس فقط من أجله. أنا هنا للتأكد من سماع كل صوت'],
    ],
    [
        'name' => 'Nesrine Amami',
        'initials' => 'NA',
        'title' => ['en' => 'Partnerships & Growth', 'fr' => 'Partenariats & Croissance', 'ar' => 'الشراكات والنمو'],
        'bio' => ['en' => 'Responsible for business development, clinician/coaches network, and strategic integrations. Builds relationships that drive growth and impact', 'fr' => 'Responsable du développement commercial, du réseau de cliniciens/coachs et des intégrations stratégiques. Construit des relations qui stimulent la croissance et l\'impact.', 'ar' => 'مسؤولة عن تطوير الأعمال وشبكة الأطباء/المدربين والتكاملات الاستراتيجية. تبني علاقات تدفع النمو والتأثير.'],
        'quote' => ['en' => 'Partnerships are about creating win-win scenarios. When we succeed together, everyone benefits', 'fr' => 'Les partenariats consistent à créer des scénarios gagnant-gagnant. Quand nous réussissons ensemble, tout le monde en bénéficie', 'ar' => 'الشراكات تدور حول خلق سيناريوهات مربحة للطرفين. عندما ننجح معًا، يستفيد الجميع'],
    ],
];

$teamTitle = [
    'en' => 'Meet the Team',
    'fr' => 'Rencontrez l\'Équipe',
    'ar' => 'تعرف على الفريق'
];

$teamSubtitle = [
    'en' => 'Visionary leaders building the future of health and wellness coaching',
    'fr' => 'Des leaders visionnaires qui construisent l\'avenir du coaching santé et bien-être',
    'ar' => 'قادة رؤيويون يبنون مستقبل التدريب الصحي والرفاهية'
];
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>" dir="<?php echo $isRTL ? 'rtl' : 'ltr'; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $lang === 'en' ? 'Team' : ($lang === 'fr' ? 'Équipe' : 'الفريق'); ?> - Coachini</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Cairo:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        /* Team Section Styles */
        .team-section {
            padding: 140px 0 6rem;
            position: relative;
            z-index: 10;
        }

        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2.5rem;
            margin-top: 4rem;
        }

        .team-card-flip {
            perspective: 1000px;
            height: 450px;
            cursor: pointer;
        }

        .card-inner {
            position: relative;
            width: 100%;
            height: 100%;
            text-align: center;
            transition: transform 0.8s;
            transform-style: preserve-3d;
        }

        .team-card-flip:hover .card-inner {
            transform: rotateY(180deg);
        }

        .card-front,
        .card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            border-radius: 1.5rem;
            padding: 2.5rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            border: 1px solid var(--border);
            background: rgba(17, 17, 17, 0.6);
            backdrop-filter: blur(10px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
        }

        .card-front {
            background: rgba(17, 17, 17, 0.6);
        }

        .card-back {
            background: rgba(17, 17, 17, 0.8);
            transform: rotateY(180deg);
            border-color: var(--blue);
            box-shadow: 0 20px 60px var(--shadow-gold);
        }

        .member-photo {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin: 0 auto 2rem;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, var(--blue), var(--blue-dark));
            box-shadow: 0 10px 30px var(--shadow-gold);
            position: relative;
            overflow: hidden;
        }

        .member-photo::before {
            content: '';
            position: absolute;
            inset: -3px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--blue), var(--blue-dark));
            opacity: 0;
            transition: opacity 0.4s;
            z-index: -1;
        }

        .team-card-flip:hover .member-photo::before {
            opacity: 0.5;
            animation: pulse-blue 2s infinite;
        }

        @keyframes pulse-blue {
            0%, 100% { transform: scale(1); opacity: 0.5; }
            50% { transform: scale(1.1); opacity: 0.2; }
        }

        .photo-placeholder {
            font-size: 3rem;
            font-weight: 700;
            color: white;
            z-index: 1;
        }

        .card-front h3 {
            font-size: 1.75rem;
            margin-bottom: 0.75rem;
            color: var(--text);
            font-weight: 700;
        }

        .member-role {
            color: var(--blue);
            font-weight: 600;
            font-size: 1.1rem;
        }

        .card-back h3 {
            font-size: 1.75rem;
            margin-bottom: 1.5rem;
            color: var(--text);
            font-weight: 700;
        }

        .card-back p {
            color: var(--text-light);
            margin-bottom: 1.5rem;
            line-height: 1.7;
            font-size: 1rem;
        }

        .member-quote {
            font-style: italic;
            color: var(--text);
            margin-bottom: 1.5rem;
            border-left: 3px solid var(--blue);
            padding-left: 1rem;
            text-align: left;
            font-size: 0.95rem;
        }

        [dir="rtl"] .member-quote {
            border-left: none;
            border-right: 3px solid var(--blue);
            padding-left: 0;
            padding-right: 1rem;
            text-align: right;
        }

        @media (max-width: 768px) {
            .team-grid {
                grid-template-columns: 1fr;
            }
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

    <?php include 'includes/header.php'; ?>

    <section class="team-section">
        <div class="container">
            <div class="section-header">
                <span class="section-label"><?php echo $lang === 'en' ? 'Team' : ($lang === 'fr' ? 'Équipe' : 'الفريق'); ?></span>
                <h2 class="section-title"><?php echo $teamTitle[$lang]; ?></h2>
                <p class="section-subtitle"><?php echo $teamSubtitle[$lang]; ?></p>
            </div>
            <div class="team-grid">
                <?php foreach ($team as $member): ?>
                <div class="team-card-flip" data-name="<?php echo $member['name']; ?>">
                    <div class="card-inner">
                        <div class="card-front">
                            <div class="member-photo">
                                <div class="photo-placeholder"><?php echo $member['initials']; ?></div>
                            </div>
                            <h3><?php echo $member['name']; ?></h3>
                            <p class="member-role"><?php echo $member['title'][$lang]; ?></p>
                        </div>
                        <div class="card-back">
                            <h3><?php echo $member['name']; ?></h3>
                            <p><?php echo $member['bio'][$lang]; ?></p>
                            <div class="member-quote">"<?php echo $member['quote'][$lang]; ?>"</div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>
    <script src="assets/js/main.js"></script>
</body>
</html>
