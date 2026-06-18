<?php

// Vercel hat kein beschreibbares Filesystem
$_ENV['APP_STORAGE'] = '/tmp';

// Symlinks funktionieren nicht – public/storage muss anders gelöst werden
require __DIR__ . '/../public/index.php';
