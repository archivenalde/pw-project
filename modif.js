document.getElementById("change-name").addEventListener("click", function() {
    document.getElementById("name").disabled = false;
});

let nb = document.getElementById("nb-comp").value;

for(let i = 1; i <= nb; i++)
{
    document.getElementById("alter-comp-"+i).addEventListener("click", function() {
        document.getElementById("comp-name-"+i).disabled = false;
        document.getElementById("comp-value-"+i).disabled = false;
    });
}
