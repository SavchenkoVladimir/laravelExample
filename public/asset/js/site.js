'use strict';


/* it is displaying the page softly */
var display = new softDisplaying('body', 1500);
display.display();

/* It is wrighting current year in the footer */
var insertDate = new InsertCurrenDate('.beginYear', '.currentYear');
insertDate.write();

/* Make header olways visible */
var gluedHeader = new GlueElementTop('#layout_header', 130);
gluedHeader.createDeputy();
gluedHeader.glue();

/* make sun move */
var move = new MoveingSun('sun');

/* Describe the references */
var describe = new DescribeRef('#home_page > .row > div > a', '../../../asset/img/github.png');
describe.depict();