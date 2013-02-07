
$('#login form').submit(function(event){
    event.preventDefault();

    $.ajax({
        url: $hostname+'/ajax/auth/login',
        type: "POST",
        data: $(this).serialize(),
        success: function(  data){
            
            if (data.errors != '')
                {
                    $('#login #error-on-modal').removeClass('hide');
                    
                    $('#login #error-on-modal span').html(''+data.errors+'');
                }
            else
                {
                    document.location.href = $hostname+'/account'
                }
        },
        error:  function(a,b,c)
        {console.log(a+b+c)},
        dataType: "json"
    });
})

//###############################################register
$('#register form').submit(function(event){
    event.preventDefault();
   console.log($(this).serialize())
    $.ajax({
        url: $hostname+'/ajax/auth/register',
        type: "POST",
        data: $(this).serialize(),
        success: function(  data){
            console.log(data.errors)
            if (data.errors != '')
                {
                    $('#register #error-on-modal').removeClass('hide');
                    
                    $('#register #error-on-modal span').html(''+data.errors+'');
                }
            else
                {
                    document.location.href = $hostname+'/account'
                }
        },
        error:  function(a,b,c)
        {console.log(a+b+c)},
        dataType: "json"
    });
})
