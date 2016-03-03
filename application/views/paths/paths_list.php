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

<div class="tab-content">
     <div class = "row">
         <div class = "col-md-12">
                        <br>
            <table class="table table-striped table-advance table-hover">
                <tbody>
                <tr>
                    <th style="width: 5%">№</th>//Можно выбирать
                    <th style="width: 15%">Дата</th>
                    <th style="width: 10%">Статус</th>//при статусе віполенено он пропадает с маршрутов(статусы можно выбирать)
                    <th style="width: 10%">Адресс</th>
                    <th style="width: 10%">Примечание</th>
                    <th style="width: 10%">Комментарий</th>
                    <th style="width: 10%">Время</th>
                    <th style="width: 10%">Вес</th>
                    <th style="width: 10%">Закупка</th>
                    <th style="width: 10%">Продажа</th>
                    <th style="width: 10%">Оплата тарифа</th>
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
