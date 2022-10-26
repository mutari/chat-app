@props([
    'id' => 'modal',
    'title',
    'saveBtn' => 'Save changes',
    'closeBtn' => 'Close',
    'onSaveBtn'
])

<div class="modal fade" id="{{ $id }}" tabindex="-1" aria-labelledby="{{ $id }}Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="{{ $id }}Label">{{ $title }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {{ $slot }}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ $closeBtn }}</button>
                <button type="button" class="btn btn-dark" onclick="{{ $onSaveBtn }}">{{ $saveBtn }}</button>
            </div>
        </div>
    </div>
</div>
