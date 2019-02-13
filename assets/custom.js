/* 
	Javascript basic syntax:

		var - declare variable;

		foreach loops - for each index check how many values - example adjacency list;
	
	JQuery Basic Syntax:

		$ - declare something, this case an event //'on-click'
		


		# = id from element(s)
		. = a class(es)

		 */ 


/* during the loading of the element (what2DO)
$(window).load(function() {



});
 */

/* when element is full load (ready to execute) */
$(document).ready(function() {

});



/* when element is trigger(clicked) load function/ execute same connection */
$( "#search-op" ).on('click',function() {
  alert("OKOK");

    $.ajax({
     url:base_url()+'index.php/Homecontroller/index_content',
     method:"POST",
     dataType:'text',
     success:function(data){

      $('#container').html("");//put empty all element
      
      $('#container').html(data);
      
          },
     error: function(xhr, status, error) { 
     	alert('Search Error: '+ xhr.status+ ' - '+ error); 
     }
 	});
	



});

function base_url(route){

   // get the route segments
   pathArray = window.location.pathname.split( '/' );
   // find where the route is located
   indexOfSegment = pathArray.indexOf(route);
   // make base_url be the origin plus the path to the route
   return window.location.origin + pathArray.slice(0,indexOfSegment).join('/') + '/';
}




function buildList(data){




};

$( "#OK" ).on('click',function() {

	allert("KKK");

});

