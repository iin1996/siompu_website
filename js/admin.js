$(document).ready(function () {
    var input_username = $('#input_username');
    var input_password = $('#input_password');
    var input_type = $('#input_type');

    var btnRegister = $('#btn_register');
    var btnLogin = $('#btn_login');

    btnLogin.on('click', function () {
        var body = {
            username: input_username.val(),
            password: input_password.val()
        };

        var userService = new Service('/api/create').save(body, '?model=users');
        userService.then(function (response) {
            console.log(response);
        });
    });
});