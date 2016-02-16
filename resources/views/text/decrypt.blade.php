<template id="textDecrypt">
    <div class="panel-heading">Data text</div>
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
                                <td>@{{ text.title }}</td>
                                <td>@{{ text.text }}</td>
                                <td>@{{ text.note }}</td>
                            </tr>
                    </tbody>
            </table>
    </div>
</template>
