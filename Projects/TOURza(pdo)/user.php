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