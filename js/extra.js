
const modalOverlay = document.getElementById('modal-overlay');
const successSent = document.getElementById('success-sent');
const removeSuccess = document.getElementById('close-form-success')
const formSubmitBtn = document.getElementById('contact-form-btn');

if(formSubmitBtn !== null){

    formSubmitBtn.addEventListener('click', function(){

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
                let objecData = JSON.parse(data);
                let sentResult = objecData.contact_form;
                if(sentResult == true){
                    modalOverlay.classList.add('active');
                    successSent.classList.add('active');
                }
            }
        })
    });

}

if(removeSuccess !== null){
    removeSuccess.addEventListener('click', function(){
        modalOverlay.classList.remove('active');
        successSent.classList.remove('active');
    })
}



