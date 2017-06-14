<template>
  <div id="app">
    <header>
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">
              <img alt="Brand" src="../../assets/logo.png">
            </a>
            <p class="navbar-text navbar-left">Bluecat</p>
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
@import "../../assets/scss/base.scss";

#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased; //字体清晰
  -moz-osx-font-smoothing: grayscale;
  header{
    width: 100%;
    margin-bottom: 20px;
    nav{
      margin: 0;
      a{
        text-decoration: none;
        padding: 10px;
      }
      img{
        width: 30px;
        height: 30px;
      }
      .navbar-header{
        width: 100%;
      }
      .container-fluid{
        justify-content: center;
        display: flex;
      }
      @media (min-width: 1024px){
        .navbar-header{
          width: 724px;
          margin: auto;
        }
      }
    }
  }
}
</style>
