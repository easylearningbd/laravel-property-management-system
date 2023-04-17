<template> 
<div>

	<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#chat">
  Chat Now 
</button>

<!-- Modal -->
<div class="modal fade" id="chat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fs-5" id="exampleModalLabel">Chat With {{ recevierid }} {{ receivername }} </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form @submit.prevent="sendMsg()" >
      <div class="modal-body">
       <div class="form-group">
       	<textarea class="form-control" v-model="form.msg" id="" rows="3" placeholder="Type Your Message"></textarea>
       	<span class="text-success" v-if="succMessage.message" >{{ succMessage.message }}</span>
       	<span class="text-danger" v-if="errors.msg" >{{ errors.msg[0] }}</span>
       </div>  

      </div>


      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Send Message </button>
      </div>

</form>



    </div>
  </div>
</div>



</div>
</template>

<script>
export default {
	props: ['recevierid','receivername'],

	data(){
		return{
			form: {
				msg:"",
				receiver_id: this.recevierid,
			},
			errors:{},
			succMessage:{},
		}
	},

	methods: {
		sendMsg(){
			axios.post('/send-message',this.form)
			.then((res) => {
				this.form.msg = "";
				this.succMessage = res.data;
				console.log(res.data);
			}).catch((err) => {
				this.errors = err.response.data.errors;
			})
		}
	} 

}	

</script>