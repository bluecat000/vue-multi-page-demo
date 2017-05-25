<template>
  <div id="app">
    <header>
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">
              <img alt="Brand" src="./assets/logo.png">
            </a>
            <p class="navbar-text">Signed in as Mark Otto</p>
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
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  header{
    width: 100%;
    nav{
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
