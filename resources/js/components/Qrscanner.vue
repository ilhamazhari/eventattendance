<template>
  <div>
    <p class="error">{{ error }}</p>

    <p class="decode-result">ID Pengunjung: <b>{{ id }}</b></p>
    <p class="decode-result">Nama: <b>{{ name }}</b></p>

    <qrcode-stream @decode="onDecode" @init="onInit" />
  </div>
</template>

<script>
import { QrcodeStream } from 'vue-qrcode-reader'

export default {

  components: { QrcodeStream },

  data () {
    return {
      camera: 'rear',
      id: '',
      name: '',
      error: ''
    }
  },

  methods: {
    async onDecode (result) {
      const { data } = await window.axios.get('/api/attendee/attendance/' + result);
      if(data.attendance == 1){
        this.error = 'User sudah discan';
      }
      this.id = result;
      this.name = data.fullname;
      audio = new Audio('http://soundbible.com/mp3/Air%20Plane%20Ding-SoundBible.com-496729130.mp3');
      audio.play();
    },

    async onInit (promise) {
      try {
        await promise
      } catch (error) {
        if (error.name === 'NotAllowedError') {
          this.error = "ERROR: you need to grant camera access permisson"
        } else if (error.name === 'NotFoundError') {
          this.error = "ERROR: no camera on this device"
        } else if (error.name === 'NotSupportedError') {
          this.error = "ERROR: secure context required (HTTPS, localhost)"
        } else if (error.name === 'NotReadableError') {
          this.error = "ERROR: is the camera already in use?"
        } else if (error.name === 'OverconstrainedError') {
          this.error = "ERROR: installed cameras are not suitable"
        } else if (error.name === 'StreamApiNotSupportedError') {
          this.error = "ERROR: Stream API is not supported in this browser"
        }
      }
    }
  }
}
</script>

<style scoped>
.error {
  font-weight: bold;
  color: red;
}
</style>