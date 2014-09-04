<div class="ui large modal">
  
  <i class="close icon"></i>

     <div class="ui form segment">

      <div class="two fields">
        <div class="field">
          <label>Name</label>
          <input type="text" name="name" placeholder="Name">
        </div>
        <div class="field">
          <label>Email</label>
          <input type="text" name="email" placeholder="Email" >
        </div>
      </div>

      <div class="two fields">
        <div class="field">
          <label>Login</label>
          <input name="login" type="text" placeholder="Login">
        </div>
        <div class="field">
          <label>Password</label>
          <input type="password" name="password" placeholder="Password" >
        </div>
      </div>

      <div class="two fields">
         <div class="field">
          <label>Type</label>
          <div class="ui fluid selection dropdown">
            <div class="text">Select</div>
            <i class="dropdown icon"></i>
            <input type="hidden" name="type">
            <div class="menu">
              <div class="item" data-value="1">Administrator</div>
              <div class="item" data-value="2">Moderator</div>
            </div>
          </div>
        </div>
        <div class="field">
          <label>Status</label>
          <div class="ui toggle checkbox" style="margin-top: 10px">
            <input type="checkbox" name="status">
            <label>Active</label>
          </div>
        </div>
      </div>

      <a href="#">
        <div id="bt-cancel" class="ui small red button">Cancel</div>
      </a>
      <a href="#">
        <div id="bt-create-user" class="ui small green submit button">Create</div>
      </a>
    </div>

</div>