jQuery(document).ready(function($) {

$(function() {
  $('#career-scroll').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 400);
        return false;
      }
    }
  });
});
//Send Motorbikes start
$('.sendMoped').click(function(){
    $('.brand-container').empty();
    $('.brand-container').load('../wp-content/themes/mitsukoshi-theme/motorbikes/moped.php');
    return false;
    });
$('.sendScooter').click(function(){
    $('.brand-container').empty();
    $('.brand-container').load('../wp-content/themes/mitsukoshi-theme/motorbikes/scooter.php');
    return false;
    });
$('.sendBusiness').click(function(){
    $('.brand-container').empty();
    $('.brand-container').load('../wp-content/themes/mitsukoshi-theme/motorbikes/business.php');
    return false;
    });
$('.sendSport').click(function(){
    $('.brand-container').empty();
    $('.brand-container').load('../wp-content/themes/mitsukoshi-theme/motorbikes/sport.php');
    return false;
    });
$('.sendMaxi').click(function(){
    $('.brand-container').empty();
    $('.brand-container').load('../wp-content/themes/mitsukoshi-theme/motorbikes/maxi.php');
    return false;
    });
$('.send45').click(function(){
    $('.brand-container').empty();
    $('.brand-container').load('../wp-content/themes/mitsukoshi-theme/motorbikes/45k.php');
    return false;
    });
$('.send60').click(function(){
    $('.brand-container').empty();
    $('.brand-container').load('../wp-content/themes/mitsukoshi-theme/motorbikes/60k.php');
    return false;
    });
$('.send100').click(function(){
    $('.brand-container').empty();
    $('.brand-container').load('../wp-content/themes/mitsukoshi-theme/motorbikes/100k.php');
    return false;
    });
$('.send100plus').click(function(){
    $('.brand-container').empty();
    $('.brand-container').load('../wp-content/themes/mitsukoshi-theme/motorbikes/100plus.php');
    return false;
    });
$('.send150cc').click(function(){
    $('.brand-container').empty();
    $('.brand-container').load('../wp-content/themes/mitsukoshi-theme/motorbikes/150cc.php');
    return false;
    });
$('.send100cc').click(function(){
    $('.brand-container').empty();
    $('.brand-container').load('../wp-content/themes/mitsukoshi-theme/motorbikes/100cc.php');
    return false;
    });
$('.send150ccplus').click(function(){
    $('.brand-container').empty();
    $('.brand-container').load('../wp-content/themes/mitsukoshi-theme/motorbikes/150ccplus.php');
    return false;
    });
//Send Motorbikes end
//Send stores Luzon start
$('.sendabra').click(function(){
      $('.show-area').empty();
      $('.show-area').load('../wp-content/themes/mitsukoshi-theme/stores/abra.php');
      return false;
    });
$('.sendalbay').click(function(){
      $('.show-area').empty();
      $('.show-area').load('../wp-content/themes/mitsukoshi-theme/stores/albay.php');
      return false;
    });
$('.sendaurora').click(function(){
      $('.show-area').empty();
      $('.show-area').load('../wp-content/themes/mitsukoshi-theme/stores/aurora.php');
      return false;
    });
$('.sendbataan').click(function(){
      $('.show-area').empty();
      $('.show-area').load('../wp-content/themes/mitsukoshi-theme/stores/bataan.php');
      return false;
    });
$('.sendbatangas').click(function(){
      $('.show-area').empty();
      $('.show-area').load('../wp-content/themes/mitsukoshi-theme/stores/batangas.php');
      return false;
    });
$('.sendbenguet').click(function(){
      $('.show-area').empty();
      $('.show-area').load('../wp-content/themes/mitsukoshi-theme/stores/benguet.php');
      return false;
    });
$('.sendbulacan').click(function(){
      $('.show-area').empty();
      $('.show-area').load('../wp-content/themes/mitsukoshi-theme/stores/bulacan.php');
      return false;
    });
$('.sendcagayan').click(function(){
      $('.show-area').empty();
      $('.show-area').load('../wp-content/themes/mitsukoshi-theme/stores/cagayan.php');
      return false;
    });
$('.sendcavite').click(function(){
      $('.show-area').empty();
      $('.show-area').load('../wp-content/themes/mitsukoshi-theme/stores/cavite.php');
      return false;
    });
$('.sendcamarinesnorte').click(function(){
      $('.show-area').empty();
      $('.show-area').load('../wp-content/themes/mitsukoshi-theme/stores/camarinesnorte.php');
      return false;
    });
$('.sendcamarinessur').click(function(){
      $('.show-area').empty();
      $('.show-area').load('../wp-content/themes/mitsukoshi-theme/stores/camarinessur.php');
      return false;
    });
$('.sendcatanduanes').click(function(){
      $('.show-area').empty();
      $('.show-area').load('../wp-content/themes/mitsukoshi-theme/stores/catanduanes.php');
      return false;
    });
$('.sendifugao').click(function(){
      $('.show-area').empty();
      $('.show-area').load('../wp-content/themes/mitsukoshi-theme/stores/ifugao.php');
      return false;
    });
$('.sendisabella').click(function(){
      $('.show-area').empty();
      $('.show-area').load('../wp-content/themes/mitsukoshi-theme/stores/isabella.php');
      return false;
    });
$('.sendilocossur').click(function(){
      $('.show-area').empty();
      $('.show-area').load('../wp-content/themes/mitsukoshi-theme/stores/ilocossur.php');
      return false;
    });
$('.sendilocosnorte').click(function(){
      $('.show-area').empty();
      $('.show-area').load('../wp-content/themes/mitsukoshi-theme/stores/ilocosnorte.php');
      return false;
    });
$('.sendlaguna').click(function(){
      $('.show-area').empty();
      $('.show-area').load('../wp-content/themes/mitsukoshi-theme/stores/laguna.php');
      return false;
    });
$('.sendlaunion').click(function(){
      $('.show-area').empty();
      $('.show-area').load('../wp-content/themes/mitsukoshi-theme/stores/launion.php');
      return false;
    });
$('.sendmetromanila').click(function(){
      $('.show-area').empty();
      $('.show-area').load('../wp-content/themes/mitsukoshi-theme/stores/metromanila.php');
      return false;
    });
$('.sendnuevaencija').click(function(){
      $('.show-area').empty();
      $('.show-area').load('../wp-content/themes/mitsukoshi-theme/stores/nuevaencija.php');
      return false;
    });
$('.sendnuevavizcaja').click(function(){
      $('.show-area').empty();
      $('.show-area').load('../wp-content/themes/mitsukoshi-theme/stores/nuevavizcaja.php');
      return false;
    });
$('.sendpampanga').click(function(){
      $('.show-area').empty();
      $('.show-area').load('../wp-content/themes/mitsukoshi-theme/stores/pampanga.php');
      return false;
    });
$('.sendpangasinan').click(function(){
      $('.show-area').empty();
      $('.show-area').load('../wp-content/themes/mitsukoshi-theme/stores/pangasinan.php');
      return false;
    });
$('.sendquezon').click(function(){
      $('.show-area').empty();
      $('.show-area').load('../wp-content/themes/mitsukoshi-theme/stores/quezon.php');
      return false;
    });
$('.sendquirino').click(function(){
      $('.show-area').empty();
      $('.show-area').load('../wp-content/themes/mitsukoshi-theme/stores/quirino.php');
      return false;
    });
$('.sendrizal').click(function(){
      $('.show-area').empty();
      $('.show-area').load('../wp-content/themes/mitsukoshi-theme/stores/rizal.php');
      return false;
    });
$('.sendsorsogon').click(function(){
      $('.show-area').empty();
      $('.show-area').load('../wp-content/themes/mitsukoshi-theme/stores/sorsogon.php');
      return false;
    });
$('.sendtarlac').click(function(){
      $('.show-area').empty();
      $('.show-area').load('../wp-content/themes/mitsukoshi-theme/stores/tarlac.php');
      return false;
    });
$('.sendzambales').click(function(){
      $('.show-area').empty();
      $('.show-area').load('../wp-content/themes/mitsukoshi-theme/stores/zambales.php');
      return false;
    });
$('.sendbrookespoint').click(function(){
      $('.show-area').empty();
      $('.show-area').load('../wp-content/themes/mitsukoshi-theme/stores/brookespoint.php');
      return false;
    });
$('.sendcoron').click(function(){
      $('.show-area').empty();
      $('.show-area').load('../wp-content/themes/mitsukoshi-theme/stores/coron.php');
      return false;
    });
$('.sendcuyo').click(function(){
      $('.show-area').empty();
      $('.show-area').load('../wp-content/themes/mitsukoshi-theme/stores/cuyo.php');
      return false;
    });
$('.sendelnido').click(function(){
      $('.show-area').empty();
      $('.show-area').load('../wp-content/themes/mitsukoshi-theme/stores/elnido.php');
      return false;
    });
$('.sendnarra').click(function(){
      $('.show-area').empty();
      $('.show-area').load('../wp-content/themes/mitsukoshi-theme/stores/narra.php');
      return false;
    });
$('.sendpuertaprincessa').click(function(){
      $('.show-area').empty();
      $('.show-area').load('../wp-content/themes/mitsukoshi-theme/stores/puertaprincessa.php');
      return false;
    });
$('.sendquezonpalawan').click(function(){
      $('.show-area').empty();
      $('.show-area').load('../wp-content/themes/mitsukoshi-theme/stores/quezonpalawan.php');
      return false;
    });
$('.sendrizalpalawan').click(function(){
      $('.show-area').empty();
      $('.show-area').load('../wp-content/themes/mitsukoshi-theme/stores/rizalpalawan.php');
      return false;
    });
$('.sendroxaspalawan').click(function(){
      $('.show-area').empty();
      $('.show-area').load('../wp-content/themes/mitsukoshi-theme/stores/roxaspalawan.php');
      return false;
    });
$('.sendtaytaypalawan').click(function(){
      $('.show-area').empty();
      $('.show-area').load('../wp-content/themes/mitsukoshi-theme/stores/taytaypalawan.php');
      return false;
    });
//Send stores Luzon end
//Send stores Visayas
$('.sendaklan').click(function(){
      $('.show-area').empty();
      $('.show-area').load('../wp-content/themes/mitsukoshi-theme/stores/aklan.php');
      return false;
    });
$('.sendantique').click(function(){
      $('.show-area').empty();
      $('.show-area').load('../wp-content/themes/mitsukoshi-theme/stores/antique.php');
      return false;
    });
$('.sendbohol').click(function(){
      $('.show-area').empty();
      $('.show-area').load('../wp-content/themes/mitsukoshi-theme/stores/bohol.php');
      return false;
    });
$('.sendcapiz').click(function(){
      $('.show-area').empty();
      $('.show-area').load('../wp-content/themes/mitsukoshi-theme/stores/capiz.php');
      return false;
    });
$('.sendcarcarcebu').click(function(){
      $('.show-area').empty();
      $('.show-area').load('../wp-content/themes/mitsukoshi-theme/stores/carcar.php');
      return false;
    });
$('.sendguimaras').click(function(){
      $('.show-area').empty();
      $('.show-area').load('../wp-content/themes/mitsukoshi-theme/stores/guimaras.php');
      return false;
    });
$('.sendmadamecebu').click(function(){
      $('.show-area').empty();
      $('.show-area').load('../wp-content/themes/mitsukoshi-theme/stores/mandaue.php');
      return false;
    });
$('.sendtalisaycebu').click(function(){
      $('.show-area').empty();
      $('.show-area').load('../wp-content/themes/mitsukoshi-theme/stores/talisay.php');
      return false;
    });
$('.sendiloilo').click(function(){
      $('.show-area').empty();
      $('.show-area').load('../wp-content/themes/mitsukoshi-theme/stores/iloilo.php');
      return false;
    });
$('.sendleyte').click(function(){
      $('.show-area').empty();
      $('.show-area').load('../wp-content/themes/mitsukoshi-theme/stores/leyte.php');
      return false;
    });
$('.sendnegrosoccidental').click(function(){
      $('.show-area').empty();
      $('.show-area').load('../wp-content/themes/mitsukoshi-theme/stores/negrosoccidental.php');
      return false;
    });
//Send stores Visayas end
//Send stores Mindanao start
$('.sendagusan').click(function(){
      $('.show-area').empty();
      $('.show-area').load('../wp-content/themes/mitsukoshi-theme/stores/agusan.php');
      return false;
    });
$('.sendbukidnon').click(function(){
      $('.show-area').empty();
      $('.show-area').load('../wp-content/themes/mitsukoshi-theme/stores/bukidnon.php');
      return false;
    });
$('.sendcagayandeoro').click(function(){
      $('.show-area').empty();
      $('.show-area').load('../wp-content/themes/mitsukoshi-theme/stores/cagayandeoro.php');
      return false;
    });
$('.sendcaraga').click(function(){
      $('.show-area').empty();
      $('.show-area').load('../wp-content/themes/mitsukoshi-theme/stores/caraga.php');
      return false;
    });
$('.sendcompostela').click(function(){
      $('.show-area').empty();
      $('.show-area').load('../wp-content/themes/mitsukoshi-theme/stores/compostela.php');
      return false;
    });
$('.sendcotabato').click(function(){
      $('.show-area').empty();
      $('.show-area').load('../wp-content/themes/mitsukoshi-theme/stores/cotabato.php');
      return false;
    });
$('.sendsouthcotabato').click(function(){
      $('.show-area').empty();
      $('.show-area').load('../wp-content/themes/mitsukoshi-theme/stores/southcotabato.php');
      return false;
    });    
$('.senddavao').click(function(){
      $('.show-area').empty();
      $('.show-area').load('../wp-content/themes/mitsukoshi-theme/stores/davao.php');
      return false;
    });
$('.senddavaodelsur').click(function(){
      $('.show-area').empty();
      $('.show-area').load('../wp-content/themes/mitsukoshi-theme/stores/davaodelsur.php');
      return false;
    });
$('.senddavaooriental').click(function(){
      $('.show-area').empty();
      $('.show-area').load('../wp-content/themes/mitsukoshi-theme/stores/davaooriental.php');
      return false;
    });    
$('.senddavaodelnorte').click(function(){
      $('.show-area').empty();
      $('.show-area').load('../wp-content/themes/mitsukoshi-theme/stores/davaodelnorte.php');
      return false;
    });
$('.sendlanao').click(function(){
      $('.show-area').empty();
      $('.show-area').load('../wp-content/themes/mitsukoshi-theme/stores/lanao.php');
      return false;
    });
$('.sendmaguindanao').click(function(){
      $('.show-area').empty();
      $('.show-area').load('../wp-content/themes/mitsukoshi-theme/stores/maguindanao.php');
      return false;
    });
$('.sendmasbate').click(function(){
      $('.show-area').empty();
      $('.show-area').load('../wp-content/themes/mitsukoshi-theme/stores/masbate.php');
      return false;
    });
$('.sendmisamis').click(function(){
      $('.show-area').empty();
      $('.show-area').load('../wp-content/themes/mitsukoshi-theme/stores/misamis.php');
      return false;
    });
$('.sendmisamisoccidental').click(function(){
      $('.show-area').empty();
      $('.show-area').load('../wp-content/themes/mitsukoshi-theme/stores/misamisoccidental.php');
      return false;
    });
$('.sendmisamisoriental').click(function(){
      $('.show-area').empty();
      $('.show-area').load('../wp-content/themes/mitsukoshi-theme/stores/misamisoriental.php');
      return false;
    });
$('.sendsurigao').click(function(){
      $('.show-area').empty();
      $('.show-area').load('../wp-content/themes/mitsukoshi-theme/stores/surigao.php');
      return false;
    });
$('.sendsurigaodelsur').click(function(){
      $('.show-area').empty();
      $('.show-area').load('../wp-content/themes/mitsukoshi-theme/stores/surigaodelsur.php');
      return false;
    });
$('.sendzamboangadelnorte').click(function(){
      $('.show-area').empty();
      $('.show-area').load('../wp-content/themes/mitsukoshi-theme/stores/zamboangadelnorte.php');
      return false;
    });
$('.sendzamboangadelsur').click(function(){
      $('.show-area').empty();
      $('.show-area').load('../wp-content/themes/mitsukoshi-theme/stores/zamboangadelsur.php');
      return false;
    });
$('.sendzamboangasibugay').click(function(){
      $('.show-area').empty();
      $('.show-area').load('../wp-content/themes/mitsukoshi-theme/stores/zamboangasibugay.php');
      return false;
    });

//set animation timing
  var animationDelay = 2500,
    //loading bar effect
    barAnimationDelay = 3800,
    barWaiting = barAnimationDelay - 3000, //3000 is the duration of the transition on the loading bar - set in the scss/css file
    //letters effect
    lettersDelay = 50,
    //type effect
    typeLettersDelay = 150,
    selectionDuration = 500,
    typeAnimationDelay = selectionDuration + 800,
    //clip effect 
    revealDuration = 600,
    revealAnimationDelay = 1500;
  
  initHeadline();
  

  function initHeadline() {
    //insert <i> element for each letter of a changing word
    singleLetters($('.cd-headline.letters').find('b'));
    //initialise headline animation
    animateHeadline($('.cd-headline'));
  }

  function singleLetters($words) {
    $words.each(function(){
      var word = $(this),
        letters = word.text().split(''),
        selected = word.hasClass('is-visible');
      for (i in letters) {
        if(word.parents('.rotate-2').length > 0) letters[i] = '<span class="blip">' + letters[i] + '</span>';
        letters[i] = (selected) ? '<i class="in">' + letters[i] + '</i>': '<i>' + letters[i] + '</i>';
      }
        var newLetters = letters.join('');
        word.html(newLetters).css('opacity', 1);
    });
  }

  function animateHeadline($headlines) {
    var duration = animationDelay;
    $headlines.each(function(){
      var headline = $(this);
      
      if(headline.hasClass('loading-bar')) {
        duration = barAnimationDelay;
        setTimeout(function(){ headline.find('.cd-words-wrapper').addClass('is-loading') }, barWaiting);
      } else if (headline.hasClass('clip')){
        var spanWrapper = headline.find('.cd-words-wrapper'),
          newWidth = spanWrapper.width() + 10
        spanWrapper.css('width', newWidth);
      } else if (!headline.hasClass('type') ) {
        //assign to .cd-words-wrapper the width of its longest word
        var words = headline.find('.cd-words-wrapper b'),
          width = 0;
        words.each(function(){
          var wordWidth = $(this).width();
            if (wordWidth > width) width = wordWidth;
        });
        headline.find('.cd-words-wrapper').css('width', width);
      };

      //trigger animation
      setTimeout(function(){ hideWord( headline.find('.is-visible').eq(0) ) }, duration);
    });
  }

  function hideWord($word) {
    var nextWord = takeNext($word);
    
    if($word.parents('.cd-headline').hasClass('type')) {
      var parentSpan = $word.parent('.cd-words-wrapper');
      parentSpan.addClass('selected').removeClass('waiting'); 
      setTimeout(function(){ 
        parentSpan.removeClass('selected'); 
        $word.removeClass('is-visible').addClass('is-hidden').children('i').removeClass('in').addClass('out');
      }, selectionDuration);
      setTimeout(function(){ showWord(nextWord, typeLettersDelay) }, typeAnimationDelay);
    
    } else if($word.parents('.cd-headline').hasClass('letters')) {
      var bool = ($word.children('i').length >= nextWord.children('i').length) ? true : false;
      hideLetter($word.find('i').eq(0), $word, bool, lettersDelay);
      showLetter(nextWord.find('i').eq(0), nextWord, bool, lettersDelay);

    }  else if($word.parents('.cd-headline').hasClass('clip')) {
      $word.parents('.cd-words-wrapper').animate({ width : '2px' }, revealDuration, function(){
        switchWord($word, nextWord);
        showWord(nextWord);
      });

    } else if ($word.parents('.cd-headline').hasClass('loading-bar')){
      $word.parents('.cd-words-wrapper').removeClass('is-loading');
      switchWord($word, nextWord);
      setTimeout(function(){ hideWord(nextWord) }, barAnimationDelay);
      setTimeout(function(){ $word.parents('.cd-words-wrapper').addClass('is-loading') }, barWaiting);

    } else {
      switchWord($word, nextWord);
      setTimeout(function(){ hideWord(nextWord) }, animationDelay);
    }
  }

  function showWord($word, $duration) {
    if($word.parents('.cd-headline').hasClass('type')) {
      showLetter($word.find('i').eq(0), $word, false, $duration);
      $word.addClass('is-visible').removeClass('is-hidden');

    }  else if($word.parents('.cd-headline').hasClass('clip')) {
      $word.parents('.cd-words-wrapper').animate({ 'width' : $word.width() + 10 }, revealDuration, function(){ 
        setTimeout(function(){ hideWord($word) }, revealAnimationDelay); 
      });
    }
  }

  function hideLetter($letter, $word, $bool, $duration) {
    $letter.removeClass('in').addClass('out');
    
    if(!$letter.is(':last-child')) {
      setTimeout(function(){ hideLetter($letter.next(), $word, $bool, $duration); }, $duration);  
    } else if($bool) { 
      setTimeout(function(){ hideWord(takeNext($word)) }, animationDelay);
    }

    if($letter.is(':last-child') && $('html').hasClass('no-csstransitions')) {
      var nextWord = takeNext($word);
      switchWord($word, nextWord);
    } 
  }

  function showLetter($letter, $word, $bool, $duration) {
    $letter.addClass('in').removeClass('out');
    
    if(!$letter.is(':last-child')) { 
      setTimeout(function(){ showLetter($letter.next(), $word, $bool, $duration); }, $duration); 
    } else { 
      if($word.parents('.cd-headline').hasClass('type')) { setTimeout(function(){ $word.parents('.cd-words-wrapper').addClass('waiting'); }, 200);}
      if(!$bool) { setTimeout(function(){ hideWord($word) }, animationDelay) }
    }
  }

  function takeNext($word) {
    return (!$word.is(':last-child')) ? $word.next() : $word.parent().children().eq(0);
  }

  function takePrev($word) {
    return (!$word.is(':first-child')) ? $word.prev() : $word.parent().children().last();
  }

  function switchWord($oldWord, $newWord) {
    $oldWord.removeClass('is-visible').addClass('is-hidden');
    $newWord.removeClass('is-hidden').addClass('is-visible');
  }


    $('.hide-me').addClass("secret").viewportChecker({
        classToAdd: 'visible animated fadeInLeftBig',
        offset: 300
       });


});