function showError(errors) {
    if (typeof errors == 'string') {
        return flash.error(errors);
    }
    var error = '';

    if (typeof errors == 'object') {
        for (var k in errors) {
            error = error + k + ': ' + errors[k] + "\n";
        }
        return flash.error(error);
    }

    for (var i = qt - 1; i >= 0; i--) {
        error = error + errors[i] + "\n";
    };

    return flash.error(error);
}
