<?php
declare(strict_types=1);

namespace Packages\Infrastructure\SelectedEmployee;

use Config\ExecuteMySql;

final class SelectedEmployeeRepository {

    public function getSelectedEmployeeAndDailyReports(int $id)
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
                    `daily_reports`
                  WHERE
                    `daily_reports`.`employee_id`
                  in
                    (:id)';

        $instance = new ExecuteMySql(query: $query, id: $id);

        $result = $instance->execute();

        return $result;
    }
}