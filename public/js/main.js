$(document).ready(function(){

$('#formContact').on('submit', function(e) {
    e.preventDefault();

    var inputs = $(this).serialize();
    console.log(inputs);

    $.post('https://docs.google.com/forms/d/e/1FAIpQLSf9Q0T2VEKWni2Zg1Wo7qwshmg2bhs0JX1kaZnwgsxQhxNQ7Q/formResponse', inputs, 
        function(res) {
            console.log(res);
        }
    )
});

});