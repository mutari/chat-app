@extends('layouts.layout')

@section('content')

    <div class="flex justify-center items-center h-full">

        <div class="w-96">
            <div class="">
                <h1 class="text-4xl mb-4">Notion</h1>

                <div class="ml-2 mb-4">
                    <h4 class="text-slate-500 mb-1">Notion api key</h4>
                    <div class="flex flex-row gap-2" class="configInput">
                        <div class="grow">
                            <x-input noMargin="true" type="text" name="notion" value="{{ $notion }}" placeholder="secret_xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx" disabled></x-input>
                        </div>
                        <x-button class="saveBtn">
                            <span class="lock-closed">
                                @includeIf('components.icons.outline.lockClosed')
                            </span>
                            <span class="lock-open hidden">
                                @includeIf('components.icons.outline.lockOpen')
                            </span>
                        </x-button>
                    </div>
                </div>
                <div class="ml-2">
                    <h4 class="text-slate-500 mb-1">Notion database key</h4>
                    <div class="flex flex-row gap-2" class="configInput">
                        <div class="grow">
                            <x-input noMargin="true" type="text" name="notion_db" value="{{ $notion_db }}" placeholder="xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx" disabled></x-input>
                        </div>
                        <x-button class="saveBtn">
                            <span class="lock-closed">
                                @includeIf('components.icons.outline.lockClosed')
                            </span>
                            <span class="lock-open hidden">
                                @includeIf('components.icons.outline.lockOpen')
                            </span>
                        </x-button>
                    </div>
                </div>
            </div>
        </div>

        <script>

            onReady(() => {

                document.querySelectorAll('.saveBtn').forEach(element => {

                    let div = element.closest('div');
                    let input = div.querySelector('input');
                    let lockOpen = div.querySelector('.lock-open');
                    let lockClosed = div.querySelector('.lock-closed');

                    console.log(div);

                    if(input.value) {
                        lockOpen.classList.add('hidden');
                        lockClosed.classList.remove('hidden');
                        input.disabled = true;
                    } else {
                        lockClosed.classList.add('hidden');
                        lockOpen.classList.remove('hidden');
                        input.disabled = false;
                    }

                    element.addEventListener('click', event => {

                        if(!lockClosed.classList.contains('hidden')) { // removed lock
                            input.disabled = false;
                            lockClosed.classList.add('hidden');
                            lockOpen.classList.remove('hidden');
                            return;
                        }

                        let value = input.value;
                        let name = input.getAttribute('name');

                        fetch('/config/set-user-integration', {
                            method: 'POST',
                            body: generateFormData({name, value})
                        });

                        // locks input
                        input.disabled = true;
                        lockClosed.classList.remove('hidden');
                        lockOpen.classList.add('hidden');

                    });

                });

            });

        </script>

    </div>

@endsection