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
            <p class="navbar-text navbar-left"><router-link to="/Act"class="navbar-link">热门</router-link></p>
          </div>
          <button type="submit" class="btn btn-default">登录</button>
          <button type="submit" class="btn btn-default">注册</button>
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
@import "./assets/scss/app.scss";

</style>
