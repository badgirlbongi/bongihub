<div class="form-buttons" id="form-buttons">
        <button onclick="showLoginForm()">Login</button>
        <button onclick="showSignUpForm()">Sign-up</button>
      </div>

      <script>
        const formButtons = document.getElementById('form-buttons');

        document.getElementById('toggle-form').addEventListener('click', function() {
          formButtons.style.display = (formButtons.style.display === 'none' || formButtons.style.display === '') ? 'block' : 'none';
        });

        function showLoginForm() {
          alert('Login form will be displayed here.');
        }

        function showSignUpForm() {
          alert('Sign-up form will be displayed here.');
        }
      </script>

<div id="login-form" style="display: none;">
    <h2>Login Form</h2>
        Username: <input type="text" name="username"><br>
        Password: <input type="password" name="password"><br>
        <input type="submit" value="Login">
</div>

<div id="signup-form" style="display: none;">
    <h2>Sign-up Form</h2>
        Username: <input type="text" name="username"><br>
        Password: <input type="password" name="password"><br>
        Re-enter Password: <input type="password" name="password"><br>
        <input type="submit" value="Sign Up">
</div>

<div class="form-buttons" id="form-buttons">
  <button onclick="showLoginForm()">Login</button>
  <button onclick="showSignUpForm()">Sign-up</button>
</div>

<script>
  const loginForm = document.getElementById('login-form');
  const signUpForm = document.getElementById('signup-form');

  function showLoginForm() {
    loginForm.style.display = 'block';
    signUpForm.style.display = 'none';
  }

  function showSignUpForm() {
    signUpForm.style.display = 'block';
    loginForm.style.display = 'none';
  }
</script>
