<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        html,
        body {
            height: 100%;
        }

        header {
            height: 10%;
        }

        main {
            height: 90%;
        }

        .previous-btn {
            background: transparent;
            border: none;
            color: #6c757d;
            outline: none;
        }
        .next-btn {
            background: transparent;
            border: none;
            color: #6c757d;
            outline: none;
        }
    </style>

    <title>日報編集ページ</title>
</head>

<!-- ヘッダー（ナビゲーション） -->
<header class="bg-secondary text-white">
    <div class="container">
        <nav class="navbar d-flex justify-content-center align-items-center position-relative">
            <div class="px-3 position-absolute top-50 start-0 translate-middle-y">
            <button type="button" class="btn btn-outline-light"
                    onclick="location.href='../Register/register.php'">社員登録</button>
            </div>
            <label class="fs-2">日報編集</label>
            <div class="px-3 position-absolute top-50 end-0 translate-middle-y">
                <button type="button" class="btn btn-outline-light"
                        onclick="location.href='../Logout/logout.php'">Logout</button>
            </div>
        </nav>
    </div>
</header>

<body>
    
    <?php require_once('./editDailyReportsDto.php'); ?>


    <main class="container-fluid d-flex justify-content-center">
        <div class="w-75 d-flex justify-content-center position-relative">
            <div class="container bg-danger">
                <!-- 選択された社員 -->
                <div class="row">
                    <div class="col d-flex justify-content-center align-items-center">
                        <h2 class="mx-3 mt-2">
                            <strong><?php echo $employeeNumber; ?></strong>
                        </h2>
                        <h2 class="mx-3 mt-2">
                            <strong><?php echo $name; ?></strong>
                        </h2>
                    </div>
                </div>

                <!-- 日報一覧 -->
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">日付</th>
                            <th scope="col">始業</th>
                            <th scope="col">終業</th>
                            <th scope="col">休憩</th>
                            <th scope="col">業務内容</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($dailyReports as $dailyReport) : ?>
                            <tr>
                                <th scope="row"><?php echo $dailyReport['dayAndDayOfWeek']; ?></th>
                                <td><?php echo $dailyReport['startTime']; ?></td>
                                <td><?php echo $dailyReport['endTime']; ?></td>
                                <td><?php echo $dailyReport['breakTime']; ?></td>
                                <td><?php echo $dailyReport['summary']; ?></td>
                                <td>
                                    <form>
                                        <button type="button" class="btn btn-success"
                                                id="<?php echo $dailyReport['id']; ?>"
                                                onclick="onEdit(this)">編集</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
<script>
    const onEdit = (obj) => {
        console.log(obj);
    }
</script>
</body>
</html>