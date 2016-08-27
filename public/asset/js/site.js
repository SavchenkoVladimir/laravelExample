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
var describe = new DescribeRef('#home_page > .row > div > a', '../../asset/img/site/github.png');
describe.depict();

/* Glue element bottom if content is not enouth. */
var glueFooter = new glueElementBottom(130, 65, '#site_content');
$(window).resize(function () {
    glueFooter.glue();
});
$(window).load(function () {
    glueFooter.glue();
});
