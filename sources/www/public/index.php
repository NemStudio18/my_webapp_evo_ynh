<?php
/**
 * Front Controller - Mode 2 (Framework)
 * 
 * This file serves as the entry point for all requests in framework mode.
 * It's located in the public/ directory for better security.
 */

// Set error reporting for development
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Webapp - Framework Mode</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f8f9fa;
            min-height: 100vh;
        }
        
        .container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 2rem;
        }
        
        .header {
            background: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            margin-bottom: 2rem;
            text-align: center;
            border-left: 4px solid #28a745;
        }
        
        .header h1 {
            color: #2c3e50;
            font-size: 2.2rem;
            margin-bottom: 0.5rem;
            font-weight: 600;
        }
        
        .header p {
            color: #6c757d;
            font-size: 1.1rem;
        }
        
        .content {
            background: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            margin-bottom: 2rem;
        }
        
        .content h2 {
            color: #2c3e50;
            margin-bottom: 1rem;
            font-size: 1.5rem;
            border-bottom: 2px solid #e9ecef;
            padding-bottom: 0.5rem;
        }
        
        .content p {
            margin-bottom: 1rem;
            color: #495057;
        }
        
        .structure {
            background: #fff3cd;
            border: 1px solid #ffeaa7;
            padding: 1.5rem;
            border-radius: 6px;
            margin: 1.5rem 0;
        }
        
        .structure h3 {
            color: #856404;
            margin-bottom: 1rem;
            font-size: 1.2rem;
        }
        
        .structure pre {
            background: #f8f9fa;
            padding: 1rem;
            border-radius: 4px;
            overflow-x: auto;
            font-size: 0.9rem;
            border: 1px solid #dee2e6;
        }
        
        .info {
            background: #e3f2fd;
            border: 1px solid #bbdefb;
            padding: 1.5rem;
            border-radius: 6px;
            margin: 1.5rem 0;
        }
        
        .info h3 {
            color: #1976d2;
            margin-bottom: 1rem;
            font-size: 1.2rem;
        }
        
        .info dl {
            display: grid;
            grid-template-columns: auto 1fr;
            gap: 0.5rem 1rem;
            margin-top: 1rem;
        }
        
        .info dt {
            font-weight: 600;
            color: #495057;
        }
        
        .info dd {
            color: #6c757d;
        }
        
        .benefits {
            background: #f8f9fa;
            border: 1px solid #dee2e6;
            padding: 1.5rem;
            border-radius: 6px;
            margin: 1.5rem 0;
        }
        
        .benefits h3 {
            color: #495057;
            margin-bottom: 1rem;
            font-size: 1.2rem;
        }
        
        .benefits ul {
            list-style: none;
        }
        
        .benefits li {
            margin-bottom: 0.5rem;
            padding-left: 1.5rem;
            position: relative;
        }
        
        .benefits li:before {
            content: "✓";
            color: #28a745;
            font-weight: bold;
            position: absolute;
            left: 0;
        }
        
        .cat-section {
            text-align: center;
            margin-top: 2rem;
            padding: 1.5rem;
            background: #f8f9fa;
            border-radius: 6px;
        }
        
        .cat-section img {
            max-width: 100%;
            height: auto;
            border-radius: 6px;
            margin-top: 1rem;
        }
        
        .link {
            color: #007bff;
            text-decoration: none;
        }
        
        .link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1><i class="fas fa-layer-group"></i> My Webapp - Framework Mode</h1>
            <p>Welcome to your application running in framework mode!</p>
        </div>
        
        <div class="content">
            <h2><i class="fas fa-cogs"></i> How it works</h2>
            <p>In this mode, your application follows a modern framework structure:</p>
            
            <div class="structure">
                <h3><i class="fas fa-folder-tree"></i> Directory Structure</h3>
                <pre>
/var/www/__APP__/www/
├── public/           ← This file is here (web root)
│   ├── index.php    ← Front controller
│   ├── assets/      ← Public assets (CSS, JS, images)
│   └── uploads/     ← User uploads
├── app/             ← Application logic
├── config/          ← Configuration files
├── src/             ← Source code
├── vendor/          ← Dependencies
└── storage/         ← Application storage
                </pre>
            </div>
            
            <p>This structure provides better security by separating public files from application logic.</p>
            
            <div class="info">
                <h3><i class="fas fa-server"></i> SFTP Connection Details</h3>
                <dl>
                    <dt>Domain</dt>
                    <dd>__DOMAIN__</dd>
                    <dt>Port</dt>
                    <dd>__SSH_PORT__</dd>
                    <dt>User</dt>
                    <dd>__ID__</dd>
                    <dt>Password</dt>
                    <dd><em>the one you set at installation (or your account password if none was set)</em></dd>
                </dl>
            </div>
            
            <div class="benefits">
                <h3><i class="fas fa-star"></i> Benefits of Framework Mode</h3>
                <ul>
                    <li><strong>Security:</strong> Only files in public/ are accessible via web</li>
                    <li><strong>Organization:</strong> Clear separation of concerns</li>
                    <li><strong>Scalability:</strong> Easy to add features and maintain</li>
                    <li><strong>Compatibility:</strong> Works with modern PHP frameworks</li>
                </ul>
            </div>
        </div>
        
        <div class="cat-section">
            <p><i class="fas fa-gift"></i> As a reward, here is a random cat picture:</p>
            <img src="https://thecatapi.com/api/images/get?format=src&type=gif" alt="Random cat">
        </div>
    </div>
</body>
</html>';
?>
