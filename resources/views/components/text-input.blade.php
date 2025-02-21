@props(['disabled' => false])

{{-- <input @disabled($disabled)
    {{ $attributes->merge(['class' => 'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm']) }}> --}}
<input @disabled($disabled)
    {{ $attributes->merge(['class' => 'border-[#00615F] focus:border-[#00615F] focus:ring-[#00615F] rounded-md shadow-sm']) }}>
