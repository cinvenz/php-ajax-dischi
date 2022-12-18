new Vue({
  el: "#app",
  data: {
    disc: [],
    urlApi: "http://localhost:8888/php-ajax-dischi/api/discs.php",
  },
  created() {
    axios.get(this.urlApi).then((res) => {
      this.discs = res.data;
    });
  },
});
