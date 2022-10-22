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

        /* alticle {
            height: 100%;
        } */
        
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

    <?php require_once('./selectEmployeeDto.php'); ?>
    
    <!-- ヘッダー -->
    <header class="bg-secondary text-white">
        <div class="container">
            <nav class="navbar d-flex justify-content-center align-items-center position-relative">
                <div class="px-3 position-absolute top-50 start-0 translate-middle-y">
                <button type="button" class="btn btn-outline-light"
                        onclick="location.href='../Register/register.php'">社員登録</button>
                </div>
                <label class="fs-2">社員一覧</label>
                <div class="px-3 position-absolute top-50 end-0 translate-middle-y">
                    <button type="button" class="btn btn-outline-light"
                            onclick="location.href='../Logout/logout.php'">Logout</button>
                </div>
            </nav>
        </div>
    </header>

    <main class="container-fluid d-flex justify-content-center">
        <div class="container">
            <article class="row h-100">

                <!-- previous btn -->
                <form class="col-1 d-flex justify-content-center align-items-center">
                    <button type="submit" class="fs-2 previous-btn">&#9664;</button>
                </form>

                <div class="col-10 h-100 inline-block">

                    <!-- 検索header -->
                    <div class="my-4">
                        <div class="container mb-2">
                            <form>
                                <div class="row">
                                    <div class="col-2 d-flex justify-content-center align-items-center">
                                        <label class="fs-6">ID Search</label>
                                    </div>
                                    <div class="col-8">
                                        <input type="text" class="form-control col-7" id="idSearch">
                                    </div>
                                    <div class="col-2 d-flex justify-content-center align-items-center">
                                        <button type="submit" class="btn btn-secondary col-2 w-100">ID検索</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="container">
                            <form>
                                <div class="row">
                                    <div class="col-2 d-flex justify-content-center align-items-center">
                                        <label class="fs-6">Name Search</label>
                                    </div>
                                    <div class="col-8">
                                        <input type="text" class="form-control col-7" id="nameSearch">
                                    </div>
                                    <div class="col-2 d-flex justify-content-center align-items-center">
                                        <button type="submit" class="btn btn-secondary col-2 w-100">Name検索</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- 社員一覧テーブル -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">社員ID</th>
                                <th scope="col">役職</th>
                                <th scope="col">名前</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($employees as $employee) : ?>
                                <tr>
                                    <th scope="row"><?php echo $employee['employeeNumber']; ?></th>
                                    <td><?php echo $employee['is_admin']; ?></td>
                                    <td><?php echo $employee['name']; ?></td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>

                <!-- next btn -->
                <form class="col-1 d-flex justify-content-center align-items-center">
                    <button type="submit" class="fs-2 next-btn">&#9654;</button>
                </form>

            </article>
        </div>
    </main>
</body>

</html>