# Guide d'Administration FlexWebApp

FlexWebApp est un framework d'application web flexible qui fournit plusieurs modes de déploiement. Ce guide vous aidera à gérer votre application efficacement.

## ▶️ Pour Commencer

FlexWebApp crée une structure d'application web propre où vous pouvez ajouter votre propre contenu (HTML, CSS, PHP, etc.) dans `__INSTALL_DIR__/www/`. La méthode la plus courante pour gérer vos fichiers est via SFTP.

## 🎯 Modes d'Application

FlexWebApp prend en charge trois modes de déploiement, chacun avec des configurations Nginx optimisées :

### 📄 Mode Statique
- **Objectif** : Service de fichiers statiques de base (HTML, CSS, JS, images)
- **Racine Web** : `__INSTALL_DIR__/www/`
- **Fonctionnalités** : 
  - Service direct des fichiers
  - Sécurité renforcée (bloque .php, .json, .tpl, .ini, .env)
  - Protection des fichiers cachés
  - Journalisation optimisée

### 🚀 Mode Front Controller
- **Objectif** : Applications PHP avec point d'entrée unique
- **Racine Web** : `__INSTALL_DIR__/www/`
- **Contrôleur Frontal** : `index.php` à la racine
- **Fonctionnalités** :
  - Toutes les requêtes routées via `index.php`
  - Fichiers statiques servis directement s'ils existent
  - Sécurité renforcée (bloque les types de fichiers sensibles)
  - Capacités de routage avancées

### 🏗️ Mode Framework
- **Objectif** : Structure de framework moderne avec racine web publique
- **Racine Web** : `__INSTALL_DIR__/www/public/`
- **Contrôleur Frontal** : `public/index.php`
- **Fonctionnalités** :
  - Séparation sécurisée des fichiers publics et privés
  - Toutes les requêtes routées via `public/index.php`
  - Sécurité renforcée (bloque les types de fichiers sensibles)
  - Structure compatible avec les frameworks

### 🔒 Fonctionnalités de Sécurité (Tous les Modes)
- **Protection des Fichiers** : Bloque l'accès aux extensions sensibles
- **Fichiers Cachés** : Refuse l'accès aux fichiers cachés (sauf .well-known)
- **Listing des Répertoires** : Désactivé pour la sécurité
- **Journalisation Optimisée** : Réduit les entrées de journal inutiles

## 📁 Gestion des Fichiers via SFTP

### Détails de Connexion
- **Domaine** : `__DOMAIN__`
- **Port** : `__SSH_PORT__`
- **Utilisateur** : `__ID__`
- **Mot de passe** : celui que vous avez défini à l'installation (ou le mot de passe de votre compte si aucun n'a été défini)

### Gestion de l'Accès SFTP

#### Mot de Passe Oublié ?
Si vous avez oublié votre mot de passe SFTP, vous pouvez le réinitialiser via le panneau de configuration dans l'interface d'administration de YunoHost.

#### Ajout de Dossiers et Fichiers Personnalisés
Vous pouvez créer n'importe quelle structure de dossiers dans votre répertoire `www` :
```
www/
├── css/          ← Vos feuilles de style
├── js/           ← Vos fichiers JavaScript
├── images/       ← Vos images
├── pages/        ← Pages HTML personnalisées
├── api/          ← Points de terminaison API (si utilisation de PHP)
└── uploads/      ← Téléchargements utilisateur
```

#### Création de Vraies Pages
Pour créer des pages réelles que Nginx servira :
- **Pages HTML** : Créez des fichiers `.html` (ex : `about.html`, `contact.html`)
- **Pages PHP** : Créez des fichiers `.php` (ex : `api.php`, `dashboard.php`)
- **Ressources statiques** : Placez CSS, JS et images dans des dossiers appropriés

> 💡 **Note** : Dans les modes front-controller et framework, seuls les fichiers qui n'existent pas seront routés via le contrôleur frontal PHP.

## 💻 Accès en Ligne de Commande

À partir de YunoHost v11.1.21, vous pouvez accéder à votre application via la ligne de commande :
```bash
yunohost app shell flexwebapp
```

## 📂 Structure des Fichiers

Après connexion, vous verrez un dossier `www` contenant les fichiers publics servis par votre application. C'est là que vous devez placer tous vos fichiers d'application web.

## ⚠️ Gestion des Erreurs

### Pages d'Erreur Personnalisées
Créez un dossier `error` dans votre répertoire `www` et ajoutez des pages d'erreur personnalisées :
- `404.html` - Page non trouvée
- `500.html` - Erreur serveur
- `403.html` - Accès interdit

## ⚙️ Configuration Avancée

### Personnalisation de la Configuration Nginx
Vous pouvez ajouter des configurations Nginx personnalisées en créant des fichiers `.conf` dans le répertoire `conf/`. Ceux-ci seront automatiquement inclus.

> 💡 **Conseil** : Testez toujours votre configuration Nginx avant de recharger pour éviter de casser votre site.

## 🔧 Panneau de Configuration

Accédez au panneau de configuration dans l'administration web de YunoHost pour :
- **Changer le mode d'application** entre statique, front-controller et framework
- **Activer/désactiver l'accès SFTP**
- **Réinitialiser le mot de passe SFTP**
- **Configurer les pages d'erreur personnalisées**
- **Gérer la version PHP**

## 📚 Bonnes Pratiques

- **Sauvegarde régulière** : Vos fichiers sont automatiquement sauvegardés avec YunoHost
- **Utiliser le mode approprié** : Choisissez le mode qui convient le mieux aux besoins de votre projet
- **Garder les fichiers sensibles hors de la racine web** : En mode framework, utilisez la structure de dossier `public/`
- **Tester les configurations** : Testez toujours les configurations Nginx avant de les appliquer
- **Surveiller les journaux** : Vérifiez les journaux d'application pour tout problème
