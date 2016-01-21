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
                                        <label for="client">Клиент</label>
                                        <select name="id_client" class="form-control">
                                            <? foreach($clientList as $row) {?>
                                            <option value="<?=$row['id']?>"><?=$row['name']?></option>
                                            <? } ?>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="order_date">Дата заказа</label>
                                        <input name="oreder_date" type="text" class="form-control datepicker" id="date">
                                    </div>

                                    <div class="form-group" id="client_adress_block">
                                        <label for="sender_adress">Адрес клиента</label>
                                        <select name="id_sender_adress" class="form-control">
                                           //адреса клиента
                                        </select>
                                        <div>
                                            <button type="submit" class="btn btn-default addadress"><i class="glyphicon glyphicon-plus"></i></button>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        //подгружается с адреса, если такой адрес имеется иначе добавляется
                                        <label for="note">Примечание</label>
                                        <input name="note" class="form-control" id="note">
                                    </div>

                                    <div class="form-group">
                                        <label for="sender_time1">Время</label>
                                        <select name="sender_time1" class="form-control">
                                            <option value="01:00">01:00</option>
                                            <option value="02:00">02:00</option>
                                            <option value="03:00">03:00</option>
                                            <option value="04:00">04:00</option>
                                            <option value="05:00">05:00</option>
                                            <option value="06:00">06:00</option>
                                            <option value="07:00">07:00</option>
                                            <option value="08:00">08:00</option>
                                            <option value="09:00">09:00</option>
                                            <option value="10:00">10:00</option>
                                            <option value="11:00">11:00</option>
                                            <option value="12:00">12:00</option>
                                            <option value="13:00">13:00</option>
                                            <option value="14:00">14:00</option>
                                            <option value="15:00">15:00</option>
                                            <option value="16:00">16:00</option>
                                            <option value="17:00">17:00</option>
                                            <option value="18:00">18:00</option>
                                            <option value="19:00">19:00</option>
                                            <option value="20:00">20:00</option>
                                            <option value="21:00">21:00</option>
                                            <option value="22:00">22:00</option>
                                            <option value="23:00">23:00</option>
                                            <option value="24:00">24:00</option>
                                        </select>

                                        <select name="sender_time2" class="form-control">
                                            <option value="01:00">01:00</option>
                                            <option value="02:00">02:00</option>
                                            <option value="03:00">03:00</option>
                                            <option value="04:00">04:00</option>
                                            <option value="05:00">05:00</option>
                                            <option value="06:00">06:00</option>
                                            <option value="07:00">07:00</option>
                                            <option value="08:00">08:00</option>
                                            <option value="09:00">09:00</option>
                                            <option value="10:00">10:00</option>
                                            <option value="11:00">11:00</option>
                                            <option value="12:00">12:00</option>
                                            <option value="13:00">13:00</option>
                                            <option value="14:00">14:00</option>
                                            <option value="15:00">15:00</option>
                                            <option value="16:00">16:00</option>
                                            <option value="17:00">17:00</option>
                                            <option value="18:00">18:00</option>
                                            <option value="19:00">19:00</option>
                                            <option value="20:00">20:00</option>
                                            <option value="21:00">21:00</option>
                                            <option value="22:00">22:00</option>
                                            <option value="23:00">23:00</option>
                                            <option value="24:00">24:00</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="sender_weight">Вес</label>
                                        <input name="sender_weight" class="form-control" id="sender_weight">

                                    </div>

                                    <div class="form-group">
                                        <label for="sender_order_note">Дополнительно</label>
                                        <input name="sender_order_note" class="form-control" id="sender_order_note">
                                    </div>


                                    <div class="form-group">
                                        <label for="order_date">Дата заказа</label>
                                        <input name="oreder_date" type="text" class="form-control datepicker" id="date">
                                    </div>

                                    <div class="form-group">
                                        <label for="sender_courier">Курьер</label>
                                        <select name="sender_courier" class="form-control">
                                            <? foreach($courierList as $row) {?>
                                                <option value="<?=$row['id']?>"><?=$row['nick']?></option>
                                            <? } ?>
                                        </select>
                                     </div>

                                    <div class="form-group">
                                        <label for="order_note">Закупка</label>
                                        <div class="input-group">
                                            <span class="input-group-addon">₴</span>
                                            <input name="sender_buy" id="sender_buy" type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                            <span class="input-group-addon">.00</span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="order_note">Продажа</label>
                                        <div class="input-group">
                                            <span class="input-group-addon">₴</span>
                                            <input name="sender_sell" id="sender_sell" type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                            <span class="input-group-addon">.00</span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="sender_dis_note_1">Комментарий диспетчера</label>
                                        <input name="sender_dis_note_1" class="form-control" id="sender_dis_note_1">
                                    </div>


                                    <div class="form-group">
                                        <label for="recipient_order_date">Дата заказа</label>
                                        <input name="recipient_order_date" type="text" class="form-control datepicker" id="date">
                                    </div>

                                    <div class="form-group" id="client_adress_block">
                                        <label for="recipient_adress">Адрес получателя</label>
                                        <input name="recipient_adress" class="form-control" id="recipient_adress">
                                    </div>

                                    <div class="form-group">
                                        <label for="recipient_note">Примечание</label>
                                        <input name="recipient_note" class="form-control" id="note">
                                    </div>

                                    <div class="form-group">
                                        <label for="recipient_time1">Время</label>
                                        <select name="recipient_time1" class="form-control">
                                            <option value="01:00">01:00</option>
                                            <option value="02:00">02:00</option>
                                            <option value="03:00">03:00</option>
                                            <option value="04:00">04:00</option>
                                            <option value="05:00">05:00</option>
                                            <option value="06:00">06:00</option>
                                            <option value="07:00">07:00</option>
                                            <option value="08:00">08:00</option>
                                            <option value="09:00">09:00</option>
                                            <option value="10:00">10:00</option>
                                            <option value="11:00">11:00</option>
                                            <option value="12:00">12:00</option>
                                            <option value="13:00">13:00</option>
                                            <option value="14:00">14:00</option>
                                            <option value="15:00">15:00</option>
                                            <option value="16:00">16:00</option>
                                            <option value="17:00">17:00</option>
                                            <option value="18:00">18:00</option>
                                            <option value="19:00">19:00</option>
                                            <option value="20:00">20:00</option>
                                            <option value="21:00">21:00</option>
                                            <option value="22:00">22:00</option>
                                            <option value="23:00">23:00</option>
                                            <option value="24:00">24:00</option>
                                        </select>

                                        <select name="recipient_time2" class="form-control">
                                            <option value="01:00">01:00</option>
                                            <option value="02:00">02:00</option>
                                            <option value="03:00">03:00</option>
                                            <option value="04:00">04:00</option>
                                            <option value="05:00">05:00</option>
                                            <option value="06:00">06:00</option>
                                            <option value="07:00">07:00</option>
                                            <option value="08:00">08:00</option>
                                            <option value="09:00">09:00</option>
                                            <option value="10:00">10:00</option>
                                            <option value="11:00">11:00</option>
                                            <option value="12:00">12:00</option>
                                            <option value="13:00">13:00</option>
                                            <option value="14:00">14:00</option>
                                            <option value="15:00">15:00</option>
                                            <option value="16:00">16:00</option>
                                            <option value="17:00">17:00</option>
                                            <option value="18:00">18:00</option>
                                            <option value="19:00">19:00</option>
                                            <option value="20:00">20:00</option>
                                            <option value="21:00">21:00</option>
                                            <option value="22:00">22:00</option>
                                            <option value="23:00">23:00</option>
                                            <option value="24:00">24:00</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="recipient_weight">Курьер</label>
                                        <input name="recipient_weight" class="form-control" id="weight">

                                    </div>

                                    <div class="form-group">
                                        <label for="recipient_order_note">Дополнительно</label>
                                        <input name="recipient_order_note" class="form-control" id="order_note">
                                    </div>

                                    <div class="form-group">
                                        <label for="recipient_courier">Курьер</label>
                                        <select name="recipient_courier" class="form-control">
                                            <? foreach($courierList as $row) {?>
                                                <option value="<?=$row['id']?>"><?=$row['nick']?></option>
                                            <? } ?>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="recipient_order_note">Дополнительно</label>
                                        <input name="order_note" class="form-control" id="order_note">
                                    </div>

                                    <div class="form-group">
                                        <label for="recipient_order_note">Закупка</label>
                                        <div class="input-group">
                                            <span class="input-group-addon">₴</span>
                                            <input name="recipient_buy" id="recipient_buy" type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                            <span class="input-group-addon">.00</span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="order_note">Продажа</label>
                                        <div class="input-group">
                                            <span class="input-group-addon">₴</span>
                                            <input name="recipient_sell" id="recipient_sell" type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                            <span class="input-group-addon">.00</span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="recipient_dis_note">Комментарий диспетчера</label>
                                        <input name="recipient_dis_note" class="form-control" id="dis_note_2">
                                    </div>


                                    <div class="form-group">
                                        <label for="tariff">Тариф</label>
                                        <input name="tariff" class="form-control" id="tariff">
                                    </div>

                                    <div class="form-group">
                                        <label for="payment">Методы оплаты</label>
                                        <select name="payment" class="form-control">
                                            <option value="Кредит">Кредит</option>
                                            <option value="Приват">Приват</option>
                                            <option value="Безнал">Безнал</option>
                                            <option value="Наличные">Наличные</option>
                                            <option value="Учёт">Учёт</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="payment_person">Доставку оплачивает</label>
                                        <select name="payment_person" class="form-control">
                                            <option value="Отравитель">Отправитель</option>
                                            <option value="Получатель">Получатель</option>
                                            <option value="Клиент">Клиент</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="state">Статус</label>
                                        <select name="state" class="form-control">
                                            <option value="Выполнено">Выполнено</option>
                                            <option value="Отменён">Отменён</option>
                                            <option value="Отказ">Отказ</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-default addOrder">Добавить</button>
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
                        <? foreach($listOrders as $listOrder) { ?>
                            <tr>
                                <td><?=$listOrder['client']?></td>
                                <td><?=$listOrder['date']?></td>
                                <td><?=$listOrder['order_state']?></td>
                                <td><?=$listOrder['tariff']?></td>
                                <td><?=$listOrder['payment']?></td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-success editOrder" data-id="<?=$listOrder['id']?>" data-toggle="modal" data-target="#myModalEditOrder"  href="#"><i class="icon_cog"></i></a>
                                        <a class="btn btn-danger deleteOrder" data-id="<?=$listOrder['id']?>" href="#"><i class="icon_trash_alt"></i></a>
                                        <a class="btn btn-danger showOrder" data-id="<?=$listOrder['id']?>" href="/user/order_view/<?=$listOrder['id']?>"><i class="glyphicon glyphicon-eye-open"></i></a>
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