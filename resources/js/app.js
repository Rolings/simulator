import 'bootstrap';
window.$ = window.jQuery  = require('jquery');

$(".play-all-action").on("click",function (){
    $.ajax({
        type: "GET",
        url: 'api/play-all',
        data: $(this).serialize(),
        success: function(response)
        {
            var jsonData = JSON.parse(response);
            console.log(response)
        }
    });
});