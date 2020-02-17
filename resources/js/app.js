import Vue from 'vue';
import VueQrcodeReader from 'vue-qrcode-reader';
import Qrscanner from './components/Qrscanner.vue';

require('./bootstrap');

const app = new Vue({
  el: '#app',
  components: { Qrscanner }
});