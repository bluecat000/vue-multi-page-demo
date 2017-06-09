<template lang="html">
  <div class="about">
    <p>Bluecat</p>
    <p>Front-end</p>
    <p>Mail：bluecat000@outlook.com</p>
    <p>Github：bluecat000</p>
  </div>
</template>

<script>
export default {
}
</script>

<style lang="scss">
  .about{
    padding: 0 20px;
    width: 100%;
    margin: auto;
    text-align: left;
    p{
      font-size: 16px;
    }
  }
  @media (min-width:1024px) {
    .about{
      width: 724px;
    }
  }
</style>
