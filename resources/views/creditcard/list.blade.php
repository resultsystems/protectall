<template id="creditcardList">
    <div class="panel-heading">List of creditcard</div>
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
             <tbody v-for="(index, creditcard) in creditcards">
                 <tr v-if="!creditcard.decrypt">
                     <td>@{{ creditcard.number }}</td>
                     <td>@{{ creditcard.valid }}</td>
                     <td>@{{ creditcard.cvv}} </td>
                     <td>@{{ creditcard.password }}</td>
                     <td>@{{ creditcard.data_crypt }}</td>
                     <td>@{{ creditcard.note }}</td>
                 </tr>
                 <tr v-if="creditcard.decrypt">
                      <td><input class="form-control" type="text" v-model="creditcard.number" placeholder="Number"></td>
                      <td><input class="form-control" type="text" v-model="creditcard.valid" placeholder="Valid MM/YY"></td>
                      <td><input class="form-control" type="text" v-model="creditcard.cvv" placeholder="CVV"></td>
                      <td><input class="form-control" type="text" v-model="creditcard.password" placeholder="Password"></td>
                      <td><input class="form-control" type="text" v-model="creditcard.data_crypt" placeholder="Data"></td>
                      <td><input class="form-control" type="text" v-model="creditcard.note" placeholder="Note"></td>
                 </tr>
                <tr>
                      <td colspan="3" class="text-right">Secret key</td>
                      <td colspan="2" class="text-right"><input type="password" v-model="creditcard.secret" class="form-control" phoneholder="Your secret key to decrypt"></td>
                      <td colspan="1" v-if="!creditcard.decrypt"><button class="btn btn-primary" v-on:click="decrypt($event, index, creditcard)">Decrypt</button></td>
                      <td colspan="1" v-if="creditcard.decrypt"><button class="btn btn-primary" v-on:click="update($event, index, creditcard)">Atualizar</button></td>
                  </tr>
             </tbody>
       </div>
    </div>
</template>
