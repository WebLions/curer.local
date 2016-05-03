<section id="main-content">
    <section class="wrapper">
        <!--overview start-->
        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="/user/home">Административная панель</a></li>
                    <li><i class="fa fa-laptop"></i><a href ="/user/till">Касса</a></li>
                </ol>
            </div>
        </div>


    <div class="row">
        <div class="col-lg-12">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModalMoneyGiving">Передача денег</button>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModalStateTill">Расход</button>
        </div>
    </div>
        <div id="myModalEditStateTill" class="modal fade" role="dialog">
        </div>
        <div id="myModalStateTill" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Добавление расхода</h4>
                    </div>
                    <div class="modal-body">
                        <form role="form" id="addform">
                            <div class="form-group">
                                <label for="date">Дата</label>
                                <input name="date" type="text" class="form-control" id="date">
                            </div>
                            <div class="form-group">
                                <label for="courier">Курьер</label>
                                <input name="courier" type="text" class="form-control" id="courier">
                            </div>
                            <div class="form-group">
                                <label for="state">Статья расхода</label>
                                <input name="state" type="text" class="form-control" id="state">
                            </div>
                            <div class="form-group">
                                <label for="cost">Сумма</label>
                                <input name="cost" type="text" class="form-control" id="cost">
                            </div>
                            <button type="submit" class="btn btn-default addStateTill">Добавить</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
        <div id="myModalEditMoneyGiving" class="modal fade" role="dialog">
        </div>
        <div id="myModalMoneyGiving" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Передача денег</h4>
                    </div>
                    <div class="modal-body">
                        <form role="form" id="addform">
                            <div class="form-group">
                                <label for="date">Дата</label>
                                <input name="date" type="text" class="form-control" id="date">
                            </div>
                            <div class="form-group">
                                <label for="courier_giver">От кого:</label>
                                <input name="courier_giver" type="text" class="form-control" id="courier_giver">
                            </div>
                            <div class="form-group">
                                <label for="state">Кому:</label>
                                <input name="courier_taker" type="text" class="form-control" id="courier_taker">
                            </div>
                            <div class="form-group">
                                <label for="cost">Сумма</label>
                                <input name="cost_mg" type="text" class="form-control" id="cost_mg">
                            </div>
                            <button type="submit" class="btn btn-default addMoneyGiving">Добавить</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div id="PersonTableContainer">

                </div>
            </div>
        </div>
     <div class = "row">
         <div class = "col-md-12">
                        <br>
            <table class="table table-striped table-advance table-hover" style="font-size: 11px">
                <tbody>
                <tr>
                    <th style="width: 15%">Курьер</th>
                    <th style="width: 25%">Касса</th>
                    <th style="width: 10%">Действия</th>
                </tr>

                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <div class="btn-group">
                                <a class="btn btn-success showTillLog" a href="/user/till_log"><i class="glyphicon glyphicon-eye-open"></i></a>
                            </div>
                        </td>
                    </tr>

                </tbody>
            </table>
         </div>
    </div>
    </section>
</section>
<!--main content end-->
</section>
<script type="text/javascript">
    $(document).ready(function () {
        //var cachedCourierOptions = null;

        $('#PersonTableContainer').jtable({
            paging: true,
            pageSize: 10,
            title: false,
            actions: {
                listAction: '/cassa/getCassa'
            },
            fields: {
                id: {
                    title: '№',
                    key: true
                },
                name: {
                    title: 'Курьер'
                },
                cassa: {
                    title: 'Касса'
                },
                descript: {
                    display: function(data){
                        return '<div class="btn-group">'
                            +'<a class="btn btn-success showTillLog" href="/user/till_log/'+data.record.id+'"><i class="glyphicon glyphicon-eye-open"></i></a>'
                            +'</div>';
                    }
                }
            }
        });
        $('#PersonTableContainer').jtable('load');
    });
</script>
