<div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Редактирование адресса</h4>
        </div>
        <div class="modal-body">
            <form role="form" id="saveform">
                <input name="id" type="hidden" class="form-control" value="<?=$adress->id?>">
                <div class="form-group">
                    <label for="adress">Адресс</label>
                    <input name="adress" type="text" class="form-control" id="adress">
                </div>
                <div class="form-group">
                    <label for="note">Примечание</label>
                    <input name="note" class="form-control" id="note">
                </div>
                <button type="submit" class="btn btn-default saveUser">Сохранить</button>
            </form>
        </div>
    </div>

</div>