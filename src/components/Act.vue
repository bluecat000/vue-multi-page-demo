<template>
  <div class="act">
    <!-- v-for不能用做根元素 -->
    <div class="row">
      <div class="col-sm-6 col-md-4" v-for="i in listNum">
        <div class="thumbnail">
          <img :src="img" alt="...">
          <div class="caption">
            <h3>Thumbnail label</h3>
            <p>Cras justo odio, dapibus ac faibh ultricies vehicula ut id elit.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios'
export default {
  name: 'Act',
  data () {
    return {
      img: require('../assets/logo.png')
    }
  },
  props: {
    listNum: {
      type: Number,
      default: function () {
        return 3
      }
    }
  },
  created: function () {
    axios.get('http://localhost/vue-simple/api/')
    .then(function (data) {
      console.log(data.data)
    })
    .catch(function (err) {
      console.log(err)
    })
  }
}
</script>

<style lang="scss">
.row{
  margin: 0;
}
.col-sm-6{
  width: 100%;
  .thumbnail{
    border-right: none;
    border-top: none;
    border-left: none;
    display: -webkit-box;
    img{
      width: 130px;
      height: 130px;
      flex: 1;
      margin: 0;
      vertical-align: middle;
    }
    h3{
      margin-top: 0;
    }
     .caption{
       flex: 999;
    }
  }
}
.col-sm-6:last-child{
  .thumbnail{
    border: none;
  }
}
</style>
