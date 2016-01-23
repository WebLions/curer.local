            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title" style="text-align: center">Редактирование заказа</h4>
                    </div>
                    <div class="modal-body">
                        <form role="form" id="addform">

                            <div class="form-group">
                                <select name="id_client" class="form-control" id="client">
                                    <? foreach($clientList as $row) {?>
                                        <option value="<?=$row['id']?>"><?=$row['name']?></option>
                                    <? } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <input name="order_date" type="text" class="form-control datepicker"  placeholder="Дата заказа" id="order_date">
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input name="sender_order_date" type="text" class="form-control datepicker" id="sender_date" placeholder="Дата заказа">
                                    </div>

                                    <div class="form-group" id="client_adress_block">
                                        <label for="sender_adress" style="width: 100%">Адрес отправителя</label>
                                        <select id="sender_adress" name="id_sender_adress" style="width: 89%; float:left;" class="form-control" >
                                            //адреса клиента
                                        </select>
                                        <div>
                                            <button type="submit" class="glyphicon glyphicon-plus addadress form-control" style="width: 10%" id="addAdress"></button>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <input name="sender_note" class="form-control" id="sender_note" placeholder="Примечание">
                                    </div>

                                    <div class="form-group">
                                        <select style="width: 50%; float:left;" name="sender_time1" class="form-control">
                                            <? for($i=0;$i<=24;$i++) {?>
                                                <option value="<?=($i<10)?'0'.$i.':00':$i.':00'?>"><?=($i<10)?'От: 0'.$i.':00':'От: '.$i.':00'?></option>
                                            <? } ?>
                                        </select>
                                        <select style="width: 49%" name="sender_time2" class="form-control">
                                            <? for($i=0;$i<=24;$i++) {?>
                                                <option value="<?=($i<10)?'0'.$i.':00':$i.':00'?>"><?=($i<10)?'До: 0'.$i.':00':'До: '.$i.':00'?></option>
                                            <? } ?>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <input name="sender_weight" class="form-control" id="sender_weight" placeholder="Вес">
                                    </div>

                                    <div class="form-group">
                                        <input name="sender_order_note" class="form-control" id="sender_order_note" placeholder="Дополнительно">
                                    </div>

                                    <div class="form-group">
                                        <label style="width:19%;float: left; font-size: 14px;padding: 4px 1px" for="recipient_courier">Курьер</label>
                                        <select style="width: 80%" name="sender_courier" class="form-control">
                                            <? foreach($courierList as $row) {?>
                                                <option value="<?=$row['id']?>"><?=$row['nick']?></option>
                                            <? } ?>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon">₴</span>
                                            <input name="sender_buy" id="sender_buy" type="text" class="form-control" placeholder="Закупка" aria-label="Amount (to the nearest dollar)">

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon">₴</span>
                                            <input name="sender_sell" id="sender_sell" type="text" class="form-control" placeholder="Продажа" aria-label="Amount (to the nearest dollar)">

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <input name="sender_dis_note" class="form-control" id="sender_dis_note" placeholder="Комментарий диспетчера">
                                    </div>

                                </div>

                                <div class="col-lg-6">

                                    <div class="form-group">
                                        <input name="recipient_order_date" type="text" class="form-control datepicker" placeholder="Дата заказа" id="recipient_date">
                                    </div>

                                    <div class="form-group" id="client_adress_block">
                                        <label for="recipient_adress">Адрес получателя</label>
                                        <input name="recipient_adress" class="form-control" id="recipient_adress" >
                                    </div>

                                    <div class="form-group">
                                        <input name="recipient_note" class="form-control" id="note" placeholder="Примечание">
                                    </div>

                                    <div class="form-group">
                                        <select style="width: 50%; float:left;" name="recipient_time1" class="form-control">
                                            <? for($i=0;$i<=24;$i++) {?>
                                                <option value="<?=($i<10)?'0'.$i.':00':$i.':00'?>"><?=($i<10)?'От: 0'.$i.':00':'От: '.$i.':00'?></option>
                                            <? } ?>
                                        </select>
                                        <select style="width: 49%" name="recipient_time2" class="form-control">
                                            <? for($i=0;$i<=24;$i++) {?>
                                                <option value="<?=($i<10)?'0'.$i.':00':$i.':00'?>"><?=($i<10)?'До: 0'.$i.':00':'До: '.$i.':00'?></option>
                                            <? } ?>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <input name="recipient_weight" class="form-control" id="weight" placeholder="Вес">
                                    </div>

                                    <div class="form-group">
                                        <input name="recipient_order_note" class="form-control" id="order_note" placeholder="Дополнительно">
                                    </div>

                                    <div class="form-group">
                                        <label style="width:19%;float: left; font-size: 14px;padding: 4px 1px" for="recipient_courier">Курьер</label>
                                        <select style="width:80%" name="recipient_courier" class="form-control">
                                            <? foreach($courierList as $row) {?>
                                                <option value="<?=$row['id']?>"><?=$row['nick']?></option>
                                            <? } ?>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon">₴</span>
                                            <input name="recipient_buy" id="recipient_buy" type="text" class="form-control"  placeholder="Закупка" aria-label="Amount (to the nearest dollar)">

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon">₴</span>
                                            <input name="recipient_sell" id="recipient_sell" type="text" class="form-control" placeholder="Продажа" aria-label="Amount (to the nearest dollar)">

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <input name="recipient_dis_note" class="form-control t-text-area" id="recipient_dis_note" placeholder="Комментарий диспетчера" >
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">

                                    <div class="form-group">
                                        <input name="tariff" class="form-control" id="tariff" placeholder="Тариф">
                                    </div>

                                    <div class="form-group">
                                        <label style="width: 20%; font-size: 14px;padding: 4px 1px" for="payment">Методы оплаты</label>
                                        <select  style="width: 72%;float: right" name="payment" class="form-control">
                                            <option value="Кредит">Кредит</option>
                                            <option value="Приват">Приват</option>
                                            <option value="Безнал">Безнал</option>
                                            <option value="Наличные">Наличные</option>
                                            <option value="Учёт">Учёт</option>
                                        </select>
                                    </div>

                                    <div  class="form-group">
                                        <label style=" font-size: 14px;padding: 4px 1px" for="payment_person">Доставку оплачивает</label>
                                        <select style="width: 72%;float: right"  name="payment_person" class="form-control">
                                            <option value="Отравитель">Отправитель</option>
                                            <option value="Получатель">Получатель</option>
                                            <option value="Клиент">Клиент</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label style="width: 15%; font-size: 14px;padding: 4px 1px" for="state">Статус</label>
                                        <select style="width: 72%;float: right"  name="state" class="form-control">
                                            <option value="Выполнено">Выполнено</option>
                                            <option value="Отменён">Отменён</option>
                                            <option value="Отказ">Отказ</option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                            <div style="text-align: center">
                                <button  type="submit" class="btn btn-default saveOrder">Сохранить</button>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
