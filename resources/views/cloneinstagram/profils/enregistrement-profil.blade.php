@extends('cloneinstagram.template-profil')

@section('title')
    Publication Enregistré
@endsection

@section('button-profil')
    Modifier profil
@endsection




@section('contenu2')
    
    <div class="container col-md-12 d-flex flex-wrap mt-4 mb-5  ">
    
    @foreach($posts as $element)
                <img src="{{ $element->photo }}" alt="" style="width:300px;height:300px;" class="mb-4 mr-3">
        @endforeach 
          
    </div>

    
@endsection