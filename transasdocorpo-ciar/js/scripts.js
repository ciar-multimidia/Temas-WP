jQuery(document).ready(function() {
  // jQuery('.galeria a').fancybox({
  //   openEffect  : 'none',
  //   closeEffect : 'none',
  //   helpers : {
  //     media : {}
  //   }
  // }); 

	jQuery(".galeria a").fancybox({
		openEffect	: 'none',
		closeEffect	: 'none',
		helpers	: {
			title	: {
				type: 'inside'
			}
		}
	});  
});