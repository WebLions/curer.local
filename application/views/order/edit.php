<div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Редактирование заказа</h4>
        </div>
        <div class="modal-body">
            <form role="form" id="saveform">
                <input name="id" type="hidden" class="form-control" value="<?=$order->id?>">
                <div class="form-group">
                    <label for="date">Дата доставки</label>
                    <input name="date" type="text" class="form-control" id="date2" value="<?=$order->date?>">
                </div>
                <div class="form-group">
                    <label for="client">Клиент</label>
                    <select name="id_client" class="form-control">
                        <? foreach($clientList as $row) {?>
                            <option value="<?=$row['id']?>"><?=$row['name']?></option>
                        <? } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="order_state">Статус заказа</label>
                    <select name="order_state" class="form-control">
                        <option value="Оплачен" <?=($order->order_state="Оплачен")?"checked":"";?> >Оплачен</option>
                        <option value="Не оплачен" <?=($order->order_state="Не оплачен")?"checked":"";?> >Не оплачен</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="giver_adress">Адрес отправителя</label>
                    <input name="giver_adress" class="form-control" id="giver_adress" value="<?=$order->giver_adress?>">
                </div>
                <div class="form-group">
                    <label for="courier_1">Курьер</label>
                    <select name="courier_1" class="form-control">
                        <? foreach($courierList as $row) {?>
                            <option value="<?=$row['id']?>" <?=($order->id_courier_1==$row['id'])?"checked":"";?> ><?=$row['name']?></option>
                        <? } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="taker_adress">Адрес получателя</label>
                    <input name="taker_adress" class="form-control" id="taker_adress" value="<?=$order->taker_adress?>">
                </div>
                <div class="form-group">
                    <label for="courier_2">Курьер</label>
                    <select name="courier_2" class="form-control">
                        <? foreach($courierList as $row) {?>
                            <option value="<?=$row['id']?>" <?=($order->id_courier_1==$row['id'])?"checked":"";?> ><?=$row['name']?></option>
                        <? } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="tariff">Тариф</label>
                    <input name="tariff" class="form-control" id="tariff" value="<?=$order->tariff?>">
                </div>
                <div class="form-group">
                    <label for="buy">Купить</label>
                    <input name="buy" type="checkbox" class="form-control" <?=($order->buy==true)?" value=\"TRUE\" checked":" value=\"FALSE\" ";?>>
                    <label for="sell">Продать</label>
                    <input name="sell" type="checkbox" class="form-control" <?=($order->sell==true)?" value=\"TRUE\" checked":" value=\"FALSE\" ";?>>
                </div>
                <div class="form-group">
                    <label for="payment">Оплата доставки</label>
                    <select name="payment" class="form-control">
                        <option value="Да" <?=($order->payment="Да")?"checked":"";?>>Да</option>
                        <option value="Нет" <?=($order->payment="Нет")?"checked":"";?>>Нет</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-default saveOrder">Сохранить</button>
            </form>
        </div>
    </div>

</div>