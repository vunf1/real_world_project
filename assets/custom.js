

/*
when element is trigger(clicked, event) load 
function/ execute, same connection(jQuery Ajax) 

	Javascript basic syntax:

		var -> declare variable;

		foreach loops - for each index check how many values  example adjacency list;
	
	JQuery Basic Syntax:

		$ - declare something, this case an event //'on-click'
		


		# = id from element(s)
		. = a class(es)

		 

 * 
 * @ {Joao} 
 *  
 * 
 * */


 
$( document ).ready(function(){
    /** 
     * 
     * after all been load show body element - all to fix bug elements design on boot
     * 
    */
    $( "#body_element_index" ).css("display", "block");


    $( '#search-op' ).on('click',function(){
    //Trigger Ajax after action on btn(search-op) on welcome_message.php
        alertWarning("Loading page..."); 

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
        //Trigger Ajax after action on btn(nav-op) on welcome_message.php
        alertWarning("Loading page...") ; 
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
        
        //Trigger Ajax after action on btn(scan-op) on welcome_message.php
        alertWarning("Loading page...") ; 
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



/**
 *
 * - simulate base_url() on php but work nativelly on javascript - crucial when have a js file format
 * - give URL for create a dinamic base to REQUESTS
 * @param {String} route 
 * @returns all URL  before first route 
 */
function base_url(route){
    // get the route segments
    pathArray = window.location.pathname.split( '/' );
    // find where the route is located
    indexOfSegment = pathArray.indexOf(route);
    // make base_url be the origin plus the path to the route
    return window.location.origin + pathArray.slice(0,indexOfSegment).join('/') + '/';
};



/**
 * - custom alert - success style - GREEN
 * 
 * @param {String} data:string 
 */
function  alertSuccess(data) {//Joao
    //Customise alert function
    //Read a String to display it
    var delay = alertify.get('notifier','delay');
    alertify.set('notifier','delay', 1);
    alertify.set('notifier','position', 'bottom-right');
    alertify.success(data).dismissOthers();
    alertify.set('notifier','delay', delay);
};
    
/**
 * - custom alert - error style - RED
 * 
 * @param {String} data:string 
 */
function  alertError(data) {//Joao
    var delay = alertify.get('notifier','delay');
    alertify.set('notifier','delay', 3);
    alertify.set('notifier','position', 'bottom-right');
    alertify.error(data).dismissOthers();
    alertify.set('notifier','delay', delay);
};
/**
 * - custom alert - warning style - YELLOW
 * 
 * @param {String} data:string  
 */
function  alertWarning(data) {//Joao
    var delay = alertify.get('notifier','delay');
    alertify.set('notifier','delay', 1);
    alertify.set('notifier','position', 'bottom-right');
    alertify.warning(data).dismissOthers(); 
    alertify.set('notifier','delay', delay);
};





 /**
  * - (1/3)
  * + Generate dinamic html code for the data retrieved from server
  * + Create event click ONclick : delevopPopupDinamic()
  * + delevopPopupDinamic() -> modelTrigger()
  * 
  * @param {JSON} mydata:json
  * @param {String} appendToElementID:string
  */
 function buildSearchList(mydata,appendToElementID){//Joao 
    $counter=0;
   delevopPopupDinamic(mydata);
   $.each(mydata,function(index, data) {

       var buildingName = data['name'];
       var image = data['image-dir'];
       var address = data['address'];
       var description = data['description'];

       var buildCode = data['buildCode'];

       var list = $('<br><div class=" container div_build list-group-flush" id="'+buildCode+'" ></div>');
       
           head=("<div class='clearfix split-items '><div class=' left-side' id='D"+data['buildCode']+"' >OMG</div><p  class=' right-side '>"+buildingName+" </p><p  class=' right-side '>Code: "+buildCode+" </p><p  class=' right-side '>Facilities: "+data['facilities'][0]+","+data['facilities'][1]+", . . . </p><small>Click for more information</small><p  class=' right-side2 '><a>Description:</a>"+description+"</p></div><br>");

        $(head).appendTo(list);
        $(list).appendTo("#"+appendToElementID);
        
   });
};

/**
 * - (2/3)
 *  - Create events dinamically for dinamic table
 * 
 * @param {JSON} mydata:array 
 */
function delevopPopupDinamic(mydata){//Joao
    
    $.each(mydata,function(index, data) {

        $(document).on('click', '#'+data['buildCode'] , function(){
            modelTrigger(data);
        });

    }); 


};

/**
 * - (3/3)
 * - Pop-Up window - trigger image 3D inside/ show all info about the building
 *
 * @param {JSON} data:jsonFormat
 */
function modelTrigger(data){//Joao
    var closable = alertify.alert().setting('closable');//grab the dialog instance using its parameter-less constructor then set multiple settings at once.
    alertify.alert().setting({
        'title':data['name'],
        'label':'Continue',
        /**
         * When key is pressed trigger event
         *
         */
        message:'<div id="D'+data['buildCode']+'"></div>',
        'onok': function(){ 
            
            alertify.success(data['name']+' Checked');}
        }).show();
};
