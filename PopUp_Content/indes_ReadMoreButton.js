(function($) {
      $(".indes_ReadMoreButton").click(function(e) {
                    e.preventDefault();
                    var titleHeight; 
                    $.boxes({
                        mode: 'custom',
                        title: '<font color="#000000">The term coaching may be applied to an casual relationship between two individuals where one has greater experience and expertise than the other and offers advice and guidance as the other goes through a learning process, but coaching differs from mentoring by focusing upon competence specifics, as opposed to general overall development.</font>',
                        message: '',
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
