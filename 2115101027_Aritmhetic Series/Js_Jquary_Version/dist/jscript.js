function sequence() {
  var first = parseInt($("#firstnum").val());
  var gap = parseInt($("#gap").val());
  var limit = 10; //Jumlah iterasi
  result =[];
  for(var i=1; i<=limit; i++) {
    result[i] = first + (i-1) * gap;
    
  }

  $("#result_1").val(result[1]);
  $("#result_2").val(result[2]);
  $("#result_3").val(result[3]);
  $("#result_4").val(result[4]);
  $("#result_5").val(result[5]);
  $("#result_6").val(result[6]);
  $("#result_7").val(result[7]);
  $("#result_8").val(result[8]);
  $("#result_9").val(result[9]);
  $("#result_10").val(result[10]);

  
}