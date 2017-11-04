function recommend(pid){
    $.ajax({
        type: 'GET',
        headers: {"cache-control": "no-cache"},
        url: "/admin/recommend-service",
        async: true,
        cache: false,
        dataType: "json",
        data: 'service_id=' + pid,
        processData: false,
        contentType: false,
        success: function (jsonData, textStatus, jqXHR) {

            console.log("Error: "+jsonData["error"]+",Status: "+jsonData["status"]+"Message: "+jsonData["message"]);

            var span = document.getElementById("rbtn"+pid);

            if(jsonData["error"] == 0 && jsonData["status"] == 1){
                span.className = "btn btn-success";
                span.innerHTML = "Recommended";
            }

            if(jsonData["error"] == 0 && jsonData["status"] == 2){
                span.className = "btn btn-default";
                span.innerHTML = "Recommend";
            }

        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
          if (textStatus == 'Unauthorized') {
              console.log('custom message. Error: ' + errorThrown);
          } else {
              console.log('custom message. Error: ' + errorThrown);
          }
        }
    });
}

(function($){

    $.ajax({
        type: 'GET',
        headers: {"cache-control": "no-cache"},
        url: "/admin/get-recommended-services",
        async: true,
        cache: false,
        dataType: "json",
        data: 'service_id=',
        processData: false,
        contentType: false,
        success: function (jsonData, textStatus, jqXHR) {

            console.log('getting recommended');

            var f = jsonData["recommended"];

            for(var i = 0;i < f.length;i++){

                console.log("rbtn"+f[i]);

                var span = document.getElementById("rbtn"+f[i]);
                span.className = "btn btn-success";
                span.innerHTML = "Recommended";
            }

        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
          if (textStatus == 'Unauthorized') {
              console.log('custom message. Error: ' + errorThrown);
          } else {
              console.log('custom message. Error: ' + errorThrown);
          }
        }
    });
})(window.jQuery);
