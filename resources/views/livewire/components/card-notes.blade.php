<div class="flex gap-0 flex-wrap flex-row w-full">
    @foreach ([1,2] as $note)
        <div class="container p-6 text-white w-1/4 h-[300px]">
            <form action="">
                <div class="bg-gray-800 h-full p-2">
                    <div class="flex text-white">
                        <div class="relative w-full min-w-auto">
                            <div class="flex">
                                <x-button-icon type="delete" class="text-white bg-white-800 fill-current stroke-current">
                                    <x-icons.check/>
                                </x-button-icon>
                            </div>
                            <!-- Title -->
                            <x-textarea id="note-title-{{ $note }}" class="h-[43px] py-auto"/>

                            <!-- Notes -->
                            <div class="mb-4">
                                <x-textarea id="note-content-{{ $note }}" />
                            </div>

                        </div>
                    </div>
                </div>
            </form>
        </div>
    @endforeach
</div>