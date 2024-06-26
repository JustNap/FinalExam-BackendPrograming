
<!DOCTYPE html>
<html lang="en" class="h-full bg-white">
<head>
    <meta charset="UTF-8">
    @vite('resources/css/app.css')
    <title>Login</title>
</head>
<body class="h-full">
<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
<div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Login to your account</h2>
</div>

<div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    <form class="space-y-6" action="{{ route('login') }}" method="POST">
    @csrf
    <div>
        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
        <div class="mt-2">
        <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
    </div>

    <div class="relative">
                <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
        <div class="password-wrapper mt-2 relative">
            <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            <svg id="togglePassword" class="absolute right-0 top-1/2 transform -translate-y-1/2 h-5 w-5 text-gray-400 cursor-pointer" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5a9 9 0 00-1.715 17.69A8.962 8.962 0 009 19c5 0 9-4 9-9s-4-9-9-9z"/>
            </svg>
        </div>
    </div>
    <div class="text-sm">
        <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500">Forgot password?</a>
    </div>

    <div>
        <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Log in</button>
    </div>
    </form>

    <p class="mt-10 text-center text-sm text-gray-500">
    Didn't have account?
    <a href="/register" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Register</a>

    </p>
</div>
</div>

<script>
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#password');

    togglePassword.addEventListener('click', function() {
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);

        if (type === 'text') {
            togglePassword.classList.remove('text-gray-400');
            togglePassword.classList.add('text-indigo-600');
        } else {
            togglePassword.classList.remove('text-indigo-600');
            togglePassword.classList.add('text-gray-400');
        }
    });
</script>
</body>
</html>
