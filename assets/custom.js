
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
 * IS NOT LOADING - MAKING DIFICULT/Page-locally [notGLOBAL] FUNCTIONS - JS
 *  */


    $( document ).ready(function(){
        /** 
         * 
         * after all been load show body element - all to fix show elements with css
         * 
        */
        $( "#body_element_index" ).css("display", "block");


        $( '#search-op' ).on('click',function(){
        //Trigger Ajax after action on btn(search-op) on welcome_message.php
            alertWarning("Loading page...") ; 

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
                alertError("Search Error: "+ xhr.status+" - "+error); 
            }
            });
        });
        
        $( "#nav-op" ).on('click',function() {//Joao
            
            alertWarning("Loading page...") ; 
            //Trigger Page Navigation Campus
            $.ajax({
                url:base_url()+'index.php/Homecontroller/index_contentNavCam',
                method:"POST",
                datatype:'text',
                success:function(data){
                    $('#container').html("");
                    $('#container').html(data);
                    alertSuccess("Loaded");
                },
                error: function(xhr, status, error){
                    alertError("Search Error: "+ xhr.status+" - "+error);
                }
            });
        });

        $( "#scan-op" ).on('click',function() {//Antonio Braga
            
            alertWarning("Loading page...") ; 
            
            //Trigger Page Navigation Campus
            $.ajax({
                url:base_url()+'index.php/Homecontroller/index_loadScanPage',
                method:"POST",
                datatype:'text',
                success:function(data){
                    console.log(data);
                    $('#container').html("");
                    $('#container').html(data);
                    alertSuccess("Loaded");
                },
                error: function(xhr, status, error){
                    alertError("Search Error: "+ xhr.status+" - "+error);
                }
            });
        });
        
    });




    function base_url(route){
        //simulate base_url() on php but work nativelly on javascript - crucial when have a js file format


        // get the route segments
        pathArray = window.location.pathname.split( '/' );
        // find where the route is located
        indexOfSegment = pathArray.indexOf(route);
        // make base_url be the origin plus the path to the route
        return window.location.origin + pathArray.slice(0,indexOfSegment).join('/') + '/';
    };



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
        alertify.set('notifier','delay', 3);
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
