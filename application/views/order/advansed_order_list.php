<section id="main-content">
    <section class="wrapper">
        <!--overview start-->
        <div class="row">
            <div class="col-lg-12">

                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="/user/home">Административная панель</a></li>
                    <li><i class="fa fa-laptop"></i><a href ="/user/olist">Заказы</a></li>
                    <li><i class="fa fa-laptop"></i><?=$order->client?> - #<?=$order->id_client?></li>
                </ol>
            </div>
        </div>
        <h3>Общие данные по заказу</h3>
            <div class = "row">
                <div class = "col-md-12">
                    <br>
                    <table width = "100%" class="table table-striped table-advance table-hover table-font">
                        <tr>
                            <th style = "width: 15%">Клиент</th>
                            <th style = "width: 10%">Тариф</th>
                            <th style = "width: 20%">Методы оплаты</th>
                            <th style = "width: 20%">Оплачивает доставку</th>
                            <th style = "width: 20%">Статус</th>
                        </tr>
                        <tr>
                            <td><?=$order->client?></td>
                            <td><?=$order->tariff?></td>
                            <td><?=$order->payment?></td>
                            <td><?=$order->payment_person?></td>
                            <td><?=$order->state?></td>
                         </tr>
                    </table>

                    <h3>Данные по отправителю</h3>

                    <table width = "100%" class="table table-striped table-advance table-hover table-font">
                        <tr>
                            <th style = "width: 10%">Дата</th>
                            <th style = "width: 10%">Адрес</th>
                            <th style = "width: 15%">Примечание</th>
                            <th style = "width: 5%">От - До</th>
                            <th style = "width: 20%">Дополнительно</th>
                            <th style = "width: 7%">Курьер</th>
                            <th style = "width: 7%">Закупка</th>
                            <th style = "width: 7%">Продажа</th>
                            <th style = "width: 20%">Комментарий</th>
                        </tr>
                        <tr>
                            <td><?=$order->sender_order_date?></td>
                            <td><?=$order->sender_adress?></td>
                            <td><?=$order->sender_note?></td>
                            <td><?=$order->sender_time1  ." - ". $order->sender_time2?></td>
                            <td><?=$order->sender_order_note?></td>
                            <td><?=$order->sender_courier?></td>
                            <td><?=$order->sender_buy?></td>
                            <td><?=$order->sender_sell?></td>
                            <td><?=$order->sender_dis_note?></td>
                        </tr>
                    </table>
                    <h3>Данные по получателю</h3>
                    <table width = "100%" class="table table-striped table-advance table-hover table-font">
                        <tr>
                            <th style = "width: 10%">Дата</th>
                            <th style = "width: 10%">Адрес</th>
                            <th style = "width: 15%">Примечание</th>
                            <th style = "width: 5%">От - До</th>
                            <th style = "width: 20%">Дополнительно</th>
                            <th style = "width: 7%">Курьер</th>
                            <th style = "width: 7%">Закупка</th>
                            <th style = "width: 7%">Продажа</th>
                            <th style = "width: 20%">Комментарий</th>
                        </tr>
                        <tr>
                            <td><?=$order->recipient_order_date?></td>
                            <td><?=$order->recipient_adress?></td>
                            <td><?=$order->recipient_note?></td>
                            <td><?=$order->recipient_time1  ." - ". $order->sender_time2?></td>
                            <td><?=$order->recipient_order_note?></td>
                            <td><?=$order->recipient_courier?></td>
                            <td><?=$order->recipient_buy?></td>
                            <td><?=$order->recipient_sell?></td>
                            <td><?=$order->recipient_dis_note?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>




    </section>
</section>
<!--main content end-->
</section>