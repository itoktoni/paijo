<x-layout>
    <x-card>
        <x-form :model="$model">
            <x-action form="form" />

            @bind($model)

            <x-form-input col="6" name="it_nama" />

            @endbind

        </x-form>
    </x-card>
</x-layout>
