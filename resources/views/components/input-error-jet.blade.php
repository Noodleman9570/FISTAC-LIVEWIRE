@props(['for'])

@error($for) 
        <ul {{ $attributes->merge(['class' => 'text-sm text-red-600 dark:text-red-400 space-y-1']) }}>
            <li>
                {{ $message }}
            </li>
        </ul>
@enderror
