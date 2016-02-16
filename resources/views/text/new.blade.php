<template id="textNew">
    <div class="panel-heading">Add text</div>
    <div class="panel-body">
            <table class="table table-bordered table-hover table-striped">
                    <thead>
                            <tr>
                                <th>Title</th>
                                <th>Text</th>
                                <th>Note</th>
                            </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td><input class="form-control" type="text" v-model="text.title" placeholder="Title"></td>
                                <td><input class="form-control" type="text" v-model="text.text" placeholder="Text for crypt"></td>
                                <td><input class="form-control" type="text" v-model="text.note" placeholder="Note"></td>
                            </tr>
                            <tr>
                                 <td colspan="6" class="text-right"><button class="btn btn-primary" v-on:click="">Save</button></td>
                          </tr>
                    </tbody>
            </table>
    </div>
</template>
