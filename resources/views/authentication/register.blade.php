@include('components.header')

<div class="auth-wrapper">
    <div class="auth-left">
        <h5 class="intro">Hi, welcome</h5>
        <h1 class="title">
            CREATE<br>
            ACCOUNT<span>.</span>
        </h1>

        <p class="description">
            Register to access the platform and start building meaningful digital experiences.
        </p>

        <form action="{{ route('register') }}" method="POST" class="auth-form">
            @csrf

            <div class="form-group">
                <label>Full Name</label>
                <input type="text" name="name" placeholder="Enter your full name" required>
            </div>

            <div class="form-group">
                <label>Email Address</label>
                <input type="email" name="email" placeholder="Enter your email" required>
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" placeholder="Create password" required>
            </div>

            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="password_confirmation" placeholder="Confirm password" required>
            </div>

            <button type="submit" class="btn-primary">REGISTER</button>

            <p class="auth-link">
                Already have an account?
                <a href="{{ route('login.form') }}">Login</a>
            </p>
        </form>
    </div>

    <div class="auth-right">
       <img src="{{ asset('images/logo.png') }}" alt="Register Image">
    </div>
</div>

@include('components.footer')
