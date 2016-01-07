<table class="table table-striped table-advance table-hover">
    <tbody>
    <tr>
        <th>ФИО</th>
        <th>Логин</th>
        <th>Пароль</th>
        <th>Роль</th>
        <th><i class="icon_cogs"></i>Действия</th>
    </tr>
    <? foreach($listUsers as $listUser) { ?>
        <tr>
            <td><?=$listUser['fio']?></td>
            <td><?=$listUser['login']?></td>
            <td>******</td>
            <td><?=$listUser['access']?></td>
            <td>
                <div class="btn-group">
                    <a class="btn btn-success editUser" data-id="<?=$listUser['id']?>" data-toggle="modal" data-target="#myModalEditUser"  href="#"><i class="icon_cog"></i></a>
                    <a class="btn btn-danger deleteUser" data-id="<?=$listUser['id']?>" href="#"><i class="icon_trash_alt"></i></a>
                </div>
            </td>
        </tr>
    <? } ?>
    </tbody>
</table>