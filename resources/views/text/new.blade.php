<template id="textNew">
    <div class="panel-heading">Add text</div>
    <div class="panel-body">
            <form v-on:submit="save">
            <table class="table table-bordered table-hover table-striped">
                    <tbody>
                            <tr>
                                <td><input class="form-control" type="text" v-model="text.title" placeholder="Title"  maxlength="255"></td>
                            </tr>
                            <tr>
                                <td><textarea class="form-control" rows="6" v-model="text.text" placeholder="Text for crypt" maxlength="1000"></textarea></td>
                            </tr>
                            <tr>
                                <td><textarea class="form-control" rows="6" v-model="text.note" placeholder="Note" maxlength="1000"></textarea></td>
                            </tr>
                            <tr>
                                 <td class="text-right">Secret key for crypt **<input class="form-control" type="password" v-model="text.secret" placeholder="Secret key" maxlength="255"></td>
                            </tr>
                            <tr>
                                 <td class="text-right">Confirme Secret key<input class="form-control" type="password" v-model="text.secret_confirmation" placeholder="Secret key" maxlength="255"></td>
                            </tr>
                            <tr>
                                 <td class="text-right"><button class="btn btn-primary">Save</button></td>
                            </tr>
                            <tr>
                                 <td class="text-right">* Data will be encrypted</td>
                            </tr>
                            <tr>
                                 <td class="text-right">** If you lose, you won't be able to decrypt the encrypted data of this text.</td>
                            </tr>
                    </tbody>
            </table>
            </form>
    </div>
</template>
