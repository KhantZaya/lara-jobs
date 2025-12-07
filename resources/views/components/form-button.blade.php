<button type="submit"
    {{ $attributes->merge(['class' => 'rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500', 'type' => 'submit']) }}>
    {{ $slot }}
</button>
