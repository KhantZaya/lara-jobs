<x-layout>
    <x-slot:heading>
        Create Account
    </x-slot:heading>
    <form method="POST" action="/register" class="mx-auto p-6 bg-white rounded-lg">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-200 pb-8">
                <h2 class="text-base font-semibold text-gray-900">Sign Up</h2>
                <p class="mt-1 text-sm text-gray-500">
                    Join the Community
                </p>

                <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <!-- First Name -->
                    <x-form-field>
                        <x-form-label for="first-name">First Name</x-form-label>
                        <x-form-input id="first-name" name="first-name" type="text"  />
                        <x-form-error name="first-name" />
                    </x-form-field>

                    <!-- Last Name -->
                    <x-form-field>
                        <x-form-label for="last-name">Last Name</x-form-label>
                        <x-form-input id="last-name" name="last-name" type="text"  />
                        <x-form-error name="last-name" />
                    </x-form-field>

                    <!-- Email -->
                    <x-form-field>
                        <x-form-label for="email">Email</x-form-label>
                        <x-form-input id="email" name="email" type="text"  />
                        <x-form-error name="email" />
                    </x-form-field>

                    <!-- Password -->
                    <x-form-field>
                        <x-form-label for="password">Password</x-form-label>
                        <x-form-input id="password" name="password" type="password"  />
                        <x-form-error name="password" />
                    </x-form-field>

                    <!-- Password -->
                    <x-form-field>
                        <x-form-label for="password_confirmation">Confirm Password</x-form-label>
                        <x-form-input id="password_confirmation" name="password_confirmation" type="password"  />
                        <x-form-error name="password_confirmation" />
                    </x-form-field>
                </div>
            </div>

            <!-- Actions -->
            <div class="flex items-center justify-end gap-x-6">
                <a href='/' type="button" class="text-sm font-semibold text-gray-700 hover:text-gray-900">
                    Cancel
                </a>
                <x-form-button> Register </x-form-button>
            </div>
        </div>
    </form>

</x-layout>
