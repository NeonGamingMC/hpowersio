$("#registerbtn").click(function(e){
    e.preventDefault();
    let un = $("input[name='username']"),
        pw = $("input[name='password']"),
        em = $("input[name='email']")
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
            $(".regmsg").html(data)
        }
    })
})