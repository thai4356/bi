<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
    .modal {
        display: block; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.5); /* Black w/ opacity */
        background-image: url("../Public/assetsHomepage/images/footer-bg.png");
        max-width: unset;
    }

    /*CSS cho nội dung của hộp thoại chình là thẻ <div class="modal-content"> */
    .modal-content {
        background-color: rgba(255, 255, 255, 0.83);
        margin: 15% auto; /* 15% from the top and centered */
        padding: 15px;
        border: 2px solid #0f1824;
        width: 30%; /* Could be more or less, depending on screen size */
        font-family:Arial, Helvetica, sans-serif;
    }

    .button-53 {
        background-color: #dcd121;
        border: 0 solid #E5E7EB;
        box-sizing: border-box;
        color: #000000;
        display: flex;
        font-family: ui-sans-serif,system-ui,-apple-system,system-ui,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
        font-size: 1rem;
        font-weight: 700;
        justify-content: center;
        line-height: 1.75rem;
        padding: .75rem 1.65rem;
        position: relative;
        text-align: center;
        text-decoration: none #000000 solid;
        text-decoration-thickness: auto;
        width: 100%;
        max-width: 460px;
        position: relative;
        cursor: pointer;
        transform: rotate(-2deg);
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
    }

    .button-53:focus {
        outline: 0;
    }

    .button-53:after {
        content: '';
        position: absolute;
        border: 1px solid #000000;
        bottom: 4px;
        left: 4px;
        width: calc(100% - 1px);
        height: calc(100% - 1px);
    }

    .button-53:hover:after {
        bottom: 2px;
        left: 2px;
    }

    @media (min-width: 768px) {
        .button-53 {
            padding: .75rem 3rem;
            font-size: 1.25rem;
        }
    }
</style>
<div id="myModal" class="modal">
    <!-- Nội dung hộp thoại -->
    <div class="modal-content">
        <a style="margin-left: 96% ;text-decoration: none" href="<?=$link_tieptuc?>">
            x
        </a>
        <div style="text-align: center">
            <i class="fa fa-bell" aria-hidden="true"></i><div >Notification</div>
        </div>
        <hr>
        <p style="text-align: center"><?=$thongbao?></p>


        <a class="button-53" role="button" href="<?=$link_tieptuc?>" style="width: 10%;float: right">Continue</a>
    </div>
</div>
<script>
    // Get the modal - Lấy tham chiếu đến thẻ div id=myModal
    var modal = document.getElementById("myModal");
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) { //nếu thẻ được nhấn là <div id="myModal"> thì ẩn nó đi
            //modal.style.display = "none";
        }
    }
</script>