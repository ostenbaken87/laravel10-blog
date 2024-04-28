@extends('front.layouts.layout')

@section('content')
    <main>

        <div class="wrapper_content registration">
            <div class="lent_title wrapper_content">
                <h1>Login form</h1>
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
            @if(session()->has('error'))
                <div class="alert">
                    {{ session('error') }}
                </div>
            @endif
            <form action="{{route('login')}}" method="post" class="form-registration">
                @csrf
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
                <button class="btn btn-form purple" type="submit">Login</button>
            </form>
        </div>

    </main>
@endsection
