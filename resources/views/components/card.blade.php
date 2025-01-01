{{--

@props(['type' => 'info'])

@php
    $typeClasses = [
        'blackish' => 'p-10 bg-black',
        'error' => 'bg-red-500 text-white',
        'info' => 'bg-gray-50 p-6',
    ];
@endphp

<div {{$attributes->merge(['class' => 'border border-gray-200 rounded ' . $typeClasses[$type]])}}>
    {{$slot}}
</div>

--}}

@props(['type' => null]) <!-- Default type is null -->

@php
    $typeClasses = [
        'blackish' => 'p-10 bg-black',
        'error' => 'bg-red-500 text-white',
        'info' => 'bg-gray-50 p-6',
    ];

    // Determine the class string based on the presence of type
    $classString = $type ? ($typeClasses[$type] ?? $type) : 'bg-gray-50 p-6'; // Default if type is not defined

@endphp

<div {{$attributes->merge(['class' => 'border border-gray-200 rounded ' . $classString])}}>
    {{$slot}}
</div>
