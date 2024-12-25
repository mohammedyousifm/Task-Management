// Toggle password visibility
const passwordInput = document.getElementById('password');
const togglePassword = document.getElementById('toggle-password');
const form = document.getElementById('Validate-password');
const passwordError = document.getElementById('password-error');

// Toggle password visibility
if (togglePassword && passwordInput) {
    togglePassword.addEventListener('click', function () {
        const isPassword = passwordInput.getAttribute('type') === 'password';
        passwordInput.setAttribute('type', isPassword ? 'text' : 'password');
        togglePassword.textContent = isPassword ? '🙈' : '👁️';
    });
}

// Validate password on form submission
if (form) {
    form.addEventListener('submit', function (event) {
        const password = passwordInput.value;

        // Regular expression to check password requirements
        const passwordRegex = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*?&#.])[A-Za-z\d@$!%*?&#.]{8,}$/;

        if (!passwordRegex.test(password)) {
            event.preventDefault(); // Prevent form submission
            passwordError.textContent =
                'Password must be at least 8 characters long, include at least one letter, one number, and one special character.';
            passwordError.classList.remove('hidden');
        } else {
            passwordError.classList.add('hidden');
        }
    });
}
