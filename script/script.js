var choices = ["Weight", "Color", "Size", "Height", "Width", "Shape", "Specification"];
//var choices = [["Weight",1], ["Color",2], ["Size",3], ["Height",4], ["Width",5], ["Shape",6], ["Specification",7]];

function addInput() {
    var select = $("<select name=\"detail_type_id[]\" style=\"display:inline;\" class=\"form-control\"/>");
    select.name = "detailOption";
    $.each(choices, function(a, b) {
        select.append($("<option/>").attr("value", a+1).text(b));
    });
    var text = $("<input  style=\"display:inline;\" type=\"text\" name=\"detail_value[]\"  class=\"form-control\"/>");
    $("#detailsDiv").append(select);
    $("#detailsDiv").append(text);
    $("#detailsDiv").append("<br/>");
}