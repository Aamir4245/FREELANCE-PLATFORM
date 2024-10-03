// Onsubmit Check Username ( !empty ) + Password validation ----------------------------------------------------------------------------------------------------------------------------------------------

document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();
    
    let userName = document.getElementById('userName').value;
    let password = document.getElementById('password').value;
    
    let passwordError = document.getElementById('password-error');
    let userNameError = document.getElementById('username-error');
    
    userNameError.style.color = '#ff6a31';
    passwordError.style.color = '#ff6a31';
    
    userNameError.textContent = '';
    passwordError.textContent = '';

    if (userName === '') {
        userNameError.textContent = 'Please enter your username';
    }

    
    if (password === '') {
        passwordError.textContent = 'Please enter your password.';
    } else if (password.length < 8) {
        passwordError.textContent = 'Password must be at least 8 characters long.';
    } else if (password.length > 18) {
        passwordError.textContent = 'Password must be no more longer than 18 characters.';
    } else {
        passwordError.textContent = '';
    }
    
    if (userNameError.textContent === '' && passwordError.textContent === '') {
        // Login successful!
        this.submit();
        alert('Logged In !');
    }
});


// Fill Time checking Password ----------------------------------------------------------------------------------------------------------------------------------------------

document.getElementById('password').addEventListener('input', function() {
    let password = this.value;
    let passwordError = document.getElementById('password-error');
    
    if (password === '') {
        passwordError.textContent = 'Please enter your password.';
    } else if (password.length < 8) {
        passwordError.textContent = 'Password must be at least 8 characters long';
    } else if (password.length > 18) {
        passwordError.textContent = 'Password must be no longer than 18 characters';
    } else {
        passwordError.textContent = '';
    }
});


// Password Show , Hide  ----------------------------------------------------------------------------------------------------------------------------------------------


document.getElementById('toggle-password-icon').addEventListener('click', function() {
    let passwordInput = document.getElementById('password');
    let eyeOpenIcon = document.getElementById('eye-open-icon');
    let eyeCloseIcon = document.getElementById('eye-close-icon');
    
    if (passwordInput.getAttribute('type') === 'password') {
        passwordInput.setAttribute('type', 'text');
        eyeOpenIcon.style.display = 'block';
        eyeCloseIcon.style.display = 'none';
    } else {
        passwordInput.setAttribute('type', 'password');
        eyeOpenIcon.style.display = 'none';
        eyeCloseIcon.style.display = 'block';
    }
});