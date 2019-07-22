$(document).ready(function () {
    $("#btr1").bind("click", checkButton1)
    $("#btr2").bind("click", checkButton2)
    $("#btr3").bind("click", checkButton3)
    $("#btr4").bind("click", checkButton4)
    $("#btr5").bind("click", checkButton5)
    $("#btr6").bind("click", checkButton6)

});
function disable1(){
    $(".checkImg1")
        .css("display", "none")
        .css("size", "14px");
    $("#btr1")
        .attr("class", "statusRightBtn btn btn-default")
        .css("font-size", "14px")

}

function disable2(){
    $(".checkImg2")
        .css("display", "none")
        .css("size", "14px");
    $("#btr2")
        .attr("class", "statusRightBtn btn btn-default")
        .css("font-size", "14px")

}
function disable3(){
    $(".checkImg3")
        .css("display", "none")
        .css("size", "14px");
    $("#btr3")
        .attr("class", "statusRightBtn btn btn-default")
        .css("font-size", "14px")

}
function disable4(){
    $(".checkImg4")
        .css("display", "none")
        .css("size", "14px");
    $("#btr4")
        .attr("class", "statusRightBtn btn btn-default")
        .css("font-size", "14px")

}
function disable5(){
    $(".checkImg5")
        .css("display", "none")
        .css("size", "14px");
    $("#btr5")
        .attr("class", "statusRightBtn btn btn-default")
        .css("font-size", "14px")

}
function disable6(){
    $(".checkImg6")
        .css("display", "none")
        .css("size", "14px");
    $("#btr6")
        .attr("class", "statusRightBtn btn btn-default")
        .css("font-size", "14px")

}
function checkButton1(){

    $(".checkImg1")
        .css("display", "")
        .css("size", "12px");


    $("#btr1")
        .attr("class", "statusRightBtn btn btn-primary active")
        .css("font-size", "14px")
        .css("display", "")
    $("#car").attr("class", "statusBtn btn btn-primary dropdown-toggle active")

    disable2();
    disable3();
    disable4();
    disable5();
    disable6();
}
function checkButton2(){

    $(".checkImg2")
        .css("display", "")
        .css("size", "12px");

    $("#btr2")
        .attr("class", "statusRightBtn btn btn-primary active")
        .css("font-size", "14px")
        .css("display", "")
    $("#car").attr("class", "statusBtn btn btn-default dropdown-toggle")

    disable1();
    disable3();
    disable4();
    disable5();
    disable6();
}
function checkButton3(){

    $(".checkImg3")
        .css("display", "")
        .css("size", "12px");
    $("#car").attr("class", "statusBtn btn btn-default dropdown-toggle")


    $("#btr3")
        .attr("class", "statusRightBtn btn btn-primary active")
        .css("font-size", "14px")
        .css("display", "")

    disable1();
    disable2();
    disable4();
    disable5();
    disable6();
}

function checkButton4(){

    $(".checkImg4")
        .css("display", "")
        .css("size", "12px");
    $("#car").attr("class", "statusBtn btn btn-default dropdown-toggle")


    $("#btr4")
        .attr("class", "statusRightBtn btn btn-primary active")
        .css("font-size", "14px")
        .css("display", "")

    disable1();
    disable2();
    disable3();
    disable5();
    disable6();
}
function checkButton5(){

    $(".checkImg5")
        .css("display", "")
        .css("size", "12px");
    $("#car").attr("class", "statusBtn btn btn-default dropdown-toggle")


    $("#btr5")
        .attr("class", "statusRightBtn btn btn-primary active")
        .css("font-size", "14px")
        .css("display", "")

    disable1();
    disable2();
    disable3();
    disable4();
    disable6();

}

function checkButton6(){

    $(".checkImg6")
        .css("display", "")
        .css("size", "12px");
    $("#car").attr("class", "statusBtn btn btn-default dropdown-toggle")

    $("#btr6")
        .attr("class", "statusRightBtn btn btn-primary active")
        .css("font-size", "14px")
        .css("display", "")

    disable1();
    disable2();
    disable3();
    disable4();
    disable5();
}