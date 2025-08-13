<?php
/**
 * My Webapp - CMS Mode
 * Front controller ready for WordPress, Drupal, and other CMS
 * 
 * This file will be replaced by your actual CMS index.php
 */

// Configuration
$app_name = '__APP__';
$domain = '__DOMAIN__';
$ssh_port = '__SSH_PORT__';
$app_id = '__ID__';
$install_dir = '/var/www/' . $app_name . '/www';

// Check if SFTP is enabled (by checking if password setting exists)
$sftp_enabled = true; // Will be determined by checking app settings

// Get current timestamp
$timestamp = date('Y-m-d H:i:s');

// Generate a simple hash for security
$security_hash = md5($app_name . $timestamp);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($app_name); ?> - CMS Ready</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #333;
            min-height: 100vh;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }
        h1 {
            color: #2c3e50;
            text-align: center;
            margin-bottom: 30px;
            font-size: 2.5em;
        }
        h2 {
            color: #34495e;
            border-bottom: 2px solid #3498db;
            padding-bottom: 10px;
            margin-top: 30px;
        }
        .status {
            background: #d4edda;
            border: 1px solid #c3e6cb;
            color: #155724;
            padding: 15px;
            border-radius: 8px;
            margin: 20px 0;
            text-align: center;
            font-weight: bold;
        }
        .info-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin: 20px 0;
        }
        .info-card {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            border-left: 4px solid #3498db;
        }
        .info-card h3 {
            margin-top: 0;
            color: #2c3e50;
        }
        .info-card p {
            margin: 10px 0;
        }
        .sftp-details {
            background: #e3f2fd;
            border: 1px solid #bbdefb;
            padding: 20px;
            border-radius: 8px;
            margin: 20px 0;
        }
        .sftp-details dt {
            font-weight: bold;
            color: #1565c0;
        }
        .sftp-details dd {
            margin-left: 20px;
            margin-bottom: 10px;
        }
        .reward {
            text-align: center;
            margin: 30px 0;
            padding: 20px;
            background: #fff3cd;
            border: 1px solid #ffeaa7;
            border-radius: 8px;
        }
        .reward img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-top: 15px;
        }
        .footer {
            text-align: center;
            margin-top: 40px;
            padding-top: 20px;
            border-top: 1px solid #eee;
            color: #7f8c8d;
            font-size: 0.9em;
        }
        .security-note {
            background: #fff3cd;
            border: 1px solid #ffeaa7;
            color: #856404;
            padding: 15px;
            border-radius: 8px;
            margin: 20px 0;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1><i class="fas fa-rocket"></i> <?php echo htmlspecialchars($app_name); ?> - CMS Ready!</h1>
        
        <div class="status">
            <i class="fas fa-check-circle"></i> Congratulations! Your CMS environment is ready for deployment.
        </div>

        <h2><i class="fas fa-folder-open"></i> Current Configuration</h2>
        <div class="info-grid">
            <div class="info-card">
                <h3>Application</h3>
                <p><strong>Name:</strong> <?php echo htmlspecialchars($app_name); ?></p>
                <p><strong>Domain:</strong> <?php echo htmlspecialchars($domain); ?></p>
                <p><strong>Install Directory:</strong> <?php echo htmlspecialchars($install_dir); ?></p>
            </div>
            <div class="info-card">
                <h3>System</h3>
                <p><strong>Mode:</strong> CMS (Front Controller)</p>
                <p><strong>Status:</strong> Ready for CMS deployment</p>
                <p><strong>Generated:</strong> <?php echo htmlspecialchars($timestamp); ?></p>
            </div>
        </div>

        <h2><i class="fas fa-tools"></i> Deployment Options</h2>
        <p>You can deploy your CMS files using one of these methods:</p>
        
        <div class="sftp-details">
            <h3><i class="fas fa-key"></i> SFTP Access (Recommended)</h3>
            <p>Use an SFTP client like <a href="https://filezilla-project.org/download.php?type=client" target="_blank">FileZilla</a> to upload your CMS files:</p>
            <dl>
                <dt>Domain</dt>
                <dd><?php echo htmlspecialchars($domain); ?></dd>
                <dt>Port</dt>
                <dd><?php echo htmlspecialchars($ssh_port); ?></dd>
                <dt>Username</dt>
                <dd><?php echo htmlspecialchars($app_id); ?></dd>
                <dt>Password</dt>
                <dd><em>the one you set at installation</em></dd>
            </dl>
        </div>

        <div class="info-card">
            <h3><i class="fas fa-terminal"></i> SSH/SCP Alternative</h3>
            <p>You can also upload files directly to <code><?php echo htmlspecialchars($install_dir); ?></code> using SSH/SCP.</p>
        </div>

        <div class="security-note">
            <strong><i class="fas fa-shield-alt"></i> Security Note:</strong> This file will be automatically replaced when you deploy your actual CMS. 
            The current configuration is optimized for WordPress, Drupal, and other modern CMS platforms.
        </div>

        <div class="reward">
            <h3><i class="fas fa-gift"></i> As a reward, here is a random cat picture:</h3>
            <img src="https://thecatapi.com/api/images/get?format=src&type=gif" alt="Random Cat" onerror="this.style.display='none'">
        </div>

        <div class="footer">
            <p>Generated by My Webapp YNH | Security Hash: <?php echo substr($security_hash, 0, 8); ?></p>
        </div>
    </div>
</body>
</html> 