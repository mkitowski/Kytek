$(function () {
    $('.submit').click(function(event) {
        console.log('clicked')
        
        var uname = $('#uname').val()
        var email = $('#email').val()
        var message = $('#message').val()
        var check = $('#check').val()
        var unameInfo = $('#uname-info')
        var mailInfo = $('#mail-info')
        var messInfo = $('#mess-info')
        var checkInfo = $('#check-info')
        
        unameInfo.empty()
        mailInfo.empty()
        messInfo.empty()
        checkInfo.empty()
        
        console.log(uname)
        
        if(uname.length <= 2 ) {
            unameInfo.append('Name should have at least 2 letters')
            event.preventDefault()
            
        }
        
        if(email.includes('@') && email.length > 5 && email.includes('.')) {
            console.log('Great email!')
        } else {
            mailInfo.append('Please type valid email')
            event.preventDefault()
        }
        
        if(message.length <=15 ) {
            messInfo.append('Your message should contain at least 15 letters')
            event.preventDefault()
        }
        
        if(check == 'yes' || check == 'YES' || check == 'Yes' || check == 'Yes I am') {
            console.log('Wow, he is a human!!')
        } else {
            checkInfo.append('Hello Mr. Robot, I will not let you spam my mail box. If you are thinking that you are not a robot please type <u>yes</u>')
            event.preventDefault()
        }
        
    })
})