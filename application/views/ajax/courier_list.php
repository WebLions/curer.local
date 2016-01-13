<table class="table table-striped table-advance table-hover">
    <tbody>
    <tr>
        <th>ФИО</th>
        <th>Контактные телефон</th>
        <th>Примечание</th>
        <th><i class="icon_cogs"></i>Действия</th>
    </tr>
    <? foreach($listCouriers as $listCourier) { ?>
        <tr>
            <td><?=$listCourier['name']?></td>
            <td><?=$listCourier['contact']?></td>
            <td><?=$listCourier['note']?></td>
            <td>
                <div class="btn-group">
                    <a class="btn btn-success editCourier" data-id="<?=$listCourier['id']?>" data-toggle="modal" data-target="#myModalEditCourier"  href="#"><i class="icon_cog"></i></a>
                    <a class="btn btn-danger deleteCourier" data-id="<?=$listCourier['id']?>" href="#"><i class="icon_trash_alt"></i></a>
                    <a class="btn btn-danger showCourier" data-id="<?=$listCourier['id']?>" href="#"><i class="glyphicon glyphicon-eye-open"></i></a>

                </div>
            </td>
        </tr>
    <? } ?>
    </tbody>
</table>