<section id="main-content">
    <section class="wrapper">
        <!--overview start-->
        <div class="row">
            <div class="col-lg-12">

                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="/user/home">Административная панель</a></li>
                    <li><i class="fa fa-laptop"></i>Заказы</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <section class="panel" id="users">
                    <table class="table table-striped table-advance table-hover">
                        <tbody>
                        <tr>
                            <th>№</th>
                            <th>Контрагент</th>
                            <th>Оплата</th>
                            <th>Доставка</th>
                            <th>Статус</th>
                            <th>Тариф</th>
                            <th><i class="icon_cogs"></i>Действия</th>
                        </tr>
                        <?php foreach ($orders as $order) { ?>
                        <tr>
                            <td><?php echo $order['id']?></td>
                            <td><?php echo $order['contragent']?></td>
                            <td><?php echo $order['payment']?></td>
                            <td><?php echo $order['delivery']?></td>
                            <td><?php echo $order['status']?></td>
                            <td><?php echo $order['tariff']?></td>
                            <td><?php echo $order['id']?></td>
                        </tr>
                        <? } ?>
                        </tbody>
                    </table>
                </section>
            </div>
        </div>
        <!--overview end-->
    </section>
</section>