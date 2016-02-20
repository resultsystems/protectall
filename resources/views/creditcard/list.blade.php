<template id="creditcardList">
    <div class="panel-heading">List of cards</div>
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
                      <td><input class="form-control" type="text" v-model="creditcard.number" placeholder="Number" maxlength="20"></td>
                      <td><input class="form-control" type="text" v-model="creditcard.valid" placeholder="Valid MM/YY" max="5"></td>
                      <td><input class="form-control" type="text" v-model="creditcard.cvv" placeholder="CVV" maxlength="4"></td>
                      <td><input class="form-control" type="text" v-model="creditcard.password" placeholder="Password" maxlength="8"></td>
                      <td><textarea rows="5" class="form-control" v-model="creditcard.data_crypt" placeholder="Data"></textarea></td>
                      <td><textarea rows="5" class="form-control" v-model="creditcard.note" placeholder="Note"></textarea></td>
                 </tr>
                <tr v-if="!creditcard.decrypt">
                      <td colspan="2" class="text-right">Secret key</td>
                      <td colspan="2" class="text-right"><input type="password" v-model="creditcard.secret" class="form-control" phoneholder="Your secret key to decrypt"></td>
                      <td><button class="btn btn-primary" v-on:click="decrypt($event, index, creditcard)">Decrypt</button></td>
                      <td><button class="btn btn-danger" v-on:click="delete($event, creditcard)">Delete</button></td>
                  </tr>
                <tr v-if="creditcard.decrypt">
                      <td class="text-right">Secret key</td>
                      <td  class="text-right"><input type="password" v-model="creditcard.secret" class="form-control" phoneholder="Your secret key to decrypt"></td>
                      <td class="text-right">Confirme Secret key</td>
                      <td class="text-right"><input type="password" v-model="creditcard.secret_confirmation" class="form-control" phoneholder="Your secret key to decrypt"></td>
                      <td><button class="btn btn-primary" v-on:click="update($event, index, creditcard)">Update</button></td>
                      <td><button class="btn btn-danger" v-on:click="delete($event, creditcard)">Delete</button></td>
                  </tr>
             </tbody>
       </div>
    </div>
</template>
