<section id="main-content">
    <section class="wrapper">
        <!--overview start-->
        <div class="row">
            <div class="col-lg-12">

                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="/user/home">Административная панель</a></li>
                    <li><i class="fa fa-laptop"></i><a href ="/user/olist">Заказы</a></li>
                    <li><i class="fa fa-laptop"></i><?=$order->id_client?></li>
                </ol>
            </div>
        </div>

        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#adress">Адреса и курьеры</a></li>
            <li><a data-toggle="tab" href="#order_data">Данные по заказу</a></li>
            <li><a data-toggle="tab" href="#payment_data">Данные по оплате</a></li>

        </ul>

        <div class="tab-content">
        <div id="adress" class="tab-pane fade active in">
            <div class = "row">
                <div class = "col-md-12">
                    <br>
                    <table width = "100%">
                        <tr>
                            <th style = "width: 25%">Адресс отправителя</th>
                            <th style = "width: 25%">Курьер</th>
                            <th style = "width: 25%">Адресс получателя</th>
                            <th style = "width: 25%">Курьер</th>
                        </tr>
                        <tr>
                            <td><?=$order->giver_adress?></td>
                            <td><?=$order->id_courier_1?></td>
                            <td><?=$order->taker_adress?></td>
                            <td><?=$order->id_courier_2?></td>
                         </tr>
                    </table>
                </div>
            </div>
        </div>

        <div id="order_data" class="tab-pane fade ">
            <div class = "row">
                <div class = "col-md-12">
                    <br>
                    <table width = "100%">
                        <tr>
                            <th style = "width: 25%">Дата доставки</th>
                            <th style = "width: 25%">Клиент</th>
                            <th style = "width: 25%">Статус заказа</th>
                        </tr>
                        <tr>
                            <td><?=$order->date?></td>
                            <td><?=$order->id_client?></td>
                            <td><?=$order->order_state?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div id="payment_data" class="tab-pane fade ">
            <div class = "row">
                <div class = "col-md-12">
                    <br>
                    <table width = "100%">
                        <tr>
                            <th style = "width: 25%">Тариф</th>
                            <th style = "width: 25%">Купить</th>
                            <th style = "width: 25%">Продать</th>
                        </tr>
                        <tr>
                            <td><?=$order->tariff?></td>
                            <td><?=($order->buy==true ? "ДА" : "НЕТ" )?></td>
                            <td><?=($order->sell==true ? "ДА" : "НЕТ" )?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
            </div>


    </section>
</section>
<!--main content end-->
</section>