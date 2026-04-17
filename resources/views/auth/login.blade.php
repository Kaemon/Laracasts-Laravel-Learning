<x-layout>
<x-form.form title="Login" subtitle="Glad to have you back.">
    <form action="/login" method="POST" class ="mt-10 space-y-4">
        @csrf
        <x-form.field label="Email" type="email" name="email" required />
        <x-form.field label="Password" type="password" name="password" required />
        <button type="submit" class="btn w-full h-10 mt-4" data-test="login-button">Login</button>
    </form>
</x-form.form>
</x-layout>