@props(['id' => null, 'maxWidth' => null])

<x-modal :id="$id" :maxWidth="$maxWidth" {{ $attributes }}>
    <div class="px-6 py-4">
        <div class="text-lg font-medium dark:text-white text-gray-900">
            {{ $title }}
        </div>

        <div class="mt-4 text-sm text-gray-600 dark:text-white">
            {{ $content }}
        </div>
    </div>

    <div class="flex flex-row justify-end px-6 py-4 dark:bg-gray-800 dark:text-white bg-gray-100 text-end">
        {{ $footer }}
    </div>
</x-modal>
