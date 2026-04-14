@props(['status' => 'pending'])

@php
    $classes = "inline-block rounded-full border px-2 py-1 mb-1 text-xs font-medium";

    switch ($status) {
        case 'pending':
            $classes .= " bg-yellow-500/10 border-yellow-500/20 text-yellow-500";
            break;
        case 'completed':
            $classes .= " bg-primary/10 border-primary/20 text-primary";
            break;
        case 'in_progress':
            $classes .= " bg-blue-500/10 border-blue-500/20 text-blue-500";
            break;
        default:
            $classes .= " border-gray-500 text-gray-500";
    }
@endphp

<span {{ $attributes(['class' => $classes]) }}>
    {{ $slot }}
</span>
