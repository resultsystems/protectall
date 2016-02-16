<template id="creditcardDecrypt">
    <div class="panel-heading">Data creditcard</div>
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
                                <td>@{{ creditcard.number }}</td>
                                <td>@{{ creditcard.valid }}</td>
                                <td>@{{ creditcard.cvv }}</td>
                                <td>@{{ creditcard.password }}</td>
                                <td>@{{ creditcard.data_crypt }}</td>
                                <td>@{{ creditcard.note }}</td>
                            </tr>
                    </tbody>
            </table>
    </div>
</template>
