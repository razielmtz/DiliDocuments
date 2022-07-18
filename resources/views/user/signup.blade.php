<x-template>
    <div class="body container-fluid p-5">
        <div class="container-fluid p-5">
            <div class="container sign-up-header">
                <h1 class="header-text">
                    Sign up
                </h1>
            </div>
            <div class="container sign-up-text top-paragraph">
                <p>
                    Please, fill all the fields to create an account
                </p>
            </div>
        </div>
        <div class="container-fluid d-flex justify-content-center">
            <form method="POST" action="/user" id="signup-form" class="mb-3 p-3">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-12 col-lg-6">
                        <label for="firstName">First Name</label>
                        <input type="text" class="form-control" id="inputFirstName" name="firstName" placeholder="First Name">
                        @error('firstName')
                            <p class=text-danger>{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group col-md-12 col-lg-6">
                        <label for="lastName">Last Name</label>
                        <input type="text" class="form-control" id="inputLastName" name="lastName" placeholder="Last Name">
                        @error('lastName')
                            <p class=text-danger>{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12 col-lg-12">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Email">
                        @error('email')
                            <p class=text-danger>{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12 col-lg-6">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="inputFirstName" name="password">
                        @error('password')
                            <p class=text-danger>{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group col-md-12 col-lg-6">
                        <label for="password_confirmation">Confirm Password</label>
                        <input type="password" class="form-control" id="inputLastName" name="password_confirmation">
                        @error('password_confirmation')
                            <p class=text-danger>{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class="container-fluid d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary">Create account</button>
                </div>
            </form>
        </div>
    </div>
</x-template>