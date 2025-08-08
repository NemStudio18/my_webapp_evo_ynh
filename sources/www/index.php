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
<html>
<head>
    <title>FlexWebApp - Front Controller Mode</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        .container { max-width: 800px; margin: 0 auto; }
        .header { background: #f0f0f0; padding: 20px; border-radius: 5px; }
        .content { margin: 20px 0; }
        .info { background: #e8f4f8; padding: 15px; border-radius: 5px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>FlexWebApp - Front Controller Mode</h1>
            <p>Welcome to your application running in front-controller mode!</p>
        </div>
        
        <div class="content">
            <h2>How it works</h2>
            <p>In this mode, all requests are routed through this index.php file. This allows you to:</p>
            <ul>
                <li>Implement custom routing logic</li>
                <li>Use modern PHP frameworks</li>
                <li>Create RESTful APIs</li>
                <li>Implement authentication and authorization</li>
            </ul>
            
            <div class="info">
                <h3>Current Request Info</h3>
                <p><strong>Request URI:</strong> ' . htmlspecialchars($request_uri) . '</p>
                <p><strong>Path:</strong> ' . htmlspecialchars($path) . '</p>
                <p><strong>Method:</strong> ' . htmlspecialchars($_SERVER['REQUEST_METHOD']) . '</p>
            </div>
            
            <h3>Example Routes</h3>
            <p>Try these URLs to see the routing in action:</p>
            <ul>
                <li><a href="' . htmlspecialchars($path_prefix) . '">Home</a></li>
                <li><a href="' . htmlspecialchars($path_prefix) . 'about">About</a></li>
                <li><a href="' . htmlspecialchars($path_prefix) . 'contact">Contact</a></li>
                <li><a href="' . htmlspecialchars($path_prefix) . 'api/test">API Test</a></li>
            </ul>
        </div>
    </div>
</body>
</html>';
        break;
        
    case 'about':
        echo '<!DOCTYPE html>
<html>
<head>
    <title>About - FlexWebApp</title>
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
            <p>This is the About page. You can customize this content as needed.</p>
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
    <title>Contact - FlexWebApp</title>
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
            <p>This is the Contact page. You can add a contact form here.</p>
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
<html>
<head>
    <title>404 Not Found - FlexWebApp</title>
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
