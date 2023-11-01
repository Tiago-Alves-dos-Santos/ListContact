@props([
    'loading' => false,
])

@php
    $class = [
        'disabled' => 'py-2.5 px-5 mr-2 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 inline-flex items-center',
        'default' => 'focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800'
    ];
@endphp
<div>
    <!-- When there is no desire, all things are at peace. - Laozi -->
    <button @disabled($loading)
        {{ $attributes->merge([
            'class' =>  $loading ? $class['disabled'] :  $class['default'],
            'type'=>'button'
        ]) }} >


        @if ($loading)
            <img src="{{ asset('img/load.gif') }}" class="w-[50px]" alt="">
        @else
        {{ $text }}
        @endif
    </button>
</div>
