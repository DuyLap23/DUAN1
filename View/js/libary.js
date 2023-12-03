// $(document).ready(function () {
//     // function cap nhat so luong 
//     function quantity() {
//         var cart = $("#cart").children("tr");
//         var quatity = cart.length;
//         var boxcart = $("#boxcart").children("strong");
//         boxcart.text(quatity);
//     };
//     function tongDonHang (){
//         var tongdh = $("#tongdonhang").children("tr");
//         // tinh tong don hang 
//         var cart = $("#cart").children("tr");
//         var sum = 0;
//         for (let i = 0; i < cart.length; i++) {
//             // laays ra tong cua 1 don hang 
//             sum += eval(cart.eq(i).children("td").eq(4).text());
            
//         }
//         tongdh.children("td").eq(2).text(sum);
//     }

//     // hien thi so luong don hanfg owr icon 
//     quantity();
//     tongDonHang();

  
    // xoa
    // $(".delete").click(function (e) {
    //     e.preventDefault();

    //     var tr = $(this).parent().parent();
    //     var product_name = tr.children("td").eq(0).text();
    //     tr.remove();
    //     // cap nhat so luong 
    //     quantity();
    //     // cap nhat lai tong 
    //     tongDonHang();
    //     // taoj hieu ung cho icon gio hang 
    //     $(".cart_bt").addClass("cart_aini");
    //     setTimeout(function () { $(".cart_bt").removeClass("cart_aini");; }, 500);


    // });

    // tang sl 
    // $(".qty2").change(function (e) {
    //     e.preventDefault();

    //     var sl = $(this).val();
    //     var tr = $(this).parent().parent().parent();
    //     var tensp = tr.children("td").eq(0).text();
    //     var dongia = tr.children("td").eq(2).text();
    //     var tt = dongia * sl;
    //     tr.children("td").eq(5).text(tt);
    //     tongDonHang();

    // });

    // thêm vào giỏ hàng 
    // $(".addtocart").click(function (e) {
    //     e.preventDefault();
    //     var boxsp = $(this).parent().parent();
    //     var tensp = boxsp.children("a").children("h3").text();
    //     var img = boxsp.children("figure").children("a").children("img").attr("src");
    //     var  dongia = boxsp.children("div").children("span").text();
    //     var  sl = 1;
       
        
    //     $.post("Home/home.php",{
    //         tensp: tensp,
    //         img: img,
    //         dongia: dongia,
    //         sl: 1
    //     },
    //         function (data) {
    //             var countsp = $("#count_cart");
    //             countsp.text(data);
    //             // cap nhat so luong
    //             $(".dropdown-cart").addClass("cart_aini");
    //             setTimeout(() => {
    //                 $(".dropdown-cart").removeClass("cart_aini");
    //             },500);

    //         }

    //     );
    // });
// });

  // $(document).ready(function() {
  //   // Cập nhật tổng giá khi số lượng thay đổi
  //   $('.quantity-input').on('input', function() {
  //     updateTotalPrice();
  //   });

  //   // Hàm cập nhật tổng giá
  //   function updateTotalPrice() {
  //     var total = 0;

  //     // Duyệt qua từng hàng trong bảng
  //     $('.cart-list tbody tr').each(function() {
  //       var quantity = parseInt($(this).find('.quantity-input').val());
  //       var price = parseFloat($(this).find('td:eq(2)').text().replace(',', ''));
  //       var totalPrice = quantity * price;

  //       // Cập nhật cột tổng trong hàng hiện tại
  //       $(this).find('#total').text(numberWithCommas(totalPrice));

  //       // Thêm tổng của hàng hiện tại vào tổng chung
  //       total += totalPrice;
  //     });

  //     // Cập nhật tổng trong phần tóm tắt
  //     $('.box_cart ul li span').text(numberWithCommas(total) + 'VND');
  //   }

  //   // Hàm định dạng số với dấu phẩy
  //   function numberWithCommas(x) {
  //     return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
  //   }
  // });
  // Hàm lấy số lượng có sẵn cho kích cỡ đã chọn
// function getQuantity(productId, size) {
//   // Tạo yêu cầu AJAX
//   const xhr = new XMLHttpRequest();

//   // Đặt phương thức và URL của yêu cầu
//   xhr.open('GET', 'get_quantity.php?product_id=' + productId + '&size=' + size);

//   // Đặt sự kiện lắng nghe kết thúc yêu cầu
//   xhr.onload = function() {
//     if (xhr.status === 200) {
//       // Trả về số lượng
//       return JSON.parse(xhr.responseText)['quantity'];
//     }
//   };

//   // Gửi yêu cầu
//   xhr.send();
// }

// // Hàm cập nhật đầu vào số lượng
// function updateQuantity(quantity) {
//   // Lấy đầu vào số lượng
//   const quantityInput = document.getElementById('quantity_1');

//   // Đặt giá trị của đầu vào số lượng
//   quantityInput.value = quantity;
// }

// // Khi kích cỡ thay đổi
// document.getElementById('size').addEventListener('change', function() {
//   // Lấy ID sản phẩm
//   const productId = document.getElementById('product_id').value;

//   // Lấy kích cỡ đã chọn
//   const size = this.value;

//   // Lấy số lượng có sẵn
//   const quantity = getQuantity(productId, size);

//   // Cập nhật đầu vào số lượng
//   updateQuantity(quantity);
// });


