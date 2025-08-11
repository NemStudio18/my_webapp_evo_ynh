# FlexWebApp - Modern Web Application Framework

FlexWebApp is a versatile web application framework that allows you to easily deploy your custom websites with multiple deployment modes to suit your needs.

## ▶️ Multiple Deployment Modes

Choose the deployment mode that best fits your project:

- **Static Mode**: Basic static file serving with enhanced security
- **Front Controller Mode**: PHP front controller at root with advanced routing
- **Framework Mode**: Modern framework structure with a dedicated `public/` directory

### 🔒 Security Features

All modes include enhanced security configurations:
- **File protection**: Blocks access to sensitive extensions (.json, .tpl, .ini, .env)
- **Hidden file protection**: Denies access to hidden files (except .well-known)
- **Directory listing disabled**: Prevents directory browsing
- **Optimized logging**: Reduces unnecessary log entries

## 📁 File Management

Upload your files via SFTP or any method of your choice. The application provides a clean, organized structure for your web content.

## 💾 Database Support

During installation, you can initialize a MySQL or PostgreSQL database that will be automatically backed up and restored with your application.

## ⚡ PHP-FPM Configuration

Select your preferred PHP-FPM version: none, 8.1, 8.2, 8.3, or 8.4.

## 🔧 Post-Installation Configuration

Once installed, visit your chosen URL to get SFTP access details. The password is set during installation. Your web files are located in the `www` folder.

## 🎨 Custom Error Pages

Enable custom 404 error pages through the configuration panel. Simply create an `error` folder in your `www` directory and add your custom HTML error files.

## 🔒 Security & Performance

Built with security and performance in mind, FlexWebApp provides a robust foundation for your web projects with automatic backups and optimized configurations. 
