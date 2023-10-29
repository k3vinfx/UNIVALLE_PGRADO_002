(function($) {

  $('#compania').parent().append('<ul class="list-item" id="newcompania" name="compania"></ul>');
  $('#compania option').each(function(){
      $('#newcompania').append('<li value="' + $(this).val() + '">'+$(this).text()+'</li>');
  });
  $('#compania').remove();
  $('#newcompania').attr('id', 'compania');
  $('#compania li').first().addClass('init');
  $("#compania").on("click", ".init", function() {
      $(this).closest("#compania").children('li:not(.init)').toggle();
  });
  
  var allOptions = $("#compania").children('li:not(.init)');
  $("#compania").on("click", "li:not(.init)", function() {
      allOptions.removeClass('selected');
      $(this).addClass('selected');
      $("#compania").children('.init').html($(this).html());
      allOptions.toggle();
  });

  customDropdown('tiempo');
  function customDropdown(selectId) {
  $('#tiempo').parent().append('<ul class="list-item" id="newtiempo" name="tiempo"></ul>');
  $('#tiempo option').each(function(){
      $('#newtiempo').append('<li value="' + $(this).val() + '">'+$(this).text()+'</li>');
  });
  $('#tiempo').remove();
  $('#newtiempo').attr('id', 'tiempo');
  $('#tiempo li').first().addClass('init');
  $("#tiempo").on("click", ".init", function() {
      $(this).closest("#tiempo").children('li:not(.init)').toggle();
  });
  
  var allOptions = $("#tiempo").children('li:not(.init)');
  $("#tiempo").on("click", "li:not(.init)", function() {
      allOptions.removeClass('selected');
      $(this).addClass('selected');
      $("#tiempo").children('.init').html($(this).html());
      allOptions.toggle();
  });
}
customDropdown2('sexo');
function customDropdown2(selectId) {
$('#sexo').parent().append('<ul class="list-item" id="newsexo" name="sexo"></ul>');
$('#sexo option').each(function(){
    $('#newsexo').append('<li value="' + $(this).val() + '">'+$(this).text()+'</li>');
});
$('#sexo').remove();
$('#newsexo').attr('id', 'sexo');
$('#sexo li').first().addClass('init');
$("#sexo").on("click", ".init", function() {
    $(this).closest("#sexo").children('li:not(.init)').toggle();
});

var allOptions = $("#sexo").children('li:not(.init)');
$("#sexo").on("click", "li:not(.init)", function() {
    allOptions.removeClass('selected');
    $(this).addClass('selected');
    $("#sexo").children('.init').html($(this).html());
    allOptions.toggle();
});
}


  var marginSlider = document.getElementById('slider-margin');
  if (marginSlider != undefined) {
      noUiSlider.create(marginSlider, {
            start: [500],
            step: 10,
            connect: [true, false],
            tooltips: [true],
            range: {
                'min': 0,
                'max': 1000
            },
            format: wNumb({
                decimals: 0,
                thousand: ',',
                prefix: '$ ',
            })
    });
  }


  var marginSlider = document.getElementById('slider-margin2');

if (marginSlider != undefined) {
    noUiSlider.create(marginSlider, {
        start: [1],
        step: 1,
        range: {
            'min': [1],
            '7%': [7, 1],
            '14%': [4, 1],
            '28%': [12, 1],
            'max': [12]
        },
        format: wNumb({
            decimals: 0
        })
    });

    marginSlider.noUiSlider.on('update', function (values, handle) {
        var currentValue = parseInt(values[handle]);

        // Realiza acciones según el valor seleccionado
        if (currentValue >= 1 && currentValue <= 7) {
            console.log("Día " + currentValue);
            // Realiza acciones para días
        } else if (currentValue >= 8 && currentValue <= 11) {
            console.log("Semana " + (currentValue - 7));
            // Realiza acciones para semanas
        } else if (currentValue === 12) {
            console.log("Mes " + (currentValue - 11));
            // Realiza acciones para meses
        }
    });
}





/*
  $('#reset').on('click', function(){
      $('#register-form').reset();
  });

  $('#register-form').validate({
    rules : {
        first_name : {
            required: true,
        },
        last_name : {
            required: true,
        },
        company : {
            required: true
        },
        email : {
            required: true,
            email : true
        },
        phone_number : {
            required: true,
        }
    },
    onfocusout: function(element) {
        $(element).valid();
    },
});
*/
    jQuery.extend(jQuery.validator.messages, {
        required: "",
        remote: "",
        email: "",
        url: "",
        date: "",
        dateISO: "",
        number: "",
        digits: "",
        creditcard: "",
        equalTo: ""
    });
})(jQuery);