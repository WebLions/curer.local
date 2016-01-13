<div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Редактирование курьера</h4>
        </div>
        <div class="modal-body">
            <form role="form" id="saveform">
                <input name="id" type="hidden" class="form-control" value="<?=$client->id?>">
                <div class="form-group">
                    <label for="name">ФИО</label>
                    <input name="name" type="text" class="form-control" id="name" value="<?=$client->name?>">
                </div>
                <div class="form-group">
                    <label for="contact">Контактный номер</label>
                    <input name="contact" class="form-control" id="contact" value="<?=$client->vendor?>">
                </div>
                <div class="form-group">
                    <label for="note">Примечание</label>
                    <input name="note" class="form-control" id="note" value="<?=$client->contact?>">
                </div>
                <button type="submit" class="btn btn-default saveClient">Сохранить</button>
            </form>
        </div>
    </div>

</div>