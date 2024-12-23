<x-layout>
    <section class="create__section-container">
        <x-job-board.page-heading>Create new Job</x-job-board.page-heading>

        <x-job-board.forms.form method="POST" action="/jobs">

            <x-job-board.forms.input
                label="Title"
                name="title"
                placeholder="Enter job title">
            </x-job-board.forms.input>

            <x-job-board.forms.input
                label="Location"
                name="location"
                placeholder="Enter job location">
            </x-job-board.forms.input>

            <x-job-board.forms.input
                label="Salary"
                name="salary"
                placeholder="Enter job salary">
            </x-job-board.forms.input>

            <x-job-board.forms.input
                label="Tags (comma separated)"
                name="tags"
                placeholder="Enter job tags">
            </x-job-board.forms.input>

            <x-job-board.forms.select label="Schedule" name="schedule">
                <option>Full Time</option>
                <option>Part Time</option>
            </x-job-board.forms.select>

            <x-job-board.forms.checkbox label="Feature (Costs Extra)" name="featured">
            </x-job-board.forms.checkbox>

            <x-job-board.forms.input
                label="URL"
                name="url"
                placeholder="Enter job URL">
            </x-job-board.forms.input>

            <x-job-board.forms.button>
                Create Job
            </x-job-board.forms.button>
        </x-job-board.forms.form>
    </section>
</x-layout>
