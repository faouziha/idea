<x-layout>
    <x-form title="Register an account" description="Start tracking your ideas today.">
        <form action="/register" method="POST">
            @csrf
            
            <x-form.field name="name" label="Name" type="text" />
            <x-form.field name="email" label="Email" type="email" />
            <x-form.field name="password" label="Password" type="password" />



            {{-- <div class="mb-4">
                <label for="email" class="block text-sm font-medium mb-1">Email</label>
                <input type="email" name="email" id="email" required
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:ring-indigo-200">
            </div>

            <div class="mb-6">
                <label for="password" class="block text-sm font-medium mb-1">Password</label>
                <input type="password" name="password" id="password" required
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:ring-indigo-200">
            </div> --}}

            <button type="submit" class=" btn mt-2 w-full">
                Register
            </button>
        </form>
    </x-form>
</x-layout>
