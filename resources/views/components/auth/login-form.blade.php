<style>
    body {
        background: linear-gradient(90deg, rgba(60, 21, 88, 1) 0%, rgba(9, 98, 121, 1) 48%, rgba(13, 69, 136, 0.989233193277311) 100%);
    }

    .password-wrapper {
        position: relative;
        /* display: inline-block; */
    }

    .toggle-icon {
        position: absolute;
        right: 18px;
        top: 50%;
        transform: translateY(-50%);
        cursor: pointer;
    }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7 animated fadeIn col-lg-6 center-screen">
            <div class="card w-90  p-4">
                <div class="card-head text-center">
                    <img src="{{ asset('logo/ro.png') }}" alt="" style="width: 20%;">
                </div>
                <div class="card-body">
                    <h3 class="text-center">PROMOTION BOARD RO</h3>
                    <h4 class="text-center">PLEASE SIGN IN</h4>
                    <br />
                    <div class="form-group">
                        <input id="email" placeholder="Email Address" class="form-control" type="email" />
                    </div>
                    <div class="form-group password-wrapper">
                        <input id="password" placeholder="Password" class="form-control" type="password" />
                        <span id="togglePassword" class="toggle-icon">👁️</span>
                    </div>

                    <button onclick="SubmitLogin()" class="btn w-100 bg-gradient-primary">Login</button>
                    <hr />

                </div>
            </div>
        </div>
    </div>
</div>


<script>
    async function SubmitLogin() {
        let email = document.getElementById('email').value;
        let password = document.getElementById('password').value;

        if (email.length === 0) {
            errorToast("Email is required");
        } else if (password.length === 0) {
            errorToast("Password is required");
        } else {
            showLoader();
            let res = await axios.post("/user-login", {
                email: email,
                password: password
            });
            hideLoader()
            if (res.status === 200 && res.data['status'] === 'success') {
                if (res.data['userType']['type'] === 1) {
                    window.location.href = "/dashboard";
                } else if (res.data['userType']['type'] === 2) {
                    window.location.href = "/pb/pb-home";
                } else if (res.data['userType']['type'] === 7) {
                    window.location.href = "/pb-home-base";
                } else if (res.data['userType']['type'] === 6) {
                    window.location.href = "/eb-home";
                } else {
                    errorToast("Invalid User Type");
                }
            } else {
                errorToast(res.data['message']);
            }
        }
    }
</script>
<script>
    // Get password input and toggle icon
    const passwordInput = document.getElementById('password');
    const togglePassword = document.getElementById('togglePassword');

    // Add click event to toggle icon
    togglePassword.addEventListener('click', function() {
        // Toggle password visibility
        const type = passwordInput.type === 'password' ? 'text' : 'password';
        passwordInput.type = type;

        // Change icon (optional)
        this.textContent = type === 'password' ? '👁️' : '🙈';
    });
</script>
