@props([
    'as' => 'button',
    'text' => null,
    'prependIcon' => null,
    'appendIcon' => null,
    'variant' => 'primary',
    'outlined' => false,
])

{{--
    bg-customer-white

    from-customer-primary-normal
    to-customer-primary-light-2
    hover:to-customer-primary-normal
    border-customer-primary-normal
    text-customer-primary-normal

    from-customer-secondary-normal
    to-customer-secondary-light-2
    hover:to-customer-secondary-normal
    border-customer-secondary-normal
    text-customer-secondary-normal

    from-customer-info-normal
    to-customer-info-light-2
    hover:to-customer-info-normal
    border-customer-info-normal
    text-customer-info-normal

    from-customer-danger-normal
    to-customer-danger-light-2
    hover:to-customer-danger-normal
    border-customer-danger-normal
    text-customer-danger-normal

    from-customer-success-normal
    to-customer-success-light-2
    hover:to-customer-success-normal
    border-customer-success-normal
    text-customer-success-normal

--}}

@if ($as == 'button')
    <button
        {{ $attributes->merge([
            'class' => implode(' ', [
                // default
                'flex items-center px-8 py-4 rounded-3xl ' . ($outlined ? '' : 'bg-gradient-to-br') . ' shadow duration-300',
        
                // text color
                $outlined ? 'text-customer-' . $variant . '-normal' : 'text-white',
        
                // bg-color: from bg
                $outlined
                    ? 'bg-customer-white bg-opacity-90 border border-customer-' . $variant . '-normal'
                    : 'from-customer-' . $variant . '-normal',
        
                // bg-color: to bg
                $outlined ? '' : 'to-customer-' . $variant . '-light-2',
        
                // hover
                'hover:shadow-lg hover:to-customer-' . $variant . '-normal hover:scale-105',
            ]),
        ]) }}
        {{ $attributes }}>
        @if ($prependIcon)
            <x-customer.icon icon="{{ $prependIcon }}" class="mr-2" />
        @endif
        <span>{{ $text }}</span>
        @if ($appendIcon)
            <x-customer.icon icon="{{ $appendIcon }}" class="ml-2" />
        @endif
    </button>
@else
    <a
        {{ $attributes->merge([
            'class' => implode(' ', [
                // default
                'flex items-center px-8 py-4 rounded-3xl bg-gradient-to-br shadow duration-300',
        
                // text color
                $outlined ? 'text-customer-' . $variant . '-normal' : 'text-white',
        
                // bg-color: from bg
                $outlined
                    ? 'bg-customer-white border border-customer-' . $variant . '-normal'
                    : 'from-customer-' . $variant . '-normal',
        
                // bg-color: to bg
                $outlined ? '' : 'to-customer-' . $variant . '-light-2',
        
                // hover
                'hover:shadow-lg hover:to-customer-' . $variant . '-normal hover:scale-105',
            ]),
        ]) }}
        {{ $attributes }}>
        @if ($prependIcon)
            <x-customer.icon icon="{{ $prependIcon }}" class="mr-2" />
        @endif
        <span>{{ $text }}</span>
        @if ($appendIcon)
            <x-customer.icon icon="{{ $appendIcon }}" class="ml-2" />
        @endif
    </a>
@endif
