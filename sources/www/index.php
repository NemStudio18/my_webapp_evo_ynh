<?php
/**
 * Front Controller - Mode 1
 * 
 * This file serves as the entry point for all requests in front-controller mode.
 * All requests are routed through this file.
 */

// Set error reporting for development
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FlexWebApp - Front Controller Mode</title>
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
            border-left: 4px solid #007bff;
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
        
        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            margin: 2rem 0;
        }
        
        .feature {
            background: #f8f9fa;
            border: 1px solid #dee2e6;
            padding: 1.5rem;
            border-radius: 6px;
            text-align: center;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        
        .feature:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        
        .feature i {
            font-size: 2rem;
            color: #007bff;
            margin-bottom: 1rem;
        }
        
        .feature h3 {
            color: #2c3e50;
            margin-bottom: 0.5rem;
            font-size: 1.1rem;
        }
        
        .feature p {
            color: #6c757d;
            font-size: 0.9rem;
        }
        
        .info {
            background: #e3f2fd;
            border: 1px solid #bbdefb;
            padding: 1.5rem;
            border-radius: 6px;
            margin-top: 2rem;
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
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1><i class="fas fa-code"></i> FlexWebApp - Front Controller Mode</h1>
            <p>Welcome to your application running in front-controller mode!</p>
        </div>
        
        <div class="content">
            <h2><i class="fas fa-cogs"></i> How it works</h2>
            <p>In this mode, all requests are routed through this index.php file. This allows you to:</p>
            
            <div class="features">
                <div class="feature">
                    <i class="fas fa-route"></i>
                    <h3>Custom Routing</h3>
                    <p>Implement custom routing logic for your application</p>
                </div>
                <div class="feature">
                    <i class="fas fa-layer-group"></i>
                    <h3>Modern Frameworks</h3>
                    <p>Use modern PHP frameworks and libraries</p>
                </div>
                <div class="feature">
                    <i class="fas fa-plug"></i>
                    <h3>RESTful APIs</h3>
                    <p>Create RESTful APIs and web services</p>
                </div>
                <div class="feature">
                    <i class="fas fa-shield-alt"></i>
                    <h3>Security</h3>
                    <p>Implement authentication and authorization</p>
                </div>
            </div>
            
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
        </div>
        
        <div class="cat-section">
            <p><i class="fas fa-gift"></i> As a reward, here is a random cat picture:</p>
            <img src="https://thecatapi.com/api/images/get?format=src&type=gif" alt="Random cat">
        </div>
    </div>
</body>
</html>';
?>
