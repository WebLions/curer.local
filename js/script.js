$( document ).ready(function() {
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
    $("#orders").on("click", ".editOrder", function (e) {
        $("#myModalEditOrder").empty();
        $.post("/ajax/getOrder", { id : $(this).attr("data-id")}, function(data){
            $("#myModalEditOrder").html(data);
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
    $('input[type=checkbox]').change(function(){
        if($(this).attr('checked') || ($(this).val()=='TRUE')) {
            $(this).val('FALSE');
        }else{
            $(this).val('TRUE');
        }
    });
});