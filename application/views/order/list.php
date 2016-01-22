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
                                <h4 class="modal-title" style="text-align: center">Добавление заказа</h4>
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
                                        <label for=order_date">Дата заказа</label>
                                        <input name="order_date" type="text" class="form-control datepicker" id="order_date">
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="sender_order_date">Дата заказа</label>
                                                <input name="sender_order_date" type="text" class="form-control datepicker" id="sender_order_date">
                                            </div>

                                    <div class="form-group" id="client_adress_block">
                                        <label for="sender_adress" style="width: 100%">Адрес отправителя</label>
                                        <select name="id_sender_adress" style="width: 80%; float:left;" class="form-control">
                                           //адреса клиента
                                        </select>
                                        <div>
                                            <button type="submit" class="btn btn-default addadress"><i class="glyphicon glyphicon-plus"></i></button>
                                        </div>
                                    </div>

                                            <div class="form-group">
                                                <label for="note">Примечание</label>
                                                <input name="note" class="form-control" id="note">
                                            </div>

                                    <div class="form-group">
                                        <label for="sender_time1">От:</label>
                                        <select name="sender_time1" class="form-control">
                                            <? for($i=0;$i<=4;$i++) {?>
                                                <option value="<?=($i<10)?'0'.$i.':00':$i.':00'?>"><?=($i<10)?'0'.$i.':00':$i.':00'?></option>
                                            <? } ?>
                                        </select>

                                        <label for="sender_time1">До:</label>
                                        <select name="sender_time2" class="form-control">
                                            <? for($i=0;$i<=24;$i++) {?>
                                                <option value="<?=($i<10)?'0'.$i.':00':$i.':00'?>"><?=($i<10)?'0'.$i.':00':$i.':00'?></option>
                                            <? } ?>
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

                                        </div>

                                    <div class="col-lg-6">

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
                                            <label for="sender_time1">От:</label>
                                            <select name="sender_time1" class="form-control">
                                                <? for($i=0;$i<=4;$i++) {?>
                                                    <option value="<?=($i<10)?'0'.$i.':00':$i.':00'?>"><?=($i<10)?'0'.$i.':00':$i.':00'?></option>
                                                <? } ?>
                                            </select>

                                            <label for="sender_time1">До:</label>
                                            <select name="sender_time2" class="form-control">
                                                <? for($i=0;$i<=24;$i++) {?>
                                                    <option value="<?=($i<10)?'0'.$i.':00':$i.':00'?>"><?=($i<10)?'0'.$i.':00':$i.':00'?></option>
                                                <? } ?>
                                            </select>
                                        </div>

                                    <div class="form-group">
                                        <label for="recipient_weight">Вес</label>
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
                                        <input name="recipient_dis_note" class="form-control t-text-area" id="dis_note_2">
                                    </div>

                                    </div>
                                    </div>

                                    <div class="row">
                                    <div class="col-lg-12">

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

                                    </div>
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
                            <th>Номер заказа(начинается с 100001)</th>
                            <th>Дата</th>
                            <th>Клиент</th>
                            <th>Адрес отправителя</th>
                            <th>Диспетчер</th>
                            <th>Курьер</th>
                            <th>Адрес получателя</th>
                            <th>Диспетчер</th>
                            <th>Курьер</th>
                            <th><i class="icon_cogs"></i>Действия</th>
                        </tr>
                        <? foreach($listOrders as $listOrder) { ?>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
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