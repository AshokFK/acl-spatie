@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-gray-300 focus:border-primary-600 focus:ring-primary-500 rounded-md shadow-sm']) }}>
