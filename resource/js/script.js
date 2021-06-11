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
