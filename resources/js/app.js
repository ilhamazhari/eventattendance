import Vue from 'vue';
import Qrscanner from './components/Qrscanner.vue';

require('./bootstrap');

const app = new Vue({
  el: '#app',
  components: { Qrscanner }
});