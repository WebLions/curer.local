<section id="main-content">
    <section class="wrapper">
        <!--overview start-->
        <div class="row">
            <div class="col-lg-12">

                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="/user/home">Административная панель</a></li>
                    <li><i class="fa fa-laptop"></i>Пользователи</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Добавить пользователя</button>
                <div id="myModalEditUser" class="modal fade" role="dialog">
                </div>
                <div id="myModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Добавление пользователя</h4>
                            </div>
                            <div class="modal-body">
                                <form role="form" id="addform">
                                    <div class="form-group">
                                        <label for="login">Логин</label>
                                        <input name="login" type="text" class="form-control" id="login">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Пароль</label>
                                        <input name="password" class="form-control" id="password">
                                    </div>
                                    <div class="form-group">
                                        <label for="fio">ФИО</label>
                                        <input name="fio" class="form-control" id="fio">
                                    </div>
                                    <div class="form-group">
                                        <label for="access">Роль</label>
                                        <select name="access" class="form-control" id="access">
                                            <? foreach($listAccess as $listAcces){ ?>
                                            <option value="<?=$listAcces['id']?>"><?=$listAcces['role']?></option>
                                            <? } ?>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-default adduser">Сохранить</button>
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
                <section class="panel" id="users">
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
                                    <a class="btn btn-success editUser" data-toggle="modal" data-target="#myModalEditUser"  data-id="<?=$listUser['id']?>" href="#"><i class="icon_cog"></i></a>
                                    <a class="btn btn-danger deleteUser" data-id="<?=$listUser['id']?>"  href="#"><i class="icon_trash_alt"></i></a>
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