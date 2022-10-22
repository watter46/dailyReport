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
    
    <title>Document</title>

</head>

<body>
    <?php
    require_once('./dailyReportsDto.php');
    ?>

    <!-- ヘッダー -->
    <header class="bg-secondary text-white">
        <div class="container">
            <nav class="navbar d-flex justify-content-center align-items-center position-relative">
                <label class="fs-2">日報一覧</label>
                <div class="px-3 position-absolute top-50 end-0 translate-middle-y">
                    <button type="button" class="btn btn-outline-light"
                            onclick="location.href='../Logout/logout.php'">Logout</button>
                </div>
            </nav>
        </div>
    </header>

    <main class="container-fluid d-flex justify-content-center">
        <div class="w-75 d-flex justify-content-center position-relative">
            <!-- 年月を表示 -->
            <div class="container">
                <div class="row">
                    <div class="col d-flex justify-content-center align-items-center">
                        <button type="button" class="fs-2 previous-btn">&#9664;</button>
                        <h2 class="mx-5 mt-2">
                            <strong><?php echo $yearAndMonth; ?></strong>
                        </h2>
                        <button type="button" class="fs-2 next-btn">&#9654;</button>
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
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>

                <div class="container px-4 mb-4 position-absolute bottom-0 start-50 translate-middle-x">
                    <div class="w-100 gx-5">
                        <input type="button" class="btn btn-secondary w-100" onclick="is_start(this)" value="出勤">
                    </div>
                </div>

            </div>
        </div>
    </main>

    <script>
        const is_start = (obj) => {
            if (obj.getAttribute('value') === "出勤") {
                obj.setAttribute('value', "退勤");
                return;
            } 

            if (obj.getAttribute('value') === "退勤") {
                const is_end = () => confirm('退勤しますか?');
                
                if (!is_end()) return;

                obj.setAttribute('value', "出勤");
                return;
            }
        }
    </script>
</body>

</html>