<x-layout>
    <div class="hero-section" id="hero_section">
        <form method="post" action="">
            @csrf
            <div class="form-container shadow col-md-6 mx-auto p-4" style="background-color: rgba(255, 255, 255, 0.8);">
                <div class="text-center" id="h2">
                    <h2 class="mt-2 mb-3 text-primary">SIGN UP</h2>
                </div>
                <div>
                    <h3 class="text-info" id="h3">
                        Getting Started:
                    </h3>
                </div>
                <div class="">
                    <label for="name" class="form-label">Name:</label>
                    <input type="name" class="form-control" id="name" name="name" value="{{ old('name') }}"
                        placeholder="Enter Your Name">
                    @error('name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}"
                        placeholder="Enter Email Address">
                    @error('email')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="phone" class="form-label">Phone:</label>
                        <input type="number" class="form-control" id="phone" name="phone" value="{{ old('phone') }}"
                            placeholder="Enter Phone Number">
                        @error('phone')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="dob" class="form-label">Date of Birth:</label>
                        <input type="date" class="form-control" id="dob" name="date_of_birth" value="">
                        @error('date_of_birth')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class=" mb-2">
                    <label for="inputPassword4" class="form-label">Password</label>
                    <input type="password" class="form-control" id="inputPassword4" name="password"
                        placeholder="Enter Password">
                    @error('password')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Sign Up</button>
                </div>
                <p class="text-center">Already have an account? <a href="{{ route('loginform') }}"
                        class="text-decoration-none">Sign In</a></p>
            </div>
        </form>
    </div>
</x-layout>
