@extends('front.layouts.layout')

@section('content')
    <main>

        <div class="wrapper_content registration">
            <div class="lent_title wrapper_content">
                <h1>Registration form</h1>
            </div>
            @if ($errors->any())
                <div class="alert">
                    <ul class="list-unstyled">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{route('register.store')}}" method="post" class="form-registration">
                @csrf
                <label for="name"
                       class="label-form">Name</label>
                <input type="text"
                       class="input-form"
                       name="name"
                       id="name"
                       placeholder="name"
                       value="{{ old('name') }}"
                >
                <label for="email"
                       class="label-form">E-mail</label>
                <input type="email"
                       class="input-form"
                       name="email"
                       id="email"
                       placeholder="email"
                       value="{{ old('email') }}"
                >
                <label for="password"
                       class="label-form">Password</label>
                <input type="password"
                       class="input-form"
                       name="password"
                       placeholder="password"
                >
                <label for="password_confirmation"
                       class="label-form">Retype password</label>
                <input type="password"
                       class="input-form"
                       name="password_confirmation"
                       placeholder="retype password"
                >
                <button class="btn btn-form purple" type="submit">Register</button>
            </form>
        </div>

    </main>
@endsection
