$(document).ready(function () {
    $("#demo").click(function(event) {
        event.preventDefault();
        $("#logout-form").submit();
    });
});
