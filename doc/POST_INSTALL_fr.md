# 🚀 Guide post‑installation

Votre application My Webapp est installée. Voici la suite.

## 🎯 **Étapes suivantes**

### **1. Accéder à l’application**
- **URL :** `http://__DOMAIN____PATH__`
- **La page d’accueil** affiche les infos SFTP/SSH

### **2. Envoyer vos fichiers**

#### **Via SFTP (recommandé)**
- **Hôte :** `__DOMAIN__`
- **Identifiant :** `__ID__`
- **Mot de passe :** celui défini à l’installation
- **Port :** 22
- **Dossier :** `/var/www/__APP__/www/`

#### **Via SSH**
```bash
ssh __ID__@__DOMAIN__
cd /var/www/__APP__/www/
```

### **3. Configuration selon le mode**

#### **Mode Classique**
- Déposez vos fichiers HTML/PHP directement dans `/www/`
- Les fichiers sont servis tels quels

#### **Mode CMS**
- Déposez les fichiers du CMS dans `/www/`
- Assurez‑vous que `index.php` est à la racine
- Configurez votre CMS (WordPress, Drupal, etc.)

#### **Mode CMS-Public**
- Déposez les fichiers du framework dans `/www/`
- Placez `index.php` dans `/www/public/`
- Configurez votre framework (Laravel, Symfony, etc.)

## 🔧 **Configuration**

### **Changer de mode après installation**
```bash
sudo ./scripts/config
```

### **Pages d’erreur personnalisées**
Créez le dossier `/www/error/` avec :
- `403.html` — Accès refusé
- `404.html` — Page non trouvée

### **Configuration Nginx personnalisée**
Modifiez `/etc/nginx/conf.d/__DOMAIN__.d/__APP__.d/`
Rechargez : `sudo nginx -t && sudo systemctl reload nginx`

## 📊 **Vérification**

### **Statut**
```bash
sudo yunohost app status __APP__
```

### **Logs**
```bash
sudo tail -f /var/log/nginx/error.log
```

## 🆘 **Besoin d’aide ?**

- **Documentation :** onglet Documentation de l’app
- **Communauté :** forum YunoHost (`https://forum.yunohost.org`)
- **Support :** documentation YunoHost (`https://yunohost.org/docs`)
