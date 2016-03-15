<section id="main-content">
    <section class="wrapper">
        <!--overview start-->
        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="/user/home">Административная панель</a></li>
                    <li><i class="fa fa-laptop"></i><a href ="/user/paths">Маршруты</a></li>
                    <li><i class="fa fa-laptop"></i><?=empty($cour->nick)?"Маршрутов нет":$cour->nick;?></li>
                </ol>
            </div>
        </div>


    <div class="row">
        <div class="col-lg-12">
            <button type="button" class="btn btn-success">Печать</button>
            <button type="button" class="btn btn-success">Выгрузить в Excel</button>
            </div>
        </div>
     <div class = "row">
         <div class = "col-md-12">
                        <br>
            <table class="table table-striped table-advance table-hover" style="font-size: 11px">
                <tbody>
                <tr>
                    <th style="width: 2%">№</th>
                    <th style="width: 5%">Дата</th>
                    <th style="width: 6%">Статус</th>
                    <th style="width: 10%">Адресс отправителя</th>
                    <th style="width: 10%">Адресс получателя</th>
                    <th style="width: 12%">Примечание</th>
                    <th style="width: 12%">Комментарий</th>
                    <th style="width: 8%">Время</th>
                    <th style="width: 6%">Вес</th>
                    <th style="width: 8%">Закупка</th>
                    <th style="width: 8%">Продажа</th>
                    <th style="width: 8%">Оплата тарифа</th>
                </tr>

                <? foreach($paths as $path) {
                    if($cour->nick==$path['recipient_courier']) $val = 'recipient';
                        else $val = 'sender';
                        ?>
                    <tr>
                        <td><?=$path['id']?></td>
                        <td><?=$path[$val.'_order_date']?></td>
                        <td>
                            <select data-id="<?=$path['id']?>" data-type="state" style="width: 80%" name="state" class="form-control sel-cour">
                                    <option></option>
                                    <option value="В работе" <?=($path['state']=='В работе')?'selected':'';?>>В работе</option>
                                    <option value="Выполнено" <?=($path['state']=='Выполнено')?'selected':'';?>>Выполнено</option>
                                    <option value="Отменён" <?=($path['state']=='Отменён')?'selected':'';?>>Отменён</option>
                                    <option value="Отказ" <?=($path['state']=='Отказ')?'selected':'';?>>Отказ</option>
                            </select>
                        </td>
                        <td><?=$path[$val.'_adress']?></td>
                        <td>Адресс получателя</td>
                        <td><?=$path[$val.'_note']?></td>
                        <td><?=$path[$val.'_dis_note']?></td>
                        <td><??></td>
                        <td><?=$path[$val.'_weight']?></td>
                        <td><?=$path[$val.'_buy']?></td>
                        <td><?=$path[$val.'_sell']?></td>
                        <td><?=$path['tariff']?></td>
                    </tr>
                <? } ?>
                </tbody>
            </table>
         </div>
    </div>
    </section>
</section>
<!--main content end-->
</section>
