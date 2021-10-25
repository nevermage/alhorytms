<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<style>
    *:focus {
        outline: none;
    }
    .checkout {
    font-family: calibri;
    font-size: 20px;
    background: #eee;
    border-radius: 5px;
    overflow: hidden;
    position: absolute;
    top: 45%;
    left: calc(50% - 160px);
    box-shadow: #888 3px 3px 3px;
    }
    input {
        border-radius: 5px;
        font-size: 20px;
        border: 1px solid #555;
    }
    button {
        border: 1px solid #555;
        border-radius: 5px;
        cursor: pointer;
        margin-left: -10px;
        font-size: 20px;
    }
</style>
<body>
<div class="checkout">
    <input type="text" id="data">
    <button onclick="validation()">check</button>
</div>

<script>


    let zxc = [{"id":1,"firstName":"Osmond","surName":"Kieran","sex":"Male","age":26,"isVegetarian":true,"langCount":8},
    {"id":2,"firstName":"Rogerio","surName":"Canedo","sex":"Male","age":36,"isVegetarian":false,"langCount":4},
    {"id":3,"firstName":"Heath","surName":"Merrin","sex":"Male","age":47,"isVegetarian":true,"langCount":8},
    {"id":4,"firstName":"Fran","surName":"Crowdy","sex":"Female","age":29,"isVegetarian":true,"langCount":13},
    {"id":5,"firstName":"Nettle","surName":"Nicely","sex":"Female","age":40,"isVegetarian":false,"langCount":5},
    {"id":6,"firstName":"Gray","surName":"Kaming","sex":"Male","age":28,"isVegetarian":false,"langCount":1},
    {"id":7,"firstName":"Lynn","surName":"Spaven","sex":"Female","age":29,"isVegetarian":false,"langCount":10},
    {"id":8,"firstName":"Krystyna","surName":"Dockery","sex":"Female","age":44,"isVegetarian":false,"langCount":14},
    {"id":9,"firstName":"Brigid","surName":"Blaxill","sex":"Female","age":23,"isVegetarian":false,"langCount":7},
    {"id":10,"firstName":"Rodge","surName":"Spivie","sex":"Male","age":40,"isVegetarian":true,"langCount":11},
    {"id":11,"firstName":"Clari","surName":"Gonnely","sex":"Female","age":29,"isVegetarian":true,"langCount":1},
    {"id":12,"firstName":"Paulie","surName":"MacCurlye","sex":"Male","age":42,"isVegetarian":true,"langCount":4},
    {"id":13,"firstName":"Bree","surName":"Withams","sex":"Female","age":20,"isVegetarian":true,"langCount":12},
    {"id":14,"firstName":"Halette","surName":"Spinelli","sex":"Female","age":26,"isVegetarian":false,"langCount":8},
    {"id":15,"firstName":"Adriano","surName":"Pyzer","sex":"Male","age":43,"isVegetarian":true,"langCount":6},
    {"id":16,"firstName":"Margie","surName":"Boldra","sex":"Female","age":49,"isVegetarian":false,"langCount":5},
    {"id":17,"firstName":"Chandal","surName":"Sinisbury","sex":"Female","age":25,"isVegetarian":false,"langCount":12},
    {"id":18,"firstName":"Hillary","surName":"Tilney","sex":"Male","age":21,"isVegetarian":false,"langCount":6},
    {"id":19,"firstName":"Yancy","surName":"Bernhart","sex":"Male","age":19,"isVegetarian":true,"langCount":12},
    {"id":20,"firstName":"Kaela","surName":"Gravett","sex":"Female","age":30,"isVegetarian":true,"langCount":10},
    {"id":21,"firstName":"Stanislas","surName":"Eyes","sex":"Male","age":30,"isVegetarian":true,"langCount":7},
    {"id":22,"firstName":"Bo","surName":"Burdass","sex":"Male","age":29,"isVegetarian":true,"langCount":13},
    {"id":23,"firstName":"Celestyn","surName":"Tumpane","sex":"Female","age":22,"isVegetarian":false,"langCount":9},
    {"id":24,"firstName":"Henka","surName":"Moffett","sex":"Female","age":26,"isVegetarian":false,"langCount":13},
    {"id":25,"firstName":"Dacy","surName":"Durdy","sex":"Female","age":31,"isVegetarian":true,"langCount":15},
    {"id":26,"firstName":"Blaire","surName":"Filinkov","sex":"Female","age":39,"isVegetarian":true,"langCount":10},
    {"id":27,"firstName":"Ingamar","surName":"Lemarie","sex":"Male","age":50,"isVegetarian":false,"langCount":3},
    {"id":28,"firstName":"Cart","surName":"Kellock","sex":"Male","age":24,"isVegetarian":false,"langCount":3},
    {"id":29,"firstName":"Gabbi","surName":"Lumby","sex":"Female","age":24,"isVegetarian":false,"langCount":9},
    {"id":30,"firstName":"Rica","surName":"McElhinney","sex":"Female","age":31,"isVegetarian":false,"langCount":14},
    {"id":31,"firstName":"Lorin","surName":"Edmundson","sex":"Male","age":27,"isVegetarian":true,"langCount":13},
    {"id":32,"firstName":"Maggy","surName":"Chetwynd","sex":"Female","age":34,"isVegetarian":false,"langCount":15},
    {"id":33,"firstName":"Gabi","surName":"Kerman","sex":"Female","age":41,"isVegetarian":true,"langCount":11},
    {"id":34,"firstName":"Tammy","surName":"Kimblen","sex":"Male","age":31,"isVegetarian":true,"langCount":12},
    {"id":35,"firstName":"Alister","surName":"Leighton","sex":"Male","age":47,"isVegetarian":false,"langCount":2},
    {"id":36,"firstName":"Hammad","surName":"D'Hooge","sex":"Male","age":21,"isVegetarian":false,"langCount":6},
    {"id":37,"firstName":"Rudiger","surName":"Giorgielli","sex":"Male","age":28,"isVegetarian":true,"langCount":13},
    {"id":38,"firstName":"Natty","surName":"Duester","sex":"Female","age":19,"isVegetarian":false,"langCount":13},
    {"id":39,"firstName":"Elianora","surName":"Gilroy","sex":"Female","age":33,"isVegetarian":false,"langCount":9},
    {"id":40,"firstName":"Katharina","surName":"Iron","sex":"Female","age":36,"isVegetarian":false,"langCount":8},
    {"id":41,"firstName":"Emmaline","surName":"Gregorio","sex":"Female","age":23,"isVegetarian":true,"langCount":3},
    {"id":42,"firstName":"Deane","surName":"Mulholland","sex":"Male","age":28,"isVegetarian":false,"langCount":9},
    {"id":43,"firstName":"Denver","surName":"Cubitt","sex":"Male","age":22,"isVegetarian":true,"langCount":6},
    {"id":44,"firstName":"Ali","surName":"Lippett","sex":"Male","age":34,"isVegetarian":true,"langCount":8},
    {"id":45,"firstName":"Orson","surName":"Fattori","sex":"Male","age":40,"isVegetarian":false,"langCount":12},
    {"id":46,"firstName":"Curcio","surName":"McGlaughn","sex":"Male","age":42,"isVegetarian":true,"langCount":2},
    {"id":47,"firstName":"Art","surName":"Thwaites","sex":"Male","age":21,"isVegetarian":true,"langCount":12},
    {"id":48,"firstName":"Carlyn","surName":"Hagston","sex":"Female","age":21,"isVegetarian":false,"langCount":10},
    {"id":49,"firstName":"Cassey","surName":"Brocks","sex":"Female","age":24,"isVegetarian":false,"langCount":3},
    {"id":50,"firstName":"Tommie","surName":"Matuszkiewicz","sex":"Female","age":33,"isVegetarian":false,"langCount":14},
    {"id":51,"firstName":"Trey","surName":"Cunnow","sex":"Male","age":38,"isVegetarian":false,"langCount":7},
    {"id":52,"firstName":"Terri-jo","surName":"Balnave","sex":"Female","age":39,"isVegetarian":false,"langCount":6},
    {"id":53,"firstName":"Brit","surName":"Stitson","sex":"Female","age":50,"isVegetarian":false,"langCount":6},
    {"id":54,"firstName":"Esme","surName":"Hanhardt","sex":"Female","age":50,"isVegetarian":true,"langCount":7},
    {"id":55,"firstName":"Cody","surName":"Follin","sex":"Female","age":19,"isVegetarian":false,"langCount":5},
    {"id":56,"firstName":"Toma","surName":"Ower","sex":"Female","age":50,"isVegetarian":true,"langCount":6},
    {"id":57,"firstName":"Robert","surName":"Briatt","sex":"Male","age":25,"isVegetarian":false,"langCount":9},
    {"id":58,"firstName":"Joachim","surName":"Affuso","sex":"Male","age":44,"isVegetarian":false,"langCount":13},
    {"id":59,"firstName":"Batholomew","surName":"Woodburn","sex":"Male","age":33,"isVegetarian":true,"langCount":8},
    {"id":60,"firstName":"Ingra","surName":"Pinwill","sex":"Male","age":43,"isVegetarian":false,"langCount":2},
    {"id":61,"firstName":"Coletta","surName":"Cullivan","sex":"Female","age":42,"isVegetarian":true,"langCount":13},
    {"id":62,"firstName":"Arabelle","surName":"Checketts","sex":"Female","age":26,"isVegetarian":false,"langCount":1},
    {"id":63,"firstName":"Toma","surName":"Macbane","sex":"Female","age":19,"isVegetarian":false,"langCount":1},
    {"id":64,"firstName":"Celina","surName":"Brimham","sex":"Female","age":49,"isVegetarian":false,"langCount":12},
    {"id":65,"firstName":"Elvis","surName":"Attarge","sex":"Male","age":42,"isVegetarian":false,"langCount":7},
    {"id":66,"firstName":"Elisabeth","surName":"Reubens","sex":"Female","age":26,"isVegetarian":false,"langCount":12},
    {"id":67,"firstName":"Alfy","surName":"Habeshaw","sex":"Male","age":33,"isVegetarian":false,"langCount":15},
    {"id":68,"firstName":"Salomon","surName":"Kruschev","sex":"Male","age":36,"isVegetarian":false,"langCount":13},
    {"id":69,"firstName":"Aloise","surName":"Toulmin","sex":"Female","age":26,"isVegetarian":false,"langCount":9},
    {"id":70,"firstName":"Daren","surName":"Gallanders","sex":"Male","age":32,"isVegetarian":false,"langCount":13},
    {"id":71,"firstName":"Fulvia","surName":"Corder","sex":"Female","age":28,"isVegetarian":true,"langCount":4},
    {"id":72,"firstName":"Beulah","surName":"Edleston","sex":"Female","age":30,"isVegetarian":true,"langCount":14},
    {"id":73,"firstName":"Joanna","surName":"Florez","sex":"Female","age":43,"isVegetarian":true,"langCount":8},
    {"id":74,"firstName":"Tarrah","surName":"McGillivray","sex":"Female","age":41,"isVegetarian":true,"langCount":5},
    {"id":75,"firstName":"Igor","surName":"Koppens","sex":"Male","age":48,"isVegetarian":false,"langCount":8},
    {"id":76,"firstName":"Pennie","surName":"Mitford","sex":"Male","age":40,"isVegetarian":false,"langCount":7},
    {"id":77,"firstName":"Devonne","surName":"Livermore","sex":"Female","age":22,"isVegetarian":false,"langCount":9},
    {"id":78,"firstName":"Anett","surName":"Divver","sex":"Female","age":30,"isVegetarian":true,"langCount":6},
    {"id":79,"firstName":"Melisent","surName":"Inns","sex":"Female","age":26,"isVegetarian":false,"langCount":6},
    {"id":80,"firstName":"Ardella","surName":"Gilbank","sex":"Female","age":42,"isVegetarian":false,"langCount":1},
    {"id":81,"firstName":"Bink","surName":"Clemenzo","sex":"Male","age":43,"isVegetarian":true,"langCount":7},
    {"id":82,"firstName":"Zachery","surName":"Ritchie","sex":"Male","age":31,"isVegetarian":true,"langCount":10},
    {"id":83,"firstName":"Mair","surName":"Stachini","sex":"Female","age":29,"isVegetarian":true,"langCount":9},
    {"id":84,"firstName":"Brenn","surName":"Begg","sex":"Female","age":25,"isVegetarian":true,"langCount":14},
    {"id":85,"firstName":"Sarita","surName":"Mathieu","sex":"Female","age":35,"isVegetarian":true,"langCount":9},
    {"id":86,"firstName":"Yorker","surName":"Franzke","sex":"Male","age":49,"isVegetarian":false,"langCount":15},
    {"id":87,"firstName":"Lilia","surName":"Doggerell","sex":"Female","age":50,"isVegetarian":false,"langCount":15},
    {"id":88,"firstName":"Anny","surName":"Ikringill","sex":"Female","age":47,"isVegetarian":false,"langCount":6},
    {"id":89,"firstName":"Moises","surName":"Macro","sex":"Male","age":43,"isVegetarian":true,"langCount":7},
    {"id":90,"firstName":"Renard","surName":"Saberton","sex":"Male","age":19,"isVegetarian":false,"langCount":8},
    {"id":91,"firstName":"Frasco","surName":"Suche","sex":"Male","age":18,"isVegetarian":false,"langCount":8},
    {"id":92,"firstName":"Laverna","surName":"MacKeeg","sex":"Female","age":43,"isVegetarian":true,"langCount":6},
    {"id":93,"firstName":"Merill","surName":"Le Grice","sex":"Male","age":22,"isVegetarian":false,"langCount":1},
    {"id":94,"firstName":"Jacob","surName":"Habble","sex":"Male","age":32,"isVegetarian":true,"langCount":3},
    {"id":95,"firstName":"Shalna","surName":"Shaudfurth","sex":"Female","age":47,"isVegetarian":false,"langCount":10},
    {"id":96,"firstName":"Cassie","surName":"Romer","sex":"Female","age":25,"isVegetarian":true,"langCount":3},
    {"id":97,"firstName":"Sherman","surName":"Oventon","sex":"Male","age":43,"isVegetarian":true,"langCount":11},
    {"id":98,"firstName":"Tymon","surName":"Ramiro","sex":"Male","age":23,"isVegetarian":true,"langCount":9},
    {"id":99,"firstName":"Zackariah","surName":"Kinny","sex":"Male","age":40,"isVegetarian":true,"langCount":12},
    {"id":100,"firstName":"Dorothy","surName":"Cowin","sex":"Female","age":34,"isVegetarian":false,"langCount":8}]

    localStorage.setItem('list', JSON.stringify(zxc));
    const liststr = localStorage.getItem('list');
    const list = JSON.parse(liststr);
    let sum = 0;
    let maxlang = list[0].langCount;
    let cmale = 0;
    let cfemale = 0;
    list.forEach((item) => {
        sum += item.age;
        if (item.langCount > maxlang) {
            maxlang = item.langCount;
        }
        if (item.sex === "Male") {
            cmale++;
        } else {
            cfemale++;
        }
    })
    let avg = Math.floor(sum/list.length);
    console.log(`avg age: ${avg}`);
    console.log(`max languages: ${maxlang}`);
    console.log(`male: ${cmale}, female: ${cfemale}`);

    function validation()
    {
        let EU = ["Austria", "Belgium", "Bulgaria", "Croatia", "Republic of Cyprus", "Czech Republic", "Denmark",
            "Estonia", "Finland", "France", "Germany", "Greece", "Hungary", "Ireland", "Italy", "Latvia", "Lithuania",
            "Luxembourg", "Malta", "Netherlands",
            "Poland", "Portugal", "Romania", "Slovakia", "Slovenia", "Spain", "Sweden"];
        t = data.value;
        if (t.length > 3) {
            if (EU.find(i => i === t) != undefined) {
                alert("Passed");
                return;
            }
        }
        alert("Error");
    }

</script>
</body>
</html>