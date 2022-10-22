<?php
declare(strict_types=1);

namespace Pages\DailyReport;

/* 現在の年月を取得 */
$changeDate_yearAndMonth = new ChangeDate(date('Y-n'));

$yearAndMonth = $changeDate_yearAndMonth->changeYearAndMonth();

/* DBからのデータを加工する */
$dailyReports = array_map(function ($value) {
    $changeDate_dayAndDayOfWeek = new ChangeDate($value['created_at']);
    $changeDate_startTime = new ChangeDate($value['start_time']);
    $changeDate_endTime = new ChangeDate($value['end_time']);

    $dayAndDayOfWeek = $changeDate_dayAndDayOfWeek->changeDateAndDayOfWeek();
    $startTime = $changeDate_startTime->changeHourAndMinutes();
    $endTime = $changeDate_endTime->changeHourAndMinutes();
    $breakTime = $value['break'];
    $summary = $value['summary'];

    return [
        'dayAndDayOfWeek' => $dayAndDayOfWeek,
        'startTime' => $startTime,
        'endTime' => $endTime,
        'breakTime' => $breakTime,
        'summary' => $summary
    ];
}, $result);