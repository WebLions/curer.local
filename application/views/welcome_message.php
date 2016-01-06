<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Money point</title>
	<link rel="stylesheet"  href="/css/bootstrap.css">
    <script src="/js/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="/js/bootstrap.js" type="text/javascript"></script>
    <script src="/js/script.js" type="text/javascript"></script>
</head>
<body background="/images/back.gif">

<div class="container" style="margin-top: 50px; ">
    <div class="row" style="background: #ffffff; padding: 15px; margin-bottom: 15px">
        <div class="col-md-4">
            <h3>Цель №1 Собрать 10 000 грн.</h3>
            <div class="progress">
                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="<?=$procent1?>" aria-valuemin="0" aria-valuemax="100" style="width: <?=$procent1?>%">
                    <?=$procent1?>% (<?=$money1?> из 10000)
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <h3>Цель №2 Собрать 10 000 грн.</h3>
            <div class="progress">
                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="<?=$procent2?>" aria-valuemin="0" aria-valuemax="100" style="width: <?=$procent2?>%">
                    <?=$procent2?>% (<?=$money2?> из 10000)
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <h3>Цель №3 Собрать 10 000 грн.</h3>
            <div class="progress">
                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="<?=$procent3?>" aria-valuemin="0" aria-valuemax="100" style="width: <?=$procent3?>%">
                    <?=$procent3?>% (<?=$money3?> из 10000)
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="background: #ffffff; padding: 15px;">
        <h3>Задания
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Добавить задание</button>
        </h3>
        <div class="col-md-12" id="tasks">

        </div>
       <!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Добовление нового задания</h4>
                    </div>
                    <div class="modal-body">
                        <form role="form" id="addform">
                            <div class="form-group">
                                <label for="title">Название проекта</label>
                                <input name="title" type="text" class="form-control" id="title">
                            </div>
                            <div class="form-group">
                                <label for="description">Краткое описание</label>
                                <textarea name="description" class="form-control" id="description"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="dropbox">Ссылка на ТЗ - dropbox or etc.</label>
                                <input name="dropbox" class="form-control" id="dropbox">
                            </div>
                            <div class="form-group">
                                <label for="date">Сроки</label>
                                <input name="date" type="text" class="form-control" id="date">
                            </div>
                            <div class="form-group">
                                <label for="price">Стоимость</label>
                                <input name="price" type="text" class="form-control" id="price">
                            </div>
                            <button type="submit" class="btn btn-default addtask">Сохранить</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>

</body>
</html>