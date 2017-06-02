<template>
  <div class="act">
    <!-- v-for不能用做根元素 -->
    <div class="row">
      <div class="col-sm-6 col-md-4" v-for="i in listNum">
        <div class="thumbnail">
          <img :src="img" alt="...">
          <div class="caption">
            <h3>Thumbnail label</h3>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
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
</style>
