// Define some components
var Foo = Vue.extend({
    template: '<p>This is foo!</p>'
})

var Bar = Vue.extend({
    template: '<p>This is bar!</p>'
})


new Vue({
    /**
     * Element HTML que será gerenciado
     */
    el: "#protectAll",

    /**
     * Todas as propriedades deste objeto estará disponíveis
     * no HTML de ID protectAll e seus filhos. Qualquer mudança
     * nos valores do objeto será refletida no HTML.
     */
    data: {
        creditcard: {},
        creditcards: {
            all: []
        }
    },

    /**
     * Os métodos abaixo estarão disponíveis no HTML
     * de ID protectAll e seus filhos
     */
    methods: {
        creditcard: {
            all: function(e) {
                var self = this;
                console.log(self.log);
                console.log(ev);

                self.$http.get('/creditcard').then(function(response) {
                    console.log(response.data);
                    Vue.set(self.creditcards, 'all', response.data);
                });
            },
            store: function(e, creditcard) {
                self.$http.post('/creditcard', self.creditcard).then(function(response) {
                    console.log(response.data);
                    Vue.set(self.creditcards, 'creditcard', response.data);
                });
            },
            put: function(e, creditcard) {
                self.$http.put('/creditcard/' + creditcard.id, self.creditcard).then(function(response) {
                    console.log(response.data);
                    Vue.set(self.creditcards, 'creditcard', response.data);
                });
            },
            get: function(e, creditcard_id) {
                self.$http.get('/creditcard/' + creditcard_id).then(function(response) {
                    console.log(response.data);
                    Vue.set(self.creditcards, 'creditcard', response.data);
                });
            },
            decrypt: function(e, creditcard_id, secret) {
                var creditcard = {
                    'secret': secret
                };

                self.$http.post('/creditcard/' + creditcard_id, self.creditcard).then(function(response) {
                    console.log(response.data);
                    Vue.set(self.creditcards, 'creditcard', response.data);
                });
            },
            delete: function(e, creditcard_id) {
                self.$http.delete('/creditcard/' + creditcard_id).then(function(response) {
                    console.log(response.data);
                    Vue.set({}, 'creditcard', response.data);
                });
            }
        }
    },

    /**
     * Este método será executado assim que tanto o Vue quanto
     * o HTML de ID protectAll (e seus filhos) estiverem prontos.
     */
    ready: function() {
        console.log('iniciado');
    }
});
