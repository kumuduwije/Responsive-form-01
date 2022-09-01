console.log("Working done")

$("#contact-form").validate({
    rules:{
        firstname:{
            minlength:2
        },
        lastname:{
            minlength:2
        },
        email:{
            email:true
        },
        subject:{
            minlength:5
        }
    },
    messages:{
        firstname:{
            required:"Please enter your first name",
            minlength:"First name at least 2 characters"
        },

        lastname:{
            required:"Please enter your last name",
            minlength:"Last name at least 2 characters"
        },
        email:{
            required:"Please enter your email"
        },
        subject:{
            required:"Subject is required",
            minlength:"Please enter at least 3 words."
        }
    },

    submitHandler: function(form) {
      form.submit();
    }
});