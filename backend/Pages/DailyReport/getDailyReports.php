<?php

declare(strict_types=1);

namespace Pages\DailyReport;

use PDO;

require_once('../../Config/config.php');

// $query = 'SELECT `id`, `employee_id`, `start_time`, `end_time`, `break`, `summary`, `created_at` FROM `daily_reports`';


$query = 'SELECT * FROM daily_reports';

// $query = 'SELECT
//             id,
//             employee_id,
//             start_time,
//             end_time,
//             break,
//             summary,
//             created_at
//           FROM 
//             daily_reports
//         ';

$stmt = $dbh->query($query);

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

// $result = $stmt->execute();

// "query" => "select `id`, `group_id`, `order`, `task` from `tasks` where `tasks`.`group_id` in (1, 2, 3, 4, 5, 9, 10, 11) order by `order` asc";

// 'SELECT `id`, `employee_id`, `start_time`, `end_time`, `break`, `summary`, `created_at` FROM `daily_reports` where `daily_reports`.`employee_id` in (:id)';