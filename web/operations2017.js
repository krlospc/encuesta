   var plusNumber1_2017 = function(ele){
        var total = 0;
        $(".kfpc").each(function(){
            if(isNaN(parseInt($(this).val()))){
                total+=0;
            }else{
                total+= parseInt($(this).val() );
            }

        });
        $('#appbundle_form4validacionregistro_matricula20171').val(total); 
    }

var plusNumber2_2017 = function (ele) {
    var total = 0;
    $(".kfpc2").each(function () {
        if (isNaN(parseInt($(this).val()))) {
            total += 0;
        } else {
            total += parseInt($(this).val());
        }

    });
    $('#appbundle_form4validacionregistro_matricula20172').val(total);
}

var plusNumber3_2017 = function (ele) {
    var total = 0;
    $(".kfpc3").each(function () {
        if (isNaN(parseInt($(this).val()))) {
            total += 0;
        } else {
            total += parseInt($(this).val());
        }

    });
    $('#appbundle_form4validacionregistro_matricula20173').val(total);
}


var plusNumber4_2017 = function (ele) {
    var total = 0;
    $(".kfpc4").each(function () {
        if (isNaN(parseInt($(this).val()))) {
            total += 0;
        } else {
            total += parseInt($(this).val());
        }

    });
    $('#appbundle_form4validacionregistro_matricula20174').val(total);
}



var plusNumber5_2017 = function (ele) {
    var total = 0;
    $(".kfpc5").each(function () {
        if (isNaN(parseInt($(this).val()))) {
            total += 0;
        } else {
            total += parseInt($(this).val());
        }

    });
    $('#appbundle_form4validacionregistro_matricula20175').val(total);
}



var plusNumber6_2017 = function (ele) {
    var total = 0;
    $(".kfpc6").each(function () {
        if (isNaN(parseInt($(this).val()))) {
            total += 0;
        } else {
            total += parseInt($(this).val());
        }

    });
    $('#appbundle_form4validacionregistro_matricula20176').val(total);
}


//to the columns


// var sumcol1 = function (ele,num) {
//     var total = 0;
//     ele = parseInt(ele);
//     total = $('#appbundle_form4validacionregistro_promovidos2016Total').val();
//     console.log(total);
    
//     if (isNaN(parseInt(ele))) {
//         total += 0;
//     }else{
//         total = (total == null || total == undefined || total == "" || isNaN(parseInt(total))) ? 0 : total;
//         total = (parseInt(total) + parseInt(ele));
//     }
    
//     $('#appbundle_form4validacionregistro_promovidos2016Total').val(total);
//     // console.log(total);
//     // return false;

//     // $('#appbundle_form4validacionregistro_promovidos2016Total').val(total);
// }


var pluscol1 = function (ele,num) {
    var total = 0;
    $(".column1").each(function () {
        if (isNaN(parseInt($(this).val()))) {
            total += 0;
        } else {
            total += parseInt($(this).val());
        }

    });
    $('#appbundle_form4validacionregistro_promovidos2017Total').val(total);
}

var pluscol2 = function (ele,num) {
    var total = 0;
    $(".column2").each(function () {
        if (isNaN(parseInt($(this).val()))) {
            total += 0;
        } else {
            total += parseInt($(this).val());
        }

    });
    $('#appbundle_form4validacionregistro_reprobados2017Total').val(total);
}

var pluscol3 = function (ele,num) {
    var total = 0;
    $(".column3").each(function () {
        if (isNaN(parseInt($(this).val()))) {
            total += 0;
        } else {
            total += parseInt($(this).val());
        }

    });
    $('#appbundle_form4validacionregistro_abandono2017Total').val(total);
}

var pluscol4 = function (ele,num) {
    var total = 0;
    $(".column4").each(function () {
        if (isNaN(parseInt($(this).val()))) {
            total += 0;
        } else {
            total += parseInt($(this).val());
        }

    });
    $('#appbundle_form4validacionregistro_traslado2017Total').val(total);
}

var pluscol5 = function (ele,num) {
    var total = 0;
    $(".column5").each(function () {
        if (isNaN(parseInt($(this).val()))) {
            total += 0;
        } else {
            total += parseInt($(this).val());
        }

    });
    $('#appbundle_form4validacionregistro_noincorporados2017Total').val(total);
}

var pluscol6 = function (ele,num) {
    var total = 0;
    $(".column6").each(function () {
        if (isNaN(parseInt($(this).val()))) {
            total += 0;
        } else {
            total += parseInt($(this).val());
        }

    });
    $('#appbundle_form4validacionregistro_matricula2017Total').val(total);
}


