# Coachini Website

Site web simple en HTML, PHP et JavaScript - **Aucune installation requise !**

## 🚀 Utilisation

1. **Copiez tous les fichiers** dans votre dossier XAMPP : `C:\xampp\htdocs\Site_coachini\`

2. **Démarrez XAMPP** (Apache doit être activé)

3. **Ouvrez votre navigateur** et allez sur : `http://localhost/Site_coachini/`

C'est tout ! Le site fonctionne immédiatement.

## 📁 Structure des fichiers

```
Site_coachini/
├── index.php              # Page d'accueil
├── product.php            # Page produit
├── team.php               # Page équipe
├── pricing.php            # Page tarifs
├── how-it-works.php       # Comment ça marche
├── demo.php               # Formulaire de démo
├── download.php           # Téléchargement app
├── privacy.php            # Politique de confidentialité
├── terms.php              # Conditions d'utilisation
├── cookies.php            # Politique des cookies
├── config.php             # Configuration et traductions
├── includes/
│   ├── header.php         # En-tête (navigation)
│   └── footer.php         # Pied de page
└── assets/
    ├── css/
    │   └── style.css      # Styles CSS
    └── js/
        └── main.js        # JavaScript
```

## 🌍 Langues

Le site supporte **2 langues** :
- **Anglais** (par défaut) : `?lang=en`
- **Arabe** (RTL) : `?lang=ar`

Exemple : `http://localhost/Site_coachini/index.php?lang=ar`

## ✨ Fonctionnalités

- ✅ Design moderne et responsive
- ✅ Bilingue (Anglais/Arabe) avec support RTL
- ✅ Navigation mobile
- ✅ Animations JavaScript
- ✅ Formulaire de contact (demo.php)
- ✅ Toutes les pages demandées

## 🎨 Personnalisation

### Changer les couleurs
Modifiez les variables CSS dans `assets/css/style.css` :
```css
:root {
    --primary: #0ea5e9;    /* Couleur principale */
    --accent: #d946ef;      /* Couleur accent */
}
```

### Modifier le contenu
- **Traductions** : Modifiez `config.php`
- **Texte des pages** : Modifiez directement les fichiers `.php`
- **Styles** : Modifiez `assets/css/style.css`

## 📝 Notes

- Le formulaire `demo.php` affiche un message de succès mais n'envoie pas réellement d'email (à configurer selon vos besoins)
- Les images des membres de l'équipe utilisent des initiales en attendant les vraies photos
- Tous les liens externes (LinkedIn, App Store, etc.) sont des placeholders

## 🔧 Pour aller plus loin

Si vous voulez ajouter l'envoi d'emails pour le formulaire de contact, modifiez `demo.php` et ajoutez :

```php
// Exemple avec mail()
mail('hello@coachini.com', 'Nouvelle demande de démo', $message);
```

Ou utilisez PHPMailer pour un envoi plus professionnel.

---

**C'est prêt à utiliser !** 🎉

