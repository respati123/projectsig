import VueRouter from 'vue-router';


let routes=[
{
	path:'/',
	component:require('./components/Dashboard')
},
{
	path:'/kategori',
	component:require('./components/Kategori')
},
{
	path:'/sejarah',
	component:require('./components/Sejarah')
},
];


export default new VueRouter({
	routes,
	mode:'history'
	

});