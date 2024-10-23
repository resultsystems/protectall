<style>
    /* Ajusta a largura dos inputs dentro da tabela */
    .table-input {
        width: 100%; /* Garante que o input não extrapole a célula */
        box-sizing: border-box; /* Inclui padding e borda na largura */
    }

    /* Define um tamanho fixo para os botões */
    .table-btn {
        width: auto; /* Botões terão tamanho conforme o conteúdo */
        min-width: 100px; /* Define uma largura mínima */
    }

    /* Alinha os botões à direita */
    .text-right {
        text-align: right;
    }

    /* Garante que as células da tabela não fiquem excessivamente largas */
    .table {
        table-layout: fixed;
        width: 100%;
    }

    /* Permite que o conteúdo da tabela quebre a linha conforme necessário */
    .table td {
        word-wrap: break-word;
    }
</style>

<template id="usernameList">
    <div class="row">
        <div class="col-sm-12">
            <div class="panel-heading">List of usernames</div>
            <div class="panel-body">
                <table class="table table-bordered table-hover table-striped">
                    <tbody v-for="(index, username) in usernames">
                        <tr>
                            <td v-if="!username.decrypt">Service: @{{ username.service }}</td>
                            <td v-if="username.decrypt"><input class="form-control table-input" type="text" v-model="username.service" placeholder="Service" maxlength="255"></td>
                        </tr>
                        <tr>
                            <td v-if="!username.decrypt">Username: @{{ username.username }}</td>
                            <td v-if="username.decrypt"><input class="form-control table-input" type="text" v-model="username.username" placeholder="Username" maxlength="255"></td>
                        </tr>
                        <tr>
                            <td v-if="!username.decrypt">Password: @{{ username.password }}</td>
                            <td v-if="username.decrypt"><input class="form-control table-input" type="text" v-model="username.password" placeholder="Password" maxlength="255"></td>
                        </tr>
                        <tr>
                            <td v-if="!username.decrypt">Note: @{{ username.note }}</td>
                            <td v-if="username.decrypt"><textarea class="form-control table-input" rows="6" v-model="username.note" placeholder="Note" maxlength="1000"></textarea></td>
                        </tr>
                        <tr>
                            <td class="text-right">Secret key</td>
                        </tr>
                        <tr>
                            <td class="text-right"><input type="password" v-model="username.secret" class="form-control table-input" placeholder="Your secret key to decrypt"></td>
                        </tr>
                        <tr v-if="username.decrypt">
                            <td class="text-right">Confirm Secret key</td>
                        </tr>
                        <tr v-if="username.decrypt">
                            <td class="text-right"><input type="password" v-model="username.secret_confirmation" class="form-control table-input" placeholder="Confirm your secret key"></td>
                        </tr>
                        <tr>
                            <td v-if="!username.decrypt" class="text-right">
                                <button class="btn btn-primary table-btn" v-on:click="decrypt($event, index, username)">Decrypt</button>
                            </td>
                        </tr>
                        <tr>
                            <td v-if="username.decrypt" class="text-right">
                                <button class="btn btn-primary table-btn" v-on:click="update($event, index, username)">Update</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-right">
                                <button class="btn btn-danger table-btn" v-on:click="delete($event, username)">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>
