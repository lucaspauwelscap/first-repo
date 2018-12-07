let displayed = false;

$('#submit-btn').on('click', function () {
    alert("You clicked the submit button, normally something would happen now!")
});

$('#automation-btn').on('click', function () {
    if (displayed === false){
        $('#div-billy').css('visibility', 'visible');
        displayed = true;
    } else {
        $('#div-billy').css('visibility', 'hidden');
        displayed = false;
    }

});

$('#test-btn').on('click', function () {
    alert("You clicked the test button, normally something would happen now!")
});