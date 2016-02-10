<section id="main-content">
    <section class="wrapper">
        <!--overview start-->
        <div class="row">
            <div class="col-lg-12">

                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="/user/home">Административная панель</a></li>
                    <li><i class="fa fa-laptop"></i><a href ="/user/paths">Маршруты</a></li>
                    <li><i class="fa fa-laptop"></i><a href =""><?=empty($paths[0]['sender_courier'])?"Маршрутов нет":$paths[0]['sender_courier'];?></a></li>
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
                    <th style="width: 1%">Клиент</th>
                    <th style="width: 14%">Контактное лицо</th>
                    <th style="width: 20%">Примечание к адресу</th>
                    <th style="width: 10%">Тариф</th>
                    <th style="width: 43%">Закупка</th>
                    <th style="width: 43%">Продажа</th>
                </tr>
                <? foreach($paths as $path) { ?>
                    <tr>
                        <td><?=$path['client']?></td>
                        <td><?=$path['vendor']?></td>
                        <td><?=$path['sender_note']?></td>
                        <td><?=$path['tariff']?></td>
                        <td><?=$path['sender_buy']?></td>
                        <td><?=$path['sender_sell']?></td>
                    </tr>
                    <tr>
                        <td><?=$path['client']?></td>
                        <td><?=$path['vendor']?></td>
                        <td><?=$path['recipient_note']?></td>
                        <td><?=$path['tariff']?></td>
                        <td><?=$path['recipient_buy']?></td>
                        <td><?=$path['recipient_sell']?></td>
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
