<div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Редактирование курьера</h4>
        </div>
        <div class="modal-body">
            <form role="form" id="saveform">
                <input name="id" type="hidden" class="form-control" id="id_courier" value="<?=$listCouriers->id?>">
                <div class="form-group">
                    <label for="nick">Позывной</label>
                    <input name="nick" type="text" class="form-control" id="nick" value="<?=$listCouriers->nick?>">
                </div>
                <div class="form-group">
                    <label for="name">ФИО</label>
                    <input name="name" type="text" class="form-control" id="name" value="<?=$listCouriers->name?>">
                </div>
                <div class="form-group">
                    <label for="contact">Контактный номер</label>
                    <input name="contact" class="form-control" id="contact" value="<?=$listCouriers->contact?>">
                </div>
                <div class="form-group">
                    <label for="note">Примечание</label>
                    <input name="note" class="form-control" id="note" value="<?=$listCouriers->note?>">
                </div>
                <button type="submit" class="btn btn-default saveCourier">Сохранить</button>
            </form>
        </div>
    </div>

</div>