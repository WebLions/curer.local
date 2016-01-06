<div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Редактирование пользователя</h4>
        </div>
        <div class="modal-body">
            <form role="form" id="saveform">
                <input name="id" type="hidden" class="form-control" value="<?=$user->id?>">
                <div class="form-group">
                    <label for="login">Логин</label>
                    <input name="login" type="text" class="form-control" id="login" value="<?=$user->login?>">
                </div>
                <div class="form-group">
                    <label for="password">Пароль</label>
                    <input name="password" class="form-control" id="password" value="">
                </div>
                <div class="form-group">
                    <label for="fio">ФИО</label>
                    <input name="fio" class="form-control" id="fio" value="<?=$user->fio?>">
                </div>
                <div class="form-group">
                    <label for="access">Роль</label>
                    <select name="access" class="form-control" id="access">
                        <? foreach($listAccess as $listAcces){ ?>
                            <option <? echo ($listAcces['id']==$user->access) ? "selected" : ""; ?> value="<?=$listAcces['id']?>"><?=$listAcces['role']?></option>
                        <? } ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-default saveUser">Сохранить</button>
            </form>
        </div>
    </div>

</div>