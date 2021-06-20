var currentHeader = '';
window.onload = function() {
    //reset search query when revisiting page
    $('#searchBar').value = '';
    //If table is empty, no need to show the search box
    if (!$('.table').length) {
        $('#searchBar').hide();
    }else{
		$('#searchBar').show();
	}

    //if you return back from update page and the search box is still full
    //this hides the table and shows the correct search result 
    if($('#searchBar').val().length > 2){
        searchEmployee($('#searchBar').val());
    }

    $('#searchBar').keyup(function(){
        searchEmployee(this.value);
    })

    //click listener for table headers except action
    $('th:not(:last-child)').each(function(i){
        $(this).on("click", function(){

            //if there is only one table row or one search result, no need to sort.
            if($('.table tr').length < 2 || $('.searchRow').length == 1){
                return;
            }

            var name = $(this).text();
            if(currentHeader != name && currentHeader != ''){
                $(`th:contains('${currentHeader}')`).children().first().remove();
            }

            currentHeader = name;
            if(name == '#'){
                name = 'id';
            }
            var sort = '';
            if($(this).html().indexOf("arrow-dropdown") >= 0) { 
                sort = 'ASC';
                $(this).children().first().remove();
            }
            else if($(this).html().indexOf("arrow-dropup") >= 0) {
                sort = 'DESC';
                $(this).children().first().remove();
            }
            else { 
                sort = 'DESC';
            }

            if(sort == 'DESC'){
                $(this).append('<ion-icon name="arrow-dropdown"></ion-icon>');
            }else if(sort == 'ASC'){
                $(this).append('<ion-icon name="arrow-dropup"></ion-icon>');
            }
            

            name = fixKey(name);
            sortBy(name, sort);
        })
    })
}


var lastSearch = '';

function searchEmployee(value){

    if(value == lastSearch){
        //if you alt-tab the page, this function get called even though the query is the same.
        //we dont need to do extra requests;
        return;
    }
    lastSearch = value;

    //remove any previous search results to prevent duplicates
    $("tr.searchRow").each(function(i){
        $(this).remove();
    })
    
    if(value.length < 2){
        //If Search box becomes empty, show back default elements in order
        $("tr.defaultRow").each(function(i){
            $(this).show();
        })
        //remove sort made in search results
        $(`th:contains('${currentHeader}')`).children().first().remove();
        showTable();
        return;
    }

    /*
      if there was already a sort put in place,
      and we decide to search, the sort should be reset
      we get the exact header with the logo by the variable currentHeader
    */

    $(`th:contains('${currentHeader}')`).children().first().remove();

    //if search query is longer than 3 characters, all elements are hidden
    //search rows are put in their place
    $.ajax({
        url: "./resource/php/read.php",
        type: 'POST',
        data: "search="+value,
        success: function(res) {
            if(res == ''){
                $('.table-responsive').hide();
                if(!$('.noResults').length){
                    $('.main').append('<p style="margin-top:50px;" class="noResults">No results found!</p>')
                }
                return;
            }
            $("tr.defaultRow").each(function(i){
                $(this).hide();
            })
           
            showTable();
           $('tbody').append(res);

        }
    });
}

function showTable(){
    //show table if it had been hidden from invalid searches
    $('.table-responsive').show();
    //remove no search result message
    $('.noResults').remove();
}


function fixKey(key){
    switch(key) {
        case 'Name':
          key = 'firstName';
          break;
        case 'Surname':
          key = 'lastName';
          break;
        case 'Email':
          key = 'email';
          break;
        case 'Phone':
          key = 'phone';
          break;
        case 'Gender':
          key = 'gender';
          break;
        case 'Country':
          key = 'country';
          break;
        case 'City':
          key = 'city';
          break;
        case 'Position':
          key = 'position';
          break;
    }
    
    return key;
}


function sortBy(key, sort){
    //if search box is not empty we need to sort only the search results, not the hidden default ones
    var search = '';
    if(lastSearch != ''){
        //we store search query in a variable that we later pass on to the ajax post call
        search = lastSearch;
    }

    $.ajax({
        url: "./resource/php/read.php",
        type: 'POST',
        data: "key="+key+"&sort="+sort+"&query="+search,
        success: function(res) {
            //if there is not a search query, we need to replace only the default ones 
            //because search rows don't exist
            if(lastSearch == ''){
                $("tr.defaultRow").each(function(i){
                    $(this).remove();
                })
            //if search query exists, we need to replace only the search queries
            }else{
                $("tr.searchRow").each(function(i){
                    $(this).remove();
                })
            }
           
           $('tbody').append(res);

        }
    });
}
