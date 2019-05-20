function addRow(tableID) {

  			var table = document.getElementById(tableID);

  			var rowCount = table.rows.length;
  			var row = table.insertRow(rowCount);

  			var colCount = table.rows[0].cells.length;

  			for(var i=0; i<colCount; i++) {

  				var newcell	= row.insertCell(i);

  				newcell.innerHTML = table.rows[1].cells[i].innerHTML;
  				//alert(newcell.childNodes);
  				switch(newcell.childNodes[0].type) {
  					case "text":
  							newcell.childNodes[0].value = "";
  							break;
  					case "checkbox":
  							newcell.childNodes[0].checked = false;
  							break;
  					case "select-one":
  							newcell.childNodes[0].selectedIndex = 0;
  							break;
  				}

  			}
        if(table.rows.length>=6){
        document.getElementById('add').style.visibility='hidden';
        }
  		}

  		function deleteRow(tableID) {
  			try {
  			var table = document.getElementById(tableID);
  			var rowCount = table.rows.length;
			
  			for(var i=0; i<rowCount; i++) {
  				var row = table.rows[i];
  				var chkbox = row.cells[0].childNodes[0];
  				if(null != chkbox && true == chkbox.checked) {
  					if(rowCount <= 2) {
  						alert("Cannot delete all the rows.");
  						break;
  					}
  					table.deleteRow(i);
  					rowCount--;
  					i--;
  				}


  			}
  			}catch(e) {
  				alert(e);
  			}
			

  		}

  	 
   		function addRow1(tableID) {

   			var table = document.getElementById(tableID);

   			var rowCount = table.rows.length;
   			var row = table.insertRow(rowCount);

   			var colCount = table.rows[0].cells.length;

   			for(var i=0; i<colCount; i++) {

   				var newcell	= row.insertCell(i);

   				newcell.innerHTML = table.rows[1].cells[i].innerHTML;
   				//alert(newcell.childNodes);
   				switch(newcell.childNodes[0].type) {
   					case "text":
   							newcell.childNodes[0].value = "";
   							break;
   					case "checkbox":
   							newcell.childNodes[0].checked = false;
   							break;
   					case "select-one":
   							newcell.childNodes[0].selectedIndex = 0;
   							break;
   				}

   			}
         if(table.rows.length>=4){
            document.getElementById('add1').style.visibility='hidden';

         }
 

   		}

function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
 
 function startDictation() {

    if (window.hasOwnProperty('webkitSpeechRecognition')) {

      var recognition = new webkitSpeechRecognition();

      recognition.continuous = false;
      recognition.interimResults = false;

      recognition.lang = "en-US";
      recognition.start();

      recognition.onresult = function(e) {
        document.getElementById('transcript').value
                                 = e.results[0][0].transcript;
        recognition.stop();
        document.getElementById('labnol').submit();
      };

      recognition.onerror = function(e) {
        recognition.stop();
      }
	  

    }
  }
  
  $(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});

$(document).ready(function(){
      var i=1;
     $("#add_row").click(function(){
      $('#addr'+i).html("<td>"+ (i+1) +"</td><td><input name='name"+i+"' type='text' placeholder='Name' class='form-control input-md'  /> </td><td><input  name='mail"+i+"' type='text' placeholder='Mail'  class='form-control input-md'></td><td><input  name='mobile"+i+"' type='text' placeholder='Mobile'  class='form-control input-md'></td>");

      $('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');
      i++; 
  });
     $("#delete_row").click(function(){
    	 if(i>1){
		 $("#addr"+(i-1)).html('');
		 i--;
		 }
	 });

});

$('textarea#message_area').on('keyup',function() 
{
  var maxlen = $(this).attr('maxlength');
  
  var length = $(this).val().length;
  if(length > (maxlen-10) ){
    $('#textarea_message').text('max length '+maxlen+' characters only!')
  }
  else
    {
      $('#textarea_message').text('');
    }
});