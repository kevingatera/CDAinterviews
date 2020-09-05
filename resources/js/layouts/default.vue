<template>
  <div class="main-layout">
    <navbar />

    <div class="container">
      <child />
    </div>
    <Footer />
  </div>
</template>

<script>
import Navbar from "~/components/Navbar";
import Footer from "~/components/Footer";

export default {
  name: "MainLayout",

  components: {
    Navbar,
    Footer
  }
};
</script>

<style scoped>
@import "../../fromCDA/styles.css";
@import "../../fromCDA/colourtag-page3.css";
/* @import "../.../fromCDA/flexslider.css";
@import "../.../fromCDA/css/contentcenter.css";
@import "../.../fromCDA/css/ec9on.css"; */
/*@import "../.../fromCDA/css/rimage.css";
@import "../.../fromCDA/css/ssoff.css";
@import "../.../fromCDA/css/sslide.css";
@import "../.../fromCDA/css/sidenone.css";
@import "../.../fromCDA/css/olight90.css";
@import "../.../fromCDA/css/fontarial.css";
@import "../.../fromCDA/css/title26.css";
@import "../.../fromCDA/css/fontarialspan.css";
@import "../.../fromCDA/css/bts46.css";
@import "../.../fromCDA/css/btoff.css";
@import "../.../fromCDA/css/fontarialnav.css";
@import "../.../fromCDA/css/nav17.css";
@import "../.../fromCDA/css/fontarialside.css";
@import "../.../fromCDA/css/fontarialheader.css";
@import "../.../fromCDA/css/fontarialcontent.css";
@import "../.../fromCDA/css/font13.css"; */
</style>
