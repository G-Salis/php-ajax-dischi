const app = new Vue({

  el: '#app',

  data: {
   disc : [],
   apiURL : 'http://localhost/php-ajax-dischi/server.php'
 },

 mounted(){ 
  this.getApi();
  console.log(this.disc);
},



 methods:{

  getApi(){
    axios.get(this.apiURL)
    .then( r => {
      this.disc = r.data;
    })
    .catch( e => {
      console.log(e);
    })
  },


 }


})