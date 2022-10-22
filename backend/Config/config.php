<?php

declare(strict_types=1);

namespace Config;

/* データベース設定 */
define('DB_DSN', 'mysql:dbname=php_local; host=db;charset=utf8');
define('DB_USER', 'phper');
define('DB_PASSWORD', 'secret');


/* データベース接続 */
try {
    $dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);

    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    // $stmt = $dbh->query('SELECT * FROM daily_reports');
    // $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "接続失敗: " . $e->getMessage() . "\n";
    exit();
}
