   var plusNumber1_2016 = function(ele){
        var total = 0;
        $(".krlos").each(function(){
            if(isNaN(parseInt($(this).val()))){
                total+=0;
            }else{
                total+= parseInt($(this).val() );
            }

        });
        $('#appbundle_form4validacionregistro_matricula20161').val(total); 
    }

var plusNumber2_2016 = function (ele) {
    var total = 0;
    $(".krlos2").each(function () {
        if (isNaN(parseInt($(this).val()))) {
            total += 0;
        } else {
            total += parseInt($(this).val());
        }

    });
    $('#appbundle_form4validacionregistro_matricula20162').val(total);
}

var plusNumber3_2016 = function (ele) {
    var total = 0;
    $(".krlos3").each(function () {
        if (isNaN(parseInt($(this).val()))) {
            total += 0;
        } else {
            total += parseInt($(this).val());
        }

    });
    $('#appbundle_form4validacionregistro_matricula20163').val(total);
}


var plusNumber4_2016 = function (ele) {
    var total = 0;
    $(".krlos4").each(function () {
        if (isNaN(parseInt($(this).val()))) {
            total += 0;
        } else {
            total += parseInt($(this).val());
        }

    });
    $('#appbundle_form4validacionregistro_matricula20164').val(total);
}



var plusNumber5_2016 = function (ele) {
    var total = 0;
    $(".krlos5").each(function () {
        if (isNaN(parseInt($(this).val()))) {
            total += 0;
        } else {
            total += parseInt($(this).val());
        }

    });
    $('#appbundle_form4validacionregistro_matricula20165').val(total);
}



var plusNumber6_2016 = function (ele) {
    var total = 0;
    $(".krlos6").each(function () {
        if (isNaN(parseInt($(this).val()))) {
            total += 0;
        } else {
            total += parseInt($(this).val());
        }

    });
    $('#appbundle_form4validacionregistro_matricula20166').val(total);
}


//to the columns


var sumcol1 = function (ele,num) {
    var total = 0;
    ele = parseInt(ele);
    total = $('#appbundle_form4validacionregistro_promovidos2016Total').val();
    console.log(total);
    
    if (isNaN(parseInt(ele))) {
        total += 0;
    }else{
        total = (total == null || total == undefined || total == "" || isNaN(parseInt(total))) ? 0 : total;
        total = (parseInt(total) + parseInt(ele));
    }
    
    $('#appbundle_form4validacionregistro_promovidos2016Total').val(total);
    // console.log(total);
    // return false;

    // $('#appbundle_form4validacionregistro_promovidos2016Total').val(total);
}

