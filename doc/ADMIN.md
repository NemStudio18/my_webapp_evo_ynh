# 🔧 Administration Guide

This guide covers advanced administration tasks for My Webapp.

## 🎯 **Mode Management**

### **Changing Application Mode**
```bash
sudo ./scripts/config
```

**Available modes:**
- `classic` - Standard static files + PHP
- `cms` - Front controller (WordPress, Drupal)
- `cms-public` - Front controller with `/public` directory

### **Mode-Specific Configurations**

#### **Classic Mode**
- Uses `nginx-php.conf` for PHP support
- Serves files directly from `/www/`

#### **CMS Mode**
- Uses `nginx-cms.conf` for front controller
- Routes all requests through `index.php`

#### **CMS-Public Mode**
- Uses `nginx-cms-public.conf` for framework support
- Serves from `/www/public/` directory

## 📁 **File Management**

### **SFTP/SSH Access**
- **Username:** `__ID__`
- **Password:** Set during installation or admin password
- **Directory:** `/var/www/__APP__/www/`

### **Important Directories**
- `/www/` - Main application files
- `/www/public/` - Public files (CMS-Public mode)
- `/conf/` - Configuration templates
- `/scripts/` - Administration scripts

## 🔒 **Security**

### **File Permissions**
- Application files: `__ID__:__ID__`
- Configuration files: `root:root`

### **Protected Files**
- `.env`, `.json`, `.ini` files are blocked
- Hidden directories (except `.well-known`) are protected

## 🚀 **Maintenance**

### **Backup**
```bash
sudo yunohost backup create --include-apps my_webapp
```

### **Restore**
```bash
sudo yunohost backup restore my_webapp
```

### **Upgrade**
```bash
sudo yunohost app upgrade my_webapp
```

## 📊 **Monitoring**

### **Logs**
- Nginx: `/var/log/nginx/`
- PHP-FPM: `/var/log/php8.x-fpm.log`
- Application: `/var/log/my_webapp/`

### **Status Check**
```bash
sudo systemctl status nginx
sudo systemctl status php8.x-fpm
```
