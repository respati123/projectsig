
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import router from './route.js';
import {ServerTable, ClientTable, Event} from 'vue-tables-2';
require('./bootstrap');

window.Vue = require('vue');
Vue.use(ClientTable);



/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router,
    data: {
		showCreateModal : false,
		newItem : {'nama_kategori' : ''},
		formErrors : {},
		columns : ['id','nama_kategori','created_at','edit'],
		dataList : [],
		options: {
	      sortable: ['id']
	    }
		
	},

	methods : {

		createItem(){

			var input = this.newItem;
			axios.post('/projectsig', input)
			.then(response=>{
				$('#myModal1').modal('hide');
			 	this.newItem = {'nama_kategori':''};
	            toastr.success('Item Created Successfully.', 'Success Alert', {timeOut: 5000});
	            this.fetchIt();
			})
			.catch(error=>{
				console.log(error.response);
				this.formErrors = error.response.data;
			});
		},
		fetchIt(){
            
            axios.get('projectsig').then((response)=>{this.dataList=response.data;});
        }
	}, 
	mounted : function() {

		this.fetchIt();
	}
});

