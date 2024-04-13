$(document).ready(function () {
    $('#togglePassword1').click(function () {
        togglePassword('#password', $(this));
    });

    $('#togglePassword2').click(function () {
        togglePassword('#password-confirm', $(this));
    });

    function togglePassword(passwordFieldId, toggleButton) {
        const passwordField = $(passwordFieldId);
        const fieldType = passwordField.attr('type');

        if (fieldType === 'password') {
            passwordField.attr('type', 'text');
            toggleButton.removeClass('bi-eye').addClass('bi-eye-slash');
        } else {
            passwordField.attr('type', 'password');
            toggleButton.removeClass('bi-eye-slash').addClass('bi-eye');
        }
    }
});
