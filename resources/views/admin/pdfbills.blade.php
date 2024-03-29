
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Example 3</title>
    <style>
    .clearfix:after {
  content: "";
  display: table;
  clear: both;
}

a {
  color: #5D6975;
  text-decoration: underline;
}

body {
  position: relative;
  width: 18cm;  
  height: 29.7cm; 
  margin: 0 auto; 
  color: #001028;
  background: #FFFFFF; 
  font-family: Arial, sans-serif; 
  font-size: 12px; 
  font-family: Arial;
}

header {
  padding: 10px 0;
  margin-bottom: 30px;
}

#logo {
  text-align: center;
  margin-bottom: 10px;
}

#logo img {
  width: 90px;
}

h1 {
  border-top: 1px solid  #5D6975;
  border-bottom: 1px solid  #5D6975;
  color: #5D6975;
  font-size: 2.4em;
  line-height: 1.4em;
  font-weight: normal;
  text-align: center;
  margin: 0 0 20px 0;
  background: url(dimension.png);
}


table {
  width: 100%;
  border-collapse: collapse;
  border-spacing: 0;
  margin-bottom: 20px;
}

table tr:nth-child(2n-1) td {
  background: #F5F5F5;
}

table th,
table td {
  text-align: center;
}

table th {
  padding: 5px 20px;
  color: #5D6975;
  border-bottom: 1px solid #C1CED9;
  white-space: nowrap;        
  font-weight: normal;
}

table .service,
table .desc {
  text-align: left;
}

table td {
  padding: 20px;
  text-align: right;
}

table td.service,
table td.desc {
  vertical-align: top;
}

table td.unit,
table td.qty,
table td.total {
  font-size: 1.2em;
}

table td.grand {
  border-top: 1px solid #5D6975;;
}

#notices .notice {
  color: #5D6975;
  font-size: 1.2em;
}

footer {
  color: #5D6975;
  width: 100%;
  height: 30px;
  position: absolute;
  bottom: 0;
  border-top: 1px solid #C1CED9;
  padding: 8px 0;
  text-align: center;
}
      </style>  </head>
  <body>
    <main>
      <h1  class="clearfix"><small><span>DATE</span><br />{{ $current }}</small> INVOICE {{  $order['id']  }} <small><span>DUE DATE</span><br /> {{ $order['created_at'] }}</small></h1>
      <div id="details" class="clearfix">
       
          <div id="company" class="pull right">
            <div class="arrow back"><div class="inner-arrow">Company Name <span>Buy It</span></div></div>
            <div class="arrow back"><div class="inner-arrow">455 Foggy Heights, AZ 85004, US <span>ADDRESS</span></div></div>
            <div class="arrow back"><div class="inner-arrow">(602) 519-0450 <span>PHONE</span></div></div>
            <div class="arrow back"><div class="inner-arrow">BuyIt@example.com</a> <span>EMAIL</span></div></div>
          </div>
        </div><div></div>
        <div id="project">
            <div class="arrow"><div class="inner-arrow"><span>CLIENT</span> {{  $order['ContactName']  }}
              <span>ADDRESS</span> {{  $order['Postal']}}, {{  $order['Addrese']}}, {{  $order['City']}} , {{  $order['Country']}} 
              <span>NUMBER PHONE</span>{{  $order['PhoneNumber']  }}</div></div>
          </div>
      <table>
        <thead>
          <tr>
            <th>Name Product</th>
            <th>Price</th>
            <th>QTY</th>
            <th>TOTAL</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <tr>   
             @if($products)
              @foreach ($products as $product)
                  @if($product->id == $cart->product_id)
                    <td class="unit">
                      {{  $product['NameProduct'] }} 
                    </td>
                    <td>
                        {{  $product['PriceProduct'] }} 
                    </td>
                  @endif
              @endforeach
              @endif  
              
            
            <td class="qty">{{  $cart['Qt'] }} </td>
            <td class="total">{{ $product['PriceProduct']* $cart['Qt']}}</td>
            <td></td>
          </tr>
         
          <tr>
            <td colspan="4" class="grand total">GRAND TOTAL</td>
            <td class="grand total">{{ $product['PriceProduct']* $cart['Qt']}}</td>
          </tr>
        </tbody>
      </table>
    
      <div id="notices">
        <div>NOTICE:</div>
        <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
      </div>
    </main>
    <footer>
      Invoice was created on a computer and is valid without the signature and seal.
    </footer>
  </body>
</html>