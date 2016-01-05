/*!
 * remark (http://getbootstrapadmin.com/remark)
 * Copyright 2015 amazingsurge
 * Licensed under the Themeforest Standard Licenses
 */
(function(document, window, $) {
    'use strict';
    var Site = window.Site;
    $(document).ready(function($) {
        Site.run();
    });

    // validacion de cashOut
    // ---------------------------------
    (function() {
        $('#depositos').formValidation({
            framework: "bootstrap",
            icon: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                image: {
                    validators: {
                        notEmpty: {
                            message: 'The image is required'
                        },
                        file: {
                            extension:'jpg',
                            message: 'only image: jpg'
                        }
                    }
                },
                amount: {
                    validators: {
                        notEmpty: {
                            message: 'The amount is required'
                        },
                        stringLength: {
                            min: 1
                        }
                    }
                }
            }
        })
        .on('err.field.fv', function(e, data) {
            // $(e.target)  --> The field element
            // data.fv      --> The FormValidation instance
            // data.field   --> The field name
            // data.element --> The field element

            data.fv.disableSubmitButtons(false);
        })
            .on('success.field.fv', function(e, data) {
                // e, data parameters are the same as in err.field.fv event handler
                // Despite that the field is valid, by default, the submit button will be disabled if all the following conditions meet
                // - The submit button is clicked
                // - The form is invalid
                data.fv.disableSubmitButtons(false);
            });
    })();

})(document, window, jQuery);