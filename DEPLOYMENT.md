# Guide de Déploiement - Coachini Website

## 📦 Prérequis

- Serveur web avec PHP 7.4+ (Apache/Nginx)
- Base de données : Non requise (site statique avec PHP pour la localisation)
- Espace disque : ~10 MB

## 🚀 Déploiement sur Serveur Web

### Option 1 : Déploiement sur Serveur Partagé (cPanel, etc.)

1. **Préparer les fichiers**
   - Compressez tous les fichiers du projet en ZIP
   - Assurez-vous que tous les fichiers sont inclus

2. **Uploader sur le serveur**
   - Connectez-vous à votre cPanel/FTP
   - Uploadez le fichier ZIP dans le dossier `public_html` ou `www`
   - Extrayez le fichier ZIP

3. **Vérifier les permissions**
   - Les fichiers doivent avoir les permissions 644
   - Les dossiers doivent avoir les permissions 755

4. **Tester**
   - Visitez votre domaine : `https://votredomaine.com`
   - Testez les différentes langues : `?lang=en`, `?lang=fr`, `?lang=ar`

### Option 2 : Déploiement sur VPS/Serveur Dédié

1. **Copier les fichiers**
   ```bash
   scp -r * user@votre-serveur.com:/var/www/html/coachini/
   ```

2. **Configurer Apache/Nginx**
   - Assurez-vous que PHP est installé et activé
   - Configurez le DocumentRoot vers le dossier du projet

3. **Permissions**
   ```bash
   chmod -R 755 /var/www/html/coachini
   chown -R www-data:www-data /var/www/html/coachini
   ```

### Option 3 : Déploiement sur Services Cloud

#### Vercel (avec PHP Runtime)
- Créez un compte Vercel
- Connectez votre repository Git
- Configurez le build : `vercel.json` avec PHP runtime
- Déployez

#### Netlify (avec PHP Runtime)
- Créez un compte Netlify
- Uploadez les fichiers via drag & drop
- Configurez le build command si nécessaire

#### GitHub Pages (via Actions)
- Créez un repository GitHub
- Utilisez GitHub Actions pour déployer sur Pages
- Configurez un workflow PHP

## 📁 Structure des Fichiers à Déployer

```
Site_coachini/
├── index.php
├── product.php
├── team.php
├── pricing.php
├── how-it-works.php
├── demo.php
├── download.php
├── download-redirect.php
├── privacy.php
├── terms.php
├── cookies.php
├── config.php
├── tel.png
├── qr.png
├── includes/
│   ├── header.php
│   └── footer.php
└── assets/
    ├── css/
    │   ├── style.css
    │   ├── styles.css
    │   ├── vendor.css
    │   └── custom.css
    ├── js/
    │   ├── main.js
    │   ├── plugins.js
    └── images/
```

## ✅ Checklist de Déploiement

- [ ] Tous les fichiers sont présents
- [ ] Les images `tel.png` et `qr.png` sont dans le dossier racine
- [ ] Les permissions sont correctes
- [ ] PHP est activé sur le serveur
- [ ] Le site fonctionne en HTTPS (recommandé)
- [ ] Les liens de téléchargement pointent vers la bonne URL
- [ ] Toutes les langues fonctionnent (EN, FR, AR)
- [ ] Le design responsive fonctionne sur mobile
- [ ] Les animations et effets fonctionnent correctement

## 🔒 Sécurité

1. **Protection des fichiers sensibles**
   - Assurez-vous que `config.php` n'est pas accessible directement
   - Utilisez `.htaccess` pour protéger les fichiers si nécessaire

2. **HTTPS**
   - Activez SSL/HTTPS sur votre serveur
   - Redirigez HTTP vers HTTPS

3. **Backup**
   - Faites une sauvegarde régulière des fichiers
   - Gardez une copie locale

## 🌐 Configuration DNS

1. **Pointage du domaine**
   - Configurez votre domaine pour pointer vers l'IP du serveur
   - Attendez la propagation DNS (24-48h)

2. **Sous-domaines (optionnel)**
   - `www.coachini.com` → redirige vers `coachini.com`
   - Ou vice versa selon votre préférence

## 📊 Analytics & Monitoring

1. **Google Analytics**
   - Ajoutez votre code GA4 dans le header si nécessaire

2. **Monitoring**
   - Configurez des alertes pour les erreurs serveur
   - Surveillez les performances

## 🐛 Dépannage

### Erreur 500
- Vérifiez les permissions des fichiers
- Vérifiez les logs d'erreur PHP
- Assurez-vous que PHP est activé

### Pages blanches
- Activez l'affichage des erreurs PHP temporairement
- Vérifiez la syntaxe PHP
- Vérifiez que tous les fichiers sont présents

### Images non affichées
- Vérifiez les chemins des images
- Vérifiez les permissions des fichiers images
- Vérifiez que `tel.png` et `qr.png` sont dans le dossier racine

## 📞 Support

Pour toute question sur le déploiement, consultez :
- Les logs d'erreur du serveur
- La documentation PHP
- La documentation de votre hébergeur

---

**Note** : Ce site est prêt pour la production et ne nécessite aucune installation de dépendances.

