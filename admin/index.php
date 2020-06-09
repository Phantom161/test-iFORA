<?php
// подключаем конфиг
require_once "../config.php";
// Подключаемся к базе данных
$link = mysqli_connect($host, $user, $password, $database)
or die("Ошибка " . mysqli_error($link));
// получаем значения из базы данных
$sql = 'SELECT * FROM ifora_data';
$result = mysqli_query($link, $sql);
// извлекам все строки и помещаем их в массив
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="ru" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Форма обратной связи для записи на показ в системе iFORA</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/mdb.min.css" rel="stylesheet">
    <link href="../css/addons/datatables.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
</head>
<body>
<div class="container pt-4">
    <section class="mb-5">
        <div class="card card-cascade narrower">
            <section>
                <div class="row">
                    <div class="col-lg-12 mr-0 pb-2">
                        <div class="view view-cascade gradient-card-header light-blue lighten-1">
                            <h2 class="h2-responsive mb-0 font-weight-500">Страница администратора</h2>
                        </div>
                        <div class="p-2 mb-3 mx-4 pt-5 mb-5">
                            <div class="card card-cascade narrower z-depth-0">
                                <div class="view view-cascade gradient-card-header ripe-malinka-gradient narrower py-2 mx-4 mb-3 d-flex justify-content-between align-items-center">
                                    <h4 class="white-text mx-3">Таблица с результатами</h4>
                                </div>
                                <div class="px-4">
                                    <table id="usersTable" class="table table-hover table-striped table-sm mb-0">
                                        <thead>
                                        <tr>
                                            <td>Имя</td>
                                            <td>Контактная информация</td>
                                            <td>Дата показа</td>
                                            <td>Время показа</td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        // Заполняем таблицу данными из бд
                                        foreach ($rows as $row) {
                                            print("<tr><td>" . $row['name'] . "</td><td>" . $row['contact'] . "</td><td>" . $row['date'] . "</td><td>" . $row['time'] . "</td></tr>");
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                    <?php
                                    // папка для хранения загруженных и сгенерированных файлов
                                    $dir = 'files';
                                    // имя файла, отдаваемого пользователю
                                    $fileNameNew = $dir . '/' . dataexport . ".csv";
                                    // формируем заголовок таблицы csv
                                    file_put_contents($fileNameNew, "id;name;contact;date;time\n");
                                    // формируем тело таблицы и сохраняем файл
                                    for ($i = 0; $i < count($rows); $i++) {
                                        $str = implode(";", $rows[$i]) . "\n";
                                        file_put_contents($fileNameNew, $str, FILE_APPEND);
                                    }
                                    ?>
                                    <hr class="my-0">
                                    <a class="btn btn-primary" href="<?= $fileNameNew ?>">
                                        <i class="fas fa-download"></i> Экспорт в csv
                                    </a>
                                    <a href="/" class="btn btn-danger">Страница с формой</a>
                                    <?php
                                    // закрываем подключение
                                    mysqli_close($link);
                                    ?>
                                </div>
                            </div>
                        </div>
            </section>
        </div>
    </section>
</div>
<!-- SCRIPTS -->
<script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="../js/popper.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/mdb.min.js"></script>
<script type="text/javascript" src="../js/addons/datatables.min.js"></script>
<script type="text/javascript" src="../js/common.js"></script>
<script>
    $(document).ready(function () {
        $('#usersTable').DataTable({
            "language": {
                "url": "../js/addons/russian.lang"
            },
            "pagingType": "simple_numbers"
        });
        $('.dataTables_length').addClass('bs-select');
    });
</script>
</body>
</html>