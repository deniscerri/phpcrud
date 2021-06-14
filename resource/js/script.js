//If table is empty, no need to show the search box
window.onload = function() {
    if ($('.table') == null ) {
        $('.top').hide();
    }

    $('#searchBar').keyup(function(){
        searchEmployee(this.value);
    })
}

function validateCreation(){
    //check for empty inputs
    var form = $('form').serializeArray();
    for(var i = 0; i < form.length; i++){
        if(form[i].value == ''){
            alert(`Please fill in the '${form[i].name}' input`);
            return false;
        }
    }
    
    return true;
}

function searchEmployee(value){
    //remove any previous search results to prevent duplicates
    $("tr.searchRow").each(function(i){
        $(this).remove();
    })
    
    if(value.length < 2){
        //If Search box becomes empty, show back default elements in order
        $("tr.defaultRow").each(function(i){
            console.log()
            $(this).show();
        })
        
        //show table if it had been hidden from invalid searches
        $('.table').show();
        //remove no search result message
        $('.noResults').remove();

        return;
    }
    //if search query is longer than 3 characters, all elements are hidden
    //search rows are put in their place
    
    $.ajax({
        url: "./resource/php/read.php",
        type: 'POST',
        data: "search="+value,
        success: function(res) {

            if(res == ''){
                $('.table').hide();
                if(!$('.noResults').length){
                    $('.main').append('<p style="margin-top:50px;" class="noResults">No results found!</p>')
                }
                return;
            }

            $("tr.defaultRow").each(function(i){
                $(this).hide();
            })
           $('tbody').append(res);

        }
    });
}