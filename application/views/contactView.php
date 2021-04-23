<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('headerView')?>
    <link rel="stylesheet" href="<?php base_url('css/main.css')?>" />
    <link rel="stylesheet" href="../css/contactBtn.css" /> <!-- change to absolute on deploy-->

</head>
<body>
    <!-- BORDERS Do not touch-->
    <div class="borderFrame outline" id=""></div>
        <?php $this->load->view('navView');?>

    <main class="contacts">
        <div class="leftColumn">
            <div class="header">
                <h1 class="sunflora">Hi there, <span class="desktopHide"><br/></span>come say <span class="purple">Hello!</span></h1>
                <p>Do you have a project in mind? <span class="desktopHide"><br/></span>Or just want to say hi? Drop me a line!</p>
            </div>

            <div class="formContainer">
                <form id="#contact-form" method="post" action="<?php base_url('index.php/contact/submit')?>">
                    <input type="text" name="name" id="name" placeholder="Name" />
                    <input type="email" name="emailAddress" id="emailAddress" placeholder="Email address" />
                    <textarea type="text" name="message" id="message" placeholder="Drop me a line!"></textarea>
                    
                    <span id="responseDiv"></span>
                    <button id="contactBtn" type="submit">
                        <span class="default">Submit</span>
                        <span class="success">
                            <svg viewBox="0 0 16 16">
                                <polyline points="3.75 9 7 12 13 5"></polyline>
                            </svg>Sent
                        </span>
                        <svg class="trails" viewBox="0 0 33 64">
                            <path d="M26,4 C28,13.3333333 29,22.6666667 29,32 C29,41.3333333 28,50.6666667 26,60"></path>
                            <path d="M6,4 C8,13.3333333 9,22.6666667 9,32 C9,41.3333333 8,50.6666667 6,60"></path>
                        </svg>
                        <div class="plane">
                            <div class="left"></div>
                            <div class="right"></div>
                        </div>
                    </button>
                </form>  
            </div>
        </div>


        <div class="messagesContainer">
            <h3>Messages</h3>
        <?php 
        //fetchWorks here & repeat for each in db
            foreach($contact as $key=>$cont){?>
            <div>
                <p><?php echo $cont['name']?></p> 
                <span><?php echo $cont['message']?></span>
            </div>

            <?php
            }
        ?>
        </div>
    
    </main>

    <footer>
        <?php $this->load->view('footerView');?>
    </footer>  


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js">
//call jQUERY ajax
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js">
//GSAP call
</script>
<script>
    // ajax call 
    let responseData;
    let messageDiv = $('<div>');
    let messageP = $('<p>');
    let messageSpan = $('<span>');
    $(document).ready(()=>{
        $('#contactBtn').on('click', (e)=>{
            e.preventDefault();
            let name = $('#name').val();
            let emailAddress = $('#emailAddress').val();
            let message = $('#message').val();
            if(name!="" && emailAddress!="" && message!=""){
                $.ajax({
                    url:'<?php echo base_url('index.php/contact/submit')?>',
                    type:"post",
                    data:{
                        type:1,
                        name:name,
                        emailAddress: emailAddress,
                        message: message
                    },
                    cache:false,
                    success: function(responseData){
                        responseData = JSON.parse(responseData);
                        if(responseData.statusCode==200) {
                            $('#responseDiv').html('<p id="success">Thanks so much!!</p>');
                            //add inpt value into variables
                            messageP.append(document.createTextNode(name));
                            messageSpan.append(document.createTextNode(message));
                            //append new success input into messagesDiv
                            messageDiv.append(messageP);
                            messageDiv.append(messageSpan);
                            $('.messagesContainer').append(messageDiv);
                        } else if (responseData.statusCode ==201) {
                            $('#responseDiv').html('<p id="error">Please try again..</p>');
                        }
                    }
                })
            }else{
                $('#responseDiv').html('<p id="error">Please fill in all the fields.</p>');
            }
        })

        
    });
</script>
<script src="../js/contactBtn.js"></script>
</body>
</html>