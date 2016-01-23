<table class="table table-striped table-advance table-hover">
    <tbody>
    <tr>
        <th style="width: 1%">№</th>
        <th style="width: 2%">Дата</th>
        <th style="width: 1%">Клиент</th>
        <th style="width: 5%">Адрес отправителя</th>
        <th style="width: 1%">Диспетчер</th>
        <th style="width: 1%">Курьер</th>
        <th style="width: 5%">Адрес получателя</th>
        <th style="width: 1%">Диспетчер</th>
        <th style="width: 1%">Курьер</th>
        <th style="width: 3%"><i class="icon_cogs"></i>Действия</th>
    </tr>
    <? foreach($listOrders as $listOrder) { ?>
        <tr>
            <td><?=$listOrder['id']?></td>
            <td><?=$listOrder['order_date']?></td>
            <td><?=$listOrder['client']?></td>
            <td><?=$listOrder['sender_adress']?></td>
            <td><?=$listOrder['disp']?></td>
            <td><?=$listOrder['sender_courier']?></td>
            <td><?=$listOrder['recipient_adress']?></td>
            <td><?=$listOrder['disp']?></td>
            <td><?=$listOrder['recipient_courier']?></td>
            <td>
                <div class="btn-group">
                    <a class="btn btn-primary editOrder" data-id="<?=$listOrder['id']?>" data-toggle="modal" data-target="#myModalEditOrder"  href="#"><i class="icon_cog"></i></a>
                    <a class="btn btn-danger deleteOrder" data-id="<?=$listOrder['id']?>" href="#"><i class="icon_trash_alt"></i></a>
                    <a class="btn btn-success showOrder" data-id="<?=$listOrder['id']?>" href="/user/order_view/<?=$listOrder['id']?>"><i class="glyphicon glyphicon-eye-open"></i></a>
                </div>
            </td>
        </tr>
    <? } ?>
    </tbody>
</table>
