<?php

// Vercel's filesystem ist read-only – alles Beschreibbare muss nach /tmp
$_ENV['VIEW_COMPILED_PATH'] = '/tmp/views';
$_SERVER['VIEW_COMPILED_PATH'] = '/tmp/views';

// /tmp/views Verzeichnis erstellen falls nicht vorhanden
if (!is_dir('/tmp/views')) {
    mkdir('/tmp/views', 0755, true);
}

require __DIR__ . '/../public/index.php';
