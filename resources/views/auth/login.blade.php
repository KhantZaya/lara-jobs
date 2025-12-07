<x-layout>
    <x-slot:heading>
        Create Account
    </x-slot:heading>
    <form method="POST" action="/login" class="mx-auto p-6 bg-white rounded-lg">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-200 pb-8">
                <h2 class="text-base font-semibold text-gray-900">Log-In</h2>
                <p class="mt-1 text-sm text-gray-500">
                    Just One Step Away : Please Verify Identity
                </p>

                <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                    <!-- Email -->
                    <x-form-field>
                        <x-form-label for="email">Email</x-form-label>
                        <x-form-input :value="old('email')" id="email" name="email" type="text"  />
                        <x-form-error name="email" />
                    </x-form-field>

                    <!-- Password -->
                    <x-form-field>
                        <x-form-label for="password">Password</x-form-label>
                        <x-form-input id="password" name="password" type="password"  />
                        <x-form-error name="password" />
                    </x-form-field>

                </div>
            </div>

            <!-- Actions -->
            <div class="flex items-center justify-end gap-x-4">
                <a href='/' type="button" class="text-sm font-semibold text-gray-700 hover:text-gray-900">
                    Cancel
                </a>
                <x-form-button> Login </x-form-button>
            </div>
        </div>
    </form>

</x-layout>
