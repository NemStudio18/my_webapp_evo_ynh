# 🚀 Post-Installation Guide

Your My Webapp is now installed! Here's what to do next.

## 🎯 **Next Steps**

### **1. Access Your Application**
- **URL:** `http://__DOMAIN____PATH__`
- **Welcome page** shows your SFTP/SSH details

### **2. Upload Your Files**

#### **Via SFTP (Recommended)**
- **Host:** `__DOMAIN__`
- **Username:** `__ID__`
- **Password:** Your installation password
- **Port:** 22
- **Directory:** `/var/www/__APP__/www/`

#### **Via SSH**
```bash
ssh __ID__@__DOMAIN__
cd /var/www/__APP__/www/
```

### **3. Mode-Specific Setup**

#### **Classic Mode**
- Upload your HTML/PHP files directly to `/www/`
- Files are served as-is

#### **CMS Mode**
- Upload your CMS files to `/www/`
- Ensure `index.php` is in the root
- Configure your CMS (WordPress, Drupal, etc.)

#### **CMS-Public Mode**
- Upload your framework files to `/www/`
- Place `index.php` in `/www/public/`
- Configure your framework (Laravel, Symfony, etc.)

## 🔧 **Configuration**

### **Change Mode After Installation**
```bash
sudo ./scripts/config
```

### **Custom Error Pages**
Create `/www/error/` folder with:
- `403.html` - Access denied
- `404.html` - Page not found

### **Custom Nginx Configuration**
Edit `/etc/nginx/conf.d/__DOMAIN__.d/__APP__.d/`
Reload with: `sudo nginx -t && sudo systemctl reload nginx`

## 📊 **Verification**

### **Check Status**
```bash
sudo yunohost app status __APP__
```

### **View Logs**
```bash
sudo tail -f /var/log/nginx/error.log
```

## 🆘 **Need Help?**

- **Documentation:** Check the app's documentation tab
- **Community:** [YunoHost Forum](https://forum.yunohost.org)
- **Support:** [YunoHost Documentation](https://yunohost.org/docs)
