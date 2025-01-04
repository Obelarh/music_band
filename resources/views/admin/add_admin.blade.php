<x-layoutt>
    <div class="container ">
        <form action="" method="POST">
            @csrf
            <div class="form-container shadow p-4 col-md-6 mx-auto">
                <h2 class="mb-3">Register Admin</h2>
                <div class="mb-3">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Input Name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Input Email">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone Number:</label>
                    <input type="number" class="form-control" id="phone" name="phone" placeholder="Input Phone Number">
                </div>
                <div class="mb-3">
                    <label for="dob" class="form-label">Date of Birth:</label>
                    <input type="date" class="form-control" id="dob" name="date_of_birth">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password:</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Input Password">
                </div>
                <div>
                    <button type="submit" class="send" id="addadmin">Add Admin</button>
                    
                </div>
            </div>
        </form>
    </div>
</x-layoutt>
