<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Email</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 p-6">
    <div class="max-w-3xl mx-auto bg-white p-6 rounded shadow">
        <h1 class="text-2xl font-bold mb-4">Create Email</h1>

        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('send.email') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label class="block font-medium">Name</label>
                <input type="text" name="name" value="{{ old('name') }}" class="w-full border rounded p-2">
            </div>

            <div>
                <label class="block font-medium">Subject</label>
                <input type="text" name="subject" value="{{ old('subject') }}" class="w-full border rounded p-2">
            </div>
            <div>
                <label class="block font-medium">Content</label>
                <textarea name="content" rows="4" class="w-full border rounded p-2">{{ old('content') }}</textarea>
            </div>

            <div>
                <label class="block font-medium">Or Add New Account</label>
                <input type="email" name="new_account_mail" value="{{ old('new_account_mail') }}"
                    placeholder="user@example.com" class="w-full border rounded p-2">
                <p class="text-gray-500 text-sm">If you fill this, a new account will be created automatically.</p>
            </div>

            <div>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Create
                    Email</button>
            </div>
        </form>
    </div>
</body>

</html>
