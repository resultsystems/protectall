<template id="textList">
    <div class="panel-heading">List of texts</div>
       <div class="panel-body">
           <table class="table table-bordered table-hover table-striped">
             <tbody v-for="(index, text) in texts">
                 <tr>
                     <td v-if="!text.decrypt">Title: @{{ text.title }}</td>
                     <td v-if="text.decrypt"><input class="form-control" type="text" v-model="text.title" placeholder="Title" maxlength="255"></td>
                 </tr>
                 <tr>
                     <td v-if="!text.decrypt">Text: @{{ text.text }}</td>
                     <td v-if="text.decrypt"><textarea class="form-control" rows="6" v-model="text.text" placeholder="Text for crypt" maxlength="1000"></textarea></td>
                 </tr>
                 <tr>
                     <td v-if="!text.decrypt">Note: @{{ text.note }}</td>
                     <td v-if="text.decrypt"><textarea class="form-control" rows="6" v-model="text.note" placeholder="Note" maxlength="1000"></textarea></td>
                 </tr>
                <tr>
                      <td class="text-right">Secret key</td>
                  </tr>
                <tr>
                      <td class="text-right"><input type="password" v-model="text.secret" class="form-control" phoneholder="Your secret key to decrypt" maxlength="255"></td>
                  </tr>
                <tr v-if="text.decrypt">
                      <td class="text-right">Confirme Secret key</td>
                  </tr>
                <tr v-if="text.decrypt">
                      <td class="text-right"><input type="password" v-model="text.secret_confirmation" class="form-control" phoneholder="Your secret key to decrypt" maxlength="255"></td>
                  </tr>
                <tr>
                      <td v-if="!text.decrypt" class="text-right"><button class="btn btn-primary" v-on:click="decrypt($event, index, text)">Decrypt</button></td>
                  </tr>
                <tr>
                      <td v-if="text.decrypt" class="text-right"><button class="btn btn-primary" v-on:click="update($event, index, text)">Update</button></td>
                  </tr>
                <tr>
                      <td class="text-right"><button class="btn btn-danger" v-on:click="delete($event, text)">Delete</button></td>
                  </tr>
             </tbody>
       </div>
    </div>
</template>
