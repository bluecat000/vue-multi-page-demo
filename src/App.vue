<template>
  <div id="app">
    <header>
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">
              <img alt="Brand" src="./assets/logo.png">
            </a>
            <p class="navbar-text navbar-left">bluecat</p>
            <p class="navbar-text navbar-left"><router-link to="/" class="navbar-link">主页</router-link></p>
            <p class="navbar-text navbar-left"><router-link to="/About"class="navbar-link">关于</router-link></p>
          </div>
        </div>
      </nav>
    </header>
    <router-view></router-view>
  </div>
</template>

<script>
export default {
  name: 'app'
}
</script>

<style lang="scss">
@import "./assets/scss/base.scss";

#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  header{
    width: 100%;
    margin-bottom: 20px;
    nav{
      margin: 0;
      a{
        padding: 10px;
      }
      p{
        text-align: left;
      }
      img{
        width: 30px;
        height: 30px;
      }
      .btn{
        margin: 8px 5px;
        float: right;
      }
      .container-fluid>:nth-child(2){
        color: $white;
        background: $main-green;
      }

      @media (min-width: 1024px){
        .navbar-header{
          display: box;
          width: 600px;
          margin: auto;
        }
      }
    }
  }
}
</style>
