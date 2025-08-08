# Guide d'Administration FlexWebApp

FlexWebApp est un framework d'application web flexible qui propose plusieurs modes de déploiement. Ce guide vous aidera à gérer votre application efficacement.

## <i class="fas fa-rocket"></i> Premiers Pas

FlexWebApp crée une structure d'application web propre où vous pouvez ajouter votre propre contenu (HTML, CSS, PHP, etc.) à l'intérieur de `__INSTALL_DIR__/www/`. La méthode la plus courante pour gérer vos fichiers est via SFTP.

## <i class="fas fa-folder"></i> Gestion des Fichiers via SFTP

### Détails de Connexion

Une fois installée, rendez-vous sur l'URL de votre application pour obtenir les informations de connexion SFTP :

- **Hôte** : `__DOMAIN__`
- **Nom d'utilisateur** : `__ID__`
- **Mot de passe** : Mot de passe défini lors de l'installation
- **Port** : 22 (à moins que vous ayez changé le port SSH)

### Clients SFTP

Vous pouvez vous connecter avec n'importe quel client SFTP :
- **Windows/Mac/Linux** : [FileZilla](https://filezilla-project.org/)
- **Mac** : Finder intégré (Aller > Se connecter au serveur)
- **Linux** : Gestionnaire de fichiers avec support SFTP

### <i class="fas fa-key"></i> Gestion de l'Accès SFTP

#### Mot de Passe Oublié ?

Si vous avez oublié votre mot de passe SFTP, vous pouvez le changer dans l'interface web admin de YunoHost :
1. Allez dans **Applications > FlexWebApp > Configuration FlexWebApp**
2. Mettez à jour le mot de passe SFTP
3. Vérifiez que SFTP est activé

## <i class="fas fa-terminal"></i> Accès en Ligne de Commande

À partir de YunoHost v11.1.21, vous pouvez accéder à votre application via la ligne de commande :

```bash
sudo yunohost app shell __APP__
```

Cela vous donne un accès direct en tant qu'utilisateur de l'application. La commande `php` pointera vers la version PHP installée pour votre app.

## <i class="fas fa-folder-open"></i> Structure des Fichiers

Après connexion, vous verrez un dossier `www` contenant les fichiers publics servis par votre application. C'est là que vous devez placer tous vos fichiers d'application web.

### Modes d'Application

Selon votre mode d'installation, vos fichiers doivent être organisés comme suit :

- **Mode Statique** : Placez les fichiers directement dans `www/`
- **Mode Contrôleur Frontal** : Placez `index.php` à la racine de `www/`
- **Mode Framework** : Placez les fichiers dans `www/public/` avec `index.php` comme contrôleur frontal

### Ajouter des Dossiers et Fichiers Personnalisés

Vous pouvez créer n'importe quelle structure de dossiers dans `www/` pour organiser votre application :

```
www/
├── index.php              # Contrôleur frontal (Mode Contrôleur Frontal)
├── assets/                # CSS, JS, images
│   ├── css/
│   ├── js/
│   └── images/
├── uploads/               # Fichiers uploadés par les utilisateurs
├── templates/             # Templates HTML
├── includes/              # Inclusions PHP
├── api/                   # Points d'entrée API
├── admin/                 # Zone d'administration
├── config/                # Fichiers de configuration
├── src/                   # Code source
├── app/                   # Logique d'application
└── vendor/                # Dépendances (Composer)
```

**Note** : Tous les fichiers dans `www/` sont accessibles publiquement. Gardez les fichiers sensibles en dehors de ce répertoire.

### Créer de Vraies Pages

En mode Contrôleur Frontal, vous pouvez créer de vrais fichiers HTML qui seront servis directement :

```
www/
├── index.php              # Contrôleur frontal (gère le routage)
├── about.html             # Vraie page about (servie directement)
├── contact.html           # Vraie page contact (servie directement)
├── assets/                # CSS, JS, images
│   ├── css/
│   ├── js/
│   └── images/
└── api/                   # Points d'entrée API
    └── test.php           # Vrai point d'entrée API
```

**Important** : Les fichiers statiques (`.html`, `.css`, `.js`, images) sont servis directement par Nginx. Seuls les fichiers PHP et les chemins inexistants sont routés via `index.php`.

## <i class="fas fa-exclamation-triangle"></i> Gestion des Erreurs

### Pages d'Erreur Personnalisées

FlexWebApp prend en charge la gestion des pages d'erreur personnalisées pour les erreurs HTTP 403 et 404 :

1. Créez un dossier `error` à `__INSTALL_DIR__/www/error/`
2. Ajoutez vos pages d'erreur personnalisées :
   - `403.html` pour les erreurs "Accès Refusé"
   - `404.html` pour les erreurs "Non Trouvé"

### Activation des Pages d'Erreur

Activez les pages d'erreur personnalisées via le panneau de configuration dans l'interface web admin de YunoHost.

## <i class="fas fa-cogs"></i> Configuration Avancée

### Personnalisation de la Configuration Nginx

Si vous devez personnaliser la configuration Nginx :

1. Éditez `/etc/nginx/conf.d/__DOMAIN__.d/__ID__.d/VOTRE_FICHIER_PERSONNALISE.conf`
2. Assurez-vous que le fichier a l'extension `.conf`
3. Testez la configuration : `nginx -t`
4. Rechargez Nginx : `systemctl reload nginx`

> <i class="fas fa-lightbulb"></i> **Conseil** : Testez toujours votre configuration Nginx avant de recharger pour éviter de casser votre site.

## <i class="fas fa-wrench"></i> Panneau de Configuration

Accédez au panneau de configuration dans l'interface web admin de YunoHost pour :
- Changer le mot de passe SFTP
- Activer/désactiver l'accès SFTP
- Basculer entre les modes d'application
- Configurer les pages d'erreur personnalisées
- Gérer les paramètres PHP

## <i class="fas fa-book"></i> Bonnes Pratiques

- **Sauvegardez régulièrement** : Vos fichiers sont automatiquement sauvegardés avec YunoHost
- **Utilisez le contrôle de version** : Considérez l'utilisation de Git pour vos fichiers d'application web
- **Testez les modifications** : Testez toujours les modifications dans un environnement de développement d'abord
- **Maintenez PHP à jour** : Mettez régulièrement à jour votre version PHP pour la sécurité
