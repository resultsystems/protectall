var flash = {
    /**
     * "Metodo" para exibir mensagem de erro
     * @param  string text
     *
     * @return alertModal exibir um alert em modal
     */
    error: function(text, title) {
        title = title || 'ERROR!';
        swal({
            title: title,
            text: text,
            showConfirmButton: true,
            type: "error"
        });
    },

    /**
     * "Metodo" para exibir mensagem de aviso
     * @param  string text
     *
     * @return alertModal exibir um alert em modal
     */
    warning: function(text, title) {
        title = title || 'WARNING!';
        swal({
            title: title,
            text: text,
            showConfirmButton: true,
            type: "warning"
        });
    },

    /**
     * "Metodo" para exibir mensagem de sucesso
     * @param  string text
     *
     * @return alertModal exibir um alert em modal
     */
    success: function(text, title) {
        title = title || 'SUCCESS!';
        swal({
            title: title,
            text: text,
            timer: 3000,
            showConfirmButton: true,
            type: "success"
        });
    },

    /**
     * "Metodo" para exibir mensagem solicitando conformação para continuar
     * @param  function fContinue
     * @param  string text
     * @param  string title
     * @param  string confirmButton
     * @param  string cancelButton
     *
     * @return alertModal exibir um alert em modal
     */
    confirm: function(fContinue, text, title, confirmButton, cancelButton) {
        text = text || 'You cannot undo this actiono';
        title = title || 'Do you really want to continue?';
        confirmButton = confirmButton || 'Yes, continue';
        cancelButton = cancelButton || 'Cancel';
        swal({
            title: title,
            text: text,
            type: "warning",
            showCancelButton: true,
            cancelButtonText: cancelButton,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: confirmButton,
            closeOnConfirm: true
        }, fContinue);
    }
}
