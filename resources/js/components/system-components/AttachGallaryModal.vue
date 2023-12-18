<template>
  <div
    class="fixed z-50 inset-0 overflow-y-auto"
    aria-labelledby="modal-title"
    role="dialog"
    aria-modal="true"
  >
    <div
      class="
        flex
        items-end
        justify-center
        min-h-screen
        pt-4
        px-4
        pb-20
        text-center
        sm:block sm:p-0
      "
    >
      <div
        class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"
        aria-hidden="true"
      ></div>

      <span
        class="hidden sm:inline-block sm:align-middle sm:h-screen"
        aria-hidden="true"
        >&#8203;</span
      >
      <div
        class="
          inline-block
          align-bottom
          bg-white
          rounded-lg
          text-left
          shadow-xl
          transform
          transition-all
          sm:my-8 sm:align-middle sm:max-w-lg sm:w-full
        "
      >
        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
          <div class="sm:flex sm:items-start">
            <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
              <h3 class="text-lg leading-6 font-medium text-gray-900">
                <slot name="modal-header">Choose Image</slot>
              </h3>
              <div class="grid lg:grid-cols-3">
                <div v-for="gallary in gallaries">
                  <img  style="width:100%;height:200px;cursor:pointer" class="p-5 border-solid border-2 border-gray-50" :src="'/gallary/'+gallary.name" @click="setImage(gallary)" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
          <slot name="modal-footer"></slot>
          <button
            type="button"
            class="
              mt-3
              w-full
              inline-flex
              justify-center
              rounded-md
              border border-gray-300
              shadow-sm
              px-4
              py-2
              bg-white
              text-base
              font-medium
              text-gray-700
              hover:bg-gray-50
              focus:outline-none
              focus:ring-2
              focus:ring-offset-2
              focus:ring-indigo-500
              sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm
            "
            @click="close"
          >
            Cancel
          </button>
        </div>
      </div>
    </div>
  </div>
</template>


<script>
export default {
  data() {
    return {
      gallaries: [],
    };
  },
  mounted: function () {
    document.addEventListener("keydown", (e) => {
      if (this.show && e.keyCode == 27) {
        this.close();
      }
    });

    this.fetchgallaries();
  },
  methods: {
    close: function () {
      this.$emit("close");
    },
    fetchgallaries() {
      this.$parent.loading = true;
      let vm = this;
      var page_url = page_url || process.env.MIX_ADMIN_APP_URL + "/gallary";
      var arr = page_url.split("?");

      if (arr.length > 1) {
        page_url += "&limit=" + this.limit;
      } else {
        page_url += "?limit=" + this.limit;
      }
      if (this.tag_id != null) {
        page_url += "&tag_id=" + this.tag_id;
      }
      page_url += "&getDetail=1&getGallaryTag=1&sortBy=id&sortType=DESC";
      var responseData = {};

      axios
        .get(page_url, this.token)
        .then((res) => {
          this.gallaries = res.data.data.data;
          this.meta = res.data;

          console.log(res.data, "data");
        })
        .finally(() => (this.$parent.loading = false));
    },
    setImage(gallary){
      this.$emit("setImage",gallary);
    }
  },
  props: ["show"],
};
</script>
