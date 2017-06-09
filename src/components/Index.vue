<template>
  <div class="index">
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
<style lang="scss">
  .index{
    box-sizing: border-box;
    width: 100%;
    margin: auto;
  }
  @media (min-width: 1024px){
    .index{
      width: 600px;
    }
  }
</style>
