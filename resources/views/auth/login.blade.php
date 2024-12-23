<x-layout>
    <section class="job-board__section-container">
        <x-job-board.page-heading>Login</x-job-board.page-heading>

        <x-job-board.forms.form method="POST" action="/login">
            <x-job-board.forms.input
                label="Email"
                name="email"
                type="email">
            </x-job-board.forms.input>

            <x-job-board.forms.input
                label="Password"
                name="password"
                type="password">
            </x-job-board.forms.input>

            <x-job-board.forms.button>
                Login
            </x-job-board.forms.button>
        </x-job-board.forms.form>
    </section>
</x-layout>
