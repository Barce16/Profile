function search(search_value){
    $.ajax({
        
        url: '/Profile/model/admin.php', // link
        type: 'POST', //Search Engine
        data: { 'search' : search_value }, //connected to searchEngine by the components ofsearch HAHAHAHA
        success: function(response){
            $('#results').html(response); //response function - meant if our program success hahaha
        }
    })
    }