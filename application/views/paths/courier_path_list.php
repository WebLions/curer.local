<section id="main-content">
    <section class="wrapper">
        <!--overview start-->
        <div class="row">
            <div class="col-lg-12">

                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="/user/home">Административная панель</a></li>
                    <li><i class="fa fa-laptop"></i>Маршруты</li>
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
                                <th style="width: 20%">Позывной</th>
                                <th style="width: 20%">Кол-во адресов</th>
                                <th style="width: 20%">Денег в кассе</th>
                                <th style="width: 5%">Цвет</th>
                                <th style="width: 15%"><i class="icon_cogs"></i>Действия</th>
                            </tr>
                            <? foreach($cour as $c) { ?>
                                <tr>
                                    <td><?=$c['nick']?></td>
                                    <td><?=$c['count']?></td>
                                    <td><?=$c['money']?></td>
                                    <td><span style="display: block; width:15px; height: 15px; background: #<?=$c['color']?>"></span></td>
                                    <td>
                                        <div class="btn-group">
                                            <a class="btn btn-success showPaths" a href="/user/cour_path/<?=$c['id']?>"><i class="glyphicon glyphicon-eye-open"></i></a>
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
