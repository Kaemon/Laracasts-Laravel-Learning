@props(['status' => 'pending'])

@php
    $class='inline-block rounded rounded-full border px-2 py-1 text-xs font-medium';

    if($status === 'in_progress'){
        $class .= ' bg-yellow-500/10 text-yellow-500 border-yellow-500/20';
    } elseif($status === 'completed'){
        $class .= ' bg-green-500/10 text-green-500 border-green-500/20';
    } elseif($status === 'pending'){
        $class .= ' bg-red-500/10 text-red-500 border-red-500/20';
    }
@endphp


<span {{ $attributes(['class' => $class]) }}>
    {{ $slot }}
</span>