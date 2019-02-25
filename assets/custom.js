
/* 
	Javascript basic syntax:

		var - declare variable;

		foreach loops - for each index check how many values - example adjacency list;
	
	JQuery Basic Syntax:

		$ - declare something, this case an event //'on-click'
		


		# = id from element(s)
		. = a class(es)

		 */ 



/* when element is trigger(clicked, event) load function/ execute, same connection(jQuery Ajax) 


 * 
 * @ {Joao} 
 * IS NOT LOADING - MAKING DIFICULT [GLOBAL] FUNCTIONS - JS
 *  */

function  alertSuccess(data) {//Joao
    //Customise alert function
    //Read a String to display it
    var delay = alertify.get('notifier','delay');
    alertify.set('notifier','delay', 1);
    alertify.set('notifier','position', 'bottom-right');
    alertify.success(data).dismissOthers();
    alertify.set('notifier','delay', delay);
};
function  alertError(data) {//Joao
    var delay = alertify.get('notifier','delay');
    alertify.set('notifier','delay', 1);
    alertify.set('notifier','position', 'bottom-right');
    alertify.error(data).dismissOthers();
    alertify.set('notifier','delay', delay);
};

function  alertWarning(data) {//Joao
    var delay = alertify.get('notifier','delay');
    alertify.set('notifier','delay', 1);
    alertify.set('notifier','position', 'bottom-right');
    alertify.warning(data).dismissOthers(); 
    alertify.set('notifier','delay', delay);
};



$( '#search-op' ).on('click',function(){
  //Trigger Page Search
    alertWarning("Loading...") ; 
    $.ajax({
     url:base_url()+'index.php/Homecontroller/index_content',
     method:"POST",
     dataType:'text',
     success:function(data){

      $('#container').html("");//put empty all elements
      
      $('#container').html(data);
      
      alertSuccess("Loaded");
     },
     error: function(xhr, status, error){ 
     	alert('Search Error: '+ xhr.status+ ' - '+ error); 
     }
 	});
});

$( "#nav-op" ).on('click',function() {//Joao
    
  //Trigger Page Navigation Campus
    $.ajax({
        url:base_url()+'index.php/Homecontroller/index_contentNavCam',
        method:"POST",
        datatype:'text',
        success:function(data){
            $('#container').html("");
            $('#container').html(data);
        },
        error: function(xhr, status, error){
            alert('Search Error: '+ xhr.status+' - '+ error);
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
};


