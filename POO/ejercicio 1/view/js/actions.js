let v = $("#values");
let products = 3;
let elm = $("input");
$.ajax({ 
    method:"POST",
    url: "../controller/controller.php",
    data:{getShops:true},
    dataType: "json",
    success: function (response) {
        console.log(response);
        let t = response;
        let str = '';
        for (let i = 0; i < t.length; i++) {
            str += `<div class="shop"><h2>${t[i]}</h2><div class="form-group row">`;
            for (let j = 0; j < products; j++) {
                let id = `t${i}p${j}`;
                str += `<label for="${id}" class='col-4'>Producto ${j + 1}</label>`;
            }
            for (let j = 0; j < products; j++) {
                let id = `t${i}p${j}`;
                str += `<div class='col-4'><input type="number" class='form-control' name="${id}" id="${id}"></div>`;
            }
            str += `</div></div>`;
        }
        str += `<div class="form-group"><button class="btn btn-primary" name='send' id='send'>Enviar</button></div>`;
        v.html(str);
    }
});