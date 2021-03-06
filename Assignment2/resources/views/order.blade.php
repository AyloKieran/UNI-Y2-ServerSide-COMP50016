<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Deals') }}
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 bg-white border-b border-gray-200">
                    <h1 class="text-2xl">Ordered</h1>
                    <p>We've received your order for {{ $deliverytype }}, totalling £@money($total).</p>
                </div>
            </div>
        </div>

    </div>
</x-app-layout>
