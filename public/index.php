<?php
/**
 * Fintradax Portal - Single entry point
 * All requests route through here
 */

session_start();

// Basic error reporting (disable in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "<h1>🚀 Fintradax Portal - Under Construction</h1>";
echo "<p>✅ Folder structure ready! Next steps:</p>";
echo "<ul>";
echo "<li>1. Set up ZITADEL OIDC</li>";
echo "<li>2. Connect Supabase</li>";
echo "<li>3. Build KVK app</li>";
echo "</ul>";
echo "<p><a href='/login'>Test /login route →</a></p>";

?>
