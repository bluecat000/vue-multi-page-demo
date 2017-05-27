<template>
  <div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img :src="img" alt="...">
      <div class="caption">
        <h3>{{msg}}</h3>
        <p>...</p>
        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      </div>
    </div>
  </div>
</div>
</template>

<script>
export default {
  name: 'Index',
  data () {
    return {
      img: require('../assets/logo.png'),
      msg: 'Welcome to bluecat\'s blog'
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

</style>
