function loadData(productName) {
    if (productName === "btn1") {
        document.getElementById("image").src = "images/Iphone-XS.png";
        document.getElementById("para").textContent = "Discover the pinnacle of technological sophistication with the iPhone XS. Elegantly designed with a seamless glass and stainless-steel body, its 5.8-inch Super Retina OLED display offers a visually captivating experience. Powered by the A12 Bionic chip, this smartphone ensures flawless performance, effortlessly handling multitasking and power-intensive tasks. Capture stunning photos with the dual 12MP rear cameras, while the 7MP TrueDepth front camera enables impeccable selfies and secure Face ID unlocking. With advanced security features, extended battery life, and access to a world of apps and services through iOS, the iPhone XS redefines the way you interact with your mobile device.";
    } else if (productName === "btn2") {
        document.getElementById("image").src = "images/Iphone-XS-Max.png";
        document.getElementById("para").textContent = "Discover the awe-inspiring iPhone XS Max, where groundbreaking technology meets elegant design. Feast your eyes on the immersive 6.5-inch Super Retina OLED display, powered by the lightning-fast A12 Bionic chip for unmatched performance and extended battery life. Capture life's moments with stunning clarity using the dual 12MP camera system, while experiencing the wonder of augmented reality like never before. With iOS integration, enhanced security features, and a range of stylish finishes, the iPhone XS Max is more than just a smartphone; it's a masterpiece of innovation.";
    } else if (productName === "btn3") {
        document.getElementById("image").src = "images/Iphone-8s-Plus.png";
        document.getElementById("para").textContent = "The iPhone 8 Plus is a perfect combination of powerful performance and elegant design. With its stunning 5.5-inch Retina display, advanced A11 Bionic chip, and dual 12MP camera system, it delivers seamless multitasking, captivating visuals, and outstanding photography. The convenience of wireless charging, iOS brilliance, and premium build further enhance its appeal, making it an exceptional choice for those seeking a top-notch smartphone experience that's both sophisticated and reliable.";
    } else if (productName === "btn4") {
        document.getElementById("image").src = "images/Iphone-SE.png";
        document.getElementById("para").textContent = "The iPhone SE is a compact powerhouse that packs impressive performance and features into a budget-friendly package. With a 4.7-inch Retina HD display, A13 Bionic chip, 12MP camera, Touch ID, and wireless charging, it offers a seamless user experience in a size that fits comfortably in your hand. Whether you're a tech enthusiast or looking for a reliable smartphone, the iPhone SE delivers exceptional value and functionality, making it the perfect choice for those seeking high-quality performance without breaking the bank.";
    }
}

function priceForLoop() {
    var phone = [
        "iPhone X = $790",
        "iPhone XS = $750",
        "iPhone 11 Pro = $850",
        "iPhone 11 Pro Max = $899",
        "iPhone 12 Pro = $960",
        "iPhone 12 Pro Max = $999",
        "iPhone 13 Pro = $1000",
        "iPhone 13 Pro Max = $1150",
        "iPhone 14 = $1390",
        "iPhone 14 Pro = $1450",
        "iPhone 14 Pro Max = $1699",
    ];

    for (i = 0, len = phone.length, list = "List of Average prices(using For loop)<br/>"; i < len; i++) {
        list += phone[i] + "<br/>";
    }

    document.getElementById("image").src = "images/average.jpg";
    document.getElementById("para").innerHTML = list;
}

function priceForInLoop() {
    var phone = [];

    phone["iPhone X"] = "$790";
    phone["iPhone XS"] = "$750";
    phone["iPhone 11 Pro"] = "$850";
    phone["iPhone 11 Pro Max"] = "$899";
    phone["iPhone 12 Pro"] = "$960";
    phone["iPhone 12 Pro Max"] = "$999";
    phone["iPhone 13 Pro"] = "$1000";
    phone["iPhone 13 Pro Max"] = "$1150";
    phone["iPhone 14"] = "$1390";
    phone["iPhone 14 Pro"] = "$1450";
    phone["iPhone 14 Pro Max"] = "$1699";

    var list = "<h2>List of Average Prices</h2>";

    for (var item in phone) {
        list += item + " : " + phone[item] + "<br/>";
    }

    document.getElementById("image").src = "images/average.png";
    document.getElementById("para").innerHTML = list;
}

function priceHigher() {
    var phone = [];

    phone["iPhone X"] = 790;
    phone["iPhone XS"] = 750;
    phone["iPhone 11 Pro"] = 850;
    phone["iPhone 11 Pro Max"] = 899;
    phone["iPhone 12 Pro"] = 960;
    phone["iPhone 12 Pro Max"] = 999;
    phone["iPhone 13 Pro"] = 1000;
    phone["iPhone 13 Pro Max"] = 1150;
    phone["iPhone 14"] = 1390;
    phone["iPhone 14 Pro"] = 1450;
    phone["iPhone 14 Pro Max"] = 1699;

    var HighPrice = "<h2>List of higher cost mobile phones</h2>";

    for (var item in phone) {
        if (phone[item] > 1000) {
            HighPrice += item + " : $" + phone[item] + "<br>";
        }
    }

    document.getElementById("image").src = "images/higher.jpg";
    document.getElementById("para").innerHTML = HighPrice;
}

function priceLower() {
    var phone = [];

    phone["iPhone X"] = 790;
    phone["iPhone XS"] = 750;
    phone["iPhone 11 Pro"] = 850;
    phone["iPhone 11 Pro Max"] = 899;
    phone["iPhone 12 Pro"] = 960;
    phone["iPhone 12 Pro Max"] = 999;
    phone["iPhone 13 Pro"] = 1000;
    phone["iPhone 13 Pro Max"] = 1150;
    phone["iPhone 14"] = 1390;
    phone["iPhone 14 Pro"] = 1450;
    phone["iPhone 14 Pro Max"] = 1699;

    var LowPrice = "<h2>List of lower cost mobile phones</h2>";

    for (var item in phone) {
        if (phone[item] < 1000) {
            LowPrice += item + " : Rs " + phone[item] + "<br>";
        }
    }

    document.getElementById("image").src = "images/lower.jpg";
    document.getElementById("para").innerHTML = LowPrice;
}