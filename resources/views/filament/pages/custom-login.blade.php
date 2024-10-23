<x-filament-panels::page.simple class="custom-login-page flex flex-row items-center justify-center min-h-screen bg-gray-100">
    <div class="login-container bg-white p-8 rounded-lg shadow-md max-w-md w-full">
        @if (filament()->hasRegistration())
            <x-slot name="subheading">
                <div class="text-center mb-6">
                    {{ __('filament-panels::pages/auth/login.actions.register.before') }}
                    {{ $this->registerAction }}
                </div>
            </x-slot>
        @endif

        {{ \Filament\Support\Facades\FilamentView::renderHook('panels::auth.login.form.before') }}

        <x-filament-panels::form wire:submit="authenticate">
            {{ $this->form }}

            <x-filament-panels::form.actions
                :actions="$this->getCachedFormActions()"
                :full-width="$this->hasFullWidthFormActions()"
                class="mt-6"
            />
        </x-filament-panels::form>

        {{ \Filament\Support\Facades\FilamentView::renderHook('panels::auth.login.form.after') }}
    </div>
</x-filament-panels::page.simple>
