<div class="space-y-1">
    @php
        $attachments = is_array($getRecord()->attachments)
            ? $getRecord()->attachments
            : json_decode($getRecord()->attachments, true) ?? [];
    @endphp

    @if(count($attachments) > 0)
        <div class="flex flex-wrap gap-1">
            @foreach($attachments as $attachment)
                @php
                    $extension = pathinfo($attachment['path'], PATHINFO_EXTENSION);
                    $isImage = in_array(strtolower($extension), ['jpg', 'jpeg', 'png', 'gif', 'webp']);
                    $filename = basename($attachment['path']);
                @endphp

                @if($isImage)
                    <div class="relative group">
                        <img src="{{ Storage::url($attachment['path']) }}"
                             alt="{{ $filename }}"
                             class="w-12 h-12 object-cover rounded border cursor-pointer hover:opacity-75"
                             onclick="window.open('{{ Storage::url($attachment['path']) }}', '_blank')">
                        <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity rounded flex items-center justify-center">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                            </svg>
                        </div>
                    </div>
                @else
                    <a href="{{ Storage::url($attachment['path']) }}"
                       target="_blank"
                       class="inline-flex items-center px-2 py-1 text-xs bg-gray-100 hover:bg-gray-200 rounded border transition-colors"
                       title="{{ $filename }}">
                        <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4z" clip-rule="evenodd" />
                        </svg>
                        {{ Str::limit($filename, 15) }}
                    </a>
                @endif
            @endforeach
        </div>
        <div class="text-xs text-gray-500 mt-1">
            {{ count($attachments) }} file(s)
        </div>
    @else
        <span class="text-gray-400 text-sm">No attachments</span>
    @endif
</div>
