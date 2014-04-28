/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */




function gettime() {

var time_start = $('#EventEmployee_time_start_day').val();
var rest_start = $('#EventEmployee_time_start_rest').val();
var rest_end = $('#EventEmployee_time_end_rest').val();

            if ((time_start==0) && (rest_start==0)&& (rest_end ==0)){
                var d = new Date();
                document.getElementById("EventEmployee_time_start_day").value=d.toLocaleTimeString();
                document.getElementById("jornada1").value=d.toLocaleTimeString();
                document.getElementById("jornada2").value=d.toLocaleTimeString();
            
                
            }
            
            if ((time_start!=="") && (rest_start==0)){
                var d = new Date();
                document.getElementById("EventEmployee_time_start_rest").value=d.toLocaleTimeString();
                document.getElementById("desc1").value=d.toLocaleTimeString();
                document.getElementById("desc2").value=d.toLocaleTimeString();
            }
            
            if ((time_start!=="") && (rest_start!=="") &&(rest_end==0)){
                var d = new Date();
                document.getElementById("EventEmployee_time_end_rest").value=d.toLocaleTimeString();
                
            }

}