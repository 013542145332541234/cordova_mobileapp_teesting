<html> 
  <div id="s1">
    <div class="sit_2">
      You  stumble upon a dark cave. Do you go inside or not?               
    </div>
    <div class="sit_3a">
      A hungry bear comes and kills you.
    </div>
  </div>

  <div id="q1">
    <input type="button" class="choice_2a" value="Go inside">
    <input type="button" class="choice_2b" value="Don't go inside">
  </div>
  <audio id="bear" preload="auto" src ="Bg_Music/tongue-click.wav"></audio>    
</html>


<javascript type="text/javascript">
  $(document).ready(function(){
    $(".choice_2a").click(function(){
      $(".sit_2, .choice_2a, .choice_2b").hide();
      $("#cave").fadeOut(3000);
      $(".sit_3a").fadeIn(3000);
      $("#bear").play();
    });
  )}
</javascript>