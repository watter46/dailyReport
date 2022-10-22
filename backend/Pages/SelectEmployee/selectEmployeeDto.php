<?php
declare(strict_types=1);

namespace Pages\DailyReport;

require_once('./getEmployees.php');


/* DBからのデータを加工する */
$employees = array_map(function ($value) {

    $employeeNumber = $value['employee_number'];

    $is_admin = $value['is_admin'] ? '管理者' : '社員';

    $name = $value['name'];

    return [
        'employeeNumber' => $employeeNumber,
        'is_admin' => $is_admin,
        'name' => $name
    ];
}, $result);