import Vue from "/vueModule.js";

var app = new Vue({
	el: '#app',
	beforeCreate() {
		setTimeout(() => {
			console.log('fastest asynchronous code ever')
		}, 0);
		console.log('beforeCreate hook done');
	},
	created() {
		console.log('created hook done');
		this.setMessage();
	},
	beforeMount() {
		console.log('beforeMount hook done');
	},
	mounted() {
		console.log('mounted hook done');
	},
	data: {
		message: null
	},
	methods: {
		async setMessage() {
			let response = await fetch('/films');
			let data = await response.json();
			this.message = data;
		}
	}
});
