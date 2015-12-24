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

    // Example Validataion Full
    // ------------------------
    (function() {
        $('#exampleFullForm').formValidation({
            framework: "bootstrap",
            button: {
                selector: '#validateButton1',
                disabled: 'disabled'
            },
            icon: null,
            fields: {
                username: {
                    validators: {
                        notEmpty: {
                            message: 'The username is required'
                        },
                        stringLength: {
                            min: 6,
                            max: 30
                        },
                        regexp: {
                            regexp: /^[a-zA-Z0-9]+$/
                        }
                    }
                },
                email: {
                    validators: {
                        notEmpty: {
                            message: 'The username is required'
                        },
                        emailAddress: {
                            message: 'The email address is not valid'
                        }
                    }
                },
                password: {
                    validators: {
                        notEmpty: {
                            message: 'The password is required'
                        },
                        stringLength: {
                            min: 8
                        }
                    }
                },
                birthday: {
                    validators: {
                        notEmpty: {
                            message: 'The birthday is required'
                        },
                        date: {
                            format: 'YYYY/MM/DD'
                        }
                    }
                },
                github: {
                    validators: {
                        url: {
                            message: 'The url is not valid'
                        }
                    }
                },
                skills: {
                    validators: {
                        notEmpty: {
                            message: 'The skills is required'
                        },
                        stringLength: {
                            max: 300
                        }
                    }
                },
                porto_is: {
                    validators: {
                        notEmpty: {
                            message: 'Please specify at least one'
                        }
                    }
                },
                'for[]': {
                    validators: {
                        notEmpty: {
                            message: 'Please specify at least one'
                        }
                    }
                },
                company: {
                    validators: {
                        notEmpty: {
                            message: 'Please company'
                        }
                    }
                },
                browsers: {
                    validators: {
                        notEmpty: {
                            message: 'Please specify at least one browser you use daily for development'
                        }
                    }
                }
            }
        });
    })();

    // Example Validataion Constraints
    // -------------------------------
    (function() {
        $('#exampleConstraintsForm, #exampleConstraintsFormTypes').formValidation({
            framework: "bootstrap",
            icon: null,
            fields: {
                type_email: {
                    validators: {
                        emailAddress: {
                            message: 'The email address is not valid'
                        }
                    }
                },
                type_url: {
                    validators: {
                        url: {
                            message: 'The url is not valid'
                        }
                    }
                },
                type_digits: {
                    validators: {
                        digits: {
                            message: 'The value is not digits'
                        }
                    }
                },
                type_numberic: {
                    validators: {
                        integer: {
                            message: 'The value is not an number'
                        }
                    }
                },
                type_phone: {
                    validators: {
                        phone: {
                            message: 'The value is not an phone(US)'
                        }
                    }
                },
                type_credit_card: {
                    validators: {
                        creditCard: {
                            message: 'The credit card number is not valid'
                        }
                    }
                },
                type_date: {
                    validators: {
                        date: {
                            format: 'YYYY/MM/DD'
                        }
                    }
                },
                type_color: {
                    validators: {
                        color: {
                            type: ['hex', 'hsl', 'hsla', 'keyword', 'rgb', 'rgba'], // The default value for type
                            message: 'The value is not valid color'
                        }
                    }
                },
                type_ip: {
                    validators: {
                        ip: {
                            ipv4: true,
                            ipv6: true,
                            message: 'The value is not valid ip(v4 or v6)'
                        }
                    }
                }
            }
        });
    })();

    // Example Validataion Standard Mode
    // ---------------------------------
    (function() {
        $('#exampleStandardForm').formValidation({
            framework: "bootstrap",
            button: {
                selector: '#validateButton2',
                disabled: 'disabled'
            },
            icon: null,
            fields: {
                standard_fullName: {
                    validators: {
                        notEmpty: {
                            message: 'The full name is required and cannot be empty'
                        }
                    }
                },
                standard_email: {
                    validators: {
                        notEmpty: {
                            message: 'The email address is required and cannot be empty'
                        },
                        emailAddress: {
                            message: 'The email address is not valid'
                        }
                    }
                },
                standard_content: {
                    validators: {
                        notEmpty: {
                            message: 'The content is required and cannot be empty'
                        },
                        stringLength: {
                            max: 500,
                            message: 'The content must be less than 500 characters long'
                        }
                    }
                }
            }
        });
    })();

    // Example Validataion Summary Mode
    // -------------------------------
    (function() {
        $('.summary-errors').hide();

        $('#exampleSummaryForm').formValidation({
                framework: "bootstrap",
                button: {
                    selector: '#validateButton3',
                    disabled: 'disabled'
                },
                icon: null,
                fields: {
                    summary_fullName: {
                        validators: {
                            notEmpty: {
                                message: 'The full name is required and cannot be empty'
                            }
                        }
                    },
                    summary_email: {
                        validators: {
                            notEmpty: {
                                message: 'The email address is required and cannot be empty'
                            },
                            emailAddress: {
                                message: 'The email address is not valid'
                            }
                        }
                    },
                    summary_content: {
                        validators: {
                            notEmpty: {
                                message: 'The content is required and cannot be empty'
                            },
                            stringLength: {
                                max: 500,
                                message: 'The content must be less than 500 characters long'
                            }
                        }
                    }
                }
            })

            .on('success.form.fv', function(e) {
                // Reset the message element when the form is valid
                $('.summary-errors').html('');
            })

            .on('err.field.fv', function(e, data) {
                // data.fv     --> The FormValidation instance
                // data.field  --> The field name
                // data.element --> The field element
                $('.summary-errors').show();

                // Get the messages of field
                var messages = data.fv.getMessages(data.element);

                // Remove the field messages if they're already available
                $('.summary-errors').find('li[data-field="' + data.field + '"]').remove();

                // Loop over the messages
                for (var i in messages) {
                    // Create new 'li' element to show the message
                    $('<li/>')
                        .attr('data-field', data.field)
                        .wrapInner(
                            $('<a/>')
                                .attr('href', 'javascript: void(0);')
                                // .addClass('alert alert-danger alert-dismissible')
                                .html(messages[i])
                                .on('click', function(e) {
                                    // Focus on the invalid field
                                    data.element.focus();
                                })
                        ).appendTo('.summary-errors > ul');
                }

                // Hide the default message
                // $field.data('fv.messages') returns the default element containing the messages
                data.element
                    .data('fv.messages')
                    .find('.help-block[data-fv-for="' + data.field + '"]')
                    .hide();
            })

            .on('success.field.fv', function(e, data) {
                // Remove the field messages
                $('.summary-errors > ul').find('li[data-field="' + data.field + '"]').remove();
                if ($('#exampleSummaryForm').data('formValidation').isValid()) {
                    $('.summary-errors').hide();
                }
            });
    })();
    // validacion de login
    // ---------------------------------
    (function() {
        $('#loginForm').formValidation({
            framework: "bootstrap",
            /*button: {
                selector: '#login',
                disabled: 'disabled'
            },*/
            icon: null,
            fields: {
                user: {
                    validators: {
                        notEmpty: {
                            message: 'The name is required and cannot be empty'
                        },
                        stringLength: {
                            min: 3
                        },
                        regexp: {
                            regexp: /^[a-zA-Z]+$/,
                            message: 'only letters allowed'
                        }
                    }
                },
                password: {
                    validators: {
                        notEmpty: {
                            message: 'The password is required'
                        },
                        stringLength: {
                            min: 3
                        }
                    }
                },
                standard_content: {
                    validators: {
                        notEmpty: {
                            message: 'The content is required and cannot be empty'
                        },
                        stringLength: {
                            max: 500,
                            message: 'The content must be less than 500 characters long'
                        }
                    }
                }
            }
        });
    })();
    // validacion de registro
    // ---------------------------------
    (function() {
        $('#register').formValidation({
            framework: "bootstrap",
            /*button: {
             selector: '#login',
             disabled: 'disabled'
             },*/
            icon: null,
            fields: {
                name: {
                    validators: {
                        notEmpty: {
                            message: 'The name is required and cannot be empty'
                        },
                        stringLength: {
                            min: 3,
                            max:30
                        },
                        regexp: {
                            regexp: /^[a-zA-Z]+$/,
                            message: 'only letters allowed'
                        }
                    }
                },
                lastname: {
                    validators: {
                        notEmpty: {
                            message: 'The lastname is required and cannot be empty'
                        },
                        stringLength: {
                            min: 3,
                            max:30
                        },
                        regexp: {
                            regexp: /^[a-zA-Z]+$/,
                            message: 'only letters allowed'
                        }
                    }
                },
                username: {
                    validators: {
                        notEmpty: {
                            message: 'The username is required and cannot be empty'
                        },
                        stringLength: {
                            max: 30,
                            message: 'The content must be less than 30 characters long'
                        }
                    }
                },
                Email: {
                    validators: {
                        emailAddress: {
                            message: 'The email address is not valid'
                        }
                    }
                },
                password: {
                    validators: {
                        notEmpty: {
                            message: 'The password is required'
                        },
                        stringLength: {
                            min: 8
                        }
                    }
                },
                passwordCheck: {
                    validators: {
                        notEmpty: {
                            message: 'The password is required'
                        },
                        stringLength: {
                            min: 8
                        }
                    }
                },
                phone: {
                    validators: {
                        phone: {
                            message: 'The value is not an phone(US)'
                        }
                    }
                },
                pais: {
                    validators: {
                        notEmpty: {
                            message: 'The username is required and cannot be empty'
                        }
                    }
                }
            }
        });
    })();
    // validacion de depositos
    // ---------------------------------
    (function() {
        $('#deposito').formValidation({
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
                }
                /*cantidad: {
                    validators: {
                        notEmpty: {
                            message: 'The password is required'
                        },
                        stringLength: {
                            min: 3
                        }
                    }
                }*/
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