$('.pd-news-carousel').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
  });


  $('.pd-main-carousel').slick({
    infinite: false,
    speed: 300,
    slidesToShow: 5,
    slidesToScroll: 4,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });


  $('.news-carousel').slick({
    loop: true,
    infinite: false,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 4,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });



  // Send mail

function sendMail() { 
  const name = $('#inputName').val();
  const phone = $('#inputPhone').val();
  const address = $('#inputAddress').val();
  const message = $('#inputMessage').val();

  const _token = $('input[name="_token"]').val();

  if (name == '' || phone == '' || address == '' || message == '') {
    swal({
      title: "Thiếu thông tin đặt hàng!",
      text: "Bạn cần điền thông tin đầy đủ để tiến hành đặt hàng",
      type: "error",
      confirmButtonText: "Xem lại"
    });
  }else{
    showLoader();
    setTimeout(() => {
      $.ajax({
          url: 'send-info',
          method: 'POST',
          data: {name:name, phone:phone, address:address, message:message, _token:_token},
          success: function(){
              
              swal({
                  title: "Gửi thông tin thành công",
                  text: "Cảm ơn bạn đã quan tâm dịch vụ của chúng tôi. Chúng tôi sẽ liên lạc với bạn ngay",
                  type: "success",
                  confirmButtonClass: "btn-success",
                  confirmButtonText: "Xác nhận"
              },
              function() {
                  window.location.href = "/trang-chu";
              });
          }
      });
        
    }, 1000);
  } 
}

$('.btn-ct-submit').click(function (){
  sendMail();
})

const loader = document.getElementById("preloader");
const showLoader = ()=>{
    loader.style.display = "flex";
}
const hideLoader = ()=>{
    loader.style.display = "none";
}