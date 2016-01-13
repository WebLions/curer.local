<table class="table table-striped table-advance table-hover">
    <tbody>
    <tr>
        <th>ID</th>
        <th>Название</th>
        <th>Отв.лицо</th>
        <th>Контактные данные</th>
        <th>Дополнительно</th>
        <th><i class="icon_cogs"></i>Действия</th>
    </tr>
    <? foreach($listClients as $listClient) { ?>
        <tr>
            <td>id</td>
            <td><?=$listClient['name']?></td>
            <td><?=$listClient['vendor']?></td>
            <td><?=$listClient['contact']?></td>
            <td>other</td>
            <td>
                <div class="btn-group">
                    <a class="btn btn-success editClient" data-id="<?=$listClient['id']?>" data-toggle="modal" data-target="#myModalEditClient"  href="#"><i class="icon_cog"></i></a>
                    <a class="btn btn-danger deleteClient" data-id="<?=$listClient['id']?>" href="#"><i class="icon_trash_alt"></i></a>
                    <a class="btn btn-danger showClient" data-id="<?=$listClient['id']?>" href="#"><i class="glyphicon glyphicon-eye-open"></i></a>

                </div>
            </td>
        </tr>
    <? } ?>
    </tbody>
</table>