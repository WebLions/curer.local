<table class="table table-striped table-advance table-hover">
    <tbody>
    <tr>
        <th>Адресс</th>
        <th>Примечание</th>
        <th><i class="icon_cogs"></i>Действия</th>
    </tr>
    <? foreach($listAdress as $listAdres) { ?>
        <tr>
            <td><?=$listAdres['adress']?></td>
            <td><?=$listAdres['note']?></td>
            <td>
                <div class="btn-group">
                    <a class="btn btn-success editAdress" data-id="<?=$listAdres['id']?>" data-toggle="modal" data-target="#myModalEditAdress"  href="#"><i class="icon_cog"></i></a>
                    <a class="btn btn-danger deleteAdress" data-id="<?=$listAdres['id']?>" href="#"><i class="icon_trash_alt"></i></a>
                </div>
            </td>
        </tr>
    <? } ?>
    </tbody>
</table>