// Define some components
var creditcardList = Vue.extend({
    template: '#creditcardList',
    data: function() {
        return {
            creditcards: []
        }
    },
    methods: {
        decrypt: function(ev, index, creditcard) {
            ev.preventDefault();
            var self = this;
            var data = {
                secret: creditcard.secret
            };
            this.$http.post('/creditcard/' + creditcard.id + '/decrypt', data).then(function(response) {
                var creditcard = response.data;
                creditcard.decrypt = true;
                self.creditcards.$set(index, response.data);
            }, function(response) {
                showError(response.data);
                console.log(response);
            })
        },

        update: function(ev, index, creditcard) {
            ev.preventDefault();
            var self = this;
            this.$http.put('/creditcard/' + creditcard.id, creditcard).then(function(response) {
                self.creditcards.$set(index, response.data);
                flash.success('Updated!');
            }, function(response) {
                showError(response.data);
                console.log(response.data);
            })
        },
        delete: function(ev, creditcard) {
            ev.preventDefault();
            var confirm=function(self) {
                self.$http.delete('/creditcard/' + creditcard.id).then(function(response) {
                    flash.success('Deleted!');
                    self.creditcards.$remove(creditcard);
                }, function(response) {
                    showError(response.data);
                    console.log(response.data);
                })                
            }
            var self=this;
            flash.confirm(function() {
                confirm(self);
            });
        }
    },
    ready: function() {
        this.$http.get('/creditcard').then(function(response) {
            this.creditcards = response.data;
        }, function(response) {
            showError(response.data);
            console.log(response.data);
        });
    }
})

var creditcardNew = Vue.extend({
    template: '#creditcardNew',
    data: function() {
        return {
            creditcard: {
                number: '',
                valid: '',
                cvv: '',
                password: '',
                data_crypt: '',
                note: ''
            }
        }
    },
    methods: {
        save: function(ev) {
            ev.preventDefault();
            var self = this;
            this.$http.post('/creditcard', this.creditcard).then(function(response) {
                flash.success('Success!');
                self.creditcard = {};
            }, function(response) {
                showError(response.data);
                console.log(response.data);
            });
        }
    }
})

// Define some components
var textList = Vue.extend({
    template: '#textList',
    data: function() {
        return {
            texts: []
        }
    },
    methods: {
        decrypt: function(ev, index, text) {
            ev.preventDefault();
            var self = this;
            var data = {
                secret: text.secret
            };
            this.$http.post('/text/' + text.id + '/decrypt', data).then(function(response) {
                var text = response.data;
                text.decrypt = true;
                self.texts.$set(index, response.data);
            }, function(response) {
                showError(response.data);
                console.log(response.data);
            })
        },
        update: function(ev, index, text) {
            ev.preventDefault();
            var self = this;
            this.$http.put('/text/' + text.id, text).then(function(response) {
                self.texts.$set(index, response.data);
                flash.success('Updated!');
            }, function(response) {
                showError(response.data);
                console.log(response.data);
            })
        },
        delete: function(ev, text) {
            ev.preventDefault();
            var confirm=function(self) {
                self.$http.delete('/text/' + text.id).then(function(response) {
                    flash.success('Deleted!');
                    self.texts.$remove(text);
                }, function(response) {
                    showError(response.data);
                    console.log(response.data);
                })
            }
            var self=this;
            flash.confirm(function() {
                confirm(self);
            });
        }
    },
    ready: function() {
        this.$http.get('/text').then(function(response) {
            this.texts = response.data;
        }, function(response) {
            showError(response.data);
            console.log(response.data);
        });
    }
})

var textNew = Vue.extend({
    template: '#textNew',
    data: function() {
        return {
            text: {}
        }
    },
    methods: {
        save: function(ev) {
            ev.preventDefault();

            var self = this;
            this.$http.post('/text', this.text).then(function(response) {
                    flash.success('Success!');
                    self.text = {};
                },
                function(response) {
                    showError(response.data);
                    console.log(response.data);
                })
        }
    }
})

// Define some components
var usernameList = Vue.extend({
    template: '#usernameList',
    data: function() {
        return {
            usernames: []
        }
    },
    methods: {
        decrypt: function(ev, index, username) {
            ev.preventDefault();
            var self = this;
            var data = {
                secret: username.secret
            };
            this.$http.post('/username/' + username.id + '/decrypt', data).then(function(response) {
                var username = response.data;
                username.decrypt = true;
                self.usernames.$set(index, response.data);
            }, function(response) {
                showError(response.data);
                console.log(response.data);
            })
        },
        update: function(ev, index, username) {
            ev.preventDefault();
            var self = this;
            this.$http.put('/username/' + username.id, username).then(function(response) {
                self.usernames.$set(index, response.data);
                flash.success('Updated!');
            }, function(response) {
                showError(response.data);
                console.log(response.data);
            })
        },
        delete: function(ev, username) {
            ev.preventDefault();
            var confirm=function(self) {
                self.$http.delete('/username/' + username.id).then(function(response) {
                    flash.success('Deleted!');
                    self.usernames.$remove(username);
                }, function(response) {
                    showError(response.data);
                    console.log(response.data);
                })
            }
            var self=this;
            flash.confirm(function() {
                confirm(self);
            });
        }
    },
    ready: function() {
        this.$http.get('/username').then(function(response) {
            this.usernames = response.data;
        }, function(response) {
            showError(response.data);
            console.log(response.data);
        });
    }
})

var usernameNew = Vue.extend({
    template: '#usernameNew',
    data: function() {
        return {
            username: {}
        }
    },
    methods: {
        save: function(ev) {
            ev.preventDefault();

            var self = this;
            this.$http.post('/username', this.username).then(function(response) {
                    flash.success('Success!');
                    self.username = {};
                },
                function(response) {
                    showError(response.data);
                    console.log(response.data);
                })
        }
    }
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
    '/username/all': {
        component: usernameList
    },
    '/username/store': {
        component: usernameNew
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
