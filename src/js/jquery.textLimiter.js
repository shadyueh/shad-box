/***
 * Prevents IE8's maxlength overpass bug
 * @author    Held Grijo
 * @since    2012.07.24
 * @param    seletor    textarea's id
 * @param    setting        a json string with config parameters
 *                        bool alert - hide/show alert message
 *                        int maxlimit - max number of characters allowed
 */

(function ($) {
    $.textLimiter = function (seletor, settings) {

        //settings
        var config = {
            'maxlimit': '300',
            'alert': false
        };
        if (settings) {
            $.extend(config, settings);
        }

        //variables
        var obj = $(seletor);


        obj.keyup(function () {
            if (obj.val().length > config.maxlimit) {
                if (config.alert > 0) {
                    alert("O tamanho m�ximo permitido para o campo � " + config.maxlimit + " caracteres.");
                }
                obj.val(obj.val().substring(0, config.maxlimit));
            }
        });

        return this;
    };
})(jQuery);