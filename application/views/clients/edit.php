<div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Редактирование клиента</h4>
        </div>
        <div class="modal-body">
            <form role="form" id="saveform">
                <input name="id" type="hidden" class="form-control" value="<?=$client->id?>">
                <div class="form-group">
                    <label for="name">Название</label>
                    <input name="name" type="text" class="form-control" id="name" value="<?=$client->name?>">
                </div>
                <div class="form-group">
                    <label for="vendor">Ответсnвенное лицо</label>
                    <input name="vendor" class="form-control" id="vendor" value="<?=$client->vendor?>">
                </div>
                <div class="form-group">
                    <label for="contact">Контактные данные</label>
                    <input name="contact" class="form-control" id="contact" value="<?=$client->contact?>">
                </div>
                <button type="submit" class="btn btn-default saveClient">Сохранить</button>
            </form>
        </div>
    </div>

</div>