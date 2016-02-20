<template id="usernameNew">
    <div class="panel-heading">Add username</div>
    <div class="panel-body">
            <form v-on:submit="save">
            <table class="table table-bordered table-hover table-striped">
                    <tbody>
                            <tr>
                                <td><input class="form-control" type="text" v-model="username.service" placeholder="Service"></td>
                            </tr>
                            <tr>
                                <td><input class="form-control" type="text" v-model="username.username" placeholder="Username"></td>
                            </tr>
                            <tr>
                                <td><input class="form-control" type="text" v-model="username.password" placeholder="Password"></td>
                            </tr>
                            <tr>
                                <td><textarea class="form-control" rows="6" v-model="username.note" placeholder="Note"></textarea></td>
                            </tr>
                            <tr>
                                 <td class="text-right">Secret key for crypt **<input class="form-control" type="password" v-model="username.secret" placeholder="Secret key"></td>
                            </tr>
                            <tr>
                                 <td class="text-right">Confirme Secret key<input class="form-control" type="password" v-model="username.secret_confirmation" placeholder="Secret key"></td>
                            </tr>
                            <tr>
                                 <td class="text-right"><button class="btn btn-primary">Save</button></td>
                            </tr>
                            <tr>
                                 <td class="text-right">* Data will be encrypted</td>
                            </tr>
                            <tr>
                                 <td class="text-right">** If you lose, you won't be able to decrypt the encrypted data of this username.</td>
                            </tr>
                    </tbody>
            </table>
            </form>
    </div>
</template>
