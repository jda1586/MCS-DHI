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
                            min: 6,
                            max: 18
                        },
                        regexp: {
                            regexp: /^[a-zA-Z0-9]+$/,
                            message: 'only letters and numbers allowed'
                        }
                    }
                },
                password: {
                    validators: {
                        notEmpty: {
                            message: 'The password is required'
                        },
                        stringLength: {
                            min: 8,
                            max: 30
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
                pack:{
                    validators:{
                        notEmpty: {
                            message: 'select the package you want'
                        }
                    }
                },
                name: {
                    validators: {
                        notEmpty: {
                            message: 'The name is required and cannot be empty'
                        },
                        stringLength: {
                            min: 4,
                            max:255
                        },
                        regexp: {
                            regexp: /^[a-zA-Z ñáéíóú]+$/,
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
                            min: 4,
                            max:255
                        },
                        regexp: {
                            regexp: /^[a-zA-Z ñáéíóú]+$/,
                            message: 'only letters allowed'
                        }
                    }
                },
                user: {
                    validators: {
                        notEmpty: {
                            message: 'The username is required and cannot be empty'
                        },
                        stringLength: {
                            min: 6,
                            max: 30,
                            message: 'The content must be less than 30 characters long'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z0-9ñáéíóú]+$/,
                            message: 'only letters and numbers allowed'
                        }
                    }
                },
                country: {
                    validators:{
                        notEmpty: {
                            message: 'The country is required and cannot be empty'
                        }
                    }
                },
                birthday : {
                    validators:{
                        notEmpty: {
                            message: 'The birthday is required and cannot be empty'
                        }
                        /*birthday: {
                            validators: {
                                date: {
                                    format: 'YYYY/MM/DD',
                                    message: 'The value is not a valid date'
                                }
                            }
                        }*/
                    }
                },
                email: {
                    validators: {
                        notEmpty: {
                            message: 'The email is required and cannot be empty'
                        },
                        emailAddress: {
                            message: 'The email address is not valid'
                        },
                        identical: {
                            field: 'email_confirm',
                            message: 'The email and its confirm are not the same'
                        }
                    }
                },
                email_confirm:{
                    validators: {
                        notEmpty: {
                            message: 'The email confirm is required and cannot be empty'
                        },
                        emailAddress: {
                            message: 'The email address is not valid'
                        },
                        identical: {
                            field: 'email',
                            message: 'The email and its confirm are not the same'
                        }
                    }
                },
                password: {
                    validators: {
                        notEmpty: {
                            message: 'The password is required'
                        },
                        stringLength: {
                            min: 8,
                            max:255
                        },
                        identical: {
                            field: 'password_confirmation',
                            message: 'The password and its confirm are not the same'
                        }
                    }
                },
                password_confirmation: {
                    validators: {
                        notEmpty: {
                            message: 'The password confirmation is required'
                        },
                        stringLength: {
                            min: 8,
                            max:255
                        },
                        identical: {
                            field: 'password',
                            message: 'The password confirmation and its confirm are not the same'
                        }
                    }
                },
                phone : {
                    validators: {
                        notEmpty: {
                            message: 'The phone is required'
                        },
                        regexp: {
                            regexp: /^[0-9 ]+$/,
                            message: 'only numbers allowed'
                        }
                    }
                },
                term :{
                    validators: {
                        notEmpty: {
                            message: 'accept terms '
                        }
                    }
                }
            }
        })      //fin de las validaciones
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
    // validacion de depositos
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
    // validacion de CASHOUT
    // ---------------------------------
    (function() {
        $('#salidas').formValidation({
                framework: "bootstrap",
                icon: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
                },
                fields: {
                    inputLableautyRadio: {
                        validators: {
                            notEmpty: {
                                message: 'Select a wallet is required'
                            }
                        }
                    },
                    bitcoinacount:{
                        validators: {
                            notEmpty: {
                                message: 'Select your bitcoin account is required'
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
                            },
                            numeric: {
                                message: 'The value is not a number'
                                // The default separators

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
    // validacion de add Credits
    // ---------------------------------
    (function() {
        $('#addcredit').formValidation({
                framework: "bootstrap",
                icon: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
                },
                fields: {
                    user: {
                        validators: {
                            notEmpty: {
                                message: 'The username is required and cannot be empty'
                            },
                            stringLength: {
                                min: 6,
                                max: 30,
                                message: 'The content must be less than 6 characters long'
                            },
                            regexp: {
                                regexp: /^[a-zA-Z0-9ñáéíóú]+$/,
                                message: 'only letters and numbers allowed'
                            }
                        }
                    },
                    Wallet: {
                        validators: {
                            notEmpty: {
                                message: 'Select a wallet is required'
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
                            },
                            numeric: {
                                message: 'The value is not a number'
                                // The default separators
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
    // validacion de depositos
    // ---------------------------------
    (function() {
        $('#newitem').formValidation({
                framework: "bootstrap",
                icon: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
                },
                fields: {
                    name: {
                        validators: {
                            notEmpty: {
                                message: 'The name is required and cannot be empty'
                            },
                            stringLength: {
                                min: 6,
                                max: 30,
                                message: 'The content must be less than 30 characters long'
                            },
                            regexp: {
                                regexp: /^[a-zA-Z0-9 ñáéíóú]+$/,
                                message: 'only letters and numbers allowed'
                            }
                        }
                    },
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
                                min: 2
                            },
                            numeric: {
                                message: 'The value is not a number'
                                // The default separators
                            }
                        }
                    },
                    stock: {
                        validators: {
                            notEmpty: {
                                message: 'The amount is required'
                            },
                            stringLength: {
                                min: 1,
                                higher: 0
                            },
                            numeric: {
                                message: 'The value is not a number'
                                // The default separators
                            }
                        }
                    },
                    feactures: {
                        validators: {
                            /*notEmpty: {
                                message: 'The feacture is required and cannot be empty'
                            },*/
                            stringLength: {
                                min: 10,
                                max: 255,
                                message: 'The content must be less than 30 characters long'
                            },
                            regexp: {
                                regexp: /^[a-zA-Z0-9ñáéíóú]+$/,
                                message: 'only letters and numbers allowed'
                            }
                        }
                    },
                    description : {
                        validators: {
                            notEmpty: {
                                message: 'The description is required and cannot be empty'
                            },
                            stringLength: {
                                min: 6,
                                max: 255,
                                message: 'The content must be less than 30 characters long'
                            },
                            regexp: {
                                regexp: /^[a-zA-Z0-9ñáéíóú]+$/,
                                message: 'only letters and numbers allowed'
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
    // validacion de add Credits
    // ---------------------------------
    (function() {
        $('#walletstore').formValidation({
                framework: "bootstrap",
                icon: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
                },
                fields: {
                    nameaccount: {
                        validators: {
                            notEmpty: {
                                message: 'The username is required and cannot be empty'
                            },
                            stringLength: {
                                min: 6,
                                max: 30,
                                message: 'The content must be less than 6 characters long'
                            },
                            regexp: {
                                regexp: /^[a-zA-Z0-9ñáéíóú]+$/,
                                message: 'only letters and numbers allowed'
                            }
                        }
                    },
                    numberaccount: {
                        validators: {
                            notEmpty: {
                                message: 'Select a wallet is required'
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