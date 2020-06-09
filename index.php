<!DOCTYPE html>
<html lang="ru" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Форма обратной связи для записи на показ в системе iFORA</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/mdb.min.css" rel="stylesheet">
    <link href="/css/addons/datatables.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
</head>
<body>
<div class="container pt-4">
    <div class="mb-5">
        <div class="card card-cascade narrower">
            <section>
                <div class="row">
                    <div class="col-lg-12 mr-0 pb-2">
                        <div class="view view-cascade gradient-card-header light-blue lighten-1">
                            <h2 class="h2-responsive mb-0 font-weight-500">Форма обратной связи</h2>
                        </div>
                        <div class="card-body card-body-cascade pb-0">
                            <p>Основные поля формы: ФИО, контактная информация, желаемые дата и время показа.</p>
                            <p>При отправке формы на адрес электронной почты администратора приходит письмо, запись
                                сохраняется в базе данных.</p>
                            <p>Желательно для администратора сделать страницу с возможностью просмотра всех ответов.
                                Дополнительные требования: валидация формы, выгрузка ответов в csv, Excel.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="table-ui p-2 mb-3 mx-4 mb-5">
                    <form action="" class="text-center" method="POST" action="mail.php" id="form"
                          enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-xl-4 col-md-6">
                                <div class="md-form">
                                    <input type="text" id="name" name="name" class="form-control validate" required>
                                    <label for="name"><i class="fas fa-user"></i> ФИО</label>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="md-form">
                                    <input type="text" id="contact" name="contact" class="form-control validate"
                                           required>
                                    <label for="contact">
                                        <i class="fas fa-address-card"></i> Контактная информация
                                    </label>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-6">
                                <div class="md-form">
                                    <input type="text" id="date" name="date"
                                           class="form-control datepicker validate" required>
                                    <label for="date"><i class="fas fa-calendar-alt"></i> Дата показа</label>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-6">
                                <div class="md-form">
                                    <input type="text" id="time" name="time" class="form-control timepicker">
                                    <label for="time"><i class="fas fa-clock"></i> Время показа</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" id="button" name="upload" class="btn btn-indigo">
                                    <i class="fas fa-magic mr-3"></i> Отправить данные
                                </button>
                                <a href="/admin" class="btn btn-danger">Страница администратора</a>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>
</div>
<!-- SCRIPTS -->
<script type="text/javascript" src="/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="/js/popper.min.js"></script>
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/mdb.min.js"></script>
<script type="text/javascript" src="/js/addons/datatables.min.js"></script>
<script type="text/javascript" src="/js/common.js"></script>
</body>
</html>