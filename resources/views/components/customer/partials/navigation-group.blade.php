@props(['title', 'items'])

<div class="mb-4">
    <h4 class="text-gray-300 px-6 mb-3 text-xs">{{ $title }}</h4>
    <x-customer.partials.navigation :items="$items" />
</div>