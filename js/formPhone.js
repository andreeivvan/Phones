$("#sendPhone").on("click", function() {
    var name =$("#name").val().trim();
    var tel =$("#tel").val().trim();
    var date =$("#date").val().trim();

    if(name =="") {
        $("#errorMess").text("Введите имя");
        return false;
    }
    else if(tel =="") {
        $("#errorMess").text("Введите телефон");
        return false;
    }
    else if(date =="") {
        $("#errorMess").text("Установите дату");
        return false;
    }

    $("#errorMess").text("");


    $.ajax({
        url: 'ajax/phone.php',
        type: 'POST',
        cache: false,
        data: { 'name':name, 'tel': tel, 'date': date },
        dataType : 'html',
        beforeSend: function() {
            $("#sendPhone").prop("disabled", true);
        },
        success: function(data) {
            if(!data)
                alert("Были ошибки, данные не отправились!");
            else
                $("#phoneForm").trigger("reset");
            $("#sendPhone").prop("disabled", false);
        }
        });
})
