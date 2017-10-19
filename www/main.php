<html>

<head>
	</head>

	<body>

<div id="level">
  



</div>



<div id="scoring">
  


</div>






<!-- scoring funtion -->






<script>


function checker(){
  $lines=file('words.txt');
       $lines=array();
  
  
    function find($lines) {
      $sorted_list = array_map("sortLetters", $lines);
      $hash_table = array();


      foreach($sorted_list as $key => $value) {
        if(isset($hash_table[$value])) {
          print $list[$key] . " is anngram of " . $list[$hash_table[$value]] . "\n";
        } else {
          $hash_table[$value] = $key;
        }
      }
    

    function sortLetters($st) {
      $letters = str_split($st);
      sort($letters);
      return implode($letters);
    }

    find($list);
}





var mrecord = 0;
function mistake(word)
  {
  if (word <= scrambled)
   {
    mrecord ++i;
   }


  else {
  
  }

function mcount(mistake){
  if(mistake <= 3 )

   window.open ("");
   rscore();
   }
var scores = 0 
function rscore(score){
  if (stage = true)
    {    
      score++ ; 
      }
    
    else mrecord;
}


function userscore(userid){

  while ( mistake >= 3){
    rscore();
  }


}






function main(argument) {

  mcount();

  print(userscore());


  // body...
}
</script>
</body>
<html>