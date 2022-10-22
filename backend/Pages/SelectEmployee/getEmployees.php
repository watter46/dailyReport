<?php

declare(strict_types=1);

namespace Pages\SelectEmployee;

use PDO;

require_once('../../Config/config.php');

$query = 'SELECT * FROM employees';

$stmt = $dbh->query($query);

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);