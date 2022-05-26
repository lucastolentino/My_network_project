$(document).ready(function(){
  $('.data').mask('11/11/1111');
  $('.tempo').mask('00:00:00');
  $('.data_tempo').mask('00/00/0000 00:00:00');
  $('.cep').mask('00000-000');
  $('.telefone').mask('0000-0000');
  $('.telefone_ddd').mask('(00) 0000-00000');
  $('.telefone_us').mask('(000) 000-0000');
  $('.cpf').mask('000.000.000-00', {reverse: true});
  $('.dinheiro_br').mask('000.000.000.000.000,00', {reverse: true});
});