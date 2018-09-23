let i = 1;


document.getElementById("add-product").addEventListener("click", function() {
    document.getElementById("add-name-product-form").submit();
});


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

    let nameComponent = document.getElementById("comp1");
    let valueComponent = document.getElementById("val1");

    if (nameComponent.value.length > 0 && valueComponent.value.length > 0) {
        document.getElementById("add-component-form").submit();
        nameComponent.value = "";
        valueComponent.value = "";
    }
    else {
        alert("Un champ manque");
    }
});
