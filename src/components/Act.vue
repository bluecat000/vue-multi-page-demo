<template>
  <div class="act">
    <!-- v-for不能用做根元素 -->
    <div class="row">
      <div class="col-sm-6 col-md-4" v-for="i in list">
        <div class="thumbnail">
          <img :src="img" alt="...">
          <div class="caption">
            <h3>{{ i != 'undefined' ? i.title : '' }}</h3>
            <p>{{ i != 'undefined' ? i.desc : '' }}</p>
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
      img: require('../assets/logo.png'),
      list: ''
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
    axios.get('http://localhost/vue-simple/api/?n=' + this.listNum)
    .then((data) => {
      data = data.data
      this.list = Object.assign(this.list, data.employees)
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
