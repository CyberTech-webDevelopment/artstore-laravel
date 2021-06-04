// -------------drag drop image-----------------------
$(".input-file-trigger").on('dragenter', function (e){
  e.preventDefault();
  $(this).css('background', '#BBD5B8');
  });

  $(".input-file-trigger").on('dragover', function (e){
  e.preventDefault();
  });

  $(".input-file-trigger").on('drop', function (e){
      $(this).css('background', '#D8F9D3');
      e.preventDefault()
      var file = e.originalEvent.dataTransfer.files[0];

      readURL(file);
  });


  function readURL(file) {
     var reader = new FileReader();
     reader.onload = function(e) {
         var image = new Image();
             image.src = e.target.result;

          image.onload = function () {
             var height = this.height;
             var width = this.width;
             var data = e.target.result;

            if(height > 400 || width > 400){
              $('.canvas-cont').removeClass('hide')
              $('.canvas-cont').addClass('d-flex')

              Edit(data, height, width, image)
            }
            else{
                 if(array_images.length<3){
                      $('#image-cont').append('<div class="image-cont-item mx-1"><img src="'+ e.target.result+'"></div>');
                      array_images.push(e.target.result)
                  }
                  if(array_images.length==3){
                      $('.uploade-image').css('display','none')
                      $('.uploade-image').removeClass('d-flex')
                  }
            }
      }
  }
    reader.readAsDataURL(file);
}

var canvas = new fabric.Canvas('canvas');
var can =document.getElementById('canvas')

  function Edit(data, height, width, image){
         var oImg
         fabric.Image.fromURL(data, function (img) {
            oImg = img.set({ left: 0, top: 0, angle: 00}).scale(1);
            oImg.scaleToHeight(height);
            oImg.scaleToWidth(width);
            canvas.setActiveObject(oImg).renderAll();

            var dataURL = canvas.toDataURL({ format: 'png',});
        quality: 0.8});
canvas.setDimensions({width: 400, height: 400})

canvas.on('mouse:wheel', function(opt) {
        var delta = opt.e.deltaY;
        var zoom=oImg.scaleX
            zoom *= 0.999 ** delta;
        if (zoom > 20) zoom = 20;
        if (zoom < 0.01) zoom = 0.01;

        oImg.scale(zoom);

      canvas.setBackgroundImage(oImg).renderAll();
      opt.e.preventDefault();
      opt.e.stopPropagation();
})
canvas.renderAll();
}

// ------------------CROP IMAGE----------------
$('#crop-image').click(function(){
     let cropWidth=canvas.getWidth()
     let cropHeight=canvas.getHeight()
     let cropped = new Image();
         cropped.src = canvas.toDataURL({
              width: cropWidth,
              height: cropHeight
         });
    // console.log(cropped.src)

       if(array_images.length<3){
              $('#image-cont').append('<div class="image-cont-item mx-1"><img src="'+cropped.src+'"></div>')
              array_images.push(cropped.src)
              $('.canvas-cont').addClass('hide')
              $('.canvas-cont').removeClass('d-flex')
        }
        if(array_images.length==3){
              $('.uploade-image').css('display','none')
              $('.uploade-image').removeClass('d-flex')
        }
            canvas.clear()
})

// ---------delete image-----------------------------
$('.delete-image').click(function(){
      $('.canvas-cont').addClass('hide')
      $('.canvas-cont').removeClass('d-flex')
})

var image
let array_images=[]
// -------------------browse image-----------------------------
$('#fileupload').on("input", function (e) {
    if(array_images.length<3){
       var file = e.target.files[0];
      readURL(file);
    }
});


// -----------select categories--------------------------
$('.add_product_menu').change(function(){
  let select_menu_id=$(this).find("option:selected").attr('data-menu-id')
    let url = $('#sel_cat_route').val()
  // let sel_id=$(this).attr('id')
  console.log(sel_id)
  $.ajax({
    method: 'post',
    url: url,
    data: {menu_id: select_menu_id},
    success: function(res){
      // $('#select-sub-menu').html(res)
      console.log(res)
    }
  })
})
