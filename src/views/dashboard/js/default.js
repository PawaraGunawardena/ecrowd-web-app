
$(function(){


    //there is an function in the dashboard_model with same name.
    // So this is like calling the route by JS
    $.get('dashboard/xhrGetListings', function(o){
        console.log(o[0].text);
        for(var i=0; i<o.length ; i++){
            // alert(1000000);
            //$('#listInserts').append('<div>' + o[i].text + '<a class="del" rel="'+o[i].id+'href="#">X</a></div>');
            $('#listInserts').append('<div>' + o[i].text + '<a class="del" rel="'+o[i].id+'" href="#">X</a></div>');
        }
       // $('del').live('click', function()
        $('#listInserts').on('click', '.del', function(){
            delItem = $(this);
            var id = $(this).attr('rel');
            // alert(id+" MEEEEEEEEEEEEEE");
            delItem.parent().remove();
            $.post('dashboard/xhrDeleteListing', {'id': id}, function(o){
                 alert(id+" After");
                 console.log("Finish " + id);
                // $('#listInserts').append('<div>' + o.text +'<a class="del" rel="'+o.id+'href="#">X</a></div>');

            }, 'json');

            //
            // return false;
        // });

            return false;
        });
    },'json');




    // alert(1);
    $('#randomInsert').submit(function(){

        var url = $(this).attr('action');

        var data = $(this).serialize();

        $.post(url, data, function(o){
            alert(o);
           $('#listInserts').append('<div>' + o.text +'<a class="del" rel="'+o.id+'href="#">X</a></div>');
        },'json');

        console.log(data);

        return false;
    });


});


