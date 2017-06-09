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
      width: 150px;
      height: 150px;
      flex: 1;
      margin: 0;
      vertical-align: middle;
    }
     .caption{
       flex: 999;
    }
  }
}
</style>
