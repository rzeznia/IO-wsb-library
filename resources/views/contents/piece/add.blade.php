@extends('layout.app')

@section('piece')
Add Piece
@endsection

@section('content')
    <div class="buttons-grid">
        <a class="btn btn-sm btn-outline-dark" href="{{route('piece.index')}}">Back to Pieces</a>
    </div>
    <div class="clearfix">
        <form method="POST" action="{{route('piece.store')}}">
        @csrf
            <div class="form-group">
                <label for="release_id">Release</label>
                <select type="text" name="release_id" class="form-control" id="release_id" placeholder="Select Release">
                    @foreach($releases as $release)
                        <option value={{ $release->id }}>
                            {{$release->title->title}} 
                            <small>
                                {{ $release->title->author->name }} {{ $release->title->author->surname }}
                            </small>
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="localisation_id">Localization</label>
                <select type="text" name="localisation_id" class="form-control" id="localisation_id" placeholder="Select Author">
                    @foreach($localizations as $loc)
                        <option value={{ $loc->id }}>
                            {{ $loc->regal->name }} Shelf: {{ $loc->shelf }} Position: {{$loc->position}}
                        </option>
                    @endforeach
                </select>
            </div>    
            <div class="form-group">
                <label for="piece_count">Piece Count</label>
                <input type="text" id="piece_count" class="form-control" name="piece_count" value="1">
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
