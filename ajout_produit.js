let i = 3;

document.getElementById("add-component").addEventListener("click", function() {
    i++;

    let parentFieldset = document.getElementById("component-fieldset");
    let newInputName = document.createElement("input");
    let newInputValue = document.createElement("input");
    let newBR = document.createElement("br")

    newInputName.placeholder = "Composant " + i;
    newInputName.id = "comp" + i;
    newInputName.name = "comp" + i;
    newInputValue.placeholder = "Valeur";
    newInputValue.id = "val" + i;
    newInputValue.name = "val" + i;
    

    parentFieldset.appendChild(newInputName);
    parentFieldset.appendChild(newInputValue);
    parentFieldset.appendChild(newBR);
});
