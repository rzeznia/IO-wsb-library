@extends('layout.app')

@section('piece')
Add Piece
@endsection

@section('content')
    <div class="buttons-grid">
        <a class="btn btn-sm btn-outline-dark" href="{{route('admin.piece.index')}}">Back to Pieces</a>
    </div>
    <div class="clearfix">
        <form method="POST" action="{{route('admin.piece.save', $id)}}">
        @csrf
            <div class="form-group">
                <label for="release_id">Release</label>
                <select type="text" name="release_id" class="form-control" id="release_id">
                    @foreach($releases as $release)
                        <option value={{ $release->id }} @if($piece->release->id == $release->id) selected @endif>
                            {{$release->title->title}} 
                            <small>
                                {{ $release->title->author->name }} {{ $release->title->author->surname }} <small>{{$release->release}} {{$release->publisher->name}}</small>
                            </small>
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="localisation_id">Localization</label>
                <select type="text" name="localisation_id" class="form-control" id="localisation_id">
                    @foreach($localizations as $loc)
                        <option value={{ $loc->id }} @if($piece->localization->id == $loc->id) selected @endif>
                            {{ $loc->regal->name }} Shelf: {{ $loc->shelf }} Position: {{$loc->position}}
                        </option>
                    @endforeach
                </select>
            </div>    
            <input type="hidden" id="piece_count" class="form-control" name="piece_count" value="1">
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
