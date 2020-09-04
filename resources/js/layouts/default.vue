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
@import "https://cdainterview.com/rw_common/themes/Endeavor/styles.css";
@import "https://cdainterview.com/rw_common/themes/Endeavor/colourtag-page3.css";
@import "https://cdainterview.com/rw_common/themes/Endeavor/flexslider.css";
@import "https://cdainterview.com/rw_common/themes/Endeavor/css/contentcenter.css";
@import "https://cdainterview.com/rw_common/themes/Endeavor/css/ec9on.css";
@import "https://cdainterview.com/rw_common/themes/Endeavor/css/rimage.css";
@import "https://cdainterview.com/rw_common/themes/Endeavor/css/ssoff.css";
@import "https://cdainterview.com/rw_common/themes/Endeavor/css/sslide.css";
@import "https://cdainterview.com/rw_common/themes/Endeavor/css/sidenone.css";
@import "https://cdainterview.com/rw_common/themes/Endeavor/css/olight90.css";
@import "https://cdainterview.com/rw_common/themes/Endeavor/css/fontarial.css";
@import "https://cdainterview.com/rw_common/themes/Endeavor/css/title26.css";
@import "https://cdainterview.com/rw_common/themes/Endeavor/css/fontarialspan.css";
@import "https://cdainterview.com/rw_common/themes/Endeavor/css/bts46.css";
@import "https://cdainterview.com/rw_common/themes/Endeavor/css/btoff.css";
@import "https://cdainterview.com/rw_common/themes/Endeavor/css/fontarialnav.css";
@import "https://cdainterview.com/rw_common/themes/Endeavor/css/nav17.css";
@import "https://cdainterview.com/rw_common/themes/Endeavor/css/fontarialside.css";
@import "https://cdainterview.com/rw_common/themes/Endeavor/css/fontarialheader.css";
@import "https://cdainterview.com/rw_common/themes/Endeavor/css/fontarialcontent.css";
@import "https://cdainterview.com/rw_common/themes/Endeavor/css/font13.css";
</style>
