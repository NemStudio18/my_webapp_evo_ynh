# FlexWebApp Administration Guide

FlexWebApp is a flexible web application framework that provides multiple deployment modes. This guide will help you manage your application effectively.

## 🚀 Getting Started

FlexWebApp creates a clean web application structure where you can add your own content (HTML, CSS, PHP, etc.) inside `__INSTALL_DIR__/www/`. The most common way to manage your files is through SFTP.

## 📁 File Management via SFTP

### Connection Details

Once installed, visit your application URL to get the SFTP connection information:

- **Host**: `__DOMAIN__`
- **Username**: `__ID__`
- **Password**: Password set during installation
- **Port**: 22 (unless you changed the SSH port)

### SFTP Clients

You can connect using any SFTP client:
- **Windows/Mac/Linux**: [FileZilla](https://filezilla-project.org/)
- **Mac**: Built-in Finder (Go > Connect to Server)
- **Linux**: File manager with SFTP support

### 🔑 Managing SFTP Access

#### Forgot Your Password?

If you forgot your SFTP password, you can change it in YunoHost's web admin interface:
1. Go to **Apps > FlexWebApp > FlexWebApp configuration**
2. Update the SFTP password
3. Verify that SFTP is enabled

## 💻 Command Line Access

Starting with YunoHost v11.1.21, you can access your application via command line:

```bash
sudo yunohost app shell __APP__
```

This gives you direct access as the application user. The `php` command will point to the PHP version installed for your app.

## 📂 File Structure

After connecting, you'll see a `www` folder containing the public files served by your application. This is where you should place all your web application files.

### Application Modes

Depending on your installation mode, your files should be organized as follows:

- **Static Mode**: Place files directly in `www/`
- **Front Controller Mode**: Place `index.php` in `www/` root
- **Framework Mode**: Place files in `www/public/` with `index.php` as front controller

## ⚠️ Error Handling

### Custom Error Pages

FlexWebApp supports custom error page handling for HTTP errors 403 and 404:

1. Create an `error` folder at `__INSTALL_DIR__/www/error/`
2. Add your custom error pages:
   - `403.html` for "Access Denied" errors
   - `404.html` for "Not Found" errors

### Enabling Error Pages

Enable custom error pages through the configuration panel in YunoHost's web admin interface.

## ⚙️ Advanced Configuration

### Customizing Nginx Configuration

If you need to customize the Nginx configuration:

1. Edit `/etc/nginx/conf.d/__DOMAIN__.d/__ID__.d/YOUR_CUSTOM_FILE.conf`
2. Ensure the file has a `.conf` extension
3. Test the configuration: `nginx -t`
4. Reload Nginx: `systemctl reload nginx`

> 💡 **Tip**: Always test your Nginx configuration before reloading to avoid breaking your site.

## 🔧 Configuration Panel

Access the configuration panel in YunoHost's web admin to:
- Change SFTP password
- Enable/disable SFTP access
- Switch between application modes
- Configure custom error pages
- Manage PHP settings

## 📚 Best Practices

- **Backup regularly**: Your files are automatically backed up with YunoHost
- **Use version control**: Consider using Git for your web application files
- **Test changes**: Always test modifications in a development environment first
- **Keep PHP updated**: Regularly update your PHP version for security
