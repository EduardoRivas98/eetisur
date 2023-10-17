document.getElementById('login').addEventListener('click', function(){
    debugger;
    let user = document.getElementById('username').value;
    let password =  document.getElementById('password').value; 

    const data = {
        username: user,
        password: password
    };
    debugger;
    console.log(base_url);

    $.ajax({
        url: base_url + 'loginsesion/iniciar_sesion',
        type: 'POST',
        data: data,
        dataType: 'json',
        success: function (data) {
            if (data.success) {
                debugger;
                mensajeAlerta("success", data.success);
                setTimeout(function(){
                }, 8000);
                window.location.reload();

            } else {
                mensajeAlerta("error", data.error )
                setTimeout(function(){
                }, 8000);
                window.location.reload();
            }
        },
        error: function (error) {
            console.error('Error:', data.error);
            setTimeout(function(){
            }, 8000);
            window.location.reload();
        }
    });
});


