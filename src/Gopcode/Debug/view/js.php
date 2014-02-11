<?php
/**
 * js.php file
 *
 * @author     Dmitriy Tyurin <fobia3d@gmail.com>
 * @copyright  Copyright (c) 2014 Dmitriy Tyurin
 */
?>
<script type="text/javascript">
(function(window) {
    function loadScript(data, callback) {
        var head = window.document.getElementsByTagName('head')[0];
        if (typeof data !== 'object') {
            data = {
                element: 'script',
                attr: {
                    src: data,
                    type: 'text/javascript'
                }
            };
        }

        var script = window.document.createElement(data.element);
        for (var i in data.attr) {
            script[i] = data.attr[i];
        }

        var userAgent = window.navigator.userAgent.toLowerCase();
        if (/msie/.test(userAgent) && !/opera/.test(userAgent)) {
            script.onreadystatechange = function() {
                if (script.readyState == 'complete' && callback != undefined) {
                    callback();
                }
            };
        } else {
            script.onload = function() {
                if (callback != undefined) {
                    callback();
                }
            };
        }
        head.appendChild(script);
    }

    if (window.jQuery == undefined) {
        var jf = "http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js";
        // jf = "/js/jquery/jquery-1.8.3.min.js";

        loadScript(jf, function() {
            init();
        });
    } else {
        init();
    }

    function init() {
        $(document).ready(function() {
            //$("#ac-logger").resizable();
            $("#ac-logger-switch").click(function() {
                $("#ac-logger").toggleClass("hidden");
            });
            $("#ac-logger td.level:contains(error)").parent('tr').addClass('error');
        });
    }
})(window);


</script>