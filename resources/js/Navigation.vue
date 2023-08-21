<template>

  <div>
    <select-input v-model="selected" :options="options" @input="optionSelected"></select-input>
  </div>

</template>

<script>
export default {

  mixins: [Fieldtype],

  props: {
    value: {
      type: String,
      default: '',
    },
  },

  data() {
    return {
      selected: ''
    };
  },
  computed: {
    options() {
      return this.meta.navOptions.map(n => {
        return { label: n.title, value: n.handle };
      });
    },
  },
  methods: {
    optionSelected() {
      this.$emit('input', this.selected);
    }
  }
};
</script>

