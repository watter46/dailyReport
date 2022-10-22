<?php

declare(strict_types=1);

namespace Pages\DailyReport;

require_once('../../config/config.php');

$query = 'SELECT 
            id,
            employee_id,
            start_time,
            end_time,
            break,
            summary,
            created_at
          FROM 
            daily_reports
        ';

$stmt = query($query);

$stmt->execute();

"query" => "select `id`, `group_id`, `order`, `task` from `tasks` where `tasks`.`group_id` in (1, 2, 3, 4, 5, 9, 10, 11) order by `order` asc";

'SELECT `id`, `employee_id`, `start_time`, `end_time`, `break`, `summary`, `created_at` FROM `daily_reports` where `daily_reports`.`employee_id` in (:id)';