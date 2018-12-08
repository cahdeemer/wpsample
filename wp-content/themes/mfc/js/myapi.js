/**
 * File myapi.js
 *
 * This is where i have my api call.
 *
 */


var app = new Vue({
    el: '#my-api-div',
    data () {
      return {
        posts: []
      }
    },
    mounted () {
      axios
        .get('https://jsonplaceholder.typicode.com/posts?userId=2')
        .then(response => (this.posts = response.data))
    }
  })