"use strict";

$(document).ready(function () {
  var x = 1;
  var paused = false;
  var slidermandala = setInterval(function () {
    if (!paused) {
      if (x == 5) {
        x = 0;
      }

      $(".container-mandala .img.bg, .container-mandala-compromisso .img.bg").removeAttr('id');
      $(".container-mandala .img.bg, .container-mandala-compromisso .img.bg").attr('id', 'bg' + x);
      x++;
    }
  }, 5000);
  $('.sliderTopo').addClass('loaded');
  var toggle = true;
  $(".parte").mouseenter(function () {
    if (toggle) {
      $('.mandala-div .bg').removeClass('bem-estar habitat tecnologia comunidade');
      $('.container-mandala .menu').fadeIn(400);
      $('.container-mandala .menu span strong').fadeOut(400);
      paused = true;
      $(".container-mandala .img.bg").removeAttr('id');
      $('.mandala-div .bg').addClass($(this).attr('label'));
      $(this).addClass('hover');
      $('.container-mandala .menu span .' + $(this).attr('label')).fadeIn(400);
    } else {
      $('.mandala-div .bg').removeClass('bem-estar habitat tecnologia comunidade');
      $('.mandala-div .bg').addClass($(this).attr('label'));
      $(".container-mandala .img.bg").removeAttr('id');
      $('.mandala-div .bg').addClass($(this).attr('label'));
      $(this).addClass('hover');
    }
  }).mouseleave(function () {
    if (toggle) {
      $(this).removeClass('hover');
      $('.mandala-div .bg').removeClass('bem-estar habitat tecnologia comunidade');
      paused = false;
      $('.container-mandala .menu span strong').fadeOut(400);
      $('.container-mandala .menu').fadeOut(400);
    } else {
      $(this).removeClass('hover');
    }
  }).click(function () {
    if (toggle) {
      toggle = false;
      paused = true;
      $(this).addClass('clicked');
      $(this).removeClass('hover');
      $('#infograficos .itens .item:not(.' + $(this).attr('label') + ')').addClass('hidden');
      $('.itens .delete').addClass('show');
      var count = $('#infograficos .itens .item.' + $(this).attr('label')).length;

      if (count < 1) {
        $('#infograficos .itens .none').addClass('show');
      }
    } else {
      $('.parte').removeClass('clicked').removeClass('show');
      $('#infograficos .itens .item').removeClass('hidden');
      $('#infograficos .itens .none').removeClass('show');
      $(this).addClass('clicked');
      $('#infograficos .itens .item:not(.' + $(this).attr('label') + ')').addClass('hidden');
      $('.container-mandala .menu span strong').fadeOut(400);
      $('.container-mandala .menu span .' + $(this).attr('label')).fadeIn(400);
      var count = $('#infograficos .itens .item.' + $(this).attr('label')).length;

      if (count < 1) {
        $('#infograficos .itens .none').addClass('show');
      }
    }
  });
  $(".parte-c").mouseenter(function () {
    if (toggle) {
      $('.mandala-div .bg').removeClass('diversidade gestao cadeiav bio carbono agua');
      $('.container-mandala-compromisso .menu').fadeIn(400);
      $('.container-mandala-compromisso .menu span strong').fadeOut(400);
      paused = true;
      $(".container-mandala-compromisso .img.bg").removeAttr('id');
      $('.mandala-div .bg').addClass($(this).attr('label'));
      $(this).addClass('hover');
      $('.container-mandala-compromisso .menu span .' + $(this).attr('label')).fadeIn(400);
    } else {
      $('.mandala-div .bg').removeClass('diversidade gestao cadeiav bio carbono agua');
      $('.mandala-div .bg').addClass($(this).attr('label'));
      $(".container-mandala-compromisso .img.bg").removeAttr('id');
      $('.mandala-div .bg').addClass($(this).attr('label'));
      $(this).addClass('hover');
    }
  }).mouseleave(function () {
    if (toggle) {
      $(this).removeClass('hover');
      $('.mandala-div .bg').removeClass('diversidade gestao cadeiav bio carbono agua');
      paused = false;
      $('.container-mandala-compromisso .menu span strong').fadeOut(400);
      $('.container-mandala-compromisso .menu').fadeOut(400);
    } else {
      $(this).removeClass('hover');
    }
  });

  if ($('input.filter').length && ($('input.filter').val() == 'bem-estar' || $('input.filter').val() == 'habitat' || $('input.filter').val() == 'tecnologia' || $('input.filter').val() == 'comunidade')) {
    var parte = $('.parte[label=' + $('input.filter').val() + ']');
    toggle = false;
    paused = true;
    $('.mandala-div .bg').removeClass('bem-estar habitat tecnologia comunidade');
    $('.container-mandala .menu').fadeIn(400);
    $('.container-mandala .menu span strong').fadeOut(400);
    $(".container-mandala .img.bg").removeAttr('id');
    $('.mandala-div .bg').addClass(parte.attr('label'));
    parte.addClass('hover');
    $('.container-mandala .menu span .' + parte.attr('label')).fadeIn(400);
    parte.addClass('clicked');
    parte.removeClass('hover');
    $('.itens .delete').addClass('show');
    $('#infograficos .itens .item:not(.' + parte.attr('label') + ')').addClass('hidden');
    var count = $('#infograficos .itens .item.' + parte.attr('label')).length;

    if (count < 1) {
      $('#infograficos .itens .none').addClass('show');
    }
  }

  $('.itens .delete').click(function () {
    toggle = true;
    $('.parte').removeClass('clicked').removeClass('show');
    $('.itens .delete').removeClass('show');
    $('#infograficos .itens .item').removeClass('hidden');
    $('.mandala-div .bg').removeClass('bem-estar habitat tecnologia comunidade');
    $('#infograficos .itens .none').removeClass('show');
    paused = false;
    $('.container-mandala .menu span strong').fadeOut(400);
    $('.container-mandala .menu').fadeOut(400);
  });
  $('.sliderTopo .slider').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    speed: 400,
    fade: true,
    cssEase: 'linear',
    autoplay: true,
    autoplaySpeed: 5000,
    adaptiveHeight: true
  });
  $('.nutri').on('click', function () {
    $('#informacoes-nutricionais ,#informacoes-nutricionais .abs').toggleClass('margin');
    $('#nutri').toggleClass('show');
  });
  var mediaVideo = $("#videomodal video").get(0);
  $('#videomodal').on('shown.bs.modal', function (e) {
    mediaVideo.play();
  });
  $('#videomodal').on('hide.bs.modal', function (e) {
    mediaVideo.pause();
  });
  $('.noticiatrend .item').on('click', function (e) {
    e.preventDefault();
    var h = $(this).attr('href');
    $('#info-graficos iframe').attr('src', h);
    $('#info-graficos').modal('show');
  });
  $('#info-graficos').on('hide.bs.modal', function (e) {
    setTimeout(function () {
      $('#info-graficos iframe').attr('src', '');
    }, 500);
  });
});
$(window).resize(function () {
  if ($(window).width() < 768) {
    $(".dropdown-toggle").attr('data-toggle', 'dropdown');
  } else {
    $(".dropdown-toggle").removeAttr('data-toggle dropdown');
  }
});