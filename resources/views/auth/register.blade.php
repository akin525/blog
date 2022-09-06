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
                <h1 class="mb-0 mb-sm-24">Create Account</h1>
                <p class="mt-sm-8 mt-sm-0 text-black-60">Please sign up to your personal account if you want to use all our premium products.</p>

                <!-- Validation Errors -->
        <x-auth-validation-errors class="alert alert-danger" :errors="$errors" />

        <form class="mt-16 mt-sm-32 mb-8" method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mb-24">
                <label for="registerUsername" class="form-label">Username :</label>
                <input type="text" name="username" class="form-control" id="registerUsername" required>
            </div>
            <div class="mb-24">
                <label for="registerUsername" class="form-label">Phone Number :</label>
                <input type="number" name="number" class="form-control" id="registerUsername" required>
            </div>
            <div class="mb-24">
                <label for="registerUsername" class="form-label">Full Name :</label>
                <input type="text" name="name" class="form-control" id="registerUsername" required>
            </div>
            <div class="mb-24">
                <label for="registerEmail" class="form-label">E-mail :</label>
                <input type="email" name="email" class="form-control" id="registerEmail" required>
            </div>

            <div class="mb-24">
                <label for="registerPassword" class="form-label">Password :</label>
                <input type="password" name="password" class="form-control" id="registerPassword" required>
            </div>

            <div class="mb-24">
                <label for="registerConfirmPassword" class="form-label">Confirm Password :</label>
                <input type="password" name="password_confirmation" class="form-control" id="registerConfirmPassword" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">
                Sign up
            </button>
        </form>

                <div class="col-12 hp-form-info">
                    <span class="text-black-80 hp-text-color-dark-40 hp-caption me-4">Already have an account?</span>
                    <a class="text-primary-1 hp-text-color-dark-primary-2 hp-caption" href="{{route('login')}}">Login</a>
                </div>

                <div class="col-12 hp-other-links mt-24">
                    <a href="javascript:;" class="text-black-80 hp-text-color-dark-40">Privacy Policy</a>
                    <a href="javascript:;" class="text-black-80 hp-text-color-dark-40">Term of use</a>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
