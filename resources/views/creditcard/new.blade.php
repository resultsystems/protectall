<template id="creditcardNew">
    <div class="panel-heading">Add creditcard</div>
    <div class="panel-body">
            <table class="table table-bordered table-hover table-striped">
                    <thead>
                            <tr>
                                <th>Number</th>
                                <th>Valid</th>
                                <th>CVV</th>
                                <th>Password</th>
                                <th>Data crypt</th>
                                <th>Note</th>
                            </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td><input class="form-control" type="text" v-model="creditcard.number" placeholder="Number"></td>
                                <td><input class="form-control" type="text" v-model="creditcard.valid" placeholder="Valid MM/YY"></td>
                                <td><input class="form-control" type="text" v-model="creditcard.cvv" placeholder="CVV"></td>
                                <td><input class="form-control" type="text" v-model="creditcard.password" placeholder="Password"></td>
                                <td><input class="form-control" type="text" v-model="creditcard.data_crypt" placeholder="Data"></td>
                                <td><input class="form-control" type="text" v-model="creditcard.note" placeholder="Note"></td>
                            </tr>
                            <tr>
                                 <td colspan="6" class="text-right"><button class="btn btn-primary" v-on:click="">Save</button></td>
                          </tr>
                    </tbody>
            </table>
    </div>
</template>
