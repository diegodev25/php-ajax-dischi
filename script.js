var app = new Vue ({
  el: '#app',
  data: {
    album: []
  },
  mounted: function () {
  axios.get('data.php')
  .then(risposta => {
    let dataAlbum = risposta.data;
    this.album = dataAlbum;
    console.log(this.album);
    });
  }
});
