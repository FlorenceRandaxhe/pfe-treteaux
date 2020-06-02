Nova.booting((Vue, router, store) => {
  Vue.component('index-seat-picker', require('./components/IndexField'))
  Vue.component('detail-seat-picker', require('./components/DetailField'))
  Vue.component('form-seat-picker', require('./components/FormField'))
})
