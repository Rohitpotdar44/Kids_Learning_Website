var playing= false;
var score;
var trialsLeft;
var step;
var fruits = ['apple','banana','cherries','grapes','mango','orange','peach','pear','watermelon'];


$(function(){
    //click on start reset button
    $("#startreset").click(function(){
        
        
        //are we playing
        if(playing == true){
             //yes
        //reload page
            location.reload();
        }else{
            window.console.log("game initiated success");
             //We are not playing
            playing = true;//Game initiated
            score = 0;// set score to zero
            $("#scorevalue").html(score);
            
            // show trials left
            $("#trialsLeft").show();
            trialsLeft =3;
            addHearts();
                $("#gameOver").hide();
            
            // change button text to reset game2
            $("#startreset").html("Reset Game");
            
            startAction();
            }
            
        }
        
        
    );
    
    
$("#fruit1").mouseover(function(){
    score++;
    $("#scoreValue").html(score);
//    document.getElementById("sliceSound").play();
    $("#sliceSound")[0].play();//play sound
    
    
    //stop fruit 
  clearInterval(action);
    
    //hide fruit
    $("#fruit1").hide("explode",500);//slicing the fruit
    
    //send new fruit
   setTimeout(startAction,600);
});

        


//slice a fruit
    //play sound
    //explode fruit

function addHearts(){
    $("#trialsLeft").empty();
          for(i=0; i<trialsLeft;i++){
                $("#trialsLeft").append('<img src="images/heart.png" class="life">');
}
}

//start sending fruits
function startAction(){
    //1create a random fruit
        // define random step
        //2move fruit down one step every 30 sec

                //is fruit too low
                    //no > repeat 2.
                    // yes > any trials left?
                        // yes: repeat a
                        //no: show gameover, button text: start game
    
    //generate a fruit
    $("#fruit1").show();
    chooseFruit(); //choose a random fruit
    
    $("#fruit1").css({
        'left': Math.round(550*Math.random()),
        'top': -50    
        //locate fruit in a random position
    });
    //Generate a random step
    step = Math.round(5*Math.random())+1;//change step
    
    //Move fruit by one step every 10ms
    // Move one step every 10ms
    action = setInterval(function(){
        $("#fruit1").css("top",$("#fruit1").position().top +step);
        
        // check if fruit is too low
        if($("#fruit1").position().top > $("#fruitsContainer").height()){
            if(trialsLeft > 1){
                                 //generate a fruit
                    $("#fruit1").show();
                    chooseFruit(); //choose a random fruit

                    $("#fruit1").css({
                        'left': Math.round(550*Math.random()),
                        'top': -50    
                        //locate fruit in a random position
                    });
                    //Generate a random step
                    step = Math.round(5*Math.random())+1;//change step
           
                //reduce trials by one
                trialsLeft--;
                
                //populate trialsleft box
                addHearts();
            }else{
                //gameover
                playing= false;//We are not playing anymore
                $("#startreset").html("Play Again");//Change button to play again
                
                $("#gameOver").show();
                $("#gameOver").html("<p>Game Over</p><P>Your score is "+ score+ "</p>");
                
                $("#trialsLeft").hide();
               stopAction();
                
            }
        }else{
            
        }
        
    },10);
    
}

function chooseFruit(){
    $("#fruit1").attr('src','images/'+fruits[Math.round(8*Math.random())]+'.png');
}

function stopAction(){
    //stop dropping fruits
    clearInterval(action);
    $("#fruit1").hide();
}
    
    
    /*For document ready function*/});