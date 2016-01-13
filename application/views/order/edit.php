<div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Редактирование клиента</h4>
        </div>
        <div class="modal-body">
            <form role="form" id="saveform">
                <input name="id" type="hidden" class="form-control" value="Айди заказа">
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
                <button type="submit" class="btn btn-default saveOrder">Сохранить</button>
            </form>
        </div>
    </div>

</div>