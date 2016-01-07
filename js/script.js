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

});