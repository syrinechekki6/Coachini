<footer class="footer">
    <div class="container">
        <div class="footer-grid">
            <div class="footer-col">
                <h3>Coachini</h3>
                <p><?php echo $lang === 'en' ? 'Enterprise-grade coaching & wellbeing platform' : 'منصة التدريب والرفاهية على مستوى المؤسسات'; ?></p>
                <div class="social-links">
                    <a href="#" aria-label="LinkedIn">LinkedIn</a>
                    <a href="#" aria-label="Twitter">Twitter</a>
                    <a href="#" aria-label="Instagram">Instagram</a>
                </div>
            </div>
            <div class="footer-col">
                <h4><?php echo $lang === 'en' ? 'Product' : 'المنتج'; ?></h4>
                <ul>
                    <li><a href="product.php?lang=<?php echo $lang; ?>"><?php echo $lang === 'en' ? 'Product' : 'المنتج'; ?></a></li>
                    <li><a href="how-it-works.php?lang=<?php echo $lang; ?>"><?php echo $lang === 'en' ? 'How it Works' : 'كيف يعمل'; ?></a></li>
                    <li><a href="pricing.php?lang=<?php echo $lang; ?>"><?php echo $lang === 'en' ? 'Pricing' : 'الأسعار'; ?></a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4><?php echo $lang === 'en' ? 'Legal' : 'قانوني'; ?></h4>
                <ul>
                    <li><a href="privacy.php?lang=<?php echo $lang; ?>"><?php echo $lang === 'en' ? 'Privacy Policy' : 'سياسة الخصوصية'; ?></a></li>
                    <li><a href="terms.php?lang=<?php echo $lang; ?>"><?php echo $lang === 'en' ? 'Terms of Service' : 'شروط الخدمة'; ?></a></li>
                    <li><a href="cookies.php?lang=<?php echo $lang; ?>"><?php echo $lang === 'en' ? 'Cookie Policy' : 'سياسة ملفات تعريف الارتباط'; ?></a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4><?php echo $lang === 'en' ? 'Contact' : 'اتصل بنا'; ?></h4>
                <ul>
                    <li><a href="mailto:hello@coachini.com">hello@coachini.com</a></li>
                    <li><a href="demo.php?lang=<?php echo $lang; ?>"><?php echo $lang === 'en' ? 'Support' : 'الدعم'; ?></a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> Coachini. <?php echo $lang === 'en' ? 'All rights reserved.' : 'جميع الحقوق محفوظة.'; ?></p>
        </div>
    </div>
</footer>

