<x-layout>
    <x-form title="Log in to your account" description="Glad to see you again!">
        <form action="/login" method="POST">
            @csrf

            <x-form.field name="email" label="Email" type="email" />
            <x-form.field name="password" label="Password" type="password" />

            <button type="submit" class=" btn mt-2 w-full" data-test="login-button">
                Sign in
            </button>
        </form>
    </x-form>
</x-layout>
