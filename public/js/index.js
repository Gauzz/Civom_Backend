
    function postAsset(evt){
        console.log(token);
        console.log('submit_button');
        console.log($('input[name=_token]').val())
        console.log($('input[name=pname]').val())
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
       url:"upload",
       method: "POST",
       processData: false,
       contentType: false,
       data: {
    
        pname: $('input[name=pname]').val(),
        description : $('input[name=description]').val(),
        dae : $('input[name=dae]').val(),
        fbx : $('input[name=fbx]').val(),
       // "texture": $('input[name=texture]').val(),
        thumbnail: $('input[name=thumbnail]').val(),
        
    },
    success: function(result)
    {
      
    },
    error: function(data)
    {
        console.log(data);
    }  
       
    });

    } 
    