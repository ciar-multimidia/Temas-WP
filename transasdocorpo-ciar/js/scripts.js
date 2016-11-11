jQuery(document).ready(function() {
  // jQuery('.galeria a').fancybox({
  //   openEffect  : 'none',
  //   closeEffect : 'none',
  //   helpers : {
  //     media : {}
  //   }
  // }); 

	jQuery(".galeria a").fancybox({
		prevEffect	: 'none',
		nextEffect	: 'none',
		helpers	: {
			title	: {
				type: 'outside'
			},
			thumbs	: {
				width	: 50,
				height	: 50
			}
		}
	});  
});