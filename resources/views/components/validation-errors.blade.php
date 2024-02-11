@if ($errors->any())
    <div {{ $attributes }}>
        <div class="font-medium text-red-600">{{ __('Whoops! Something went wrong.') }}</div>

        <ul class="mt-3 list-disc list-inside text-sm text-red-600">
            @foreach ($errors->get($field) as $error)
                <li class="text-white bg-red-500">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
