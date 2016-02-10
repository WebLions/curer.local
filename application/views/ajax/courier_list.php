
            <table class="table table-striped table-advance table-hover">
                <tbody>
                <tr>
                    <th style="width: 10%">Цвет</th>
                    <th style="width: 10%">Позывной</th>
                    <th style="width: 20%">ФИО</th>
                    <th style="width: 15%">Конт. телефон</th>
                    <th style="width: 50%">Примечание</th>
                    <th style="width: 5%"><i class="icon_cogs"></i>Действия</th>
                </tr>
                <? foreach($listCouriers as $listCourier) { ?>
                    <tr>
                        <td><span style="display: block; width:15px; height: 15px; background: #<?=$listCourier['color']?>"></span></td>
                        <td><?=$listCourier['nick']?></td>
                        <td><?=$listCourier['name']?></td>
                        <td><?=$listCourier['contact']?></td>
                        <td><?=$listCourier['note']?></td>
                        <td>
                            <div class="btn-group">
                                <a class="btn btn-success editCourier" data-id="<?=$listCourier['id']?>" data-toggle="modal" data-target="#myModalEditCourier"  href="#"><i class="icon_cog"></i></a>
                                <a class="btn btn-danger deleteCourier" data-id="<?=$listCourier['id']?>" href="#"><i class="icon_trash_alt"></i></a>
                            </div>
                        </td>
                    </tr>
                <? } ?>
                </tbody>
            </table>
