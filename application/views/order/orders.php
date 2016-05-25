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
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Добавить заказ</button>
                <div id="myModalEditOrder" class="modal fade" role="dialog">
                </div>
                <div id="myModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title" style="text-align: center">Добавление заказа</h4>
                            </div>
                            <div class="modal-body">
                                <form role="form" id="addform">
                                    <div class="form-group">
                                        <?php echo form_dropdown(NULL, $contagents, NULL, 'name="contragents" class="form-control" id="contragent"'); ?>
                                    </div>
                                    <div class="form-group" id="">
                                        <label for="contact">Контактное лицо клиента:</label>
                                        <input disabled name="contact" class="form-control" id="contact">
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group" id="client_adress_block">
                                                <label id="sender_mark" for="sender_adress" style="width: 100%">Отправитель</label>
                                                <select id="sender_adress" name="id_sender_adress" style="width: 89%; float:left;" class="form-control" >
                                                </select>
                                                <div>
                                                    <button id="addAdress" class="glyphicon glyphicon-plus addAdress form-control" style="width: 10%"></button>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <input name="sender_order_date" type="text" class="form-control" id="sender_date" placeholder="Дата заказа">
                                            </div>

                                            <div class="form-group">
                                                <input name="sender_note" class="form-control" id="sender_note" placeholder="Примечание">
                                            </div>

                                            <div class="form-group">
                                                <select style="width: 50%; float:left;" name="sender_time1" class="form-control">
                                                    <option></option>
                                                    <? for($i=0;$i<=24;$i++) {?>
                                                        <option value="<?=($i<10)?'0'.$i.':00':$i.':00'?>"><?=($i<10)?'От: 0'.$i.':00':'От: '.$i.':00'?></option>
                                                    <? } ?>
                                                </select>
                                                <select style="width: 49%" name="sender_time2" class="form-control">
                                                    <option></option>
                                                    <? for($i=0;$i<=24;$i++) {?>
                                                        <option value="<?=($i<10)?'0'.$i.':00':$i.':00'?>"><?=($i<10)?'До: 0'.$i.':00':'До: '.$i.':00'?></option>
                                                    <? } ?>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <input name="sender_weight" class="form-control" id="sender_weight" placeholder="Вес">
                                            </div>

                                            <div class="form-group">
                                                <input name="sender_order_note" class="form-control" id="sender_order_note" placeholder="Дополнительно">
                                            </div>

                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon">₴</span>
                                                    <input name="sender_buy" id="sender_buy" type="text" class="form-control" placeholder="Закупка" aria-label="Amount (to the nearest dollar)">

                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon">₴</span>
                                                    <input name="sender_sell" id="sender_sell" type="text" class="form-control" placeholder="Продажа" aria-label="Amount (to the nearest dollar)">

                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <input name="sender_dis_note" class="form-control" id="sender_dis_note" placeholder="Комментарий диспетчера">
                                            </div>

                                        </div>

                                        <div class="col-lg-6">

                                            <div class="form-group" id="client_adress_block">
                                                <label for="recipient_adress">Получатель</label>
                                                <input name="recipient_adress" class="form-control" id="recipient_adress" >
                                            </div>

                                            <div class="form-group">
                                                <input name="recipient_order_date" type="text" class="form-control datepicker" placeholder="Дата заказа" id="recipient_date">
                                            </div>

                                            <div class="form-group">
                                                <input name="recipient_note" class="form-control" id="note" placeholder="Примечание">
                                            </div>

                                            <div class="form-group">
                                                <select style="width: 50%; float:left;" name="recipient_time1" class="form-control">
                                                    <option></option>
                                                    <? for($i=0;$i<=24;$i++) {?>
                                                        <option value="<?=($i<10)?'0'.$i.':00':$i.':00'?>"><?=($i<10)?'От: 0'.$i.':00':'От: '.$i.':00'?></option>
                                                    <? } ?>
                                                </select>
                                                <select style="width: 49%" name="recipient_time2" class="form-control">
                                                    <option></option>
                                                    <? for($i=0;$i<=24;$i++) {?>
                                                        <option value="<?=($i<10)?'0'.$i.':00':$i.':00'?>"><?=($i<10)?'До: 0'.$i.':00':'До: '.$i.':00'?></option>
                                                    <? } ?>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <input name="recipient_weight" class="form-control" id="weight" placeholder="Вес">
                                            </div>

                                            <div class="form-group">
                                                <input name="recipient_order_note" class="form-control" id="order_note" placeholder="Дополнительно">
                                            </div>


                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon">₴</span>
                                                    <input name="recipient_buy" id="recipient_buy" type="text" class="form-control"  placeholder="Закупка" aria-label="Amount (to the nearest dollar)">

                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon">₴</span>
                                                    <input name="recipient_sell" id="recipient_sell" type="text" class="form-control" placeholder="Продажа" aria-label="Amount (to the nearest dollar)">

                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <input name="recipient_dis_note" class="form-control t-text-area" id="recipient_dis_note" placeholder="Комментарий диспетчера" >
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12">

                                            <div class="form-group">
                                                <input name="tariff" class="form-control" id="tariff" placeholder="Тариф">
                                            </div>

                                            <div class="form-group">
                                                <label style="width: 20%; font-size: 14px;padding: 4px 1px" for="payment">Методы оплаты</label>
                                                <select  style="width: 72%;float: right" name="payment" class="form-control">
                                                    <option value="Кредит">Кредит</option>
                                                    <option value="Приват">Приват</option>
                                                    <option value="Безнал">Безнал</option>
                                                    <option value="Наличные">Наличные</option>
                                                    <option value="Учёт">Учёт</option>
                                                </select>
                                            </div>

                                            <div  class="form-group">
                                                <label style=" font-size: 14px;padding: 4px 1px" for="payment_person">Доставку оплачивает</label>
                                                <select style="width: 72%;float: right"  name="payment_person" class="form-control">
                                                    <option value="Отравитель">Отправитель</option>
                                                    <option value="Получатель">Получатель</option>
                                                    <option value="Клиент">Клиент</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label style="width: 15%; font-size: 14px;padding: 4px 1px" for="state">Статус</label>
                                                <select style="width: 72%;float: right"  name="state" class="form-control">
                                                    <option></option>
                                                    <option value="Выполнено">Выполнено</option>
                                                    <option value="Отменён">Отменён</option>
                                                    <option value="Отказ">Отказ</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>

                                    <div style="text-align: center">
                                        <button  type="submit" class="btn btn-default addOrder">Добавить</button>
                                    </div>

                                </form>
                            </div>
                        </div>

                    </div>
                </div>
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
                            <td>
                                <div class="btn-group">
                                    <a class="btn btn-xs btn-success editCourier" data-id="<?=$order['id']?>" data-toggle="modal" data-target="#myModalEditCourier"  href="#"><i class="icon_cog"></i></a>
                                    <a class="btn btn-xs btn-danger deleteCourier" data-id="<?=$order['id']?>" href="#"><i class="icon_trash_alt"></i></a>
                                </div>
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

<script type="text/javascript">
    $( document ).ready(function()
    {
        //Получение данных контрагента 
        $("#contragent").on('change', function () {
            var id = $(this).val();
            $.post("/order/ajax_get_contragent_info", {id: id}, function(data) {
                if (data.success) {
                    var data = data.data;
                    var select = $(document).find('#sender_adress');
                    $(document).find('#contact').val(data.contact);
                    select.empty();
                    $.each(data.adress, function(val, text) {
                        select.append(
                            $('<option></option>').val(val).html(text)
                        );
                    });
                }
            }, "json");
        });
        //удаление
        $( ".deleteCourier" ).click(function(data) {
            if (confirm("Удалить курьера?") == true)
            {
                $.post( "/order/ajax_delete_order", { id : $(this).attr("data-id")});
//                $.post( "/ajax/getCouriers", function( data ) {
//                    $("#couriers").html(data);
//                });
                location.reload();
            }
            else
            {
                return false
            }
        });

    });
    //редактирование
    $( ".editCourier" ).click(function(data) {

    });
</script>