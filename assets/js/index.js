/*
 (function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();

*/

$(".needs-validation").submit(function (event) {
    if($(this).form.checkValidity()=== false)
    $(this).classList.add('was-validated');
    event.preventDefault();
    event.stopPropagation();
    return false;    
});
$(window).scroll(function (event) {
    var scroll = $(window).scrollTop();
    var start=$('.coluna_pedido').offset().top;
    var end=start+$('.coluna_pedido').height()-$('.pedido').height();
    if(scroll>start){
        $('.pedido').css('position','fixed');
        if(scroll>end){
            $('.pedido').css('margin-top',(end-scroll)+'px')
        }else
         $('.pedido').css('margin-top','0px');
    }
    else{
        $('.pedido').css('position','static');
    }
});


$('.pedido_item').find(".subtrair_qtd_item_pedido").click(function() {
    var numero_qtd_item_pedido=$(this).closest(".pedido_item").find('.numero_qtd_item_pedido');
    var qtd=numero_qtd_item_pedido.val();
    var numero_sub_total_item_pedido=$(this).closest(".pedido_item").find('.numero_sub_total_item_pedido');
    //var id_produto=$(this).closest(".pedido_item").find('.id_produto');
    var valor_produto=$(this).closest(".pedido_item").find('.valor_produto');
    var valor=valor_produto.val();
    if(qtd<=1){
        $(this).closest(".pedido_item").remove();
        if($(".pedido_item").length==1)
            $('.pedido_vazio').removeClass('d-none');
    }
    else
        qtd--;
    numero_sub_total_item_pedido.html('R$ '+(valor*qtd).toFixed(2).replace(".",",", -1));
    numero_qtd_item_pedido.val(qtd);
});

$('.pedido_item').find(".somar_qtd_item_pedido").click(function() {
    var numero_qtd_item_pedido=$(this).closest(".pedido_item").find('.numero_qtd_item_pedido');
    var qtd=numero_qtd_item_pedido.val();
    var numero_sub_total_item_pedido=$(this).closest(".pedido_item").find('.numero_sub_total_item_pedido');
    //var id_produto=$(this).closest(".pedido_item").find('.id_produto');
    var valor_produto=$(this).closest(".pedido_item").find('.valor_produto');
    var valor=valor_produto.val();
    qtd++;
    numero_sub_total_item_pedido.html('R$ '+(valor*qtd).toFixed(2).replace(".",",", -1));
    numero_qtd_item_pedido.val(qtd);
    var total=0;
    $('.pedido_item').each(
    	function( index ) {
    	    numero_qtd_item_pedido=$(this).find('.numero_qtd_item_pedido');
            qtd=numero_qtd_item_pedido.val();
            valor=$(this).find('.valor_produto').val();
            total+=(valor*qtd);
    	}
	);
    $('.total_item_pedido').html('R$ '+(total).toFixed(2).replace(".",",", -1))
});


$('.pedido_item').find(".remover_qtd_item_pedido ").click(function() {
    $(this).closest(".pedido_item").remove();
    if($(".pedido_item").length==1)
        $('.pedido_vazio').removeClass('d-none');
});
$('.pedido_item').find(".remover_qtd_item_pedido ").click(function() {
    $(this).closest(".pedido_item").remove();
    if($(".pedido_item").length==1)
        $('.pedido_vazio').removeClass('d-none');
});

$('.carousel').carousel({
  interval: 3000
});

$('.combo').mouseover(function() {
  $(this).addClass("bg-light");
});
$('.combo').mouseout(function() {
  $(this).removeClass("bg-light");
});
$('.produtos').mouseover(function() {
    $(this).addClass("bg-light");
    $(this).find(".botao_comprar").show();
    $(this).find(".barra_verde_dinamica").addClass("barra_verde_dinamica_ativa");
});
$('.produtos').mouseout(function() {
    $(this).removeClass("bg-light");    
    $(this).find(".barra_verde_dinamica").removeClass("barra_verde_dinamica_ativa");
    $(this).find(".botao_comprar").hide(1);
});

$('.menu').mouseover(function() {
    $(this).addClass("menu_ativo");
});
$('.menu').mouseout(function() {
    $(this).removeClass("menu_ativo");
});


$( window ).resize(function() {
 owlCarouselStart();
});
function owlCarouselStart(){
    $('.owl-carousel').each(
    	function( index ) {
    	    var dist=($(this).closest(".owl-carousel").width()-50)+"px";
    	    
    		$( this ).owlCarousel({
    			
    			loop:true,
    			nav:true,
    			margin:0,
    			dots: false,
    			 navText:["<div class='esquerda_slide_home'><</div>","<div class='direita_slide_home' style='left:"+dist+"'>></div>"],
    			responsive:{
    				280:{
    					items:1.5
    				},	
    				360:{
    					items:2
    				},
    				375:{
    					items:2.1
    				},
    				411:{
    					items:2.2
    				},
    				414:{
    					items:2.3
    				},
    				540:{
    					items:3
    				},
    				600:{
    					items:2
    				},  	
    				768:{
    					items:2.3
    				},            
    				960:{
    					items:3
    				},
    				1024:{
    					items:3
    				},
    				1200:{
    					items:4
    				}
    			}
    		});
    		
    		$( this ).on('mousewheel', '.owl-stage', function (e) {
    				 if(e.originalEvent.wheelDelta  > 0)   {
    					$( this ).trigger('next.owl');
    				} else {
    					$( this ).trigger('prev.owl');
    				}
    				e.preventDefault();
    		});
    		
    	}	
    );
}
owlCarouselStart();