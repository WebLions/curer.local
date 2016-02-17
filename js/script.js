var addAdress = true;
var showAdress = true;


$( document ).ready(function() {


    $('#order_date').datetimepicker({isRTL: false,
        format: 'YYYY-MM-DD',
        locale:'ru'
    });

    $('#myModalEditOrder').find('#order_date_edit').datetimepicker({
        format: 'YYYY-MM-DD',
        locale:'ru'
    });
        $('#sender_date').datetimepicker({
            format: 'YYYY-MM-DD',
            locale:'ru'
        });
        $('#myModalEditOrder').find('#sender_date_order').datetimepicker({
            format: 'YYYY-MM-DD',
            locale:'ru'
        });

            $('#recipient_date').datetimepicker({
                format: 'YYYY-MM-DD',
                locale:'ru'
            });


    $(".adduser").click(function(e){
        $.post( "/ajax/addUser",  $("#addform").serialize() , function( data ) {
            var obj = jQuery.parseJSON( data );
            if(obj.error == 0)
            {
                $(".close").trigger('click');
            }
            else{
            }
        });
        $.post( "/ajax/getUsers", function( data ) {
            $("#users").html(data);
        });
        return false;
        e.preventDefault();
    });
    $("#myModalEditUser").on("click", ".saveUser", function(e){
        $.post( "/ajax/saveUser",  $("#saveform").serialize() , function( data ) {
            var obj = jQuery.parseJSON( data );
            if(obj.error == 0)
            {
                $(".close").trigger('click');
            }
            else{
            }
        });
        $.post( "/ajax/getUsers", function( data ) {
            $("#users").html(data);
        });
        return false;
        e.preventDefault();
    });



    $("#users").on("click", ".deleteUser", function (e) {
        if(confirm("Удалить пользователя?")===false){
            e.preventDefault();
            return false;
        }else{
            $.post( "/ajax/deleteUser", { userId : $(this).attr("data-id")});
            $.post( "/ajax/getUsers", function( data ) {
                $("#users").html(data);
            });
        }
    });

    $("#users").on("click", ".editUser", function (e) {
        $("#myModalEditUser").empty();
        $.post("/ajax/getUser", { userId : $(this).attr("data-id")}, function(data){
            $("#myModalEditUser").html(data);
        });
    });


    $(".addcontragent").click(function(e){
        $.post( "/ajax/addContragent",  $("#addform").serialize() , function( data ) {
            var obj = jQuery.parseJSON( data );
            if(obj.error == 0)
            {
                $(".close").trigger('click');
            }
            else{
            }
        });
        $.post( "/ajax/getContragents", function( data ) {
            $("#clients").html(data);
        });
        return false;
        e.preventDefault();
    });
    $("#myModalEditClient").on("click", ".saveClient", function(e){
        $.post( "/ajax/saveContragent",  $("#saveform").serialize() , function( data ) {
            var obj = jQuery.parseJSON( data );
            if(obj.error == 0)
            {
                $(".close").trigger('click');
            }
            else{
            }
        });
        $.post( "/ajax/getContragents", function( data ) {
            $("#clients").html(data);
        });
        return false;
        e.preventDefault();
    });
    $("#clients").on("click", ".editClient", function (e) {
        $("#myModalEditClient").empty();
        $.post("/ajax/getContragent", { userId : $(this).attr("data-id")}, function(data){
            $("#myModalEditClient").html(data);
        });
    });
    $("#clients").on("click", ".deleteClient", function (e) {
        if(confirm("Удалить контрагента?")===false){
            e.preventDefault();
            return false;
        }else{
            $.post( "/ajax/deleteContragent", { userId : $(this).attr("data-id")});
            $.post( "/ajax/getContragents", function( data ) {
                $("#clients").html(data);
            });
        }
    });
    $(".addadress").click(function(e){
        $.post( "/ajax/addAdress",  $("#addform").serialize() , function( data ) {
            var obj = jQuery.parseJSON( data );
            if(obj.error == 0)
            {
                $(".close").trigger('click');
            }
            else{
            }
        });
        $.post( "/ajax/getAdresss",{id: $("#id_contragent").val() }, function( data ) {
            $("#listAdress").html(data);
        });
        return false;
        e.preventDefault();
    });
    $("#myModalEditAdress").on("click", ".saveAdress", function(e){
        $.post( "/ajax/saveAdress",  $("#saveform").serialize() , function( data ) {
            var obj = jQuery.parseJSON( data );
            if(obj.error == 0)
            {
                $(".close").trigger('click');
            }
            else{
            }
        });
        $.post( "/ajax/getAdresss",{id: $("#id_contragent").val() }, function( data ) {
            $("#listAdress").html(data);
        });
        return false;
        e.preventDefault();
    });
    $("#listAdress").on("click", ".editAdress", function (e) {
        $("#myModalEditAdress").empty();
        $.post("/ajax/getAdress", { id : $(this).attr("data-id")}, function(data){
            $("#myModalEditAdress").html(data);
        });
    });
    $("#listAdress").on("click", ".deleteAdress", function (e) {
        if(confirm("Удалить адрес?")===false){
            e.preventDefault();
            return false;
        }else{
            $.post( "/ajax/deleteAdress", { id : $(this).attr("data-id")});
            $.post( "/ajax/getAdresss",{id: $("#id_contragent").val() }, function( data ) {
                $("#listAdress").html(data);
            });
        }
    });
    //курьери
    $(".addCourier").click(function(e){
        $.post( "/ajax/addCourier",  $("#addform").serialize() , function( data ) {
            var obj = jQuery.parseJSON( data );
            if(obj.error == 0)
            {
                $(".close").trigger('click');
            }
            else{
            }
        });
        $.post( "/ajax/getCouriers", function( data ) {
            $("#couriers").html(data);
        });
        return false;
        e.preventDefault();
    });

    $("#myModalEditCourier").on("click", ".saveCourier", function(e){
        $.post( "/ajax/saveCourier",  $("#saveform").serialize() , function( data ) {
            var obj = jQuery.parseJSON( data );
            if(obj.error == 0)
            {
                $(".close").trigger('click');
            }
            else{
            }
        });
        $.post( "/ajax/getCouriers", function( data ) {
            $("#couriers").html(data);
        });
        return false;
        e.preventDefault();
    });
    $("#couriers").on("click", ".editCourier", function (e) {
        $("#myModalEditCourier").empty();
        $.post("/ajax/getCouriers", { id : $(this).attr("data-id")}, function(data){
            $("#myModalEditCourier").html(data);
        });
    });
    $("#couriers").on("click", ".deleteCourier", function (e) {
        if(confirm("Удалить курьера?")===false){
            e.preventDefault();
            return false;
        }else{
            $.post( "/ajax/deleteCourier", { id : $(this).attr("data-id")});
            $.post( "/ajax/getCouriers", function( data ) {
                $("#couriers").html(data);
            });
        }
    });
    //заказы
    $(".addOrder").click(function(e){
        $.post( "/ajax/addOrder",  $("#addform").serialize() , function( data ) {
            var obj = jQuery.parseJSON( data );
            if(obj.error == 0)
            {
                $(".close").trigger('click');
            }
            else{
            }
        });
        $.post( "/ajax/getShortOrders", function( data ) {
            $("#orders").html(data);
        });
        return false;
        e.preventDefault();
    });

    $("#myModalEditOrder").on("click", ".saveOrder", function(e){
        $.post( "/ajax/saveOrder",  $("#saveform").serialize() , function( data ) {
            var obj = jQuery.parseJSON( data );
            if(obj.error == 0)
            {
                $(".close").trigger('click');
                $.post( "/ajax/getShortOrders", function( data ) {
                    $("#orders").html(data);
                });
            }
            else{
            }
        });
        return false;
        e.preventDefault();
    });
    $("#orders").on("click", ".editOrder", function (e) {
        $("#myModalEditOrder").empty();
        $.post("/ajax/getOrder", { id : $(this).attr("data-id")}, function(data){
            $("#myModalEditOrder").html(data);
            var date = $('#myModalEditOrder').find('#recipient_date').val();
            $('#myModalEditOrder').find('#recipient_date').datetimepicker({
                format: 'YYYY-MM-DD',
                locale:'ru'
            });
            $('#myModalEditOrder').find('#recipient_date').val(date);
        });
    });
    $("#orders").on("click", ".editOrder", function (e) {
        $("#myModalEditOrder").empty();
        $.post("/ajax/getOrder", { id : $(this).attr("data-id")}, function(data){
            $("#myModalEditOrder").html(data);
            var date = $('#myModalEditOrder').find('#sender_date').val();
            $('#myModalEditOrder').find('#sender_date').datetimepicker({
                format: 'YYYY-MM-DD',
                locale:'ru'
            });
            $('#myModalEditOrder').find('#sender_date').val(date);
        });
    });
    $("#orders").on("click", ".deleteOrder", function (e) {
        if(confirm("Удалить заказ?")===false){
            e.preventDefault();
            return false;
        }else{
            $.post( "/ajax/deleteOrder", { id : $(this).attr("data-id")});
            $.post( "/ajax/getShortOrders", function( data ) {
                $("#orders").html(data);
            });
        }
    });
    $('#main-content').on('change','input[type=checkbox]', function(){
        if($(this).attr('checked') || ($(this).val()=='TRUE')) {
            $(this).val('FALSE');
        }else{
            $(this).val('TRUE');
        }
    });
    $('#main-content').on('change','#client',function(){
        $.post( "/ajax/getAdressClient",{id: $(this).find(":selected").val() }, function( data ) {
            $("#sender_adress").empty();
            var obj = jQuery.parseJSON( data );
            $("#sender_adress").html(obj.option);
            $("#sender_note").val(obj.note);
        });
    });
    $('#main-content').on('change','#sender_adress',function(){
        $.post( "/ajax/getAdressClientNote",{id: $(this).find(":selected").val() }, function( data ) {
            $("#sender_note").empty();
            $("#sender_note").val(data);
        });
    });

    $('#myModal').on('click','#addAdress',function(e){
        e.preventDefault();

        if(addAdress == true)  {
            $('#sender_adress').remove();
            $('#addAdress').remove();
            $( '<input id="new_sender_adress" class="form-control" type="text"  style="width: 89%; float:left;" name="new_sender_adress"  placeholder="Адресс отправителя">').appendTo( "#sender_mark" );
            $( '<div>'+
                '<button id="showAdress" class="glyphicon glyphicon-eye-open form-control" style="width: 10%"></button>'+
                '</div>').appendTo( "#sender_mark" );
            addAdress = false;
            showAdress = true;
        }

        e.preventDefault();
        return false;

    });

    $('#myModal').on('click','#showAdress',function(e){

            if(showAdress == true){
                $('#new_sender_adress').remove();
                $('#showAdress').remove();
                $( '<select id="sender_adress" name="id_sender_adress" style="width: 89%; float:left;" class="form-control" >').appendTo( "#sender_mark" );
                $( '<div>'+
                    '<button id="addAdress" class="glyphicon glyphicon-plus form-control" style="width: 10%"></button>'+
                    '</div>').appendTo( "#sender_mark" );
                addAdress = true;
                showAdress = false;
            }
        e.preventDefault();
        return false;
    });

    $('#myModalEditOrder').on('click','#addAdress',function(e){
        e.preventDefault();

        if(addAdress == true)  {
            $('#sender_adress').remove();
            $('#addAdress').remove();
            $( '<input id="new_sender_adress" class="form-control" type="text"  style="width: 89%; float:left;" name="new_sender_adress"  placeholder="Адресс отправителя">').appendTo( "#sender_mark" );
            $( '<div>'+
                '<button id="showAdress" class="glyphicon glyphicon-eye-open form-control" style="width: 10%"></button>'+
                '</div>').appendTo( "#sender_mark" );
            addAdress = false;
            showAdress = true;
        }

        e.preventDefault();
        return false;

    });

    $('#myModalEditOrder').on('click','#showAdress',function(e){

        if(showAdress == true){
            $('#new_sender_adress').remove();
            $('#showAdress').remove();
            $( '<select id="sender_adress" name="id_sender_adress" style="width: 89%; float:left;" class="form-control" >').appendTo( "#sender_mark" );
            $( '<div>'+
                '<button id="addAdress" class="glyphicon glyphicon-plus form-control" style="width: 10%"></button>'+
                '</div>').appendTo( "#sender_mark" );
            addAdress = true;
            showAdress = false;
        }
        e.preventDefault();
        return false;
    });


    $('#main-content').on('click','.dis-edit',function(e){
       $(this).css('border','1px solid');
    });
    $('#main-content').on('change','.sel-cour',function(e){
        var id = $(this).attr('data-id');
        var type = $(this).attr('data-type');
        var val = $(this).val();
        $.post('/ajax/editInput',{id:id,type:type,val:val});
    });
    $('#main-content').on('keyup','.dis-edit',function(e){
        if(e.keyCode == 13)
        {
            $(this).css('border','none');
            var id = $(this).attr('data-id');
            var type = $(this).attr('data-type');
            var val = $(this).val();
            $.post('/ajax/editInput',{id:id,type:type,val:val});
        }
    });
    $('#main-content').on('focusout','.dis-edit',function(e){
        $(this).css('border','none');
    });
});