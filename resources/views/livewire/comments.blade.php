<div>

    @if (count($comments))
        <div class="shadow bg-white dark:bg-[#1f2937] text-black dark:text-white rounded-lg p-6 mb-8">
            <ul>
                @foreach ($comments as $comment)
                    <li>
                        {{ $comment }}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
    
</div>
