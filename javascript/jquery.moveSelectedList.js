/*
 * JQuery plugin function to help moving selected options from a listbox to other
 *  
 * @author Held Grijo
 * @since 2012.09.04
 * 
 * @param box_id The destiny listbox's id
 * @param setting It isn't in use. For future custom configs
 */
(function($){
    $.fn.moveSelectedList = function(box_id,settings){
//        var config = {
//            'foo': 'bar'
//        };    	
    	var selected = null;    	
//        if (settings){$.extend(config, settings);}
        return this.each(function(){
        	selected = $(this).children(':selected');
        	selected.each(function () {
        		selected.appendTo(box_id);
            });
        });
    };
})(jQuery);