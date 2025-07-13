<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User.Portal</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <div class="header">
        <img id="lo" src="t.jpg" alt="logo">
    </div>
    <div class="aside">
        <aside>
            <ul>
                <li><a href="dashboard"><button >Dashboard</button></a></li>
                <li><a href="#product"><button onclick="myFunction()" >Product</button></a></li>
                <li><a href="#orders"><button onclick="myFunction1()">Orders</button></a></li>
                <li><a href="#messages"><button >Messages</button></a></li>
                <li><a href="#users"><button >Users</button></a></li>
                <li><a href="#settings"><button >Settings</button></a></li>
                <li><a href="rodrick.html"><button >Logout</button></a></li>
            </ul>

        </aside>
    </div>
    <div class="product">
        <table id="product" style="display:none;">
            <tr id="r1">
                <th>Product</th>
                <th>Size</th>
                <th>Price</th>
                <th>Status</th>
                    
            </tr>

            <tr>
                <td>list of cement <img src="" alt="cement"></td>
                <td>Size</td>
                <td>amount</td>
                <td><input type="submit" value="order" name="order"></td>

            </tr>

             <tr>
                <td>list of cement <img src="" alt="cement"></td>
                <td>Size</td>
                <td>amount</td>
                <td><input type="submit" value="order" name="order"></td>

            </tr>

             <tr>
                <td>list of cement <img src="" alt="cement"></td>
                <td>Size</td>
                <td>amount</td>
                <td><input type="submit" value="order" name="order"></td>

            </tr>

             <tr>
                <td>list of cement <img src="" alt="cement"></td>
                <td>Size</td>
                <td>amount</td>
                <td><input type="submit" value="order" name="order"></td>

            </tr>

             <tr>
                <td>list of cement <img src="" alt="cement"></td>
                <td>Size</td>
                <td>amount</td>
                <td><input type="submit" value="order" name="order"></td>

            </tr>
        </table>

        <div class="orders">
            <table  id="orders" style="display:none;">
                <tr>
                    <th>Item</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>payment</th>
                </tr>
                <tr>
                    <td><img src="" alt="cement"><br>cement</td>
                    <td>cement @ price</td>
                    <td>Tsh.</td>
                    <td><input type="submit" value="payments" id="pay"></td>

                </tr>

                 <tr>
                    <td><img src="" alt="cement"><br>cement</td>
                    <td>cement @ price</td>
                    <td>Tsh.</td>
                    <td><input type="submit" value="payment" id="pay"></td>

                </tr>

                 <tr>
                    <td><img src="" alt="cement"><br>cement</td>
                    <td>cement @ price</td>
                    <td>Tsh.</td>
                    <td><input type="submit" value="payment" id="pay"></td>

                </tr>

                 <tr>
                    <td><img src="" alt="cement"><br>cement</td>
                    <td>cement @ price</td>
                    <td>Tsh.</td>
                    <td><input type="submit" value="payment" id="pay"></td>

                </tr>
            </table>

            <!-- javascript -->
             <script>
                function myFunction(){
                    var x =document.getElementById("product");
                    var y =document.getElementById("orders");
                    if(y.style.display == "block" && x.style.display == "none"){
                        y.style.display = "none";
                        x.style.display ="block";
                    }else if(x.style.display == "none"){
                        x.style.display ="block";
                        y.style.display = "none";
                    }else{
                        x.style.display ="none";
                        y.style.display = "none";


                    }

                }
                function myFunction1(){
                    var y =document.getElementById("orders");
                    var x =document.getElementById("product");
                    if(x.style.display == "block" && y.style.display == "none"){
                        x.style.display = "none";
                        y.style.display ="block";
                    }else if(y.style.display == "none"){
                        x.style.display ="none";
                        y.style.display = "block";
                    }else{
                        x.style.display ="none";
                        y.style.display = "none";
                    }

                }

             </script>
        </div>

        <div class="messages" style="display:none;" id="messages">
            <table>
                <tr style="background-color:bisque;">
                    <th id="m1">From</th>
                    <th id="m2">Inbox</th>
                    <th id="m3">Date</th>
                </tr>
                <tr style="background-color:bisque;">
                    <td>client/admin</td>
                    <td>message</td>
                    <td>timestamp</td>
                </tr>

                <tr style="background-color:bisque;">
                    <td>client/admin</td>
                    <td>message</td>
                    <td>timestamp</td>
                </tr>

                <tr style="background-color:bisque;">
                    <td>client/admin</td>
                    <td>message</td>
                    <td>timestamp</td>
                </tr>
            </table>
        </div>

    </div>
</body>
</html>