<section id="main-content">
    <section class="wrapper">
        <!--overview start-->
        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="/user/home">Административная панель</a></li>
                    <li><i class="fa fa-laptop"></i><a href ="/user/paths">Учет продаж</a></li>
                </ol>
            </div>
        </div>
        <div id="myModalMonth" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Добавление месяца</h4>
                    </div>
                    <div class="modal-body">
                        <form role="form" id="addform">
                            <div class="form-group">
                                <label for="">Название месяца</label>
                                <input name="month_name" type="text" class="form-control" id="month_name">
                            </div>
                            <div class="form-group">
                                <label for="">Начало месяца</label>
                                <input name="start_month" type="text" class="form-control" id="estart_month">
                            </div>
                            <div class="form-group">
                                <label for="">Конец месяца</label>
                                <input name="end_month" type="text" class="form-control" id="end_month">
                            </div>
                            <div class="form-group">
                                <label for="">Рабочие дни</label>
                                <input name="work_days" type="text" class="form-control" id="work_days">
                            </div>
                            <div class="form-group">
                                <label for="">План на месяц</label>
                                <input name="monthly_plan" type="text" class="form-control" id="monthly_plan">
                            </div>
                            <button type="submit" class="btn btn-default addMonth">Добавить</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>


    <div class="row">
        <div class="col-lg-12">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModalMonth" >Добавить месяц</button>
            </div>
        </div>
     <div class = "row">
         <div class = "col-md-12">
                        <br>
            <table class="table table-striped table-advance table-hover" style="font-size: 11px">
                <tbody>
                <tr>
                    <th style="width: 2%">Месяц</th>
                    <th style="width: 5%">Количество заказов</th>
                    <th style="width: 6%">Средняя касса в день</th>
                    <th style="width: 10%">Доход</th>
                    <th style="width: 10%">Расход</th>
                    <th style="width: 12%">Прибыль</th>
                </tr>

                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
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
