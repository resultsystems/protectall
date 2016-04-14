<template id="usernameList">
    <div class="panel-heading">List of usernames</div>
       <div class="panel-body">
           <table class="table table-bordered table-hover table-striped">
             <tbody v-for="(index, username) in usernames">
                 <tr>
                     <td v-if="!username.decrypt">Service: @{{ username.service }}</td>
                     <td v-if="username.decrypt"><input class="form-control" type="text" v-model="username.service" placeholder="Service" maxlength="255"></td>
                 </tr>
                 <tr>
                     <td v-if="!username.decrypt">Username: @{{ username.username }}</td>
                     <td v-if="username.decrypt"><input class="form-control" type="text" v-model="username.username" placeholder="username" maxlength="255"></td>
                 </tr>
                 <tr>
                     <td v-if="!username.decrypt">Password: @{{ username.password }}</td>
                     <td v-if="username.decrypt"><input class="form-control" type="text" v-model="username.password" placeholder="Password" maxlength="255"></td>
                 </tr>
                 <tr>
                     <td v-if="!username.decrypt">Note: @{{ username.note }}</td>
                     <td v-if="username.decrypt"><textarea class="form-control" rows="6" v-model="username.note" placeholder="Note" maxlength="1000"></textarea></td>
                 </tr>
                <tr>
                      <td class="text-right">Secret key</td>
                  </tr>
                <tr>
                      <td class="text-right"><input type="password" v-model="username.secret" class="form-control" phoneholder="Your secret key to decrypt"></td>
                  </tr>
                <tr v-if="username.decrypt">
                      <td class="text-right">Confirme Secret key</td>
                  </tr>
                <tr v-if="username.decrypt">
                      <td class="text-right"><input type="password" v-model="username.secret_confirmation" class="form-control" phoneholder="Your secret key to decrypt"></td>
                  </tr>
                <tr>
                      <td v-if="!username.decrypt" class="text-right"><button class="btn btn-primary" v-on:click="decrypt($event, index, username)">Decrypt</button></td>
                  </tr>
                <tr>
                      <td v-if="username.decrypt" class="text-right"><button class="btn btn-primary" v-on:click="update($event, index, username)">Update</button></td>
                  </tr>
                <tr>
                      <td class="text-right"><button class="btn btn-danger" v-on:click="delete($event, username)">Delete</button></td>
                  </tr>
             </tbody>
       </div>
    </div>
</template>
