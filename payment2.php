<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<style type="text/css">
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

.container{
    width: 400px;
    border-radius: 8px;
    padding: 40px;
    box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.1),
                0 5px 12px -2px rgba(0, 0, 0, 0.1),
                0 18px 36px -6px rgba(0, 0, 0, 0.1);
}

.container .title{
    font-size: 20px;
    font-family: Arial, Helvetica, sans-serif;
}

.container form input{
    display: none;
}

.container form .category{
    margin-top: 10px;
    padding-top: 20px;

    display: grid;
    grid-template-columns: repeat(2, 1fr);
    grid-gap: 15px;
}

.category label{
    /* width: 100%; */
    /* height: 65px; */
    height: 145px;
    padding: 20px;
    box-shadow: 0px 0px 0px 1px rgba(0, 0, 0, 0.2);
    display: flex;
    /* justify-content: space-between; */
    justify-content: center;
    align-items: center;
    cursor: pointer;
    border-radius: 5px;
    position: relative;
}

/* label:nth-child(2), label:nth-child(3){
    margin: 15px 0;
} */


#visa:checked ~ .category .visaMethod,
#mastercard:checked ~ .category .mastercardMethod,
#netbanking:checked ~ .category .netbankingMethod,
#gpay:checked ~ .category .gpayMethod,
#paytm:checked ~ .category .paytmMethod,
#phonepay:checked ~ .category .phonepayMethod{
    box-shadow: 0px 0px 0px 1px #6064b6;
}


#visa:checked ~ .category .visaMethod .check,
#mastercard:checked ~ .category .mastercardMethod .check,
#netbanking:checked ~ .category .netbankingMethod .check,
#gpay:checked ~ .category .gpayMethod .check,
#paytm:checked ~ .category .paytmMethod .check,
#phonepay:checked ~ .category .phonepayMethod .check{
    display: block;
}


label .imgName{
    display: flex;
    /* justify-content: space-between;
     */
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    flex-direction: column;
    gap: 10px;
}

.imgName span{
    /* margin-left: 20px; */
    font-family: Arial, Helvetica, sans-serif;

    position: absolute;
    top: 72%;
    transform: translateY(-72%);
}

.imgName .imgContainer{
    width: 50px;
    display: flex;
    justify-content: center;
    align-items: center;

    position: absolute;
    top: 35%;
    transform: translateY(-35%);
}

img{
    width: 50px;
    height: auto;
}

.visa img{
    width: 80px;
    /* margin-left: 5px; */
}

.mastercard img{
    width: 65px;
}

.netbanking img{
    width: 50px;
}

.gpay img{
    width: 50px;
}

.paytm img{
    width: 50px;
}

.phonepay img{
    width: 100px;
}

.check{
    display: none;
    position: absolute;
    top: -4px;
    right: -4px;
}

.check i{
    font-size: 18px;
}
</style>
<body>
     
    <div class="container">
        <div class="title">
            <h4>Select a <span style="color: #6064b6">Payment</span> method</h4>
        </div>

        <form action="#">
            <input type="radio" name="payment" id="visa">
            <input type="radio" name="payment" id="mastercard">
            <input type="radio" name="payment" id="netbanking">
            <input type="radio" name="payment" id="gpay">
            <input type="radio" name="payment" id="paytm">
            <input type="radio" name="payment" id="phonepay">

            <div class="category">
                <label for="visa" class="visaMethod">
                    <div class="imgName">
                        <div class="imgContainer visa">
                            <img src="https://i.ibb.co/vjQCN4y/Visa-Card.png" alt="">
                        </div>
                        <span class="name">VISA</span>
                    </div>
                    <span class="check"><i class="fa-solid fa-circle-check" style="color: #6064b6;"></i></span>
                </label>

                <label for="mastercard" class="mastercardMethod">
                    <div class="imgName">
                        <div class="imgContainer mastercard">
                            <img src="https://i.ibb.co/vdbBkgT/mastercard.jpg" alt="">
                        </div>
                        <span class="name">Mastercard</span>
                    </div>
                    <span class="check"><i class="fa-solid fa-circle-check" style="color: #6064b6;"></i></span>
                </label>

                <label for="netbanking" class="netbankingMethod">
                    <div class="imgName">
                        <div class="imgContainer netbanking">
                            <img src="netbanking.jpg" alt="">
                        </div>
                        <span class="name">Net Banking</span>
                    </div>
                    <span class="check"><i class="fa-solid fa-circle-check" style="color: #6064b6;"></i></span>
                </label>

                <label for="gpay" class="gpayMethod">
                    <div class="imgName">
                        <div class="imgContainer gpay">
                            <img src="gpay.jpg" width="100">
                        </div>
                        <span class="name">Gpay</span>
                    </div>
                    <span class="check"><i class="fa-solid fa-circle-check" style="color: #6064b6;"></i></span>
                </label>

                <label for="paytm" class="paytmMethod">
                    <div class="imgName">
                        <div class="imgContainer paytm">
                            <img src="paytm.jpg" width="100">
                        </div>
                        <span class="name">Paytm</span>
                    </div>
                    <span class="check"><i class="fa-solid fa-circle-check" style="color: #6064b6;"></i></span>
                </label>

                <label for="phonepay" class="phonepayMethod">
                    <div class="imgName">
                        <div class="imgContainer phonepay">
                            <img src="phonepay.png" width="100">
                        </div>
                        <span class="name">Phonepay</span>
                    </div>
                    <span class="check"><i class="fa-solid fa-circle-check" style="color: #6064b6;"></i></span>
              </label>
                
            </div><br>
            <a href="success.php"  class="btn btn-primary btn-lg btn-block" style="max-width: 950px;font-weight: bold;font-family:sans-serif;font-size: 18px;width: 100%;display: inline-block;">Pay Now &nbsp;<i class="fas fa-rupee-sign"></i> <?php echo $_SESSION['total_amt'] ?></a>
        </form>
    </div>

</body>
</html>

