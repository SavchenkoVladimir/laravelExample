'use strict';

/*
  Class InsertCurrenDate adopts two arguments: the node contains inception year and 
  the node where current year will be displayed if the these years are different.
*/
function InsertCurrenDate(beginPlace, currentPlace){
  this._beginYear = $(beginPlace).html();
  this._currentPlace = $(currentPlace); 
  this._currentYear = new Date().getFullYear();
}
InsertCurrenDate.prototype.write = function(){
    console.log( this._currentYear);
  if( this._beginYear !== this._currentYear ){
    $(this._currentPlace).html( '- ' + this._currentYear);
  }
};
/*
 The class soft Displaying displays a page softly after the page is completely downloaded. 
 It adopts page's element selector and displaying time.
 */
function softDisplaying(elemSelector, time) {
    var self = this;
    this.element = document.querySelector(elemSelector);
    this.time = time;

    this.display = function () {
        document.addEventListener("DOMContentLoaded", function () {
            $(self.element).fadeIn(self.time);
        });
    };
};



