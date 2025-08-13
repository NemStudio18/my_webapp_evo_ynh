# 🔧 Guide d’administration

Ce guide couvre l’administration avancée de My Webapp.

## 🎯 **Gestion des modes**

### **Changer le mode d’application**
```bash
sudo ./scripts/config
```

**Modes disponibles :**
- `classic` — Fichiers statiques + PHP
- `cms` — Front controller (WordPress, Drupal)
- `cms-public` — Front controller avec dossier `/public`

### **Configurations selon le mode**

#### **Mode Classique**
- Utilise `nginx-php.conf` pour le support PHP
- Sert les fichiers directement depuis `/www/`

#### **Mode CMS**
- Utilise `nginx-cms.conf` pour le front controller
- Toutes les requêtes passent par `index.php`

#### **Mode CMS-Public**
- Utilise `nginx-cms-public.conf` pour les frameworks
- Sert depuis le dossier `/www/public/`

## 📁 **Gestion des fichiers**

### **Accès SFTP/SSH**
- **Identifiant :** `__ID__`
- **Mot de passe :** défini à l’installation (ou mot de passe admin)
- **Dossier :** `/var/www/__APP__/www/`

### **Dossiers importants**
- `/www/` — Fichiers de l’application
- `/www/public/` — Fichiers publics (mode CMS-Public)
- `/conf/` — Modèles de configuration
- `/scripts/` — Scripts d’administration

## 🔒 **Sécurité**

### **Permissions des fichiers**
- Fichiers d’application : `__ID__:__ID__`
- Fichiers de configuration : `root:root`

### **Fichiers protégés**
- Fichiers `.env`, `.json`, `.ini` bloqués
- Dossiers cachés protégés (sauf `.well-known`)

## 🚀 **Maintenance**

### **Sauvegarde**
```bash
sudo yunohost backup create --include-apps my_webapp
```

### **Restauration**
```bash
sudo yunohost backup restore my_webapp
```

### **Mise à jour**
```bash
sudo yunohost app upgrade my_webapp
```

## 📊 **Supervision**

### **Logs**
- Nginx : `/var/log/nginx/`
- PHP-FPM : `/var/log/php8.x-fpm.log`
- Application : `/var/log/my_webapp/`

### **État des services**
```bash
sudo systemctl status nginx
sudo systemctl status php8.x-fpm
```
