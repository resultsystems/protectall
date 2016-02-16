// Define some components
var creditcardList = Vue.extend({
    template: '#creditcardList'
})

var creditcardDecrypt = Vue.extend({
    template: '#creditcardDecrypt'
})

var creditcardNew = Vue.extend({
    template: '#creditcardNew'
})

var textList = Vue.extend({
    template: '#textList'
})

var textDecrypt = Vue.extend({
    template: '#textDecrypt'
})

var textNew = Vue.extend({
    template: '#textNew'
})

var dashboard = Vue.extend({
    template: '#dashboard'
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
        component: textList
    },
    '/text/store': {
        component: textNew
    },
    '*': {
        component: dashboard
    },
    root: {
        component: dashboard
    }
})

// Now we can start the app!
// The router will create an instance of App and mount to
// the element matching the selector #app.
router.start(App, '#protectAll')
