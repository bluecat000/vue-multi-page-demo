<template>
  <div id="app">
    <header>
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">
              <img alt="Brand" src="./assets/logo.png">
            </a>
            <p class="navbar-text">Welcome to bluecat's blog</p>
          </div>
        </div>
      </nav>
      <div class="submenu">
        <ul class="nav nav-pills" role="tablist">
          <li role="presentation" class="active"><a href="#">Home <span class="badge">42</span></a></li>
          <li role="presentation"><a href="#">Profile</a></li>
          <li role="presentation"><a href="#">Messages <span class="badge">3</span></a></li>
        </ul>
      </div>
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
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  header{
    width: 100%;
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
    }
  }
}
</style>
