 <section class="pb-5 hideme" id="partners">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12">
          <h2 class=" bounceIn text-center text-muted py-5  display-4 font-weight-bold"><span>Parteners</span></h2>
        </div>
        
        <!-- Item1 -->
       // <?php
           // if(isset($rhos) && !empty($rhos)) { 
              //  $path = "orgAdmin/img/$rhos->logo";?>
        
        <div class="card pt-3  mb-xs-5 mb-4 text-center boxshaow" style="width: 18rem;">
          <img class=" card-img-top rounded-circle imageshaow mx-auto " src='{{ url("$path") }}' alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">{{$rhos->name}}</h5>
            <p class="card-text text-center">{{substr($rhos->about_us, 0,100)}}....</p>
            <a href='{{URL::asset("/hospitalPartner/$rhos->id")}}' class="btn btn-primary">Read More</a>
          </div>
        </div>
            <?php
            }?>
        <!-- Item2 -->
       // <?php
         //   if(isset($rlab) && !empty($rlab)) { 
            //    $path = "orgAdmin/img/$rlab->logo";?>
        
        <div class="card pt-3  mb-xs-5 mb-4 text-center boxshaow" style="width: 18rem;">
          <img class=" card-img-top rounded-circle imageshaow mx-auto " src='{{ url("$path") }}' alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">{{$rlab->name}}</h5>
            <p class="card-text text-center">{{substr($rlab->about_us, 0,100)}}....</p>
            <a href='{{URL::asset("/centerPartner/$rlab->id")}}' class="btn btn-primary">Read More</a>
          </div>
        </div>
        <?php
            }?>
          <!-- Item3 -->
         <?php
          if(isset($rcen) && !empty($rcen)) {  $path = "orgAdmin/img/$rcen->logo";
		  ?>
            
       <div class="card pt-3  mb-xs-5 mb-4 text-center boxshaow" style="width: 18rem;">
          <img class=" card-img-top rounded-circle imageshaow mx-auto " src='{{ url("$path") }}' alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">{{$rcen->name}}</h5>
            <p class="card-text text-center">{{substr($rcen->about_us, 0,100)}}....</p>
            <a href='{{URL::asset("/labPartner/$rcen->id")}}' class="btn btn-primary">Read More</a>
          </div>
        </div>
        <?php
            }
		  ?>
      </div>
    </div>

  </section>