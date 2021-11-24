const axios = require('axios').default;

axios.get('https://s-fy.herokuapp.com/5f5bec').then(function (response) {
  console.log(response.data);
});
