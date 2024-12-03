<x-layout>
    <x-page-heading>New Job</x-page-heading>

    <x-forms.form method="POST" action="{{ route('jobs.store') }}">
        <x-forms.input label='Title' name='title' placeholder="Ceo" />
        <x-forms.input label='Salary' name='salary' placeholder="$90 000" />
        <x-forms.input label='Location' name='location' placeholder="USA" />
        {{-- <x-forms.select label="Schedule" name="schedule">
            <option>Part Time</option>
            <option>Ful; Time</option>
        </x-forms.select> --}}
        <x-forms.input label='URL' name='url' placeholder="https://@example.com" />
        <x-forms.checkbox label="Feature (cost extra)" name="featured" />
        <x-forms.divider />
        <x-forms.input label='Tag (comma separated list)' name='tags' placeholder="video, photo" />

        <x-forms.button>Publish</x-forms.button>
    </x-forms.form>

</x-layout>
