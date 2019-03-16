document.writeln("<script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-1.11.3.min.js\"></script>\n");
document.writeln("<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js\"></script>");
document.writeln("<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css\"/>");


$(document).ready(function () {
    let date_input=$('input[name="date"]'); //our date input has the name "date"
    let container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
    let options={
        weekStart: 1,
        startDate: "today"
    };
    date_input.datepicker(options);
})
