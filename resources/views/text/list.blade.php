<template id="textList">
    <div class="panel-heading">List of text</div>
       <div class="panel-body">
           <table class="table table-bordered table-hover table-striped">
             <thead>
                 <tr>
                     <th>Title</th>
                     <th>Text</th>
                     <th>Note</th>
                 </tr>
             </thead>
             <tbody v-for="text in texts.all">
                 <tr>
                     <td>@{{ text.title }}</td>
                     <td>***</td>
                     <td>@{{ text.note }}</td>
                 </tr>
                <tr>
                      <td colspan="3"><input type="@{{ text.secret }}"></td>
                      <td colspan="3"><button class="btn btn-primary" v-on:click="">Decrypt</button></td>
                  </tr>
             </tbody>
       </div>
    </div>
</template>
