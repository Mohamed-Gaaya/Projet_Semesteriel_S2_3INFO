<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <title>Document</title>
    <style>
        @import url("https://fonts.googleapis.com/css?family=Raleway:400,700");
        *, *:before, *:after {
        box-sizing: border-box;
        }

        body {
        min-height: 100vh;
        font-family: "Raleway", sans-serif;
        }

        .container {
        position: absolute;
        width: 100%;
        height: 100%;
        overflow: hidden;
        }
        .container:hover .top:before, .container:hover .top:after, .container:hover .bottom:before, .container:hover .bottom:after, .container:active .top:before, .container:active .top:after, .container:active .bottom:before, .container:active .bottom:after {
        margin-left: 200px;
        transform-origin: -200px 50%;
        transition-delay: 0s;
        }
        .container:hover .center, .container:active .center {
        opacity: 1;
        transition-delay: 0.2s;
        }

        .top:before, .top:after, .bottom:before, .bottom:after {
        content: "";
        display: block;
        position: absolute;
        width: 200vmax;
        height: 200vmax;
        top: 50%;
        left: 50%;
        margin-top: -100vmax;
        transform-origin: 0 50%;
        transition: all 0.5s cubic-bezier(0.445, 0.05, 0, 1);
        z-index: 10;
        opacity: 0.65;
        transition-delay: 0.2s;
        }

        .top:before {
        transform: rotate(45deg);
        background: #5B5255;
        }
        .top:after {
        transform: rotate(135deg);
        background: #ffb4f1;
        }

        .bottom:before {
        transform: rotate(-45deg);
        background: #db4cb4;
        }
        .bottom:after {
        transform: rotate(-135deg);
        background: #71686B;
        }

        .center {
        position: absolute;
        width: 400px;
        height: 400px;
        top: 50%;
        left: 50%;
        margin-left: -200px;
        margin-top: -200px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 30px;
        opacity: 0;
        transition: all 0.5s cubic-bezier(0.445, 0.05, 0, 1);
        transition-delay: 0s;
        color: #333;
        }
        .center input {
        width: 100%;
        padding: 15px;
        margin: 5px;
        border-radius: 1px;
        border: 1px solid #ccc;
        font-family: inherit;
        }
    </style>
</head>
<body>
<div class="container" onclick="onclick">
  <div class="top"></div>
  <div class="bottom"></div>
  <div class="center">
    <x-guest-layout>
        <x-jet-authentication-card>
            <x-slot name="logo">
            </x-slot>
        <div>
            <img src="assets/cancer.png" alt="">
        </div>

            <x-jet-validation-errors class="mb-4" />

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div>
                    <label for="email" value="{{ __('Email') }}" >
                    <input placeholder="email" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                </div>

                <div class="mt-4">
                    <label for="password" value="{{ __('Password') }}">
                    <input id="password" placeholder="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                </div>
                
                <div class="block mt-4">
                    <label for="remember_me" class="flex items-center">
                        <checkbox id="remember_me" name="remember" />
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-white-600 hover:text-white-900" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                    <x-jet-button class="ml-4">
                        {{ __('Log in') }}
                    </x-jet-button>
                </div>
            </form>
        </x-jet-authentication-card>
        </x-guest-layout>
    </div>
</div>

</body>
</html>
