<template>
  <div class="row"  style=" width: 873px; ">
    <div class="col-md-2 myUser">
        <ul class="user">
           <strong>Chat List</strong>
           <hr>
        <li> 
          <a href="">
            <img src="/frontend/avatar-1.png"
              alt="UserImage"
              class="userImg"
            />
            <span class="username text-center">users</span>
          </a>
        </li>

      </ul>
    </div>
    <div class="col-md-10">
      <div class="card">
        <div class="card-header text-center myrow">
          <strong> Selected Users </strong>
        </div>
        <div class="card-body chat-msg">
          <ul class="chat">

           <li class="sender clearfix">
              <span class="chat-img left clearfix mx-2">
              <img src="/frontend/avatar-2.png"
                  class="userImg"
                  alt="userImg"
                />
              </span>
              <div class="chat-body2 clearfix">
                <div class="header clearfix">
                  <strong class="primary-font">Username1</strong>
                  <small class="right text-muted">
                    11:30am 
                  </small>
                  <!-- //if send with product id  -->
                  <div class="text-center">
                      product name
                  <img src="/frontend/avatar-3.png"
                      alt="productImg"
                      width="60px;"
                    />
                  </div>
                </div>

                <p>Hi..</p>
              </div>
            </li>

        <!-- my part  -->
            <li class="buyer clearfix">
              <span class="chat-img right clearfix mx-2">
                <img src="/frontend/avatar-4.png"
                  class="userImg"
                  alt="userImg"
                />
                 </span>
              <div class="chat-body clearfix">
                <div class="header clearfix">
                  <small class="left text-muted"
                    >12:10pm</small>
                  <!-- <strong class="right primary-font">Myusername </strong> //my name   -->
                   <div class="text-center">
                      Product name
                   <img src="/frontend/avatar-5.png"
                      alt="prouductImage"
                      width="60px;"
                    />
                  </div>
                </div>
                <p>Hello...</p>
              </div>
            </li>
        
            <li class="sender clearfix">
              <span class="chat-img left clearfix mx-2"> </span>
            </li>

          </ul>
        </div>
        <div class="card-footer">
          <div class="input-group">
            <input
              id="btn-input"
              type="text"
              class="form-control input-sm"
              placeholder="Type your message here..."
            />
            <span class="input-group-btn">
              <button class="btn btn-primary">Send</button>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
   
};
</script>
<style> 

.username {
  color: #000;
}

.myrow{
    background: #F3F3F3;
    padding: 25px;
}

.myUser{
     padding-top: 30px;
     overflow-y: scroll;
    height: 450px;
    background: #F2F6FA;
}
.user li {
  list-style: none;
  margin-top: 20px;
 
}

.user li a:hover {
  text-decoration: none;
  color: red;
}
.userImg {
  height: 35px;
  border-radius: 50%;
}
.chat {
  list-style: none;
  margin: 0;
  padding: 0;
}

.chat li {
  margin-bottom: 40px;
  padding-bottom: 5px;
  margin-top: 20px;
  width: 80%;
  height: 10px;
}

.chat li .chat-body p {
  margin: 0;
}

.chat-msg {
  overflow-y: scroll;
  height: 350px;
  background: #F2F6FA;
}
.chat-msg .chat-img {
  width: 100px;
  height: 100px;
}
.chat-msg .img-circle {
  border-radius: 50%;
}
.chat-msg .chat-img {
  display: inline-block;
}
.chat-msg .chat-body {
  display: inline-block;
  max-width: 45%;
  margin-right: -73px; 
  background-color: #891631;
  border-radius: 12.5px;
  padding: 15px;
}
.chat-msg .chat-body2 {
  display: inline-block;
  max-width: 80%;
  margin-left: -64px;
  background-color: #080000;
  border-radius: 12.5px;
  padding: 15px;
}
.chat-msg .chat-body strong {
  color: #0169da;
}

.chat-msg .buyer {
  text-align: right;
  float: right;
}
.chat-msg .buyer p {
  text-align: left;
}
.chat-msg .sender {
  text-align: left;
  float: left;
}
.chat-msg .left {
  float: left;
}
.chat-msg .right {
  float: right;
}

.clearfix {
  clear: both;
}
</style>

