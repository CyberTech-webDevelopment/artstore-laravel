 $( document ).ready(function() {
		 $('.plus').click(function(){
			let quantity=$(this).parent().find('.quantity').html()*1
			quantity++
			$(this).parent().find('.quantity').html(quantity)
		})
		$('.minus').click(function(){
			let quantity=$(this).parent().find('.quantity').html()*1
			quantity--
			if(quantity<1){
				quantity=1
			}
			$(this).parent().find('.quantity').html(quantity)
		})
 })
 

