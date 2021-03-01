
$(document).ready(function(){
    const compteurlike=document.getElementById('compteurlike');

   
    const forms  = document.querySelectorAll('#formulaire_submit'); 
     forms.forEach( (form) => {
         form.addEventListener('submit', function(event) {
             event.preventDefault(); 
                 
             const publication_id = this.querySelector(".publication").value; 
            
                 const data ={ 
                     publication_id:publication_id
                 } 

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
                url:"ajout-like",
                method:"POST",
                data:data, 
                success: function(compt){
                    const selector = "#" + publication_id ;
                    $(selector).html(compt.compteur);


                    const coeur = "#style" + publication_id ;
                    if(compt.coeur==0){
                        $(coeur).addClass("#formulaire_submit fas");
                        $(coeur).removeClass("#formulaire_submit far");
                        //console.log('red')
                    }
                    else
                    {
                        $(coeur).addClass("#formulaire_submit far");
                        $(coeur).removeClass("#formulaire_submit fas");
                        //$(coeur).removeClass("stylecoeur");
                        //console.log('white')
                    }      
                
                },              
                

                error :function(compt){
                    console.log("il y a eu une erreur ");
                }, 
        });



           
  }); 

}); 
}); 