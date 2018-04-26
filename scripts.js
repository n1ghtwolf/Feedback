$(function () {
    $('#form').validate({
        rules: {
            user: {
                required: true,
                minlength: 2,
                maxlength: 20
            },

            email: {
                required: true,
                email: true
            },
            homepage: {
                required: false,
                url: true
            },
            subject:{
                required:true,
                minlength:20
            },
            file:{
                required:false
            },
            captcha:{
                required:true
            },
        },
        message:{


        }

}
};