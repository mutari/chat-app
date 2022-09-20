@extends('layouts.layout')

@section('content')

    <div id="gameMeny" class="text-center d-flex flex-column gap-3">
        <h1 class="mb-4">Feeem</h1>

        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#newGame">
            Create new game
        </button>
        <button class="btn btn-dark">Join game</button>

    </div>

    <x-modal id="newGame" title="Create new game" saveBtn="Create" onSaveBtn="createNewLobby()">

        <div class="mb-3">
            <label for="lobbyName" class="form-label">Lobby name</label>
            <input type="text" class="form-control" id="lobbyName">
        </div>

    </x-modal>

@endsection
