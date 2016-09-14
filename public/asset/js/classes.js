'use strict';

/*
 Class InsertCurrenDate adopts two arguments: the node contains inception year and 
 the node where current year will be displayed if the these years are different.
 */
function InsertCurrenDate(beginPlace, currentPlace) {
    this._beginYear = $(beginPlace).html();
    this._currentPlace = $(currentPlace);
    this._currentYear = new Date().getFullYear();
}
InsertCurrenDate.prototype.write = function () {
    if (this._beginYear !== this._currentYear) {
        $(this._currentPlace).html('- ' + this._currentYear);
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
}


/* 
 The class  GlueElementTop keeps element visible on the top of screen. It adopts element id.
 */
function GlueElementTop(elementSelector, cloneHeight) {
    this.element = $(elementSelector);
    this.parent = $(this.element).parent();
    this.cloneHeight = cloneHeight;
    this.deputy;
}
GlueElementTop.prototype.createDeputy = function () {
    this.deputy = document.createElement('div');
    $(this.deputy).attr('id', 'clone');
    $(this.deputy).attr('position', 'relative');
    $(this.deputy).height(this.cloneHeight + 'px');
};
GlueElementTop.prototype.glue = function () {
    var self = this;

    window.addEventListener('scroll', function () {
        if ($(window).width() > 750) {
            if (window.scrollY > parseInt(self.cloneHeight / 2)) {
                $(self.element).css({'position': 'fixed', 'margin': 0, 'top': 0, 'z-index': 100});
                if (!document.getElementById('clone')) {
                    $(self.parent).prepend(self.deputy);
                }
            } else {
                $(self.element).css({'position': '', 'margin': '', 'top': '', 'z-index': ''});
                if ($("#clone")) {
                    $("#clone").remove();
                }
            }
        }
    });
};

/* 
 Class movingSun moves the Sun object when the mouse changes its location on the Y axis
 */
function MoveingSun(sunId) {
    this.sun = sunId;
    this.mouseHeight;
    this.screenWidth;
    this.screenHeight;
    this.marginTop;
    this.marginLeft;

    this.move();
}
MoveingSun.prototype.move = function () {
    var self = this;

    $(window).mousemove(function (event) {
        self.mouseHeight = event.clientY;
        self.screenWidth = $(window).width();
        self.screenHeight = $(window).height();
        self.marginTop = parseInt((self.mouseHeight * 100) / self.screenHeight);
        self.marginLeft = -parseInt((self.mouseHeight * 100) / self.screenHeight);
        if (self.marginTop) {
            $(this.sun).fadeIn(1000);
            $(this.sun).css({'margin-top': self.marginTop, 'margin-left': self.marginLeft, 'left': '10%'});
        }
    });
};

/* 
 The class DescribeRef adopts reference selector and description address. 
 The class depicts description when reference is mouseover and remove description after mouseleave. 
 */
function DescribeRef(refSelector, descrAddress) {
    this.elementsCollection = document.body.querySelectorAll(refSelector);
    this.descrAddress = descrAddress;
    this.element;
    this.definition;
    this.coords;
    this.arrow;
    this.image;
    this.windowCoord;
    this.windowWidth;
    this.windowHeight;
}
/* This method defines reference's coordinates and depict a hint under or over the reference depend on top and left value. */
DescribeRef.prototype.depict = function () {
    var self = this;

    $(this.elementsCollection).mouseover(function (event) {
        self.element = event.target;
        self.coords = $(self.element).offset();

        self.windowCoord = self.element.getBoundingClientRect();
        self.windowWidth = $(window).width();
        self.windowHeight = $(window).height();

        if (((self.windowWidth - self.windowCoord.right) < 150) || ((self.windowHeight - self.windowCoord.bottom) < 100)) {
            self.depictTop();
        } else {
            self.depictBottom();
        }
        $(self.definition).fadeIn(500);
    });
    self.clear();
};
/* This method depicts a hint over the reference. */
DescribeRef.prototype.depictTop = function () {
    var self = this;

    self.definition = document.createElement('div');
    $(self.definition).attr('class', 'definition');
    $(self.definition).css({'top': self.coords.top - 75,
        'left': self.coords.left - 100
    });

    self.image = document.createElement('img');
    $(self.image).attr('src', self.descrAddress);
    $(self.image).attr('class', 'innerImage');
    $(self.definition).append(self.image);

    self.arrow = document.createElement('div');
    $(self.arrow).attr('class', 'pointerBottom');
    $(self.definition).append(self.arrow);

    $('body').append(self.definition);
};
/* This method depicts a hint under the reference. */
DescribeRef.prototype.depictBottom = function () {
    var self = this;

    self.definition = document.createElement('div');
    $(self.definition).attr('class', 'definition');
    $(self.definition).css({'top': self.coords.top + self.element.offsetHeight,
        'left': self.coords.left + 30
    });

    self.arrow = document.createElement('div');
    $(self.arrow).attr('class', 'pointerTop');
    $(self.definition).append(self.arrow);

    self.image = document.createElement('img');
    $(self.image).attr('src', self.descrAddress);
    $(self.image).attr('class', 'innerImage');
    $(self.definition).append(self.image);

    $('body').append(self.definition);
};
/* This method hides a hint after mouseout. */
DescribeRef.prototype.clear = function () {
    var self = this;

    $(this.elementsCollection).mouseout(function () {
        $(self.definition).remove();
    });
};

/*
 The class SiningStar displays and hide a star on the page background in random place.
 The class adopts time of displaying and div class name.
 */
function ShiningStar(time, divClass) {
    this.time = time;
    this.element;
    this.windowWidth;
    this.windowHeight;
    this.divClass = divClass;

    this.createStar();
}
ShiningStar.prototype.createStar = function () {
    this.element = document.createElement('span');
    this.element.setAttribute('class', this.divClass);
    this.element.setAttribute('aria-hidden', true);
    $(this.element).css('position', 'absolute');
    $('body').append(this.element);
    $(this.element).fadeOut();
};
ShiningStar.prototype.displayStar = function () {
    this.windowWidth = $(window).width();
    this.windowHeight = $(window).height();
    this.element.style.top = (parseInt(Math.random() * this.windowHeight)) + 'px';
    this.element.style.left = (parseInt(Math.random() * this.windowWidth)) + 'px';
    $(this.element).fadeIn((this.time / 2) - 250);
};
ShiningStar.prototype.hideStar = function () {
    var self = this;
    setTimeout(function () {
        $(self.element).fadeOut((self.time / 2) - 250);
    }, self.time / 2);
};
ShiningStar.prototype.all = function () {
    this.displayStar();
    this.hideStar();
};
ShiningStar.prototype.run = function () {
    var self = this;
    setInterval(function () {
        self.all();
    }, self.time);
};

/* 
 Glue element bottom if content is not enouth. 
 */
function glueElementBottom(freeSpace, footerHeight, divContent) {
    this.windowHeight;
    this.windowWidth;
    this.documentHeight;
    this.freeSpace = freeSpace;
    this.divContent = $(divContent);
    this.contentHeight;
    this.footerHeight = footerHeight;
}
glueElementBottom.prototype.glue = function () {
    this.windowHeight = $(window).height();
    this.windowWidth = $(window).width();
    this.documentHeight = $('body').height();
    this.contentHeight = $(this.divContent).height();

    if (this.windowWidth > 750) {
        if (this.windowHeight >= this.documentHeight) {
            $(this.divContent).height(this.windowHeight - (this.freeSpace - this.footerHeight));
        } else {
            $(this.divContent).height('');
        }
    }
};

/*
 * 
 */
function contactPageHandler(formDescr) {
    this.form = $(formDescr);
    this.submitButon = $(this.form).find('input[type="submit"]');
    this.closeBtn;
    this.warningDiv;
    this.formValue;
}
contactPageHandler.prototype.closeBtnHandler = function (closeBtnDescr, warningDivDescr,
        closeWarningDescr, confirmCloseBtnDescr) {
    var self = this;
    this.closeBtn = $(closeBtnDescr);
    this.warningDiv = $(warningDivDescr);
    this.closeWarningDivBtn = $(closeWarningDescr);
    this.confirmCloseBtn = $(confirmCloseBtnDescr);

    $(this.closeBtn).click(function (e) {
        var formElementsValue = null;
        $(self.form).find('input, textarea').each(function (index, value) {
            if ($(value).attr('name') === '_token' || $(value).attr('type') === 'submit') {
                return;
            } else if ($(value).val()) {
                formElementsValue = $(value).val();
            }
        });
        if (formElementsValue !== null) {
            $(self.warningDiv).css('display', 'block');
            return false;
        }
    });

    $(this.closeWarningDivBtn).click(function () {
        $(self.warningDiv).fadeOut(500);
    });

    $(this.confirmCloseBtn).click(function () {
        $('#myModal').modal('toggle');
        $(self.warningDiv).css('display', '');
    });
};
contactPageHandler.prototype.formValidate = function () {
    var self = this;

    $(this.form).keyup(function (e) {
        self.formValidator(e.target);
    });
};
contactPageHandler.prototype.formValidator = function (field) {
    var self = this;
    var attrName = $(field).attr('name');

    switch (attrName) {
        case ('email'):
            var isValid = self.emailValidate($(field).val());
            self.paintFofmElement(field, isValid);
            return isValid;
        case ('name'):
            var isValid = self.notEmptyValidate($(field).val());
            self.paintFofmElement(field, isValid);
            return isValid;
        case ('message'):
            var isValid = self.notEmptyValidate($(field).val());
            self.paintFofmElement(field, isValid);
            return isValid;
    }
    return true;
};
contactPageHandler.prototype.emailValidate = function (emailValue) {
    if (emailValue.match(/.+@.+\..+/i)) {
        return true;
    }
    return false;
};
contactPageHandler.prototype.notEmptyValidate = function (elementValue) {
    if (elementValue) {
        return true;
    }
    return false;
};
contactPageHandler.prototype.paintFofmElement = function (formElement, verificationResult) {
    if (verificationResult) {
        $(formElement).removeClass('verif_failed').addClass('verif_passed');
    } else {
        $(formElement).removeClass('verif_passed').addClass('verif_failed');
    }
};
contactPageHandler.prototype.sendLetter = function (action) {
    var self = this;
    var isValid = true;

    $(this.submitButon).click(function (e) {
        e.preventDefault();
//        $.each(self.form[0], function (key, value) {
//            if (!self.formValidator(value)) {
//                return false;
//            }
//            isValid = true;
//        });
console.log($(self.form));
        if (isValid) {
            $.ajaxSetup({
                type: 'POST',
                url: action,
                dataType: 'html',
                data: {'message': JSON.stringify($(self.form))},
                async: true,
                timeout: 10000,
            });
            $.ajax({
                success: function (data) {
                    console.log(data);
                },
                error: function (e) {
                    console.log(e);
                }
            });
        }
    });
};