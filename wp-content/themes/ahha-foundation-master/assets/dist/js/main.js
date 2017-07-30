

//THIS WAS MADE WITH LOTS OF VARIABLES, SO YOU CAN NAME THINGS HOWEVER YOU LIKE
//IF YOU UNDERSTAND JS AND JQUERY, YOU SHOULD BE ABLE TO PICK THIS APART HOW YOU SEE FIT

var hamburger="hamb"; //THIS IS THE NAME OF YOUR HAMBURGER BUTTON

var slideNavName="slideDown"; //THIS IS THE NAME OF YOUR HIDING NAVIGATION

var rectangleName="rect"; //THIS IS THE NAME OF YOUR LITTLE HAMBURGER RECTANGLES, MINUS THE NUMBERS (SEE CSS COMMENTS)

//YOU MAY CHANGE ALL OF THESE IF YOU NEED TO (SEE CSS COMMENTS)
var showRect= "showRect";
var topRectX= "topRectX";
var hideRectX= "hideRectX";
var bottomRectX= "bottomRectX";


jQuery("#"+hamburger).click(function(event) //CHECK IF YOUR BUTTON IS PRESSED
{
  if(jQuery("#"+slideNavName).attr('class')=="navhidden") //CHECKS TO SEE IF YOUR MENU IS CURRENTLY CLOSED
  {
    //CHANGE ICON TO AN 'X'
    jQuery("#"+rectangleName+"1").toggleClass(showRect+" "+topRectX);
    $("#"+rectangleName+"2").toggleClass(showRect+" "+hideRectX);
    $("#"+rectangleName+"3").toggleClass(showRect+" "+bottomRectX);

    //REVEAL YOUR NAVIGATION
    $("#"+slideNavName).toggleClass('navhidden revealed');
  }

  else if(jQuery("#"+slideNavName).attr('class')=="revealed") //CHECKS TO SEE IF YOUR MENU IS CURRENTLY OPEN
  {
    //CHANGE ICON BACK INTO A HAMBURGER
    jQuery("#"+rectangleName+"1").toggleClass(showRect+" "+topRectX);
    jQuery("#"+rectangleName+"2").toggleClass(showRect+" "+hideRectX);
    jQuery("#"+rectangleName+"3").toggleClass(showRect+" "+bottomRectX);

    //HIDE YOUR NAVIGATION
    jQuery("#"+slideNavName).toggleClass('revealed navhidden');
  }
});


//BONUS!!! AN OPENED NAV DISSAPEARS WHEN SCROLLING!!


jQuery(window).scroll(function(event) //AUTOMATICALLY HIDES THE NAV WHEN SCROLLING STARTS
{
  if(jQuery("#"+slideNavName).attr('class')=="revealed") //SEE IF YOUR NAV IS OPEN
  {
    //CHANGE ICON BACK INTO A HAMBURGER
    jQuery("#"+rectangleName+"1").toggleClass(showRect+" "+topRectX);
    jQuery("#"+rectangleName+"2").toggleClass(showRect+" "+hideRectX);
    jQuery("#"+rectangleName+"3").toggleClass(showRect+" "+bottomRectX);

    //HIDE YOUR NAVIGATION
    jQuery("#"+slideNavName).toggleClass('revealed navhidden');
  }
});
