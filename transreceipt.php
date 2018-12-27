
<html>
    <head>
        <meta charset="utf-8">
        <title>Invoice</title>
        <link rel="stylesheet" href="css/invoice.css">
        
       <script src="js/script.js"></script>
<style type="text/css">
    
</style>
    </head>
    <body>
        <header>
            <h1>Invoice</h1>
            <address contenteditable>
                <p>Salvi Catering</p>
                <p>967 'E' Ward Shahupuri 6th lane,Kolhapur</p>
                <p><b>Mob.:9823596983</b></p>
            </address>
            <span><img alt="" src="img/logo.png"><input type="file" accept="image/*"></span>
        </header>
        <article>
            <h1>Recipient</h1>
            <!-- <address >
             <span>Customer Name:</span><input type="text" name=""><br>
             <span>Address:</span><input type="text" name=""><br>
            </address> -->
             <table class="data">
                <tr>
                    <th><span contenteditable>Customer Name:</span></th>
                    <td><span contenteditable>Ranjeet Patil</span></td>
                </tr>
                <tr>
                    <th><span contenteditable>Address:</span></th>
                    <td><span contenteditable>Kolhapur</span></td>
                </tr>
               
            </table>
            <table class="meta">
                <tr>
                    <th><span contenteditable>Invoice #</span></th>
                    <td><span contenteditable>101138</span></td>
                </tr>
                <tr>
                    <th><span contenteditable>Date</span></th>
                    <td><span contenteditable><?Php $date=date("d-m-Y");
                     echo $date?></span></td>
                </tr>
                <tr>
                    <th><span contenteditable>Amount Due</span></th>
                    <td><span id="prefix" contenteditable>₹</span><span>600.00</span></td>
                </tr>
            </table>
            <table class="inventory">
                <thead>
                    <tr>
                        <th><span contenteditable>Item</span></th>
                        
                        <th><span contenteditable>Rate</span></th>
                        <th><span contenteditable>Quantity</span></th>
                        <th><span contenteditable>Amount</span></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a class="cut">-</a><span contenteditable></span></td>
                        
                        <td><span data-prefix>₹</span><span contenteditable></span></td>
                        <td><span contenteditable></span></td>
                        <td><span data-prefix>₹</span><span></span></td>
                    </tr>
                </tbody>
            </table>
         
            <a class="add">+</a>
            <table class="balance">
                <tr>
                    <th><span contenteditable>Total</span></th>
                    <td><span data-prefix>₹</span><span>600.00</span></td>
                </tr>
                <tr>
                    <th><span contenteditable>Amount Paid</span></th>
                    <td><span data-prefix>₹</span><span contenteditable>0.00</span></td>
                </tr>
                <tr>
                    <th><span contenteditable>Balance Due</span></th>
                    <td><span data-prefix>₹</span><span>600.00</span></td>
                </tr>
            </table>
        </article>
        <aside>
            <h1><span contenteditable>Additional Notes</span></h1>
            <div contenteditable>
                <p>A bill amount is the minimum amount for the order placed by you.</p>
                            <p>Further any extras will charged accordingly.</p>
            </div>
        </aside>
        <br><br>
        <div width="100%" >
    <div width="50%"  style="float:left">
        <b>      
                            RECEIVER'S SIGNATURE & STAMP</b> 
                    </div>
                    <div width="50%" style="float:right;">
                         <b>FOR SALVI CATERING      
                            </b>   

                </div>
                </div>
    </body>
</html>