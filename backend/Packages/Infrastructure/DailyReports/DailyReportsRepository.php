<?php
declare(strict_types=1);

namespace Packages\Infrastructure\DailyReports;

use Config\ExecuteMySql;

final class DailyReportsRepository {

    public function getAll()
    {
        $query = 'SELECT 
                    `id`,
                    `employee_id`,
                    `start_time`,
                    `end_time`,
                    `break`,
                    `summary`,
                    `created_at`
                  FROM 
                    `daily_reports`';

        $instance = new ExecuteMySql(query: $query);

        $result = $instance->execute();

        return $result;
    }
}