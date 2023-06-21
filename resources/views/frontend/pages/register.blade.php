@extends('frontend.layout.app')

@section('content')
    <section class="container">
        <div class="row justify-content-center align-content-center">

            <div class="col-5">
                <h2 class="text-center">Register</h2>

                <form action="{{ route('createUser') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" placeholder="Enter name" id="name" name="name" />
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="email" class="form-control" placeholder="Enter email" id="email"
                            name="email" />
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" placeholder="Enter password" id="password"
                            name="password" />
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
            </div>

        </div>
    </section>
@endsection
