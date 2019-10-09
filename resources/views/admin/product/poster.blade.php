@extends('admin.product.base')
@section('action-content')

<li class="active">Poster</li>
     </ol>
   </section>
<section class="content">
  <div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h1 class="box-title"><b>Poster produt</b></h1>
        </div>
        <!-- /.box-header -->
        <!-- form start -->

        <div class="box-header">
        </div>
        <table class="table">
             
            <tbody>
         @if($products)
              <tr>
                <td></td>
                <td>Name : </td>  
                <td >{{$products->NameProduct}}</td>
                <td rowspan="8">
                 
                  <div class="img-magnifier-container">
                      <img id="myimage" src="{{ asset('storage/'.$products->ImageProduct) }}" width="400" height="300">
                    </div>
                 </td>
              </tr>
            
                <tr>
                <td></td>
                <td >Brand : </td>  
                <td>{{ $products->GetNameBrand->NameBrand }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td >Category : </td>  
                    <td>{{ $products->GetNameCate->NameCat }}</td>
             </tr> 
             <tr>
                <td></td>
                <td >Provider : </td>  
                <td>{{ $products->GetNameProvider->NameProvider }}</td>
         </tr>    
             <tr>
                <td></td>
                    <td >Price : </td>  
                    <td>{{$products->PriceProduct}}</td>
             </tr>    
             <tr>
                <td></td>
                    <td >Quntity : </td>  
                    <td>{{$products->QuantityProduct}}</td>
             </tr>   
             <tr>
                <td></td>
                    <td >Designation : </td>  
                    <td>{{$products->DesignationProduct}}</td>
             </tr>    
             <tr>
                <td></td>
                    <td >Description : </td>  
                    <td>{{$products->DescriptionProduct}}</td>
             </tr>  
             <tr>
                <td></td>
                    <td >Created At : </td>  
                    <td>{{$products->created_at}}</td>
             </tr>   
             <tr>
                <td></td>
                    <td >Updated At : </td>  
                    <td>{{$products->updated_at}}</td>
             </tr>   
             @endif
            </tbody>
</table>
    </div>
    <!--/.col (left) -->
    <!-- right column -->
   
    <!--/.col (right) -->
  </div>
  <!-- /.row -->
</section>
<style>
    * {box-sizing: border-box;}
    .img-magnifier-container {
      position:relative;
    }
    .img-magnifier-glass {
      position: absolute;
      border: 3px solid #000;
      border-radius: 50%;
      cursor: none;
      /*Set the size of the magnifier glass:*/
      width: 100px;
      height: 100px;
    }
    </style>
    <script>
    function magnify(imgID, zoom) {
      var img, glass, w, h, bw;
      img = document.getElementById(imgID);
      /*create magnifier glass:*/
      glass = document.createElement("DIV");
      glass.setAttribute("class", "img-magnifier-glass");
      /*insert magnifier glass:*/
      img.parentElement.insertBefore(glass, img);
      /*set background properties for the magnifier glass:*/
      glass.style.backgroundImage = "url('" + img.src + "')";
      glass.style.backgroundRepeat = "no-repeat";
      glass.style.backgroundSize = (img.width * zoom) + "px " + (img.height * zoom) + "px";
      bw = 3;
      w = glass.offsetWidth / 2;
      h = glass.offsetHeight / 2;
      /*execute a function when someone moves the magnifier glass over the image:*/
      glass.addEventListener("mousemove", moveMagnifier);
      img.addEventListener("mousemove", moveMagnifier);
      /*and also for touch screens:*/
      glass.addEventListener("touchmove", moveMagnifier);
      img.addEventListener("touchmove", moveMagnifier);
      function moveMagnifier(e) {
        var pos, x, y;
        /*prevent any other actions that may occur when moving over the image*/
        e.preventDefault();
        /*get the cursor's x and y positions:*/
        pos = getCursorPos(e);
        x = pos.x;
        y = pos.y;
        /*prevent the magnifier glass from being positioned outside the image:*/
        if (x > img.width - (w / zoom)) {x = img.width - (w / zoom);}
        if (x < w / zoom) {x = w / zoom;}
        if (y > img.height - (h / zoom)) {y = img.height - (h / zoom);}
        if (y < h / zoom) {y = h / zoom;}
        /*set the position of the magnifier glass:*/
        glass.style.left = (x - w) + "px";
        glass.style.top = (y - h) + "px";
        /*display what the magnifier glass "sees":*/
        glass.style.backgroundPosition = "-" + ((x * zoom) - w + bw) + "px -" + ((y * zoom) - h + bw) + "px";
      }
      function getCursorPos(e) {
        var a, x = 0, y = 0;
        e = e || window.event;
        /*get the x and y positions of the image:*/
        a = img.getBoundingClientRect();
        /*calculate the cursor's x and y coordinates, relative to the image:*/
        x = e.pageX - a.left;
        y = e.pageY - a.top;
        /*consider any page scrolling:*/
        x = x - window.pageXOffset;
        y = y - window.pageYOffset;
        return {x : x, y : y};
      }
    }
    </script>
    
<script>
    /* Initiate Magnify Function
    with the id of the image, and the strength of the magnifier glass:*/
    magnify("myimage", 3);
    </script>
@endsection