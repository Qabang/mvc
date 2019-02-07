
   <div class="rows">
                    </br>
                    
                    <div class="cols1"> <?php echo ucwords($data['productName'])?></div>
                    <div class="cols"><b> <?php echo number_format((float)$data['productPrice'],2,',', '.')?>kr</b></div> <!-- number_format((datatyp)variabel,antal decimaler, tecken för att separera decimalerna, tecken för att markera tusensteg-->
                    <br><div class="cols"> <?php echo $data['productInfo']?></div>
                    </br>
                </div>
