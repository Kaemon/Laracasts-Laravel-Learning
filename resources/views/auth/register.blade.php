<x-layout>
<x-form.form title="Register an Account" subtitle="Starts tracking your ideas today.">
    <form action="/register" method="POST" class ="mt-10 space-y-4">
                @csrf
                <x-form.field label="Name" type="text" name="name" required />
                <x-form.field label="Email" type="email" name="email" required />
                <x-form.field label="Password" type="password" name="password" required />
                <button type="submit" class="btn w-full h-10 mt-4" data-test="register-button">Register</button>
            </form>
</x-form.form>
</x-layout>