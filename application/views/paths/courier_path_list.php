<section id="main-content">
    <section class="wrapper">
        <!--overview start-->
        <div class="row">
            <div class="col-lg-12">

                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="/user/home">Административная панель</a></li>
                    <li><i class="fa fa-laptop"></i><a href ="/paths/cour_path">Маршруты</a></li>
                </ol>
            </div>
        </div>


        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#couriers">Курьеры</a></li>
            <li><a data-toggle="tab" href="#consumption">Расход</a></li>
            <li><a data-toggle="tab" href="#commission">Поручение</a></li>
        </ul>
        <div class="tab-content">
            <div id="couriers" class="tab-pane fade active in">
                <div class = "row">
                    <div class = "col-md-12">
                        <br>
                        <table class="table table-striped table-advance table-hover">
                            <tbody>
                            <tr>
                                <th style="width: 1%">Курьер</th>
                                <th style="width: 14%">Позывной</th>
                                <th style="width: 14%">Цвет</th>
                                <th style="width: 12%"><i class="icon_cogs"></i>Действия</th>
                            </tr>
                            <? foreach($cour as $c) { ?>
                                <tr>
                                    <td><?=$c['name']?></td>
                                    <td><?=$c['nick']?></td>
                                    <td><span style="display: block; width:15px; height: 15px; background: #<?=$c['color']?>"></span></td>
                                    <td>
                                        <div class="btn-group">
                                            <a class="btn btn-danger showPaths" a href="/user/cour_path/<?=$c['id']?>"><i class="glyphicon glyphicon-eye-open"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            <? } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div id="consumption" class="tab-pane fade ">
                <div class = "row">
                    <div class = "col-md-12">
                        <br>
                        <table width = "100%" class="table table-striped table-advance table-hover table-font">

                        </table>
                    </div>
                </div>
            </div>

            <div id="commission" class="tab-pane fade ">
                <div class = "row">
                    <div class = "col-md-12">
                        <br>
                        <table width = "100%" class="table table-striped table-advance table-hover table-font">

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
<!--main content end-->
</section>
