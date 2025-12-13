@include('components.header')
@include('components.header')

<div class="auth-wrapper">
    <div class="auth-left">
        <h5 class="intro">Welcome back</h5>
        <h1 class="title">
            LOGIN<span>.</span><br>
            
        </h1>

        <p class="description">
            Sign in to continue and access your dashboard.
        </p>

        <form action="{{ route('login') }}" method="POST" class="auth-form">
            @csrf

            <div class="form-group">
                <label>Email Address</label>
                <input type="email" name="email" placeholder="Enter your email" required>
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" placeholder="Enter your password" required>
            </div>

            <button type="submit" class="btn-primary">LOGIN</button>

            <p class="auth-link">
                Don’t have an account?
                <a href="{{ route('register.form') }}">Register</a>
            </p>
        </form>
    </div>

    <div class="auth-right">
        <img src="{{ asset('images/logo1.png') }}" alt="Login Image">
    </div>
</div>




