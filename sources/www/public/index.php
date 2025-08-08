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

// Get the request URI
$request_uri = $_SERVER['REQUEST_URI'];
$path = parse_url($request_uri, PHP_URL_PATH);

// Remove the path prefix if it exists
$path_prefix = $_SERVER['SCRIPT_NAME'];
if (strpos($path, $path_prefix) === 0) {
    $path = substr($path, strlen($path_prefix));
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
    <title>FlexWebApp - Framework Mode</title>
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
        
        .info p {
            margin-bottom: 0.5rem;
            font-family: "Courier New", monospace;
            background: #f8f9fa;
            padding: 0.5rem;
            border-radius: 4px;
            font-size: 0.9rem;
            border: 1px solid #dee2e6;
        }
        
        .routes {
            background: #d4edda;
            border: 1px solid #c3e6cb;
            padding: 1.5rem;
            border-radius: 6px;
            margin: 1.5rem 0;
        }
        
        .routes h3 {
            color: #155724;
            margin-bottom: 1rem;
            font-size: 1.2rem;
        }
        
        .routes ul {
            list-style: none;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
        }
        
        .routes li a {
            display: block;
            padding: 1rem;
            background: #28a745;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            text-align: center;
            transition: background-color 0.2s ease;
        }
        
        .routes li a:hover {
            background: #218838;
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
            <h1><i class="fas fa-layer-group"></i> FlexWebApp - Framework Mode</h1>
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
                <h3><i class="fas fa-info-circle"></i> Current Request Info</h3>
                <p><strong>Request URI:</strong> ' . htmlspecialchars($request_uri) . '</p>
                <p><strong>Path:</strong> ' . htmlspecialchars($path) . '</p>
                <p><strong>Method:</strong> ' . htmlspecialchars($_SERVER['REQUEST_METHOD']) . '</p>
                <p><strong>Document Root:</strong> ' . htmlspecialchars($_SERVER['DOCUMENT_ROOT']) . '</p>
            </div>
            
            <div class="routes">
                <h3><i class="fas fa-link"></i> Example Routes</h3>
                <p>Try these URLs to see the routing in action:</p>
                <ul>
                    <li><a href="' . htmlspecialchars($path_prefix) . '"><i class="fas fa-home"></i> Home</a></li>
                    <li><a href="' . htmlspecialchars($path_prefix) . 'about"><i class="fas fa-info-circle"></i> About</a></li>
                    <li><a href="' . htmlspecialchars($path_prefix) . 'contact"><i class="fas fa-envelope"></i> Contact</a></li>
                    <li><a href="' . htmlspecialchars($path_prefix) . 'api/test"><i class="fas fa-code"></i> API Test</a></li>
                </ul>
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
    </div>
</body>
</html>';
        break;
        
    case 'about':
        echo '<!DOCTYPE html>
<html>
<head>
    <title>About - FlexWebApp Framework</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        .container { max-width: 800px; margin: 0 auto; }
        .header { background: #f0f0f0; padding: 20px; border-radius: 5px; }
        .content { margin: 20px 0; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>About</h1>
        </div>
        <div class="content">
            <p>This is the About page in framework mode. You can customize this content as needed.</p>
            <p><a href="' . htmlspecialchars($path_prefix) . '">← Back to Home</a></p>
        </div>
    </div>
</body>
</html>';
        break;
        
    case 'contact':
        echo '<!DOCTYPE html>
<html>
<head>
    <title>Contact - FlexWebApp Framework</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        .container { max-width: 800px; margin: 0 auto; }
        .header { background: #f0f0f0; padding: 20px; border-radius: 5px; }
        .content { margin: 20px 0; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Contact</h1>
        </div>
        <div class="content">
            <p>This is the Contact page in framework mode. You can add a contact form here.</p>
            <p><a href="' . htmlspecialchars($path_prefix) . '">← Back to Home</a></p>
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
            'message' => 'API is working in framework mode!',
            'request_uri' => $request_uri,
            'path' => $path,
            'method' => $_SERVER['REQUEST_METHOD'],
            'mode' => 'framework',
            'timestamp' => date('Y-m-d H:i:s')
        ]);
        break;
        
    default:
        // 404 Not Found
        http_response_code(404);
        echo '<!DOCTYPE html>
<html>
<head>
    <title>404 Not Found - FlexWebApp Framework</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        .container { max-width: 800px; margin: 0 auto; }
        .header { background: #ffebee; padding: 20px; border-radius: 5px; }
        .content { margin: 20px 0; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>404 - Page Not Found</h1>
        </div>
        <div class="content">
            <p>The requested page "' . htmlspecialchars($path) . '" was not found.</p>
            <p><a href="' . htmlspecialchars($path_prefix) . '">← Back to Home</a></p>
        </div>
    </div>
</body>
</html>';
        break;
}
?>
