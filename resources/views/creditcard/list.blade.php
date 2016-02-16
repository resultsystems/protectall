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
             <tbody v-for="creditcard in creditcards.all">
                 <tr>
                     <td>@{{ creditcard.number }}</td>
                     <td>@{{ creditcard.valid }}</td>
                     <td>***</td>
                     <td>***</td>
                     <td>***</td>
                     <td>@{{ creditcard.note }}</td>
                 </tr>
                <tr>
                      <td colspan="3"><input type="@{{ creditcard.secret }}"></td>
                      <td colspan="3"><button class="btn btn-primary" v-on:click="">Decrypt</button></td>
                  </tr>
             </tbody>
       </div>
    </div>
</template>
