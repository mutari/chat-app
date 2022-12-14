@if(isset($type) && $type == 'link')
    <a {{ $attributes }} class="text-white focus:ring-4 focus:outline-none font-medium rounded-lg text-sm w-auto px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-800 whitespace-nowrap flex items-center justify-center gap-1">{{ $slot }}</a>
@else
    <button type="{{ $type ?? 'button' }}" {{ $attributes->merge(["class" => "
                text-white font-medium rounded-lg text-sm w-auto px-5 py-2.5 text-center bg-blue-600 flex items-center justify-center gap-1 whitespace-nowrap
                focus:ring-4 focus:outline-none focus:ring-blue-800
                hover:bg-blue-700
                "]) }}>{{ $slot }}</button>
@endif
