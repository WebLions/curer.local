<section id="main-content">
    <section class="wrapper">
        <!--overview start-->
        <div class="row">
            <div class="col-lg-12">

                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="/user/home">Административная панель</a></li>
                    <li><i class="fa fa-laptop"></i>Клиенты</li>
                    <li><i class="fa fa-laptop"></i>*Наименование клиента*</li>
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
                                <h4 class="modal-title">Добавление адресса</h4>
                            </div>
                            <div class="modal-body">
                                <form role="form" id="addform">
                                    <div class="form-group">
                                        <label for="adress">Адресс</label>
                                        <input name="adress" type="text" class="form-control" id="adress">
                                    </div>
                                    <div class="form-group">
                                        <label for="note">Примечание</label>
                                        <input name="note" class="form-control" id="note">
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
                        <thead>
                            <th>Адресс</th>
                            <th>Примечание</th>
                            <th><i class="icon_cogs"></i>Действия</th>

                        </thead>
                        <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>


                        </tbody>
                    </table>
                    <div class = "button-center">

                        <a class="btn btn-success " data-toggle="modal" data-target="#myModal"><i class="glyphicon glyphicon-plus"></i></a>
                    </div>

                </section>

            </div>
        </div>


    </section>
</section>
<!--main content end-->
</section>