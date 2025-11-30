<header class="header">
    <div class="container">
        <nav class="navbar">
            <a href="index.php?lang=<?php echo $lang; ?>" class="logo" style="display: flex; align-items: center; gap: 0.75rem; text-decoration: none;">
                <img src="tel.png" alt="Coachini" style="height: 40px; width: auto; object-fit: contain;" />
                <span style="font-size: 1.75rem; font-weight: 800; background: linear-gradient(135deg, var(--blue), var(--blue-light)); -webkit-background-clip: text; -webkit-text-fill-color: transparent; letter-spacing: -0.5px;">Coachini</span>
            </a>
            <div class="nav-menu">
                <a href="index.php?lang=<?php echo $lang; ?>"><?php echo $t['nav']['home']; ?></a>
                <a href="product.php?lang=<?php echo $lang; ?>"><?php echo $t['nav']['product']; ?></a>
                <a href="team.php?lang=<?php echo $lang; ?>"><?php echo $t['nav']['team']; ?></a>
                <a href="how-it-works.php?lang=<?php echo $lang; ?>"><?php echo $t['nav']['how_it_works']; ?></a>
                <a href="pricing.php?lang=<?php echo $lang; ?>"><?php echo $t['nav']['pricing']; ?></a>
                <a href="demo.php?lang=<?php echo $lang; ?>" class="btn btn-primary btn-sm"><?php echo $t['nav']['demo']; ?></a>
                <div style="display: flex; gap: 0.5rem; align-items: center;">
                    <a href="?lang=<?php 
                        if ($lang === 'en') echo 'fr';
                        elseif ($lang === 'fr') echo 'ar';
                        else echo 'en';
                    ?>" class="lang-switch" style="padding: 0.5rem 0.75rem; border-radius: 0.25rem; background: var(--bg-card); border: 1px solid var(--border); text-decoration: none; color: var(--text); font-weight: 600; transition: all 0.3s;">
                        <?php 
                        if ($lang === 'en') echo 'FR';
                        elseif ($lang === 'fr') echo 'AR';
                        else echo 'EN';
                        ?>
                    </a>
                </div>
            </div>
            <button class="mobile-menu-toggle" onclick="toggleMobileMenu()">☰</button>
        </nav>
    </div>
</header>

