document.getElementById("add-component").addEventListener("click", function() {
    // i++;

    // let parentFieldset = document.getElementById("component-fieldset");
    // let newInputName = document.createElement("input");
    // let newInputValue = document.createElement("input");
    // let newBR = document.createElement("br");

    // newInputName.placeholder = "Composant " + i;
    // newInputName.id = "comp" + i;
    // newInputName.name = "comp" + i;
    // newInputValue.placeholder = "Valeur";
    // newInputValue.id = "val" + i;
    // newInputValue.name = "val" + i;
    

    // parentFieldset.appendChild(newInputName);
    // parentFieldset.appendChild(newInputValue);
    // parentFieldset.appendChild(newBR);
    console.log("coucou")

    let nameComponent = document.getElementById("comp");
    let valueComponent = document.getElementById("val");

    if (nameComponent.value.length > 0 && valueComponent.value.length > 0) {
        nameComponent.value = "";
        valueComponent.value = "";
    }
    else {
        alert("Un champ manque");
    }
});
