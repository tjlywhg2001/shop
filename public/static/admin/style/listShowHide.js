var Divs = $('.datalist');
for ( i=0; i<Divs.length; i++ ){
	var pid = Divs.eq(i).data('type');
	if ( pid == 0 ){
		var div = '';
		div += '<div c style="display:inline-block; width:10px; height:10px; background:#f90;"></div>';
		Divs.eq(i).append(div);
	}
}


$(function(){
	$('.datalist').click(function(){
		var index = $('.datalist').index(this)
		listShowHide( index );
	});
});

function listShowHide( index ){
	var Divs = $('.datalist');
	for ( i=0; i<Divs.length; i++ ){
		if (){

		}
		// console.log(pid);
	}
}