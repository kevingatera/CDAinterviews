<template>
  <div>
    <div class="banner video_banner">
      <div id="feature" class="bghide">
        <img
          id="featureImg"
          src="https://cdainterview.com/rw_common/resources/contact-us.png"
        />
        <div id="extraContainer11">
          <div class="videoWrapper"></div>
        </div>

        <div id="extraContainer1"></div>
      </div>
    </div>

    <div id="container">
      <div id="extraContainer7"></div>
      <div id="extraContainer8"></div>

      <section>
        <div id="padding">
          <div class="message-text">
            <span style="font-size:17px; font-weight:bold; "
              >BeMo Academic Consulting Inc. </span
            ><br /><span
              ><span style="font-size:13px; font-weight:bold; "
                ><u>Toll Free</u></span
              ><span style="font-size:13px; ">: </span
              ><span style="font-size:14px; ">1-855-900-BeMo (2366)</span
              ><span style="font-size:13px; "><br /></span
              ><span style="font-size:13px; font-weight:bold; "
                ><u>Email</u></span
              ><span style="font-size:13px; ">: </span
              ><span style="font-size:14px; "
                >info@bemoacademicconsulting.com</span
              ></span
            >
          </div>
          <br />

          <form
            action="./contact-us_files/mailer.php"
            method="post"
            enctype="multipart/form-data"
          >
            <div>
              <div class="message-text">
                <span style="font-size:17px; font-weight:bold; "
                  >BeMo Academic Consulting Inc. </span
                ><br /><span
                  ><span style="font-size:13px; font-weight:bold; "
                    ><u>Toll Free</u></span
                  ><span style="font-size:13px; ">: </span
                  ><span style="font-size:14px; ">1-855-900-BeMo (2366)</span
                  ><span style="font-size:13px; "><br /></span
                  ><span style="font-size:13px; font-weight:bold; "
                    ><u>Email</u></span
                  ><span style="font-size:13px; ">: </span
                  ><span style="font-size:14px; "
                    >info@bemoacademicconsulting.com</span
                  ></span
                >
              </div>
              <label>Name:</label> *<br />
              <input
                class="form-input-field"
                type="text"
                value=""
                name="form[element0]"
                size="40"
              /><br /><br />

              <label>Email Address:</label> *<br />
              <input
                class="form-input-field"
                type="text"
                value=""
                name="form[element1]"
                size="40"
              /><br /><br />

              <label>How can we help you?</label> *<br />
              <textarea
                class="form-input-field"
                name="form[element2]"
                rows="8"
                cols="38"
              ></textarea
              ><br /><br />

              <div style="display: none;">
                <div class="message-text">
                  <span style="font-size:17px; font-weight:bold; "
                    >BeMo Academic Consulting Inc. </span
                  ><br /><span
                    ><span style="font-size:13px; font-weight:bold; "
                      ><u>Toll Free</u></span
                    ><span style="font-size:13px; ">: </span
                    ><span style="font-size:14px; ">1-855-900-BeMo (2366)</span
                    ><span style="font-size:13px; "><br /></span
                    ><span style="font-size:13px; font-weight:bold; "
                      ><u>Email</u></span
                    ><span style="font-size:13px; ">: </span
                    ><span style="font-size:14px; "
                      >info@bemoacademicconsulting.com</span
                    ></span
                  >
                </div>
                <label>Spam Protection: Please don't fill this in:</label>
                <textarea name="comment" rows="1" cols="1"></textarea>
              </div>
              <input
                type="hidden"
                name="form_token"
                value="16230374775f528242a74b8"
              />
              <input
                class="form-input-button"
                type="reset"
                name="resetButton"
                value="Reset"
              />
              <input
                class="form-input-button"
                type="submit"
                name="submitButton"
                value="Submit"
              />
            </div>
          </form>

          <br />
          <div class="form-footer">
            <span style="font-size:15px; font-weight:bold; "><u>Note</u></span
            ><span style="font-size:15px; "
              >: If you are having difficulties with our contact us form above,
              send us an email to info@bemoacademicconsulting.com (copy &amp;
              paste the email address)</span
            ><span style="font-size:13px; "><br /></span>
          </div>
          <br />
        </div>
      </section>
      <div id="asidewrap">
        <aside>
          <div id="sidecontent">
            <div id="sideTitle"></div>
          </div>
        </aside>
      </div>
      <div class="clear"></div>

      <div id="ecwrap"></div>
      <div id="ec2wrap"><div id="extraContainer2"></div></div>
      <div id="ec3wrap"><div id="extraContainer3"></div></div>
      <div id="ec4wrap"><div id="extraContainer4"></div></div>
      <div id="ec5wrap"><div id="extraContainer5"></div></div>
      <div id="ec6wrap"><div id="extraContainer6"></div></div>

      <div id="extraContainer10">
        <aside>
          <div id="sidecontent">
            <div id="sideTitle"></div>
          </div>
        </aside>
      </div>
    </div>
  </div>
</template>

<script>
import { mapGetters } from "vuex";

export default {
  layout: "default",

  metaInfo() {
    return { title: this.$t("home") };
  },

  data: () => ({
    title: window.config.appName
  }),

  computed: mapGetters({
    authenticated: "auth/check"
  })
};
</script>

<style scoped>
.top-right {
  position: absolute;
  right: 10px;
  top: 18px;
}

.title {
  font-size: 85px;
}
</style>
