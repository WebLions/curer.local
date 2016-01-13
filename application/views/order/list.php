<section id="main-content">
    <section class="wrapper">
        <!--overview start-->
        <div class="row">
            <div class="col-lg-12">

                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="/user/home">Административная панель</a></li>
                    <li><i class="fa fa-laptop"></i>Заказы</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Добавить заказ</button>
                <div id="myModalEditOrder" class="modal fade" role="dialog">
                </div>
                <div id="myModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Добавление заказа</h4>
                            </div>
                            <div class="modal-body">
                                <form role="form" id="addform">
                                    <div class="form-group">
                                        <label for="date">Дата доставки</label>
                                        <input name="date" type="text" class="form-control" id="date">
                                    </div>
                                    <div class="form-group">
                                        <label for="client">Клиент</label>
                                        <input name="client" class="form-control" id="client">
                                    </div>
                                    <div class="form-group">
                                        <label for="order_state">Статус заказа</label>
                                        <input name="order_state" class="form-control" id="order_state">
                                    </div>
                                    <div class="form-group">
                                        <label for="giver_adress">Адрес отправителя</label>
                                        <input name="giver_adress" class="form-control" id="giver_adress">
                                    </div>
                                    <div class="form-group">
                                        <label for="courier_1">Курьер</label>
                                        <input name="courier_1" class="form-control" id="courier_1">
                                    </div>
                                    <div class="form-group">
                                        <label for="taker_adress">Адрес получателя</label>
                                        <input name="taker_adress" class="form-control" id="taker_adress">
                                    </div>
                                    <div class="form-group">
                                        <label for="courier_2">Курьер</label>
                                        <input name="courier_2" class="form-control" id="courier_2">
                                     </div>
                                    <div class="form-group">
                                        <label for="tariff">Тариф</label>
                                        <input name="tariff" class="form-control" id="tariff">
                                    </div>
                                    <div class="form-group">
                                        <label for="buy">Купить</label>
                                        <input name="buy" class="form-control" id="buy">
                                    </div>
                                    <div class="form-group">
                                        <label for="sell">Продать</label>
                                        <input name="sell" class="form-control" id="sell">
                                    </div>
                                    <div class="form-group">
                                        <label for="payment">Оплата доставки</label>
                                        <input name="payment" class="form-control" id="payment">
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
                <section class="panel" id="orders">
                    <table class="table table-striped table-advance table-hover">
                        <tbody>
                        <tr>
                            <th>Клиент</th>
                            <th>Дата доставки</th>
                            <th>Статус заказа</th>
                            <th>Тариф</th>
                            <th>Оплата доставки</th>
                            <th><i class="icon_cogs"></i>Действия</th>
                        </tr>

                            <tr>
                                <td>client</td>
                                <td>date</td>
                                <td>order_state</td>
                                <td>tariff</td>
                                <td>payment</td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-success editClient" data-id="" data-toggle="modal" data-target="#myModalEditOrder"  href="#"><i class="icon_cog"></i></a>
                                        <a class="btn btn-danger deleteClient" data-id=" href="#"><i class="icon_trash_alt"></i></a>
                                        <a class="btn btn-danger showClient" data-id="" href="olist отдельный заказ"><i class="glyphicon glyphicon-eye-open"></i></a>

                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </section>
            </div>
        </div>


    </section>
</section>
<!--main content end-->
</section>