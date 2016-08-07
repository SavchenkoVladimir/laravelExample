'use strict';

/*
  The class soft Displaying displays a page softly after the page is completely downloaded. 
  It adopts page's element selector and displaying time.
*/
function softDisplaying(elemSelector, time){
  var self = this;
  this.element = document.querySelector(elemSelector);
  this.time = time;

  this.display = function(){
//    document.addEventListener("DOMContentLoaded", function(){$(self.element).fadeIn(self.time);
    document.addEventListener("DOMContentLoaded", function(){$(self.element).fadeIn(self.time);
    });
  }
}

