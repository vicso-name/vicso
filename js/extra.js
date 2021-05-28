const formSubmitBtn = document.getElementById('contact-form-btn');

function contactForm(){

    const userName =  document.getElementById('username').value;
    const userPhoneNumber = document.getElementById('userphone').value;
    const userEmail = document.getElementById('usermail').value;
    const userMessage = document.getElementById('usermessage').value;

    data = {
        'action': 'vicso_send_message',
        'username': userName,
        'userphone': userPhoneNumber,
        'usermail': userEmail,
        'usermessage': userMessage
    }

    jQuery.ajax({
        type: 'post',
        url: object_url.url,
        data: data,
        cache: false,
        success: function(data){
            alert('success');
        }
    })
}

formSubmitBtn.addEventListener('click', function(){
    contactForm();
});