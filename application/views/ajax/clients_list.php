<table class="table table-striped table-advance table-hover">
    <tbody>
    <tr>
        <th style="width: 1%">ID</th>
        <th style="width: 14%">Название</th>
        <th style="width: 10%">Конт. данные</th>
        <th style="width: 43%">Дополнительно</th>
        <th style="width: 12%"><i class="icon_cogs"></i>Действия</th>
    </tr>
    <? foreach($listClients as $listClient) { ?>
        <tr>
            <td><?=$listClient['id']?></td>
            <td><?=$listClient['name']?></td>
            <td><?=$listClient['contact']?></td>
            <td><?=$listClient['other']?></td>
            <td>
                <div class="btn-group">
                    <a class="btn btn-success editClient" data-id="<?=$listClient['id']?>" data-toggle="modal" data-target="#myModalEditClient"  href="#"><i class="icon_cog"></i></a>
                    <a class="btn btn-danger deleteClient" data-id="<?=$listClient['id']?>" href="#"><i class="icon_trash_alt"></i></a>
                    <a class="btn btn-danger showClient" data-id="<?=$listClient['id']?>" href="/user/alist/<?=$listClient['id']?>"><i class="glyphicon glyphicon-eye-open"></i></a>

                </div>
            </td>
        </tr>
    <? } ?>
    </tbody>
</table>