<x-layout>
    <section class="job-board__section-container">
        <x-job-board.page-heading>Register</x-job-board.page-heading>

        <x-job-board.forms.form method="POST" action="/register" enctype="multipart/form-data">
            <x-job-board.forms.input
                label="Your Name"
                name="name">
            </x-job-board.forms.input>

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

            <x-job-board.forms.input
                label="Password Confirmation"
                name="password_confirmation"
                type="password">
            </x-job-board.forms.input>

            <x-job-board.forms.divider></x-job-board.forms.divider>

            <x-job-board.forms.input
                label="Company Name"
                name="company">
            </x-job-board.forms.input>

            <x-job-board.forms.input
                label="Company Logo"
                name="logo"
                type="file">
                >
            </x-job-board.forms.input>

            <x-job-board.forms.button>
                Create Account
            </x-job-board.forms.button>
        </x-job-board.forms.form>
    </section>
</x-layout>
