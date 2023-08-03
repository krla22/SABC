var a = 0;
var b = 0;
var c = 0;

function sensniaPlus() {
    a++;
    document.getElementById('sensniaQuantity').value = a;
    displayPrice();
    displayItems();
}
function sensniaMinus() {
    document.getElementById('sensniaQuantity').value = a;
    if (a <= 0) {
        a = 0;
    } else {
        a--;
    }
    displayPrice();
    displayItems();
}

function ubPlus() {
    b++;
    document.getElementById('ubQuantity').value = b;
    displayPrice();
    displayItems();
}

function ubMinus() {
    b--;
    document.getElementById('ubQuantity').value = b;
    displayPrice();
    displayItems();
}

function oapronePlus() {
    c++;
    document.getElementById('oaproneQuantity').value = c;
    displayPrice();
    displayItems();
}

function oaproneMinus() {
    c--;
    document.getElementById('oaproneQuantity').value = c;
    displayPrice();
    displayItems();

}

function displayPrice() {
    var resultText = document.getElementById('total');
    var sensniaQ = parseInt(document.getElementById('sensniaQuantity').value);
    var ubQ = parseInt(document.getElementById('ubQuantity').value);
    var oaproneQ = parseInt(document.getElementById('oaproneQuantity').value);

    var sensniaQuantity = sensniaQ * 255;
    var ubQuantity = ubQ * 480;
    var oaproneQuantity = oaproneQ * 290; 

    var result = sensniaQuantity + ubQuantity + oaproneQuantity;

    resultText.innerHTML = '<p style="float: right;"> ₱' + result + '</p> <input name="total_price" type="hidden" value="'  + "₱" + result + '">'

}

function displayItems() {
    var itemsText = document.getElementById('items');
    var sensniaQ = parseInt(document.getElementById('sensniaQuantity').value);
    var ubQ = parseInt(document.getElementById('ubQuantity').value);
    var oaproneQ = parseInt(document.getElementById('oaproneQuantity').value);

    itemTotal = sensniaQ + ubQ + oaproneQ;
    
    itemsText.innerHTML = '<p style="float: right;">' + itemTotal + '</p> <input name="total_items" type="hidden" value="' + itemTotal + '">'


}

function validationPopup() {
    alert("Log In or Sign Up to Proceed to Checkout!");
}