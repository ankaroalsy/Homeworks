console.log('works');
$("#formulary").validate({
    rules : {
        username:{required:true, alphanumeric:true},
        key:{required:true},
        price:"required",
        email:{required:true, email:true}
    }
});