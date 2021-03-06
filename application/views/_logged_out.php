<a class="right floated item" id="login">
    Log In
    <i class="lock icon"></i>
</a>

<div class="ui modal">
  <div class="ui middle aligned center aligned grid">
  <div class="column">
    <h2 class="ui black image header">
        <i class="big lock icon"></i>
      <div class="content">
        Log-in to your account
      </div>
    </h2>
    <form class="ui large form" action="{url}/login" method="POST">
      <div class="ui stacked segment">
        <div class="field">
          <div class="ui left icon input">
            <i class="user icon"></i>
            <input type="text" name="userid" placeholder="User ID" value="{login_name}">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <input type="password" name="password" placeholder="Password">
          </div>
        </div>
        <div class="ui fluid large black submit button">Login</div>
      </div>

        <div class="ui {login_errors_visible} error message">{login_errors}</div>

    </form>

    <div class="ui message">
      New to us? <a href="signup">Sign Up</a>
    </div>
  </div>
  </div>
</div>

{login_active}