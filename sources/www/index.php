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

// Get the request URI
$request_uri = $_SERVER['REQUEST_URI'] ?? '';
$path = parse_url($request_uri, PHP_URL_PATH) ?? '';

// Get the base path (the directory containing index.php)
$script_name = $_SERVER['SCRIPT_NAME'] ?? '';
$base_path = dirname($script_name);
if ($base_path === '/') {
    $base_path = '';
}

// Remove the base path from the request path
if (strpos($path, $base_path) === 0) {
    $path = substr($path, strlen($base_path));
}

// Remove leading slash
$path = ltrim($path, '/');

// Simple routing example
switch ($path) {
    case '':
    case 'index.php':
        // Home page
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
        
        .info p {
            margin-bottom: 0.5rem;
            font-family: "Courier New", monospace;
            background: #f8f9fa;
            padding: 0.5rem;
            border-radius: 4px;
            font-size: 0.9rem;
            border: 1px solid #dee2e6;
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
                <h3><i class="fas fa-info-circle"></i> Current Info</h3>
                <p><strong>Request URI:</strong> ' . htmlspecialchars($request_uri) . '</p>
                <p><strong>Path:</strong> ' . htmlspecialchars($path) . '</p>
                <p><strong>Method:</strong> ' . htmlspecialchars($_SERVER['REQUEST_METHOD'] ?? '') . '</p>
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
    </div>
</body>
</html>';
        break;
        
    case 'about':
        echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - FlexWebApp</title>
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
        
        .content {
            background: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        
        .content p {
            margin-bottom: 1rem;
            color: #495057;
            font-size: 1.1rem;
        }
        
        .back-link {
            display: inline-block;
            padding: 1rem 2rem;
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            text-decoration: none;
            border-radius: 8px;
            margin-top: 2rem;
            transition: all 0.3s ease;
        }
        
        .back-link:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1><i class="fas fa-info-circle"></i> About</h1>
        </div>
        <div class="content">
            <p>This is the About page. You can customize this content as needed.</p>
            <p>FlexWebApp provides a flexible foundation for your web applications with multiple deployment modes to suit your needs.</p>
            <a href="/" class="back-link"><i class="fas fa-arrow-left"></i> Back to Home</a>
        </div>
    </div>
</body>
</html>';
        break;
        
    case 'contact':
        echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - FlexWebApp</title>
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
        
        .content {
            background: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        
        .content p {
            margin-bottom: 1rem;
            color: #495057;
            font-size: 1.1rem;
        }
        
        .back-link {
            display: inline-block;
            padding: 1rem 2rem;
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            text-decoration: none;
            border-radius: 8px;
            margin-top: 2rem;
            transition: all 0.3s ease;
        }
        
        .back-link:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1><i class="fas fa-envelope"></i> Contact</h1>
        </div>
        <div class="content">
            <p>This is the Contact page. You can add a contact form here.</p>
            <p>Feel free to customize this page with your contact information or a contact form.</p>
            <a href="/" class="back-link"><i class="fas fa-arrow-left"></i> Back to Home</a>
        </div>
    </div>
</body>
</html>';
        break;
        
    case 'api/test':
        // API endpoint example
        header('Content-Type: application/json');
        echo json_encode([
            'status' => 'success',
            'message' => 'API is working!',
            'request_uri' => $request_uri,
            'path' => $path,
            'method' => $_SERVER['REQUEST_METHOD'],
            'timestamp' => date('Y-m-d H:i:s')
        ]);
        break;
        
    default:
        // 404 Not Found
        http_response_code(404);
        echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Not Found - FlexWebApp</title>
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
            color: #e74c3c;
            font-size: 2.2rem;
            margin-bottom: 0.5rem;
            font-weight: 600;
        }
        
        .content {
            background: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        
        .content p {
            margin-bottom: 1rem;
            color: #495057;
            font-size: 1.1rem;
        }
        
        .back-link {
            display: inline-block;
            padding: 1rem 2rem;
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            text-decoration: none;
            border-radius: 8px;
            margin-top: 2rem;
            transition: all 0.3s ease;
        }
        
        .back-link:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1><i class="fas fa-exclamation-triangle"></i> 404 - Page Not Found</h1>
        </div>
        <div class="content">
            <p>The requested page "' . htmlspecialchars($path) . '" was not found.</p>
            <p>Please check the URL and try again.</p>
            <a href="/" class="back-link"><i class="fas fa-arrow-left"></i> Back to Home</a>
        </div>
    </div>
</body>
</html>';
        break;
}
?>
