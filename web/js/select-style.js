$('.selectpicker').selectpicker({
  style: 'btn-default',
  size: 5
});

$(document).on('ready', function(){
    $('#input-5').rating({clearCaption: 'Бъди първия оценил този потребител!'});
});