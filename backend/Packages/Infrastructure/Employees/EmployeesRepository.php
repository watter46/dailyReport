<?php
declare(strict_types=1);

namespace Packages\Infrastructure\Employees;

use Config\ExecuteMySql;

final class EmployeesRepository {

    public function getAll()
    {
        $query =  'SELECT 
                    `id`,
                    `employee_number`,
                    `name`,
                    `is_admin`
                  FROM
                    `employees`';

        $instance = new ExecuteMySql(query: $query);

        $result = $instance->execute();

        return $result;
    }
}