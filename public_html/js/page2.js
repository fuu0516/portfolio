$(function(){
  $('.section').hide();
  $('.all').show();
  $('.list').on('click',function(){
    $('.section').not($('.'+$(this).attr('id'))).hide();
    $('.'+$(this).attr('id')).show();
  });
});
