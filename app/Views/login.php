<?php include 'templates/admin-header.php' ?>
<style>
 /* Global styles */
 body {
        font-family: 'Roboto', sans-serif;
        background: linear-gradient(to bottom right, #4e81e0, #6eafff);
        margin: 0;
        color: #333;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }

    .container-fluid {
        max-width: 1200px;
        margin: auto;
        background: #fff;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        display: flex;
        flex-wrap: wrap;
    }

    .login-section {
        display: flex;
        width: 100%;
    }

    .login-box {
        flex: 1;
        padding: 2rem 3rem;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .image-section {
        flex: 1;
        background: #f7f9fc;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .image-section img {
        max-width: 100%;
        height: auto;
        border-radius: 0 15px 15px 0;
    }

    .login-title {
        font-size: 2rem;
        font-weight: bold;
        color: #333;
        margin-bottom: 0.5rem;
    }

    .login-subtitle {
        font-size: 1rem;
        color: #555;
        margin-bottom: 2rem;
    }

    .form-group {
        position: relative;
        margin-bottom: 1.5rem;
    }

    .form-control {
        width: 100%;
        padding: 12px 16px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background: #f9f9f9;
        font-size: 1rem;
        color: #333;
        transition: all 0.3s ease;
    }

    .form-control:focus {
        border-color: #4e81e0;
        background: #fff;
        box-shadow: 0 0 8px rgba(78, 129, 224, 0.3);
        outline: none;
    }

    .form-label {
        position: absolute;
        top: 50%;
        left: 16px;
        transform: translateY(-50%);
        font-size: 1rem;
        color: #999;
        pointer-events: none;
        transition: all 0.3s ease;
    }

    .form-control:focus ~ .form-label,
    .form-control:not(:placeholder-shown) ~ .form-label {
        top: 8px;
        left: 12px;
        font-size: 0.85rem;
        color: #4e81e0;
    }

    .btn-primary {
        width: 100%;
        padding: 12px 16px;
        border: none;
        border-radius: 5px;
        background: #4e81e0;
        color: #fff;
        font-size: 1rem;
        cursor: pointer;
        transition: background 0.3s ease;
    }

    .btn-primary:hover {
        background: #3c6cc1;
    }

    .forgot-password {
        color: #4e81e0;
        font-size: 0.9rem;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .forgot-password:hover {
        color: #3c6cc1;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .container-fluid {
            flex-direction: column;
        }

        .image-section img {
            border-radius: 0;
        }

        .login-box {
            text-align: center;
        }
    }
/* Remember me section */
.remember-section {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 1.5rem;
    gap: 1rem;
}

.form-check {
    position: relative;
    display: flex;
    align-items: center;
    cursor: pointer;
}

.form-check-input {
    width: 20px;
    height: 20px;
    border: 2px solid #ccc;
    border-radius: 4px;
    background: #fff;
    cursor: pointer;
    position: relative;
    appearance: none;
    outline: none;
    transition: all 0.3s ease;
}

.form-check-input:checked {
    background: #ff7f50; /* Orange Nosy Be Paradise Tours */
    border-color: #ff7f50;
}

.form-check-input::after {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%) scale(0);
    width: 10px;
    height: 10px;
    background: #fff;
    border-radius: 2px;
    transition: transform 0.2s ease;
}

.form-check-input:checked::after {
    transform: translate(-50%, -50%) scale(1);
}

.form-check-label {
    margin-left: 0.5rem;
    color: #333;
    font-size: 1rem;
    cursor: pointer;
    transition: color 0.3s ease;
}

.form-check-input:checked ~ .form-check-label {
    color: #ff7f50;
}

/* Forgot Password Link */
.forgot-password {
    font-size: 0.9rem;
    color: #4e81e0;
    text-decoration: none;
    transition: color 0.3s ease;
}

.forgot-password:hover {
    color: #3c6cc1;
}

/* Button Styles */
.btn-primary {
    background-color: #ff7f50; /* Orange Nosy Be Paradise Tours */
    border: none;
    padding: 12px 16px;
    border-radius: 5px;
    color: #fff;
    font-size: 1rem;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn-primary:hover {
    background-color: #e0663d; /* Slightly darker shade */
}

.btn-full-width {
    width: 100%; /* Matches the width of input fields */
}
/* Form group styling */
.form-group {
    margin-bottom: 1.5rem;
}

/* Input wrapper for icon and input */
.input-wrapper {
    position: relative;
    display: flex;
    align-items: center;
    width: 100%;
}

.input-wrapper .icon {
    position: absolute;
    left: 10px;
    color: #999;
    font-size: 1.2rem;
    transition: color 0.3s ease;
}

.input-wrapper .form-control {
    width: 100%;
    padding: 10px 10px 10px 40px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 1rem;
    transition: border-color 0.3s ease, box-shadow 0.3s ease;
}

/* Focus styles for input */
.input-wrapper .form-control:focus {
    border-color: #ff7f50;
    box-shadow: 0 0 5px rgba(255, 127, 80, 0.4);
    outline: none;
}

.input-wrapper .form-control:focus ~ .icon {
    color: #ff7f50;
}

/* Button styling */
.btn-primary {
    background-color: #ff7f50; /* Orange Nosy Be Paradise Tours */
    border: none;
    padding: 12px 16px;
    border-radius: 5px;
    color: #fff;
    font-size: 1rem;
    cursor: pointer;
    transition: background-color 0.3s ease;
    width: 100%; /* Matches the width of inputs */
}

.btn-primary:hover {
    background-color: #e0663d; /* Slightly darker shade */
}

/* Error message styling */
.text-danger {
    font-size: 0.85rem;
}
</style>

<div class="container-fluid">
    <div class="login-section">
        <div class="login-box">
            <h3 class="login-title">Login to Administration</h3>
            <p class="login-subtitle"></p>
            <form action="/auth/login" method="POST" id="loginForm">
                <div class="form-group">
                    <div class="input-wrapper">
                        <i class="icon fa fa-message"></i>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
                    </div>
                    <div id="emailError" class="text-danger mt-2" style="display: none;">Please enter a valid email address.</div>
                </div>
                <div class="form-group">
                    <div class="input-wrapper">
                        <i class="icon fas fa-lock"></i>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Your Password" required>
                    </div>
                    <div id="passwordError" class="text-danger mt-2" style="display: none;">Password is required.</div>
                </div>
                <div class="d-flex justify-content-between align-items-center mb-4 remember-section">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="rememberMe" name="remember">
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                    </div>
                    <a href="#" class="forgot-password">Forgot Password?</a>
                </div>
                <button type="submit" class="btn btn-primary btn-full-width">Log In</button>
            </form>
        </div>
        <div class="image-section">
            <img src="/assets/images/cover/login.jpg" alt="Login">
        </div>
    </div>
</div>

    <script>
         document.getElementById("loginForm").addEventListener("submit", function(event) {
        let valid = true;

        // Clear previous errors
        document.getElementById("emailError").style.display = "none";
        document.getElementById("passwordError").style.display = "none";

        // Email validation
        const email = document.getElementById("email").value;
        const emailError = document.getElementById("emailError");
        const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;

        if (!emailRegex.test(email)) {
            emailError.style.display = "block";
            valid = false;
        }

        // Password validation
        const password = document.getElementById("password").value;
        const passwordError = document.getElementById("passwordError");

        if (password.trim() === "") {
            passwordError.style.display = "block";
            valid = false;
        }

        // If invalid, prevent form submission
        if (!valid) {
            event.preventDefault();
        }
    });
    </script>