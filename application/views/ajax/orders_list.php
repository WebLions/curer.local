<table class="table table-striped table-advance table-hover table-font">
    <tbody>
    <tr>
        <th style="width: 1%"></th>
        <th style="width: 1%">№</th>
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
        <tr style="background: <?=!empty($listOrder['color'])?$listOrder['color']:'#ffffff';?>">
            <td><input type="color" class="color-order" data-id="<?=$listOrder['id']?>" value="<?=!empty($listOrder['color'])?$listOrder['color']:'#ffffff';?>"></td>
            <td><?=$listOrder['id']?></td>
            <td><?=$listOrder['client']?></td>
            <td><?=$listOrder['sender_adress']?></td>
            <td><input class="dis-edit" data-id="<?=$listOrder['id']?>" data-type="sender_dis_note" value="<?=$listOrder['sender_dis_note']?>" style="border: none"></td>
            <td>
                <select data-id="<?=$listOrder['id']?>" data-type="sender_courier" style="width: 80%" name="sender_courier" class="form-control sel-cour">
                    <? foreach($courierList as $row) {?>
                        <option value="<?=$row['id']?>" <?=($listOrder['sender_id']==$row['id'])? 'selected':'';?> ><?=$row['nick']?></option>
                    <? } ?>
                </select>
            </td>
            <td><?=$listOrder['recipient_adress']?></td>
            <td><input class="dis-edit" data-id="<?=$listOrder['id']?>" data-type="recipient_dis_note" value="<?=$listOrder['recipient_dis_note']?>" style="border: none"></td>
            <td>
                <select data-id="<?=$listOrder['id']?>" data-type="recipient_courier" style="width: 80%" name="recipient_courier" class="form-control sel-cour">
                    <? foreach($courierList as $row) {?>
                        <option value="<?=$row['id']?>" <?=($listOrder['recipient_id']==$row['id'])? 'selected':'';?> ><?=$row['nick']?></option>
                    <? } ?>
                </select>
            </td>
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
