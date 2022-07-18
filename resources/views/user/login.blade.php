<x-template>
    <div class="body container-fluid p-5">
        <div class="container-fluid p-5">
            <div class="container contact-header">
                <h1 class="header-text">
                    Log in
                </h1>
            </div>
            <div class="container contact-text">
                <p>
                    Please, fill all the fields to log in
                </p>
            </div>
        </div>
        <div class="container-fluid d-flex justify-content-center">
            <form method="POST" action="/user/authentication" id="login-form" class="mb-3 p-3">
                @csrf
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
                    <div class="form-group col-md-12 col-lg-12">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="inputFirstName" name="password">
                        @error('password')
                            <p class=text-danger>{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class="container-fluid d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary">Log in</button>
                </div>
            </form>
        </div>
    </div>
</x-template>