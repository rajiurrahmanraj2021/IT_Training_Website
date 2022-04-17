
$(document).ready(function() {
  $("form[name='order_details']").validate({
    rules: {
      name: "required",
      phone: "required",
      // email: {
      //   required: true,
      //   email: true,
      // },
      delivary_address:"required",
      bks_number:"required",
      bks_trxid:"required",
      rocket_number:"required",
      rocket_trxid:"required",
    },
    // Specify validation error messages
    messages: {
      name: "Please write your full Name",
      phone: "Please add your Phone Number",
      // email: "Please enter a valid email address",
      delivary_address: "please write your delivary address",
      bks_number: "please add your Bks Number",
      bks_trxid: "please add your Bks Trxid",
      rocket_number: "please add your Rocket Number",
      rocket_trxid: "please add your Rocket Trxid",

    },

    submitHandler: function(form) {
      form.submit();
    }
  });


  $("form[name='contact_details']").validate({
    rules: {
      name: "required",
      phone: "required",
      // email: {
      //   required: true,
      //   email: true,
      // },
      your_message:"required",
    },
    // Specify validation error messages
    messages: {
      name: "Please write your full Name",
      phone: "Please add your Phone Number",
      // email: "Please enter a valid email address",
      your_message: "please write your message",
    },

    submitHandler: function(form) {
      form.submit();
    }
  });
  $("form[name='bonus_offer']").validate({
    rules: {
      name: "required",
      phone: "required",
      // email: {
      //   required: true,
      //   email: true,
      // },
      message:"required",
    },
    // Specify validation error messages
    messages: {
      name: "Please Enter your Name",
      phone: "Please add your Phone Number",
      // email: "Please enter a valid email address",
      message: "please write your message",
    },

    submitHandler: function(form) {
      form.submit();
    }
  });
  $("form[name='dvd_question']").validate({
    rules: {
      name: "required",
      phone: "required",
      // email: {
      //   required: true,
      //   email: true,
      // },
      question:"required",
    },
    // Specify validation error messages
    messages: {
      name: "Please Enter your Name",
      phone: "Please add your Phone Number",
      // email: "Please enter a valid email address",
      question: "please write your question",
    },

    submitHandler: function(form) {
      form.submit();
    }
  });
  //student feedback
  $("form[name='student_feedback']").validate({
    rules: {
      name: "required",
      comment: "required",
    },
    // Specify validation error messages
    messages: {
      name: "Please Enter your Name",
      comment: "Please write your feedback comment!",
    },

    submitHandler: function(form) {
      form.submit();
    }
  });
});
