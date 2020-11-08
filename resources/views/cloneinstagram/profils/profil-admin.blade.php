@extends('cloneinstagram.template-profil')

@section('title')
    profil-admin
@endsection


@section('button-profil')
    Modifier profil
@endsection


@section('contenu1')

    <div class="col-md-3 ml-5 mt-4">
       <!-- Button trigger modal -->
       <button type="button" class="btn " style="background-color:lightgray" data-toggle="modal" data-target="#exampleModalCenter">
               Ajouter une publication
       </button>

       <!-- Modal -->
       <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
           <div class="modal-dialog modal-dialog-centered" role="document">
               <div class="modal-content">
                   <div class="modal-header">
                       <h5 class="modal-title" id="exampleModalLongTitle">AJOUTER UNE PUBLICATION</h5>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                       </button>
                   </div>
                   <div class="modal-body">
                       <form action="{{ url('ajout-publication') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                           <input type="file" name="photo" class="mb-3 ml-4">
                           <textarea name="description" id="" cols="55" rows="3" class="ml-4 mb-3"></textarea>
                           <div class="modal-footer">
                               <input type="submit" name="annuler" class="btn btn-secondary" value="Annuler" data-dismiss="modal">
                               <input type="submit" name="ajouter" class="btn btn-primary" value="Ajouter">
                           </div>
                       </form>
                   </div>        
               </div>
           </div>
       </div>
   </div>
   
@endsection


@section('contenu2')
    
    <div class="container col-md-12 d-flex flex-wrap mt-4 mb-5  ">
    <div class="popup-gallery">
        @foreach($posts as $element)
                <a href="{{ $element->photo }}" title=""><img src="{{ $element->photo }}" alt="" style="width:300px;height:300px;" class="mb-4 mr-3"></a>
        @endforeach  
        </div>  
    </div>

    
@endsection