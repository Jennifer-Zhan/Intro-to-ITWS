$(document).ready(function() {
    $.ajax({
        type: 'GET',
        url: 'lab9.js',
        dataType: 'json',
        success: function(responseData, status){
            //add the links
        var output = '<ul>';  
            $.each(responseData.menuItem, function(i, item) {
            output += '<li><a href="' + item.menuURL + '">'; 
            output += item.menuName;
            output += '</a></li>';
        });
        output += '</ul>';
        $('#bodyBlock').html(output);
        }, error: function(msg) {
                  // there was a problem
        alert('There was a problem: ' + msg.status + ' ' + msg.statusText);
        }
    });
});