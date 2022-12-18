new Vue({
  el: "#app",
  data: {
    discs: [],
    urlApi: "http://localhost:8888/php-ajax-dischi/api.php",
  },
  created() {
    axios.get(this.urlApi).then((res) => {
      this.discs = res.data;
    });
  },
});
