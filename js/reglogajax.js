$("#registerbtn").click(function(e){
    e.preventDefault();
    let un = $("input[name='username']").val(),
        pw = $("input[name='password']").val(),
        em = $("input[name='email']").val();
    $.ajax({
        type: "POST",
        url: "../register/register.php",
        data: {
            username: un,
            password: pw,
            email: em
        },
        dataType: "json",
        success: function(data){
            $(".regmsg").html(data);
            if (data == 'success'){
                $(location).prop('href', '..')
            }
        }
    })
})