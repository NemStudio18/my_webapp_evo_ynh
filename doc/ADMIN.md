# FlexWebApp Administration Guide

FlexWebApp is a flexible web application framework that provides multiple deployment modes. This guide will help you manage your application effectively.

## ▶️ Getting Started

FlexWebApp creates a clean web application structure where you can add your own content (HTML, CSS, PHP, etc.) inside `__INSTALL_DIR__/www/`. The most common way to manage your files is through SFTP.

## 🎯 Application Modes

FlexWebApp supports three deployment modes, each with optimized Nginx configurations:

### 📄 Static Mode
- **Purpose**: Basic static file serving (HTML, CSS, JS, images)
- **Web Root**: `__INSTALL_DIR__/www/`
- **Features**: 
  - Direct file serving
  - Enhanced security (blocks .php, .json, .tpl, .ini, .env files)
  - Hidden file protection
  - Optimized logging

### 🚀 Front Controller Mode
- **Purpose**: PHP applications with single entry point
- **Web Root**: `__INSTALL_DIR__/www/`
- **Front Controller**: `index.php` at root
- **Features**:
  - All requests routed through `index.php`
  - Static files served directly when they exist
  - Enhanced security (blocks sensitive file types)
  - Advanced routing capabilities

### 🏗️ Framework Mode
- **Purpose**: Modern framework structure with public web root
- **Web Root**: `__INSTALL_DIR__/www/public/`
- **Front Controller**: `public/index.php`
- **Features**:
  - Secure separation of public and private files
  - All requests routed through `public/index.php`
  - Enhanced security (blocks sensitive file types)
  - Framework-compatible structure

### 🔒 Security Features (All Modes)
- **File Protection**: Blocks access to sensitive extensions
- **Hidden Files**: Denies access to hidden files (except .well-known)
- **Directory Listing**: Disabled for security
- **Optimized Logging**: Reduces unnecessary log entries

## 📁 File Management via SFTP

### Connection Details
- **Domain**: `__DOMAIN__`
- **Port**: `__SSH_PORT__`
- **User**: `__ID__`
- **Password**: the one you set at installation (or your account password if none was set)

### Managing SFTP Access

#### Forgot Your Password?
If you've forgotten your SFTP password, you can reset it through the configuration panel in YunoHost's admin interface.

#### Adding Custom Folders and Files
You can create any folder structure you want in your `www` directory:
```
www/
├── css/          ← Your stylesheets
├── js/           ← Your JavaScript files
├── images/       ← Your images
├── pages/        ← Custom HTML pages
├── api/          ← API endpoints (if using PHP)
└── uploads/      ← User uploads
```

#### Creating Real Pages
To create actual pages that Nginx will serve:
- **HTML pages**: Create `.html` files (e.g., `about.html`, `contact.html`)
- **PHP pages**: Create `.php` files (e.g., `api.php`, `dashboard.php`)
- **Static assets**: Place CSS, JS, and images in appropriate folders

> 💡 **Note**: In front-controller and framework modes, only files that don't exist will be routed through the PHP front controller.

## 💻 Command Line Access

Starting with YunoHost v11.1.21, you can access your application via command line:
```bash
yunohost app shell flexwebapp
```

## 📂 File Structure

After connecting, you'll see a `www` folder containing the public files served by your application. This is where you should place all your web application files.

## ⚠️ Error Handling

### Custom Error Pages
Create an `error` folder in your `www` directory and add custom error pages:
- `404.html` - Page not found
- `500.html` - Server error
- `403.html` - Access forbidden

## ⚙️ Advanced Configuration

### Customizing Nginx Configuration
You can add custom Nginx configurations by creating `.conf` files in the `conf/` directory. These will be automatically included.

> 💡 **Tip**: Always test your Nginx configuration before reloading to avoid breaking your site.

## 🔧 Configuration Panel

Access the configuration panel in YunoHost's web admin to:
- **Change application mode** between static, front-controller, and framework
- **Enable/disable SFTP access**
- **Reset SFTP password**
- **Configure custom error pages**
- **Manage PHP version**

## 📚 Best Practices

- **Backup regularly**: Your files are automatically backed up with YunoHost
- **Use appropriate mode**: Choose the mode that best fits your project needs
- **Keep sensitive files outside web root**: In framework mode, use the `public/` folder structure
- **Test configurations**: Always test Nginx configurations before applying
- **Monitor logs**: Check application logs for any issues
