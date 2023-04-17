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
        <h5 class="modal-title fs-5" id="exampleModalLabel">Chat With </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form>
      <div class="modal-body">
       <div class="form-group">
       	<textarea class="form-control" id="" rows="3" placeholder="Type Your Message">
       		
       	</textarea>
       	
       </div>  

      </div>


      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send Message </button>
      </div>

       </form>



    </div>
  </div>
</div>



</div>
</template>