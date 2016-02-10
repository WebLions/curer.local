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
                    <th style="width: 15%">Клиент</th>
                    <th style="width: 15%">Контактное лицо</th>
                    <th style="width: 40%">Примечание к адресу</th>
                    <th style="width: 10%">Тариф</th>
                    <th style="width: 10%">Закупка</th>
                    <th style="width: 10%">Продажа</th>
                </tr>

                <? foreach($paths as $path) {
                    if($cour->nick==$path['recipient_courier']) $val = 'recipient';
                        else $val = 'sender';
                        ?>
                    <tr>
                        <td><?=$path['client']?></td>
                        <td><?=$path['vendor']?></td>
                        <td><?=$path[$val.'_note']?></td>
                        <td><?=$path['tariff']?></td>
                        <td><?=$path[$val.'_buy']?></td>
                        <td><?=$path[$val.'_sell']?></td>
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
