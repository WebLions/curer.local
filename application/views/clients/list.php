<section id="main-content">
    <section class="wrapper">
        <!--overview start-->
        <div class="row">
            <div class="col-lg-12">

                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="/user/home">Административная панель</a></li>
                    <li><i class="fa fa-laptop"></i>Клиенты</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Добавить клиента</button>
                <div id="myModalEditClient" class="modal fade" role="dialog">
                </div>
                <div id="myModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Добавление клиента</h4>
                            </div>
                            <div class="modal-body">
                                <form role="form" id="addform">
                                    <div class="form-group">
                                        <label for="name">Название</label>
                                        <input name="name" type="text" class="form-control" id="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="vendor">Ответственное лицо</label>
                                        <input name="vendor" class="form-control" id="vendor">
                                    </div>
                                    <div class="form-group">
                                        <label for="contact">Контактные данные</label>
                                        <input name="contact" class="form-control" id="contact">
                                    </div>

                                    <button type="submit" class="btn btn-default adduser">Добавить</button>
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
                <section class="panel" id="clients">
                    <table class="table table-striped table-advance table-hover">
                        <tbody>
                        <tr>
                            <th>ФИО</th>
                            <th>Логин</th>
                            <th>Пароль</th>
                            <th>Роль</th>
                            <th><i class="icon_cogs"></i>Действия</th>
                        </tr>
                        <? foreach($listUsers as $listUser) { ?>
                            <tr>
                                <td><?=$listUser['fio']?></td>
                                <td><?=$listUser['login']?></td>
                                <td>******</td>
                                <td><?=$listUser['access']?></td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-success editClient" data-toggle="modal" data-target="#myModalEditClient"  data-id="<?=$listUser['id']?>" href="#"><i class="icon_cog"></i></a>
                                        <a class="btn btn-danger deleteClient" data-id="<?=$listUser['id']?>"  href="#"><i class="icon_trash_alt"></i></a>
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