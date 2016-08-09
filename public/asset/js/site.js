'use strict';


/* it is displaying the page softly */
var display = new softDisplaying('body', 1500);
display.display();

/* It is wrighting current year in the footer */
var beginPlace = $('.beginYear');
var currentPlace = $('.currentYear');
var insertDate = new InsertCurrenDate('.beginYear', '.currentYear');
insertDate.write();
