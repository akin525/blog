<x-guest-layout>
    <div class="col-12 col-lg-6 bg-primary-4 hp-bg-color-dark-90 position-relative">
        <div class="row hp-image-row h-100 px-8 px-sm-16 px-md-0 pb-32 pb-sm-0 pt-32 pt-md-0">
            <div class="col-12 hp-logo-item m-16 m-sm-32 m-md-64 w-auto px-0">
                <img class="hp-dark-none" src="https://yoda.hypeople.studio/yoda-admin-template/app-assets/img/logo/logo-vector-blue.svg" alt="Logo">
                <img class="hp-dark-block" src="https://yoda.hypeople.studio/yoda-admin-template/app-assets/img/logo/logo-vector.svg" alt="Logo">
            </div>

            <div class="col-12">
                <div class="row align-items-center justify-content-center h-100">
                    <div class="col-12 col-md-10 hp-bg-item text-center mb-32 mb-md-0">
                        <img class="hp-dark-none m-auto" src="https://yoda.hypeople.studio/yoda-admin-template/app-assets/img/pages/authentication/authentication-bg.svg" alt="Background Image">
                        <img class="hp-dark-block m-auto" src="https://yoda.hypeople.studio/yoda-admin-template/app-assets/img/pages/authentication/authentication-bg-dark.svg" alt="Background Image">
                    </div>

                    <div class="col-12 col-md-11 col-lg-9 hp-text-item text-center">
                        <h2 class="text-primary-1 hp-text-color-dark-0 mx-16 mx-lg-0 mb-16">Very good works are waiting for you 🤞</h2>
                        <p class="mb-0 text-black-80 hp-text-color-dark-30">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-6 py-sm-64 py-lg-0">
        <div class="row align-items-center justify-content-center h-100 mx-4 mx-sm-n32">
            <div class="col-12 col-md-9 col-xl-7 col-xxxl-5 px-8 px-sm-0 pt-24 pb-48">
                <h1 class="mb-0 mb-sm-24">Login</h1>
                <p class="mt-sm-8 mt-sm-0 text-black-60">Welcome back, please login to your account.</p>
                <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="alert alert-danger" :errors="$errors" />

        <form class="mt-16 mt-sm-32 mb-8" method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-16">
                <label for="loginUsername" class="form-label">Email :</label>
                <input type="email" class="form-control" name="email" id="loginUsername">
            </div>

            <div class="mb-16">
                <label for="loginPassword" class="form-label">Password :</label>
                <input type="password" name="password" class="form-control" id="loginPassword">
            </div>

            <div class="row align-items-center justify-content-between mb-16">
                <div class="col hp-flex-none w-auto">
                    <div class="form-check">
                        <input type="checkbox" name="remember" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label ps-4" for="exampleCheck1">Remember me</label>
                    </div>
                </div>

                <div class="col hp-flex-none w-auto">
                    <a class="hp-button text-black-80 hp-text-color-dark-40" href="{{ route('password.request') }}">Forgot Password?</a>
                </div>
            </div>

            <button type="submit" class="btn btn-primary w-100">Sign in</button>
        </form>

                <div class="col-12 hp-form-info">
                    <span class="text-black-80 hp-text-color-dark-40 hp-caption me-4">Don’t you have an account?</span>
                    <a class="text-primary-1 hp-text-color-dark-primary-2 hp-caption" href="{{ route('register') }}">Create an account</a>
                </div>

                <div class="col-12 hp-or-line text-center mt-32">
                    <span class="hp-caption text-black-80 hp-text-color-dark-30 px-16 bg-black-0 hp-bg-color-dark-100">Or</span>
                </div>

                <div class="col-12 hp-account-buttons mt-32">
                </div>

                <div class="col-12 hp-other-links mt-24">
                    <a href="javascript:;" class="text-black-80 hp-text-color-dark-40">Privacy Policy</a>
                    <a href="javascript:;" class="text-black-80 hp-text-color-dark-40">Term of use</a>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
