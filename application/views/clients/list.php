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
                                        <label for="contact">Контакт с магазином</label>
                                        <input name="contact" class="form-control" id="contact">
                                    </div>
                                    <div class="form-group">
                                        <label for="other">Дополнительно:</label>
                                        <input name="other" class="form-control" id="other">
                                    </div>
                                    <button type="submit" class="btn btn-default addcontragent">Добавить</button>
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
                            <th style="width: 1%">ID</th>
                            <th style="width: 14%">Название</th>
                            <th style="width: 30%">Конт. с магазином</th>
                            <th style="width: 43%">Дополнительно</th>
                            <th style="width: 12%"><i class="icon_cogs"></i>Действия</th>
                        </tr>
                        <? foreach($listClients as $listClient) { ?>
                            <tr>
                                <td><?=$listClient['id']?></td>
                                <td><?=$listClient['name']?></td>
                                <td><?=$listClient['contact']?></td>
                                <td><?=$listClient['other']?></td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-xs btn-success editClient" data-id="<?=$listClient['id']?>" data-toggle="modal" data-target="#myModalEditClient"  href="#"><i class="icon_cog"></i></a>
                                        <a class="btn btn-xs btn-danger deleteClient" data-id="<?=$listClient['id']?>" href="#"><i class="icon_trash_alt"></i></a>
                                        <a class="btn btn-xs btn-danger showClient" data-id="<?=$listClient['id']?>" href="/user/alist/<?=$listClient['id']?>"><i class="glyphicon glyphicon-eye-open"></i></a>
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