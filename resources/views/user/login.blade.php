<x-layout>

    <div class="hero-section" id="hero_section">
        <form action="" method="POST">
            <div class="form-container shadow p-4 col-md-6 mx-auto offset-md-3" style="background-color: rgba(255, 255, 255, 0.8);">
                @csrf
                <div class="col-md-6">
                    <h2 class="text-center mt-2 mb-3 text-primary">Welcome Back🤗</h2>
                </div>
                <div class="@error('email') border-danger @enderror">
                    @error('failed')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" id="email" class="form-control" placeholder="Enter Your Email Address" name="email">
                    @error('email')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="@error('password') border-danger @enderror">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
                    @error('password')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mt-3">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
                <p><a href="#" class="text-decoration-none">Forgot Password</a></p>
                <p class="text-center">Don't have an account? <a href="{{ route('signupform') }}"
                        class="text-decoration-none">Sign Up</a></p>
            </div>
        </form>
    </div>

</x-layout>
