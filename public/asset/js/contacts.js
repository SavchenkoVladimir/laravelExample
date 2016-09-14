'use strict';

/*  Making the Contactas page. Object contacts is alredy created in the index.js script. */

var contactPageHandler = new contactPageHandler('[name="contacts"]');
contactPageHandler.closeBtnHandler('#close', '#warning',
        '.letter.warningBtn.no', '.letter.warningBtn.yes');
contactPageHandler.formValidate();
contactPageHandler.sendLetter('send_letter');