@props(['type' => 'info'])

@php
switch ($type) {
    case 'info':
        $class = 'bg-blue-50 text-blue-800 bg-blue-50 dark:bg-gray-800 dark:text-blue-400';
        break;
    case 'danger':
        $class = 'bg-red-50 text-red-800 bg-red-50 dark:bg-gray-800 dark:text-red-400';
        break;
    case 'success':
        $class = 'bg-green-50 text-green-800 bg-green-50 dark:bg-gray-800 dark:text-green-400';
        break;
    case 'warning':
        $class = 'bg-yellow-50 text-yellow-800 bg-yellow-50 dark:bg-gray-800 dark:text-yellow-400';
        break;
    case 'dark':
        $class = 'bg-gray-800 text-gray-100 bg-gray-800 dark:bg-gray-800 dark:text-gray-100';
        break;
    
    default:
        $class = 'bg-blue-50 text-blue-800 bg-blue-50 dark:bg-gray-800 dark:text-blue-400';
        break;
}

@endphp

<div {{ $attributes->merge(['class' => 'p-4 text-sm rounded-lg ' . $class]) }} role="alert">
    <span class="font-medium">{{ $title }}</span> {{ $slot }}
  </div>