<section id="main-content">
    <section class="wrapper">
        <!--overview start-->
        <div class="row">
            <div class="col-lg-12">

                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="/user/home">Административная панель</a></li>
                    <li><i class="fa fa-laptop"></i><a href="/user/clist">Клиенты</a></li>
                    <li><i class="fa fa-laptop"></i><?=$client->name?></li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div id="myModalEditAdress" class="modal fade" role="dialog">
                </div>
                <div id="myModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Добавление адреса</h4>
                            </div>
                            <div class="modal-body">
                                <form role="form" id="addform">
                                    <input name="id" type="hidden" class="form-control" id="id_contragent" value="<?=$client->id?>">
                                    <div class="form-group">
                                        <label for="adress">Адресс</label>
                                        <textarea name="adress" type="text" class="form-control" id="adress"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="note">Примечание</label>
                                        <textarea name="note" class="form-control" id="note"></textarea>
                                    </div>

                                    <button type="submit" class="btn btn-default addadress">Добавить</button>
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
                <section class="panel" id="listAdress">
                    <table class="table table-striped table-advance table-hover">
                        <thead>
                            <th>Адресс</th>
                            <th>Примечание</th>
                            <th><i class="icon_cogs"></i>Действия</th>

                        </thead>
                        <tbody>
                        <? foreach($listAdress as $listAdres) { ?>
                            <tr>
                                <td><?=$listAdres['adress']?></td>
                                <td><?=$listAdres['note']?></td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-xs btn-success editAdress" data-id="<?=$listAdres['id']?>" data-toggle="modal" data-target="#myModalEditAdress"  href="#"><i class="icon_cog"></i></a>
                                        <a class="btn btn-xs btn-danger deleteAdress" data-id="<?=$listAdres['id']?>" href="#"><i class="icon_trash_alt"></i></a>
                                    </div>
                                </td>
                            </tr>
                        <? } ?>
                        </tbody>
                    </table>

                </section>
                <div class = "button-center">
                    <a class="btn btn-success " data-toggle="modal" data-target="#myModal"><i class="glyphicon glyphicon-plus"></i></a>
                </div>

            </div>
        </div>


    </section>
</section>
<!--main content end-->
</section>