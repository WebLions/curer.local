<section id="main-content">
    <section class="wrapper">
        <!--overview start-->
        <div class="row">
            <div class="col-lg-12">

                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="/user/home">Административная панель</a></li>
                    <li><i class="fa fa-laptop"></i><a href ="/user/olist">Заказы</a></li>
                    <li><i class="fa fa-laptop"></i>Ссылка на заказ, имя клиента</li>
                </ol>
            </div>
        </div>

        <ul class="nav nav-tabs">
            <li class = "active"><a data-toggle="tab" href="#adress">Адреса и курьеры</a></li>
            <li><a data-toggle="tab" href="#order_data">Данные по заказу</a></li>
            <li><a data-toggle="tab" href="#payment_data">Данные по оплате</a></li>

        </ul>

        <div id="adress" class="tab-pane fade ">
            <div class = "row">
                <div class = "col-md-12">
                    <table width = "100%">
                        <tr>
                            <th style = "width: 25%">Адресс отправителя</th>
                            <th style = "width: 25%">Курьер</th>
                            <th style = "width: 25%">Адресс получателя</th>
                            <th style = "width: 25%">Курьер</th>
                        </tr>
                        <tr>
                            <td>авипвап</td>
                            <td>ывапыв</td>
                            <td>авипвап</td>
                            <td>ывапыв</td>
                         </tr>
                    </table>
                    <div class="container">
                        <div class="row">
                            <div class='col-sm-6'>
                                <div class="form-group">
                                    <div class='input-group date' id='datetimepicker1'>
                                        <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                                    </div>
                                </div>
                            </div>
                            <script type="text/javascript">
                                $(function () {
                                    $('#datetimepicker1').datetimepicker();
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="order_data" class="tab-pane fade ">
            <div class = "row">
                <div class = "col-md-12">
                    <table width = "100%">
                        <tr>
                            <th style = "width: 25%">Дата доставки</th>
                            <th style = "width: 25%">Клиент</th>
                            <th style = "width: 25%">Статус заказа</th>
                        </tr>
                        <tr>
                            <td>авипвап</td>
                            <td>ывапыв</td>
                            <td>авипвап</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div id="payment_data" class="tab-pane fade ">
            <div class = "row">
                <div class = "col-md-12">
                    <table width = "100%">
                        <tr>
                            <th style = "width: 25%">Тариф</th>
                            <th style = "width: 25%">Купить</th>
                            <th style = "width: 25%">Продать</th>
                        </tr>
                        <tr>
                            <td>авипвап</td>
                            <td>ывапыв</td>
                            <td>авипвап</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>


    </section>
</section>
<!--main content end-->
</section>