<section id="main-content">
    <section class="wrapper">
        <!--overview start-->
        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="/user/home">Административная панель</a></li>
                    <li><i class="fa fa-laptop"></i><a href ="/user/paths">Маршруты</a></li>
                    <li><i class="fa fa-laptop"></i><?=empty($cour->nick)?"Маршрутов нет":$cour->nick;?></li>
                </ol>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-12">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModalExpenses">Добавить статью расходов</button>
            </div>
        </div>

        <div id="myModalEditExpenses" class="modal fade" role="dialog">
        </div>
        <div id="myModalExpenses" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Передача денег</h4>
                    </div>
                    <div class="modal-body">
                        <form role="form" id="addform">
                            <div class="form-group">
                                <label for="date">Дата</label>
                                <input name="date" type="text" class="form-control" id="date">
                            </div>
                            <div class="form-group">
                                <label for="courier_giver">Статья расхода</label>
                                <input name="expense_state" type="text" class="form-control" id="expense_state">
                            </div>
                            <div class="form-group">
                                <label for="state">Месяц</label>
                                <input name="date" type="text" class="form-control" id="date">
                            </div>
                            <div class="form-group">
                                <label for="cost">Сумма</label>
                                <input name="cost_exp" type="text" class="form-control" id="cost_exp">
                            </div>
                            <button type="submit" class="btn btn-default addExpense">Добавить</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>

        <div class = "row">
            <div class = "col-md-12">
                <br>
                <table class="table table-striped table-advance table-hover" style="font-size: 11px">
                    <tbody>
                    <tr>
                        <th style="width: 15%">Статья расхода</th>
                        <th style="width: 25%">Месяц</th>

                    </tr>

                    <tr>
                        <td></td>
                        <td></td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </section>
</section>
<!--main content end-->
</section>
