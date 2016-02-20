<template id="creditcardNew">
    <div class="panel-heading">Add creditcard</div>
    <div class="panel-body">
            <form  v-on:submit="save">
            <table class="table table-bordered table-hover table-striped">
                    <thead>
                            <tr>
                                <th>Number</th>
                                <th>Valid</th>
                                <th>CVV *</th>
                                <th>Password *</th>
                                <th>Data crypt *</th>
                                <th>Note</th>
                            </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td><input class="form-control" type="text" v-model="creditcard.number" placeholder="Number" maxlength="20"></td>
                                <td><input class="form-control" type="text" v-model="creditcard.valid" placeholder="Valid MM/YY" maxlength="5"></td>
                                <td><input class="form-control" type="text" v-model="creditcard.cvv" placeholder="CVV" maxlength="4"></td>
                                <td><input class="form-control" type="text" v-model="creditcard.password" placeholder="Password" maxlength="8"></td>
                                <td><textarea rows="5" class="form-control" v-model="creditcard.data_crypt" placeholder="Data"></textarea></td>
                                <td><textarea rows="5" class="form-control" v-model="creditcard.note" placeholder="Note"></textarea></td>
                            </tr>
                            <tr>
                                 <td colspan="3" class="text-right">Secret key for crypt **<input class="form-control" type="password" v-model="creditcard.secret" placeholder="Secret key"></td>
                                 <td colspan="3" class="text-right">Confirme Secret key<input class="form-control" type="password" v-model="creditcard.secret_confirmation" placeholder="Secret key"></td>
                            </tr>
                            <tr>
                                 <td colspan="6" class="text-right"><button class="btn btn-primary">Save</button></td>
                            </tr>
                            <tr>
                                 <td colspan="6" class="text-right">* Data will be encrypted</td>
                            </tr>
                            <tr>
                                 <td colspan="6" class="text-right">** If you lose, you won't be able to decrypt the encrypted data of this card.</td>
                            </tr>
                    </tbody>
            </table>
            </form>
    </div>
</template>
