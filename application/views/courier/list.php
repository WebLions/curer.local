<section id="main-content">
    <section class="wrapper">
        <!--overview start-->
        <div class="row">
            <div class="col-lg-12">

                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="/user/home">Административная панель</a></li>
                    <li><i class="fa fa-laptop"></i>Курьеры</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Добавить курьера</button>
                <div id="myModalEditCourier" class="modal fade" role="dialog">
                </div>
                <div id="myModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Добавление курьера</h4>
                            </div>
                            <div class="modal-body">
                                <form role="form" id="addform">
                                    <div class="form-group">
                                        <label for="nick">Позывной</label>
                                        <input name="nick" type="text" class="form-control" id="nick">
                                    </div>
                                    <div class="form-group">
                                        <label for="name">ФИО</label>
                                        <input name="name" type="text" class="form-control" id="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="color">Цвет курьера<label>
                                                <select name="color" id="color" style="width: 100px;">
                                                    <?foreach($color as $v){?>
                                                        <option value="<?=$v['id']?>" style="background: #<?=$v['color']?>;">#<?=$v['color']?></option>
                                                    <?}?>
                                                </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="vendor">Контактные данные</label>
                                        <input name="contact" class="form-control" id="vendor">
                                    </div>
                                    <div class="form-group">
                                        <label for="note">Примечание</label>
                                        <input name="note" class="form-control" id="note">
                                    </div>
                                    <button type="submit" class="btn btn-default addCourier">Добавить</button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <section class="panel" id="couriers">
                    <table class="table table-striped table-advance table-hover">
                        <tbody>
                        <tr>
                            <th style="width: 10%">Цвет</th>
                            <th style="width: 10%">Позывной</th>
                            <th style="width: 20%">ФИО</th>
                            <th style="width: 15%">Конт. телефон</th>
                            <th style="width: 50%">Примечание</th>
                            <th style="width: 5%"><i class="icon_cogs"></i>Действия</th>
                        </tr>
                        <? foreach($listCouriers as $listCourier) { ?>
                            <tr>
                                <td><span style="display: block; width:15px; height: 15px; background: #<?=$listCourier['color']?>"></span></td>
                                <td><?=$listCourier['nick']?></td>
                                <td><?=$listCourier['name']?></td>
                                <td><?=$listCourier['contact']?></td>
                                <td><?=$listCourier['note']?></td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-success editCourier" data-id="<?=$listCourier['id']?>" data-toggle="modal" data-target="#myModalEditCourier"  href="#"><i class="icon_cog"></i></a>
                                        <a class="btn btn-danger deleteCourier" data-id="<?=$listCourier['id']?>" href="#"><i class="icon_trash_alt"></i></a>
                                    </div>
                                </td>
                            </tr>
                        <? } ?>
                        </tbody>
                    </table>
                </section>
            </div>
        </div>
    </section>
</section>
<!--main content end-->
</section>