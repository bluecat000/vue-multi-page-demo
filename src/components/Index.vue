<template>
  <div class="index">
    <div class="page-header">
      <h1>bluecat的博客<small>忠于创造</small></h1>
    </div>
    <Act :listNum="listNum"></Act>
  </div>
</template>

<script>
import Act from './Act'
export default {
  name: 'Index',
  data () {
    return {
      img: require('../assets/logo.png'),
      msg: 'Welcome to bluecat\'s blog',
      listNum: 6
    }
  },
  components: {
    Act
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss" scoped>
.jumbotron{
  padding-top: 30px;
  padding-bottom: 10px;
}
</style>
