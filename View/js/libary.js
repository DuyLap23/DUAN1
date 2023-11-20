$(document).ready(function () {
    // function cap nhat so luong 
    function quantity() {
        var cart = $("#cart").children("tr");
        var quatity = cart.length;
        var boxcart = $("#boxcart").children("strong");
        boxcart.text(quatity);
    };
    function tongDonHang (){
        var tongdh = $("#tongdonhang").children("tr");
        // tinh tong don hang 
        var cart = $("#cart").children("tr");
        var sum = 0;
        for (let i = 0; i < cart.length; i++) {
            // laays ra tong cua 1 don hang 
            sum += eval(cart.eq(i).children("td").eq(4).text());
            
        }
        tongdh.children("td").eq(1).text(sum);
    }

    // hien thi so luong don hanfg owr icon 
    quantity();
    tongDonHang();

  
    // xoa
    $(".delete").click(function (e) {
        e.preventDefault();

        var tr = $(this).parent().parent();
        var product_name = tr.children("td").eq(0).text();
        tr.remove();
        // cap nhat so luong 
        quantity();
        // cap nhat lai tong 
        tongDonHang();
        // taoj hieu ung cho icon gio hang 
        $(".cart_bt").addClass("cart_aini");
        setTimeout(function () { $(".cart_bt").removeClass("cart_aini");; }, 500);


    });

    // tang sl 
    $(".qty2").change(function (e) {
        e.preventDefault();

        var sl = $(this).val();
        var tr = $(this).parent().parent().parent();
        var tensp = tr.children("td").eq(0).text();
        var dongia = tr.children("td").eq(2).text();
        var tt = dongia * sl;
        tr.children("td").eq(4).text(tt);
        tongDonHang();

    });

    // thêm vào giỏ hàng 
    $(".addtocart").click(function (e) {
        e.preventDefault();
        var boxsp = $(this).parent().parent();
        var tensp = boxsp.children("a").children("h3").text();
        var img = boxsp.children("figure").children("a").children("img").attr("src");
        var  dongia = boxsp.children("div").children("span").text();
        var  sl = 1;
       
        
        $.post("Home/home.php",{
            tensp: tensp,
            img: img,
            dongia: dongia,
            sl: 1
        },
            function (data) {
                var countsp = $("#count_cart");
                countsp.text(data);
                // cap nhat so luong
                $(".dropdown-cart").addClass("cart_aini");
                setTimeout(() => {
                    $(".dropdown-cart").removeClass("cart_aini");
                },500);

            }

        );
    });
});