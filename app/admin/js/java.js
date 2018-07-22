$(document).ready(function() {	
	$(".dell-red a").click(function(e) {
	e.preventDefault();	
	var qwerty = $(this).attr('href');
	var id = $(this).attr('id');
	var qtable = $(this).attr('qtable');
	
	var dataString = "id="+id+"&table="+qtable; 
	$.ajax({
      type: "POST",
	  context: this,
      url: qwerty,
      data: dataString,
      success: function(e) {		
      	$('tr[id="'+id+'"][qtable="'+qtable+'"]').hide();	
	  }
      
     });
    return false;
});	



}); // ךךממםוצ ready