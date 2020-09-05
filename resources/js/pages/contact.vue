<template>
  <div>
    <div class="banner video_banner">
      <div id="feature" class="bghide">
        <img
          id="featureImg"
          src="https://cdainterview.com/resources/contact-us.png"
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

          <form @submit.prevent="contactUs" @keydown="form.onKeydown($event)">
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
                size="40"
                v-model="form.name"
                :class="{ 'is-invalid': form.errors.has('name') }"
                name="name"
              />
              <has-error :form="form" field="name" /><br /><br />

              <label>Email Address:</label> *<br />
              <input
                class="form-input-field"
                value=""
                size="40"
                v-model="form.email"
                :class="{ 'is-invalid': form.errors.has('email') }"
                type="email"
                name="email"
              />
              <has-error :form="form" field="email" />

              <br /><br />

              <label>How can we help you?</label> *<br />
              <textarea
                class="form-input-field"
                rows="8"
                cols="38"
                v-model="form.subject"
                :class="{ 'is-invalid': form.errors.has('name') }"
                type="text"
                name="subject"
              ></textarea>
              <has-error :form="form" field="subject" />

              <br /><br />

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
                :disabled="submitted"
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
import Form from "vform";
// import axios from 'axios';

export default {
  layout: "default",

  middleware: "auth",

  metaInfo() {
    return { title: this.$t("contact") };
  },

  data: () => ({
    title: window.config.appName,
    form: new Form({
      name: "",
      email: "",
      subject: ""
    }),
    errors: {},
    submitted: false
  }),

  computed: mapGetters({
    authenticated: "auth/check"
  }),

  methods: {
    async contactUs() {
      this.submitted = true;

      // Register the user.
      const { data } = await this.form.post("/contact-us");

      // debugger;
      console.log(data);

      // .then(response => {
      //   console.log(response);
      //   // some success message or the like
      // })
      // .catch(errors => {
      //   console.log(errors.response.data.errors);
      // });
    }
  }
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
