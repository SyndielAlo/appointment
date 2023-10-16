<!DOCTYPE html>
<html>
<head>
    <title>Confirm Password</title>
</head>
<body>
    <header>
        <!-- Include your navigation bar here -->
    </header>

    <div class="container">
        <div class="content">
            <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
                {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
            </div>

            <form method="POST" action="{{ route('password.confirm') }}">
                @csrf

                <!-- Password -->
                <div>
                    <label for="password">{{ __('Password') }}</label>
                    <input id="password" type="password" name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex justify-end mt-4">
                    <button type="submit" class="bg-blue-500 text-white rounded-md p-2">
                        {{ __('Confirm') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
