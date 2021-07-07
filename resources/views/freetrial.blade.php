<!DOCTYPE html>
<html>

<head>
    <link href="{{asset('public/frontend/assets/css/form.css')}}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<style>
    h1 {
        width: 500px;
        margin: 0 auto;
        background: yellowgreen;
        text-align: center;
    }
</style>

<body>

    <div class="container">
        <h1>Please Click The Button Below </h1>


        <button onclick="document.getElementById('id01').style.display='block'" style="width:center; ">FileUpload</button>

        <div id="id01" class="modal">

            <form class="modal-content animate" action="/action_page.php" method="post">
                <div class="imgcontainer">
                    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                    <img src="{{asset('public/frontend/img/img_avatar2.png')}}" alt="Avatar" class="avatar">
                </div>



                <div class="container">
                    <label for="uname"><b>Name</b></label>
                    <input type="text" placeholder="Enter Your Name" name="uname" required>

                    <label for="psw"><b>Subject</b></label>
                    <input type="password" placeholder="Enter Your Subject" name="sub" required>

                    <label for="img"><b>Sellect Image</b></label>
                    <input type="file" name="img" required>

                    <button type="submit">Send</button>

                </div>

                <div class="container" style="background-color:#f1f1f1">
                    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>

                </div>
            </form>
        </div>

        <script>
            // Get the modal
            var modal = document.getElementById('id01');

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        </script>

    </div>

</body>

</html>