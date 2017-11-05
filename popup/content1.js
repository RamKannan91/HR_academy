(function($) {
      $(".content1").click(function(e) {
                    e.preventDefault();
                    var titleHeight; 
                    $.boxes({
                        mode: 'custom',
                        title: '<font color="#000000">titlejjjjName</font>',
                        message: 'Display Content Here',
                        cancelBtn: 'CLOSE',
                        inputTxt: 'input text if needed',

                        width: 550,
                        padding: [30, 40],
                        border: [6, 6],

                        noClose: false, 
                    //  clickOut: true, 
                        messString: false, 
                        closeBtnShow: true, 
  
                    });
                });

})(jQuery);
