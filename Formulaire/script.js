const button = document.querySelector("#addPeople")
var peopleMb = 2
button.addEventListener("click",function() {
    if (peopleMb < 4) {
    let div = document.createElement("div")
    div.innerHTML = ` 
    <h2> Personne ` + peopleMb + ` </h2>
    <div class="input-element">
        <label for="">Nom</label>
        <input type="text">
        <br><br>
    </div>
    <div class="input-element">
        <label for="">Prénom</label>
        <input type="text">
        <br><br>
    </div>
    <div class="input-element">
        <label for="">Adresse</label>
        <input type="text">
        <br><br>
    </div>
    <div class="input-element">
        <label for="">Téléphone</label>
        <input type="text">
        <br><br>
    </div>
    <div class="input-element">
        <label for="">Adresse électronique</label>
        <input type="text">
        <br><br>
    </div>
    `
    button.insertAdjacentElement("beforebegin",div)
    peopleMb++
    }
    else {
        alert("3 personnes maximum")
    }
})
