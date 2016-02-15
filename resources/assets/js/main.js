// Define some components
var creditcardList = Vue.extend({
    template: '' +
        '<div class="panel-heading">List of creditcard</div>' +
        '   <div class="panel-body">' +
        '       <table class="table table-bordered table-hover table-striped">' +
        '         <thead>' +
        '             <tr>' +
        '                 <th>' +
        '                   Number' +
        '                 </th>' +
        '                 <th>' +
        '                   Valid' +
        '                 </th>' +
        '                 <th>' +
        '                   CVV' +
        '                 </th>' +
        '                 <th>' +
        '                   Password' +
        '                 </th>' +
        '                 <th>' +
        '                   Data crypt' +
        '                 </th>' +
        '                 <th>' +
        '                   Note' +
        '                 </th>' +
        '             </tr>' +
        '         </thead>' +
        '         <tbody v-for="' +
        '           creditcard in creditcards.all ">' +
        '             <tr>' +
        '                 <td>{{ creditcard.number }}</td>' +
        '                 <td>{{ creditcard.valid }}</td>' +
        '                 <td>***</td>' +
        '                 <td>***</td>' +
        '                 <td>***</td>' +
        '                 <td>{{ creditcard.note }}</td>' +
        '             </tr>' +
        '            <tr>' +
        '                  <td colspan="3"><input type="{{ creditcard.secret }}"></td>' +
        '                  <td colspan="3"><button class="btn btn-primary" v:click="">Decrypt</button></td>' +
        '              </tr>' +
        '         </tbody>' +
        '   </div>' +
        '</div>'
})

var creditcardDecrypt = Vue.extend({
    template: '' +
        '<div class="panel-heading">Data creditcard</div>' +
        '<div class="panel-body">' +
        '        <table class="table table-bordered table-hover table-striped">' +
        '                <thead>' +
        '                        <tr>' +
        '                                <th>Number</th>' +
        '                                <th>Valid</th>' +
        '                                <th>CVV</th>' +
        '                                <th>Password</th>' +
        '                                <th>Data crypt</th>' +
        '                                <th>Note</th>' +
        '                        </tr>' +
        '                </thead>' +
        '                <tbody>' +
        '                        <tr>' +
        '                                <td>{{ creditcard.number }}</td>' +
        '                                <td>{{ creditcard.valid }}</td>' +
        '                                <td>{{ creditcard.cvv }}</td>' +
        '                                <td>{{ creditcard.password }}</td>' +
        '                                <td>{{ creditcard.data_crypt }}</td>' +
        '                                <td>{{ creditcard.note }}</td>' +
        '                        </tr>' +
        '                </tbody>' +
        '        </table>' +
        '</div>'
})

var creditcardNew = Vue.extend({
    template: '' +
        '<div class="panel-heading">Add creditcard</div>' +
        '<div class="panel-body">' +
        '        <table class="table table-bordered table-hover table-striped">' +
        '                <thead>' +
        '                        <tr>' +
        '                                <th>Number</th>' +
        '                                <th>Valid</th>' +
        '                                <th>CVV</th>' +
        '                                <th>Password</th>' +
        '                                <th>Data crypt</th>' +
        '                                <th>Note</th>' +
        '                        </tr>' +
        '                </thead>' +
        '                <tbody>' +
        '                        <tr>' +
        '                                <td><input class="form-control" type="text" v-model="creditcard.number" placeholder="Number" </td>' +
        '                                <td><input class="form-control" type="text" v-model="creditcard.valid" placeholder="Valid MM/YY" </td>' +
        '                                <td><input class="form-control" type="text" v-model="creditcard.cvv" placeholder="CVV" </td>' +
        '                                <td><input class="form-control" type="text" v-model="creditcard.password" placeholder="Password" </td>' +
        '                                <td><input class="form-control" type="text" v-model="creditcard.data_crypt" placeholder="Data" </td>' +
        '                                <td><input class="form-control" type="text" v-model="creditcard.note" placeholder="Note" </td>' +
        '                        </tr>' +
        '                        <tr>' +
        '                         <td colspan="6" class="text-right"><button class="btn btn-primary" v:click="">Save</button></td>' +
        '                      </tr>' +
        '                </tbody>' +
        '        </table>' +
        '</div>'
})

// The router needs a root component to render.
// For demo purposes, we will just use an empty one
// because we are using the HTML as the app template.
var App = Vue.extend({})

// Create a router instance.
// You can pass in additional options here, but let's
// keep it simple for now.
var router = new VueRouter()

// Define some routes.
// Each route should map to a component. The "component" can
// either be an actual component constructor created via
// Vue.extend(), or just a component options object.
// We'll talk about nested routes later.
router.map({
    '/creditcard/all': {
        component: creditcardList
    },
    '/creditcard/store': {
        component: creditcardNew
    },
    '/text/all': {
        component: creditcardList
    },
    '/text/store': {
        component: creditcardNew
    },
    root: {
        component: creditcardNew
    }
})

// Now we can start the app!
// The router will create an instance of App and mount to
// the element matching the selector #app.
router.start(App, '#protectAll')
